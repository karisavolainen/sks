<?php // START FUNCTIONS




// --------------------
// CUSTOM EXCERPT AND TITLE LENGHTS
// --------------------

if ( ! function_exists ( 'custom_excerpt' ) ) {
	function custom_excerpt($count){
	  $excerpt = get_the_content();
	  $excerpt = strip_tags($excerpt);
	  $excerpt = substr($excerpt, 0, $count);
	  $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	  $excerpt = $excerpt . '...';
	  return $excerpt;
	}
}

if ( ! function_exists ( 'custom_title' ) ) {
	function custom_title($count){
		$title = get_the_title();
		if ( strlen($title) > $count ){
			$title = substr($title,0,$count);
			$title = $title . '...';
		}
		return $title;
	}
}





// --------------------
// POSTS META
// --------------------
if ( ! function_exists ( 'varikaswp_display_post_meta' ) ) {
    function varikaswp_display_post_meta(){ ?>
        <div class="article-meta">

            <ul class="meta text-muted list-inline">
                <li>
                    <span class="glyphicon glyphicon-time"></span>
                    <?php the_time('d.m.Y'); ?>
                </li>
                <li>
                    <span class="glyphicon glyphicon-user"></span>
                    <?php the_author(); ?>
                </li>
                <?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
                <li>
                    <?php
                        $sp = '<span class="glyphicon glyphicon-comment"></span> ';
                        comments_popup_link($sp . __( 'Leave comment', 'varikaswp'), $sp . __( '1 comment', 'varikaswp'), $sp . __( '% comments', 'varikaswp'));
                    ?>
                </li>
                <li>
                    <span class="glyphicon glyphicon-tag"></span>
                    <?php the_category(', '); ?>
                </li>
                <?php endif; ?>
                <?php edit_post_link(__( 'Edit', 'varikaswp'), '<li><span class="glyphicon glyphicon-pencil"></span> ', '</li>'); ?>
            </ul>
        </div>

    <?php } // END varikaswp_display_post_meta
}


// --------------------
// DISPLAY POSTS
// --------------------
if ( ! function_exists ( 'varikaswp_display_post' ) ) {
    function varikaswp_display_post($multiple_on_page) {
		
		$classArray = get_post_class();
		$postClasses = implode(' ', $classArray);
		
        if( $multiple_on_page )
			print '<div class="post-wrap ' . $postClasses . '">';
		else
			print '<div class="main-content ' . $postClasses . '" >';
		
?>

                <?php // ARTICLE FEATURED IMAGE ?>
                <?php if (has_post_thumbnail()): ?>
                    <div class="featured-wrap">
                    <?php if ($multiple_on_page) : ?>
                        <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                            <?php the_post_thumbnail('varikaswp_featured'); ?>
                        </a>
                    <?php else: ?>
                        <?php the_post_thumbnail('varikaswp_featured'); ?>
                    <?php endif ?>
                    </div><!--/.featured-wrap-->
                <?php endif; //end has_post_thumbnail ?>



                <?php // ARTICLE HEADER ?>

                <?php if( $multiple_on_page ): //ARCHIVE & CATEGORY VIEW ?>
			
                    <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
						<?php print custom_title(30); ?>
					</a></h3>
                    <?php varikaswp_display_post_meta() ?>
					<?php print custom_excerpt(200); ?>
			
                <?php else: //SINGLE poST VIEW ?>
			
                    <h1><?php the_title(); ?></h1>
					<?php if( is_single() ){ varikaswp_display_post_meta(); } ?>
					<?php the_content(); ?>
			
                <?php endif; ?>


                <?php // POST FOOTER ?>
                <footer class="article-footer">
                <?php if ($multiple_on_page) : ?>
                    <a href="<?php the_permalink() ?>"><?php _e('Read more', 'varikaswp'); ?></a>
                <?php else: ?>
                    <?php // SINGLE POST FOOTER ?>
                <?php endif; ?>
                </footer>


        </div><!--/.main-content or .post-wrap  -->
    <?php } // END varikaswp_display_post 
}








// ------------------------
// ADD CLASS TO NEXT AND PREVIOUS POST LINKS
// --------------------
if ( ! function_exists ( 'posts_link_attributes' ) ) {
    function posts_link_attributes() {
        return 'class="btn btn-nav"';
    }
    add_filter('next_posts_link_attributes', 'posts_link_attributes');
    add_filter('previous_posts_link_attributes', 'posts_link_attributes');
}




// --------------------
// DISPLAY ARCTICLE PAGE NAV
// --------------------
if ( ! function_exists ( 'varikaswp_page_navi' ) ) {
    function varikaswp_page_navi($listing_page) {
        global $wp_query;
    ?>

        <?php if (get_next_posts_link() || get_previous_posts_link()|| get_next_post() || get_previous_post() ): ?>
            <?php if ($listing_page) : ?>
            <nav class="post-nav articles">
                <ul class="list-inline">
                    <li class="next pull-right"><?php next_posts_link(__('Older posts', 'varikaswp') . ' &raquo;'); ?></li>
                    <li class="prev pull-left"><?php previous_posts_link('&laquo; ' . __('Newer posts', 'varikaswp')); ?></li>
                </ul>
            </nav>
            <?php else: ?>
            <nav class="post-nav posts">
                <ul class="list-inline">
                    <li class="prev pull-right"><?php previous_post_link('%link', __('Previous post', 'varikaswp') . ' &raquo;'); ?></li>
                    <li class="next pull-left"><?php next_post_link('%link', '&laquo; ' . __('Next post', 'varikaswp')); ?></li>
                </ul>
            </nav>
            <?php endif; ?>
        <?php endif; ?> 
    <?php } // END varikaswp_page_navi
}










// END FUNCTIONS ?>