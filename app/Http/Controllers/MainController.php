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
    public function index() {
        return view('index');
    }

    public function about() {
        return view('about');
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
        dump($request->all());

        if ($gender == 'men') {
            $categoryObjects1 = Category::where('code', 1)->where('forMen', 1)->get();
            $categoryObjects2 = Category::where('code', 2)->where('forMen', 1)->get();
            $categoryObjects3 = Category::where('code', 3)->where('forMen', 1)->get();
            $products = Product::with('brand')->whereHas('category', function ($query) {
                $query->where('forMen', 1);
            })->paginate();
        } else if ($gender == 'women') {
            $categoryObjects1 = Category::where('code', 1)->where('forMen', 0)->get();
            $categoryObjects2 = Category::where('code', 2)->where('forMen', 0)->get();
            $categoryObjects3 = Category::where('code', 3)->where('forMen', 0)->get();
            $products = Product::with('brand')->whereHas('category', function ($query) {
                $query->where('forMen', 0);
            })->paginate();
        } else if ($gender == 'all') {
            $categoryObjects1 = Category::where('code', 1)->get();
            $categoryObjects2 = Category::where('code', 2)->get();
            $categoryObjects3 = Category::where('code', 3)->get();
            $products = Product::paginate();
        } else {
            dd('Такой пол не существует');
        }

        if ($gender == 'men') {
            $genderToRussian = "Мужская одежда";
        } elseif ($gender == 'women') {
            $genderToRussian = "Женская одежда";
        } else {
            $genderToRussian = "Вся одежда";
        }

        $categoryCode = 0;
        return view('listing', compact('categoryObjects1', 'categoryObjects2', 'categoryObjects3', 'products', 'gender', 'genderToRussian', 'categoryCode'));
    }


    public function listingCategory(Request $request, $gender, $categoryNumber) {
//        dump($request->all());

        $categoryCode = Category::select('code')->where('id', $categoryNumber)->first()->code;

        if ($gender == 'men') {
            $categoryObjects1 = Category::where('code', 1)->where('forMen', 1)->get();
            $categoryObjects2 = Category::where('code', 2)->where('forMen', 1)->get();
            $categoryObjects3 = Category::where('code', 3)->where('forMen', 1)->get();
        } else if ($gender == 'women') {
            $categoryObjects1 = Category::where('code', 1)->where('forMen', 0)->get();
            $categoryObjects2 = Category::where('code', 2)->where('forMen', 0)->get();
            $categoryObjects3 = Category::where('code', 3)->where('forMen', 0)->get();
        } else if ($gender == 'all') {
            $categoryObjects1 = Category::where('code', 1);
            $categoryObjects2 = Category::where('code', 2);
            $categoryObjects3 = Category::where('code', 3);
        } else {
            dd('Такой пол не существует');
        }

        $categoryName = Category::where('id', $categoryNumber)->value('name');

        // Формируем запрос к продуктам с учетом фильтров
        $productsQuery = Product::with('brand')->where('categoryID', $categoryNumber);
        // Применяем фильтры по размеру
        if ($request->has('sizes')) {
            $sizes = $request->input('sizes');
            $productsQuery->whereIn('size', $sizes);
        }
        // Применяем фильтры по цене
        if ($request->has('Range_Slider')) {
            list($priceFrom, $priceTo) = explode(';', $request->input('Range_Slider'));
            $productsQuery->whereBetween('price', [(int)$priceFrom, (int)$priceTo]);
        }

        $products = $productsQuery->paginate(15);

        $genderToRussian = $gender == 'men' ? "Мужская одежда" : "Женская одежда";

        return view('listing', compact('categoryObjects1', 'categoryObjects2', 'categoryObjects3', 'products', 'categoryName', 'gender', 'genderToRussian', 'categoryCode', 'categoryNumber'));
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
        return redirect()->back();
    }
    public function clearFavorites()
    {
        Auth::user()->favorites()->detach();
        return redirect()->route('settings', ['page' => 2]);
    }

    public function deleteOrder(Order $order)
    {
        if (Auth::id() == $order->userID && in_array($order->status, [1, 2])) {
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
        }

        return redirect()->back();
    }

}
