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
        'name', 'phone', 'email', 'department'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
