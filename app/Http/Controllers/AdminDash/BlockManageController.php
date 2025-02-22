<?php

namespace App\Http\Controllers\AdminDash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlockManageController extends Controller
{
    //
    public function blocked()
{
    // Assuming 'role' column exists and 'manager' is the role, and 'status' = 'blocked'

    return view('admindashboard.blockmanagerdata');
}

}
