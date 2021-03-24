
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
				عرض / تعديل الماركات
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
							<a href="<?php echo base_url()."admin/edit_marka"; ?>" >
								عرض / تعديل الماركات
							</a>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
            
     
            
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i> 	عرض / تعديل الماركات
							</div>
							
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="btn-group">
								<a href="<?php echo base_url() ?>admin/add_marka">
                                	<button id="sample_editable_1_new" class="btn green">
									أضافة ماركة <i class="fa fa-plus"></i>
									</button></a>
								</div>
						
							</div>
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
							<thead>
							<tr>
								<th>
									 اسم الماركة
								</th>
                                
                                
                                
                                	<th>
								 الصورة
								</th>
								<th>
									 تعديل
								</th>
								<th>
									 حذف
								</th>
							
							</tr>
							</thead>
							<tbody>
							
                             <?php
                             foreach($row as $result){
                             
                             ?>
                             <tr>
								<td>
									 <?php echo $result->marka_name; ?> 
								</td>
                                
                                
                                	<td>
									 <img style="width: 60px;height: 40px;" src="<?php echo base_url(); ?>uploads/<?php echo $result->marka_photo; ?> "/>
								</td>
								<td>
									 <a class="btn default btn-xs purple" href="<?php echo base_url(); ?>admin/do_edit_marka/<?php echo $result->marka_id; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-edit"></i> تعديل</a>
								</td>
								<td>
									 <a class="btn default btn-xs black" href="<?php echo base_url(); ?>admin/do_delete_marka/<?php echo $result->marka_id; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-trash-o"></i> حذف</a>
								</td>
					      	   </tr>
						  <?php } ?>
							
							<tr>
						
							</tbody>
							</table>
                             <?php  
echo $this->pagination->create_links(); ?>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT -->
		</div>
	</div>
	<!-- END CONTENT -->
