<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Orbiter is a bootstrap minimal & clean admin template">
    <meta name="keywords" content="Rio Code Portfolio">
    <meta name="author" content="RioCode">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Linecode - Make Your Website</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{ asset('lib/images/favicon/lc-favicon.png') }}">
    <!-- Start css -->
    <link href="{{ asset('lib/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('lib/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('lib/css/flag-icon.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('lib/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('lib/css/custom.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('lib/plugins/owl-carousel/owl.carousel.min.css') }}" rel="stylesheet" type="text/css">
    <!-- End css -->
</head>
<body class="bg-white">
    <!-- Progress Bar -->
    <div id="overlay">
        <div id="progstat"></div>
        <div id="progress"></div>
    </div>
    <!-- End Progress Bar -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand bold" href="<?= url('') ?>">
                <img src="{{ asset('lib/images/logo/lc-white-landscape.png') }}" class="img-fluid" width="250" alt="LINECODE">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"  aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto bold">
                    <a class="nav-item nav-link text-white" href="#">About</a>
                    <a class="nav-item nav-link text-white" href="#">Project</a>
                    <a class="nav-item nav-link text-white" href="#">Blog</a>
                    <a class="nav-item nav-link text-white" href="#">Contact</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    @yield('content')

    <!-- Footer -->
    <section id="footer">
        <img src="{{ asset('lib/images/footer/wave.svg') }}">
        <footer class="pb-5 bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <img src="{{ asset('lib/images/logo/lc-white-potrait.png') }}" class="img-fluid footer-img-1 mb-5   ">
                        <h6 class="text-white bold">Copyright &copy; Linecode 2020 | All Right Reserve</h6>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <!-- End Footer -->

    <!-- Start js -->        
    <script src="{{ asset('lib/js/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/js/popper.min.js') }}"></script>
    <script src="{{ asset('lib/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('lib/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('lib/js/detect.js') }}"></script>
    <script src="{{ asset('lib/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('lib/js/vertical-menu.js') }}"></script>
    <!-- Typed js -->
    <script src="{{ asset('lib/plugins/typed/typed.min.js') }}"></script>
    <script>
        var typed = new Typed('#typed', {
            strings: ['FREELANCER', 'WEBSITE DEVELOPER', 'WEBSITE DESIGN'],
            loop: true,
            typeSpeed: 50,
            backDelay: 1000,
        });
    </script>
    <!-- Carousel js -->
    <script src="{{ asset('lib/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            margin: 10,
            nav: true,
            navText: ["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        });
    </script>
    <!-- Core js -->
    <script src="{{ asset('lib/js/core.js') }}"></script>
    <!-- End js -->
</body>
</html>