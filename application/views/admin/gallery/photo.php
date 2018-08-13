<?php
	$album_id = $this->uri->segment(3);
	$category = $this->uri->segment(4);
?>

<div class="row">
	<div class="col-xs-12 col-sm-12 widget-container-col" id="widget-container-col-2">
		<div class="widget-box widget-color-blue" id="widget-box-2">
			<div class="widget-header">
				<h5 class="widget-title bigger lighter"> <i class="ace-icon fa fa-folder-open"></i> Photo Gallery </h5>
			</div>

			<div class="widget-body">
				<div class="widget-main">
					<form id="myForm" action="<?php echo base_url() . 'gallery/save_photo/' . $album_id . '/' . $category; ?>" class="form-horizontal" method="post" enctype="multipart/form-data">   

						<div class="form-group">
							<label class="col-sm-2 control-label no-padding-right"> Photo Title </label>
							<div class="col-sm-9">
								<input type="text" name="title" value="" class="col-xs-10 col-sm-5" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label no-padding-right"> Image <span class="red">*</span> </label>
							<div class="col-sm-4">
								<input type="file" name="userfiles[]"  multiple="multiple" id="id-input-file-3" required="" />
								<span class="label label-important">NOTE!</span>
								<span class="error"> Maximum Image Size 1024 x 768 </span>
							</div>
						</div>

						<div class="clearfix form-actions0">
							<div class="col-md-offset-2 col-md-9">
								<button class="btn btn-sm btn-success" type="submit"> <i class="ace-icon fa fa-cloud-upload bigger-110"></i> Upload </button>
							</div>
						</div>

					</form>
				</div>
			</div>

			<hr /> 
			<!-- Photo CONTENT BEGINS -->
			<div>
				<ul class="ace-thumbnails">
					<?php foreach ($results as $row) { ?>
						<li>
							<img width="150" height="150" alt="150x150" src="<?php echo base_url() . 'assets/filemanager/gallery/' . $row->file_name; ?>" class="img-thumbnail" />
							<div class="text"> <div class="inner"> <?php echo $row->title; ?> </div> </div>
							<div class="tools tools-bottom"> <a onClick="return altDelete();" href="<?php echo base_url() . 'gallery/delete/' . $row->album_id . '/' . $category . '/' . md5($row->id) . '/' . $row->file_name; ?>"> <i class="ace-icon fa fa-times red"></i> </a> </div>
						</li>
					<?php } ?>
				</ul>
			</div>
			<!-- Photo CONTENT ENDS -->

		</div>
	</div><!-- /.span -->
</div><!-- /.row -->