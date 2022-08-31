<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show($id)
    {
        $products = Product::get();
        $orders = Order::where('invoice_id',$id);
        $invoice = Invoice::findOrFail($id);
        
        return view('order.index', compact('products','orders','invoice'));
    }

    public function store(Request $request, $id){
        $products = Product::get();
        $orders = Order::get();
        $invoice = Invoice::findOrFail($id);

        $order = new Order();
        $order->product_id = $request->get('list');
        $order->quantity = $request->get('order_quantity');
        $order->tva = $request->get('tva');
        $order->invoice_id = $id;
        $order->save();

        return view('order.index', compact('products','orders','invoice'));
    }

    public function destroy($id, $invoice_id)
    {
        Order::destroy($id);
        return redirect()->route('order', $invoice_id)
            ->with('success', 'Contact deleted successfully');
    }
}
