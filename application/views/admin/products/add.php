<div class="row">
    <div class="col-xs-12 col-sm-12 widget-container-col" id="widget-container-col-2">
        <div class="widget-box widget-color-blue" id="widget-box-2">
            <div class="widget-header">
                <h5 class="widget-title bigger lighter"> <i class="ace-icon fa fa-plus-square"></i> Add New Products </h5>
            </div>

            <div class="widget-body">
                <div class="widget-main">
                    <form id="myForm" action="<?php echo base_url() . 'products/save'; ?>" class="form-horizontal" method="post" enctype="multipart/form-data">   

                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2 control-label no-padding-right">Category <span class="red">*</span> </label>
                                <div class="col-sm-4">
                                    <select name="categoryid"  class="form-control">
                                        <option value="0">Chose Category</option>
                                        <?php
                                           foreach ($allcat  as  $cat ){?>
                                             <option value="<?php echo $cat->id; ?>"><?php echo $cat->tittle; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <p class=""><?php echo form_error('categoryname'); ?></p>
                                </div>
                            </div>

                            
                                                                 

                        
                        
                       
                        
                       
                       
                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right"> Image </label>
                            <div class="col-sm-4">
                                <input type="file" name="userfile"  id="id-input-file-2" />
                                <span class="label label-important">NOTE!</span>
                                <span class="error"> Image Size (293 x 292) </span>
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

