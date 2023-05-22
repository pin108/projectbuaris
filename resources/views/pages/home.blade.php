@extends('layout.layout')

@section('utama')
<div class="bg-ghost-white">
	<div class="container-xxl">
		<div class="row">
			<div class="col-12 col-lg-4 col-xl-5 d-flex align-items-center my-34 my-lg-50 my-xl-120 order-2 order-lg-1">
				<div class="swiper header-slider">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<h1 class="heading-header-1 mb-0"><span class="text-primary"> Yayasan Alfo 2000</span>Yayasan kami, harapan bagi mereka yang membutuhkan</h1>
							</div>
							<div class="swiper-slide">
								<h1 class="heading-header-1">Sumbangkan sekarang, ubah hidup orang lain<span class="text-primary"> AYO!! Beramal</span></h1>
							</div>
							<div class="swiper-slide">
								<h1 class="heading-header-1">Dengan setiap donasi<span class="text-primary"> kita membangun jembatan kebahagiaan</span>
								</h1>
							</div>
							<!-- Add more slides as needed -->
						</div>
					</div>
					<!-- /.header-slider-content -->

					<div class="d-flex flex-wrap align-items-center mt-60 gap-20">
						<a class="btn btn-primary fw-semiBold py-12 px-34 rounded-pill" href="/joblist.html" role="button">Donasi</a>
						<a class="btn btn-primary fw-semiBold py-12 px-34 rounded-pill" href="/joblist.html" role="button">Galang Dana</a>

					</div>
					<!-- /.btn-discover-now and watch-video -->

					<div class="pagination-slider pagination-line header-slider-pagination mt-60"></div>
					<!-- /.header-slider-pagination -->
				</div>
				<!-- /.header-slider -->
			</div>
			<!-- /.col -->

			<div class="col-12 col-lg-4 col-xl-7 order-1 order-lg-2">
				<div class="position-relative h-lg-65">
					<img src="./images/homeimage.jpg" class="hero-image-img rounded-circle w-90 h-90" />
					<!-- /. hero-image -->
				</div>
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</div>
<!-- = /. Header Section = -->
<!-- <div class=" container py-60 py-lg-100">
	<div class="swiper image-slider client-logo-slider mx-xl-34 mx-xxl-80">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<img src="./images/gambar1.jpeg" />
			</div>
			<div class="swiper-slide">
				<img src="./assets/client-logo-image.png" alt="" />
			</div>

			<div class="swiper-slide">
				<img src="./assets/client-logo-image.png" alt="" />
			</div>

			<div class="swiper-slide">
				<img src="./assets/client-logo-image.png" alt="" />
			</div>

			<div class="swiper-slide">
				<img src="./assets/client-logo-image.png" alt="" />
			</div>
		</div>
	</div>
</div> -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<div class="cards-wrapper">
				<div class="card">
					<img src="..." class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
				<div class="card d-none d-md-block">
					<img src="..." class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
				<div class="card d-none d-md-block">
					<img src="..." class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<div class="cards-wrapper">
				<div class="card">
					<img src="..." class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
				<div class="card d-none d-md-block">
					<img src="..." class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
				<div class="card d-none d-md-block">
					<img src="..." class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<div class="cards-wrapper">
				<div class="card">
					<img src="..." class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
				<div class="card d-none d-md-block">
					<img src="..." class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
				<div class="card d-none d-md-block">
					<img src="..." class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
@stop

@section('content')
<p>This is my body content.</p>
@stop