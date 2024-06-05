<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/order-details', function () {
    return view('account-order-details');
});
Route::get('/settings', function () {
    return view('account-settings');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/listing', function () {
    return view('listing');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/product', function () {
    return view('product');
});
