

<?php

$ci = &get_instance();
$ci -> load -> model('slider_m');
$ci -> load -> model('msg_m');
$ci -> load -> model('general_model');
?>

<?php
$v = validation_errors() ;
if((isset($message) && !empty($message)) || !empty($v) || $ci -> session -> userdata('message')  ) {
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<div id="overlay" class="message_overlay"></div>
<div id="dialog" class="dialog_header">
<div class="dialog_title align_right"><a id="close_dialog" href="#">X</a> <span style="float: right;">Message</span></div>
<div style="padding-left: 15px;" colspan="2" id="table_body"><p class="messages"><?php echo (isset($message))? $message : ''; ?><?php echo $ci -> session -> userdata('message'); ?><?php echo validation_errors(); ?></p></div>
</div>

<?php

$ci -> session -> unset_userdata('message');
}
 ?>

<!DOCTYPE html>

<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.1.1
Version: 2.0.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="ar" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>لوحة تحكم الموقع</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>public/admin_files/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>public/admin_files/assets/plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>public/admin_files/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="<?php echo base_url() ?>public/admin_files/assets/plugins/gritter/css/jquery.gritter-rtl.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>public/admin_files/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>public/admin_files/assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>public/admin_files/assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>public/admin_files/assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo base_url() ?>public/admin_files/assets/css/style-metronic-rtl.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>public/admin_files/assets/css/style-rtl.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>public/admin_files/assets/css/style-responsive-rtl.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>public/admin_files/assets/css/plugins-rtl.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>public/admin_files/assets/css/pages/tasks-rtl.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>public/admin_files/assets/css/themes/default-rtl.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo base_url() ?>public/admin_files/assets/css/custom-rtl.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>

    <link href='https://fonts.googleapis.com/earlyaccess/droidarabickufi.css' rel='stylesheet' type='text/css'/> <link href='http://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css' rel='stylesheet' type='text/css'/> <link href='http://fonts.googleapis.com/earlyaccess/lateef.css' rel='stylesheet' type='text/css'/> <link href='http://fonts.googleapis.com/earlyaccess/scheherazade.css' rel='stylesheet' type='text/css'/> <link href='http://fonts.googleapis.com/earlyaccess/thabit.css' rel='stylesheet' type='text/css'/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

          <script src="<?php echo base_url(); ?>public/assets/js/message.js"></script>
  <link href="<?php echo base_url(); ?>public/assets/css/message.css" rel="stylesheet" />



   <!-- <script src='//cloud.tinymce.com/stable/tinymce.min.js?apiKey=uclfixv7t4gh02gxi4kttrfpc3y7l64yq1zh6i39jpyl0byo'></script> -->
  <script>
  tinymce.init({
    selector: '.mytextarea'
  });
  </script>

  <style>
  .mce-notification.mce-has-close{
    display: none !important;
  }
  </style>


</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-fixed-top">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="header-inner">
		<!-- BEGIN LOGO -->
		<a class="navbar-brand" href="<?php echo base_url()."admin" ?>" style="color: #ddd;display: block;margin-right: 37px;">
		لوحة تحكم الموقع
		</a>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<img src="<?php echo base_url(); ?>public/admin_files/assets/img/menu-toggler.png" alt=""/>
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<ul class="nav navbar-nav pull-right">


			<!-- BEGIN USER LOGIN DROPDOWN -->
			<li class="dropdown user">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" src="<?php echo base_url(); ?>public/admin_files/assets/img/avatar1_small.jpg"/>
					<span class="username">
						 <?php if($ci->general_model->is_login_in_admin()){
						  echo $ci->session->userdata('admin_name');
						 }
                          ?>
					</span>
					<i class="fa fa-angle-down"></i>
				</a>
				<ul class="dropdown-menu">

					<li>
						<a href="<?php echo base_url()."admin/msg"; ?>">
							<i class="fa fa-envelope"></i> صندوق الرسائل
							<span class="badge badge-danger">
							<?php
                            echo $ci->msg_m->count_all();
                            ?>
							</span>
						</a>
					</li>

					<li class="divider">
					</li>
					<li>
						<a href="javascript:;" id="trigger_fullscreen">
							<i class="fa fa-arrows"></i> شاشة كاملة
						</a>
					</li>

					<li>
						<a href="<?php echo base_url(); ?>admin/logout">
							<i class="fa fa-key"></i> خروج
						</a>
					</li>
				</ul>
			</li>
			<!-- END USER LOGIN DROPDOWN -->
		</ul>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>

<!-- BEGIN CONTAINER -->
<div class="page-container">
