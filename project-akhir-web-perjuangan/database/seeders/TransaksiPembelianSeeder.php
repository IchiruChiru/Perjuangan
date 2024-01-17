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
        $data = [
            ['Supplier_id' => '1', 'tgl_transaksi' => '2021-02-15', 'sub_total' => '1000000'],
            ['Supplier_id' => '2', 'tgl_transaksi' => '2021-03-20', 'sub_total' => '2000000'],
            ['Supplier_id' => '3', 'tgl_transaksi' => '2021-04-25', 'sub_total' => '3000000'],
            ['Supplier_id' => '4', 'tgl_transaksi' => '2021-05-30', 'sub_total' => '4000000'],
            ['Supplier_id' => '5', 'tgl_transaksi' => '2021-06-05', 'sub_total' => '5000000'],
            ['Supplier_id' => '6', 'tgl_transaksi' => '2021-07-10', 'sub_total' => '6000000'],
            ['Supplier_id' => '7', 'tgl_transaksi' => '2021-08-15', 'sub_total' => '7000000'],
            ['Supplier_id' => '8', 'tgl_transaksi' => '2021-09-20', 'sub_total' => '8000000'],
            ['Supplier_id' => '9', 'tgl_transaksi' => '2021-10-25', 'sub_total' => '9000000'],
            ['Supplier_id' => '10', 'tgl_transaksi' => '2021-11-30', 'sub_total' => '10000000'],
            ['Supplier_id' => '1', 'tgl_transaksi' => '2021-12-05', 'sub_total' => '11000000'],
            ['Supplier_id' => '2', 'tgl_transaksi' => '2022-01-10', 'sub_total' => '12000000'],
            ['Supplier_id' => '3', 'tgl_transaksi' => '2022-02-15', 'sub_total' => '13000000'],
            ['Supplier_id' => '4', 'tgl_transaksi' => '2022-03-20', 'sub_total' => '14000000'],
            ['Supplier_id' => '5', 'tgl_transaksi' => '2022-04-25', 'sub_total' => '15000000'],
            ['Supplier_id' => '6', 'tgl_transaksi' => '2022-05-30', 'sub_total' => '16000000'],
            ['Supplier_id' => '7', 'tgl_transaksi' => '2022-06-05', 'sub_total' => '17000000'],
            ['Supplier_id' => '8', 'tgl_transaksi' => '2022-07-10', 'sub_total' => '18000000'],
            ['Supplier_id' => '9', 'tgl_transaksi' => '2022-08-15', 'sub_total' => '19000000'],
            ['Supplier_id' => '10', 'tgl_transaksi' => '2022-09-20', 'sub_total' => '20000000'],
            ['Supplier_id' => '1', 'tgl_transaksi' => '2022-10-25', 'sub_total' => '21000000'],
            ['Supplier_id' => '2', 'tgl_transaksi' => '2022-11-30', 'sub_total' => '22000000'],
            ['Supplier_id' => '3', 'tgl_transaksi' => '2022-12-05', 'sub_total' => '35000000'],
            ['Supplier_id' => '4', 'tgl_transaksi' => '2023-01-10', 'sub_total' => '420000000'],
            ['Supplier_id' => '5', 'tgl_transaksi' => '2023-01-14', 'sub_total' => '300000000'],  
            ['Supplier_id' => '6', 'tgl_transaksi' => '2023-01-02', 'sub_total' => '540000000'],
            ['Supplier_id' => '7', 'tgl_transaksi' => '2023-01-06', 'sub_total' => '506000000'],
            ['Supplier_id' => '8', 'tgl_transaksi' => '2023-01-09', 'sub_total' => '238000000'],
            ['Supplier_id' => '9', 'tgl_transaksi' => '2023-01-12', 'sub_total' => '192000000'],
            ['Supplier_id' => '10', 'tgl_transaksi' => '2023-01-14', 'sub_total' => '50000000'],
            ['Supplier_id' => '1', 'tgl_transaksi' => '2023-01-03', 'sub_total' => '30000000'],
            ['Supplier_id' => '2', 'tgl_transaksi' => '2023-01-07', 'sub_total' => '21600000'],
        ];

        // Masukkan data ke dalam tabel Transaksi Pembelian
        TransaksiPembelian::insert($data);
    }
}


