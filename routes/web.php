<?php

// php artisan migrate
// php artisan migrate:rollback
// php artisan migrate:refresh      -   перезалить миграции (легко внести изменения, но с потерей данных)
// php artisan make:migration create_products_table
// php artisan make:model Product
// php artisan make:model -m Categoty   -   создаёт сразу и модель и миграцию
// php artisan route:list   -   все роуты

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/order-details', [MainController::class, 'orderDetails'])->name('order.details');
Route::get('/settings', [MainController::class, 'settings'])->name('settings');
Route::get('/cart', [MainController::class, 'cart'])->name('cart');
Route::get('/checkout', [MainController::class, 'checkout'])->name('checkout');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/listing/{gender}', [MainController::class, 'listing'])->name('listing');
Route::get('/listing/{gender}/{categoryNumber}', [MainController::class, 'listingCategory'])->name('listingCategory');
Route::get('/login', [MainController::class, 'login'])->name('login');
Route::get('/product/{number}', [MainController::class, 'product'])->name('product');   // number попадает в контроллер как переменная
