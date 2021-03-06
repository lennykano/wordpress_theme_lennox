<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

if( is_admin() ) {

	/*********************************** PAGE OPTIONS STARTS ******************************************/
	$image_path    = get_template_directory_uri() . '/cyberchimps/lib/images/';
	$themenamefull = apply_filters( 'cyberchimps_current_theme_name', 'CyberChimps' );
	$pagedocs      = apply_filters( 'cyberchimps_page_options_help', 'http://cyberchimps.com/guide/how-to-use-the-page-or-post-page-element/' );

	$fields = array( array(
		'type'    => 'image_select',
		'id'      => 'cyberchimps_page_sidebar',
		'class'   => '',
		'name'    => __( 'Select Page Layout', 'cyberchimps_core' ),
		'options' => apply_filters( 'sidebar_layout_options', array(
			'full_width'    => $image_path . '1col.png',
			'right_sidebar' => $image_path . '2cr.png'
		) ),
		'std'     => 'right_sidebar'
	),
		array(
			'type'  => 'checkbox',
			'id'    => 'cyberchimps_page_title_toggle',
			'class' => 'checkbox',
			'name'  => __( 'Page Title', 'cyberchimps_core' ),
			'std'   => 1
		),
		array(
			'type'    => 'section_order',
			'id'      => 'cyberchimps_page_section_order',
			'class'   => '',
			'name'    => __( 'Page Elements', 'cyberchimps_core' ),
			'options' => apply_filters( 'cyberchimps_elements_draganddrop_page_options', array(
				'boxes'              => __( 'Boxes', 'cyberchimps_core' ),
				'page_section'       => __( 'Page', 'cyberchimps_core' ),
				'twitterbar_section' => __( 'Twitter Bar', 'cyberchimps_core' )
			) ),
			'std'     => array( 'page_section' )
		),
		array(
			'type'      => 'help',
			'id'        => 'cyberchimps_page_help',
			'class'     => 'help-message',
			'name'      => __( 'Need Help?', 'cyberchimps_core' ),
			'help_text' => '<a href="' . $pagedocs . '" target="_blank">' . sprintf( __( 'Visit the %s page options guide', 'cyberchimps_core' ), $themenamefull ) . '</a></td>'
		)
	);
	/*
	 * configure your meta box
	 */
	$config = array(
		'id'             => 'cyberchimps_page_options', // meta box id, unique per meta box
		'title'          => __( 'Page Options', 'cyberchimps_core' ), // meta box title
		'pages'          => array( 'page' ), // post types, accept custom post types as well, default is array('post'); optional
		'context'        => 'normal', // where the meta box appear: normal (default), advanced, side; optional
		'priority'       => 'high', // order of meta box: high (default), low; optional
		'fields'         => $fields, // list of meta fields (can be added by field arrays)
		'local_images'   => false, // Use local or hosted images (meta box images for add/remove)
		'use_with_theme' => true //change path if used with theme set to true, false for a plugin or anything else for a custom path(default false).
	);

	/*
	 * Initiate your meta box
	 */
	$my_meta = new Cyberchimps_Meta_Box( $config );
	/************************************ PAGE OPTIONS ENDS ***************************************/
}