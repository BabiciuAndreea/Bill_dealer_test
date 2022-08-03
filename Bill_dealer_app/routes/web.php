<?php

use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\Route;

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

Route::get('/hihu', function () {
    Debugbar::info('Welcome to the web route format');
    return view('hihu');
});

Route::get('/cerere', function () {
    return view('exempluCerere');
});

// Route::get('/cerere', [App\Http\Controllers\ControllerXML\XMLController::class, 'sayHi'])->name('cerere');

// Route::controller(ControllerXML::class)->group(function () {
//     Route::get('cerere', 'sayHi')->name('cerere.sayHi');
// });

// Route::get('/cerere', [\App\Http\Controllers\ControllerXML::class, 'sayHi'])->name('cerere');
