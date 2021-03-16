<div class="modal modal-login fade" id="ere_signin_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <ul class="nav nav-tabs">
                <li class="active"> <a id="ere_login_modal_tab" href="#login" data-toggle="tab">Log in</a></li>
                <li><a id="ere_register_modal_tab" href="#register" data-toggle="tab">Register</a></li>
            </ul>
            <div class="tab-content ">
                <div class="tab-pane active" id="login">
                    <div class="ere-login-wrap">
                        <div class="ere_messages message"></div>
                        <form method="post" action="<?= ROOT ?>actions/login.php">
                            <div class="form-group control-username">
                                <input name="user_login" class="form-control control-icon login_user_login" placeholder="Username" type="text" /></div>
                            <div class="form-group control-password">
                                <input name="user_password" class="form-control control-icon" placeholder="Password" type="password" />
                            </div>
                            <div class="checkbox"> <label>
                                    <input name="remember" type="checkbox"> Remember me
                                </label></div> <input type="hidden" name="ere_security_login" value="247234f000" />
                            <a href="javascript:void(0)" class="ere-reset-password">Lost password</a>
                            <div class="ere-recaptcha-wrap clearfix">
                                <div class="ere-google-recaptcha"></div>
                            </div> <button type="submit" name="login" class=" btn btn-primary btn-block">Login</button>
                        </form>
                        <hr>

                    </div>
                    <div class="ere-reset-password-wrap" style="display: none">
                        <div class="ere-resset-password-wrap">
                            <div class="ere_messages message ere_messages_reset_password"></div>
                            <form method="post" enctype="multipart/form-data">
                                <div class="form-group control-username">
                                    <input name="user_login" class="form-control control-icon reset_password_user_login" placeholder="Enter your username or email">

                                    <input type="hidden" name="ere_security_reset_password" value="e367b81c17" />

                                    <input type="hidden" name="action" value="ere_reset_password_ajax">
                                    <div class="ere-recaptcha-wrap clearfix">

                                        <div class="ere-google-recaptcha"></div>
                                    </div> <button type="submit" class="btn btn-primary btn-block ere_forgetpass">Get
                                        new password</button>
                                </div>
                            </form>
                        </div> <a href="javascript:void(0)" class="ere-back-to-login">Back to Login</a>
                    </div>
                </div>
                <div class="tab-pane" id="register">
                    <div class="ere-register-wrap">
                        <div class="ere_messages message"></div>
                        <form method="post" action="<?= ROOT ?>actions/register.php">
                            <div class="form-group control-username">
                                <input name="user_name" class="form-control control-icon" type="text" placeholder="Username" /></div>
                            <div class="form-group control-email">
                                <input name="user_email" type="email" class="form-control control-icon" placeholder="Email" /></div>
                            <div class="form-group control-phone">
                                <input name="user_phone" type="phone" class="form-control control-icon" placeholder="Phone" /></div>
                            <div class="form-group control-password">
                                <input name="user_password" class="form-control control-icon" placeholder="Password" type="password" />
                            </div>
                            <div class="form-group control-ere-password">
                                <input name="password_retype" class="form-control control-icon" placeholder="Retype Password" type="password" /></div>
                            <div class="form-group control-term-condition">
                                <div class="checkbox"> <label>
                                        <input name="user_terms" type="checkbox"> I agree
                                        with your <a target="_blank" href="faq">Terms &amp; Conditions</a>
                                    </label></div>
                            </div>
                            <div class="ere-recaptcha-wrap clearfix">
                                <div class="ere-google-recaptcha"></div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f25105d1a544e2a7275bfb9/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

