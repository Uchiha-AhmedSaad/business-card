<?php
$ci = &get_instance();
$ci->load->model('admin_m');
$q= $ci->admin_m->find_all_where('admin_id',$ci->session->userdata('admin_id'));
$d= $q->row();
?><!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone">
					</div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<form class="sidebar-search" action="extra_search.html" method="POST">
						<div class="form-container">
							<div class="input-box">
							</div>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start active " style="border-bottom: 1px solid #fff !important;">
					<a href="<?php echo base_url()."admin" ?>">
						<i class="fa fa-home"></i>
						<span class="title">
						رئيسية التحكم
						</span>
						<span class="selected">
						</span>
					</a>
				</li>
                	<li class="start active ">
					<a target="_blank" href="<?php echo base_url()."site" ?>">
						<i class="fa fa-home"></i>
						<span class="title">
						رئيسية الموقع
						</span>
						<span class="selected">
						</span>
					</a>
				</li>
              <?php if($d->admin_c1==1){ ?>
               <li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
							التحكم فى الاعدادات
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>admin/setting">
								 اعدادات الموقع
							</a>
						</li>
					</ul>
				</li>
               <?php } ?>
                  <?php if($d->admin_c2==1){ ?>
                <li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
							صندوق الرسائل
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>admin/msg">
								 الرسائل الواردة
							</a>
						</li>
					</ul>
				</li>
                   <li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
							صندوق الاقتراحات
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>admin/msg1">
								 الاقتراحات الواردة
							</a>
						</li>
					</ul>
				</li>
               <?php } ?>
                  <?php if($d->admin_c3==1){ ?>
                  	<li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
							رسائل الاعضاء
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>admin/message">
								 عرض الرسائل
							</a>
						</li>
					</ul>
				</li>
               <?php } ?>
  <!--<?php if($d->admin_c4==1){ ?>
                  <li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
						القائمة البريدية
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>admin/mail">
								التحكم فى الايميلات
							</a>
						</li>
					</ul>
				</li>
            <?php } ?>     -->
                  <?php if($d->admin_c5==1){ ?>
                  <li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
						التحكم فى السلايدر
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>admin/slider">
								 عرض / تعديل السلايدر
							</a>
						</li>
					</ul>
				</li>
             <?php } ?>
              <?php if($d->admin_c6==1){ ?>
            	<li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
						عمولة الموقع
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>admin/commition">
								 عرض العمولات
							</a>
						</li>
					</ul>
				</li>
 <?php } ?>
                    <!--  <?php if($d->admin_c7==1){ ?>
                    <li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
						 البانرات الاعلانية
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>admin/edit_banner">
								 التحكم فى البانرات
							</a>
						</li>
					</ul>
				</li>
           <?php } ?>     -->
                    	<li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
							 التحكم فى البنوك
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
                    <li>
							<a href="<?php echo base_url(); ?>admin/add_bank">
								 أضافة بنك
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>admin/edit_bank">
						          تعديل البنوك
							</a>
						</li>
					</ul>
				</li>
				<li>
<a href="javascript:;">
	<i class="fa fa-cogs"></i>
	<span class="title">
		التحكم فى الباقات
	</span>
	<span class="arrow ">
	</span>
</a>
<ul class="sub-menu">
	<li>
		<a href="<?php echo base_url(); ?>admin/add_package">
			 اضافة باقة
		</a>
	</li>
<li>
		<a href="<?php echo base_url(); ?>admin/edit_package">
		عرض / تعديل الباقات
		</a>
	</li>
</ul>
</li>
                  <!--
                	<li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
							التحكم فى الباقات
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>admin/add_package">
								 اضافة باقة
							</a>
						</li>
	<li>
							<a href="<?php echo base_url(); ?>admin/edit_package">
							عرض / تعديل الباقات
							</a>
						</li>
					</ul>
				</li>
                                                  				<li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
							 التحكم فى طرق الشحن
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
                    <li>
							<a href="<?php echo base_url(); ?>admin/add_charge">
								 أضافة طريقة
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>admin/edit_charge">
						          تعديل الطرق
							</a>
						</li>
					</ul>
				</li>
                		<li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
							التحكم فى العملات
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>admin/add_money">
								 أضافة عملة
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>admin/edit_money">
								تعديل العملات
							</a>
						</li>
					</ul>
				</li>
		<li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
							التحكم فى القارات
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>admin/add_qara">
								 أضافة قارة
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>admin/edit_qara">
								تعديل القارات
							</a>
						</li>
					</ul>
				</li>
      	<li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
							التحكم فى الروابط
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>admin/add_url">
								 أضافة رابط
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>admin/edit_url">
								تعديل الروابط
							</a>
						</li>
					</ul>
				</li>
             -->
               <?php if($d->admin_c8==1){ ?>
              	<?php ?><li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
							التحكم فى الدول
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>admin/add_country">
								 أضافة دولة
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>admin/edit_country">
								تعديل الدول
							</a>
						</li>
					</ul>
				</li><?php ?>
               <?php } ?>


               <?php if($d->admin_c8==1){ ?>
              	<?php ?><li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
							بطاقات بيانات العمل
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>admin/edit_ads">
								بيانات العمل
							</a>
						</li>
					</ul>
				</li><?php ?>
               <?php } ?>
              <!--   <?php if($d->admin_c9==1){ ?>
                	<li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
							التحكم فى المناطق
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>admin/add_adress">
								 أضافة منطقة
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>admin/edit_adress">
								تعديل المناطق
							</a>
						</li>
					</ul>
				</li>
              <?php } ?>   -->
               <?php if($d->admin_c10==1){ ?>
              	<li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
							التحكم فى المدن
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>admin/add_city">
								 أضافة مدينة
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>admin/edit_city">
								تعديل المدن
							</a>
						</li>
					</ul>
				</li>
                <?php } ?>
              	<li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
							التحكم فى الاسئلة المتكررة
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>admin/add_faq">
								 أضافة سؤال
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>admin/edit_faq">
								تعديل الاسئلة المتكررة
							</a>
						</li>
					</ul>
				</li>
              	<li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
							طلبات تمييز الاعلان
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>admin/edit_ads_package">
								طلبات تمييز الاعلان
							</a>
						</li>
					</ul>
				</li>
                 <?php if($d->admin_c11==1){ ?>
                <li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
						التحكم فى الأقسام
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>admin/add_cat">
								 أضافة قسم
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>admin/edit_cat">
								عرض / تعديل الأقسام
							</a>
						</li>
					</ul>
				</li>
               <?php } ?>
                 <!--
                 <?php if($d->admin_c12==1){ ?>
                 <li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
						التحكم فى الماركات
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>admin/add_marka">
								 أضافة ماركة
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>admin/edit_marka">
								عرض / تعديل الماركات
							</a>
						</li>
					</ul>
				</li>
             <?php } ?>
      <?php if($d->admin_c13==1){ ?>
      	<li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
					    أنواع الماركات
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>admin/add_type">
								 أضافة نوع
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>admin/edit_type">
								عرض / تعديل الانواع
							</a>
						</li>
					</ul>
				</li>
            <?php } ?>
                     <?php if($d->admin_c14==1){ ?>
                    <li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
					    التحكم فى الموديلات
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>admin/add_model">
								 أضافة موديل
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>admin/edit_model">
								عرض / تعديل الموديلات
							</a>
						</li>
					</ul>
				</li>
              <?php } ?>
           	<li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
					    أنواع الشاحنات
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>admin/add_type1">
								 أضافة نوع
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>admin/edit_type1">
								عرض / تعديل الانواع
							</a>
						</li>
					</ul>
				</li>
                	<li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
					    أنواع المعدات الثقيلة
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>admin/add_type2">
								 أضافة نوع
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>admin/edit_type2">
								عرض / تعديل الانواع
							</a>
						</li>
					</ul>
				</li>
                	<li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
					    أنواع الدبابات
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>admin/add_type3">
								 أضافة نوع
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>admin/edit_type3">
								عرض / تعديل الانواع
							</a>
						</li>
					</ul>
				</li> -->
  <!--
   	<li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
						الأقسام الفرعية
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>admin/add_sub">
								 أضافة قسم
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>admin/edit_sub">
								تعديل الأقسام
							</a>
						</li>
					</ul>
				</li>
                				<li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
						التحكم فى أسئلة الدعم
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>admin/add_support">
								 أضافة سؤال
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>admin/edit_support">
								تعديل الأسئلة
							</a>
						</li>
					</ul>
				</li>-->
                     <?php if($d->admin_c15==1){ ?>
                	<li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
					  التحكم فى الاعلانات
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
                    	<li>
							<a href="<?php echo base_url(); ?>admin/edit_ads">
						   الاعلانات الغير مفعلة
							</a>
						</li>
                        	<li>
							<a href="<?php echo base_url(); ?>admin/edit_ads1">
						   الاعلانات المفعلة
							</a>
						</li>
                  	<li>
							<a href="<?php echo base_url(); ?>admin/edit_ads2">
						   الاعلانات المحذوفة
							</a>
						</li>
                        	<li>
							<a href="<?php echo base_url(); ?>admin/edit_ads3">
						   الاعلانات المحظورة
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>admin/report">
						   التبليغات
							</a>
						</li>
					</ul>
				</li>
            <?php } ?>
                		<!--		<li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
						التحكم فى المزادات
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>admin/mzadat">
							المزادات الفعالة
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>admin/mzadat1">
							المزادات المنتهية
							</a>
						</li>
					</ul>
				</li>
                -->
                     <?php if($d->admin_c16==1){ ?>
                	<li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
					التحكم فى التعليقات
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
                     	<li>
							<a href="<?php echo base_url(); ?>admin/dis_comments">
		                      التعليقات الغير مفعلة
							</a>
						</li>
				           	<li>
							<a href="<?php echo base_url(); ?>admin/act_comments">
		                      التعليقات  المفعلة
							</a>
						</li>
					</ul>
				</li>
              <?php } ?>
              	<li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
					التحكم فى التقييمات
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
                     	<li>
							<a href="<?php echo base_url(); ?>admin/rate">
		                      التقييمات الغير مفعلة
							</a>
						</li>
				           	<li>
							<a href="<?php echo base_url(); ?>admin/rate1">
		                      التقيمات  المفعلة
							</a>
						</li>
					</ul>
				</li>
            		<!--  <?php if($d->admin_c17==1){ ?>
              <li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
				    متابعات الاعضاء
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
                     	<li>
							<a href="<?php echo base_url(); ?>admin/follow">
		                     عرض الكل
							</a>
						</li>
					</ul>
				</li>
             <?php } ?>   !-->
                	 <?php if($d->admin_c18==1){ ?>
                    <li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
				    مفضلات الاعضاء
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
                     	<li>
							<a href="<?php echo base_url(); ?>admin/save_ads">
		                     عرض الكل
							</a>
						</li>
					</ul>
				</li>
             <?php } ?>
                     <?php if($d->admin_c19==1){ ?>
                	<li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
					  التحكم فى الاعضاء
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
                    		<li>
							<a href="<?php echo base_url(); ?>admin/add_user">
						     اضافة عضو
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>admin/users">
						 الاعضاء الغير مفعلين
							</a>
						</li>
                        	<li>
							<a href="<?php echo base_url(); ?>admin/users1">
						 الاعضاء المفعلين
							</a>
						</li>
                        	<li>
							<a href="<?php echo base_url(); ?>admin/users2">
						 الاعضاء المحظورين
							</a>
						</li>
					</ul>
				</li>
     <?php } ?>
    			<!--	<li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
							الاستفتاءات
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>admin/add_poll">
								 أضافة استفتاء
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>admin/poll">
								نتائج الاستفتاءات
							</a>
						</li>
					</ul>
				</li>
                -->
				 <?php if($d->admin_c20==1){ ?>
                <li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
							التحكم فى المديرين
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>admin/add_admin">
								 أضافة مدير
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>admin/edit_admin">
								تعديل المديرين
							</a>
						</li>
					</ul>
				</li>
	         <?php } ?>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
