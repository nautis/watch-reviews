<?php


/**
 * Footer Color Settings
 *
 * @package WordPress
 * @subpackage Mura
 */

function mura_customize_register_colors_footer( $wp_customize ) {

	$customizer_settings = mura_general_settings();

	$wp_customize->add_section( 'mura_footer_colors', array(
		'title'    => esc_html__( 'Footer Colors', 'mura' ),
		'priority' => 130,
		'panel' => 'mura_color_settings',
	) );

    // Add Setting
	$wp_customize->add_setting( 'mura_footer_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_footer_background', array(
      'section' => 'mura_footer_colors',
      'label'   => esc_html__( 'Footer Background Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_footer_font_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_footer_font_color', array(
      'section' => 'mura_footer_colors',
      'label'   => esc_html__( 'Footer Font Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_footer_link_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_footer_link_color', array(
      'section' => 'mura_footer_colors',
      'label'   => esc_html__( 'Footer Link Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_footer_border_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_footer_border_color', array(
      'section' => 'mura_footer_colors',
      'label'   => esc_html__( 'Footer Line Color', 'mura' ),
    ) ) );

}

add_action( 'customize_register', 'mura_customize_register_colors_footer' );