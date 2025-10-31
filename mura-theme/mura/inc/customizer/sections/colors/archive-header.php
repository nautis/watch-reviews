<?php


/**
 * Archive Header Color Settings
 *
 * @package WordPress
 * @subpackage Mura
 */

function mura_customize_register_colors_archive_header( $wp_customize ) {

	$customizer_settings = mura_general_settings();

	$wp_customize->add_section( 'mura_archive_header_colors', array(
		'title'    => esc_html__( 'Archive/Category Header', 'mura' ),
		'priority' => 130,
		'panel' => 'mura_color_settings',
	) );

	// Add Setting
	$wp_customize->add_setting( 'mura_archive_header_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_archive_header_background', array(
      'section' => 'mura_archive_header_colors',
      'label'   => esc_html__( 'Header Background', 'mura' ),
    ) ) );

	// Add Setting
	$wp_customize->add_setting( 'mura_archive_title_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_archive_title_color', array(
      'section' => 'mura_archive_header_colors',
      'label'   => esc_html__( 'Title Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_archive_description_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_archive_description_color', array(
      'section' => 'mura_archive_header_colors',
      'label'   => esc_html__( 'Description Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_archive_meta_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_archive_meta_color', array(
      'section' => 'mura_archive_header_colors',
      'label'   => esc_html__( 'Meta Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_archive_link_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_archive_link_color', array(
      'section' => 'mura_archive_header_colors',
      'label'   => esc_html__( 'Link Color', 'mura' ),
    ) ) );

}

add_action( 'customize_register', 'mura_customize_register_colors_archive_header' );