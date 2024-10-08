<?php

use App\Http\Controllers\AddCompanyController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EditCompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ConatactPersonController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Settings;
use App\Http\Controllers\ViewsController;
use Illuminate\Routing\ViewController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\userDashController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\RegisterController;
use App\Models\Setting;

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

Route::get('/', [ViewsController::class, 'welcome'])->name('welcome');

// Route::view('/register', 'register');

Route::get('settings', [ViewsController::class, 'settings'])->name('settings');

Route::get('info', [ViewsController::class, 'info']);

Route::get('home', [RoleController::class, 'setRole'])->name('home');

Route::get('addEmployee', [EmployeeController::class, 'index'])->name('addEmployee');

Route::get('Company_add_view', [AddCompanyController::class, 'index'])->name('company');

Route::POST('Company_add', [AddCompanyController::class, 'store'])->name('addCompany');

Route::get('Company_edit_view', [EditCompanyController::class, 'index'])->name('edit_company_view');

Route::get('invoice', [InvoiceController::class, 'index'])->name('invoice.index');

// Route::get('invoice/store', [InvoiceController::class, 'store'])->name('invoice.store');

// Route::get('invoice/destroy', [InvoiceController::class, 'destroy'])->name('invoice.destroy');

// Route::get('invoice/edit', [InvoiceController::class, 'edit'])->name('invoice.edit');

Route::resource('products', ProductController::class);

Route::resource('invoices', InvoiceController::class);

Route::resource('client', ClientController::class);

Route::resource('employees', EmployeeController::class);

Route::resource('companies', EditCompanyController::class);

Route::POST('editpro',[Settings::class,'profileUpdate'])->name('update');

Route::POST('editpass',[Settings::class,'update_password'])->name('updatepass');

Route::get('dashboard', [dashboardController::class, 'index'])->name('dashboard');

Route::get('user_dashboard', [userDashController::class, 'index'])->name('userdash');

Route::get('Login', [ViewsController::class, 'login'])->name('Login');

Route::get('excel',[ProductController::class,'exportExcel'])->name('excel');

Route::post('Register', [RegisterController::class, 'store'])->name('Register');

Route::post('downloadPDF',[Settings::class,'downloadPDF'])->name('downloadPDF');
Route::post('pdf_down',[PdfController::class,'downloadPDF'])->name('pdf_down');


Route::post('downloadPDF',[Settings::class,'downloadPDF'])->name('downloadPDF');
Route::post('pdf_down',[PdfController::class,'downloadPDF'])->name('pdf_down');

Route::get('contacts', [ViewsController::class, 'contacts'])->name('contacts_view');


Route::get('produs_pdf',[ProductController::class,'createPdf'])->name('produs_pdf');

Route::get('{id}/contact_create/', [ViewsController::class, 'contact_create'])->name('contact_create');

Route::get('contacts', [ViewsController::class, 'contacts'])->name('contacts_view');

Route::get('{id}/contact_create/', [ViewsController::class, 'contact_create'])->name('contact_create');

Route::post('{id}/contact_add', [ConatactPersonController::class, 'store'])->name('contact.store');

Route::get('{id}/contact_view', [ConatactPersonController::class, 'index'])->name('contact.index');

Route::delete('{id}/contact_delete/', [ConatactPersonController::class, 'destroy'])->name('contact.destroy');

Route::get('{id}/contact_edit', [ConatactPersonController::class, 'edit'])->name('contact.edit');

Route::post('{id}/contact_add', [ConatactPersonController::class, 'store'])->name('contact.store');

Route::post('{id}/contact_update', [ConatactPersonController::class, 'update'])->name('contact.update');

Route::get('{id}/order', [OrderController::class, 'show'])->name('order');

Route::delete('/{id}/orderUpdated/{invoice_id}/', [OrderController::class, 'destroy'])->name('order.destroy');

Route::post('{id}/show_order', [OrderController::class, 'store'])->name('show_order');

Route::get('invoice_client', [ViewsController::class, 'client'])->name('invoice_client');

Route::get('{id}/show.client', [ClientController::class, 'show'])->name('show.client');

Route::get('unpaid_invoices_pdf',[InvoiceController::class,'createPdf'])->name('unpaid_invoices_pdf');

Route::get('invoice_excel',[InvoiceController::class,'exportExcel'])->name('excel_invoice');
Route::get('{id}/pdf', [PdfController::class, 'downloadPDF'])->name('pdf');
