@extends('layouts.main')
@section('title', 'Menu')
@section('main-container')
		<!-- Wrapper -->
		<div class="wrapper">

			<!-- Section Started Inner -->
			<section class="section kf-started-inner">
				<div class="kf-parallax-bg js-parallax" style="background-image: url(frontend/assets/images/service3.jpg);"></div>
				<div class="container">

					<h1 class="kf-h-title text-anim-1 scroll-animate" data-splitting="chars" data-animate="active">
						Coffee Menu
					</h1>

				</div>
			</section>

			<!-- Section Menu -->
			<section class="section kf-menu kf-menu-tabs">
				<div class="container">

					<div class="kf-titles align-center">
						<div class="kf-subtitle element-anim-1 scroll-animate" data-animate="active">
							Choose Best of
						</div>
						<h3 class="kf-title element-anim-1 scroll-animate" data-animate="active">
							Kaffen Coffee Menu
						</h3>
					</div>

					<div class="kf-filter kf-filter-menu element-anim-1 scroll-animate" data-animate="active">
						<a href="#" data-href=".all" class="active">All</a>
						<a href="#" data-href=".fast-food">Fast food</a>
						<a href="#" data-href=".hot-coffee">Hot coffee</a>
						<a href="#" data-href=".dessert">Dessert</a>
					</div>

					<div class="kf-menu-items" style="background-image: url(frontend/assets/images/menu_logo.png);">
						<div class="row">

							<div class="kf-menu-item-col col-xs-12 col-sm-12 col-md-12 col-lg-6 all hot-coffee">
								<div class="kf-menu-item element-anim-1 scroll-animate" data-animate="active">
									<div class="image kf-image-hover">
										<a href="frontend/assets/images/menu1.jpg" class="has-popup-image"><img src="frontend/assets/images/menu1.jpg" alt="" /></a>
									</div>
									<div class="desc">
										<h5 class="name">Americano</h5>
										<div class="subname">2/3 espresso, 1/3 streamed milk</div>
										<div class="price">PKR 775</div>
									</div>
								</div>
							</div>

							<div class="kf-menu-item-col col-xs-12 col-sm-12 col-md-12 col-lg-6 all hot-coffee">
								<div class="kf-menu-item element-anim-1 scroll-animate" data-animate="active">
									<div class="image kf-image-hover">
										<a href="frontend/assets/images/menu2.jpg" class="has-popup-image"><img src="frontend/assets/images/menu2.jpg" alt="" /></a>
									</div>
									<div class="desc">
										<h5 class="name">Espresso</h5>
										<div class="subname">2/3 espresso, 1/3 streamed milk</div>
										<div class="price">PKR 725</div>
									</div>
								</div>
							</div>

							<div class="kf-menu-item-col col-xs-12 col-sm-12 col-md-12 col-lg-6 all dessert">
								<div class="kf-menu-item element-anim-1 scroll-animate" data-animate="active">
									<div class="image kf-image-hover">
										<a href="frontend/assets/images/menu3.jpg" class="has-popup-image"><img src="frontend/assets/images/menu3.jpg" alt="" /></a>
									</div>
									<div class="desc">
										<h5 class="name">Barista Pouring Syrup</h5>
										<div class="subname">2/3 espresso, 1/3 streamed milk</div>
										<div class="price">PKR 525</div>
									</div>
								</div>
							</div>

							<div class="kf-menu-item-col col-xs-12 col-sm-12 col-md-12 col-lg-6 all hot-coffee">
								<div class="kf-menu-item element-anim-1 scroll-animate" data-animate="active">
									<div class="image kf-image-hover">
										<a href="frontend/assets/images/menu4.jpg" class="has-popup-image"><img src="frontend/assets/images/menu4.jpg" alt="" /></a>
									</div>
									<div class="desc">
										<h5 class="name">Latte</h5>
										<div class="subname">2/3 espresso, 1/3 streamed milk</div>
										<div class="price">PKR 575</div>
									</div>
								</div>
							</div>

							<div class="kf-menu-item-col col-xs-12 col-sm-12 col-md-12 col-lg-6 all dessert">
								<div class="kf-menu-item element-anim-1 scroll-animate" data-animate="active">
									<div class="image kf-image-hover">
										<a href="frontend/assets/images/menu5.jpg" class="has-popup-image"><img src="frontend/assets/images/menu5.jpg" alt="" /></a>
									</div>
									<div class="desc">
										<h5 class="name">Cappuccino Arabica</h5>
										<div class="subname">2/3 espresso, 1/3 streamed milk</div>
										<div class="price">PKR 455</div>
									</div>
								</div>
							</div>

							<div class="kf-menu-item-col col-xs-12 col-sm-12 col-md-12 col-lg-6 all dessert">
								<div class="kf-menu-item element-anim-1 scroll-animate" data-animate="active">
									<div class="image kf-image-hover">
										<a href="frontend/assets/images/menu6.jpg" class="has-popup-image"><img src="frontend/assets/images/menu6.jpg" alt="" /></a>
									</div>
									<div class="desc">
										<h5 class="name">Milk Cream</h5>
										<div class="subname">2/3 espresso, 1/3 streamed milk</div>
										<div class="price">PKR 525</div>
									</div>
								</div>
							</div>

							<div class="kf-menu-item-col col-xs-12 col-sm-12 col-md-12 col-lg-6 all fast-food">
								<div class="kf-menu-item element-anim-1 scroll-animate" data-animate="active">
									<div class="image kf-image-hover">
										<a href="frontend/assets/images/ins_gal1.jpg" class="has-popup-image"><img src="frontend/assets/images/ins_gal1.jpg" alt="" /></a>
									</div>
									<div class="desc">
										<h5 class="name">Italian Burger</h5>
										<div class="subname">Tomatoes, italian sausage, ground, onions, cheese</div>
										<div class="price">PKR 575</div>
									</div>
								</div>
							</div>

							<div class="kf-menu-item-col col-xs-12 col-sm-12 col-md-12 col-lg-6 all fast-food">
								<div class="kf-menu-item element-anim-1 scroll-animate" data-animate="active">
									<div class="image kf-image-hover">
										<a href="frontend/assets/images/ins_gal3.jpg" class="has-popup-image"><img src="frontend/assets/images/ins_gal3.jpg" alt="" /></a>
									</div>
									<div class="desc">
										<h5 class="name">Chicken Burger</h5>
										<div class="subname">Ground chicken breast, mustard, paprika, onion</div>
										<div class="price">PKR 425</div>
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
