<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin($page)
    {
        if ($page == 'new') {
            $status = 1;
        } elseif ($page == 'confirmed') {
            $status = 2;
        } elseif ($page == 'sent') {
            $status = 3;
        } elseif ($page == 'delivered') {
            $status = 4;
        }

        dump($status);

        $orders = Order::all()->where('status', $status);
        return view('admin/orders/index', compact('orders'));
    }
}
