<?php

namespace App\Http\Controllers\Client\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Strap;
use App\Models\Brand;

class CategoryController extends Controller {
    public function index(Request $request, $strapID) {
        $straps = Strap::all();
        $brands = Brand::all();
        $strap = Strap::where('StrapID', $strapID)->first();
        $products = Product::query();
        $products->where('StrapID', $strapID);
        if ($request->has('brand')) {
            $products->whereIn('BrandID', $request->brand);
        }
        $products = $products->paginate(8);
        return view('client.category', [
            'brands' => $brands,
            'straps' => $straps,
            'strap' => $strap,
            'products' => $products,
        ]);
    }
}
