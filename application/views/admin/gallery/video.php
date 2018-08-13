<?php
	$album_id = $this->uri->segment(3);
	$category = $this->uri->segment(4);
?>

<div class="row">
	<div class="col-xs-12 col-sm-12 widget-container-col" id="widget-container-col-2">
		<div class="widget-box widget-color-blue" id="widget-box-2">
			<div class="widget-header">
				<h5 class="widget-title bigger lighter"> <i class="ace-icon fa fa-folder-open"></i> Video Gallery </h5>
			</div>

			<div class="widget-body">
				<div class="widget-main">
					<form id="myForm" action="<?php echo base_url() . 'gallery/save_video/' . $album_id . '/' . $category; ?>" class="form-horizontal" method="post" enctype="multipart/form-data">   

						<div class="form-group">
							<label class="col-sm-2 control-label no-padding-right"> Video Title </label>
							<div class="col-sm-9">
								<input type="text" name="title" value="" class="col-xs-10 col-sm-5" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label no-padding-right"> Youtube Link  <span class="red">*</span> </label>
							<div class="col-sm-9">
								<input type="text" name="youtube_link" value="" placeholder="https://www.youtube.com/watch?v=0ITNmUTsn8U" class="col-xs-10 col-sm-5" required="" />
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
				<ul class="ace-thumbnails clearfix">
					<?php foreach ($results as $row) { ?>
						<li>
							<iframe width="375" height="200" src="https://www.youtube.com/embed/<?php echo $row->file_name; ?>?rel=0" frameborder="0" allowfullscreen></iframe>
							<div class="text" style="background-color: #c1c1c1; text-align: center;"> <div class="inner"> <?php echo $row->title; ?> </div> </div>
							<div class="tools tools-bottom"> <a onClick="return altDelete();" href="<?php echo base_url() . 'gallery/delete/' . $row->album_id . '/' . $category . '/' . md5($row->id); ?>"> <i class="ace-icon fa fa-times red"></i> </a> </div>
						</li>
					<?php } ?>

				</ul>
			</div>
			<!-- Photo CONTENT ENDS -->

		</div>
	</div><!-- /.span -->
</div><!-- /.row -->