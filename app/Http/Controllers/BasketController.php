<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasketController extends Controller
{


    public function cart() {
        return view('cart');
    }

    public function checkout() {
        return view('checkout');
    }

    public function basketAdd($id, Request $request)
    {
//        // Найдите продукт по ID
//        $product = Product::findOrFail($id);
//
//        // Добавьте продукт в корзину (логика может варьироваться)
//        $basket = Basket::where('user_id', auth()->id())->first();
//        if (!$basket) {
//            $basket = new Basket();
//            $basket->user_id = auth()->id();
//            $basket->save();
//        }
//
//        // Пример добавления продукта в корзину
//        $basket->products()->attach($product);
//
//        // Перенаправление после добавления в корзину
//        return redirect()->back()->with('success', 'Продукт добавлен в корзину!');
    }
}
