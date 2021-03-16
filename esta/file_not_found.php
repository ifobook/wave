<?php
    require_once('includes/header.php');
    require_once('includes/navs.php');
?>
        <title><?=SITE_NAME?> :: 404</title>
        <div id="wrapper-content" class="clearfix ">
            <div class="page404" style="background-image:url(https://themes.g5plus.net/beyot/wp-content/themes/g5-beyot/assets/images/bg-404.jpg); background-size: cover; background-position: top center; background-repeat: repeat;">
                <div class="page404-content container">
                    <h3 class="subtitle">Oops, Its not you!,<br> It's US! </h3>
                    <h2 class="title">4<span>0</span>4</h2>
                    <div class="description">We are really sorry but the page you requested is missing  or not reachable <br><span class="return-text"></span>
                        <a href="home">
                            Go to homepage </a>
                    </div>
                    
                </div>
            </div>
        </div>

        <footer class="main-footer-wrapper footer-bg-2-colors">
            <div id="wrapper-footer">
            </div>
        </footer>
    </div>

    <a class="back-to-top" href="javascript:;">
        <i class="fa fa-angle-up"></i>
    </a>
    <div class="mobile-nav-overlay"></div>

    <?php require_once('includes/reg_modal.php');?>

    <script type="text/html" id="tmpl-ere-processing-template">
        <div class="ere-processing">
            <div class="loading">
                <i class="{{{data.ico}}}"></i><span>{{{data.text}}}</span>
            </div>
        </div>
    </script>
    <script type="text/html" id="tmpl-ere-alert-template">
        <div class="ere-alert-popup">
            <div class="content-popup">
                <div class="message">
                    <i class="{{{data.ico}}}"></i><span>{{{data.text}}}</span>
                </div>
                <div class="btn-group">
                    <a href="javascript:void(0)" class="btn-close">Close</a>
                </div>
            </div>
        </div>
    </script>
    <script type="text/html" id="tmpl-ere-dialog-template">
        <div class="ere-dialog-popup" id="ere-dialog-popup">
            <div class="content-popup">
                <div class="message">
                    <i class="{{{data.ico}}}"></i><span>{{{data.message}}}</span>
                </div>
            </div>
        </div>
    </script>
    <div id="compare-listings" class="compare-listing">
        <div class="compare-listing-header">
            <h4 class="title"> Compare</h4>
        </div>
        <div id="compare-properties-listings">
        </div>
    </div>
    <script type="text/javascript">
        var ere_widget_ids = [];
        var ere_captcha_site_key = '6Lc1RbcZAAAAACtY9ygqYymrwjALaER4-IFqnTkm';
        /**
         * reCAPTCHA render
         */
        var ere_recaptcha_onload_callback = function() {
            jQuery('.ere-google-recaptcha').each(function(index, el) {
                var widget_id = grecaptcha.render(el, {
                    'sitekey': ere_captcha_site_key
                });
                ere_widget_ids.push(widget_id);
            });
        };
        /**
         * reCAPTCHA reset
         */
        var ere_reset_recaptcha = function() {
            if (typeof ere_widget_ids != 'undefined') {
                var arrayLength = ere_widget_ids.length;
                for (var i = 0; i < arrayLength; i++) {
                    grecaptcha.reset(ere_widget_ids[i]);
                }
            }
        };
    </script>
    <div id="search_popup_wrapper" class="dialog">
        <div class="dialog__overlay"></div>
        <div class="dialog__content">
            <div class="morph-shape">
                <svg xmlns="https://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 520 280" preserveAspectRatio="none">
                    <rect x="3" y="3" fill="none" width="516" height="276" />
                </svg>
            </div>
            <div class="dialog-inner">
                <h2>Enter your keyword</h2>
                <form method="get" action="https://themes.g5plus.net/beyot/" class="search-popup-inner">
                    <input type="text" name="s" placeholder="Type and hit enter...">
                    <button class="bt bt-sm bt-background bt-primary" type="submit">Search</button>
                </form>
                <div><a class="action prevent-default" data-dialog-close="close" href="#"><i class="fa fa-close transition03"></i></a></div>
            </div>
        </div>
    </div>
    <link rel='stylesheet' id='g5plus-theme-showcase-css' href="https://themes.g5plus.net/beyot/wp-content/plugins/theme-showcase/assets/frontend/style.css?ver=5.3.4" type='text/css' media='all' />
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wpcf7 = {
            "apiSettings": {
                "root": "https:\/\/themes.g5plus.net\/beyot\/wp-json\/contact-form-7\/v1",
                "namespace": "contact-form-7\/v1"
            },
            "cached": "1"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://themes.g5plus.net/beyot/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.1.6'></script>
    <script type='text/javascript' src="https://themes.g5plus.net/beyot/wp-content/plugins/essential-real-estate/public/assets/js/jquery.validate.min.js?ver=1.17.0"></script>
    <script type='text/javascript' src='https://themes.g5plus.net/beyot/wp-includes/js/imagesloaded.min.js?ver=3.2.0'></script>
    <script type='text/javascript' src='https://maps-api-ssl.google.com/maps/api/js?libraries=places&#038;language=en_US&#038;key=AIzaSyDiMIj9qJw-InawUWnu7kUK4GjDQ7dktMQ&#038;ver=2.0.9'></script>
    <script type='text/javascript' src="https://themes.g5plus.net/beyot/wp-content/plugins/essential-real-estate/public/assets/js/infobox.min.js?ver=1.1.13"></script>
    <script type='text/javascript' src="https://themes.g5plus.net/beyot/wp-content/plugins/essential-real-estate/public/assets/packages/owl-carousel/owl.carousel.min.js?ver=2.1.0"></script>
    <script type='text/javascript' src='https://themes.g5plus.net/beyot/wp-includes/js/underscore.min.js?ver=1.8.3'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var _wpUtilSettings = {
            "ajax": {
                "url": "\/beyot\/wp-admin\/admin-ajax.php"
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://themes.g5plus.net/beyot/wp-includes/js/wp-util.min.js?ver=5.3.4'></script>
    <script type='text/javascript' src='https://themes.g5plus.net/beyot/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4'></script>
    <script type='text/javascript' src='https://themes.g5plus.net/beyot/wp-includes/js/jquery/ui/widget.min.js?ver=1.11.4'></script>
    <script type='text/javascript' src='https://themes.g5plus.net/beyot/wp-includes/js/jquery/ui/mouse.min.js?ver=1.11.4'></script>
    <script type='text/javascript' src='https://themes.g5plus.net/beyot/wp-includes/js/jquery/ui/slider.min.js?ver=1.11.4'></script>
    <script type='text/javascript' src='https://themes.g5plus.net/beyot/wp-includes/js/jquery/ui/resizable.min.js?ver=1.11.4'></script>
    <script type='text/javascript' src='https://themes.g5plus.net/beyot/wp-includes/js/jquery/ui/draggable.min.js?ver=1.11.4'></script>
    <script type='text/javascript' src='https://themes.g5plus.net/beyot/wp-includes/js/jquery/ui/button.min.js?ver=1.11.4'></script>
    <script type='text/javascript' src='https://themes.g5plus.net/beyot/wp-includes/js/jquery/ui/position.min.js?ver=1.11.4'></script>
    <script type='text/javascript' src='https://themes.g5plus.net/beyot/wp-includes/js/jquery/ui/dialog.min.js?ver=1.11.4'></script>
    <script type='text/javascript' src='https://themes.g5plus.net/beyot/wp-includes/js/jquery/ui/sortable.min.js?ver=1.11.4'></script>
    <script type='text/javascript' src="https://themes.g5plus.net/beyot/wp-content/plugins/essential-real-estate/public/assets/packages/jquery-ui/jquery.ui.touch-punch.min.js?ver=0.2.3"></script>
    <script type='text/javascript' src="https://themes.g5plus.net/beyot/wp-content/plugins/essential-real-estate/public/assets/packages/bootstrap/js/bootstrap.min.js?ver=3.4.1"></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var ere_main_vars = {
            "ajax_url": "\/beyot\/wp-admin\/admin-ajax.php",
            "confirm_yes_text": "Yes",
            "confirm_no_text": "No",
            "loading_text": "Processing, Please wait...",
            "sending_text": "Sending email, Please wait...",
            "decimals": "0",
            "dec_point": ".",
            "thousands_sep": ","
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src="https://themes.g5plus.net/beyot/wp-content/plugins/essential-real-estate/public/assets/js/ere-main.js?ver=2.0.9"></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var ere_compare_vars = {
            "ajax_url": "\/beyot\/wp-admin\/admin-ajax.php",
            "compare_button_url": "https:\/\/themes.g5plus.net\/beyot\/compare\/",
            "alert_title": "Information!",
            "alert_message": "Only allowed to compare up to 4 properties!",
            "alert_not_found": "Compare Page Not Found!"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src="https://themes.g5plus.net/beyot/wp-content/plugins/essential-real-estate/public/assets/js/property/ere-compare.js?ver=2.0.9"></script>
    <script type='text/javascript' src="https://themes.g5plus.net/beyot/wp-content/plugins/essential-real-estate/public/assets/js/ere-carousel.js?ver=2.0.9"></script>
    <script type='text/javascript' src='https://themes.g5plus.net/beyot/wp-content/themes/g5-beyot/assets/plugins/light-gallery/js/lightgallery-all.min.js?ver=1.2.18'></script>
    <script type='text/javascript' src='https://themes.g5plus.net/beyot/wp-content/plugins/js_composer/assets/lib/bower/isotope/dist/isotope.pkgd.min.js?ver=6.0.5'></script>
    <script type='text/javascript' src='https://themes.g5plus.net/beyot/wp-content/themes/g5-beyot/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js?ver=0.6.11'></script>
    <script type='text/javascript' src='https://themes.g5plus.net/beyot/wp-content/themes/g5-beyot/assets/plugins/waypoints/jquery.waypoints.min.js?ver=4.0.1'></script>
    <script type='text/javascript' src='https://themes.g5plus.net/beyot/wp-content/themes/g5-beyot/assets/plugins/modernizr/modernizr.min.js?ver=3.5.0'></script>
    <script type='text/javascript' src='https://themes.g5plus.net/beyot/wp-content/themes/g5-beyot/assets/plugins/dialogfx/dialogfx.min.js?ver=1.0.0'></script>
    <script type='text/javascript' src='https://themes.g5plus.net/beyot/wp-content/themes/g5-beyot/assets/plugins/infinite-scroll/infinite-scroll.pkgd.min.js?ver=2.0.1'></script>
    <script type='text/javascript' src='https://themes.g5plus.net/beyot/wp-content/themes/g5-beyot/assets/plugins/jquery.nav/jquery.nav.min.js?ver=3.0.0'></script>
    <script type='text/javascript' src='https://themes.g5plus.net/beyot/wp-content/themes/g5-beyot/assets/plugins/stellar/stellar.min.js?ver=0.6.2'></script>
    <script type='text/javascript' src='https://themes.g5plus.net/beyot/wp-content/themes/g5-beyot/assets/plugins/countdown/countdown.min.js?ver=0.6.2'></script>
    <script type='text/javascript' src='https://themes.g5plus.net/beyot/wp-content/themes/g5-beyot/assets/plugins/waypoints/jquery.waypoints.min.js?ver=4.0.1'></script>
    <script type='text/javascript' src='https://themes.g5plus.net/beyot/wp-content/themes/g5-beyot/assets/plugins/matchmedia/matchmedia.min.js?ver=4.0.1'></script>
    <script type='text/javascript' src='https://themes.g5plus.net/beyot/wp-content/themes/g5-beyot/assets/plugins/hc-sticky/jquery.hc-sticky.min.js?ver=1.2.43'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var g5plus_framework_constant = {
            "carousel_next": "Next",
            "carousel_prev": "Back"
        };
        var g5plus_app_variable = {
            "ajax_url": "https:\/\/themes.g5plus.net\/beyot\/wp-admin\/admin-ajax.php",
            "theme_url": "https:\/\/themes.g5plus.net\/beyot\/wp-content\/themes\/g5-beyot\/",
            "site_url": "https:\/\/themes.g5plus.net\/beyot"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://themes.g5plus.net/beyot/wp-content/themes/g5-beyot/assets/js/main.min.js?ver=5.3.4'></script>
    <script type='text/javascript' src="https://themes.g5plus.net/beyot/wp-content/plugins/beyot-framework/core/xmenu/assets/js/app.min.js?ver=1.0.0.0"></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var ere_login_vars = {
            "ajax_url": "\/beyot\/wp-admin\/admin-ajax.php",
            "loading": "Sending user info, please wait..."
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src="https://themes.g5plus.net/beyot/wp-content/plugins/essential-real-estate/public/assets/js/account/ere-login.js?ver=2.0.9"></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var ere_register_vars = {
            "ajax_url": "\/beyot\/wp-admin\/admin-ajax.php",
            "loading": "Sending user info, please wait..."
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src="https://themes.g5plus.net/beyot/wp-content/plugins/essential-real-estate/public/assets/js/account/ere-register.js?ver=2.0.9"></script>
    <script type='text/javascript' src='https://www.google.com/recaptcha/api.js?render=explicit&#038;onload=ere_recaptcha_onload_callback&#038;ver=2.0.9'></script>
    <script type='text/javascript' src="https://themes.g5plus.net/beyot/wp-content/plugins/theme-showcase/assets/frontend/showcase.js?ver=5.3.4"></script>
    <script>
        jQuery("style#xmenu_custom_style").append("@media screen and (min-width: 992px) {}");
    </script>
    <script>
        jQuery("style#xmenu_custom_style").append("@media screen and (min-width: 992px) {}");
    </script>
    <script type="text/javascript">
        jQuery(function($) {
            // The trick
            if (/ip(hone|od)|ipad/i.test(navigator.userAgent)) {
                $("body").css("cursor", "pointer");
            }
        });
    </script>
</body>

</html>