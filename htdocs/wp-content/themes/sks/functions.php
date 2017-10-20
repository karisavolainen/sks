<?php // START FUNCTIONS


/******


 - ADD ENQUEUE CUSTOM SCRIPTS AND STYLES (CHILD THEME)
 - ADD CUSTOM EDITOR STYLES
 - HIDE UNUSED THEMES FROM ADMIN VIEW

******/





// ------------------------
// ADD ENQUEUE CUSTOM SCRIPTS AND STYLES (CHILD THEME)
// ------------------------
function childTheme_theme_scripts(){
	wp_enqueue_style('frescoCSS', get_stylesheet_directory_uri() . '/css/lib/fresco.min.css', '', '', 'screen');
    wp_enqueue_style('customCSS', get_stylesheet_directory_uri() . '/css/custom.css', array(), filemtime(get_stylesheet_directory() . '/css/custom.css'), 'screen');

	wp_enqueue_script('frescoJS', get_stylesheet_directory_uri() . '/js/lib/fresco.js', array(), '1.0.0', true);
	wp_enqueue_script('siteJS', get_stylesheet_directory_uri() . '/js/site.js', array(), filemtime(get_stylesheet_directory() . '/js/site.js'), true);
}
add_action('wp_enqueue_scripts', 'childTheme_theme_scripts', 11);
// Enable shortcodes in text widgets
add_filter('widget_text','do_shortcode');







// ------------------------
// ADD CUSTOM EDITOR STYLES
// ------------------------
add_editor_style( get_stylesheet_directory_uri() . '/css/custom-editor-style.css' );






// ------------------------
// HIDE UNUSED THEMES FROM ADMIN VIEW
// ------------------------
function kill_theme_wpse_188906($themes) {
  unset($themes['varikaswp']);
  unset($themes['twentyseventeen']);
  unset($themes['twentysixteen']);
  return $themes;
}
add_filter('wp_prepare_themes_for_js','kill_theme_wpse_188906');

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer left',
		'id'            => 'footer_left',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="rounded">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => 'Footer center',
		'id'            => 'footer_center',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="rounded">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => 'Footer right',
		'id'            => 'footer_right',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="rounded">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

function my_acf_google_map_api( $api ){

	$api['key'] = 'AIzaSyDj5l_iUf6Evw8rokm26Ic5S3dxA_WarhA';

	return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
			'page_title' 	=> 'SKS Footer',
			'menu_title'	=> 'Footer',
			'menu_slug' 	=> 'sks-footer',
			'capability'	=> 'publish_pages',
			'redirect'		=> false
		));
}

// END FUNCTIONS
?>
