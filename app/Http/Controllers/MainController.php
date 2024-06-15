<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index() {
        return view('index');
    }

    public function about() {
        return view('about');
    }

    public function orderDetails($orderID) {
        $order = Order::find($orderID);
        return view('account-order-details', compact('order'));
    }


    public function settings()
    {
        $orders = Order::where('userID', Auth::id())->get();

        return view('account-settings', compact('orders'));
    }

    public function contact() {
        return view('contact');
    }

    public function listing($gender) {
        if ($gender == 'men') {
            $categoryObjects1 = Category::where('code', 1)->where('forMen', 1)->get();
            $categoryObjects2 = Category::where('code', 2)->where('forMen', 1)->get();
            $categoryObjects3 = Category::where('code', 3)->where('forMen', 1)->get();
            $products = Product::with('brand')->whereHas('category', function ($query) {
                $query->where('forMen', 1);
            })->get();
        } else if ($gender == 'women') {
            $categoryObjects1 = Category::where('code', 1)->where('forMen', 0)->get();
            $categoryObjects2 = Category::where('code', 2)->where('forMen', 0)->get();
            $categoryObjects3 = Category::where('code', 3)->where('forMen', 0)->get();
            $products = Product::with('brand')->whereHas('category', function ($query) {
                $query->where('forMen', 0);
            })->get();
        } else if ($gender == 'all') {
            $categoryObjects1 = Category::where('code', 1)->get();
            $categoryObjects2 = Category::where('code', 2)->get();
            $categoryObjects3 = Category::where('code', 3)->get();
            $products = Product::all();
        } else {
            dd('Такой пол не существует');
        }

        if ($gender == 'men') {
            $genderToRussian = "Мужская одежда";
        } else {
            $genderToRussian = "Женская одежда";
        }


        return view('listing', compact('categoryObjects1', 'categoryObjects2', 'categoryObjects3', 'products', 'gender', 'genderToRussian'));
    }


    public function listingCategory($gender, $categoryNumber) {

        if ($gender == 'men') {
            $categoryObjects1 = Category::where('code', 1)->where('forMen', 1)->get();
            $categoryObjects2 = Category::where('code', 2)->where('forMen', 1)->get();
            $categoryObjects3 = Category::where('code', 3)->where('forMen', 1)->get();
        } else if ($gender == 'women') {
            $categoryObjects1 = Category::where('code', 1)->where('forMen', 0)->get();
            $categoryObjects2 = Category::where('code', 2)->where('forMen', 0)->get();
            $categoryObjects3 = Category::where('code', 3)->where('forMen', 0)->get();
        } else if ($gender == 'all') {
            $categoryObjects1 = Category::where('code', 1)->where('forMen', 0)->get();
            $categoryObjects2 = Category::where('code', 2)->where('forMen', 0)->get();
            $categoryObjects3 = Category::where('code', 3)->where('forMen', 0)->get();
        } else {
            dd('Такой пол не существует');
        }

        $categoryName = Category::where('id', $categoryNumber)->value('name');

        $products = Product::with('brand')->where('categoryID', $categoryNumber)->get();

        if ($gender == 'men') {
            $genderToRussian = "Мужская одежда";
        } else {
            $genderToRussian = "Женская одежда";
        }

        return view('listing', compact('categoryObjects1', 'categoryObjects2', 'categoryObjects3', 'products', 'categoryName', 'gender', 'genderToRussian'));
    }

    public function login() {
        return view('login');
    }

    public function product($number) {
        $product = Product::where('id', $number)->first();
        return view('product', compact('product'));
    }
}
