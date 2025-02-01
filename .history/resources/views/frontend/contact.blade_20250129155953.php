@extends('frontend.layouts.main')
@section('title', 'Contact')
@section('main-container')
		<!-- Wrapper -->
		<div class="wrapper">

			<!-- Section Started Inner -->
			<section class="section kf-started-inner">
				<div class="kf-parallax-bg js-parallax" style="background-image: url(frontend/assets/images/contact_inner_bg.jpg);"></div>
				<div class="container">

					<h1 class="kf-h-title text-anim-1 scroll-animate" data-splitting="chars" data-animate="active">
						Contact Us
					</h1>

				</div>
			</section>

			<!-- Section Contacts Info -->
			<section class="section kf-contacts-info">
				<div class="container">

					<div class="kf-contacts-items row">

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 align-center">
							<div class="kf-contacts-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image">
									<i class="las la-map-marked-alt"></i>
								</div>
								<div class="desc">
									<h5 class="name">Main Location</h5>
									<ul>
										<li>Super market, F-6 Markaz, Islamabad</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 align-center">
							<div class="kf-contacts-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image">
									<i class="las la-envelope-open-text"></i>
								</div>
								<div class="desc">
									<h5 class="name">Email Address</h5>
									<ul>
										<li>kaffencafe@gmail.com</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 align-center">
							<div class="kf-contacts-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image">
									<i class="las la-headset"></i>
								</div>
								<div class="desc">
									<h5 class="name">Phone Number</h5>
									<ul>
										<li>+92 311 1234567</li>
									</ul>
								</div>
							</div>
						</div>

					</div>

				</div>
			</section>

			<!-- Section Contacts Form -->
			<section class="section kf-contacts-form">
				<div class="container">

					<div class="kf-reservation-form element-anim-1 scroll-animate" data-animate="active">

						<div class="kf-titles align-center">
							<div class="kf-subtitle">
								Contact Us
							</div>
							<h3 class="kf-title">
								Send Us Message
							</h3>
						</div>

						@if ($message = Session::get('success'))
                        <div class="alert alert-block p-4 border-left-warning" style="background-color:#EC8E22; opacity:1">
                            <strong>
                                <h3 style="color:#ffffff">{{$message}}</h3>
                            </strong>
                        </div>
                    	@endif

						<form id="contact-form" action="{{ route('contact_submit_record') }}" method="post">
							@csrf
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
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
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
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
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
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
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="kf-field">
										<input type="text" name="subject" placeholder="Subject" required/>
										@if ($errors->has('subject'))
											<span class="text-danger">
												{{$errors->first('subject')}}
											</span>
										@endif
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="kf-field">
										<textarea name="message" placeholder="Message" required></textarea>
										@if ($errors->has('message'))
											<span class="text-danger">
												{{ $errors->first('message') }}
											</span>
										@endif
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="kf-bts">
										<button type="submit" class="kf-btn">
											<span>Submit</span>
										</button>
									</div>
								</div>	
							</div>	
						</form>	
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