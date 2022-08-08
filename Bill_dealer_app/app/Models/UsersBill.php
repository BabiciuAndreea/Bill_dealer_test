<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersBill extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', ' last_name', ' email', ' password', 'address', ' phone', 'cnp', 'role'
    ];
}
