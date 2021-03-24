<?php 

$ci = &get_instance();  ; 

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
				الاعلانات المفعلة
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
							<a href="<?php echo base_url()."admin/edit_ads"; ?>" >
							الاعلانات المفعلة
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
								<i class="fa fa-edit"></i> 	الاعلانات المفعلة
							</div>
							
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
							
						
							</div>
                            
                            
                            
                            
                                                
                                                                                  <?php
     
     // search
     if($ci->input->post('search')){
      $ci->load->model('ads_m');
      $x= $ci->input->post('s_value');
      $data = $ci->ads_m->queryy("select * from ads where ads_active=1 and ads_title like '%".$x."%' or ads_price like '%".$x."%' or ads_id like '%".$x."%' ");
        
      if($data->num_rows()>0){
      ?>
      <div class="portlet box blue" style="padding: 10px !important;color: #fff;">نتيجة البحث</div>
      	<table class="table table-striped table-hover table-bordered">
				<thead>
							<tr>
                            
                            	<th>
									 #
								</th>
                                
                                <th>التاريخ</th>
                           
                                
								<th>
									 عنوان الاعلان
								</th>
                                
                                
                                     
                                	<th>
									المدينة
								</th>
                                
                                
                                     
                                	<th>
									القسم
								</th>
                       
                                
                                  	<th>
									صاحب الاعلان
								</th>
                                
                                	<th>
									 تمييز
								</th>
                                
                                	<th>
									 الغاء التفعيل
								</th>
                                
                                	<th>
									 حظر
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
									 <?php echo $result->ads_id; ?> 
								</td>
                                
		 	<td>
             	 <?php
                                     $ci->load->model('ads_m');
                                      echo $ci->ads_m->timeBetween($result->ads_date,time()); ?> 
								</td>
                                
                                	<td>
									 <?php echo $result->ads_title; ?> 
								</td>
                                
                                
                               
                                
                                						<td>
									        <?php
                         $ci->load->model('city_m');
                         $q0= $ci->city_m->find_all_where('city_id',$result->ads_city); 
                         $d0= $q0->row();
                    
                         ?> 
                          <a target="_blank" href="<?php echo base_url(); ?>site/city/<?php echo $d0->city_id; ?>"><?php echo $d0->city_name; ?></a>
								</td>
                                
                         <td>
						 <?php
                         $ci->load->model('cat_m');
                         $q1= $ci->cat_m->find_all_where('cat_id',$result->ads_cat); 
                         $d1= $q1->row();
                         ?> 
                         <a target="_blank" href="<?php echo base_url(); ?>site/cat/<?php echo $d1->cat_id; ?>"><?php echo $d1->cat_name; ?></a>
				
                        </td>
                                
                                	<td>
									    <?php
                                        $ci->load->model('users_m');
                         $q1= $ci->users_m->find_all_where('user_id',$result->ads_by); 
                         $d1= $q1->row();
                         
                         ?> 
                         <a target="_blank" href="<?php echo base_url(); ?>site/user/<?php echo $d1->user_id; ?>"><?php echo $d1->user_name; ?></a>
								</td>
                                
                                <td>
									 <a class="btn default btn-xs green" href="<?php echo base_url(); ?>admin/do_star_ads/<?php echo $result->ads_id; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-check"></i> تمييز</a>
								</td>
                                
                           	<td>
									 <a class="btn default btn-xs red" href="<?php echo base_url(); ?>admin/do_dis_ads/<?php echo $result->ads_id; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-times"></i> الغاء التفعيل</a>
								</td>
                                
                                
                                  	<td>
									 <a class="btn default btn-xs red" href="<?php echo base_url(); ?>admin/do_dis1_ads/<?php echo $result->ads_id; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-ban"></i> حظر</a>
								</td>
                                
								<td>
									 <a class="btn default btn-xs purple" href="<?php echo base_url(); ?>admin/do_edit_ads/<?php echo $result->ads_id; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-edit"></i> تعديل</a>
								</td>
								<td>
									 <a class="btn default btn-xs black" href="<?php echo base_url(); ?>admin/do_delete_ads/<?php echo $result->ads_id; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-trash-o"></i> حذف</a>
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
<input style="width: 50% !important;padding: 5px;border: 1px solid #ccc;" type="text" name="s_value" required="" placeholder="بحث برقم الاعلان او  عنوانه او سعره ..."/>
<input  type="submit" style="padding: 4px 12px;" value="بحث" name="search"/>
</form>
<br />
        
        
        
        
        
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
							<thead>
							<tr>
                            
                            	<th>
									 #
								</th>
                           
                                	<th>
									 التاريخ
								</th>
                                
								<th>
									 عنوان الاعلان
								</th>
                                
                                
                                     
                                	<th>
									المدينة
								</th>
                                
                                
                                     
                                	<th>
									القسم
								</th>
                       
                                
                                  	<th>
									صاحب الاعلان
								</th>
                                
                                	<th>
									 تمييز
								</th>
                                
                                	<th>
									 الغاء التفعيل
								</th>
                                
                                	<th>
									 حظر
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
                             foreach($row->result() as $result){
                             
                             ?>
                             <tr>
                             
                             	<td>
									 <?php echo $result->ads_id; ?> 
								</td>
                                
		                     	<td>
                                
									 <?php
                                     $ci->load->model('ads_m');
                                      echo $ci->ads_m->timeBetween($result->ads_date,time()); ?> 
								</td>
                                
                                
                                
                                	<td>
									 <?php echo $result->ads_title; ?> 
								</td>
                                
                                
                               
                                
                                						<td>
									        <?php
                         $ci->load->model('city_m');
                         $q0= $ci->city_m->find_all_where('city_id',$result->ads_city); 
                         $d0= $q0->row();
                    
                         ?> 
                          <a target="_blank" href="<?php echo base_url(); ?>site/city/<?php echo $d0->city_id; ?>"><?php echo $d0->city_name; ?></a>
								</td>
                                
                         <td>
						 <?php
                         $ci->load->model('cat_m');
                         $q1= $ci->cat_m->find_all_where('cat_id',$result->ads_cat); 
                         $d1= $q1->row();
                         ?> 
                         <a target="_blank" href="<?php echo base_url(); ?>site/cat/<?php echo $d1->cat_id; ?>"><?php echo $d1->cat_name; ?></a>
					
                        </td>
                                
                                	<td>
									    <?php
                                        $ci->load->model('users_m');
                         $q1= $ci->users_m->find_all_where('user_id',$result->ads_by); 
                         $d1= $q1->row();
                         
                         ?> 
                         <a target="_blank" href="<?php echo base_url(); ?>site/user/<?php echo $d1->user_id; ?>"><?php echo $d1->user_name; ?></a>
								</td>
                                
                                <td>
                                <?php
                                if($result->ads_star==0){
                                ?>
                  					 <a class="btn default btn-xs green" href="<?php echo base_url(); ?>admin/do_star_ads/<?php echo $result->ads_id; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-check"></i> تمييز</a>              
                                <?php }else{ ?>
      					 <a class="btn default btn-xs green" href="<?php echo base_url(); ?>admin/do_star_ads1/<?php echo $result->ads_id; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-check"></i> الغاء التمييز</a>                          
                                <?php } ?>
				
								</td>
                                
                           	<td>
									 <a class="btn default btn-xs red" href="<?php echo base_url(); ?>admin/do_dis_ads/<?php echo $result->ads_id; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-times"></i> الغاء التفعيل</a>
								</td>
                                
                                
                                  	<td>
									 <a class="btn default btn-xs red" href="<?php echo base_url(); ?>admin/do_dis1_ads/<?php echo $result->ads_id; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-ban"></i> حظر</a>
								</td>
                                
								<td>
									 <a class="btn default btn-xs purple" href="<?php echo base_url(); ?>admin/do_edit_ads/<?php echo $result->ads_id; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-edit"></i> تعديل</a>
								</td>
								<td>
									 <a class="btn default btn-xs black" href="<?php echo base_url(); ?>admin/do_delete_ads/<?php echo $result->ads_id; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"><i class="fa fa-trash-o"></i> حذف</a>
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
