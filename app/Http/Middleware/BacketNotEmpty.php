<?php

namespace App\Http\Middleware;

use App\Order;
use Closure;

class BacketNotEmpty
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $orderID = session('orderID');

        if (!is_null($orderID)) {
            $order = Order::find($orderID);
            if ($order->products->count() == 0) {
                // Предупредить о том что корзина пуста
                return redirect()->route('index');
            }
        }
        return $next($request);
    }
}
