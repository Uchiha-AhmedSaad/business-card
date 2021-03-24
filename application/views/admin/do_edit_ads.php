

<?php

$ci = &get_instance();
$ci->load->model('city_m');
$ci->load->model('sub_m');
$lang='';
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
			<!-- BEGIN STYLE CUSTOMIZER -->
			<div class="theme-panel hidden-xs hidden-sm">
				<div class="toggler">
				</div>
				<div class="toggler-close">
				</div>
				<div class="theme-options">
					<div class="theme-option theme-colors clearfix">
						<span>
							 THEME COLOR
						</span>
						<ul>
							<li class="color-black current color-default" data-style="default">
							</li>
							<li class="color-blue" data-style="blue">
							</li>
							<li class="color-brown" data-style="brown">
							</li>
							<li class="color-purple" data-style="purple">
							</li>
							<li class="color-grey" data-style="grey">
							</li>
							<li class="color-white color-light" data-style="light">
							</li>
						</ul>
					</div>
					<div class="theme-option">
						<span>
							 Layout
						</span>
						<select class="layout-option form-control input-small">
							<option value="fluid" selected="selected">Fluid</option>
							<option value="boxed">Boxed</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
							 Header
						</span>
						<select class="header-option form-control input-small">
							<option value="fixed" selected="selected">Fixed</option>
							<option value="default">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
							 Sidebar
						</span>
						<select class="sidebar-option form-control input-small">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
							 Sidebar Position
						</span>
						<select class="sidebar-pos-option form-control input-small">
							<option value="left" selected="selected">Left</option>
							<option value="right">Right</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
							 Footer
						</span>
						<select class="footer-option form-control input-small">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
				</div>
			</div>
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
                    تعديل اعلان

				   </h3>
					<ul class="page-breadcrumb breadcrumb">

						<li>
							<i class="fa fa-home"></i>
							<a href="<?php echo base_url(); ?>admin">
								الرئيسية
							</a>
							<i class="fa fa-angle-left"></i>
						</li>

						<li>
							<a href="#">
							 تعديل اعلان
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
								<i class="fa fa-reorder"></i> تعديل اعلان
							</div>

						</div>



						<div class="portlet-body form">

          <form action="" method="post" enctype="multipart/form-data">


                       <div class="form-group">
                            <label for="name">عنوان الاعلان</label>
						<input type="text" name="ads_title" value="<?php echo $ads_title; ?>" class="form-control" placeholder="العنوان - مثال:  ماكينة اكورد 2015">

                        </div>





                    		<div class="form-group col-xs-12">
						<label for="name">القسم الرئيسي</label>
						<select required class="form-control ads_cat"  name="ads_cat" id="ads_cat1111">
                       <?php
                                $ci->load->model('cat_m');
                                $q_cat= $ci->cat_m->find_all_asc('cat_id');
                                foreach($q_cat as $d_cat){
                                ?>
    	                        <option <?php if($d_cat->cat_id==$ads_cat) echo "selected"; ?> value="<?php echo $d_cat->cat_id; ?>"><?php echo $d_cat->cat_name; ?></option>

                                <?php } ?>
						</select>
					</div>


     <?php  if($ads_cat==1){ ?>
                        	<div class="form-group col-xs-12">
                            	<label for="name"> القسم الفرعى</label>
                     	<select class="form-control ads_sub"  name="ads_sub" id="ads_sub1111">
                      <?php
                                $ci->load->model('cat_m');
                                $q_cat= $ci->cat_m->find_all_where('cat_sub',$ads_cat);
                                foreach($q_cat->result() as $d_cat){
                                ?>
    	                        <option <?php if($d_cat->cat_id==$ads_sub) echo "selected"; ?> value="<?php echo $d_cat->cat_id; ?>"><?php echo $d_cat->cat_name; ?></option>

                                <?php } ?>
						</select>
            </div>
            <?php } ?>


                
                  <div class="form-group">
                  <label for="name">الدولة</label>
                   <select class="form-control"  name="ads_country" id="countryy">
                       <?php
                                $ci->load->model('country_m');
                                $q_city= $ci->country_m->find_all_asc('country_id');
                                foreach($q_city as $d_city){
                                ?>
    	                        <option <?php if($d_city->country_id==$ads_country) echo "selected"; ?> value="<?php echo $d_city->country_id; ?>"><?php echo $d_city->country_name; ?></option>

                                <?php } ?>
						</select>
                </div>


                  <div class="form-group">
                  <label for="name">المدينة</label>
            	<select class="form-control"  name="ads_city" id="cityy">
                       <?php
                                $ci->load->model('city_m');
                                $q_city= $ci->city_m->find_all_asc('city_id');
                                foreach($q_city as $d_city){
                                ?>
    	                        <option <?php if($d_city->city_id==$ads_city) echo "selected"; ?> value="<?php echo $d_city->city_id; ?>"><?php echo $d_city->city_name; ?></option>

                                <?php } ?>
						</select>
                </div>



                             <?php  if($ads_cat==1){ ?>
                        	<div class="form-group col-xs-12">
						<label for="name">الماركة</label>
						<select class="form-control"  name="ads_marka" id="">
                       <?php
                                $ci->load->model('marka_m');
                                $q_marka= $ci->marka_m->find_all_asc('marka_id');
                                foreach($q_marka as $d_marka){
                                ?>
    	                        <option <?php if($d_marka->marka_id==$ads_marka) echo "selected"; ?> value="<?php echo $d_marka->marka_id; ?>"><?php echo $d_marka->marka_name; ?></option>

                                <?php } ?>
						</select>
					</div>


                    	<div class="form-group col-xs-12">
						<label for="name">نوع الماركة</label>
						<select class="form-control"  name="ads_type" id="">
                       <?php
                                $ci->load->model('type_m');
                                $q_type= $ci->type_m->find_all_asc('type_id');
                                foreach($q_type as $d_type){
                                ?>
    	                        <option <?php if($d_type->type_id==$ads_type) echo "selected"; ?> value="<?php echo $d_type->type_id; ?>"><?php echo $d_type->type_name; ?></option>

                                <?php } ?>
						</select>
					</div>

                 <div class="form-group">
                  <label for="name">الموديل</label>
                	<select class="form-control"  name="ads_model" id="">
                        <option value="">قم باختيار الموديل</option>
                       <?php
                                $ci->load->model('model_m');
                                $q_model= $ci->model_m->find_all_asc('model_id');
                                foreach($q_model as $d_model){
                                ?>
    	                        <option <?php if($d_model->model_id==$ads_model) echo "selected"; ?> value="<?php echo $d_model->model_id; ?>"><?php echo $d_model->model_name; ?></option>

                        <?php } ?>
						</select>
                </div>
                     <?php } ?>
										 <div class="form-group">
										 <label for="name">نوع الاعلان</label>
										<select  class="form-control" name="ads_mzad_normal" id="select-city">
											<option value="">نوع الاعلان</option>
											<option  <?php if($ads_mzad_normal=="normal") echo "selected"; ?> value="normal">عادي</option>
											<option <?php if($ads_mzad_normal=="mzad") echo "selected"; ?> value="mzad">مزاد</option>
										</select>
									 </div>
<?php if(!empty($ads_price)){ ?>
                  <div class="form-group">
                  <label for="name">السعر</label>
                <input type="text" name="ads_price" value="<?php echo $ads_price; ?>" class="form-control" placeholder="" >
                </div>
							<?php } ?>
							<?php if(!empty($ads_mzad_date)){ ?>
                  <div class="form-group">
                  <label for="name">تاريخ انتهاء المزاج</label>
                <input type="text" name="ads_mzad_date" value="<?php echo $ads_mzad_date; ?>" class="form-control" placeholder="" >
                </div>
							<?php } ?>


   <div class="form-group">
                  <label for="name">الجوال</label>
               	<input type="text" name="ads_phone" value="<?php echo $ads_phone; ?>" class="form-control" placeholder="أكتب رقم جوالك هنا">
                </div>
                <div class="form-group">
                  <label for="name">رابط فديو يوتيوب</label>
                <input type="text" name="ads_video" value="<?php echo $ads_video; ?>" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                  <label for="name">وصف الاعلان</label>
                 	<textarea style="height: 300px !important;" name="ads_details" rows="10" id="" class="form-control"><?php echo $ads_details; ?></textarea>
                </div>





   					<div class="row">
   						<div class="upload-imgs">
							<div class="panel bg-gray inner">
								<h4><?php echo ($lang=='arabic')?'رفع صور الاعلان':'Upload Photos'; ?></h4>
							</div>
							<div class="row">
								<div class="col-xs-12 pull-right">
									<div class="add-img">
										<div class="form-group">
											<input type="file"  name="imgURL[]" accept="image/*" multiple id="exampleInputFile">
										  </div>
									</div>
								</div>
								<div class="col-xs-12 pull-right">
									<ul class="list-unstyled no-margin clearfix">
										<li class="col-xs-3 pull-right">
										<?php
                                    foreach($photo->result() as $photos){
                                    ?>
                                    <img style="width: 200px;height: 160px;" src="<?php echo base_url(); ?>uploads/<?php echo $photos->photo; ?>"/>
                                    <a href="<?php echo base_url(); ?>admin/do_delete_photo/<?php echo $photos->id; ?>">حذف</a>
                                    <br /><br />
                                    <?php } ?>
										</li>

									</ul>
								</div>
							</div>
						</div>

                  <br /><br />


        <div class="clearfix"></div>


						<div class="row">
							<div class="col-md-12">
								<div class="send text-center">

                                    <input type="submit" name="submit" class="btn btn-primary" value="تعديل"/>
								</div>
							</div>
						</div>
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
