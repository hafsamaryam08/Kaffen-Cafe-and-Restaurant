@extends('frontend.layouts.main')
@section('title', 'Blog-Grid')
@section('main-container')
		<!-- Wrapper -->
		<div class="wrapper">

			<!-- Section Started Inner -->
			<section class="section kf-started-inner">
				<div class="kf-parallax-bg js-parallax" style="background-image: url(frontend/assets/images/blog_inner_bg.jpg);"></div>
				<div class="container">

					<h1 class="kf-h-title text-anim-1 scroll-animate" data-splitting="chars" data-animate="active">
						Blog Grid
					</h1>

				</div>
			</section>

			<!-- Section Latest Blog -->
			<section class="section kf-latest-blog">
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

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
							<div class="kf-blog-grid-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image kf-image-hover">
									<a href="{{ route('blog-single') }}"><img src="frontend/assets/images/latest_blog1.jpg" alt="" /></a>
								</div>
								<div class="desc">
									<h5 class="name">Coffee can boost your energy levels by enhancing your digestive system's efficiency</h5>
									<div class="kf-date"><i class="far fa-calendar-alt"></i>22 May 2024</div>
									<div class="kf-comm"><i class="far fa-comments"></i>Comments (7)</div>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
							<div class="kf-blog-grid-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image kf-image-hover">
									<a href="{{ route('blog-single') }}"><img src="frontend/assets/images/latest_blog2.jpg" alt="" /></a>
								</div>
								<div class="desc">
									<h5 class="name">Coffee with added milk provides all the macro nutrients in good amounts</h5>
									<div class="kf-date"><i class="far fa-calendar-alt"></i>28 Jun 2024</div>
									<div class="kf-comm"><i class="far fa-comments"></i>Comments (7)</div>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
							<div class="kf-blog-grid-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image kf-image-hover">
									<a href="{{ route('blog-single') }}"><img src="frontend/assets/images/latest_blog3.jpg" alt="" /></a>
								</div>
								<div class="desc">
									<h5 class="name">For most people, moderate coffee consumption can be incorporated</h5>
									<div class="kf-date"><i class="far fa-calendar-alt"></i>19 Oct 2024</div>
									<div class="kf-comm"><i class="far fa-comments"></i>Comments (7)</div>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
							<div class="kf-blog-grid-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image kf-image-hover">
									<a href="{{ route('blog-single') }}"><img src="frontend/assets/images/history1.jpg" alt="" /></a>
								</div>
								<div class="desc">
									<h5 class="name">Enjoy a morning coffee to kick-start your metabolism</h5>
									<div class="kf-date"><i class="far fa-calendar-alt"></i>26 Nov 2024</div>
									<div class="kf-comm"><i class="far fa-comments"></i>Comments (7)</div>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
							<div class="kf-blog-grid-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image kf-image-hover">
									<a href="{{ route('blog-single') }}"><img src="frontend/assets/images/history2.jpg" alt="" /></a>
								</div>
								<div class="desc">
									<h5 class="name">Sipping coffee with friends can strengthen social bonds</h5>
									<div class="kf-date"><i class="far fa-calendar-alt"></i>22 Dec 2024</div>
									<div class="kf-comm"><i class="far fa-comments"></i>Comments (7)</div>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
							<div class="kf-blog-grid-item element-anim-1 scroll-animate" data-animate="active">
								<div class="image kf-image-hover">
									<a href="{{ route('blog-single') }}"><img src="frontend/assets/images/history3.jpg" alt="" /></a>
								</div>
								<div class="desc">
									<h5 class="name">Exploring unique coffee blends can elevate your palate</h5>
									<div class="kf-date"><i class="far fa-calendar-alt"></i>2 Jan 2025</div>
									<div class="kf-comm"><i class="far fa-comments"></i>Comments (7)</div>
								</div>
							</div>
						</div>

					</div>

					<div class="align-center">

						<a href="{{ route('blog-grid') }}" class="kf-btn element-anim-1 scroll-animate" data-animate="active">
							<span>load more</span>
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