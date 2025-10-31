<?php


/**
 * Logo Settings
 *
 * @package WordPress
 * @subpackage Mura
 */

function mura_customize_register_logo( $wp_customize ) {

	$customizer_settings = mura_general_settings();

	$wp_customize->add_section( 'mura_logo_settings', array(
		'title'    => esc_html__( 'Logo/Site Title Settings', 'mura' ),
		'priority' => 130,
		'panel' => 'mura_theme_settings',
	) );

	// ========================================================
    // Info Header
    // ========================================================
    $wp_customize->add_setting('mura_general_logo_settings_header', array(
        'default'           => '',
        'sanitize_callback' => 'tfm_sanitize_text',
     
    ));
    $wp_customize->add_control(new tfm_Info_Custom_Control($wp_customize, 'mura_general_logo_settings_header', array(
        'description' => esc_html__( 'Upload and manage your logos in in Appearance > Customize > Site Identity', 'mura'),
        'settings'      => 'mura_general_logo_settings_header',
        'section'       => 'mura_logo_settings',
    )));

	// Logo Font Size
	$wp_customize->add_setting( 'mura_logo_font_size', array(
		'default'           => '40',
		'sanitize_callback' => 'absint',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_logo_font_size', array(
		'label'       => esc_html__( 'Site Title Font Size *px', 'mura' ),
		'section'     => 'mura_logo_settings',
		'type'        => 'number',
		'input_attrs' => array(
		        'min'   => 0,
		        'max' => 100,
		        'step' => 1,
		    ),
	) );

	// Logo Font Size (medium mobile)
	$wp_customize->add_setting( 'mura_logo_font_size_medium_mobile', array(
		'default'           => '32',
		'sanitize_callback' => 'absint',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_logo_font_size_medium_mobile', array(
		'label'       => esc_html__( 'Site Title (Large Mobile) Font Size *px', 'mura' ),
		'section'     => 'mura_logo_settings',
		'type'        => 'number',
		'input_attrs' => array(
		        'min'   => 0,
		        'max' => 100,
		        'step' => 1,
		    ),
	) );

	// Logo Font Size (medium mobile)
	$wp_customize->add_setting( 'mura_logo_font_size_small_mobile', array(
		'default'           => '26',
		'sanitize_callback' => 'absint',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_logo_font_size_small_mobile', array(
		'label'       => esc_html__( 'Site Title (Small Mobile) Font Size *px', 'mura' ),
		'section'     => 'mura_logo_settings',
		'type'        => 'number',
		'input_attrs' => array(
		        'min'   => 0,
		        'max' => 100,
		        'step' => 1,
		    ),
	) );

	// Logo Image Width (Desktop)
	$wp_customize->add_setting( 'mura_custom_logo_max_width', array(
		'default'           => '210',
		'sanitize_callback' => 'absint',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_custom_logo_max_width', array(
		'label'       => esc_html__( 'Custom Logo Max Width Desktop *px', 'mura' ),
		'section'     => 'mura_logo_settings',
		'type'        => 'number',
		'input_attrs' => array(
		        'min'   => 0,
		        'max' => apply_filters( 'mura_site_max_width', 1200 ),
		        'step' => 1,
		    ),
	) );

	// Logo Image Width (Large Mobile Breakpoint)
	$wp_customize->add_setting( 'mura_custom_logo_max_width_mobile', array(
		'default'           => '100',
		'sanitize_callback' => 'absint',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_custom_logo_max_width_mobile', array(
		'label'       => esc_html__( 'Custom Logo Max Width Large Mobile *px', 'mura' ),
		'section'     => 'mura_logo_settings',
		'type'        => 'number',
		'input_attrs' => array(
		        'min'   => 0,
		        'max' => 999,
		        'step' => 1,
		    ),
	) );

	// Logo Image Width (Small Mobile)
	$wp_customize->add_setting( 'mura_custom_logo_max_width_small', array(
		'default'           => '70',
		'sanitize_callback' => 'absint',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_custom_logo_max_width_small', array(
		'label'       => esc_html__( 'Custom Logo Max Width Small Mobile *px', 'mura' ),
		'section'     => 'mura_logo_settings',
		'type'        => 'number',
		'input_attrs' => array(
		        'min'   => 0,
		        'max' => 999,
		        'step' => 1,
		    ),
	) );

	/**
	Separator
	**/
	$wp_customize->add_setting('mura_logo_settings_separator', array(
		'default'           => '',
		'sanitize_callback' => 'esc_html',
	));
	$wp_customize->add_control(new Tfm_Separator_Custom_Control($wp_customize, 'mura_logo_settings_separator', array(
		'settings'		=> 'mura_logo_settings_separator',
		'section'  		=> 'mura_logo_settings',
	)));

	// ========================================================
    // Info Header
    // ========================================================
    $wp_customize->add_setting('mura_sidebar_logo_settings_header', array(
        'default'           => '',
        'sanitize_callback' => 'tfm_sanitize_text',
     
    ));
    $wp_customize->add_control(new tfm_Info_Custom_Control($wp_customize, 'mura_sidebar_logo_settings_header', array(
        'label'         => esc_html__('Toggle Sidebar', 'mura'),
        'settings'      => 'mura_sidebar_logo_settings_header',
        'section'       => 'mura_logo_settings',
    )));

	// Logo Font Size Sidebar
	$wp_customize->add_setting( 'mura_logo_font_size_sidebar', array(
		'default'           => '40',
		'sanitize_callback' => 'absint',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_logo_font_size_sidebar', array(
		'label'       => esc_html__( 'Site Title Font Size *px', 'mura' ),
		'section'     => 'mura_logo_settings',
		'type'        => 'number',
		'input_attrs' => array(
		        'min'   => 0,
		        'max' => 100,
		        'step' => 1,
		    ),
	) );

	// Logo Image Width (Desktop)
	$wp_customize->add_setting( 'mura_sidebar_custom_logo_max_width', array(
		'default'           => '150',
		'sanitize_callback' => 'absint',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_sidebar_custom_logo_max_width', array(
		'label'       => esc_html__( 'Custom Logo Max Width *px', 'mura' ),
		'section'     => 'mura_logo_settings',
		'type'        => 'number',
		'input_attrs' => array(
		        'min'   => 0,
		        'max' => 250,
		        'step' => 1,
		    ),
	) );

	// Toggle Logo
	$wp_customize->add_setting( 'mura_sidebar_logo', array(
		'default'           => false,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_sidebar_logo', array(
		'label'       => esc_html__( 'Display Sidebar Logo/Site Title', 'mura' ),
		'section'     => 'mura_logo_settings',
		'type'        => 'checkbox',
	) );

}

add_action( 'customize_register', 'mura_customize_register_logo' );