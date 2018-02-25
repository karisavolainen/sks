<?php //START FUNCTIONS







// --------------------
// ADD THEME SUPPORT
// --------------------
if ( ! function_exists ( 'varikaswp_theme_support' ) ) {
    function varikaswp_theme_support() {
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption'
        ));
        add_theme_support('post-thumbnails');      // wp thumbnails (sizes handled in functions.php)
        set_post_thumbnail_size(160, 160, true);   // default thumb size
        add_theme_support('automatic-feed-links'); // rss thingy
        add_theme_support( 'title-tag' );

        register_nav_menus( array( 'main_nav' => __('Main Menu', 'varikaswp'), ) );

        add_image_size( 'varikaswp_theme_support_featured', 1170, 1170 * (9 / 21), true);
        load_theme_textdomain( 'varikaswp', get_template_directory() . '/languages' );
    }
    add_action('after_setup_theme','varikaswp_theme_support');
}






// --------------------
// LOAD ENQUEUE SCRIPTS AND STYLES
// --------------------
if ( ! function_exists ( 'varikaswp_theme_scripts' ) ) {
    function varikaswp_theme_scripts() { 
        // STYLES REGISTER
        wp_enqueue_style( 'bs-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' );
        wp_enqueue_style( 'varikaswp-style', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), 'all');

        // STYLES ENQUEUE
        wp_enqueue_style( 'bs-style' );
        wp_enqueue_style( 'varikaswp-style' );

        // JAVASCRIPT REGISTER
        wp_enqueue_script( 'bs-script', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', array('jquery'), '3.3.5', true);

        // JAVASCRIPT ENQUEUE
        wp_enqueue_script('bs-script');
    }
    add_action( 'wp_enqueue_scripts', 'varikaswp_theme_scripts' );
}
/*
//DEFER ALL SCRIPTS
if ( ! function_exists( 'add_defer_to_cf7' ) ){
	function add_defer_to_cf7( $url ){
	    if ( FALSE === strpos( $url, '.js' ) ){ // not our file
	        return $url;
	    }
	    // Must be a ', not "!
	    return "$url' defer='defer";
	}
	add_filter( 'clean_url', 'add_defer_to_cf7', 11, 1 );
}
*/









// -------------------------------------------------
// HELP CONTACT FORM 7 TO PLAY NICE WITH BS
// -------------------------------------------------
add_filter('wpcf7_form_class_attr', 'wildli_custom_form_class_attr');

function wildli_custom_form_class_attr($class){
	$class .= ' form-horizontal';
	return $class;
}






// END FUNCTIONS ?>