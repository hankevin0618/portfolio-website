<?php

function portfolio_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'portfolio_menu' ); //menu

add_theme_support( 'post-thumbnails' ); 



/**
 * Register our sidebars and widgetized areas.
 *
 */
function portfolio_widgets_init() {

	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'portfolio_widgets_init' );


function portfolio_my_scripts_method() {
	wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/main.js',array( 'jquery' ));
}
add_action( 'wp_enqueue_scripts', 'portfolio_my_scripts_method' );


?>