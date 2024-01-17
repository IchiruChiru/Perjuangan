@extends('layout.master')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

@section('content')

<section id="content">
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Dashboard</h1>
            </div>
        </div>

        <ul class="box-info justify-content-evenly">
            <li>
                <i class='bx fa-solid fa-cart-shopping' ></i>
                <span class="text">
                    <h3>{{ $jumlahTransaksiPembelian }}</h3>
                    <p>Jumlah Transaksi Pembelian</p>
                </span>
            </li>
            <li>
                <i class='bx bxs-group fa-solid fa-cart-shopping' ></i>
                <span class="text">
                    <h3>{{ $jumlahTransaksiPenjualan }}</h3>
                    <p>Jumlah Transaksi Penjualan</p>
                </span>
            </li>
       
            @if(Auth::user()->level=== 'admin')
            <li>
                <i class='bx fa-solid fa-money-bill' ></i>
                <span class="text">
                    <h3>Rp {{  number_format($grandTotalSeluruhTransaksiPembelian, 0, ',', '.')}}</h3>
                    <p>Total Pengeluaran Pembelian Barang </p>
                </span>
            </li>
            <li>
                <i class='bx fa-solid fa-money-bill' ></i>
                <span class="text">
                    <h3>Rp {{  number_format($grandTotalSeluruhTransaksiPenjualan, 0, ',', '.')}}</h3>
                    <p>Total Omzet Penjualan Barang </p>
                </span>
            </li>
            <li>
                <i class='bx fa-solid fa-solid fa-boxes-stacked' ></i>
                <span class="text">
                    <h3>{{ $jumlahJenisBarang }}</h3>
                    <p>Jumlah Jenis Barang</p>
                </span>
            </li>
            <li>
                <i class='bx fa-solid fa-solid fa-industry' ></i>
                <span class="text">
                    <h3>{{ $jumlahSupplier }}</h3>
                    <p>Jumlah Supplier</p>
                </span>
            </li>
            @endif
        </ul>


        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Penjualan Akhir akhir ini</h3>
                    <i class='bx bx-search' ></i>
                    <i class='bx bx-filter' ></i>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Transaksi</th>
                            <th>Kasir yang Melayani</th>
                            <th>Grand total</th>
                            @if(Auth::user()->level=== 'admin')
                            <th>Aksi</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($transaksiPenjualans as $key => $transaksiPenjualan) 
                        <tr>
                            <td>{{ $transaksiPenjualans->firstItem() + $key }}</td>
                            <td>{{ \Carbon\Carbon::parse($transaksiPenjualan->tgl_transaksi)->locale('id_ID')->isoFormat('D MMMM Y') }}</td>
                            <td>{{ $transaksiPenjualan->name }}</td>
                            <td>Rp {{  number_format($transaksiPenjualan->sub_total, 0, ',', '.')}}</td>
                            @if(Auth::user()->level=== 'admin')
                            <td><button class="button-detail" onclick="lihatDetail('/detaillaporanPenjualan/{{ $transaksiPenjualan->id }}')"><i class="fa-solid fa-circle-info"></i> Lihat Detail</button></td>
                            @endif
                            @empty
                            <tr>
                                <td class="text-center" colspan="7">Tidak ada data yang ditemukan.</td>
                            </tr>
                            </tr>
                            @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <!-- MAIN -->
</section>
<script>
    function lihatDetail(url) {
        window.location.href = url;
    }
</script>
@endsection