<?php


/**
 * Theme Color Settings
 *
 * @package WordPress
 * @subpackage Mura
 */

function mura_customize_register_colors_theme( $wp_customize ) {

	$customizer_settings = mura_general_settings();

	$wp_customize->add_section( 'mura_theme_colors', array(
		'title'    => esc_html__( 'Theme Color Scheme', 'mura' ),
		'priority' => 130,
		'panel' => 'mura_color_settings',
	) );

	// Theme colour scheme
	$wp_customize->add_setting( 'mura_primary_theme_color', array(
		'default'           => $customizer_settings['primary_theme_color'],
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_primary_theme_color', array(
      'section' => 'mura_theme_colors',
      'label'   => esc_html__( 'Primary Theme Color', 'mura' ),
    ) ) );


	if ( array_key_exists('secondary_theme_color', $customizer_settings)) {

	    $wp_customize->add_setting( 'mura_secondary_theme_color', array(
			'default'           => $customizer_settings['secondary_theme_color'],
			'transport' => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_secondary_theme_color', array(
	      'section' => 'mura_theme_colors',
	      'label'   => esc_html__( 'Secondary Theme Color', 'mura' ),
	    ) ) );

	}

	if ( array_key_exists('tertiary_theme_color', $customizer_settings)) {
		
	    $wp_customize->add_setting( 'mura_tertiary_theme_color', array(
			'default'           => $customizer_settings['tertiary_theme_color'],
			'transport' => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_tertiary_theme_color', array(
	      'section' => 'mura_theme_colors',
	      'label'   => esc_html__( 'Tertiary Theme Color', 'mura' ),
	    ) ) );

	}

	if ( array_key_exists('quaternary_theme_color', $customizer_settings)) {
		
	    $wp_customize->add_setting( 'mura_quaternary_theme_color', array(
			'default'           => $customizer_settings['quaternary_theme_color'],
			'transport' => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_quaternary_theme_color', array(
	      'section' => 'mura_theme_colors',
	      'label'   => esc_html__( 'Quaternary Theme Color', 'mura' ),
	    ) ) );

	}

	if ( array_key_exists('quinary_theme_color', $customizer_settings)) {
		
	    $wp_customize->add_setting( 'mura_quinary_theme_color', array(
			'default'           => $customizer_settings['quinary_theme_color'],
			'transport' => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_quinary_theme_color', array(
	      'section' => 'mura_theme_colors',
	      'label'   => esc_html__( 'Quinary Theme Color', 'mura' ),
	    ) ) );

	}


	// Add Setting
	$wp_customize->add_setting( 'mura_very_dark_grey', array(
		'default'           => '#131315',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_very_dark_grey', array(
      'section' => 'mura_theme_colors',
      'label'   => esc_html__( 'Very Dark Grey', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_dark_grey', array(
		'default'           => '#45464b',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_dark_grey', array(
      'section' => 'mura_theme_colors',
      'label'   => esc_html__( 'Dark Grey', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_medium_grey', array(
		'default'           => '#94979e',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_medium_grey', array(
      'section' => 'mura_theme_colors',
      'label'   => esc_html__( 'Medium Grey', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_light_grey', array(
		'default'           => '#cfd0d2',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_light_grey', array(
      'section' => 'mura_theme_colors',
      'label'   => esc_html__( 'Light Grey', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_very_light_grey', array(
		'default'           => '#f2f2f3',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_very_light_grey', array(
      'section' => 'mura_theme_colors',
      'label'   => esc_html__( 'Very Light Grey', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_off_white', array(
		'default'           => '#f9f9f9',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_off_white', array(
      'section' => 'mura_theme_colors',
      'label'   => esc_html__( 'Off white', 'mura' ),
    ) ) );

    // ========================================================
	// Global Font and Link Colors
	// ========================================================

	 // Add Setting
	$wp_customize->add_setting( 'mura_body_font_color', array(
		'default'           => '#131315',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_body_font_color', array(
      'section' => 'mura_theme_colors',
      'label'   => esc_html__( 'Body Font Color', 'mura' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'mura_link_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_link_color', array(
      'section' => 'mura_theme_colors',
      'label'   => esc_html__( 'Body Link Color', 'mura' ),
      'description' => esc_html__( 'Inherits Primary Theme Color If No Color selected', 'mura'),
    ) ) );

    $wp_customize->add_setting( 'mura_link_hover_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_link_hover_color', array(
      'section' => 'mura_theme_colors',
      'label'   => esc_html__( 'Body Link Hover Color', 'mura' ),
      'description' => esc_html__( 'Inherits Secondary Theme Color If No Color selected', 'mura'),
    ) ) );

	$wp_customize->add_setting( 'mura_button_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_button_background', array(
      'section' => 'mura_theme_colors',
      'label'   => esc_html__( 'Button Background', 'mura' ),
      'description' => esc_html__( 'Inherits Primary Theme Color If No Color selected', 'mura'),
    ) ) );

	$wp_customize->add_setting( 'mura_button_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_button_color', array(
      'section' => 'mura_theme_colors',
      'label'   => esc_html__( 'Button Text Color', 'mura' ),
    ) ) );

}

add_action( 'customize_register', 'mura_customize_register_colors_theme' );