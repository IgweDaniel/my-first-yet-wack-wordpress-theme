



<form action="/" method="get" class="form__search">
            <label for="search">Search for:</label>
            <!-- <input type="hidden" value="post" name="post_type" id="post_type" /> -->
            <input
              value="<?php the_search_query(); ?>"
              class="search__query"
              type="text"
              name="s"
              id="search"
              placeholder="Search ..."
              autocomplete="off"
            />
            <button type="submit">Search</button>
</form>