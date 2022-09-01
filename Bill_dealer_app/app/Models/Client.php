<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'client';


    protected $fillable = [
        'client_name', 'cif', 'nr_reg', 'city', 'county', 'id_comanda', 'address', 'phone', 'email'
    ];

    public function contact()
    {
        return $this->hasMany(ContactPerson::class);
    }

    public function invoice()
    {
        return $this->hasMany(Invoice::class,'id_client');
    }
}
