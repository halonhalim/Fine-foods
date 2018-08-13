

<section class="all-inner-banner">
        <img src="<?php echo base_url().'assets/site/' ;?>images/inner-banner/massage.jpg">
</section>

<section class="banner-text-area">
    <h1> <?php     $cat  = $this->massage_model->get_by_id($id) ?>
                                       <?php echo $cat->title; ?></h1>
</section>

<section class="chirman-massag-area">
    <div class="container">
       <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="row">
                <div class="chirman-cntn">
                   <p><?php echo $massage->description; ?></p>
                </div>
            </div>
        </div> 
       <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="row">
                <div class="chirman-cntn-right">
                    <img src="<?php echo base_url().'assets/filemanager/massage/'.$massage->file_name; ?>">
                </div>
            </div>
        </div>
    </div>
</section>


