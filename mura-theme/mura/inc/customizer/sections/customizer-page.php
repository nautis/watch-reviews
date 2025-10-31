<?php


/**
 * Page Settings
 *
 * @package WordPress
 * @subpackage Mura
 */

function mura_customize_register_page( $wp_customize ) {

	$customizer_settings = mura_general_settings();

	$wp_customize->add_section( 'mura_page_settings', array(
		'title'    => esc_html__( 'Page Settings', 'mura' ),
		'priority' => 130,
		'panel' => 'mura_theme_settings',
	) );

	// Sidebar
	$wp_customize->add_setting( 'mura_page_sidebar', array(
		'default'           => false,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_page_sidebar', array(
		'label'       => esc_html__( 'Display Sidebar', 'mura' ),
		'section'     => 'mura_page_settings',
		'type'        => 'checkbox',
	) );

	// Layout style
	$wp_customize->add_setting( 'mura_page_style', array(
		'default'           => 'default',
		'sanitize_callback' => 'tfm_sanitize_select',
	) );

	$wp_customize->add_control( 'mura_page_style', array(
		'label'       => esc_html__( 'Page Layout Style', 'mura' ),
		'section'     => 'mura_page_settings',
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
	$wp_customize->add_setting( 'mura_page_thumbnail_aspect_ratio', array(
		'default'           => 'uncropped',
		'sanitize_callback' => 'tfm_sanitize_select',
	) );

	$wp_customize->add_control( 'mura_page_thumbnail_aspect_ratio', array(
		'label'       => esc_html__( 'Thumbnail Aspect Ratio', 'mura' ),
		'section'     => 'mura_page_settings',
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

	$wp_customize->add_setting( 'mura_page_full_width', array(
		'default'           => false,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'mura_page_full_width', array(
		'label'       => esc_html__( 'Full Width', 'mura' ),
		'section'     => 'mura_page_settings',
		'type'        => 'checkbox',
	) );

}

add_action( 'customize_register', 'mura_customize_register_page' );