<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP CodeIgniter Pagination with Bootstrap Styles | Example</title>
		<!--link the bootstrap css file-->
		<link rel="stylesheet" href="<?php echo base_url() . 'assets/admin/' ?>css/bootstrap.min.css" />
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<table class="table table-striped table-bordered table-hover">
						<caption> <h1 align="center"> Pagination Table </h1> </caption>
						<thead>
							<tr>
								<th width="50">#</th>
								<th>ক্যাটাগরীর নাম</th>
								<th>টাইটেল</th>
								<th width="50%">বিস্তারিত</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 0;
							foreach ($results as $row) { ?>
								<tr>
									<td><?php echo eng_to_bng(sprintf('%02d', ++$i)); ?></td>
									<td>
										<?php
										$category = $this->category_model->get_by_id(md5($row->category_id));
										echo $category->name;
										?>
									</td>
									<td><?php echo $row->title; ?></td>
									<td><?php echo read_more($row->details, 25); ?></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<?php echo $this->pagination->create_links(); ?>
				</div>
			</div>
		</div>
	</body>
</html>