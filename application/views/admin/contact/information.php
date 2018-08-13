<div class="row">
	<div class="col-xs-12 col-sm-12 widget-container-col" id="widget-container-col-2">
		<div class="widget-box widget-color-blue" id="widget-box-2">
			<div class="widget-header">
				<h5 class="widget-title bigger lighter"> <i class="ace-icon fa fa-plus-square"></i> Contact </h5>
			</div>

			<div class="widget-body">
				<div class="widget-main">
					<form id="myForm" action="<?php echo base_url() . 'contact/save/' . md5($edit->id); ?>" class="form-horizontal" method="post" enctype="multipart/form-data">   

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right"> Company Name </label>
							<div class="col-sm-9">
								<input type="text" name="company_name" value="<?php echo $edit->company_name; ?>" class="col-xs-10 col-sm-5" />
							</div>
						</div>
                                                        
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right"> Mobile No </label>
							<div class="col-sm-9">
								<input type="text" name="mobile_no" value="<?php echo $edit->mobile_no; ?>" class="col-xs-10 col-sm-5" />
							</div>
						</div>
                                                    <div class="form-group">
							<label class="col-sm-3 control-label no-padding-right"> E-mail </label>
							<div class="col-sm-9">
								<input type="text" name="email" value="<?php echo $edit->email; ?>" class="col-xs-10 col-sm-5" />
							</div>
						</div>  
						
                                                        <div class="form-group">
							
                                                        <label class="col-sm-3 control-label no-padding-right"></label>
							<div class="col-sm-9">
								<label class="col-sm-3 control-label no-padding-right"> <h5>Registered Office</h5></label>
						</div>

						 <div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">Village: </label>
							<div class="col-sm-9">
								<input type="text" name="village" value="<?php echo $edit->village; ?>" class="col-xs-10 col-sm-5" />
							</div>
						</div>  
                                                         <div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">U.P: </label>
							<div class="col-sm-9">
								<input type="text" name="union" value="<?php echo $edit->union; ?>" class="col-xs-10 col-sm-5" />
							</div>
						</div>  
                                                        <div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">Post Office: </label>
							<div class="col-sm-9">
								<input type="text" name="post_office" value="<?php echo $edit->post_office; ?>" class="col-xs-10 col-sm-5" />
							</div>
						</div>  
                                                         <div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">P.S: </label>
							<div class="col-sm-9">
								<input type="text" name="post" value="<?php echo $edit->post; ?>" class="col-xs-10 col-sm-5" />
							</div>
						</div>  
                                                          <div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">Dist:. </label>
							<div class="col-sm-9">
								<input type="text" name="distict" value="<?php echo $edit->distict; ?>" class="col-xs-10 col-sm-5" />
							</div>
						</div>  
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">Reg Mobile No </label>
							<div class="col-sm-9">
								<input type="text" name="r_mobile" value="<?php echo $edit->r_mobile; ?>" class="col-xs-10 col-sm-5" />
							</div>
						</div>
                                                        <label class="col-sm-3 control-label no-padding-right"></label>
							<div class="col-sm-9">
								<label class="col-sm-3 control-label no-padding-right"> <h5>Head & Corporate Office</h5></label>
						</div>
                                                        
                                                        <div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">Market Address </label>
							<div class="col-sm-9">
								<input type="text" name="m_address" value="<?php echo $edit->m_address; ?>" class="col-xs-10 col-sm-5" />
							</div>
						</div>
                                                        <div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">Floor Address </label>
							<div class="col-sm-9">
								<input type="text" name="f_address" value="<?php echo $edit->f_address; ?>" class="col-xs-10 col-sm-5" />
							</div>
						</div>
                                                         <div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">Hotline </label>
							<div class="col-sm-9">
								<input type="text" name="hotline" value="<?php echo $edit->hotline; ?>" class="col-xs-10 col-sm-5" />
							</div>
						</div>
                                                         <div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">Tell </label>
							<div class="col-sm-9">
								<input type="text" name="tell" value="<?php echo $edit->tell; ?>" class="col-xs-10 col-sm-5" />
							</div>
						</div>
                                                        <div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">Fax</label>
							<div class="col-sm-9">
								<input type="text" name="fax" value="<?php echo $edit->fax; ?>" class="col-xs-10 col-sm-5" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right"> Facebook </label>
							<div class="col-sm-9">
								<input type="text" name="facebook" value="<?php echo $edit->facebook; ?>" class="col-xs-10 col-sm-5" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right"> Twitter </label>
							<div class="col-sm-9">
								<input type="text" name="twitter" value="<?php echo $edit->twitter; ?>" class="col-xs-10 col-sm-5" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right"> Google Plus </label>
							<div class="col-sm-9">
								<input type="text" name="googleplus" value="<?php echo $edit->googleplus; ?>" class="col-xs-10 col-sm-5" />
							</div>
						</div>

						

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right"> Google Map Link </label>
							<div class="col-sm-9">
								<input type="text" name="google_map" value="<?php echo $edit->google_map; ?>" class="col-xs-10 col-sm-5" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right"> Logo </label>
							<div class="col-sm-4">
								<input type="hidden" name="old_logo" value="<?php echo $edit->logo; ?>"  />
								<input type="file" name="userfile" id="id-input-file-2" />
								<span class="label label-important">NOTE!</span>
								<span class="error"> Logo Size 450 x 84 </span>
								<br />
								<img src="<?php echo base_url() . 'assets/filemanager/' . $edit->logo; ?>" />
							</div>
						</div>

						<div class="clearfix form-actions">
							<div class="col-md-offset-3 col-md-9">
								<button class="btn btn-sm btn-success" type="submit"> <i class="ace-icon fa fa-save bigger-110"></i> Save </button>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div><!-- /.span -->
</div><!-- /.row -->