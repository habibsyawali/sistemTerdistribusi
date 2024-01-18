<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\PotonganController;
use App\Http\Controllers\PotonganHargaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/potongan-harga/{karyawanId}', [ApiController::class, 'getPotonganHarga']);
// Route::get('/api/get-potongan-harga/{karyawanId}', [PotonganController::class, 'getPotonganHarga']);
Route::get('/api/get-potongan-harga/{karyawanId}', [PotonganHargaController::class, 'getPotonganHarga']);


