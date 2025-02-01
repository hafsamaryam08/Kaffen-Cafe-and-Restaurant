@extends('frontend.layouts.main')
@section('title', 'Menu-Restaurant')
@section('main-container')
		<!-- Wrapper -->
		<div class="wrapper">

			<!-- Section Started Inner -->
			<section class="section kf-started-inner">
				<div class="kf-parallax-bg js-parallax" style="background-image: url(frontend/assets/images/menu_rest_inner_bg.jpg);"></div>
				<div class="container">

					<h1 class="kf-h-title text-anim-1 scroll-animate" data-splitting="chars" data-animate="active">
						Restaurant Menu
					</h1>

				</div>
			</section>

			<!-- Section Menu-2 -->
			<section class="section kf-menu">
				<div class="container">

					<div class="kf-titles align-center">
						<div class="kf-subtitle element-anim-1 scroll-animate" data-animate="active">
							Choose Best of
						</div>
						<h3 class="kf-title element-anim-1 scroll-animate" data-animate="active">
							Kaffen Lunch Menu
						</h3>
					</div>

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

							<div class="kf-menu-items-2">
								<div class="kf-menu-item-2 element-anim-1 scroll-animate" data-animate="active">
									<div class="image kf-image-hover">
										<a href="frontend/assets/images/menu_r1.jpg" class="has-popup-image"><img src="frontend/assets/images/menu_r1.jpg" alt="" /></a>
									</div>
									<div class="desc">
										<h5 class="name">Chicken Tenders</h5>
										<div class="price"><span>PKR 475</span></div>
									</div>
								</div>
								<div class="kf-menu-item-2 element-anim-1 scroll-animate" data-animate="active">
									<div class="image kf-image-hover">
										<a href="frontend/assets/images/menu_r2.jpg" class="has-popup-image"><img src="frontend/assets/images/menu_r2.jpg" alt="" /></a>
									</div>
									<div class="desc">
										<h5 class="name">Grilled Sandwich</h5>
										<div class="price"><span>PKR 575</span></div>
									</div>
								</div>
								<div class="kf-menu-item-2 element-anim-1 scroll-animate" data-animate="active">
									<div class="image kf-image-hover">
										<a href="frontend/assets/images/menu_r3.jpg" class="has-popup-image"><img src="frontend/assets/images/menu_r3.jpg" alt="" /></a>
									</div>
									<div class="desc">
										<h5 class="name">Cheese Burger</h5>
										<div class="price"><span>PKR 675</span></div>
									</div>
								</div>
								<div class="kf-menu-item-2 element-anim-1 scroll-animate" data-animate="active">
									<div class="image kf-image-hover">
										<a href="frontend/assets/images/menu_r4.jpg" class="has-popup-image"><img src="frontend/assets/images/menu_r4.jpg" alt="" /></a>
									</div>
									<div class="desc">
										<h5 class="name">Chowmein</h5>
										<div class="price"><span>PKR 375</span></div>
									</div>
								</div>
							</div>

							<div class="kf-menu-image-2 left element-anim-1 scroll-animate" data-animate="active" style="background-image: url(frontend/assets/images/menu_r_l1.jpg);"></div>

						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

							<div class="kf-menu-image-2 right element-anim-1 scroll-animate" data-animate="active" style="background-image: url(frontend/assets/images/menu_r_l2.jpg);"></div>

							<div class="kf-menu-items-2">
								<div class="kf-menu-item-2 element-anim-1 scroll-animate" data-animate="active">
									<div class="image kf-image-hover">
										<a href="frontend/assets/images/menu_r5.jpg" class="has-popup-image"><img src="frontend/assets/images/menu_r5.jpg" alt="" /></a>
									</div>
									<div class="desc">
										<h5 class="name">Lasagna</h5>
										<div class="price"><span>PKR 875</span></div>
									</div>
								</div>
								<div class="kf-menu-item-2 element-anim-1 scroll-animate" data-animate="active">
									<div class="image kf-image-hover">
										<a href="frontend/assets/images/menu_r6.jpg" class="has-popup-image"><img src="frontend/assets/images/menu_r6.jpg" alt="" /></a>
									</div>
									<div class="desc">
										<h5 class="name">Seekh Kebabs</h5>
										<div class="price"><span>PKR 275</span></div>
									</div>
								</div>
								<div class="kf-menu-item-2 element-anim-1 scroll-animate" data-animate="active">
									<div class="image kf-image-hover">
										<a href="frontend/assets/images/menu_r7.jpg" class="has-popup-image"><img src="frontend/assets/images/menu_r7.jpg" alt="" /></a>
									</div>
									<div class="desc">
										<h5 class="name">Paratha Roll</h5>
										<div class="price"><span>PKR 775</span></div>
									</div>
								</div>
								<div class="kf-menu-item-2 element-anim-1 scroll-animate" data-animate="active">
									<div class="image kf-image-hover">
										<a href="frontend/assets/images/menu_r8.jpg" class="has-popup-image"><img src="frontend/assets/images/menu_r8.jpg" alt="" /></a>
									</div>
									<div class="desc">
										<h5 class="name">Steak</h5>
										<div class="price"><span>PKR 975</span></div>
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

			<!-- Section Menu-2 -->
			<section class="section kf-menu">
				<div class="container">

					<div class="kf-titles align-center">
						<div class="kf-subtitle element-anim-1 scroll-animate" data-animate="active">
							Choose Best of
						</div>
						<h3 class="kf-title element-anim-1 scroll-animate" data-animate="active">
							Kaffen Dinner Menu
						</h3>
					</div>

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

							<div class="kf-menu-items-2">
								<div class="kf-menu-item-2 element-anim-1 scroll-animate" data-animate="active">
									<div class="image kf-image-hover">
										<a href="frontend/assets/images/menu_r1.jpg" class="has-popup-image"><img src="frontend/assets/images/menu_r1.jpg" alt="" /></a>
									</div>
									<div class="desc">
										<h5 class="name">Chicken Makhni</h5>
										<div class="price"><span>PKR 625</span></div>
									</div>
								</div>
								<div class="kf-menu-item-2 element-anim-1 scroll-animate" data-animate="active">
									<div class="image kf-image-hover">
										<a href="frontend/assets/images/menu_r2.jpg" class="has-popup-image"><img src="frontend/assets/images/menu_r2.jpg" alt="" /></a>
									</div>
									<div class="desc">
										<h5 class="name">Malai Boti</h5>
										<div class="price"><span>PKR 525</span></div>
									</div>
								</div>
								<div class="kf-menu-item-2 element-anim-1 scroll-animate" data-animate="active">
									<div class="image kf-image-hover">
										<a href="frontend/assets/images/menu_r3.jpg" class="has-popup-image"><img src="frontend/assets/images/menu_r3.jpg" alt="" /></a>
									</div>
									<div class="desc">
										<h5 class="name">Garlic Naan</h5>
										<div class="price"><span>PKR 125</span></div>
									</div>
								</div>
								<div class="kf-menu-item-2 element-anim-1 scroll-animate" data-animate="active">
									<div class="image kf-image-hover">
										<a href="frontend/assets/images/menu_r4.jpg" class="has-popup-image"><img src="frontend/assets/images/menu_r4.jpg" alt="" /></a>
									</div>
									<div class="desc">
										<h5 class="name">Nihari</h5>
										<div class="price"><span>PKR 425</span></div>
									</div>
								</div>
							</div>

							<div class="kf-menu-image-2 left element-anim-1 scroll-animate" data-animate="active" style="background-image: url(frontend/assets/images/menu_r_l3.jpg);"></div>

						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

							<div class="kf-menu-image-2 right element-anim-1 scroll-animate" data-animate="active" style="background-image: url(frontend/assets/images/menu_r_l4.jpg);"></div>

							<div class="kf-menu-items-2">
								<div class="kf-menu-item-2 element-anim-1 scroll-animate" data-animate="active">
									<div class="image kf-image-hover">
										<a href="frontend/assets/images/menu_r5.jpg" class="has-popup-image"><img src="frontend/assets/images/menu_r5.jpg" alt="" /></a>
									</div>
									<div class="desc">
										<h5 class="name">Tortilla wrap</h5>
										<div class="price"><span>PKR 325</span></div>
									</div>
								</div>
								<div class="kf-menu-item-2 element-anim-1 scroll-animate" data-animate="active">
									<div class="image kf-image-hover">
										<a href="frontend/assets/images/menu_r6.jpg" class="has-popup-image"><img src="frontend/assets/images/menu_r6.jpg" alt="" /></a>
									</div>
									<div class="desc">
										<h5 class="name">Chicken Broast</h5>
										<div class="price"><span>PKR 825</span></div>
									</div>
								</div>
								<div class="kf-menu-item-2 element-anim-1 scroll-animate" data-animate="active">
									<div class="image kf-image-hover">
										<a href="frontend/assets/images/menu_r7.jpg" class="has-popup-image"><img src="frontend/assets/images/menu_r7.jpg" alt="" /></a>
									</div>
									<div class="desc">
										<h5 class="name">Biryani</h5>
										<div class="price"><span>PKR 225</span></div>
									</div>
								</div>
								<div class="kf-menu-item-2 element-anim-1 scroll-animate" data-animate="active">
									<div class="image kf-image-hover">
										<a href="frontend/assets/images/menu_r8.jpg" class="has-popup-image"><img src="frontend/assets/images/menu_r8.jpg" alt="" /></a>
									</div>
									<div class="desc">
										<h5 class="name">Chicken Corn Soup</h5>
										<div class="price"><span>PKR 125</span></div>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>
			</section>

			<!-- Section Insta Carousel -->
			<div class="section kf-insta-carousel element-anim-1 scroll-animate" data-animate="active">
				<div class="container">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<div class="swiper-slide">

								<div class="slide-item">
									<div class="image kf-image-hover">
										<a href="instagram.html" target="blank">
											<img src="frontend/assets/images/ins_gal1.jpg" alt="" />
											<i class="fab fa-instagram"></i>
										</a>
									</div>
								</div>

							</div>
							<div class="swiper-slide">

								<div class="slide-item">
									<div class="image kf-image-hover">
										<a href="instagram.html" target="blank">
											<img src="frontend/assets/images/ins_gal2.jpg" alt="" />
											<i class="fab fa-instagram"></i>
										</a>
									</div>
								</div>

							</div>
							<div class="swiper-slide">

								<div class="slide-item">
									<div class="image kf-image-hover">
										<a href="instagram.html" target="blank">
											<img src="frontend/assets/images/ins_gal3.jpg" alt="" />
											<i class="fab fa-instagram"></i>
										</a>
									</div>
								</div>

							</div>
							<div class="swiper-slide">

								<div class="slide-item">
									<div class="image kf-image-hover">
										<a href="instagram.html" target="blank">
											<img src="frontend/assets/images/ins_gal4.jpg" alt="" />
											<i class="fab fa-instagram"></i>
										</a>
									</div>
								</div>

							</div>
							<div class="swiper-slide">

								<div class="slide-item">
									<div class="image kf-image-hover">
										<a href="instagram.html" target="blank">
											<img src="frontend/assets/images/ins_gal5.jpg" alt="" />
											<i class="fab fa-instagram"></i>
										</a>
									</div>
								</div>

							</div>
							<div class="swiper-slide">

								<div class="slide-item">
									<div class="image kf-image-hover">
										<a href="instagram.html" target="blank">
											<img src="frontend/assets/images/ins_gal6.jpg" alt="" />
											<i class="fab fa-instagram"></i>
										</a>
									</div>
								</div>

							</div>
							<div class="swiper-slide">

								<div class="slide-item">
									<div class="image kf-image-hover">
										<a href="instagram.html" target="blank">
											<img src="frontend/assets/images/ins_gal1.jpg" alt="" />
											<i class="fab fa-instagram"></i>
										</a>
									</div>
								</div>

							</div>
							<div class="swiper-slide">

								<div class="slide-item">
									<div class="image kf-image-hover">
										<a href="instagram.html" target="blank">
											<img src="frontend/assets/images/ins_gal2.jpg" alt="" />
											<i class="fab fa-instagram"></i>
										</a>
									</div>
								</div>

							</div>
							<div class="swiper-slide">

								<div class="slide-item">
									<div class="image kf-image-hover">
										<a href="instagram.html" target="blank">
											<img src="frontend/assets/images/ins_gal3.jpg" alt="" />
											<i class="fab fa-instagram"></i>
										</a>
									</div>
								</div>

							</div>
							<div class="swiper-slide">

								<div class="slide-item">
									<div class="image kf-image-hover">
										<a href="instagram.html" target="blank">
											<img src="frontend/assets/images/ins_gal4.jpg" alt="" />
											<i class="fab fa-instagram"></i>
										</a>
									</div>
								</div>

							</div>
							<div class="swiper-slide">

								<div class="slide-item">
									<div class="image kf-image-hover">
										<a href="instagram.html" target="blank">
											<img src="frontend/assets/images/ins_gal5.jpg" alt="" />
											<i class="fab fa-instagram"></i>
										</a>
									</div>
								</div>

							</div>
							<div class="swiper-slide">

								<div class="slide-item">
									<div class="image kf-image-hover">
										<a href="instagram.html" target="blank">
											<img src="frontend/assets/images/ins_gal6.jpg" alt="" />
											<i class="fab fa-instagram"></i>
										</a>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
@endsection