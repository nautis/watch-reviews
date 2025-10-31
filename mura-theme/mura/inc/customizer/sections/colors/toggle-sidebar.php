<?php


/**
 * Header Color Settings
 *
 * @package WordPress
 * @subpackage Mura
 */

function mura_customize_register_colors_toggle_sidebar( $wp_customize ) {

	$customizer_settings = mura_general_settings();

    $wp_customize->add_section( 'mura_toggle_sidebar_colors', array(
		'title'    => esc_html__( 'Toggle Sidebar', 'mura' ),
		'priority' => 130,
		'panel' => 'mura_color_settings',
	) );

	// Add Setting
	$wp_customize->add_setting( 'mura_toggle_sidebar_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_toggle_sidebar_background', array(
      'section' => 'mura_toggle_sidebar_colors',
      'label'   => esc_html__( 'Sidebar Background', 'mura' ),
    ) ) );

	// Add Setting
	$wp_customize->add_setting( 'mura_toggle_sidebar_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_toggle_sidebar_color', array(
      'section' => 'mura_toggle_sidebar_colors',
      'label'   => esc_html__( 'Sidebar Text Color', 'mura' ),
    ) ) );

	// Add Setting
	$wp_customize->add_setting( 'mura_toggle_sidebar_border_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_toggle_sidebar_border_color', array(
      'section' => 'mura_toggle_sidebar_colors',
      'label'   => esc_html__( 'Sidebar Border Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_toggle_sidebar_logo_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_toggle_sidebar_logo_color', array(
      'section' => 'mura_toggle_sidebar_colors',
      'label'   => esc_html__( 'Sidebar Logo Color', 'mura' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'mura_toggle_sidebar_menu_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_toggle_sidebar_menu_color', array(
      'section' => 'mura_toggle_sidebar_colors',
      'label'   => esc_html__( 'Sidebar Menu Link Color', 'mura' ),
    ) ) );

}

add_action( 'customize_register', 'mura_customize_register_colors_toggle_sidebar' );