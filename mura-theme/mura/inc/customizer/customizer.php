<?php


/**
 * Mura: Customizer
 *
 * @package WordPress
 * @subpackage Mura
 * @since 1.0
 * @version 1.1
 */

require( get_template_directory() . '/inc/customizer/custom_controls.php' );

// Load the sections
require( get_template_directory() . '/inc/customizer/sections/customizer-general.php' );
require( get_template_directory() . '/inc/customizer/sections/customizer-homepage.php' );
require( get_template_directory() . '/inc/customizer/sections/customizer-archive.php' );
require( get_template_directory() . '/inc/customizer/sections/customizer-single.php' );
require( get_template_directory() . '/inc/customizer/sections/customizer-page.php' );
require( get_template_directory() . '/inc/customizer/sections/customizer-header.php' );
require( get_template_directory() . '/inc/customizer/sections/customizer-logo.php' );
require( get_template_directory() . '/inc/customizer/sections/customizer-footer.php' );
require( get_template_directory() . '/inc/customizer/sections/customizer-image-format.php' );

// Load theme options panel
function mura_customize_register( $wp_customize ) {

	$wp_customize->add_panel( 'mura_theme_settings', array(
	  'title' => esc_html__( 'Mura: Theme Settings', 'mura' ),
	  'description' => esc_html__( 'Customize theme settings', 'mura'),
	  'priority' => 140,
	  ) );

}

add_action( 'customize_register', 'mura_customize_register' );


// Preview.js
function mura_customize_preview_js() {
    wp_enqueue_script( 'mura_customize_preview_js', get_template_directory_uri() . '/inc/customizer/js/customizer-preview.js', array( 'customize-preview' ), null, true );
}
add_action( 'customize_preview_init', 'mura_customize_preview_js' );
 
// Controls.js
// function mura_customize_control_js() {
//     wp_enqueue_script( 'mura_customize_preview_js', get_template_directory_uri() . '/inc/customizer/js/customizer-control.js', array( 'customize-controls', 'jquery' ), null, true );
// }
// add_action( 'customize_controls_enqueue_scripts', 'mura_customize_control_js' );