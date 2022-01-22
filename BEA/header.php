<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BEA &mdash; Welcome</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.2.5/dist/locomotive-scroll.min.css" />
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/svg/Favicon.ico" />
  <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.2.5/dist/locomotive-scroll.min.js"></script>
</head>

<body id="js-scroll" data-scroll-section>
  <header class="header" data-scroll>
    <div class="logo">
      <img src="<?php echo get_template_directory_uri() ?>/svg/logowhite.svg" alt="logo" />
    </div>
    <nav data-scroll>
      <ul>
      <?php 
            wp_nav_menu( array( 
              'theme_location' => 'my-custom-menu', 
              'container_class' => 'custom-menu-class',
              'walker'=>new Custom_Walker_Nav_Menu_top()
              ) ); 
              
          ?>
      </ul>
    
    </nav>
    <div class="hamburger">
      <div class="line line__1"></div>
      <div class="line line__2"></div>
      <div class="line line__3"></div>
    </div>
  </header>
