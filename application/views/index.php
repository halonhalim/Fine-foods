

<!-- slides-area -->
<section class="slider-area">
     <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php foreach ($banners as $key =>$row) { ?>
      <li data-target="#myCarousel" data-slide-to="<?php echo $key;?>" class="<?php echo ($key ==0)? "active" : ""; ?>"></li>
        <?php }?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php foreach($banners as $key =>$row) { ?>
      <div class="item <?php echo ($key ==0)? "active" : ""; ?>">
        <img src="<?php echo base_url().'assets/filemanager/banners/' . $row->file_name; ?>" alt="Los Angeles" style="width:100%;">
      </div>

        <?php } ?>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <i class="fa fa-angle-double-left"></i>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <i class="fa fa-angle-double-right"></i>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>

<section class="about-area">
    <div class="container">
        <div class="col-md-7 col-sm-7 col-xs-12">
            <div class="row">
                <?php foreach ($article as $row) { ?>
                <div class="about-cntn">
                    <h6> A FEW WORDS ABOUT FINEFOODS </h6>
                    <h3>Welcome to <b><?php  echo $row->title; ?></b> </h3>
                    <p><?php echo $row->details; ?></p>
                </div>
                <?php } ?> 
            </div>
        </div>
        <div class="col-md-5 col-sm-5 col-xs-12">
            <div class="row">
                <div class="tabbable">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-sticky-note"></i>Notice Board</a></li>
                        <li><a href="#tab2" data-toggle="tab"><i class="fa fa-sticky-note"></i>Archive</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                            <div class="tab-contant">
                                <?php foreach ($notice as $row) {?>
                                <div class="tab-area">
                                    <a href="<?php echo base_url(); ?>page/notice">
                                    <h4> <?php echo $row->title; ?> </h4>
                                    <div class="notice-time-date">
                                        <i class="fa fa-calendar-alt"></i><h6><?php echo $row->published_date; ?></h6>
                                        <i class="fa fa-clock"></i><h6>9:00PM</h6>
                                    </div>
                                    </a>
                                </div>
                                 <a href="<?php echo base_url().'assets/filemanager/notice/'. $row->file_name; ?>"><p><?php echo $row->title; ?> </p></a>
                                <?php } ?>
                               
                            </div>
                            <div class="tab-contant">
                                
                                
                            </div>
                        </div>
                        <div class="tab-pane" id="tab2">
                            <p style="padding: 16px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc id arcu quis augue pharetra viverra sit amet in lacus. Proin sit amet finibus tellus. Aenean pulvinar arcu in lectus consequat pretium. Sed a ultricies arcu, nec feugiat arcu. Duis sed lorem quam. Pellentesque accumsan eu est ut tempus/p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-area">
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="product-header">
                    <h3>Our Service</h3>
                </div>
            </div>
        </div>
<div class="product-contant">
    <div class="container">
        <div class="jcarousel-wrapper">
			<div class="jcarousel" >
				<ul>
                       <?php foreach ($category as $row ){ ?>
                    <li>
                        <a href="<?php echo base_url(). "page/category/" .$row->id;?>"> <img src="<?php echo base_url().'assets/filemanager/category/'.$row->file_name; ?>">
                            <div class="product-txt">
                                <p><?php echo $row->tittle; ?></p>
                                <a class="btn btn-product-btn" href="<?php echo base_url(). "page/category/" .$row->id;?>">Read More</a>   
                            </div>
                        </a> 
                    </li>
                       <?php } ?>
                   
                    
                    
                   
                   
                    
				</ul>
			</div>

			<a href="#" class="jcarousel-control-prev"><i class="fa fa-angle-double-left"></i></a>
			<a href="#" class="jcarousel-control-next"><i class="fa fa-angle-double-right"></i></a>
		</div>

    </div>
</div>
    </div>
</section>





