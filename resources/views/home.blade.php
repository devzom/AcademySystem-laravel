<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Academic System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/">Academic System<span>.</span></a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item"><a href="/login" class="nav-link"><span>Login</span></a></li>
                <li class="nav-item"><a href="/register" class="nav-link"><span>Register</span></a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="hero-wrap">
    <div class="container-fluid px-0">
        <div class="row d-flex slider-text align-items-center js-fullheight justify-content-end">
            <img class="one-third align-self-center img-fluid" src="images/undraw_book_lover_green.svg" style="max-height: 60vh " alt="">
            <div class="one-forth d-flex align-items-center ">
                <div class="text mt-5">
                    <span class="">Stay tuned to academic news</span>
                    <h1>Academic System</h1>
                    <p>Your academy in Your hands.</p>
                    <a href="/login" class="btn btn-primary py-3 px-4">Login</a>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="ftco-footer ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Information</h2>
                    <p>Made for test purposes.</p>
                </div>
            </div>
            <div class="col-md">
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Academic System</h2>
                    <div class="footer-link-section mb-3">
                        <ul>
                            <li><span class="icon fa fa-map-marker"></span><span class="text">Poznan, Poland</span></li>
                            <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">dev.zomerfeld@gmail.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
            </div>
        </div>
    </div>
</footer>


<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('js/scrollax.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

</body>
</html>
