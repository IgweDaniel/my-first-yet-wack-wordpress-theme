<?php get_header(); ?>






 <div class="page__content">
    <?php while ( have_posts() ) :
        the_post();
    ?> 
       
       <div class="sub__container">
      <div class="news">
        <h1>   <?php   the_title(); ?></h1>
    </div>
         <div class="more__info"><?php   the_content(); ?></div>    
    </div>
  
        <?php
    
    endwhile; 
    ?>
</div>
<?php get_footer(); ?>




