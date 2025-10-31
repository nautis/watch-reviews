<?php


/**
 * Footer Settings
 *
 * @package WordPress
 * @subpackage Mura
 */

function mura_customize_register_footer( $wp_customize ) {

	$customizer_settings = mura_general_settings();

	$wp_customize->add_section( 'mura_footer_settings', array(
		'title'    => esc_html__( 'Footer Settings', 'mura' ),
		'priority' => 130,
		'panel' => 'mura_theme_settings',
	) );

	$wp_customize->add_setting( 'mura_footer_layout', array(
		'default'           => 'columns',
		'sanitize_callback' => 'tfm_sanitize_select',
	) );

	$wp_customize->add_control( 'mura_footer_layout', array(
		'label'       => esc_html__( 'Footer Layout', 'mura' ),
		'section'     => 'mura_footer_settings',
		'type'        => 'select',
		'choices'     => array(
			'columns' => esc_html__( '1/2/3/4 Columns', 'mura' ),
			'columns-menu' => esc_html__( '1/2/3 Columns w/Menu', 'mura' ),
			'columns-70-30' => esc_html__( '70/30', 'mura' ),
			'columns-70-30-menu' => esc_html__( '70/30 w/Menu', 'mura' ),
		),
	) );

	// Footer text
	$wp_customize->add_setting( 'mura_footer_text', array(
		'default'           => '',
		'sanitize_callback' => 'tfm_sanitize_html',
	) );

	// Control Options
	$wp_customize->add_control( 'mura_footer_text', array(
		'label'       => esc_html__( 'Footer Text', 'mura' ),
		'section'     => 'mura_footer_settings',
		'type'        => 'textarea',
	) );

}

add_action( 'customize_register', 'mura_customize_register_footer' );