<?php

namespace App\Http\Controllers\AdminDash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PreviousNoticeController extends Controller
{
    // 
    public function index()
    {
        return view('admindashboard.previousnotice');
    }
}
