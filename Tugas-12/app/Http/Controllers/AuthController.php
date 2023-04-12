<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');

        return redirect('/welcome')->with(['first_name' => $first_name, 'last_name' => $last_name]);
    }

    public function welcome(Request $request)
    {
        $first_name = $request->session()->get('first_name');
        $last_name = $request->session()->get('last_name');

        return view('welcome', compact('first_name', 'last_name'));
    }
}
