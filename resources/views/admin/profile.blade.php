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
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
          <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Type something..." aria-label="Search">
        </form>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
              <i class="fe fe-sun fe-16"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-shortcut">
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
            <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
          <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
          <!-- nav bar -->
          <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
              <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
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
                      <a class="nav-link pl-3" href="{{url('admin/bridalstyle')}}"><span class="ml-1 item-text">Bridalstyle</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{url('admin/hiburan')}}"><span class="ml-1 item-text">Hiburan</span></a>
                      </li>
                  </ul>
                </li>
          <p class="text-muted nav-heading mt-4 mb-1">
            <span>Components</span>
          </p>
        </nav>
      </aside>
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="h3 mb-4 page-title">Profile</h2>
              <div class="row mt-5 align-items-center">
                <div class="col-md-3 text-center mb-5">
                  <div class="avatar avatar-xl">
                    <img src="./assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>
                </div>
                <div class="col">
                  <div class="row align-items-center">
                    <div class="col-md-7">
                      <h4 class="mb-1">{{$customer->name}}</h4>
                      <p class="small mb-3"><span class="badge badge-dark">{{$customer->email}}</span></p>
                    </div>
                  </div>
                  <div class="row mb-4">
                    <div class="col-md-7">
                      <p class="text-muted">{{$customer->address}}</p>
                    </div>
                    <div class="col">
                      <p class="small mb-0 text-muted">{{$customer->phone}}</p>
                      <p class="small mb-0 text-muted">{{$customer->gender}}</p>
                      <p class="small mb-0 text-muted">{{$customer->nik}}</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4 shadow card">
                                    <div class="card-header">
                                        <strong class="card-title">Edit Profile</strong>
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
                                                <label for="password">Password</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control" id="password" name="password" value="{{ $customer->password }}">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="togglePassword" style="cursor: pointer;">
                                                            <i class="fas fa-eye"></i>
                                                        </span>
                                                    </div>
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

      </main> <!-- main -->
    </div> <!-- .wrapper -->

    <script>
        const togglePassword = document.querySelector("#togglePassword");
        const passwordField = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            // Ubah tipe input
            const type = passwordField.type === "password" ? "text" : "password";
            passwordField.type = type;

            // Ganti icon (opsional, jika pakai Font Awesome)
            this.querySelector('i').classList.toggle("fa-eye");
            this.querySelector('i').classList.toggle("fa-eye-slash");
        });
    </script>

<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
/>

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

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
  </body>
</html>
