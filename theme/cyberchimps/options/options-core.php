<?php

function cyberchimps_add_core_headings( $headings_list ) {

	$headings_list = array();

	$headings_list[] = array(
		'id'    => 'cyberchimps_help_heading',
		'title' => __( 'Help', 'cyberchimps_core' ),
	);

	$headings_list[] = array(
		'id'    => 'cyberchimps_design_heading',
		'title' => __( 'Design', 'cyberchimps_core' ),
	);

	$headings_list[] = array(
		'id'    => 'cyberchimps_header_heading',
		'title' => __( 'Header', 'cyberchimps_core' ),
	);

	$headings_list[] = array(
		'id'    => 'cyberchimps_blog_heading',
		'title' => __( 'Blog', 'cyberchimps_core' ),
	);

	$headings_list[] = array(
		'id'    => 'cyberchimps_templates_heading',
		'title' => __( 'Templates', 'cyberchimps_core' ),
	);

	$headings_list[] = array(
		'id'    => 'cyberchimps_footer_heading',
		'title' => __( 'Footer', 'cyberchimps_core' ),
	);

	return apply_filters( 'cyberchimps_headings_filter', $headings_list );
}

add_filter( 'cyberchimps_heading_list', 'cyberchimps_add_core_headings' );

/**************************************************************************************/
/*************************** SUBSECTIONS **********************************************/
/**************************************************************************************/
function cyberchimps_add_core_sections( $sections_list ) {

	//theme check
	$theme_check = cyberchimps_theme_check();

	$sections_list = array();

	/*************************** WELCOME **************************************************/

	$sections_list[] = array(
		'id'      => 'cyberchimps_help_section',
		'label'   => apply_filters( 'cyberchimps_help_heading', 'CyberChimps' ),
		'heading' => 'cyberchimps_help_heading'
	);

	/**************************** DESIGN **************************************************/

	$sections_list[] = array(
		'id'      => 'cyberchimps_custom_layout_section',
		'label'   => __( 'Layout Options', 'cyberchimps_core' ),
		'heading' => 'cyberchimps_design_heading'
	);

	/** COMMENTED OUT - Using WP background customization
	 * $sections_list[] = array(
	 * 'id' => 'cyberchimps_custom_background_section',
	 * 'label' => __('Background Options', 'cyberchimps_core' ),
	 * 'heading' => 'cyberchimps_design_heading'
	 * );
	 */

	$sections_list[] = array(
		'id'      => 'cyberchimps_custom_colors_section',
		'label'   => __( 'Custom Colors', 'cyberchimps_core' ),
		'heading' => 'cyberchimps_design_heading'
	);

	$sections_list[] = array(
		'id'      => 'cyberchimps_typography_section',
		'label'   => __( 'Typography', 'cyberchimps_core' ),
		'heading' => 'cyberchimps_design_heading'
	);

	/*$sections_list[] = array(
		'id' => 'cyberchimps_custom_css_section',
		'label' => __('Custom CSS', 'cyberchimps_core' ),
		'heading' => 'cyberchimps_design_heading'
	);
	
/**************************** HEADER **************************************************/

	$sections_list[] = array(
		'id'      => 'cyberchimps_header_drag_drop_section',
		'label'   => __( 'Header Drag &#38; Drop', 'cyberchimps_core' ),
		'heading' => 'cyberchimps_header_heading'
	);

	$sections_list[] = array(
		'id'      => 'cyberchimps_header_options_section',
		'label'   => __( 'Header Options', 'cyberchimps_core' ),
		'heading' => 'cyberchimps_header_heading'
	);

	$sections_list[] = array(
		'id'      => 'cyberchimps_header_social_section',
		'label'   => __( 'Social Icons', 'cyberchimps_core' ),
		'heading' => 'cyberchimps_header_heading'
	);

	/***************************** BLOG **************************************************/

	$sections_list[] = array(
		'id'      => 'cyberchimps_drag_and_drop_section',
		'label'   => __( 'Drag & Drop', 'cyberchimps_core' ),
		'heading' => 'cyberchimps_blog_heading'
	);

	$sections_list[] = array(
		'id'      => 'cyberchimps_blog_options_section',
		'label'   => __( 'Blog Options', 'cyberchimps_core' ),
		'heading' => 'cyberchimps_blog_heading'
	);

//check if free theme	
	if ( $theme_check == 'free' ):
		$sections_list[] = array(
			'id'      => 'cyberchimps_blog_boxes_lite_section',
			'label'   => __( 'Boxes Lite', 'cyberchimps_core' ),
			'heading' => 'cyberchimps_blog_heading'
		);

	endif;

//check if pro theme
	if ( $theme_check == 'pro' ):
		$sections_list[] = array(
			'id'      => 'cyberchimps_callout_section',
			'label'   => __( 'Callout Options', 'cyberchimps_core' ),
			'heading' => 'cyberchimps_blog_heading'
		);

		$sections_list[] = array(
			'id'      => 'cyberchimps_html_box_section',
			'label'   => __( 'HTML Box Options', 'cyberchimps_core' ),
			'heading' => 'cyberchimps_blog_heading'
		);

		$sections_list[] = array(
			'id'      => 'cyberchimps_recent_posts_section',
			'label'   => __( 'Recent Posts Options', 'cyberchimps_core' ),
			'heading' => 'cyberchimps_blog_heading'
		);
	endif;

	$sections_list[] = array(
		'id'      => 'cyberchimps_boxes_section',
		'label'   => __( 'Boxes Options', 'cyberchimps_core' ),
		'heading' => 'cyberchimps_blog_heading'
	);

	/*$sections_list[] = array(
		'id' => 'cyberchimps_featured_posts_section',
		'label' => __('Featured Posts Options', 'cyberchimps_core' ),
		'heading' => 'cyberchimps_blog_heading'
	);*/

	/*$sections_list[] = array(
		'id'		=> 'cyberchimps_profile_section',
		'label'		=> __('Profile Options', 'cyberchimps_core' ),
		'heading'	=> 'cyberchimps_blog_heading'
	);*/

	/*************************** TEMPLATE ************************************************/

	$sections_list[] = array(
		'id'      => 'cyberchimps_single_post_section',
		'label'   => __( 'Single Post', 'cyberchimps_core' ),
		'heading' => 'cyberchimps_templates_heading'
	);

	$sections_list[] = array(
		'id'      => 'cyberchimps_archive_section',
		'label'   => __( 'Archive', 'cyberchimps_core' ),
		'heading' => 'cyberchimps_templates_heading'
	);

	$sections_list[] = array(
		'id'      => 'cyberchimps_search_section',
		'label'   => __( 'Search', 'cyberchimps_core' ),
		'heading' => 'cyberchimps_templates_heading'
	);

	$sections_list[] = array(
		'id'      => 'cyberchimps_error_section',
		'label'   => '404',
		'heading' => 'cyberchimps_templates_heading'
	);

	/**************************** FOOTER **************************************************/

	$sections_list[] = array(
		'id'      => 'cyberchimps_footer_section',
		'label'   => __( 'Footer Options', 'cyberchimps_core' ),
		'heading' => 'cyberchimps_footer_heading'
	);

	return apply_filters( 'cyberchimps_sections_filter', $sections_list );
}

add_filter( 'cyberchimps_section_list', 'cyberchimps_add_core_sections' );

/**************************************************************************************/
/**************************** FIELDS **************************************************/
/**************************************************************************************/

function cyberchimps_add_core_fields( $fields_list ) {

	//theme check
	$theme_check = cyberchimps_theme_check();

	// Set directory uri
	$directory_uri = get_template_directory_uri();

	/*************************** LISTS AND DEFAULTS *********************************************/

	// post byline 
	$pbe_defaults = array(
		'author'     => 1,
		'categories' => 1,
		'date'       => 1,
		'comments'   => 1,
		'tags'       => 1
	);
	$pbe_array    = array(
		'author'     => __( 'Author', 'cyberchimps_core' ),
		'categories' => __( 'Categories', 'cyberchimps_core' ),
		'date'       => __( 'Date', 'cyberchimps_core' ),
		'comments'   => __( 'Comments', 'cyberchimps_core' ),
		'tags'       => __( 'Tags', 'cyberchimps_core' )
	);

	// Pull all the categories into an array
	$options_categories     = array();
	$options_categories_obj = get_categories();
	foreach ( $options_categories_obj as $category ) {
		$options_categories['all']             = 'All';
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Get custom categories of boxes element
	$options_boxes_cats = array();
	$boxes_terms        = get_terms( 'boxes_categories', 'hide_empty=0' );
	if ( !is_wp_error( $boxes_terms ) ):
		foreach ( $boxes_terms as $term ) {
			$options_boxes_cats[$term->slug] = $term->name;
		}
	endif;

	// Get all post categories
	$all_cats       = array();
	$all_categories = get_terms( 'category' );
	if ( !is_wp_error( $all_categories ) ) {
		foreach ( $all_categories as $all_cat ) {
			$all_cats[$all_cat->term_id] = $all_cat->name;
		}
	}

	// Pull all tags into an array
	$options_tags     = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}

	// Pull all the pages into an array
	$options_pages     = array();
	$options_pages_obj = get_pages( 'sort_column=post_parent,menu_order' );
	$options_pages[''] = 'Select a page:';
	foreach ( $options_pages_obj as $page ) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath = $directory_uri . '/cyberchimps/lib/images/';

	$fields_list = array();

	// Typography Defaults
	$typography_defaults = apply_filters( 'cyberchimps_typography_defaults', array(
		'size'  => '14px',
		'face'  => 'Arial, Helvetica, sans-serif',
		'style' => 'normal',
		'color' => '#333333'
	) );

	// Heading Typography Defaults
	$typography_heading_defaults = apply_filters( 'cyberchimps_typography_heading_defaults', array(
		'size'  => '',
		'face'  => 'Arial, Helvetica, sans-serif',
		'style' => '',
		'color' => ''
	) );

	/*************************** HELP *****************************************************/

	$fields_list[] = array(
		'name'    => apply_filters( 'cyberchimps_help_sub_heading', __( 'CyberChimps Help', 'cyberchimps_core' ) ),
		'id'      => 'help_info_display',
		'type'    => 'welcome',
		'section' => 'cyberchimps_help_section',
		'heading' => 'cyberchimps_help_heading'
	);

	/*************************** DESIGN ***************************************************/

	/* LAYOUT OPTIONS */
	$fields_list[] = array(
		'name'    => __( 'Responsive Design', 'cyberchimps_core' ),
		'id'      => 'responsive_design',
		'type'    => 'toggle',
		'std'     => 'checked',
		'section' => 'cyberchimps_custom_layout_section',
		'heading' => 'cyberchimps_design_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Responsive Videos', 'cyberchimps_core' ),
		'id'      => 'responsive_videos',
		'type'    => 'toggle',
		'section' => 'cyberchimps_custom_layout_section',
		'heading' => 'cyberchimps_design_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Gallery Lightbox', 'cyberchimps_core' ),
		'id'      => 'gallery_lightbox',
		'type'    => 'toggle',
		'std'     => 'checked',
		'section' => 'cyberchimps_custom_layout_section',
		'heading' => 'cyberchimps_design_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Wide Sidebar', 'cyberchimps_core' ),
		'id'      => 'wide_sidebar',
		'type'    => 'toggle',
		'std'     => 0,
		'desc'    => __( 'Only works on layouts with 1 sidebar', 'cyberchimps_core' ),
		'section' => 'cyberchimps_custom_layout_section',
		'heading' => 'cyberchimps_design_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Max Width', 'cyberchimps_core' ),
		'id'      => 'max_width',
		'class'   => '',
		'std'     => 1020,
		'desc'    => __( 'enter the width of your site in pixels', 'cyberchimps_core' ),
		'type'    => 'text',
		'section' => 'cyberchimps_custom_layout_section',
		'heading' => 'cyberchimps_design_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Text Color', 'cyberchimps_core' ),
		'desc'    => __( 'Select text color', 'cyberchimps_core' ),
		'id'      => 'text_colorpicker',
		'std'     => '',
		'type'    => 'color',
		'section' => 'cyberchimps_custom_colors_section',
		'heading' => 'cyberchimps_design_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Link Color', 'cyberchimps_core' ),
		'desc'    => __( 'Select link color', 'cyberchimps_core' ),
		'id'      => 'link_colorpicker',
		'std'     => '',
		'type'    => 'color',
		'section' => 'cyberchimps_custom_colors_section',
		'heading' => 'cyberchimps_design_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Link Hover Color', 'cyberchimps_core' ),
		'desc'    => __( 'Select link hover color', 'cyberchimps_core' ),
		'id'      => 'link_hover_colorpicker',
		'std'     => '',
		'type'    => 'color',
		'section' => 'cyberchimps_custom_colors_section',
		'heading' => 'cyberchimps_design_heading'
	);

	/* Typography Options */
	/* Default font faces */
	$faces                      = array(
		'Arial, Helvetica, sans-serif'                     => 'Arial',
		'Arial Black, Gadget, sans-serif'                  => 'Arial Black',
		'Comic Sans MS, cursive'                           => 'Comic Sans MS',
		'Courier New, monospace'                           => 'Courier New',
		'Georgia, serif'                                   => 'Georgia',
		'"Helvetica Neue Light", "Helvetica Neue",
		Helvetica, Arial, "Lucida Grande", sans-serif'     => 'Helvetica Neue',
		'Impact, Charcoal, sans-serif'                     => 'Impact',
		'Lucida Console, Monaco, monospace'                => 'Lucida Console',
		'Lucida Sans Unicode, Lucida Grande, sans-serif'   => 'Lucida Sans Unicode',
		'"Open Sans", sans-serif'                          => 'Open Sans',
		'Palatino Linotype, Book Antiqua, Palatino, serif' => 'Palatino Linotype',
		'Tahoma, Geneva, sans-serif'                       => 'Tahoma',
		'Times New Roman, Times, serif'                    => 'Times New Roman',
		'Trebuchet MS, sans-serif'                         => 'Trebuchet MS',
		'Verdana, Geneva, sans-serif'                      => 'Verdana',
		'Symbol'                                           => 'Symbol',
		'Webdings'                                         => 'Webdings',
		'Wingdings, Zapf Dingbats'                         => 'Wingdings',
		'MS Sans Serif, Geneva, sans-serif'                => 'MS Sans Serif',
		'MS Serif, New York, serif'                        => 'MS Serif',
		'Google Fonts'                                     => 'Google Fonts'
	);
	$typography_options         = array(
		'sizes'  => apply_filters( 'cyberchimps_typography_sizes', array( '8', '10', '12', '14', '16', '20' ) ),
		'faces'  => apply_filters( 'cyberchimps_typography_faces', $faces ),
		'styles' => apply_filters( 'cyberchimps_typography_styles', array( 'normal' => 'Normal', 'bold' => 'Bold' ) ),
		'color'  => false
	);
	$typography_heading_options = array(
		'sizes'  => false,
		'faces'  => apply_filters( 'cyberchimps_typography_faces', $faces ),
		'styles' => false,
		'color'  => false
	);

	/* Typography Section */
	$fields_list[] = array(
		'id'      => 'typography_options',
		'name'    => __( 'Typography Options', 'cyberchimps_core' ),
		'type'    => 'typography',
		'std'     => $typography_defaults,
		'options' => $typography_options,
		'section' => 'cyberchimps_typography_section',
		'heading' => 'cyberchimps_design_heading'
	);

	// Entry field for google font
	$fields_list[] = array(
		'name'    => __( 'Enter Google font', 'cyberchimps_core' ),
		'id'      => 'google_font_field',
		'type'    => 'text',
		'desc'    => __( 'Google font names are case sensitive', 'cyberchimps_core' ),
		'section' => 'cyberchimps_typography_section',
		'heading' => 'cyberchimps_design_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Demo Text', 'cyberchimps_core' ),
		'id'      => 'font_demo_text',
		'type'    => 'info',
		'desc'    => 'The quick CyberChimp jumps over the lazy dog',
		'section' => 'cyberchimps_typography_section',
		'heading' => 'cyberchimps_design_heading'
	);

	// Font Family for headings.
	$fields_list[] = array(
		'name'    => __( 'Font Family for headings', 'cyberchimps_core' ),
		'id'      => 'font_family_headings',
		'type'    => 'typography',
		'std'     => $typography_heading_defaults,
		'options' => $typography_heading_options,
		'section' => 'cyberchimps_typography_section',
		'heading' => 'cyberchimps_design_heading'
	);

	// Google Font for headings.
	$fields_list[] = array(
		'name'    => __( 'Google font for headings', 'cyberchimps_core' ),
		'id'      => 'google_font_headings',
		'type'    => 'text',
		'desc'    => __( 'Google font names are case sensitive', 'cyberchimps_core' ),
		'section' => 'cyberchimps_typography_section',
		'heading' => 'cyberchimps_design_heading'
	);

	/*************************** HEADER STARTS ***************************************************/

	$fields_list[] = array(
		'id'       => 'header_section_order',
		'name'     => __( 'Header Drag/Drop', 'cyberchimps_core' ),
		'callback' => 'cyberchimps_drag_drop_field',
		'std'      => apply_filters( 'header_drag_and_drop_default', array(
			'cyberchimps_header_content' => __( 'Logo + Icons', 'cyberchimps_core' )
		) ),
		'type'     => 'section_order',
		'options'  => apply_filters( 'header_drag_and_drop_options', array(
			'cyberchimps_header_content' => __( 'Logo + Icons', 'cyberchimps_core' ),
			'cyberchimps_logo_search'    => __( 'Logo + Search', 'cyberchimps_core' ),
			'cyberchimps_logo'           => __( 'Logo', 'cyberchimps_core' )
		) ),
		'section'  => 'cyberchimps_header_drag_drop_section',
		'heading'  => 'cyberchimps_header_heading'
	);

	/********** HEADER OPTIONS STARTS ************/

	$fields_list[] = array(
		'name'    => __( 'Custom Logo URL', 'cyberchimps_core' ),
		'id'      => 'custom_logo_url',
		'type'    => 'toggle',
		'section' => 'cyberchimps_header_options_section',
		'heading' => 'cyberchimps_header_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'URL', 'cyberchimps_core' ),
		'desc'    => __( 'Enter URL', 'cyberchimps_core' ),
		'id'      => 'custom_logo_url_link',
		'class'   => 'custom_logo_url_toggle',
		'type'    => 'text',
		'std'     => home_url(),
		'section' => 'cyberchimps_header_options_section',
		'heading' => 'cyberchimps_header_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Custom Logo', 'cyberchimps_core' ),
		'id'      => 'custom_logo',
		'type'    => 'toggle',
		'std'     => apply_filters( 'cyberchimps_logo_toggle', 0 ),
		'section' => 'cyberchimps_header_options_section',
		'heading' => 'cyberchimps_header_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Logo Image', 'cyberchimps_core' ),
		'desc'    => __( 'Enter URL or upload file', 'cyberchimps_core' ),
		'id'      => 'custom_logo_uploader',
		'class'   => 'custom_logo_toggle',
		'type'    => 'upload',
		'std'     => apply_filters( 'cyberchimps_default_logo', $directory_uri . '/cyberchimps/lib/images/achimps.png' ),
		'section' => 'cyberchimps_header_options_section',
		'heading' => 'cyberchimps_header_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Custom Favicon', 'cyberchimps_core' ),
		'id'      => 'custom_favicon',
		'type'    => 'toggle',
		'section' => 'cyberchimps_header_options_section',
		'heading' => 'cyberchimps_header_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Favicon URL', 'cyberchimps_core' ),
		'desc'    => __( 'Enter URL or upload file', 'cyberchimps_core' ),
		'id'      => 'favicon_uploader',
		'class'   => 'custom_favicon_toggle',
		'type'    => 'upload',
		'section' => 'cyberchimps_header_options_section',
		'heading' => 'cyberchimps_header_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Custom Apple touch icon', 'cyberchimps_core' ),
		'id'      => 'custom_apple',
		'type'    => 'toggle',
		'section' => 'cyberchimps_header_options_section',
		'heading' => 'cyberchimps_header_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Apple Touch URL', 'cyberchimps_core' ),
		'desc'    => __( 'Enter URL or upload file', 'cyberchimps_core' ),
		'id'      => 'apple_touch_uploader',
		'class'   => 'custom_apple_toggle',
		'type'    => 'upload',
		'section' => 'cyberchimps_header_options_section',
		'heading' => 'cyberchimps_header_heading'
	);

	// Add Google Analytics only to pro themes. In free themes it will be added by plugin as per WP standards.
	if ( $theme_check == 'pro' ) {
		$fields_list[] = array(
			'id'      => 'google_analytics',
			'name'    => __( 'Google Analytics', 'cyberchimps_core' ),
			'type'    => 'textarea',
			'desc'    => __( 'Copy and paste your Google Analytics code here', 'cyberchimps_core' ),
			'section' => 'cyberchimps_header_options_section',
			'heading' => 'cyberchimps_header_heading'
		);
	}

	// Search bar toggle
	$fields_list[] = array(
		'name'    => __( 'Searchbar', 'cyberchimps_core' ),
		'id'      => 'searchbar',
		'type'    => 'toggle',
		'std'     => apply_filters( 'searchbar_default', '' ),
		'section' => 'cyberchimps_header_options_section',
		'heading' => 'cyberchimps_header_heading'
	);

	// Option to enter scripts into header.
	if ( $theme_check == 'pro' ) {
		$fields_list[] = array(
			'id'      => 'header_scripts',
			'name'    => __( 'Header Scripts', 'cyberchimps_core' ),
			'type'    => 'unfiltered_textarea',
			'desc'    => __( 'Please add script tags', 'cyberchimps_core' ),
			'section' => 'cyberchimps_header_options_section',
			'heading' => 'cyberchimps_header_heading'
		);
	}
	/********** HEADER OPTIONS ENDS ************/

	/********** SOCIAL STARTS ************/
	$fields_list[] = array(
		'name'    => __( 'Choose your icon style', 'cyberchimps_core' ),
		'id'      => 'theme_backgrounds',
		'std'     => apply_filters( 'cyberchimps_social_icon_default', 'default' ),
		'type'    => 'images',
		'options' => apply_filters( 'cyberchimps_social_icon_options', array(
			'default' => $imagepath . 'social/thumbs/icons-default.png',
			'legacy'  => $imagepath . 'social/thumbs/icons-classic.png',
			'round'   => $imagepath . 'social/thumbs/icons-round.png'
		) ),
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);

	// Facebook
	$fields_list[] = array(
		'name'    => __( 'Facebook', 'cyberchimps_core' ),
		'id'      => 'social_facebook',
		'std'     => 'checked',
		'type'    => 'toggle',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Facebook URL', 'cyberchimps_core' ),
		'id'      => 'facebook_url',
		'class'   => 'social_facebook_toggle',
		'std'     => 'http://www.facebook.com/',
		'type'    => 'text',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);

	// Twitter
	$fields_list[] = array(
		'name'    => __( 'Twitter', 'cyberchimps_core' ),
		'id'      => 'social_twitter',
		'std'     => 'checked',
		'type'    => 'toggle',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Twitter URL', 'cyberchimps_core' ),
		'id'      => 'twitter_url',
		'class'   => 'social_twitter_toggle',
		'std'     => 'http://www.twitter.com/',
		'type'    => 'text',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);

	// Google+
	$fields_list[] = array(
		'name'    => __( 'Google+', 'cyberchimps_core' ),
		'id'      => 'social_google',
		'std'     => 'checked',
		'type'    => 'toggle',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Google+ URL', 'cyberchimps_core' ),
		'id'      => 'google_url',
		'class'   => 'social_google_toggle',
		'std'     => 'http://www.google.com/',
		'type'    => 'text',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);

	// LinkedIn
	$fields_list[] = array(
		'name'    => __( 'LinkedIn', 'cyberchimps_core' ),
		'id'      => 'social_linkedin',
		'type'    => 'toggle',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'LinkedIn URL', 'cyberchimps_core' ),
		'id'      => 'linkedin_url',
		'class'   => 'social_linkedin_toggle',
		'std'     => 'http://www.linkedin.com/',
		'type'    => 'text',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);

	// YouTube
	$fields_list[] = array(
		'name'    => __( 'YouTube', 'cyberchimps_core' ),
		'id'      => 'social_youtube',
		'type'    => 'toggle',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'YouTube URL', 'cyberchimps_core' ),
		'id'      => 'youtube_url',
		'class'   => 'social_youtube_toggle',
		'std'     => 'http://www.youtube.com/',
		'type'    => 'text',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);

	// Github
	$fields_list[] = array(
		'name'    => __( 'Github', 'cyberchimps_core' ),
		'id'      => 'social_github',
		'std'     => 'checked',
		'type'    => 'toggle',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Github URL', 'cyberchimps_core' ),
		'id'      => 'github_url',
		'class'   => 'social_github_toggle',
		'std'     => 'http://github.com/',
		'type'    => 'text',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);

	// Bitbucket
	$fields_list[] = array(
		'name'    => __( 'Bitbucket', 'cyberchimps_core' ),
		'id'      => 'social_bitbucket',
		'std'     => 'checked',
		'type'    => 'toggle',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Bitbucket URL', 'cyberchimps_core' ),
		'id'      => 'bitbucket_url',
		'class'   => 'social_bitbucket_toggle',
		'std'     => 'http://bitbucket.org/',
		'type'    => 'text',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);

	// Flickr
	$fields_list[] = array(
		'name'    => __( 'Flickr', 'cyberchimps_core' ),
		'id'      => 'social_flickr',
		'type'    => 'toggle',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Flickr URL', 'cyberchimps_core' ),
		'id'      => 'flickr_url',
		'class'   => 'social_flickr_toggle',
		'std'     => 'http://www.flickr.com/',
		'type'    => 'text',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);

	// Pinterest
	$fields_list[] = array(
		'name'    => __( 'Pinterest', 'cyberchimps_core' ),
		'id'      => 'social_pinterest',
		'type'    => 'toggle',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Pinterest URL', 'cyberchimps_core' ),
		'id'      => 'pinterest_url',
		'class'   => 'social_pinterest_toggle',
		'std'     => 'http://www.pinterest.com/',
		'type'    => 'text',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);

	// Google Maps
	$fields_list[] = array(
		'name'    => __( 'Google Maps', 'cyberchimps_core' ),
		'id'      => 'social_googlemaps',
		'type'    => 'toggle',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Google Maps URL', 'cyberchimps_core' ),
		'id'      => 'googlemaps_url',
		'class'   => 'social_googlemaps_toggle',
		'std'     => 'http://www.maps.google.com/',
		'type'    => 'text',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);

	// Email
	$fields_list[] = array(
		'name'    => __( 'Email', 'cyberchimps_core' ),
		'id'      => 'social_email',
		'type'    => 'toggle',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Email Address', 'cyberchimps_core' ),
		'id'      => 'email_url',
		'class'   => 'social_email_toggle',
		'type'    => 'text',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);

	// RSS
	$fields_list[] = array(
		'name'    => __( 'RSS', 'cyberchimps_core' ),
		'id'      => 'social_rss',
		'type'    => 'toggle',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'RSS URL', 'cyberchimps_core' ),
		'id'      => 'rss_url',
		'class'   => 'social_rss_toggle',
		'std'     => get_bloginfo_rss( 'rss_url' ),
		'type'    => 'text',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);
	
	// Instagram
	$fields_list[] = array(
		'name'    => __( 'Instagram', 'cyberchimps_core' ),
		'id'      => 'social_instagram',
		'type'    => 'toggle',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Instagram URL', 'cyberchimps_core' ),
		'id'      => 'instagram_url',
		'class'   => 'social_instagram_toggle',
		'std'     => 'http://instagram.com/',
		'type'    => 'text',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);
	/********** SOCIAL ENDS ************/

	/*************************** HEADER ENDS ***************************************************/

	/*************************** BLOG STARTS ***************************************************/

	$fields_list[] = array(
		'id'       => 'blog_section_order',
		'name'     => __( 'Drag & Drop Blog Elements', 'cyberchimps_core' ),
		'callback' => 'cyberchimps_drag_drop_field',
		'std'      => apply_filters( 'cyberchimps_elements_draganddrop_defaults', array(
			'boxes_lite'     => __( 'Boxes', 'cyberchimps_core' ),
			'blog_post_page' => __( 'Post Page', 'cyberchimps_core' )
		) ),
		'type'     => 'section_order',
		'options'  => apply_filters( 'cyberchimps_elements_draganddrop_options', array(
			'boxes_lite'         => __( 'Boxes', 'cyberchimps_core' ),
			'blog_post_page'     => __( 'Post Page', 'cyberchimps_core' )
		) ),
		'section'  => 'cyberchimps_drag_and_drop_section',
		'heading'  => 'cyberchimps_blog_heading'
	);

	/********* BLOG OPTIONS STARTS ***********/
	$fields_list[] = array(
		'name'    => __( 'Select Page Layout', 'cyberchimps_core' ),
		'id'      => 'sidebar_images',
		'std'     => apply_filters( 'cyberchimps_blog_layout_options_default', 'right_sidebar' ),
		'type'    => 'images',
		'options' => apply_filters( 'sidebar_layout_options', array(
			'full_width'    => $imagepath . '1col.png',
			'right_sidebar' => $imagepath . '2cr.png'
		) ),
		'section' => 'cyberchimps_blog_options_section',
		'heading' => 'cyberchimps_blog_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Blog Title', 'cyberchimps_core' ),
		'id'      => 'blog_title',
		'type'    => 'toggle',
		'std'     => 0,
		'section' => 'cyberchimps_blog_options_section',
		'heading' => 'cyberchimps_blog_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Blog Title Text', 'cyberchimps_core' ),
		'id'      => 'blog_title_text',
		'class'   => 'blog_title_toggle',
		'type'    => 'text',
		'std'     => 'Our Blog',
		'section' => 'cyberchimps_blog_options_section',
		'heading' => 'cyberchimps_blog_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Post Formats Icons', 'cyberchimps_core' ),
		'id'      => 'post_format_icons',
		'type'    => 'toggle',
		'std'     => apply_filters( 'cyberchimps_post_format_icons_default', 0 ),
		'section' => 'cyberchimps_blog_options_section',
		'heading' => 'cyberchimps_blog_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Post Excerpts', 'cyberchimps_core' ),
		'id'      => 'post_excerpts',
		'type'    => 'toggle',
		'std'     => 0,
		'section' => 'cyberchimps_blog_options_section',
		'heading' => 'cyberchimps_blog_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Read More Text', 'cyberchimps_core' ),
		'id'      => 'blog_read_more_text',
		'class'   => 'post_excerpts_toggle',
		'type'    => 'text',
		'std'     => __( 'Read More...', 'cyberchimps_core' ),
		'section' => 'cyberchimps_blog_options_section',
		'heading' => 'cyberchimps_blog_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Excerpt Length', 'cyberchimps_core' ),
		'id'      => 'blog_excerpt_length',
		'class'   => 'post_excerpts_toggle',
		'type'    => 'text',
		'std'     => 55,
		'section' => 'cyberchimps_blog_options_section',
		'heading' => 'cyberchimps_blog_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Featured Images', 'cyberchimps_core' ),
		'id'      => 'post_featured_images',
		'std'     => 'checked',
		'type'    => 'toggle',
		'section' => 'cyberchimps_blog_options_section',
		'heading' => 'cyberchimps_blog_heading'
	);

	/********* Post Byline Starts***********/
	// Author
	$fields_list[] = array(
		'name'    => __( 'Post Byline Author', 'cyberchimps_core' ),
		'id'      => 'post_byline_author',
		'std'     => 'checked',
		'type'    => 'toggle',
		'section' => 'cyberchimps_blog_options_section',
		'heading' => 'cyberchimps_blog_heading'
	);

	// Categories
	$fields_list[] = array(
		'name'    => __( 'Post Byline Categories', 'cyberchimps_core' ),
		'id'      => 'post_byline_categories',
		'std'     => 'checked',
		'type'    => 'toggle',
		'section' => 'cyberchimps_blog_options_section',
		'heading' => 'cyberchimps_blog_heading'
	);

	// Date
	$fields_list[] = array(
		'name'    => __( 'Post Byline Date', 'cyberchimps_core' ),
		'id'      => 'post_byline_date',
		'std'     => 'checked',
		'type'    => 'toggle',
		'section' => 'cyberchimps_blog_options_section',
		'heading' => 'cyberchimps_blog_heading'
	);

	// Comments
	$fields_list[] = array(
		'name'    => __( 'Post Byline Comments', 'cyberchimps_core' ),
		'id'      => 'post_byline_comments',
		'std'     => 'checked',
		'type'    => 'toggle',
		'section' => 'cyberchimps_blog_options_section',
		'heading' => 'cyberchimps_blog_heading'
	);

	// Tags
	$fields_list[] = array(
		'name'    => __( 'Post Byline Tags', 'cyberchimps_core' ),
		'id'      => 'post_byline_tags',
		'std'     => 'checked',
		'type'    => 'toggle',
		'section' => 'cyberchimps_blog_options_section',
		'heading' => 'cyberchimps_blog_heading'
	);
	/********* Post Byline Ends ***********/
	/********* BLOG OPTIONS ENDS ***********/

	if ( $theme_check == 'free' ):

		/********* BOXES LITE STARTS ****************/
		$fields_list[] = array(
			'name'    => __( 'Boxes Upgrade', 'cyberchimps_core' ),
			'id'      => 'boxes_upgrade',
			'class'   => 'cyberchimps_pro_upgrade',
			'desc'    => sprintf( __( 'Boxes Lite limits you to a total of 3 boxes throughout your whole site. Upgrade to %1$s to be able to create as many boxes as you like. Categorize them and display each category on a different page.', 'cyberchimps_core' ),
			                      '<a href="' . apply_filters( 'cyberchimps_upgrade_link', 'http://cyberchimps.com' ) . '" title="' . apply_filters( 'cyberchimps_upgrade_pro_title', __( 'Pro', 'cyberchimps_core' ) ) . '">' . apply_filters( 'cyberchimps_upgrade_pro_title', __( 'Pro', 'cyberchimps_core' ) ) . '</a>'
			),
			'type'    => 'info',
			'section' => 'cyberchimps_blog_boxes_lite_section',
			'heading' => 'cyberchimps_blog_heading'
		);

		/* Options for box 1 starts */

		// Image uploader
		$fields_list[] = array(
			'name'    => __( 'First Box Image', 'cyberchimps_core' ),
			'desc'    => __( 'Enter URL or upload file', 'cyberchimps_core' ),
			'id'      => 'cyberchimps_blog_boxes_lite_image_one',
			'type'    => 'upload',
			'std'     => $directory_uri . apply_filters( 'cyberchimps_boxes_lite_img1', '/elements/lib/images/boxes/blueprint.png' ),
			'section' => 'cyberchimps_blog_boxes_lite_section',
			'heading' => 'cyberchimps_blog_heading'
		);

		// URL of Box link
		$fields_list[] = array(
			'name'    => __( 'Link URL', 'cyberchimps_core' ),
			'id'      => 'cyberchimps_blog_boxes_link_url_one',
			'std'     => apply_filters( 'cyberchimps_boxes_lite_url1', 'http://wordpress.org' ),
			'type'    => 'text',
			'section' => 'cyberchimps_blog_boxes_lite_section',
			'heading' => 'cyberchimps_blog_heading'
		);

		// Box text
		$fields_list[] = array(
			'name'    => __( 'First Box Text', 'cyberchimps_core' ),
			'id'      => 'cyberchimps_blog_boxes_lite_image_one_text',
			'type'    => 'textarea',
			'std'     => 'Alto ventos est coeptis utque fecit. Phoebe sine circumfuso arce. Tanto aliis. Matutinis cornua origo formaeque animal mundo. Chaos: fabricator. Natura mundo caesa addidit.
        Cuncta habendum meis omni ille formaeque emicuit septemque et. Lege fecit aethere porrexerat gentes horrifer formas.',
			'section' => 'cyberchimps_blog_boxes_lite_section',
			'heading' => 'cyberchimps_blog_heading'
		);

		/* Options for box 1 ends */
		/* Options for box 2 starts */

		// Image uploader
		$fields_list[] = array(
			'name'    => __( 'Second Box Image', 'cyberchimps_core' ),
			'desc'    => __( 'Enter URL or upload file', 'cyberchimps_core' ),
			'id'      => 'cyberchimps_blog_boxes_lite_image_two',
			'type'    => 'upload',
			'std'     => $directory_uri . apply_filters( 'cyberchimps_boxes_lite_img2', '/elements/lib/images/boxes/blueprint.png' ),
			'section' => 'cyberchimps_blog_boxes_lite_section',
			'heading' => 'cyberchimps_blog_heading'
		);

		// URL of Box link
		$fields_list[] = array(
			'name'    => __( 'Link URL', 'cyberchimps_core' ),
			'id'      => 'cyberchimps_blog_boxes_link_url_two',
			'std'     => apply_filters( 'cyberchimps_boxes_lite_url2', 'http://wordpress.org' ),
			'type'    => 'text',
			'section' => 'cyberchimps_blog_boxes_lite_section',
			'heading' => 'cyberchimps_blog_heading'
		);

		// Box text
		$fields_list[] = array(
			'name'    => __( 'Second Box Text', 'cyberchimps_core' ),
			'id'      => 'cyberchimps_blog_boxes_lite_image_two_text',
			'type'    => 'textarea',
			'std'     => 'Alto ventos est coeptis utque fecit. Phoebe sine circumfuso arce. Tanto aliis. Matutinis cornua origo formaeque animal mundo. Chaos: fabricator. Natura mundo caesa addidit.
        Cuncta habendum meis omni ille formaeque emicuit septemque et. Lege fecit aethere porrexerat gentes horrifer formas.',
			'section' => 'cyberchimps_blog_boxes_lite_section',
			'heading' => 'cyberchimps_blog_heading'
		);

		/* Options for box 2 ends */
		/* Options for box 3 starts */

		// Image uploader
		$fields_list[] = array(
			'name'    => __( 'Third Box Image', 'cyberchimps_core' ),
			'desc'    => __( 'Enter URL or upload file', 'cyberchimps_core' ),
			'id'      => 'cyberchimps_blog_boxes_lite_image_three',
			'type'    => 'upload',
			'std'     => $directory_uri . apply_filters( 'cyberchimps_boxes_lite_img3', '/elements/lib/images/boxes/docs.png' ),
			'section' => 'cyberchimps_blog_boxes_lite_section',
			'heading' => 'cyberchimps_blog_heading'
		);

		// URL of Box link
		$fields_list[] = array(
			'name'    => __( 'Link URL', 'cyberchimps_core' ),
			'id'      => 'cyberchimps_blog_boxes_link_url_three',
			'std'     => apply_filters( 'cyberchimps_boxes_lite_url3', 'http://wordpress.org' ),
			'type'    => 'text',
			'section' => 'cyberchimps_blog_boxes_lite_section',
			'heading' => 'cyberchimps_blog_heading'
		);

		// Box text
		$fields_list[] = array(
			'name'    => __( 'Third Box Text', 'cyberchimps_core' ),
			'id'      => 'cyberchimps_blog_boxes_lite_image_three_text',
			'type'    => 'textarea',
			'std'     => 'Alto ventos est coeptis utque fecit. Phoebe sine circumfuso arce. Tanto aliis. Matutinis cornua origo formaeque animal mundo. Chaos: fabricator. Natura mundo caesa addidit.
        Cuncta habendum meis omni ille formaeque emicuit septemque et. Lege fecit aethere porrexerat gentes horrifer formas.',
			'section' => 'cyberchimps_blog_boxes_lite_section',
			'heading' => 'cyberchimps_blog_heading'
		);

		/* Options for box 3 ends */

		/********* BOXES LITE ENDS ******************/

	endif;
	// end free theme check

//pro theme check
	if ( $theme_check == 'pro' ):

		/********* CALLOUT OPTIONS STARTS ***********/
		$fields_list[] = array(
			'name'    => __( 'Callout Title', 'cyberchimps_core' ),
			'id'      => 'callout_title',
			'std'     => sprintf( __( '%1$s\'s Call Out Element', 'cyberchimps_core' ), apply_filters( 'cyberchimps_current_theme_name', 'CyberChimps' ) ),
			'type'    => 'text',
			'section' => 'cyberchimps_callout_section',
			'heading' => 'cyberchimps_blog_heading'
		);

		$fields_list[] = array(
			'name'    => __( 'Callout Text', 'cyberchimps_core' ),
			'id'      => 'callout_text',
			'std'     => sprintf( __( 'Use %1$s\'s Call Out section on any page where you want to deliver an important message to your customer or client.', 'cyberchimps_core' ), apply_filters( 'cyberchimps_current_theme_name', 'CyberChimps' ) ),
			'type'    => 'editor',
			'section' => 'cyberchimps_callout_section',
			'heading' => 'cyberchimps_blog_heading'
		);

		$fields_list[] = array(
			'name'    => __( 'Callout Button', 'cyberchimps_core' ),
			'id'      => 'callout_button',
			'std'     => '',
			'type'    => 'toggle',
			'section' => 'cyberchimps_callout_section',
			'heading' => 'cyberchimps_blog_heading'
		);

		$fields_list[] = array(
			'name'    => __( 'Callout Button Text', 'cyberchimps_core' ),
			'id'      => 'callout_button_text',
			'class'   => 'callout_button_toggle',
			'std'     => __( 'Click Here', 'cyberchimps_core' ),
			'type'    => 'text',
			'section' => 'cyberchimps_callout_section',
			'heading' => 'cyberchimps_blog_heading'
		);

		$fields_list[] = array(
			'name'    => __( 'Callout Button URL', 'cyberchimps_core' ),
			'id'      => 'callout_button_url',
			'class'   => 'callout_button_toggle',
			'std'     => '',
			'type'    => 'text',
			'section' => 'cyberchimps_callout_section',
			'heading' => 'cyberchimps_blog_heading'
		);

		$fields_list[] = array(
			'name'    => __( 'Custom Callout Options', 'cyberchimps_core' ),
			'id'      => 'custom_callout_options',
			'std'     => '',
			'type'    => 'toggle',
			'section' => 'cyberchimps_callout_section',
			'heading' => 'cyberchimps_blog_heading'
		);

		$fields_list[] = array(
			'name'    => __( 'Button', 'cyberchimps_core' ),
			'id'      => 'custom_callout_button',
			'class'   => 'custom_callout_options_toggle',
			'std'     => '',
			'type'    => 'upload',
			'section' => 'cyberchimps_callout_section',
			'heading' => 'cyberchimps_blog_heading'
		);

		$fields_list[] = array(
			'name'    => __( 'Background Color', 'cyberchimps_core' ),
			'id'      => 'custom_callout_background_color',
			'class'   => 'custom_callout_options_toggle',
			'std'     => '',
			'type'    => 'color',
			'section' => 'cyberchimps_callout_section',
			'heading' => 'cyberchimps_blog_heading'
		);

		$fields_list[] = array(
			'name'    => __( 'Title Color', 'cyberchimps_core' ),
			'id'      => 'custom_callout_title_color',
			'class'   => 'custom_callout_options_toggle',
			'std'     => '',
			'type'    => 'color',
			'section' => 'cyberchimps_callout_section',
			'heading' => 'cyberchimps_blog_heading'
		);

		$fields_list[] = array(
			'name'    => __( 'Text Color', 'cyberchimps_core' ),
			'id'      => 'custom_callout_text_color',
			'class'   => 'custom_callout_options_toggle',
			'std'     => '',
			'type'    => 'color',
			'section' => 'cyberchimps_callout_section',
			'heading' => 'cyberchimps_blog_heading'
		);

		$fields_list[] = array(
			'name'    => __( 'Button Color', 'cyberchimps_core' ),
			'id'      => 'custom_callout_button_color',
			'class'   => 'custom_callout_options_toggle',
			'std'     => '',
			'type'    => 'color',
			'section' => 'cyberchimps_callout_section',
			'heading' => 'cyberchimps_blog_heading'
		);

		$fields_list[] = array(
			'name'    => __( 'Button Text Color', 'cyberchimps_core' ),
			'id'      => 'custom_callout_button_text_color',
			'class'   => 'custom_callout_options_toggle',
			'std'     => '',
			'type'    => 'color',
			'section' => 'cyberchimps_callout_section',
			'heading' => 'cyberchimps_blog_heading'
		);
		/*********** CALLOUT OPTIONS ENDS **************/

		/********* HTML BOX OPTIONS STARTS ***********/

		$fields_list[] = array(
			'name'     => __( 'HTML Box', 'cyberchimps_core' ),
			'id'       => 'html_box',
			'std'      => '',
			'desc'     => __( 'Enter your custom HTML code here', 'cyberchimps_core' ),
			'type'     => 'editor',
			'settings' => array( 'media_buttons' => true ),
			'section'  => 'cyberchimps_html_box_section',
			'heading'  => 'cyberchimps_blog_heading'
		);

		/********* HTML BOX OPTIONS ENDS *************/

		/************ RECENT POSTS STARTS **************/

		$fields_list[] = array(
			'name'    => __( 'Title', 'cyberchimps_core' ),
			'id'      => 'recent_posts_title',
			'std'     => '',
			'type'    => 'toggle',
			'section' => 'cyberchimps_recent_posts_section',
			'heading' => 'cyberchimps_blog_heading'
		);

		$fields_list[] = array(
			'name'    => __( 'Custom Title', 'cyberchimps_core' ),
			'id'      => 'recent_posts_custom_title',
			'class'   => 'recent_posts_title_toggle',
			'std'     => '',
			'type'    => 'text',
			'section' => 'cyberchimps_recent_posts_section',
			'heading' => 'cyberchimps_blog_heading'
		);

		$fields_list[] = array(
			'name'    => __( 'Post Categories', 'cyberchimps_core' ),
			'id'      => 'recent_posts_post_cats',
			'type'    => 'select',
			'std'     => 'all',
			'options' => $options_categories,
			'section' => 'cyberchimps_recent_posts_section',
			'heading' => 'cyberchimps_blog_heading'
		);

		$fields_list[] = array(
			'name'    => __( 'Images', 'cyberchimps_core' ),
			'id'      => 'recent_posts_images',
			'std'     => '',
			'type'    => 'toggle',
			'section' => 'cyberchimps_recent_posts_section',
			'heading' => 'cyberchimps_blog_heading'
		);

		/************ RECENT POSTS ENDS ****************/

		/********* BOXES OPTIONS STARTS ***********/
		if ( $options_boxes_cats ) {
			$fields_list[] = array(
				'name'    => __( 'Select a Category', 'cyberchimps_core' ),
				'id'      => 'boxes_category',
				'type'    => 'select',
				'options' => $options_boxes_cats,
				'section' => 'cyberchimps_boxes_section',
				'heading' => 'cyberchimps_blog_heading'
			);
		} else {
			$fields_list[] = array(
				'name'    => __( 'Select a Category', 'cyberchimps_core' ),
				'id'      => 'boxes_category_help',
				'type'    => 'help',
				'desc'    => __( 'You need to create a Category', 'cyberchimps_core' ),
				'section' => 'cyberchimps_boxes_section',
				'heading' => 'cyberchimps_blog_heading'
			);
		}

		$fields_list[] = array(
			'name'    => __( 'Number of boxes per row', 'cyberchimps_core' ),
			'id'      => 'boxes_per_row',
			'type'    => 'select',
			'options' => array(
				2 => '2',
				3 => '3',
				4 => '4'
			),
			'std'     => apply_filters( 'cyberchimps_boxes_default_number', 3 ),
			'section' => 'cyberchimps_boxes_section',
			'heading' => 'cyberchimps_blog_heading'
		);
		/********* BOXES OPTIONS ENDS ***********/

	endif;
	// end pro option fields

	/********* FEATURED POSTS START ************/
	/*$fields_list[] = array(
		'name' => __('Post Categories', 'cyberchimps_core' ),
		'id' => 'featured_posts_categories',
		'type' => 'select',
		'std' => 'all',
		'options' => $options_categories,
		'section' => 'cyberchimps_featured_posts_section',
		'heading' => 'cyberchimps_blog_heading'
	);
	/********* FEATURED POSTS ENDS ************/

	/*************************** TEMPLATES ***************************************************/

	/* SINGLE POSTS */
	$fields_list[] = array(
		'name'    => __( 'Sidebar Options', 'cyberchimps_core' ),
		'desc'    => __( 'Images for layout.', 'cyberchimps_core' ),
		'id'      => 'single_post_sidebar_options',
		'std'     => 'right_sidebar',
		'type'    => 'images',
		'options' => apply_filters( 'sidebar_layout_options', array(
			'full_width'    => $imagepath . '1col.png',
			'right_sidebar' => $imagepath . '2cr.png'
		) ),
		'section' => 'cyberchimps_single_post_section',
		'heading' => 'cyberchimps_templates_heading'
	);

	// Toggle for post title
	$fields_list[] = array(
		'name'    => __( 'Post title', 'cyberchimps_core' ),
		'id'      => 'single_post_title',
		'type'    => 'toggle',
		'std'     => 'checked',
		'section' => 'cyberchimps_single_post_section',
		'heading' => 'cyberchimps_templates_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Featured Images', 'cyberchimps_core' ),
		'id'      => 'single_post_featured_images',
		'type'    => 'toggle',
		'section' => 'cyberchimps_single_post_section',
		'heading' => 'cyberchimps_templates_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Post Format Icons', 'cyberchimps_core' ),
		'id'      => 'single_post_format_icons',
		'type'    => 'toggle',
		'section' => 'cyberchimps_single_post_section',
		'heading' => 'cyberchimps_templates_heading'
	);

	/********* Post Byline Starts***********/
	// Author
	$fields_list[] = array(
		'name'    => __( 'Post Byline Author', 'cyberchimps_core' ),
		'id'      => 'single_post_byline_author',
		'std'     => 'checked',
		'type'    => 'toggle',
		'section' => 'cyberchimps_single_post_section',
		'heading' => 'cyberchimps_templates_heading'
	);

	// Categories
	$fields_list[] = array(
		'name'    => __( 'Post Byline Categories', 'cyberchimps_core' ),
		'id'      => 'single_post_byline_categories',
		'std'     => 'checked',
		'type'    => 'toggle',
		'section' => 'cyberchimps_single_post_section',
		'heading' => 'cyberchimps_templates_heading'
	);

	// Date
	$fields_list[] = array(
		'name'    => __( 'Post Byline Date', 'cyberchimps_core' ),
		'id'      => 'single_post_byline_date',
		'std'     => 'checked',
		'type'    => 'toggle',
		'section' => 'cyberchimps_single_post_section',
		'heading' => 'cyberchimps_templates_heading'
	);

	// Comments
	$fields_list[] = array(
		'name'    => __( 'Post Byline Comments', 'cyberchimps_core' ),
		'id'      => 'single_post_byline_comments',
		'std'     => 'checked',
		'type'    => 'toggle',
		'section' => 'cyberchimps_single_post_section',

		'heading' => 'cyberchimps_templates_heading'
	);

	// Tags
	$fields_list[] = array(
		'name'    => __( 'Post Byline Tags', 'cyberchimps_core' ),
		'id'      => 'single_post_byline_tags',
		'std'     => 'checked',
		'type'    => 'toggle',
		'section' => 'cyberchimps_single_post_section',
		'heading' => 'cyberchimps_templates_heading'
	);
	/********* Post Byline Ends ***********/

	/* ARCHIVE */
	$fields_list[] = array(
		'name'    => __( 'Sidebar Options', 'cyberchimps_core' ),
		'desc'    => __( 'Images for layout.', 'cyberchimps_core' ),
		'id'      => 'archive_sidebar_options',
		'std'     => 'right_sidebar',
		'type'    => 'images',
		'options' => apply_filters( 'sidebar_layout_options', array(
			'full_width'    => $imagepath . '1col.png',
			'right_sidebar' => $imagepath . '2cr.png'
		) ),
		'section' => 'cyberchimps_archive_section',
		'heading' => 'cyberchimps_templates_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Post Format Icons', 'cyberchimps_core' ),
		'id'      => 'archive_format_icons',
		'type'    => 'toggle',
		'section' => 'cyberchimps_archive_section',
		'heading' => 'cyberchimps_templates_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Post Excerpts', 'cyberchimps_core' ),
		'id'      => 'archive_post_excerpts',
		'type'    => 'toggle',
		'std'     => 0,
		'section' => 'cyberchimps_archive_section',
		'heading' => 'cyberchimps_templates_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Featured Images', 'cyberchimps_core' ),
		'id'      => 'archive_featured_images',
		'type'    => 'toggle',
		'section' => 'cyberchimps_archive_section',
		'heading' => 'cyberchimps_templates_heading'
	);

	/********* Post Byline Starts***********/
	// Author
	$fields_list[] = array(
		'name'    => __( 'Post Byline Author', 'cyberchimps_core' ),
		'id'      => 'archive_post_byline_author',
		'std'     => 'checked',
		'type'    => 'toggle',
		'section' => 'cyberchimps_archive_section',
		'heading' => 'cyberchimps_templates_heading'
	);

	// Categories
	$fields_list[] = array(
		'name'    => __( 'Post Byline Categories', 'cyberchimps_core' ),
		'id'      => 'archive_post_byline_categories',
		'std'     => 'checked',
		'type'    => 'toggle',
		'section' => 'cyberchimps_archive_section',
		'heading' => 'cyberchimps_templates_heading'
	);

	// Date
	$fields_list[] = array(
		'name'    => __( 'Post Byline Date', 'cyberchimps_core' ),
		'id'      => 'archive_post_byline_date',
		'std'     => 'checked',
		'type'    => 'toggle',
		'section' => 'cyberchimps_archive_section',
		'heading' => 'cyberchimps_templates_heading'
	);

	// Comments
	$fields_list[] = array(
		'name'    => __( 'Post Byline Comments', 'cyberchimps_core' ),
		'id'      => 'archive_post_byline_comments',
		'std'     => 'checked',
		'type'    => 'toggle',
		'section' => 'cyberchimps_archive_section',
		'heading' => 'cyberchimps_templates_heading'
	);

	// Tags
	$fields_list[] = array(
		'name'    => __( 'Post Byline Tags', 'cyberchimps_core' ),
		'id'      => 'archive_post_byline_tags',
		'std'     => 'checked',
		'type'    => 'toggle',
		'section' => 'cyberchimps_archive_section',
		'heading' => 'cyberchimps_templates_heading'
	);
	/********* Post Byline Ends ***********/

	/* SEARCH */
	$fields_list[] = array(
		'name'    => __( 'Sidebar Options', 'cyberchimps_core' ),
		'desc'    => __( 'Images for layout.', 'cyberchimps_core' ),
		'id'      => 'search_sidebar_options',
		'std'     => 'right_sidebar',
		'type'    => 'images',
		'options' => apply_filters( 'sidebar_layout_options', array(
			'full_width'    => $imagepath . '1col.png',
			'right_sidebar' => $imagepath . '2cr.png'
		) ),
		'section' => 'cyberchimps_search_section',
		'heading' => 'cyberchimps_templates_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Post Excerpts', 'cyberchimps_core' ),
		'id'      => 'search_post_excerpts',
		'type'    => 'toggle',
		'section' => 'cyberchimps_search_section',
		'heading' => 'cyberchimps_templates_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Read More Text', 'cyberchimps_core' ),
		'id'      => 'search_post_read_more',
		'class'   => 'search_post_excerpts_toggle',
		'type'    => 'text',
		'std'     => 'Read More...',
		'section' => 'cyberchimps_search_section',
		'heading' => 'cyberchimps_templates_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Excerpt Length', 'cyberchimps_core' ),
		'id'      => 'search_post_excerpt_length',
		'class'   => 'search_post_excerpts_toggle',
		'type'    => 'text',
		'std'     => 55,
		'section' => 'cyberchimps_search_section',
		'heading' => 'cyberchimps_templates_heading'
	);

	/* 404 */
	$fields_list[] = array(
		'name'    => __( 'Sidebar Options', 'cyberchimps_core' ),
		'desc'    => __( 'Images for layout.', 'cyberchimps_core' ),
		'id'      => 'error_sidebar_options',
		'std'     => 'full_width',
		'type'    => 'images',
		'options' => apply_filters( 'sidebar_layout_options', array(
			'full_width'    => $imagepath . '1col.png',
			'right_sidebar' => $imagepath . '2cr.png'
		) ),
		'section' => 'cyberchimps_error_section',
		'heading' => 'cyberchimps_templates_heading'
	);

	$fields_list[] = array(
		'name'    => __( 'Custom 404 Title', 'cyberchimps_core' ),
		'id'      => 'error_custom_title',
		'type'    => 'text',
		'section' => 'cyberchimps_error_section',
		'heading' => 'cyberchimps_templates_heading'
	);

	$fields_list[] = array(
		'name'     => __( 'Custom 404 Content', 'cyberchimps_core' ),
		'id'       => 'error_custom_content',
		'std'      => '',
		'type'     => 'editor',
		'settings' => array( 'media_buttons' => true ),
		'section'  => 'cyberchimps_error_section',
		'heading'  => 'cyberchimps_templates_heading'
	);

	/*************************** FOOTER ***************************************************/

	$fields_list[] = array(
		'name'    => __( 'Footer Widgets', 'cyberchimps_core' ),
		'id'      => 'footer_show_toggle',
		'std'     => 1,
		'type'    => 'toggle',
		'section' => 'cyberchimps_footer_section',
		'heading' => 'cyberchimps_footer_heading'
	);

	$fields_list[] = array(
		'id'      => 'footer_copyright_text',
		'name'    => __( 'Footer Copyright Text', 'cyberchimps_core' ),
		'std'     => '&copy; ' . get_bloginfo( 'name' ),
		'type'    => 'text_html',
		'section' => 'cyberchimps_footer_section',
		'heading' => 'cyberchimps_footer_heading'
	);

	return apply_filters( 'cyberchimps_field_filter', $fields_list );
}

add_filter( 'cyberchimps_field_list', 'cyberchimps_add_core_fields' );
