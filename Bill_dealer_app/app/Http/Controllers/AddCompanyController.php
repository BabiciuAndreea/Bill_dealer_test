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
            'bank' => 'required',
            //'tva' => 'required',
            'iban' => 'required|unique:csettings',
            // 'format_pdf' => 'required'
        ]);

    //     $customer=new Company();
    //     $customer->company_name=$req->company_name;
    //     $customer-> cif=$req-> cif;
    //     $customer-> nr_reg=$req->nr_reg ;
    //     $customer-> city=$req-> city;
    //     $customer-> county=$req->county ;
    //     $customer-> address=$req-> address;
    //     $customer-> phone=$req-> phone;
    //     $customer-> email=$req->email ;
    //     $customer-> caen=$req-> caen;
    //     $customer-> bank=$req-> bank;
    //     $customer-> capital=$req-> capital;

    //     if($req->has('tva')) {
    //         $customer-> tva=$req->tva='yes';    
    //    }
    //     $customer-> iban=$req-> iban;
        //$customer-> format_pdf=$req->format_pdf;

        $customer = Company::create([
            'company_name' => $req['company_name'],
            'cif' => $req['cif'],
            'nr_reg' => $req['nr_reg'],
            'city' => $req['city'],
            'county' => $req['county'],
            'address' => $req['address'],
            'phone' => $req['phone'],
            'email' => $req['email'],
            'caen' => $req['caen'],
            'bank' => $req['bank'],
            'capital' => $req['capital'],
            'iban' => $req['iban'],
        ]);

        if($req->has('tva')) {
            $customer-> tva=$req->tva='yes';    
       }

        if(request()->hasFile('logo')){
            $avatar = request()->file('logo')->getClientOriginalName();
            request()->file('logo')->storeAs($avatar, '');
            $customer->update(['logo' => $avatar]);
        }

        $customer->save();

         return redirect(route('company'));
    }
}
