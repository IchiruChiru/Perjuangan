@extends('layout.master')
<link rel="stylesheet" href="css/tambah-data.css">
<link rel="stylesheet" href="css/listdata.css">

@php
   $grandTotal = 0;
@endphp
@foreach($transaksiPenjualans as $transaksiPenjualan)
    @php
        $grandTotal += $transaksiPenjualan->harga_barang*$transaksiPenjualan->jumlah_beli;
    @endphp
@endforeach

@section('content')

    <div class="details">
        <div class="format-table">
            <div class="cardHeader">
                <h2> Detail Laporan Penjualan</h2>
            </div>
            <div class="cardHeader mt-0">
                <h3>Tanggal Transaksi :  {{ \Carbon\Carbon::parse($transaksiPenjualans[0]->tgl_transaksi)->locale('id_ID')->isoFormat('D MMMM Y') }}</h3>
                <h3>Kasir : {{ $transaksiPenjualans[0]->name }}</h3>
            </div>
            <div class="cardHeader mt-0">
                <h3>Id Transaksi : {{ $transaksiPenjualans[0]->Transaksi_Penjualan_id }}</h3>
                <h3>GrandTotal : Rp {{  number_format($grandTotal, 0, ',', '.'); }}</h3>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>nama Barang</td>
                        <td>merk Barang</td>
                        <td>Jumlah Beli</td>
                        <td>Harga Barang</td>
                        <td>Sub Total</td>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($transaksiPenjualans as $key => $transaksiPenjualan) 
                        <tr>
                            <td>{{ $transaksiPenjualans->firstItem() + $key }}</td>
                            <td>{{ $transaksiPenjualan->nama_barang }}</td>
                            <td>{{ $transaksiPenjualan->merk_barang }}</td>
                            <td>{{  number_format($transaksiPenjualan->jumlah_beli, 0, ',', '.')}}</td>
                            <td>Rp {{ number_format($transaksiPenjualan->harga_barang, 0, ',', '.')}}</td>
                            <td>Rp {{ number_format($transaksiPenjualan->harga_barang*$transaksiPenjualan->jumlah_beli, 0, ',', '.')}}</td>
                            @empty
                            <tr>
                                <td class="text-center" colspan="7">Tidak ada data yang ditemukan.</td>
                            </tr>
                            </tr>
                    @endforelse

                </tbody>
            </table>
            <div class="url-paginasi">
                {{ $transaksiPenjualans->links() }}
            </div>
            <div class="informasi-paginasi">
                <span>Menampilkan</span>
                {{ $transaksiPenjualans->firstItem() }}
                <span> - </span>
                {{ $transaksiPenjualans->lastItem() }}
                <span>dari</span>
                {{ $transaksiPenjualans->total() }}
                <span>data</span>
            </div>
        </div>
    </div>
    
    <script src="../js/listdata.js"></script>
@endsection
