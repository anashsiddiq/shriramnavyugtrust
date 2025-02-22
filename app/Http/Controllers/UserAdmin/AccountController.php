<?php
namespace App\Http\Controllers\UserAdmin;

use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function index()
    {
        return view('userdashboard.Account');
    }
}
