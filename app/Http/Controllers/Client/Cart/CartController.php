<?php

namespace App\Http\Controllers\Client\Cart;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Cart;

class CartController extends Controller {
    public function index() {
        return view('client.basket', []);
    }

    public function add($productID) {
        $product = Product::find($productID);
        Cart::add($productID, $product->ProductName, 1, $product->Price);
    }
}
