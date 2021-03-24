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

                                <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#account-info" role="tab"
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
                                                            <div class="per" style="background-image: url('./assets/images/avatar.png');"></div>

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
                                                            <input type="text" class="form-control" name="user_name" value="<?php echo set_value('user_name',$this->session->userdata('user_name')); ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                        </div>
                                                        </div>
                                                    
                                                        <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1"><?php echo e_lang('email') ?></label>
                                                            <input type="text" class="form-control" name="user_email" value="<?php echo set_value('user_email',$this->session->userdata('user_email')); ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
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
                                        <h5>كروتى</h5>

                                        <div class="my_cards">
                                            <div class="row my_card_row">
                                                <div class="col-12">
                                                    <div class="card">

                                                        <div class="card-body">
                                                        <h5 class="card-title">تنتهى صلاحيته فى 1/4/2020</h5>
                                                            <div class="my_cards_container">
                                                                <img src="assets/images/card-2.png" />
                                                            </div>
                                                        </div>
                                                        
                                                    </div> <!-- card -->
                                                </div> <!-- col-12 -->

                                                <div class="col-8">
                                                    <div class="card_btn btn-group">
                                                        <button class="btn btn-info">طباعة الكارت</button>
                                                        <button class="btn btn-outline-warning">تمييز الكارت</button>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="card_edit_btn">
                                                        <a href="#"><i class="far fa-edit"></i></a>
                                                        <a href="#" class="text-danger"><i class="far fa-trash-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div> <!-- row -->

                                            <!-- repeated div -->
                                            <div class="row my_card_row">
                                                <div class="col-12">
                                                <div class="card exp_card">

                                                    <div class="card-body">
                                                        <h5 class="card-title">تنتهى صلاحيته فى 1/4/2020</h5>
                                                        <div class="my_cards_container">
                                                            <img src="assets/images/card-2.png" />
                                                        </div>
                                                    </div>
                                                    
                                                    </div> <!-- card -->
                                                </div> <!-- col-12 -->

                                                <div class="col-8">
                                                    <div class="card_btn btn-group">
                                                        <button class="btn btn-info">طباعة الكارت</button>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="card_edit_btn">
                                                    <a href="add_card.html"><i class="far fa-edit"></i></a>
                                                    <a href="#" class="text-danger"><i class="far fa-trash-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div> <!-- row -->
                                            <!-- repeated div -->
                                            

                                            <!-- add card btn-->
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="add_new_card_btn text-center">
                                                        <a href="choose_card.html" class="btn btn-info">إضافة كارت</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- add card btn-->

                                        </div><!-- my cards-->
                                        </div> <!-- container -->
                                    </div> <!-- most search header-->
                                    </div>

                                    <!-- my jobs -->
                                    <div class="tab-pane fade" id="myjobs" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <div class="most-search-header">

                                        <div class="container">
                                            <h5>وظائفى</h5>

                                            <div class="card job_card">
                                            <div class="row no-gutters">

                                            <div class="col-sm-6" id="job_date_span">
                                                <div><span>تنتهى صلاحيته فى 20/12/2020 </span></div>
                                            </div>

                                            <div class="col-sm-6 edit_btn">
                                                <span><a href="add_job.html" class=""><i class="fas fa-edit"></i></a></span>
                                            </div>
                                            
                                            <div class="col-sm-12">
                                                <div class="job_details">
                                                <p>مطلوب على وجه السرعة عمال إنتاج فى مصنع مواد غذائيه المرتب يبدا من 3000 جنيه مصرى. عدد ساعات العمل 12ساعه</p>
                                                </div>
                                            </div>
                                            

                                            <div class="col-6">
                                                <div class="job_location">
                                                <span class="location_icon"><i class="fas fa-map-marker-alt"></i></span>
                                                <span>القاهرة - مصر</span>
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
                                                                <h5 class="modal-title text-info" id="exampleModalLabel">تم الحذف </h5>
                                                            </div>
                                                            <div class="modal-footer">
                                                            <a href="#" class="btn btn-info">حسناً</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- popup button-->                  
                                
                                            </div>
                                            
                                            <!-- remove btn -->

                                           

                                            </div> <!-- row -->
                                            </div> <!-- card div-->
                                            <div class="col-md-12 text-center add_job_btn">
                                                <a href="add_job.html" style="color: #fff;" class="btn btn-info">إضافة وظيفة</a>
                                            </div>

                                        </div> <!-- container -->
                                    </div><!-- most search -->
                                    </div> <!-- tab-pane-->

                                    <!-- Favourite jobs/cards-->
                                    <div class="tab-pane fade" id="favs" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                        <div class="">
                                            <div class="container">
                                                
                                                <!-- dropdown button-->
                                                <div class="dropdown fav_jobcard_dropdown dropdown-container col-sm-12 col-md-9 offset-md-2">
                                                    <button class="btn btn-outline-info dropdown-toggle click_btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        المفضلة
                                                    </button>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                            <li class="nav-item" role="presentation">
                                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Business Card</a>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">وظائفى</a>
                                                            </li>
                                                        </ul>
                                                    </div>


                                                    <div class="tab-content">
                                                        <!-- fav card tab -->
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
                                                    
                                                                        </div><!-- row -->
                                        
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
                                                    
                                                                        </div><!-- row -->
                                                                        <!-- repeated div-->
                                        
                                                                    </div> <!-- row -->
                                                                </div><!-- container -->
                                                            </div><!-- favorite_card-->
                                                            <!-- end fav card tab-->
                                                        </div>
                                                        
                                                        <!-- favs jobs tab -->
                                                        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                            <div class="search_jobs">
                                                                <div class="container-fluid">
                                                                    <div class="row job_cards">
                                                        
                                                                    <!-- repeated div card -->
                                                                    <div class="col-md-12 card_container">
                                                        
                                                                        <div class="job_card">
                                                                            <div class="row">
                                                        
                                                                                <div class="col-md-3 col-sm-12 hr_img d-md-block d-none">
                                                                                    <img src="assets/images/cons1.webp" />
                                                                                </div>
                                                        
                                                                                <div class="col-md-3 col-sm-12 hr_img d-sm-block d-md-none text-center">
                                                                                    <img src="assets/images/cons1.webp" />
                                                                                </div>
                                                        
                                                                                <!--appears lg md screens-->
                                                                                <div class="col-md-9 col-sm-12 job_describtion d-md-block d-none">
                                                                                    <span> محمد على</span>
                                                                                    <p>"لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                                                                                        أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد</p>
                                                                                </div>
                                                                                <!-- appears sm screens-->
                                                                                <div class="col-md-9 col-sm-12 job_describtion d-sm-block d-md-none text-center">
                                                                                    <span> محمد على</span>
                                                                                    <p>"لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                                                                                        أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد</p>
                                                                                </div>
                                                        
                                                                                <div class="col-md-12">
                                                                                    <div class="row">
                                                                                        <div class="fav_report_btn en_fav_report col-7">
                                                                                            <a type="button" class="text-center" data-toggle="modal" data-target="#fav">
                                                                                            <span class="fav_btn text-warning" ><i><img src="assets/images/close (2).svg" /></i> &nbsp;</i>حذف من المفضلة</span>
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
                                                                                                        <h5 class="modal-title text-warning" id="exampleModalLabel">تم الحذف من المفضلة</h5>
                                                                                                    </div>
                                                                                                    <div class="modal-footer">
                                                                                                    <a href="#" class="btn btn-warning">حساناً</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div> <!-- popup button-->     
                                                                                            
                                                            
                                                                                            <span> | </span>
                                                                                            <!-- report btn -->
                                                                                            <span>
                                                                                                <a type="button" class="text-secondary" data-toggle="modal" data-target="#exampleModal"> إبلاغ</a>
                                                                        
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
                                                                                            </span>   <!-- report btn -->
                                                        
                                                                                        </div> <!-- fav report btns -->
                                                        
                                                                                        <div class="col-5 contact ">
                                                                                            <a href="#">تواصل مع المعلن</a>
                                                                                        </div> 

                                                                                    </div> <!-- sub row -->
                                                                                </div> <!-- sub col-12 -->
                                                                                
                                                                            </div> <!-- sub row -->
                                                                        </div> <!-- job card -->
                                                                    </div>  
                                                                    <!-- repeated div-->

                                                                    <!-- repeated div card -->
                                                                    <div class="col-md-12 card_container">
                                                        
                                                                        <div class="job_card">
                                                                            <div class="row">
                                                        
                                                                                <div class="col-md-3 col-sm-12 hr_img d-md-block d-none">
                                                                                    <img src="assets/images/cons1.webp" />
                                                                                </div>
                                                        
                                                                                <div class="col-md-3 col-sm-12 hr_img d-sm-block d-md-none text-center">
                                                                                    <img src="assets/images/cons1.webp" />
                                                                                </div>
                                                        
                                                                                <!--appears lg md screens-->
                                                                                <div class="col-md-9 col-sm-12 job_describtion d-md-block d-none">
                                                                                    <span> محمد على</span>
                                                                                    <p>"لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                                                                                        أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد</p>
                                                                                </div>
                                                                                <!-- appears sm screens-->
                                                                                <div class="col-md-9 col-sm-12 job_describtion d-sm-block d-md-none text-center">
                                                                                    <span> محمد على</span>
                                                                                    <p>"لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                                                                                        أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد</p>
                                                                                </div>
                                                        
                                                                                <div class="col-md-12">
                                                                                    <div class="row">
                                                                                        <div class="fav_report_btn en_fav_report col-7">
                                                                                        <a type="button" class="text-center" data-toggle="modal" data-target="#fav">
                                                                                            <span class="fav_btn text-warning" ><i><img src="assets/images/close (2).svg" /></i>حذف من المفضلة</span>
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
                                                                                                        <h5 class="modal-title text-warning" id="exampleModalLabel">تم الحذف من المفضلة</h5>
                                                                                                    </div>
                                                                                                    <div class="modal-footer">
                                                                                                    <a href="#" class="btn btn-warning">حساناً</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div> <!-- popup button-->     
                                                                                        
                                                            
                                                                                            <span> | </span>
                                                                                            <!-- report btn -->
                                                                                            <span>
                                                                                                <a type="button" class="text-secondary" data-toggle="modal" data-target="#exampleModal"> إبلاغ</a>
                                                                        
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
                                                                                            </span>   <!-- report btn -->
                                                        
                                                                                        </div> <!-- fav report btns -->
                                                        
                                                                                        <div class="col-5 contact ">
                                                                                            <a href="#">تواصل مع المعلن</a>
                                                                                        </div> 

                                                                                    </div> <!-- sub row -->
                                                                                </div> <!-- sub col-12 -->
                                                                                
                                                                            </div> <!-- sub row -->
                                                                        </div> <!-- job card -->
                                                                    </div>  
                                                                    <!-- repeated div-->
                                                                    
                                                                    </div> <!-- job cards-->
                                                                </div> <!-- container fluid -->
                                                            </div> <!-- search jobs -->

                                                        </div> <!-- tab pane-->
                                                    </div> <!-- tab content -->
                                                        
                                                </div><!-- End dropdown button-->
                                            </div> <!-- container -->
                                        </div>
                                    <!-- End Favourite jobs/cards-->

                                    </div> <!-- tab-pane -->

                                    <!-- Notification -->
                                    <div class="tab-pane fade notify_holder" id="notify" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <div class="most-search-header">

                                        <div class="container">
                                            <h5>إشعاراتى</h5>

                                            <div class="notify_container row">
                                                <div class="col-sm-3">
                                                    <img src="assets/images/cons1.webp" />
                                                </div>

                                                <div class="col-sm-8 col-md-9">
                                                    <div class="notify">
                                                        <p>نص تجريبى للتجربة علي المواقع ويمكن تجربته في النصوص والمدخلات</p>
                                                        <span>6pm. 2/2/2022</span>
                                                    </div>
                                                </div>


                                            </div> <!-- notify_container -->
                                        </div>

                                    </div>
                                    </div>
                                    <!-- End Notification -->

                                </div> <!-- tab-content -->
                        </div> <!-- col -->  
                    </div><!-- row -->                  
                

            
        </div> <!-- container-->
    </div> <!-- account -->