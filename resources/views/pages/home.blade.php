@extends('layout.layout')

@section('utama')
<div class="bg-ghost-white">
	<div class="container-xxl" style="margin-top: 2%;">
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
						<a class="btn btn-primary fw-semiBold py-12 px-34 rounded-pill" href="{{url('galangdana')}}" role="button">Galang Dana</a>

					</div>
					<!-- /.btn-discover-now and watch-video -->

					<div class="pagination-slider pagination-line header-slider-pagination mt-60"></div>
					<!-- /.header-slider-pagination -->
				</div>
				<!-- /.header-slider -->
			</div>
			<!-- /.col -->

			<div class="col-12 col-lg-4 col-xl-4 align-items-center my-34 my-lg-50 my-xl-120 order-2 order-lg-1">
				<div>
					<img src="./images/homeimage.jpg" width="800px" />
					<!-- /. hero-image -->
				</div>
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</div>
@stop
@section('content')
<section>
	<div class="container" style="margin-top: -10%;">
		<div>
			<h2>Program Kami</h2>
		</div>
		<!-- Carousel wrapper -->
		<div id="carouselExampleControl" class="carousel carousel-dark slide" data-bs-touch="false" data-bs-interval="2000">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleControl" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleControl" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleControl" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<!-- Inner -->
			<div class="carousel-inner">
				<!-- Single item -->
				<div class="carousel-item active" data-bs-interval="10000">
					<img src="./images/homeimage.jpg" class="d-block w-100" alt="Sunset Over the City" style="width: 400 px; height:600px" />
					<div class="carousel-caption d-none d-md-block">
						<h5>Lihat Program</h5>
					</div>
				</div>

				<!-- Single item -->
				<div class="carousel-item" data-bs-interval="10000">
					<img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(22).webp" class="d-block w-100" alt="Canyon at Nigh" style="width: 400 px; height:600px" />
					<div class="carousel-caption d-none d-md-block">
						<h5>Second slide label</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
				</div>

				<!-- Single item -->
				<div class="carousel-item">
					<img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(23).webp" class="d-block w-100" alt="Cliff Above a Stormy Sea" style="width: 400 px; height:600px" />
					<div class="carousel-caption d-none d-md-block">
						<h5>Third slide label</h5>
						<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
					</div>
				</div>
			</div>
			<!-- Inner -->

			<!-- Controls -->
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControl" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControl" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>
</section>
<section>
	<div class="container" style="margin-top: 2%;">
		<div>
			<h2>Informasi Beasiswa</h2>
			<p>Kesempatan beasiswa adalah pintu menuju impian yang tak terbatas. Beranilah melangkah, berusaha, dan jadilah sosok yang menginspirasi dengan ilmu yang dipelajari. Beasiswa adalah anugerah, jangan sia-siakan kesempatan ini untuk mencapai puncak keberhasilan.</p>
		</div>
		<!-- Carousel wrapper -->
		<div id="carouselExampleControlsNoTouching" class="carousel carousel-dark slide" data-bs-touch="false" data-bs-interval="2000">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<!-- Inner -->
			<div class="carousel-inner">
				<!-- Single item -->
				<div class="carousel-item active" data-bs-interval="10000">
					<img src="./images/beasiswa3.jpg" class="d-block w-100" alt="Sunset Over the City" style="width: 400 px; height:600px" />
					<div class="carousel-caption d-none d-md-block">
						<h5>Lihat Program</h5>
						<a class="btn btn-primary fw-semiBold py-12 px-34 rounded-pill" href="{{url('informasibeasiswa')}}" role="button">Informasi Beasiswa</a>
					</div>
				</div>

				<!-- Single item -->
				<div class="carousel-item" data-bs-interval="10000">
					<img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(22).webp" class="d-block w-100" alt="Canyon at Nigh" style="width: 400 px; height:600px" />
					<div class="carousel-caption d-none d-md-block">
						<h5>Second slide label</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
				</div>

				<!-- Single item -->
				<div class="carousel-item">
					<img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(23).webp" class="d-block w-100" alt="Cliff Above a Stormy Sea" style="width: 400 px; height:600px" />
					<div class="carousel-caption d-none d-md-block">
						<h5>Third slide label</h5>
						<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
					</div>
				</div>
			</div>
			<!-- Inner -->

			<!-- Controls -->
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>
	<!-- == -->
</section>
<section class="pilih-donasi">
	<div class="container" style="margin-top: 3%;">
		<div>
			<h2>Pilih Donasi</h2>
			<p>Donasimu adalah investasi dalam kebaikan, yang akan memberikan imbalan tak terhingga bagi mereka yang menerimanya.</p>
		</div>
		<div class="row">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="card">
					<img src="https://imgix.kitabisa.com/7a0870c7-ac2b-4ac9-8b53-e46816b0b36a.jpg?auto=format&ch=Width,DPR,Save-Data,Viewport-Width" class="card-img-top" alt="Donation Image">
					<div class="card-body">
						<h5 class="card-title">Komplikasi 3 Penyakit Renggut Masa Kecil Alula</h5>
						<p class="card-text">Mari bantu pasien di RSHS Bandung berobat sampai sembuh!</p>
						<a href="{{url('detail')}}" class="btn btn-primary">Donasi Sekarang</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4">
				<div class="card">
					<img src="https://imgix.kitabisa.com/7a0870c7-ac2b-4ac9-8b53-e46816b0b36a.jpg?auto=format&ch=Width,DPR,Save-Data,Viewport-Width" class="card-img-top" alt="Donation Image">
					<div class="card-body">
						<h5 class="card-title">Komplikasi 3 Penyakit Renggut Masa Kecil Alula</h5>
						<p class="card-text">Mari bantu pasien di RSHS Bandung berobat sampai sembuh!</p>
						<a href="{{url('detail')}}" class="btn btn-primary">Donasi Sekarang</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4">
				<div class="card">
					<img src="https://imgix.kitabisa.com/7a0870c7-ac2b-4ac9-8b53-e46816b0b36a.jpg?auto=format&ch=Width,DPR,Save-Data,Viewport-Width" class="card-img-top" alt="Donation Image">
					<div class="card-body">
						<h5 class="card-title">Komplikasi 3 Penyakit Renggut Masa Kecil Alula</h5>
						<p class="card-text">Mari bantu pasien di RSHS Bandung berobat sampai sembuh!</p>
						<a href="{{url('detail')}}" class="btn btn-primary">Donasi Sekarang</a>
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
		<div class="container" style="margin-left: 5%;">
			<div class="row">
				<div class="col md-6">
					<div class="card-category">
						<div class="card-category-icon">
							<a href="#">
								<img src="./images/another.png" alt="Bencana Alam" />
							</a>
						</div>
						<h4 class="card-category-title">Bencana Alam</h4>
					</div>
				</div>
				<div class="col md-6">
					<div class="card-category">
						<div class="card-category-icon">
							<a href="#">
								<img src="./images/child_care_FILL0_wght400_GRAD0_opsz48.png" alt="Balita & Anak Sakit" />
							</a>
						</div>
						<h4 class="card-category-title">Balita & Anak Sakit</h4>
					</div>
				</div>
				<div class="col md-6">
					<div class="card-category">
						<div class="card-category-icon">
							<a href="#">
								<img src="./images/health_and_safety_FILL0_wght400_GRAD0_opsz48.png" alt="Bantuan Medis & Kesehatan" />
							</a>
						</div>
						<h4 class="card-category-title">Bantuan Medis & Kesehatan</h4>
					</div>
				</div>
				<div class="col md-6">
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
		</div>
	</section>



</section>

@stop