<?php

namespace App\Http\Controllers\AdminDash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisitorDonationController extends Controller
{
    //
    public function index()
    {
        // Fetch visitor donation data if needed
        return view('admindashboard.allvisitordonation'); // Blade view for the page
    }
}
