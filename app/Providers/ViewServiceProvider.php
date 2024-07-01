<?php

namespace App\Providers;

use App\Category;
use App\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (Schema::hasTable('categories')) {
            $category = Category::first();
            $categories1 = Category::where('code', 1)->get();
            $categories2 = Category::where('code', 2)->get();
            $categories3 = Category::where('code', 3)->get();

            $categories = [
                'categories1' => $categories1,
                'categories2' => $categories2,
                'categories3' => $categories3,
            ];

            View::composer('master.master', function($view) use ($categories, $category) {
                $nickname = Auth::check() ? Auth::user()->nickname : null; // Получаем ник, если пользователь авторизован

                $orderID = session('orderID');
                $orderCount = 0;
                if (!is_null($orderID)) {
                    $order = Order::find($orderID);
                    $orderCount = $order->products->count();
                }

                $view->with('categories', $categories)
                    ->with('category', $category)
                    ->with('nickname', $nickname)
                    ->with('orderCount', $orderCount); // Передаем количество товаров
            });
        }
    }
}
