<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Bnrcourse;

class RoleController extends Controller
{
    
    public function setRole(){

        $curs=Bnrcourse::getCursFromBNR();
        // dd($curs);
        $coins = ['EUR', 'USD', 'XAU', 'HUF', 'RUB,'];
        // return view('dashboard.index',compact('products', 'curs', 'coins'))
   $products = Product::latest()->paginate(3);

        if(Auth::check()){
            if(Auth::user()->role == 'admin'){
                return view('dashboard.index',compact('products', 'curs', 'coins'));
            }else{
                return view('dashboard.user',compact('products', 'curs', 'coins'));

            }
        }else{
            return view('auth.login');
        }
    }
}
