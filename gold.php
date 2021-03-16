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
                <img src="<?= ROOT ?>images/background/5.jpg" alt="" />
            </div>
        </div>

        <!-- Page Title Section -->
        <div class="page-title-section">
            <div class="auto-container">
                <h2>Invest and Buy <span> Gold</span></h2>
            </div>
        </div>
        <!-- End Page Title Section -->

        <!--Sidebar Page Container-->
        <div class="container mt-5">
            <div class="row">


                <!-- <div class=" col-sm-6 col-md-4 plan">
                    <div class="plan-inner">
                        <h4 class="">Standard </h4>
                        <h3 class="">15%<sup>monthly</sup></h3>
                        <h5><sup>from </sup>$10,000 -> $50,000</h5>
                        <hr>

                        <ul class="text-left">
                            <li><span class="icofont-tick-mark"></span> 0 fee on payment</li>
                            <li><span class="icofont-tick-mark"></span> 0 fee on withdrawals</li>
                        </ul>

                        <div class="work-btn mt-5">
                            <a class="theme-btn btn-style-one" href="<?= ROOT ?>register"><span class="txt">start now</span></a>
                        </div>
                    </div>


                </div>

                <div class=" col-sm-6 col-md-4 plan">
                    <div class="plan-inner">
                        <h4 class="">Premium </h4>
                        <h3 class="">20%<sup>monthly</sup></h3>
                        <h5><sup>from </sup>$50,000 -> $100,000</h5>
                        <hr>

                        <ul class="text-left">
                            <li><span class="icofont-tick-mark"></span> All Standerd features +</li>
                            <li><span class="icofont-tick-mark"></span> Personal investment report</li>
                        </ul>

                        <div class="work-btn mt-5">
                            <a class="theme-btn btn-style-one" href="<?= ROOT ?>register"><span class="txt">start now</span></a>
                        </div>
                    </div>


                </div> -->


                <div class=" col-sm-6 col-md-4 plan m-auto">
                    <div class="plan-inner">
                        <h4 class="">Gold </h4>
                        <h3 class="">30%<sup>monthly</sup></h3>
                        <h5><sup>from </sup>$50,000 -> Above</h5>

                        <hr>

                        <ul class="text-left">
                            <li><span class="icofont-tick-mark"></span> Min-deposit ~ $50,000</li>
                            <li><span class="icofont-tick-mark"></span> No account maximum</li>
                            <li><span class="icofont-tick-mark"></span> Instant Gold purchase</li>
                        </ul>

                        <div class="work-btn mt-5">
                            <a class="theme-btn btn-style-one" href="<?= ROOT ?>register"><span class="txt">start now</span></a>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4 sec-title">
                    <h2>Why Tradegatespro <span>Gold </span>Investments</h2>
                </div>
                <div class="col-md-6">
                    <p>Throughout history, gold has been seen as a special and valuable commodity. Today, owning gold can act as a hedge against inflation and deflation alike, as well as a good portfolio diversifier. As a global store of value, gold can also provide financial cover during geopolitical and macroeconomic uncertainty.
                    </p>
                    <p>Throughout the centuries, people have continued to hold gold for various reasons. Societies, and now economies, have placed value on gold, thus perpetuating its worth. It is the metal we fall back on when other forms of currency don't work, which means it always has some value as insurance against tough times.</p>
                    <p>Below are eight practical reasons to think about owning some gold today. Why You should Invest or Buy Gold; Weakness of the U.S. Dollar Inflation Hedge Deflation Protection Increasing Demand Supply Constraints Geopolitical Uncertainty Inflation Hedge.</p>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4 sec-title">
                    <h2>Live Prices</h2>
                </div>
                <div class="col-md-6 gold-cal">
                    <script type="text/javascript" src="https://www.gold-quote.net/widgets/gold-price-estimator/gen.php?lang=en"> </script>
                    <noscript> To get the <a href="http://www.gold-quote.net/widgets/gold-price-estimator">gold price</a>, please enable Javascript.</noscript>

                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4 sec-title">
                    <h2>Why Us?</h2>
                </div>
                <div class="col-md-6">
                    <p>We pride ourselves on customer service, providing our customers with tailored solutions on how to buy gold for investment. We also offer advice on how to protect your investment portfolio – from live market data to certified storage vaults. We accept many payment methods, and can give you cash for gold sold through us (with suitable notice given).</p>
                    <p>We are a family who has been trading gold since 1999, with members of staff with over 10 years’ experience in the gold business. With us you can buy and sell gold online at live market prices with our friendly, professional service, and store it in one of our certified vaults. We have loyal customers who have trusted us with their gold investments since we started. And we provide detailed information on the gold market.</p>
                </div>
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