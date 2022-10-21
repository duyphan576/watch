<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class AddProductController extends Controller {
    public function index() {
        return view('admin/brand/addbrand');
    }
}
