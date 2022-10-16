<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Strap;

class ShopController extends Controller {
    public function create($strapID) {
        $strap = Strap::where('StrapID', $strapID)->first();
        $products = $strap->products()->paginate(8);
        return view('client.shop', [
            'strap' => $strap,
            'products' => $products,
        ]);
    }
}
