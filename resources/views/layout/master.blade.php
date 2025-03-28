<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
          <!-- Sidebar -->
          <strong>
          <a class="navbar-brand navbar-collapse justify-content-start" style="font-size:13pt" href="#">
          <div class="col-md-4 col-lg-2 p-3 bg-light" >
            <img src="{{ asset('/image/logo.png') }}" alt="logo" width="50" height="50" class="d-inline-block align-justify-text-top">
             Penitipan Sederhana
        </a>
    </strong>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="beranda">
                  Beranda
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link @yield('penitip')" href="penitip">
                  Data Penitip
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="penitipan">
                  Data Penitipan
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="penjualan">
                  Data Penjualan
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pembayaran">
                  Data Pembayaran
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-danger" href="login">
                  Logout
                </a>
              </li>
            </ul>
          </div>

          <div class="col-md-9 col-lg-10 p-4">
            <h1>@yield('title')</h1>
            @yield('konten')
          </div>

        </div>
      </div>






    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="{{asset('js/all.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>

{{-- <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <nav class="nav-item">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <img src="{{ asset('/image/logo.png') }}" alt="logo" width="50" height="50" class="d-inline-block align-text-top">
                Penitipan Sederhana
              </a>
            </div>
          </nav>
        <div class="container-fluid">

            <a class="navbar-brand" href="#">Beranda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link @yield('menu')" aria-current="page" href="/menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('MenuDos')" href="/dosen">Info Penitipan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('MenuGal')" href="/galeri">Cek Transaksi</a>
                </li>

                </ul>

            </div>
        </div>
    </nav> --}}
