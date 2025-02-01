@extends('layouts.main')
@section('title', 'Home')
@section('main-container')
<!-- Wrapper -->
<div class="wrapper">

	<!-- Section Started Slider -->
	<section class="section kf-started-slider">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide">

					<div class="kf-started-item">
						<div class="slide js-parallax" style="background-image: url('{{ asset('frontend/assets/images/started_img_n6.jpg') }}');"></div>
						<div class="container">
							<div class="description align-left element-anim-1">
								<div class="subtitles">
									Welcome to the Kaffen
								</div>
								<h2 class="name text-anim-1" data-splitting="chars">
									Premium Coffee <br>Every Time
								</h2>
								<div class="kf-bts">
									<a href="menu-restaurant.html" class="kf-btn">
										<span>explore more</span>
										<i class="fas fa-chevron-right"></i>
									</a>
									<a href="reservation.html" class="kf-btn dark-btn">
										<span>get delivery</span>
										<i class="fas fa-chevron-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="swiper-slide">

					<div class="kf-started-item">
						<div class="slide js-parallax" style="background-image: url('{{ asset('frontend/assets/images/started_img_n5.jpg') }}');"></div>
						<div class="container">
							<div class="description align-left element-anim-1">
								<div class="subtitles">
									Welcome to the Kaffen
								</div>
								<h2 class="name text-anim-1" data-splitting="chars">
									Sip the <br>Finest Brews
								</h2>
								<div class="kf-bts">
									<a href="menu-coffee.html" class="kf-btn">
										<span>explore more</span>
										<i class="fas fa-chevron-right"></i>
									</a>
									<a href="reservation.html" class="kf-btn dark-btn">
										<span>get delivery</span>
										<i class="fas fa-chevron-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="swiper-slide">

					<div class="kf-started-item">
						<div class="slide js-parallax" style="background-image: url('{{ asset('frontend/assets/images/started_img_n3.jpg') }}');"></div>
						<div class="container">
							<div class="description align-left">
								<div class="subtitles">
									Welcome to the Kaffen
								</div>
								<h2 class="name text-anim-1" data-splitting="chars">
									Where Coffee <br>Meets Perfection
								</h2>
								<div class="kf-bts">
									<a href="menu-coffee.html" class="kf-btn">
										<span>explore more</span>
										<i class="fas fa-chevron-right"></i>
									</a>
									<a href="reservation.html" class="kf-btn dark-btn">
										<span>get delivery</span>
										<i class="fas fa-chevron-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>

		</div>
	</section>

	<!-- Section About -->
	<section class="section kf-about section-bg">
		<div class="container">

			<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">

					<div class="kf-titles">
						<div class="kf-subtitle element-anim-1 scroll-animate" data-animate="active">
							About Us
						</div>
						<h3 class="kf-title element-anim-1 scroll-animate" data-animate="active">
							Organic & Fresh Coffee <br>Provider Center
						</h3>
					</div>

					<div class="kf-text element-anim-1 scroll-animate" data-animate="active">
						<p>
							Welcome to Kaffen Cafe & Restaurant, where we believe in the art of coffee
							and culinary excellence. Nestled in the heart of the city, we source only 
							the finest organic beans and ingredients, carefully selected to ensure a 
							rich and authentic experience in every sip and bite. Our team of passionate 
							baristas and chefs are dedicated to crafting each dish and drink with love 
							and care, bringing a taste of nature to your table.
						</p>
					</div>

					<div class="kf-about-quote element-anim-1 scroll-animate" data-animate="active">
						<img src="{{ asset('frontend/assets/images/quote_img.png') }}" alt="" />
						<div>Indulge in flavors that nourish the soul and inspire the senses.</div>
					</div>

				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">

					<div class="kf-about-image element-anim-1 scroll-animate" data-animate="active">
						<img src="{{ asset('frontend/assets/images/about_img.png') }}" alt="" />
					</div>

				</div>
			</div>

		</div>
	</section>

	<!-- Section Services -->
	<section class="section kf-services section-bg">
		<div class="container">

			<div class="kf-services-items row">

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
					<div class="kf-services-item element-anim-1 scroll-animate" data-animate="active">
						<div class="image kf-image-hover">
							<a href="menu-restaurant.html"><img src="{{ asset('frontend/assets/images/service1.jpg') }}" alt="" /></a>
						</div>
						<div class="desc">
							<div class="icon"><i class="las la-utensils"></i></div>
							<h5 class="name">Restaurant Menu</h5>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
					<div class="kf-services-item element-anim-1 scroll-animate" data-animate="active">
						<div class="image kf-image-hover">
							<a href="menu-coffee.html"><img src="{{ asset('frontend/assets/images/service2.jpg') }}" alt="" /></a>
						</div>
						<div class="desc">
							<div class="icon"><i class="las la-coffee"></i></div>
							<h5 class="name">Coffee Menu</h5>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
					<div class="kf-services-item element-anim-1 scroll-animate" data-animate="active">
						<div class="image kf-image-hover">
							<a href="services.html"><img src="{{ asset('frontend/assets/images/service3.jpg') }}" alt="" /></a>
						</div>
						<div class="desc">
							<div class="icon"><i class="las la-glass-cheers"></i></div>
							<h5 class="name">Food Services</h5>
						</div>
					</div>
				</div>

			</div>

		</div>
	</section>

	<!-- Section Menu -->
	<section class="section kf-menu kf-parallax" style="background-image: url({{ asset('frontend/assets/images/category_bg.jpg') }});">
		<div class="container">

			<div class="kf-titles align-center">
				<div class="kf-subtitle element-anim-1 scroll-animate" data-animate="active">
					Choose Best Coffee
				</div>
				<h3 class="kf-title element-anim-1 scroll-animate" data-animate="active">
					Kaffen Popular Coffee Menu
				</h3>
			</div>

			<div class="kf-menu-items" style="background-image: url({{ asset('frontend/assets/images/menu_logo.png') }});">
				<div class="row">

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
						<div class="kf-menu-item element-anim-1 scroll-animate" data-animate="active">
							<div class="image kf-image-hover">
								<a href="{{ asset('frontend/assets/images/menu1.jpg') }}" class="has-popup-image"><img src="frontend/assets/images/menu1.jpg" alt="" /></a>
							</div>
							<div class="desc">
								<h5 class="name">Americano Coffee</h5>
								<div class="subname">2/3 espresso, 1/3 streamed milk</div>
								<div class="price">PKR 775</div>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
						<div class="kf-menu-item element-anim-1 scroll-animate" data-animate="active">
							<div class="image kf-image-hover">
								<a href="{{ asset('frontend/assets/images/menu2.jpg') }}" class="has-popup-image"><img src="frontend/assets/images/menu2.jpg" alt="" /></a>
							</div>
							<div class="desc">
								<h5 class="name">Espresso Coffee</h5>
								<div class="subname">2/3 espresso, 1/3 streamed milk</div>
								<div class="price">PKR 725</div>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
						<div class="kf-menu-item element-anim-1 scroll-animate" data-animate="active">
							<div class="image kf-image-hover">
								<a href="{{ asset('frontend/assets/images/menu3.jpg') }}" class="has-popup-image"><img src="frontend/assets/images/menu3.jpg" alt="" /></a>
							</div>
							<div class="desc">
								<h5 class="name">Barista Pouring Syrup</h5>
								<div class="subname">2/3 espresso, 1/3 streamed milk</div>
								<div class="price">PKR 525</div>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
						<div class="kf-menu-item element-anim-1 scroll-animate" data-animate="active">
							<div class="image kf-image-hover">
								<a href="{{ asset('frontend/assets/images/menu4.jpg') }}" class="has-popup-image"><img src="frontend/assets/images/menu4.jpg" alt="" /></a>
							</div>
							<div class="desc">
								<h5 class="name">Cold - Coffee</h5>
								<div class="subname">2/3 espresso, 1/3 streamed milk</div>
								<div class="price">PKR 575</div>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
						<div class="kf-menu-item element-anim-1 scroll-animate" data-animate="active">
							<div class="image kf-image-hover">
								<a href="{{ asset('frontend/assets/images/menu5.jpg') }}" class="has-popup-image"><img src="frontend/assets/images/menu5.jpg" alt="" /></a>
							</div>
							<div class="desc">
								<h5 class="name">Cappuccino Arabica</h5>
								<div class="subname">2/3 espresso, 1/3 streamed milk</div>
								<div class="price">PKR 455</div>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
						<div class="kf-menu-item element-anim-1 scroll-animate" data-animate="active">
							<div class="image kf-image-hover">
								<a href="{{ asset('frontend/assets/images/menu6.jpg') }}" class="has-popup-image"><img src="frontend/assets/images/menu6.jpg" alt="" /></a>
							</div>
							<div class="desc">
								<h5 class="name">Milk Cream Coffee</h5>
								<div class="subname">2/3 espresso, 1/3 streamed milk</div>
								<div class="price">PKR 525</div>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
	</section>

	<!-- Section Choose -->
	<section class="section kf-choose section-bg">
		<div class="container">
			<div class="kf-parallax-icon pi-1" data-jarallax-element="-60">
				<div class="p-icon" style="background-image: url({{ asset('frontend/assets/images/parallax_icon1.png') }});"></div>
			</div>
			<div class="kf-parallax-icon pi-2" data-jarallax-element="-80">
				<div class="p-icon" style="background-image: url({{ asset('frontend/assets/images/parallax_icon2.png') }});"></div>
        	</div>
			</div>
			<div class="kf-parallax-icon pi-3" data-jarallax-element="-40">
				<div class="p-icon" style="background-image: url({{ asset('frontend/assets/images/parallax_icon3.png') }});"></div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

					<div class="kf-choose-image element-anim-1 scroll-animate" data-animate="active">
						<img src="{{ asset('frontend/assets/images/choose_img.jpg') }}" alt="" />
					</div>

				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 offset-lg-1 align-self-center">

					<div class="kf-titles">
						<div class="kf-subtitle element-anim-1 scroll-animate" data-animate="active">
							Why Choose Us
						</div>
						<h3 class="kf-title element-anim-1 scroll-animate" data-animate="active">
							Newly Established Exceptionally Crafted Coffee
						</h3>
					</div>

					<div class="kf-text element-anim-1 scroll-animate" data-animate="active">
						<p>
							Kaffen Cafe & Restaurant offers an extraordinary coffee experience, 
							bringing together tradition and innovation to satisfy coffee lovers of all kinds.
						</p>
					</div>

					<div class="kf-choose-list">
						<ul>
							<li class="element-anim-1 scroll-animate" data-animate="active">
								<div class="icon">
									<img src="{{ asset('frontend/assets/images/choose_icon1.png') }}" alt="" />
								</div>
								<div class="desc">
									<h5 class="name">Natural Coffee Beans</h5>
									<div class="subname">Sourced from the best farms, our beans bring a rich, authentic flavor to every cup.</div>
								</div>
							</li>
							<li class="element-anim-1 scroll-animate" data-animate="active">
								<div class="icon">
									<img src="{{ asset('frontend/assets/images/choose_icon2.png') }}" alt="" />
								</div>
								<div class="desc">
									<h5 class="name">100% ISO Certification</h5>
									<div class="subname">ISO-certified processes ensure each cup meets the highest standards of taste and freshness.</div>
								</div>
							</li>
						</ul>
					</div>

					<a href="about.html" class="kf-btn element-anim-1 scroll-animate" data-animate="active">
						<span>explore more</span>
						<i class="fas fa-chevron-right"></i>
					</a>

				</div>
			</div>

		</div>
	</section>

	<!-- Section Grid Carousel -->
	<section class="section kf-grid-carousel">
		<div class="container">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">

						<div class="slide-item element-anim-1 scroll-animate" data-animate="active">
							<div class="image kf-image-hover">
								<a href="frontend/assets/images/grid_gal2.jpg" class="has-popup-image"><img src="frontend/assets/images/grid_gal2.jpg" alt="" /></a>
							</div>
							<div class="desc">
								<h5 class="name">Latte</h5>
							</div>
						</div>

					</div>
					<div class="swiper-slide">

						<div class="slide-item element-anim-1 scroll-animate" data-animate="active">
							<div class="image kf-image-hover">
								<a href="frontend/assets/images/grid_gal3.jpg" class="has-popup-image"><img src="frontend/assets/images/grid_gal3.jpg" alt="" /></a>
							</div>
							<div class="desc">
								<h5 class="name">Cappuccino</h5>
							</div>
						</div>

					</div>
					<div class="swiper-slide">

						<div class="slide-item element-anim-1 scroll-animate" data-animate="active">
							<div class="image kf-image-hover">
								<a href="frontend/assets/images/grid_gal4.jpg" class="has-popup-image"><img src="frontend/assets/images/grid_gal4.jpg" alt="" /></a>
							</div>
							<div class="desc">
								<h5 class="name">Iced Coffee</h5>
							</div>
						</div>

					</div>
					<div class="swiper-slide">

						<div class="slide-item element-anim-1 scroll-animate" data-animate="active">
							<div class="image kf-image-hover">
								<a href="frontend/assets/images/grid_gal5.jpg" class="has-popup-image"><img src="frontend/assets/images/grid_gal5.jpg" alt="" /></a>
							</div>
							<div class="desc">
								<h5 class="name">Espresso</h5>
							</div>
						</div>

					</div>
					<div class="swiper-slide">

						<div class="slide-item element-anim-1 scroll-animate" data-animate="active">
							<div class="image kf-image-hover">
								<a href="frontend/assets/images/grid_gal1.jpg" class="has-popup-image"><img src="frontend/assets/images/grid_gal1.jpg" alt="" /></a>
							</div>
							<div class="desc">
								<h5 class="name">Black Coffee</h5>
							</div>
						</div>

					</div>
					<div class="swiper-slide">

						<div class="slide-item element-anim-1 scroll-animate" data-animate="active">
							<div class="image kf-image-hover">
								<a href="frontend/assets/images/grid_gal2.jpg" class="has-popup-image"><img src="frontend/assets/images/grid_gal2.jpg" alt="" /></a>
							</div>
							<div class="desc">
								<h5 class="name">Latte</h5>
							</div>
						</div>

					</div>
					<div class="swiper-slide">

						<div class="slide-item element-anim-1 scroll-animate" data-animate="active">
							<div class="image kf-image-hover">
								<a href="frontend/assets/images/grid_gal3.jpg" class="has-popup-image"><img src="frontend/assets/images/grid_gal3.jpg" alt="" /></a>
							</div>
							<div class="desc">
								<h5 class="name">Cappuccino</h5>
							</div>
						</div>

					</div>
					<div class="swiper-slide">

						<div class="slide-item element-anim-1 scroll-animate" data-animate="active">
							<div class="image kf-image-hover">
								<a href="frontend/assets/images/grid_gal4.jpg" class="has-popup-image"><img src="frontend/assets/images/grid_gal4.jpg" alt="" /></a>
							</div>
							<div class="desc">
								<h5 class="name">Iced Coffee</h5>
							</div>
						</div>

					</div>
					<div class="swiper-slide">

						<div class="slide-item element-anim-1 scroll-animate" data-animate="active">
							<div class="image kf-image-hover">
								<a href="frontend/assets/images/grid_gal5.jpg" class="has-popup-image"><img src="frontend/assets/images/grid_gal5.jpg" alt="" /></a>
							</div>
							<div class="desc">
								<h5 class="name">Espresso</h5>
							</div>
						</div>

					</div>
					<div class="swiper-slide">

						<div class="slide-item element-anim-1 scroll-animate" data-animate="active">
							<div class="image kf-image-hover">
								<a href="frontend/assets/images/grid_gal1.jpg" class="has-popup-image"><img src="frontend/assets/images/grid_gal1.jpg" alt="" /></a>
							</div>
							<div class="desc">
								<h5 class="name">Black Coffee</h5>
							</div>
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
										Exceptional quality and service. Truly an experience that goes beyond the ordinary.
									</div>
									<h5 class="name">Mahnoor Mudassar <em>Web Developer</em></h5>
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
										Highly impressed with the ambiance and the attention to detail. A perfect place to unwind.
									</div>
									<h5 class="name">Inshrah Meriyam <em>Lawyer</em></h5>
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
										Great coffee and even better service! The ambiance is ideal for a quick refresh during a busy day.
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
										An exceptional place to relax and meet clients. The staff and service truly make it a unique experience.
									</div>
									<h5 class="name">Komal Asawar <em>CEO</em></h5>
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
										A truly satisfying experience! Exceptional quality and a peaceful ambiance, perfect for unwinding.
									</div>
									<h5 class="name">Mahnoor Mudassar <em>Web Developer</em></h5>
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
										Fantastic coffee and delightful service! The cozy atmosphere keeps me coming back every time.
									</div>
									<h5 class="name">Zunaisha Malik <em>Fashion Designer</em></h5>
								</div>
							</div>

						</div>
					</div>

					<div class="swiper-pagination"></div>

				</div>
			</div>

		</div>
	</section>

	<!-- Section Numbers -->
	<section class="section kf-numbers">
		<div class="container">

			<div class="kf-numbers-items row">

				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
					<div class="kf-numbers-item">
						<div class="num">256+</div>
						<div class="desc">
							<h5 class="name">Premium Clients</h5>
							<div class="subname">Serving a diverse and valued group of clients</div>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
					<div class="kf-numbers-item">
						<div class="num">362+</div>
						<div class="desc">
							<h5 class="name">Expert Members</h5>
							<div class="subname">Skilled team dedicated to excellence</div>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
					<div class="kf-numbers-item">
						<div class="num">753+</div>
						<div class="desc">
							<h5 class="name">Winning Awards</h5>
							<div class="subname">Recognized for our outstanding quality and achievements</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</section>

	<!-- Section Latest Blog -->
	<section class="section kf-latest-blog section-bg">
		<div class="container">

			<div class="kf-titles align-center">
				<div class="kf-subtitle element-anim-1 scroll-animate" data-animate="active">
					Get Every Single Update
				</div>
				<h3 class="kf-title element-anim-1 scroll-animate" data-animate="active">
					Read Some Latest Blog & News
				</h3>
			</div>

			<div class="kf-blog-grid-items row">

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
					<div class="kf-blog-grid-item element-anim-1 scroll-animate" data-animate="active">
						<div class="image kf-image-hover">
							<a href="blog-single.html"><img src="frontend/assets/images/latest_blog1.jpg" alt="" /></a>
						</div>
						<div class="desc">
							<h5 class="name">SWR React Hooks With Next Increm Ental Static Regeneration</h5>
							<div class="kf-date"><i class="far fa-calendar-alt"></i>25 Sep 2021</div>
							<div class="kf-comm"><i class="far fa-comments"></i>Comments (7)</div>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
					<div class="kf-blog-grid-item element-anim-1 scroll-animate" data-animate="active">
						<div class="image kf-image-hover">
							<a href="blog-single.html"><img src="frontend/assets/images/latest_blog2.jpg" alt="" /></a>
						</div>
						<div class="desc">
							<h5 class="name">Decisions For Building Flexible Components DevTools Browser</h5>
							<div class="kf-date"><i class="far fa-calendar-alt"></i>25 Sep 2021</div>
							<div class="kf-comm"><i class="far fa-comments"></i>Comments (7)</div>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
					<div class="kf-blog-grid-item element-anim-1 scroll-animate" data-animate="active">
						<div class="image kf-image-hover">
							<a href="blog-single.html"><img src="frontend/assets/images/latest_blog3.jpg" alt="" /></a>
						</div>
						<div class="desc">
							<h5 class="name">SWR React Hooks With Next Increm Ental Static Regeneration</h5>
							<div class="kf-date"><i class="far fa-calendar-alt"></i>25 Sep 2021</div>
							<div class="kf-comm"><i class="far fa-comments"></i>Comments (7)</div>
						</div>
					</div>
				</div>

			</div>

			<div class="align-center">

				<a href="blog-grid.html" class="kf-btn element-anim-1 scroll-animate" data-animate="active">
					<span>view all</span>
					<i class="fas fa-chevron-right"></i>
				</a>

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

					<a href="reservation.html" class="kf-btn element-anim-1 scroll-animate" data-animate="active">
						<span>booking table</span>
						<i class="fas fa-chevron-right"></i>
					</a>

				</div>
			</div>

		</div>
	</section>
</div>

@endsection
