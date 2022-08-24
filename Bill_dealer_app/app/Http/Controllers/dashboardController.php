<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(3);

        return view('dashboard.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


}
