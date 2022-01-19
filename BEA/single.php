<?php get_header(); 

while ( have_posts() ) :
	the_post();
?>
<section class="container" data-scroll-section>
    <div class="page__content">
      <div class="page__content-wrapper">
        <article>
          <header class="article__header" data-scroll>
            <h1 class="article__title" data-scroll>
            <?php echo the_title(); ?>
            </h1>
            <hr class="separator" data-scroll />
          </header>
          <section class="article__content" data-scroll>
            <div data-scroll>
           
            <?php   the_content(); ?>
            </div>
            <img src="/webp/IMG_0041.webp" alt="" />
            <div class="share__post">
              <div class="share__post-inner">
                <h3 class="share__title" data-scroll>Share This</h3>
                <div class="share__icons" data-scroll>
                  <ul>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <footer class="article__footer" data-scroll>
            <div class="meta__categories" data-scroll>
              <span class="meta__categories-btn" data-scroll>Categories</span>
              <?php $categories= get_categories();
                 foreach ( $categories as $category ) {
                    echo '<a class="btn btn__small" data-scroll href="#"' . get_category_link($category->term_id) . '">' . $category->name . '</a>';

                 }
              ?>
          
            </div>
            
            <?php $tags= get_tags();
            if(!empty( $tags ) ){
            ?>
            <div class="meta__tags" data-scroll>
              <span class="meta__tags-btn" data-scroll>Tags</span>
              <?php
                 foreach ( $tags as $tag ) {
                    echo '<a class="btn btn__small" data-scroll href="#"' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
                 }
                 ?>
                </div>
                 <?php }  ?>
          

            <hr class="separator" data-scroll />
            <aside class="author" data-scroll>
              <div class="author__avatar">
              <?php echo get_avatar( get_the_author_meta( 'ID' ) , 32, "",get_the_author_meta("nickname"),array(
                "class"=>array("author__avatar-img")
              ) );?>

                <!-- <img src="#" alt="" class="author__avatar-img" /> -->
              </div>
              <div class="author__text" data-scroll>
                <div class="author__title">
                  <h4>
                    <span><a href="#" rel="author"><?php echo get_the_author_meta("nickname") ?></a></span>
                  </h4>
                </div>
              </div>
            </aside>
            <hr class="separator" data-scroll />

            
          </footer>

         
          <?php if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif; ?>


        
          <!-- Comment goes here -->
        </article>
      </div>
    </div>
    <?php get_sidebar() ?>
  </section>
<?php
 
endwhile; 
?>
  
  <?php get_footer("main"); ?>