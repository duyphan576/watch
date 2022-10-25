<?php

use Illuminate\Support\Facades\Route;
<<<<<<< Updated upstream

=======
use App\Http\Controllers\ShopController;
use App\Http\Controllers\Admin\Brand\BrandController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\Staff\StaffController;
use App\Http\Controllers\Admin\Staff\AddStaffController;
use App\Http\Controllers\Admin\Product\AddProductController;
use App\Http\Controllers\Admin\Product\EditProductController;
>>>>>>> Stashed changes
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
    return view('user/index');
});

Route::get('/index', function () {
    return view('user/index');
});

Route::get('/404', function () {
    return view('user/404');
});

Route::get('/basket', function () {
    return view('user/basket');
});

Route::get('/blog', function () {
    return view('user/blog');
});

Route::get('/category-full', function () {
    return view('user/category-full');
});

Route::get('/category-right', function () {
    return view('user/category-right');
});

Route::get('/category', function () {
    return view('user/category');
});

Route::get('/checkout1', function () {
    return view('user/checkout1');
});

Route::get('/checkout2', function () {
    return view('user/checkout2');
});

Route::get('/checkout3', function () {
    return view('user/checkout3');
});

Route::get('/checkout4', function () {
    return view('user/checkout4');
});

Route::get('/contact', function () {
    return view('user/contact');
});

<<<<<<< Updated upstream
Route::get('/customer-account', function () {
    return view('user/customer-account');
});
=======
Route::get('/admin/product', [ProductController::class, 'index']);

Route::get('/admin/product/add', [AddProductController::class, 'index'])->name('addProduct');
Route::post('/admin/product/add', [AddProductController::class, 'store']);

Route::get('/admin/product/edit/{productID}', [EditProductController::class, 'index'])->name('editProduct');
Route::post('/admin/product/edit/{productID}', [AddProductController::class, 'store']);

Route::get('/admin/staff', [StaffController::class, 'index']);
Route::get('/admin/staff/add', [AddStaffController::class, 'index'])->name('addStaff');
Route::post('/admin/admin/staff/signin', [AddStaffController::class, 'accountstaff']);

Route::get('/admin/staff/edit/{staffID}', [EditStaffController::class, 'index'])->name('editStaff');
Route::post('/admin/staff/edit/{staffID}', [AddStaffController::class, 'accountstaff']);
>>>>>>> Stashed changes

Route::get('/customer-orders', function () {
    return view('user/customer-orders');
});

Route::get('/customer-order', function () {
    return view('user/customer-order');
});

Route::get('/customer-wishlist', function () {
    return view('user/customer-wishlist');
});

Route::get('/detail', function () {
    return view('user/detail');
});

Route::get('/faq', function () {
    return view('user/faq');
});

Route::get('/post', function () {
    return view('user/post');
});

Route::get('/register', function () {
    return view('user/register');
});

Route::get('/text-right', function () {
    return view('user/text-right');
});

Route::get('/text', function () {
    return view('user/text');
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

