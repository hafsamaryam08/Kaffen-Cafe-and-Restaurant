@extends('frontend.layouts.main')
@section('title', 'Blog-Single')
@section('main-container')
		<!-- Wrapper -->
		<div class="wrapper">

			<!-- Section Archive Started -->
			<section class="section kf-archive-started">
				<div class="container">

					<div class="kf-titles">
						<div class="kf-date element-anim-1 scroll-animate" data-animate="active">
						2 Jan 2025 - <a href="{{ route('blog') }}">Recipes</a>
						</div>
						<h1 class="kf-p-title text-anim-1 scroll-animate" data-splitting="words" data-animate="active">
							Coffee with added milk provides all the macro nutrients
						</h1>
					</div>

				</div>

				<div class="kf-archive-image element-anim-1 scroll-animate" data-animate="active" style="background-image: url(frontend/assets/images/latest_blog3.jpg);"></div>

			</section>

			<!-- Section Archive -->
			<section class="section kf-archive">
				<div class="container">

					<div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 offset-lg-2">

							<div class="post-content element-anim-1 scroll-animate" data-animate="active">
							<p>
								Coffee with added milk is not only delicious but also a great source of essential macronutrients. This combination helps you maintain energy levels throughout the day. Whether you enjoy it as a morning pick-me-up or an afternoon boost, it can be a satisfying addition to your diet.
							</p>
			          <blockquote>
					  <p>
						Photography captures moments that words often fail to express.
					  </p>
			            <cite>Rafey Bhatti</cite>
			          </blockquote>
			          <p>
						This versatile beverage pairs well with various foods, making it a popular choice in many cultures. From breakfast to dessert, coffee with milk can complement a wide range of flavors and dishes. So, next time you enjoy a cup, think about how it fits into your daily routine.
					  </p>
								<p><br></p>
					<h3>Exploring Different Coffee Blends</h3>
			          <p>
			            <img src="frontend/assets/images/latest_blog1.jpg" alt="" />
			          </p>
			          <p>
						Experimenting with different coffee blends can enhance your experience. Each type of coffee offers unique flavors and aromas, making it a delightful journey for your taste buds. Enjoying coffee in various styles, whether it's espresso, cappuccino, or latte, opens up a world of possibilities.
					</p>
					<ul>
						<li>Experiment with different coffee blends for unique flavors.</li>
						<li>Pair coffee with meals to enhance your dining experience.</li>
						<li>Enjoy coffee at any time of the day for an energy boost.</li>
						<li>Explore the cultural significance of coffee around the world.</li>
					</ul>
					<p>
						Embrace the world of coffee and discover how it can enrich your daily life. From its health benefits to its cultural impact, coffee with added milk is more than just a drink; it's a celebration of flavor and tradition.
					</p>
			        </div>

			        <div class="post-details element-anim-1 scroll-animate" data-animate="active">
			          <span class="tags-links">
			            <span>Tags:</span>
			            <a href="{{ route('blog') }}">photo</a>
			            <a href="{{ route('blog') }}">fashion</a>
			            <a href="{{ route('blog') }}">creative</a>
			          </span>
			        </div>

	            <!-- Comments -->
	            <div class="comments-post element-anim-1 scroll-animate" data-animate="active">

	              <!-- Comments -->
	              <div class="section__comments">

	                <h4 class="element-anim-1 scroll-animate" data-animate="active">3 Comments</h4>

	                <ul class="comments">
	                  <li class="comment comment-item">
	                    <div class="comment comment-box">
	                      <img src="https://secure.gravatar.com/avatar/aa9d265f1a064dcd6973df722b49c392?s=64&amp;d=mm&amp;r=g" class="avatar" alt="">
	                      <div class="comment-box__body">
	                        <div class="content-caption post-content description">
	                          <h5 class="comment-box__details">Komal Asawar<span>May 22, 2024</span></h5>
	                          <p>The perfect cup of coffee is all about balance. From selecting freshly roasted beans to brewing at the right temperature, every detail matters. A great coffee can energize your day and awaken your senses like nothing else.</p>
							</div>
	                      </div>
	                      <div class="comment-footer">
	                        <a class="comment-reply-link" href="{{ route('blog-single') }}">Reply</a>
	                      </div>
	                    </div>
	                  </li>
	                  <li class="comment comment-item">
	                    <div class="comment comment-box">
	                      <img src="https://secure.gravatar.com/avatar/aa9d265f1a064dcd6973df722b49c392?s=64&amp;d=mm&amp;r=g" class="avatar" alt="">
	                      <div class="comment-box__body">
	                        <div class="content-caption post-content description">
	                          <h5 class="comment-box__details">Zunaisha Javed<span>Dec 22, 2024</span></h5>
	                          <p>Coffee isn't just a drink; it's an experience. From the first aroma to the last sip, each cup tells a story. Whether you prefer it bold, creamy, or sweet, coffee has a way of bringing people together.</p>
							</div>
	                      </div>
	                      <div class="comment-footer">
	                        <a class="comment-reply-link" href="{{ route('comment_submit_record') }}">Reply</a>
	                      </div>
	                    </div>
	                  </li>
	                </ul>

	                <div class="form-comment">
	                  <div class="comment-respond">
	                    <div class="m-titles">
	                      <h4 class="element-anim-1 scroll-animate" data-animate="active">Leave a comment</h4>
	                    </div>

						@if ($message = Session::get('success'))
                        <div class="alert alert-block p-4 border-left-warning" style="background-color:#EC8E22; opacity:1">
                            <strong>
                                <h1 style="color:#ffffff">{{$message}}</h1>
                            </strong>
                        </div>
                    	@endif

	                    <form method="post" class="kf-comment-form">
						@csrf
	                      <div class="row">
	                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	                          <div class="kf-field">
								<input type="text" name="name" placeholder="Full Name" />
								@if ($errors->has('name'))
									<span class="text-danger">
										{{$errors->first('name')}}
									</span>
								@endif
							</div>
						</div>
	                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	                          <div class="kf-field">
								<input type="text" name="email" placeholder="Email Address" />
								@if ($errors->has('email'))
									<span class="text-danger">
										{{$errors->first('email')}}
									</span>
								@endif
							</div>
						</div>
	                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	                          <div class="kf-field">
								<textarea class="textarea" rows="3" placeholder="Comment"></textarea>
								@if ($errors->has('message'))
									<span class="text-danger">
										{{ $errors->first('message') }}
									</span>
								@endif
							</div>
						</div>
	                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<button type="submit" class="kf-btn">
									<span>Submit</span>
									<i class="fas fa-chevron-right"></i>
								</button>
	                        </div>
	                      </div>
	                    </form>
	                  </div>
	                </div>
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