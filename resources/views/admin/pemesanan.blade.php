<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Tiny Dashboard - A Bootstrap Dashboard Template</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="/admin/light/css/simplebar.css">
    <!-- Fonts CSS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="/admin/light/css/feather.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="/admin/light/css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="/admin/light/css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="/admin/light/css/app-dark.css" id="darkTheme" disabled>
</head>

<body class="vertical light ">
    <div class="wrapper">
        <nav class="topnav navbar navbar-light">
            <button type="button" class="p-0 mt-2 mr-3 navbar-toggler text-muted collapseSidebar">
                <i class="fe fe-menu navbar-toggler-icon"></i>
            </button>
            <form class="mr-auto form-inline searchform text-muted">
                <input class="pl-4 bg-transparent border-0 form-control mr-sm-2 text-muted" type="search"
                    placeholder="Type something..." aria-label="Search">
            </form>
            <ul class="nav">
                <li class="nav-item">
                    <a class="my-2 nav-link text-muted" href="#" id="modeSwitcher" data-mode="light">
                        <i class="fe fe-sun fe-16"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="my-2 nav-link text-muted" href="./#" data-toggle="modal"
                        data-target=".modal-shortcut">
                        <span class="fe fe-grid fe-16"></span>
                    </a>
                </li>
                <li class="nav-item nav-notif">
                    <a class="my-2 nav-link text-muted" href="./#" data-toggle="modal" data-target=".modal-notif">
                        <span class="fe fe-bell fe-16"></span>
                        <span class="dot dot-md bg-success"></span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="pr-0 nav-link dropdown-toggle text-muted" href="#" id="navbarDropdownMenuLink"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mt-2 avatar avatar-sm">
                            <img src="./assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activities</a>
                    </div>
                </li>
            </ul>
        </nav>
        <aside class="bg-white shadow sidebar-left border-right" id="leftSidebar" data-simplebar>
            <a href="#" class="mt-3 ml-2 btn collapseSidebar toggle-btn d-lg-none text-muted"
                data-toggle="toggle">
                <i class="fe fe-x"><span class="sr-only"></span></i>
            </a>
            <nav class="vertnav navbar navbar-light">
                <!-- nav bar -->
                <div class="mb-4 w-100 d-flex">
                    <a class="mx-auto mt-2 text-center navbar-brand flex-fill" href="./index.html">
                        <svg version="1.1" id="logo" class="navbar-brand-img brand-sm"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                            y="0px" viewBox="0 0 120 120" xml:space="preserve">
                            <g>
                                <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                                <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                                <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                            </g>
                        </svg>
                    </a>
                </div>
                <ul class="mb-2 navbar-nav flex-fill w-100">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="{{ url('admin/dashboard') }}">
                            <i class="fe fe-home fe-16"></i>
                            <span class="ml-3 item-text">Dashboard</span>
                        </a>
                    </li>
                    <ul class="mb-2 navbar-nav flex-fill w-100">
                        <li class="nav-item dropdown">
                            <a href="#ui-elements" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle nav-link">
                                <i class="fe fe-box fe-16"></i>
                                <span class="ml-3 item-text">CRUD Item</span>
                            </a>
                            <ul class="pl-4 collapse list-unstyled w-100" id="ui-elements">
                                <li class="nav-item">
                                    <a class="pl-3 nav-link" href="{{ url('admin/gedung') }}"><span
                                            class="ml-1 item-text">Gedung</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="pl-3 nav-link" href="{{ url('admin/maincourse') }}"><span
                                            class="ml-1 item-text">Menu Main Course</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="pl-3 nav-link" href="{{ url('admin/dishes') }}"><span
                                            class="ml-1 item-text">Menu Dishes</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="pl-3 nav-link" href="{{ url('admin/dekorasi') }}"><span
                                            class="ml-1 item-text">Dekorasi</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="pl-3 nav-link" href="{{ url('admin/dokumentasi') }}"><span
                                            class="ml-1 item-text">Dokumentasi</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="pl-3 nav-link" href="{{ url('admin/sourvenir') }}"><span
                                            class="ml-1 item-text">Sourvenir</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="pl-3 nav-link" href="{{ url('admin/undangan') }}"><span
                                            class="ml-1 item-text">Undangan</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="pl-3 nav-link" href="{{ url('admin/bridal') }}"><span
                                            class="ml-1 item-text">Bridalstyle</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="pl-3 nav-link" href="{{ url('admin/hiburan') }}"><span
                                            class="ml-1 item-text">Hiburan</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <p class="mt-4 mb-1 text-muted nav-heading">
                        <span>Components</span>
                    </p>
                    <li class="nav-item w-100">
                        <a class="nav-link" href="widgets.html">
                            <i class="fe fe-layers fe-16"></i>
                            <span class="ml-3 item-text">Widgets</span>
                            <span class="badge badge-pill badge-primary">New</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#forms" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-credit-card fe-16"></i>
                            <span class="ml-3 item-text">Forms</span>
                        </a>
                        <ul class="pl-4 collapse list-unstyled w-100" id="forms">
                            <li class="nav-item">
                                <a class="pl-3 nav-link" href="./form_elements.html"><span
                                        class="ml-1 item-text">Basic Elements</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="pl-3 nav-link" href="./form_advanced.html"><span
                                        class="ml-1 item-text">Advanced Elements</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="pl-3 nav-link" href="./form_validation.html"><span
                                        class="ml-1 item-text">Validation</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="pl-3 nav-link" href="./form_wizard.html"><span
                                        class="ml-1 item-text">Wizard</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="pl-3 nav-link" href="./form_layouts.html"><span
                                        class="ml-1 item-text">Layouts</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="pl-3 nav-link" href="./form_upload.html"><span class="ml-1 item-text">File
                                        upload</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#tables" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-grid fe-16"></i>
                            <span class="ml-3 item-text">Tables</span>
                        </a>
                        <ul class="pl-4 collapse list-unstyled w-100" id="tables">
                            <li class="nav-item">
                                <a class="pl-3 nav-link" href="./table_basic.html"><span class="ml-1 item-text">Basic
                                        Tables</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="pl-3 nav-link" href="./table_advanced.html"><span
                                        class="ml-1 item-text">Advanced Tables</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="pl-3 nav-link" href="./table_datatables.html"><span
                                        class="ml-1 item-text">Data Tables</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#charts" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-pie-chart fe-16"></i>
                            <span class="ml-3 item-text">Charts</span>
                        </a>
                        <ul class="pl-4 collapse list-unstyled w-100" id="charts">
                            <li class="nav-item">
                                <a class="pl-3 nav-link" href="./chart-inline.html"><span
                                        class="ml-1 item-text">Inline Chart</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="pl-3 nav-link" href="./chart-chartjs.html"><span
                                        class="ml-1 item-text">Chartjs</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="pl-3 nav-link" href="./chart-apexcharts.html"><span
                                        class="ml-1 item-text">ApexCharts</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="pl-3 nav-link" href="./datamaps.html"><span
                                        class="ml-1 item-text">Datamaps</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <p class="mt-4 mb-1 text-muted nav-heading">
                    <span>Apps</span>
                </p>
                <ul class="mb-2 navbar-nav flex-fill w-100">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="calendar.html">
                            <i class="fe fe-calendar fe-16"></i>
                            <span class="ml-3 item-text">Calendar</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#contact" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-book fe-16"></i>
                            <span class="ml-3 item-text">Contacts</span>
                        </a>
                        <ul class="pl-4 collapse list-unstyled w-100" id="contact">
                            <a class="pl-3 nav-link" href="./contacts-list.html"><span class="ml-1">Contact
                                    List</span></a>
                            <a class="pl-3 nav-link" href="./contacts-grid.html"><span class="ml-1">Contact
                                    Grid</span></a>
                            <a class="pl-3 nav-link" href="./contacts-new.html"><span class="ml-1">New
                                    Contact</span></a>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#profile" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-user fe-16"></i>
                            <span class="ml-3 item-text">Profile</span>
                        </a>
                        <ul class="pl-4 collapse list-unstyled w-100" id="profile">
                            <a class="pl-3 nav-link" href="./profile.html"><span class="ml-1">Overview</span></a>
                            <a class="pl-3 nav-link" href="./profile-settings.html"><span
                                    class="ml-1">Settings</span></a>
                            <a class="pl-3 nav-link" href="./profile-security.html"><span
                                    class="ml-1">Security</span></a>
                            <a class="pl-3 nav-link" href="./profile-notification.html"><span
                                    class="ml-1">Notifications</span></a>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#fileman" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-folder fe-16"></i>
                            <span class="ml-3 item-text">File Manager</span>
                        </a>
                        <ul class="pl-4 collapse list-unstyled w-100" id="fileman">
                            <a class="pl-3 nav-link" href="./files-list.html"><span class="ml-1">Files
                                    List</span></a>
                            <a class="pl-3 nav-link" href="./files-grid.html"><span class="ml-1">Files
                                    Grid</span></a>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#support" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-compass fe-16"></i>
                            <span class="ml-3 item-text">Help Desk</span>
                        </a>
                        <ul class="pl-4 collapse list-unstyled w-100" id="support">
                            <a class="pl-3 nav-link" href="./support-center.html"><span
                                    class="ml-1">Home</span></a>
                            <a class="pl-3 nav-link" href="./support-tickets.html"><span
                                    class="ml-1">Tickets</span></a>
                            <a class="pl-3 nav-link" href="./support-ticket-detail.html"><span class="ml-1">Ticket
                                    Detail</span></a>
                            <a class="pl-3 nav-link" href="./support-faqs.html"><span class="ml-1">FAQs</span></a>
                        </ul>
                    </li>
                </ul>
                <p class="mt-4 mb-1 text-muted nav-heading">
                    <span>Extra</span>
                </p>
                <ul class="mb-2 navbar-nav flex-fill w-100">
                    <li class="nav-item dropdown">
                        <a href="#pages" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-file fe-16"></i>
                            <span class="ml-3 item-text">Pages</span>
                        </a>
                        <ul class="pl-4 collapse list-unstyled w-100" id="pages">
                            <li class="nav-item">
                                <a class="pl-3 nav-link" href="./page-orders.html">
                                    <span class="ml-1 item-text">Orders</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="pl-3 nav-link" href="./page-timeline.html">
                                    <span class="ml-1 item-text">Timeline</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="pl-3 nav-link" href="./page-invoice.html">
                                    <span class="ml-1 item-text">Invoice</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="pl-3 nav-link" href="./page-404.html">
                                    <span class="ml-1 item-text">Page 404</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="pl-3 nav-link" href="./page-500.html">
                                    <span class="ml-1 item-text">Page 500</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="pl-3 nav-link" href="./page-blank.html">
                                    <span class="ml-1 item-text">Blank</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#auth" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-shield fe-16"></i>
                            <span class="ml-3 item-text">Authentication</span>
                        </a>
                        <ul class="pl-4 collapse list-unstyled w-100" id="auth">
                            <a class="pl-3 nav-link" href="./auth-login.html"><span class="ml-1">Login 1</span></a>
                            <a class="pl-3 nav-link" href="./auth-login-half.html"><span class="ml-1">Login
                                    2</span></a>
                            <a class="pl-3 nav-link" href="./auth-register.html"><span
                                    class="ml-1">Register</span></a>
                            <a class="pl-3 nav-link" href="./auth-resetpw.html"><span class="ml-1">Reset
                                    Password</span></a>
                            <a class="pl-3 nav-link" href="./auth-confirm.html"><span class="ml-1">Confirm
                                    Password</span></a>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#layouts" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-layout fe-16"></i>
                            <span class="ml-3 item-text">Layout</span>
                        </a>
                        <ul class="pl-4 collapse list-unstyled w-100" id="layouts">
                            <li class="nav-item">
                                <a class="pl-3 nav-link" href="./index.html"><span
                                        class="ml-1 item-text">Default</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="pl-3 nav-link" href="./index-horizontal.html"><span
                                        class="ml-1 item-text">Top Navigation</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="pl-3 nav-link" href="./index-boxed.html"><span
                                        class="ml-1 item-text">Boxed</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <p class="mt-4 mb-1 text-muted nav-heading">
                    <span>Documentation</span>
                </p>
                <ul class="mb-2 navbar-nav flex-fill w-100">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="../docs/index.html">
                            <i class="fe fe-help-circle fe-16"></i>
                            <span class="ml-3 item-text">Getting Start</span>
                        </a>
                    </li>
                </ul>
                <div class="mt-4 mb-1 btn-box w-100">
                    <a href="https://themeforest.net/item/tinydash-bootstrap-html-admin-dashboard-template/27511269"
                        target="_blank" class="mb-2 btn btn-primary btn-lg btn-block">
                        <i class="mx-2 fe fe-shopping-cart fe-12"></i><span class="small">Buy now</span>
                    </a>
                </div>
            </nav>
        </aside>
        <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="page-title">Pemesanan</h2>
                        <div class="row">
                            <div class="col-md-12">
                            </div>
                            <div class="container-fluid">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="my-4 row">
                                            <!-- Small table -->
                                            <div class="col-md-12">
                                                <div class="shadow card">
                                                    <div class="card-body">

                                                        <!-- Search Form -->
                                                        <form action="{{ route('dekorasi') }}" method="GET">
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
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                {{-- {{dd($pemesanans[0]->id_pemesanan)}} --}}
                                                                @foreach ($pemesanans as $ps)
                                                                    {{-- {{dd($ps)}} --}}
                                                                    <tr>
                                                                        <td>{{ $ps->id_pemesanan }}</td>
                                                                        <td>{{ $ps->id_customer }}</td>
                                                                        <td>{{ $ps->total_biaya }}</td>
                                                                        <td>{{ $ps->tanggal_acara }}
                                                                        </td>
                                                                        <td>
                                                                            <button type="button"
                                                                                data-target="#varyModal{{ $ps->id_pemesanan }}"
                                                                                data-toggle="modal"
                                                                                class="mb-2 btn btn-warning">
                                                                                <span
                                                                                    class="fe fe-20 fe-edit-2"></span>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    {{-- Modal edit --}}
                                                                    <div class="modal fade"
                                                                        id="varyModal{{ $ps->id_pemesanan }}"
                                                                        tabindex="-1" role="dialog"
                                                                        aria-labelledby="varyModalLabel"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title"
                                                                                        id="varyModalLabel">
                                                                                        Edit dekorasi</h5>
                                                                                    <button type="button"
                                                                                        class="close"
                                                                                        data-dismiss="modal"
                                                                                        aria-label="Close">
                                                                                        <span
                                                                                            aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form
                                                                                        action="{{ route('pemesanan.update', $ps->id_pemesanan) }}"
                                                                                        method="POST"
                                                                                        enctype="multipart/form-data">
                                                                                        @csrf
                                                                                        @method('PUT')

                                                                                        <!-- Nama dekorasi -->
                                                                                        <div class="form-group">
                                                                                            <label for="id_pemesanan"
                                                                                                class="col-form-label">Nama
                                                                                                dekorasi:</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="id_pemesanan"
                                                                                                name="id_pemesanan"
                                                                                                value="{{ $ps->id_pemesanan }}">
                                                                                        </div>

                                                                                        <!-- Harga Dekorasi -->
                                                                                        <div class="form-group">
                                                                                            <label for="harga_dekorasi"
                                                                                                class="col-form-label">Harga
                                                                                                Sewa
                                                                                                Dekorasi:</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="id_customer"
                                                                                                name="id_customer"
                                                                                                value="{{ $ps->id_customer }}">
                                                                                        </div>

                                                                                        <!-- Harga Dekorasi -->
                                                                                        <div class="form-group">
                                                                                            <label for="id_customer"
                                                                                                class="col-form-label">Harga
                                                                                                Sewa
                                                                                                Dekorasi:</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="total_biaya"
                                                                                                name="total_biaya"
                                                                                                value="{{ $ps->total_biaya }}">
                                                                                        </div>

                                                                                        <div class="form-group">
                                                                                            <label for="harga_dekorasi"
                                                                                                class="col-form-label">Harga
                                                                                                Sewa
                                                                                                Dekorasi:</label>
                                                                                            <input type="date"
                                                                                                class="form-control"
                                                                                                id="tanggal_acara"
                                                                                                name="tanggal_acara"
                                                                                                value="{{ $ps->tanggal_acara }}">
                                                                                        </div>

                                                                                        <div class="form-group">
                                                                                            <label for="harga_dekorasi"
                                                                                                class="col-form-label">Status
                                                                                                pemesanan:</label>
                                                                                            <select class="select"
                                                                                                name="status_pemesanan"
                                                                                                id="">
                                                                                                <option
                                                                                                    value="Pending">
                                                                                                    Pending</option>
                                                                                                <option
                                                                                                    value="Ongoing">On
                                                                                                    going</option>
                                                                                                <option
                                                                                                    value="Success">
                                                                                                    Success</option>
                                                                                            </select>
                                                                                        </div>

                                                                                        <div class="modal-footer">
                                                                                            <button type="button"
                                                                                                class="btn btn-secondary"
                                                                                                data-dismiss="modal">Close</button>
                                                                                            <button type="submit"
                                                                                                class="btn btn-primary">Submit</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
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
        </main> <!-- main -->
    </div> <!-- .wrapper -->
    <script src="/admin/light/js/jquery.min.js"></script>
    <script src="/admin/light/js/popper.min.js"></script>
    <script src="/admin/light/js/moment.min.js"></script>
    <script src="/admin/light/js/bootstrap.min.js"></script>
    <script src="/admin/light/js/simplebar.min.js"></script>
    <script src='/admin/light/js/daterangepicker.js'></script>
    <script src='/admin/light/js/jquery.stickOnScroll.js'></script>
    <script src="/admin/light/js/tinycolor-min.js"></script>
    <script src="/admin/light/js/config.js"></script>
    <script src="/admin/light/js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');
    </script>
</body>

</html>
