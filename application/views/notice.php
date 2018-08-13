

<section class="all-inner-banner">
        <img src="<?php echo base_url().'assets/site/'; ?>images/inner-banner/massage-1.jpg">
</section>

<section class="banner-text-area">
    <h1>Notice Board</h1>
</section>

<section class="notice-area">
    <div class="container">
       
        <h1>Browsing: Notice Board</h1>
         <?php foreach ($notice as  $row ){ ?>
       <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="notice-cntn">
                <h4>Notice Board</h4> 
                <p><?php echo $row->published_date; ?></p>
                <a target="_blank" href="<?php echo base_url().'assets/filemanager/notice/'. $row->file_name; ?>"><h3><?php echo $row->title; ?></h3></a>
            </div>
        </div>
        <?php } ?>
       
      
       
        
      
      
    </div>
</section>


