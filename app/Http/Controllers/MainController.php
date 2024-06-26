<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\Product;
use App\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
        $trendingProducts = Product::where('trend', 1)->take(4)->get();
        return view('index')->with('trendingProducts', $trendingProducts);
    }

    public function about() {
        return view('about');
    }

    public function faq() {
        return view('faq');
    }

    public function orderDetails($orderID)
    {
        $order = Order::with(['products' => function ($query) {
            $query->withTrashed(); // Включаем удаленные товары
        }])->find($orderID);

        return view('account-order-details', compact('order'));
    }


    public function settings($page)
    {
        // Получаем все заказы пользователя, включая удалённые товары
        $orders = Order::with(['products' => function ($query) {
            $query->withTrashed(); // Включаем удалённые товары
        }])
            ->where('userID', Auth::id())
            ->get();

        return view('account-settings', compact('orders', 'page'));
    }


    public function contact() {
        return view('contact');
    }
    public function login() {
        return view('login');
    }

    public function product($number) {
        $product = Product::where('id', $number)->first();

        // Проверяем, добавлен ли продукт в корзину пользователя
        $isInCart = false;
        $orderID = session('orderID');
        if (!is_null($orderID)) {
            $order = Order::find($orderID);
            if ($order && $order->products()->where('products.id', $product->id)->exists()) {
                $isInCart = true;
            }
        }

        $sizes = DB::table('sizes')
            ->where('clothes_id', $product->id)
            ->get();

        return view('product', compact('product', 'isInCart', 'sizes'));
    }

    public function listing(Request $request, $gender) {

        // Выборка категорий в зависимости от пола
        if ($gender == 'men') {
            $categoryObjects1 = Category::where('code', 1)->where('forMen', 1)->get();
            $categoryObjects2 = Category::where('code', 2)->where('forMen', 1)->get();
            $categoryObjects3 = Category::where('code', 3)->where('forMen', 1)->get();
            $productsQuery = Product::with('brand')->whereHas('category', function ($query) {
                $query->where('forMen', 1);
            });
        } else if ($gender == 'women') {
            $categoryObjects1 = Category::where('code', 1)->where('forMen', 0)->get();
            $categoryObjects2 = Category::where('code', 2)->where('forMen', 0)->get();
            $categoryObjects3 = Category::where('code', 3)->where('forMen', 0)->get();
            $productsQuery = Product::with('brand')->whereHas('category', function ($query) {
                $query->where('forMen', 0);
            });
        } else if ($gender == 'all') {
            $categoryObjects1 = Category::where('code', 1)->get();
            $categoryObjects2 = Category::where('code', 2)->get();
            $categoryObjects3 = Category::where('code', 3)->get();
            $productsQuery = Product::with('brand');
        } else {
            dd('Такой пол не существует');
        }

        // Фильтр по наличию на складе
        $productsQuery->whereHas('sizes', function($query) {
            $query->where('count', '>', 0);
        });

        // Применяем фильтры по размеру
        if ($request->has('sizes')) {
            $sizes = $request->input('sizes');
            $productsQuery->whereHas('sizes', function($query) use ($sizes) {
                $query->whereIn('clothes_size', $sizes)
                    ->where('count', '>', 0);
            });
        }

        // Применяем фильтры по цене
        if ($request->has('Range_Slider')) {
            list($priceFrom, $priceTo) = explode(';', $request->input('Range_Slider'));
            $productsQuery->whereBetween('price', [(int)$priceFrom, (int)$priceTo]);
        }

        // Применяем сортировку
        if ($request->has('sort')) {
            switch ($request->input('sort')) {
                case 'price_asc':
                    $productsQuery->orderBy('price', 'asc');
                    break;
                case 'price_desc':
                    $productsQuery->orderBy('price', 'desc');
                    break;
                case 'alphabetical':
                    $productsQuery->orderBy('name', 'asc');
                    break;
                case 'newest':
                default:
                    $productsQuery->orderBy('created_at', 'desc');
                    break;
            }
        } else {
            // По умолчанию сортируем по новизне
            $productsQuery->orderBy('created_at', 'desc');
        }

        // Пагинация
        $products = $productsQuery->paginate(15);

        // Перевод пола на русский
        if ($gender == 'men') {
            $genderToRussian = "Мужская одежда";
        } elseif ($gender == 'women') {
            $genderToRussian = "Женская одежда";
        } else {
            $genderToRussian = "Вся одежда";
        }

        $categoryCode = 0;

        return view('listing', compact(
            'categoryObjects1', 'categoryObjects2', 'categoryObjects3',
            'products', 'gender', 'genderToRussian', 'categoryCode'
        ));
    }





    public function listingCategory(Request $request, $gender, $categoryNumber) {

        // Получаем код категории
        $categoryCode = Category::select('code')->where('id', $categoryNumber)->first()->code;

        // Выборка категорий в зависимости от пола
        if ($gender == 'men') {
            $categoryObjects1 = Category::where('code', 1)->where('forMen', 1)->get();
            $categoryObjects2 = Category::where('code', 2)->where('forMen', 1)->get();
            $categoryObjects3 = Category::where('code', 3)->where('forMen', 1)->get();
        } else if ($gender == 'women') {
            $categoryObjects1 = Category::where('code', 1)->where('forMen', 0)->get();
            $categoryObjects2 = Category::where('code', 2)->where('forMen', 0)->get();
            $categoryObjects3 = Category::where('code', 3)->where('forMen', 0)->get();
        } else if ($gender == 'all') {
            $categoryObjects1 = Category::where('code', 1)->get();
            $categoryObjects2 = Category::where('code', 2)->get();
            $categoryObjects3 = Category::where('code', 3)->get();
        } else {
            dd('Такой пол не существует');
        }

        // Получаем название категории
        $categoryName = Category::where('id', $categoryNumber)->value('name');

        // Формируем запрос к продуктам с учетом фильтров
        $productsQuery = Product::with('brand')->where('categoryID', $categoryNumber);

        // Фильтр по наличию на складе
        $productsQuery->whereHas('sizes', function($query) {
            $query->where('count', '>', 0);
        });

        // Применяем фильтры по размеру
        if ($request->has('sizes')) {
            $sizes = $request->input('sizes');
            $productsQuery->whereHas('sizes', function($query) use ($sizes) {
                $query->whereIn('clothes_size', $sizes)
                    ->where('count', '>', 0);
            });
        }

        // Применяем фильтры по цене
        if ($request->has('Range_Slider')) {
            list($priceFrom, $priceTo) = explode(';', $request->input('Range_Slider'));
            $productsQuery->whereBetween('price', [(int)$priceFrom, (int)$priceTo]);
        }

        // Применяем сортировку
        if ($request->has('sort')) {
            switch ($request->input('sort')) {
                case 'price_asc':
                    $productsQuery->orderBy('price', 'asc');
                    break;
                case 'price_desc':
                    $productsQuery->orderBy('price', 'desc');
                    break;
                case 'alphabetical':
                    $productsQuery->orderBy('name', 'asc');
                    break;
                case 'newest':
                default:
                    $productsQuery->orderBy('created_at', 'desc');
                    break;
            }
        } else {
            // По умолчанию сортируем по новизне
            $productsQuery->orderBy('created_at', 'desc');
        }

        // Пагинация
        $products = $productsQuery->paginate(15);

        // Перевод пола на русский
        $genderToRussian = $gender == 'men' ? "Мужская одежда" : "Женская одежда";

        return view('listing', compact(
            'categoryObjects1', 'categoryObjects2', 'categoryObjects3',
            'products', 'categoryName', 'gender',
            'genderToRussian', 'categoryCode', 'categoryNumber'
        ));
    }





    public function favoritesAdd(Request $request)
    {
        $productId = $request->input('product_id');

        $user = Auth::user();
        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // Находим продукт по его ID
        $product = Product::find($productId);

        // Проверяем, что продукт существует
        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        // Проверяем, не добавлен ли уже продукт в избранное пользователем
        if ($user->favorites()->where('product_id', $productId)->exists()) {
            return response()->json(['error' => 'Product already added to favorites'], 400);
        }

        // Добавляем продукт в избранное пользователя
        $user->favorites()->attach($productId);

        return response()->json(['success' => 'Product added to favorites']);

        return response()->json(['success' => 'Product added to favorites']);
    }
    public function favoritesRemove(Request $request)
    {
        dd($request->all());
    }
    public function toggleFavorite(Request $request)
    {
        $productId = $request->input('product_id');
        $user = Auth::user();

        // Проверяем, есть ли товар уже в избранном у пользователя
        if ($user->favorites->contains($productId)) {
            // Удаляем товар из избранного
            $user->favorites()->detach($productId);
            return response()->json(['success' => 'Product removed from favorites']);
        } else {
            // Добавляем товар в избранное
            $user->favorites()->attach($productId);
            return response()->json(['success' => 'Product added to favorites']);
        }
    }

    public function removeFavorite(Request $request)
    {
        $productId = $request->input('product_id');
        Auth::user()->favorites()->detach($productId);
        return redirect()->route('settings', ['page' => 2]);
    }
    public function clearFavorites()
    {
        Auth::user()->favorites()->detach();
        return redirect()->route('settings', ['page' => 2]);
    }

    public function deleteOrder(Order $order)
    {
        if (Auth::id() == $order->userID) {
            if (in_array($order->status, [1, 2])) {
                // Получаем список продуктов и их размеров по orderID
                $orderProducts = \App\OrderProduct::where('orderID', $order->id)->get();

                // Список продуктов и их размеров в $orderProducts
                foreach ($orderProducts as $orderProduct) {
                    $productID = $orderProduct->productID;
                    $size = $orderProduct->size;

                    // Логика по увеличению количества продуктов в таблице sizes
                    $sizeRecord = Size::where('clothes_id', $productID)
                        ->where('clothes_size', $size)
                        ->first();

                    if ($sizeRecord) {
                        $sizeRecord->count++;
                        $sizeRecord->save();
                    }
                }

                $order->delete();

                // Устанавливаем успешное сообщение об отмене заказа
                session()->flash('success', 'Заказ успешно отменен.');
            } else {
                // Устанавливаем сообщение о невозможности отмены заказа
                session()->flash('error', 'Заказ не может быть отменен.');
            }
        } else {
            // Устанавливаем сообщение о невозможности отмены заказа
            session()->flash('error', 'У вас нет прав для отмены этого заказа.');
        }

        return redirect()->route('settings', ['page' => 1]);
    }


    public function listingFull($parameters)
    {
        $title = '';

        switch ($parameters) {
            case 'clothes-trend':
                $products = Product::whereHas('category', function ($query) {
                    $query->where('code', 1); // Одежда
                })->where('trend', 1)
                    ->whereHas('sizes', function($query) {
                        $query->where('count', '>', 0);
                    })->paginate(15);
                $title = "Одежда в тренде";
                break;
            case 'clothes-new':
                $products = Product::whereHas('category', function ($query) {
                    $query->where('code', 1); // Одежда
                })->where('created_at', '>', \Carbon\Carbon::now()->subDays(10))
                    ->whereHas('sizes', function($query) {
                        $query->where('count', '>', 0);
                    })->paginate(15);
                $title = "Новая одежда";
                break;
            case 'shoes-trend':
                $products = Product::whereHas('category', function ($query) {
                    $query->where('code', 2); // Обувь
                })->where('trend', 1)
                    ->whereHas('sizes', function($query) {
                        $query->where('count', '>', 0);
                    })->paginate(15);
                $title = "Обувь в тренде";
                break;
            case 'shoes-new':
                $products = Product::whereHas('category', function ($query) {
                    $query->where('code', 2); // Обувь
                })->where('created_at', '>', \Carbon\Carbon::now()->subDays(10))
                    ->whereHas('sizes', function($query) {
                        $query->where('count', '>', 0);
                    })->paginate(15);
                $title = "Новая обувь";
                break;
            case 'accessories-trend':
                $products = Product::whereHas('category', function ($query) {
                    $query->where('code', 3); // Аксессуары
                })->where('trend', 1)
                    ->whereHas('sizes', function($query) {
                        $query->where('count', '>', 0);
                    })->paginate(15);
                $title = "Аксессуары в тренде";
                break;
            case 'accessories-new':
                $products = Product::whereHas('category', function ($query) {
                    $query->where('code', 3); // Аксессуары
                })->where('created_at', '>', \Carbon\Carbon::now()->subDays(10))
                    ->whereHas('sizes', function($query) {
                        $query->where('count', '>', 0);
                    })->paginate(15);
                $title = "Новые аксессуары";
                break;
            case 'search':
                $query = request('query');
                $products = Product::where('name', 'like', "%{$query}%")
                    ->orWhere('description', 'like', "%{$query}%")
                    ->whereHas('sizes', function($query) {
                        $query->where('count', '>', 0);
                    })->paginate(15);

                if ($products->isEmpty()) {
                    $title = "Товаров не найдено";
                } else {
                    $title = "Результаты поиска";
                }
                break;
            default:
                dd('Неизвестный параметр: ' . $parameters);
        }

        return view('listing-2', compact('products', 'title'));
    }





}
