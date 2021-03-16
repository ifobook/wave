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
                <img src="images/background/7.jpg" alt="">
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
                            <div class="text">The page you are looking for cannot be found<br> United State America</div>

                            <a href="<?=ROOT?>home" class="theme-btn btn-style-one"><span class="txt">Send Message</span></a>

                        </div>


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