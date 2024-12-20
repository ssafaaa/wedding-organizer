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

<body class="vertical  light  ">
    <div class="wrapper">
        <nav class="topnav navbar navbar-light">
            <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
                <i class="fe fe-menu navbar-toggler-icon"></i>
            </button>
            <form class="form-inline mr-auto searchform text-muted">
                <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search"
                    placeholder="Type something..." aria-label="Search">
            </form>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
                        <i class="fe fe-sun fe-16"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted my-2" href="./#" data-toggle="modal"
                        data-target=".modal-shortcut">
                        <span class="fe fe-grid fe-16"></span>
                    </a>
                </li>
                <li class="nav-item nav-notif">
                    <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
                        <span class="fe fe-bell fe-16"></span>
                        <span class="dot dot-md bg-success"></span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="avatar avatar-sm mt-2">
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
        <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
            <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3"
                data-toggle="toggle">
                <i class="fe fe-x"><span class="sr-only"></span></i>
            </a>
            <nav class="vertnav navbar navbar-light">
                <!-- nav bar -->
                <div class="w-100 mb-4 d-flex">
                    <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
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
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="{{ url('admin/dashboard') }}">
                            <i class="fe fe-home fe-16"></i>
                            <span class="ml-3 item-text">Dashboard</span>
                        </a>
                    </li>
                    <ul class="navbar-nav flex-fill w-100 mb-2">
                        <li class="nav-item dropdown">
                            <a href="#ui-elements" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle nav-link">
                                <i class="fe fe-box fe-16"></i>
                                <span class="ml-3 item-text">CRUD Item</span>
                            </a>
                            <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                                <li class="nav-item">
                                    <a class="nav-link pl-3" href="{{ url('admin/gedung') }}"><span
                                            class="ml-1 item-text">Gedung</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pl-3" href="./ui-typograpy.html"><span
                                            class="ml-1 item-text">Menu Main Course</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pl-3" href="./ui-icons.html"><span class="ml-1 item-text">Menu
                                            Dishes</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pl-3" href="{{ url('admin/undangan') }}"><span
                                            class="ml-1 item-text">undangan</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pl-3" href="{{ url('admin/dokumentasi') }}"><span
                                            class="ml-1 item-text">Dokumentasi</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pl-3" href="{{ url('admin/sourvenir') }}"><span
                                            class="ml-1 item-text">Sourvenir</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pl-3" href="./ui-tabs-accordion.html"><span
                                            class="ml-1 item-text">Undangan</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pl-3" href="./ui-progress.html"><span
                                            class="ml-1 item-text">Bridalstyle</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pl-3" href="./ui-progress.html"><span
                                            class="ml-1 item-text">Bridalstyle</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <p class="text-muted nav-heading mt-4 mb-1">
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
                        <ul class="collapse list-unstyled pl-4 w-100" id="forms">
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="./form_elements.html"><span
                                        class="ml-1 item-text">Basic Elements</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="./form_advanced.html"><span
                                        class="ml-1 item-text">Advanced Elements</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="./form_validation.html"><span
                                        class="ml-1 item-text">Validation</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="./form_wizard.html"><span
                                        class="ml-1 item-text">Wizard</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="./form_layouts.html"><span
                                        class="ml-1 item-text">Layouts</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="./form_upload.html"><span class="ml-1 item-text">File
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
                        <ul class="collapse list-unstyled pl-4 w-100" id="tables">
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="./table_basic.html"><span class="ml-1 item-text">Basic
                                        Tables</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="./table_advanced.html"><span
                                        class="ml-1 item-text">Advanced Tables</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="./table_datatables.html"><span
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
                        <ul class="collapse list-unstyled pl-4 w-100" id="charts">
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="./chart-inline.html"><span
                                        class="ml-1 item-text">Inline Chart</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="./chart-chartjs.html"><span
                                        class="ml-1 item-text">Chartjs</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="./chart-apexcharts.html"><span
                                        class="ml-1 item-text">ApexCharts</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="./datamaps.html"><span
                                        class="ml-1 item-text">Datamaps</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Apps</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
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
                        <ul class="collapse list-unstyled pl-4 w-100" id="contact">
                            <a class="nav-link pl-3" href="./contacts-list.html"><span class="ml-1">Contact
                                    List</span></a>
                            <a class="nav-link pl-3" href="./contacts-grid.html"><span class="ml-1">Contact
                                    Grid</span></a>
                            <a class="nav-link pl-3" href="./contacts-new.html"><span class="ml-1">New
                                    Contact</span></a>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#profile" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-user fe-16"></i>
                            <span class="ml-3 item-text">Profile</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="profile">
                            <a class="nav-link pl-3" href="./profile.html"><span class="ml-1">Overview</span></a>
                            <a class="nav-link pl-3" href="./profile-settings.html"><span
                                    class="ml-1">Settings</span></a>
                            <a class="nav-link pl-3" href="./profile-security.html"><span
                                    class="ml-1">Security</span></a>
                            <a class="nav-link pl-3" href="./profile-notification.html"><span
                                    class="ml-1">Notifications</span></a>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#fileman" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-folder fe-16"></i>
                            <span class="ml-3 item-text">File Manager</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="fileman">
                            <a class="nav-link pl-3" href="./files-list.html"><span class="ml-1">Files
                                    List</span></a>
                            <a class="nav-link pl-3" href="./files-grid.html"><span class="ml-1">Files
                                    Grid</span></a>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#support" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-compass fe-16"></i>
                            <span class="ml-3 item-text">Help Desk</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="support">
                            <a class="nav-link pl-3" href="./support-center.html"><span
                                    class="ml-1">Home</span></a>
                            <a class="nav-link pl-3" href="./support-tickets.html"><span
                                    class="ml-1">Tickets</span></a>
                            <a class="nav-link pl-3" href="./support-ticket-detail.html"><span class="ml-1">Ticket
                                    Detail</span></a>
                            <a class="nav-link pl-3" href="./support-faqs.html"><span class="ml-1">FAQs</span></a>
                        </ul>
                    </li>
                </ul>
                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Extra</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item dropdown">
                        <a href="#pages" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-file fe-16"></i>
                            <span class="ml-3 item-text">Pages</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100 w-100" id="pages">
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="./page-orders.html">
                                    <span class="ml-1 item-text">Orders</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="./page-timeline.html">
                                    <span class="ml-1 item-text">Timeline</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="./page-invoice.html">
                                    <span class="ml-1 item-text">Invoice</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="./page-404.html">
                                    <span class="ml-1 item-text">Page 404</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="./page-500.html">
                                    <span class="ml-1 item-text">Page 500</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="./page-blank.html">
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
                        <ul class="collapse list-unstyled pl-4 w-100" id="auth">
                            <a class="nav-link pl-3" href="./auth-login.html"><span class="ml-1">Login 1</span></a>
                            <a class="nav-link pl-3" href="./auth-login-half.html"><span class="ml-1">Login
                                    2</span></a>
                            <a class="nav-link pl-3" href="./auth-register.html"><span
                                    class="ml-1">Register</span></a>
                            <a class="nav-link pl-3" href="./auth-resetpw.html"><span class="ml-1">Reset
                                    Password</span></a>
                            <a class="nav-link pl-3" href="./auth-confirm.html"><span class="ml-1">Confirm
                                    Password</span></a>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#layouts" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-layout fe-16"></i>
                            <span class="ml-3 item-text">Layout</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="layouts">
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="./index.html"><span
                                        class="ml-1 item-text">Default</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="./index-horizontal.html"><span
                                        class="ml-1 item-text">Top Navigation</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="./index-boxed.html"><span
                                        class="ml-1 item-text">Boxed</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Documentation</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="../docs/index.html">
                            <i class="fe fe-help-circle fe-16"></i>
                            <span class="ml-3 item-text">Getting Start</span>
                        </a>
                    </li>
                </ul>
                <div class="btn-box w-100 mt-4 mb-1">
                    <a href="https://themeforest.net/item/tinydash-bootstrap-html-admin-dashboard-template/27511269"
                        target="_blank" class="btn mb-2 btn-primary btn-lg btn-block">
                        <i class="fe fe-shopping-cart fe-12 mx-2"></i><span class="small">Buy now</span>
                    </a>
                </div>
            </nav>
        </aside>
        <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="page-title">Undangan</h2>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card shadow mb-4">
                                    <div class="card-header">
                                        <strong class="card-title">Form row</strong>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('undangan.store') }}" method="POST">
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="nama_undangan">Desain Undangan</label>
                                                    <input type="text" class="form-control" id="nama_undangan"
                                                        name="nama_undangan">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="bahan_undangan">Bahan Undangan</label>
                                                    <select id="bahan_undangan" class="form-control" name="bahan_undangan">
                                                        <option selected>Kertas Jasmine</option>
                                                        <option>Matt Paper</option>
                                                        <option>Art Paper</option>
                                                        <option>Art Carton</option>
                                                        <option>Aster</option>
                                                        <option>Concorde</option>
                                                        <option>Samson Kraft</option>
                                                        <option>Ivory</option>
                                                        <option>Linen</option>
                                                        <option>Akasia</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="example-textarea">Deskripsi</label>
                                                        <textarea class="form-control" id="deskripsi_undangan" rows="2" name="deskripsi_undangan"></textarea>
                                                    </div>
                                                <div class="form-group col-md-6">
                                                    <label for="harga_undangan">Harga Undangan</label>
                                                    <input type="text" class="form-control" id="harga_undangan"
                                                        name="harga_undangan">
                                                </div>
                                                <label for="customFile">Foto Thumbnail</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input"
                                                        id="foto_undangan" name="foto_undangan">
                                                    <label class="custom-file-label" for="foto_undangan">Choose
                                                        file</label>
                                                </div>
                                                <br><br>
                                                <label for="customFile">Foto Lainnya</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input"
                                                        id="multiple_foto" name="multiple_foto[]" multiple>
                                                    <label class="custom-file-label" for="multiple_foto">Choose
                                                        file</label>
                                                </div>
                                                <br><br>

                                                <button type="submit"
                                                    class="btn btn-primary mb-2">Submit</button>
                                            </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="row my-4">
                                            <!-- Small table -->
                                            <div class="col-md-12">
                                                <div class="card shadow">
                                                    <div class="card-body">
                                                        <!-- Search Form -->
                                            <form action="{{ route('undangan') }}" method="GET">
                                                <div class="form-group d-flex align-items-center">
                                                    <input type="text" name="search"
                                                        class="form-control" value="{{ $search ?? '' }}"
                                                        placeholder="Cari berdasarkan ID, Nama, atau Harga...">
                                                    <button type="submit"
                                                        class="ml-2 btn btn-primary">Search</button>
                                                </div>
                                            </form>
                                                        <!-- table -->
                                                        <table class="table datatables" id="dataTable-1">
                                                            <thead>
                                                                <tr>
                                                                    <th>ID Undangan</th>
                                                                    <th>Nama Undangan</th>
                                                                    <th>Harga Undangan</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($undangans as $ud)
                                                                    <tr>
                                                                        <td>{{ $ud->id_undangan }}</td>
                                                                        <td>{{ $ud->nama_undangan }}</td>
                                                                        <td>{{ $ud->harga_undangan }}</td>
                                                                        <td><span
                                                                                class="text-muted sr-only">Action</span>
                                                                            <button type="button"
                                                                                data-target="#verticalModal{{ $ud->id_undangan }}"
                                                                                data-toggle="modal"
                                                                                class="btn mb-2 btn-primary"><span
                                                                                class="fe fe-20  fe-eye"></span></button>
                                                                            <button type="button"
                                                                                data-target="#varyModal{{ $ud->id_undangan }}"
                                                                                data-toggle="modal"
                                                                                class="btn mb-2 btn-warning"><span
                                                                                class="fe fe-20 fe-edit-2"></span></button>

            {{-- Modal edit --}}
            <div
            class="modal fade"
            id="varyModal{{ $ud->id_undangan }}"
            tabindex="-1"
            role="dialog"
            aria-labelledby="varyModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="varyModalLabel">Edit undangan</h5>
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form
                            action="{{ route('undangan.update', $ud->id_undangan) }}"
                            method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Nama undangan -->
                            <div class="form-group">
                                <label for="nama_undangan" class="col-form-label">Nama undangan:</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="nama_undangan"
                                    name="nama_undangan"
                                    value="{{ $ud->nama_undangan }}">
                            </div>

                            <!-- Status Gedung -->
                            <div class="form-group">
                                <label for="bahan_undangan" class="col-form-label">Bahan undangan:</label>
                                <select id="bahan_undangan" class="form-control" name="bahan_undangan">
                                    <option value="{{ $ud->bahan_undangan }}">{{ $ud->bahan_undangan }}</option>
                                    <option>Concorde</option>
                                    <option>Matt Paper</option>
                                    <option>Art Paper</option>
                                    <option>Art Carton</option>
                                    <option>Aster</option>
                                    <option>Kertas Jasmine</option>
                                    <option>Samson Kraft</option>
                                    <option>Ivory</option>
                                    <option>Linen</option>
                                    <option>Akasia</option>
                                </select>
                            </div>

                            <!-- Harga undangan -->
                            <div class="form-group">
                                <label for="harga_undangan" class="col-form-label">Harga Sewa undangan:</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="harga_undangan"
                                    name="harga_undangan"
                                    value="{{ $ud->harga_undangan }}">
                            </div>

                            <!-- Deskripsi undangan -->
                            <div class="form-group">
                                <label for="deskripsi_undangan" class="col-form-label">Deskripsi:</label>
                                <textarea
                                    class="form-control"
                                    id="deskripsi_undangan"
                                    name="deskripsi_undangan">{{ $ud->deskripsi_undangan }}</textarea>
                            </div>

                            <!-- Foto undangan -->
                            <div class="form-group">
                                <label for="foto_undangan">Foto undangan</label>
                                <div class="custom-file">
                                    <input
                                        type="file"
                                        class="custom-file-input"
                                        id="foto_undangan"
                                        name="foto_undangan">
                                    <label class="custom-file-label" for="foto_undangan">Pilih Foto</label>
                                </div>
                            </div>

                            <!-- Foto Multiple -->
                            <div class="form-group">
                                <label for="multiple_foto">Foto Multiple</label>
                                <div class="custom-file">
                                    <input
                                        type="file"
                                        class="custom-file-input"
                                        id="multiple_foto"
                                        name="multiple_foto[]"
                                        multiple>
                                    <label class="custom-file-label" for="multiple_foto">Pilih Foto</label>
                                </div>
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="verticalModal{{ $ud->id_undangan }}" tabindex="-1" role="dialog"
            aria-labelledby="verticalModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="verticalModalTitle">Detail undangan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <h5>ID undangan: {{ $ud->id_undangan }}</h5>
            <h5>Nama undangan: {{ $ud->nama_undangan }}</h5>
            <h5>Bahan undangan: {{ $ud->bahan_undangan }}</h5>
            <h5>Harga undangan: {{ $ud->harga_undangan }}</h5>
            <h5>Deskripsi undangan: {{ $ud->deskripsi_undangan }}</h5>

            <!-- Foto Thumbnail -->
            <h5>Foto Thumbnail undangan:</h5>
            <img src="{{ asset('storage/' . $ud->foto_undangan) }}" alt="Foto Thumbnail undangan"
            class="img-thumbnail" style="width: 100%; max-width: 300px;">

            <!-- Foto Lainnya -->
            <h5>Foto Lainnya:</h5>
            <div class="d-flex flex-wrap">
            @forelse ($ud->undanganImages as $image) <!-- Pastikan relasi `undanganImages` sudah diatur di model undangan -->
            <img src="{{ asset('storage/' . $image->image_path) }}" alt="Foto Lainnya"
            class="img-thumbnail m-2" style="width: 100px; height: auto;">
            @empty
            <p class="text-muted">Tidak ada foto tambahan.</p>
            @endforelse
            </div>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
            </div>
            </div>



            </div>
            </div>
            </td>
            </tr>
            @endforeach
            </tbody>
                                        </div> <!-- end section -->
                                    </div> <!-- .col-12 -->
                                </div> <!-- .row -->
                            </div> <!-- .container-fluid -->
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
