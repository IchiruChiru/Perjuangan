@extends('layout.master')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@section('title','Dashboard')

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
                    <h3>2834</h3>
                    <p>Jumlah Transaksi Penjualan</p>
                </span>
            </li>
       
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
                    <h3>Rp {{  number_format($grandTotalSeluruhTransaksiPembelian, 0, ',', '.')}}</h3>
                    <p>Total Profit Penjualan Barang </p>
                </span>
            </li>
        </ul>


        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Recent Orders</h3>
                    <i class='bx bx-search' ></i>
                    <i class='bx bx-filter' ></i>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Date Order</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img src="img/people.png">
                                <p>John Doe</p>
                            </td>
                            <td>01-10-2021</td>
                            <td><span class="status completed">Completed</span></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="img/people.png">
                                <p>John Doe</p>
                            </td>
                            <td>01-10-2021</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="img/people.png">
                                <p>John Doe</p>
                            </td>
                            <td>01-10-2021</td>
                            <td><span class="status process">Process</span></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="img/people.png">
                                <p>John Doe</p>
                            </td>
                            <td>01-10-2021</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="img/people.png">
                                <p>John Doe</p>
                            </td>
                            <td>01-10-2021</td>
                            <td><span class="status completed">Completed</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="todo">
                <div class="head">
                    <h3>Todos</h3>
                    <i class='bx bx-plus' ></i>
                    <i class='bx bx-filter' ></i>
                </div>
                <ul class="todo-list">
                    <li class="completed">
                        <p>Todo List</p>
                        <i class='bx bx-dots-vertical-rounded' ></i>
                    </li>
                    <li class="completed">
                        <p>Todo List</p>
                        <i class='bx bx-dots-vertical-rounded' ></i>
                    </li>
                    <li class="not-completed">
                        <p>Todo List</p>
                        <i class='bx bx-dots-vertical-rounded' ></i>
                    </li>
                    <li class="completed">
                        <p>Todo List</p>
                        <i class='bx bx-dots-vertical-rounded' ></i>
                    </li>
                    <li class="not-completed">
                        <p>Todo List</p>
                        <i class='bx bx-dots-vertical-rounded' ></i>
                    </li>
                </ul>
            </div>
        </div>
    </main>
    <!-- MAIN -->
</section>
@endsection