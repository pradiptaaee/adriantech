<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>adriantech.com</title>
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/layout.css')}}">
    <!-- AOS moving -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="..">
    <link href="https://bootswatch.com/5/flatly/bootstrap.min.css" rel="stylesheet">

    <script src="{{asset('js/layout.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <!-- jquery -->
    <script src="{{ asset('js/jquery-3.7.1.min.js')}}"></script>
    <!-- aos moving -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- select2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>
    <script>
        $(function() {
            $('select').select2({
                theme: 'bootstrap-5'
            });
        });
    </script>
    <!-- select2 end -->
</head>

<body>
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{asset('asset/ADRIANTECH_LOGO2.png')}}" width="250" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="" id="navbarNav">
                <ul class="navbar-nav float-end">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('service.index')}}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')


    <!-- <footer class=" container-fluid position-relative bottom-0 bg-primary border-top border-info border-3">
        <div class="d-flex justify-content-center align-items-center py-3 px-4 text-dark">
            <div class="col-md-4">
                <a class="nav-link" href="#">www.sigitar.com</a>
                <a class="nav-link" href="#"><i class="fa-solid fa-envelope"></i> sigitarStore@gmail.com</a>
                <a class="nav-link" href="#"><i class="fa-solid fa-location-dot"></i> jl Bersamamu No. 1 Kesiman Petilan</a>
            </div>
            <div class="col-md-4 text-center text-light">
                ADRIANTA ENTERPRISE &copy; 2025
            </div>
            <div class="col-md-4 text-end">
                <i class="fa-brands fa-square-instagram fa-2x"></i>
                <i class="fa-brands fa-shopify fa-2x mx-3"></i>
                <i class="fa-brands fa-tiktok fa-2x"></i>
            </div>
        </div>
    </footer> -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>