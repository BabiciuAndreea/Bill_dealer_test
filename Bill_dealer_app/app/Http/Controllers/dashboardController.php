<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Bnrcourse;
use App\Models\Invoice;

use Illuminate\Support\Facades\Cache;


class dashboardController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(3);

        $curs=Bnrcourse::getCursFromBNR();
        // dd($curs);
        $coins = ['EUR', 'USD', 'XAU', 'HUF', 'RUB,'];

        // $curs=Bnrcourse::getCursFromBNR();
        // dd($curs);
        $coins = ['EUR', 'USD', 'XAU', 'HUF', 'RUB,'];
        $curs = Bnrcourse::getCursFromBNR();

        $invoices = Invoice::where('status', 'Unpaid')->orWhere('status', 'Overdue')->paginate(3);

        return view('dashboard.index', compact('products', 'curs', 'coins', 'invoices'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


}
