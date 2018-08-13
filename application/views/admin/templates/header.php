<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title><?php echo $breadcrumb; ?></title>
	<meta name="author" content="oYo" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<link rel="shortcut icon" href="<?php echo base_url() . 'assets/admin/img/' ?>favicon.png" >    
	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/admin/' ?>css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/admin/' ?>fonts/font-awesome.min.css" />
	<!-- image fancy box -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/admin/' ?>css/colorbox.min.css" />    
	<!-- ace styles -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/admin/' ?>css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
	<!-- form-elements page specific plugin styles -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/admin/' ?>css/jquery-ui.custom.min.css" />
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/admin/' ?>css/chosen.min.css" />
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/admin/' ?>css/bootstrap-datepicker3.min.css" />
	<!-- include summernote css-->
	<link href="<?php echo base_url() . 'assets/admin/'; ?>summernote-0.8.8/summernote.css" rel="stylesheet">
	<!-- inline styles related to this page -->
	<style>
		.form-actions { padding:5px; margin:0px -12px -12px -12px; }
		.form-group { margin-bottom: 5px; }
		.txtDetails { height:250px; }
		.txtDetails2 { height:100px; }
		.error { color:#f00; font-size:12px; }
		.success { color:#0C7033; font-size:12px; }
		.actionForm {display: inline;}
		.actionForm button {border-radius: 3px; padding: 0px 3px; margin-left: 5px;}
	</style> 
</head>
<body class="no-skin">
	<div id="navbar" class="navbar navbar-default ace-save-state">
		<div class="navbar-container ace-save-state" id="navbar-container">
			<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
				<span class="sr-only">Toggle sidebar</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="navbar-header pull-left">
				<a href="<?php echo base_url() . 'dashboard'; ?>" class="navbar-brand"> <img src="<?php echo base_url() . 'assets/admin/' ?>img/admin-logo.png" /> </a>
			</div>
			<div class="navbar-buttons navbar-header pull-right" role="navigation">
				<ul class="nav ace-nav">
					<li class="light-blue">
						<a data-toggle="dropdown" href="#" class="dropdown-toggle">
							<img class="nav-user-photo" src="<?php echo base_url() . 'assets/admin/' ?>avatars/avatar2.png" alt="Jason's Photo" />
							<span class="user-info"> <small>Hi,</small> <?php echo $this->session->userdata('username'); ?> </span> <i class="ace-icon fa fa-caret-down"></i>
						</a>
						<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
							<li> <a href="<?php echo base_url(); ?>" target="_blank"> <i class="ace-icon fa fa-eye"></i> Public View </a> </li>
							<li class="divider"></li>
							<li> <a onClick="return altPassword();" href="<?php echo base_url() . 'users/epassword'; ?>"> <i class="ace-icon fa fa-asterisk"></i> Change Password </a> </li>
							<li class="divider"></li>
							<li> <a onClick="return altLogout();" href="<?php echo base_url() . 'login/logout'; ?>"> <i class="ace-icon fa fa-power-off"></i> Sign Out </a> </li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.navbar-container -->
	</div>

	<div class="main-container ace-save-state" id="main-container">
		<script type="text/javascript">
			try {
				ace.settings.loadState('main-container')
			} catch (e) {
			}
		</script>

		<div id="sidebar" class="sidebar responsive ace-save-state">
			<script type="text/javascript">
				try {
					ace.settings.loadState('sidebar')
				} catch (e) {
				}
			</script>

			<ul class="nav nav-list">                
				<li class="<?php if (in_array($breadcrumb, array("Dashboard"))) echo 'active'; ?>"> <a href="<?php echo base_url() . 'dashboard' ?>"> <i class="menu-icon fa fa-tachometer"></i> <span class="menu-text"> Dashboard </span> </a> <b class="arrow"></b> </li>                
				<li class="<?php if (in_array($breadcrumb, array("Banners"))) echo 'active'; ?>"> 
					<a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-folder-open"></i> <span class="menu-text"> Banners </span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
					<ul class="submenu">
						<li class=""> <a href="<?php echo base_url() . 'banners/add'; ?>"> <i class="menu-icon fa fa-caret-right"></i> Upload New Banner </a> <b class="arrow"></b> </li>
						<li class=""> <a href="<?php echo base_url() . 'banners'; ?>"> <i class="menu-icon fa fa-caret-right"></i> Manage Banners </a> <b class="arrow"></b> </li>
					</ul>
				</li>
				<li class="<?php if (in_array($breadcrumb, array("About"))) echo 'active'; ?>"> 
					<a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-leaf"></i> <span class="menu-text"> About </span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
					<ul class="submenu">
						<li class=""> <a href="<?php echo base_url() . 'article/add'; ?>"> <i class="menu-icon fa fa-caret-right"></i> Add New About </a> <b class="arrow"></b> </li>
						<li class=""> <a href="<?php echo base_url() . 'article'; ?>"> <i class="menu-icon fa fa-caret-right"></i> Manage About </a> <b class="arrow"></b> </li>
					</ul>
				</li>
                
                                <li class="<?php if (in_array($breadcrumb, array("Category"))) echo 'active'; ?>"> 
					<a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-leaf"></i> <span class="menu-text">Category</span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
					<ul class="submenu">
						<li class=""> <a href="<?php echo base_url() . 'category/add'; ?>"> <i class="menu-icon fa fa-caret-right"></i> Add New Category </a> <b class="arrow"></b> </li>
						<li class=""> <a href="<?php echo base_url() . 'category'; ?>"> <i class="menu-icon fa fa-caret-right"></i> Manage Category </a> <b class="arrow"></b> </li>
					</ul>
				</li>
				<li class="<?php if (in_array($breadcrumb, array("News"))) echo 'active'; ?>"> 
					<a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-leaf"></i> <span class="menu-text"> News </span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
					<ul class="submenu">
						<li class=""> <a href="<?php echo base_url() . 'news/add'; ?>"> <i class="menu-icon fa fa-caret-right"></i> Add News </a> <b class="arrow"></b> </li>
						<li class=""> <a href="<?php echo base_url() . 'news'; ?>"> <i class="menu-icon fa fa-caret-right"></i> Manage News </a> <b class="arrow"></b> </li>
					</ul>
				</li>
                                <li class="<?php if (in_array($breadcrumb, array("Massage"))) echo 'active'; ?>"> 
					<a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-leaf"></i> <span class="menu-text"> Massage </span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
					<ul class="submenu">
						<li class=""> <a href="<?php echo base_url() . 'massage/add'; ?>"> <i class="menu-icon fa fa-caret-right"></i> Add News </a> <b class="arrow"></b> </li>
						<li class=""> <a href="<?php echo base_url() . 'massage'; ?>"> <i class="menu-icon fa fa-caret-right"></i> Manage News </a> <b class="arrow"></b> </li>
					</ul>
				</li>
                                 <li class="<?php if (in_array($breadcrumb, array("Corporateprofile"))) echo 'active'; ?>"> 
					<a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-leaf"></i> <span class="menu-text">Corporate Profile</span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
					<ul class="submenu">
						<li class=""> <a href="<?php echo base_url() . 'corporateprofile/add'; ?>"> <i class="menu-icon fa fa-caret-right"></i> Add Corporate Profile </a> <b class="arrow"></b> </li>
						<li class=""> <a href="<?php echo base_url() . 'corporateprofile'; ?>"> <i class="menu-icon fa fa-caret-right"></i> Manage Corporate Profile </a> <b class="arrow"></b> </li>
					</ul>
				</li>
                                <li class="<?php if (in_array($breadcrumb, array("Notice"))) echo 'active'; ?>"> 
					<a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-leaf"></i> <span class="menu-text">Notice</span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
					<ul class="submenu">
						<li class=""> <a href="<?php echo base_url() . 'notice/add'; ?>"> <i class="menu-icon fa fa-caret-right"></i> Add Notice </a> <b class="arrow"></b> </li>
						<li class=""> <a href="<?php echo base_url() . 'notice'; ?>"> <i class="menu-icon fa fa-caret-right"></i> Manage Notice </a> <b class="arrow"></b> </li>
					</ul>
				</li>
                                <li class="<?php if (in_array($breadcrumb, array("First Quater"))) echo 'active'; ?>"> 
					<a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-leaf"></i> <span class="menu-text">First Quater</span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
					<ul class="submenu">
						<li class=""> <a href="<?php echo base_url() . 'firstquater/add'; ?>"> <i class="menu-icon fa fa-caret-right"></i> Add First Quater </a> <b class="arrow"></b> </li>
						<li class=""> <a href="<?php echo base_url() . 'firstquater'; ?>"> <i class="menu-icon fa fa-caret-right"></i> Manage First Quater </a> <b class="arrow"></b> </li>
					</ul>
				</li>
                                <li class="<?php if (in_array($breadcrumb, array("Products"))) echo 'active'; ?>"> 
					<a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-leaf"></i> <span class="menu-text">Products</span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
					<ul class="submenu">
						<li class=""> <a href="<?php echo base_url() . 'products/add'; ?>"> <i class="menu-icon fa fa-caret-right"></i> Add Products</a> <b class="arrow"></b> </li>
						<li class=""> <a href="<?php echo base_url() . 'products'; ?>"> <i class="menu-icon fa fa-caret-right"></i> Manage Products </a> <b class="arrow"></b> </li>
					</ul>
				</li>
                                 <li class="<?php if (in_array($breadcrumb, array("Picture"))) echo 'active'; ?>"> 
					<a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-leaf"></i> <span class="menu-text">Gallery</span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
					<ul class="submenu">
						<li class=""> <a href="<?php echo base_url() . 'picture/add'; ?>"> <i class="menu-icon fa fa-caret-right"></i> Add Gallery</a> <b class="arrow"></b> </li>
						<li class=""> <a href="<?php echo base_url() . 'picture'; ?>"> <i class="menu-icon fa fa-caret-right"></i> Manage Gallery </a> <b class="arrow"></b> </li>
					</ul>
				</li>
                                <li class="<?php if (in_array($breadcrumb, array("Half Yearly"))) echo 'active'; ?>"> 
					<a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-leaf"></i> <span class="menu-text">Half Yearly</span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
					<ul class="submenu">
						<li class=""> <a href="<?php echo base_url() . 'halfyearly/add'; ?>"> <i class="menu-icon fa fa-caret-right"></i> Add Half Yearly</a> <b class="arrow"></b> </li>
						<li class=""> <a href="<?php echo base_url() . 'halfyearly'; ?>"> <i class="menu-icon fa fa-caret-right"></i> Manage Half yearly </a> <b class="arrow"></b> </li>
					</ul>
				</li>
                                <li class="<?php if (in_array($breadcrumb, array("Third Quater"))) echo 'active'; ?>"> 
					<a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-leaf"></i> <span class="menu-text">Third Quater</span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
					<ul class="submenu">
						<li class=""> <a href="<?php echo base_url() . 'thirdquater/add'; ?>"> <i class="menu-icon fa fa-caret-right"></i> Add Third Quater</a> <b class="arrow"></b> </li>
						<li class=""> <a href="<?php echo base_url() . 'thirdquater'; ?>"> <i class="menu-icon fa fa-caret-right"></i> Manage Third Quater </a> <b class="arrow"></b> </li>
					</ul>
				</li>
                                <li class="<?php if (in_array($breadcrumb, array("Anual Report"))) echo 'active'; ?>"> 
					<a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-leaf"></i> <span class="menu-text">Anual Report</span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
					<ul class="submenu">
						<li class=""> <a href="<?php echo base_url() . 'anualreport/add'; ?>"> <i class="menu-icon fa fa-caret-right"></i> Add Anual Report</a> <b class="arrow"></b> </li>
						<li class=""> <a href="<?php echo base_url() . 'anualreport'; ?>"> <i class="menu-icon fa fa-caret-right"></i> Manage Anual Report </a> <b class="arrow"></b> </li>
					</ul>
				</li>
                                 <li class="<?php if (in_array($breadcrumb, array("Investor Ralation"))) echo 'active'; ?>"> 
					<a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-leaf"></i> <span class="menu-text">Investor Ralation</span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
					<ul class="submenu">
						<li class=""> <a href="<?php echo base_url() . 'investorralation/add'; ?>"> <i class="menu-icon fa fa-caret-right"></i> Add Investor Ralation</a> <b class="arrow"></b> </li>
						<li class=""> <a href="<?php echo base_url() . 'investorralation'; ?>"> <i class="menu-icon fa fa-caret-right"></i> Manage Investor Ralation </a> <b class="arrow"></b> </li>
					</ul>
				</li>
				           
				<li <?php checkAdmin(); ?> class="<?php if (in_array($breadcrumb, array("Users", "Contact"))) echo 'active'; ?>"> 
					<a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-users"></i> <span class="menu-text"> Administrator </span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
					<ul class="submenu">
						<li class=""> <a href="<?php echo base_url() . 'contact'; ?>"> <i class="menu-icon fa fa-caret-right"></i> Contact </a> <b class="arrow"></b> </li>
						<?php if($this->session->userdata('roles')=='SuperAdmin') { ?>
							<li class=""> <a href="<?php echo base_url() . 'users/add'; ?>"> <i class="menu-icon fa fa-caret-right"></i> Add New User </a> <b class="arrow"></b> </li>
							<li class=""> <a href="<?php echo base_url() . 'users'; ?>"> <i class="menu-icon fa fa-caret-right"></i> Manage Users </a> <b class="arrow"></b> </li>
							<li class=""> <a href="<?php echo base_url() . 'users/delete_all_cache_file' ?>"> <i class="menu-icon fa fa-caret-right"></i> Delete All Cache File </a> <b class="arrow"></b> </li>
						<?php } ?>
					</ul>
				</li>                
			</ul><!-- /.nav-list -->
			<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
				<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
			</div>
		</div>

		<div class="main-content">
			<div class="main-content-inner">
				<div class="breadcrumbs ace-save-state" id="breadcrumbs">
					<ul class="breadcrumb">
						<?php echo '<li><h4>' . $breadcrumb . '</h4><li>'; ?> <span id="msg"> <?php echo $this->session->userdata('msg'); ?> </span> 
					</ul><!-- /.breadcrumb -->
					<div class="nav-search" id="nav-search">
						<span class="red"> * field is required. </span>
					</div><!-- /.nav-search -->
				</div>
				<div class="page-content">
					<div class="row">
						<div class="col-xs-12">
							<!-- PAGE CONTENT BEGINS -->