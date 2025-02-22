<?php

namespace App\Http\Controllers\AdminDash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SendUserController extends Controller
{
    //
    public function send()
    {
        return view('admindashboard.sendsingleuser');
    }
}
