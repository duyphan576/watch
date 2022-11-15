<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {
    public function index() {
        $users = User::all();
        return view('admin.user.manageruser', [
            'users' => $users,
        ]);
    }

    public function updatestatus(Request $request) {
        $request->validate([
            'userID' => ['required', 'integer'],
            'status'=> ['required', 'boolean'],
        ]);
        $user = User::find($request->userID);
        $user->Status = $request->status;
        $user->save();
        return back()->with('success', 'Status has been updated');
    }
}
