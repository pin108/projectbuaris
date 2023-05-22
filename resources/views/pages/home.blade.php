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
					<img src="./images/homeimage.jpg" class="rounded-top" />
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
<div class=" container py-60 py-lg-100">
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
</div>
@stop


@section('content')
<section class="pilih-donasi">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2>Pilih Donasi</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean faucibus diam a faucibus vulputate. Sed interdum ante ut justo iaculis fermentum.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="card">
					<img src="./images/homeimage.jpg" class="card-img-top" alt="Donation Image">
					<div class="card-body">
						<h5 class="card-title">Donasi A</h5>
						<p class="card-text">Deskripsi Donasi A</p>
						<a href="#" class="btn btn-primary">Donasi Sekarang</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4">
				<div class="card">
					<img src="./images/homeimage.jpg" class="card-img-top" alt="Donation Image">
					<div class="card-body">
						<h5 class="card-title">Donasi B</h5>
						<p class="card-text">Deskripsi Donasi B</p>
						<a href="#" class="btn btn-primary">Donasi Sekarang</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4">
				<div class="card">
					<img src="./images/homeimage.jpg" class="card-img-top" alt="Donation Image">
					<div class="card-body">
						<h5 class="card-title">Donasi C</h5>
						<p class="card-text">Deskripsi Donasi C</p>
						<a href="#" class="btn btn-primary">Donasi Sekarang</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="container py-60 py-lg-100">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8 text-center">
            <h2 class="heading-section-2 mb-0">Pilih Kategori Favoritmu</h2>
            <p class="mt-20 mb-40">Silakan pilih kategori donasi yang ingin Anda bantu</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card-category">
                <div class="card-category-icon">
                    <a href="#">
                        <img src="./images/another.png" alt="Bencana Alam" />
                    </a>
                </div>
                <h4 class="card-category-title">Bencana Alam</h4>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card-category">
                <div class="card-category-icon">
                    <a href="#">
                        <img src="./images/child_care_FILL0_wght400_GRAD0_opsz48.png" alt="Balita & Anak Sakit" />
                    </a>
                </div>
                <h4 class="card-category-title">Balita & Anak Sakit</h4>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card-category">
                <div class="card-category-icon">
                    <a href="#">
                        <img src="./images/health_and_safety_FILL0_wght400_GRAD0_opsz48.png" alt="Bantuan Medis & Kesehatan" />
                    </a>
                </div>
                <h4 class="card-category-title">Bantuan Medis & Kesehatan</h4>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card-category">
                <div class="card-category-icon">
                    <a href="#">
                        <img src="./images/other_admission_FILL0_wght400_GRAD0_opsz48.png" alt="Lainnya" />
                    </a>
                </div>
                <h4 class="card-category-title">Lainnya</h4>
            </div>
        </div>
    </div>
</section>



</section>

@stop