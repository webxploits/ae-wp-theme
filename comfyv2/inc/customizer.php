<?php

function comfy_customize_register( $wp_customize ) {

	// Logo
	$wp_customize->add_section( 'comfy_logo_section' , array(
		'title'       => __( 'Logo', 'comfy' ),
		'priority'    => 20,
		'description' => 'Upload a logo to replace the default logo',
	) );
	$wp_customize->add_setting( 'comfy_logo' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'comfy_logo', array(
		'label'    => __( 'Logo', 'comfy' ),
		'section'  => 'comfy_logo_section',
		'settings' => 'comfy_logo',
	) ) );


	// Homepage, Feature image
	$wp_customize->add_section( 'comfy_homefeature_section' , array(
		'title'       => __( 'Home feature image', 'citizensadvice' ),
		'priority'    => 30,
		'description' => 'Add homepage feature image',
	) );
	$wp_customize->add_setting( 'comfy_homefeature' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'comfy_homefeature', array(
		'label'    => __( 'Logo', 'citizensadvice' ),
		'section'  => 'comfy_homefeature_section',
		'settings' => 'comfy_homefeature',
	) ) );

}
add_action( 'customize_register', 'comfy_customize_register' );
