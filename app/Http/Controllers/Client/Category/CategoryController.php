<?php

namespace App\Http\Controllers\Client\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Strap;
use App\Models\Brand;

class CategoryController extends Controller {
    public function index(Request $request, $strapID = null) {
        $straps = Strap::all();
        $brands = Brand::all();
        $products = Product::query();
        if($strapID) {
            $products->where('StrapID', $strapID);
        } 
        if ($request->has('brand')) {
            $products->whereIn('product.BrandID', $request->brand);
        }
        if($request->has('search')) {
            $search = $request->search;
            $products->join('strap', 'product.ProductID', 'strap.StrapID');
            $products->join('brand', 'product.ProductID', 'brand.BrandID');
            $products->where('ProductName', 'like', '%' . $search . '%');
            $products->orWhere('StrapName', 'like', '%' . $search . '%');
            $products->orWhere('BrandName', 'like', '%' . $search . '%');
        }
        $products = $products->paginate(8);
        return view('client.category', [
            'brands' => $brands,
            'straps' => $straps,
            'products' => $products,
        ]);
    }
}
