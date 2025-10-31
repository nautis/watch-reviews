<?php


/**
 * Post Tag Color Settings
 *
 * @package WordPress
 * @subpackage Mura
 */

function mura_customize_register_colors_post_tags( $wp_customize ) {

	$customizer_settings = mura_general_settings();

	$wp_customize->add_section( 'mura_post_tag_colors', array(
		'title'    => esc_html__( 'Post Tags', 'mura' ),
		'priority' => 130,
		'panel' => 'mura_color_settings',
	) );

	 // Add Setting
	$wp_customize->add_setting( 'mura_post_tags_default_background', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_post_tags_default_background', array(
      'section' => 'mura_post_tag_colors',
      'label'   => esc_html__( 'Post Tags Default Background', 'mura' ),
    ) ) );

    // Add Setting
	$wp_customize->add_setting( 'mura_post_tags_default_font_color', array(
		'default'           => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Control Options
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mura_post_tags_default_font_color', array(
      'section' => 'mura_post_tag_colors',
      'label'   => esc_html__( 'Post Tags Default Font Color', 'mura' ),
    ) ) );

	// Optionally add a color setting for tags (default is true)

	if ( apply_filters( 'tfm_set_tag_colors', false ) ) :

		$tags = array_slice( get_tags(), 0, apply_filters( 'tfm_set_tag_colors_max_count', 50 ) );

		foreach ( $tags as $key => $value) {
			
			// Add Setting
			$wp_customize->add_setting( 'tag_slug_color_' . $value->slug . '', array(
				'default'           => '',
				'transport' => 'refresh',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			// Control Options
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tag_slug_color_' . $value->slug . '', array(
		      'section' => 'mura_post_tag_colors',
		      'label'   => esc_attr( $value->name ) . ' ' . esc_html__( 'Tag Color', 'mura' ),
		    ) ) );

		}

	endif;

}

add_action( 'customize_register', 'mura_customize_register_colors_post_tags' );