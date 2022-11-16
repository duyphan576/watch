<?php

namespace App\Http\Controllers\Admin\Role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class EditRoleController extends Controller {
    public function index($roleID) {
        $role = role::find($roleID);
        return view('admin/role/editrole', [
            'role' => $role,
        ]);
    }

    public function update(Request $request) {
        $request->validate([
            'roleID' => ['required'],
            'roleName' => ['required', 'string'],
        ]);

        $role = role::find($request->roleID);
    
        $role->roleName = $request->roleName;
        
        $role->save();

        return redirect('admin/role')->with('success','Role has been edited');
    }
}
