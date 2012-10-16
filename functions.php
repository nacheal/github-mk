<?php 
// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
	'primary' => __( 'Primary Navigation', 'Vbecomputing' ),
	'second' => __( 'Second Navigation', 'Vbecomputing' ),
) );

//add theme support feature thumb
add_theme_support( 'post-thumbnails' );

?>