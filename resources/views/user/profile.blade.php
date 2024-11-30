<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact</title>
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
                        <img src="images/icons/logo-01.png" alt="IMG-LOGO">
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
                                <a href="blog.html">Project</a>
                            </li>

                            <li>
                                <a href="{{ route('user.about') }}">About</a>
                            </li>

                            <li class="active-menu">
                                <a href="{{ route('user.contact') }}">Contact</a>
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
                <a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
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

    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92"
        style="background-image: url({{ asset('cst/booking/images/bg-page.jpg') }});">
        <h2 class="ltext-105 cl0 txt-center">
            Profile
        </h2>
    </section>

    <div>
        <!-- Content -->
        <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4 shadow card">
                                    <div class="card-header">
                                        <strong class="card-title">Form row</strong>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('customer.update', $customer->id_customer) }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="name">Nama</label>
                                                <input type="text" class="form-control" id="name"
                                                    name="name" value="{{ $customer->name }}">
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" id="email"
                                                        name="email" value="{{ $customer->email }}">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="phone">Phone</label>
                                                    <input type="phone" class="form-control" id="phone"
                                                        name="phone" value="{{ $customer->phone }}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="address">Alamat</label>
                                                <input type="text" class="form-control" id="address"
                                                    name="address" value="{{ $customer->address }}">
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="nik">NIK</label>
                                                    <input type="text" class="form-control" id="nik"
                                                        name="nik" value="{{ $customer->nik }}">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="gender">Gender</label>
                                                    <select id="gender" class="form-control" name="gender">
                                                        <option value="Pria"
                                                            {{ $customer->gender == 'Pria' ? 'selected' : '' }}>Pria
                                                        </option>
                                                        <option value="Wanita"
                                                            {{ $customer->gender == 'Wanita' ? 'selected' : '' }}>
                                                            Wanita</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </form>

                                    </div> <!-- .col-12 -->
                                </div> <!-- .row -->
                            </div> <!-- .container-fluid -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="row">
                            <div class="container-fluid">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="my-4 row">
                                            <!-- Small table -->
                                            <div class="col-md-12">
                                                <div class="shadow card">
                                                    <div class="card-body">

                                                        <!-- Search Form -->
                                                        <form action="{{ route('customer.edit') }}" method="GET">
                                                            <div class="form-group d-flex align-items-center">
                                                                <input type="text" name="search"
                                                                    class="form-control" value="{{ $search ?? '' }}"
                                                                    placeholder="Cari berdasarkan ID, Nama, atau Harga...">
                                                                <button type="submit"
                                                                    class="ml-2 btn btn-primary">Search</button>
                                                            </div>
                                                        </form>

                                                        <!-- Tabel Dekorasi -->
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>ID Pemesanan</th>
                                                                    <th>ID Customer</th>
                                                                    <th>Total Biaya</th>
                                                                    <th>Tanggal Acara</th>
                                                                    <th>Status Pemasanan</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($pemesanans as $ps)
                                                                    <tr>
                                                                        <td>{{ $ps->id_pemesanan }}</td>
                                                                        <td>{{ $ps->id_customer }}</td>
                                                                        <td>{{ $ps->total_biaya }}</td>
                                                                        <td>{{ $ps->tanggal_acara }}</td>
                                                                        <td>{{ $ps->status_pemesanan }}</td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                </td>
                                                </tr>
                                                {{-- @endforeach --}}
                                                </tbody>

                                                <!-- js fitur search -->
                                                <script>
                                                    $(document).ready(function() {
                                                        // Inisialisasi DataTable
                                                        var table = $('#dataTable-1').DataTable();

                                                        // Fitur pencarian dengan tombol Search
                                                        $('#btn-search').on('click', function() {
                                                            var searchValue = $('#search').val(); // Ambil nilai input pencarian
                                                            table
                                                                .columns([0, 1, 2]) // Kolom ID, Nama, dan Harga
                                                                .search(searchValue) // Set pencarian
                                                                .draw(); // Tampilkan hasil pencarian
                                                        });
                                                    });
                                                </script>

                                                <!-- Include jQuery -->
                                                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                                                <!-- Include CSS DataTables -->
                                                <link rel="stylesheet" type="text/css"
                                                    href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

                                                <!-- Include JS DataTables -->
                                                <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js">
                                                </script>

                                            </div> <!-- end section -->
                                        </div> <!-- .col-12 -->
                                    </div> <!-- .row -->
                                </div> <!-- .container-fluid -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- JavaScript -->
        <script src="{{ asset('cst/booking/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('cst/booking/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

        <!-- Back to top -->
        <div class="btn-back-to-top" id="myBtn">
            <span class="symbol-btn-back-to-top">
                <i class="zmdi zmdi-chevron-up"></i>
            </span>
        </div>

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
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
        <script src="{{ asset('cst/booking/js/map-custom.js') }}"></script>
        <!--===============================================================================================-->
        <script src="{{ asset('cst/booking/js/main.js') }}"></script>

</body>

</html>
