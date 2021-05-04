<?php
include('connection.php');
include('session.php');
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gofix V.1 | Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
      ============================================ -->
      <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
      ============================================ -->
      <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
      ============================================ -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
      ============================================ -->
      <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
      ============================================ -->
      <link rel="stylesheet" href="css/owl.carousel.css">
      <link rel="stylesheet" href="css/owl.theme.css">
      <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
      ============================================ -->
      <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
      ============================================ -->
      <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
      ============================================ -->
      <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
      ============================================ -->
      <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
      ============================================ -->
      <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
      ============================================ -->
      <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
      ============================================ -->
      <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
      <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
      ============================================ -->
      <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
      <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
      <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
   
    <!-- style CSS
      ============================================ -->
      <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
      ============================================ -->
      <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
      ============================================ -->
      <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  </head>

  <body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
       <?php 

            $username = $_SESSION['username']; 
            
            $query = "SELECT * FROM tbl_admin_login WHERE username = '$username'";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($result)) {

             if ($row['roles'] == 'garage') {?>
            <div class="left-sidebar-pro">
            <nav id="sidebar" class="">
                <div class="sidebar-header">
                    <!--<a href="#"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    <strong><img src="img/logo/logosn.png" alt="" /></strong>-->
                </div>
                <div class="left-custom-menu-adp-wrap comment-scrollbar">
                    <nav class="sidebar-nav left-sidebar-menu-pro">
                        <ul class="metismenu" id="menu1">
                            <li class="active">
                                <a class="" href="dashboard.php">
                                 <i class="fa big-icon fa-home icon-wrap"></i>
                                 <span class="mini-click-non">Dashboard</span>
                             </a>  
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="fa big-icon fa-bell-o icon-wrap"></i> <span class="mini-click-non">Requests</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="ADDUSER" href="ServedRequests.php"><i class="fa fa-battery-full sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Served</span></a></li>
                                <li><a title="View Mail" href="newRequests.php"><i class="fa fa-battery-empty sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Non served</span></a></li>
                                 
                            </ul>
                        </li>
                          
                        
                    </ul>
                </nav>
            </div>
        </nav>
    </div>

 <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li> <a data-toggle="collapse" data-target="#chart" href="dashboard.php">Dashboard <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demo" href="#">Administration <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                    <ul id="demo" class="collapse dropdown-header-top">
                                        <li><a href="mailbox.html">Add User</a>
                                        </li>
                                        <li><a href="mailbox-view.html">User management</a>
                                        </li>
                                         
                                    </ul>
                                </li>
                               
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <?php }elseif ($row['roles'] == 'spare') {?>
            <div class="left-sidebar-pro">
            <nav id="sidebar" class="">
                <div class="sidebar-header">
                    <a href="#"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    <strong><img src="img/logo/logosn.png" alt="" /></strong>
                </div>
                <div class="left-custom-menu-adp-wrap comment-scrollbar">
                    <nav class="sidebar-nav left-sidebar-menu-pro">
                        <ul class="metismenu" id="menu1">
                          <li class="active">
                                <a class="" href="dashboard.php">
                                 <i class="fa big-icon fa-home icon-wrap"></i>
                                 <span class="mini-click-non">Dashboard</span>
                             </a>  
                        </li>
                            <li class="active">
                                <a class="" href="spareproducts.php">
                                 <i class="fa big-icon fa-list icon-wrap"></i>
                                 <span class="mini-click-non">My Products</span>
                             </a>  
                        </li>
                         <li class="active">
                                <a class="" href="sparerequests.php">
                                 <i class="fa big-icon fa-book icon-wrap"></i>
                                 <span class="mini-click-non">My requests</span>
                             </a>  
                        </li>
                          
                        
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
   <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li> <a data-toggle="collapse" data-target="#chart" href="dashboard.php">Dashboard <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                </li>
                                <li> <a data-toggle="collapse" data-target="#chart" href="spareproducts.php">My products <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demo" href="sparerequests.php">My requests <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                    
                                </li>
                               
                               < 
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <?php }elseif ($row['roles'] == 'other') {?>
            <div class="left-sidebar-pro">
            <nav id="sidebar" class="">
                <div class="sidebar-header">
                    <a href="#"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    <strong><img src="img/logo/logosn.png" alt="" /></strong>
                </div>
                <div class="left-custom-menu-adp-wrap comment-scrollbar">
                    <nav class="sidebar-nav left-sidebar-menu-pro">
                        <ul class="metismenu" id="menu1">
                          <li class="active">
                                <a class="" href="dashboard.php">
                                 <i class="fa big-icon fa-home icon-wrap"></i>
                                 <span class="mini-click-non">Dashboard</span>
                             </a>  
                        </li>
                            <li class="active">
                                <a class="" href="otherproducts.php">
                                 <i class="fa big-icon fa-list icon-wrap"></i>
                                 <span class="mini-click-non">My Products</span>
                             </a>  
                        </li>
                         <li class="active">
                                <a class="" href="otherrequest.php">
                                 <i class="fa big-icon fa-book icon-wrap"></i>
                                 <span class="mini-click-non">My requests</span>
                             </a>  
                        </li>
                          
                        
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
   <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li> <a data-toggle="collapse" data-target="#chart" href="dashboard.php">Dashboard <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                </li>
                                <li> <a data-toggle="collapse" data-target="#chart" href="spareproducts.php">My products <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demo" href="sparerequests.php">My requests <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                    
                                </li>
                               
                               < 
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <?php }elseif ($row['roles'] == 'electronics') {?>
            <div class="left-sidebar-pro">
            <nav id="sidebar" class="">
                <div class="sidebar-header">
                    <a href="#"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    <strong><img src="img/logo/logosn.png" alt="" /></strong>
                </div>
                <div class="left-custom-menu-adp-wrap comment-scrollbar">
                    <nav class="sidebar-nav left-sidebar-menu-pro">
                        <ul class="metismenu" id="menu1">
                            <li class="active">
                                <a class="" href="dashboard.php">
                                 <i class="fa big-icon fa-home icon-wrap"></i>
                                 <span class="mini-click-non">Dashboard</span>
                             </a>  
                        </li>
                            <li class="active">
                                <a class="" href="electronicsproducts.php">
                                 <i class="fa big-icon fa-list icon-wrap"></i>
                                 <span class="mini-click-non">My Products</span>
                             </a>  
                        </li>
                         <li class="active">
                                <a class="" href="electronicrequests.php">
                                 <i class="fa big-icon fa-book icon-wrap"></i>
                                 <span class="mini-click-non">My requests</span>
                             </a>  
                        </li>
                          
                        
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
   <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li> <a data-toggle="collapse" data-target="#chart" href="dashboard.php">Dashboard <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                </li>
                                <li> <a data-toggle="collapse" data-target="#chart" href="electronicsproducts.php">My products <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demo" href="electronicrequests.php">My requests <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                    
                                </li>
                               
                               < 
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <?php }else{?> 

    <div class="left-sidebar-pro">
            <nav id="sidebar" class="">
                <div class="sidebar-header">
                    <a href="#"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    <strong><img src="img/logo/logosn.png" alt="" /></strong>
                </div>
                <div class="left-custom-menu-adp-wrap comment-scrollbar">
                    <nav class="sidebar-nav left-sidebar-menu-pro">
                        <ul class="metismenu" id="menu1">
                            <li class="active">
                                <a class="" href="dashboard.php">
                                 <i class="fa big-icon fa-home icon-wrap"></i>
                                 <span class="mini-click-non">Dashboard</span>
                             </a>  
                        </li>
                        <li class="active">
                                <a class="" href="users.php">
                                 <i class="fa big-icon fa-user icon-wrap"></i>
                                 <span class="mini-click-non">Users</span>
                             </a>  
                        </li>
                        <li class="active">
                                <a class="" href="shops.php">
                                 <i class="fa big-icon fa-shopping-cart icon-wrap"></i>
                                 <span class="mini-click-non">Shops</span>
                             </a>  
                        </li>
                        <li class="active">
                                <a class="" href="carerental.php">
                                 <i class="fa big-icon fa-car icon-wrap"></i>
                                 <span class="mini-click-non">Car rental</span>
                             </a>  
                        </li>
                        <li class="active">
                                <a class="" href="drivers.php">
                                 <i class="fa big-icon fa-user icon-wrap"></i>
                                 <span class="mini-click-non">Drivers</span>
                             </a>  
                        </li>
                         <li class="active">
                                <a class="" href="garages.php">
                                 <i class="fa big-icon fa-home icon-wrap"></i>
                                 <span class="mini-click-non">Garages</span>
                             </a>  
                        </li>   
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
   <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li> <a data-toggle="collapse" data-target="#chart" href="#">Dashboard<span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demo" href="users.php">users <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                    
                                </li> 
                                <li><a data-toggle="collapse" data-target="#demo" href="shops.php">shops <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                    
                                </li> 
                                <li><a data-toggle="collapse" data-target="#demo" href="carerental.php">car rental <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                    
                                </li> 

                                <li><a data-toggle="collapse" data-target="#demo" href="drivers.php">Driver <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                    
                                </li> 
                                <li><a data-toggle="collapse" data-target="#demo" href="garages.php">Garages <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                    
                                </li> 
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <?php } } ?>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="#"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                               <i class="fa fa-bars"></i>
                                           </button>
                                       </div>
                                   </div>
                                   <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">

                                   </div>
                                   <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="header-right-info">
                                        <ul class="nav navbar-nav mai-top-nav header-right-menu">  
                                            <li class="nav-item">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                 <i class="fa fa-user adminpro-user-rounded header-riht-inf" aria-hidden="true"></i>
                                                 <span class="admin-name"><?php 
                                                 $email=$_SESSION['username'];
                                                 if ($email!="")
                                                 {
                                                    $query = "SELECT * FROM tbl_admin_login WHERE username='$email'";

                                                    $result = mysqli_query($conn,$query);
                                                    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                                                    $name=$row['username'];
                                                    echo $name  ;
                                                } 
                                                ?>   </span>
                                                <i class="fa fa-angle-down adminpro-icon adminpro-down-arrow"></i>
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">

                                                <li><a href="profile.php"><span class="fa fa-user author-log-ic"></span>My Profile</a>
                                                </li>

                                                <li><a href="logout.php"><span class="fa fa-lock author-log-ic"></span>Log Out</a>
                                                </li>
                                            </ul>
                                        </li> 
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
