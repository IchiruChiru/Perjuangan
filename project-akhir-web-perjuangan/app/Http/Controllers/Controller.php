<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function laporanPembelian()
    {
        return view('pages.laporan-pembelian');
    }
    public function laporanPenjualan()
    {
        return view('pages.laporan-penjualan');
    }
}