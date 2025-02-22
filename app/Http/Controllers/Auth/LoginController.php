<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

     
    if (Auth::attempt($credentials)) {
        return redirect()->route('dashboard')->with('success', 'Login successful!');
    } else {
        return redirect()->back()->with('error', 'Invalid email or password');
    }
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ], $request->remember)) {
            return redirect()->intended('dashboard'); 
        }

        return back()->withErrors(['email' => 'Invalid credentials.'])->withInput();
    }
}