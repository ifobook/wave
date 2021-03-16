<?php
require_once('app.php');
require_once(APP_ROOT . DS . 'includes' . DS . 'header.php');
?>

<body>

	<div class="page-wrapper">

		<!-- Main Header-->

		<?php require_once(APP_ROOT . DS . 'includes' . DS . 'navs.php'); ?>

		<!--End Main Header -->

		<!-- Banner Section -->
		<div class="banner-section">
			<div class="main-slider-carousel owl-carousel owl-theme">

				<div class="slide" data-bg-image="<?= ROOT ?>images/slide1.jpg">
					<div class="auto-container w-100">
						<div class="row clearfix">

							<!-- Content Column -->
							<div class="content-column col-lg-7 col-md-12 col-sm-12">
								<div class="inner-column">
									<div class="title text-white">MARKETSWAVE</div>
									<h1>Clever <span>Investing</span> Make Your Money Grow</h1>
									<div class="text text-white">The simple way to grow your money <br> like the world's most sophisticated investors.</div>
									<div class="btn-box">
										<a href="<?= ROOT ?>register" class="theme-btn btn-style-one"><span class="txt">get started now</span></a>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>

				<div class="slide" data-bg-image="<?= ROOT ?>images/slide2.jpg">
					<div class="auto-container w-100">
						<div class="row clearfix">

							<!-- Content Column -->
							<div class="content-column col-lg-7 col-md-12 col-sm-12">
								<div class="inner-column">
									<div class="title text-white">  MARKETSWAVE</div>
									<h1><span>Investing</span> Made Easy</h1>
									<div class="text text-white">Powerful financial tools to help you grow and manage your money.</div>
									<div class="btn-box">
										<a href="<?= ROOT ?>register" class="theme-btn btn-style-one"><span class="txt">GET STARTED</span></a>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>

				<div class="slide" data-bg-image="<?= ROOT ?>images/slide3.jpg">
					<div class="auto-container w-100">
						<div class="row clearfix">

							<!-- Content Column -->
							<div class="content-column col-lg-7 col-md-12 col-sm-12">
								<div class="inner-column">
									<div class="title">MORE FOR ALL</div>
									<h1>Grow your <span> money</span></h1>
									<div class="text">Get started, whether you're investing,<br> planning for retirement, or anything in between.</div>
									<div class="btn-box">
										<a href="<?= ROOT ?>register" class="theme-btn btn-style-one"><span class="txt">GET STARTED</span></a>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>

			</div>


		</div>
		<!-- End Banner Section -->

		<!-- CTA Section Start -->
		<div class="cta-section" data-bg-image="<?= ROOT ?>images/ct_bg.jpg">
			<div class="auto-container">
				<div class="row align-items-center">
					<div class="col-lg-7">
						<!-- CTA Content Start -->
						<div class="cta-content ">
							<h3 class="title text-dark">Tell us your terget, We will help u get there<span class="text-bold"> Connect us now!</span></h3>
							<p>We prodive a dedicated support 24/7 for any of your question</p>
						</div>
						<!-- CTA Content End -->
					</div>
					<div class="col-lg-5">
						<!-- CTA Phone Number Start -->
						<div class="cta-phone text-lg-end text-strat">
							<a href="<?= ROOT ?>contact_us" class="title theme-btn btn-style-one"><span class="txt">Contact us</span></a>
						</div>
						<!-- CTA Phone Number Start -->
					</div>
				</div>
			</div>
		</div>
		<!-- CTA Section End -->

		<!-- About Section -->
		<div class="about-section">
			<div class="auto-container">
				<div class="inner-container">
					<div class="row align-items-center clearfix">
						<!-- Image Column -->
						<div class="image-column col-lg-6">
							<div class="about-image">
								<div class="about-inner-image">
									<img src="<?= ROOT ?>images/about/home-about.png" alt="about">
								</div>
							</div>
						</div>

						<!-- Content Column -->
						<div class="content-column col-lg-6 col-md-12 col-sm-12 mb-0">
							<div class="about-column">
								<div class="sec-title">
									<div class="title">about Marketswave</div>
									<h2>Leading <span>Financial</span> <br> <span>Investment</span> Company</h2>
								</div>
								<div class="text">
									<p>Marketswave is located in the former rectory of St. Peter’s Episcopal Church. Over our 14 year history, we have treated patients from over 114 different countries in the world. This company is managed by the best hands in the field of investing, successfully handling trading and assets management with an enviable track record and 100% assurance of optimum output.</p>
									<p>Investing is made very simple with Marketswave! It is time to build your own investment portfolio with a self-directed account and save on fees.</p>
								</div>
								<div class="signature">Daniel <span>Daniel Jr</span></div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- End About Section -->

		<!-- Services Section -->
		<div class="services-section">
			<div class="auto-container">
				<div class="sec-title">
					<div class="title">why Marketswave</div>
					<h2><span>Best Solutions</span> For Your Investment</h2>
				</div>
				<div class="inner-container">
					<div class="row g-0">

						<!-- Service Block -->
						<div class="service-block col-lg-3 col-md-6 col-sm-12">
							<div class="inner-box">
								<div class="icon-box">
									<span class="icon ti-blackboard"></span>
								</div>
								<h5><a href="service-detail.html">Investing</a></h5>
								<div class="text">Invest what you can afford.
									With fractional shares, you can choose how much to invest.</div>
								<a class="read-more d-none" href="service-detail.html">More <span class="ti-angle-right"></span></a>

							</div>
						</div>

						<!-- Service Block -->
						<div class="service-block col-lg-3 col-md-6 col-sm-12">
							<div class="inner-box">
								<div class="icon-box">
									<span class="icon ti-stats-up"></span>
								</div>
								<h5><a href="service-detail.html">Plans</a></h5>
								<div class="text">Invest in yourself.
									With our multi plans and investment sections, we make it easy and affordable to build wealth.</div>
								<a class="read-more d-none" href="service-detail.html">More <span class="ti-angle-right"></span></a>
							</div>
						</div>

						<!-- Service Block -->
						<div class="service-block col-lg-3 col-md-6 col-sm-12">
							<div class="inner-box">
								<div class="icon-box">
									<span class="icon ti-shield"></span>
								</div>
								<h5><a href="service-detail.html">Security</a></h5>
								<div class="text">Secured blockchain transactions , Secured investors data and personal information. Top level ssl certification.</div>
								<a class="read-more d-none" href="service-detail.html">More <span class="ti-angle-right"></span></a>
							</div>
						</div>

						<!-- Service Block -->
						<div class="service-block col-lg-3 col-md-6 col-sm-12">
							<div class="inner-box">
								<div class="icon-box">
									<span class="icon ti-home"></span>
								</div>
								<h5><a href="service-detail.html">Family</a></h5>
								<div class="text">Invest in your home.
									Help the ones you love with children’s investment accounts and family plans.</div>
								<a class="read-more d-none" href="service-detail.html">More <span class="ti-angle-right"></span></a>
							</div>
						</div>

						<!-- Service Block -->
						<div class="service-block col-lg-3 col-md-6 col-sm-12">
							<div class="inner-box">
								<div class="icon-box">
									<span class="icon ti-stamp"></span>
								</div>
								<h5><a href="service-detail.html">Trust</a></h5>
								<div class="text">Trusted by thousands of people all over the world. Good reviews on all social channels.</div>
								<a class="read-more d-none" href="service-detail.html">More <span class="ti-angle-right"></span></a>
							</div>
						</div>

						<!-- Service Block -->
						<div class="service-block col-lg-3 col-md-6 col-sm-12">
							<div class="inner-box">
								<div class="icon-box">
									<span class="icon ti-money"></span>
								</div>
								<h5><a href="service-detail.html">Taxes & Efficiency</a></h5>
								<div class="text">Commission-free stock trading. Without any government dues</div>
								<a class="read-more d-none" href="service-detail.html">More <span class="ti-angle-right"></span></a>
							</div>
						</div>

						<!-- Service Block -->
						<div class="service-block col-lg-3 col-md-6 col-sm-12">
							<div class="inner-box">
								<div class="icon-box">
									<span class="icon ti-shopping-cart-full"></span>
								</div>
								<h5><a href="service-detail.html">Consumer Market</a></h5>
								<div class="text">Invest in your future.
									Stash can help you plan and save for a secure retirement.</div>
								<a class="read-more d-none" href="service-detail.html">More <span class="ti-angle-right"></span></a>
							</div>
						</div>

						<!-- Service Block -->
						<div class="service-block col-lg-3 col-md-6 col-sm-12">
							<div class="inner-box">
								<div class="icon-box">
									<span class="icon ti-truck"></span>
								</div>
								<h5><a href="service-detail.html">Logistic</a></h5>
								<div class="text">Making sure we achieve every client goal is our major aim</div>
								<a class="read-more d-none" href="service-detail.html">More <span class="ti-angle-right"></span></a>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>
		<!-- End Services Section -->

		<!-- Project Section -->
		<div class="project-section">
			<div class="auto-container">

				<!-- Sec Title -->
				<div class="sec-title">
					<div class="clearfix">
						<div class="pull-left">
							<div class="title">ACCOUNT TYPES</div>
							<h2>Choose <span>Account</span> that fit your <span> goals</span></h2>
						</div>
					</div>
				</div>

			</div>
			<div class="outer-container">
				<div class="row clearfix">

					<!-- Column -->
					<div class="column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">

							<!-- Inner Column -->
							<div class="inner-column col-lg-6 col-md-6 col-sm-12">
								<div class="gallery-block">
									<div class="inner-box">
										<div class="image">
											<img src="<?=ROOT?>images/gallery/2.jpg" alt="" />
											<div class="overlay-box">
												<div class="overlay-inner">
													<h3><a href="<?=ROOT?>gold">GOLD</a></h3>
													<div class="designation"> The Trade free gold investment</div>
													<a href="<?=ROOT?>gold" class="arrow ti-angle-right"></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Inner Column -->
							<div class="inner-column col-lg-6 col-md-6 col-sm-12">
								<div class="gallery-block">
									<div class="inner-box">
										<div class="image">
											<img src="<?=ROOT?>images/gallery/3.jpg" alt="" />
											<div class="overlay-box">
												<div class="overlay-inner">
													<h3><a href="<?=ROOT?>oil">	OIL</a></h3>
													<div class="designation">Invest in oil, invest in power</div>
													<a href="<?=ROOT?>oil" class="arrow ti-angle-right"></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Inner Column -->
							<div class="inner-column col-lg-12 col-md-12 col-sm-12">
								<div class="gallery-block">
									<div class="inner-box">
										<div class="image">
											<img src="<?=ROOT?>images/gallery/4.jpg" alt="" />
											<div class="overlay-box">
												<div class="overlay-inner">
													<h3><a href="<?=ROOT?>estate">REAL ESTATE</a></h3>
													<div class="designation">Build with your investment</div>
													<a href="<?=ROOT?>estate" class="arrow ti-angle-right"></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>

					<!-- Column -->
					<div class="column col-lg-6 col-md-12 col-sm-12">
						<div class="gallery-block">
							<div class="inner-box">
								<div class="image">
									<img src="<?=ROOT?>images/gallery/1.jpg" alt="" />
									<div class="overlay-box">
										<div class="overlay-inner">
											<h3><a href="<?=ROOT?>bitcoin">BITCOIN</a></h3>
											<div class="designation">Invest with no limitations</div>
											<a href="<?=ROOT?>bitcoin" class="arrow ti-angle-right"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Project Section -->

		<!-- Testimonial Section -->
		<div class="testimonial-section">
			<div class="auto-container">
				<!-- Sec Title -->
				<div class="sec-title">
					<div class="title">testimonials</div>
					<h2>Our clients trust us with over <span> $1.1 billion</span></h2>
				</div>
				<div class="testimonial-carousel owl-carousel owl-theme">

					<!-- Testimonial Block -->
					<div class="testimonial-block">
						<div class="inner-box">
							<div class="quote icofont-quote-right"></div>
							<div class="author">Ryan Betthalyn</div>
							<div class="text">Marketswave is going beyond providing a tech platform...it also gives users access to its own stable of financial advisors</div>
						</div>
					</div>

					<!-- Testimonial Block -->
					<div class="testimonial-block">
						<div class="inner-box">
							<div class="quote icofont-quote-right"></div>
							<div class="author">Bobs Hanley </div>
							<div class="text">I feel truly supported to start the kind of projects that I've wanted to build my whole career. There's a sense of trust and ownership here, and it shows in thier work.</div>
						</div>
					</div>

					<!-- Testimonial Block -->
					<div class="testimonial-block">
						<div class="inner-box">
							<div class="quote icofont-quote-right"></div>
							<div class="author">Bethel Wilson</div>
							<div class="text">This platform made it possible for me to have a nice passive income business, despite the nature of my Job. Thanks to the company management.</div>
						</div>
					</div>

					<!-- Testimonial Block -->
					<div class="testimonial-block">
						<div class="inner-box">
							<div class="quote icofont-quote-right"></div>
							<div class="author">Tyler John</div>
							<div class="text">Marketswave made it easy for me be able to have my dream business. I can boldly call myself a business owner.</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Testimonial Section -->

		<!-- Sponsors Section -->
		<div class="sponsors-section">
			<div class="auto-container">

				<div class="carousel-outer">
					<!--Sponsors Slider-->
					<ul class="sponsors-carousel owl-carousel owl-theme">
						<li>
							<div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div>
						</li>
						<li>
							<div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div>
						</li>
						<li>
							<div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></div>
						</li>
						<li>
							<div class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></div>
						</li>
						<li>
							<div class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></div>
						</li>
						<li>
							<div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div>
						</li>
						<li>
							<div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div>
						</li>
						<li>
							<div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></div>
						</li>
					</ul>
				</div>

			</div>
		</div>
		<!--End Sponsors Section-->

		<!-- Reputation Section Two -->
		<div class="reputation-section-two style-two">
			<div class="auto-container">
				<div class="row clearfix">

					<!-- Form Column -->
					<div class="form-column col-lg-5 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="form-boxed">
								<h5>Connect with us</h5>

								<div class="consult-form">
									<form method="post" action="https://htmldemo.hasthemes.com/consultix/consultix/donate.html">

										<!--Form Group-->
										<div class="form-group">
											<label>full name</label>
											<input type="text" name="name" value="" placeholder="Jason Staham" required>
										</div>
										<!--Form Group-->
										<div class="form-group">
											<label>phone number</label>
											<input type="text" name="phone" value="" placeholder="Enter your phone number" required>
										</div>
										<!--Form Group-->
										<div class="form-group">
											<label>Email</label>
											<input type="email" name="email" value="" placeholder="Enter your Email address" required>
										</div>
										<!--Form Group-->
										<div class="form-group">
											<label>message</label>
											<textarea name="message" placeholder="Write your message here"></textarea>
										</div>
										<div class="form-group">
											<button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">send your messenger</span></button>
										</div>
									</form>

								</div>
							</div>

						</div>
					</div>

					<!-- Content Column -->
					<div class="content-column col-lg-7 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="sec-title">
								<div class="title">Don't just take our word for it.</div>
								<h2>Join over <span> 740K</span> people who use Marketswave</h2>
							</div>
							<div class="blocks-outer">

							<!-- Reputation Block -->
							<div class="reputation-block">
									<div class="inner-box">
										<h5>We keep your money safe</h5>
										<div class="text">Your security and trust are important to us. We’re committed to protecting your account with the highest standards of security available.</div>
									</div>
								</div>

								<!-- Reputation Block -->
								<div class="reputation-block">
									<div class="inner-box">
										<h5>Strong Martket Analysis</h5>
										<div class="text">With good tecnology and greate team, We increase your investment and we carefully chose the best and most profitable trading methods to get amazing results.</div>
									</div>
								</div>

								<!-- Reputation Block -->
								<div class="reputation-block">
									<div class="inner-box">
										<h5>Client oriented</h5>
										<div class="text">We serve as if we are serving ourselves, we value the feedback and use it to improve our work. We make ourselves known in the community; we create long term relations, while constantly expanding. Therefore, we are always bringing in more people to work for us for greater results.</div>
									</div>
								</div>

							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Reputation Section -->

		<!-- Experts Section -->
		<div class="experts-section">
			<div class="auto-container">

				<!-- Sec Title -->
				<div class="sec-title">
					<div class="clearfix">
						<div class="pull-left">
							<div class="title">our experts</div>
							<h2>We Are <span>Friendly & Profressional</span></h2>
						</div>
						<div class="pull-right">
							<a href="<?=ROOT?>about" class="experts">all experts <span class="arrow ti-angle-right"></span></a>
						</div>
					</div>
				</div>

				<div class="row clearfix">

					<!-- Team Block -->
					<div class="team-block col-lg-3 col-md-6 col-sm-6 col-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image">
								<a href="javascript:void(0)"><img src="<?=ROOT?>images/resource/team-2.jpg" alt="" /></a>
								<!-- Social Box -->
								<ul class="social-box">
								<h4><a href="javascript:void(0)">Edward Eric Jr</a></h4>

								</ul>
							</div>
							<div class="lower-box mt-0">
								<div class="designation">Chief Executive Officer</div>
							</div>
						</div>
					</div>

					<!-- Team Block -->
					<div class="team-block col-lg-3 col-md-6 col-sm-6 col-12">
						<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image">
								<a href="javascript:void(0)"><img src="<?=ROOT?>images/resource/team-1.jpg" alt="" /></a>
								<!-- Social Box -->
								<ul class="social-box">
								<h4><a href="javascript:void(0)">Tom Holland</a></h4>
								</ul>
							</div>
							<div class="lower-box mt-0">
								
								<div class="designation">Chief Operating Officer</div>
							</div>
						</div>
					</div>

					<!-- Team Block -->
					<div class="team-block col-lg-3 col-md-6 col-sm-6 col-12">
						<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image">
								<a href="javascript:void(0)"><img src="<?=ROOT?>images/resource/team-3.jpg" alt="" /></a>
								<!-- Social Box -->
								<ul class="social-box">
								<h4><a href="javascript:void(0)">Laura Deborah</a></h4>
								</ul>
							</div>
							<div class="lower-box mt-0">
								<div class="designation">Chief Financial Officer</div>
							</div>
						</div>
					</div>

					<!-- Team Block -->
					<div class="team-block col-lg-3 col-md-6 col-sm-6 col-12">
						<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image">
								<a href="javascript:void(0)"><img src="<?=ROOT?>images/resource/team-4.jpg" alt="" /></a>
								<!-- Social Box -->
								<ul class="social-box">
								<h4><a href="javascript:void(0)">Rudy Adler</a></h4>
								</ul>
							</div>
							<div class="lower-box mt-0">
								
								<div class="designation">Chief Product Officer</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Experts Section -->

		<!-- Blog Section -->
		<div class="blog-section">
			<div class="auto-container">
				<!-- Sec Title -->
				<div class="sec-title centered">
					<div class="title">Learn</div>
					<h2><span>Latest </span>From Our Press</h2>
				</div>
				<div class="inner-container">
					<div class="clearfix row g-0">
						<!-- Column -->
						<div class="column col-lg-8 col-md-12 col-sm-12">

							<!-- News Block -->
							<div class="news-block">
								<div class="inner-box">
									<div class="clearfix">
										<!-- Image Column -->
										<div class="image-column col-lg-6 col-md-6 col-sm-12">
											<div class="inner-column">
												<div class="image">
													<a href=""><img src="<?=ROOT?>images/resource/news-1.jpg" alt="" /></a>
												</div>
											</div>
										</div>
										<!-- Content Column -->
										<div class="content-column col-lg-6 col-md-6 col-sm-12">
											<div class="inner-column">
												<div class="arrow-one"></div>
												<div class="title">business</div>
												<h4><a href="">Our Guide to Financial Wellness</a></h4>
												<div class="post-date">Our Complete Framework to Help You Achieve Financial Wellness</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- News Block -->
							<div class="news-block">
								<div class="inner-box">
									<div class="clearfix row g-0">
										<!-- Content Column -->
										<div class="content-column col-lg-6 col-md-6 col-sm-12 order-lg-1 order-2">
											<div class="inner-column">
												<div class="arrow-two"></div>
												<div class="title">Finance</div>
												<h4><a href="">You Can Stay the Course Through Volatile Markets</a></h4>
												<div class="post-date"></div>
											</div>
										</div>
										<!-- Image Column -->
										<div class="image-column col-lg-6 col-md-6 col-sm-12 order-lg-2 order-1">
											<div class="inner-column">
												<div class="image">
													<a href=""><img src="<?=ROOT?>images/resource/news-2.jpg" alt="" /></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>

						<!-- Column -->
						<div class="column col-lg-4 col-md-12 col-sm-12">
							<!-- News Block Two -->
							<div class="news-block-two">
								<div class="inner-box">
									<div class="image">
										<a href=""><img src="<?=ROOT?>images/resource/news-3.jpg" alt="" /></a>
										<div class="arrow"></div>
									</div>
									<div class="lower-content">
										<div class="title">Update</div>
										<h4><a href="">Here’s What the $900 Billion Stimulus Act Could Mean for You</a></h4>
										<div class="post-date"></div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- End Blog Section -->

		<!-- Main Footer -->
		<?php require_once(APP_ROOT . DS . 'includes' . DS . 'footer.php'); ?>

	</div>
	<!--End pagewrapper-->

	<!-- Search Popup -->
	<?php require_once(APP_ROOT . DS . 'includes' . DS . 'jslinks.php'); ?>

</body>

</html>