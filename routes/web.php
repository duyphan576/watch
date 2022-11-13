<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\Category\CategoryController;
use App\Http\Controllers\Client\Category\DetailController;
use App\Http\Controllers\Admin\Brand\BrandController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\Staff\StaffController;
use App\Http\Controllers\Admin\Staff\AddStaffController;
use App\Http\Controllers\Admin\Staff\EditStaffController;
use App\Http\Controllers\Admin\Product\AddProductController;
use App\Http\Controllers\Admin\Product\EditProductController;
use App\Http\Controllers\Admin\Auth\SigninController;
use App\Http\Controllers\Admin\Import\ImportController;
use App\Http\Controllers\Admin\Import\ImportHistoryController;
use App\Http\Controllers\Admin\Order\AdminOrderController;
use App\Http\Controllers\Admin\Role\RoleController;
use App\Http\Controllers\Admin\Role\AddRoleController;
use App\Http\Controllers\Admin\Role\EditRoleController;
use App\Http\Controllers\Admin\Strap\StrapController;
use App\Http\Controllers\Admin\Strap\AddStrapController;
use App\Http\Controllers\Admin\Strap\EditStrapController;
use App\Http\Controllers\Client\Auth\LoginController;
use App\Http\Controllers\Client\Auth\RegisterController;
use App\Http\Controllers\Client\Cart\CartController;
use App\Http\Controllers\Client\Checkout\CheckoutController;
use App\Http\Controllers\Client\Customer\AccountController;
use App\Http\Controllers\Client\Customer\OrderController;

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
    return view('client.index');
});

Route::get('/category/{strapID?}', [CategoryController::class, 'index']);
Route::get('/category/detail/{productID}', [DetailController::class, 'index']);

Route::get('/cart', [CartController::class, 'index']);
Route::get('/cart/add/{productID}', [CartController::class, 'add']);
Route::get('/cart/remove/{productID}', [CartController::class, 'remove']);
Route::get('/cart/update/{rowId}/{quantity}', [CartController::class, 'update']);

Route::get('/register', [RegisterController::class, 'index'])->name('registerUser');
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/login', [LoginController::class, 'store'])->name('loginUser');
Route::get('/logout', [LoginController::class, 'destroy'])->name('logoutUser');

Route::middleware('auth')->group(function () {
    Route::get('/checkout/address', [CheckoutController::class, 'address']);
    Route::post('/checkout/address', [CheckoutController::class, 'storeAddress']);
    Route::get('/checkout/delivery-method', [CheckoutController::class, 'deliveryMethod']);
    Route::post('/checkout/delivery-method', [CheckoutController::class, 'storeDeliveryMethod']);
    Route::get('/checkout/payment-method', [CheckoutController::class, 'paymentMethod']);
    Route::post('/checkout/payment-method', [CheckoutController::class, 'StorePaymentMethod']);
    Route::get('/checkout/order-review', [CheckoutController::class, 'orderReview']);
    Route::post('/checkout/order-review', [CheckoutController::class, 'orderReview']);
    Route::post('/checkout/place-order', [CheckoutController::class, 'placeOrder'])->name('placeOrder');

    Route::get('/customer/order', [OrderController::class, 'index']);
    Route::get('/customer/order/{orderID}', [OrderController::class, 'orderDetail']);
    Route::get('/customer/account', [AccountController::class, 'index']);
    Route::post('/customer/account/change-password', [AccountController::class, 'updatePassword'])->name('changeUserPassword');
    Route::post('/customer/account/change-info', [AccountController::class, 'updateInfo'])->name('changeUserInfo');
});

//---------------------------------------------------------------------------------------------
//Admin route
Route::get('/admin/signin', [SigninController::class, 'index'])->name('adminSignin');
Route::post('/admin/signin', [SigninController::class, 'store']);
Route::post('/admin/logout', [SigninController::class, 'destroy'])->name('adminLogout');

Route::middleware('auth.admin:admin')->group(function () {
    Route::prefix('admin')->group(function () {

        Route::get('/brand', [BrandController::class, 'index']);
        Route::get('/brand/add', [AddStrapController::class, 'index'])->name('addBrand');
        Route::post('/brand/add', [AddStrapController::class, 'store']);
        Route::get('/brand/edit/{brandID}', [EditStrapController::class, 'index']);
        Route::post('/brand/edit/', [EditStrapController::class, 'update'])->name('editBrand');
        Route::post('/brand/delete', [StrapController::class, 'delete'])->name('deleteBrand');

        Route::get('/strap', [StrapController::class, 'index']);
        Route::get('/strap/add', [AddStrapController::class, 'index'])->name('addStrap');
        Route::post('/strap/add', [AddStrapController::class, 'store']);
        Route::get('/strap/edit/{strapID}', [EditStrapController::class, 'index']);
        Route::post('/strap/edit/', [EditStrapController::class, 'update'])->name('editStrap');
        Route::post('/strap/delete', [StrapController::class, 'delete'])->name('deleteStrap');

        Route::get('/product', [ProductController::class, 'index']);
        Route::get('/product/add', [AddProductController::class, 'index'])->name('addProduct');
        Route::post('/product/add', [AddProductController::class, 'store']);
        Route::get('/product/edit/{productID}', [EditProductController::class, 'index']);
        Route::post('/product/edit/', [EditProductController::class, 'update'])->name('editProduct');
        Route::post('/product/delete/', [ProductController::class, 'delete'])->name('deleteProduct');

        Route::get('/role', [RoleController::class, 'index']);
        Route::get('/role/add', [AddRoleController::class, 'index'])->name('addRole');
        Route::post('/role/add', [AddRoleController::class, 'store']);
        Route::get('/role/edit/{RoleID}', [EditRoleController::class, 'index']);
        Route::post('/role/edit/', [EditRoleController::class, 'update'])->name('editRole');
        Route::post('/role/delete', [RoleController::class, 'delete'])->name('deleteRole');

        Route::get('/staff', [StaffController::class, 'index']);
        Route::get('/staff/add', [AddStaffController::class, 'index'])->name('addStaff');
        Route::post('/staff/add', [AddStaffController::class, 'store']);
        Route::get('/staff/edit/{staffID}', [EditStaffController::class, 'index']);
        Route::post('/staff/edit', [AddStaffController::class, 'accountstaff'])->name('editStaff');

        Route::get('/order', [AdminOrderController::class, 'index']);
        Route::get('/order/{OrderID}', [AdminOrderController::class, 'orderDetail']);
        Route::post('/order', [AdminOrderController::class, 'updateStatus']);

        Route::get('/import', [ImportController::class, 'index']);
        Route::get('/import/cart', [ImportController::class, 'cart']);
        Route::post('/import/cart/add', [ImportController::class, 'add']);
        Route::post('/import/cart/remove', [ImportController::class, 'remove']);
        Route::post('/import/cart/update', [ImportController::class, 'update']);
        Route::get('/import/cart/place-order', [ImportController::class, 'placeOrder']);

        Route::get('/import-history', [ImportHistoryController::class, 'index']);
        Route::get('/import-history/{importID}', [ImportHistoryController::class, 'importDetail']);
    });
});
