

<section class="all-inner-banner">
        <img src="<?php echo base_url().'assets/site/'; ?>images/inner-banner/massage-3.jpg">
</section>

<section class="banner-text-area">
    <h1>Gallery</h1>
</section>

<section class="fst-quarter-area">
    <div class="container">
        <?php foreach ($picture as $row ){?>
        <div class="col-md-3 col-sm-3 col-xs-12">
            <a class="thumbnail fancybox" target="_blank" rel="ligthbox" href="<?php echo base_url().'assets/filemanager/picture/'. $row->file_name; ?>">
                <img class="img-responsive custom_equip" alt="" src="<?php echo base_url().'assets/filemanager/picture/'. $row->file_name; ?>"/>
            </a>
        </div>
        <?php }?>
        
       
       
        
       
       
        
    </div>
</section>


