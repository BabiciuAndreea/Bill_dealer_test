<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function settings(){
        return view('Settings_page');
    }

    public function info(){
        return view('info_page');
    }

    public function register(){
        return view('auth.register');
    }

    public function login(){
        return view('auth.login');
    }

    public function contacts(){
        return view('contact.index');
    }
}
