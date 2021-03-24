
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
					 الاعضاء الغير مفعلين
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
							<a href="<?php echo base_url()."admin/users"; ?>" >
						 الاعضاء الغير مفعلين
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
								<i class="fa fa-edit"></i> 	 الاعضاء الغير مفعلين
							</div>
							
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
				
							</div>
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
							<thead>
							<tr>
                            
                            	<th>
									#
								</th>
                                
                                
                                
								<th>
									 اسم العضو
								</th>
                                
                                	<th>
									 نوعية التسجيل
								</th>
                                
                                
                                
                                <th>
								البريد الالكترونى
								</th>
                                
                                <th>
									رقم الهاتف
								</th>
                                
                                
                                	<th>
									 تفعيل
								</th>
                                
                                	<th>
									 حظر
								</th>
                                
								<th>
									 عرض / تعديل
								</th>
								<th>
									 حذف
								</th>
							
							</tr>
							</thead>
							<tbody>
							
                             <?php
                             foreach($row->result() as $result){
                             
                             ?>
                             <tr>
                             
                             	<td>
									 <?php echo $result->user_id; ?> 
								</td>
                                
                                
								<td>
									 <?php echo $result->user_name; ?> 
								</td>
                                
                                		<td>
									 <?php
                                      if($result->user_type==1){
                                        echo "فرد";
                                      }else{
                                        echo "مؤسسة";
                                      }
                                      ?> 
								</td>
                                
                                
                                	<td>
									 <?php echo $result->user_email; ?> 
								</td>
                                
                                	<td>
									 <?php echo $result->user_phone; ?> 
								</td>
                                
                                	<td>
									 <a class="btn default btn-xs green" href="<?php echo base_url(); ?>admin/do_act_users/<?php echo $result->user_id ; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-check"></i>  تفعيل</a>
								</td>
                                
                                
                                	<td>
									 <a class="btn default btn-xs red" href="<?php echo base_url(); ?>admin/do_dis1_users/<?php echo $result->user_id ; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-band"></i>  حظر</a>
								</td>
                                
								<td>
									 <a class="btn default btn-xs purple" href="<?php echo base_url(); ?>admin/do_edit_users/<?php echo $result->user_id ; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-edit"></i>  عرض / تعديل</a>
								</td>
								<td>
									 <a class="btn default btn-xs black" href="<?php echo base_url(); ?>admin/do_delete_users/<?php echo $result->user_id ; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-trash-o"></i> حذف</a>
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
