<div class="row">
	<div class="col-xs-12 col-sm-12 widget-container-col" id="widget-container-col-2">
		<div class="widget-box widget-color-blue" id="widget-box-2">
			<div class="widget-header">
				<h5 class="widget-title bigger lighter"> <i class="ace-icon fa fa-cloud-upload"></i> Edit Half Yearly </h5>
			</div>

			<div class="widget-body">
				<div class="widget-main">
					<form id="myForm" action="<?php echo base_url() . 'halfyearly/update/'; ?>" class="form-horizontal" method="post" enctype="multipart/form-data">   

						<input type="hidden" name="id" value="<?php echo $edit->id; ?>" class="col-xs-10 col-sm-5" />

						

						

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">Year </label>
							<div class="col-sm-9">
								<input type="text" name="tittle" value="<?php echo $edit->tittle; ?>" class="col-xs-10 col-sm-5" />
								<?php echo form_error('tittle'); ?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">  Image </label>
							<div class="col-sm-4">
								<input type="hidden" name="old_file" value="<?php echo $edit->file_name; ?>" />
								<input type="file" name="userfile"  id="id-input-file-2" />
								<span class="label label-important">NOTE!</span>
								<span class="error"> Image (2210x3017) </span>
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
