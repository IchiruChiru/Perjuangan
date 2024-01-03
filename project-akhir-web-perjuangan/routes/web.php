<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller ;
use App\Http\Controllers\TransaksiPenjualanController;
use App\Http\Controllers\TransaksiPembelianController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SupplierController;

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

// Authentication and landing page
Route::get('/', function() {
    return view('layout.master');
});
Route::get('/login',[AuthController::class,'login']);
Route::get('/register',[AuthController::class,'register']);

//Dashboard
Route::get('/dashboard', function(){
    return view('pages.dashboard');
});

//Laporan keuangan
Route::get('/laporanPembelian',[Controller::class, 'laporanPembelian']);
Route::get('/laporanPenjualan',[Controller::class, 'laporanPenjualan']);

//KelolaBarang
Route::get('/listdatabarang',[BarangController::class, 'index']);
Route::get('/tambahdatabarang',[BarangController::class, 'create']);

//Transaksi
Route::get('/transaksipembelian',[TransaksiPembelianController::class, 'index']);
Route::get('/transaksipenjualan',[TransaksiPenjualanController::class, 'index']);


//Supplier
Route::get('/listdatasupplier',[SupplierController::class, 'index']);
Route::get('/tambahdatasupplier',[SupplierController::class, 'create']);