<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function AddCustomer(Request $req)
    {
        $customer=new Customer;
        $customer->first_name=$req->first_name;
        $customer->last_name=$req->last_name;
        $customer->save();
        
        


    }
}
