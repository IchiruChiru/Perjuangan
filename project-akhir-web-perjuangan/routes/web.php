<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TransaksiPenjualanController;
use App\Http\Controllers\TransaksiPembelianController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DetailTransaksiPembelianController;
use App\Http\Controllers\DetailTransaksiPenjualanController;
use App\Http\Controllers\LaporanPembelianController;
use App\Http\Controllers\LaporanPenjualanController;
use App\Http\Controllers\DetailLaporanPenjualanController;
use App\Http\Controllers\DetailLaporanPembelianController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Models\TransaksiPembelian;
use Symfony\Component\HttpKernel\Profiler\Profile;

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
// Route::get('/', function () {
//     return view('pages.pages_lainnya.index');
// });

// //User
// Route::middleware(['auth', 'cek_login:user'])->group(function () {
//     //Dashboard
//     Route::get('/dashboard', function () {
//         return view('pages.pages_lainnya.dashboard');
//     });
//     //Laporan keuangan
//     Route::get('/laporanPembelian', [Controller::class, 'laporanPembelian']);
//     Route::get('/laporanPenjualan', [Controller::class, 'laporanPenjualan']);

//     //KelolaBarang
//     Route::get('/listdatabarang', [BarangController::class, 'index']);
//     Route::get('/tambahdatabarang', [BarangController::class, 'create']);
//     Route::post('/databarang/store', [BarangController::class, 'store']);
//     Route::post('/databarang/update/{id}', [BarangController::class, 'update']);
//     Route::get('/databarang/hapus/{id}', [BarangController::class, 'delete']);

//     //Transaksi
//     Route::get('/transaksipembelian', [TransaksiPembelianController::class, 'index']);
//     Route::get('/transaksipenjualan', [TransaksiPenjualanController::class, 'index']);


//     //Supplier
//     Route::get('/listdatasupplier', [SupplierController::class, 'index']);
//     Route::get('/tambahdatasupplier', [SupplierController::class, 'create']);
//     Route::post('/datasupplier/store', [SupplierController::class, 'store']);
//     Route::get('/datasupplier/hapus/{id}', [SupplierController::class, 'delete']);
//     Route::post('/datasupplier/update/{id}', [SupplierController::class, 'update']);
// });

// //Admin
// Route::middleware(['auth', 'cek_login:admin'])->group(function () {
//     //Dashboard
//     Route::get('/dashboard', function () {
//         return view('pages.pages_lainnya.dashboard');
//     });
//     //Laporan keuangan
//     Route::get('/laporanPembelian', [Controller::class, 'laporanPembelian']);
//     Route::get('/laporanPenjualan', [Controller::class, 'laporanPenjualan']);

//     //KelolaBarang
//     Route::get('/listdatabarang', [BarangController::class, 'index']);
//     Route::get('/tambahdatabarang', [BarangController::class, 'create']);
//     Route::post('/databarang/store', [BarangController::class, 'store']);
//     Route::post('/databarang/update/{id}', [BarangController::class, 'update']);
//     Route::get('/databarang/hapus/{id}', [BarangController::class, 'delete']);

//     //Transaksi
//     Route::get('/transaksipembelian', [TransaksiPembelianController::class, 'index']);
//     Route::get('/transaksipenjualan', [TransaksiPenjualanController::class, 'index']);


//     //Supplier
//     Route::get('/listdatasupplier', [SupplierController::class, 'index']);
//     Route::get('/tambahdatasupplier', [SupplierController::class, 'create']);
//     Route::post('/datasupplier/store', [SupplierController::class, 'store']);
//     Route::get('/datasupplier/hapus/{id}', [SupplierController::class, 'delete']);
//     Route::post('/datasupplier/update/{id}', [SupplierController::class, 'update']);
// });


// /**
//  * Register Routes
//  */

// Route::get('register', [AuthController::class, 'register'])->name('register');
// Route::post('proses_register', [AuthController::class, 'proses_register'])->name('proses_register');
// /**
//  * Login Routes
//  */
// Route::get('login', [AuthController::class, 'index'])->name('login');
// Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
// Route::get('logout', [AuthController::class, 'logout'])->name('logout');


// Route::group(['middleware' => ['auth']], function () {
//     Route::group(['middleware' => ['cek_login:admin']], function () {
//         Route::resource('admin', AdminController::class);
//     });
//     Route::group(['middleware' => ['cek_login:user']], function () {
//         Route::resource('user', UserController::class);
//     });
// });

Route::get('/', function () {
    return view('pages.pages_lainnya.index');
});

// routes/web.php

use App\Http\Controllers\YourController;




// Auth routes
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('proses_register', [AuthController::class, 'proses_register'])->name('proses_register');

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// Protected routes for both 'admin' and 'user'
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::post('/update-content', [YourController::class, 'updateContent']);

    // Common routes for both 'admin' and 'user'
    Route::group(['middleware' => 'auth'], function () {

        // Profile
        Route::get('/profile', [ProfileController::class, 'index']);

        // KelolaBarang
        Route::get('/listdatabarang', [BarangController::class, 'index']);
        Route::post('/databarang/store', [BarangController::class, 'store']);
        Route::post('/databarang/update/{id}', [BarangController::class, 'update']);
        Route::get('/databarang/hapus/{id}', [BarangController::class, 'delete']);

        // Route::get('/detail', [DetailTransaksiPembelianController::class, 'baru']);

        // Supplier
        Route::get('/listdatasupplier', [SupplierController::class, 'index']);
        Route::post('/datasupplier/store', [SupplierController::class, 'store']);
        Route::get('/datasupplier/hapus/{id}', [SupplierController::class, 'delete']);
        Route::post('/datasupplier/update/{id}', [SupplierController::class, 'update']);
    });

    // Admin-specific routes
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('admin', AdminController::class);
            // Laporan keuangan
    Route::get('/laporanPembelian', [LaporanPembelianController::class, 'index'])->name('detailpembelian');
    Route::get('/laporanPenjualan', [LaporanPenjualanController::class, 'index']);
    Route::get('/detaillaporanPembelian/{id}', [DetailLaporanPembelianController::class, 'index']);
    Route::get('/detaillaporanPenjualan/{id}', [DetailLaporanPenjualanController::class, 'index']);
    Route::get('/tambahdatabarang', [BarangController::class, 'create']);
    Route::get('/tambahdatasupplier', [SupplierController::class, 'create']);
    });

    // User-specific routes
    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::resource('user', UserController::class);
           // Transaksi
        Route::get('/transaksipembelian', [TransaksiPembelianController::class, 'index']);
        Route::get('/transaksipenjualan', [TransaksiPenjualanController::class, 'index']);
        Route::post('/transaksipenjualan/store', [TransaksiPenjualanController::class, 'store']);
        Route::post('/transaksipembelian/store', [TransaksiPembelianController::class, 'store']);

    });
});
