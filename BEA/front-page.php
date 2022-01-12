<?php get_header(); ?>
  <div class="showcase__wrapper">
    <div class="showcase">
      <div class="showcase__hero">
        <div class="hero__text">
          <h1 class="hero__heading" data-scroll>
            Black is <br />
            <br />
            King!
          </h1>
        </div>
        <div class="hero__img" data-scroll>
          <img src="<?php echo get_template_directory_uri() ?>/webp/showcase/IMG_4705.webp" alt="" class="hero__img--1" />
          <img src="<?php echo get_template_directory_uri() ?>/webp/showcase/IMG_4318.webp" alt="" class="hero__img--2" />
          <img src="<?php echo get_template_directory_uri() ?>/svg/header-pttrn.1cea0b29.svg" alt="" class="hero__img--3" />
          <img src="<?php echo get_template_directory_uri() ?>/webp/showcase/IMG_4204.webp" alt="" class="hero__img--4" />
          <img src="<?php echo get_template_directory_uri() ?>/webp/showcase/IMG_4166.webp" alt="" class="hero__img--5" />
        </div>
      </div>
    </div>
  </div>
  <div class="gallery__snippet">
    <div class="snippet__header">
      <h2 class="snippet__header-text" data-scroll>Gallery Snippet</h2>
      <a href="#" class="snippet__header-link" data-scroll>View Gallery ➡</a>
    </div>
    <div class="snippet__images" data-scroll>
      <div class="snippet__image-container">
        <div class="snippet__image snippet__image-1"></div>
      </div>
      <div class="snippet__image-container">
        <div class="snippet__image snippet__image-2"></div>
      </div>
      <div class="snippet__image-container">
        <div class="snippet__image snippet__image-3"></div>
      </div>
      <div class="snippet__image-container">
        <div class="snippet__image snippet__image-4"></div>
      </div>
    </div>
  </div>

  <!-- Blog Section -->
  <div class="blog__showcase">
    <div class="blog__showcase-header">
      <h2 class="showcase__header-text" data-scroll>Blog</h2>
      <a href="/blog" class="showcase__header-link" data-scroll>Go To Blog ➡</a>
    </div>
    <div class="blog__post-container">
    <?php
    if( have_posts() ) {
      while( have_posts() ) {
        the_post();
        get_template_part("template-parts/content","article")
        ?>
      
        <?php
      }
    }
    ?>
    </div>
  </div>

  <!-- Footer Section -->
  <footer class="home__footer">
    <div class="footer__container">
      <div class="media__links" data-scroll>
        <ul>
          <li><a href="#">Instagram</a></li>
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Twitter</a></li>
        </ul>
      </div>
      <div class="news__later">
        <p class="news__later-text" data-scroll>
          Subscribe to our newslater!
        </p>
        <form action="">
          <input type="text" name="newslater" id="newslater" placeholder="Enter Email" />
          <input type="submit" value="Submit" />
        </form>
      </div>
    </div>
  </footer>
  <script src="<?php echo get_template_directory_uri() ?>/js/main.js"></script>
  <script>
    // smooth scroll
    const scroll = new LocomotiveScroll({
      el: document.querySelector("#js-scroll"),
      smooth: true,
      smoothMobile: true,
      inertia: 0.75,
    });
  </script>
</body>

</html>