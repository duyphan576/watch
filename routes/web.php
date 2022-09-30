<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/index', function () {
    return view('main/index');
});

Route::get('/cart', function () {
    return view('main/cart');
});

Route::get('/categories', function () {
    return view('main/categories');
});

Route::get('/checkout', function () {
    return view('main/checkout');
});

Route::get('/contact', function () {
    return view('main/contact');
});

Route::get('/product', function () {
    return view('main/product');
});
