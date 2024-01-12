<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TransaksiPembelian;
class TransaksiPembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data =[
            [
                'Supplier_id' => '2',
                'tgl_transaksi' => '2024-01-01',
                'sub_total' => '2000'
            ],
            [
                'Supplier_id' => '2',
                'tgl_transaksi' => '2024-02-01',
                'sub_total' => '2000'
            ],
            [
                'Supplier_id' => '2',
                'tgl_transaksi' => '2024-04-01',
                'sub_total' => '2000'
            ],
        ];
        // untuk mengacak urutan data
        shuffle($data);

        // Masukkan data ke dalam tabel Transaksi Pembelian
        TransaksiPembelian::insert($data);
    }
}


