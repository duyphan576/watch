<?php

namespace App\Http\Controllers\Admin\Role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $role = Role::all();
        return view('admin.role.managerrole', [
            'role' => $role,
        ]);
    }

    public function delete(Request $request)
    {
        $product = Role::find($request->productID);
        $product->delete();

        return back();
    }
}
