<?php get_header(); ?>
  <section class="container">
    <div class="page__content">
      <div class="page__content-header">
        <h1 class="title">News</h1>
        <div class="archive__filter">
          <div class="categories__menu">
            <a href="#" class="dropdown__trigger">Categories</a>
            <ul>
              <li><a href="#">News</a></li>
              <li><a href="#">Podcast</a></li>
              <li><a href="#">Press</a></li>
              <li><a href="#">Video</a></li>
            </ul>
          </div>
        </div>
        <form action="#" class="form__search">
          <label for="search">Search for:</label>
          <input class="search__query" type="text" name="search" id="search" placeholder="Search ..."
            autocomplete="off" />
          <button type="submit">Search</button>
        </form>
      </div>
      <hr class="separator" />
      <div class="article__showcase">
      <?php
    if( have_posts() ) {
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
  <script src="<?php echo get_template_directory_uri() ?>/js/main.js"></script>
</body>

</html>