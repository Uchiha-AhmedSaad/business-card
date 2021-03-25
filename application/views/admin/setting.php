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
          <div class="modal-body"> Widget settings form goes here </div>
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
    
    <!-- END STYLE CUSTOMIZER -->
    <?php

            echo validation_errors();
            ?>
    <!-- BEGIN PAGE HEADER-->
    <div class="row">
      <div class="col-md-12"> 
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title"> الاعدادات العامة </h3>
        <ul class="page-breadcrumb breadcrumb">
          <li> <i class="fa fa-home"></i> <a href="<?php echo base_url()."admin"; ?>"> الرئيسية </a> <i class="fa fa-angle-left"></i> </li>
          <li> <a href="<?php echo base_url()."admin/Setting"; ?>" > الاعدادات العامة </a> </li>
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
            <div class="caption"> <i class="fa fa-reorder"></i> الاعدادات العامة </div>
          </div>
          <div class="portlet-body form">
            <form role="form" method="post" action="" enctype="multipart/form-data">
              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();  ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
              <div class="form-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">اسم الموقع  :</label>
                  <input type="text" value="<?php echo $setting_name; ?>" name="setting_name" class="form-control" id="exampleInputEmail1" placeholder="Enter text">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">ايميل الموقع :</label>
                  <input type="text"  value="<?php echo $setting_email; ?>" name="setting_email" class="form-control" id="exampleInputEmail1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">الجوال  :</label>
                  <input type="text"  value="<?php echo $setting_phone; ?>" name="setting_phone" class="form-control" id="exampleInputEmail1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">SEO Description  :</label>
                  <textarea name="setting_desc" class="wysihtml5 form-control" rows="4"><?php echo $setting_desc; ?></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">الكلمات المفتتاحية  :</label>
                  <textarea name="setting_kays" class="wysihtml5 form-control" rows="4" ><?php echo $setting_kays; ?></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">صفحة من نحن (العربية):</label>
                  <!-- tinyMCE -->
                  <textarea name="setting_about" class="mytextarea form-control myTextEditor" rows="4" ><?php echo $setting_about; ?></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">صفحة من نحن (English):</label>
                  <!-- tinyMCE -->
                  <textarea name="setting_about_en" class="mytextarea form-control myTextEditor" rows="4" ><?php echo $setting_about_en; ?></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">الشروط والاحكام  (العربية):</label>
                  <!-- tinyMCE -->
                  <textarea name="setting_support" class="mytextarea form-control myTextEditor" rows="4" ><?php echo $setting_support; ?></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">الشروط والاحكام  (English):</label>
                  <!-- tinyMCE -->
                  <textarea name="setting_support_en" class="mytextarea form-control myTextEditor" rows="4" ><?php echo $setting_support_en; ?></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">معاهدة الاستخدام  (العربية):</label>
                  <!-- tinyMCE -->
                  <textarea name="setting_rules" class="mytextarea form-control myTextEditor" rows="4" ><?php echo $setting_rules; ?></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">معاهدة الاستخدام (English):</label>
                  <!-- tinyMCE -->
                  <textarea name="setting_rules_en" class="mytextarea form-control myTextEditor" rows="4" ><?php echo $setting_rules_en; ?></textarea>
                </div>


                <div class="form-group">
                  <label for="bank_name">إسم البنك :</label>
                  <input type="text" value="<?php echo $bank_name; ?>" name="bank_name" class="form-control" id="bank_name" placeholder="">
                </div>


                <div class="form-group">
                  <label for="bank_own_account">إسم صاحب الحساب :</label>
                  <input type="text" value="<?php echo $bank_own_account; ?>" name="bank_own_account" class="form-control" id="bank_own_account" placeholder="">
                </div>


                <div class="form-group">
                  <label for="account_namber">رقم  الحساب :</label>
                  <input type="text" value="<?php echo $account_namber; ?>" name="account_namber" class="form-control" id="account_namber" placeholder="">
                </div>



                <div class="form-group">
                  <label for="exampleInputEmail1">مدة عرض الإعلان :</label>
                  <input type="number" value="<?php echo $annonce_days; ?>" name="annonce_days" class="form-control" id="exampleInputEmail1" placeholder="Enter by days">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">رابط صفحة الفيس بوك :</label>
                  <input type="text" value="<?php echo $setting_face; ?>" name="setting_face" class="form-control" id="exampleInputEmail1" placeholder="Enter text">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1"> تويتر  رابط :</label>
                  <input type="text" value="<?php echo $setting_twitt; ?>" name="setting_twitt" class="form-control" id="exampleInputEmail1" placeholder="Enter text">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">رابط يوتيوب :</label>
                  <input type="text" value="<?php echo $setting_you; ?>" name="setting_you" class="form-control" id="exampleInputEmail1" placeholder="Enter text">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">رابط انستقرام :</label>
                  <input type="text" value="<?php echo $setting_rss; ?>" name="setting_rss" class="form-control" id="exampleInputEmail1" placeholder="Enter text">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">رابط لينكد ان :</label>
                  <input type="text" value="<?php echo $setting_plus; ?>" name="setting_plus" class="form-control" id="exampleInputEmail1" placeholder="Enter text">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">رابط app store :</label>
                  <input type="text" value="<?php echo $setting_appstore; ?>" name="setting_appstore" class="form-control" id="exampleInputEmail1" placeholder="Enter text">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">إنستجرام :</label>
                  <input type="text" value="<?php echo $instgram; ?>" name="instgram" class="form-control" id="exampleInputEmail1" placeholder="Enter text">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">سناب شات :</label>
                  <input type="text" value="<?php echo $snap; ?>" name="snap" class="form-control" id="exampleInputEmail1" placeholder="Enter text">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">لينكيد ان :</label>
                  <input type="text" value="<?php echo $linkedin; ?>" name="linkedin" class="form-control" id="exampleInputEmail1" placeholder="Enter text">
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" name="submit" value="حفظ" class="btn green">
                <input type="submit" name="clear" value="تراجع" class="btn red">
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
