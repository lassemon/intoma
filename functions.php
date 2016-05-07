<?php

function intoma_setup() {
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'intoma' )
	) );
}
add_action( 'after_setup_theme', 'intoma_setup' );

// add a favicon to your
function blog_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('wpurl').'/favicon.ico" />';
}
add_action('wp_head', 'blog_favicon');


// remove junk from head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);


function custom_enqueue_styles(){
 	wp_enqueue_style('common-styles', get_stylesheet_directory_uri() . '/style.css');
}
add_action( 'wp_enqueue_scripts', 'custom_enqueue_styles', 15 );

function scripts(){
	wp_enqueue_script('bundle-script', get_template_directory_uri() . '/bundle.js', array(), true);
}
add_action('wp_enqueue_scripts', 'scripts', 20);

?>
