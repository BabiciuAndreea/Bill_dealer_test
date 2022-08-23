<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link_Order_Product extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'link_oreder_product';


    protected $fillable = [
        'id_comanda', 'id_produs', 'cantitate', 'tva', 'valoare'
    ];
}
