<?php

namespace App\Http\Controllers\AdminDash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SendAllUsersController extends Controller
{
    //
    public function send()
    {
        return view('admindashboard.sendalluser'); // Blade view for the page
    }
}
