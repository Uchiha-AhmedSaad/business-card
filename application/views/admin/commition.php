
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
				عمولات الموقع
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
							<a href="<?php echo base_url()."admin/commition"; ?>" >
								عمولات الموقع
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
								<i class="fa fa-edit"></i> 	عمولات الموقع
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
								أسم المستخدم
								</th>
                                
                                <th>
								مبلغ العمولة
								</th>
                                
                                <th>
								البنك الذي تم التحويل إليه
								</th>
                                
                                
                                 <th>
							أسم المحول
								</th>
                                
                                 <th>
									البريد الإلكتروني
								</th>
                                
                                 <th>
									رقم الإعلان
								</th>
                                      
                                <th>
									ملاحظات
								</th>
                                
                                <th>
									 ارسال رسالة
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
									 <?php echo $result->commition_id; ?> 
								</td>
                                
                                	<td>
										 <?php echo $result->commition_v1; ?> 
								</td>
                                
                                	<td>
										 <?php echo $result->commition_v2; ?> 
								</td>
                                
                                
                                
                                	<td>
										 <?php echo $result->commition_v3; ?> 
								</td>
                                
                                	<td>
										 <?php echo $result->commition_v4; ?> 
								</td>
                                
                                	<td>
										 <?php echo $result->commition_v5; ?> 
								</td>
                                
                                	<td>
										 <?php echo $result->commition_v6; ?> 
								</td>
                                
                                	<td>
										 <?php echo $result->commition_v7; ?> 
								</td>
                                
                                <td>
									 <a class="btn default btn-xs black" data-toggle="modal" data-target="#myModal" ><i class="fa fa-arrows-h"></i> ارسال</a>
								</td>
							
								<td>
									 <a class="btn default btn-xs black" href="<?php echo base_url(); ?>admin/do_delete_commition/<?php echo $result->commition_id; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');" ><i class="fa fa-trash-o"></i> حذف</a>
								</td>
					      	   </tr>
                               
                               <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form method="post" action="">
    
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">الرد برسالة</h4>
      </div>
      <div class="modal-body">
      <input type="hidden" name="msg_email" value="<?php echo $result->commition_v5; ?>"/>
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
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT -->
		</div>
	</div>
	<!-- END CONTENT -->
