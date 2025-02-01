@extends('layouts.main')
@section('title', 'Reservation')
@section('main-container')
		<!-- Wrapper -->
		<div class="wrapper">

			<!-- Section Started Inner -->
			<section class="section kf-started-inner">
				<div class="kf-parallax-bg js-parallax" style="background-image: url(images/menu_reservation_inner_bg2.jpg);"></div>
				<div class="container">

					<h1 class="kf-h-title text-anim-1 scroll-animate" data-splitting="chars" data-animate="active">
						Reservation
					</h1>

				</div>
			</section>

			<!-- Section Reservation -->
			<section class="section kf-reservation">
				<div class="container">

					<div class="kf-reservation-form element-anim-1 scroll-animate" data-animate="active">

						<div class="kf-titles align-center">
							<div class="kf-subtitle">
								Booking Table
							</div>
							<h3 class="kf-title">
								Make Your Reservation
							</h3>
						</div>

						<form id="rform" method="post">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<div class="kf-field">
										<input type="text" name="name" placeholder="Full Name" />
										<i class="far fa-user"></i>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<div class="kf-field">
										<input type="email" name="email" placeholder="Email Address" />
										<i class="fas fa-at"></i>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<div class="kf-field">
										<input type="tel" name="tel" placeholder="Phone Number" />
										<i class="fas fa-mobile-alt"></i>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<div class="kf-field">
										<select name="persons">
											<option>1 Person</option>
											<option>2 Persons</option>
											<option>3 Persons</option>
											<option>4 Persons</option>
										</select>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<div class="kf-field">
										<input type="date" name="date" />
										<i class="far fa-calendar-alt"></i>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<div class="kf-field">
										<input type="text" name="time" placeholder="Time" />
										<i class="far fa-clock"></i>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="kf-bts">
										<a href="#" class="kf-btn" onclick="$('#rform').submit(); return false;">
											<span>booking table</span>
											<i class="fas fa-chevron-right"></i>
										</a>
									</div>
								</div>
							</div>
						</form>
						<div class="alert-success" style="display: none;">
							<p>Thanks, your message is sent successfully.</p>
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
											<img src="images/ins_gal1.jpg" alt="" />
											<i class="fab fa-instagram"></i>
										</a>
									</div>
								</div>

							</div>
							<div class="swiper-slide">

								<div class="slide-item">
									<div class="image kf-image-hover">
										<a href="instagram.html" target="blank">
											<img src="images/ins_gal2.jpg" alt="" />
											<i class="fab fa-instagram"></i>
										</a>
									</div>
								</div>

							</div>
							<div class="swiper-slide">

								<div class="slide-item">
									<div class="image kf-image-hover">
										<a href="instagram.html" target="blank">
											<img src="images/ins_gal3.jpg" alt="" />
											<i class="fab fa-instagram"></i>
										</a>
									</div>
								</div>

							</div>
							<div class="swiper-slide">

								<div class="slide-item">
									<div class="image kf-image-hover">
										<a href="instagram.html" target="blank">
											<img src="images/ins_gal4.jpg" alt="" />
											<i class="fab fa-instagram"></i>
										</a>
									</div>
								</div>

							</div>
							<div class="swiper-slide">

								<div class="slide-item">
									<div class="image kf-image-hover">
										<a href="instagram.html" target="blank">
											<img src="images/ins_gal5.jpg" alt="" />
											<i class="fab fa-instagram"></i>
										</a>
									</div>
								</div>

							</div>
							<div class="swiper-slide">

								<div class="slide-item">
									<div class="image kf-image-hover">
										<a href="instagram.html" target="blank">
											<img src="images/ins_gal6.jpg" alt="" />
											<i class="fab fa-instagram"></i>
										</a>
									</div>
								</div>

							</div>
							<div class="swiper-slide">

								<div class="slide-item">
									<div class="image kf-image-hover">
										<a href="instagram.html" target="blank">
											<img src="images/ins_gal1.jpg" alt="" />
											<i class="fab fa-instagram"></i>
										</a>
									</div>
								</div>

							</div>
							<div class="swiper-slide">

								<div class="slide-item">
									<div class="image kf-image-hover">
										<a href="instagram.html" target="blank">
											<img src="images/ins_gal2.jpg" alt="" />
											<i class="fab fa-instagram"></i>
										</a>
									</div>
								</div>

							</div>
							<div class="swiper-slide">

								<div class="slide-item">
									<div class="image kf-image-hover">
										<a href="instagram.html" target="blank">
											<img src="images/ins_gal3.jpg" alt="" />
											<i class="fab fa-instagram"></i>
										</a>
									</div>
								</div>

							</div>
							<div class="swiper-slide">

								<div class="slide-item">
									<div class="image kf-image-hover">
										<a href="instagram.html" target="blank">
											<img src="images/ins_gal4.jpg" alt="" />
											<i class="fab fa-instagram"></i>
										</a>
									</div>
								</div>

							</div>
							<div class="swiper-slide">

								<div class="slide-item">
									<div class="image kf-image-hover">
										<a href="instagram.html" target="blank">
											<img src="images/ins_gal5.jpg" alt="" />
											<i class="fab fa-instagram"></i>
										</a>
									</div>
								</div>

							</div>
							<div class="swiper-slide">

								<div class="slide-item">
									<div class="image kf-image-hover">
										<a href="instagram.html" target="blank">
											<img src="images/ins_gal6.jpg" alt="" />
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

						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
							<div class="kf-brands-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image">
									<img src="images/brand1.png" alt="" />
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
							<div class="kf-brands-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image">
									<img src="images/brand2.png" alt="" />
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
							<div class="kf-brands-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image">
									<img src="images/brand3.png" alt="" />
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
							<div class="kf-brands-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image">
									<img src="images/brand4.png" alt="" />
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
							<div class="kf-brands-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image">
									<img src="images/brand5.png" alt="" />
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
							<div class="kf-brands-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image">
									<img src="images/brand6.png" alt="" />
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>

		</div>

		<!-- Footer -->
	  <div class="kf-footer">
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">

	  				<!-- logo -->
	  				<div class="kf-logo element-anim-1 scroll-animate" data-animate="active">
	  					<a href="index-2.html"><img src="images/logo.png" alt="" /></a>
	  				</div>

	  			</div>
	  			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">

	  				<!-- hours -->
	  				<div class="kf-f-hours element-anim-1 scroll-animate" data-animate="active">
	  					<h5>Working Hours</h5>
	  					<ul>
	  						<li>
	  							Sunday - Thursday
	  							<em>08:00 am - 09:00pm</em>
	  						</li>
	  						<li>
	  							Only Friday
	  							<em>03:00 pm - 09:00pm</em>
	  						</li>
	  						<li>
	  							<strong>Saturday Close</strong>
	  						</li>
	  					</ul>
	  				</div>

	  			</div>
	  			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">

	  				<!-- contact -->
	  				<div class="kf-f-contact element-anim-1 scroll-animate" data-animate="active">
	  					<h5>Contact Us</h5>
	  					<ul>
	  						<li>
	  							<i class="las la-map-marker"></i>
	  							<em>Location :</em>
	  							55 Main Street, New York
	  						</li>
	  						<li>
	  							<i class="las la-envelope-open-text"></i>
	  							<em>Email Address :</em>
	  							kaffendev@gmail.com
	  						</li>
	  						<li>
	  							<i class="las la-phone"></i>
	  							<em>Phone Number :</em>
	  							+012 (345) 678 99
	  						</li>
	  					</ul>
	  				</div>

	  			</div>
	  			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">

	  				<!-- gallery -->
	  				<div class="kf-f-gallery element-anim-1 scroll-animate" data-animate="active">
	  					<h5>Gallery</h5>
	  					<ul>
	  						<li>
	  							<a href="images/grid_gal1.jpg" class="kf-image-hover has-popup-image"><img src="images/grid_gal1.jpg" alt="" /></a>
	  						</li>
	  						<li>
	  							<a href="images/grid_gal2.jpg" class="kf-image-hover has-popup-image"><img src="images/grid_gal2.jpg" alt="" /></a>
	  						</li>
	  						<li>
	  							<a href="images/grid_gal3.jpg" class="kf-image-hover has-popup-image"><img src="images/grid_gal3.jpg" alt="" /></a>
	  						</li>
	  						<li>
	  							<a href="images/grid_gal4.jpg" class="kf-image-hover has-popup-image"><img src="images/grid_gal4.jpg" alt="" /></a>
	  						</li>
	  						<li>
	  							<a href="images/grid_gal5.jpg" class="kf-image-hover has-popup-image"><img src="images/grid_gal5.jpg" alt="" /></a>
	  						</li>
	  						<li>
	  							<a href="images/grid_gal6.html" class="kf-image-hover has-popup-image"><img src="images/grid_gal1.jpg" alt="" /></a>
	  						</li>
	  					</ul>
	  				</div>

	  			</div>
	  		</div>
	  		<div class="row">
	  			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align-center">

	  				<!-- copyright -->
	  				<div class="kf-copyright element-anim-1 scroll-animate" data-animate="active">
	  					Copyright © 2022 Kaffen. All Rights Reserved.
	  				</div>

	  			</div>
	  		</div>
	  	</div>
	  </div>

	</div>

	<!-- Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/swiper.js"></script>
	<script src="js/splitting.js"></script>
	<script src="js/jquery.paroller.min.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/magnific-popup.js"></script>
	<script src="js/imagesloaded.pkgd.js"></script>
	<script src="js/isotope.pkgd.js"></script>
	<script src="js/jquery.scrolla.js"></script>
	<script src="js/skrollr.js"></script>
	<script src="js/common.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125314689-11"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-125314689-11');
	</script>

	<!-- bslthemes.com buttons html begin -->
  <div class="bsl-popup" data-theme="kaffen" data-category="html">
    <div class="bsl-popup__buttons"></div>
    <div class="bsl-popup__content bsl-popup__content-related">
      <div class="bsl-popup__menu"></div>
      <div class="bsl-popup__tabs">
        <div class="bsl-popup__tab bsl-popup__tab-demo"></div>
        <div class="bsl-popup__tab bsl-popup__tab-all"></div>
        <div class="bsl-popup__tab bsl-popup__tab-related"></div>
				<div class="bsl-popup__tab bsl-popup__tab-version"></div>
      </div>
    </div>
    <div class="bsl-popup__content bsl-popup__content-help"></div>
  </div>
  <!-- bslthemes.com buttons html end -->

	<!-- bslthemes.com buttons assets begin -->
	<link rel="stylesheet" href="../../bslthms-advanced-btns/assets/style.css">
  <script src="../../bslthms-advanced-btns/assets/script.js"></script>
	<!-- bslthemes.com buttons assets end -->
</body>

<!-- Mirrored from bslthemes.com/html/kaffen/reservation.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Nov 2024 08:04:41 GMT -->
</html>
