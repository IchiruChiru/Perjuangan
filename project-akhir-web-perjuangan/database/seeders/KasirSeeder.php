<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kasir;
class KasirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama_kasir' => 'Kevin',
                'no_telp' => '6254698741236'
            ],
            [
                'nama_kasir' => 'Budi',
                'no_telp' => '6245319524675'
            ],
            [
                'nama_kasir' => 'Anna',
                'no_telp' => '6234578416985'
            ],
            [
                'nama_kasir' => 'Gita',
                'no_telp' => '6254782336985'
            ],
            [
                'nama_kasir' => 'Roni',
                'no_telp' => '6233021456987'
            ]
        ];
            // untuk mengacak urutan data
            shuffle($data);

            // Masukkan data ke dalam tabel Barang
            Kasir::insert($data);
    }
}
