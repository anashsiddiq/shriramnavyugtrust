<?php

namespace App\Http\Controllers\Admindash;

use App\Http\Controllers\Controller;

class NewMembershipController extends Controller
{
    // Show the New Membership form
    public function create()
    {
        return view('admindashboard.newmenbershipadmin'); // Ensure this view exists
    }
}