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
				طلبات تمييز الاعلان
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
							<a href="<?php echo base_url()."admin/edit_ads_package"; ?>" >
							طلبات تمييز الاعلان
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
								<i class="fa fa-edit"></i>طلبات تمييز الاعلان
							</div>

						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="btn-group">

								</div>

							</div>
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
							<thead>
							<tr>
								<th>
									 اسم العضو
								</th>

                                	<th>
									اسم الاعلان
								</th>
                                	<th>
									اسم الباقة
								</th>


                                	<th>
								 طريقة الدفع
								</th>
                                	<th>
								 بيانات الدفع
								</th>
                                	<th>
حالة الطلب
								</th>
								<th>
									 صورة التحويل
								</th>
								<th>
									 قبول
								</th>
								<th>
									 رفض
								</th>

							</tr>
							</thead>
							<tbody>

                             <?php
                             foreach($row as $result){
															 // var_dump($row);die();

                             ?>
                             <tr>
								<td>
									<?php
																		$ci->load->model('users_m');
										 $q1= $ci->users_m->find_all_where('user_id',$result->ads_package_user);
										 $d1= $q1->row();
echo $d1->user_name;
										 ?>
								</td>
								<td>
									<?php
																		$ci->load->model('ads_m');
										 $q1= $ci->ads_m->find_all_where('ads_id',$result->ads_package_ads_id);
										 $d1= $q1->row();
										 // var_dump($d1);die();
echo $d1->ads_title;
										 ?>
								</td>
								<td>
									<?php
																		$ci->load->model('package_m');
										 $q1= $ci->package_m->find_all_where('package_id',$result->ads_package_package_id);
										 $d1= $q1->row();
										 // var_dump($d1);die();
echo $d1->package_name;
										 ?>
								</td>
								<td>
									<?php
									echo ($result->ads_package_payment_method == "bank")?"تحويل بنكي":"دفع اونلاين"
										 ?>
								</td>
								<td>
									<?php
									echo $result->ads_package_payment_data
										 ?>
								</td>
								<td>
									<?php
									echo ($result->ads_package_status == "pending")?"قيد الانتظار":(($result->ads_package_status == "accepted")?"تم القبول":"تم الرفض");
										 ?>
								</td>
								<td>
									<a target="_blank" href="<?php echo base_url().'uploads/'.$result->ads_package_photo ?>">
									<img src="<?php echo base_url().'uploads/'.$result->ads_package_photo ?>" width="150px" alt="">
								</a>

								</td>

								<td>
									<?php if($result->ads_package_status == "pending"){ ?>
									 <a class="btn default btn-xs purple" href="<?php echo base_url(); ?>admin/do_accept_ads_package/<?php echo $result->ads_package_id; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"> قبول</a>
								 <?php } ?>
								</td>
								<td>
									<?php if($result->ads_package_status == "pending"){ ?>
									 <a class="btn default btn-xs black" href="<?php echo base_url(); ?>admin/do_reject_ads_package/<?php echo $result->ads_package_id; ?>" onclick="return confirm('هل تريد بالفعل تنفيذ الأمر ؟');"> رفض</a>
								 <?php } ?>
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
