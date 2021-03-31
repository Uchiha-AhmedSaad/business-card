      <!-- card details -->
      <div class="card_details_content">
         <div class="container">
            <div class="profile_details">
               <div class="row">
                  <div class="col-2 text-center">
                     <div class="profile_img">
                        <img src="<?php echo $logo ?>" />
                     </div>
                  </div>
                  <div class="col-4-12 pn text-right">
                     <div class="profile_name">
                      <?php 
                        if (!empty($this->session->userdata('language')) && $this->session->userdata('language') == 'en') {
                          ?> 
 
                             <p><?php echo split_sentence($details->b_cards_name_en,1); ?></p>

                          <?php
                        }
                        else{
                          ?> 

                            <p><?php echo split_sentence($details->b_cards_name,4); ?></p>
                          <?php
                        }
                       ?>
                       
                     </div>
                  </div>
                  <div class="col-9 save_cont_col">
                     <div class="add_contact_btn">
                        <button class="btn btn-info"><?php echo e_lang('Save in my contact'); ?><i class="fas fa-plus"></i></button>
                     </div>
                  </div>
               </div>
               <!-- row -->
            </div>
            <!-- profile details -->
            <!-- cards -->
            <div class="row">
               <div class="col-sm-12">
                  <div class="card_img">
                     <!-- <img src="assets/images/card-2.png" class="img-thumbnail" />-->
                     <!-- place card desgin here :3 -->
                     <?php include __DIR__."/card_large/card-".$details->b_cards_card_id.'-bgscreen-'.$language.'.php'; ?>
                     <!-- place card desgin here :3-->
                  </div>
               </div>
               <!-- col -->
               <div class="fav_report_btn card_details_fav col-6">
                  <span class="star">
                  <a  class="" data-toggle="modal" data-target="#fav">
                     <?php 
                        if ($favourite == 'inactive') {
                          ?> 
                              <i class="far fa-star"> &nbsp; <span><?php echo e_lang('Add to Favourite'); ?></span></i>
                          <?php
                        }
                        else{
                           ?> 
                              <i class="fas fa-star"> &nbsp; <span><?php echo e_lang('Add to Favourite'); ?></span></i>

                           <?php
                        }
                      ?>
                  </a>
                  </span>
                  <!-- Modal -->
                   <form method="POST" action="<?php echo base_url('site/addFavourite'); ?>">

                     <input type="hidden" name="fav_type" value="card">
                     <input type="hidden" name="fav_item_id" value="<?php echo $details->b_cards_id; ?>">

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
                                 <h5 class="modal-title text-warning" id="exampleModalLabel"><?php echo e_lang('Added to favourite'); ?></h5>
                              </div>
                             
                                    <div class="modal-footer">
                                       <button type="submit" class="btn btn-warning"><?php echo e_lang('Favourite'); ?></button>
                                    </div>

                           </div>
                        </div>
                     </div>
                   </form>
                  <!-- popup button-->                  
               </div>
               <!-- fav  btn -->
               <!-- report btn -->
               <div class="col-6">
                  <div class="report_btn">
                     <button type="button" class="btn text-secondary" data-toggle="modal" data-target="#report">
                     <?php echo e_lang('Report'); ?>
                     </button>
                     <form method="POST" action="<?php echo base_url('site/report'); ?>">
                         <div class="modal fade" id="report" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                               <div class="modal-content">
                                  <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalLabel"><?php echo e_lang('Report'); ?></h5>
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                     </button>
                                  </div>
                                  <div class="modal-body">
                                    <input type="hidden" name="report_item_type" value="card">
                                    <input type="hidden" name="report_item_id" value="<?php echo $this->uri->segment(3); ?>">

                                     <textarea class="report_message form-control" name="report_text" placeholder="<?php echo e_lang('what you want to report'); ?>"></textarea>
                                  </div>
                                  <div class="modal-footer">
                                     <button type="submit" class="btn btn-primary" ><?php echo e_lang('Send'); ?></button>
                                  </div>
                               </div>
                            </div>
                         </div>
                     </form>
                  </div>
                  <!-- report button-->
               </div>
            </div>
            <!-- row -->
         </div>
         <!-- container -->
         <hr>
         <div class="container">
            <div class="col-sm-12 client_title">
               <span><?php echo e_lang('About Client'); ?></span>
            </div>
            <div class="col-sm-10 client_details">
               <p>
                <?php echo $details->about_info; ?>
               </p>
            </div>
         </div>
         <!-- container-->
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
                                  <a href="<?php echo $photo; ?>" style="width: 500px; height: 500px;" data-fancybox="gallery" >
                                  <img src="<?php echo $photo; ?>" class="img-fluid img-thumbnail rounded">
                                  </a>
                               </div>

                          <?php
                      }




                     ?>

                  </div>
                  <!-- row -->
               </div>
               <!-- client imgs -->
            </div>
            <!-- col --> 
         </div>
         <!-- container-->
      </div>
      <!-- End card details -->