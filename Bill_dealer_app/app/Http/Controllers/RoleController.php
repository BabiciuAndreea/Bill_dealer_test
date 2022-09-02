<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Bnrcourse;
use App\Models\Invoice;
use App\Models\Client;


class RoleController extends Controller
{

    public function setRole(){

        $curs=Bnrcourse::getCursFromBNR();
        // dd($curs);
        $coins = ['EUR', 'USD', 'XAU', 'HUF', 'RUB,'];
        // return view('dashboard.index',compact('products', 'curs', 'coins'))
   $products = Product::latest()->paginate(3);
   $invoices = Invoice::where('status', 'Unpaid')->orWhere('status', 'Overdue')->paginate(3);



        if(Auth::check()){
            if(Auth::user()->role == 'admin'){
                return view('dashboard.index',compact('products', 'curs', 'coins', 'invoices'));
            }else{
                return view('dashboard.user',compact('products', 'curs', 'coins', 'invoices'));

            }
        }else{
            return view('auth.login');
        }
    }
}
