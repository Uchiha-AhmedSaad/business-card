 
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
							  طلبات تميز الوظائف الجديدة
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
								<i class="fa fa-edit"></i>    طلبات تميز الوظائف الجديدة
							</div>
							
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
							
						
							</div>
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
							<thead>
							<tr>
                            	<th>إسم المستخدم</th>
              
                            	<th>الباقه المختاره</th>
                            	<th>الحالة</th>
                            	<th colspan="2"><center>العمليات</center></th>
							</tr>
							</thead>
							<tbody>
							<?php 
					
							foreach ($job_package_requests as $card) 
							{

								?> 
									<tr>
										<td><?php echo $users[$card->request_user_id];  ?></td>
							
										<td> <?php echo $package[$card->request_package_id];  ?>	</td>


										<td>
											<?php 
											if ($card->request_status == 'pending') {
												?> 
														<label class="btn btn-warning">فى الإنتظار</label>


												<?php
											}
											elseif ($card->request_status == 'accept') {
												?> 
														<label class="btn btn-success">مواقفة</label>


												<?php
											}
											elseif ($card->request_status == 'refuse') {
												?> 
														<label class="btn btn-danger">رفض</label>


												<?php
											}



											 ?>


										</td>

										<td><a class="btn btn-success" href="<?php echo base_url('admin/packageJobsRequest/'.$card->request_id.'/accept'); ?>">الموافقة</a></td>
										<td><a class="btn btn-danger" href="<?php echo base_url('admin/packageRequest/'.$card->request_id.'/refuse'); ?>">الرفض</a></td>
									</tr>
								<?php

							}





							 ?>

							
							
						
							</tbody>
							</table>
                             <?php echo $this->pagination->create_links(); ?>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT -->
		</div>
	</div>
	<!-- END CONTENT -->
