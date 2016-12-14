<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?></title>
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery-responsiveGallery.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slicknav.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/swiper.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
    <script src="<?php echo get_template_directory_uri(); ?>/js/libs.min.js"></script>
    <?php wp_head(); ?>
     <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.js"></script>
     <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.responsiveGallery.js"></script>
    <?php wp_head(about); ?>
  </head>
  <body <?php body_class(); ?>>
   <header class="header page_content">
   <div class="logo_w">
    <a class="logo" href="<?php echo get_home_url(); ?>">
      <img src="<?php echo bloginfo("template_url"); ?>/img/logo.jpg" alt="Logo" />
    </a>
    </div>
   <nav class="nav_top">
         <?php 
        wp_nav_menu( array(
          'menu_class'=>'menu',
          'menu_id' => 'menu',   
          'theme_location'=>'top3',
          'after'=>''       
        ) );
      ?>
   </nav>
   <div class="social">
    <?php dynamic_sidebar( 'top-area' ); ?>
   </div>
   <div class="sign">
    <a class="sign_link" href="#"><i class="icon icon_pen"></i>Записаться</a>
   </div>
 </header>