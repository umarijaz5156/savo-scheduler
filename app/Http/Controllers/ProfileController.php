<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function logout(){

        Auth::guard('web')->logout();

        return redirect('/');
    }

    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');

    }
}
