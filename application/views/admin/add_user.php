<?php 

$ci = &get_instance();  
$ci->load->model('city_m');
$ci->load->model('sub_m');

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

			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
                    أضافة  عضو
             
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
							<a href="<?php echo base_url()."admin/add_user"; ?>" >
							 أضافة  عضو
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
								<i class="fa fa-reorder"></i> أضافة  عضو
							</div>
						
						</div>
                        
                        
                   
						<div class="portlet-body form">
                 
                
							<form role="form" method="post" action="">
                              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();  ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
								<div class="form-body">
									<div class="form-group">
										<label for="exampleInputEmail1">اسم المستخدم  :</label>
										<input type="text" name="user_name" value="<?php echo $user_name; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter text">
									</div>
                                    
                                    <div class="form-group">
                                    	<label for="exampleInputEmail1">نوعية التسجيل  :</label>
                    	<select class="form-control" name="user_type">
                        <option value="1">أفراد</option>
                        <option value="2">مؤسسات</option>
                        </select>
					</div>
             
             
             
                                    
                                  	<div class="form-group">
										<label for="exampleInputEmail1">البريد الالكترونى  :</label>
										<input type="text" name="user_email" value="<?php echo $user_email; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter text">
									</div>
                                    
                                       	<div class="form-group">
										<label for="exampleInputEmail1"> كلمة المرور  :</label>
										<input type="password" name="user_pass" value="" class="form-control" id="exampleInputEmail1" placeholder="Enter text">
									</div>
                                    
                     	          <div class="form-group">
										<label for="exampleInputEmail1"> رقم الهاتف  :</label>
										<input type="text" name="user_phone" value="<?php echo $user_phone; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter text">
									</div>
                                    
                                    
                                          <div class="form-group">
										<label for="exampleInputEmail1">الدولة  :</label>
            	<select class="form-control" name="user_country">
            <option value="">الدولة</option>
                    	<?php
                        $ci->load->model('country_m');
                        $q_country= $ci->country_m->find_all_asc('country_id');
                        foreach($q_country as $d_country){
                        ?>
                        <option value="<?php echo $d_country->country_id; ?>"><?php echo $d_country->country_name; ?></option>
                        <?php } ?>
                    </select>
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
