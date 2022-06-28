<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display login page
     * @return view
     */
    public function showLogin() {
        return view('login.login_form');
    }

    public function login() {

    }
}
