<?php

use App\Http\Controllers\AddCompanyController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EditCompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Settings;
use App\Http\Controllers\ViewsController;
use Illuminate\Routing\ViewController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\dashboardController;

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

Route::get('/', [ViewsController::class, 'welcome']);

// Route::view('/register', 'register');

Route::get('settings', [ViewsController::class, 'settings'])->name('settings');

Route::get('info', [ViewsController::class, 'info']);

Route::get('home', [RoleController::class, 'setRole'])->name('home');

Route::get('addEmployee', [EmployeeController::class, 'index'])->name('addEmployee');

Route::get('Company_add_view', [AddCompanyController::class, 'index'])->name('company');

Route::POST('Company_add', [AddCompanyController::class, 'store'])->name('addCompany');

Route::get('Company_edit_view', [EditCompanyController::class, 'index'])->name('edit_company_view');

Route::get('invoice', [InvoiceController::class, 'index'])->name('invoice.index');

Route::get('invoice/store', [InvoiceController::class, 'store'])->name('invoice.store');

Route::get('invoice/destroy', [InvoiceController::class, 'destroy'])->name('invoice.destroy');

Route::get('invoice/edit', [InvoiceController::class, 'edit'])->name('invoice.edit');

Route::resource('products', ProductController::class);

Route::resource('invoices', InvoiceController::class);

Route::resource('employees', EmployeeController::class);

Route::resource('companies', EditCompanyController::class);

Route::get('dashboard', [dashboardController::class, 'view'])->name('dashboard');
