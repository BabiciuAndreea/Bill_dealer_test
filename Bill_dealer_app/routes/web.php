<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerTest;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UsersBillController;
use App\Http\Controllers\ClientController;
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

// Route::get('/cerere', function () {
//     return view('exempluCerere');
// });

Route::get('/cerere/index', [ControllerTest::class, 'index']);

// Route::get('/cerere', [App\Http\Controllers\ControllerXML\XMLController::class, 'sayHi'])->name('cerere');

// Route::controller(ControllerXML::class)->group(function () {
//     Route::get('cerere', 'sayHi')->name('cerere.sayHi');
// });

// Route::get('/cerere', [\App\Http\Controllers\ControllerXML::class, 'sayHi'])->name('cerere');
Route::get('/test', [ControllerTest::class, 'index']);

Route::get('/cmp', function () {
    return view('company/companyFormular');
})->name('cmp');
Route::get('/cli', function () {
    return view('client/clientFormular');
})->name('cli');
Route::get('/cmd', function () {
    return view('comanda/comandaFormular');
})->name('cmd');
Route::get('/inv', function () {
    return view('invoice/invoiceFormular');
})->name('inv');
Route::get('/prod', function () {
    return view('produs/produsFormular');
})->name('prod');
Route::get('/user', function () {
    return view('users_bill/usersFormular');
})->name('user');


Route::resource('test', ControllerTest::class);

Route::prefix('/factura')->group(function () {
    Route::get('/', [InvoiceController::class, 'index'])->name('factura.index');
    Route::get('/{id}', [InvoiceController::class, 'show'])->name('factura.show');
    Route::get('/create', [InvoiceController::class, 'create'])->name('factura.create');
    Route::post('/', [InvoiceController::class, 'store'])->name('factura.store');
    Route::get('/edit/{id}', [InvoiceController::class, 'edit'])->name('factura.edit');
    Route::patch('/{id}', [InvoiceController::class, 'update'])->name('factura.update');
    Route::delete('/{id}', [InvoiceController::class, 'destroy'])->name('factura.destroy');
});

Route::prefix('/comanda')->group(function () {
    Route::get('/', [ComandaController::class, 'index'])->name('comanda.index');
    Route::get('/{id}', [ComandaController::class, 'show'])->name('comanda.show');
    Route::get('/create', [ComandaController::class, 'create'])->name('comanda.create');
    Route::post('/', [ComandaController::class, 'store'])->name('comanda.store');
    Route::get('/edit/{id}', [ComandaController::class, 'edit'])->name('comanda.edit');
    Route::patch('/{id}', [ComandaController::class, 'update'])->name('comanda.update');
    Route::delete('/{id}', [ComandaController::class, 'destroy'])->name('comanda.destroy');
});

Route::prefix('/client')->group(function () {
    Route::get('/', [ClientController::class, 'index'])->name('client.index');
    Route::get('/{id}', [ClientController::class, 'show'])->name('client.show');
    Route::get('/create', [ClientController::class, 'create'])->name('client.create');
    Route::post('/', [ClientController::class, 'store'])->name('client.store');
    Route::get('/edit/{id}', [ClientController::class, 'edit'])->name('client.edit');
    Route::patch('/{id}', [ClientController::class, 'update'])->name('client.update');
    Route::delete('/{id}', [ClientController::class, 'destroy'])->name('client.destroy');
});

Route::prefix('/company')->group(function () {
    Route::get('/create', [CompanyController::class, 'create'])->name('company.create');
    Route::get('/', [CompanyController::class, 'index'])->name('company.index');
    Route::get('/{id}', [CompanyController::class, 'show'])->name('company.show');
    Route::post('/', [CompanyController::class, 'store'])->name('company.store');
    Route::get('/edit/{id}', [CompanyController::class, 'edit'])->name('company.edit');
    Route::patch('/{id}', [CompanyController::class, 'update'])->name('company.update');
    Route::delete('/{id}', [CompanyController::class, 'destroy'])->name('company.destroy');
});

Route::prefix('/produs')->group(function () {
    Route::get('/', [ProdusController::class, 'index'])->name('produs.index');
    Route::get('/{id}', [ProdusController::class, 'show'])->name('produs.show');
    Route::get('/create', [ProdusController::class, 'create'])->name('produs.create');
    Route::post('/', [ProdusController::class, 'store'])->name('produs.store');
    Route::get('/edit/{id}', [ProdusController::class, 'edit'])->name('produs.edit');
    Route::patch('/{id}', [ProdusController::class, 'update'])->name('produs.update');
    Route::delete('/{id}', [ProdusController::class, 'destroy'])->name('produs.destroy');
});

Route::prefix('/users_bill')->group(function () {
    Route::get('/create', [UsersBillController::class, 'create'])->name('users_bill.create');
    Route::get('/', [UsersBillController::class, 'index'])->name('users_bill.index');
    Route::get('/{id}', [UsersBillController::class, 'show'])->name('users_bill.show');

    Route::post('/', [UsersBillController::class, 'store'])->name('users_bill.store');
    Route::get('/edit/{id}', [UsersBillController::class, 'edit'])->name('users_bill.edit');
    Route::patch('/{id}', [UsersBillController::class, 'update'])->name('users_bill.update');
    Route::delete('/{id}', [UsersBillController::class, 'destroy'])->name('users_bill.destroy');
});

//trebe ruta speciala pt relatie comandaProdus? sau ea se deduce. ..?