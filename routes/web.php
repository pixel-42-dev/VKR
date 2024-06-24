<?php

// php artisan route:list   -   все роуты
// php artisan migrate
// php artisan migrate:rollback
// php artisan migrate:refresh      -   перезалить миграции (легко внести изменения, но с потерей данных)
// php artisan make:migration create_products_table
// php artisan make:model Product
// php artisan make:model -m Categoty   -   создаёт сразу и модель и миграцию
// php artisan make:middleware checkIsAdmin - создаёт Middleware
// php artisan make:controller Admin/CategoryController --resource
// php artisan make:controller Admin/CategoryController --resource --model=Category

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// MainController
Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/order-details/{id}', [MainController::class, 'orderDetails'])->name('order-details');
    Route::get('/settings/{page}', [MainController::class, 'settings'])->name('settings');
    Route::post('/favorites/toggle', [MainController::class, 'toggleFavorite'])->name('favorites-toggle');
    Route::post('/favorites/remove', [MainController::class, 'removeFavorite'])->name('favorites-remove');
    Route::post('/favorites/clear', [MainController::class, 'clearFavorites'])->name('favorites-clear');
});
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/listing/{gender}', [MainController::class, 'listing'])->name('listing');
Route::get('/listing/{gender}/{categoryNumber}', [MainController::class, 'listingCategory'])->name('listingCategory');
Route::get('/login', [MainController::class, 'login'])->name('login');
Route::get('/product/{number}', [MainController::class, 'product'])->name('product');
Route::post('/favorites/add', [MainController::class, 'favoritesAdd'])->name('favorites-add');

// AuthController
Route::post('/login', [AuthController::class, 'login'])->name('loginPost');
Route::post('/register', [AuthController::class, 'register'])->name('registerPost');
Route::post('/logout', [AuthController::class, 'logout'])->name('logoutrPost');
Route::post('/account-update', [AuthController::class, 'update'])->name('account-update');

// BasketController
Route::post('/basket/add/{id}', [BasketController::class, 'basketAdd'])->name('basketAdd');
Route::post('/basket/confirm', [BasketController::class, 'confirm'])->name('basketConfirm');
Route::group(['middleware' => 'backet_not_empty'], function () {
    Route::get('/cart', [BasketController::class, 'cart'])->name('cart');
    Route::get('/checkout', [BasketController::class, 'checkout'])->name('checkout');
    Route::post('/basket/remove/{id}', [BasketController::class, 'basketRemove'])->name('basketRemove');
    Route::post('/addproduct/{product}', [AdminController::class, 'addPost'])->name('addPost');
});

// AdminController
Route::group(['middleware' => ['auth', 'is_admin']], function () {
    Route::get('/admin/{page}', [AdminController::class, 'admin'])->name('admin');
    Route::get('/order/confirm/{orderID}', [AdminController::class, 'confirm'])->name('order-confirm');
    Route::get('/addproduct/{product_id}', [AdminController::class, 'productsAdd'])->name('products-add');
});

// Admin\ResourceController
Route::group(['prefix' => 'admin-panel', 'middleware' => 'auth'], function () {
    Route::resource('categories', 'Admin\CategoryController');
    Route::resource('products', 'Admin\ProductController');
    Route::resource('orders', 'Admin\OrderController');
    Route::resource('users', 'Admin\UserController');
});
