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
                    البانرات الاعلانية
             
				   </h3>
					<ul class="page-breadcrumb breadcrumb">
					
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">
								الرئيسية
							</a>
							<i class="fa fa-angle-left"></i>
						</li>
					
						<li>
							<a href="<?php echo base_url(); ?>admin/banner">
							   التحكم فى البانرات الاعلانية
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
								<i class="fa fa-reorder"></i> البانرات الاعلانية
							</div>
						
						</div>
                        
                        
                   
						<div class="portlet-body form">
                 
                
							<form role="form" action="<?php echo base_url(); ?>admin/banner" method="post" enctype="multipart/form-data">
                                                  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();  ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
								<div class="form-body">
							
           
               <div style="background: #E02222;padding: 20px;color: #fff;text-align: center;">اعلانات الرئيسية</div>
                       
          
          
                         <div style="background: #555;padding: 10px;color: #fff;text-align: center;">البانر الاول</div>                          
                                    		<div class="form-group">
										<label for="exampleInputEmail1">رفع صورة للبانر  :</label>
										<input class="img_upload" type="file" name="imgURL1" accept="image/*" />
							
									</div>
                                    
                                    	<div class="form-group">
										<label for="exampleInputEmail1"> صورة البانر  :</label>
										<img src="<?php echo base_url(); ?>uploads/<?php echo $banner1_photo ; ?>" width="200px" height="250px" />
							
									</div>
                                    
                                    		<div class="form-group">
										<label for="exampleInputEmail1"> رابط البانر  :</label>
										<input type="text" value="<?php echo $banner1_link; ?>" name="banner1_link" class="form-control" id="exampleInputEmail1" placeholder="Enter text">
							
									</div>
                                    
                   <div style="background: #555;padding: 10px;color: #fff;text-align: center;">البانر الثانى</div>                            

                                                  		<div class="form-group">
										<label for="exampleInputEmail1">رفع صورة للبانر  :</label>
										<input class="img_upload" type="file" name="imgURL2" accept="image/*" />
							
									</div>
                                    
                                    	<div class="form-group">
										<label for="exampleInputEmail1"> صورة البانر  :</label>
										<img src="<?php echo base_url(); ?>uploads/<?php echo $banner2_photo ; ?>" width="200px" height="250px"/>
							
									</div>
                                    
                                    		<div class="form-group">
										<label for="exampleInputEmail1"> رابط البانر  :</label>
										<input type="text" value="<?php echo $banner2_link; ?>" name="banner2_link" class="form-control" id="exampleInputEmail1" placeholder="Enter text">
							
									</div>
                                    
                                    
                               <div style="background: #555;padding: 10px;color: #fff;text-align: center;">البانر الثالث</div>                
                                     
                                                  		<div class="form-group">
										<label for="exampleInputEmail1">رفع صورة للبانر  :</label>
										<input class="img_upload" type="file" name="imgURL3" accept="image/*" />
							
									</div>
                                    
                                    	<div class="form-group">
										<label for="exampleInputEmail1"> صورة البانر  :</label>
										<img src="<?php echo base_url(); ?>uploads/<?php echo $banner3_photo ; ?>" width="200px" height="250px" />
							
									</div>
                                    
                                    		<div class="form-group">
										<label for="exampleInputEmail1"> رابط البانر  :</label>
										<input type="text" value="<?php echo $banner3_link; ?>" name="banner3_link" class="form-control" id="exampleInputEmail1" placeholder="Enter text">
							
									</div>
                                    
                                
                                   <div style="background: #555;padding: 10px;color: #fff;text-align: center;">البانر الرابع</div>             
                                    
                                                  		<div class="form-group">
										<label for="exampleInputEmail1">رفع صورة للبانر :</label>
										<input class="img_upload" type="file" name="imgURL4" accept="image/*" />
							
									</div>
                                    
                                    	<div class="form-group">
										<label for="exampleInputEmail1"> صورة البانر  :</label>
										<img src="<?php echo base_url(); ?>uploads/<?php echo $banner4_photo ; ?>" width="200px" height="250px"/>
							
									</div>
                                    
                                    		<div class="form-group">
										<label for="exampleInputEmail1"> رابط البانر :</label>
										<input type="text" value="<?php echo $banner4_link; ?>" name="banner4_link" class="form-control" id="exampleInputEmail1" placeholder="Enter text">
							
									</div>
                                    
                                    
                                    
                               <div style="background: #E02222;padding: 20px;color: #fff;text-align: center;">اعلانات الاقسام</div>                
                         
                         
                         
                              <div style="background: #555;padding: 10px;color: #fff;text-align: center;">الاعلان الاول</div>                      
                          	<div class="form-group">
										<label for="exampleInputEmail1">رفع صورة للبانر  :</label>
										<input class="img_upload" type="file" name="imgURL5" accept="image/*" />
							
									</div>
                                    
                                    	<div class="form-group">
										<label for="exampleInputEmail1">  صورة البانر :</label>
										<img src="<?php echo base_url(); ?>uploads/<?php echo $banner5_photo ; ?>" width="200px" height="250px" />
							
									</div>
                                    
                                    		<div class="form-group">
										<label for="exampleInputEmail1"> رابط البانر :</label>
										<input type="text" value="<?php echo $banner5_link; ?>" name="banner5_link" class="form-control" id="exampleInputEmail1" placeholder="Enter text">
							
									</div>
                                    
                         
                          
                             
                              <div style="background: #555;padding: 10px;color: #fff;text-align: center;">الاعلان الثانى</div>                      
                          	<div class="form-group">
										<label for="exampleInputEmail1">رفع صورة للبانر  :</label>
										<input class="img_upload" type="file" name="imgURL6" accept="image/*" />
							
									</div>
                                    
                                    	<div class="form-group">
										<label for="exampleInputEmail1">  صورة البانر :</label>
										<img src="<?php echo base_url(); ?>uploads/<?php echo $banner6_photo ; ?>" width="200px" height="250px" />
							
									</div>
                                    
                                    		<div class="form-group">
										<label for="exampleInputEmail1"> رابط البانر :</label>
										<input type="text" value="<?php echo $banner6_link; ?>" name="banner6_link" class="form-control" id="exampleInputEmail1" placeholder="Enter text">
							
									</div> 
                                    
                                           
         
                              <div style="background: #555;padding: 10px;color: #fff;text-align: center;">الاعلان الثالث</div>                      
                          	<div class="form-group">
										<label for="exampleInputEmail1">رفع صورة للبانر  :</label>
										<input class="img_upload" type="file" name="imgURL7" accept="image/*" />
							
									</div>
                                    
                                    	<div class="form-group">
										<label for="exampleInputEmail1">  صورة البانر :</label>
										<img src="<?php echo base_url(); ?>uploads/<?php echo $banner7_photo ; ?>" width="200px" height="250px" />
							
									</div>
                                    
                                    		<div class="form-group">
										<label for="exampleInputEmail1"> رابط البانر :</label>
										<input type="text" value="<?php echo $banner7_link; ?>" name="banner7_link" class="form-control" id="exampleInputEmail1" placeholder="Enter text">
							
									</div>
                                    
                                    
                                    
                                    
                    
                              <div style="background: #555;padding: 10px;color: #fff;text-align: center;">الاعلان الرابع</div>                      
                          	<div class="form-group">
										<label for="exampleInputEmail1">رفع صورة للبانر  :</label>
										<input class="img_upload" type="file" name="imgURL8" accept="image/*" />
							
									</div>
                                    
                                    	<div class="form-group">
										<label for="exampleInputEmail1">  صورة البانر :</label>
										<img src="<?php echo base_url(); ?>uploads/<?php echo $banner8_photo ; ?>" width="200px" height="250px"/>
							
									</div>
                                    
                                    		<div class="form-group">
										<label for="exampleInputEmail1"> رابط البانر :</label>
										<input type="text" value="<?php echo $banner8_link; ?>" name="banner8_link" class="form-control" id="exampleInputEmail1" placeholder="Enter text">
							
									</div>
                                                    
                                  
								</div>
								<div class="form-actions">
									<input type="submit" name="submit" value="تعديل" class="btn green">
									<input type="reset" name="clear" value="تراجع" class="btn red">
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
