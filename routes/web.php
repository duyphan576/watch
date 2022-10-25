<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\Admin\Brand\BrandController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\Product\AddProductController;
use App\Http\Controllers\Admin\Product\EditProductController;

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
    return view('welcome');
});

Route::get('/shop/{strapID}', [ShopController::class, 'index']);

// Route::get('/admin', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('admin');

Route::get('/admin/signup', function() {
    return View('admin/staff/signup');
});

Route::get('/admin/signin', function() {
    return View('admin/staff/signin');
});

Route::get('/admin/brand', [BrandController::class, 'index']);

Route::get('/admin/product', [ProductController::class, 'index']);

Route::get('/admin/product/add', [AddProductController::class, 'index'])->name('addProduct');
Route::post('/admin/product/add', [AddProductController::class, 'store']);

Route::get('/admin/product/edit/{productID}', [EditProductController::class, 'index']);
Route::post('/admin/product/edit/', [EditProductController::class, 'update'])->name('editProduct');

Route::post('/admin/product/delete', [ProductController::class, 'delete'])->name('deleteProduct');

Route::get('/admin/dashboard', function() {
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
    return view('/admin/staff/signup');
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