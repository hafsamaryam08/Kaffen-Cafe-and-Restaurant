@extends('frontend.layouts.main')
@section('title', 'Gallery')
@section('main-container')
		<!-- Wrapper -->
		<div class="wrapper">

			<!-- Section Started Inner -->
			<section class="section kf-started-inner">
				<div class="kf-parallax-bg js-parallax" style="background-image: url(frontend/assets/images/gallery_inner_bg.jpg);"></div>
				<div class="container">

					<h1 class="kf-h-title text-anim-1 scroll-animate" data-splitting="chars" data-animate="active">
						Gallery
					</h1>

				</div>
			</section>

			<!-- Section Gallery -->
			<section class="section kf-gallery">
				<div class="container">

					<div class="kf-titles align-center">
						<div class="kf-subtitle element-anim-1 scroll-animate" data-animate="active">
							Our Photo Gallery
						</div>
						<h3 class="kf-title element-anim-1 scroll-animate" data-animate="active">
							Look At Our Gallery
						</h3>
					</div>

					<div class="kf-filter kf-filter-gal element-anim-1 scroll-animate" data-animate="active">
						<a href="#" data-href=".all" class="active">View all</a>
						<a href="#" data-href=".fast-food">fast food</a>
						<a href="#" data-href=".hot-coffee">Hot coffee</a>
						<a href="#" data-href=".dinner-menu">Dinner menu</a>
						<a href="#" data-href=".special-pizza">Special pizza</a>
					</div>

					<div class="kf-gallery-items row">

						<div class="kf-gallery-col col-xs-12 col-sm-12 col-md-6 col-lg-4 all fast-food">
							<div class="kf-gallery-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image kf-image-hover">
									<a href="frontend/assets/images/ins_gal1.jpg" class="has-popup-gallery"><img src="frontend/assets/images/ins_gal1.jpg" alt="" /></a>
								</div>
								<div class="desc">
									<div class="name">
										<div class="value">italian burger</div>
									</div>
									<div class="subname">
										<div class="value">fast food</div>
									</div>
								</div>
							</div>
						</div>

						<div class="kf-gallery-col col-xs-12 col-sm-12 col-md-6 col-lg-4 all dinner-menu">
							<div class="kf-gallery-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image kf-image-hover">
									<a href="frontend/assets/images/ins_gal2.jpg" class="has-popup-gallery"><img src="frontend/assets/images/ins_gal2.jpg" alt="" /></a>
								</div>
								<div class="desc">
									<div class="name">
										<div class="value">fettuccine pasta</div>
									</div>
									<div class="subname">
										<div class="value">dinner menu</div>
									</div>
								</div>
							</div>
						</div>

						<div class="kf-gallery-col col-xs-12 col-sm-12 col-md-6 col-lg-4 all fast-food">
							<div class="kf-gallery-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image kf-image-hover">
									<a href="frontend/assets/images/ins_gal3.jpg" class="has-popup-gallery"><img src="frontend/assets/images/ins_gal3.jpg" alt="" /></a>
								</div>
								<div class="desc">
									<div class="name">
										<div class="value">Chicken burger</div>
									</div>
									<div class="subname">
										<div class="value">fast food</div>
									</div>
								</div>
							</div>
						</div>

						<div class="kf-gallery-col col-xs-12 col-sm-12 col-md-6 col-lg-4 all special-pizza">
							<div class="kf-gallery-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image kf-image-hover">
									<a href="frontend/assets/images/ins_gal4.jpg" class="has-popup-gallery"><img src="frontend/assets/images/ins_gal4.jpg" alt="" /></a>
								</div>
								<div class="desc">
									<div class="name">
										<div class="value">italian pizza</div>
									</div>
									<div class="subname">
										<div class="value">special pizza</div>
									</div>
								</div>
							</div>
						</div>

						<div class="kf-gallery-col col-xs-12 col-sm-12 col-md-6 col-lg-4 all hot-coffee">
							<div class="kf-gallery-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image kf-image-hover">
									<a href="frontend/assets/images/ins_gal5.jpg" class="has-popup-gallery"><img src="frontend/assets/images/ins_gal5.jpg" alt="" /></a>
								</div>
								<div class="desc">
									<div class="name">
										<div class="value">cappuccino</div>
									</div>
									<div class="subname">
										<div class="value">hot coffee</div>
									</div>
								</div>
							</div>
						</div>

						<div class="kf-gallery-col col-xs-12 col-sm-12 col-md-6 col-lg-4 all fast-food">
							<div class="kf-gallery-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image kf-image-hover">
									<a href="frontend/assets/images/ins_gal6.jpg" class="has-popup-gallery"><img src="frontend/assets/images/ins_gal6.jpg" alt="" /></a>
								</div>
								<div class="desc">
									<div class="name">
										<div class="value">Chicken nuggets</div>
									</div>
									<div class="subname">
										<div class="value">fast food</div>
									</div>
								</div>
							</div>
						</div>

						<div class="kf-gallery-col col-xs-12 col-sm-12 col-md-6 col-lg-4 all hot-coffee">
							<div class="kf-gallery-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image kf-image-hover">
									<a href="frontend/assets/images/grid_gal1.jpg" class="has-popup-gallery"><img src="frontend/assets/images/grid_gal1.jpg" alt="" /></a>
								</div>
								<div class="desc">
									<div class="name">
										<div class="value">Black coffee</div>
									</div>
									<div class="subname">
										<div class="value">hot coffee</div>
									</div>
								</div>
							</div>
						</div>

						<div class="kf-gallery-col col-xs-12 col-sm-12 col-md-6 col-lg-4 all dinner-menu">
							<div class="kf-gallery-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image kf-image-hover">
									<a href="frontend/assets/images/menu_r4.jpg" class="has-popup-gallery"><img src="frontend/assets/images/menu_r4.jpg" alt="" /></a>
								</div>
								<div class="desc">
									<div class="name">
										<div class="value">Spaghetti</div>
									</div>
									<div class="subname">
										<div class="value">dinner menu</div>
									</div>
								</div>
							</div>
						</div>

						<div class="kf-gallery-col col-xs-12 col-sm-12 col-md-6 col-lg-4 all dinner-menu">
							<div class="kf-gallery-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image kf-image-hover">
									<a href="frontend/assets/images/menu_r6.jpg" class="has-popup-gallery"><img src="frontend/assets/images/menu_r6.jpg" alt="" /></a>
								</div>
								<div class="desc">
									<div class="name">
										<div class="value">Sea Fish</div>
									</div>
									<div class="subname">
										<div class="value">dinner menu</div>
									</div>
								</div>
							</div>
						</div>

					</div>

				</div>
			</section>

			<!-- Section CTA -->
			<section class="section kf-cta kf-parallax" style="background-image: url(frontend/assets/images/cta_bg3.jpg);">
				<div class="container">

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">

							<div class="kf-titles">
								<div class="kf-subtitle element-anim-1 scroll-animate" data-animate="active">
									Need a Table On Coffee House
								</div>
								<h3 class="kf-title element-anim-1 scroll-animate" data-animate="active">
									Booking Table For You & Your Family Members
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

			<!-- Section Brands -->
			<div class="section kf-brands">
				<div class="container">

					<div class="kf-brands-items row">

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-2">
							<div class="kf-brands-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image">
									<img src="frontend/assets/images/brand1.png" alt="" />
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-2">
							<div class="kf-brands-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image">
									<img src="frontend/assets/images/brand2.png" alt="" />
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-2">
							<div class="kf-brands-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image">
									<img src="frontend/assets/images/brand3.png" alt="" />
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-2">
							<div class="kf-brands-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image">
									<img src="frontend/assets/images/brand4.png" alt="" />
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-2">
							<div class="kf-brands-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image">
									<img src="frontend/assets/images/brand5.png" alt="" />
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-2">
							<div class="kf-brands-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image">
									<img src="frontend/assets/images/brand6.png" alt="" />
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>

		</div>
@endsection