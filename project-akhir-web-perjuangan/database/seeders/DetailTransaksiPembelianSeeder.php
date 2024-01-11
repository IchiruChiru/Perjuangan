<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DetailTransaksiPembelian;

class DetailTransaksiPembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =   [  
        ['Barang_id' => '1','Transaksi_Pembelian_id'=> '1','jumlah_beli' => '1'],
        ['Barang_id' => '1','Transaksi_Pembelian_id'=> '1','jumlah_beli' => '1'],
        ['Barang_id' => '1','Transaksi_Pembelian_id'=> '1','jumlah_beli' => '1'],
        ];

        // untuk mengacak urutan data
        shuffle($data);
        // Masukkan data ke dalam tabel DetailTransaksiPembelian
        DetailTransaksiPembelian::insert($data);
    }
}
