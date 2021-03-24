    <!-- start login -->
    <div class="login" style="margin-top: 20px;">
        <div class="container">
            <h4 class="login_head"><?php echo e_lang('Login') ?></h4>


            <div class="login-form">


            <form action="<?php base_url('site/login') ?>" method="POST"    >
                <div class="row">

                <div class="col-sm-12 col-lg-12">
                    <div class="form-group code_label">
                    <label for="exampleInputEmail1"><?php echo e_lang('Email') ?></label>
                    <input type="email" class="form-control" name="user_email" value="<?php echo set_value('user_email')  ?>" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="example@gmail.com" required  >
                    </div>
                </div>
                <div class="col-sm-12 col-lg-12">
                    <div class="form-group code_label">
                    <label for="PassInput"><?php echo e_lang('Password') ?></label>
                    <div class="passinp">
                        <input type="password" name="user_pass" class="form-control pass_input" id="PassInput" aria-describedby="emailHelp"
                        placeholder="*************" required >
                        <span><i class="far fa-eye-slash show_pass"></i> </span>
                    </div>
                   
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check check_input">
                    <input class="form-check-input" type="checkbox" name="exampleRadios" id="rem_check" value="option1"
                        checked>
                    <label class="form-check-label" for="rem_check">
                        <?php echo e_lang('Password'); ?>
                    </label>
                    </div>
                </div>

                <div class="col-6 txt-l forget_link">
                    <a href="forget_password.html">هل نسيت كلمة المرور ؟</a>
                </div>

                <div class="col-sm-12 col-lg-12">
                    <div class="btn-login">
                    <button type="submit" class="btn btn-info">تسجيل الدخول</button>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-12 txt-c reg_link">
                    <p>لست مشترك؟ <a href="register.html">انشاء حساب جديد</a></p>
                </div>
                </div>
            </form>

            </div> <!-- login form -->
        </div> <!-- container -->
    </div> <!-- login -->
    <!-- end login -->