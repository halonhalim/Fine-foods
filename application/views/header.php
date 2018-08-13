<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>::Fine Foods Limited::</title>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/site/'; ?>css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/site/'; ?>css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/site/'; ?>css/font-awesome.min.css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/site/'; ?>css/style.css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/site/'; ?>css/menu.css"> <!----------header-link---------->
        <script src="<?php echo base_url() . 'assets/site/'; ?>js/script.js"></script> <!----------header-link---------->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
        <script>
            $(document).ready(function () {
                //FANCYBOX
                //https://github.com/fancyapps/fancyBox
                $(".fancybox").fancybox({
                    openEffect: "none",
                    closeEffect: "none"
                });
            });

        </script>
    </head>

    <body>

        <!----------Header-logo---------->
        <section class="header-logo-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="logo-area">
                            <a href="<?php echo base_url();?>"><img src="<?php echo base_url() . 'assets/filemanager/' . $contact->logo; ?>"></a>
                        </div>
                        <div class="header-icon-area">
                            <div class="icon-call">
                                <i class="fa fa-phone-square"></i> <h3>Call Free : <?php echo $contact->mobile_no; ?></h3>
                            </div>
                            <div class="icon-all">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                <i class="fa fa-twitter"></i>
                                <i class="fa fa-youtube"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!----------Header-Navigation---------->


            <div id='cssmenu'affix data-spy="affix" data-offset-top="197">
                <ul>
                    <li  class='active'><a href='<?php echo base_url(); ?>'>Home</a></li>
                    <li><a href='#'>Message</a>
                        <ul>
                            <?php foreach ($this->massage_model->index() as $row) { ?>
                                <li><a href="<?php echo base_url() . 'page/massage/' . $row->id ?>"><?php echo $row->title; ?></a></li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li><a href='<?php echo base_url() ?>page/corporateprofile'>Corporate profile</a></li>
                    <li><a href='<?php echo base_url() ?>page/investorralation'>Investor realations</a>
                    </li>
                    <li><a href='#'>Financial informations</a>
                        <ul>
                            <li><a href='#'>First Quarter</a>
                                <ul>
                                    <?php foreach ($this->firstquater_model->index() as $row) { ?>
                                <li><a href="<?php echo base_url() . 'page/firstquater/' . $row->id ?>"><?php echo $row->tittle; ?></a></li>
                            <?php } ?>
                                </ul>
                            </li>
                            <li><a href='#'>Half Yearly</a>
                                <ul>
                                     <?php foreach ($this->halfyearly_model->group_year() as $row) { ?>
                                <li><a href="<?php echo base_url() . 'page/halfyearly/' . $row->tittle ?>"><?php echo $row->tittle; ?></a></li>
                            <?php } ?>
                                </ul>
                            </li>
                            <li><a href='#'>Third Quarter</a>
                               
                                <ul>
                                     <?php foreach ($this->thirdquater_model->group_year() as $row) { ?>
                                <li><a href="<?php echo base_url() . 'page/thirdquater/' . $row->year ?>"><?php echo $row->year; ?></a></li>
                            <?php } ?>
                                </ul>
                            </li>
                            <li><a href='#'>Annual Report</a>
                                <ul>
                                    <?php foreach ($this->anualreport_model->index() as $row) { ?>
                                <li><a href="<?php echo base_url() . 'page/anualreport/' . $row->id ?>"><?php echo $row->tittle; ?></a></li>
                            <?php } ?>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><a href='#'>Products</a>
                        <ul>
                            <?php foreach ($this->category_model->index() as $row) { ?>
                                        <li><a href="<?php echo base_url() . 'page/category/' . $row->id ?>"><?php echo $row->tittle; ?></a></li>
                                     <?php } ?>
                        </ul>
                    </li>
                    <li><a href='<?php echo base_url() ?>page/picture'>Gallery</a></li>
                    <li><a href='<?php echo base_url() ?>page/contact'>Contact</a></li>
                </ul> 
                <img src="<?php echo base_url() . 'assets/site/'; ?>images/logo/header.png">
            </div>
        </section>


