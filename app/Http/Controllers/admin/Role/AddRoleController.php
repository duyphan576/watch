<?php

namespace App\Http\Controllers\Admin\Role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class AddRoleController extends Controller
{

    public function index()
    {
        return view('admin/role/addrole');
    }

    public function store(Request $request)
    {
        $request->validate([
            'roleName' => ['required', 'string'],
        ]);

        $role = new role;

        $role->roleName = $request->roleName;

        $role->save();

        return redirect('admin/role')->with('success','Role has been added');
    }
}
