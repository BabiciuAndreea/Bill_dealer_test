<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;


class PdfController extends Controller
{
    public function downloadPDF() {
        $current_user=auth()->user();
        if($current_user->pdf_template==1)
        {
            $show=null;
        $pdf = Pdf::loadView('pdf_template.pdf', compact('show'));
        
        return $pdf->download('Invoice.pdf');
        }
        else
        {
        $show=null;
        $pdf = Pdf::loadView('pdf_template.pdf2', compact('show'));
        
        return $pdf->download('Invoice2.pdf');
        }
        
        
}
    //
}
