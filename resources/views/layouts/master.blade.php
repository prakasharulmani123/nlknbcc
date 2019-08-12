<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ env('APP_NAME') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/assets/phoenix/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/assets/phoenix/css/animate.css">

    <link rel="stylesheet" href="/assets/phoenix/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/phoenix/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assets/phoenix/css/magnific-popup.css">

    <link rel="stylesheet" href="/assets/phoenix/css/aos.css">

    <link rel="stylesheet" href="/assets/phoenix/css/ionicons.min.css">

    <link rel="stylesheet" href="/assets/phoenix/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/assets/phoenix/css/jquery.timepicker.css">


    <link rel="stylesheet" href="/assets/phoenix/css/flaticon.css">
    <link rel="stylesheet" href="/assets/phoenix/css/icomoon.css">
    <link rel="stylesheet" href="/assets/phoenix/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}"><i class="flaticon-helmet"></i><span>NLKNBCC</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ route('aboutus') }}" class="nav-link">About</a></li>
{{--                <li class="nav-item"><a href="games.html" class="nav-link">Games</a></li>--}}
                <li class="nav-item"><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
{{--                <li class="nav-item cta"><a href="#" class="nav-link">Buy Ticket</a></li>--}}

            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

@yield('content')

<footer class="ftco-footer ftco-section">
    <div class="container-fluid px-md-5">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">NLKNBCC</h2>
                    <p>Far far away, behind the word mountains, far from the countries.</p>
                    <ul class="ftco-footer-social list-unstyled mt-5">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Services</h2>
                    <ul class="list-unstyled">
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Senior Team></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>For Kids</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Reviews</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>FAQs</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">About Us</h2>
                    <ul class="list-unstyled">
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Our Story</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Meet the team</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Coach</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Company</h2>
                    <ul class="list-unstyled">
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About Us</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Press</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Careers</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope pr-4"></span><span class="text">info@yourdomain.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="/assets/phoenix/js/jquery.min.js"></script>
<script src="/assets/phoenix/js/jquery-migrate-3.0.1.min.js"></script>
<script src="/assets/phoenix/js/popper.min.js"></script>
<script src="/assets/phoenix/js/bootstrap.min.js"></script>
<script src="/assets/phoenix/js/jquery.easing.1.3.js"></script>
<script src="/assets/phoenix/js/jquery.waypoints.min.js"></script>
<script src="/assets/phoenix/js/jquery.stellar.min.js"></script>
<script src="/assets/phoenix/js/owl.carousel.min.js"></script>
<script src="/assets/phoenix/js/jquery.magnific-popup.min.js"></script>
<script src="/assets/phoenix/js/aos.js"></script>
<script src="/assets/phoenix/js/jquery.animateNumber.min.js"></script>
<script src="/assets/phoenix/js/bootstrap-datepicker.js"></script>
<script src="/assets/phoenix/js/scrollax.min.js"></script>
{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>--}}
<script src="/assets/phoenix/js/google-map.js"></script>
<script src="/assets/phoenix/js/main.js?v=1"></script>

{{--<script>--}}
{{--    $(document).ready(function () {--}}
{{--        console.log('AAAAA');--}}
{{--    });--}}
{{--</script>--}}

</body>
</html>
