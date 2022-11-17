<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller {
    public function index(Request $request) {
        $orders = Order::query();
        if($request->has('fromDate') && $request->fromDate != '') {
            $orders->where('Date', '>=', $request->fromDate);
        }
        if($request->has('toDate')  && $request->toDate != '') {
            $orders->where('Date', '<=', $request->toDate);
        }
        // dd($orders->toSql());
        $orders = $orders->get();
        return view('admin.order.managerorder', [
            'orders' => $orders,
        ]);
    }

    public function orderDetail($orderID) {
        $order = Order::find($orderID);
        return view('admin.order.orderdetail', [
            'order' => $order,
        ]);
    }

    public function updateStatus(Request $request) {
        $order = Order::find($request->orderID);
        if($order->Status != 2 && $order->Status != 3) {
            $order->update(['Status' => $request->status]);
        }

        return back();
    }
}
