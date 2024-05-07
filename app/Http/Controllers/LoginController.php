<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function check(Request $request)
    {

        $credentials = $request->validate([
        'email'=> ['required','email'],
        'password'=>['required'],
        ]);

        if (Auth::attempt($credentials))
        {
            return redirect('home');
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('home');
        }

        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);
    }
}
