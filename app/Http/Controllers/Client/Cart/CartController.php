<?php

namespace App\Http\Controllers\Client\Cart;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CartController extends Controller {
    public function index(Request $request) {
        return view('client.basket');
    }

    public function add($productID) {
        $product = Product::find($productID);
        $cartItem = Cart::content()->where('id', $productID)->first();
        if(($product->Quantity - $cartItem->qty) - 1 < 0){
            return back()->withErrors('Product quantity is not enough');
        }
        Cart::add($productID, $product->ProductName, 1, $product->Price, 0,['image' => $product->Image]);
        return back()->with('success', 'Item added to cart');
    }

    public function remove($productID) {
        Cart::remove($productID);
        return back();
    }

    public function update($rowId, $quantity) {
        $cartItem = Cart::get($rowId);
        $product = Product::find($cartItem->id);
        if(($product->Quantity - $quantity) < 0){
            return response()->json('Product quantity is not enough');
        }
        Cart::update($rowId, $quantity);
        return response()->json('success');
    }
}
