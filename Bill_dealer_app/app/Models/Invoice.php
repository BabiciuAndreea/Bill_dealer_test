<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'invoice';


    protected $fillable = [
        'data_emitere', 'data_scadenta', 'serie_factura', 'nr_factura'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'id_client');
    }
}
