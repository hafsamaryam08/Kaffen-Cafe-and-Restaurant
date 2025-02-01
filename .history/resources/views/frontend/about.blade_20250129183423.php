@extends('frontend.layouts.main')
@section('title', 'About')
@section('main-container')
		<!-- Wrapper -->
		<div class="wrapper">

			<!-- Section Started Inner -->
			<section class="section kf-started-inner">
				<div class="kf-parallax-bg js-parallax" style="background-image: url(frontend/assets/images/about_inner_bg.jpg);"></div>
				<div class="container">

					<h1 class="kf-h-title text-anim-1 scroll-animate" data-splitting="chars" data-animate="active">
						About Us
					</h1>

				</div>
			</section>

			<!-- Section About-2 -->
			<section class="section kf-choose kf-choose-2">
				<div class="container">

					<div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 align-self-center">

							<div class="kf-titles">
								<div class="kf-subtitle element-anim-1 scroll-animate" data-animate="active">
									About Kaffen
								</div>
								<h3 class="kf-title element-anim-1 scroll-animate" data-animate="active">
								Organic & Fresh Coffee <br>Provider Center
								</h3>
							</div>

							<div class="kf-text element-anim-1 scroll-animate" data-animate="active">
							<p>
								Experience the perfect blend of taste and ambiance at Kaffen. Indulge in exquisite flavors crafted with passion, making every visit a delightful memory.
							</p>

							</div>

							<div class="kf-choose-list">
								<ul>
									<li class="element-anim-1 scroll-animate" data-animate="active">
										<div class="icon">
											<img src="frontend/assets/images/choose_icon1.png" alt="" />
										</div>
										<div class="desc">
											<h5 class="name">Natural Coffee Beans</h5>
											<div class="subname">Sourced from the best farms, our beans bring a rich, authentic flavor to every cup.</div>
										</div>
									</li>
									<li class="element-anim-1 scroll-animate" data-animate="active">
										<div class="icon">
											<img src="frontend/assets/images/choose_icon2.png" alt="" />
										</div>
										<div class="desc">
											<h5 class="name">100% ISO Certification</h5>
											<div class="subname">ISO-certified processes ensure each cup meets the highest standards of taste and freshness.</div>
										</div>
									</li>
								</ul>
							</div>

							<a href="{{ route('menu') }}" class="kf-btn element-anim-1 scroll-animate" data-animate="active">
								<span>our menu</span>
								<i class="fas fa-chevron-right"></i>
							</a>

						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 offset-lg-1">

							<div class="kf-choose-image element-anim-1 scroll-animate" data-animate="active">
								<img src="frontend/assets/images/about_img2.jpg" alt="" />
							</div>

						</div>
					</div>

				</div>
			</section>

			<!-- Section Numbers-2 -->
			<section class="section kf-numbers-2 section-bg">
				<div class="container">

					<div class="kf-numbers-items-2 row">

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
							<div class="kf-numbers-item-2 element-anim-1 scroll-animate" data-animate="active">
								<div class="icon"><i class="las la-gem"></i></div>
								<div class="num">256+</div>
								<div class="desc">
									<h5 class="name">Premium Clients</h5>
									<div class="subname">Serving a diverse and valued group of clients</div>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
							<div class="kf-numbers-item-2 element-anim-1 scroll-animate" data-animate="active">
								<div class="icon"><i class="las la-user-tie"></i></div>
								<div class="num">36+</div>
								<div class="desc">
									<h5 class="name">Professional Chefs</h5>
									<div class="subname">Crafting exquisite dishes with passion and expertise</div>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
							<div class="kf-numbers-item-2 element-anim-1 scroll-animate" data-animate="active">
								<div class="icon"><i class="las la-trophy"></i></div>
								<div class="num">753+</div>
								<div class="desc">
									<h5 class="name">Winning Awards</h5>
									<div class="subname">Celebrated for excellence in culinary artistry</div>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
							<div class="kf-numbers-item-2 element-anim-1 scroll-animate" data-animate="active">
								<div class="icon"><i class="lar la-grin-stars"></i></div>
								<div class="num">100+</div>
								<div class="desc">
									<h5 class="name">5 Star Reviews</h5>
									<div class="subname">Loved by guests for our impeccable service</div>
								</div>
							</div>
						</div>

					</div>

				</div>
			</section>

			<!-- Section Video -->
			<!-- <section class="section kf-video">
				<div class="container">

					<div class="kf-video-item kf-image-hover element-anim-1 scroll-animate" style="background-image: url(frontend/assets/images/video_bg.jpg);" data-animate="active">
	          <iframe class="js-video-iframe" data-src="https://www.youtube.com/embed/Gu6z6kIukgg?showinfo=0&amp;rel=0&amp;autoplay=1"></iframe>
	          <div class="play"><i class="fas fa-play"></i></div>
					</div>

				</div>
			</section> -->

			<!-- Section Services-2 -->
			<section class="section kf-services">
				<div class="container">

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
									<h5 class="name">Fresh Food</h5>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
							<div class="kf-services-item-2 element-anim-1 scroll-animate" data-animate="active">
								<div class="image">
									<img src="frontend/assets/images/service_icon3.png" alt="" />
								</div>
								<div class="desc">
									<h5 class="name">Skills Chefs</h5>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
							<div class="kf-services-item-2 element-anim-1 scroll-animate" data-animate="active">
								<div class="image">
									<img src="frontend/assets/images/service_icon4.png" alt="" />
								</div>
								<div class="desc">
									<h5 class="name">Organic Juice</h5>
								</div>
							</div>
						</div>

					</div>

				</div>
			</section>

			<!-- Section Team -->
			<section class="section kf-team section-bg">
				<div class="container">

					<div class="kf-titles align-center">
						<div class="kf-subtitle element-anim-1 scroll-animate" data-animate="active">
							Experience Team Members
						</div>
						<h3 class="kf-title element-anim-1 scroll-animate" data-animate="active">
							Meet Our Professional Chefs
						</h3>
					</div>

					<div class="kf-team-items row">

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
							<div class="kf-team-item element-anim-1 scroll-animate" data-animate="active">
								<div class="desc">
									<h5 class="name">Hafsa Maryam</h5>
									<div class="subname">Senior Chef</div>
								</div>
								<div class="image kf-image-hover">
									<img src="frontend/assets/images/team1.jpg" alt="" />
									<div class="info">
										<div class="label">hafsa@gmail.com</div>
										<div class="label">+92 311 1234567</div>
									</div>
									<div class="social">
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-linkedin"></i></a>
										<a href="#"><i class="fab fa-youtube"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
							<div class="kf-team-item element-anim-1 scroll-animate" data-animate="active">
								<div class="desc">
									<h5 class="name">Rafey Bhatti</h5>
									<div class="subname">Executive Chef</div>
								</div>
								<div class="image kf-image-hover">
									<img src="frontend/assets/images/team2.jpg" alt="" />
									<div class="info">
									<div class="label">rafey@gmail.com</div>
									<div class="label">+92 311 7654321</div>
									</div>
									<div class="social">
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-linkedin"></i></a>
										<a href="#"><i class="fab fa-youtube"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
							<div class="kf-team-item element-anim-1 scroll-animate" data-animate="active">
								<div class="desc">
									<h5 class="name">Naeem-ur-Rehman</h5>
									<div class="subname">Head Chef</div>
								</div>
								<div class="image kf-image-hover">
									<img src="frontend/assets/images/team3.jpg" alt="" />
									<div class="info">
										<div class="label">naeem@gmail.com</div>
										<div class="label">+92 311 4567890</div>
									</div>
									<div class="social">
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-linkedin"></i></a>
										<a href="#"><i class="fab fa-youtube"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
							<div class="kf-team-item element-anim-1 scroll-animate" data-animate="active">
								<div class="desc">
									<h5 class="name">Mahnoor Mudassar</h5>
									<div class="subname">Deputy Chef</div>
								</div>
								<div class="image kf-image-hover">
									<img src="frontend/assets/images/team4.jpg" alt="" />
									<div class="info">
										<div class="label">mahnoor@gmail.com</div>
										<div class="label">+92 311 0987654</div>
									</div>
									<div class="social">
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-linkedin"></i></a>
										<a href="#"><i class="fab fa-youtube"></i></a>
									</div>
								</div>
							</div>
						</div>

					</div>

				</div>
			</section>

			<!-- Section Brands -->
			<section class="section kf-brands">
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
			</section>

			<!-- Section Testimonials Carousel -->
			<section class="section kf-testimonials kf-testimonials-2 section-bg" style="background-image: url(frontend/assets/images/testimonials_bg2.jpg);">
				<div class="container">

					<div class="kf-titles align-center">
						<div class="kf-subtitle element-anim-1 scroll-animate" data-animate="active">
							Customer Feedback
						</div>
						<h3 class="kf-title element-anim-1 scroll-animate" data-animate="active">
							What Our Clients Say
						</h3>
					</div>

					<div class="kf-testimonials-carousel">
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<div class="swiper-slide">

									<div class="slide-item element-anim-1 scroll-animate" data-animate="active">
										<div class="image">
											<img src="frontend/assets/images/rev1.jpg" alt="" />
										</div>
										<div class="desc">
											<div class="stars">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
											<div class="text">
												Exceptional quality and service. Truly an experience that goes beyond the ordinary
											</div>
											<h5 class="name">Mahnoor Mudassar <em>Professional Artist</em></h5>
										</div>
									</div>

								</div>
								<div class="swiper-slide">

									<div class="slide-item element-anim-1 scroll-animate" data-animate="active">
										<div class="image">
											<img src="frontend/assets/images/rev2.jpg" alt="" />
										</div>
										<div class="desc">
											<div class="stars">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
											<div class="text">
												Highly impressed with the ambiance and the attention to detail. A perfect place to unwind
											</div>
											<h5 class="name">Inshrah Maryam <em>Photographer</em></h5>
										</div>
									</div>

								</div>
								<div class="swiper-slide">

									<div class="slide-item element-anim-1 scroll-animate" data-animate="active">
										<div class="image">
											<img src="frontend/assets/images/rev3.jpg" alt="" />
										</div>
										<div class="desc">
											<div class="stars">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
											<div class="kf-text">
												Great coffee and even better service! The ambiance is ideal for a quick refresh during a busy day
											</div>
											<h5 class="name">Zunaisha Malik <em>Fashion Designer</em></h5>
										</div>
									</div>

								</div>
								<div class="swiper-slide">

									<div class="slide-item element-anim-1 scroll-animate" data-animate="active">
										<div class="image">
											<img src="frontend/assets/images/rev1.jpg" alt="" />
										</div>
										<div class="desc">
											<div class="stars">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
											<div class="kf-text">
												An exceptional place to relax and meet clients. The staff and service truly make it a unique experience
											</div>
											<h5 class="name">Komal Asawar <em>Data Scientist</em></h5>
										</div>
											</div>

								</div>
								<div class="swiper-slide">

									<div class="slide-item element-anim-1 scroll-animate" data-animate="active">
										<div class="image">
											<img src="frontend/assets/images/rev2.jpg" alt="" />
										</div>
										<div class="desc">
											<div class="stars">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
											<div class="kf-text">
												A truly satisfying experience! Exceptional quality and a peaceful ambiance, perfect for unwinding
											</div>
											<h5 class="name">Khaqan Nasir <em>Web Developer</em></h5>
										</div>
									</div>

								</div>
								<div class="swiper-slide">

									<div class="slide-item element-anim-1 scroll-animate" data-animate="active">
										<div class="image">
											<img src="frontend/assets/images/rev3.jpg" alt="" />
										</div>
										<div class="desc">
											<div class="stars">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
											<div class="kf-text">
												Fantastic coffee and delightful service! The cozy atmosphere keeps me coming back every time
											</div>
											<h5 class="name">Abdullah Rafiq <em>Graphic Designer</em></h5>
										</div>
									</div>

								</div>
							</div>

							<div class="swiper-pagination"></div>

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
									Booking Table For You & Your Family
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