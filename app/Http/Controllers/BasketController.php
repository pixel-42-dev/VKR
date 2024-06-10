<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

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
        return view('checkout', compact('order'));
    }

    public function confirm(Request $request)
    {
        $orderID = session('orderID');
        if (is_null($orderID)) {
            return redirect()->route('index');
        }
        $order = Order::findOrFail($orderID);
        $order->saveOrder(666); // todo: нужно будет передать id пользователя

        session()->forget('orderID');

        return redirect()->route('order-details');
    }

    public function basketAdd($productId, Request $request)
    {
        $orderID = session('orderID'); // Получаем заказ из сессии

        if (is_null($orderID)) { // Если заказа нет, то создаём...
            $order = Order::create(); // создаём заказ
            session(['orderID' => $order->id]); // Кладём id заказа в сессию
        } else {
            $order = Order::find($orderID); // Иначе просто находим заказ
        }

        $order->products()->attach($productId); // Добавляем в заказ продукт

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
