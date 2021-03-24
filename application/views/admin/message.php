
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
	
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					الرسائل الواردة
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
							<a href="<?php echo base_url()."admin/msg"; ?>" >
								الرسائل الواردة
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
								<i class="fa fa-edit"></i>جدول الرسائل الواردة
							</div>
							
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
				
						
							</div>
							<table  class="table table-striped table-hover table-bordered" id="sample_editable_1">
							<thead>
							<tr>
                            
                            	<th>
									 #
								</th>
								<th>
									 العضو المرسل
								</th>
                                
                                <th>
								 العضو المستلم
								</th>
                                
                                <th>
									 عنوان الرسالة
								</th>
                                
                                <th>
									 محتوى الرسالة
								</th>
                                      
                                <th>
									التاريخ
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
									 <?php echo $result->message_id; ?> 
								</td>
                                
								<td>
									 <?php
                                     $ci->load->model('users_m');
                                     $q_user= $ci->users_m->find_all_where('user_id',$result->message_sender);
                                     $d_user= $q_user->row();
                                     
                                       ?> 
                                       <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal<?php echo $d_user->user_id; ?>">
<?php echo $d_user->user_name; ?>
</button>

<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $d_user->user_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">تفاصيل العضو</h4>
      </div>
      <div class="modal-body">
      <table class="table table-bordered table-hover">
      <tr>
      <td>#</td>
      <td><?php echo $d_user->user_id; ?></td>
      </tr>
      
       <tr>
      <td>الاسم</td>
      <td><?php echo $d_user->user_name; ?></td>
      </tr>
      
       <tr>
      <td>البريد الالكترونى</td>
      <td><?php echo $d_user->user_email; ?></td>
      </tr>
      
       <tr>
      <td>رقم الهاتف</td>
      <td><?php echo $d_user->user_phone; ?></td>
      </tr>
      
      </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
      </div>
    </div>
  </div>
</div>
								</td>
                                
                                	<td>
									 <?php
                                     $ci->load->model('users_m');
                                     $q_user= $ci->users_m->find_all_where('user_id',$result->message_recever);
                                     $d_user= $q_user->row();
                                     
                                       ?> 
                                       <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal<?php echo $d_user->user_id; ?>">
<?php echo $d_user->user_name; ?>
</button>

<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $d_user->user_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">تفاصيل العضو</h4>
      </div>
      <div class="modal-body">
      <table class="table table-bordered table-hover">
      <tr>
      <td>#</td>
      <td><?php echo $d_user->user_id; ?></td>
      </tr>
      
       <tr>
      <td>الاسم</td>
      <td><?php echo $d_user->user_name; ?></td>
      </tr>
      
       <tr>
      <td>البريد الالكترونى</td>
      <td><?php echo $d_user->user_email; ?></td>
      </tr>
      
       <tr>
      <td>رقم الهاتف</td>
      <td><?php echo $d_user->user_phone; ?></td>
      </tr>
      
      </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
      </div>
    </div>
  </div>
</div>
								</td>
                                	<td>
									 <?php echo $result->message_title; ?> 
								</td>
                                
                                
                                
                                	<td>
									 <?php echo $result->message_content; ?> 
								</td>
                                
                                	<td>
								 <?php $ci->load->model('ads_m'); echo $ci->ads_m->timeBetween($result->message_date,time()); ?>
								</td>
                                
                             
							
								<td>
									 <a class="btn default btn-xs black" href="<?php echo base_url(); ?>admin/do_delete_message/<?php echo $result->message_id; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');" ><i class="fa fa-trash-o"></i> حذف</a>
								</td>
					      	   </tr>
                               



						  <?php } ?>
							
							<tr>
						
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT -->
		</div>
	</div>
	<!-- END CONTENT -->
