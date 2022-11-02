<?php

namespace App\Http\Controllers\Client\Category;

use App\Http\Controllers\Controller;
use App\Models\Product;

class DetailController extends Controller {
    public function index($productID) {
        $product = Product::find($productID);
        $suggestedProducts = Product::where('StrapID', $product->StrapID)->where('BrandID', $product->BrandID)->limit(3)->get();
        return view('client.detail', [
            'product' => $product,
            'suggestedProducts' => $suggestedProducts,
        ]);
    }
}
