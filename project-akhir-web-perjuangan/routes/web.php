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
    return view('pages.pages_lainnya.index');
});
// Route::get('/login',[AuthController::class,'login']);
// Route::get('/register',[AuthController::class,'register']);

//Dashboard
Route::get('/dashboard', function(){
    return view('pages.pages_lainnya.dashboard');
});

//Laporan keuangan
Route::get('/laporanPembelian',[Controller::class, 'laporanPembelian']);
Route::get('/laporanPenjualan',[Controller::class, 'laporanPenjualan']);

//KelolaBarang
Route::get('/listdatabarang',[BarangController::class, 'index']);
Route::get('/tambahdatabarang',[BarangController::class, 'create']);
Route::post('/databarang/store',[BarangController::class,'store']);
Route::post('/databarang/update/{id}',[BarangController::class,'update']);
Route::get('/databarang/hapus/{id}',[BarangController::class,'delete']);

//Transaksi
Route::get('/transaksipembelian',[TransaksiPembelianController::class, 'index']);
Route::get('/transaksipenjualan',[TransaksiPenjualanController::class, 'index']);


//Supplier
Route::get('/listdatasupplier',[SupplierController::class, 'index']);
Route::get('/tambahdatasupplier',[SupplierController::class, 'create']);
Route::post('/datasupplier/store',[SupplierController::class, 'store']);
Route::get('/datasupplier/hapus/{id}',[SupplierController::class, 'delete']);
Route::post('/datasupplier/update/{id}',[SupplierController::class, 'update']);

// Auth
Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    // Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/', function() {
        return view('pages.pages_lainnya.index');
    });
    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');
        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
    });
    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});