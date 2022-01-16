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
                <img src="#" alt="" class="author__avatar-img" />
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
          
          <!-- Comment goes here -->
        </article>
      </div>
    </div>
    <aside class="side__bar" data-scroll>
      <div class="search__bar" data-scroll>
        <form action="" method="get">
          <label for="search">Search for:</label>
          <input type="text" name="search" id="search" class="search__query" placeholder="Search ..."
            autocomplete="off" />
          <button type="submit" class="search__submit" id="searchsubmit">
            Search
          </button>
        </form>
      </div>
      <hr class="separator" />
      <div class="recent__posts-section" data-scroll>
        <h4 class="title" data-scroll>Recent Posts</h4>
        <ul>
          <li>
            <a href="#">Road to SMVP podcast - Episode Three - How to win a VIP
              ticket?</a>
          </li>
          <li>
            <a href="#">Road to SMVP podcast - Episode one ft. Sarkodie.</a>
          </li>
          <li>
            <a href="#">Road to SMVP podcast - Episode one ft. 2Baba, M.I. Abaga.</a>
          </li>
          <li>
            <a href="#">Listen to Soundcity MVP 2020 performers playlist ft. Diamond
              Platnumz, Shatta Wale, Rema, Wizkid, Davido and more.</a>
          </li>
          <li>
            <a href="#">A lookback to Cassper Nyovest's epic dance at the Soundcity MVP
              Awards, other video highlights.</a>
          </li>
        </ul>
      </div>
      <hr class="separator" />
      <div class="archives__section" data-scroll>
        <h4 class="title">Archives</h4>
        <ul>
          <li><a href="#">January 2020</a></li>
          <li><a href="#">December 2019</a></li>
          <li><a href="#">June 2014</a></li>
          <li><a href="#">May 2014</a></li>
        </ul>
      </div>
      <hr class="separator" />
      <div id="categories" data-scroll>
        <h4 class="title">Categories</h4>
        <form action="" method="get">
          <label for="category">Categories</label>
          <select name="category" id="category">
            <option value="-1">Select Category</option>
            <option value="1">News</option>
            <option value="43">Podcast</option>
            <option value="17">Press</option>
            <option value="19">Video</option>
          </select>
        </form>
      </div>
      <hr class="separator" />
    </aside>
  </section>