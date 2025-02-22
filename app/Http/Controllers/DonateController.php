<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    //

    public function showForm()
    {
        return view('donateus');
    }

}
