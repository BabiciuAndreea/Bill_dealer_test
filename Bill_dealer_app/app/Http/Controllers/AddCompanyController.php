<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\DB;

class AddCompanyController extends Controller
{
    public function index(){
        return view('menu.company');
    }

    public function store(Request $req){

        $req->validate([
            'company_name' => 'required',
            'cif' => 'required|unique:csettings',
            'nr_reg' => 'required|unique:csettings',
            'city' => 'required',
            'county' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:csettings',
            'caen' => 'required',
            'capital' => 'required',
            //'tva' => 'required',
            'iban' => 'required|unique:csettings',
            // 'format_pdf' => 'required'
        ]);

        $customer=new Company();
        $customer->company_name=$req->company_name;
        $customer-> cif=$req-> cif;
        $customer-> nr_reg=$req->nr_reg ;
        $customer-> city=$req-> city;
        $customer-> county=$req->county ;
        $customer-> address=$req-> address;
        $customer-> phone=$req-> phone;
        $customer-> email=$req->email ;
        $customer-> caen=$req-> caen;
        $customer-> capital=$req-> capital;
        if($req->has('tva')) {
            $customer-> tva=$req->tva='yes';    
       }
        $customer-> iban=$req-> iban;
        //$customer-> format_pdf=$req->format_pdf;
        $customer->save();

         return redirect(route('company'));
    }
}
