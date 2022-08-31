<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Models\Client;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoice::paginate(8);
        $clients = Client::get();

        return view('invoice.index', compact('invoices','clients'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('invoice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'data_emitere' => 'required',
            'data_scadenta' => 'required',
            'serie_factura' => 'required',
            'nr_factura' => 'required',
            // 'id_client' => 'required',
            // 'id_comanda' => 'required',
            // 'status' => 'required'
        ]);

        Invoice::create($request->all());
        return redirect()->route('invoices.index');
        // $current_user=auth()->user();
        // if($current_user->pdf_template==1)
        // {
        //     $show=null;
        // $pdf = Pdf::loadView('Pdf_template.pdf', compact('show'));
        
        // return $pdf->download('Invoice.pdf');
        // }
        // else  if($current_user->pdf_template==2)
        // {
        // $show=null;
        // $pdf = Pdf::loadView('Pdf_template.pdf2', compact('show'));
        
        // return $pdf->download('Invoice2.pdf');
        // }
        // else
        // {
        //     $show=null;
        // $pdf = Pdf::loadView('Pdf_template.pdf3', compact('show'));
        
        // return $pdf->download('Invoice3.pdf');
        // }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        return view('invoice.edit', compact('invoice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoice $invoice)
    {
        $request->validate([
            'data_emitere' => 'required',
            'data_scadenta' => 'required',
            'serie_factura' => 'required',
            'nr_factura' => 'required',
            'status' => 'required',
        ]);

        $invoice->data_emitere = $request->get('data_emitere');
        $invoice->data_scadenta = $request->get('data_scadenta');
        $invoice->serie_factura = $request->get('serie_factura');
        $invoice->nr_factura = $request->get('nr_factura');
        $invoice->status = $request->get('status');
        $invoice->save();

        
        return redirect()->route('invoice.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        $invoice->delete();

        return redirect()->route('invoice.index')
            ->with('success', 'Invoice deleted successfully');
    }
}
