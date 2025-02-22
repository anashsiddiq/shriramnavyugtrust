<?php

namespace App\Http\Controllers\AdminDash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GenerateFormCertificateController extends Controller
{
    //
    public function create()
    {
        return view('admindashboard.visitergeneratecertificate');
    }
}
