<div class="row">
	<div class="col-xs-12 col-sm-12 widget-container-col" id="widget-container-col-2">
		<div class="widget-box widget-color-blue" id="widget-box-2">
			<div class="widget-header">
				<h5 class="widget-title bigger lighter"> <i class="ace-icon fa fa-table"></i> Manage News </h5>
			</div>

			<div class="widget-body">
				<div class="widget-main no-padding">
					<table class="table table-striped table-bordered table-hover" id="dataTables">
						<thead>
							<tr>
								<th width="50">#</th>
								<th width="125">Published</th>
								<th>Title</th>
								<th width="75">Image</th>
								<th width="100">Action</th>
							</tr>
						</thead>

						<tbody>
							<?php foreach($results as $key => $row) {  ?>
								<tr>
									<td><?php echo ++$key;?></td>
									<td><?php echo date('d-m-Y', strtotime($row->published_date));?></td>
									<td>
										<?php echo $row->title;?>
										<a href="#myModal<?php echo $row->id; ?>" role="button" class="label label-warning" data-toggle="modal">Details</a>
										<div id="myModal<?php echo $row->id; ?>" class="modal fade">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
														<h4 id="myModalLabel1"><?php echo $row->title; ?></h4>
													</div>
													<div class="modal-body"><?php echo $row->details; ?></div>
												</div>
											</div>
										</div>									
									</td>
									<td>
										<?php if($row->file_name) { ?>
											<img src="<?php echo base_url().'assets/filemanager/news/'.$row->file_name;?>" width="100" height="50" />
										<?php } ?>
									</td>
									<td> 
										<div class="btn-group dropup">
											<button class="btn btn-xs btn-success">Action</button>
											<button data-toggle="dropdown" class="btn btn-xs btn-success dropdown-toggle">
												<span class="ace-icon fa fa-caret-down icon-only"></span>
											</button>
											<ul class="dropdown-menu dropdown-success">
												<li><a onClick="return altEdit();" href="<?php echo base_url() . 'news/edit/' . $row->id;?>"> <i class="ace-icon fa fa-edit bigger-130"></i> Edit</a></li>
												<li><a onClick="return altDelete();" href="<?php echo base_url() . 'news/delete/' . $row->id.'/'.$row->file_name; ?>" class="red"> <i class="ace-icon fa fa-trash-o bigger-130"></i> Delete</a></li>
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