<?php
require_once('app.php');
require_once(APP_ROOT . DS . 'includes' . DS . 'header.php');
?>

<body>

	<div class="page-wrapper">

		<!-- Main Header-->
		<?php require_once(APP_ROOT . DS . 'includes' . DS . 'navs.php'); ?>
		<!--End Main Header -->

		<!-- Page Banner Image Section -->
		<div class="page-banner-image-section">
			<div class="image">
				<img src="<?= ROOT ?>images/background/2.jpg" alt="" />
			</div>
		</div>
		<!-- End Page Banner Image Section -->

		<!-- Page Title Section -->
		<div class="page-title-section">
			<div class="auto-container text-center">
				<h2>How It <span> Works</span></h2>
				<h3 class="mt-5">Invest in an intelligent portfolio of low-fee funds that are designed to meet your financial goals.</h3>
			</div>
		</div>
		<!-- End Page Title Section -->

		<!-- Start Project Details -->
		<div class="project-section section-padding">
			<div class="auto-container">
				<div class="row" style="background: #F9F8F7; padding: 3em 0;">

					<!-- Portfolio Left -->
					<div class="col-lg-4 col-md-6 col-12">
						<img src="<?= ROOT ?>images/resource/phone.png" alt="" style="display: table; margin: 0 auto;">
					</div>

					<!-- Work Right -->
					<div class="col-lg-7 col-md-6 offset-lg-1 col-12">
						<div class="work-left work-details mt-lg-30">
							<div class="work-main-info">
								<div class="work-content content">


									<div class="desc mt-40">
										<div class="content mb-25">
											<h4 class="text-uppercase mb-4">Your eggs in lots of different baskets</h4>

											<p>✔ Diversifying your investments means you can minimize risk while maximizing rewards. We invest your money across the entire stock market using Exchange Traded Funds (ETFs).</p>
											<p>✔ We'll help you choose a risk level you're comfortable with, then build a custom portfolio based on your financial goals.</p>
										</div>

										<div class="work-btn">
											<a class="theme-btn btn-style-one" href="<?= ROOT ?>register"><span class="txt">start now</span></a>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Start Digital Marketion Area -->
				<div class="row mt-lg-100">
					<div class="col-lg-4 col-md-12 col-12">
						<div class="title auto-container">
							<h2>Easy Baby Steps</h2>
						</div>
					</div>
					<div class="col-lg-7 col-md-12 col-12 offset-lg-1">
						<div class="digital-marketing mt-30">
							<div class="inner title">
								<h5 class="point"><span class="icofont-tick-boxed"></span> Choose the plan that fits your financial goal</h5>
								<h5 class="point mt-5"><span class="icofont-user"></span> Register with your details</h5>
								<h5 class="point mt-5"><span class="icofont-lock"></span> Verify and secure your account</h5>
								<h5 class="point mt-5"><span class="icofont-money"></span> Start your earning</h5>
							</div>
						</div>
					</div>
				</div>
				<!-- End Digital Marketion Area -->

				<!-- Start Gallery Area -->
				<div class="custom-layout-gallery mt-lg-100">
					<div class="row mb-n30">
						<div class="col-lg-6 col-md-6 col-12">
							<div class="page-title-section">
								<div class="auto-container">
									<h2>Track your <span> performance</span> and see updates in <span> real time</span>.</h2>
									<p class="mt-3">Every investor can track the performance of their portfolio and see real-time updates via the web dashboard. We'll keep you up to date on changes such as new asset acquisitions, progress or sales of existing projects, dividend payments, and other market commentary.</p>
								</div>
								<h3>We keep your money safe</h3>
								<p>Your security and trust are important to us. We're committed to protecting your account with the highest standards of security available.
									We use state-of-the-art data encryption when handling your financial information</p>
							</div>
							<div class="work-btn">
								<a class="theme-btn btn-style-one" href="<?= ROOT ?>register"><span class="txt">start now</span></a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12 mt-50">
							<div class="thumbnail">
								<img class="w-100" src="images/project/project-4.jpg" alt="finance">
							</div>
						</div>

					</div>
				</div>
				<!-- End Gallery Area -->


			</div>
		</div>
		<!-- Start Project Details -->

		<!-- Main Footer -->
		<?php require_once(APP_ROOT . DS . 'includes' . DS . 'footer.php'); ?>

	</div>
	<!--End pagewrapper-->

	<!-- Search Popup -->
	<?php require_once(APP_ROOT . DS . 'includes' . DS . 'jslinks.php'); ?>

</body>


</html>