
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
                    أضافة باقة

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
							<a href="<?php echo base_url()."admin/add_package"; ?>" >
								 أضافة باقة
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
								<i class="fa fa-reorder"></i>  أضافة باقة
							</div>

						</div>



						<div class="portlet-body form">


<form action="" method="post" enctype="multipart/form-data">


<div class="form-body">
        <div class="make-ads-box">


            <div class="row">
                <div class=" col-xs-12 pull-right col-border">
                    <div class="register-form">



                            <div class="form-group">
                                <label for="exampleInputEmail1">اسم الباقة: </label>
                                <input name="package_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">اسم الباقة بالانجليزية: </label>
                                <input name="package_name_en" type="text" class="form-control" id="exampleInputEmail1" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label for="package_number">المدة: </label>
                                <input name="package_number" type="number" class="form-control" id="package_number" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label for="country">الدولة: </label>
							    <select class="form-control" name="country_id" id="country">
							    	<option value="0">إختر الدولة</option>
							    	<?php 
							    		foreach ($countries as $country) {
							    			?> 
							    				<option value="<?php echo $country->country_id; ?>"><?php echo $country->country_name ?></option>
							    			<?php
							    		}


							    	 ?>
							      
							    </select>
                           
                            </div>
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();  ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />

                             <div class="form-group">
                                <label for="exampleInputEmail1"> السعر : </label>
                                <input name="package_price" type="number" class="form-control" id="exampleInputEmail1" placeholder="" />

                            </div>





                            <input type="submit" value="أضافة " name="submit" class="btn btn-success">

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
