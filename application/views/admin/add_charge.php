
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
                    أضافة طريقة شحن
             
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
							<a href="<?php echo base_url()."admin/add_charge"; ?>" >
						 أضافة طريقة شحن
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
								<i class="fa fa-reorder"></i>  أضافة بنك
							</div>
						
						</div>
                        
                        
                   
						<div class="portlet-body form">
                 
                
<form action="<?php echo base_url(); ?>admin/add_charge" method="post" enctype="multipart/form-data">


<div class="form-body">
        <div class="make-ads-box">


            <div class="row">
                <div class=" col-xs-12 pull-right col-border">
                    <div class="register-form">

                            
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1"> عنوان الطريقة: </label>
                                <input name="charge_title" type="text" class="form-control" id="exampleInputEmail1" placeholder="قم بادخال عنوان الطريقة هنا" />
                           <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();  ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                            </div>
                            
                            
           <div class="form-group">
                                <label for="exampleInputEmail1"> تفاصيل الطريقة: </label>
                                <input name="charge_content" type="text" class="form-control" id="exampleInputEmail1" placeholder="قم بادخال رقم الحساب هنا" />
                          
                            </div>
                            
                            

                            
                        				<div class="form-group">
										<label for="exampleInputEmail1">رفع صورة للطريقة :</label>
									    <input type="file" id="file" name="imgURL"  accept="image/*"/>
							
									</div>      
    
                          
                            <input type="submit" value="أضافة طريقة" name="submit" class="btn btn-success">
                        
                    </div>
                </div>
               
            </div>
        </div>
        
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
