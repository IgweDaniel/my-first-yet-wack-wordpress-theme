<?php get_header(); ?>


 

  <div class="showcase__wrapper">
    <div class="showcase">
      <div class="showcase__hero">
        <div class="hero__text">
          <h1 class="hero__heading" data-scroll>
            Black is <br />
            <br />
            King!
          </h1>
        </div>
        <div class="hero__img" data-scroll>
          <img src="<?php echo get_template_directory_uri() ?>/webp/showcase/IMG_4705.webp" alt="" class="hero__img--1" />
          <img src="<?php echo get_template_directory_uri() ?>/webp/showcase/IMG_4318.webp" alt="" class="hero__img--2" />
          <img src="<?php echo get_template_directory_uri() ?>/svg/header-pttrn.1cea0b29.svg" alt="" class="hero__img--3" />
          <img src="<?php echo get_template_directory_uri() ?>/webp/showcase/IMG_4204.webp" alt="" class="hero__img--4" />
          <img src="<?php echo get_template_directory_uri() ?>/webp/showcase/IMG_4166.webp" alt="" class="hero__img--5" />
        </div>
      </div>
    </div>
  </div>
  <div class="gallery__snippet">
    <div class="snippet__header">
      <h2 class="snippet__header-text" data-scroll>Gallery Snippet</h2>
      <a href="/gallery" class="snippet__header-link" data-scroll>View Gallery ➡</a>
    </div>
    <div class="snippet__images" data-scroll>
      <div class="snippet__image-container">
        <div class="snippet__image snippet__image-1"></div>
      </div>
      <div class="snippet__image-container">
        <div class="snippet__image snippet__image-2"></div>
      </div>
      <div class="snippet__image-container">
        <div class="snippet__image snippet__image-3"></div>
      </div>
      <div class="snippet__image-container">
        <div class="snippet__image snippet__image-4"></div>
      </div>
    </div>
  </div>

  <!-- Blog Section -->
  <div class="blog__showcase">
    <div class="blog__showcase-header">
      <h2 class="showcase__header-text" data-scroll>Blog</h2>
      <a href="/blog" class="showcase__header-link" data-scroll>Go To Blog ➡</a>
    </div>
    <div class="blog__post-container">
        
    <?php 
// Define our WP Query Parameters
  $args = array(
    'post_type'         => 'post',
    'posts_per_page'    => 4
  );
  $the_query = new WP_Query( $args );
 ?>
    
    
    <?php 
     if( have_posts() ) {
    // Start our WP Query
    while ($the_query -> have_posts()) : $the_query -> the_post(); 
    // Display the Post Title with Hyperlink
    ?>
    
    
 <?php 
    get_template_part("template-parts/content","article");
   ?>
    <?php 
    endwhile;
  }
    
?>
    
    </div>
  </div>

  <!-- Footer Section -->
  <?php get_footer("main"); ?>