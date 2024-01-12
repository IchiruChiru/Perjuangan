<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Supplier;
class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama_supplier' => 'PT Digital Maju ',
                'lokasi_supplier' => 'Jl. Teratai Tenang No. 27',
                'no_telp' => '6285678901234'
            ],
            [
                'nama_supplier' => 'PT Komunikasi Digital',
                'lokasi_supplier' => 'Jl. Cendrawasih No. 94',
                'no_telp' => '6287110987654'
            ],
            [
                'nama_supplier' => 'PT Mobile Teknologi',
                'lokasi_supplier' => 'Jl. Melati Harmoni No. 34',
                'no_telp' => '6287543210987'
            ],
            [
                'nama_supplier' => 'PT Solusi Teknologi',
                'lokasi_supplier' => 'Jl. Cendana Mawar No. 19',
                'no_telp' => '6289102345678'
            ],
            [
                'nama_supplier' => 'PT Tekno Inovasi',
                'lokasi_supplier' => 'Jl. Rambutan Indah No. 41',
                'no_telp' => '6288543210976'
            ],[
                'nama_supplier' => 'PT Cyber Solusi ',
                'lokasi_supplier' => 'Jl. Merak Sakti No. 31',
                'no_telp' => '6282469870123'
            ],
            [
                'nama_supplier' => 'PT Tech Development',
                'lokasi_supplier' => 'Jl. Merbau No. 25',
                'no_telp' => '6286912345678'
            ],
            [
                'nama_supplier' => 'PT Seluler Inovasi',
                'lokasi_supplier' => 'Jl. Manggis Teratai No. 36',
                'no_telp' => '6285721034987'
            ],
            [
                'nama_supplier' => 'PT Komunikasi Cerdas',
                'lokasi_supplier' => 'Jl. Puspa Sari No. 29',
                'no_telp' => '281334567890'
            ],
            [
                'nama_supplier' => 'PT Mobile Teknologi',
                'lokasi_supplier' => 'Jl. Seroja Sejahtera No. 4',
                'no_telp' => '6286245890134
                '
            ],
            
        ];
        // untuk mengacak urutan data
        shuffle($data);

        // Masukkan data ke dalam tabel Supplier
        Supplier::insert($data);
    }
}
