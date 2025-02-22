<?php

namespace App\Http\Controllers\AdminDash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminActiveCertificateController extends Controller
{
    //
    public function index()
    {
        return view('admindashboard.adminActivecertificate');
    }
}
