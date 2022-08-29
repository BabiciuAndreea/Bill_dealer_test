<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company_seetings;

class CompanyController extends Controller
{
    public function store(Request $request)
    {
        $customer=new Company_seetings();
        if($request->has('1')) {
            $customer->pdf_template=$request->pdf_template='1';    
       }
        else if($request->has('2'))
        {
            $customer->pdf_template=$request->pdf_template='2';  
        }
          else
          {
            $customer->pdf_template=$request->pdf_template='2'; 
          }
            $customer->save();
             return redirect()->route('settings');
        }
       
    }

