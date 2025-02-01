@extends('frontend.layouts.main')
@section('title', 'Blog')
@section('main-container')
		<!-- Wrapper -->
		<div class="wrapper">

			<!-- Section Started Inner -->
			<section class="section kf-started-inner">
				<div class="kf-parallax-bg js-parallax" style="background-image: url(frontend/assets/images/blog_inner_bg.jpg);"></div>
				<div class="container">

					<h1 class="kf-h-title text-anim-1 scroll-animate" data-splitting="chars" data-animate="active">
						Blog
					</h1>

				</div>
			</section>

			<!-- Section Archive -->
			<section class="section kf-archive">
				<div class="container">

					<div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">

	            <div class="kf-archive-items">

	              <div class="kf-archive-item element-anim-1 scroll-animate" data-animate="active">
	                <div class="image kf-image-hover">
	                  <a href="{{ route('blog-single') }}">
	                    <img src="frontend/assets/images/latest_blog1.jpg" alt="" />
	                  </a>
	                </div>
	                <div class="desc">
	                  <div class="kf-date"><i class="far fa-calendar-alt"></i>22 May 2024</div>
	                  <h5 class="name">
	                    <a href="{{ route('blog-single') }}">For most people, moderate coffee consumption can be incorporated into a healthy diet</a>
	                  </h5>
	                  <div class="kf-text">
					  	It is said that everyone has their own story, and sometimes it is the smallest details that make the biggest impact.
	                  </div>
	                  <div class="readmore">
	                    <a href="{{ route('blog-single') }}" class="kf-btn-link">
							<span>read more</span>
							<i class="fas fa-chevron-right"></i>
						</a>
	                  </div>
	                </div>
	              </div>

								<div class="kf-archive-item element-anim-1 scroll-animate" data-animate="active">
	                <div class="image kf-image-hover">
	                  <a href="{{ route('blog-single') }}">
	                    <img src="frontend/assets/images/latest_blog2.jpg" alt="" />
	                  </a>
	                </div>
	                <div class="desc">
	                  <div class="kf-date"><i class="far fa-calendar-alt"></i>22 Dec 2024</div>
	                  <h5 class="name">
	                    <a href="{{ route('blog-single') }}">Coffee can boost your energy levels throughout the day by enhancing your digestive system's efficiency</a>
	                  </h5>
	                  <div class="kf-text">
					  	It is often surprising how quickly coffee can stimulate the digestive system, making it a common morning routine for many.
	                  </div>
	                  <div class="readmore">
	                    <a href="{{ route('blog-single') }}" class="kf-btn-link">
							<span>read more</span>
							<i class="fas fa-chevron-right"></i>
						</a>
	                  </div>
	                </div>
	              </div>

								<div class="kf-archive-item element-anim-1 scroll-animate" data-animate="active">
	                <div class="image kf-image-hover">
	                  <a href="{{ route('blog-single') }}">
	                    <img src="frontend/assets/images/latest_blog3.jpg" alt="" />
	                  </a>
	                </div>
	                <div class="desc">
	                  <div class="kf-date"><i class="far fa-calendar-alt"></i>2 Jan 2025</div>
	                  <h5 class="name">
	                    <a href="{{ route('blog-single') }}">Coffee with added milk provides all the macro nutrients in good amounts</a>
	                  </h5>
	                  <div class="kf-text">
					  	Coffee with milk not only enhances flavor but also contributes essential nutrients, making it a balanced addition to your diet.
	                  </div>
	                  <div class="readmore">
	                    <a href="{{ route('blog-single') }}" class="kf-btn-link">
							<span>read more</span>
							<i class="fas fa-chevron-right"></i>
						</a>
	                  </div>
	                </div>
	              </div>

	            </div>

	            <!-- pager -->
	            <div class="pager element-anim-1 scroll-animate" data-animate="active">
				<a class="page-numbers prev" href="{{ route('blog') }}">
					<i class="fas fa-chevron-left"></i>
				</a>
	              <span class="page-numbers current">1</span>
	              <a class="page-numbers" href="{{ route('blog') }}">2</a>
	              <a class="page-numbers" href="{{ route('blog') }}">3</a>
	              <span class="page-numbers dots">&hellip;</span>
	              <a class="page-numbers" href="{{ route('blog') }}">9</a>
	              <a class="page-numbers next" href="{{ route('blog') }}">
					<i class="fas fa-chevron-right"></i>
				</a>
	            </div>

						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">

							<!-- sidebar -->
	            <div class="col__sedebar scrolla-element-anim-1 scroll-animate" data-animate="active">
	              <div class="content-sidebar">
	                <aside class="widget-area">

	                  <div class="widget widget_search element-anim-1 scroll-animate" data-animate="active">
	                    <form class="wp-block-search">
                        <input type="search" class="wp-block-search__input" placeholder="Search" value="" />
								<button type="submit" class="wp-block-search__button">Search</button>
	                    </form>
	                  </div>

	                  <section class="widget widget_categories element-anim-1 scroll-animate" data-animate="active">
	                    <h5 class="widget-title">Categories</h5>
	                    <ul>
	                      <li><a href="#">Sea Food</a> (1)</li>
	                      <li><a href="#">Coffee</a> (2)</li>
	                      <li><a href="#">Recipes</a> (4)</li>
	                      <li><a href="#">Guides</a> (5)</li>
	                    </ul>
	                  </section>

	                  <section class="widget widget_recent_entries element-anim-1 scroll-animate" data-animate="active">
	                    <h5 class="widget-title">Recent Posts</h5>
	                    <ul>
	                      <li><a href="#">For most people, moderate coffee consumption</a></li>
	                      <li><a href="#">Coffee makes you poop during the day because</a></li>
	                      <li><a href="#">Coffee with added milk provides all</a></li>
	                    </ul>
	                  </section>

	                  <section class="widget widget_tag_cloud element-anim-1 scroll-animate" data-animate="active">
	                    <h5 class="widget-title">Tag Cloud</h5>
	                    <div class="tagcloud">
	                      <a href="#" class="tag-cloud-link">html</a>
	                      <a href="#" class="tag-cloud-link">photo</a>
	                      <a href="#" class="tag-cloud-link">food</a>
	                      <a href="#" class="tag-cloud-link">chat</a>
	                      <a href="#" class="tag-cloud-link">fashion</a>
	                      <a href="#" class="tag-cloud-link">css</a>
	                      <a href="#" class="tag-cloud-link">embeds</a>
	                      <a href="#" class="tag-cloud-link">portfolio</a>
	                      <a href="#" class="tag-cloud-link">personal</a>
	                      <a href="#" class="tag-cloud-link">js</a>
	                    </div>
	                  </section>

	                  <section class="widget widget_archive element-anim-1 scroll-animate" data-animate="active">
	                    <h5 class="widget-title">Archives List</h5>
	                    <ul>
	                      <li><a href="#">November 2019</a>&nbsp;(11)</li>
	                      <li><a href="#">October 2019</a>&nbsp;(1)</li>
	                      <li><a href="#">January 2020</a>&nbsp;(5)</li>
	                      <li><a href="#">March 2020</a>&nbsp;(5)</li>
	                      <li><a href="#">January 2020</a>&nbsp;(6)</li>
	                      <li><a href="#">March 2020</a>&nbsp;(1)</li>
	                    </ul>
	                  </section>

	                  <section class="widget widget_recent_comments element-anim-1 scroll-animate" data-animate="active">
	                    <h5 class="widget-title">Recent Comments</h5>
	                    <ul>
	                      <li class="recentcomments">
	                        <span class="comment-author-link">
	                          <a href="#" class="url">John Doe</a>
	                        </span> on <a href="#">How to Photograph Food without a Tripod</a>
	                      </li>
	                      <li class="recentcomments">
	                        <span class="comment-author-link">
	                          <a href="#" class="url">John Doe</a>
	                        </span> on <a href="#">How to Photograph Food without a Tripod</a>
	                      </li>
	                      <li class="recentcomments">
	                        <span class="comment-author-link">
	                          <a href="#" class="url">James Flick</a>
	                        </span> on <a href="#">My Style My Choise Lighthouse Long White Jacket</a>
	                      </li>
	                    </ul>
	                  </section>

	                </aside>
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