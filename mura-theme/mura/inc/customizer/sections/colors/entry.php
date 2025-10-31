<?php


/**
 * Post Color Settings
 *
 * @package WordPress
 * @subpackage Mura
 */

function mura_customize_register_colors_posts( $wp_customize ) {

	$customizer_settings = mura_general_settings();

	$wp_customize->add_section( 'mura_entry_colors', array(
		'title'    => esc_html__( 'Entry Colors', 'mura' ),
		'priority' => 130,
		'panel' => 'mura_color_settings',
	) );

	// Add Setting
	$wp_customize->add_setting( 'mura_archive_post_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_archive_post_background', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Post Background', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_entry_border_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_entry_border_color', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Border Color', 'mura' ),
    ) ) );
	
    // Add Setting
	$wp_customize->add_setting( 'mura_entry_title_link_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_entry_title_link_color', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Entry Title Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_entry_meta_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_entry_meta_color', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Entry Meta Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_entry_meta_link_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_entry_meta_link_color', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Entry Meta Link Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_entry_meta_icon_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_entry_meta_icon_color', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Entry Meta Icon Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_avatar_border_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_avatar_border_color', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Avatar Border Color', 'mura' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'mura_post_excerpt_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_post_excerpt_color', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Excerpt Color', 'mura' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'mura_entry_meta_border_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_entry_meta_border_color', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Entry Meta Border Color', 'mura' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'mura_continue_reading_button_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_continue_reading_button_background', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Button Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_continue_reading_button_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_continue_reading_button_color', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Button Text Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_continue_reading_button_hover_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_continue_reading_button_hover_background', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Button Hover Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_continue_reading_button_hover_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_continue_reading_button_hover_color', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Button Hover Text Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_post_format_icon_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_post_format_icon_color', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Post Format & Sticky Icon Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_post_format_icon_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_post_format_icon_background', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Post Format & Sticky Icon Background', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_post_format_video_icon_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_post_format_video_icon_background', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Video Icon Background', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_post_format_audio_icon_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_post_format_audio_icon_background', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Audio Icon Background', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_post_format_gallery_icon_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_post_format_gallery_icon_background', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Gallery Icon Background', 'mura' ),
    ) ) );


    /**
	Separator
	**/
	$wp_customize->add_setting('mura_color_settings_single_separator', array(
		'default'           => '',
		'sanitize_callback' => 'esc_html',
	));
	$wp_customize->add_control(new Tfm_Separator_Custom_Control($wp_customize, 'mura_color_settings_single_separator', array(
		'settings'		=> 'mura_color_settings_single_separator',
		'section'  		=> 'mura_entry_colors',
	)));

    // Add Setting
	$wp_customize->add_setting( 'mura_single_background_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_single_background_color', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Single Body Background', 'mura' ),
    ) ) );


    // Add Setting
	$wp_customize->add_setting( 'mura_single_entry_title_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_single_entry_title_color', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Single Title Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_single_entry_meta_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_single_entry_meta_color', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Single Entry Meta Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_single_entry_meta_link_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_single_entry_meta_link_color', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Single Entry Meta Link Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_single_avatar_border_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_single_avatar_border_color', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Single Avatar Border Color', 'mura' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'mura_single_entry_font_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_single_entry_font_color', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Single Font Color', 'mura' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'mura_single_entry_excerpt_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_single_entry_excerpt_color', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Single Excerpt Color', 'mura' ),
    ) ) );

    // ========================================================
	// Single hero seperator
	// ========================================================
	$wp_customize->add_setting('mura_color_settings_single_hero_separator', array(
		'default'           => '',
		'sanitize_callback' => 'esc_html',
	));
	$wp_customize->add_control(new Tfm_Separator_Custom_Control($wp_customize, 'mura_color_settings_single_hero_separator', array(
		'settings'		=> 'mura_color_settings_single_hero_separator',
		'section'  		=> 'mura_entry_colors',
	)));

	// Add Setting
	$wp_customize->add_setting( 'mura_single_hero_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_single_hero_background', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Single Hero Background', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_single_hero_entry_title_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_single_hero_entry_title_color', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Single Hero Title Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_single_hero_entry_meta_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_single_hero_entry_meta_color', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Single Hero Entry Meta Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_single_hero_entry_meta_link_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_single_hero_entry_meta_link_color', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Single Hero Entry Meta Link Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_single_hero_avatar_border_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_single_hero_avatar_border_color', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Single Hero Avatar Border Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_single_hero_excerpt_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_single_hero_excerpt_color', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Single Hero Excerpt Color', 'mura' ),
    ) ) );


    // ========================================================
	// Info header separator
	// ========================================================
	$wp_customize->add_setting('mura_color_settings_cover_separator', array(
		'default'           => '',
		'sanitize_callback' => 'esc_html',
	));
	$wp_customize->add_control(new Tfm_Separator_Custom_Control($wp_customize, 'mura_color_settings_cover_separator', array(
		'settings'		=> 'mura_color_settings_cover_separator',
		'section'  		=> 'mura_entry_colors',
	)));

	// Info header
	$wp_customize->add_setting('mura_color_settings_cover_info_header', array(
        'default'           => '',
        'sanitize_callback' => 'tfm_sanitize_text',
     
    ));
    $wp_customize->add_control(new Tfm_Info_Custom_Control($wp_customize, 'mura_color_settings_cover_info_header', array(
        'label'         => esc_html__('Cover/Image Format', 'mura'),
        'description' => esc_html__('Cover settings apply to archive, blog and single posts', 'mura'),
        'settings'      => 'mura_color_settings_cover_info_header',
        'section'       => 'mura_entry_colors',
    )));
    // ========================================================
	// End
	// ========================================================

	 // Add Setting
	$wp_customize->add_setting( 'mura_cover_format_primary_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_cover_format_primary_color', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Primary Text Color', 'mura' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'mura_cover_format_meta_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_cover_format_meta_color', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Entry Meta Color', 'mura' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'mura_cover_format_meta_icon_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_cover_format_meta_icon_color', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Entry Meta Icon Color', 'mura' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'mura_cover_format_excerpt_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_cover_format_excerpt_color', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Excerpt Color', 'mura' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'mura_cover_format_button_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_cover_format_button_background', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Button Color', 'mura' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'mura_cover_format_button_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_cover_format_button_color', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Button Text Color', 'mura' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'mura_cover_format_button_hover_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_cover_format_button_hover_background', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Button Hover Color', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_cover_format_button_hover_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_cover_format_button_hover_color', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Button Hover Text Color', 'mura' ),
    ) ) );

     // Add Setting
	$wp_customize->add_setting( 'mura_cover_format_border_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_cover_format_border_color', array(
      'section' => 'mura_entry_colors',
      'label'   => esc_html__( 'Border Color', 'mura' ),
    ) ) );

}

add_action( 'customize_register', 'mura_customize_register_colors_posts' );