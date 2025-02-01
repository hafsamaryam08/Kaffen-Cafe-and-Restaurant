@extends('frontend.layouts.main')
@section('title', 'Services')
@section('main-container')
		<!-- Wrapper -->
		<div class="wrapper">

			<!-- Section Started Inner -->
			<section class="section kf-started-inner">
				<div class="kf-parallax-bg js-parallax" style="background-image: url(frontend/assets/images/services_inner_bg.jpg);"></div>
				<div class="container">

					<h1 class="kf-h-title text-anim-1 scroll-animate" data-splitting="chars" data-animate="active">
						Services
					</h1>

				</div>
			</section>

			<!-- Section Services -->
			<section class="section kf-services">
				<div class="container">

					<div class="kf-titles align-center">
						<div class="kf-subtitle element-anim-1 scroll-animate" data-animate="active">
							We provide
						</div>
						<h3 class="kf-title element-anim-1 scroll-animate" data-animate="active">
							Kaffen Services One
						</h3>
					</div>

					<div class="kf-services-items row">

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
							<div class="kf-services-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image kf-image-hover">
								<a href="{{ route('menu-restaurant') }}"><img src="frontend/assets/images/service1.jpg" alt="" /></a>
								</div>
								<div class="desc">
									<div class="icon"><i class="las la-utensils"></i></div>
									<h5 class="name">Food Services</h5>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
							<div class="kf-services-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image kf-image-hover">
								<a href="{{ route('menu') }}"><img src="frontend/assets/images/service2.jpg" alt="" /></a>
								</div>
								<div class="desc">
									<div class="icon"><i class="las la-coffee"></i></div>
									<h5 class="name">Coffee Club</h5>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
							<div class="kf-services-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image kf-image-hover">
								<a href="{{ route('menu') }}"><img src="frontend/assets/images/service3.jpg" alt="" /></a>
								</div>
								<div class="desc">
									<div class="icon"><i class="las la-glass-cheers"></i></div>
									<h5 class="name">Delicious Latte</h5>
								</div>
							</div>
						</div>

					</div>

				</div>
			</section>

			<!-- Section Numbers-2 -->
			<section class="section kf-numbers-2 section-bg">
				<div class="container">

					<div class="kf-titles align-center">
						<div class="kf-subtitle element-anim-1 scroll-animate" data-animate="active">
							What we do
						</div>
						<h3 class="kf-title element-anim-1 scroll-animate" data-animate="active">
							Kaffen Services Two
						</h3>
					</div>

					<div class="kf-numbers-items-2 row">

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
							<div class="kf-numbers-item-2 element-anim-1 scroll-animate" data-animate="active">
								<div class="icon"><i class="las la-cookie"></i></div>
								<div class="desc">
									<h5 class="name">Brownies</h5>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
							<div class="kf-numbers-item-2 element-anim-1 scroll-animate" data-animate="active">
								<div class="icon"><i class="las la-carrot"></i></div>
								<div class="desc">
									<h5 class="name">Salads</h5>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
							<div class="kf-numbers-item-2 element-anim-1 scroll-animate" data-animate="active">
								<div class="icon"><i class="las la-hamburger"></i></div>
								<div class="desc">
									<h5 class="name">Fast Food</h5>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
							<div class="kf-numbers-item-2 element-anim-1 scroll-animate" data-animate="active">
								<div class="icon"><i class="las la-fish"></i></div>
								<div class="desc">
									<h5 class="name">Sea Food</h5>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
							<div class="kf-numbers-item-2 element-anim-1 scroll-animate" data-animate="active">
								<div class="icon"><i class="las la-pizza-slice"></i></div>
								<div class="desc">
									<h5 class="name">Pizza</h5>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
							<div class="kf-numbers-item-2 element-anim-1 scroll-animate" data-animate="active">
								<div class="icon"><i class="las la-glass-cheers"></i></div>
								<div class="desc">
									<h5 class="name">Drinks</h5>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
							<div class="kf-numbers-item-2 element-anim-1 scroll-animate" data-animate="active">
								<div class="icon"><i class="las la-mug-hot"></i></div>
								<div class="desc">
									<h5 class="name">Coffee</h5>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
							<div class="kf-numbers-item-2 element-anim-1 scroll-animate" data-animate="active">
								<div class="icon"><i class="las la-seedling"></i></div>
								<div class="desc">
									<h5 class="name">Pastas</h5>
								</div>
							</div>
						</div>

					</div>

				</div>
			</section>

			<!-- Section Services-2 -->
			<section class="section kf-services">
				<div class="container">

					<div class="kf-titles align-center">
						<div class="kf-subtitle element-anim-1 scroll-animate" data-animate="active">
							Our awesome
						</div>
						<h3 class="kf-title element-anim-1 scroll-animate" data-animate="active">
							Kaffen Services Three
						</h3>
					</div>

					<div class="kf-services-items-2 row">

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
							<div class="kf-services-item-2 element-anim-1 scroll-animate" data-animate="active">
								<div class="image">
									<img src="frontend/assets/images/service_icon1.png" alt="" />
								</div>
								<div class="desc">
									<h5 class="name">Birthday Cakes</h5>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
							<div class="kf-services-item-2 element-anim-1 scroll-animate" data-animate="active">
								<div class="image">
									<img src="frontend/assets/images/service_icon2.png" alt="" />
								</div>
								<div class="desc">
									<h5 class="name">Bakery Items</h5>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
							<div class="kf-services-item-2 element-anim-1 scroll-animate" data-animate="active">
								<div class="image">
									<img src="frontend/assets/images/service_icon3.png" alt="" />
								</div>
								<div class="desc">
									<h5 class="name">Fast Food</h5>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
							<div class="kf-services-item-2 element-anim-1 scroll-animate" data-animate="active">
								<div class="image">
									<img src="frontend/assets/images/service_icon4.png" alt="" />
								</div>
								<div class="desc">
									<h5 class="name">Organic Juices</h5>
								</div>
							</div>
						</div>

					</div>

				</div>
			</section>

			<!-- Section CTA -->
			<section class="section kf-cta kf-parallax" style="background-image: url(frontend/assets/images/cta_bg.jpg);">
				<div class="container">

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">

							<div class="kf-titles">
								<div class="kf-subtitle element-anim-1 scroll-animate" data-animate="active">
									Need a Table On Coffee House
								</div>
								<h3 class="kf-title element-anim-1 scroll-animate" data-animate="active">
									Booking Table For Your & Family Members
								</h3>
							</div>

						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 align-self-center align-right">

							<a href="{{ route('reservation') }}" class="kf-btn element-anim-1 scroll-animate" data-animate="active">
								<span>booking table</span>
								<i class="fas fa-chevron-right"></i>
							</a>

						</div>
					</div>

				</div>
			</section>

		</div>
@endsection