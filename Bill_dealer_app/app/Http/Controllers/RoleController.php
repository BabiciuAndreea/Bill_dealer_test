<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function setRole(){
        if(Auth::check()){
            if(Auth::user()->role == 'admin'){
                return view('users.admin');
            }else{
                return view('users.user');
            }
        }else{
            return view('auth.login');
        }
    }
   
}
