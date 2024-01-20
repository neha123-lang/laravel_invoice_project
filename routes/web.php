<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductInvoiceController;
use App\Http\Controllers\invoiceGen;


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

Route::get('/', [ProductInvoiceController::class , 'index']);
Route::post('/products', [ProductInvoiceController::class , 'store'])->name('product.store');
Route::get('/generate-pdf', [invoiceGen::class, 'generatePDF'])->name('pdfGen');
