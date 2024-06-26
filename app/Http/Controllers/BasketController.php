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

        if ($order->calculatePrice() + 200 < 1000) {
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
            'name' => 'required|string|min:2|max:32',
            'phone' => 'required|string|min:6|max:64',
            'address' => 'required|string|max:64',
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

        // Обновляем размеры
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

        if (Auth::check()) {
            return redirect()->route('order-details', ['id' => $orderID])->with('success', 'Заказ успешно оформлен.');
        }

        return redirect()->route('index')->with('success', 'Заказ успешно оформлен.');
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
