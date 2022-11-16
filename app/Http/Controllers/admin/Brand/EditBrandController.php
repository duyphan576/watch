<?php

namespace App\Http\Controllers\Admin\Brand;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class EditBrandController extends Controller {
    public function index($brandID) {
        $brand = Brand::find($brandID);
        return view('admin/brand/editbrand', [
            'brand' => $brand,
        ]);
    }

    public function update(Request $request) {
        $request->validate([
            'brandID' => ['required'],
            'brandName' => ['required', 'string'],
        ]);

        $brand = Brand::find($request->brandID);
    
        $brand->BrandName = $request->brandName;
        
        $brand->save();

        return redirect('admin/brand')->with('success','Brand has been edited');
    }
}
