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
                    </ul>
                </ul>
            </nav>
        </aside>
        <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="page-title">Testimoni</h2>
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="my-4 row">
                                        <!-- Small table -->
                                        <div class="col-md-12">
                                            <div class="shadow card">
                                                <div class="card-body">
                                                    <!-- table -->
                                                    <table class="table datatables" id="dataTable-1">
                                                        <thead>
                                                            <tr>
                                                                <th>Customer</th>
                                                                <th>ID Pemesanan</th>
                                                                <th>Rating</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($testimonis as $testimoni)
                                                                <tr>
                                                                    <td>{{ $testimoni->customer->name }}</td>
                                                                    <td>{{ $testimoni->pemesanan_id }}</td>
                                                                    <td>{{ $testimoni->rating }}</td>
                                                                    <td>

                                                                        <span class="sr-only text-muted">Action</span>

                                                                        {{-- Button Detail --}}
                                                                        <button type="button"
                                                                            data-target="#verticalModal{{ $testimoni->id_testimoni }}"
                                                                            data-toggle="modal"
                                                                            class="mb-2 btn btn-primary">
                                                                            <span class="fe fe-20 fe-eye"></span>
                                                                        </button>

                                                                        {{-- Button edit --}}
                                                                        <button type="button"
                                                                            data-target="#varyModal{{ $testimoni->id_testimoni }}"
                                                                            data-toggle="modal"
                                                                            class="mb-2 btn btn-warning">
                                                                            <span class="fe fe-20 fe-edit-2">
                                                                            </span>
                                                                        </button>
                                                </div>



                                                <!-- Modal Detail -->
                                                <div class="modal fade"
                                                    id="verticalModal{{ $testimoni->id_testimoni }}" tabindex="-1"
                                                    role="dialog" aria-labelledby="verticalModalTitle"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg"
                                                        role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="verticalModalTitle">
                                                                    Detail Gedung</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5>ID Testimoni: {{ $testimoni->id_testimoni }}</h5>
                                                                <h5>Nama Customer: {{ $testimoni->customer->name }}
                                                                </h5>
                                                                <h5>ID Pemesanan: {{ $testimoni->pemesanan_id }}</h5>
                                                                <h5>Rating: {{ $testimoni->rating }}</h5>
                                                                <h5>{{ $testimoni->testimoni }}</h5>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="mb-2 btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                </td>
                                                </tr>
                                                @endforeach
                                                </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    </td>
                                    </tr>
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
