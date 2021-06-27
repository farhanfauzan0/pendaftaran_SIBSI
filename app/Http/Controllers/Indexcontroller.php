<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Indexcontroller extends Controller
{
    function index()
    {
        return view('front.index');
    }

    function login_index()
    {
        if (Auth::guard('client')->check()) {
            return redirect()->route('index');
        } else {
            return view('front.auth.login');
        }
    }

    function register_index()
    {
        return view('front.auth.register');
    }
}
