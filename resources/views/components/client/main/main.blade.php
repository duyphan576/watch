<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Obaju : e-commerce template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('assets/client/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('assets/client/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700">
    <!-- owl carousel-->
    <link rel="stylesheet" href="{{ asset('assets/client/vendor/owl.carousel/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/vendor/owl.carousel/assets/owl.theme.default.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('assets/client/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('assets/client/css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets/client/favicon.png') }}">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    @include('components.client.main.header');
    {{ $slot }}
    @include('components.client.main.footer');
    <!-- JavaScript files-->
    <script src="{{ asset('assets/client/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/client/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/client/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('assets/client/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/client/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js') }}"></script>
    <script src="{{ asset('assets/client/js/front.js') }}"></script>
    @isset($script)
        {{$script}}
    @endisset
</body>

</html>
