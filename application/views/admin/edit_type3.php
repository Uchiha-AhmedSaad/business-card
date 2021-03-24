
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
				عرض / تعديل انواع الدبابات
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
							<a href="<?php echo base_url()."admin/edit_type3"; ?>" >
							عرض / تعديل انواع الدبابات
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
								<i class="fa fa-edit"></i> 		عرض / تعديل انواع الدبابات
							</div>
							
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="btn-group">
								<a href="<?php echo base_url() ?>admin/add_type3">
                                	<button id="sample_editable_1_new" class="btn green">
								 	أضافة نوع  <i class="fa fa-plus"></i>
									</button></a>
								</div>
						
							</div>
                            
                            
                            
                            
                            
                                                
                                                                                  <?php
     
     // search
     if($ci->input->post('search')){
      $ci->load->model('type3_m');
      $x= $ci->input->post('s_value');
      $data = $ci->type3_m->queryy("select * from type3 where type3_name like '%".$x."%' ");
        
      if($data->num_rows()>0){
      ?>
      <div class="portlet box blue" style="padding: 10px !important;color: #fff;">نتيجة البحث</div>
      	<table class="table table-striped table-hover table-bordered">
				<thead>
						<tr>
								<th>
									 اسم النوع 
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
      foreach($data->result() as $result){
      ?>
           <tr>
								<td>
									 <?php echo $result->type3_name; ?> 
								</td>
                                
                                
                                
                                
                    
								<td>
									 <a class="btn default btn-xs purple" href="<?php echo base_url(); ?>admin/do_edit_type3/<?php echo $result->type3_id; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-edit"></i> تعديل</a>
								</td>
								<td>
									 <a class="btn default btn-xs black" href="<?php echo base_url(); ?>admin/do_delete_type3/<?php echo $result->type3_id; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-trash-o"></i> حذف</a>
								</td>
					      	   </tr>
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
<input style="width: 50% !important;padding: 5px;border: 1px solid #ccc;" type="text" name="s_value" required="" placeholder="بحث باسم النوع ..."/>
<input  type="submit" style="padding: 4px 12px;" value="بحث" name="search"/>
</form>
<br />
        
        
        
        
        
        
        
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
							<thead>
							<tr>
								<th>
									 اسم النوع 
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
									 <?php echo $result->type3_name; ?> 
								</td>
                                
                                
                             
                                
                                
                    
								<td>
									 <a class="btn default btn-xs purple" href="<?php echo base_url(); ?>admin/do_edit_type3/<?php echo $result->type3_id; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-edit"></i> تعديل</a>
								</td>
								<td>
									 <a class="btn default btn-xs black" href="<?php echo base_url(); ?>admin/do_delete_type3/<?php echo $result->type3_id; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-trash-o"></i> حذف</a>
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
