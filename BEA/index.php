<?php get_header();
   if(!is_category()){
    $category = get_category(get_option('default_category'));
    }
    else{
      
      $queryObject = get_queried_object();
      $category =get_category($queryObject->term_id);


    }
?>

<section class="container">
    <div class="page__content">
      
      <div class="page__content-header">
        <h1 class="title"> 
       
      
          <?php echo  $category->cat_name; ?></h1>
        <div class="archive__filter">
          <div class="categories__menu">
            <a href="#" class="dropdown__trigger"><?php   
            echo  $category->cat_name;
            ?></a>
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
    
      if(!is_search()){
        query_posts(array('cat'=> $category->cat_ID, 'posts_per_page'=>'4'));
      }
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

<?php
 get_footer();

?>
