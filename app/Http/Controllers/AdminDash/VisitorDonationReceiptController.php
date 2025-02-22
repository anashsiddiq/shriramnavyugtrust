<?php

namespace App\Http\Controllers\AdminDash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisitorDonationReceiptController extends Controller
{
    //
    public function index()
    {
        return view('admindashboard.visitordonationreciept'); // Blade view for the page
    }
}
