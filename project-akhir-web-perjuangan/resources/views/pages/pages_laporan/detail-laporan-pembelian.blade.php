@extends('layout.master')
<link rel="stylesheet" href="css/tambah-data.css">
<link rel="stylesheet" href="css/listdata.css">

@php
   $grandTotal = 0; 
@endphp
@foreach($transaksiPembelians as $transaksiPembelian)
    @php
        $grandTotal += $transaksiPembelian->harga_barang*$transaksiPembelian->jumlah_beli;
    @endphp
@endforeach

@section('content')

    <div class="details">
        <div class="format-table">
            <div class="cardHeader">
                <h2> Detail Laporan Pembelian</h2>
            </div>
            <div class="cardHeader mt-0">
                <h3>Tanggal Transaksi :  {{ \Carbon\Carbon::parse($transaksiPembelians[0]->tgl_transaksi)->locale('id_ID')->isoFormat('D MMMM Y') }}</h3>
                <h3>Supplier : {{ $transaksiPembelians[0]->nama_supplier }}</h3>
            </div>
            <div class="cardHeader mt-0">
                <h3>Id Transaksi : {{ $transaksiPembelians[0]->Transaksi_Pembelian_id }}</h3>
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
                    @forelse ($transaksiPembelians as $key => $transaksiPembelian) 
                        <tr>
                            <td>{{ $transaksiPembelians->firstItem() + $key }}</td>
                            <td>{{ $transaksiPembelian->nama_barang }}</td>
                            <td>{{ $transaksiPembelian->merk_barang }}</td>
                            <td>{{  number_format($transaksiPembelian->jumlah_beli, 0, ',', '.')}}</td>
                            <td>Rp {{ number_format($transaksiPembelian->harga_barang, 0, ',', '.')}}</td>
                            <td>Rp {{ number_format($transaksiPembelian->harga_barang*$transaksiPembelian->jumlah_beli, 0, ',', '.')}}</td>
                            @empty
                            <tr>
                                <td class="text-center" colspan="7">Tidak ada data yang ditemukan.</td>
                            </tr>
                            </tr>
                    @endforelse

                </tbody>
            </table>
            <div class="url-paginasi">
                {{ $transaksiPembelians->links() }}
            </div>
            <div class="informasi-paginasi">
                <span>Menampilkan</span>
                {{ $transaksiPembelians->firstItem() }}
                <span> - </span>
                {{ $transaksiPembelians->lastItem() }}
                <span>dari</span>
                {{ $transaksiPembelians->total() }}
                <span>data</span>
            </div>
        </div>
    </div>
    
    <script src="../js/listdata.js"></script>
@endsection
