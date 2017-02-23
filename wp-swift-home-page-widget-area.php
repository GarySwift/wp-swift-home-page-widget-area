<?php
/*
Plugin Name:       WP Swift: Home Page Widget Area
Description:       Adds a new widget area
Version:           1.0.0
Author:            Gary Swift
License:           GPL-2.0+
Text Domain:       wp-swift-home-page-widget-area
*/
// Register Widgets
function wp_swift_home_page_widget_area() {

	$args = array(
		'id'            => 'home-page-widget',
		'name'          => __( 'Home Page Widgets', 'wp-swift-home-page-widget-area' ),
		'description'   => __( 'A widget area for the homepage', 'wp-swift-home-page-widget-area' ),
		'before_title'  => '<h3 class="Home Page">',
		'after_title'   => '</h3>',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'wp_swift_home_page_widget_area' );