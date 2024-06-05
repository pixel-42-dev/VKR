<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('index');
    }

    public function about() {
        return view('about');
    }

    public function orderDetails() {
        return view('account-order-details');
    }

    public function settings() {
        return view('account-settings');
    }

    public function cart() {
        return view('cart');
    }

    public function checkout() {
        return view('checkout');
    }

    public function contact() {
        return view('contact');
    }

    public function listing() {
        return view('listing');
    }

    public function login() {
        return view('login');
    }

    public function product($number) {  // Получаем переданную переменную
        return view('product', ['name' => $number]);     // Можно добавить массив. Первый ключ - имя, по которому можно обращаться, второй - само значение
    }
}
