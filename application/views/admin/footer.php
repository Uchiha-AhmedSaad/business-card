</div>
<!-- END CONTAINER -->

<!-- BEGIN FOOTER -->
<div class="footer">
	<div class="footer-inner">
	 <a style="color: #fff !important;" href="" >جميع الحقوق محفوظة - بيزنس كارد</a>
	</div>
	<div class="footer-tools">
		<span class="go-top">
			<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<script src="assets/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>public/admin_files/assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url() ?>public/admin_files/assets/scripts/core/app.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>public/admin_files/assets/scripts/custom/index.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>public/admin_files/assets/scripts/custom/tasks.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {
   App.init(); // initlayout and core plugins
   Index.init();
   Index.initJQVMAP(); // init index page's custom scripts
   Index.initCalendar(); // init index page's custom scripts
   Index.initCharts(); // init index page's custom scripts
   Index.initChat();
   Index.initMiniCharts();
   Index.initDashboardDaterange();
   Index.initIntro();
   Tasks.initDashboardWidget();
});
</script>

     <script>

     $('document').ready(function(){

     	$('#country').change(function(){
	    $( "#city" ).html( '<option>جاري التحميل ...</option>' );
        $( ".city_block" ).show();
    	var id = $('#country').val();
        if(id==''){
         $( ".city_block" ).hide();
        }
		$.get( "<?php  echo base_url(); ?>site/getcity/"+id, function(data) {
		//returned data from model
		 $("#city").html(data);
		});
	});

     }) ;
     </script> 
     
     
              <script>

     $('document').ready(function(){

     	$('#cat').change(function(){
	    $( "#sub" ).html( '<option>جاري التحميل ...</option>' );
    	var id = $('#cat').val();
		$.get( "<?php  echo base_url(); ?>site/getsub/"+id, function(data) {
		//returned data from model
		 $("#sub").html(data);
		});
	});

     }) ;
     </script>
     
     
      <script>

     $('document').ready(function(){

     
   	$('#ads_price_type').change(function(){
	var ads_price_type= $('#ads_price_type').val();
    if(ads_price_type==2){
       $('#x').show();  
    }else{
       $('#x').hide();   
    }
	});
     
     }) ;
     </script>
     
     
     <script>

     $('document').ready(function(){

     	$('#country').change(function(){
    	var id = $('#country').val();

		$.get( "<?php  echo base_url(); ?>site/getadress/"+id, function(data) {
		//returned data from model
		 $("#adress").html(data);
		});
	});

     }) ;
     </script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>