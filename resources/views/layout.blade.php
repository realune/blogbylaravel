<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="csrf_token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title')</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="py-3 navbar navbar-expand-lg navbar-dark bg-dark">
            @include('navbar')
        </nav>

        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            @include('header')
        </header>

        <!-- Page content-->
        <div class="container">
            @yield('content')
        </div>

        <!-- Footer-->
        <footer class="py-4 bg-dark">
            @include('footer')
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
