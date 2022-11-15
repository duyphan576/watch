<?php

namespace App\Http\Controllers\Admin\Strap;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Strap;

class AddStrapController extends Controller
{

    public function index()
    {
        return view('admin/strap/addstrap');
    }

    public function store(Request $request)
    {
        $request->validate([
            'strapName' => ['required', 'string'],
        ]);

        $strap = new Strap;

        $strap->StrapName = $request->strapName;

        $strap->save();

        return redirect('admin/strap')->with('success', 'Strap has been added.');
    }
}
