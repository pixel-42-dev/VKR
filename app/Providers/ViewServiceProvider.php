<?php

namespace App\Providers;


use App\Categoty;
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
        $categories1 = Categoty::where('code', 1)->get();
        $categories2 = Categoty::where('code', 2)->get();
        $categories3 = Categoty::where('code', 3)->get();

        $categories = [
            'categories1' => $categories1,
            'categories2' => $categories2,
            'categories3' => $categories3,
        ];

        View::composer('master.master', function($view) use ($categories) {$view->with('categories', $categories);});
    }
}
