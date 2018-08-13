<div class="row">
	<div class="col-xs-12 col-sm-12 widget-container-col" id="widget-container-col-2">
		<div class="widget-box widget-color-blue" id="widget-box-2">
			<div class="widget-header">
				<h5 class="widget-title bigger lighter"> <i class="ace-icon fa fa-plus-square"></i> Add Investor Ralation </h5>
			</div>

			<div class="widget-body">
				<div class="widget-main">
					<form id="myForm" action="<?php echo base_url() . 'investorralation/save'; ?>" class="form-horizontal" method="post" enctype="multipart/form-data">   
                                            
                                             <div class="form-group">
							<label class="col-sm-2 control-label no-padding-right"> Year <span class="red">*</span> </label>
							<div class="col-sm-4">
								<input type="text" name="year" value="<?php echo set_value('year'); ?>" class="col-xs-10 col-sm-12" />
								<?php echo form_error('year'); ?>
							</div>
						</div>  

						<div class="form-group">
							<label class="col-sm-2 control-label no-padding-right"> Authorized Capital<span class="red">*</span> </label>
							<div class="col-sm-4">
								<input type="text" name="authorizedcapital" value="<?php echo set_value('authorizedcapital'); ?>" class="col-xs-10 col-sm-12" />
								<?php echo form_error('authorizedcapital'); ?>
							</div>
						</div>
                                            <div class="form-group">
							<label class="col-sm-2 control-label no-padding-right">Paid Up Capital  <span class="red">*</span> </label>
							<div class="col-sm-4">
								<input type="text" name="paidupcapital" value="<?php echo set_value('paidupcapital'); ?>" class="col-xs-10 col-sm-12" />
								<?php echo form_error('paidupcapital'); ?>
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
