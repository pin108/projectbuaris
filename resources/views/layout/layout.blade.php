<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>@yield('title')</title>
	<link rel="icon" type="image/x-icon" href="./assets/favicon.png" />

	<!-- Plugin CSS -->
	<link rel="stylesheet" href="./vendors/jquery-ui/jquery-ui.min.css" />
	<link rel="stylesheet" href="./vendors/swiper/swiper-bundle.min.css" />

	<!-- Include Swiper CSS -->
	<link rel="stylesheet" href=".css/swiper.css">
	<link rel="stylesheet" href=".css/carousel.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="./dist/css/style.css" />
	<link rel="stylesheet" href="./dist/css/custom.css" />
</head>

<body class="page__homepage">
	@include('layout.nav.nav')

	<!-- = /. Navbar Section = -->

	<main class="home">
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

	@include('layout.footer.footer')
	<!-- = /. Footer Section = -->

	<!-- Bootstrap JS -->
	<script src="./vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

	<!-- Vendors -->
	<script src="./vendors/jquery/jquery-3.6.0.min.js"></script>
	<script src="./vendors/jquery-ui/jquery-ui.min.js"></script>
	<script src="./vendors/swiper/swiper-bundle.min.js"></script>
	<script src="./vendors/fslightbox/fslightbox.js"></script>
	<script src="./vendors/svg-inject/dist/svg-inject.min.js"></script>

	<!-- Include Swiper JS -->
	<script src="./js/swiper.js"></script>
	<script src="./js/carousel.js"></script>

	<!-- Template Function -->
	<script src="./dist/js/theme.js"></script>
</body>

</html>