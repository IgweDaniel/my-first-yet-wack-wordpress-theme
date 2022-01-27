<?php get_header(); ?>






 <div class="page__content">
    <?php while ( have_posts() ) :
        the_post();
    ?> 
       
       <main>
           
           <?php   the_content(); ?>

       </main>  
        <?php
    
    endwhile; 
    ?>
</div>
<?php get_footer(); ?>




