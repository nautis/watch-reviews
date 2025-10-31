<?php


/**
 * Primary Menu Color Settings
 *
 * @package WordPress
 * @subpackage Mura
 */

function mura_customize_register_colors_primary_menu( $wp_customize ) {

	$customizer_settings = mura_general_settings();

    $wp_customize->add_section( 'mura_primary_nav_colors', array(
		'title'    => esc_html__( 'Primary Menu Colors', 'mura' ),
		'priority' => 130,
		'panel' => 'mura_color_settings',
	) );

    // Add Setting
	$wp_customize->add_setting( 'mura_primary_nav_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_primary_nav_background', array(
      'section' => 'mura_primary_nav_colors',
      'label'   => esc_html__( 'Primary Menu Background', 'mura' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'mura_primary_nav_link_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_primary_nav_link_color', array(
      'section' => 'mura_primary_nav_colors',
      'label'   => esc_html__( 'Primary Menu Link Color', 'mura' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'mura_primary_nav_link_hover_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_primary_nav_link_hover_color', array(
      'section' => 'mura_primary_nav_colors',
      'label'   => esc_html__( 'Primary Menu Link Hover Color', 'mura' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'mura_primary_nav_submenu_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_primary_nav_submenu_background', array(
      'section' => 'mura_primary_nav_colors',
      'label'   => esc_html__( 'Primary Menu Sub-Menu Background', 'mura' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'mura_primary_nav_submenu_link_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_primary_nav_submenu_link_color', array(
      'section' => 'mura_primary_nav_colors',
      'label'   => esc_html__( 'Primary Menu Sub-Menu Link Color', 'mura' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'mura_primary_nav_submenu_link_hover_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_primary_nav_submenu_link_hover_color', array(
      'section' => 'mura_primary_nav_colors',
      'label'   => esc_html__( 'Primary Menu Sub-Menu Link Hover Color', 'mura' ),
    ) ) );

      // Add Setting
	$wp_customize->add_setting( 'mura_primary_nav_submenu_border_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_primary_nav_submenu_border_color', array(
      'section' => 'mura_primary_nav_colors',
      'label'   => esc_html__( 'Primary Menu Sub-Menu Line Color', 'mura' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'mura_primary_nav_sidebar_link_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_primary_nav_sidebar_link_color', array(
      'section' => 'mura_primary_nav_colors',
      'label'   => esc_html__( 'Primary Nav (Sidebar) Link Color', 'mura' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'mura_primary_nav_sidebar_submenu_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_primary_nav_sidebar_submenu_background', array(
      'section' => 'mura_primary_nav_colors',
      'label'   => esc_html__( 'Primary Nav (Sidebar) Sub Menu Background', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_primary_nav_sidebar_submenu_link_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_primary_nav_sidebar_submenu_link_color', array(
      'section' => 'mura_primary_nav_colors',
      'label'   => esc_html__( 'Primary Nav (Sidebar) Sub Menu Link Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_primary_nav_sidebar_submenu_sub_link_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_primary_nav_sidebar_submenu_sub_link_color', array(
      'section' => 'mura_primary_nav_colors',
      'label'   => esc_html__( 'Primary Nav (Sidebar) Sub Menu Level 3 Link Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_primary_nav_sidebar_arrow_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_primary_nav_sidebar_arrow_color', array(
      'section' => 'mura_primary_nav_colors',
      'label'   => esc_html__( 'Primary Nav (Sidebar) Arrow Color', 'mura' ),
    ) ) );

}

add_action( 'customize_register', 'mura_customize_register_colors_primary_menu' );