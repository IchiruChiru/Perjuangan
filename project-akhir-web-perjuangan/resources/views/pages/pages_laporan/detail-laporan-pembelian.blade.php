@extends('layout.master')
<link rel="stylesheet" href="css/tambah-data.css">
@section('title','list Data Laporan Pembelian')
<link rel="stylesheet" href="css/listdata.css">

@section('content')

    <div class="details">
        <div class="format-table">
            <div class="cardHeader">
                <h2> Detail Laporan Pembelian</h2>
            </div>

            <table>
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Tanggal Transaksi</td>
                        <td>id Transaksi</td>
                        <td>Nama Supplier</td>
                        <td>nama Barang</td>
                        <td>merk Barang</td>
                        <td>Jumlah Beli</td>
                        <td>Harga Barang</td>
                        <td>Sub Total</td>
                    </tr>
                </thead>

                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($transaksiPembelians as $transaksiPembelian)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $transaksiPembelian->tgl_transaksi }}</td>
                            <td>{{ $transaksiPembelian->Transaksi_Pembelian_id }}</td>
                            <td>{{ $transaksiPembelian->nama_supplier }}</td>
                            <td>{{ $transaksiPembelian->nama_barang }}</td>
                            <td>{{ $transaksiPembelian->merk_barang }}</td>
                            <td>{{  $transaksiPembelian->jumlah_beli}}</td>
                            <td>Rp {{ $transaksiPembelian->harga_barang }}</td>
                            <td>Rp {{ $transaksiPembelian->harga_barang*$transaksiPembelian->jumlah_beli }}</td>
                    @endforeach
    <script src="../js/listdata.js"></script>
@endsection
