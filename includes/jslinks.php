<div class="search-popup">
    <button class="close-search style-two"><span class="icofont-brand-nexus"></span></button>
    <div class="search-inner">

        <form method="post" id="login_form" style="background: none;">
            <button class="theme-btn btn-style-one mt-3" id="signup_btn"><span class="txt">Create account</span></button>
            <!--Form Group-->
            <div class="form-group mt-3">
                <label>User Email</label>
                <input type="text" name="name" value="" placeholder="Jason Staham" required>
            </div>
            <!--Form Group-->
            <div class="form-group mt-3">
                <label>Password</label>
                <input type="password" name="password" id="password">
            </div>

            <a href="javascript:void(0)" id="resetpass_btn" class="d-block pt-3">I forgot my Password</a>

            <button class="theme-btn btn-style-one mt-5" type="submit" name="submit-form"><span class="txt">Login</span></button>

        </form>

        <form method="post" id="resetpass" style="background: none;">
            <button class="theme-btn btn-style-one mt-3 login_btn"><span class="txt">Login Instead</span></button>
            <!--Form Group-->
            <div class="form-group mt-3">
                <label>User Email</label>
                <input type="text" name="name" value="" placeholder="Jason Staham" required>
            </div>

            <button class="theme-btn btn-style-one mt-5" type="submit" name="submit-form"><span class="txt">Reset password</span></button>

        </form>

        <form method="post" id="signup_form" style="background: none;">
            <button class="theme-btn btn-style-one mt-3 login_btn"><span class="txt">Login Instead</span></button>
            <!--Form Group-->
            <div class="form-group mt-3">
                <label>full name</label>
                <input type="text" name="name" value="" placeholder="Jason Staham" required>
            </div>
            <!--Form Group-->
            <div class="form-group mt-3">
                <label>phone number</label>
                <input type="text" name="phone" value="" placeholder="Enter your phone number" required>
            </div>
            <!--Form Group-->
            <div class="form-group mt-3">
                <label>Email</label>
                <input type="email" name="email" value="" placeholder="Enter your Email address" required>
            </div>
            <!--Form Group-->
            <div class="form-group mt-3">
                <label>Select Investment</label>
                <select name="investment" id="investment">
                    <option value="bitcoin" >Bitcoin</option>
                    <option value="oil" >Oil</option>
                    <option value="gold">Gold</option>
                    <option value="real_estate"selected>Real Estate</option>
                </select>
            </div>

            <div class="form-group mt-3 plans">
                <label>Select Plan</label>
                <select name="plan" id="plan">
                </select>
            </div>

            <div class="form-group mt-3">
                <label>Password</label>
                <input type="password" name="password" id="password">
            </div>

            <div class="form-group mt-3">
                <label>Confirm Password</label>
                <input type="password" name="conf_pass" id="conf_pass">
            </div>

            <button class="theme-btn btn-style-one mt-3" type="submit" name="submit-form"><span class="txt">Create Account</span></button>

        </form>

    </div>
    <img src="<?= ROOT ?>images/icons/waves-shape.png" alt="">
</div>
<!-- End Header Search -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-up"></span></div>

<script src="<?= ROOT ?>js/jquery.js"></script>
<script src="<?= ROOT ?>js/popper.min.js"></script>
<script src="<?= ROOT ?>js/bootstrap.min.js"></script>
<script src="<?= ROOT ?>js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?= ROOT ?>js/jquery.fancybox.js"></script>
<script src="<?= ROOT ?>js/appear.js"></script>
<script src="<?= ROOT ?>js/owl.js"></script>
<script src="<?= ROOT ?>js/wow.js"></script>
<script src="<?= ROOT ?>js/parallax.min.js"></script>
<script src="<?= ROOT ?>js/tilt.jquery.min.js"></script>
<script src="<?= ROOT ?>js/jquery.paroller.min.js"></script>
<script src="<?= ROOT ?>js/jquery-ui.js"></script>
<script src="<?= ROOT ?>js/script.js"></script>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
    }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script src="<?= ROOT ?>js/m_script.js"></script>