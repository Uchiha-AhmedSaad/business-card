<?php 

$ci = &get_instance();  
$ci->load->model('users_m'); 
$ci->load->model('mtger_cat_m'); 

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
					المتاجر الغير مفعلة
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
							<a href="<?php echo base_url()."admin/dis_mtger"; ?>" >
								المتاجر الغير مفعلة
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
								<i class="fa fa-edit"></i>المتاجر الغير مفعلة
							</div>
							
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
							<thead>
							<tr>
								<th>
									 اسم المتجر
								</th>
                                
                                	<th>
									 صاحب المتجر
								</th>
                                
                                
                                   	<th>
									 القسم
								</th>
                                
                                
                                	<th>
									 صورة المتجر
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
									 <?php echo $result->mtger_name; ?> 
								</td>
                                
                                <td>
									 <?php 
                                     $qq= $ci->users_m->find_all_where('user_id',$result->mtger_user);
                                     $dd= $qq->row();
                                     echo $dd->user_name;
                                     ?> 
								</td>
                                
                                
                                 <td>
									 <?php 
                                     $qq= $ci->mtger_cat_m->find_all_where('mtger_cat_id',$result->mtger_cat);
                                     $dd= $qq->row();
                                     echo $dd->mtger_cat_name;
                                     ?> 
								</td>
                                
                                
                                <td>
									<img style="width: 120px;height: 90px;" src="<?php echo base_url(); ?>uploads/<?php echo $result->mtger_photo; ?>" />  
								</td>
                                
								<td>
									 <a class="btn default btn-xs purple" href="<?php echo base_url(); ?>admin/do_edit_mtger/<?php echo $result->mtger_id; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-edit"></i> تعديل</a>
								</td>
								<td>
									 <a class="btn default btn-xs black" href="<?php echo base_url(); ?>admin/do_delete_mtger/<?php echo $result->mtger_id; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-trash-o"></i> حذف</a>
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
