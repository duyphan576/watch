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

Route::get('/', function () {
    return view('main/index');
});

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

Route::get('/admin/dashboard', function () {
    return view('admin/index');
});

Route::get('/admin/404', function () {
    return view('admin/404');
});

Route::get('/admin/blank', function () {
    return view('admin/blank');
});

Route::get('/admin/button', function () {
    return view('admin/button');
});

Route::get('/admin/chart', function () {
    return view('admin/chart');
});

Route::get('/admin/element', function () {
    return view('admin/element');
});

Route::get('/admin/form', function () {
    return view('admin/form');
});

Route::get('/admin/signin', function () {
    return view('admin/signin');
});

Route::get('/admin/signup', function () {
    return view('admin/signup');
});

Route::get('/admin/table', function () {
    return view('admin/table');
});

Route::get('/admin/typography', function () {
    return view('admin/typography');
});

Route::get('/admin/widget', function () {
    return view('admin/widget');
});

