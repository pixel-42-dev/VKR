<?php

// php artisan migrate
// php artisan migrate:rollback
// php artisan migrate:refresh      -   перезалить миграции (легко внести изменения, но с потерей данных)
// php artisan make:migration create_products_table
// php artisan make:model Product
// php artisan make:model -m Categoty   -   создаёт сразу и модель и миграцию
// php artisan route:list   -   все роуты

use App\Http\Controllers\BasketController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

// MainController
Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/order-details', [MainController::class, 'orderDetails'])->name('order-details');
    Route::get('/settings', [MainController::class, 'settings'])->name('settings');
});
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/listing/{gender}', [MainController::class, 'listing'])->name('listing');
Route::get('/listing/{gender}/{categoryNumber}', [MainController::class, 'listingCategory'])->name('listingCategory');
Route::get('/login', [MainController::class, 'login'])->name('login');
Route::get('/product/{number}', [MainController::class, 'product'])->name('product');
Route::get('/admin', [MainController::class, 'admin'])->name('admin');

// AuthController
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('loginPost');
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('registerPost');
Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logoutrPost');

// BasketController
Route::get('/cart', [BasketController::class, 'cart'])->name('cart');
Route::get('/checkout', [BasketController::class, 'checkout'])->name('checkout');
Route::post('/basket/add/{id}', [BasketController::class, 'basketAdd'])->name('basketAdd');
Route::post('/basket/remove/{id}', [BasketController::class, 'basketRemove'])->name('basketRemove');
Route::post('/basket/confirm', [BasketController::class, 'confirm'])->name('basketConfirm');

