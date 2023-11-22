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

// routes/web.php
use App\Http\Controllers\BarangController;

Route::get('/input-barang', [BarangController::class, 'showForm']);
Route::post('/process-form', [BarangController::class, 'processForm'])->name('process.form');

