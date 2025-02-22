<?php

namespace App\Http\Controllers\AdminDash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddManagerController extends Controller
{
    //
    public function create()
    {

        return view('admindashboard.adminaddmanager');
    }
}
