<!DOCTYPE html>
<html>
<!--HEADER SINGLESSÄ EI OLE BODYSSA INLINE TYYLEJÄ PAGE KOHTAISELLE TAUSTALLE -->
  <head>
     <meta charset="utf-8">
  <!-- Title wordpress backendistä -->
  <title><?php
  wp_title('/', 'true', 'right');
  bloginfo ( 'name' )
  ?>
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Head infoa wordpressistä -->
  <?php wp_head();?>
  

<!-- Google fonts-->
<link href="https://fonts.googleapis.com/css?family=Raleway+Dots|Raleway:300,400,500,600,700" rel="stylesheet">

<!-- Linkitetään style.css -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">


  <!-- jQuery aktivointi joka varmistaa että scriptiä ei ajeta jo jossain plugarissa-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<!--Bootstrap javascript -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
     <script src="<?php bloginfo('template_url'); ?>/js/carousel.js"></script>
   
  </head>
  
 <!--WORDPRESS SITE NAME-->
          
<body>
<header>
  <nav class="paanavi">
  <div class="kielivalinta"><?php dynamic_sidebar('language_sidebar'); ?></div>
  <h1>Juha Stenroos</h1>
    <div class="nav-wrap">
    <?php wp_nav_menu( array( 'theme_location' => 'paanavi', 'container_class' => 'main-nav', 'container' => 'nav' )); ?> 
    </div>  
    <div class="ikonit">
      <a href="https://github.com/xiong-xiong" target="_blank"><i class="fa fa-github"></i></a>
      <a href="https://profiles.wordpress.org/xiongxiong" target="_blank"><i class="fa fa-wordpress"></i></a>
      <a href="https://www.linkedin.com/in/juhastenroos" target="_blank"><i class="fa fa-linkedin"></i></a>
      <a href="https://twitter.com/juhastenroos" target="_blank"><i class="fa fa-twitter"></i></a>
    </div>
  </nav>
</header>
  <div class="menu-open"><i class="fa fa-bars"></i></div>
<div class="xiong-mobile-header"><h1 id="xiong-mobile-site-title"><?php bloginfo( 'name' ); ?></h1></div>

<!--<div class="mobile-bg"></div> -->