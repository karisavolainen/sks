<?php // START FUNCTIONS




// --------------------
// REGISTER WIDGET AREAS
// --------------------
if ( ! function_exists ( 'varikaswp_register_sidebars' ) ) {
    function varikaswp_register_sidebars() {   
        register_sidebar(array(
          'id' => 'right-sidebar',
          'name' => __('Sidebar right', 'varikaswp'),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget' => '</div>',
          'before_title' => '<h4>',
          'after_title' => '</h4>',
        ));  
        register_sidebar(array(
          'id' => 'footer1',
          'name' => __('Footer left', 'varikaswp'),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget' => '</div>',
          'before_title' => '<h4>',
          'after_title' => '</h4>',
        ));
        register_sidebar(array(
          'id' => 'footer2',
          'name' => __('Footer right', 'varikaswp'),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget' => '</div>',
          'before_title' => '<h4>',
          'after_title' => '</h4>',
        ));  
    } // END varikaswp_register_sidebars
    add_action( 'widgets_init', 'varikaswp_register_sidebars' );
}





// END FUNCTIONS ?>