
<!-- Home Content -->
<div class="home_content">
   <div class="container-fluid">
      <div class="row card_container">
         <div class="doc_card_title col-6">
            <h3><?php echo e_lang('Payed Card'); ?></h3>
         </div>
         <div class="more_cards col-6">
            <a href="#"><?php e_lang(''); ?></a>
         </div>
         <!-- End doctors cards-->
      </div>
      <!-- row -->

      <div class="slick-carousel type-one-carousel row">
        <?php 
          foreach ($b_cards as $cards) {
            include __DIR__.'/card_small/'.'card-'.$cards->b_cards_card_id.'-'.getCurrentLanguages().'.php';
          }
         ?>
      </div>
      <hr> 


      <?php 
          foreach ($b_cards_By_category as $key => $c_cards) {
              ?> 
                    <div class="row card_container">
                       <div class="doc_card_title col-6">

                          <h3><?php echo $categories[$key]; ?></h3>
                       </div>
                       <div class="more_cards col-6">
                          <a href="#"><?php echo e_lang('More'); ?></a>
                       </div>
                       <!-- End doctors cards-->
                    </div>
                    <!-- row -->

                    <div class="slick-carousel type-one-carousel row">
                      <?php 
                        foreach ($c_cards as $cards) {
                          include __DIR__.'/card_small/'.'card-'.$cards->b_cards_card_id.'-'.getCurrentLanguages().'.php';
                        }
                       ?>
                    </div>
              <?php
          }
       ?>
            <div class="row home_special_ads">
               <div class="special_ads_title col-12">
                  <h4><?php echo e_lang('Job ads'); ?></h4>
               </div>
            </div>

            <!-- row home_special_ads-->
            <div class="row card_holder">
            <?php 

              foreach ($jobs as $job) {
     
                  ?> 
                     <!-- repeated div-->
                     <div class="job_ad col-5">
                        <div class="job_ad_img">
                           <img src="<?php echo base_url('public/assets/images/cons1.webp'); ?>" />
                           <?php 
                              if (getCurrentLanguages() == 'ar') {
                                ?> <span><?php echo $users[$job->user_id]->user_name;  ?></span> <?php
                              }



                            ?>
                           
                        </div>
                        <div class="job_ad_details">
                           <p><?php echo split_sentence($job->job_info,10); ?></p>
                        </div>
                        <div class="row">
                           <div class="col-md-8 col-12 fav_report_btn">
                              <div class="fav_report_btn">
                                 <a type="button" class="text-center" data-toggle="modal" data-target="#fav">
                                 <span class="star">
                                 <i class="far fa-star"> &nbsp; <span><?php echo e_lang('add to favourite'); ?></span></i>
                                 </span>
                                 </a>
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
                                 </div>
                                 <!-- popup button-->     
                                 <span class="line"> | </span>
                                 <!-- report btn -->
                                 <span class="rep_text">
                                    <a type="button" class="rep" data-toggle="modal" data-target="#exampleModal"> إبلاغ</a>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                       <div class="modal-dialog">
                                          <div class="modal-content">
                                             <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">إبلاغ</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                             </div>
                                             <div class="modal-body">
                                                <textarea class="report_message form-control" placeholder="عن ماذا تريد الإبلاغ؟"></textarea>
                                             </div>
                                             <div class="modal-footer">
                                                <button type="button" class="btn btn-primary">إرسال</button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </span>
                                 <!-- report btn -->
                              </div>
                              <!-- fav report btns -->
                           </div>
                           <!-- col-7 -->
                           <div class="col-md-4 col-12 contact ">
                              <a href="#">تواصل مع المعلن</a>
                           </div>
                        </div>
                     </div>
                     <!-- job ad-->
                  <?php
              }





             ?>






            </div>
   </div>
   <!-- container fluid -->
</div>
<!-- home content -->

