

<style>
   .card_1 .grid, .card_2 .grid, .card_3 .grid,.card_4 .grid .sub_grid,.card_5 .grid,.card_6 .grid .top_grid .top_hold,.card_6 .grid .bot_grid .bot_hold,.card_7 .grid,.card_8 .grid,.card_9 .grid,.card_10_cont .card_10 .grid_1,.card_11 .grid,.card_14 .grid,.card_15 .grid,.card_16 .grid,.card_17 .grid,.card_18 .grid,.card_19 .grid,.card_20 .grid,.card_21 .grid,.card_22 .grid,.card_23 .grid,.card_24 .bot_grid,.card_25 .grid,.card_26 .grid,.card_27 .grid,.card_28 .grid,.card_29 .grid,.card_30 .grid,.card_31 .grid,.card_32 .grid,.card_33 .grid,.card_34 .grid,.card_35 .grid,.card_36 .grid,.card_37 .grid .bot_grid .sub_bot_grid,.card_37 .grid .bot_grid .sub_bot_grid .client_data .client_list,.card_38 .grid,.card_39 .grid,.card_40 .grid,.card_41 .grid,.card_42 .grid,.card_43 .grid,.card_44 .grid,.card_45 .grid .top_grid .card_data,.card_46 .grid,.card_47 .grid,.card_48 .grid,.card_49 .grid,.card_50 .grid{
   flex-direction: row !important;
   }
   .card-body{
   width: 2200px;
   }
</style>
<!-- account -->
<div class="my-account" style="margin-top: 20px;">
   <div class="container">
      <div class="row">
         <div class="col-sm-12 col-md-4 col-lg-3">
            <div class="nav v-tabs-right-choses my-account-navs flex-column nav-pills" id="v-pills-tab" role="tablist"
               aria-orientation="vertical">
               <div class="navs-header">
                  <h5 class="card-header"><?php echo e_lang('My account'); ?></h5>
               </div>
               <div class="">
               </div>
               <a class="nav-link <?php echo ($this->uri->segment(2) == 'account')? 'active':''; ?>" id="v-pills-home-tab" data-toggle="pill" href="#account-info" role="tab"
                  aria-controls="v-pills-home" aria-selected="true">
               <i class="fas fa-cog"></i>
               <span><?php echo e_lang('Edit My account') ?></span>
               </a>
               <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#account-ads" role="tab"
                  aria-controls="v-pills-profile" aria-selected="false">
               <i class="fas fa-address-card"></i>
               <span><?php echo e_lang('Card'); ?></span>
               </a>
               <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#myjobs" role="tab"
                  aria-controls="v-pills-tab" aria-selected="false">
               <i class="fas fa-briefcase font_icon"></i>
               <span> <?php echo e_lang('Jobs'); ?> </span>
               </a>
               <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#favs" role="tab"
                  aria-controls="v-pills-messages" aria-selected="false">
               <i class="fas fa-heart font_icon"></i>
               <span><?php echo e_lang('Favourite'); ?></span>
               </a>
               <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#notify" role="tab"
                  aria-controls="v-pills-messages" aria-selected="false">
               <i class="fas fa-bell font_icon"></i>
               <span><?php echo e_lang('Notification') ?></span>
               </a>
            </div>
            <div class="log-out">
               <a href="index.html" class="btn"><?php echo e_lang('LogIn') ?></a>
            </div>
         </div>
         <div class="col-sm-12 col-md-8 col-lg-9">
            <div class="tab-content new-ads-most-search" id="v-pills-tabContent">
               <div class="tab-pane fade show active" id="account-info" role="tabpanel" aria-labelledby="v-pills-home-tab">
                  <div class="most-search-header">
                     <div class="container">
                        <h5><?php echo e_lang('account information'); ?></h5>
                     </div>
                  </div>
                  <div class="account-info-form">
                     <form method="POST" action="<?php echo base_url('site/account') ?>" enctype="multipart/form-data" >
                        <div class="row">
                           <div class="col-sm-12 col-lg-12">
                              <div class="personal-img">
                                 <?php 
                                    $picture = base_url('uploads/'.$this->session->userdata('user')['user_photo']);
                                    
                                    
                                    
                                    ?>
                                 <div class="per" style="background-image: url('<?php echo $picture; ?>');"></div>
                                 <div class="upload-btn-wrapper">
                                    <h5 class="card-title"><?php echo e_lang('photo') ?></h5>
                                    <button class="btn text-info edit"><?php echo e_lang('Edit') ?> </button>
                                    <input type="file" data-file-upload="" class="personal-img-file" name="user_photo" />
                                 </div>
                              </div>
                           </div>
                           <div class="col-12">
                              <div class="form-group">
                                 <label for="exampleInputEmail1"><?php echo e_lang('name'); ?></label>
                                 <input type="text" class="form-control" name="user_name" value="<?php echo set_value('user_name',$this->session->userdata('user')['user_name']); ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                           </div>
                           <div class="col-12">
                              <div class="form-group">
                                 <label for="exampleInputEmail1"><?php echo e_lang('email') ?></label>
                                 <input type="text" class="form-control" name="user_email" value="<?php echo set_value('user_email',$this->session->userdata('user')['user_email']); ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                           </div>
                           <div class="col-12">
                              <div class="form-group">
                                 <label for="exampleInputEmail1"><?php echo e_lang('Password') ?></label>
                                 <input type="password" name="user_pass" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                           </div>
                           <div class="col-12 text-center">
                              <div class="btn-submit">
                                 <button type="submit" class="btn btn-info"><?php echo e_lang('Edit information'); ?></button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="tab-pane new-ads fade" id="account-ads" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                  <div class="most-search-header">
                     <div class="container">
                        <h5><?php echo e_lang('My Card'); ?></h5>
                        <div class="my_cards">
                           <?php 
                              foreach ($b_cards as $cards) 
                              {
                                  ?> 
                           <div class="row my_card_row">
                              <div class="col-12">
                                 <div class="card">
                                    <div class="card-body">
                                       <?php 
                                          include __DIR__.'/card_small/'.'card-'.$cards->b_cards_card_id.'-'.getCurrentLanguages().'.php';
                                          
                                          
                                          
                                          ?>
                                    </div>
                                 </div>
                                 <!-- card -->
                              </div>
                              <!-- col-12 -->
                              <div class="col-8">
                                 <div class="card_btn btn-group">
                                    <button class="btn btn-info"><?php echo e_lang('Print card') ?></button>
                                    <button class="btn btn-outline-warning"><?php echo e_lang('charage card'); ?></button>
                                 </div>
                              </div>
                              <div class="col-4">
                                 <div class="card_edit_btn">
                                    <a href="#"><i class="far fa-edit"></i></a>
                                    <a href="#" class="text-danger"><i class="far fa-trash-alt"></i></a>
                                 </div>
                              </div>
                           </div>
                           <!-- row -->
                           <?php
                              }
                              
                              ?>
                           <!-- add card btn-->
                           <div class="row">
                              <div class="col-12">
                                 <div class="add_new_card_btn text-center">
                                    <a href="<?php echo base_url('site/addCard'); ?>" class="btn btn-info"><?php echo e_lang('add card'); ?></a>
                                 </div>
                              </div>
                           </div>
                           <!-- add card btn-->
                        </div>
                        <!-- my cards-->
                     </div>
                     <!-- container -->
                  </div>
                  <!-- most search header-->
               </div>
               <!-- my jobs -->
               <div class="tab-pane fade" id="myjobs" role="tabpanel" aria-labelledby="v-pills-home-tab">
                  <div class="most-search-header">
                     <div class="container">
                        <h5><?php echo e_lang('My Jobs'); ?></h5>
                        <?php 
                           foreach ($jobs as $job) {
                                ?> 
                                    <div class="card job_card">
                                       <div class="row no-gutters">
                                          <div class="col-sm-6" id="job_date_span">
                                             <div><span><?php echo e_lang('Expire in :').date('Y-m-d H:i:s',strtotime($job->expire_date)); ?> </span></div>
                                          </div>
                                          <div class="col-sm-6 edit_btn">
                                             <span><a href="<?php echo base_url('site/addJob'); ?>" class=""><i class="fas fa-edit"></i></a></span>
                                          </div>
                                          <div class="col-sm-12">
                                             <div class="job_details">
                                                <p>
                                                    <?php 
                                                            echo $job->details;

                                                     ?>
                                                </p>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="job_location">
                                                <span class="location_icon"><i class="fas fa-map-marker-alt"></i></span>
                                                <span><?php echo Countries()[$job->job_country_id]; ?> - <?php echo cities()[$job->job_city_id]; ?></span>
                                             </div>
                                          </div>
                                          <!-- remove btn -->

                                          <div class="remove_btn col-6">
                                             <a type="button" class="text-danger" data-toggle="modal" data-target="#fav">
                                             <span><i class="fas fa-trash"> &nbsp;</i></span>
                                             </a>
                                             <!-- Modal -->
                                             <div class="modal fade text-center" id="fav" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                   <div class="modal-content">
                                                      <div class="modal-header">
                                                         <i class="fa fa-check text-info" aria-hidden="true"></i>
                                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                         <span aria-hidden="true">&times;</span>
                                                         </button>
                                                      </div>
                                                      <div class="modal-body">
                                                         <h5 class="modal-title text-info" id="exampleModalLabel"><?php echo e_lang('are you sure you want to delete') ?> </h5>
                                                      </div>
                                                    <form method="POST" action="<?php echo base_url('site/deleteJobs'); ?>">
                                                        <input type="hidden" name="job_id" value="<?php echo $job->job_id; ?>">
                                                        <div class="modal-footer col-sm-12" >

                                                        <center><button type="submit" class="btn btn-info"><?php echo e_lang('Delete'); ?></button></center>
                                                        </div>
                                                    </form>
                                                   </div>
                                                </div>
                                             </div>
                                             <!-- popup button-->                  
                                          </div>
                                          <!-- remove btn -->
                                          
                                       </div>
                                       <!-- row -->
                                    </div>
                                <?php
                           }
                           
                           
                           
                           ?>
                        <!-- card div-->
                        <div class="col-md-12 text-center add_job_btn">
                           <a href="<?php echo base_url('site/addJob'); ?>" style="color: #fff;" class="btn btn-info"><?php echo e_lang('add Job'); ?></a>
                        </div>
                     </div>
                     <!-- container -->
                  </div>
                  <!-- most search -->
               </div>
               <!-- tab-pane-->
               <!-- Favourite jobs/cards-->
               <div class="tab-pane fade" id="favs" role="tabpanel" aria-labelledby="v-pills-home-tab">
                  <div class="">
                     <div class="container">
                        <!-- dropdown button-->
                        <div class="dropdown fav_jobcard_dropdown dropdown-container col-sm-12 col-md-9 offset-md-2">
                           <button class="btn btn-outline-info dropdown-toggle click_btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <?php echo base_url('site/addJob'); ?>
                           </button>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <ul class="nav nav-tabs" id="myTab" role="tablist">
                                 <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><?php echo e_lang('Business Card'); ?></a>
                                 </li>
                                 <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><?php echo e_lang('My job'); ?></a>
                                 </li>
                              </ul>
                           </div>
                           <div class="tab-content">
                              <!-- fav card tab -->
                              <?php 
                                foreach ($favourites as $favourite) {
                                    ?> 
                                          <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                             <div class="favorite_card">
                                                <div class="container">
                                                   <div class="row">
                                                      <div class="col-12 card_cont">
                                                         <div class="row exp_delete">
                                                            <div class="exp_date col-6">
                                                               <span>تنتهى صلاحيته فى 12/12/2020</span>
                                                            </div>
                                                            <div class="remove_icon col-6">
                                                               <!-- modal button-->
                                                               <!-- Button trigger modal -->
                                                               <a class="text-danger" data-toggle="modal" data-target="#exampleModal">
                                                               <i><img src="assets/images/close (2).svg" /></i>
                                                               </a>
                                                               <!-- Modal -->
                                                               <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                  <div class="modal-dialog">
                                                                     <div class="modal-content">
                                                                        <div class="modal-header">
                                                                           <h5 class="modal-title" id="exampleModalLabel">هل تريد الحذف</h5>
                                                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                           <span aria-hidden="true">&times;</span>
                                                                           </button>
                                                                        </div>
                                                                        <div class="modal-body text-center">
                                                                           <button type="button" class="btn btn-outline-info btn-lg">نعم</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                           <button type="button" class="btn btn-outline-info btn-lg">لا</button>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <!-- modal button-->
                                                            </div>
                                                         </div>
                                                         <div class="col-12">
                                                            <div class="cards">
                                                               <img src="assets/images/card-3.png" />
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <!-- row -->
                                                      <!-- repeated div-->
                                                      <div class="col-12 card_cont">
                                                         <div class="row exp_delete">
                                                            <div class="exp_date col-6">
                                                               <span>تنتهى صلاحيته فى 12/12/2020</span>
                                                            </div>
                                                            <div class="remove_icon col-6">
                                                               <!-- modal button-->
                                                               <!-- Button trigger modal -->
                                                               <a class="text-danger" data-toggle="modal" data-target="#exampleModal">
                                                               <i><img src="assets/images/close (2).svg" /></i>
                                                               </a>
                                                               <!-- Modal -->
                                                               <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                  <div class="modal-dialog">
                                                                     <div class="modal-content">
                                                                        <div class="modal-header">
                                                                           <h5 class="modal-title" id="exampleModalLabel">هل تريد الحذف</h5>
                                                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                           <span aria-hidden="true">&times;</span>
                                                                           </button>
                                                                        </div>
                                                                        <div class="modal-body text-center">
                                                                           <button type="button" class="btn btn-outline-info btn-lg">نعم</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                           <button type="button" class="btn btn-outline-info btn-lg">لا</button>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <!-- modal button-->
                                                            </div>
                                                         </div>
                                                         <div class="col-12">
                                                            <div class="cards">
                                                               <img src="assets/images/card-3.png" />
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <!-- row -->
                                                      <!-- repeated div-->
                                                   </div>
                                                   <!-- row -->
                                                </div>
                                                <!-- container -->
                                             </div>
                                             <!-- favorite_card-->
                                             <!-- end fav card tab-->
                                          </div>
                                    <?php


                                }




                               ?>


                              <!-- tab pane-->
                           </div>
                           <!-- tab content -->
                        </div>
                        <!-- End dropdown button-->
                     </div>
                     <!-- container -->
                  </div>
                  <!-- End Favourite jobs/cards-->
               </div>
               <!-- tab-pane -->
               <!-- Notification -->
               <div class="tab-pane fade notify_holder" id="notify" role="tabpanel" aria-labelledby="v-pills-home-tab">
                  <div class="most-search-header">
                     <div class="container">
                        <h5><?php echo e_lang('Notification'); ?></h5>

                        <?php 
                            foreach ($notifications as $notification) 
                            {
                                ?> 
                                    <div class="notify_container row">
                                       <div class="col-sm-3">
                                          <img src="<?php echo base_url('public/assets/images/cons1.webp'); ?>" />
                                       </div>
                                       <div class="col-sm-8 col-md-9">
                                          <div class="notify">
                                             <p><?php echo   $notification->notification_text;?></p>
                                             <span><?php echo $notification->created_at; ?></span>
                                          </div>
                                       </div>
                                    </div>
                                <?php
                            }



                         ?>

                        <!-- notify_container -->
                     </div>
                  </div>
               </div>
               <!-- End Notification -->
            </div>
            <!-- tab-content -->
         </div>
         <!-- col -->  
      </div>
      <!-- row -->                  
   </div>
   <!-- container-->
</div>
<!-- account -->

