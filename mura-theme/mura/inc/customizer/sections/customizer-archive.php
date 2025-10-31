<?php


/**
 * Archive Settings
 *
 * @package WordPress
 * @subpackage Mura
 */

function mura_customize_register_archive( $wp_customize ) {

	$customizer_settings = mura_general_settings();

	$wp_customize->add_section( 'mura_archive_settings', array(
		'title'    => esc_html__( 'Archive/Category Settings', 'mura' ),
		'priority' => 130,
		'panel' => 'mura_theme_settings',
	) );

	// Sidebar
	$wp_customize->add_setting( 'mura_archive_sidebar', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_archive_sidebar', array(
		'label'       => esc_html__( 'Display Sidebar', 'mura' ),
		'section'     => 'mura_archive_settings',
		'type'        => 'checkbox',
	) );

	// Post Layout
		$wp_customize->add_setting( 'mura_archive_layout', array(
			'default'           => 'list',
			'sanitize_callback' => 'tfm_sanitize_select',
		) );

		$wp_customize->add_control( 'mura_archive_layout', array(
			'label'       => esc_html__( 'Post Layout', 'mura' ),
			'section'     => 'mura_archive_settings',
			'type'        => 'select',
			'choices'     => array(
				'masonry' => esc_html__( 'Masonry', 'mura' ),
				'grid' => esc_html__( 'Grid', 'mura' ),
				'grid-first-full' => esc_html__( 'Grid First Full', 'mura' ),
				'grid-asc' => esc_html__( 'Grid Ascending', 'mura' ),
				'grid-desc' => esc_html__( 'Grid Descending', 'mura' ),
				'grid-offset' => esc_html__( 'Grid Offset', 'mura' ),
				'list' => esc_html__( 'List', 'mura' ),
				'list-grid' => esc_html__( 'List &amp; Grid', 'mura' ),
			),
		) );

		$wp_customize->add_setting( 'mura_archive_loop_style', array(
			'default'           => 'default',
			'sanitize_callback' => 'tfm_sanitize_select',
			'transport' => 'postMessage',
		) );

		$wp_customize->add_control( 'mura_archive_loop_style', array(
			'label'       => esc_html__( 'Post Style', 'mura' ),
			'section'     => 'mura_archive_settings',
			'type'        => 'select',
			'choices'     => array(
				'default' => esc_html__( 'Default', 'mura' ),
				'cover' => esc_html__( 'Cover', 'mura' ),
			),
		) );


		// Number of columns
		$wp_customize->add_setting( 'mura_archive_loop_cols', array(
			'default'           => '3',
			'sanitize_callback' => 'absint',
			'transport' => 'postMessage',
		) );

		$wp_customize->add_control( 'mura_archive_loop_cols', array(
			'label'       => esc_html__( 'Number of Columns', 'mura' ),
			'section'     => 'mura_archive_settings',
			'type'        => 'number',
			'input_attrs' => array(
		        'min'   => 1,
		        'max'   => apply_filters( 'mura_max_post_cols', 4 ),
		    ),
		) );

	//========POST META ---------------//

	// Excerpt (Auto Generated)
	$wp_customize->add_setting( 'mura_archive_post_excerpt', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_archive_post_excerpt', array(
		'label'       => esc_html__( 'Excerpt (Auto Generated)', 'mura' ),
		'section'     => 'mura_archive_settings',
		'type'        => 'checkbox',
	) );

	// Excerpt (Custom)
	$wp_customize->add_setting( 'mura_archive_post_excerpt_custom', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_archive_post_excerpt_custom', array(
		'label'       => esc_html__( 'Excerpt (Custom)', 'mura' ),
		'section'     => 'mura_archive_settings',
		'type'        => 'checkbox',
	) );

	$wp_customize->add_setting( 'mura_archive_read_more', array(
		'default'           => false,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_archive_read_more', array(
		'label'       => esc_html__( 'Read More', 'mura' ),
		'section'     => 'mura_archive_settings',
		'type'        => 'checkbox',
	) );

	// Show entry title
	$wp_customize->add_setting( 'mura_archive_entry_title', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_archive_entry_title', array(
		'label'       => esc_html__( 'Entry Title', 'mura' ),
		'section'     => 'mura_archive_settings',
		'type'        => 'checkbox',
	) );

	// Show post thumbnail
	$wp_customize->add_setting( 'mura_archive_post_thumbnail', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_archive_post_thumbnail', array(
		'label'       => esc_html__( 'Thumbnail', 'mura' ),
		'section'     => 'mura_archive_settings',
		'type'        => 'checkbox',
	) );

	// Homepage Standard Loop Image aspect ratio
	$wp_customize->add_setting( 'mura_archive_thumbnail_aspect_ratio', array(
		'default'           => 'landscape',
		'sanitize_callback' => 'tfm_sanitize_select',
		'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'mura_archive_thumbnail_aspect_ratio', array(
		'label'       => esc_html__( 'Thumbnail Aspect Ratio', 'mura' ),
		'section'     => 'mura_archive_settings',
		'type'        => 'select',
		'choices'     => array(
			'wide' => esc_html__( 'Wide', 'mura' ),
			'landscape' => esc_html__( 'Landscape', 'mura' ),
			'portrait' => esc_html__( 'Portrait', 'mura' ),
			'square' => esc_html__( 'Square', 'mura' ),
			'uncropped' => esc_html__( 'Uncropped', 'mura' ),
		),
	) );

	// Show by meta
	$wp_customize->add_setting( 'mura_archive_entry_meta_by', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_archive_entry_meta_by', array(
		'label'       => esc_html__( '"by"', 'mura' ),
		'section'     => 'mura_archive_settings',
		'type'        => 'checkbox',
	) );

	// Show by meta
	$wp_customize->add_setting( 'mura_archive_entry_meta_in', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_archive_entry_meta_in', array(
		'label'       => esc_html__( '"in"', 'mura' ),
		'section'     => 'mura_archive_settings',
		'type'        => 'checkbox',
	) );

	// Show author meta
	$wp_customize->add_setting( 'mura_archive_entry_meta_author', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_archive_entry_meta_author', array(
		'label'       => esc_html__( 'Author', 'mura' ),
		'section'     => 'mura_archive_settings',
		'type'        => 'checkbox',
	) );

	// Show author meta avatar
	$wp_customize->add_setting( 'mura_archive_entry_meta_author_avatar', array(
		'default'           => false,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_archive_entry_meta_author_avatar', array(
		'label'       => esc_html__( 'Avatar', 'mura' ),
		'section'     => 'mura_archive_settings',
		'type'        => 'checkbox',
	) );

	// Show category meta
	$wp_customize->add_setting( 'mura_archive_entry_meta_category', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_archive_entry_meta_category', array(
		'label'       => esc_html__( 'Category', 'mura' ),
		'section'     => 'mura_archive_settings',
		'type'        => 'checkbox',
	) );

	// Show read time
	if ( function_exists( 'tfm_read_time') ) {
		$wp_customize->add_setting( 'tfm_archive_entry_meta_read_time', array(
			'default'           => true,
			'sanitize_callback' => 'tfm_sanitize_checkbox',
		) );

		// Control Options
		$wp_customize->add_control( 'tfm_archive_entry_meta_read_time', array(
			'label'       => esc_html__( 'Read Time', 'mura' ),
			'section'     => 'mura_archive_settings',
			'type'        => 'checkbox',
		) );
	}

	// Show date meta
	$wp_customize->add_setting( 'mura_archive_entry_meta_comment_count', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_archive_entry_meta_comment_count', array(
		'label'       => esc_html__( 'Comment Count', 'mura' ),
		'section'     => 'mura_archive_settings',
		'type'        => 'checkbox',
	) );

	// Show date meta
	$wp_customize->add_setting( 'mura_archive_entry_meta_date', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_archive_entry_meta_date', array(
		'label'       => esc_html__( 'Date', 'mura' ),
		'section'     => 'mura_archive_settings',
		'type'        => 'checkbox',
	) );

	// Show post count
	$wp_customize->add_setting( 'mura_archive_title', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_archive_title', array(
		'label'       => esc_html__( 'Show Archive Title', 'mura' ),
		'section'     => 'mura_archive_settings',
		'type'        => 'checkbox',
	) );

	// Show post count
	$wp_customize->add_setting( 'mura_archive_post_count', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_archive_post_count', array(
		'label'       => esc_html__( 'Post Count', 'mura' ),
		'section'     => 'mura_archive_settings',
		'type'        => 'checkbox',
	) );

	// Show Description
	$wp_customize->add_setting( 'mura_archive_description', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_archive_description', array(
		'label'       => esc_html__( 'Description', 'mura' ),
		'section'     => 'mura_archive_settings',
		'type'        => 'checkbox',
	) );

	// Show Description
	$wp_customize->add_setting( 'mura_archive_subcats', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_archive_subcats', array(
		'label'       => esc_html__( 'Sub Categories', 'mura' ),
		'section'     => 'mura_archive_settings',
		'type'        => 'checkbox',
	) );

	// Show author Avatar
	$wp_customize->add_setting( 'mura_archive_author_avatar', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_archive_author_avatar', array(
		'label'       => esc_html__( 'Author Avatar', 'mura' ),
		'section'     => 'mura_archive_settings',
		'type'        => 'checkbox',
	) );

	// Show Author Bio
	$wp_customize->add_setting( 'mura_archive_author_bio', array(
		'default'           => false,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_archive_author_bio', array(
		'label'       => esc_html__( 'Author Bio', 'mura' ),
		'section'     => 'mura_archive_settings',
		'type'        => 'checkbox',
	) );

	// Loop widget
	$wp_customize->add_setting( 'mura_archive_loop_sidebar_position', array(
		'default'           => '',
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 'mura_archive_loop_sidebar_position', array(
		'label'       => esc_html__( 'Add widgets between posts in Category Pages', 'mura' ),
		'description' => esc_html__( 'Select the position you would like to display your widget(s).', 'mura'),
		'section'     => 'mura_archive_settings',
		'type'        => 'number',
		'input_attrs' => array(
	        'min'   => 0,
	        'step' => 1,
	    ),
	) );

}

add_action( 'customize_register', 'mura_customize_register_archive' );