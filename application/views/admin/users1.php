
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
					 الاعضاء المفعلين
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
							<a href="<?php echo base_url()."admin/users1"; ?>" >
						 الاعضاء المفعلين
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
								<i class="fa fa-edit"></i> 	 الاعضاء المفعلين
							</div>
							
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
				
							</div>
                            
                            
                            
                            
                            
                                                          <?php
     
     // search
     if($ci->input->post('search')){
      $ci->load->model('users_m');
      $x= $ci->input->post('s_value');
      $data = $ci->users_m->queryy("select * from users where user_active=1 and user_name like '%".$x."%' or user_email like '%".$x."%' or user_phone like '%".$x."%' order by user_id desc");
        
      if($data->num_rows()>0){
      ?>
      <div class="portlet box blue" style="padding: 10px !important;color: #fff;">نتيجة البحث</div>
      	<table class="table table-striped table-hover table-bordered">
		<thead>
							<tr>
                            
                            	<th>
									#
								</th>
                                
                                
                                
								<th>
									 اسم العضو
								</th>
                                
                                
                              <th>
									البريد الالكترونى
								</th>   
                                
                                <th>
									رقم الهاتف
								</th>
                                
                            
                                
                                  <th>
							     توثيق العضو
								</th>
                                
                                	<th>
									 الغاء التفعيل
								</th>
                                
                                	<th>
									 حظر
								</th>
                                
                                   <td>
								ارسال رسالة
								</td>
                                
								<th>
									 عرض / تعديل
								</th>
                                
                                <th>
								تعديل كلمة المرور
								</th>
                                
								<th>
									 حذف
								</th>
							
							</tr>
							</thead>
                            	<tbody>
      <?php
      foreach($data->result() as $result){
      ?>
      <tr>
                             
                             	<td>
									 <?php echo $result->user_id; ?> 
								</td>
                                
                                
								<td>
									 <?php echo $result->user_name; ?> 
								</td>
                               
                               
                               	<td>
									 <?php echo $result->user_email; ?> 
								</td> 
                                	
                                
                                	<td>
									 <?php echo $result->user_phone; ?> 
								</td>
                                
                                
                              
                                  	<td>
									 <?php 
                                     if($result->user_trust==0){
                                        echo "غير موثوق";
                                     ?> 
                                     <a class="btn btn-xs green" href="<?php echo base_url(); ?>admin/do_trust_user/<?php echo $result->user_id; ?>">توثيق</a>
								     <?php }else{
								     echo "موثوق"; 
            
                                     ?>
                                     <a class="btn btn-xs red"  href="<?php echo base_url(); ?>admin/do_trust1_user/<?php echo $result->user_id; ?>">الغاء التوثيق</a>
                                     <?php }  ?>
                                </td>
                                  
                                
                                
                            	<td>
									 <a class="btn default btn-xs green" href="<?php echo base_url(); ?>admin/do_dis_users/<?php echo $result->user_id ; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-times"></i>  الغاء التفعيل</a>
								</td>
                                
                                
                                	<td>
									 <a class="btn default btn-xs red" href="<?php echo base_url(); ?>admin/do_dis1_users/<?php echo $result->user_id ; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-ban"></i>  حظر</a>
								</td>
                                
                                
                                   <td>
									 <a class="btn default btn-xs black" data-toggle="modal" data-target="#myModal<?php echo $result->user_id ; ?>" ><i class="fa fa-arrows-h"></i> رد</a>
								</td>
                                
								<td>
									 <a class="btn default btn-xs purple" href="<?php echo base_url(); ?>admin/do_edit_users/<?php echo $result->user_id ; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-edit"></i>  عرض / تعديل</a>
								</td>
                                
                                
                                <td>
									 <a class="btn default btn-xs purple" href="<?php echo base_url(); ?>admin/do_edit_users_pass/<?php echo $result->user_id ; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-edit"></i>  تعديل</a>
								</td>
                                
								<td>
									 <a class="btn default btn-xs black" href="<?php echo base_url(); ?>admin/do_delete_users/<?php echo $result->user_id ; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-trash-o"></i> حذف</a>
								</td>
					      	   </tr>
                               
                               
                                                              
                               <!-- Modal -->
<div class="modal fade" id="myModal<?php echo $result->user_id ; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form method="post" action="">
    
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">ارسال رسالة</h4>
      </div>
      <div class="modal-body">
      <input type="hidden" name="msg_phone" value="<?php echo $result->user_phone; ?>"/>
       <textarea class="form-control" name="msg_content">
       
       </textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
         <input class="btn btn-primary" type="submit" name="send" value="أرسال"/>
      </div>
    </form> 
    </div>
  </div>
</div>
     <?php
     }
     ?>
     

    	</tbody>
		</table>
     
     <?php
     }else{ echo "لا يوجد نتيجة للبحث"; }
     ?>
  
  
 
     
       
<?php 
}
?>     
     
     
     
                            
                            
<form method="post">
<input style="width: 50% !important;padding: 5px;border: 1px solid #ccc;" required="" type="text" name="s_value" placeholder="بحث باسم العضو او البريد الالكترونى او رقم الهاتف ..."/>
<input  type="submit" style="padding: 4px 12px;" value="بحث" name="search"/>
</form>
<br />
        
        
        
        
<?php  echo date("H:i:s"); ?>       
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
								البيد الالكترونى
								</th>
                                
                                  
                                
                                <th>
									رقم الهاتف
								</th>
                                
                              
                                
                                  <th>
							     توثيق العضو
								</th>
                                
                                	<th>
									 الغاء التفعيل
								</th>
                                
                                	<th>
									 حظر
								</th>
                                
                                
                                     
                                   <td>
								ارسال رسالة
								</td>
                                
                                
								<th>
									 عرض / تعديل
								</th>
                                
                                
                                 <th>
								تعديل كلمة المرور
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
									 <?php echo $result->user_email; ?> 
								</td>
                                
                                
                                	<td>
									 <?php echo $result->user_phone; ?> 
								</td>
                                
                                
                                
                                  	<td>
									 <?php 
                                     if($result->user_trust==0){
                                        echo "غير موثوق";
                                     ?> 
                                     <a class="btn btn-xs green" href="<?php echo base_url(); ?>admin/do_trust_user/<?php echo $result->user_id; ?>">توثيق</a>
								     <?php }else{
								     echo "موثوق"; 
            
                                     ?>
                                     <a class="btn btn-xs red"  href="<?php echo base_url(); ?>admin/do_trust1_user/<?php echo $result->user_id; ?>">الغاء التوثيق</a>
                                     <?php }  ?>
                                </td>
                                  
                                  
                                  
                                	<td>
									 <a class="btn default btn-xs green" href="<?php echo base_url(); ?>admin/do_dis_users/<?php echo $result->user_id ; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-times"></i>  الغاء التفعيل</a>
								</td>
                                
                                
                                	<td>
									 <a class="btn default btn-xs red" href="<?php echo base_url(); ?>admin/do_dis1_users/<?php echo $result->user_id ; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-ban"></i>  حظر</a>
								</td>
                                
                                
                                  <td>
									 <a class="btn default btn-xs black" data-toggle="modal" data-target="#myModal<?php echo $result->user_id; ?>" ><i class="fa fa-arrows-h"></i> ارسال</a>
								</td>
                                
                                
                                
								<td>
									 <a class="btn default btn-xs purple" href="<?php echo base_url(); ?>admin/do_edit_users/<?php echo $result->user_id ; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-edit"></i>  عرض / تعديل</a>
								</td>
                                
                                
                                <td>
									 <a class="btn default btn-xs purple" href="<?php echo base_url(); ?>admin/do_edit_users_pass/<?php echo $result->user_id ; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-edit"></i>  تعديل</a>
								</td>
                                
                                
                                
								<td>
									 <a class="btn default btn-xs black" href="<?php echo base_url(); ?>admin/do_delete_users/<?php echo $result->user_id ; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-trash-o"></i> حذف</a>
								</td>
					      	   </tr>
                               
                               
                                                              
                               <!-- Modal -->
<div class="modal fade" id="myModal<?php echo $result->user_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form method="post" action="">
    
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">ارسال رسالة</h4>
      </div>
      <div class="modal-body">
      <input type="hidden" name="msg_phone" value="<?php echo $result->user_phone; ?>"/>
       <textarea class="form-control" name="msg_content">
       
       </textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
         <input class="btn btn-primary" type="submit" name="send" value="أرسال"/>
      </div>
    </form> 
    </div>
  </div>
</div>
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
