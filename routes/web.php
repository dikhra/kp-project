<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChildController;
use App\Http\Controllers\MeasurementController;

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

Route::get('/dashboard', [AdminController::class, 'index']);

Route::get('/daftar_anak', [AdminController::class, 'daftar_anak' ]);

Route::get('/tambah_anak', [AdminController::class,'tambah_anak']);

Route::get('/cari_anak', [AdminController::class,'cari_anak']);

Route::post('/child/store', [ChildController::class,'store']);
Route::post('/measurement/store', [MeasurementController::class,'store']);

Route::get('/perkembangan_anak/{nik}', [AdminController::class,'perkembangan_anak']);

Route::get('/pengukuran_anak/{nik}', [AdminController::class,'pengukuran_anak']);
