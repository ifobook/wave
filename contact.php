<?php
require_once('app.php');
require_once(APP_ROOT . DS . 'includes' . DS . 'header.php');
?>

<body>

	<div class="page-wrapper">

		<!-- Main Header-->
		<?php require_once(APP_ROOT . DS . 'includes' . DS . 'navs.php'); ?>
		<!-- End Main Header -->

		<!-- Map Section -->
		<div class="map-section">
			<div class="contact-map-area">
				<img src="images/background/6.jpg" alt="">
			</div>
		</div>
		<!-- End Map Section -->

		<!-- Contact Page Section -->
		<div class="contact-page-section">
			<div class="auto-container">
				<!-- Contact Info Boxed -->
				<div class="contact-info-boxed">
					<div class="row clearfix">

						<!-- Column -->
						<div class="column col-lg-6 col-md-6 col-sm-12">
							<h2>Brooklyn, <span>New York</span></h2>
							<div class="text">849 Diamond Str, 07th Floor, NY 10012, New York, <br> United State America</div>
							<div class="email">Email: <a href="mailto:support@marketswave.com">support@marketswave.com</a></div>
						</div>

						<!-- Column -->
						<div class="column col-lg-6 col-md-6 col-sm-12">
							<div class="call">Call directly:<br><a href="#">+1 212-226-3126</a></div>
							<ul class="location-list">
								<li><span>Brand Offices:</span>Allentown PA | Allanta, GA | Chicago, IL | Dallas, TX, <br> Edison, NJ | Houston, TX</li>
								<li><span>Work Hours:</span>Mon - Sat: 8.00 - 17.00, Sunday closed</li>
							</ul>
						</div>

					</div>
				</div>

				<!-- Form Boxed -->
				<div class="form-boxed">
					<div class="sec-title centered">
						<div class="title">contact us</div>
						<h2>We Always Here <span>To Help You</span></h2>
					</div>

					<div class="boxed-inner">
						<!-- Contact Form -->
						<div class="contact-form">
							<!-- Contact Form -->
							<form method="post" action="https://htmlmail.hasthemes.com/shohel/consultix/mail.php" id="contact-form">
								<div class="row clearfix">
									<div class="col-lg-4 col-md-6 col-sm-12 form-group">
										<input type="text" name="name" placeholder="Name *" required>
									</div>

									<div class="col-lg-4 col-md-6 col-sm-12 form-group">
										<input type="email" name="email" placeholder="Emaill Address *" required>
									</div>

									<div class="col-lg-4 col-md-12 col-sm-12 form-group">
										<input type="text" name="subject" placeholder="Subject (Optional)" required>
									</div>

									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<textarea name="message" placeholder="Message"></textarea>
									</div>

									<div class="col-lg-12 col-md-12 col-sm-12 text-center form-group">
										<button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">Send Message</span></button>
									</div>

								</div>
							</form>
							<p class="form-messege"></p>

						</div>
						<!--End Contact Form -->
					</div>

				</div>

			</div>
		</div>
		<!-- End Blog Detail Section -->

		<!-- Main Footer -->
		<?php require_once(APP_ROOT . DS . 'includes' . DS . 'footer.php'); ?>

	</div>
	<!--End pagewrapper-->

	<!-- Search Popup -->
	<?php require_once(APP_ROOT . DS . 'includes' . DS . 'jslinks.php'); ?>

</body>

</html>