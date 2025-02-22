<?php

namespace App\Http\Controllers\AdminDash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CashDonationReceiptController extends Controller
{
    //
    public function index()
    {
        return view('admindashboard.Cashdonationrecept');

    }
}
