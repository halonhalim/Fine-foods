<div class="row">
	<div class="col-xs-12 col-sm-12 widget-container-col" id="widget-container-col-2">
		<div class="widget-box widget-color-blue" id="widget-box-2">
			<div class="widget-header">
				<h5 class="widget-title bigger lighter"> <i class="ace-icon fa fa-edit"></i> Edit Article </h5>
			</div>

			<div class="widget-body">
				<div class="widget-main">
					<form id="myForm" action="<?php echo base_url() . 'article/update/'; ?>" class="form-horizontal" method="post" enctype="multipart/form-data">   
						
						<input type="hidden" name="id" value="<?php echo $edit->id ?>" />
						
						<div class="form-group">
							<label class="col-sm-2 control-label no-padding-right"> Title <span class="red">*</span> </label>
							<div class="col-sm-9">
								<input type="text" name="title" value="<?php echo $edit->title; ?>" class="col-xs-10 col-sm-12" />
								<?php echo form_error('title'); ?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label no-padding-right"> Details <span class="red">*</span> </label>
							<div class="col-sm-9">
								<textarea name="details" class="txtDetails col-xs-10 col-sm-5" style="height:500px;"><?php echo $edit->details; ?></textarea>
								<?php echo form_error('details'); ?>
							</div>
						</div>

						<div class="clearfix form-actions">
							<div class="col-md-offset-2 col-md-9">
								<button class="btn btn-sm btn-success" type="submit"> <i class="ace-icon fa fa-refresh bigger-110"></i> Update </button>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div><!-- /.span -->
</div><!-- /.row -->