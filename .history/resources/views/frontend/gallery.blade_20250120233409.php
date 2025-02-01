@extends('frontend.layouts.main')
@section('title', 'Gallery')
@section('main-container')
		<!-- Wrapper -->
		<div class="wrapper">

			<!-- Section Started Inner -->
			<section class="section kf-started-inner">
				<div class="kf-parallax-bg js-parallax" style="background-image: url(images/gallery_inner_bg.jpg);"></div>
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
							Looks Our Photo Gallery
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
									<a href="images/ins_gal1.jpg" class="has-popup-gallery"><img src="images/ins_gal1.jpg" alt="" /></a>
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
									<a href="images/ins_gal2.jpg" class="has-popup-gallery"><img src="images/ins_gal2.jpg" alt="" /></a>
								</div>
								<div class="desc">
									<div class="name">
										<div class="value">italian pasta</div>
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
									<a href="images/ins_gal3.jpg" class="has-popup-gallery"><img src="images/ins_gal3.jpg" alt="" /></a>
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
									<a href="images/ins_gal4.jpg" class="has-popup-gallery"><img src="images/ins_gal4.jpg" alt="" /></a>
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
									<a href="images/ins_gal5.jpg" class="has-popup-gallery"><img src="images/ins_gal5.jpg" alt="" /></a>
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
									<a href="images/ins_gal6.jpg" class="has-popup-gallery"><img src="images/ins_gal6.jpg" alt="" /></a>
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
									<a href="images/grid_gal1.jpg" class="has-popup-gallery"><img src="images/grid_gal1.jpg" alt="" /></a>
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
									<a href="images/menu_r4.jpg" class="has-popup-gallery"><img src="images/menu_r4.jpg" alt="" /></a>
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
									<a href="images/menu_r6.jpg" class="has-popup-gallery"><img src="images/menu_r6.jpg" alt="" /></a>
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
			<section class="section kf-cta kf-parallax" style="background-image: url(images/cta_bg3.jpg);">
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

			<!-- Section Brands -->
			<div class="section kf-brands">
				<div class="container">

					<div class="kf-brands-items row">

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-2">
							<div class="kf-brands-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image">
									<img src="images/brand1.png" alt="" />
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-2">
							<div class="kf-brands-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image">
									<img src="images/brand2.png" alt="" />
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-2">
							<div class="kf-brands-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image">
									<img src="images/brand3.png" alt="" />
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-2">
							<div class="kf-brands-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image">
									<img src="images/brand4.png" alt="" />
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-2">
							<div class="kf-brands-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image">
									<img src="images/brand5.png" alt="" />
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-2">
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

<!-- Mirrored from bslthemes.com/html/kaffen/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Nov 2024 08:04:45 GMT -->
</html>
