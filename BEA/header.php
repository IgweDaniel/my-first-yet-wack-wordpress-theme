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
        <li><a href="/" class="current nav__link">Home</a></li>
        <li><a href="/gallery" class="nav__link">Gallery</a></li>
        <li><a href="/blog" class="nav__link">Blog</a></li>
        <li><a href="/about" class="nav__link">About</a></li>
        <li><a href="/competition" class="nav__link">competition</a></li>
      </ul>
    </nav>
    <div class="hamburger">
      <div class="line line__1"></div>
      <div class="line line__2"></div>
      <div class="line line__3"></div>
    </div>
  </header>