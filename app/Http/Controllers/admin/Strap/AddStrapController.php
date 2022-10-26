<?php

namespace App\Http\Controllers\Admin\Strap;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddStrapController extends Controller {

    public function index() {
        return view('admin/strap/addstrap');
    }

    public function store(Request $request) {
        $request->validate([
            'strapName' => ['required', 'string'],
        ]);

        $strap = new Strap;

        $strap->StrapName = $request->strapName;

        $strap->save();

        return back()->with('success','File has been uploaded.');
    }
    
}
