<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReigisterController extends Controller {

//    public function authenticate(Request $request) {
//        
//    }

    public function index() {
        return view('register');
    }

    public function register(Request $request) {
        $request->validate([
            'username' => ['required'],
            'password' => ['required', 'min:8', 'confirmed'],
            'password_confirmation' => ['same:password'],
            'fullname' => ['required'],
            'birthdate' => ['required', 'date'],
            'phone' => ['required'],
            'email' => ['required', 'email'],
        ]);

        $data = $request->all();

        User::create([
            'username' => $data['username'],
            'password' => $data['password'],
            'fullname' => $data['fullname'],
            'birthdate' => $data['birthdate'],
            'phone' => $data['phone'],
        ]);

        return redirect("#")->withSuccess('Great! You have Successfully loggedin');
    }

}
