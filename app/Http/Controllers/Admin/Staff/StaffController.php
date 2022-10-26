<?php

namespace App\Http\Controllers\Admin\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller {
    public function index() {
        $staffs = Staff::all();
        return view('admin.staff.managerstaff', [
            'staffs' => $staffs,
        ]);
    }
}
