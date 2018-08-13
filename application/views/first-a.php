

<section class="all-inner-banner">
        <img src="<?php echo base_url().'assets/site/' ?>images/inner-banner/massage.jpg">
</section>

<section class="banner-text-area">
    <h1>First Quarter<?php  $cat  = $this->firstquater_model->get_by_id($id) ?>
                                    <?php echo $cat->tittle; ?></h1>
</section>

<section class="fst-quarter-area">
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <a class="thumbnail fancybox" rel="ligthbox" href="<?php echo base_url().'assets/filemanager/firstquater/'. $firstquater->file_name; ?>">
                <img class="img-responsive custom_equip" alt="" src="<?php echo base_url().'assets/filemanager/firstquater/'. $firstquater->file_name; ?>"/>
            </a>
        </div>
    </div>
</section>


