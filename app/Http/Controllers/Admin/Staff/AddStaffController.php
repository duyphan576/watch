<?php

namespace App\Http\Controllers\Admin\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Staff;
use App\Models\Role;

class AddStaffController extends Controller {
    
    public function index() {
        $roles = Role::all();
        return view('admin/staff/addstaff', [
            'roles' => $roles
        ]);
    }

    public function store(Request $request) {
        $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'max:255'],
            'fullname' => ['required', 'string', 'max:255'],
            'status' => ['required', 'integer'],
            'role' => ['required', 'exists:Role,RoleID'],
        ]);

        $staff = new Staff;
        $staff->Username = $request->username;
        $staff->Password = Hash::make($request->password);
        $staff->Fullname = $request->fullname;
        $staff->RoleID= $request->role;
        $staff->Status = $request->status;
        $staff->save();

        return redirect('admin/staff')->with('success','Staff has been added');
    }
}