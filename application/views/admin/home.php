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
               أحصائيات الموقع
            </h3>
            <ul class="page-breadcrumb breadcrumb">
               <li>
                  <i class="fa fa-home"></i>
                  <a href="<?php  echo base_url(); ?>admin">
                  الرئيسية
                  </a>
                  <i class="fa fa-angle-left"></i>
               </li>
               <li>
                  <a href="<?php  echo base_url(); ?>admin/">
                  أحصائيات الموقع
                  </a>
               </li>
            </ul>
            <!-- END PAGE TITLE & BREADCRUMB-->
         </div>
      </div>
      <!-- END PAGE HEADER-->
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 pull-left" style="float: left !important;">
         <div class="dashboard-stat green">
            <div class="visual">
               <i style="font-size: 40px !important" class="fa fa-users" aria-hidden="true"></i>
            </div>
            <div class="details">
               <div class="number" style="font-size: 20px !important" >
                  <?php
                     $ci->load->model('users_m');
                     $c= $ci->users_m->queryy("select * from users where user_online=1");
                     echo $c->num_rows();
                     ?>
               </div>
               <div class="desc" style="font-size: 12px !important" >
                  الاعضاء الاونلاين
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 pull-left" style="float: left !important;ba">
         <div class="dashboard-stat red">
            <div class="visual">
               <i style="font-size: 40px !important" class="fa fa-users" aria-hidden="true"></i>
            </div>
            <div class="details">
               <div class="number" style="font-size: 20px !important" >
                  <?php
                     $ci->load->model('users_m');
                     $c= $ci->users_m->queryy("select * from users where user_online=0");
                     echo $c->num_rows();
                     ?>
               </div>
               <div class="desc" style="font-size: 12px !important" >
                  الاعضاء الاوفلاين
               </div>
            </div>
         </div>
      </div>
      <div class="clearfix"></div>
      <!-- BEGIN PAGE CONTENT-->
      <div class="row">
         <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box blue">
               <div class="portlet-title">
                  <div class="caption">
                     <i class="fa fa-edit"></i>جدول الاحصائيات
                  </div>
               </div>
               <div class="portlet-body">
                  <div class="row">
                     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="dashboard-stat blue">
                           <div class="visual">
                              <i class="fa fa-users" aria-hidden="true"></i>
                           </div>
                           <div class="details">
                              <div class="number">
                                 <?php
                                    $ci->load->model('users_m');
                                    echo $ci->users_m->count_all();
                                    ?>
                              </div>
                              <div class="desc">
                                 عدد الاعضاء
                              </div>
                           </div>
                           <a class="more" href="<?php echo base_url(); ?>admin/users1">
                           عرض الكل <i class="m-icon-swapright m-icon-white"></i>
                           </a>
                        </div>
                     </div>

                     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="dashboard-stat yellow">
                           <div class="visual">
                              <i class="fa fa-bar-chart-o"></i>
                           </div>
                           <div class="details">
                              <div class="number">
                                 <?php
                                    $ci->load->model('report_m');
                                    echo $ci->report_m->count_all();
                                    ?>
                              </div>
                              <div class="desc">
                                 تبليغات الإعلانات
                              </div>
                           </div>
                           <a class="more" href="<?php echo base_url(); ?>admin/report">
                           عرض الكل <i class="m-icon-swapright m-icon-white"></i>
                           </a>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                  </div>
                  <div class="clearfix"></div>
                  <br />
                  <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                     <tbody>
                        <tr>
                           <td>
                              1- عدد المديرين
                           </td>
                           <td>
                              <?php
                                 $ci->load->model('admin_m');
                                 echo $ci->admin_m->count_all();
                                 ?>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              2- عدد  المدن
                           </td>
                           <td>
                              <?php
                                 $ci->load->model('city_m');
                                 echo $ci->city_m->count_all();
                                 ?>	 		 		 		
                           </td>
                        </tr>
                        <tr>
                           <td>
                              3- عدد اقسام الاعلانات الرئيسية
                           </td>
                           <td>
                              <?php
                                 $ci->load->model('cat_m');
                                 echo $ci->cat_m->count_all_where('cat_sub',0);
                                 ?>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              4-  عدد اقسام الاعلانات الفرعية
                           </td>
                           <td>
                              <?php
                                 $ci->load->model('sub_m');
                                 $c= $ci->cat_m->queryy("select * from cat where cat_sub>0");
                                 echo $c->num_rows();
                                 ?>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              5- عدد رسائل اتصل بنا
                           </td>
                           <td>
                              <?php
                                 $ci->load->model('msg_m');
                                 echo $ci->msg_m->count_all();
                                 ?>
                           </td>
                        </tr>



                        <tr>
                           <td>
                              10- عدد التقييمات الغير مفعلة
                           </td>
                           <td>
                              <?php
                                 $ci->load->model('comments_m');
                                 echo $ci->comments_m->count_all_where1(array('comment_active'=>0));
                                 ?>	 				 		 	 		 		 			
                           </td>
                        </tr>
                        <tr>
                           <td>
                              11- عدد التقييمات المفعلة 
                           </td>
                           <td>
                              <?php
                                 $ci->load->model('comments_m');
                                 echo $ci->comments_m->count_all_where1(array('comment_active'=>1));
                                 ?>	 				 		 	 		 		 			
                           </td>
                        </tr>
                        <tr>
                           <td>
                              12- عدد التبليغات
                           </td>
                           <td>
                              <?php
                                 $ci->load->model('report_m');
                                 echo $ci->report_m->count_all();
                                 ?>	 				 		 	 		 		 			 
                           </td>
                        </tr>
                        <tr>
                           <td>
                              13- عدد الاعضاء الغير مفعلين
                           </td>
                           <td>
                              <?php
                                 $ci->load->model('users_m');
                                 $c= $ci->users_m->queryy("select * from users where user_active=0");
                                 echo $c->num_rows();
                                 ?>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              14-  عدد الاعضاء المفعلين
                           </td>
                           <td>
                              <?php
                                 $ci->load->model('users_m');
                                 $c= $ci->users_m->queryy("select * from users where user_active=1");
                                 echo $c->num_rows();
                                 ?>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              15- عدد الاعضاء المحظورين
                           </td>
                           <td>
                              <?php
                                 $ci->load->model('users_m');
                                 $c= $ci->users_m->queryy("select * from users where user_active=2");
                                 echo $c->num_rows();
                                 ?>
                           </td>
                        </tr>
                        <tr>
                        <tr>
                           <td>
                              17- متابعات الاعضاء
                           </td>
                           <td>
                              <?php
                                 $ci->load->model('follow_m');
                                 $c= $ci->follow_m->queryy("select * from follow");
                                 echo $c->num_rows();
                                 ?>
                           </td>
                        </tr>
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

