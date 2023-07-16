<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job List - Ziro HTML Template</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ asset('vendors/jquery-ui/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/swiper/swiper-bundle.min.css') }}">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
</head>
<body class="page__eventlist">
    <nav class="navbar navbar-expand-xl">
       @include('layout.nav.nav')
    </nav>
    <!-- = /. Navbar Section = -->
    <main class="main">
        @yield('utama')
    </main>
    <!-- = /. Main Section = -->
	@include('layout.footer.footer')
    <!-- = /. Footer Section = -->
    <!-- Bootstrap JS -->
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Vendors -->
    <script src="{{ asset('vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendors/fslightbox/fslightbox.js') }}"></script>
    <script src="{{ asset('vendors/svg-inject/dist/svg-inject.min.js') }}"></script>
    <!-- Template Function -->
    <script src="{{ asset('dist/js/theme.js') }}"></script>
</body>
</html>
