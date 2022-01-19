<?php get_header(); ?>

 <div class="page__content">
    <?php while ( have_posts() ) :
        the_post();
    ?> 
        
        <div data-scroll> <?php   the_content(); ?></div>
        <?php
    
    endwhile; 
    ?>
</div>
<?php get_footer(); ?>