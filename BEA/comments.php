

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
                    
                    )
                );
                ?>
          
            
          </div>

          
        

</div>