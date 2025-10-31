<?php


/**
 * Header Color Settings
 *
 * @package WordPress
 * @subpackage Mura
 */

function mura_customize_register_colors_header( $wp_customize ) {

	$customizer_settings = mura_general_settings();

	$wp_customize->add_section( 'mura_header_colors', array(
		'title'    => esc_html__( 'Header Colors', 'mura' ),
		'priority' => 130,
		'panel' => 'mura_color_settings',
	) );

	// Add Setting
	$wp_customize->add_setting( 'mura_header_background_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_header_background_color', array(
      'section' => 'mura_header_colors',
      'label'   => esc_html__( 'Header Background Color', 'mura' ),
    ) ) );

      // Add Setting
	$wp_customize->add_setting( 'mura_header_logo_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_header_logo_color', array(
      'section' => 'mura_header_colors',
      'label'   => esc_html__( 'Header Logo Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_header_border_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_header_border_color', array(
      'section' => 'mura_header_colors',
      'label'   => esc_html__( 'Header Line Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_header_toggle_icon_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_header_toggle_icon_color', array(
      'section' => 'mura_header_colors',
      'label'   => esc_html__( 'Toggle Icon Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_header_search_input_background_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_header_search_input_background_color', array(
      'section' => 'mura_header_colors',
      'label'   => esc_html__( 'Search Input Background Color', 'mura' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'mura_header_search_input_border_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_header_search_input_border_color', array(
      'section' => 'mura_header_colors',
      'label'   => esc_html__( 'Search Input Border Color', 'mura' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'mura_header_search_input_icon_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_header_search_input_icon_color', array(
      'section' => 'mura_header_colors',
      'label'   => esc_html__( 'Search Input Icon Color', 'mura' ),
    ) ) );

}

add_action( 'customize_register', 'mura_customize_register_colors_header' );