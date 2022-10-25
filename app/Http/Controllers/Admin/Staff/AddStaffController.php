<?php

namespace App\Http\Controllers\Admin\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Staff;
use App\Models\Role;

class AddStaffController extends Controller {
    
    public function index() {
        $roles = Role::all();
        return view('admin/staff/addstaff', [
            'roles' => $roles
        ]);
    }

    public function accountstaff(Request $request) {
        $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'max:255'],
            'fullname' => ['required', 'string', 'max:255'],
            'status' => ['required', 'integer'],
            'role' => ['required', 'exists:Role,RoleID'],
        ]);

        $staff = new Staff;
        $staff->Username = $request->username;
        $staff->Password = $request->password;
        $staff->Fullname = $request->fullname;
        $staff->RoleID= $request->role;
        $staff->Status = $request->status;
        $staff->save();

        return back()->with('success','File has been uploaded.');
    }
}
