<?php

namespace App\Http\Controllers\Admin\Brand;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller {
    public function index() {
        $brands = Brand::all();
        return view('admin.brand.managerbrand', [
            'brands' => $brands,
        ]);
    }

    public function delete(Request $request) {
        $brand = Brand::find($request->brandID);
        $brand->delete();
    }
}
