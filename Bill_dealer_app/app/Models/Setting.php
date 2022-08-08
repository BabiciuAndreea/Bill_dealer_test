<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Setting
{
    protected $fillable = [
        'key',
        'value'
    ];

    public static function read($key) {
        $model = Setting::where('key', $key)->first();
        if($model)
            return $model->value;
        return null;
    }

    public static function write($key, $value) {
        $model = Setting::where('key', $key)->first();
        if($model == null) {
            $model = new Setting();
            $model->key = $key;
        }
        $model->value = $value;
        $model->save();
    } 
}
