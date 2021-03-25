    <!-- add job -->
    <div class="add_job">
        <div class="container-fluid">
            <form action="<?php echo base_url('site/addJob'); ?>" method="POST" enctype="multipart/form-data">
                <div class="job_details_container row">
                    <div class="col-sm-12 col-lg-12">
                        <div class="form-group">
                          <label for="details" class="add_job_label"><?php echo e_lang('Details'); ?></label>
                          <textarea name="details"  class="form-control ad_details_area"><?php echo set_value('job_info') ?></textarea>
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-12">
                        <div class="form-group">
                          <label for="job_name"><?php echo e_lang('Name'); ?></label>
                          <input class="form-control" value="<?php echo set_value('job_name')?>" type="text" name="job_name" id="job_name" placeholder="<?php echo e_lang('Name'); ?>">
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-12 ad_type">
                        <div class="form-group jon_type">
                          <input type="radio" name="job_type" value="job" id="job" placeholder="إسم">
                          <label for="job"><?php echo e_lang('Job'); ?></label>
                          <input type="radio" name="job_type" value="work" id="work" placeholder="إسم">
                          <label for="work"><?php echo e_lang('workers'); ?></label>
                        </div>
                    </div>


                    <div class="col-sm-12 col-md-6">
                       <div class="form-group">
                          <label for="job_country_id"><?php echo e_lang('Country'); ?></label>
                          <select name="job_country_id" id="job_country_id" class="form-control search_select">
                             <option selected disabled><?php echo e_lang('choose country'); ?></option>
                             <?php 
                                foreach ($countries as $key => $country) {
                                  ?> 
                                      <option value="<?php echo $key; ?>"><?php echo $country; ?></option>
                                  <?php
                                }
                              ?>
                          </select>
                       </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                       <div class="form-group">
                          <label for="job_city_id"><?php echo e_lang('City'); ?></label>
                          <select id="city" name="job_city_id" class="form-control search_select">
                             <option selected disabled><?php echo e_lang('Choose City'); ?></option>

                          </select>
                       </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                       <div class="form-group">
                          <label for="job_cat_id"><?php echo e_lang('Category'); ?></label>
                          <select id="job_cat_id" name="job_cat_id" class="form-control search_select">
                             <option selected disabled><?php echo e_lang('Choose category'); ?></option>
                             <?php 
                                foreach ($categories as $key => $value) {
                                  ?> 
                                      <option value="<?php echo $key; ?> "><?php echo $value; ?></option>
                                  <?php
                                }
                              ?>
                          </select>
                       </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                          <label for="job_email"><?php echo e_lang('Email'); ?></label>
                          <input value="<?php echo set_value('job_email')?>" class="form-control" type="email" name="job_email" id="job_email" placeholder="Email@example.com">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                          <label for="name-add"><?php echo e_lang('Phone'); ?></label>
                          <input value="" class="form-control" type="text" name="job_telephone" id="name-add" placeholder="0123456789">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                          <label for="name-add" class="add_job_label"><?php echo e_lang('information about you'); ?></label>
                          <textarea name="job_info" class="form-control ad_details_area"><?php echo set_value('job_info')?></textarea>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <label><?php echo e_lang('Add Picture'); ?></label><br />
                        <div class="up_btn">
                            <input type="file" value="" name="job_pictures[]" id="file" onchange="showImage(this)" data-multiple-caption="{count} files selected" multiple/>
                            <div class="upload text-center"><?php echo e_lang('Add picture'); ?></div>
                        </div> 
  
                    </div>
                    <div class="col-sm-12 col-md-6">
                       <div class="form-group">
                          <label for="job_country_id"><?php echo e_lang('Package'); ?></label>
                          <select name="job_country_id" id="job_country_id" class="form-control search_select">
                             <option selected disabled><?php echo e_lang('choose country'); ?></option>
                          </select>
                       </div>
                    </div>
                    <div class="col-12 add_job_btn">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-info add_job_button"><?php echo e_lang('Add Job') ?></button>
                            <div class="dropdown btn-group">
                                <a class="btn btn-outline-info dropdown-toggle choose_bouquet_btn" href="" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    أختر الباقة
                                </a>
                            </div>
                        </div>
                    </div>

                </div><!-- row -->
            </form>
        </div> <!-- container -->
    </div>
    <!-- end add job -->