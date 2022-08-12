<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comanda extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'comandas';

    protected $fillable = [
        'tva_total', 'valoare_total', 'curs_valutar'
    ];
}
