

<div id="comments" class="comments__area">
           
<!-- <div class="comments__area-header" data-scroll>
                <h3 class="comments__counter" data-scroll>
                  <span class="comments__total">+</span> There are no comments
                </h3>
                <a href="#" class="comments__add" data-scroll>Add Yours</a>
              </div> -->
         

            <?php 

                wp_list_comments(
                    array(
                        'walker' => new Custom_Walker_Comment(),
                        // 'short_ping'  => true,
                    
                    )
                );
                ?>
          
            
          </div>
          <?php
          
          comment_form(
              array(
                "class_container"=>"comment__respond",
                "class_form"=>"comment__form",
                'author' => '<p class="comment-form-author" data-scroll>' . '<label for="author">' . __( 'Name' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
                '<input id="author" name="author" type="text" placeholder="Name..." size="30" aria-required="true" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
                'email'=> '<p class="comment-form-email"><label for="email">' . __( 'Email' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
                '<input id="email" name="email" type="text" placeholder="you@email.com" size="30" aria-required="true" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
              ),
            );



           ?>

        

</div>