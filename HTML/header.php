<!DOCTYPE html>
<html>

<head>

  
<meta charset="UTF-8">
<meta http-equiv="Content-Language" content="en">

  <title>Connect</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Connect Japan" />

 <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,500;0,700;0,800;0,900;1,400;1,500;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- favicon -->
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/connect/favicon.ico">
  <!-- Bootstrap -->
  <link href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <!-- tobii css -->
  <link href="<?php echo get_template_directory_uri() ?>/css/tobii.min.css" rel="stylesheet" type="text/css" />
  <!-- Icons -->
  <link href="<?php echo get_template_directory_uri() ?>/css/materialdesignicons.min.css" rel="stylesheet"
    type="text/css" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
  <!-- Slider -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/tiny-slider.css" />
  <link href="<?php echo get_template_directory_uri() ?>/css/swiper.min.css" rel="stylesheet" type="text/css" />
  <!-- Main Css -->
  <link href="<?php echo get_template_directory_uri() ?>/css/style.css" rel="stylesheet" type="text/css"
    id="theme-opt" />
  <link href="<?php echo get_template_directory_uri() ?>/css/colors/default.css" rel="stylesheet" id="color-opt">
  <link href="<?php echo get_template_directory_uri() ?>/css/connect.css" rel="stylesheet" id="color-opt">
  <?php wp_head(); ?>
</head>

<body>

  <!--  Loader -->
  <div id="preloader">
    <div id="status">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>
  </div>
  <!-- end Loader -->

  <!-- Navbar STart -->
  <header id="topnav" class="defaultscroll sticky">
    <div class="container">
      <!-- Logo container-->
      <div>
        <a class="logo" href="<?php echo home_url(); ?>">
          <span class="logo-light-mode">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-dark.png" class="l-dark" height="24"
              alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-light.png" class="l-light" height="24"
              alt="">
          </span>
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo-light.png" height="24"
            class="logo-dark-mode" alt="">
        </a>
      </div>
      <!--end login button-->

      <!-- End Logo container-->
      <div class="menu-extras">
        <div class="menu-item">
          <!-- Mobile menu toggle-->
          <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
            <div class="lines">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </a>
          <!-- End mobile menu toggle-->
        </div>
      </div>

      <div id="navigation">
        <!-- Navigation Menu-->
        <ul class="navigation-menu nav-light">
          <li><a href="<?php echo home_url();?>" class="sub-menu-item">Home</a></li>
          <li><a href="<?php echo home_url(); ?>/blog-japan" class="sub-menu-item">Blog-Japan</a></li>
          <li><a href="<?php echo home_url(); ?>/blog-events/" class="sub-menu-item">Blog</a></li>
          <li class="has-submenu parent-menu-item">
            <a href="">Contact Us</a><span class="menu-arrow"></span>
            <ul class="submenu">
              <li><a href="<?php echo home_url(); ?>/contact/" class="sub-menu-item">Contact Us</a></li>
              <li><a href="<?php echo home_url(); ?>/privacy/" class="sub-menu-item">Privacy Policy</a></li>
              <li><a href="<?php echo home_url(); ?>/terms-of-service/" class="sub-menu-item">Terms of Service</a></li>

            </ul>
          </li>
        </ul>
        <!--end navigation menu-->

        <!--end login button-->
      </div>
      <!--end navigation-->
    </div>
    <!--end container-->
  </header>
  <!--end header-->
  <!-- Navbar End -->