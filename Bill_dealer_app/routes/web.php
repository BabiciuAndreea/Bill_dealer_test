<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Settings;
use Illuminate\Support\Facades\Auth;
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

Route::get('/Settings', function () {
    return view('Settings_page');
})->name('settings');

Route::get('/Info', function () {
    return view('info_page');
});

Route::get('/Register', function () {
    return view('auth.register');
});

Route::get('/home', function () {
    if(Auth::check()){
        if(Auth::user()->role == 'admin'){
            return view('users.admin');
        }else{
            return view('users.user');
        }
    }else{
        return view('auth.login');
    }
})->name('home');

Route::get('add', [AddEmployeeControlle::class, 'add'])->name('add');
