<?php

namespace App\Http\Controllers\UserAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MembershipStatusController extends Controller
{
    public function index()
    {
        return view('userdashboard.membershipstatus');
    }
}