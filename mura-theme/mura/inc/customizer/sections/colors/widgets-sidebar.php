<?php


/**
 * Sidebar Widget Color Settings
 *
 * @package WordPress
 * @subpackage Mura
 */

function mura_customize_register_colors_widgets_sidebar( $wp_customize ) {

	$customizer_settings = mura_general_settings();

	$wp_customize->add_section( 'mura_sidebar_widget_colors', array(
		'title'    => esc_html__( 'Widgets (Sidebar)', 'mura' ),
		'priority' => 130,
		'panel' => 'mura_color_settings',
	) );

	// Add Setting
	$wp_customize->add_setting( 'mura_widget_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_widget_background', array(
      'section' => 'mura_sidebar_widget_colors',
      'label'   => esc_html__( 'Widget Background Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_widget_title_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_widget_title_color', array(
      'section' => 'mura_sidebar_widget_colors',
      'label'   => esc_html__( 'Widget Title Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_widget_subtitle_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_widget_subtitle_color', array(
      'section' => 'mura_sidebar_widget_colors',
      'label'   => esc_html__( 'Widget Subtitle Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_widget_font_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_widget_font_color', array(
      'section' => 'mura_sidebar_widget_colors',
      'label'   => esc_html__( 'Widget Font Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_widget_link_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_widget_link_color', array(
      'section' => 'mura_sidebar_widget_colors',
      'label'   => esc_html__( 'Widget Link Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_widget_child_link_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_widget_child_link_color', array(
      'section' => 'mura_sidebar_widget_colors',
      'label'   => esc_html__( 'Widget Child Link Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_widget_meta_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_widget_meta_color', array(
      'section' => 'mura_sidebar_widget_colors',
      'label'   => esc_html__( 'Widget Meta Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_widget_meta_link_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_widget_meta_link_color', array(
      'section' => 'mura_sidebar_widget_colors',
      'label'   => esc_html__( 'Widget Meta Link Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_widget_button_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_widget_button_background', array(
      'section' => 'mura_sidebar_widget_colors',
      'label'   => esc_html__( 'Widget Button Color', 'mura' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'mura_widget_button_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_widget_button_color', array(
      'section' => 'mura_sidebar_widget_colors',
      'label'   => esc_html__( 'Widget Button Text Color', 'mura' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'mura_widget_tag_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_widget_tag_background', array(
      'section' => 'mura_sidebar_widget_colors',
      'label'   => esc_html__( 'Widget Tag Color', 'mura' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'mura_widget_tag_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_widget_tag_color', array(
      'section' => 'mura_sidebar_widget_colors',
      'label'   => esc_html__( 'Widget Tag Text Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_widget_border_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_widget_border_color', array(
      'section' => 'mura_sidebar_widget_colors',
      'label'   => esc_html__( 'Widget Line Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_widget_misc_elements', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_widget_misc_elements', array(
      'section' => 'mura_sidebar_widget_colors',
      'label'   => esc_html__( 'Widget Misc. Elements', 'mura' ),
    ) ) );

}

add_action( 'customize_register', 'mura_customize_register_colors_widgets_sidebar' );