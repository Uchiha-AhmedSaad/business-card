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
            تعديل صفحة الاعمال
             
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
								<i class="fa fa-reorder"></i> تعديل صفحة الاعمال
							</div>
						
						</div>
                        
                        
                   
						<div class="portlet-body form">
                 
                
							<form role="form" method="post" action="">
                              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();  ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
		
        <div class="form-body">					
    	<div class="form-group">
				<label for="exampleInputEmail1">القسم :</label>

                <select  name="bus_cat" class="form-control" id="exampleInputEmail1">
               <?php foreach($cat as $catt){ ?> 
               <option <?php if($catt->bus_cat_id==$bus_cat) echo"selected"; ?> value="<?php echo $catt->bus_cat_id; ?>"><?php echo $catt->bus_cat_name; ?></option>
               <?php } ?>
                </select>
			</div>
           </div> 
            
                	           <div class="form-body">
									<div class="form-group">
										<label for="exampleInputEmail1">اسم الصفحة:</label>
										<input type="text" value="<?php echo $bus_name; ?>" name="bus_name" class="form-control" id="exampleInputEmail1" placeholder="Enter text">
									</div>
								</div>
                                
                                
           
                                
                    
                                
                                
                      	<div class="form-body">
									<div class="form-group">
										<label for="exampleInputEmail1">العنوان :</label>
							        <textarea name="bus_adress" class="form-control" id="exampleInputEmail1">
                                    <?php echo $bus_adress; ?>
                                    </textarea>
									</div>

								</div>
                                
                                
                                
                                
                                   <div class="form-body">
									<div class="form-group">
										<label for="exampleInputEmail1">رقم الهاتف:</label>
										<input type="text" value="<?php echo $bus_phone; ?>" name="bus_phone" class="form-control" id="exampleInputEmail1" placeholder="Enter text">
									</div>
								</div>  
                                
                                
                    <div class="form-body">
									<div class="form-group">
										<label for="exampleInputEmail1">رابط الفيس بوك:</label>
										<input type="text" value="<?php echo $bus_face; ?>" name="bus_face" class="form-control" id="exampleInputEmail1" placeholder="Enter text">
									</div>
								</div>                            
                                
                                
                                   <div class="form-body">
									<div class="form-group">
										<label for="exampleInputEmail1">رابط تويتر:</label>
										<input type="text" value="<?php echo $bus_twitt; ?>" name="bus_twitt" class="form-control" id="exampleInputEmail1" placeholder="Enter text">
									</div>
								</div>    
                                
                                
                                        <div class="form-body">
									<div class="form-group">
										<label for="exampleInputEmail1">الموقع الالكترونى:</label>
										<input type="text" value="<?php echo $bus_site; ?>" name="bus_site" class="form-control" id="exampleInputEmail1" placeholder="Enter text">
									</div>
								</div>             
                                
                                  	<div class="form-body">
									<div class="form-group">
										<label for="exampleInputEmail1">نبذة عن الصفحة :</label>
							        <textarea name="bus_about" class="form-control" id="exampleInputEmail1">
                                    <?php echo $bus_about; ?>
                                    </textarea>
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
