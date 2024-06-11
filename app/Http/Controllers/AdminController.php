<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        $orders = Order::all()->where('status', 1);
        return view('admin/order', compact('orders'));
    }
}
