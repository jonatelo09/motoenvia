<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSRF Token -->
    <meta name="quote_store_route" content="{{ route('quotes.store') }}">

    <title>{{ config('app.name', 'Motoenvía') }}</title>

    <link rel="icon" type="image/png" href="img/favicon.png"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />

    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>

@include('layouts.navbar')

@yield('content')

@include('layouts.footer')

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="/js/maps.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="/js/main.js"></script>
<script src="/js/send_quote.js"></script>
<script>
    $('#contactForm').submit(function(){
        $(this).find('button[type=submit]').prop('disabled', true);
        $(this).find('button[type=submit]').html(
            `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Enviando Mensaje...`
        );
    });
</script>
</body>
</html>
