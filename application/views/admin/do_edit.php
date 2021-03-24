
<?php 

$ci = &get_instance();  
?>

	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN STYLE CUSTOMIZER -->
			<div class="theme-panel hidden-xs hidden-sm">
				<div class="toggler">
				</div>
				<div class="toggler-close">
				</div>
				<div class="theme-options">
					<div class="theme-option theme-colors clearfix">
						<span>
							 THEME COLOR
						</span>
						<ul>
							<li class="color-black current color-default" data-style="default">
							</li>
							<li class="color-blue" data-style="blue">
							</li>
							<li class="color-brown" data-style="brown">
							</li>
							<li class="color-purple" data-style="purple">
							</li>
							<li class="color-grey" data-style="grey">
							</li>
							<li class="color-white color-light" data-style="light">
							</li>
						</ul>
					</div>
					<div class="theme-option">
						<span>
							 Layout
						</span>
						<select class="layout-option form-control input-small">
							<option value="fluid" selected="selected">Fluid</option>
							<option value="boxed">Boxed</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
							 Header
						</span>
						<select class="header-option form-control input-small">
							<option value="fixed" selected="selected">Fixed</option>
							<option value="default">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
							 Sidebar
						</span>
						<select class="sidebar-option form-control input-small">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
							 Sidebar Position
						</span>
						<select class="sidebar-pos-option form-control input-small">
							<option value="left" selected="selected">Left</option>
							<option value="right">Right</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
							 Footer
						</span>
						<select class="footer-option form-control input-small">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
				</div>
			</div>
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
                    تعديل الاسم
             
				   </h3>
					<ul class="page-breadcrumb breadcrumb">
					
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">
								Home
							</a>
							<i class="fa fa-angle-left"></i>
						</li>
						<li>
							<a href="#">
								Form Stuff
							</a>
							<i class="fa fa-angle-left"></i>
						</li>
						<li>
							<a href="#">
								Form Controls
							</a>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-xs-12 ">
       
					<!-- BEGIN SAMPLE FORM PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i> تعديل الاسم
							</div>
						
						</div>
                        
                        
                   
						<div class="portlet-body form">
                 
                
							<form role="form" method="post" action="">
								<div class="form-body">
									<div class="form-group">
										<label for="exampleInputEmail1">اسم المدير :</label>
										<input type="text" value="<?php echo $admin_name; ?>" name="admin_name" class="form-control" id="exampleInputEmail1" placeholder="Enter text">
							
									</div>

				
                
                
                								<div class="form-group">
                                        
										<label for="exampleInputEmail1">الصلاحيات :</label>
                                        <br />
										<input type="checkbox" name="admin_c1" value="1" <?php if($admin_c1==1) echo "checked"; ?>> التحكم فى الاعدادات <br />
                                        <input type="checkbox" name="admin_c2" value="1" <?php if($admin_c2==1) echo "checked"; ?>> صندوق الرسائل <br />
                                        <input type="checkbox" name="admin_c3" value="1" <?php if($admin_c3==1) echo "checked"; ?>> رسائل الاعضاء <br />
                                        <input type="checkbox" name="admin_c5" value="1" <?php if($admin_c5==1) echo "checked"; ?>> التحكم فى السلايدر <br />
                                        <input type="checkbox" name="admin_c6" value="1" <?php if($admin_c6==1) echo "checked"; ?>> عمولة الموقع <br />
                                        <input type="checkbox" name="admin_c8" value="1" <?php if($admin_c8==1) echo "checked"; ?>> التحكم فى الدول <br />
                                        <input type="checkbox" name="admin_c9" value="1" <?php if($admin_c9==1) echo "checked"; ?>> التحكم فى المناطق <br />
                                        <input type="checkbox" name="admin_c10" value="1" <?php if($admin_c10==1) echo "checked"; ?>> التحكم فى المدن <br />
                                        <input type="checkbox" name="admin_c11" value="1" <?php if($admin_c11==1) echo "checked"; ?>> التحكم فى الأقسام <br />
                                        <input type="checkbox" name="admin_c15" value="1" <?php if($admin_c15==1) echo "checked"; ?>> التحكم فى الاعلانات <br />
                                        <input type="checkbox" name="admin_c16" value="1" <?php if($admin_c16==1) echo "checked"; ?>> التحكم فى التقييمات <br />
                                        <input type="checkbox" name="admin_c18" value="1" <?php if($admin_c18==1) echo "checked"; ?>> مفضلات الاعضاء <br />
                                        <input type="checkbox" name="admin_c19" value="1" <?php if($admin_c19==1) echo "checked"; ?>> التحكم فى الاعضاء <br />
                                        <input type="checkbox" name="admin_c20" value="1" <?php if($admin_c20==1) echo "checked"; ?>> التحكم فى المديرين <br />
 							
					</div>

			
				
			
				
								</div>
								<div class="form-actions">
									<input type="submit" name="submit" value="تعديل" class="btn green">
									<input type="submit" name="clear" value="تراجع" class="btn red">
								</div>
							</form>
						</div>
					</div>
					<!-- END SAMPLE FORM PORTLET-->


				</div>

			</div>


		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
