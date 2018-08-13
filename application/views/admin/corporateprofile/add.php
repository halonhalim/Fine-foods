
<div class="row">
	<div class="col-xs-12 col-sm-12 widget-container-col" id="widget-container-col-2">
		<div class="widget-box widget-color-blue" id="widget-box-2">
			<div class="widget-header">
				<h5 class="widget-title bigger lighter"> <i class="ace-icon fa fa-cloud-upload"></i> Upload New Banner </h5>
			</div>

			<div class="widget-body">
				<div class="widget-main">
					 <form id="myForm" action="<?php echo base_url().'corporateprofile/save';?>" class="form-horizontal" method="post" enctype="multipart/form-data">   

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right"> Category <span class="red">*</span></label>
							<div class="col-sm-4">
								<select name="category" class="chosen-select" data-placeholder="Please select ...">
									<option value=""></option>
									<option value="Board-of-Directors"> Board of Directors</option>
									<option value="Audit-Commitee"> Audit Commitee</option>
                                                                        <option value="Audit-cheif-Financial-officer">  cheif Financial officer</option>
                                                                        <option value="company-secratery">Company secratery</option>
                                                                        <option value="head-of-inter-audit"> Head of Inter Audit</option>
								</select>
								<?php echo form_error('category');?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right"> Name<span class="red">*</span> </label>
							<div class="col-sm-4">
								<input type="text" name="name" value="<?php echo set_value('name'); ?>" class="col-xs-10 col-sm-12" />
								<?php echo form_error('name'); ?>
							</div>
						</div>
                                             <div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">Designation</label>
							<div class="col-sm-4">
								<input type="text" name="designation" value="<?php echo set_value('designation'); ?>" class="col-xs-10 col-sm-12" />
								<?php echo form_error('designation'); ?>
							</div>
						</div>

						

						

						<div class="clearfix form-actions">
							<div class="col-md-offset-3 col-md-9">
								<button class="btn btn-sm btn-success" type="submit"> <i class="ace-icon fa fa-cloud-upload bigger-110"></i> Upload </button>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div><!-- /.span -->
</div><!-- /.row -->