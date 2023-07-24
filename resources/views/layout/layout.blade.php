<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alfo 2000</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ asset('vendors/jquery-ui/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/swiper/swiper-bundle.min.css') }}">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
    <link rel="stylesheet" href="./dist/css/custom.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<!-- <body class="page__eventlist"> -->

<body class="page_eventlist">
    <nav class="navbar" style="width: 100%;">
        @include('layout.nav.nav')
    </nav>
    <!-- = /. Navbar Section = -->
    <main class="home" style="margin-top: -5%;">
        @yield('utama')
        <!-- = /. Logo Client Section = -->

        <div class="mt-43"></div>
        <!-- = /. Gap Section = -->

        <div class="container-xxl py-60 overflow-hidden overflow-xxl-visible">
            @yield('content')
            <!-- /.row -->
        </div>
        <!-- = /. Gap Section = -->
    </main>
    <!-- = /. Main Section = -->

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
    <!-- Include Swiper JS -->
    <script src="./js/swiper.js"></script>
    <script src="./js/carousel.js"></script>

    <!-- Template Function -->
    <script src="{{ asset('dist/js/theme.js') }}"></script>
</body>

</html>