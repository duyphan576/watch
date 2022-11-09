<?php

namespace App\Http\Controllers\Client\Customer;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller {
    public function index() {
        $orders = Order::where('UserID', Auth::id())->get();

        return view('client.customer-orders', [
            'orders' => $orders,
        ]);
    }

    public function orderDetail($orderID) {
        $order = Order::find($orderID);
        if (Auth::id() != $order->UserID) {
            return redirect('/category')->withErrors('Unfound Order ID');
        }
        $orderDetails = $order->orderDetail;
        return view('client.customer-order', [
            'order' => $order,
            'orderDetails' => $orderDetails,
        ]);
    }
}
