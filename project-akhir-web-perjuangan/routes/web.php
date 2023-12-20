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
    return view('pages.index');
});
Route::get('/login',[AuthController::class,'login']);
Route::get('/register',[AuthController::class,'register']);

//Dashboard
Route::get('/dashboard', function(){
    return view('pages.dashboard');
});

//Laporan keuangan
Route::get('/laporankeuangan',[Controller::class, 'laporanKeuangan']);

//KelolaBarang
Route::get('/kelolabarang',[BarangController::class, 'kelolaBarang']);

//Transaksi
Route::get('/transaksipembelian',[TransaksiPembelianController::class, 'index']);
Route::get('/transaksipenjualan',[TransaksiPenjualanController::class, 'index']);


//Supplier
Route::get('/supplier',[SupplierController::class, 'index']);