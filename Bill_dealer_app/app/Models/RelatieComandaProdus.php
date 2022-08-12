<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelatieComandaProdus extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'relatie_comanda_produses';


    protected $fillable = [
        'id_comanda', 'id_produs', 'cantitate', 'tva', 'valoare'
    ];
}
