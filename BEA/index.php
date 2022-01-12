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
      <article>
        <header>
          <div class="article__date" data-scroll>
            <span class="day">25</span><span class="month">January</span><span class="year">2022</span>
          </div>
          <h2 class="article__title" data-scroll>
            <a href="#" rel="bookmark">Road to SMVP Podcast – Episode Three – How to win a VIP
              ticket?</a>
          </h2>
          <div class="separator" data-scroll>✻</div>
        </header>
        <section class="article__content">
          <p data-scroll>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet
            atque deleniti aspernatur ipsum ex impedit, illum quibusdam
            laudantium vero facere.
          </p>
        </section>
        <a href="#" class="read__more" data-scroll>Read More</a>
      </article>
      <article>
        <header>
          <div class="article__date" data-scroll>
            <span class="day">15</span><span class="month">March</span><span class="year">2022</span>
          </div>
          <h2 class="article__title" data-scroll>
            <a href="#" rel="bookmark">Road to SMVP Podcast – Episode Three – How to win a VIP
              ticket?</a>
          </h2>
          <div class="separator" data-scroll>✻</div>
        </header>
        <section class="article__content">
          <p data-scroll>
            Want to win tickets to the Soundcity MVP Awards Festival taking
            place on the 11th of January 2020, listen to this episode of the
            [...]
          </p>
        </section>
        <a href="#" class="read__more" data-scroll>Read More</a>
      </article>
      <article>
        <header>
          <div class="article__date" data-scroll>
            <span class="day">15</span><span class="month">March</span><span class="year">2022</span>
          </div>
          <h2 class="article__title" data-scroll>
            <a href="#" rel="bookmark">Road to SMVP Podcast – Episode Three – How to win a VIP
              ticket?</a>
          </h2>
          <div class="separator" data-scroll>✻</div>
        </header>
        <section class="article__content">
          <p data-scroll>
            Want to win tickets to the Soundcity MVP Awards Festival taking
            place on the 11th of January 2020, listen to this episode of the
            [...]
          </p>
        </section>
        <a href="#" class="read__more" data-scroll>Read More</a>
      </article>
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