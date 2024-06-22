<?php

namespace App\Http\Controllers;

use App\Order;
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

        // Determine the userID to use
        if (Auth::check()) {
            $userID = Auth::id();
        } else {
            $userID = 0; // Use 0 to indicate unregistered user
        }

        // Update the order with user data
        $order = Order::findOrFail($orderID);
        $order->saveOrder($userID, $userData['name'], $userData['phone'], $userData['address']);

        // Clear the orderID from session
        session()->forget('orderID');

        // Redirect to order details page
        if (Auth::check()) {
            return redirect()->route('order-details', ['id' => $orderID]);
        }
        return redirect()->route('index');
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
