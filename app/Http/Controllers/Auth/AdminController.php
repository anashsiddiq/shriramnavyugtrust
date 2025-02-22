<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; // Added Session Facade

class AdminController extends Controller
{
    private $adminEmail = 'admin123@example.com';
    private $adminPassword = 'admin123';

    public function showLoginForm()
    {
        return view('adminlogin'); // Corrected view path
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($request->email === $this->adminEmail && $request->password === $this->adminPassword) {
            Session::put('is_admin', true);
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['Incoreect password'])->withInput();
    }

    public function dashboard()
    {
        if (!Session::get('is_admin')) {
            return redirect()->route('admin.login');
        }

        return view('admindashboard'); // Corrected view path
    }

    public function logout()
    {
        Session::forget('is_admin');
        return redirect()->route('admin.login');
    }
}