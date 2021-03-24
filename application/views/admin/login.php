<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>لوحة تحكم الأدارة</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>public/admin_files/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>public/admin_files/assets/plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>public/admin_files/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/admin_files/assets/plugins/select2/select2-rtl.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/admin_files/assets/plugins/select2/select2-metronic-rtl.css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo base_url() ?>public/admin_files/assets/css/style-metronic-rtl.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>public/admin_files/assets/css/style-rtl.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>public/admin_files/assets/css/style-responsive-rtl.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>public/admin_files/assets/css/plugins-rtl.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>public/admin_files/assets/css/themes/default-rtl.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo base_url() ?>public/admin_files/assets/css/pages/login-rtl.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>public/admin_files/assets/css/custom-rtl.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
  <link href='http://fonts.googleapis.com/earlyaccess/droidarabickufi.css' rel='stylesheet' type='text/css'/> <link href='http://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css' rel='stylesheet' type='text/css'/> <link href='http://fonts.googleapis.com/earlyaccess/lateef.css' rel='stylesheet' type='text/css'/> <link href='http://fonts.googleapis.com/earlyaccess/scheherazade.css' rel='stylesheet' type='text/css'/> <link href='http://fonts.googleapis.com/earlyaccess/thabit.css' rel='stylesheet' type='text/css'/>

</head>
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">

</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content" style="text-align: center">

<div class="alert-warning">
<?php

echo validation_errors();

?>
</div>
	<!-- BEGIN LOGIN FORM -->
	<form class="login-form" action="" method="post">
      <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();  ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
    <img src="<?php echo base_url(); ?>public/logo.png" alt="" style="max-width: 200px;" />   
		<div style="font-size: 20px;margin: 20px 0px;">تسجيل دخول الادارة  </div>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
				 Enter any username and password.
			</span>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">اسم المستخدم</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="اسم المستخدم" name="admin_name"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">كلمة المرور</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="كلمة المرور" name="admin_pass"/>
			</div>
		</div>
		<div class="form-actions">            
            <input type="submit" value="دخول" name="submit"/>
		</div>

	</form>
	<!-- END LOGIN FORM -->

</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
	
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
	<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/respond.min.js"></script>
	<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/excanvas.min.js"></script> 
	<![endif]-->
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="vassets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url() ?>public/admin_files/assets/scripts/core/app.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>public/admin_files/assets/scripts/custom/login.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
		jQuery(document).ready(function() {     
		  App.init();
		  Login.init();
		});
	</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>