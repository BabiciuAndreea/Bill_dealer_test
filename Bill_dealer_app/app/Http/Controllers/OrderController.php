<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show()
    {
        $products = Product::get();

        return view('order.index', compact('products'));
    }
}
