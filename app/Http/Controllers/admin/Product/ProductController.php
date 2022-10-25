<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller {
    public function index() {
        $products = Product::all();
        return view('admin.product.managerProduct', [
            'products' => $products,
        ]);
    }

    public function delete(Request $request) {
        $product = Product::find($request->productID);
        $product->delete();

        return back();
    }
}
