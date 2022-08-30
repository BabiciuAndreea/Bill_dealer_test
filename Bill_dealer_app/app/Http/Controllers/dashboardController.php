<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Bnrcourse;

class dashboardController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(3);
        $curs=Bnrcourse::getCursFromBNR();
        // dd($curs);
        $coins = ['EUR', 'USD', 'XAU', 'HUF', 'RUB,'];
        return view('dashboard.index',compact('products', 'curs', 'coins'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


}
