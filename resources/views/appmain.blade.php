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
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/timeline.css') }}" rel="stylesheet">
    <!-- Aos -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->

    <!-- Google Maps -->

</head>

<body id="page-top">



    <!-- Navbar  -->
    <nav class="navbar navbar-expand-lg p-4 text-bg-primary ">
        <div class="container-fluid">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <div class="row align-items-center">
                        <div class="col-md-2">
                            <img src="{{asset ('img/logo-pkm.png') }}" alt="Logo" width="50" height="50"
                                class="d-inline-block align-text-top">
                        </div>
                        <div class="col-md-2"><span class="fw-bold text-white fs-3">Puskesmas Cikande</span></div>
                    </div>

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="row">
                    <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
                        <ul class="navbar-nav open-sans fs-5 ">

                            <li class="nav-item me-3 button">
                                <a class="nav-link active text-white" aria-current="page"
                                    href="{{route ('home')}}">Home</a>
                            </li>
                            <li class="nav-item button me-3">
                                <a class="nav-link text-white button" href="{{route ('profile') }}" aria-current="page">
                                    Profile
                                </a>
                            </li>
                            <li class="nav-item button me-3">
                                <a class="nav-link  text-white button" href="{{route ('layanan') }}"
                                    aria-current="page">
                                    Layanan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white button me-3" href="{{route ('artikel')}}">Artikel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white button me-3" href="{{route ('kontak')}}">Kontak</a>
                            </li>
                            <li class="nav-item btn-sm btn-primary">
                                <a class="nav-link text-white button " href="{{ route ('tanyadokter')}}">Tanya
                                    Dokter?</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </nav>

    <!-- Main Content -->

    @yield('content')


    <!-- Footer  -->


    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <span class="mb-3 mb-md-0 text-body-secondary">© 2023 Puskesmas Cikande</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#twitter"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#instagram"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#facebook"></use>
                        </svg></a></li>
            </ul>
        </footer>
    </div>

   
 

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
    <script src="{{asset ('animations-number.js')}}"></script>
    <script src="{{ asset ('script.js') }}"></script>
    <!-- Aos -->
    <!-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script> -->
    <script>
    AOS.init();
    </script>
</body>

</html>