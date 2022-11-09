<?php

namespace App\Http\Controllers\Client\Cart;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Cart;
use Illuminate\Http\Response;

class CartController extends Controller {
    public function index() {
        return view('client.basket');
    }

    public function add($productID) {
        $product = Product::find($productID);
        Cart::add($productID, $product->ProductName, 1, $product->Price);
        return redirect()->back();
    }

    public function remove($productID) {
        Cart::remove($productID);
        return redirect()->back();
    }

    public function update($rowId, $quantity) {
        Cart::update($rowId, $quantity);
        return response()->json('success');
    }
}
