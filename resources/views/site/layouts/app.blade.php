<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Classic Hotel - @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('site/assets/images/favicon.png') }}" type="image/x-icon">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/owl-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('site/assets/css/tooplate-artxibition.css') }}">

    <meta property="og:image" content="https://www.oclassichotel.com.br/site/assets/images/about-image-whatsapp.png" />
    <meta property="og:url" content="https://www.oclassichotel.com.br/" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Classic Hotel" />
    <meta property="og:description"
        content=" O Classic Hotel está localizado na BR-010 em Estreito - Maranhão." />
    <meta property="fb:app_id" content="1" />

</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->
    @include('site.layouts.nav')
    @yield('content')
    @include('site.layouts.footer')

    <!-- jQuery -->
    <script src="{{ asset('site/assets/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('site/assets/js/popper.js') }}"></script>
    <script src="{{ asset('site/assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('site/assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('site/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('site/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('site/assets/js/imgfix.min.js') }}"></script>
    <script src="{{ asset('site/assets/js/mixitup.js') }}"></script>
    <script src="{{ asset('site/assets/js/accordions.js') }}"></script>
    <script src="{{ asset('site/assets/js/owl-carousel.js') }}"></script>

    <!-- Global Init -->
    <script src="{{ asset('site/assets/js/custom.js') }}"></script>
</body>

</html>