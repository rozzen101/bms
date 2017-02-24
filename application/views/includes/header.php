<!DOCTYPE html>
<!-- Template Name: Clip-Two - Responsive Admin Template build with Twitter Bootstrap 3.x | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- start: HEAD -->
    <head>
        <title>BMS - Barangay Management System</title>
        <!-- start: META -->
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- end: META -->
        <!-- start: GOOGLE FONTS -->
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
        <!-- end: GOOGLE FONTS -->
        <!-- start: MAIN CSS -->
        <link rel="stylesheet" href="<?php echo base_url();?>public/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>public/vendor/fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>public/vendor/themify-icons/themify-icons.min.css">
        <link href="<?php echo base_url();?>public/vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>public/vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>public/vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>public/vendor/DataTables/css/DT_bootstrap.css" rel="stylesheet" media="screen">
        <!-- end: MAIN CSS -->
        <!-- start: CLIP-TWO CSS -->
        <link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/styles.css">
        <link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/plugins.css">
        <link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/themes/theme-1.css" id="skin_color" />
        <!-- end: CLIP-TWO CSS -->
        <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
        <link href="<?php echo base_url();?>public/vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>public/vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>public/vendor/sweetalert/sweet-alert.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>public/vendor/sweetalert/ie9.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>public/vendor/toastr/toastr.min.css" rel="stylesheet" media="screen">
        
        <script src="<?php echo base_url();?>public/vendor/jquery/jquery.min.js"></script>
        <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
        <style type="text/css">
            .modal-content{
                background-color: #ffffff;
            }
        </style>
        <script type="text/javascript">
            var base_url = '<?php echo base_url();?>';
            var imgURL = '<?php echo $this->config->item('imgURL');?>';
            
        </script>
    </head>
    <!-- end: HEAD -->
    <body>
        <div id="app">
            <!-- sidebar -->
            <div class="sidebar app-aside" id="sidebar">
                <div class="sidebar-container perfect-scrollbar">
                    <nav>
                        <!-- start: MAIN NAVIGATION MENU -->
                        <div class="navbar-title">
                            <span>Main Navigation</span>
                        </div>
                        <ul class="main-navigation-menu">
                            <li >
                                <a href="<?php echo base_url();?>index.php/dashboard">
                                    <div class="item-content">
                                        <div class="item-media">
                                           <i class="ti-dashboard" ></i>
                                        </div>
                                        <div class="item-inner">
                                            <span class="title"> Dashboard </span>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <!-- <li>
                                <a href="#">
                                    <div class="item-content">
                                         <div class="item-media">
                                            <i class="ti-home"></i>
                                        </div>
                                        <div class="item-inner">
                                            <span class="title"> Barangay </span>
                                        </div>
                                    </div>
                                </a>
                            </li> -->


                            <li>
                              <a href="<?php echo base_url();?>index.php/resident">
                                    <div class="item-content">
                                         <div class="item-media">
                                            <i class="ti-user" ></i>
                                        </div>
                                        <div class="item-inner">
                                            <span class="title"> Resident </span>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li>
                              <a href="<?php echo base_url();?>index.php/business">
                                    <div class="item-content">
                                         <div class="item-media">
                                            <i class="ti-package" ></i>
                                        </div>
                                        <div class="item-inner">
                                            <span class="title"> Business </span>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li>
                              <a href="<?php echo base_url();?>index.php/reports">
                                    <div class="item-content">
                                         <div class="item-media">
                                            <i class="ti-stats-up" ></i>
                                        </div>
                                        <div class="item-inner">
                                            <span class="title"> Reports </span>
                                        </div>
                                    </div>
                                </a>
                            </li>



                        </ul>
                        <!-- end: MAIN NAVIGATION MENU -->
                        <!-- start: CORE FEATURES -->
                        <div class="navbar-title">
                            <span>Concerns & Inquiries</span>
                        </div>
                        <ul>
                            <li>
                                <a href="<?php? echo base_url();?>index.php/resident">
                                    <div class="item-content">
                                         <div class="item-media">
                                            <i class="ti-help-alt" ></i>
                                        </div>
                                        <div class="item-inner">
                                            <span class="title"> Contact Us </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- end: CORE FEATURES -->
                    </nav>
                </div>
            </div>
            <!-- / sidebar -->
            <div class="app-content">
                <!-- start: TOP NAVBAR -->
                <header class="navbar navbar-default navbar-static-top">
                    <!-- start: NAVBAR HEADER -->
                    <div class="navbar-header">
                        <a href="#" class="sidebar-mobile-toggler pull-left hidden-md hidden-lg" class="btn btn-navbar sidebar-toggle" data-toggle-class="app-slide-off" data-toggle-target="#app" data-toggle-click-outside="#sidebar">
                            <i class="ti-align-justify"></i>
                        </a>
                        <a class="navbar-brand" href="<?php echo base_url();?>index.php/dashboard">
                            <img src="<?php echo base_url();?>public/assets/images/llc_header.png" class="img-responsive"  />
                        </a>
                        <a href="#" class="sidebar-toggler pull-right visible-md visible-lg" data-toggle-class="app-sidebar-closed" data-toggle-target="#app">
                            <i class="ti-align-justify"></i>
                        </a>
                    </div>
                    <!-- end: NAVBAR HEADER -->
                    <!-- start: NAVBAR COLLAPSE -->
                    <div class="navbar-collapse collapse ">
                        <ul class="nav navbar-right">
                            <!-- start: MESSAGES DROPDOWN -->
                            <li class="dropdown">
                                <a href class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="dot-badge partition-red"></span> <i class="ti-comment"></i> <span>Notification</span>
                                </a>
                                <ul class="dropdown-menu dropdown-light dropdown-messages dropdown-large">
                                  
                                    <li>
                                        <div class="drop-down-wrapper ps-container">
                                            <ul>
                                                <li class="unread">
                                                    <a href="javascript:;" class="unread">
                                                        <div class="clearfix">
                                                            <div class="thread-image">
                                                                <img src="./<?php echo base_url();?>public/assets/images/avatar-2.jpg" alt="">
                                                            </div>
                                                            <div class="thread-content">
                                                                <span class="author">Nicole Bell</span>
                                                                <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
                                                                <span class="time"> Just Now</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" class="unread">
                                                        <div class="clearfix">
                                                            <div class="thread-image">
                                                                <img src="./<?php echo base_url();?>public/assets/images/avatar-3.jpg" alt="">
                                                            </div>
                                                            <div class="thread-content">
                                                                <span class="author">Steven Thompson</span>
                                                                <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
                                                                <span class="time">8 hrs</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="clearfix">
                                                            <div class="thread-image">
                                                                <img src="./<?php echo base_url();?>public/assets/images/avatar-5.jpg" alt="">
                                                            </div>
                                                            <div class="thread-content">
                                                                <span class="author">Kenneth Ross</span>
                                                                <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
                                                                <span class="time">14 hrs</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="view-all">
                                        <a href="#">
                                            See All
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- end: MESSAGES DROPDOWN -->
                           
                        </ul>
                    
                    </div>
                  
                </header>
                <!-- end: TOP NAVBAR -->
