<?php

/**
 * Template variables
 *
 * @package WordPress
 * @subpackage Mura
 * @since 1.0
 * @version 1.2
 */

if ( ! function_exists( 'mura_template_vars' ) ) {

	function mura_template_vars( $template = '', $args = false ) {

		$faux_count = isset($args['faux_count']) ? $args['faux_count'] : null;
		$true_count = isset($args['count']) ? $args['count'] : null;

		global $post;
		global $wp_query;


		$queried_object = get_queried_object();
		$post_count = $wp_query->found_posts;

		// ========================================================
		// Post Colums (per row)
		// ========================================================

		$post_cols = ( is_home() ? get_theme_mod( 'mura_homepage_loop_cols', 3 ) : get_theme_mod( 'mura_archive_loop_cols', 3 ) );
		$enabled_sidebar = ( is_home() ? get_theme_mod( 'mura_homepage_sidebar', true ) : get_theme_mod( 'mura_archive_sidebar', true ) );
		$has_sidebar = is_active_sidebar( 'sidebar-1') && $enabled_sidebar ? true : false;

		// Check for sidebar and adjust cols
		if ( $has_sidebar && $post_cols > apply_filters( 'mura_max_post_cols_with_sidebar', 2 ) ) {
			$post_cols = apply_filters( 'mura_max_post_cols_with_sidebar', 2 );

		}
		$post_cols_class = 'cols-' . $post_cols; // Leave a space before string

		// ========================================================
		// Post Layout (archive/home)
		// ========================================================

		$post_layout = ( is_home() ? get_theme_mod( 'mura_homepage_layout', 'masonry' ) : get_theme_mod( 'mura_archive_layout', 'list' ) );
		if ( $post_layout === 'masonry' && $post_cols < 2 ) {
			$post_layout = ' grid';
		}
		$masonry = ( 'masonry' === $post_layout & $post_cols > 1 ? true : false );

		// ========================================================
		// Content
		// ========================================================

		$in_loop_widget_position = is_home() ? get_theme_mod( 'mura_homepage_loop_sidebar_position', '' ) : get_theme_mod( 'mura_archive_loop_sidebar_position', '' );

		$faux_class = ( $post_layout === 'grid-first-full' && $true_count === 1 && 1 !== $in_loop_widget_position ? 'first-full' : '' );
		$faux_class .= ( 'list-grid' === $post_layout  && ( ( $post_cols === 2 && ( $faux_count == 3 || $faux_count == 4 ) ) || ( $post_cols === 3 && ( $faux_count == 4 || $faux_count == 5 || $faux_count == 6 ) ) || ( $post_cols === 4 && ( $faux_count == 4 || $faux_count == 5 || $faux_count == 6 || $faux_count == 7 ) ) ) ? 'grid-style faux-count-' . $faux_count. '' : '' );
		$cover_wrapper = ( ( is_single() || is_page() ) && in_array('cover', get_post_class( ) ) && ! in_array('disabled-post-thumbnail', get_post_class( )) ? true : false );
		$disabled_thumbnail = ( in_array('disabled-post-thumbnail', get_post_class()) ? true : false );
		$thumbnail_size = ( $args && $args['count'] ? $args['count'] : '' );
		$figcaption = ( is_single() && ! $cover_wrapper && get_post( get_post_thumbnail_id() )->post_excerpt ? ' has-figcaption' : false );
		$post_style = ( is_home() ? get_theme_mod( 'mura_homepage_loop_style', 'default' ) : get_theme_mod( 'mura_archive_loop_style', 'default' )  );
		if ( is_single() ) {
			if ( function_exists('tfm_custom_meta_box') && get_post_meta( get_the_ID(), 'tfm_single_post_style', true ) && get_post_meta( get_the_ID(), 'tfm_single_post_style', true ) !== 'global' ) {
				$post_style = get_post_meta( get_the_ID(), 'tfm_single_post_style', true );
			} else {
				$post_style = get_theme_mod( 'mura_single_post_style', 'default' );
			}
		}
		if ( is_page() ) {
			$post_style = get_theme_mod( 'mura_page_style', 'default' );
		}
		$entry_title = ( is_home() ? get_theme_mod( 'mura_homepage_entry_title', true ) : get_theme_mod( 'mura_archive_entry_title', true ) );
		if  ( has_post_format( 'image' ) && false === get_theme_mod( 'mura_image_format_use_global', true ) ) {
			$entry_title = get_theme_mod( 'mura_image_format_entry_title', true );
		}
		$full_width = ( ( is_single() && get_theme_mod( 'mura_single_full_width', false ) && 'cover' !== get_theme_mod( 'mura_single_post_style', 'default' ) ) || ( is_page() && get_theme_mod( 'mura_page_full_width', false ) && 'cover' !== get_theme_mod( 'mura_page_style', 'default' ) ) ? ' alignfull' : '' );
		if ( is_single( ) && '' === $full_width && function_exists('tfm_custom_meta_box') && get_post_meta( get_the_ID(), 'tfm_single_full_width', true ) ) {
			$full_width = ' alignfull';
		}
		$full_width_cover = ( ( is_single() && get_theme_mod( 'mura_single_full_width', false ) && 'cover' === get_theme_mod( 'mura_single_post_style', 'default' ) ) || ( is_page() && get_theme_mod( 'mura_page_full_width', false ) && 'cover' === get_theme_mod( 'mura_page_style', 'default' ) ) ? ' alignfull' : '' );
		if ( is_single( ) && '' === $full_width_cover && function_exists('tfm_custom_meta_box') && get_post_meta( get_the_ID(), 'tfm_single_full_width', true ) ) {
			$full_width_cover = ' alignfull';
		}
		// ========================================================
		// Pagination
		// ========================================================
		$show_pagination_numbers = ( get_theme_mod( 'mura_pagination_numbers', false ) ? ' has-pagination-numbers' : '' );
		$show_pagination_prev_next = ( get_theme_mod( 'mura_pagination_prev_next', true ) ? ' has-pagination-prev-next' : '' );

		// ========================================================
		// Header
		// ========================================================

		$sticky_nav = ( get_theme_mod( 'mura_sticky_nav', false ) ? ' sticky-nav' : '' );
		$sticky_mobile_nav = ( get_theme_mod( 'mura_sticky_nav_mobile', false ) ? ' sticky-mobile-nav' : '' );
		$header_size = ( get_theme_mod( 'mura_header_full_width', false) ? ' fullwidth' : '' );
		$header_search_input = ( get_theme_mod( 'mura_header_search_input', false) ? ' has-search-input' : '' );
		$header_primary_nav = ( has_nav_menu( 'primary' ) ? ' has-primary-nav' : '' );
		$header_secondary_nav = ( has_nav_menu( 'header-secondary' ) ? ' has-secondary-nav' : '' );
		$header_third_nav = ( has_nav_menu( 'header-third' ) ? ' has-third-nav' : '' );
		$header_split_menu = ( 'logo-split-menu' === get_theme_mod( 'mura_header_layout', 'default' ) && has_nav_menu( 'split-menu-left' ) ? ' has-split-menu-left' : '' );
		$header_split_menu .= ( 'logo-split-menu' === get_theme_mod( 'mura_header_layout', 'default' ) && has_nav_menu( 'split-menu-right' ) ? ' has-split-menu-right' : '' );
		$header_toggle_icons = ( get_theme_mod( 'mura_toggle_menu', true ) ? ' has-toggle-menu' : '' );
		$header_toggle_icons .= ( get_theme_mod( 'mura_toggle_search', true ) ? ' has-toggle-search' : '' );
		$header_toggle_icons .= ( get_theme_mod( 'mura_toggle_cart', true ) ? ' has-toggle-cart' : '' );
		$header_social_icons = function_exists('tfm_social_icons_theme_header') && get_theme_mod( 'tfm_header_social', false ) ? ' has-tfm-social-icons' : '';
		$header_primary_nav_background = '' !== get_theme_mod( 'mura_primary_nav_background', '' ) ? ' has-primary-nav-background' : '';


		// ========================================================
		// Sidebar
		// ========================================================

		$sidebar = '';
		if ( class_exists('WooCommerce')) {
			if ( is_page( 'cart' ) || is_page( 'checkout') || is_page( 'basket' ) || is_account_page() ) {
				$sidebar = 'shop';
			}

		}

		return array(
			'show_pagination_numbers' => $show_pagination_numbers,
			'show_pagination_prev_next' => $show_pagination_prev_next,
			'post_cols' => $post_cols_class,
			'post_count' => $post_count,
			'object' => $queried_object,
			'post_layout' => $post_layout,
			'masonry' => $masonry,
			'sticky_nav' => $sticky_nav,
			'sticky_mobile_nav' => $sticky_mobile_nav,
			'header_size' => $header_size,
			'header_search_input' => $header_search_input,
			'header_toggle_icons' => $header_toggle_icons,
			'header_primary_nav' => $header_primary_nav,
			'header_secondary_nav' => $header_secondary_nav,
			'header_third_nav' => $header_third_nav,
			'header_split_menu' => $header_split_menu,
			'header_social_icons' => $header_social_icons,
			'header_primary_nav_background' => $header_primary_nav_background,
			'sidebar' => $sidebar,
			'content' => array(
				'faux_class' => $faux_class,
				'cover_wrapper' => $cover_wrapper,
				'disabled_thumbnail' => $disabled_thumbnail,
				'thumbnail_size' => $thumbnail_size,
				'figcaption' => $figcaption,
				'entry_title' => $entry_title,
				'post_style' => $post_style,
				'full_width' => array(
					'cover' => $full_width_cover,
					'default' => $full_width,
				),
			),
		);

	}

} ?>