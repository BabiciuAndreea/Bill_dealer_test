<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerTest;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\AssignOp\Concat;

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
// Route::get('/test', [ControllerTest::class, 'index']);

Route::resource('test', ControllerTest::class);

Route::prefix('/factura')->group(function () {
    Route::get('/', [ControllerTest::class, 'index'])->name('factura.index');
    Route::get('/{id}', [ControllerTest::class, 'show'])->name('factura.show');
    Route::get('/create', [ControllerTest::class, 'create'])->name('factura.create');
    Route::post('/', [ControllerTest::class, 'store'])->name('factura.store');
    Route::get('/edit/{id}', [ControllerTest::class, 'edit'])->name('factura.edit');
    Route::patch('/{id}', [ControllerTest::class, 'update'])->name('factura.update');
    Route::delete('/{id}', [ControllerTest::class, 'destroy'])->name('factura.destroy');
});
