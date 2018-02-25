<?php //START FUNCTIONS





// -------------------------------------------------
// STYLE COMMENT FORM FOR BS3
// -------------------------------------------------
if ( ! function_exists ( 'bootstrap3_comment_form_fields' ) ) {
    function bootstrap3_comment_form_fields($fields){
        $commenter = wp_get_current_commenter();

        $req = get_option('require_name_email');
        $aria_req = ( $req ? " aria-required='true'" : '' );
        $html5 = current_theme_supports('html5', 'comment-form') ? 1 : 0;

        $fields = array(
                'author' => '<div class="col-xs-6"><div class="form-group comment-form-author">'
                . '<label for="author">'
                . __('Name')
                . ( $req ? ' <span class="required">*</span>' : '' )
                . '</label> '
                . '<input class="form-control" id="author" name="author" type="text" value="'
                . esc_attr($commenter['comment_author'])
                . '" size="30"'
                . $aria_req
                . ' /></div>',
                'email' => '<div class="form-group comment-form-email"><label for="email">'
                . __('Email')
                . ( $req ? ' <span class="required">*</span>' : '' )
                . '</label> '
                . '<input class="form-control" id="email" name="email" '
                . ( $html5 ? 'type="email"' : 'type="text"' )
                . ' value="'
                . esc_attr($commenter['comment_author_email'])
                . '" size="30"'
                . $aria_req
                . ' /></div>',
                'url' => '<div class="form-group comment-form-url"><label for="url">'
                . __('Website')
                . '</label> '
                . '<input class="form-control" id="url" name="url" '
                . ( $html5 ? 'type="url"' : 'type="text"' )
                . ' value="'
                . esc_attr($commenter['comment_author_url'])
                . '" size="30" /></div>',
        );
        return $fields;
    }

    add_filter('comment_form_defaults', 'bootstrap3_comment_form');

    function bootstrap3_comment_form($args){
        $args['comment_field'] = '<div class="col-xs-6"><div class="form-group comment-form-comment">
                <label for="comment">' . _x('Comment', 'noun') . '</label> 
                <textarea class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
            </div></div>';
        return $args;
    }

    add_action('comment_form', 'bootstrap3_comment_button');

    function bootstrap3_comment_button(){
        echo '<div class="col-xs-12 text-right"><button class="btn btn-default" type="submit">' . __('Submit') . '</button></div></div>';
    } // END bootstrap3_comment_form_fields

    add_filter('comment_form_default_fields', 'bootstrap3_comment_form_fields');
}




// -------------------------------------------------
// LIST COMMENTS
// -------------------------------------------------
if ( ! function_exists ( 'varikaswp_commentlist' ) ) {
    function varikaswp_commentlist(){ ?>
    <ul class="commentlist nav nav-stacked">
        <?php wp_list_comments( array(
                'style'      => 'ol',
                'short_ping' => true,
                'avatar_size'=> 34,
            ) ); ?>
    </ul>
    <?php } // END varikaswp_commentlist
}



// -------------------------------------------------
// COMMENT NAV
// -------------------------------------------------
if ( ! function_exists ( 'varikaswp_comment_navi' ) ) {
    function varikaswp_comment_navi(){ ?>
        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
        <nav class="post-nav comments">
            <ul class="list-inline">
                <li class="next pull-right"><?php next_comments_link(__('Older Comments', 'varikaswp') . ' &raquo;'); ?></li>
                <li class="prev pull-left"><?php previous_comments_link( '&laquo; ' . __('Newer Comments', 'varikaswp')); ?></li>
            </ul>
        </nav>

        <?php endif;
    } // END varikaswp_commentlist
}








// END FUNCTIONS ?>