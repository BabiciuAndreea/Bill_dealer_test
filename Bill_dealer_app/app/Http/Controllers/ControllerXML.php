<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ControllerXML;
use App\Models\ModelClient\ModelClients;
// use App\Models\ModelClients;
use Illuminate\Support\Facades\DB;

class XMLController
{
    public function sayHi()
    {
        echo ('consol.log("hi")');
    }


    public function generateXML()
    {
        $data = new ModelClients();
        $xmlData = $data->index();
    }
}
