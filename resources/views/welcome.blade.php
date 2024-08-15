<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DAMS_ver3</title>

        <!-- Frontend -->
        <link href="{{ asset('elements/frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

        <link href="{{ asset('elements/frontend/css/fontawesome.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('elements/frontend/css/templatemo-cyborg-gaming.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('elements/frontend/css/owl.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('elements/frontend/css/animate.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>


    </head>
    <body> 
        <div id="app"></div>
        <script src="{{ asset('js/app.js') }}"> </script>

        <script src="{{ asset('elements/frontend/vendor/jquery/jquery.min.js') }}"> </script>
        <script src="{{ asset('elements/frontend/vendor/bootstrap/js/bootstrap.min.js') }}"> </script>
        <script src="{{ asset('elements/frontend/js/isotope.min.js') }}"> </script>
        <script src="{{ asset('elements/frontend/js/owl-carousel.js') }}"> </script>
        <script src="{{ asset('elements/frontend/js/tabs.js') }}"> </script>
        <script src="{{ asset('elements/frontend/js/popup.js') }}"> </script>
        <script src="{{ asset('elements/frontend/js/custom.js') }}"> </script>


    </body>
</html>
