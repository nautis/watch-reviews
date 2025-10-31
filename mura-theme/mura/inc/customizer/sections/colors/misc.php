<?php


/**
 * Misc. Color Settings
 *
 * @package WordPress
 * @subpackage Mura
 */

function mura_customize_register_colors_misc( $wp_customize ) {

	$customizer_settings = mura_general_settings();

	$wp_customize->add_section( 'mura_misc_colors', array(
		'title'    => esc_html__( 'Misc. Colors', 'mura' ),
		'priority' => 130,
		'panel' => 'mura_color_settings',
	) );

	// Add Setting
	$wp_customize->add_setting( 'mura_body_fade_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_body_fade_background', array(
      'section' => 'mura_misc_colors',
      'label'   => esc_html__( 'Toggle Menu/Search Body Fade Color', 'mura' ),
    ) ) );
		
	// Add Setting
	$wp_customize->add_setting( 'mura_pagination_prev_next_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_pagination_prev_next_background', array(
      'section' => 'mura_misc_colors',
      'label'   => esc_html__( 'Pagination Prev/Next Button Background', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_pagination_prev_next_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_pagination_prev_next_color', array(
      'section' => 'mura_misc_colors',
      'label'   => esc_html__( 'Pagination Prev/Next Text Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_menu_pill_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_menu_pill_background', array(
      'section' => 'mura_misc_colors',
      'label'   => esc_html__( 'Primary Menu Pill Background', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_menu_pill_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_menu_pill_color', array(
      'section' => 'mura_misc_colors',
      'label'   => esc_html__( 'Primary Menu Pill Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_meta_theme_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_meta_theme_color', array(
      'section' => 'mura_misc_colors',
      'label'   => esc_html__( 'Meta Theme Color', 'mura' ),
    ) ) );

	  // Add Setting
	$wp_customize->add_setting( 'mura_menu_sash_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_menu_sash_background', array(
      'section' => 'mura_misc_colors',
      'label'   => esc_html__( 'Menu Sash Background', 'mura' ),
    ) ) );

	  // Add Setting
	$wp_customize->add_setting( 'mura_menu_sash_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_menu_sash_color', array(
      'section' => 'mura_misc_colors',
      'label'   => esc_html__( 'Menu Sash Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_widget_highlight_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_widget_highlight_background', array(
      'section' => 'mura_misc_colors',
      'label'   => esc_html__( 'Highlight Widget Background', 'mura' ),
    ) ) );

    // Classes of highlight widgets
	$wp_customize->add_setting( 'mura_widget_highlight_classes', array(
		'default'           => '',
		'sanitize_callback' => 'tfm_sanitize_text',
	) );

	// Post IDs
	$wp_customize->add_control( 'mura_widget_highlight_classes', array(
		'label'       => esc_html__( 'Highlight Widget IDs', 'mura' ),
		'description' => esc_html__( 'Comma separated list of widget IDs. These are only required if using legacy widgets. Refer to the documentation for a detailed guide', 'mura' ),
		'section'     => 'mura_misc_colors',
		'type'        => 'text',
	) );

}

add_action( 'customize_register', 'mura_customize_register_colors_misc' );