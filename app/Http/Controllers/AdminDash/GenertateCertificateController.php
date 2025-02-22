<?php

namespace App\Http\Controllers\AdminDash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GenertateCertificateController extends Controller
{
    //
    public function generate()
    {
        return view('admindashboard.admingeneratecertificate');
    }
}
