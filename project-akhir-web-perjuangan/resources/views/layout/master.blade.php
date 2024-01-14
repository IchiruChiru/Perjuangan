<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <link rel="stylesheet" href="{{ asset('css/listdata.css') }}">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <title>GudangXpress</title>
    <link rel="stylesheet" href="@yield('css','path-css')">
    
</head>

<body>
    {{-- Import Boostrap's Javascript --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <div class="wrapper">
        <!-- Sidebar -->
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">GudangXpress</a>
                </div>

                <!-- Navbar -->
                <ul class="sidebar-nav">
                    <li class="sidebar-header">

                    </li>

                    <li class="sidebar-item animate__animated animate__slideInLeft">
                        <a href="{{ url('/profile') }}" class="sidebar-link">
                            <i class="fa-regular fa-user pe-2"></i>
                            <!-- <i class="fa-solid fa-list pe-2"></i> -->
                            Profile
                        </a>
                    </li>

                    <li class="sidebar-item animate__animated animate__slideInLeft">
                        <a href="{{ url('/dashboard') }}" class="sidebar-link collapsed">
                            <i class="fa-solid fa-sliders pe-2"></i>
                            Dashboard
                        </a>
                    </li>

                    @if(Auth::user()->level=== 'user')
                    <li class="sidebar-item animate__animated animate__slideInLeft">
                        <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#transaksi"
                            aria-expanded="false" aria-controls="transaksi">
                            <i class="fa-solid fa-cart-shopping pe-2"></i>
                            Transaksi
                        </a>
                        <ul id="transaksi" class="sidebar-dropdown list-unstyled collapse detail-dropdown" data-bs-parent="#sidebar">
                            <li class="sidebar-item ">
                                <a href="{{ url('/transaksipembelian') }}" class="sidebar-link animate__animated animate__slideInLeft">Transaksi Pembelian</a>
                            </li>
                            <li class="sidebar-item animate__animated animate__slideInLeft">
                                <a href="{{ url('/transaksipenjualan') }}" class="sidebar-link">Transaksi Penjualan</a>
                            </li>
                        </ul>
                    </li>
                    @endif

                    <li class="sidebar-item animate__animated animate__slideInLeft">
                        <a href="#" class="sidebar-link collapsed " data-bs-toggle="collapse" data-bs-target="#kelola-barang"
                            aria-expanded="false" aria-controls="kelola-barang">
                            <i class="fa-solid fa-box pe-2"></i>
                            Kelola Barang
                        </a>
                        <ul id="kelola-barang" class="sidebar-dropdown list-unstyled collapse detail-dropdown" data-bs-parent="#sidebar">
                            <li class="sidebar-item ">
                                <a href="{{ url('/listdatabarang') }}" class="sidebar-link detail-link animate__animated animate__slideInLeft">List Data Barang</a>
                            </li>
                            @if(Auth::user()->level=== 'admin')
                            <li class="sidebar-item">
                                <a href="{{ url('/tambahdatabarang') }}" class="sidebar-link detail-link animate__animated animate__slideInLeft">Tambah Data Barang</a>
                            </li>
                            @endif
                        </ul>
                    </li>

                    <li class="sidebar-item animate__animated animate__slideInLeft">
                        <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#kelola-supplier"
                            aria-expanded="false" aria-controls="kelola-supplier">
                            <i class="fa-solid fa-truck-fast pe-2"></i>
                            Kelola Supplier
                        </a>
                        <ul id="kelola-supplier" class="sidebar-dropdown list-unstyled collapse detail-dropdown" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="{{ url('/listdatasupplier') }}" class="sidebar-link animate__animated animate__slideInLeft">List Data Supplier</a>
                            </li>
                            @if(Auth::user()->level=== 'admin')
                            <li class="sidebar-item">
                                <a href="{{ url('/tambahdatasupplier') }}" class="sidebar-link animate__animated animate__slideInLeft">Tambah Data Supplier</a>
                            </li>
                            @endif
                        </ul>
                    </li>
                    @if(Auth::user()->level=== 'admin')
                    <li class="sidebar-item animate__animated animate__slideInLeft">
                        <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#laporan"
                            aria-expanded="false" aria-controls="laporan">
                            <i class="fa-regular fa-file-lines pe-2"></i>
                            Laporan
                        </a>
                        {{-- <ul id="laporan" class="sidebar-dropdown list-unstyled collapse detail-dropdown" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="{{ url('/laporanPembelian') }}" class="sidebar-link animate__animated animate__slideInLeft">Laporan Pembelian</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ url('/laporanPenjualan') }}" class="sidebar-link animate__animated animate__slideInLeft">Laporan Penjualan</a>
                            </li>
                        </ul> --}}

                        <ul id="laporan" class="sidebar-dropdown list-unstyled collapse detail-dropdown" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="{{ url('/laporanPembelian') }}" class="sidebar-link animate__animated animate__slideInLeft">Laporan Pembelian</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ url('/laporanPenjualan') }}" class="sidebar-link animate__animated animate__slideInLeft">Laporan Penjualan</a>
                            </li>
                        </ul>
                        @endif
                    </li>

                    <li class="sidebar-item animate__animated animate__slideInLeft">
                        <a href="{{ url('/logout') }}" class="sidebar-link">
                            <i class="fa-solid fa-right-from-bracket pe-2"></i>
                            <!-- <i class="fa-solid fa-list pe-2"></i> -->
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <!-- Main  -->
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <!-- Button for sidebar toggle -->
                <!-- data-bs-theme="dark" -->
                <button class="btn" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3 animate__animated animate__fadeIn">
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="/js/master.js"></script>

</body>

</html>
