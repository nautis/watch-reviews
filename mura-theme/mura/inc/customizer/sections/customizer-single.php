<?php


/**
 * Single Settings
 *
 * @package WordPress
 * @subpackage Mura
 */

function mura_customize_register_single( $wp_customize ) {

	$customizer_settings = mura_general_settings();

	// ========================================================
	// Single Post Settings
	// ========================================================

	$wp_customize->add_section( 'mura_single_settings', array(
		'title'    => esc_html__( 'Single Post Settings', 'mura' ),
		'priority' => 130,
		'panel' => 'mura_theme_settings',
	) );

	// Sidebar
	$wp_customize->add_setting( 'mura_single_sidebar', array(
		'default'           => false,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_single_sidebar', array(
		'label'       => esc_html__( 'Display Sidebar', 'mura' ),
		'section'     => 'mura_single_settings',
		'type'        => 'checkbox',
	) );

	// Post style
	$wp_customize->add_setting( 'mura_single_post_style', array(
		'default'           => 'default',
		'sanitize_callback' => 'tfm_sanitize_select',
	) );

	$wp_customize->add_control( 'mura_single_post_style', array(
		'label'       => esc_html__( 'Post Layout', 'mura' ),
		'section'     => 'mura_single_settings',
		'type'        => 'select',
		'choices'     => array(
			'default' => esc_html__( 'Default', 'mura' ),
			'default-alt' => esc_html__( 'Default Alt.', 'mura' ),
			'cover' => esc_html__( 'Cover', 'mura' ),
			'hero-default' => esc_html__( 'Hero', 'mura' ),
			'hero-cover' => esc_html__( 'Hero Cover', 'mura' ),
		),
	) );

	// Image aspect ratio
	$wp_customize->add_setting( 'mura_single_thumbnail_aspect_ratio', array(
		'default'           => 'uncropped',
		'sanitize_callback' => 'tfm_sanitize_select',
	) );

	$wp_customize->add_control( 'mura_single_thumbnail_aspect_ratio', array(
		'label'       => esc_html__( 'Thumbnail Aspect Ratio', 'mura' ),
		'section'     => 'mura_single_settings',
		'type'        => 'select',
		'choices'     => array(
			'wide' => esc_html__( 'Wide', 'mura' ),
			'landscape' => esc_html__( 'Landscape', 'mura' ),
			'portrait' => esc_html__( 'Portrait', 'mura' ),
			'square' => esc_html__( 'Square', 'mura' ),
			'hero' => esc_html__( 'Hero', 'mura' ),
			'uncropped' => esc_html__( 'Uncropped', 'mura' ),
		),
	) );

	// Excerpt
	$wp_customize->add_setting( 'mura_single_thumbnail', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'mura_single_thumbnail', array(
		'label'       => esc_html__( 'Thumbnail', 'mura' ),
		'section'     => 'mura_single_settings',
		'type'        => 'checkbox',
	) );

	// Excerpt
	$wp_customize->add_setting( 'mura_single_full_width', array(
		'default'           => false,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'mura_single_full_width', array(
		'label'       => esc_html__( 'Full Width', 'mura' ),
		'section'     => 'mura_single_settings',
		'type'        => 'checkbox',
	) );

	// Excerpt
	$wp_customize->add_setting( 'mura_single_custom_excerpt', array(
		'default'           => false,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'mura_single_custom_excerpt', array(
		'label'       => esc_html__( 'Display Custom excerpt', 'mura' ),
		'section'     => 'mura_single_settings',
		'type'        => 'checkbox',
	) );

	// Show by meta
	$wp_customize->add_setting( 'mura_single_entry_meta_by', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_single_entry_meta_by', array(
		'label'       => esc_html__( '"by"', 'mura' ),
		'section'     => 'mura_single_settings',
		'type'        => 'checkbox',
	) );

	// Show by meta
	$wp_customize->add_setting( 'mura_single_entry_meta_in', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_single_entry_meta_in', array(
		'label'       => esc_html__( '"in"', 'mura' ),
		'section'     => 'mura_single_settings',
		'type'        => 'checkbox',
	) );

	$wp_customize->add_setting( 'mura_single_entry_meta_author', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'mura_single_entry_meta_author', array(
		'label'       => esc_html__( 'Author', 'mura' ),
		'section'     => 'mura_single_settings',
		'type'        => 'checkbox',
	) );

	$wp_customize->add_setting( 'mura_single_entry_meta_author_avatar', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'mura_single_entry_meta_author_avatar', array(
		'label'       => esc_html__( 'Avatar', 'mura' ),
		'section'     => 'mura_single_settings',
		'type'        => 'checkbox',
	) );

	$wp_customize->add_setting( 'mura_single_entry_meta_category', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'mura_single_entry_meta_category', array(
		'label'       => esc_html__( 'Category', 'mura' ),
		'section'     => 'mura_single_settings',
		'type'        => 'checkbox',
	) );

	$wp_customize->add_setting( 'mura_single_entry_meta_date', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'mura_single_entry_meta_date', array(
		'label'       => esc_html__( 'Date', 'mura' ),
		'section'     => 'mura_single_settings',
		'type'        => 'checkbox',
	) );

	$wp_customize->add_setting( 'mura_single_entry_meta_date_updated', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'mura_single_entry_meta_date_updated', array(
		'label'       => esc_html__( 'Updated Date', 'mura' ),
		'section'     => 'mura_single_settings',
		'type'        => 'checkbox',
	) );

	if ( function_exists( 'tfm_read_time') ) {

		$wp_customize->add_setting( 'tfm_single_entry_meta_read_time', array(
			'default'           => false,
			'sanitize_callback' => 'tfm_sanitize_checkbox',
		) );

		$wp_customize->add_control( 'tfm_single_entry_meta_read_time', array(
			'label'       => esc_html__( 'Read Time', 'mura' ),
			'section'     => 'mura_single_settings',
			'type'        => 'checkbox',
		) );

	}

	$wp_customize->add_setting( 'mura_single_entry_meta_comment_count', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'mura_single_entry_meta_comment_count', array(
		'label'       => esc_html__( 'Comment Count', 'mura' ),
		'section'     => 'mura_single_settings',
		'type'        => 'checkbox',
	) );

	$wp_customize->add_setting( 'mura_single_post_tags', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'mura_single_post_tags', array(
		'label'       => esc_html__( 'Post Tags', 'mura' ),
		'section'     => 'mura_single_settings',
		'type'        => 'checkbox',
	) );

	$wp_customize->add_setting( 'mura_single_post_tags_count', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'mura_single_post_tags_count', array(
		'label'       => esc_html__( 'Post Tag Count', 'mura' ),
		'section'     => 'mura_single_settings',
		'type'        => 'checkbox',
	) );

	// Prev/Next
	$wp_customize->add_setting( 'mura_single_post_navigation', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'mura_single_post_navigation', array(
		'label'       => esc_html__( 'Previous/Next Post', 'mura' ),
		'section'     => 'mura_single_settings',
		'type'        => 'checkbox',
	) );

	// Prev/Next Thumbnail
	$wp_customize->add_setting( 'mura_single_post_navigation_thumbnail', array(
		'default'           => false,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'mura_single_post_navigation_thumbnail', array(
		'label'       => esc_html__( 'Prev/Next Post Thumbnail', 'mura' ),
		'section'     => 'mura_single_settings',
		'type'        => 'checkbox',
	) );

	// Prev/Next Thumbnail
	$wp_customize->add_setting( 'mura_single_post_navigation_header', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'mura_single_post_navigation_header', array(
		'label'       => esc_html__( 'Prev/Next Post Header', 'mura' ),
		'section'     => 'mura_single_settings',
		'type'        => 'checkbox',
	) );

	// Show Author Bio Avatar
	$wp_customize->add_setting( 'mura_single_author_bio_avatar', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_single_author_bio_avatar', array(
		'label'       => esc_html__( 'Author Bio Avatar', 'mura' ),
		'section'     => 'mura_single_settings',
		'type'        => 'checkbox',
	) );

	// Show Author Bio Avatar
	$wp_customize->add_setting( 'mura_single_author_bio_name', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_single_author_bio_name', array(
		'label'       => esc_html__( 'Author Bio Name', 'mura' ),
		'section'     => 'mura_single_settings',
		'type'        => 'checkbox',
	) );

	// Show Author Bio Avatar
	$wp_customize->add_setting( 'mura_single_author_bio_info', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_single_author_bio_info', array(
		'label'       => esc_html__( 'Author Bio Info', 'mura' ),
		'section'     => 'mura_single_settings',
		'type'        => 'checkbox',
	) );

	// Toggle Comments
	$wp_customize->add_setting( 'mura_single_toggle_comments', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_single_toggle_comments', array(
		'label'       => esc_html__( 'Click Button to Open Comments', 'mura' ),
		'section'     => 'mura_single_settings',
		'type'        => 'checkbox',
	) );

}

add_action( 'customize_register', 'mura_customize_register_single' );