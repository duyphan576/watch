<?php

namespace App\Http\Controllers\Admin\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Role;
use App\Models\Staff;
use Illuminate\Support\Facades\Hash;

class EditStaffController extends Controller {
    
    public function index($staffID) {
        $staff = Staff::find($staffID);
        $roles = Role::all();
        return view('admin/staff/editstaff', [
            'staff' => $staff,
            'roles' => $roles,
        ]);
    }

    public function update(Request $request) {
        $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'fullname' => ['required', 'string', 'max:255'],
            'status' => ['required', 'integer'],
            'role' => ['required', 'exists:Role,RoleID'],
        ]);

        $staff = Staff::find($request->staffID);
        $staff->Username = $request->username;
        if($request->has('password')) {
            $staff->Password = Hash::make($request->password);
        }
        $staff->Fullname = $request->fullname;
        $staff->RoleID= $request->role;
        $staff->Status = $request->status;
        $staff->save();

        return redirect('admin/staff')->with('success','Staff has been edited');
    }
}
