<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\LoginFormRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display login page
     * @return view
     */
    public function showLogin() {
        return view('login.login_form');
    }

    /**
     * Login
     * @param App\Http\Requests\LoginFormRequest $request
     */
    public function login(LoginFormRequest $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('blogs');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
