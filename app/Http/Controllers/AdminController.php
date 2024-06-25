<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\Size;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin($page)
    {
        switch ($page) {
            case 'new':
                $status = 1;
                break;
            case 'confirmed':
                $status = 2;
                break;
            case 'sent':
                $status = 3;
                break;
            case 'delivered':
                $status = 4;
                break;
            default:
                abort(404);
        }

        $orders = Order::where('status', $status)->paginate(10); // Укажите нужное количество элементов на страницу
        return view('admin/orders/index', compact('orders', 'page'));
    }

    public function confirm($orderID, Request $request)
    {
        $order = Order::findOrFail($orderID);

        $order->status += 1;
        $order->save();

        $page = $request->query('page', 'new'); // Получаем параметр 'page' из запроса, по умолчанию 'new'
        return redirect()->route('admin', ['page' => $page]); // Перенаправление на соответствующую страницу
    }
    public function productsAdd($product_id)
    {
        $product = Product::findOrFail($product_id);
        $sizes = Size::where('clothes_id', $product_id)->get(); // Получаем все размеры для этого продукта

        return view('admin.products.add', compact('product', 'sizes'));
    }

    public function addPost(Request $request, $product_id)
    {
        // Валидация данных
        $request->validate([
            'sizes' => 'required|array', // Поле sizes должно быть массивом
            'sizes.*' => 'integer|min:0', // Каждое значение в массиве должно быть целым числом, не меньше 0
        ]);

        // Находим товар по его ID
        $product = Product::findOrFail($product_id);

        // Обновляем количество товаров каждого размера
        foreach ($request->sizes as $size_id => $quantity) {
            $size = Size::findOrFail($size_id);
            // Увеличиваем количество товаров заданного размера на указанное количество
            $size->increment('count', $quantity);
        }

        // Перенаправляем на страницу с продуктом или на другую нужную страницу
        return redirect()->route('products.index')->with('success', 'Поставки успешно сохранены!');
    }

}
