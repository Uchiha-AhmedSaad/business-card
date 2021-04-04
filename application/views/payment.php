    <!-- payment-->
    <div class="payment" style="margin-top: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block payment_collapse" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span><i class="far fa-check-square"> </i></span><span> <?php echo e_lang('bank account'); ?></span> 
                                    </button>
                                </h2>
                            </div>
                        
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="bank-account">
                                        <div class="card row bank_details">
                                          <div class="card-img col-3">
                                            <img src="<?php echo base_url('public/assets/images/earth.png'); ?>" alt="">
                                          </div>
                                          <div class="card-body">
                                            <p class="card-text col-8">
                                              <span class="name"><?php echo e_lang('Bank name'); ?>: </span><span><?php echo $setting->bank_name;  ?></span>
                                            </p>
                                            <p class="card-text col-8">
                                              <span class="name"><?php echo e_lang('Bank user owner'); ?>: </span><span><?php echo $setting->bank_own_account;  ?></span>
                                            </p>
                                            <p class="card-text col-8">
                                              <span class="name"><?php echo e_lang('account number'); ?>: </span><span><?php echo $setting->account_namber ; ?></span>
                                            </p>
                                          </div>
                                        </div>

                                        <div class="client_data">
                                            <span class="client_data_title">
                                                المبلغ: <span><?php echo $package->package_price; ?></span>
                                                <?php 
                                                    if (!empty($this->session->userdata('language')) && $this->session->userdata('language') == 'en') {
                                                       ?><span><?php echo $country->currency_en; ?></span> <?php
                                                    }
                                                    else{
                                                        ?><span><?php echo $country->currency_ar; ?></span> <?php
                                                    }
                                                 ?>
                                                
                                            </span>
                                        </div>
                                        <form action="<?php echo base_url('site/payment/'); ?>" method="POST" enctype="multipart/form-data">
                                            <div class="row client_data_inputs">
                                                <input type="hidden" name="payment_package_id" value="<?php  
                                                if(!empty($this->uri->segment(3))){echo $this->uri->segment(3);}
                                                else{echo $_GET['package_id'];}
                                                ?>">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                      <label for="name-add"><?php echo e_lang('transfer username'); ?></label>
                                                      <input class="form-control" type="text" name="user_name" value="<?php echo set_value('user_name'); ?>" id="name-add" placeholder="<?php echo e_lang('username'); ?>">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                      <label for="name-add"><?php echo e_lang('bank name'); ?></label>
                                                      <input value="<?php echo set_value('bank_name'); ?>" class="form-control" type="text" name="bank_name" id="name-add" placeholder="أسم البنك">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                      <label for="name-add"><?php echo e_lang('account number'); ?></label>
                                                      <input class="form-control" type="text" value="<?php echo set_value('account_number'); ?>" name="account_number" id="name-add" placeholder="458685462">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="up_btn">
                              
                                                        <input type="file" name="payment_pictures[]" id="file" onchange="showImage(this)" data-multiple-caption="{count} files selected" multiple/>
                                                        <div class="upload text-center"><?php echo e_lang('Choose picture'); ?></div>
                                                    </div>  
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                      <label for="notes"><?php echo e_lang('Notes'); ?></label>
                                                      <textarea name="notes" id="notes" class="form-control ad_details_area"><?php echo set_value('notes'); ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-center">
                                                    <button type="submit" class="btn btn-info subm"><?php echo e_lang('Send'); ?></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div> <!-- bank account -->
                                </div> <!-- card body -->
                            </div> <!-- collapseOne -->
                        </div> <!-- card -->
                    </div> <!-- accourding -->
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </div>
    <!-- end payment-->