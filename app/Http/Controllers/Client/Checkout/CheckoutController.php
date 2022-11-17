<?php

namespace App\Http\Controllers\Client\Checkout;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Exception;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller {

    public function address() {
        if(Cart::content()) {
            return back()->withErrors('Cart is empty');
        }
        $user = Auth::user();
        return view('client.checkout1', [
            'user' => $user,
        ]);
    }

    public function storeAddress(Request $request) {
        $request->validate([
            'fullname' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string'],
            'phone' => ['required', 'string', 'min:9', 'max:11'],
        ]);
        session([
            'order.fullname' => $request->fullname,
            'order.address' => $request->address,
            'order.phone' => $request->phone,
        ]);
        return redirect('checkout/delivery-method');
    }

    public function deliveryMethod() {

        return view('client.checkout2');
    }

    public function storeDeliveryMethod(Request $request) {
        return redirect('checkout/payment-method');
    }

    public function paymentMethod() {
        return view('client.checkout3');
    }

    public function storePaymentMethod(Request $request) {
        $request->validate([
            'payment' => ['required', 'integer'],
        ]);
        session(['order.payment' => $request->payment]);
        return redirect('checkout/order-review');
    }

    public function orderReview() {
        return view('client.checkout4');
    }

    public function placeOrder(Request $request) {
        DB::beginTransaction();
        try {
            $order = new Order();
            $order->UserID = Auth::id();
            $order->TotalPrice = (float) Cart::total(0, '', '');
            $order->Address = session('order.address');
            $order->Phone = session('order.phone');
            $order->PaymentMethod = session('order.payment');
            $order->Status = 0;

            $order->save();

            foreach (Cart::content() as $item) {
                $product = Product::find($item->id);
                if ($product->Quantity < 0) {
                    return back()->withErrors('Product quantity is not enough');
                }
                $orderDetail = new OrderDetail();
                $orderDetail->ProductID = $item->id;
                $orderDetail->Price = $item->price;
                $orderDetail->Quantity = $item->qty;
                $order->orderDetail()->save($orderDetail);
                $product->Quantity = $product->Quantity - $orderDetail->Quantity;
                $product->save();
            }
            DB::commit();
            Cart::destroy();
            return redirect('customer/order');
        } catch (Exception $e) {
            DB::rollBack();
            throw new Exception($e->getMessage());
        }
    }
}
