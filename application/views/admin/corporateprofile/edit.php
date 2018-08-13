

<div class="row">
	<div class="col-xs-12 col-sm-12 widget-container-col" id="widget-container-col-2">
		<div class="widget-box widget-color-blue" id="widget-box-2">
			<div class="widget-header">
				<h5 class="widget-title bigger lighter"> <i class="ace-icon fa fa-cloud-upload"></i> Edit Corporate Profile </h5>
			</div>

			<div class="widget-body">
				<div class="widget-main">
					<form id="myForm" action="<?php echo base_url() . 'corporateprofile/update/'; ?>" class="form-horizontal" method="post" enctype="multipart/form-data">   

						<input type="hidden" name="id" value="<?php echo $edit->id; ?>" class="col-xs-10 col-sm-5" />

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right"> Category <span class="red">*</span> </label>
							<div class="col-sm-4">
								<select name="category" class="chosen-select" data-placeholder="Please select ...">
									<option value=""></option>
									<option value="1" <?php echo ($edit->category == 'Board of Directors') ? 'selected="selected"' : ''; ?> > Board of Directors</option>
									<option value="2" <?php echo ($edit->category == 'Audit Commitee') ? 'selected="selected"' : ''; ?> > Audit Commitee </option>
                                                                        <option value="2" <?php echo ($edit->category == 'Audit cheif Financial officer') ? 'selected="selected"' : ''; ?> > Audit cheif Financial officer </option>
                                                                        <option value="2" <?php echo ($edit->category == 'Company secratery') ? 'selected="selected"' : ''; ?> > Company secratery </option>
                                                                        <option value="2" <?php echo ($edit->category == 'Head of Inter Audit') ? 'selected="selected"' : ''; ?> > Head of Inter Audit </option>
								</select>
								<?php echo form_error('category'); ?>
							</div>
						</div>

						
						
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">Name <span class="red">*</span> </label>
							<div class="col-sm-4">
								<input type="text" name="name" value="<?php echo $edit->name; ?>" class="col-xs-10 col-sm-12" />
								<?php echo form_error('name'); ?>
							</div>
						</div>
                                                
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">Designation <span class="red">*</span> </label>
							<div class="col-sm-4">
								<input type="text" name="designation" value="<?php echo $edit->designation; ?>" class="col-xs-10 col-sm-12" />
								<?php echo form_error('designation'); ?>
							</div>
						</div>

						<div class="clearfix form-actions">
							<div class="col-md-offset-3 col-md-9">
								<button class="btn btn-sm btn-success" type="submit"> <i class="ace-icon fa fa-refresh bigger-110"></i> Update </button>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div><!-- /.span -->
</div><!-- /.row -->