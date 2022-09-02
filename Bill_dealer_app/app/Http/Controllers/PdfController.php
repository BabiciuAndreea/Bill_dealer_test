<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Invoice;
use App\Models\Client;
use App\Models\Product;

use App\Models\Company;


class PdfController extends Controller
{
    public function downloadPDF( $id) {
      
       $invoice=Invoice::findOrFail($id);
       $company=Company::first();
    
       $sub=0;

        $current_user=auth()->user();
        if($current_user->pdf_template==1)
        {
           
        $pdf = Pdf::loadView('Pdf_template.pdf', compact('invoice','company','sub'));
        
        return $pdf->download('Invoice.pdf');
        }
        else  if($current_user->pdf_template==2)
        {
      
        $pdf = Pdf::loadView('Pdf_template.pdf2', compact('invoice','company','sub'));
        
        return $pdf->download('Invoice2.pdf');
        }
        else
        {
           
        $pdf = Pdf::loadView('Pdf_template.pdf3', compact('invoice','company','sub'));
        
        return $pdf->download('Invoice3.pdf');
        }


        
        
    }
   
}
