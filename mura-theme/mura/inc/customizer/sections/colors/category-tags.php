<?php


/**
 * Category Tag Color Settings
 *
 * @package WordPress
 * @subpackage Mura
 */

function mura_customize_register_colors_category_tags( $wp_customize ) {

	$customizer_settings = mura_general_settings();

	$wp_customize->add_section( 'mura_category_tag_colors', array(
		'title'    => esc_html__( 'Category Tags', 'mura' ),
		'priority' => 130,
		'panel' => 'mura_color_settings',
	) );

	// Add Setting
		$wp_customize->add_setting( 'category_slug_color', array(
			'default'           => '',
			'transport' => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		) );

		// Control Options
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_slug_color', array(
	      'section' => 'mura_category_tag_colors',
	      'label'   => esc_html__( 'Default Tag Color', 'mura' ),
	    ) ) );

		// Optionally add a color setting for category tags (default is true)

		if ( apply_filters( 'tfm_set_category_colors', true ) ) :

		    $categories = array_slice( get_categories('type=post'), 0, apply_filters( 'tfm_set_category_colors_max_count', 50 ) );

			foreach ( $categories as $key => $value) {
				
				// Add Setting
				$wp_customize->add_setting( 'category_slug_color_' . $value->slug . '', array(
					'default'           => '',
					'transport' => 'refresh',
					'sanitize_callback' => 'sanitize_hex_color',
				) );

				// Control Options
				$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_slug_color_' . $value->slug . '', array(
			      'section' => 'mura_category_tag_colors',
			      'label'   => esc_attr( $value->name ) . ' ' . esc_html__( 'Tag Color', 'mura' ),
			    ) ) );

			}

	   endif;

}

add_action( 'customize_register', 'mura_customize_register_colors_category_tags' );