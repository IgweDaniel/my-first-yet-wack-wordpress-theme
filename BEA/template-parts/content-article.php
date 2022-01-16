<article class="<?php echo $args['className']?>">
        <header>
          <div class="article__date" data-scroll>

              <?php  echo '<span class="day">' . get_the_date( 'd' ) . '</span>'; ?>
              <?php  echo '<span class="month">' . get_the_date('M') . '</span>'; ?>
              <?php  echo '<span class="year">' . get_the_date('Y') . '</span>'; ?>
         
          </div>
          <h2 class="article__title" data-scroll>
              
    <a href="#" rel="bookmark">                     
        <?php
        
       the_title();
     ?></a>

            
    
          </h2>
          <div class="separator" data-scroll>✻</div>
        </header>
        <section class="article__content">
         
            <div data-scroll>    
                <?php
                    the_content()
                ?>
            </div>
      
        </section>

        <a href="<?php the_permalink()?>" class="read__more" data-scroll>Read More</a>
      </article>