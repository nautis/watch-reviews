<?php


/**
 * General Settings
 *
 * @package WordPress
 * @subpackage Mura
 */


function mura_customize_register_general( $wp_customize ) {

	$customizer_settings = mura_general_settings();

	// ========================================================
	// General Theme Settings
	// ========================================================

	$wp_customize->add_section( 'mura_general_settings', array(
		'title'    => esc_html__( 'General Settings', 'mura' ),
		'priority' => 130,
		'panel' => 'mura_theme_settings',
	) );

	//  Theme width

	$wp_customize->add_setting( 'mura_site_width', array(
		'default'           => $customizer_settings['site_width'],
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 'mura_site_width', array(
		'label'       => esc_html__( 'Site Width', 'mura'),
		'description' => esc_html__( 'Default:', 'mura' ) . ' ' . $customizer_settings['site_width'],
		'section'     => 'mura_general_settings',
		'type'        => 'number',
	) );

	//  Sidebar width

	$wp_customize->add_setting( 'mura_sidebar_width', array(
		'default'           => $customizer_settings['sidebar_width'],
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 'mura_sidebar_width', array(
		'label'       => esc_html__( 'Sidebar Width', 'mura' ),
		'description' => esc_html__( 'Default:', 'mura' ) . ' ' . $customizer_settings['sidebar_width'],
		'section'     => 'mura_general_settings',
		'type'        => 'number',
		'input_attrs' => array(
		        'min'   => 240,
		        'max' => 600,
		    ),
	) );

	//  Single content max width

	$wp_customize->add_setting( 'mura_content_max_width', array(
		'default'           => $customizer_settings['content_max_width'],
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 'mura_content_max_width', array(
		'label'       => esc_html__( 'Content Width', 'mura' ),
		'description' => esc_html__( 'Default:', 'mura' ) . ' ' . $customizer_settings['content_max_width'],
		'section'     => 'mura_general_settings',
		'type'        => 'number',
		'input_attrs' => array(
		        'max' => $customizer_settings['site_width'],
		    ),
	) );

	$wp_customize->add_setting( 'mura_thumbnail_border_radius', array(
		'default'           => $customizer_settings['thumbnail_border_radius'],
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 'mura_thumbnail_border_radius', array(
		'label'       => esc_html__( 'Post Thumbnail Border Radius', 'mura' ),
		'description' => esc_html__( 'Default:', 'mura' ) . ' ' . $customizer_settings['thumbnail_border_radius'],
		'section'     => 'mura_general_settings',
		'type'        => 'number',
		'input_attrs' => array(
		        'min'   => 0,
		        'step' => 1,
		    ),
	) );

	$wp_customize->add_setting( 'mura_input_border_radius', array(
		'default'           => $customizer_settings['input_border_radius'],
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 'mura_input_border_radius', array(
		'label'       => esc_html__( 'Input Field Border Radius', 'mura' ),
		'description' => esc_html__( 'Default:', 'mura' ) . ' ' . $customizer_settings['input_border_radius'],
		'section'     => 'mura_general_settings',
		'type'        => 'number',
		'input_attrs' => array(
		        'min'   => 0,
		        'step' => 1,
		    ),
	) );

	$wp_customize->add_setting( 'mura_button_border_radius', array(
		'default'           => $customizer_settings['button_border_radius'],
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 'mura_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius', 'mura' ),
		'description' => esc_html__( 'Default:', 'mura' ) . ' ' . $customizer_settings['button_border_radius'],
		'section'     => 'mura_general_settings',
		'type'        => 'number',
		'input_attrs' => array(
		        'min'   => 0,
		        'step' => 1,
		    ),
	) );

	$wp_customize->add_setting( 'mura_archive_cat_slug_num', array(
		'default'           => '2',
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 'mura_archive_cat_slug_num', array(
		'label'       => esc_html__( 'Number of Category Tags In Archive displays', 'mura' ),
		'section'     => 'mura_general_settings',
		'type'        => 'number',
		'input_attrs' => array(
	        'min'   => 1,
	        'max'   => 999,
	    ),
	) );

	$wp_customize->add_setting( 'mura_excerpt_length', array(
		'default'           => '30',
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 'mura_excerpt_length', array(
		'label'       => esc_html__( 'Excerpt Length', 'mura' ),
		'section'     => 'mura_general_settings',
		'type'        => 'number',
		'input_attrs' => array(
		        'min'   => 0,
		    ),
	) );

	// Toggle primary menu in sidebar (desktop)
	$wp_customize->add_setting( 'mura_sidebar_primary_nav', array(
		'default'           => false,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_sidebar_primary_nav', array(
		'label'       => esc_html__( 'Show Primary Nav in Toggle Sidebar on Desktop', 'mura' ),
		'section'     => 'mura_general_settings',
		'type'        => 'checkbox',
	) );

	// Archive lebel
	$wp_customize->add_setting( 'mura_remove_archive_title_label', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_remove_archive_title_label', array(
		'label'       => esc_html__( 'Remove Archive Title Label', 'mura' ),
		'section'     => 'mura_general_settings',
		'type'        => 'checkbox',
	) );

	$wp_customize->add_setting('mura_sidebar_logo_upload', array(
		'default'           => '',
		'sanitize_callback' => 'tfm_sanitize_image',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mura_sidebar_logo_upload', array(
               'label'      => esc_html__( 'Toggle Sidebar Logo', 'mura' ),
               'section'    => 'title_tagline',
               'priority' => 100,
           )
       )
   );

	$wp_customize->add_setting('mura_mobile_logo_upload', array(
		'default'           => '',
		'sanitize_callback' => 'tfm_sanitize_image',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mura_mobile_logo_upload', array(
               'label'      => esc_html__( 'Mobile Logo', 'mura' ),
               'section'    => 'title_tagline',
               'priority' => 100,
           )
       )
   );

	// Static sisebar sticky
	$wp_customize->add_setting( 'mura_static_sidebar_sticky', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_static_sidebar_sticky', array(
		'label'       => esc_html__( 'Make Static Sidebar Sticky', 'mura' ),
		'section'     => 'mura_general_settings',
		'type'        => 'checkbox',
	) );

	// Toggle post format icons
	$wp_customize->add_setting( 'mura_post_format_icons', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_post_format_icons', array(
		'label'       => esc_html__( 'Show Post Format Icons', 'mura' ),
		'section'     => 'mura_general_settings',
		'type'        => 'checkbox',
	) );

	// Toggle Gto Top
	$wp_customize->add_setting( 'mura_goto_top', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_goto_top', array(
		'label'       => esc_html__( 'Show Back To Top On Scroll', 'mura' ),
		'section'     => 'mura_general_settings',
		'type'        => 'checkbox',
	) );

	// Pagination show Numbers
	$wp_customize->add_setting( 'mura_pagination_numbers', array(
		'default'           => false,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_pagination_numbers', array(
		'label'       => esc_html__( 'Show Pagination Numbers', 'mura' ),
		'section'     => 'mura_general_settings',
		'type'        => 'checkbox',
	) );

	// Pagination show Numbers
	$wp_customize->add_setting( 'mura_pagination_prev_next', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_pagination_prev_next', array(
		'label'       => esc_html__( 'Show Pagination Prev/Next', 'mura' ),
		'section'     => 'mura_general_settings',
		'type'        => 'checkbox',
	) );

}

add_action( 'customize_register', 'mura_customize_register_general' );