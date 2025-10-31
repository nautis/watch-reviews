<?php


/**
 * Header Settings
 *
 * @package WordPress
 * @subpackage Mura
 */

function mura_customize_register_header( $wp_customize ) {

	$customizer_settings = mura_general_settings();

	$wp_customize->add_section( 'mura_header_settings', array(
		'title'    => esc_html__( 'Header Settings', 'mura' ),
		'priority' => 130,
		'panel' => 'mura_theme_settings',
	) );

	// Layout style
	$wp_customize->add_setting( 'mura_header_layout', array(
		'default'           => 'logo-left-menu-right',
		'sanitize_callback' => 'tfm_sanitize_select',
	) );

	if ( function_exists('tfm_site_header_widget')) {
		$wp_customize->add_control( 'mura_header_layout', array(
			'label'       => esc_html__( 'Header Layout', 'mura' ),
			'section'     => 'mura_header_settings',
			'type'        => 'select',
			'choices'     => array(
				'default' => esc_html__( 'Default', 'mura' ),
				'default-logo-left' => esc_html__( 'Default Logo Left', 'mura'),
				'logo-split-menu' => esc_html__( 'Logo Center Split Menu', 'mura' ),
				'logo-left-menu-right' => esc_html__( 'Logo Left w/Menu', 'mura' ),
				'logo-below-nav' => esc_html__( 'Logo Below Nav', 'mura' ),
				'default-advert' => esc_html__( 'Default w/Advert', 'mura'),
			),
		) );
	} else {
		$wp_customize->add_control( 'mura_header_layout', array(
			'label'       => esc_html__( 'Header Layout', 'mura' ),
			'section'     => 'mura_header_settings',
			'type'        => 'select',
			'choices'     => array(
				'default' => esc_html__( 'Default', 'mura' ),
				'default-logo-left' => esc_html__( 'Default Logo Left', 'mura'),
				'logo-split-menu' => esc_html__( 'Logo Center Split Menu', 'mura' ),
				'logo-left-menu-right' => esc_html__( 'Logo Left w/Menu', 'mura' ),
				'logo-below-nav' => esc_html__( 'Logo Below Nav', 'mura' ),
			),
		) );
	}

	// Enable toggle menu
	$wp_customize->add_setting( 'mura_toggle_menu', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_toggle_menu', array(
		'label'       => esc_html__( 'Show Toggle Menu on Desktop', 'mura' ),
		'section'     => 'mura_header_settings',
		'type'        => 'checkbox',
	) );

	// Enable toggle menu
	$wp_customize->add_setting( 'mura_toggle_menu_mobile', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_toggle_menu_mobile', array(
		'label'       => esc_html__( 'Show Toggle Menu on Mobile', 'mura' ),
		'section'     => 'mura_header_settings',
		'type'        => 'checkbox',
	) );

	// Enable toggle search
	$wp_customize->add_setting( 'mura_toggle_search', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_toggle_search', array(
		'label'       => esc_html__( 'Show Toggle Search on Desktop', 'mura' ),
		'section'     => 'mura_header_settings',
		'type'        => 'checkbox',
	) );

	// Enable toggle search
	$wp_customize->add_setting( 'mura_toggle_search_mobile', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_toggle_search_mobile', array(
		'label'       => esc_html__( 'Show Toggle Search on Mobile', 'mura' ),
		'section'     => 'mura_header_settings',
		'type'        => 'checkbox',
	) );

	// Search bar
	$wp_customize->add_setting( 'mura_header_search_input', array(
		'default'           => false,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_header_search_input', array(
		'label'       => esc_html__( 'Show Search Input Field on Desktop', 'mura' ),
		'section'     => 'mura_header_settings',
		'type'        => 'checkbox',
	) );

	// Sticky Nav Desktop
	$wp_customize->add_setting( 'mura_sticky_nav', array(
		'default'           => false,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_sticky_nav', array(
		'label'       => esc_html__( 'Make Header Nav Sticky on Desktop', 'mura' ),
		'section'     => 'mura_header_settings',
		'type'        => 'checkbox',
	) );

	// Sticky Nav Mobile
	$wp_customize->add_setting( 'mura_sticky_nav_mobile', array(
		'default'           => false,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_sticky_nav_mobile', array(
		'label'       => esc_html__( 'Make Header Nav Sticky on Mobile', 'mura' ),
		'section'     => 'mura_header_settings',
		'type'        => 'checkbox',
	) );

	// Tagline
	$wp_customize->add_setting( 'mura_header_tagline', array(
		'default'           => false,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_header_tagline', array(
		'label'       => esc_html__( 'Show Site Tagline', 'mura' ),
		'section'     => 'mura_header_settings',
		'type'        => 'checkbox',
	) );

}

add_action( 'customize_register', 'mura_customize_register_header' );