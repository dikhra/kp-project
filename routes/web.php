<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChildController;

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

Route::get('/', [AdminController::class, 'index']);

Route::get('/daftar_anak', [AdminController::class, 'daftar_anak' ]);

Route::get('/tambah_anak', [AdminController::class,'tambah_anak']);

Route::post('/child/store', [ChildController::class,'store'])->name('child.store');
