

<!-- add card -->
<div class="add_card" style="margin-top:50px; ">
   <div class="container-fluid">
      <div class="row">
         <div class="form_title text-center col-sm-12">
            <h4><?php echo e_lang('Add your Information'); ?></h4>
         </div>
        <form action="<?php echo base_url('site/addCard') ?>" method="POST" enctype="multipart/form-data">
           <!-- appears on lg screen only -->
           <div class="bm_sc d-lg-flex d-none row">
              <div class="col-md-4 fixed_div">
                 <!-- ads picture -->
                 <div class="row">
                    <div class="col-sm-12">
                       <div class="card_img">
                          <img src="<?php echo base_url('public/assets/images/card-1.png'); ?>" />
                       </div>
                       <div class="logo_upload text-center">
                          <h4><?php echo e_lang('Choose or upload logo'); ?></h4>
                          <div class="col-sm-12">
                             <!-- Button trigger modal -->
                             <button type="button" class="btn btn-outline-info" id="comar" >
                             <?php echo e_lang('choose logo'); ?>
                             </button>
                             <input type="file" style="display: none;" name="logo" id="logo_qqq">
                             <!-- Modal -->

                             <br>
                             <span><?php echo e_lang('choose file on size 200*200'); ?> </span> 
                          </div>
                       </div>
                       <div class="logo_container ">
                          <div class="logo_img text-center">
                             <img src="<?php echo base_url('public/assets/images/logo.png'); ?>">
                          </div>
                       </div>
                    </div>
                 </div>
                 <!-- row -->
              </div>
              <div class="col-md-8">
                 <div class="row subscribe_row">
                    <div class="col-sm-12 col-md-5">
                       <div class="form-group">
                          <label for="b_cards_name"><?php echo e_lang('Name'); ?></label>
                          <input type="text" name="b_cards_name" value="<?php echo set_value('b_cards_name'); ?>" class="form-control" id="b_cards_name">
                       </div>
                    </div>
                    <div class="col-sm-12 col-md-5">
                       <div class="form-group">
                          <label for="b_cards_name_en"><?php echo e_lang('Name on english'); ?></label>
                          <input type="text" name="b_cards_name_en" value="<?php echo set_value('b_cards_name_en'); ?>" class="form-control" id="b_cards_name_en">
                       </div>
                    </div>
                    <div class="col-sm-12 col-md-5">
                       <div class="form-group">
                          <label for="job"><?php echo e_lang('Job'); ?></label>
                          <input type="text" name="job" value="<?php echo set_value('job');  ?>" class="form-control" id="job">
                       </div>
                    </div>
                    <div class="col-sm-12 col-md-5">
                       <div class="form-group">
                          <label for="job_en"><?php echo e_lang('Job in english') ?></label>
                          <input type="text" name="job_en" value="<?php echo set_value('job_en'); ?>"  class="form-control" id="job_en">
                       </div>
                    </div>
                    <div class="col-sm-12 col-md-5">
                       <div class="form-group">
                          <label for="address"><?php echo e_lang('Address'); ?></label>
                          <input type="text" name="b_cards_address" value="<?php echo set_value('b_cards_address'); ?>"  class="form-control" id="address">
                       </div>
                    </div>
                    <div class="col-sm-12 col-md-5">
                       <div class="form-group">
                          <label for="eng_address"><?php echo e_lang('Address on english'); ?></label>
                          <input type="text" value="<?php echo set_value('b_cards_address_en'); ?>" name="b_cards_address_en" class="form-control" id="eng_address">
                       </div>
                    </div>
                    <div class="col-sm-12 col-md-5">
                       <div class="form-group">
                          <label for="b_cards_country_id"><?php echo e_lang('Country'); ?></label>
                          <select name="b_cards_country_id" id="b_cards_country_id" class="form-control search_select">
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
                    <div class="col-sm-12 col-md-5">
                       <div class="form-group">
                          <label for="city"><?php echo e_lang('City'); ?></label>
                          <select id="city" name="b_cards_city_id" class="form-control search_select">
                             <option selected disabled><?php echo e_lang('Choose City'); ?></option>

                          </select>
                       </div>
                    </div>

                    <div class="col-sm-12 col-md-5">
                       <div class="form-group">
                          <label for="b_cards_phone"><?php echo e_lang('Phone'); ?></label>
                          <input type="text" value="<?php echo set_value('b_cards_phone'); ?>" class="form-control" name="b_cards_phone" id="b_cards_phone">
                       </div>
                    </div>
                    <div class="col-sm-12 col-md-5">
                       <div class="form-group">
                          <label for="b_cards_cat_id"><?php echo e_lang('Category'); ?></label>
                          <select id="b_cards_cat_id" name="b_cards_cat_id" class="form-control search_select">
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
                    <div class="col-sm-12 col-md-5">
                       <div class="form-group">
                          <label for="email"><?php echo e_lang('Email'); ?></label>
                          <input type="email" name="email" value="<?php echo set_value('email'); ?>" class="form-control" id="email">
                       </div>
                    </div>
                    <div class="col-sm-12 col-md-5">
                       <div class="form-group">
                          <label for="b_cards_work"><?php echo e_lang('Work'); ?></label>
                          <input type="text" name="b_cards_work" value="<?php echo set_value('b_cards_work'); ?>"  class="form-control" id="b_cards_work">
                       </div>
                    </div>
                    <div class="col-sm-12 col-md-5">
                       <div class="form-group">
                          <label for="fb"><?php echo e_lang('Facebook'); ?></label>
                          <div class="input-group mb-3">
                             <div class="input-group-append">
                                <span class="input-group-text"  id="basic-addon2"><i class="fab fa-facebook"></i></span>
                             </div>
                             <input type="text" name="facebook" value="<?php echo set_value('facebook'); ?>" class="form-control" id="fb" aria-describedby="basic-addon2">
                          </div>
                       </div>
                    </div>
                    <div class="col-sm-12 col-md-5">
                       <div class="form-group">
                          <label for="tw"><?php echo e_lang('Twitter'); ?></label>
                          <div class="input-group mb-3">
                             <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2"><i class="fab fa-twitter"></i></span>
                             </div>
                             <input type="text" name="twitter" value="<?php echo set_value('twitter'); ?>" class="form-control" id="tw" aria-describedby="basic-addon2">
                          </div>
                       </div>
                    </div>
                    <div class="col-sm-12 col-md-5">
                       <div class="form-group">
                          <label for="linkedIn"><?php echo e_lang('linkedin'); ?></label>
                          <div class="input-group mb-3">
                             <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2"><i class="fab fa-linkedin"></i></span>
                             </div>
                             <input type="text" name="linkedin" value="<?php echo set_value('linkedin'); ?>" class="form-control" id="linkedIn" aria-describedby="basic-addon2">
                          </div>
                       </div>
                    </div>
                    <div class="col-sm-12 col-md-5">
                       <div class="form-group">
                          <label for="web"><?php echo e_lang('Website'); ?></label>
                          <div class="input-group mb-3">
                             <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2"><i class="fab fa-chrome"></i></span>
                             </div>
                             <input type="text" name="website" value="<?php echo set_value('website'); ?>" class="form-control" id="web" aria-describedby="basic-addon2">
                          </div>
                       </div>
                    </div>
                    <div class="col-sm-12 col-md-5">
                       <div class="form-group">
                          <label for="insta"><?php echo e_lang('instegram'); ?></label>
                          <div class="input-group mb-3">
                             <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2"><i class="fab fa-instagram"></i></span>
                             </div>
                             <input type="text" name="instegram" value="<?php echo set_value('instegram'); ?>" class="form-control" id="insta" aria-describedby="basic-addon2">
                          </div>
                       </div>
                    </div>
                    <div class="col-sm-12 col-md-5">
                       <div class="form-group">
                          <label for="snap"><?php echo e_lang('Snapchat'); ?></label>
                          <div class="input-group mb-3">
                             <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2"><i class="fab fa-snapchat"></i></span>
                             </div>
                             <input type="text" name="snapchat" value="<?php echo set_value('snapchat'); ?>" class="form-control" id="snap" aria-describedby="basic-addon2">
                          </div>
                       </div>
                    </div>
                    <div class="col-sm-10">
                       <div class="form-group">
                          <label for="description"><?php e_lang('Information about you'); ?></label>
                          <div class="description_area">
                             <textarea id="description" value="<?php echo set_value('about_info'); ?>" name="about_info" class="form-control">
                             </textarea>
                          </div>
                       </div>
                    </div>
                    <div class="col-md-7 col-sm-12">
                       <label><?php echo e_lang('Add picture'); ?></label><br />
                       <div class="up_btn">
                          <input type="file" name="files[]" id="file" onchange="showImage(this)" data-multiple-caption="{count} files selected" multiple/>
                          <div class="upload text-center"><?php echo e_lang('Choose pictures'); ?></div>
                       </div>
                       <div class="up_text"><?php echo e_lang('uploaded files'); ?></div>
                       <div class="up_img row">
                          <div class="up_img_cont col-sm-3">
                             <img src="assets/images/car-4.png" id="up" class="img-thumbnail" />
                             <i class="rem_icon"> <img src="<?php echo base_url('public/assets/images/remove.svg'); ?>" /></i>
                          </div>
                          <div class="up_img_cont col-sm-3">
                             <img src="assets/images/car-3.png" class="img-thumbnail" />
                             <i class="rem_icon"> <img src="<?php echo base_url('public/assets/images/remove.svg'); ?>" /></i>
                          </div>
                       </div>
                    </div>
                    <div class="col-sm-12">
                       <div class="opt_btn btn-group">
                          <div class="add_card_btn">
                             <a href="#" class="btn btn-outline-info"><i class="fas fa-angle-double-right"></i> <?php echo e_lang('Previous'); ?></a>
                          </div>
                          <div class="add_card_btn">
                             <div class="dropdown show">
                                <a class="btn btn-outline-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo e_lang('Choose Package'); ?>
                                </a>
                                <div class="dropdown-menu choose_bouq" aria-labelledby="dropdownMenuLink">
                                   <a class="dropdown-item" href="bouquet.html"><input type="radio" /> شهر واحد &nbsp;&nbsp;<i class="f-1 fas fa-angle-double-left"></i></a>
                                   <a class="dropdown-item" href="bouquet.html"><input type="radio" /> 3 شهور &nbsp;&nbsp;<i class="f-2 fas fa-angle-double-left"></i></a>
                                   <a class="dropdown-item" href="bouquet.html"><input type="radio" /> 6 شهور &nbsp;&nbsp;<i class="f-3 fas fa-angle-double-left"></i></a>
                                   <a class="dropdown-item" href="bouquet.html"><input type="radio" /> 12 شهور &nbsp;&nbsp;<i class="f-4 fas fa-angle-double-left"></i></a>
                                </div>
                             </div>
                          </div>
                          <div class="add_card_btn">
                             <button type="submit" class="btn btn-info"> <?php echo e_lang('Add Card'); ?></button>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <!-- appears on medium and small screens only -->
           <div class="s_sc d-lg-none d-block">
              <div class="hold_card row">
                 <div class="col-6">
                    <div class="card_img">
                       <img src="<?php echo base_url('public/assets/images/card-1.png'); ?>" />
                    </div>
                 </div>
                 <div class="col-6">
                    <div class="card_data">
                       <h5><?php echo e_lang('choose or upload logo'); ?></h5>
                    </div>
                    <div class="modal_cont">
                       <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#modal_div">
                       <?php echo e_lang('choose logo'); ?>
                       </button>
                       <!-- Modal -->
                       <div class="modal fade" id="modal_div" tabindex="-1" aria-labelledby="modal_lable" aria-hidden="true">
                          <div class="modal-dialog">
                             <div class="modal-content subscribe_modal">
                                <div class="modal-header">
                                   <h5 class="modal-title" id="modal_lable"><?php echo e_lang('Choose or upload logo'); ?></h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                                   </button>
                                </div>
                                <div class="modal-body">
                                   <div class="logo_container row">
                                      <div class="logo_icon">
                                         <img src="<?php echo base_url('public/assets/images/car-1.png'); ?>" class="selected" />
                                      </div>
                                      <div class="logo_icon">
                                         <img src="<?php echo base_url('public/assets/images/car-2.png'); ?>" />
                                      </div>
                                      <div class="logo_icon">
                                         <img src="<?php echo base_url('public/assets/images/car-3.png'); ?>" />
                                      </div>
                                      <div class="logo_icon">
                                         <img src="<?php echo base_url('public/assets/images/car-4.png'); ?>" />
                                      </div>
                                      <div class="logo_icon">
                                         <img src="<?php echo base_url('public/assets/images/car-2.png'); ?>" />
                                      </div>
                                      <div class="logo_icon">
                                         <img src="<?php echo base_url('public/assets/images/car-1.png'); ?>" />
                                      </div>
                                   </div>
                                </div>
                                <div class="modal-footer">
                                   <button type="button" class="btn btn-info"  data-dismiss="modal">تم</button>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="cd_size">
                       <h6><?php echo e_lang('upload image 200*200'); ?> </h6>
                    </div>
                    <div class="card_logo ">
                       <div class="logo_img text-center">
                          <img src="<?php echo base_url('public/assets/images/logo.png'); ?>">
                          <div class="close_ic">
                             <img src="<?php echo base_url('public/assets/images/close.svg'); ?>" />
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <!-- s_sc -->
        </form>
      </div>
      <!-- row -->
   </div>
</div>
<!-- end add card -->

