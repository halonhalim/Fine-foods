

<section class="all-inner-banner">
        <img src="<?php echo base_url().'assets/site/'; ?>images/inner-banner/massage-3.jpg">
</section>

<section class="banner-text-area">
    <h1> <?php     $cat = $this->category_model->get_by_id($id) ?>
                                       <?php echo $cat->tittle; ?></h1>
</section>

<section class="fish-feed-area">
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="product-cntn">
                    <p>The company has different types of fish productions. It’s customers who are the General public of the country. Various kinds of fishes have been cultured, cultivate and fishing from the beginning of the Company. Rui, Katla, Mregal, Curp, Telapia, Koi, Catfish, Pangas, Common Curp etc. are cultured, cultivate and fishing here. Fish feed production are under proceed.</p>
                </div>
            </div>
        </div>
        <?php foreach ($products as $row) {?>
        <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="row">
                <a class="thumbnail fancybox" rel="ligthbox" href="">
                    <img class="img-responsive custom_equip" alt="" src="<?Php echo base_url().'assets/filemanager/products/'. $row->file_name; ?>"/>
                </a>
            </div>
        </div>
        
        <?php } ?>
       
        
        
    </div>
</section>


