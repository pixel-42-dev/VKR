<?php

namespace App\Http\Controllers;

use App\Order;
use App\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{


    public function cart() {
        $orderID = session('orderID');
        if (is_null($orderID)) {
            return redirect()->route('index');
        }
        $order = Order::findOrFail($orderID);
        return view('cart', compact('order'));
    }

    public function checkout() {
        $orderID = session('orderID');
        if (!is_null($orderID)) {
            $order = Order::findOrFail($orderID);
        }

        if ($order->calculatePrice() < 1000) {
            return redirect()->back()->with('error', 'Минимальная сумма заказа составляет 1000 рублей.');
        }

        return view('checkout', compact('order'));
    }

    public function confirm(Request $request)
    {
        $orderID = session('orderID');

        if (is_null($orderID)) {
            return redirect()->route('index');
        }

        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
        ]);

        $userData = [
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
        ];

        if (Auth::check()) {
            $userID = Auth::id();
        } else {
            $userID = 0; // 0 для незарегистрированных пользователей
        }

        // Update the order with user data
        $order = Order::findOrFail($orderID);
        $order->saveOrder($userID, $userData['name'], $userData['phone'], $userData['address']);

        $sizes = session('sizes', []);
        foreach ($sizes as $productId => $size) {
            $sizeRecord = Size::where('clothes_id', $productId)
                ->where('clothes_size', $size)
                ->first();

            if ($sizeRecord && $sizeRecord->count > 0) {
                $sizeRecord->count--;
                $sizeRecord->save();
            }
        }

        session()->forget('orderID');
        session()->forget('sizes');

        // Redirect to order details page
        if (Auth::check()) {
            return redirect()->route('order-details', ['id' => $orderID]);
        }
        return redirect()->route('index');
    }


    public function basketAdd($productId, Request $request)
    {
        if (!$request->has('size')) {
            return redirect()->back()->with('error', 'Пожалуйста, выберите размер');
        }

        $orderID = session('orderID'); // Получаем заказ из сессии

        if (is_null($orderID)) { // Если заказа нет, то создаём...
            $order = Order::create(); // создаём заказ
            session(['orderID' => $order->id]); // Кладём id заказа в сессию
        } else {
            $order = Order::find($orderID); // Иначе просто находим заказ
        }

        $size = $request->input('size');

        $sizesInSession = session()->get('sizes', []);  // Получаем или инициализируем массив размеров в сессии
        $sizesInSession[$productId] = $size;    // Добавляем новый размер в массив
        session()->put('sizes', $sizesInSession);   // Сохраняем обновлённый массив размеров в сессию

        $order->products()->attach($productId, ['size' => $size]); // Добавляем в заказ продукт

        // После успешного добавления товара в корзину редиректим пользователя
        return redirect()->back();
    }
    public function basketRemove($productId, Request $request)
    {
        $orderID = session('orderID');
        if (is_null($orderID)) {
            return false;
        }

        $order = Order::findOrFail($orderID);
        $order->products()->detach($productId);

        return view('cart', compact('order'));
    }
}
