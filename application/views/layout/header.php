<?php $current_lang = getCurrentLanguages();?>
<!DOCTYPE html>
<html lang="<?= $current_lang?>">
   <head class="swap_lang">
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <link rel="stylesheet" href="<?php echo base_url('public/assets/css/fontawesome.min.css') ?>" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="<?php echo base_url('public/assets/css/tail.select-teal.min.css') ?>">
      <link rel="stylesheet" href="<?php echo base_url('public/assets/css/bootstrap-ar.min.css') ?>" />
      <link rel="stylesheet" href="<?php echo base_url('public/assets/css/font-awesome.min.css') ?>" />
      <link rel="stylesheet" href="<?php echo base_url('public/assets/css/all.min.css') ?>">
      <link rel="stylesheet" href="<?php echo base_url('public/assets/css/slick.css') ?>" />
      <link rel="stylesheet" href="<?php echo base_url('public/assets/css/slick-theme.css'); ?>" />
      <link rel="stylesheet" href="<?php echo base_url('public/assets/css/lightbox.css') ?>" />
      <link rel="stylesheet" href="<?php echo base_url('public/assets/css/main.css'); ?>" />


         <?php 
               if(!empty($this->session->userdata('language')) && $this->session->userdata('language') == 'en')
                 {
                       ?> 
                     <link rel="stylesheet" href="<?php echo base_url('public/assets/css/enStyle.css') ?>" />
                     <?php 
                     if (!empty($this->uri->segment(2)) && $this->uri->segment(2) == 'cardDetails') {
                       ?> 
                           <link rel="stylesheet" href="<?php echo base_url('public/cards_larage_assets/css/card-'.$details->b_cards_card_id.'-bgscreen-en.css'); ?>" />
                       <?php
                     }
                 }
                 else{
                  if (!empty($this->uri->segment(2)) && $this->uri->segment(2) == 'cardDetails') {
                        ?> 
                           <link rel="stylesheet" href="<?php echo base_url('public/cards_larage_assets/css/card-'.$details->b_cards_card_id.'-bgscreen-ar.css'); ?>" />
                        <?php
                    }
                 }
         ?>
          <link rel="stylesheet" href="<?php echo base_url('public/sweetalert/dist/sweetalert.css'); ?>" />
            <?php 
              if ((!empty(empty($this->uri->segment(2)) || $this->uri->segment(2) == 'index')) && !empty($b_cards)) 
              {
                for ($i=1; $i <= 50; $i++) { 
                  ?> 
                          <link rel="stylesheet" href="<?php echo base_url('public/cards_small_assets/css/card-'.$i.'-'.getCurrentLanguages().'.css'); ?>" />

                  <?php
                }
              }




             ?>

          
      <title>Home</title>
      <style>
         .fa-check{
         color: #FFD21E !important;
         }
         .modal-footer a{
         color: #fff;
         }
         .slick-initialized{
         direction: ltr;
         }
         .slick-prev{
         left: 0px;
         right: 0px;
         }
         .slick-next{
         left: 0px;
         right: 0px;
         }
         .slide_doc{
         margin: 0px;
         }

        .add_card .cards img{
            opacity: .5;
        }
        .add_card .cards .selected{
            opacity: 1;
        }
        .slick-initialized{
            direction: ltr;
        }
        .slick-prev{
            left: 0px;
            right: 0px;
        }
        .slick-next{
            left: 0px;
            right: 0px;
        }
        .slide_doc{
            margin: 0px;
        }
        .add_card .card_cont .card_img_container img{
            width: 44%;
            height: auto;
        }
        .slick-slide:focus, .slick-current:focus, .slick-active:focus{
            outline: none !important;
        }
         .card_details_fav{
         font-family: 'Tajawal', sans-serif;
         }
         .fa-check{
         color: #ffc107 !important;
         }
         .modal-footer a{
         color: #fff;
         }
      </style>
   </head>
   <body class="<?php echo ($current_lang == "ar")?"rtl":"ltr";?>">

      <!-- top header -->
      <div class="top_header">
         <div class="container-fluid">
            <div class="row">
               <div class="header_links col-md-7 col-sm-12">
                  <div class="dropdown btn-group">
                     <a class="btn btn-outline-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <?php 
                        foreach (Countries() as $key => $value) {
                          if ($key == $this->session->userdata('country')) {
                           echo e_lang($value);
                          }
                        }
                        ?>
                     </a>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <?php 
                           foreach (Countries() as $key => $value) {
                             ?> 
                        <a class="dropdown-item" href="<?php echo base_url('site/changeCountry/'.$key); ?>"><?php echo $value; ?></a>
                        <?php
                           }
                           
                           
                           ?>
                     </div>
                  </div>
                  <!-- country dropdown -->
                  <!-- language dropdown-->
                  <div class="dropdown  btn-group">
                     <a class="btn btn-outline-info dropdown-toggle main_lang" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <?php 
                        if ($this->session->userdata('language') == 'en') {
                          echo e_lang('English');
                        }
                        else{
                          echo e_lang('Arabic');
                        }
                        ?>
                     </a>
                     <div class="dropdown-menu lang_dropdown" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item ar_languages" href="<?php echo base_url('site/changeLang/ar'); ?>" id="arabic_lang"><?php echo e_lang('Arabic'); ?></a>
                        <a class="dropdown-item eng_lang" href="<?php echo base_url('site/changeLang/en'); ?>" id="english_lang"><?php echo e_lang('English'); ?></a>
                     </div>
                  </div>
                  <!-- language dropdown-->
                  <div class="dropdown btn-group">
                     <a class="btn btn-outline-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <?php echo e_lang('Jobs') ?>
                     </a>
                     <div class="dropdown-menu job_radio" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#"><input type="radio" name="find_job"> <?php echo e_lang('Search about job'); ?></a>
                        <a class="dropdown-item" href="#"><input type="radio" name="find_job"> <?php echo e_lang('Search about workers'); ?></a>
                     </div>
                  </div>
                  <div class="header_card_btn btn-group">
                     <a href="#" class="btn btn-outline-info"><?php echo e_lang('Cards'); ?></a>
                  </div>
                  <?php 
                     if (!empty($this->session->userdata('user'))) {
                         ?> 
                  <div class="header_card_btn btn-group">
                     <a href="<?php echo base_url('site/logout'); ?>" class="btn btn-outline-info"><?php echo e_lang('Logout'); ?></a>
                  </div>
                  <?php
                     }
                     
                     
                     
                     ?>
               </div>
               <!-- header links --> 
               <!-- header social -->
               <div class="col-sm-12 col-md-5">
                  <div class="header_social">
                     <span><a href="<?php echo !empty(settings()->setting_you)?settings()->setting_you:''; ?>"><i class="fab fa-youtube"></i></a></span>
                     <span><a href="<?php echo !empty(settings()->linkedin)?settings()->linkedin:''; ?>"><i class="fab fa-linkedin"></i></a></span>
                     <span><a href="<?php echo !empty(settings()->instgram)?settings()->instgram:''; ?>"><i class="fab fa-instagram"></i></a></span>
                     <span><a href="<?php echo !empty(settings()->snap)?settings()->snap :''; ?>"><i class="fab fa-snapchat"></i></a></span>
                     <span><a href="<?php echo !empty(settings()->setting_twitt)?settings()->setting_twitt:''; ?>"><i class="fab fa-twitter"></i></a></span>
                     <span><a href="<?php echo !empty(settings()->setting_face)?settings()->setting_face:''; ?>"><i class="fab fa-facebook"></i></a></span>
                  </div>
               </div>
               <!-- header social -->
            </div>
            <!-- row -->
            <hr>
         </div>
         <!-- container -->
      </div>
      <!-- top header -->
      <!-- upper navbar -->
      <div class="upper_nav">
         <div class="container-fluid">
            <div class="row upper_nav_row">
               <div class="company_logo col-md-3 col-sm-12">
                  <div class="nav_logo">
                     <a href="<?php echo base_url('/') ?>"><img src="<?php echo base_url('public/assets/images/logo.png') ?>" class="img-fluid" alt="logo" /></a>
                  </div>
               </div>
               <!-- company_logo -->
               <div class="nav_login_links col-md-9 col-sm-12">
                  <?php 
                     if (!empty($this->session->userdata('user'))) 
                     {
                        ?> 
                  <div class="login_welcome row">
                     <div class="col-12">
                        <i class="far fa-user text-info"></i>
                        <span> <?php echo e_lang('Welcome'); ?><span> <?php echo $this->session->userdata('user')['user_name']; ?></span> </span>
                     </div>
                  </div>
                  <br>
                  <?php
                     }
                     
                     
                         ?> 
                  <div class="nav_links">
                     <?php 
                        if (empty($this->session->userdata('user'))) {
                        ?> 
                     <div class="header_card_btn btn-group log_btn">
                        <a href="<?php echo base_url('site/login'); ?>" class="btn btn-outline-info"><i class="fas fa-user"></i> <?php echo e_lang('Login'); ?> </a>
                     </div>
                     <div class="header_card_btn btn-group regi_btn">
                        <a href="<?php echo base_url('site/register') ?>" class="btn btn-outline-info"> <i class="fas fa-plus"></i> <?php echo e_lang('Register'); ?> </a>
                     </div>
                     <?php
                        }
                        
                        else{
                          ?> 
                     <div class="dropdown btn-group add_new_btn">
                        <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo e_lang('Add new') ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                           <a class="dropdown-item" href="<?php echo base_url('site/addCard') ?>"><input type="radio" name="add" /><?php echo e_lang('business card') ?></a>
                           <a class="dropdown-item" href="<?php echo base_url('site/addJob') ?>"><input type="radio" name="add" /> <?php echo e_lang('Jobs') ?></a>
                        </div>
                     </div>
                     <?php
                        }
                        
                        ?>
                  </div>
                  <?php
                     ?>
                  <!-- nav links -->
               </div>
               <!-- nav login links-->
            </div>
            <!-- row -->
         </div>
         <!-- container -->
      </div>
      <!-- End upper navbar -->
      <div class="filter_search">
         <div class="container-fluid">
            <div class="row">
               <div class="filter_container col-12">
                  <div class="bms">
                     <div class="country">
                        <div class="dropdown btn-group">
                           <button class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i><img src="<?php echo base_url('public/assets/images/location.svg') ?>" /></i> الدولة 
                           </button>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#">مصر</a>
                              <a class="dropdown-item" href="#">الاردن</a>
                              <a class="dropdown-item" href="#">عمان</a>
                           </div>
                        </div>
                     </div>
                     <div class="city">
                        <div class="dropdown btn-group">
                           <button class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i><img src="<?php echo base_url('public/assets/images/city.svg'); ?>" /></i> المدينة
                           </button>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#">القاهرة</a>
                              <a class="dropdown-item" href="#">الاسكندرية</a>
                              <a class="dropdown-item" href="#">المنصورة</a>
                           </div>
                        </div>
                     </div>
                     <div class="sections">
                        <div class="dropdown btn-group">
                           <button class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i><img src="<?php echo base_url('public/assets/images/options.svg') ?>" /></i> الاقسام
                           </button>
                           <div class="dropdown-menu division" aria-labelledby="dropdownMenuLink">
                              <?php 
                                 foreach (Categories() as $key => $category) 
                                 {
                                   ?> 
                              <a class="dropdown-item" href="#"><?php echo $category; ?></a>
                              <?php
                                 }
                                 
                                 
                                 
                                 ?>
                           </div>
                        </div>
                     </div>
                     <div class="type">
                        <div class="dropdown btn-group">
                           <button class="btn btn-light dropdown-toggle type_btn" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <?php echo e_lang('Type') ?>
                           </button>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#"><?php echo e_lang('card'); ?></a>
                              <a class="dropdown-item" href="#"><?php echo e_lang('Jobs'); ?></a>
                           </div>
                        </div>
                     </div>
                     <div class="search">
                        <input type="search" class="search_input" class="form-control" placeholder="<?php echo e_lang('What are you searching for') ?>" /> &nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="button" class="btn btn-warning search_icon"><i><img src="<?php echo base_url('public/assets/images/search.svg') ?>" /></i></button>
                     </div>
                  </div>
                  <!--big medium screen only -->
                  <div class="sm">
                     <div class="small_screen">
                        <div class="search_in_sm">
                           <input type="search" class="search_input" placeholder="<?php echo e_lang('What are you searching for'); ?>" />
                        </div>
                        <div class="type_s">
                           <div class="dropdown btn-group">
                              <button class="btn btn-light dropdown-toggle type_btn" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <?php echo e_lang('Type'); ?>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                 <a class="dropdown-item" href="#">كروت</a>
                                 <a class="dropdown-item" href="#">وظائف</a>
                              </div>
                           </div>
                        </div>
                        <div class="search_icon">
                           <a type="button" class="btn btn-warning"><i><img src="<?php echo base_url('public/assets/images/search.svg') ?>" /></i></a>
                        </div>
                        <!--small screen -->
                     </div>
                     <div class=" text-center more_filter_btn col-12">
                        <span class="more_span" style="cursor: pointer;"><?php echo e_lang('Advanced search'); ?> <i class="aro fas fa-angle-double-up"></i></span>
                     </div>
                     <!-- container hold buttons appear on small screen-->
                     <div class="slide_down">
                        <div class="country_s">
                           <div class="dropdown btn-group">
                              <button class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-map-marker-alt"></i> الدولة 
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                 <a class="dropdown-item" href="#">مصر</a>
                                 <a class="dropdown-item" href="#">الاردن</a>
                                 <a class="dropdown-item" href="#">عمان</a>
                              </div>
                           </div>
                        </div>
                        <div class="city_s">
                           <div class="dropdown btn-group">
                              <button class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="far fa-building"></i> المدينة
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                 <a class="dropdown-item" href="#">القاهرة</a>
                                 <a class="dropdown-item" href="#">الاسكندرية</a>
                                 <a class="dropdown-item" href="#">المنصورة</a>
                              </div>
                           </div>
                        </div>
                        <div class="section_s">
                           <div class="dropdown btn-group">
                              <button class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-sliders-h"></i> الاقسام
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                 <a class="dropdown-item" href="#">أطباء</a>
                                 <a class="dropdown-item" href="#">مهندسين</a>
                                 <a class="dropdown-item" href="#">محامين</a>
                                 <a class="dropdown-item" href="#">تجار</a>
                                 <a class="dropdown-item" href="#">مدرسين</a>
                                 <a class="dropdown-item" href="#">صيادلة</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end container hold buttons appear on small screen-->
                  </div>
               </div>
               <!-- filter container-->
            </div>
            <!-- row -->
         </div>
         <!-- container fluid -->
      </div>
      <!-- filter search -->
      <!-- header slider -->
      <div class="header_slider">
         <div class="container-fluid">
            <div class="row slider_row">
               <div class="main_head_slider col-12">
                  <div id="carouselExampleIndicators" class="carousel slide head_slider" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <?php 
                           if (!empty(slider())) 
                           {
                              $count = 0;
                              foreach (slider() as  $value) {
                                 
                                 if ($count == 0) {
                                    ?> 
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <?php
                           }
                           else{
                              ?>
                        <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $count; ?>"></li>
                        <?php
                           }
                           }
                           $count++;
                           }
                           else{
                           ?> 
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <?php
                           }
                           
                           ?>
                     </ol>
                     <div class="carousel-inner">
                        <?php 
                           if (!empty(slider())) 
                           {
                              $count = 0;
                              foreach (slider() as  $value) {
                                
                                 if ($count == 0) {
                                    ?> 
                        <div class="carousel-item active">
                           <a href="#"><img src="<?php echo base_url('uploads/'.$value); ?>" class="d-block" alt="car1"></a>
                        </div>
                        <?php
                           }
                           else{
                              ?> 
                        <div class="carousel-item">
                           <a href="#"><img src="<?php echo base_url('uploads/'.$value); ?>" class="d-block" alt="car1"></a>
                        </div>
                        <?php
                           }
                            $count++;
                           }
                           
                           }
                           else{
                           ?> 
                        <div class="carousel-item active">
                           <a href="#"><img src="<?php echo base_url('public/assets/images/car-1.png'); ?>" class="d-block" alt="car1"></a>
                        </div>
                        <div class="carousel-item">
                           <a href="#"><img src="<?php echo base_url('public/assets/images/car-2.png'); ?>" class="d-block" alt="car2"></a>
                        </div>
                        <div class="carousel-item">
                           <a href="#"><img src="<?php echo base_url('public/assets/images/car-3.png') ?>" class="d-block" alt="car3s"></a>
                        </div>
                        <?php
                           }
                           
                           ?>
                     </div>
                     <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
            <!-- row -->
         </div>
         <!-- container -->
      </div>
      <!-- header slider-->
      <!-- Home Content -->
      <br>
      <?php 
         if (!empty(validation_errors())) {
             ?> 
      <div class="alert alert-danger" role="alert">
         <?php echo  validation_errors(); ?>
      </div>
      <?php
         }
         if (!empty($this->session->flashdata('error'))) {
             ?> 
      <div class="alert alert-danger" role="alert">
         <?php echo  $this->session->flashdata('error'); ?>
      </div>
      <?php
         }
         if (!empty($this->session->flashdata('success'))) {
             ?> 
      <div class="alert alert-success" role="alert">
         <?php echo  $this->session->flashdata('success'); ?>
      </div>
      <?php
         }
         
         ?>