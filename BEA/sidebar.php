<aside class="side__bar" data-scroll>
      <div class="search__bar" data-scroll>
      <?php get_search_form() ?>
      </div>
      <hr class="separator" />
      <div class="recent__posts-section" data-scroll>
        <h4 class="title" data-scroll>Recent Posts</h4>
        
        <ul>
        <?php  
        
        $recent_args = array(
            "posts_per_page" => 5,
            "orderby"        => "date",
            "order"          => "DESC"
        );      
        
        $recent_posts = new WP_Query( $recent_args );
        if ( $recent_posts -> have_posts() ) :
            while ( $recent_posts -> have_posts() ) :
        
            $recent_posts -> the_post();?>
            
            <li>
            <a href="<?php the_permalink()?>"><?php the_title()?></a>
          </li>
            <?php
            // ... Use regular 'the_title()', 'the_permalink()', etc. loop functions here.
        
            endwhile;
        endif;
        ?>
          
        </ul>
      </div>
      <hr class="separator" />
      <div class="archives__section" data-scroll>
        <h4 class="title">Archives</h4>
        	
        
        <ul>
            <?php wp_get_archives( array( 'type' => 'monthly', 'limit' => 14, 'before'=>"<li>", 'after'=>"</li>"  ) ); ?>
        
        </ul>
      </div>
      <hr class="separator" />
      
      <div id="categories" data-scroll>
          <div class="categories__menu">
            <a href="#" class="dropdown__trigger">Categories</a>
              <?php 
              wp_nav_menu( array( 
                'theme_location' => 'extra-menu', 
                ) ); 
                 ?>
           
          </div>
        </div>
    </aside>