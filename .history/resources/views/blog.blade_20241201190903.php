@extends('layouts.main')
@section('title', 'Blog')
@section('main-container')
		<!-- Wrapper -->
		<div class="wrapper">

			<!-- Section Started Inner -->
			<section class="section kf-started-inner">
				<div class="kf-parallax-bg js-parallax" style="background-image: url(images/blog_inner_bg.jpg);"></div>
				<div class="container">

					<h1 class="kf-h-title text-anim-1 scroll-animate" data-splitting="chars" data-animate="active">
						Blog Standard
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
	                  <a href="blog-single.html">
	                    <img src="images/latest_blog1.jpg" alt="" />
	                  </a>
	                </div>
	                <div class="desc">
	                  <div class="kf-date"><i class="far fa-calendar-alt"></i>25 Sep 2021</div>
	                  <h5 class="name">
	                    <a href="blog-single.html">For most people, moderate coffee consumption can be incorporated into a healthy diet</a>
	                  </h5>
	                  <div class="kf-text">
	                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dlorque laudantium totam rem aperiam eaque ipsa quae abillo
	                  </div>
	                  <div class="readmore">
	                    <a href="blog-single.html" class="kf-btn-link">
												<span>read more</span>
												<i class="fas fa-chevron-right"></i>
											</a>
	                  </div>
	                </div>
	              </div>

								<div class="kf-archive-item element-anim-1 scroll-animate" data-animate="active">
	                <div class="image kf-image-hover">
	                  <a href="blog-single.html">
	                    <img src="images/latest_blog2.jpg" alt="" />
	                  </a>
	                </div>
	                <div class="desc">
	                  <div class="kf-date"><i class="far fa-calendar-alt"></i>25 Sep 2021</div>
	                  <h5 class="name">
	                    <a href="blog-single.html">Coffee makes you poop during the day because it affects your digestive system so quickly</a>
	                  </h5>
	                  <div class="kf-text">
	                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dlorque laudantium totam rem aperiam eaque ipsa quae abillo
	                  </div>
	                  <div class="readmore">
	                    <a href="blog-single.html" class="kf-btn-link">
												<span>read more</span>
												<i class="fas fa-chevron-right"></i>
											</a>
	                  </div>
	                </div>
	              </div>

								<div class="kf-archive-item element-anim-1 scroll-animate" data-animate="active">
	                <div class="image kf-image-hover">
	                  <a href="blog-single.html">
	                    <img src="images/latest_blog3.jpg" alt="" />
	                  </a>
	                </div>
	                <div class="desc">
	                  <div class="kf-date"><i class="far fa-calendar-alt"></i>25 Sep 2021</div>
	                  <h5 class="name">
	                    <a href="blog-single.html">Coffee with added milk provides all the macro nutrients in good amounts</a>
	                  </h5>
	                  <div class="kf-text">
	                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dlorque laudantium totam rem aperiam eaque ipsa quae abillo
	                  </div>
	                  <div class="readmore">
	                    <a href="blog-single.html" class="kf-btn-link">
												<span>read more</span>
												<i class="fas fa-chevron-right"></i>
											</a>
	                  </div>
	                </div>
	              </div>

	            </div>

	            <!-- pager -->
	            <div class="pager element-anim-1 scroll-animate" data-animate="active">
								<a class="page-numbers prev" href="blog.html">
									<i class="fas fa-chevron-left"></i>
								</a>
	              <span class="page-numbers current">1</span>
	              <a class="page-numbers" href="blog.html">2</a>
	              <a class="page-numbers" href="blog.html">3</a>
	              <span class="page-numbers dots">&hellip;</span>
	              <a class="page-numbers" href="blog.html">9</a>
	              <a class="page-numbers next" href="blog.html">
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
			<section class="section kf-cta kf-parallax" style="background-image: url(images/cta_bg.jpg);">
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

@endsection