<?php

namespace App\Http\Controllers\Client\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {
    public function store(Request $request) {
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required'],
        ]);
        $errorMess = 'The provided credentials do not match our records.';
        if (Auth::attemptWhen($credentials, function ($user) use (&$errorMess) {
            if ($user->getStatus()) {
                return true;
            }
            $errorMess = 'The user account is blocked.';
            return false;
        })) {
            $request->session()->regenerate();
            return redirect('/');
        }
        return back()->withErrors([
            'username' => $errorMess,
        ])->onlyInput('username');
    }

    public function destroy(Request $request) {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
