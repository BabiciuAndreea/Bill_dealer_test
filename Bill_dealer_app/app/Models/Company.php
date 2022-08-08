<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'company_name', 'cif', 'nr_reg', 'city', 'county', 'address', 'caen', 'capital', 'tva', 'iban', 'phone', 'email', 'format_pdf'
    ];
}
