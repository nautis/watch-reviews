<?php

$customizer_settings = mura_general_settings();

// Adds support for editor color palette.
add_theme_support( 'editor-color-palette', array(
	array(
		'name'  => __( 'Primary Theme Color', 'mura' ),
		'slug'  => 'primary-theme-color',
		'color'	=> get_theme_mod( 'mura_primary_theme_color', $customizer_settings['primary_theme_color'] ),
	),
	array(
		'name'  => __( 'Secondary Theme Color', 'mura' ),
		'slug'  => 'secondary-theme-color',
		'color'	=> get_theme_mod( 'mura_secondary_theme_color', $customizer_settings['secondary_theme_color'] ),
	),
	array(
		'name'  => __( 'Tertiary Theme Color', 'mura' ),
		'slug'  => 'tertiary-theme-color',
		'color'	=> get_theme_mod( 'mura_tertiary_theme_color', $customizer_settings['tertiary_theme_color'] ),
	),
	array(
		'name'  => __( 'Quaternary Theme Color', 'mura' ),
		'slug'  => 'quaternary-theme-color',
		'color'	=> get_theme_mod( 'mura_quaternary_theme_color', $customizer_settings['quaternary_theme_color'] ),
	),
	array(
		'name'  => __( 'Quinary Theme Color', 'mura' ),
		'slug'  => 'quinary-theme-color',
		'color'	=> get_theme_mod( 'mura_quinary_theme_color', $customizer_settings['quinary_theme_color'] ),
	),
	array(
		'name'  => __( 'Black', 'mura' ),
		'slug'  => 'black',
		'color' => '#000000',
	),
	array(
		'name'  => __( 'Very Dark Grey', 'mura' ),
		'slug'  => 'very-dark-grey',
		'color' => get_theme_mod( 'mura_very_dark_grey', '#131315' ),
       ),
	array(
		'name'  => __( 'Dark Grey', 'mura' ),
		'slug'  => 'dark-grey',
		'color' => get_theme_mod( 'mura_dark_grey', '#45464b' ),
       ),
	array(
		'name'  => __( 'Medium Grey', 'mura' ),
		'slug'  => 'medium-grey',
		'color' => get_theme_mod( 'mura_medium_grey', '#94979e' ),
       ),
	array(
		'name'  => __( 'Light Grey', 'mura' ),
		'slug'  => 'light-grey',
		'color' => get_theme_mod( 'mura_medium_grey', '#cfd0d2' ),
       ),
	array(
		'name'  => __( 'Very Light Grey', 'mura' ),
		'slug'  => 'very-light-grey',
		'color' => get_theme_mod( 'mura_very_light_grey', '#f2f2f3' ),
       ),
) );