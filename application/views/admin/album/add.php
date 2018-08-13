<?php $uri3 = $this->uri->segment(3); ?>
<div class="row">
	<div class="col-xs-12 col-sm-12 widget-container-col" id="widget-container-col-2">
		<div class="widget-box widget-color-blue" id="widget-box-2">
			<div class="widget-header">
				<h5 class="widget-title bigger lighter"> <i class="ace-icon fa fa-plus-square"></i> Add New <?php echo $uri3; ?> Album </h5>
			</div>

			<div class="widget-body">
				<div class="widget-main">
					<form id="myForm" action="<?php echo base_url() . 'album/save/' . $uri3; ?>" class="form-horizontal" method="post" enctype="multipart/form-data">   

						<input type="hidden" name="category" value="<?php echo $uri3; ?>" class="col-xs-10 col-sm-5" />

						<div class="form-group">
							<label class="col-sm-2 control-label no-padding-right"> Album Name <span class="red">*</span></label>
							<div class="col-sm-9">
								<input type="text" name="album_name" value="<?php echo set_value('album_name'); ?>" class="col-xs-10 col-sm-5" />
								<?php echo form_error('album_name'); ?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label no-padding-right"> Cover Image </label>
							<div class="col-sm-4">
								<input type="file" name="userfile"  id="id-input-file-2" />
								<span class="label label-important">NOTE!</span>
								<span class="error"> Maximum Image Size 1024 x 768 </span>
							</div>
						</div>

						<div class="clearfix form-actions">
							<div class="col-md-offset-2 col-md-9">
								<button class="btn btn-sm btn-success" type="submit"> <i class="ace-icon fa fa-save bigger-110"></i> Save </button>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div><!-- /.span -->
</div><!-- /.row -->