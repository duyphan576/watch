<?php

namespace App\Http\Controllers\Client\Customer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller {
    public function index() {
        return view('client.customer-account');
    }

    public function updatePassword(Request $request) {
        $request->validate([
            'old_password' => ['required'],
            'new_password' => ['required', 'string', 'confirmed'],
        ]);

        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->Password)){
            return back()->withErrors("Old Password Doesn't match!");
        }

        #Update the new Password
        User::find(auth()->id())->update([
            'Password' => Hash::make($request->new_password)
        ]);

        return back()->with("success", "Password changed successfully!");
    }

    public function updateInfo(Request $request) {
        $request->validate([
            'fullname' => ['required', 'string', 'max:255'],
            'birthday' => ['required', 'date'],
            'phone' => ['required', 'string', 'min:9', 'max:11'],
        ]);

        User::find(auth()->id())->update([
            'Fullname' => $request->fullname,
            'Birthday' => $request->birthday,
            'Phone' => $request->phone,
        ]);

        return back()->with("success", "User Infomation changed successfully!");
    }
}
