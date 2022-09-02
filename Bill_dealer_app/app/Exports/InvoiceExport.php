<?php

namespace App\Exports;

use App\Models\Invoice;
use Maatwebsite\Excel\Concerns\FromCollection;

class InvoiceExport implements FromCollection
{

    public function collection()
    {
        return Invoice::where('status', 'Unpaid')->orWhere('status', 'Overdue')->get();
    }
}
