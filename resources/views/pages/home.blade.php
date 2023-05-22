@extends('layout.layout')

@section('utama')
<div class="bg-ghost-white">
				<div class="container-xxl">
					<div class="row">
						<div class="col-12 col-lg-6 col-xl-5 d-flex align-items-center my-34 my-lg-60 my-xl-120 order-2 order-lg-1">
							<div class="swiper header-slider">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<h1 class="heading-header-1 mb-0">Find out <span class="text-primary">talented freelancer</span> with better review faster</h1>
										<div class="heading-text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
									</div>

									<div class="swiper-slide">
										<h1 class="heading-header-1">Flexible <span class="text-primary">job</span> with reasonable payment</h1>
										<div class="heading-text-2">Make your website more attractive and marketable to attract more audiences, freelancers, and employers</div>
									</div>
								</div>
								<!-- /.header-slider-content -->

								<div class="d-flex flex-wrap align-items-center mt-60 gap-20">
									<a class="btn btn-primary fw-semiBold py-12 px-34 rounded-pill" href="/joblist.html" role="button">Discover Now</a>
									<a class="d-flex align-items-center fw-medium text-dark text-decoration-none" data-fslightbox="gallery" href="https://www.youtube.com/embed/pj5LRL3nwBg">
										<div href="#" class="btn btn-rounded btn-white border border-alice-blue">
											<img src="./assets/icons/play-stroke.svg" class="svg-inject svg-icon text-primary is-20" alt="" />
										</div>
										<span class="ms-20">Watch video</span>
									</a>
								</div>
								<!-- /.btn-discover-now and watch-video -->

								<div class="pagination-slider pagination-line header-slider-pagination mt-60"></div>
								<!-- /.header-slider-pagination -->
							</div>
							<!-- /.header-slider -->
						</div>
						<!-- /.col -->

						<div class="col-12 col-lg-6 col-xl-7 order-1 order-lg-2">
							<div class="position-relative h-lg-100">
								<img src="./assets/pages/index/header/heroImage.png" class="hero-image-img" alt="" />
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

			<div class="container py-60 py-lg-100">
				<div class="swiper image-slider client-logo-slider mx-xl-34 mx-xxl-80">
					<div class="swiper-wrapper">
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

						<div class="swiper-slide">
							<img src="./assets/client-logo-image.png" alt="" />
						</div>
					</div>
				</div>
			</div>
@stop

@section('content')
    <p>This is my body content.</p>
@stop