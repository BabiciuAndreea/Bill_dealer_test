<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'client_name', 'cif', 'nr_reg', 'city', 'county', 'address', 'phone', 'email'
    ];
}
