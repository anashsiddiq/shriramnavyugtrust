<?php

namespace App\Http\Controllers\AdminDash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CertifDataController extends Controller
{
    //
    public function index()
    {
        // You can fetch certificate data here if needed
        return view('admindashboard.admincertificate');
    }
}
