<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show(Request $request)
    {
        $products = Product::get();

        // $product_id = $request->get('list');

        // $order = new Order;
        // $order->product_id = $product_id->input('list');


        // $order = Order::create([
        //     'product_id' => $request->get('list'),
        // ]);
        
        $order = new Order();
        $order->product_id = $request->get('list');
        $order->save();

        return view('order.index', compact('products'));
    }
}
