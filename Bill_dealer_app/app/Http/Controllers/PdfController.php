<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;


class PdfController extends Controller
{
    public function downloadPDF() {
        $show=null;
        $pdf = Pdf::loadView('pdf', compact('show'));
        
        return $pdf->download('Invoice.pdf');
}
    //
}
