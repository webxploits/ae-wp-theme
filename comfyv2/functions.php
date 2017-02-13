<?php

if ( ! function_exists( 'comfy_setup' ) ) :
function citizensadvice_setup() {
	add_filter( 'login_errors', create_function( '$a', "return null;" )); // Security: hide login error messages

	add_theme_support( 'automatic-feed-links' ); // Add default posts and comments RSS feed links to head.
	add_theme_support( 'title-tag' ); // Let WordPress manage the document title.
	add_theme_support( 'post-thumbnails' ); // Enable support for Post Thumbnails on posts and pages.


	register_nav_menus( array(
		'primary_menu'   		=> __( 'Primary menu', 'comfy' ),
		'primary_menu_mobile'   => __( 'Mobile, Primary menu', 'comfy' )
	) );

	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'wp_generator' ); // Security: remove WordPress version number
}
endif;
add_action( 'after_setup_theme', 'comfy_setup' );


require get_template_directory() . '/inc/customizer.php';
