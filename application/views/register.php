    <!-- register -->
    <div class="register login" style="margin: 20px 0px 0px 0px;">
        <div class="container">
            <h4 class="login_head"><?php echo e_lang('Register') ?></h4>
            <div class="register_form login-form">
                <form action="<?php echo base_url('site/register'); ?>" method="POST">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group code_label">
                            <label for="exampleInputEmail1"><?php echo e_lang('Name') ?> </label>
                            <input type="text" name="user_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="example@gmail.com" required>
                                <span class="req_nm">*</span>
                            </div>
                        </div>   

                        <div class="col-12 col-md-6">
                            <div class="form-group code_label">
                            <label for="exampleInputEmail1"><?php e_lang('Email'); ?></label>
                            <input type="email" name="user_email" class="form-control" id="user_email" aria-describedby="emailHelp"
                                placeholder="example@gmail.com" required>
                                <span class="req_em">*</span>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group code_label">
                            <label for="exampleInputEmail1"><?php echo  e_lang('Password');?></label>
                            <div class="passinp">
                                <input type="password"  name="user_pass" class="form-control pass_input" id="PassInput" aria-describedby="emailHelp"
                                placeholder="*************" required>
                                <span class="req_ps1">*</span>
                                <span><i class="far fa-eye-slash show_pass"></i> </span>
                            </div>
                            </div>
                        </div>  

                        <div class="col-12 col-md-6">
                            <div class="form-group code_label">
                            <label for="exampleInputEmail1"><?php echo e_lang('password confirmation'); ?></label>
                            <div class="passinp">
                                <input type="password" name="password_confirmation" class="form-control pass_input" id="PassInput" aria-describedby="emailHelp"
                                placeholder="*************" required>
                                <span><i class="far fa-eye-slash show_pass"></i> </span>
                                <span class="req_ps2">*</span>
                            </div>
                            </div>
                        </div>  


                        <div class="col-12">
                            <div class="form-check check_input">
                                <input class="form-check-input" type="checkbox" name="acceptterms" id="acceptterms" value="ok"
                                    checked>
                                <label class="form-check-label" for="rem_check">
                                    <a href="<?php echo base_url('site/terms') ?>"><?php echo e_lang('Accept terms') ?></a>
                                </label>
                            </div>
                        </div>

                        <div class="col-12 reg_btn">
                            <button type="submit" class="btn btn-info"><?php echo e_lang('Create account'); ?></button>
                        </div>
            

                    </div> <!-- row -->
                </form>
            </div> <!-- register form-->
        </div><!-- container-->
    </div> <!-- register -->