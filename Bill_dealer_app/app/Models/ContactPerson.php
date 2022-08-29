<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPerson extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'contact_person';


    protected $fillable = [
        'client_id', 'name', 'phone', 'email', 'department'
    ];
}
