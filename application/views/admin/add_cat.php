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

    <!-- BEGIN PAGE HEADER-->
    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title"> أضافة قسم </h3>
        <ul class="page-breadcrumb breadcrumb">
          <li> <i class="fa fa-home"></i> <a href="<?php echo base_url()."admin"; ?>"> الرئيسية </a> <i class="fa fa-angle-left"></i> </li>
          <li> <a href="<?php echo base_url()."admin/add_cat"; ?>" > أضافة قسم </a> </li>
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
            <div class="caption"> <i class="fa fa-reorder"></i> أضافة قسم </div>
          </div>
          <div class="portlet-body form">
            <form role="form" method="post" action=""  enctype="multipart/form-data">
              <div class="form-body">
                <div class="form-group">
                  <label for="cat_name">اسم القسم   :</label>
                  <input type="text" name="cat_name" class="form-control" id="cat_name" placeholder="Enter text">
                  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();  ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                </div>
                <div class="form-group">
                  <label for="cat_name_en">اسم القسم  بالإنجليزية :</label>
                  <input type="text" name="cat_name_en" class="form-control" id="cat_name_en" placeholder="Enter text">

                </div>
                <div class="form-group">
                  <label for="cat_order"> الترتيب :</label>
                  <input type="number" name="cat_order" min="0" value="0" class="form-control" id="cat_order">
                </div>
                <div class="form-group">
                  <label for="imgURL">رفع صورة للقسم :</label>
                  <input type="file" id="imgURL" name="imgURL"  accept="image/*"/>
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
