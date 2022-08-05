<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name', 'cif', 'nr_reg', 'city', 'country', 'address', 'caen', 'capital', 'tva', 'iban', 'phone', 'email', 'format_pdf'
    ];
}
