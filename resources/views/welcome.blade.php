<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DAMS_ver3</title>

        <!-- Frontend -->
        <link href="{{ asset('elements/frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('elements/frontend/assets/css/fontawesome.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('elements/frontend/assets/css/templatemo-572-designer.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('elements/frontend/assets/css/owl.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('elements/frontend/assets/css/animate.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>


    </head>
    <body> 
        <div id="app"></div>
        <script src="{{ asset('js/app.js') }}"> </script>

        <script src="{{ asset('elements/backend/js/isotope.min.js') }}"> </script>
        <script src="{{ asset('elements/backend/js/owl-carousel.js') }}"> </script>
        <script src="{{ asset('elements/backend/js/tabs.js') }}"> </script>
        <script src="{{ asset('elements/backend/js/popup.js') }}"> </script>
        <script src="{{ asset('elements/backend/js/custom.js') }}"> </script>


    </body>
</html>
