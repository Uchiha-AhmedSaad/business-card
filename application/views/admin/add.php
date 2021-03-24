
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
                    أضافة قسم
                    <small>اضافة قسم</small>
				   </h3>
					<ul class="page-breadcrumb breadcrumb">
						<li class="btn-group">
							<button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
							<span>
								Actions
							</span>
							<i class="fa fa-angle-down"></i>
							</button>
							<ul class="dropdown-menu pull-right" role="menu">
								<li>
									<a href="#">
										Action
									</a>
								</li>
								<li>
									<a href="#">
										Another action
									</a>
								</li>
								<li>
									<a href="#">
										Something else here
									</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">
										Separated link
									</a>
								</li>
							</ul>
						</li>
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">
								Home
							</a>
							<i class="fa fa-angle-left"></i>
						</li>
						<li>
							<a href="#">
								Form Stuff
							</a>
							<i class="fa fa-angle-left"></i>
						</li>
						<li>
							<a href="#">
								Form Controls
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
								<i class="fa fa-reorder"></i> Default Form
							</div>
							<div class="tools">
								<a href="" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="" class="reload">
								</a>
								<a href="" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<form role="form">
								<div class="form-body">
									<div class="form-group">
										<label for="exampleInputEmail1">Text</label>
										<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter text">
										<span class="help-block">
											 A block of help text.
										</span>
									</div>

									<div class="form-group">
										<label for="exampleInputPassword1">Password</label>
										<div class="input-group">
											<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
											<span class="input-group-addon">
												<i class="fa fa-user"></i>
											</span>
										</div>
									</div>






									<div class="form-group">
										<label>Dropdown</label>
										<select class="form-control">
											<option>Option 1</option>
											<option>Option 2</option>
											<option>Option 3</option>
											<option>Option 4</option>
											<option>Option 5</option>
										</select>
									</div>

									<div class="form-group">
										<label>Textarea</label>
										<textarea class="form-control" rows="3"></textarea>
									</div>
									<div class="form-group">
										<label for="exampleInputFile1">File input</label>
										<input type="file" id="exampleInputFile1">
										<p class="help-block">
											 some help text here.
										</p>
									</div>
			   
									<div class="form-group">
										<label>Inline Checkboxes</label>
										<div class="checkbox-list">
											<label class="checkbox-inline">
											<input type="checkbox" id="inlineCheckbox1" value="option1"> Checkbox 1 </label>
											<label class="checkbox-inline">
											<input type="checkbox" id="inlineCheckbox2" value="option2"> Checkbox 2 </label>
											<label class="checkbox-inline">
											<input type="checkbox" id="inlineCheckbox3" value="option3" disabled> Disabled </label>
										</div>
									</div>
									<div class="form-group">
										<label>Radio</label>
										<div class="radio-list">
											<label>
											<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> Option 1</label>
											<label>
											<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Option 2 </label>
											<label>
											<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled> Disabled </label>
										</div>
									</div>
									<div class="form-group">
										<label>Inline Radio</label>
										<div class="radio-list">
											<label class="radio-inline">
											<input type="radio" name="optionsRadios" id="optionsRadios4" value="option1" checked> Option 1 </label>
											<label class="radio-inline">
											<input type="radio" name="optionsRadios" id="optionsRadios5" value="option2"> Option 2 </label>
											<label class="radio-inline">
											<input type="radio" name="optionsRadios" id="optionsRadios6" value="option3" disabled> Disabled </label>
										</div>
									</div>
								</div>
								<div class="form-actions">
									<button type="submit" class="btn blue">Submit</button>
									<button type="button" class="btn default">Cancel</button>
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
