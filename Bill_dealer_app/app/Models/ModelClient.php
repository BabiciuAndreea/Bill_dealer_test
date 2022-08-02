<?php

namespace App\Models\ModelClient;

use Illuminate\Support\Facades\DB;

class ModelClients
{
    public function index()
    {
        $users = DB::select('select * from users ');
        return $users;
    }
}
