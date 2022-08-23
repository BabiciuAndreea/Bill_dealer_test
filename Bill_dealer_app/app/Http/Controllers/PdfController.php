<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;


class PdfController extends Controller
{
    public function downloadPDF() {
        $show=null;
        $pdf = PDF::loadView('pdf', compact('show'));
        
        return $pdf->download('Invoice.pdf');
}
    //
}
