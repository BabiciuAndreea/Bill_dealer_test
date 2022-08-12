<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AddEmployeeControlle extends Controller
{
    public function index (){

    }
    
    public function add()
    {
        return view('add');
    }
}
