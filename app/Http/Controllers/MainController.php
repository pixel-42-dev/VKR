<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
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
        $categoryObjects1 = Category::where('code', 1)->get();
        $categoryObjects2 = Category::where('code', 2)->get();
        $categoryObjects3 = Category::where('code', 3)->get();

        $products = Product::with('brand')->get(); // Загрузка бренда вместе с продуктами с помощью метода, добавленного в модель

        return view('listing', compact('categoryObjects1', 'categoryObjects2', 'categoryObjects3', 'products'));
    }

    public function listingCategory($categoryNumber) {
        $categoryObjects1 = Category::where('code', 1)->get();
        $categoryObjects2 = Category::where('code', 2)->get();
        $categoryObjects3 = Category::where('code', 3)->get();

        $categoryName = Category::where('id', $categoryNumber)->value('name');

        $products = Product::with('brand')->where('categoryID', $categoryNumber)->get();

        return view('listing', compact('categoryObjects1', 'categoryObjects2', 'categoryObjects3', 'products', 'categoryName'));
    }

    public function login() {
        return view('login');
    }

    public function product($number) {  // Получаем переданную переменную
        return view('product', ['name' => $number]);     // Можно добавить массив. Первый ключ - имя, по которому можно обращаться, второй - само значение
    }
}
