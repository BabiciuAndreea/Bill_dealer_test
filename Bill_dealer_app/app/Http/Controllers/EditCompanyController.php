<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class EditCompanyController extends Controller
{
    public function index(){
        $companies = Company::all();
        return view('menu.editCompany',compact('companies'));
    }

    public function update(Request $request, Company $company)
    {
        $company->update($request->all());

        return redirect()->route('edit_company_view');
    }

    public function edit(Company $company){
        return view('menu.editCompany', compact('companies'));
    }
}
