<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shoping Cart</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('cst/booking/images/icons/favicon.png') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cst/booking/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('cst/booking/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('cst/booking/fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cst/booking/fonts/linearicons-v1.0.0/icon-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cst/booking/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cst/booking/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cst/booking/vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cst/booking/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('cst/booking/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cst/booking/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('cst/booking/css/main.css') }}">
    <!--===============================================================================================-->
</head>

<body class="animsition">
    <!-- Header -->
    <header class="header-v4">
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            <!-- Topbar -->
            <div class="top-bar">
                <div class="container h-full content-topbar flex-sb-m">
                    <div class="left-top-bar">
                        Free shipping for standard order over $100
                    </div>

                    <div class="h-full right-top-bar flex-w">
                        <a href="#" class="flex-c-m trans-04 p-lr-25">
                            Help & FAQs
                        </a>

                        <a href="#" class="flex-c-m trans-04 p-lr-25">
                            My Account
                        </a>

                        <a href="#" class="flex-c-m trans-04 p-lr-25">
                            EN
                        </a>

                        <a href="#" class="flex-c-m trans-04 p-lr-25">
                            USD
                        </a>
                    </div>
                </div>
            </div>

            <div class="wrap-menu-desktop how-shadow1">
                <nav class="container limiter-menu-desktop">

                    <!-- Logo desktop -->
                    <a href="#" class="logo">
                        <img src="{{ asset('cst/booking/images/icons/logowedding.png') }}" alt="IMG-LOGO">
                    </a>

                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li>
                                <a href="{{ route('user.dashboard') }}">Home</a>
                            </li>

                            <li>
                                <a href="{{ route('user.booking') }}">Booking</a>
                            </li>

                            <li class="label1" data-label1="hot">
                                <a href="shoping-cart.html">Features</a>
                            </li>

                            <li>
                                <a href="blog.html">Blog</a>
                            </li>

                            <li>
                                <a href="{{ route('user.about') }}">About</a>
                            </li>

                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Icon header -->
                    <div class="wrap-icon-header flex-w flex-r-m">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                            <i class="zmdi zmdi-search"></i>
                        </div>

                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart"
                            data-notify="2">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>

                        <a href="#" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti"
                            data-notify="0">
                            <i class="zmdi zmdi-favorite-outline"></i>
                        </a>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href="index.html"><img src="{{ asset('cst/booking/images/icons/logowedding.png') }}"
                        alt="IMG-LOGO"></a>
            </div>

            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m m-r-15">
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                    <i class="zmdi zmdi-search"></i>
                </div>

                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart"
                    data-notify="2">
                    <i class="zmdi zmdi-shopping-cart"></i>
                </div>

                <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti"
                    data-notify="0">
                    <i class="zmdi zmdi-favorite-outline"></i>
                </a>
            </div>

            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>


        <!-- Menu Mobile -->
        <div class="menu-mobile">
            <ul class="topbar-mobile">
                <li>
                    <div class="left-top-bar">
                        Free shipping for standard order over $100
                    </div>
                </li>

                <li>
                    <div class="h-full right-top-bar flex-w">
                        <a href="#" class="flex-c-m p-lr-10 trans-04">
                            Help & FAQs
                        </a>

                        <a href="#" class="flex-c-m p-lr-10 trans-04">
                            My Account
                        </a>

                        <a href="#" class="flex-c-m p-lr-10 trans-04">
                            EN
                        </a>

                        <a href="#" class="flex-c-m p-lr-10 trans-04">
                            USD
                        </a>
                    </div>
                </li>
            </ul>

            <ul class="main-menu-m">
                <li>
                    <a href="index.html">Home</a>
                    <ul class="sub-menu-m">
                        <li><a href="index.html">Homepage 1</a></li>
                        <li><a href="home-02.html">Homepage 2</a></li>
                        <li><a href="home-03.html">Homepage 3</a></li>
                    </ul>
                    <span class="arrow-main-menu-m">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span>
                </li>

                <li>
                    <a href="product.html">Shop</a>
                </li>

                <li>
                    <a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
                </li>

                <li>
                    <a href="blog.html">Blog</a>
                </li>

                <li>
                    <a href="about.html">About</a>
                </li>

                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </div>

        <!-- Modal Search -->
        <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
            <div class="container-search-header">
                <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                    <img src="images/icons/icon-close2.png" alt="CLOSE">
                </button>

                <form class="wrap-search-header flex-w p-l-15">
                    <button class="flex-c-m trans-04">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                    <input class="plh3" type="text" name="search" placeholder="Search...">
                </form>
            </div>
        </div>
    </header>

    <!-- Cart -->
    <div class="wrap-header-cart js-panel-cart">
        <div class="s-full js-hide-cart"></div>

        <div class="header-cart flex-col-l p-l-65 p-r-25">
            <div class="header-cart-title flex-w flex-sb-m p-b-8">
                <span class="mtext-103 cl2">
                    Your Cart
                </span>

                <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                    <i class="zmdi zmdi-close"></i>
                </div>
            </div>

            <div class="header-cart-content flex-w js-pscroll">
                <ul class="w-full header-cart-wrapitem">
                    <li class="header-cart-item flex-w flex-t m-b-12">
                        <div class="header-cart-item-img">
                            <img src="images/item-cart-01.jpg" alt="IMG">
                        </div>

                        <div class="header-cart-item-txt p-t-8">
                            <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                White Shirt Pleat
                            </a>

                            <span class="header-cart-item-info">
                                1 x $19.00
                            </span>
                        </div>
                    </li>

                    <li class="header-cart-item flex-w flex-t m-b-12">
                        <div class="header-cart-item-img">
                            <img src="images/item-cart-02.jpg" alt="IMG">
                        </div>

                        <div class="header-cart-item-txt p-t-8">
                            <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                Converse All Star
                            </a>

                            <span class="header-cart-item-info">
                                1 x $39.00
                            </span>
                        </div>
                    </li>

                    <li class="header-cart-item flex-w flex-t m-b-12">
                        <div class="header-cart-item-img">
                            <img src="images/item-cart-03.jpg" alt="IMG">
                        </div>

                        <div class="header-cart-item-txt p-t-8">
                            <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                Nixon Porter Leather
                            </a>

                            <span class="header-cart-item-info">
                                1 x $17.00
                            </span>
                        </div>
                    </li>
                </ul>

                <div class="w-full">
                    <div class="w-full header-cart-total p-tb-40">
                        Total: $75.00
                    </div>

                    <div class="w-full header-cart-buttons flex-w">
                        <a href="shoping-cart.html"
                            class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                            View Cart
                        </a>

                        <a href="shoping-cart.html"
                            class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                            Check Out
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- breadcrumb -->
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="{{ route('user.booking') }}" class="stext-109 cl8 hov-cl1 trans-04">
                Booking
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
                Shoping Cart
            </span>
        </div>
    </div>

    <!-- Shoping Cart -->
    {{-- <form id="form-dekorasi" method="POST" action="{{ route('keranjangdekorasi.store') }}">
        @csrf --}}
    <div class="bg0 p-t-75 p-b-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                    <div class="m-l-25 m-r--38 m-lr-0-xl">
                        <form action="{{ route('user.checkout') }}" method="GET">
                            <div class="wrap-table-shopping-cart">
                                <table class="table-shopping-cart">
                                    <tr class="table_head">
                                        @php
                                            use App\Models\Dekorasi;
                                            use App\Models\Dokumentasi;
                                            use App\Models\Hiburan;
                                            use App\Models\Gedung;
                                            use App\Models\Sourvenir;
                                            use App\Models\Undangan;
                                        @endphp
                                        <th class="column-1">#</th>
                                        <th class="column-2">Nama Item</th>
                                        <th class="column-3">Variant</th>
                                        <th class="column-4">Harga</th>
                                        <th class="column-5">Quantity</th>
                                        <th class="column-6">Total</th>
                                    </tr>

                                    @if (session()->has('dekorasi_terpilih'))
                                        <?php $dk = Dekorasi::find(session('dekorasi_terpilih')); ?>
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="item-checkbox"
                                                    data-harga="{{ $dk->harga_dekorasi }}"
                                                    value="{{ $dk->id_dekorasi }}">
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="image-container me-3">
                                                        @if ($dk->foto_dekorasi)
                                                            <img src="{{ asset('storage/' . $dk->foto_dekorasi) }}"
                                                                alt="Foto Dekorasi" class="img-fluid">
                                                        @else
                                                            <p>Tidak ada Foto</p>
                                                        @endif
                                                    </div>
                                                    <h6 class="mb-0">{{ $dk->nama_dekorasi }}</h6>
                                                </div>
                                            </td>
                                            <td>-</td>
                                            <td>Rp.{{ number_format($dk->harga_dekorasi, 0, ',', '.') }}</td>
                                            <td>1</td>
                                            <td>Rp.{{ number_format($dk->harga_dekorasi, 0, ',', '.') }}</td>
                                        </tr>
                                    @endif

                                    @if (session()->has('gedung_terpilih'))
                                        <?php $gd = Gedung::find(session('gedung_terpilih')); ?>
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="item-checkbox"
                                                    data-harga="{{ $gd->harga_sewa_gedung }}"
                                                    value="{{ $gd->id_gedung }}">
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="image-container me-3">
                                                        @if ($gd->foto_gedung)
                                                            <img src="{{ asset('storage/' . $gd->foto_gedung) }}"
                                                                alt="Foto Gedung" class="img-fluid">
                                                        @else
                                                            <p>Tidak ada Foto</p>
                                                        @endif
                                                    </div>
                                                    <h6 class="mb-0">{{ $gd->nama_gedung }}</h6>
                                                </div>
                                            </td>
                                            <td>-</td>
                                            <td>Rp.{{ number_format($gd->harga_sewa_gedung, 0, ',', '.') }}</td>
                                            <td>1</td>
                                            <td>Rp.{{ number_format($gd->harga_sewa_gedung, 0, ',', '.') }}</td>
                                        </tr>
                                    @endif

                                    @if (session()->has('dokumentasi_terpilih'))
                                        <?php $dok = Dokumentasi::find(session('dokumentasi_terpilih')); ?>
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="item-checkbox"
                                                    data-harga="{{ $dok->harga_dokumentasi }}"
                                                    value="{{ $dok->id_dokumentasi }}">
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="image-container me-3">
                                                        @if ($dok->foto_dokumentasi)
                                                            <img src="{{ asset('storage/' . $dok->foto_dokumentasi) }}"
                                                                alt="Foto Dokumentasi" class="img-fluid">
                                                        @else
                                                            <p>Tidak ada Foto</p>
                                                        @endif
                                                    </div>
                                                    <h6 class="mb-0">{{ $dok->nama_paket_dokumentasi }}</h6>
                                                </div>
                                            </td>
                                            <td>-</td>
                                            <td>Rp.{{ number_format($dok->harga_dokumentasi, 0, ',', '.') }}</td>
                                            <td>1</td>
                                            <td>Rp.{{ number_format($dok->harga_dokumentasi, 0, ',', '.') }}</td>
                                        </tr>
                                    @endif

                                    @if (session()->has('sourvenir_terpilih'))
                                        <?php $sourvenirr = Sourvenir::find(session('sourvenir_terpilih')); ?>
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="item-checkbox"
                                                    data-harga="{{ $sourvenirr->harga_sourvenir }}"
                                                    value="{{ $sourvenirr->id_sourvenir }}">
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="image-container me-3">
                                                        @if ($sourvenirr->foto_sourvenir)
                                                            <img src="{{ asset('storage/' . $sourvenirr->foto_sourvenir) }}"
                                                                alt="Foto Sourvenir" class="img-fluid">
                                                        @else
                                                            <p>Tidak ada Foto</p>
                                                        @endif
                                                    </div>
                                                    <h6 class="mb-0">{{ $sourvenirr->nama_paket_sourvenir }}</h6>
                                                </div>
                                            </td>
                                            <td>-</td>
                                            <td>Rp.{{ number_format($sourvenirr->harga_sourvenir, 0, ',', '.') }}</td>
                                            <td>{{ session('sourvenir_quantity') }}</td>
                                            <td>Rp.{{ number_format($sourvenirr->harga_sourvenir * session('sourvenir_quantity'), 0, ',', '.') }}</td>
                                        </tr>
                                    @endif

                                    @if (session()->has('hiburan_terpilih'))
                                        <?php $hiburann = Hiburan::find(session('hiburan_terpilih')); ?>
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="item-checkbox"
                                                    data-harga="{{ $hiburann->harga_hiburan }}"
                                                    value="{{ $hiburann->id_hiburan }}">
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="image-container me-3">
                                                        @if ($hiburann->foto_hiburan)
                                                            <img src="{{ asset('storage/' . $hiburann->foto_hiburan) }}"
                                                                alt="Foto Hiburan" class="img-fluid">
                                                        @else
                                                            <p>Tidak ada Foto</p>
                                                        @endif
                                                    </div>
                                                    <h6 class="mb-0">{{ $hiburann->nama_paket_hiburan }}</h6>
                                                </div>
                                            </td>
                                            <td>-</td>
                                            <td>Rp.{{ number_format($hiburann->harga_sewa_hiburan, 0, ',', '.') }}</td>
                                            <td>1</td>
                                            <td>Rp.{{ number_format($hiburann->harga_sewa_hiburan, 0, ',', '.') }}</td>
                                        </tr>
                                    @endif

                                    @if (session()->has('undangan_terpilih'))
                                        <?php $undangant = Undangan::find(session('undangan_terpilih')); ?>
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="item-checkbox"
                                                    data-harga="{{ $undangant->harga_undangan }}"
                                                    value="{{ $undangant->id_undangan }}">
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="image-container me-3">
                                                        @if ($undangant->foto_undangan)
                                                            <img src="{{ asset('storage/' . $undangant->foto_undangan) }}"
                                                                alt="Foto Undangan" class="img-fluid">
                                                        @else
                                                            <p>Tidak ada Foto</p>
                                                        @endif
                                                    </div>
                                                    <h6 class="mb-0">{{ $undangant->nama_paket_undangan }}</h6>
                                                </div>
                                            </td>
                                            <td>-</td>
                                            <td>Rp.{{ number_format($undangant->harga_undangan, 0, ',', '.') }}</td>
                                            <td>{{ session('undangan_quantity') }}</td>
                                            <td>Rp.{{ number_format($undangant->harga_undangan * session('undangan_quantity'), 0, ',', '.') }}</td>
                                        </tr>
                                    @endif

                                    <!-- Baris Total -->
                                    <tr>
                                        <td colspan="5" class="text-end"><strong>Total</strong></td>
                                        <td id="total">
                                            {{ $total ? 'Rp.' . number_format($total, 0, ',', '.') : 'Rp.0' }}</td>
                                    </tr>
                                </table>
                            </div>
                            <!-- Tombol Checkout -->
                            <div class="mt-4 d-flex justify-content-end">
                                <form action="{{ route('user.checkout') }}" method="GET">
                                    <button type="submit" class="btn btn-primary">
                                        Checkout
                                    </button>
                                </form>
                            </div>
                    </div>
                </div>
                </form>


            </div>
        </div>
        </form>




        <!-- Footer -->
        <footer class="bg3 p-t-75 p-b-32">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3 p-b-50">
                        <h4 class="stext-301 cl0 p-b-30">
                            Categories
                        </h4>

                        <ul>
                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    Women
                                </a>
                            </li>

                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    Men
                                </a>
                            </li>

                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    Shoes
                                </a>
                            </li>

                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    Watches
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-lg-3 p-b-50">
                        <h4 class="stext-301 cl0 p-b-30">
                            Help
                        </h4>

                        <ul>
                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    Track Order
                                </a>
                            </li>

                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    Returns
                                </a>
                            </li>

                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    Shipping
                                </a>
                            </li>

                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    FAQs
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-lg-3 p-b-50">
                        <h4 class="stext-301 cl0 p-b-30">
                            GET IN TOUCH
                        </h4>

                        <p class="stext-107 cl7 size-201">
                            Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call
                            us on (+1) 96 716 6879
                        </p>

                        <div class="p-t-27">
                            <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                                <i class="fa fa-facebook"></i>
                            </a>

                            <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                                <i class="fa fa-instagram"></i>
                            </a>

                            <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                                <i class="fa fa-pinterest-p"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3 p-b-50">
                        <h4 class="stext-301 cl0 p-b-30">
                            Newsletter
                        </h4>

                        <form>
                            <div class="w-full wrap-input1 p-b-4">
                                <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email"
                                    placeholder="email@example.com">
                                <div class="focus-input1 trans-04"></div>
                            </div>

                            <div class="p-t-18">
                                <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                    Subscribe
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="p-t-40">
                    <div class="flex-c-m flex-w p-b-18">
                        <a href="#" class="m-all-1">
                            <img src="images/icons/icon-pay-01.png" alt="ICON-PAY">
                        </a>

                        <a href="#" class="m-all-1">
                            <img src="images/icons/icon-pay-02.png" alt="ICON-PAY">
                        </a>

                        <a href="#" class="m-all-1">
                            <img src="images/icons/icon-pay-03.png" alt="ICON-PAY">
                        </a>

                        <a href="#" class="m-all-1">
                            <img src="images/icons/icon-pay-04.png" alt="ICON-PAY">
                        </a>

                        <a href="#" class="m-all-1">
                            <img src="images/icons/icon-pay-05.png" alt="ICON-PAY">
                        </a>
                    </div>

                    <p class="stext-107 cl6 txt-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | Made with <i class="fa fa-heart-o"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        &amp; distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                    </p>
                </div>
            </div>
        </footer>


        <!-- Back to top -->
        <div class="btn-back-to-top" id="myBtn">
            <span class="symbol-btn-back-to-top">
                <i class="zmdi zmdi-chevron-up"></i>
            </span>
        </div>

        {{-- <script>
            document.addEventListener('DOMContentLoaded', function () {
                const checkboxes = document.querySelectorAll('.item-checkbox');
                const subtotalElement = document.getElementById('subtotal');
                const totalElement = document.getElementById('total');

                function updateTotals() {
                    let subtotal = 0;

                    // Menghitung subtotal berdasarkan item yang dipilih
                    checkboxes.forEach(checkbox => {
                        if (checkbox.checked) {
                            subtotal += parseFloat(checkbox.getAttribute('data-harga'));
                        }
                    });

                    // Update elemen subtotal dan total
                    subtotalElement.textContent = `Rp.${subtotal.toLocaleString('id-ID')}`;
                    totalElement.textContent = `Rp.${subtotal.toLocaleString('id-ID')}`;
                }

                // Menambahkan event listener pada checkbox
                checkboxes.forEach(checkbox => {
                    checkbox.addEventListener('change', updateTotals);
                });

                // Inisialisasi perhitungan saat halaman dimuat
                updateTotals();
            });
        </script> --}}


        <!--===============================================================================================-->
        <script src="{{ asset('cst/booking/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
        <!--===============================================================================================-->
        <script src="{{ asset('cst/booking/vendor/animsition/js/animsition.min.js') }}"></script>
        <!--===============================================================================================-->
        <script src="{{ asset('cst/booking/vendor/bootstrap/js/popper.js') }}"></script>
        <script src="{{ asset('cst/booking/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <!--===============================================================================================-->
        <script src="{{ asset('cst/booking/vendor/select2/select2.min.js') }}"></script>
        <script>
            $(".js-select2").each(function() {
                $(this).select2({
                    minimumResultsForSearch: 20,
                    dropdownParent: $(this).next('.dropDownSelect2')
                });
            })
        </script>
        <!--===============================================================================================-->
        <script src="{{ asset('cst/booking/vendor/MagnificPopup/jquery.magnific-popup.min.js') }}"></script>
        <!--===============================================================================================-->
        <script src="{{ asset('cst/booking/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
        <script>
            $('.js-pscroll').each(function() {
                $(this).css('position', 'relative');
                $(this).css('overflow', 'hidden');
                var ps = new PerfectScrollbar(this, {
                    wheelSpeed: 1,
                    scrollingThreshold: 1000,
                    wheelPropagation: false,
                });

                $(window).on('resize', function() {
                    ps.update();
                })
            });
        </script>
        <!--===============================================================================================-->
        <script src="{{ asset('cst/booking/js/main.js') }}"></script>

</body>

</html>
