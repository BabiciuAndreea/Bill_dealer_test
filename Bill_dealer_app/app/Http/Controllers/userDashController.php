<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userDashController extends Controller
{
    public function view(){
        return view('dashboard.user_dashboard');
    }

}



