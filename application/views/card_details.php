    <!-- card details -->
    <div class="card_details_content">
        <div class="container">
            <div class="profile_details">
                <div class="row">
                    <div class="col-2 text-center">
                        <div class="profile_img">
                            <img src="<?php echo $logo; ?>" />
                        </div>
                    </div>
  
                    <div class="col-4-12 pn text-right">
                        <div class="profile_name">
                            <p>على محمد</p>
                        </div>
                    </div>
  
                    <!-- this one appears on medium and big screens only -->
                    <div class="col-9 save_cont_col">
                      <div class="add_contact_btn">
                          <button class="btn btn-info"><?php echo e_lang('Save contact'); ?> <i class="fas fa-plus"></i></button>
                      </div>
                    </div>
                    
  
                </div> <!-- row -->
            </div> <!-- profile details -->
  
            <!-- cards -->
  
            <div class="row">
                <div class="col-sm-12">
                    <div class="card_img">
                        <img src="<?php echo base_url('public/assets/images/card-2.png'); ?>" class="img-thumbnail" />
                    </div>
                </div> <!-- col -->
  
                <div class="fav_report_btn card_details_fav col-6">
                     <form method="POST" action="<?php echo base_url('site/addFavourite'); ?>"> 

                        <input type="hidden" name="fav_type" value="card">    
                        <input type="hidden" name="fav_item_id" value="<?php echo $details->b_cards_id; ?>">  
           
                        <button type="submit" class="star">
                            <i class="far fa-star"> &nbsp; <span><?php echo e_lang('add favourite'); ?></span></i>
                        </button>
                    </form>
                  <!-- Modal -->
                  <div class="modal fade text-center" id="fav" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <i class="fa fa-check text-warning" aria-hidden="true"></i>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                                  <h5 class="modal-title text-warning" id="exampleModalLabel">تمت الإضافة إلى المفضلة</h5>
                              </div>
                              <div class="modal-footer">
                              <a href="#" class="btn btn-warning">المفضلة</a>
                              </div>
                          </div>
                      </div>
                  </div> <!-- popup button-->                  
  
               </div> <!-- fav  btn -->
  
               <!-- report btn -->
                <div class="col-6">
                  <div class="report_btn">
  
                    <button type="button" class="btn text-secondary" data-toggle="modal" data-target="#report">
                      <?php echo e_lang('Report'); ?>
                    </button>
  
                    <div class="modal fade" id="report" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><?php echo e_lang('report'); ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <textarea class="report_message form-control" placeholder="عن ماذا تريد الإبلاغ؟"></textarea>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo e_lang('Send'); ?></button>
                          </div>
                        </div>
                      </div>
                    </div>
  
                  </div><!-- report button-->
                </div>
                
  
            </div> <!-- row -->
        </div> <!-- container -->
        <hr>
  
        <div class="container">
  
          <div class="col-sm-12 client_title">
            <span><?php echo e_lang('about Client'); ?></span>
          </div>
  
          <div class="col-sm-10 client_details">
            <p>
                <?php echo $details->about_info ?>


            </p>
          </div>
  
        </div> <!-- container-->
        <hr>
       
        <div class="container">
  
          <div class="col-sm-12 client_title">
            <span><?php echo e_lang('Other picture'); ?></span>
          </div>
  
          <div class="col-sm-10">
            <div class="client_imgs">
              <div class="row">

                <?php 
                  foreach ($photos as $photo) 
                  {
                      ?> 
                        <div class="col-3">
                          <a href="<?php echo $photo; ?>" style="width: 500px; height: 500px;" data-toggle="lightbox" data-gallery="gallery">
                            <img src="<?php echo $photo; ?>" class="img-fluid img-thumbnail rounded">
                          </a>
                        </div>
                      <?php
                  }

                 ?>
              </div> <!-- row -->
            </div> <!-- client imgs -->
          </div> <!-- col --> 
  
        </div> <!-- container-->
  
    </div>

    <!-- End card details -->