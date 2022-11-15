<?php

namespace App\Http\Controllers\Admin\Strap;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Strap;

class EditStrapController extends Controller {
    public function index($strapID) {
        $strap = Strap::find($strapID);
        return view('admin/strap/editstrap', [
            'strap' => $strap,
        ]);
    }

    public function update(Request $request) {
        $request->validate([
            'strapID' => ['required'],
            'strapName' => ['required', 'string'],
        ]);

        $strap = Strap::find($request->strapID);
    
        $strap->StrapName = $request->strapName;
        
        $strap->save();

        return back()->with('success','Strap has been updated.');
    }
}
