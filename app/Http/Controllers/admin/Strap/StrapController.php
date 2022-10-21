<?php

namespace App\Http\Controllers\Admin\Strap;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Strap;

class StrapController extends Controller
{
    public function index()
    {
        $strap = Strap::all();
        return view('admin.strap.managerstrap', [
            'strap' => $strap,
        ]);
    }
}