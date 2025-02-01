@extends('frontend.layouts.main')
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
								<div class="slide js-parallax" style="background-image: url(frontend/assets/images/started_img7.jpg);"></div>
								<div class="container">
									<div class="description align-left element-anim-1">
										<div class="subtitles">
											Welcome to the Kaffen
										</div>
										<h2 class="name text-anim-1" data-splitting="chars">
											Reserve Your <br>Table Today
										</h2>
										<div class="kf-bts">
											<a href="{{ route('menu-restaurant') }}" class="kf-btn">
												<span>explore more</span>
												<i class="fas fa-chevron-right"></i>
											</a>
											<a href="{{ route('reservation') }}" class="kf-btn dark-btn">
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
								<div class="slide js-parallax" style="background-image: url(frontend/assets/images/started_img5.jpg);"></div>
								<div class="container">
									<div class="description align-left element-anim-1">
										<div class="subtitles">
											Welcome to the Kaffen
										</div>
										<h2 class="name text-anim-1" data-splitting="chars">
											Explore Our <br>Fast Food
										</h2>
										<div class="kf-bts">
											<a href="{{ route('menu-restaurant') }}" class="kf-btn">
												<span>explore more</span>
												<i class="fas fa-chevron-right"></i>
											</a>
											<a href="{{ route('reservation') }}" class="kf-btn dark-btn">
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
								<div class="slide js-parallax" style="background-image: url(frontend/assets/images/started_img6.jpg);"></div>
								<div class="container">
									<div class="description align-left element-anim-1">
										<div class="subtitles">
											Welcome to the Kaffen
										</div>
										<h2 class="name text-anim-1" data-splitting="chars">
											Great <br>Ambiance
										</h2>
										<div class="kf-bts">
											<a href="{{ route('menu-restaurant') }}" class="kf-btn">
												<span>explore more</span>
												<i class="fas fa-chevron-right"></i>
											</a>
											<a href="{{ route('reservation') }}" class="kf-btn dark-btn">
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

			<!-- Section Category -->
			<section class="section kf-category" style="background-image: url(frontend/assets/images/category_bg.jpg);">
				<div class="container">

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

							<div class="kf-category-items element-anim-1 scroll-animate" data-animate="active">
								<div class="kf-category-item">
									<div class="image kf-image-hover">
										<a href="{{ route('menu-restaurant') }}"><img src="frontend/assets/images/menu_r02.jpg" alt="" /></a>
									</div>
									<div class="desc">
										<h5 class="name">Barbeque</h5>
									</div>
								</div>
								<div class="kf-category-item">
									<div class="image kf-image-hover">
										<a href="{{ route('menu-restaurant') }}"><img src="frontend/assets/images/menu_r8.jpg" alt="" /></a>
									</div>
									<div class="desc">
										<h5 class="name">Steak</h5>
									</div>
								</div>
								<div class="kf-category-item">
									<div class="image kf-image-hover">
										<a href="{{ route('menu-restaurant') }}"><img src="frontend/assets/images/menu_r5.jpg" alt="" /></a>
									</div>
									<div class="desc">
										<h5 class="name">Lasagna</h5>
									</div>
								</div>
								<div class="kf-category-item">
									<div class="image kf-image-hover">
										<a href="{{ route('menu-restaurant') }}"><img src="frontend/assets/images/menu_r3.jpg" alt="" /></a>
									</div>
									<div class="desc">
										<h5 class="name">Italian Burger</h5>
									</div>
								</div>
							</div>

						</div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 offset-lg-1 align-self-center">

							<div class="kf-titles">
								<div class="kf-subtitle element-anim-1 scroll-animate" data-animate="active">
									Popular Categories
								</div>
								<h3 class="kf-title element-anim-1 scroll-animate" data-animate="active">
									Choose Your Best Food <br>From Our Categories
								</h3>
							</div>

							<div class="kf-text element-anim-1 scroll-animate" data-animate="active">
							<p>
								Discover a variety of delicious options that cater to every taste. Whether you're craving something spicy, savory, or sweet, we have something special for you. Explore our categories and find the perfect dish to satisfy your hunger.
							</p>
							</div>

							<a href="{{ route('menu-restaurant') }}" class="kf-btn element-anim-1 scroll-animate" data-animate="active">
								<span>Explore More Categories</span>
								<i class="fas fa-chevron-right"></i>
							</a>

						</div>
					</div>

				</div>
			</section>

			<!-- Section Menu -->
			<section class="section kf-menu-classic section-bg">
				<div class="container">

					<div class="kf-titles align-center">
						<div class="kf-subtitle element-anim-1 scroll-animate" data-animate="active">
							Choose Our Best Menu
						</div>
						<h3 class="kf-title element-anim-1 scroll-animate" data-animate="active">
							Kaffen Popular Food Menu
						</h3>
					</div>

					<div class="kf-menu-items" style="background-image: url(frontend/assets/images/menu_logo.png);">
						<div class="row">

							<div class="kf-menu-item-col col-xs-12 col-sm-12 col-md-6 col-lg-4">
								<div class="kf-menu-item element-anim-1 scroll-animate" data-animate="active">
									<div>
										<h5 class="name">Chicken Tenders</h5>
										<div class="subname">Crispy and delicious chicken tenders</div>
										<div class="price"><span>PKR 475</span></div>
									</div>
								</div>
							</div>

							<div class="kf-menu-item-col col-xs-12 col-sm-12 col-md-6 col-lg-4">
								<div class="kf-menu-item element-anim-1 scroll-animate" data-animate="active">
									<div>
										<h5 class="name">Salad Bowl</h5>
										<div class="subname">Fresh and healthy salad mix</div>
										<div class="price"><span>PKR 335</span></div>
									</div>
								</div>
							</div>

							<div class="kf-menu-item-col col-xs-12 col-sm-12 col-md-6 col-lg-4">
								<div class="kf-menu-item element-anim-1 scroll-animate" data-animate="active">
									<div>
										<h5 class="name">Steak</h5>
										<div class="subname">Juicy steak cooked to perfection</div>
										<div class="price"><span>PKR 925</span></div>
									</div>
								</div>
							</div>

							<div class="kf-menu-item-col col-xs-12 col-sm-12 col-md-6 col-lg-4">
								<div class="kf-menu-item element-anim-1 scroll-animate" data-animate="active">
									<div>
										<h5 class="name">Milk Cream</h5>
										<div class="subname">Delicious milk cream</div>
										<div class="price">PKR 375</div>
									</div>
								</div>
							</div>

							<div class="kf-menu-item-col col-xs-12 col-sm-12 col-md-6 col-lg-4">
								<div class="kf-menu-item element-anim-1 scroll-animate" data-animate="active">
									<div>
										<h5 class="name">Cold Coffee</h5>
										<div class="subname">Chilled coffee for a refreshing taste</div>
										<div class="price">PKR 475</div>
									</div>
								</div>
							</div>

							<div class="kf-menu-item-col col-xs-12 col-sm-12 col-md-6 col-lg-4">
								<div class="kf-menu-item element-anim-1 scroll-animate" data-animate="active">
									<div>
										<h5 class="name">Latte</h5>
										<div class="subname">Smooth and creamy latte</div>
										<div class="price"><span>PKR 575</span></div>
									</div>
								</div>
							</div>

							<div class="kf-menu-item-col col-xs-12 col-sm-12 col-md-6 col-lg-4">
								<div class="kf-menu-item element-anim-1 scroll-animate" data-animate="active">
									<div>
										<h5 class="name">Italian Burger</h5>
										<div class="subname">Tomatoes, sausage, ground, onions, cheese</div>
										<div class="price">PKR 325</div>
									</div>
								</div>
							</div>

							<div class="kf-menu-item-col col-xs-12 col-sm-12 col-md-6 col-lg-4">
								<div class="kf-menu-item element-anim-1 scroll-animate" data-animate="active">
									<div>
										<h5 class="name">Grilled Sandwich</h5>
										<div class="subname">Ground chicken breast, mustard, paprika</div>
										<div class="price">PKR 445</div>
									</div>
								</div>
							</div>

							<div class="kf-menu-item-col col-xs-12 col-sm-12 col-md-6 col-lg-4">
								<div class="kf-menu-item element-anim-1 scroll-animate" data-animate="active">
									<div>
										<h5 class="name">Lasagna</h5>
										<div class="subname">Classic Italian lasagna</div>
										<div class="price"><span>PKR 775</span></div>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>
			</section>

			<!-- Section Team -->
			<section class="section kf-team kf-section-transparent">
				<div class="container">

					<div class="kf-titles align-center">
						<div class="kf-subtitle element-anim-1 scroll-animate" data-animate="active">
							Experience Team Member
						</div>
						<h3 class="kf-title element-anim-1 scroll-animate" data-animate="active">
							Meet Our Professional Chefs
						</h3>
					</div>

					<div class="kf-team-items row">

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
							<div class="kf-team-item element-anim-1 scroll-animate" data-animate="active" style="background-color: #090c0f;">
								<div class="desc">
									<h5 class="name">Anthony J. Bowman</h5>
									<div class="subname">Senior Chefs</div>
								</div>
								<div class="image kf-image-hover">
									<img src="frontend/assets/images/team1.jpg" alt="" />
									<div class="info">
										<div class="label">bowmankf@gmail.com</div>
										<div class="label">+012 (345) 678 99</div>
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
							<div class="kf-team-item element-anim-1 scroll-animate" data-animate="active" style="background-color: #090c0f;">
								<div class="desc">
									<h5 class="name">Kenny V. Gonzalez</h5>
									<div class="subname">Senior Chefs</div>
								</div>
								<div class="image kf-image-hover">
									<img src="frontend/assets/images/team2.jpg" alt="" />
									<div class="info">
										<div class="label">gonzalezkf@gmail.com</div>
										<div class="label">+012 (345) 678 99</div>
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
							<div class="kf-team-item element-anim-1 scroll-animate" data-animate="active" style="background-color: #090c0f;">
								<div class="desc">
									<h5 class="name">Joseph M. Lawrence</h5>
									<div class="subname">Senior Chefs</div>
								</div>
								<div class="image kf-image-hover">
									<img src="frontend/assets/images/team3.jpg" alt="" />
									<div class="info">
										<div class="label">lawrencekf@gmail.com</div>
										<div class="label">+012 (345) 678 99</div>
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
							<div class="kf-team-item element-anim-1 scroll-animate" data-animate="active" style="background-color: #090c0f;">
								<div class="desc">
									<h5 class="name">Charles K. Smith</h5>
									<div class="subname">Senior Chefs</div>
								</div>
								<div class="image kf-image-hover">
									<img src="frontend/assets/images/team4.jpg" alt="" />
									<div class="info">
										<div class="label">smithkf@gmail.com</div>
										<div class="label">+012 (345) 678 99</div>
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

			<!-- Section Reservation -->
			<section class="section kf-reservation kf-section-no-margin">
				<div class="container">

					<div class="kf-reservation-form element-anim-1 scroll-animate" data-animate="active">

						<div class="image-left" style="background-image: url(frontend/assets/images/reservation5.jpg);"></div>
						<div class="image-right" style="background-image: url(frontend/assets/images/reservation6.jpg);"></div>

						<div class="kf-titles align-center">
							<div class="kf-subtitle">
								Booking Table
							</div>
							<h3 class="kf-title">
								Make Your Reservation
							</h3>
						</div>

						@if ($message = Session::get('success'))
                        <div class="alert alert-block p-4 border-left-warning" style="background-color:#EC8E22; opacity:1">
                            <strong>
                                <h4 style="color:#ffffff">{{$message}}</h4>
                            </strong>
                        </div>
                    	@endif

						<form id="reservation_form" action="{{ route('reservation_submit_record') }}" method="post">
							@csrf
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<div class="kf-field">
										<input type="text" name="name" placeholder="Full Name" required/>
										<i class="far fa-user"></i>
										@if ($errors->has('name'))
											<span class="text-danger">
												{{$errors->first('name')}}
											</span>
										@endif
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<div class="kf-field">
										<input type="email" name="email" placeholder="Email Address" required/>
										<i class="fas fa-at"></i>
										@if ($errors->has('email'))
											<span class="text-danger">
												{{$errors->first('email')}}
											</span>
										@endif
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<div class="kf-field">
										<input type="tel" name="phone" placeholder="Phone Number" required/>
										<i class="fas fa-mobile-alt"></i>
										@if ($errors->has('phone'))
											<span class="text-danger">
												{{$errors->first('phone')}}
											</span>
										@endif
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<div class="kf-field">
										<select name="persons" required>
											<option>1 Person</option>
											<option>2 Persons</option>
											<option>3 Persons</option>
											<option>4 Persons</option>
										</select>
										@if ($errors->has('persons'))
											<span class="text-danger">
												{{ $errors->first('persons') }}
											</span>
										@endif
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<div class="kf-field">
										<input type="date" name="date" required/>
										<i class="far fa-calendar-alt"></i>
										@if ($errors->has('date'))
											<span class="text-danger">
												{{ $errors->first('date') }}
											</span>
										@endif
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<div class="kf-field">
										<input type="text" name="time" placeholder="Time" required/>
										<i class="far fa-clock"></i>
										@if ($errors->has('time'))
											<span class="text-danger">
												{{ $errors->first('time') }}
											</span>
										@endif
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="kf-bts">
										<button type="submit" class="kf-btn">
											<span>Booking Table</span>
										</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</section>

			<!-- Section About-2 -->
			<section class="section kf-about-2" style="background-image: url(frontend/assets/images/category_bg.jpg);">
				<div class="container">

					<div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 align-self-center">

							<div class="kf-titles">
								<div class="kf-subtitle element-anim-1 scroll-animate" data-animate="active">
									About Kaffen
								</div>
								<h3 class="kf-title element-anim-1 scroll-animate" data-animate="active">
									Have Nice & Enjoyable <br>Time With Our Foods
								</h3>
							</div>

							<div class="kf-text element-anim-1 scroll-animate" data-animate="active">
								<p>
									Sed ut perspiciatis unde omnis iste natus error voluptate accusantium doloremque
									laudantium, totam rem aperiam eaque ipsa quae abillo inventore veritatis
								</p>
							</div>

							<div class="kf-choose-list">
								<ul>
									<li class="element-anim-1 scroll-animate" data-animate="active">
										<div class="icon">
											<img src="frontend/assets/images/choose_icon2.png" alt="" />
										</div>
										<div class="desc">
											<h5 class="name">100% ISO Certification</h5>
											<div class="subname">Sed ut perspiciatis unde omnis iste natus error voluptate accusantium doloremque</div>
										</div>
									</li>
								</ul>
							</div>

							<a href="about.html" class="kf-btn element-anim-1 scroll-animate" data-animate="active">
								<span>explore more us</span>
								<i class="fas fa-chevron-right"></i>
							</a>

						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 offset-lg-1 align-self-center">

							<div class="kf-services-items-2 row">

								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<div class="kf-services-item-2 element-anim-1 scroll-animate" data-animate="active">
										<div class="image">
											<img src="frontend/assets/images/service_icon1.png" alt="" />
										</div>
										<div class="desc">
											<h5 class="name">Birthday Cakes</h5>
											<div class="subname">Sed ut perspiciatis unde</div>
										</div>
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<div class="kf-services-item-2 element-anim-1 scroll-animate" data-animate="active">
										<div class="image">
											<img src="frontend/assets/images/service_icon2.png" alt="" />
										</div>
										<div class="desc">
											<h5 class="name">Fresh Foods</h5>
											<div class="subname">Sed ut perspiciatis unde</div>
										</div>
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<div class="kf-services-item-2 element-anim-1 scroll-animate" data-animate="active">
										<div class="image">
											<img src="frontend/assets/images/service_icon3.png" alt="" />
										</div>
										<div class="desc">
											<h5 class="name">Skills Chefs</h5>
											<div class="subname">Sed ut perspiciatis unde</div>
										</div>
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<div class="kf-services-item-2 element-anim-1 scroll-animate" data-animate="active">
										<div class="image">
											<img src="frontend/assets/images/service_icon4.png" alt="" />
										</div>
										<div class="desc">
											<h5 class="name">Organic Juice</h5>
											<div class="subname">Sed ut perspiciatis unde</div>
										</div>
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
												Sed ut perspiciatis unde omnis natus error luptatem accusantium doloremque laudantium
												totam remriam eaque quae abillo
											</div>
											<h5 class="name">Frederick S. France <em>Web Deigner</em></h5>
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
												Sed ut perspiciatis unde omnis natus error luptatem accusantium doloremque laudantium
												totam remriam eaque quae abillo
											</div>
											<h5 class="name">James M. London <em>Lawyer</em></h5>
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
												Sed ut perspiciatis unde omnis natus error luptatem accusantium doloremque laudantium
												totam remriam eaque quae abillo
											</div>
											<h5 class="name">Olivia D. New York <em>Dentist</em></h5>
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
												Sed ut perspiciatis unde omnis natus error luptatem accusantium doloremque laudantium
												totam remriam eaque quae abillo
											</div>
											<h5 class="name">Frederick S. France <em>Web Deigner</em></h5>
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
												Sed ut perspiciatis unde omnis natus error luptatem accusantium doloremque laudantium
												totam remriam eaque quae abillo
											</div>
											<h5 class="name">James M. London <em>Lawyer</em></h5>
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
												Sed ut perspiciatis unde omnis natus error luptatem accusantium doloremque laudantium
												totam remriam eaque quae abillo
											</div>
											<h5 class="name">Olivia D. New York <em>Dentist</em></h5>
										</div>
									</div>

								</div>
							</div>

							<div class="swiper-pagination"></div>

						</div>
					</div>

				</div>
			</section>

			<!-- Section Video -->
			<div class="section kf-video kf-video-full">

				<div class="kf-video-item kf-parallax" style="background-image: url(frontend/assets/images/video_bg.jpg);">
          <iframe class="js-video-iframe" data-src="https://www.youtube.com/embed/Gu6z6kIukgg?showinfo=0&amp;rel=0&amp;autoplay=1"></iframe>
          <div class="play"><i class="fas fa-play"></i></div>
				</div>

			</div>

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
									<div class="subname">Sed ut perspiciatis unde</div>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
							<div class="kf-numbers-item-2 element-anim-1 scroll-animate" data-animate="active">
								<div class="icon"><i class="las la-user-tie"></i></div>
								<div class="num">36+</div>
								<div class="desc">
									<h5 class="name">Professional Chefs</h5>
									<div class="subname">Sed ut perspiciatis unde</div>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
							<div class="kf-numbers-item-2 element-anim-1 scroll-animate" data-animate="active">
								<div class="icon"><i class="las la-trophy"></i></div>
								<div class="num">753+</div>
								<div class="desc">
									<h5 class="name">Winning Awards</h5>
									<div class="subname">Sed ut perspiciatis unde</div>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
							<div class="kf-numbers-item-2 element-anim-1 scroll-animate" data-animate="active">
								<div class="icon"><i class="lar la-grin-stars"></i></div>
								<div class="num">100+</div>
								<div class="desc">
									<h5 class="name">5 Star Reviews</h5>
									<div class="subname">Sed ut perspiciatis unde</div>
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

							<a href="reservation.html" class="kf-btn element-anim-1 scroll-animate" data-animate="active">
								<span>booking table</span>
								<i class="fas fa-chevron-right"></i>
							</a>

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