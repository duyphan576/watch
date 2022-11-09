<?php

namespace App\Http\Controllers\Client\Customer;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller {
    public function index() {
        $orders = Order::where('UserID', Auth::id())-> get();

        return view('client.customer-orders', [
            'orders' => $orders,
        ]);
    } 
}
