<?php

namespace App\Http\Controllers\AdminDash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDonationReceiptController extends Controller
{
    //
    public function index()
    {
        return view('admindashboard.userdonationreciept'); // Blade view for the page
    }
}
