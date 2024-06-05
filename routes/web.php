<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/order-details', [MainController::class, 'orderDetails'])->name('order.details');
Route::get('/settings', [MainController::class, 'settings'])->name('settings');
Route::get('/cart', [MainController::class, 'cart'])->name('cart');
Route::get('/checkout', [MainController::class, 'checkout'])->name('checkout');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/listing', [MainController::class, 'listing'])->name('listing');
Route::get('/login', [MainController::class, 'login'])->name('login');
Route::get('/product/{number}', [MainController::class, 'product'])->name('product');   // number попадает в контроллер как переменная
