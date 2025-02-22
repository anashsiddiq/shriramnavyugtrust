<?php

namespace App\Http\Controllers\UserAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonationPaymentController extends Controller
{
    //
    public function index()
    {
        // You can fetch payment data from the database here
        return view('userdashboard.donationpayment');
    }
}
