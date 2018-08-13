<div class="row">
	<div class="col-xs-12 col-sm-12 widget-container-col" id="widget-container-col-2">
		<div class="widget-box widget-color-blue" id="widget-box-2">
			<div class="widget-header">
				<h5 class="widget-title bigger lighter"> <i class="ace-icon fa fa-table"></i> Manage <?php echo $this->uri->segment(3); ?> Albums </h5>
			</div>

			<div class="widget-body">
				<div class="widget-main no-padding">
					<table class="table table-striped table-bordered table-hover" id="dataTables">
						<thead>
							<tr>
								<th width="50">#</th>
								<th>Album Name</th>
								<th>Cover Image</th>
								<th>Upload &amp; View</th>
								<th width="100">Action</th>
							</tr>
						</thead>

						<tbody>
							<?php $i = 0;
							foreach ($results as $row) { ?>
								<tr>
									<td><?php echo sprintf('%02d', ++$i); ?></td>
									<td><?php echo $row->album_name; ?></td>
									<td>
										<?php if ($row->album_cover) { ?>
											<img src="<?php echo base_url() . 'assets/filemanager/gallery/' . $row->album_cover; ?>" width="50px" class="img-responsive" />
										<?php } ?>
									</td>
									<td> <a href="<?php echo base_url() . 'gallery/add/' . $row->id . '/' . $row->category; ?>" class="btn btn-default btn-sm"> <i class="fa fa-cloud-upload"></i> Upload / View <?php echo $row->category; ?> </a> </td>
									<td> 
										<div class="btn-group dropup">
											<button class="btn btn-xs btn-success">Action</button>
											<button data-toggle="dropdown" class="btn btn-xs btn-success dropdown-toggle">
												<span class="ace-icon fa fa-caret-down icon-only"></span>
											</button>
											<ul class="dropdown-menu dropdown-success">
												<li><a onClick="return altEdit();" href="<?php echo base_url() . 'album/edit/' . md5($row->id) . '/' . $row->category; ?>"> <i class="ace-icon fa fa-edit bigger-130"></i> Edit</a></li>
												<li><a onClick="return altDelete();" href="<?php echo base_url() . 'album/delete/' . md5($row->id) . '/' . $row->category . '/' . $row->album_cover; ?>" class="red"> <i class="ace-icon fa fa-trash-o bigger-130"></i> Delete</a></li>
											</ul>
										</div>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>	
				</div>
			</div>

		</div>
	</div><!-- /.span -->
</div><!-- /.row -->