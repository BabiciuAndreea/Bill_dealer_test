<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BNRController extends Controller
{
    //
    private function getCursFromBNR() {
        $curs = simplexml_load_string(file_get_contents('https://www.bnr.ro/nbrfxrates.xml'));

        $data = new \stdClass();
		$data->publishDate = $curs->Header->PublishingDate;
        $data->rates = [];
        foreach ($curs->Body->Cube->Rate as $rate) {
            $r = new \stdClass();
            $r->currency = $rate['currency'][0]."";
            if(isset($rate['multiplier']))
                $r->multiplier = intval($rate['multiplier']."");
            else $r->multiplier = 1;
            $r->rate = doubleval($rate."");
            $data->rates[] = $r;
        }
        return $data;
    }
}
