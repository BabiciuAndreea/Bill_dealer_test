<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_name', 'cif', 'nr_reg', 'city', 'country', 'address', 'phone', 'email'
    ];
}
