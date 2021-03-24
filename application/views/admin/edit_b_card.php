
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
							  بطاقات العمل
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
								<i class="fa fa-edit"></i>   بطاقات العمل
							</div>
							
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
							
						
							</div>
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
							<thead>
							<tr>
                            	<th>الإسم بالعربية</th>
                            	<th>الإسم بالإنجليزية</th>
                            	<th>الدولة</th>
                            	<th>المدينة</th>
                            	<th>العنوان</th>
                            	<th>العنوان بالإنجليزية</th>
                            	<th>رقم الهاتف </th>
                            	<th>العمل</th>
                            	<th>تاريخ الإنتهاء</th>
							
							</tr>
							</thead>
							<tbody>
							<?php 
					
							foreach ($b_cards as $card) 
							{

								?> 
									<tr>
										<td><?php echo $card->b_cards_name;  ?></td>
										<td><?php echo $card->b_cards_name_en;  ?></td>
										<td><?php echo !empty($countries[$card->b_cards_country_id])?$countries[$card->b_cards_country_id]:'';?></td>
										<td><?php echo !empty($cities[$card->b_cards_city_id])? $cities[$card->b_cards_city_id]:''; ?></td>
										<td><?php echo $card->b_cards_address; ?></td>
										<td><?php echo $card->b_cards_address_en; ?></td>
										<td><?php echo $card->b_cards_phone; ?></td>
										<td><?php echo $card->b_cards_work; ?></td>
										<td><?php echo $card->expire_date; ?></td>
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
