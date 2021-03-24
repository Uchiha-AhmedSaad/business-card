<?php

$ci = &get_instance();
$lang = $ci -> session -> userdata('site_lang');
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
                    أضافة سؤلب

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
							<a href="<?php echo base_url()."admin/add_faq"; ?>" >
								أضافة سؤلب
							</a>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-xs-12 ">

					<!-- BEGIN SAMPLE FORM PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i> أضافة سؤلب
							</div>

						</div>



						<div class="portlet-body form">


							<form role="form" method="post" action="">
                              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();  ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
								<div class="form-body">
									<div class="form-group">
										<label for="exampleInputEmail1">عنوان السؤال  :</label>
										<input type="text" name="faq_title" class="form-control" id="exampleInputEmail1" placeholder="Enter text">

									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">عنوان السؤال بالانجليزية :</label>
										<input type="text" name="faq_title_en" class="form-control" id="exampleInputEmail1" placeholder="Enter text">

									</div>

									<div class="form-group">
										<label for="name">اجابة السؤال</label>
										<textarea style="height: 300px !important;" name="faq_body" rows="10" id="" class="form-control"><?php echo $faq_body; ?></textarea>
									</div>

									<div class="form-group">
										<label for="name">اجابة السؤال بالانجليزية</label>
										<textarea style="height: 300px !important;" name="faq_body_en" rows="10" id="" class="form-control"><?php echo $faq_body_en; ?></textarea>
									</div>











								</div>
								<div class="form-actions">
									<input type="submit" name="submit" value="اضافة" class="btn green">
									<button type="button" class="btn red">تراجع</button>
								</div>
							</form>
						</div>
					</div>
					<!-- END SAMPLE FORM PORTLET-->


				</div>

			</div>


		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
