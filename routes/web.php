<?php

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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\CustomerController::class, 'index'])->name('home');
Route::get('customers/export', [App\Http\Controllers\CustomerController::class, 'export'])->name('customer.export');
Route::get('customers/export_view', [App\Http\Controllers\CustomerController::class, 'export_view'])->name('customer.export_view');
Route::get('customers/export_store', [App\Http\Controllers\CustomerController::class, 'export_store'])->name('customer.export_store');
Route::get('customers/export_format/{format}', [App\Http\Controllers\CustomerController::class, 'export_format'])->name('customer.export_format');
Route::get('customers/export_sheets', [App\Http\Controllers\CustomerController::class, 'export_sheets'])->name('customer.export_sheets');
Route::get('customers/export_heading', [App\Http\Controllers\CustomerController::class, 'export_heading'])->name('customer.export_heading');
Route::get('customers/export_mapping', [App\Http\Controllers\CustomerController::class, 'export_mapping'])->name('customer.export_mapping');
Route::get('customers/export_styling', [App\Http\Controllers\CustomerController::class, 'export_styling'])->name('customer.export_styling');
Route::get('customers/export_autosize', [App\Http\Controllers\CustomerController::class, 'export_autosize'])->name('customer.export_autosize');
