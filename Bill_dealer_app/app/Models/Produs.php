<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produs extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'denumire', 'unitate_masura', 'pret_unitar', 'cantitate'
    ];
}
