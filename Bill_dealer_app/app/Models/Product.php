<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price', 'unit', 'quantity', 'type'
    ];



}
