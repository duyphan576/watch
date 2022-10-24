<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Strap;

class EditProductController extends Controller {
    
    public function index($productID) {
        $product = Product::find($productID);
        $brands = Brand::all();
        $straps = Strap::all();
        return view('admin/product/editproduct', [
            'product' => $product,
            'brands' => $brands,
            'straps' => $straps,
        ]);
    }

    public function update(Request $request) {
        $request->validate([
            'productName' => ['required', 'string', 'max:255'],
            'brand' => ['required', 'exists:Brand,BrandID'],
            'strap' => ['required', 'exists:Strap,StrapID'],
            'price' => ['required', 'integer'],
        ]);

        $product = new Product;

        $product->BrandID = $request->brand;
        $product->StrapID = $request->strap;
        $product->ProductName = $request->productName;
        $product->Price = $request->price;
        $product->BrandID = $request->brand;

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $timestamp = time();
            $name = $timestamp. '-' .$file->getClientOriginalName();
            $product->Image = $name;
            $file->move(public_path() . '/assets/image/product', $name);
        }
        $product->update();

        return back()->with('success','File has been uploaded.');
    }
}
