<?php


/**
 * Mura: Woocommerce Customizer Options
 *
 * @package WordPress
 * @subpackage Mura
 * @since 1.0
 * @version 1.0
 */


function mura_woo_customize_register( $wp_customize ) {

	// ========================================================
	// Add options to Woo Panels
	// ========================================================

	$wp_customize->add_setting( 'mura_woo_shop_sidebar', array(
		'default'           => true,
		'capability' => 'manage_woocommerce',
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_woo_shop_sidebar', array(
		'label'       => esc_html__( 'Display Sidebar in Shop', 'mura' ),
		'section'     => 'woocommerce_product_catalog',
		'type'        => 'checkbox',
	) );

	$wp_customize->add_setting( 'mura_woo_checkout_sidebar', array(
		'default'           => false,
		'capability' => 'manage_woocommerce',
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_woo_checkout_sidebar', array(
		'label'       => esc_html__( 'Display Sidebar in Checkout', 'mura' ),
		'section'     => 'woocommerce_checkout',
		'type'        => 'checkbox',
	) );

	// ========================================================
	// Product category slugs
	// ========================================================

	$wp_customize->add_section( 'mura_woo_category_tag_colors', array(
		'title'    => esc_html__( 'Shop Category Tags', 'mura' ),
		'priority' => 150,
		'panel' => 'mura_color_settings',
	) );

	$product_categories = get_categories( array( 'taxonomy' => 'product_cat') );

	foreach ( $product_categories as $key => $value) {
		
		// Add Setting
		$wp_customize->add_setting( 'woo_category_slug_color_' . $value->slug . '', array(
			'default'           => '',
			'transport' => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		) );

		// Control Options
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_category_slug_color_' . $value->slug . '', array(
	      'section' => 'mura_woo_category_tag_colors',
	      'label'   => esc_attr( $value->name ) . ' ' . esc_html__( 'Shop Tag Color', 'mura' ),
	    ) ) );

	}

	// ========================================================
	// Cart icon toggle in theme header panel
	// ========================================================

	// Enable toggle menu
	$wp_customize->add_setting( 'mura_toggle_cart', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_toggle_cart', array(
		'label'       => esc_html__( 'Show Cart Icon on Desktop', 'mura' ),
		'section'     => 'mura_header_settings',
		'type'        => 'checkbox',
	) );

	// Enable toggle menu
	$wp_customize->add_setting( 'mura_toggle_cart_mobile', array(
		'default'           => true,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_toggle_cart_mobile', array(
		'label'       => esc_html__( 'Show Cart Icon on Mobile', 'mura' ),
		'section'     => 'mura_header_settings',
		'type'        => 'checkbox',
	) );

	// Enable toggle menu
	$wp_customize->add_setting( 'mura_show_cart_qty_empty', array(
		'default'           => false,
		'sanitize_callback' => 'tfm_sanitize_checkbox',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_show_cart_qty_empty', array(
		'label'       => esc_html__( 'Show cart quantity when empty', 'mura' ),
		'section'     => 'mura_header_settings',
		'type'        => 'checkbox',
	) );

}

add_action( 'customize_register', 'mura_woo_customize_register' );