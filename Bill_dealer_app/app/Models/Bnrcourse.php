<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Bnrcourse extends Model
{
    use HasFactory;
    public static function getCursFromBNR() {
        return Cache::remember('CursBnr', 3600, function () {
            $curs = simplexml_load_string(file_get_contents('https://www.bnr.ro/nbrfxrates.xml'));
            $data = new \stdClass();
		    $data->publishDate = $curs->Header->PublishingDate."";
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
        });
    }
}
