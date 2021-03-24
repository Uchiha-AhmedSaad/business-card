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
	
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
                   التحكم فى نسب الاستثمار
             
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
							<a href="<?php  echo base_url(); ?>admin/percent">
							التحكم فى نسب الاستثمار
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
								<i class="fa fa-reorder"></i> التحكم فى نسب الاستثمار
							</div>
						
						</div>
                        
                        
                   
						<div class="portlet-body form">
                 
                
							<form role="form" method="post" action="" enctype="multipart/form-data">
                              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();  ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
								<div class="form-body">
                                
									<div class="form-group">
									
                                    <div class="col-xs-3">
                                    <div class="col-xs-12 percent">
                                    <table class="">
                                    <tr>
                                    <td>السعر </td>
                                    <td><input type="number" min="0" value="<?php echo $percent_value1; ?>" name="percent_value1"/></td>
                                    
                                    </tr>
                                    <tr>
                                    <td> عدد السلع </td>
                                    <td><input  type="number" min="0" value="<?php echo $percent_number1; ?>"  name="percent_number1" /></td>
                                    
                                    </tr>
                                    </table>
                                    
                                    </div>
                                    
                                    </div>
                                    
                                        <div class="col-xs-3">
                                                           <div class="col-xs-12 percent">
                                    <table class="">
                                    <tr>
                               <td>السعر</td>
                                    <td><input  type="number" min="0" value="<?php echo $percent_value2; ?>" name="percent_value2"/></td>
                                    
                                    </tr>
                                    <tr>
                                    <td> عدد السلع </td>
                                    <td><input  type="number" min="0" value="<?php echo $percent_number2; ?>"  name="percent_number2" /></td>
                                    </tr>
                                    </table>
                                    
                                    </div>
                                    </div>
                                    
                                        <div class="col-xs-3">
                                                           <div class="col-xs-12 percent">
                                    <table class="">
                                    <tr>
                                    <td>السعر</td>
                                    <td><input  type="number" min="0" value="<?php echo $percent_value3; ?>" name="percent_value3"/></td>
                                    
                                    </tr>
                                    <tr>
                                    <td> عدد السلع </td>
                                    <td><input  type="number" min="0" value="<?php echo $percent_number3; ?>"  name="percent_number3" /></td>
                                    
                                    </tr>
                                    </table>
                                    
                                    </div>
                                    </div>
                                    
                                                        <div class="col-xs-3">
                                                           <div class="col-xs-12 percent">
                                    <table class="">
                                    <tr>
                                    <td>السعر </td>
                                    <td><input  type="number" min="0" value="<?php echo $percent_value4; ?>" name="percent_value4"/></td>
                                    
                                    </tr>
                                    <tr>
                                    <td> عدد السلع </td>
                                    <td><input  type="number" min="0" value="<?php echo $percent_number4; ?>"  name="percent_number4" /></td>
                                    
                                    </tr>
                                    </table>
                                    
                                    </div>
                                    </div>
							
                            
                            <div class="clearfix"></div>
									</div>
                                    
                              
				
								</div>
								<div class="form-actions">
									<input type="submit" name="submit" value="حفظ" class="btn green">
					<input type="reset" name="clear" value="تراجع" class="btn red">
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
