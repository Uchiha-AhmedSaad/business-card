
  <div class="home_content">
     <div class="container-fluid">
        <div class="row">
           <div class="special_cards_title">
              <h4>الكروت المميزة</h4>
           </div>
           <!-- special cards title -->
           <!-- special cards slider -->
           <div class="cascade-slider_container" id="cascade-slider">
              <div class="cascade-slider_slides">
                 <div class="cascade-slider_item">
                    <div class='card align'>
                       <div class='photo'>
                          <img src="<?php echo base_url('public/assets/images/card-1.png');  ?>">
                       </div>
                    </div>
                 </div>
                 <div class="cascade-slider_item">
                    <div class='card align'>
                       <div class='photo'>
                          <img src="<?php echo base_url('public/assets/images/card-2.png');  ?>">
                       </div>
                    </div>
                 </div>
                 <div class="cascade-slider_item">
                    <div class='card align'>
                       <div class='photo'>
                          <img src="<?php echo base_url('public/assets/images/card-3.png');  ?>">
                       </div>
                    </div>
                 </div>
                 <div class="cascade-slider_item">
                    <div class='card align'>
                       <div class='photo'>
                          <img src="<?php echo base_url('public/assets/images/car-1.png');  ?>">
                       </div>
                    </div>
                 </div>
              </div>
              <span class="cascade-slider_arrow cascade-slider_arrow-left" data-action="prev"><i class="fas fa-arrow-left"></i></span>
              <span class="cascade-slider_arrow cascade-slider_arrow-right" data-action="next"><i class="fas fa-arrow-right"></i></span>
           </div>
           <!-- End special cards slider -->
        </div>
        <!-- row -->
        <hr>
        <!-- doctors cards-->
        <div class="row card_container">
           <div class="doc_card_title col-6">
              <h3>الاطباء</h3>
           </div>
           <div class="more_cards col-6">
              <a href="#">المزيد</a>
           </div>
           <!-- End doctors cards-->
           <div class="col-md-3 col-6">
              <div class="doc_cards">
                 <img src="<?php echo base_url('public/assets/images/card-1.png') ?>" />
              </div>
           </div>
           <div class="col-md-3 col-6">
              <div class="doc_cards">
                 <img src="<?php echo base_url('public/assets/images/card-3.png') ?>" />
              </div>
           </div>
           <div class="col-md-3 col-6">
              <div class="doc_cards">
                 <img src="<?php echo base_url('public/assets/images/card-2.png') ?>" />
              </div>
           </div>
           <div class="col-md-3 col-6">
              <div class="doc_cards">
                 <img src="<?php echo base_url('public/assets/images/card-1.png') ?>" />
              </div>
           </div>
        </div>
        <!-- row -->
        <hr>
        <!-- laywer cards-->
        <div class="row card_container">
           <div class="doc_card_title col-6">
              <h3>المحامين</h3>
           </div>
           <div class="more_cards col-6">
              <a href="#">المزيد</a>
           </div>
           <!-- End doctors cards-->
           <div class="col-md-3 col-6">
              <div class="doc_cards">
                 <img src="<?php echo base_url('public/assets/images/card-3.png'); ?>" />
              </div>
           </div>
           <div class="col-md-3 col-6">
              <div class="doc_cards">
                 <img src="<?php echo base_url('public/assets/images/card-1.png'); ?>" />
              </div>
           </div>
           <div class="col-md-3 col-6">
              <div class="doc_cards">
                 <img src="<?php echo base_url('public/assets/images/card-2.png'); ?>" />
              </div>
           </div>
           <div class="col-md-3 col-6">
              <div class="doc_cards">
                 <img src="<?php echo base_url('public/assets/images/card-1.png'); ?>" />
              </div>
           </div>
        </div>
        <!-- row -->
        <div class="row home_special_ads">
           <div class="special_ads_title col-12">
              <h4>الإعلانات المميزة</h4>
           </div>
        </div>
        <!-- row home_special_ads-->
        <div class="row card_holder">
           <!-- repeated div-->
           <div class="job_ad col-5">
              <div class="job_ad_img">
                 <img src="<?php echo base_url('public/assets/images/cons1.webp'); ?>" />
                 <span>محمد على</span>
              </div>
              <div class="job_ad_details">
                 <p>مطلوب على وجه السرعة عمال انتاج بمرتب 5000 جنيه مصرى ولا يشترط الخبره نقبل بدون موهل</p>
              </div>
              <div class="row">
                 <div class="col-md-8 col-12">
                    <div class="fav_report_btn">
                       <a type="button" class="text-center" data-toggle="modal" data-target="#fav">
                       <span class="star">
                       <i class="far fa-star"> &nbsp; أضف إلى المفضلة</i>
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
                       <span> | </span>
                       <!-- report btn -->
                       <span>
                          <a type="button" class="text-secondary rep" data-toggle="modal" data-target="#exampleModal"> إبلاغ</a>
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
           <!-- repeated div-->
           <div class="job_ad col-5">
              <div class="job_ad_img">
                 <img src="<?php echo base_url('public/assets/images/cons1.webp'); ?>" />
                 <span>محمد على</span>
              </div>
              <div class="job_ad_details">
                 <p>مطلوب على وجه السرعة عمال انتاج بمرتب 5000 جنيه مصرى ولا يشترط الخبره نقبل بدون موهل</p>
              </div>
              <div class="row">
                 <div class="col-md-8 col-12">
                    <div class="fav_report_btn">
                       <a type="button" class="text-center" data-toggle="modal" data-target="#fav">
                       <span class="star">
                       <i class="far fa-star"> &nbsp; أضف إلى المفضلة</i>
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
                       <span> | </span>
                       <!-- report btn -->
                       <span>
                          <a type="button" class="text-secondary rep" data-toggle="modal" data-target="#exampleModal"> إبلاغ</a>
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
           <div class="col-1 left_arrow_cont">
              <a href="#"><span class="left_arrow"><img src="<?php echo base_url('public/assets/images/double-left-arrow.svg'); ?>" /></span></a>
           </div>
        </div>
        <!-- card holder -->
        <hr>
        <!-- engineers cards-->
        <div class="row card_container">
           <div class="doc_card_title col-6">
              <h3>المهندسين</h3>
           </div>
           <div class="more_cards col-6">
              <a href="#">المزيد</a>
           </div>
           <!-- End doctors cards-->
           <div class="col-md-3 col-6">
              <div class="doc_cards">
                 <img src="<?php echo base_url('public/assets/images/card-3.png'); ?>" />
              </div>
           </div>
           <div class="col-md-3 col-6">
              <div class="doc_cards">
                 <img src="<?php echo base_url('public/assets/images/card-1.png'); ?>" />
              </div>
           </div>
           <div class="col-md-3 col-6">
              <div class="doc_cards">
                 <img src="<?php echo base_url('public/assets/images/card-2.png'); ?>" />
              </div>
           </div>
           <div class="col-md-3 col-6">
              <div class="doc_cards">
                 <img src="<?php echo base_url('public/assets/images/card-1.png'); ?>" />
              </div>
           </div>
        </div>
        <!-- row -->


        <hr>
     </div>
     <!-- container fluid -->
  </div>


