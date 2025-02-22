<?php

namespace App\Http\Controllers\UserAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentLetterController extends Controller
{
    public function index()
    {
        return view('userdashboard.appoinmentletter');
    }
}