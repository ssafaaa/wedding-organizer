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
                        <a class="nav-link" href="{{url('admin/dashboard')}}">
                          <i class="fe fe-home fe-16"></i>
                          <span class="ml-3 item-text">Dashboard</span>
                        </a>
                      </li>
                      <ul class="navbar-nav flex-fill w-100 mb-2">
                        <li class="nav-item dropdown">
                          <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                            <i class="fe fe-box fe-16"></i>
                            <span class="ml-3 item-text">CRUD Item</span>
                          </a>
                          <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                            <li class="nav-item">
                              <a class="nav-link pl-3" href="{{url('admin/gedung')}}"><span class="ml-1 item-text">Gedung</span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link pl-3" href="{{url('admin/maincourse')}}"><span class="ml-1 item-text">Menu Main Course</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link pl-3" href="{{url('admin/dishes')}}"><span class="ml-1 item-text">Menu Dishes</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link pl-3" href="{{url('admin/dekorasi')}}"><span class="ml-1 item-text">Dekorasi</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link pl-3" href="{{url('admin/dokumentasi')}}"><span class="ml-1 item-text">Dokumentasi</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link pl-3" href="{{url('admin/sourvenir')}}"><span class="ml-1 item-text">Sourvenir</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link pl-3" href="{{url('admin/undangan')}}"><span class="ml-1 item-text">Undangan</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link pl-3" href="{{url('admin/bridal')}}"><span class="ml-1 item-text">Bridalstyle</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{url('admin/hiburan')}}"><span class="ml-1 item-text">Hiburan</span></a>
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

            </nav>
        </aside>
        <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="page-title">Gedung</h2>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card shadow mb-4">
                                    <div class="card-header">
                                        <strong class="card-title">Form row</strong>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('gedung.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="nama_gedung">Nama Gedung</label>
                                                    <input type="text" class="form-control" id="nama_gedung"
                                                        name="nama_gedung">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="tipe_gedung">Tipe Gedung</label>
                                                    <select id="tipe_gedung" class="form-control" name="tipe_gedung">
                                                        <option selected>Indoor</option>
                                                        <option>Outdoor</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="alamat_gedung">Alamat Gedung</label>
                                                    <input type="text" class="form-control" id="alamat_gedung"
                                                        name="alamat_gedung">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="kapasitas_gedung">Kapasitas Gedung</label>
                                                    <input type="text" class="form-control" id="kapasitas_gedung"
                                                        name="kapasitas_gedung">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="harga_sewa_gedung">Harga Sewa Gedung</label>
                                                    <input type="text" class="form-control" id="harga_sewa_gedung"
                                                        name="harga_sewa_gedung">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="status_gedung">Status Gedung</label>
                                                    <select id="status_gedung" class="form-control"
                                                        name="status_gedung">
                                                        <option selected>Tersedia</option>
                                                        <option>Tidak Tersedia</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="example-textarea">Deskripsi</label>
                                                        <textarea class="form-control" id="deskripsi_gedung" rows="2" name="deskripsi_gedung"></textarea>
                                                    </div>
                                                    <label for="customFile">Foto Thumbnail</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="foto_gedung" name="foto_gedung">
                                                        <label class="custom-file-label" for="foto_gedung">Choose
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
                                                        <!-- table -->
                                                        <table class="table datatables" id="dataTable-1">
                                                            <thead>
                                                                <tr>
                                                                    <th>ID Gedung</th>
                                                                    <th>Nama Gedung</th>
                                                                    <th>Harga Gedung</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($gedungs as $gd)
                                                                    <tr>
                                                                        <td>{{ $gd->id_gedung }}</td>
                                                                        <td>{{ $gd->nama_gedung }}</td>
                                                                        <td>{{ $gd->harga_sewa_gedung }}</td>
                                                                        <td>

                                                                        <span class="text-muted sr-only">Action</span>

                                                                            {{-- Button Detail --}}
                                                                            <button type="button"
                                                                                data-target="#verticalModal{{ $gd->id_gedung }}"
                                                                                data-toggle="modal"
                                                                                class="btn mb-2 btn-primary">
                                                                                <span class="fe fe-20  fe-eye"></span>
                                                                            </button>

                                                                            {{-- Button edit --}}
                                                                            <button type="button"
                                                                                data-target="#varyModal{{ $gd->id_gedung }}"
                                                                                data-toggle="modal"
                                                                                class="btn mb-2 btn-warning">
                                                                                <span class="fe fe-20 fe-edit-2">
                                                                                </span>
                                                                            </button>

                                                                            {{-- Modal edit --}}
                                                                                <div
                                                                                    class="modal fade"
                                                                                    id="varyModal{{ $gd->id_gedung }}"
                                                                                    tabindex="-1"
                                                                                    role="dialog"
                                                                                    aria-labelledby="varyModalLabel"
                                                                                    aria-hidden="true">
                                                                                    <div class="modal-dialog" role="document">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h5 class="modal-title" id="varyModalLabel">Edit Gedung</h5>
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
                                                                                                    action="{{ route('gedung.update', $gd->id_gedung) }}"
                                                                                                    method="POST"
                                                                                                    enctype="multipart/form-data">
                                                                                                    @csrf
                                                                                                    @method('PUT')

                                                                                                    <!-- Nama Gedung -->
                                                                                                    <div class="form-group">
                                                                                                        <label for="nama_gedung" class="col-form-label">Nama Gedung:</label>
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            id="nama_gedung"
                                                                                                            name="nama_gedung"
                                                                                                            value="{{ $gd->nama_gedung }}">
                                                                                                    </div>

                                                                                                    <!-- Tipe Gedung -->
                                                                                                    <div class="form-group">
                                                                                                        <label for="tipe_gedung" class="col-form-label">Tipe Gedung:</label>
                                                                                                        <select id="tipe_gedung" class="form-control" name="tipe_gedung">
                                                                                                            <option value="{{ $gd->tipe_gedung }}">{{ $gd->tipe_gedung }}</option>
                                                                                                            <option>Indoor</option>
                                                                                                            <option>Outdoor</option>
                                                                                                        </select>
                                                                                                    </div>

                                                                                                    <!-- Status Gedung -->
                                                                                                    <div class="form-group">
                                                                                                        <label for="status_gedung" class="col-form-label">Status Gedung:</label>
                                                                                                        <select id="status_gedung" class="form-control" name="status_gedung">
                                                                                                            <option value="{{ $gd->status_gedung }}">{{ $gd->status_gedung }}</option>
                                                                                                            <option>Tersedia</option>
                                                                                                            <option>Tidak tersedia</option>
                                                                                                        </select>
                                                                                                    </div>

                                                                                                    <!-- Kapasitas Gedung -->
                                                                                                    <div class="form-group">
                                                                                                        <label for="kapasitas_gedung" class="col-form-label">Kapasitas Gedung:</label>
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            id="kapasitas_gedung"
                                                                                                            name="kapasitas_gedung"
                                                                                                            value="{{ $gd->kapasitas_gedung }}">
                                                                                                    </div>

                                                                                                    <!-- Harga Sewa Gedung -->
                                                                                                    <div class="form-group">
                                                                                                        <label for="harga_sewa_gedung" class="col-form-label">Harga Sewa Gedung:</label>
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            id="harga_sewa_gedung"
                                                                                                            name="harga_sewa_gedung"
                                                                                                            value="{{ $gd->harga_sewa_gedung }}">
                                                                                                    </div>

                                                                                                    <!-- Alamat Gedung -->
                                                                                                    <div class="form-group">
                                                                                                        <label for="alamat_gedung" class="col-form-label">Alamat Gedung:</label>
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            id="alamat_gedung"
                                                                                                            name="alamat_gedung"
                                                                                                            value="{{ $gd->alamat_gedung }}">
                                                                                                    </div>

                                                                                                    <!-- Deskripsi Gedung -->
                                                                                                    <div class="form-group">
                                                                                                        <label for="deskripsi_gedung" class="col-form-label">Deskripsi:</label>
                                                                                                        <textarea
                                                                                                            class="form-control"
                                                                                                            id="deskripsi_gedung"
                                                                                                            name="deskripsi_gedung">{{ $gd->deskripsi_gedung }}</textarea>
                                                                                                    </div>

                                                                                                    <!-- Foto Gedung -->
                                                                                                    <div class="form-group">
                                                                                                        <label for="foto_gedung">Foto Gedung</label>
                                                                                                        <div class="custom-file">
                                                                                                            <input
                                                                                                                type="file"
                                                                                                                class="custom-file-input"
                                                                                                                id="foto_gedung"
                                                                                                                name="foto_gedung">
                                                                                                            <label class="custom-file-label" for="foto_gedung">Pilih Foto</label>
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
                                                                            </div>



                                        <!-- Modal Detail -->
                                        <div class="modal fade" id="verticalModal{{ $gd->id_gedung }}" tabindex="-1" role="dialog"
                                            aria-labelledby="verticalModalTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="verticalModalTitle">Detail Gedung</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h5>ID Gedung: {{ $gd->id_gedung }}</h5>
                                                        <h5>Nama Gedung: {{ $gd->nama_gedung }}</h5>
                                                        <h5>Tipe Gedung: {{ $gd->tipe_gedung }}</h5>
                                                        <h5>Status Gedung: {{ $gd->status_gedung }}</h5>
                                                        <h5>Kapasitas Gedung: {{ $gd->kapasitas_gedung }}</h5>
                                                        <h5>Harga Sewa Gedung: {{ $gd->harga_sewa_gedung }}</h5>
                                                        <h5>Alamat Gedung: {{ $gd->alamat_gedung }}</h5>
                                                        <h5>Deskripsi Gedung: {{ $gd->deskripsi_gedung }}</h5>

                                                        <!-- Foto Thumbnail -->
                                                        <h5>Foto Thumbnail Gedung:</h5>
                                                        <img src="{{ asset('storage/' . $gd->foto_gedung) }}" alt="Foto Thumbnail Gedung"
                                                            class="img-thumbnail" style="width: 100%; max-width: 300px;">

                                                        <!-- Foto Lainnya -->
                                                        <h5>Foto Lainnya:</h5>
                                                        <div class="d-flex flex-wrap">
                                                            @forelse ($gd->gedungImages as $image) <!-- Pastikan relasi `gedungImages` sudah diatur di model Gedung -->
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
