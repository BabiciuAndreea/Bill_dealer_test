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

    public function contact_create($id){
        return view('contact.create', compact('id'));
    }

    public function contact_edit($id){
        return view('contact.edit', compact('id'));
    }

    public function order(){
        return view('order.index');
    }

    public function client(){
        return view('invoice.client');
    }
}
