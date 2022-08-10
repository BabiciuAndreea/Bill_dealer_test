<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(
            'index'
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company/companyFormular');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        $request->validate([
            'company_name' => 'required',
            'cif' => 'required|unique:companies',
            'nr_reg' => 'required|unique:companies',
            'city' => 'required',
            'county' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:companies',
            'caen' => 'required',
            'capital' => 'required',
            'tva' => 'required',
            'iban' => 'required|unique:companies',
            // 'format_pdf' => 'required'
        ]);

        Company::create([
            'company_name' => $request->company_name,
            'cif' => $request->cif,
            'nr_reg' => $request->nr_reg,
            'city' => $request->city,
            'county' => $request->county,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'caen' => $request->caen,
            'capital' => $request->capital,
            'tva' => $request->tva,
            'iban' => $request->iban,
            'format_pdf' => $request->format_pdf

        ]);

        return redirect(route('index'))->with('success', 'Company added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Company::findOrFail($id);

        return view('comanda.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
