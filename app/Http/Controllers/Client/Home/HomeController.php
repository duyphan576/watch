<?php

namespace App\Http\Controllers\Client\Home;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller {
    public function index() {
        $products = Product::where('isShow', 1)->where('quantity', '>', 0)->limit(10)->get();
        return view('client.index', [
            'products' => $products,
        ]);
    }
}
