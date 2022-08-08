<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Settings;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/company', function () {
    return view('auth.company');
});
Route::get('/Settings', function () {
    return view('Settings_page');
});
Route::get('/Info', function () {
    return view('info_page');
});

Route::get('/home', function () {
    return view('home');
})->middleware('auth');




