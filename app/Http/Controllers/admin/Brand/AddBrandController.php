<?php

namespace App\Http\Controllers\Admin\Brand;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class AddBrandController extends Controller {
    
    public function index() {
        return view('admin/brand/addbrand');
    }

    public function store(Request $request) {
        $request->validate([
            'brandName' => ['required', 'string'],
        ]);

        $brand = new Brand;

        $brand->BrandName = $request->brandName;

        $brand->save();

        return back()->with('success','File has been uploaded.');
    }

}
