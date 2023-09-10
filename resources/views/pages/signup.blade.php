@extends('layout.layout')

@section('utama')

<main class="main position-relative">
			<div class="detail-header-background">
			</div>
			<!-- /.detail-background -->

			<div class="container-xxl">
				<div class="position-relative py-43 py-lg-80">
					<div class="d-grid gap-10 text-center">
						
					</div>
					<!-- /.heading-header -->

					<a class="position-absolute btn btn-rounded btn-white top-0 top-md-50 top-md start-0 translate-middle-md-y p-10 mt-15 mt-md-0" href="/">
						<img src="./assets/icons/long-arrow-left.svg" class="svg-inject text-dark is-20" alt="" />
					</a>
					<!-- /.btn-back -->
				</div>
			</div>
			<!-- /.container -->
			<!-- = /. Header Section = -->

			<div class="container-xxl">
				<div class="row">
					<div class="col-12 col-lg-8 col-xl-9 order-lg-2">
						<div class="d-grid d-xl-flex bg-white p-20 p-md-34 p-xxl-43 gap-34 rounded-20 shadow-2">
							
								
						</div>

						<div class="d-grid bg-white p-20 p-md-34 p-xxl-43 mt-24 gap-34 rounded-20 shadow-2">
							<h2 class="heading-section-4 text-dark mb-0">Daftarkan Diri Anda</h2>

							<form action="#" class="row">
								<div class="col-md-6 col-xl-4 my-15 my-xl-24">
									<label for="inputFirstname" class="form-label">First Name</label>
									<input type="text" class="form-control rounded-pill" id="inputFirstname" placeholder="Type here" />
								</div>
								<!-- /.col -->

								<div class="col-md-6 col-xl-4 my-15 my-xl-24">
									<label for="inputMiddlename" class="form-label">Middle Name</label>
									<input type="text" class="form-control rounded-pill" id="inputMiddlename" placeholder="Type here" />
								</div>
								<!-- /.col -->

								<div class="col-md-6 col-xl-4 my-15 my-xl-24">
									<label for="inputLastname" class="form-label">Last Name</label>
									<input type="text" class="form-control rounded-pill" id="inputLastname" placeholder="Type here" />
								</div>
								<!-- /.col -->

								<div class="col-md-6 col-xl-4 my-15 my-xl-24">
									<label for="inputBirthdate" class="form-label">Birth Date</label>
									<input type="text" class="form-control input-date rounded-pill" id="inputBirthdate" placeholder="MM DD, YYYY" />
								</div>
								<!-- /.col -->

								<div class="col-md-6 col-xl-4 my-15 my-xl-24">
									<label for="inputEmailaddress" class="form-label">Email Address</label>
									<input type="email" class="form-control rounded-pill" id="inputEmailaddress" placeholder="Type here" />
								</div>
								<!-- /.col -->

								<div class="col-md-6 col-xl-4 my-15 my-xl-24">
									<label for="inputPhonenumber" class="form-label">Phone Number</label>
									<input type="number" class="form-control rounded-pill" id="inputPhonenumber" placeholder="Type here" />
								</div>
								<!-- /.col -->

								
								<!-- /.col -->
                                <button type="submit" class="btn btn-primary fw-semiBold py-12 px-24 px-md-60 rounded-pill" role="button">Submit</button>
								<!-- /.col -->
							</form>
							<!-- /.row -->
						</div>
					</div>
					<!-- /.col -->

					<div class="col-12 col-lg-4 col-xl-3 mt-20 mt-lg-0 order-lg-1">
						<div class="d-grid gap-34 bg-white p-20 py-43 rounded-20 shadow-2">
							<div class="d-grid text-center gap-34 mx-auto">
								<img src="./assets/company-logo-120x120.png" class="img-avatar mx-auto rounded-pill" alt="job-logo-1" />
								<!-- /.company-image -->

								<div class="d-grid gap-10">
									<h6 class="heading-text-1 fw-medium mb-0">
										<a class="text-dark text-decoration-none" href="#">Yayasan Alfo Indonesia</a>
									</h6>
									<div class="fs-14">
										<a class="text-gray text-decoration-none" href="#">Program membantu rizqi</a>
									</div>
								</div>
								<!-- /.company-info -->

								<!-- <button class="btn btn-primary fw-semiBold py-12 rounded-pill">+ Follow</button> -->
								<!-- /.btn-follow -->
							</div>

							<div class="row">
								
								<!-- /.col -->
							</div>
							<!-- /.row -->

							<div class="border-top"></div>
							<!-- /.gap-border -->

							<!-- <div class="d-grid gap-15">
								<h6 class="fs-15 mb-0">About Company</h6>
								<div class="fs-14">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in</p>
								</div>
							</div> -->
							<!-- /.company-about -->

							<div class="d-flex align-items-center gap-15">
								<!-- /.btn-vacancy -->

								<a href="#" class="btn btn-white text-dark fw-semiBold py-12 w-100 border border-platinum rounded-pill shadow-none">More Detail</a>
								<!-- /.btn-more-detail -->
							</div>
						</div>
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
			<!-- = /. Main Section = -->

			<div class="mt-xl-43"></div>
			<!-- = /. Gap Section = -->

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
			<!-- = /. Logo Client Section = -->
		</main>
		<!-- = /. Main Section = -->

@endsection