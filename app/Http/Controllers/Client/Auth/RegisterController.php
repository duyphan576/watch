<?php

namespace App\Http\Controllers\Client\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('client.register');
    }

    public function store(Request $request) {
        $request->validate([
            'username' => ['required', 'string', 'max:255', 'unique:User,Username'],
            'password' => ['required', 'string', 'min:8', 'max:30', 'confirmed'],
            'fullname' => ['required', 'string', 'max:255'],
            'birthdate' => ['required', 'date'],
            'phone' => ['required', 'string', 'min:9', 'max:11'],
            'address' => ['required', 'string'],
        ]);

        $user = new User;
        $user->Username = $request->username;
        $user->Password = Hash::make($request->password);
        $user->Fullname = $request->fullname;
        $user->Birthday= $request->birthdate;
        $user->Phone = $request->phone;
        $user->Address = $request->address;
        $user->save();

        return back()->with('success','Account registed successfully');
    }
}
