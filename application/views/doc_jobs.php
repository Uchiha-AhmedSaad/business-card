
    <div class="doctor_jobs">
        <div class="container-fluid">
            <div class="row">
                <!-- job div ( repeated )-->
                <?php 
                    foreach ($jobs as $job) {
                      ?> 
                          <div class="job_ad col-5">

                              <div class="job_ad_img">
                                <?php 
                                    if (!empty($job->job_pictures)) {
                                      $picture = explode('|', $job->job_pictures);
                                    }
                                 ?>
                                 <?php 
                                    if (!empty($picture[0])) 
                                    {
                                      ?> 
                                            <img src="<?php echo base_url('uploads/'.$picture[0]); ?>" />
                                      <?php
                                    }
                                  ?>
                                  <?php 
                                      if (getCurrentLanguages() == 'ar') {
                                        ?> <span><?php echo $job->job_name; ?></span> <?php
                                      }
                                      else{
                                        ?> <span><?php echo $job->job_name_en; ?></span> <?php
                                      }
                                   ?>
                                  
                              </div>
              
                              <div class="job_ad_details">


                                <p><?php echo split_sentence( $job->details,20);  ?></p> 
                              </div>
              
                              <div class="row">
                                  <div class="col-md-8 col-12 fav_report_btn">
                                      <div class="fav_report_btn">
                                          <a type="button" class="text-center" data-toggle="modal" data-target="#fav<?php echo $job->job_id;?>">
                                              <span class="star">
                                                  <i class="far fa-star"> &nbsp; <span><?php echo e_lang('add to favourite'); ?></span></i>
                                              </span>
                                        </a>
                                        
                                        <!-- Modal -->
                                        <form method="POST" action="<?php echo base_url('site/addFavourite'); ?>">

                                          <input type="hidden" name="fav_type" value="job">
                                          <input type="hidden" name="fav_item_id" value="<?php echo $job->job_id; ?>">
                                        <div class="modal fade text-center" id="fav<?php echo $job->job_id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <i class="fa fa-check text-warning" aria-hidden="true"></i>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h5 class="modal-title text-warning" id="exampleModalLabel"><?php echo e_lang('Add to favourite'); ?></h5>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="submite" class="btn btn-warning"><?php echo e_lang('Adding to favouite'); ?></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- popup button-->     
                                        </form>
              
                                            <span class="line">  </span>
                                            <!-- report btn -->
                                            <form method="POST" action="<?php echo base_url('site/report'); ?>">
                                            <span class="rep_text">
                                                 <a type="button" class="rep" data-toggle="modal" data-target="#exampleModal<?php echo $job->job_id; ?>"> <?php echo e_lang('Report'); ?></a>
                                                 <input type="hidden" name="report_item_type" value="job">
                                                 <input type="hidden" name="report_item_id" value="<?php echo $job->job_id; ?>">
                                                 <div class="modal fade" id="exampleModal<?php echo $job->job_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                     <div class="modal-dialog">
                                                     <div class="modal-content">
                                                         <div class="modal-header">
                                                         <h5 class="modal-title" id="exampleModalLabel"><?php echo e_lang('Report'); ?></h5>
                                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                             <span aria-hidden="true">&times;</span>
                                                         </button>
                                                         </div>
                                                         <div class="modal-body">
                                                         <textarea name="report_text" class="report_message form-control" placeholder="<?php echo e_lang('What do you want to report'); ?>"></textarea>
                                                         </div>
                                                         <div class="modal-footer">
                                                         <button type="submit" class="btn btn-primary"><?php echo e_lang('Send'); ?></button>
                                                         </div>
                                                     </div>
                                                     </div>
                                                 </div>
                                            </span>   <!-- report btn -->
                                              
                                            </form>

              
                                      </div> <!-- fav report btns -->
                                  </div> <!-- col-7 -->
              
                                  <div class="col-md-4 col-12 contact ">
                                      <a href="#"><?php echo e_lang('Contact with Member'); ?></a>
                                  </div> 
              
                              </div>
                          </div>


                      <?php
                    }



                 ?>
            </div><!-- row -->
        </div><!-- container-->
    </div>
