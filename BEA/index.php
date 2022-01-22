<?php get_header(); ?>
  <section class="container">
    <div class="page__content">
      <div class="page__content-header">
        <h1 class="title"> 
      
          <?php 
           $category = get_the_category();
           $categories = get_category($category[0]);
           if(!is_search() && !is_category()){
             $categories = get_category(get_option('default_category'));
             
          }

            echo  $categories ->name;
           ?></h1>
        <div class="archive__filter">
          <div class="categories__menu">
            <a href="#" class="dropdown__trigger"><?php   echo  $categories->name; ?></a>
            <?php 
              wp_nav_menu( array( 
                'theme_location' => 'categories', 
        
                ) ); 
        
          ?>
           
          </div>
        </div>
      <?php get_search_form() ?>
    </div>
    <hr class="separator" />
    <div class="article__showcase">
       
      <?php
    if( have_posts() ) {
      if(!is_search() && !is_category()){
        query_posts(array('cat'=>get_option('default_category'), 'posts_per_page'=>'4'));
      }
      // query_posts( 'category_ID='.get_option('default_category').'&posts_per_page=10' );
      while( have_posts() ) {
        the_post();
        get_template_part("template-parts/content","article",array( 'className' => 'showcase__container' ) )
        ?>
    
        <?php
      }
    }
    ?>
       
      </div>
    </div>
  </section>
  <?php get_footer(); ?>