<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Puskesmas Cikande</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <!-- Custom Bootstrap Framework -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body id="page-top">
<div class="container">
  <div class="row align-items-center mt-4">
    <div class="col-7 fw-bold open-sans">
     <h2>UPT PUSKESMAS CIKANDE </h2>
     <p>Kami Siap Melayani Dengan Hati, Ramah, dan Profesional</p>
    </div>
    <div class="col text-end">
      <img class="me-4 pointer-events-none" src="{{ asset('img/logo-kab.png') }}" alt="logo-kabpupaten-serang">
      <img class="pointer-events-none me-3" src="{{ asset('img/logo-pkm.png') }}" alt="logo-puskesmas">
    </div>
  </div>
</div>


<!-- Navbar  -->
<nav class="navbar navbar-expand-lg p-4 text-bg-primary mt-3">
  <div class="container-fluid">
    <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
      <ul class="navbar-nav open-sans fs-5 ">
        <li class="nav-item me-3 button">
          <a class="nav-link active text-white" aria-current="page" href="{{route ('home')}}">Home</a>
        </li>
        <li class="nav-item dropdown me-3">
          <a class="nav-link dropdown-toggle text-white button" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profile
          </a>
          <ul class="dropdown-menu fs-5 ">
            <li><a class="dropdown-item " href="{{ route ('profilePuskesmas')}}">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown me-3">
          <a class="nav-link dropdown-toggle text-white button" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Layanan
          </a>
          <ul class="dropdown-menu fs-5">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white button me-3" href="#">Kontak</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white button me-3" href="#">Galery</a>
        </li>
      </ul>
      <ul class="navbar-nav open-sans"> <li class="nav-item btn btn-primary">
          <a class="nav-link text-white button " href="#">Tanya Dokter?</a>
        </li> </ul>
    </div>
</div>
  </div>
</nav>

<!-- Main Content -->

@yield('content')


<!-- Footer  -->

<footer class="py-5 text-center text-body-secondary bg-body-tertiary">
  <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
  <p class="mb-0">
    <a href="#">Back to top</a>
  </p>
</footer>
<!-- Bootstrap core JavaScript-->
<script src="{{ asset ('template/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset ('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset ('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset ('template/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset ('template/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset ('template/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset ('template/js/demo/chart-pie-demo.js') }}"></script>
    <!-- Custom Bootstrap Js -->
    <script src="{{ asset ('js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>