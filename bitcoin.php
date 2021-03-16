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
				<img src="<?= ROOT ?>images/background/3.jpg" alt="" />
			</div>
		</div>

		<!-- Page Title Section -->
		<div class="page-title-section">
			<div class="auto-container">
				<h2><span>Grow</span> your funds in <span> Bitcoin</span></h2>
			</div>
		</div>
		<!-- End Page Title Section -->

		<!--Sidebar Page Container-->
		<div class="container mt-5">
			<div class="row">
				<div class=" col-sm-6 col-md-4 plan">
					<div class="plan-inner">
						<h4 class="">Beginner</h4>
						<h3 class="">20%<sup>monthly</sup></h3>
						<h5><sup>from </sup>$100 -> $10,000</h5>
						<hr>

						<ul class="text-left">
							<li><span class="icofont-tick-mark"></span> Personalized portfolio</li>
							<li><span class="icofont-tick-mark"></span> Auto-rebalancing</li>
							<li><span class="icofont-tick-mark"></span> Dividend reinvesting</li>
							<li><span class="icofont-tick-mark"></span> Account support</li>
						</ul>

						<div class="work-btn">
							<a class="theme-btn btn-style-one" href="<?= ROOT ?>register"><span class="txt">start now</span></a>
						</div>
					</div>


				</div>

				<div class=" col-sm-6 col-md-4 plan">
					<div class="plan-inner">
						<h4 class="">Standard </h4>
						<h3 class="">25%<sup>monthly</sup></h3>
						<h5><sup>from </sup>$10,000 -> $30,000</h5>
						<hr>

						<ul class="text-left">
							<li><span class="icofont-tick-mark"></span> All core features +</li>
							<li><span class="icofont-tick-mark"></span> Financial planning session</li>
							<li><span class="icofont-tick-mark"></span> Tax lost harvesting</li>
							<li><span class="icofont-tick-mark"></span> Tax efficient funds</li>
						</ul>

						<div class="work-btn">
							<a class="theme-btn btn-style-one" href="<?= ROOT ?>register"><span class="txt">start now</span></a>
						</div>
					</div>


				</div>

				<div class=" col-sm-6 col-md-4 plan">
					<div class="plan-inner">
						<h4 class="">Premium </h4>
						<h3 class="">30%<sup>monthly</sup></h3>
						<h5><sup>from </sup>$30,000 -> $60,000</h5>
						<hr>

						<ul class="text-left">
							<li><span class="icofont-tick-mark"></span> All advanced features +</li>
							<li><span class="icofont-tick-mark"></span> Deticated of adviser</li>
							<li><span class="icofont-tick-mark"></span> Personal investment report</li>
							<li><span class="icofont-tick-mark"></span> Asset location</li>
						</ul>

						<div class="work-btn">
							<a class="theme-btn btn-style-one" href="<?= ROOT ?>register"><span class="txt">start now</span></a>
						</div>
					</div>


				</div>

				<div class=" col-sm-6 col-md-4 plan">
					<div class="plan-inner">
						<h4 class="">Platinum </h4>
						<h3 class="">35%<sup>monthly</sup></h3>
						<h5><sup>from </sup>$60,000 -> $100,000</h5>
						<hr>

						<ul class="text-left">
							<li><span class="icofont-tick-mark"></span> All Premium features +</li>
							<li><span class="icofont-tick-mark"></span> Direct Spending features</li>
							<li><span class="icofont-tick-mark"></span> Account total investment control</li>
							<li><span class="icofont-tick-mark"></span> No commissions on any trade</li>
						</ul>

						<div class="work-btn">
							<a class="theme-btn btn-style-one" href="<?= ROOT ?>register"><span class="txt">start now</span></a>
						</div>
					</div>


				</div>

				<div class=" col-sm-6 col-md-4 plan">
					<div class="plan-inner">
						<h4 class="">Gold </h4>
						<h3 class="">40%<sup>monthly</sup></h3>
						<h5><sup>from </sup>$100,000 -> Above</h5>

						<hr>

						<ul class="text-left">
							<li><span class="icofont-tick-mark"></span> All Platinum features +</li>
							<li><span class="icofont-tick-mark"></span> No account maximum</li>
						</ul>

						<div class="work-btn">
							<a class="theme-btn btn-style-one" href="<?= ROOT ?>register"><span class="txt">start now</span></a>
						</div>
					</div>


				</div>
			</div>
		</div>

		<div class="container mt-5">
			<div class="sec-title">
				<h2>Bitcoin Investment made <span> simple</span></h2>
				<ul class="mt-5">
					<li>
						<h4><i class="icofont-brand-walmart"></i> Choose your best plan</h4>
					</li>
					<li>
						<h4><i class="icofont-brand-walmart"></i> Sign up in minutes</h4>
					</li>
					<li>
						<h4><i class="icofont-brand-walmart"></i> Fund account and start earning</h4>
					</li>
					<li>
						<h4><i class="icofont-brand-walmart"></i> No fees to deposit or withdraw</h4>
					</li>
					<li>
						<h4><i class="icofont-brand-walmart"></i> Withdraw your earnings</h4>
					</li>

				</ul>
			</div>
		</div>

		<!-- Main Footer -->
		<?php require_once(APP_ROOT . DS . 'includes' . DS . 'footer.php'); ?>

	</div>
	<!--End pagewrapper-->

	<!-- Search Popup -->

	<?php require_once(APP_ROOT . DS . 'includes' . DS . 'jslinks.php'); ?>

</body>

</html>