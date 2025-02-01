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
			            Nam dui mauris, congue vel nisi in, tempus gravida enim. Nulla et tristique orci. Pellentesque lectus sapien, maximus id gravida sit amet, tristique non eros. Etiam aliquet, sem vitae sagittis convallis, ante sapien tincidunt nisl, eget dapibus tortor velit quis ex. Proin et condimentum est, sed pretium ex. Mauris posuere est metus, vitae commodo sem posuere eget. Praesent maximus augue rutrum, consequat magna id, facilisis lorem. Quisque molestie, turpis ac interdum gravida
			          </p>
								<p><br></p>
			          <h3>Aliquam vel sem vel vellesuada</h3>
			          <p>
			            <img src="frontend/assets/images/latest_blog1.jpg" alt="" />
			          </p>
			          <p>
			            Vivamus interdum suscipit lacus. Nunc ultrices accumsan mattis. Aliquam vel sem vel velit efficitur malesuada. Donec arcu lacus, ornare eget ligula vel, commodo luctus felis. Ut dignissim sapien sit amet molestie rutrum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque in porta dolor, a suscipit risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac arcu in lorem rhoncus ullamcorper. Ut at nulla ut libero mollis viverra sed vitae purus.
			          </p>
			          <ul>
			            <li>Donec arcu lacus, ornare eget ligula vel, commodo luctus felis.</li>
			            <li>Ut dignissim sapien sit amet molestie rutrum.</li>
			            <li>Orci varius natoque penatibus et magnis dis parturient montes.</li>
			            <li>Ut at nulla ut libero mollis viverra sed vitae purus.</li>
			          </ul>
			          <p>
			            Nam dui mauris, congue vel nisi in, tempus gravida enim. Nulla et tristique orci. Pellentesque lectus sapien, maximus id gravida sit amet, tristique non eros. Etiam aliquet, sem vitae sagittis convallis, ante sapien tincidunt nisl, eget dapibus tortor velit quis ex.
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
	                          <h5 class="comment-box__details">Alex Morrison <span>March 9, 2021</span></h5>
	                          <p>Gallery blocks have two settings: the number of columns, and whether or not images should be cropped. The default number of columns is three, and the maximum number of columns is eight. Below is a three column gallery at full width, with cropped images.</p>
	                        </div>
	                      </div>
	                      <div class="comment-footer">
	                        <a class="comment-reply-link" href="#">Reply</a>
	                      </div>
	                    </div>
	                  </li>
	                  <li class="comment comment-item">
	                    <div class="comment comment-box">
	                      <img src="https://secure.gravatar.com/avatar/aa9d265f1a064dcd6973df722b49c392?s=64&amp;d=mm&amp;r=g" class="avatar" alt="">
	                      <div class="comment-box__body">
	                        <div class="content-caption post-content description">
	                          <h5 class="comment-box__details">John Doe <span>March 9, 2021</span></h5>
	                          <p>Gallery blocks have two settings: the number of columns, and whether or not images should be cropped. The default number of columns is three, and the maximum number of columns is eight. Below is a three column gallery at full width, with cropped images.</p>
	                        </div>
	                      </div>
	                      <div class="comment-footer">
	                        <a class="comment-reply-link" href="#">Reply</a>
	                      </div>
	                    </div>
	                  </li>
	                </ul>

	                <div class="form-comment">
	                  <div class="comment-respond">
	                    <div class="m-titles">
	                      <h4 class="element-anim-1 scroll-animate" data-animate="active">Leave a comment</h4>
	                    </div>
	                    <form method="post" class="kf-comment-form">
	                      <div class="row">
	                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	                          <div class="kf-field">
															<input type="text" name="name" placeholder="Full Name" />
														</div>
	                        </div>
	                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	                          <div class="kf-field">
															<input type="text" name="email" placeholder="Email Address" />
														</div>
	                        </div>
	                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	                          <div class="kf-field">
															<textarea class="textarea" rows="3" placeholder="Comment"></textarea>
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