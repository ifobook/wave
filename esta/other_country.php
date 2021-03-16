<?php require_once('includes/header.php') ?>
<?php require_once('includes/navs.php') ?>

<title><?=SITE_NAME?> :: OTHER COUNTRIES</title>

<div id="wrapper-content" class="clearfix ">
    <section class="page-title page-title-background" style="padding-top:120px;padding-bottom:120px">
        <div class="page-title-background page-title-parallax" style="background-image: url(https://themes.g5plus.net/beyot/wp-content/plugins/beyot-framework/assets/images/theme-options/page-title.jpg)" data-stellar-background-ratio="0.5"></div>
        <div class="vc_row-background-overlay" style="background-color: rgba(0,0,0,0.68)"></div>
        <div class="container">
            <div class="page-title-inner">
                <div class="page-title-main-info">
                    <h1>PROPERTIES</h1>
                    <p>"find properties at CHINA, UAE and other countries"</p>
                </div>
                <ul class="breadcrumbs">
                    <li><a href="<?= ROOT ?>" class="home">Home</a></li>
                    <li><span>Other properties</span></li>
                </ul>
            </div>
        </div>
    </section>
    <div id="primary-content" class="pd-top-100 pd-bottom-100 sm-pd-top-80 sm-pd-bottom-80">
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-9 col-md-push-3 archive-property-inner">
                    <div id="container">
                        <div id="content" role="main">
                            <div class="ere-archive-property-wrap ere-property-wrap">
                                <div class="ere-archive-property archive-property">
                                    <div class="above-archive-property">
                                        <div class="ere-heading">
                                            <h2>Properties <sub></sub></h2>
                                        </div>
                                        <div class="archive-property-action property-status-filter">
                                            <div class="archive-property-action-item">
                                                <div class="property-status property-filter">
                                                    <ul>
                                                        <li class="active"><a data-status="all" href="<?= ROOT ?>properties" title="All">All</a></li>
                                                        <li><a data-status="uk properties" href="<?= ROOT ?>uk_properties" title="For Rent">UK</a></li>
                                                        <li><a data-status="usa properties" href="<?= ROOT ?>us_properties" title="For Sale">USA</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="archive-property-action-item sort-view-property">
                                                <div class="sort-property property-filter">
                                                </div>
                                                <div class="view-as" data-admin-url="/beyot/wp-admin/admin-ajax.php"> <span data-view-as="property-list" class="view-as-list" title="View as List"> <i class="fa fa-list-ul"></i>
                                                    </span> <span data-view-as="property-grid" class="view-as-grid" title="View as Grid"> <i class="fa fa-th-large"></i> </span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ere-property clearfix property-list col-gap-30 list-1-column columns-2 columns-md-2 columns-sm-2 columns-xs-1 columns-mb-1">
                                        <?php
                                        $listing = " ";
                                        $sql = "SELECT * FROM properties WHERE country = 'others'";
                                        $result = $conn->query($sql);
                                        while ($data = $result->fetch_assoc()) {
                                            extract($data);
                                            echo $listing ?>

                                            <div class="mg-bottom-30 ere-item-wrap ere-property-featured">
                                                <div class="property-inner">
                                                    <div class="property-image"> <img style="width: 30rem; max-height: 18rem;" src="<?=$image1?>" alt="Single House Near, Los Angeles" title="view">
                                                        <div class="property-action block-center">
                                                            <div class="block-center-inner">
                                                                <div class="property-view-gallery-wrap" data-toggle="tooltip" title="(5) Photos"> <a data-property-id="771" href="javascript:void(0)" class="property-view-gallery"><i class="fa fa-camera"></i></a></div>
                                                            </div> <a class="property-link" href="<?=ROOT?>view?property=<?=$p_id?>" title="view"></a>
                                                        </div>

                                                        <div class="property-label property-featured">
                                                            <p class="label-item">
                                                                <span class="property-label-bg"><?= $status ?> <span class="property-arrow"></span>
                                                                </span>
                                                            </p>
                                                        </div>
                                                       
                                                    </div>
                                                    <div class="property-item-content">
                                                        <div class="property-heading">
                                                            <h2 class="property-title"><a href="<?=ROOT?>view?property=<?=$p_id?>" title="view"><?=$name?></a></h2>
                                                            <div class="property-price"><span class="property-price-postfix" style="font-size: large;"><?=$price?></span></div>
                                                        </div>
                                                        <div class="property-location" title="1911 Sunset Blvd Los Angeles, CA 90026"> <i class="fa fa-map-marker"></i> <a><span><?=$address?></span></a>
                                                        </div>
                                                        <div class="property-element-inline">
                                                            <div class="property-type-list"> <i class="fa fa-tag"></i> <a title="House"><span><?=$type?> </span></a></div>
                                                            <div class="property-agent"> <a title="Abody Swedey"> <i class="fa fa-map-marker"></i>
                                                                    <span><?=$city?></span> </a></div>
                                                            <div class="property-date"> <i class="fa fa-home"></i><?=$country?></div>
                                                        </div>
                                                        <div class="property-excerpt">
                                                            <p><?=$description?></p>
                                                        </div>
                                                        <div class="property-info">
                                                            <div class="property-info-inner">
                                                                <div class="property-area">
                                                                    <div class="property-area-inner property-info-item-tooltip" data-toggle="tooltip" title="Size"> <span class="fa fa-arrows"></span> <span class="property-info-value"><?=$size?> SqFt
                                                                        </span></div>
                                                                </div>
                                                                <div class="property-bedrooms">
                                                                    <div class="property-bedrooms-inner property-info-item-tooltip" data-toggle="tooltip" title="Bedrooms">
                                                                        <span class="fa fa-hotel"></span> <span class="property-info-value"><?=$bedroom?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="property-bathrooms">
                                                                    <div class="property-bathrooms-inner property-info-item-tooltip" data-toggle="tooltip" title="Bathrooms">
                                                                        <span class="fa fa-bath"></span> <span class="property-info-value"><?=$bathroom?></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php
                                        }
                                        ?>

                                        <div class="clearfix"></div>
                                        <div class="paging-navigation clearfix"> <span aria-current="page" class="page-numbers current">1</span> <a class="page-numbers" href="#">2</a> <a class="page-numbers" href="#">3</a> <a class="next page-numbers" href="#">Next</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="primary-sidebar sidebar col-md-3 col-md-pull-9 sidebar-mobile-canvas">
                
                <aside id="ere_widget_recent_properties-2" class="widget ere_widget ere_widget_recent_properties ere-property">
                                <h4 class="widget-title"><span>Recent Properties</span></h4>
                                <div class="list-recent-properties">
                                    <div class="owl-carousel" data-plugin-options='{"items":1, "dots": true, "nav": false, "autoplay": true, "loop": true, "responsive": {}}'>

                                        <?php
                                        $count = 0;
                                        for ($count = 0; $count < 3; $count++) {
                                            $listing = " ";
                                            $sql = "SELECT * FROM properties ORDER BY RAND() LIMIT 1";
                                            $result = $conn->query($sql);
                                            $data = $result->fetch_assoc();
                                            extract($data);
                                            echo $listing ?>

                                            <div class="property-item">
                                                <div class="property-inner">
                                                    <div class="property-image"> <img style="max-height: 25rem;" src="<?=$image1?>" alt="" title="view">
                                                        <div class="property-action block-center">
                                                            <div class="block-center-inner">
                                                                <div class="property-view-gallery-wrap" data-toggle="tooltip" title="(5) Photos"> <a data-property-id="4473" href="javascript:void(0)" class="property-view-gallery"><i class="fa fa-camera"></i></a></div>
                                                            </div> <a class="property-link" href="<?=ROOT?>view?property=<?=$p_id?>" title="view"></a>
                                                        </div>

                                                        <div class="property-label property-featured">
                                                            <p class="label-item">
                                                                <span class="property-label-bg"><?= $status ?> <span class="property-arrow"></span>
                                                                </span>
                                                            </p>
                                                        </div>
                                                       
                                                    </div>
                                                    <div class="property-item-content">
                                                        <h2 class="property-title"><a href="<?=ROOT?>view?property=<?=$p_id?>" title="view"><?=$name?></a></h2>
                                                        <div class="property-price"> <span class="property-price-postfix"><?=$price?></span></div>
                                                        <div class="property-location"> <i class="fa fa-map-marker"></i> <a><span><?=$address?></span></a></div>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php
                                        }
                                        ?>
                                        
                                    </div>
                                </div>
                            </aside>


                            <aside id="ere_widget_featured_properties-2" class="widget ere_widget ere_widget_featured_properties ere-property">
                                <h4 class="widget-title"><span>Featured Properties</span></h4>
                                <div class="list-featured-properties">
                                    <div class="owl-carousel" data-plugin-options='{"items":1, "dots": true, "nav": false, "autoplay": true, "loop": true, "responsive": {}}'>
                                    
                                    <?php
                                        $count = 0;
                                        for ($count = 0; $count < 4; $count++) {
                                            $listing = " ";
                                            $sql = "SELECT * FROM properties ORDER BY RAND() LIMIT 1";
                                            $result = $conn->query($sql);
                                            $data = $result->fetch_assoc();
                                            extract($data);
                                            echo $listing ?>

                                            <div class="property-item">
                                                <div class="property-inner">
                                                    <div class="property-image"> <img style="max-height: 25rem;" src="<?=$image1?>" alt="" title="view">
                                                        <div class="property-action block-center">
                                                            <div class="block-center-inner">
                                                                <div class="property-view-gallery-wrap" data-toggle="tooltip" title="(5) Photos"> <a data-property-id="4473" href="javascript:void(0)" class="property-view-gallery"><i class="fa fa-camera"></i></a></div>
                                                            </div> <a class="property-link" href="<?=ROOT?>view?property=<?=$p_id?>" title="view"></a>
                                                        </div>

                                                        <div class="property-label property-featured">
                                                            <p class="label-item">
                                                                <span class="property-label-bg"><?= $status ?> <span class="property-arrow"></span>
                                                                </span>
                                                            </p>
                                                        </div>
                                                       
                                                    </div>
                                                    <div class="property-item-content">
                                                        <h2 class="property-title"><a href="<?=ROOT?>view?property=<?=$p_id?>" title="view"><?=$name?></a></h2>
                                                        <div class="property-price"> <span class="property-price-postfix"><?=$price?></span></div>
                                                        <div class="property-location"> <i class="fa fa-map-marker"></i> <a><span><?=$address?></span></a></div>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php
                                        }
                                        ?>

                                    </div> <a class="ere-link-more" href="<?= ROOT ?>properties">More...</a>
                                </div>
                            </aside>

                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('includes/footer.php') ?>

</div> <a class="back-to-top" href="javascript:;"> <i class="fa fa-angle-up"></i> </a>
<div class="mobile-nav-overlay"></div>

<?php require_once('includes/reg_modal.php') ?>

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
    <div id="compare-properties-listings"></div>
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
<script>
    (function() {
        function addEventListener(element, event, handler) {
            if (element.addEventListener) {
                element.addEventListener(event, handler, false);
            } else if (element.attachEvent) {
                element.attachEvent('on' + event, handler);
            }
        }

        function maybePrefixUrlField() {
            if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
                this.value = "https://" + this.value;
            }
        }

        var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
        if (urlFields && urlFields.length > 0) {
            for (var j = 0; j < urlFields.length; j++) {
                addEventListener(urlFields[j], 'blur', maybePrefixUrlField);
            }
        }
        /* test if browser supports date fields */
        var testInput = document.createElement('input');
        testInput.setAttribute('type', 'date');
        if (testInput.type !== 'date') {

            /* add placeholder & pattern to all date fields */
            var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');
            for (var i = 0; i < dateFields.length; i++) {
                if (!dateFields[i].placeholder) {
                    dateFields[i].placeholder = 'YYYY-MM-DD';
                }
                if (!dateFields[i].pattern) {
                    dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
                }
            }
        }
    })();
</script>
<div id="search_popup_wrapper" class="dialog">
    <div class="dialog__overlay"></div>
    <div class="dialog__content">
        <div class="morph-shape"> <svg xmlns="https://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 520 280" preserveAspectRatio="none">
                <rect x="3" y="3" fill="none" width="516" height="276" /> </svg></div>
        <div class="dialog-inner">
            <h2>Enter your keyword</h2>
            <form method="get" action="https://themes.g5plus.net/beyot/" class="search-popup-inner"> <input type="text" name="s" placeholder="Type and hit enter..."> <button class="bt bt-sm bt-background bt-primary" type="submit">Search</button></form>
            <div><a class="action prevent-default" data-dialog-close="close" href="#"><i class="fa fa-close transition03"></i></a></div>
        </div>
    </div>
</div>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wpcf7 = {
        "apiSettings": {
            "root": "https:\/\/themes.g5plus.net\/beyot\/wp-json\/contact-form-7\/v1",
            "namespace": "contact-form-7\/v1"
        },
        "cached": "1"
    }; /* ]]> */
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
    }; /* ]]> */
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
    }; /* ]]> */
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
    }; /* ]]> */
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
    }; /* ]]> */
</script>
<script type='text/javascript' src='https://themes.g5plus.net/beyot/wp-content/themes/g5-beyot/assets/js/main.min.js?ver=5.3.4'></script>
<script type='text/javascript' src="https://themes.g5plus.net/beyot/wp-content/plugins/essential-real-estate/public/assets/js/property/ere-archive-property.js?ver=2.0.9"></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var ere_property_advanced_search_vars = {
        "ajax_url": "\/beyot\/wp-admin\/admin-ajax.php",
        "price_is_slider": "true",
        "enable_filter_location": "0"
    }; /* ]]> */
</script>
<script type='text/javascript' src="https://themes.g5plus.net/beyot/wp-content/plugins/essential-real-estate/public/templates/shortcodes/property-advanced-search/assets/js/property-advanced-search.js?ver=2.0.9"></script>
<script type='text/javascript' src='https://themes.g5plus.net/beyot/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=6.0.5'></script>
<script type='text/javascript' src="https://themes.g5plus.net/beyot/wp-content/plugins/beyot-framework/core/xmenu/assets/js/app.min.js?ver=1.0.0.0"></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var ere_login_vars = {
        "ajax_url": "\/beyot\/wp-admin\/admin-ajax.php",
        "loading": "Sending user info, please wait..."
    }; /* ]]> */
</script>
<script type='text/javascript' src="https://themes.g5plus.net/beyot/wp-content/plugins/essential-real-estate/public/assets/js/account/ere-login.js?ver=2.0.9"></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var ere_register_vars = {
        "ajax_url": "\/beyot\/wp-admin\/admin-ajax.php",
        "loading": "Sending user info, please wait..."
    }; /* ]]> */
</script>
<script type='text/javascript' src="https://themes.g5plus.net/beyot/wp-content/plugins/essential-real-estate/public/assets/js/account/ere-register.js?ver=2.0.9"></script>
<script type='text/javascript' src='https://www.google.com/recaptcha/api.js?render=explicit&#038;onload=ere_recaptcha_onload_callback&#038;ver=2.0.9'></script>
<script type='text/javascript' src="https://themes.g5plus.net/beyot/wp-content/plugins/theme-showcase/assets/frontend/showcase.js?ver=5.3.4"></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var mc4wp_forms_config = []; /* ]]> */
</script>
<script type='text/javascript' src='https://themes.g5plus.net/beyot/wp-content/plugins/mailchimp-for-wp/assets/js/forms-api.min.js?ver=4.7.4'></script>
<!--[if lte IE 9]>
<script type='text/javascript' src='https://themes.g5plus.net/beyot/wp-content/plugins/mailchimp-for-wp/assets/js/third-party/placeholders.min.js?ver=4.7.4'></script>
<![endif]-->
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