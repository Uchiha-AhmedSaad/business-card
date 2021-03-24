
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

			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
                    أضافة مدير
             
				   </h3>
					<ul class="page-breadcrumb breadcrumb">
					
						<li>
							<i class="fa fa-home"></i>
							<a href="<?php echo base_url()."admin"; ?>">
								الرئيسية
							</a>
							<i class="fa fa-angle-left"></i>
						</li>
						<li>
							<a href="<?php echo base_url()."admin/add_admin"; ?>" >
								أضافة مدير
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
								<i class="fa fa-reorder"></i> أضافة مدير
							</div>
						
						</div>
                        
                        
                   
						<div class="portlet-body form">
                 
                
							<form role="form" method="post" action="">
                              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();  ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
								<div class="form-body">
									<div class="form-group">
										<label for="exampleInputEmail1">اسم المدير :</label>
										<input type="text" name="admin_name" class="form-control" id="exampleInputEmail1" placeholder="Enter text">
							
									</div>

									<div class="form-group">
										<label for="exampleInputPassword1">كلمة المرور :</label>
										<div class="input-group">
											<input type="password" name="admin_pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
											<span class="input-group-addon">
												<i class="fa fa-user"></i>
											</span>
										</div>
									</div>


								<div class="form-group">
                                        
										<label for="exampleInputEmail1">الصلاحيات :</label>
                                        <br />
										<input type="checkbox" name="admin_c1" value="1"> التحكم فى الاعدادات <br />
                                        <input type="checkbox" name="admin_c2" value="1"> صندوق الرسائل <br />
                                        <input type="checkbox" name="admin_c3" value="1"> رسائل الاعضاء <br />
                                        <input type="checkbox" name="admin_c5" value="1"> التحكم فى السلايدر <br />
                                        <input type="checkbox" name="admin_c6" value="1"> عمولة الموقع <br />
                                        <input type="checkbox" name="admin_c8" value="1"> التحكم فى الدول <br />
                                        <input type="checkbox" name="admin_c10" value="1"> التحكم فى المدن <br />
                                        <input type="checkbox" name="admin_c11" value="1"> التحكم فى الأقسام <br />
                                        <input type="checkbox" name="admin_c15" value="1"> التحكم فى الاعلانات <br />
                                        <input type="checkbox" name="admin_c16" value="1"> التحكم فى التقييمات <br />
                                        <input type="checkbox" name="admin_c18" value="1"> مفضلات الاعضاء <br />
                                        <input type="checkbox" name="admin_c19" value="1"> التحكم فى الاعضاء <br />
                                        <input type="checkbox" name="admin_c20" value="1"> التحكم فى المديرين <br />
 							
					</div>
				
			
				
								</div>
								<div class="form-actions">
									<input type="submit" name="submit" value="اضافة" class="btn green">
									<button type="button" class="btn red">تراجع</button>
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
