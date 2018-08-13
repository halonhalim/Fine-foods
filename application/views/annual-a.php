

<section class="all-inner-banner">
        <img src="<?php echo base_url().'assets/site/' ?>images/inner-banner/massage.jpg">
</section>

<section class="banner-text-area">
    <h1>Annual Report<?php  $cat  = $this->anualreport_model->get_by_id($id) ?>
                                    <?php echo $cat->tittle; ?></h1>
</section>

<section class="fst-quarter-area">
    <div class="container"> 
        <iframe src="<?php echo base_url().'assets/filemanager/anualreport/'.$anualreport->file_name; ?>" style="width: 100%; height:804px; border: none;"></iframe>
    </div>
</section>


