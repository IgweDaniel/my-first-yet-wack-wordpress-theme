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
        ?>
        <h2><?php the_title(); ?></h2>
        <?php
      }
    }
    ?>
        <!-- <article class="showcase__container">
          <header>
            <div class="article__date">
              <span class="day">25</span><span class="month">January</span><span class="year">2022</span>
            </div>
            <h2 class="article__title">
              <a href="#" rel="bookmark">Road to SMVP Podcast – Episode Three – How to win a VIP
                ticket?</a>
            </h2>
            <div class="separator">✻</div>
          </header>
          <section class="article__content">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa,
              vitae fugit. Enim necessitatibus, quos libero labore maiores
              eveniet reprehenderit itaque dolore accusantium magnam eius
              fugit exercitationem illo esse! Impedit, totam!
            </p>
          </section>
          <a href="/blogpage" class="read__more">Read More</a>
        </article>
        <article class="showcase__container">
          <header>
            <div class="article__date">
              <span class="day">25</span><span class="month">January</span><span class="year">2022</span>
            </div>
            <h2 class="article__title">
              <a href="#" rel="bookmark">Road to SMVP Podcast – Episode Three – How to win a VIP
                ticket?</a>
            </h2>
            <div class="separator">✻</div>
          </header>
          <section class="article__content">
            <p>
              Want to win tickets to the Soundcity MVP Awards Festival taking
              place on the 11th of January 2020, listen to this episode of the
              [...]
            </p>
          </section>
          <a href="/blogpage" class="read__more">Read More</a>
        </article> -->
      </div>
    </div>
  </section>
  <script src="<?php echo get_template_directory_uri() ?>/js/main.js"></script>
</body>

</html>