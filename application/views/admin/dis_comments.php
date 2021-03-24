
<?php 

$ci = &get_instance();  
$ci->load->model('ads_m');

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
					التعليقات الغير مفعلة
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
							<a href="<?php echo base_url()."admin/dis_comments"; ?>" >
								التعليقات الغير مفعلة
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
								<i class="fa fa-edit"></i>		التعليقات الغير مفعلة
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
									التعليق
								</th>
                                
                                
                                
                              
                                		<th>
									 الاعلان
								</th>
                                
                                   	<th>
									 بواسطة
								</th>
                                 
       
                                
                                    
                                		<th>
									 التاريخ
								</th>
                                
                                
                                	<th>
									 تفعيل
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
									 <?php echo $result->comment_id; ?> 
								</td>
                                
                                	<td>
									 <?php echo $result->comment_details; ?> 
								</td>
                                
                                
                                
                                	<td>
									 <?php
                              
                                      $q= $ci->ads_m->find_all_where('ads_id',$result->comment_gid);
                                      $d= $q->row();
                                      echo $d->ads_title;
                                       ?> 
								</td>
                                
                                 <td>
									 <?php 
                                     $ci->load->model('users_m');
                                     $q= $ci->users_m->find_all_where('user_id',$result->comment_by);
                                     $d= $q->row();
                                     echo $d->user_name;
                                     ?> 
								</td>
                                  	<td>
									 <?php echo $ci->ads_m->timeBetween($result->comment_date,time()); ?> 
								</td>
                                
                                
                                	<td>
									 <a class="btn default btn-xs black" href="<?php echo base_url(); ?>admin/do_active_comments/<?php echo $result->comment_id; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-trash-o"></i> تفعيل</a>
								</td>
							
								<td>
									 <a class="btn default btn-xs black" href="<?php echo base_url(); ?>admin/do_delete_comment/<?php echo $result->comment_id; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-trash-o"></i> حذف</a>
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
