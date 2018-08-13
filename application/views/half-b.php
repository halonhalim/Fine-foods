

<section class="all-inner-banner">
        <img src="<?php echo base_url().'assets/site/' ?>images/inner-banner/massage.jpg">
</section>

<section class="banner-text-area">
    <h1>Half Yearly </h1>
</section>

<section class="fst-quarter-area">
    <div class="container">
        <?php foreach ($halfyearly as $row) { ?>
        <div class="col-md-3 col-sm-3 col-xs-12">
            <a class="thumbnail fancybox" rel="ligthbox" href="images/product/h-4.jpg">
                <img class="img-responsive custom_equip" alt="" src="<?php echo base_url(). 'assets/filemanager/halfyearly/'. $row->file_name;?>"/>
            </a>
        </div>
       <?php } ?>
    </div>
</section>

