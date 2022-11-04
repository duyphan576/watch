<?php

namespace App\Http\Controllers\Client\Checkout;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller {

    public function address() {
        $user = Auth::user();
        return view('client.checkout1', [
            'user'=>$user,
        ]);
    }

    public function deliveryMethod() {
        return view('client.checkout2');
    }

    public function paymentMethod() {
        return view('client.checkout3');
    }

    public function orderReview() {
        return view('client.checkout4');
    }
}
