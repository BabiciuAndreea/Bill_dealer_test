<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function setRole(){

   $products = Product::latest()->paginate(3);

        if(Auth::check()){
            if(Auth::user()->role == 'admin'){
                return view('dashboard.index',compact('products'));
            }else{
                return view('dashboard.user',compact('products'));

            }
        }else{
            return view('auth.login');
        }
    }
}
