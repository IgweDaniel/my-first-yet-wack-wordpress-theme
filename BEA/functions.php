<?php


if($_REQUEST['subscribe_me'] == 'Submit') {
  $email = $_POST['email'];
 
  subscribe_user($email);

 
}
function subscribe_user($email){

  if (class_exists(\MailPoet\API\API::class)) {
    $mailpoet_api = \MailPoet\API\API::MP('v1');
  
  }

  $lists = $mailpoet_api->getLists();
  $list_ids = array();

  if (is_array($lists)) {
      foreach ($lists as $ids) {
        $list_ids[] = $ids['id'];
      }
  }
  $subscriber = [];
  $subscriber['email']=$email;

  try {
    $get_subscriber = $mailpoet_api->getSubscriber($subscriber['email']);
  } catch (\Exception $e) {}
  try {
    if (!$get_subscriber) {
      // Subscriber doesn't exist let's create one
      $mailpoet_api->addSubscriber($subscriber, $list_ids);
    } else {
      // In case subscriber exists just add him to new lists
      $mailpoet_api->subscribeToLists($subscriber['email'], $list_ids);
    }
  
  } catch (\Exception $e) {
    $error_message = $e->getMessage(); 
  }
}


  


add_action( 'my_action', 'subscribe_user' );
function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'my-custom-menu' => __( 'My Custom Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );
// current_page_item

class Custom_Walker_Nav_Menu_top extends Walker_Nav_Menu
{
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $is_current_item = '';
        if(array_search('current-menu-item', $item->classes) != 0)
        {
            $is_current_item = 'current';
        }
        echo '<li><a class="nav__link '.$is_current_item.'"href="'.$item->url.'">'.$item->title;
    }

    function end_el( &$output, $item, $depth = 0, $args = array() ) {
        echo '</a></li>';
    }
}


	class Custom_Walker_Comment extends Walker_Comment {
		var $tree_type = 'comment';
		var $db_fields = array( 'parent' => 'comment_parent', 'id' => 'comment_ID' );
 
		// constructor – wrapper for the comments list
		function __construct() { ?>

		<ul class="comment__list">	

		<?php }

		// start_lvl – wrapper for child comments list
		function start_lvl( &$output, $depth = 0, $args = array() ) {
			$GLOBALS['comment_depth'] = $depth + 2; ?>
			
			<ul class=" comment__list">

		<?php }
	
		// end_lvl – closing wrapper for child comments list
		function end_lvl( &$output, $depth = 0, $args = array() ) {
			$GLOBALS['comment_depth'] = $depth + 2; ?>

    </ul>

		<?php }

		// start_el – HTML for comment template
		function start_el( &$output, $comment, $depth = 0, $args = array(), $id = 0 ) {
			$depth++;
			$GLOBALS['comment_depth'] = $depth;
			$GLOBALS['comment'] = $comment;
			$parent_class = ( empty( $args['has_children'] ) ? '' : 'parent' ); 
	
      // $tag = 'li';
      $add_below = 'comment__time';
		 ?>


<li class="comment">	
			<article 
      class="comment__article"
       id="comment__<?php comment_ID() ?>" >


        <span class="comment__number"><?php comment_ID() ?></span>
        <div class="media__body">
          <header class="comment__author">
                        <span class="comment__author-name"><?php comment_author(); ?></span>
                        <span class="comment__time">
                          <time class="comment-meta-item" datetime="<?php comment_date('Y-m-d') ?>T<?php comment_time('H:iP') ?>" itemprop="datePublished"><?php comment_date('jS F Y') ?>,
                          <?php comment_time() ?></time>
                        </span>
                        
                          
            <?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'reply_text' => __('<span class="reply__button">Reply</span>', 'textdomain'),'max_depth' => $args['max_depth']))) ?>
                      
                       
            </header>
            <?php if ($comment->comment_approved == '0') : ?>
              <div class="alert__info">
                            <p>Your comment is awaiting moderation.</p>
              </div>
            <?php endif; ?>
				
          <section class="comment__content" itemprop="text">
            <?php comment_text() ?>
          </section>
        </div>
        </article>
        

		<?php }

		// end_el – closing HTML for comment template
		function end_el(&$output, $comment, $depth = 0, $args = array() ) { ?>

    </li>
    

		<?php }

		// destructor – closing wrapper for the comments list
		function __destruct() { ?>

    </ul>
		
		<?php }

	}
?>