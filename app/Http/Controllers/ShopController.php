<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Strap;

class ShopController extends Controller {
    public function index($strapID) {
        $strap = Strap::where('StrapID', $strapID)->first();
        $products = $strap->products()->paginate(9);
        return view('client.shop.shop', [
            'strap' => $strap,
            'products' => $products,
        ]);
    }
}
