<?php

namespace App\Providers;


use App\Category;
use Illuminate\Support\Facades\Auth;
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
        $category = Category::first(); // Получаем первую категорию. Вы можете использовать другой метод получения нужной категории.
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
            $view->with('categories', $categories)
                ->with('category', $category)
                ->with('nickname', $nickname);
        });
    }

}
