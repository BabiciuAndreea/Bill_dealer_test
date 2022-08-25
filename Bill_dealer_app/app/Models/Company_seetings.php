<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company_seetings extends Model
{
    use HasFactory;
    protected $table = 'client_company_settins';
    protected $fillable = [
        'id', 'company_name', 'address' ,'pdf_template'
    ];
	
	
}
