<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/catalog', function () {
    return view('catalog');
});
Route::get('/product', function () {
    return view('product');
});

Route::get('/cart', function () {
    return view('cart');
});
