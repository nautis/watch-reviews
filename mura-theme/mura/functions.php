<?php

/**
 * Mura functions and definitions
 *
 *
 * @package WordPress
 * @subpackage Mura
 * @since 1.0
 * @version 1.2.4
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mura_theme_setup() {

	// Make theme available for translation.
	load_theme_textdomain( 'mura', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );

	// Switch default core markup for search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'search',
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats',
		array(  
		'gallery',
		'image',
		'video',
		'audio',
		)
	);

	// Add theme support for Custom Logo.
	add_theme_support('custom-logo');

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add theme support for custom background
	add_theme_support( 'custom-background',
		array(
			'default-color' => 'ffffff',
		)
	);

	// Block styles
	add_theme_support( 'wp-block-styles' );

	// WooCommerce
	add_theme_support( 'woocommerce', array(
        'product_grid'          => array(
            'default_columns' => 3,
            'min_columns'     => 1,
            'max_columns'     => 4,
        ),
	) );

	// Register Menus
	register_nav_menus( array(
		'primary'    => esc_html__( 'Primary Menu', 'mura' ),
		'split-menu-left'    => esc_html__( 'Split Menu Left Items', 'mura' ),
		'split-menu-right'    => esc_html__( 'Split Menu Right Items', 'mura' ),
		'slide-menu-primary'    => esc_html__( 'Toggle Sidebar Primary Menu', 'mura' ),
		'header-secondary'    => esc_html__( 'Header Secondary Menu', 'mura' ),
		'header-third'    => esc_html__( 'Header Third Menu', 'mura' ),
		'footer'     => esc_html__( 'Footer Menu', 'mura'),
	) );

	// Amp
	add_theme_support( 'amp', array(
	    'template_dir' => 'amp',
	));

}

add_action( 'after_setup_theme', 'mura_theme_setup' );

// ========================================================
// Set content width
// ========================================================

if ( ! isset( $content_width ) ) {
	$content_width = 1200;
}

// ========================================================
// Register Widget areas
// ========================================================

function mura_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Static Sidebar', 'mura' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here to appear in your static sidebar', 'mura' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Slide Out Sidebar', 'mura' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here to appear in your slide out sidebar', 'mura' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Search Sidebar', 'mura' ),
		'id'            => 'search-sidebar',
		'description'   => esc_html__( 'Add widgets here to appear in your search sidebar', 'mura' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', 'mura' ),
		'id'            => 'footer-column-1',
		'description'   => esc_html__( 'Add widgets here to appear in your footer column', 'mura' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 2', 'mura' ),
		'id'            => 'footer-column-2',
		'description'   => esc_html__( 'Add widgets here to appear in your footer column', 'mura' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 3', 'mura' ),
		'id'            => 'footer-column-3',
		'description'   => esc_html__( 'Add widgets here to appear in your footer column', 'mura' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 4', 'mura' ),
		'id'            => 'footer-column-4',
		'description'   => esc_html__( 'Add widgets here to appear in your footer column', 'mura' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	// Home In Loop
	register_sidebar( array(
		'name'          => esc_html__( 'Home: Between Blog Posts', 'mura' ),
		'id'            => 'loop-sidebar-home',
		'description'   => esc_html__( 'Add widgets here to appear between posts on your homepage. Set the position of this sidebar in Appearance > Mura: Theme Settings > Homepage Settings', 'mura' ),
		'before_widget' => '<section id="%1$s" class="widget in-loop-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	// Category In Loop
	register_sidebar( array(
		'name'          => esc_html__( 'Category: Between Blog Posts', 'mura' ),
		'id'            => 'loop-sidebar-category',
		'description'   => esc_html__( 'Add widgets here to appear between posts in your category pages. Use Jetpack Widget Visibility or similar plugin to set different widgets for each category.  Set the position of this sidebar in Appearance > Mura: Theme Settings > Archive/Category Settings', 'mura' ),
		'before_widget' => '<section id="%1$s" class="widget in-loop-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
}
add_action( 'widgets_init', 'mura_widgets_init' );

// ========================================================
// Enqueue Google Fonts
// ========================================================

if ( ! function_exists( 'mura_fonts_url' ) ) {

	function mura_fonts_url( $font ) {

		$fonts_url = '';
		 
		 /*
	    Translators: If there are characters in your language that are not supported
	    by chosen font(s), translate this to 'off'. Do not translate into your own language.
	     */
	    if ( 'off' !== _x( 'on', 'Google font: on or off', 'mura' ) ) {
	    	if ($font === 'kumbh') {
		        $fonts_url = add_query_arg( 'family', 'Kumbh+Sans:wght@300;400;600;700&display=swap', "https://fonts.googleapis.com/css2" );
		    }
		    if ($font === 'opensans') {
		        $fonts_url = add_query_arg( 'family', 'Open+Sans:ital,wght@0,400;0,600;0,700;1,400;1,700&display=swap', "https://fonts.googleapis.com/css2" );
		    }
	    }
		 
		return esc_url_raw( $fonts_url );

	}

}

// ========================================================
// Enqueue scripts and styles
// ========================================================

if ( ! function_exists( 'mura_scripts' ) ) {

	function mura_scripts() {

		// Get Theme Version.
		$theme_version = wp_get_theme()->get( 'Version' );
		
		// CSS
		wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '1.0.0', 'all');
		wp_enqueue_style('fontello', get_template_directory_uri() . '/css/fontello/css/fontello.css', array(), null );
		wp_enqueue_style( 'mura-google-font-kumbh', mura_fonts_url('kumbh'), array(), '1.0.0' );
		wp_enqueue_style( 'mura-google-font-opensans', mura_fonts_url('opensans'), array(), '1.0.0' );
		wp_enqueue_style('mura-core-style', get_template_directory_uri() . '/style.css', array(), $theme_version, 'all');
		wp_enqueue_style('mura-theme-style', get_template_directory_uri() . '/css/mura.css', array(), '1.2.0', 'all');
		wp_enqueue_style('mura-gutenberg', get_template_directory_uri() . '/css/gutenberg.css', array(), '1.0.0', 'all');
		wp_style_add_data( 'mura-core-style', 'rtl', 'replace' );
		wp_style_add_data( 'mura-theme-style', 'rtl', 'replace' );
		wp_style_add_data( 'mura-gutenberg', 'rtl', 'replace' );
		if ( is_rtl() ) {
			wp_enqueue_style('mura-rtl-extra', get_template_directory_uri() . '/css/rtl-extra.css', array(), '1.0.0', 'all' );
		}

		// Load Masonry
		if ( is_home() && get_theme_mod( 'mura_homepage_layout', 'masonry' ) === 'masonry' || ( is_archive() || is_search() ) && have_posts() && get_theme_mod( 'mura_archive_layout', 'masonry' ) === 'masonry' )  {
			wp_enqueue_script( 'masonry');
			wp_enqueue_script( 'mura-masonry-init', get_template_directory_uri() . '/js/masonry-init.js', array(), null, true);
		}

		// Main JS
		wp_enqueue_script( 'mura-main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0.0', false);

		// Comments
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

	}
}
add_action( 'wp_enqueue_scripts', 'mura_scripts' );

// ========================================================
// Enqueue Gutenberg Editor scripts and styles
// ========================================================

if ( ! function_exists( 'mura_gutenberg_styles')) {

	function mura_gutenberg_styles() {

		if ( is_admin()) {

		 wp_enqueue_style('fontello', get_template_directory_uri() . '/css/fontello/css/fontello.css', array(), null );
		 wp_enqueue_style( 'mura-gutenberg-editor', get_template_directory_uri() . '/css/gutenberg-editor-style.css', false, '1.0.0', 'all' );
		 wp_enqueue_style( 'mura-google-font-kumbh', mura_fonts_url('kumbh'), array(), '1.0.0' );
		 wp_enqueue_style( 'mura-google-font-opensans', mura_fonts_url('opensans'), array(), '1.0.0' );

		}

	}

}
add_action( 'enqueue_block_editor_assets', 'mura_gutenberg_styles' );

// ========================================================
// Custom classes added to body class array
// ========================================================

if ( ! function_exists( 'mura_body_classes' ) ) {

	function mura_body_classes( $classes ) {


		if ( ( is_single( ) && get_theme_mod( 'mura_single_sidebar', false ) || is_home() && get_theme_mod( 'mura_homepage_sidebar', true ) || ( is_archive() || is_search() ) && get_theme_mod( 'mura_archive_sidebar', true ) || is_page() && get_theme_mod( 'mura_page_sidebar', false ) ) && is_active_sidebar( 'sidebar-1' ) ) {
			$classes[] = 'has-sidebar';
		}
		// Hero class single global
		if ( is_single() && ( get_theme_mod( 'mura_single_post_style', 'default' ) === 'hero-default' || get_theme_mod( 'mura_single_post_style', 'default' ) === 'hero-cover' ) ) {
			if ( function_exists('tfm_custom_meta_box') && get_post_meta( get_the_ID(), 'tfm_single_post_style', true ) && ( get_post_meta( get_the_ID(), 'tfm_single_post_style', true ) !== 'global' && get_post_meta( get_the_ID(), 'tfm_single_post_style', true ) !== 'hero-default' && get_post_meta( get_the_ID(), 'tfm_single_post_style', true ) !== 'hero-cover' ) ) {
				$classes[] = '';
			} else {
				$classes[] = 'has-hero';
			}
		}
		// Hero class per single post
		if ( is_single() && function_exists('tfm_custom_meta_box') && get_post_meta( get_the_ID(), 'tfm_single_post_style', true ) && ( get_post_meta( get_the_ID(), 'tfm_single_post_style', true ) === 'hero-default' || get_post_meta( get_the_ID(), 'tfm_single_post_style', true ) === 'hero-cover' ) ) {
				$classes[] = 'has-hero';
		}
		//  Hero class page
		if ( is_page() && ( get_theme_mod( 'mura_page_style', 'default' ) === 'hero-default' || get_theme_mod( 'mura_page_style', 'default' ) === 'hero-cover' ) ) {
			$classes[] = 'has-hero';
		}
		if ( get_theme_mod( 'mura_sticky_nav', false ) ) {
			$classes[] = 'has-sticky-nav';
		}
		if ( get_theme_mod( 'mura_sticky_nav_mobile', false ) ) {
			$classes[] = 'has-sticky-nav-mobile';
		}
		if ( '' !== get_theme_mod( 'mura_header_background_color', '' ) ) {
			$classes[] = 'has-custom-header';
		}
		if ( 'logo-below-nav' === get_theme_mod( 'mura_header_layout', 'logo-left-menu-right' ) ) {
			$classes[] = 'has-logo-below-nav';
		}
		if ( get_query_var( 'cpage' ) ) {
			$classes[] = 'comment-page';
		}
		if ( is_single() && ( get_previous_post() || get_next_post() ) && get_theme_mod( 'mura_single_post_navigation', true) ) {
			$classes[] = 'has-post-nav';
		}
		if ( is_single() && get_theme_mod( 'mura_single_author_bio', true ) ) {
			$classes[] = 'has-author-bio';
		}
		if ( is_home() && '' !== get_theme_mod( 'mura_homepage_loop_title', '' ) ) {
			$classes[] = 'has-loop-header';
		}
		if ( is_archive() && get_theme_mod( 'mura_archive_title_position', 'header' ) === 'loop' && get_theme_mod( 'mura_archive_title', true ) ) {
			$classes[] = 'header-in-loop';
		}
		if ( is_single() && '' !== get_theme_mod( 'mura_single_background_color', '' ) ) {
			$classes[] = 'single-custom-background';
		}
		if ( get_theme_mod( 'mura_goto_top', true )) {
			$classes[] = 'has-backtotop';
		}
		return $classes;
	}

}
add_filter( 'body_class', 'mura_body_classes', 10 );

// ========================================================
// Display the custom logo or title
// ========================================================

if ( ! function_exists( 'mura_site_logo' ) ) {

	function mura_site_logo( $args = array() ) {

		$defaults = array(
			'logo'        => '%1$s<span class="screen-reader-text">%2$s</span>',
			'mobile_logo' => '%1$s',
			'logo_class'  => 'site-logo',
			'title'       => '<a href="%1$s">%2$s</a>',
			'title_class' => 'site-title',
			'home_wrap'   => '<h1 class="%1$s">%2$s</h1>',
			'single_wrap' => '<div class="%1$s faux-heading">%2$s</div>',
			'mobile'      => false,
			'sidebar'	  => false,
			'condition'   => ( ( is_front_page() || is_home() )),
		);

		$args = wp_parse_args( $args, $defaults );

		$site_title = get_bloginfo( 'name' );
		$mobile_logo = get_theme_mod( 'mura_mobile_logo_upload', '' ) ? get_theme_mod( 'mura_mobile_logo_upload', '' ) : wp_get_attachment_url(get_theme_mod( 'custom_logo' ));
		$sidebar_logo = get_theme_mod( 'mura_sidebar_logo_upload', '' ) ? get_theme_mod( 'mura_sidebar_logo_upload', '' ) : wp_get_attachment_url(get_theme_mod( 'custom_logo' ));
	    $custom_logo_id = $args['mobile'] ? $mobile_logo : wp_get_attachment_url( get_theme_mod( 'custom_logo' ) );
	    if ( $args['sidebar'] ) {
	    	$custom_logo_id = $sidebar_logo;
	    }
	    $logo_size = $args['mobile'] ? wp_get_attachment_image_src( $custom_logo_id, 'full' ) : wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
	    if ( empty($logo_size)) {
	    	$logo_size = array(1 => false);
	    }
		$logo_width = get_theme_mod( 'mura_custom_logo_max_width', '' ) ? get_theme_mod( 'mura_custom_logo_max_width', '' ) : $logo_size[1];
		if ( get_theme_mod( 'mura_retina_logo', false ) ) {
			$logo_width  = floor( $logo_size[1] / 2 );
		}
		if ( $args['sidebar'] ) {
			$logo_width = get_theme_mod( 'mura_sidebar_custom_logo_max_width', '' );
		}
		$logo = '<a href="' . esc_url( get_home_url() ) . '" rel="home"><img src="' . esc_url( $custom_logo_id ) . '" alt="' . get_bloginfo( 'name' ) . '" class="custom-logo" width="' . $logo_width . '" /></a>';
		$contents   = '';
		$classname  = '';

		if ( $custom_logo_id ) {
			if ( ! $args['mobile'] ) {
			$contents  = sprintf( $args['logo'], $logo, esc_html( $site_title ) );
			$classname = $args['logo_class'];
		} else {
			$contents  = sprintf( $args['mobile_logo'], $logo, esc_html( $site_title ) );
			$classname = $args['logo_class'];
		}
		} else {
			$contents  = sprintf( $args['title'], esc_url( get_home_url( null, '/' ) ), esc_html( $site_title ) );
			$classname = $args['title_class'];
		}

		$wrap = $args['condition'] && ! $args['mobile'] && ! $args['sidebar'] ? 'home_wrap' : 'single_wrap';

		$html = sprintf( $args[ $wrap ], $classname, $contents );

		$html = apply_filters( 'mura_site_logo', $html, $args, $classname, $contents );

		echo wp_kses_post( $html );

	}

}

// ========================================================
// Output toggle icons
// ========================================================

if ( ! function_exists( 'mura_toggle_icon' ) ) {

	function mura_toggle_icon( $icon, $mobile = false ) {

		$mobile_toggle = ( $mobile ? ' mobile-toggle' : '' );
		$has_toggle_background = '';
		$has_toggle_text = ( 'menu' === $icon && get_theme_mod( 'mura_toggle_menu_text', '' ) || 'search' === $icon && get_theme_mod( 'mura_toggle_search_text', '' ) ? 'has-toggle-text' : '' );
		$show_icon = ( ( true === $mobile && ( ( $icon === 'menu' && get_theme_mod( 'mura_toggle_menu_mobile', true ) ) || ( $icon === 'search' && get_theme_mod( 'mura_toggle_search_mobile', true ) ) || ( $icon === 'cart' && get_theme_mod( 'mura_toggle_cart_mobile', true ) ) ) ) || 
			// Desktop Menu
			( false === $mobile && ( ( $icon === 'menu' && get_theme_mod( 'mura_toggle_menu', true ) && ( is_active_sidebar( 'sidebar-2') || ( ! is_active_sidebar( 'sidebar-2') && ( has_nav_menu( 'slide-menu-primary' ) || has_nav_menu( 'primary' ) ) && get_theme_mod( 'mura_sidebar_primary_nav', false ) ) ) ) || 
			// Desktop search
			( $icon === 'search' && get_theme_mod( 'mura_toggle_search', true ) ) ||
			( $icon === 'cart' && get_theme_mod( 'mura_toggle_cart', true ) ) ) ) ? '' : ' hidden' );

		$html = '';

		$html .= '<div class="toggle toggle-' . esc_attr( $icon . $mobile_toggle . $show_icon ) . '">';

		if ( $icon === 'menu' ) {

			$html .= '<span><i class="icon-menu-1"></i></span><span class="screen-reader-text">' . esc_html__( 'Menu', 'mura' ) . '</span>';

		}

		if ( $icon === 'search' ) {
			
			$html .= '<span><i class="icon-search"></i></span><span class="screen-reader-text">' . esc_html__( 'Search', 'mura' ) . '</span>';

		}

		if ( $icon === 'cart' && class_exists('WooCommerce')) {
			
			$html .= tfm_cart_icon();

		}

		$html .= '</div>';

		echo wp_kses_post( $html );

	}

}


// ========================================================
// Output category tags in post meta
// ========================================================

if ( ! function_exists( 'mura_get_category' ) ) {

	function mura_get_category( $num = 999, $post_id = false ) {

		$num = ( ! is_single() ? get_theme_mod( 'mura_archive_cat_slug_num', 2 ): $num );
		$category = array_slice( get_the_category( $post_id ), 0, $num );
		$count = 0;

		// single hero cat slug inherit hero meta link settings
		$hero_cat_slug = is_single() && in_array( 'has-hero', get_body_class( )) === true && '' !== get_theme_mod( 'mura_single_hero_entry_meta_link_color', '' ) ? ' style="color:' . get_theme_mod( 'mura_single_hero_entry_meta_link_color', '' ) . ' !important"' : '';

		echo '<ul class="post-categories-meta">';

		foreach( $category as $the_category ) {

			$count++;

			echo '<li class="cat-slug-' . esc_attr( $the_category->slug ) . ' cat-id-' . esc_attr( $the_category->cat_ID ) . '">';
			// "In" text string
			if ( $count === 1 && mura_toggle_entry_meta( 'in' ) ) {
				echo '<span class="screen-reader-text">' . esc_html__( 'Posted in', 'mura' ) . '</span><i dir="ltr">' . esc_html__( 'in', 'mura' ) . '</i> ';
			}
			echo '<a href="' . get_category_link( $the_category->cat_ID ) . '" class="cat-link-' . esc_attr( $the_category->cat_ID ) . '"' . $hero_cat_slug . '>' . esc_html( $the_category->cat_name ) . '</a></li>';

		}

		echo '</ul>';

	}

}

// ========================================================
// Additional custom post_class classes
// ========================================================

if ( ! function_exists( 'mura_post_class' ) ) {

	function mura_post_class( $classes ) {

		global $post;

		$classes[] = 'article'; // Always set the article class

		if ( '' !== get_theme_mod( 'mura_archive_post_background', '' )) {
			$classes[] = 'has-background';
		}

		$site_background = '#' . get_background_color();

		if ( ! is_single() && '' !== get_theme_mod( 'mura_entry_border_color', '' ) && get_theme_mod( 'mura_entry_border_color', '' ) === $site_background ) {
			$classes[] = 'no-border';
		}

		//  Meta
		if ( mura_toggle_entry_meta( 'excerpt' ) ) {
			$classes[] = 'has-excerpt';
		}
		if ( mura_toggle_entry_meta( 'author_avatar' ) ) {
			$classes[] = 'has-avatar';
		}
		if ( mura_toggle_entry_meta( 'author' ) ) {
			$classes[] = 'has-author';
		}
		if ( mura_toggle_entry_meta( 'date' ) ) {
			$classes[] = 'has-date';
		}
		if ( mura_toggle_entry_meta( 'comment_count' ) ) {
			$classes[] = 'has-comment-count';
		}
		if ( mura_toggle_entry_meta( 'category' ) ) {
			$classes[] = 'has-category-meta';
		}
		// Read more
		if ( mura_toggle_entry_meta( 'read_more' ) ) {
				$classes[] = 'has-read-more';
		}

		// Disabled Post Thumbnail
		$disabled_thumbnail = false;

		if ( ( is_archive() || is_search() ) && ! get_theme_mod( 'mura_archive_post_thumbnail', true ) ||
		is_home() && ! get_theme_mod( 'mura_homepage_post_thumbnail', true ) ||
		is_single() && ( ! get_theme_mod( 'mura_single_thumbnail', true ) || ( function_exists('tfm_custom_meta_box') && get_post_meta( get_the_ID(), 'tfm_disable_featured_media', true ) ) ) )  {

		$classes[] = 'disabled-post-thumbnail';
		$disabled_thumbnail = true;

		}

		// Thumbnail size
		$thumbnail_size = 'thumbnail-';

		if ( has_post_format( 'image' ) && ! is_single() && false === get_theme_mod( 'mura_image_format_use_global', true ) ) {
			if ( ( ( is_archive() || is_search() ) && 'list' !== get_theme_mod( 'mura_archive_layout', 'masonry' ) && 'list-grid' !== get_theme_mod( 'mura_archive_layout', 'masonry' ) ) || ( is_home() && 'list' !== get_theme_mod( 'mura_homepage_layout', 'masonry' ) && 'list-grid' !== get_theme_mod( 'mura_homepage_layout', 'masonry') ) ) {
				$thumbnail_size = $thumbnail_size . get_theme_mod( 'mura_image_format_thumbnail_aspect_ratio', 'uncropped' );
			} else {
				if ( is_home() ) {
					$thumbnail_size = $thumbnail_size . get_theme_mod( 'mura_homepage_thumbnail_aspect_ratio', 'uncropped' );
				}
				if ( is_archive() || is_search() ) {
					$thumbnail_size =  $thumbnail_size . get_theme_mod( 'mura_archive_thumbnail_aspect_ratio', 'uncropped' );
				}
			}
		} else {
			if ( is_single() ) {
				if ( function_exists('tfm_custom_meta_box') && get_post_meta( get_the_ID(), 'tfm_single_post_thumbnail_size', true ) && get_post_meta( get_the_ID(), 'tfm_single_post_thumbnail_size', true ) !== 'global' ) {
				$thumbnail_size = $thumbnail_size . get_post_meta( get_the_ID(), 'tfm_single_post_thumbnail_size', true );
				} else {
					$thumbnail_size = $thumbnail_size . get_theme_mod( 'mura_single_thumbnail_aspect_ratio', 'uncropped' );
				}
			}
			if ( is_page() ) {
				$thumbnail_size = $thumbnail_size . get_theme_mod( 'mura_page_thumbnail_aspect_ratio', 'uncropped' );
			}
			if ( is_home() ) {
				$thumbnail_size = $thumbnail_size . get_theme_mod( 'mura_homepage_thumbnail_aspect_ratio', 'uncropped' );
			}
			if ( is_archive() || is_search() ) {
				$thumbnail_size =  $thumbnail_size . get_theme_mod( 'mura_archive_thumbnail_aspect_ratio', 'landscape' );
			}
		}
		$classes[] = $thumbnail_size;

		// Post style
		if ( is_home() ) {
			$classes[] = get_theme_mod( 'mura_homepage_loop_style', 'default' );
		}
		if ( is_archive() || is_search() ) {
			$classes[] = get_theme_mod( 'mura_archive_loop_style', 'default' );
		} 
		
		// Image format archive
		if ( ! is_single() && has_post_format( 'image' ) ) {
			$classes[] = ( is_home() && 'list' !== get_theme_mod( 'mura_homepage_layout', 'masonry' ) && 'list-grid' !== get_theme_mod( 'mura_homepage_layout', 'masonry' ) ) || ( ( is_archive() || is_search() ) && 'list' !== get_theme_mod( 'mura_archive_layout', 'list' ) && 'list-grid' !== get_theme_mod( 'mura_archive_layout', 'masonry' ) ) ? 'cover' : '';
		}
		// Override post style for single and page (check for custom post meta)
		if ( is_single() ) {
			if ( function_exists('tfm_custom_meta_box') && get_post_meta( get_the_ID(), 'tfm_single_post_style', true ) && get_post_meta( get_the_ID(), 'tfm_single_post_style', true ) !== 'global' ) {
				$single_post_style = get_post_meta( get_the_ID(), 'tfm_single_post_style', true );
			} else {
				$single_post_style = get_theme_mod( 'mura_single_post_style', 'default' );
			}

			$classes[] = $single_post_style;

		}
		if ( is_page() ) {
			$page_post_style = get_theme_mod( 'mura_page_style', 'default' );
			if ( '' === get_the_post_thumbnail( ) && $page_post_style !== 'default' ) {
					$page_post_style = 'default';
				}
			$classes[] = $page_post_style;
		}

			return $classes;

	}

	add_filter( 'post_class', 'mura_post_class' );

}

// ========================================================
// Reset faux count
// ========================================================

function mura_reset_faux_count( $faux_count, $post_cols ) {

	$count_reset = false;
	$post_cols = str_replace(' ', '', $post_cols);
	if ( $post_cols === 'cols-4' ) {
		$count_reset = 8;
	}
	elseif ( $post_cols === 'cols-3' ) {
		$count_reset = 7;
	}
	elseif ( $post_cols === 'cols-2' ) {
		$count_reset = 5;
	}

	return $count_reset;
}


// ========================================================
// Modify excerpt length
// ========================================================

if ( ! function_exists( 'mura_excerpt_length' ) ) {

	function mura_excerpt_length( $length ) {

			return get_theme_mod( 'mura_excerpt_length', 30 );

	}

}

add_filter( 'excerpt_length', 'mura_excerpt_length' );

// ========================================================
// Output the exerpt (custom and default)
// ========================================================

if ( ! function_exists( 'mura_get_excerpt' ) ) {

	function mura_get_excerpt() {

		$html = '';

		// Home auto generated excerpt
		if ( mura_toggle_entry_meta( 'excerpt' )) {

			$html .= '<div class="entry-content excerpt">';
			$html .= get_the_excerpt();
			$html .= '</div>';

		}

		echo wp_kses_post( $html );

	}

}

// ========================================================
// Modify Excerpt more
// ========================================================

if ( ! function_exists( 'mura_excerpt_more' ) ) {

	function mura_excerpt_more( $more ) {

	return '...';

	}

}

add_filter( 'excerpt_more', 'mura_excerpt_more' );

// ========================================================
// Toggle entry-meta displays
// ========================================================

/**
 * This function handles meta data displays
 */

if ( ! function_exists( 'mura_toggle_entry_meta' ) ) {

	function mura_toggle_entry_meta( $meta_data = '' ) {

		$show_meta = true;

		/**
		 * Image format settings 
		 */

		if ( has_post_format( 'image' ) && ! get_theme_mod( 'mura_image_format_use_global', true ) && ! is_single() ) {

			// Before title meta
			if ( $meta_data == 'before_title_meta' ) {

			if ( ! get_theme_mod( 'mura_image_format_entry_meta_category', true ) ) {

				$show_meta = false;

			}

		}

		// Category
		if ( $meta_data == 'category' ) {

			if ( ! get_theme_mod( 'mura_image_format_entry_meta_category', true ) ) {

				$show_meta = false;

			}

		}

		// After title meta
		if ( $meta_data == 'after_title_meta' ) {

			if ( ! get_theme_mod( 'mura_image_format_entry_meta_date', true ) &&
			       ( function_exists('tfm_read_time') && ! get_theme_mod( 'tfm_image_format_entry_meta_read_time', true ) ) &&
 				   ! get_theme_mod( 'mura_image_format_entry_meta_comment_count', true ) && 
 				   ! get_theme_mod( 'mura_image_format_entry_meta_author_avatar', false ) &&
 				   ! get_theme_mod( 'mura_image_format_entry_meta_author', true ) &&
 				   ! get_theme_mod( 'mura_image_format_entry_meta_by', true ) &&
 				   ! get_theme_mod( 'mura_image_format_entry_meta_in', true ) ) {

				$show_meta = false;

			}

		}


		// by
		if ( $meta_data == 'by' ) {

			if ( ! get_theme_mod( 'mura_image_format_entry_meta_by', true ) )  {

				$show_meta = false;

			}

		}

		// in
		if ( $meta_data == 'in' ) {

			if ( ! get_theme_mod( 'mura_image_format_entry_meta_in', true ) )  {

				$show_meta = false;

			}

		}

		// Author
		if ( $meta_data == 'author' ) {

			if ( ! get_theme_mod( 'mura_image_format_entry_meta_author', true ) ) {

				$show_meta = false;

			}

		}

		// Author avatar
		if ( $meta_data == 'author_avatar' ) {

			if ( ! get_theme_mod( 'mura_image_format_entry_meta_author_avatar', false ) ) {

				$show_meta = false;

			}

		}

		// Date
		if ( $meta_data == 'date' ) {

			if ( ! get_theme_mod( 'mura_image_format_entry_meta_date', true ) ) {

				$show_meta = false;

			}

		}

		// Date
		if ( $meta_data == 'updated_date' ) {

			if ( ! is_single() ) {

				$show_meta = false;

			}

		}

		// Comment Count
		if ( $meta_data == 'comment_count' ) {

			if ( ! get_theme_mod( 'mura_image_format_entry_meta_comment_count', true ) ) {

				$show_meta = false;

			}

		}

		// Excerpt
		if ( $meta_data == 'excerpt' ) {

			if ( ( ! get_theme_mod( 'mura_image_format_post_excerpt', true ) && ! get_theme_mod( 'mura_image_format_post_excerpt_custom', true ) ) || ''== get_the_excerpt() ) {

				$show_meta = false;

			}

		}

		// Read more
		if ( $meta_data == 'read_more' ) {

			if ( ! get_theme_mod( 'mura_image_format_read_more', false ) ) {

				$show_meta = false;

			}

		}

		// Read time
		if ( $meta_data == 'read_time' ) {

			if ( ! function_exists('tfm_read_time') ) {
				$show_meta = false;
			}

			if ( ! get_theme_mod( 'tfm_image_format_entry_meta_read_time', true ) ) {

				$show_meta = false;

			}

		}

		} else {

		/**
		 * Standard format
		 * */

		// Before title meta
		if ( $meta_data == 'before_title_meta' ) {

			if ( ( is_home() &&
	               ! get_theme_mod( 'mura_homepage_entry_meta_category', true ) ) ||
	               // Archive
	               ( ( is_archive() || is_search() ) &&
	               ! get_theme_mod( 'mura_archive_entry_meta_category', true ) ) ||
	               is_single() && ! get_theme_mod( 'mura_single_entry_meta_category', true ) ) {

				$show_meta = false;

			}

		}

		// Category
		if ( $meta_data == 'category' ) {

			if ( ( is_home() && 
				   ! get_theme_mod( 'mura_homepage_entry_meta_category', true ) ) || 
				   ( ( is_archive() || is_search() ) && 
				   ! get_theme_mod( 'mura_archive_entry_meta_category', true ) ) ||
				   is_single() && ! get_theme_mod( 'mura_single_entry_meta_category', true ) ) {

				$show_meta = false;

			}

		}

		// After title meta
		if ( $meta_data == 'after_title_meta' ) {

			if ( ( is_home() && 
			       ! get_theme_mod( 'mura_homepage_entry_meta_date', true ) &&
			       ( function_exists('tfm_read_time') && ! get_theme_mod( 'tfm_homepage_entry_meta_read_time', true ) ) &&
 				   ! get_theme_mod( 'mura_homepage_entry_meta_comment_count', true ) && 
 				   ! get_theme_mod( 'mura_homepage_entry_meta_author_avatar', true ) &&
 				   ! get_theme_mod( 'mura_homepage_entry_meta_author', true ) &&
 				   ! get_theme_mod( 'mura_homepage_entry_meta_by', true ) &&
 				   ! get_theme_mod( 'mura_homepage_entry_meta_in', true ) ) ||
 				   // Archive
 				   ( ( is_archive() || is_search() ) && 
			       ! get_theme_mod( 'mura_archive_entry_meta_date', true ) && 
			       ( function_exists('tfm_read_time') && ! get_theme_mod( 'tfm_archive_entry_meta_read_time', true ) ) &&
 				   ! get_theme_mod( 'mura_archive_entry_meta_comment_count', true ) && 
 				   ! get_theme_mod( 'mura_archive_entry_meta_author_avatar', false ) &&
 				   ! get_theme_mod( 'mura_archive_entry_meta_author', true ) &&
 				   ! get_theme_mod( 'mura_archive_entry_meta_by', true ) ) || 
 					// Single
 				   ( ( is_single() ) && 
			       ! get_theme_mod( 'mura_single_entry_meta_date', true ) && 
			       ! get_theme_mod( 'mura_single_entry_meta_date_updated', true ) &&
			       ( function_exists('tfm_read_time') && ! get_theme_mod( 'tfm_single_entry_meta_read_time', false ) ) &&
 				   ! get_theme_mod( 'mura_single_entry_meta_comment_count', true ) && 
 				   ! get_theme_mod( 'mura_single_entry_meta_author_avatar', true ) &&
 				   ! get_theme_mod( 'mura_single_entry_meta_author', true ) &&
 				   ! get_theme_mod( 'mura_single_entry_meta_by', true ) ) ) {

				$show_meta = false;

			}

		}


		// by
		if ( $meta_data == 'by' ) {

			if ( ( is_home() && 
				   ! get_theme_mod( 'mura_homepage_entry_meta_by', true ) ) || 
				   ( ( is_archive() || is_search() ) && 
				   ! get_theme_mod( 'mura_archive_entry_meta_by', true ) ) ||
				   ( is_single() && 
				   ! get_theme_mod( 'mura_single_entry_meta_by', true ) ) ) {

				$show_meta = false;

			}

		}

		// in
		if ( $meta_data == 'in' ) {

			if ( ( is_home() && 
				   ! get_theme_mod( 'mura_homepage_entry_meta_in', true ) ) || 
				   ( ( is_archive() || is_search() ) && 
				   ! get_theme_mod( 'mura_archive_entry_meta_in', true ) ) ||
				   ( is_single() && 
				   ! get_theme_mod( 'mura_single_entry_meta_in', true ) ) ) {

				$show_meta = false;

			}

		}

		// Author
		if ( $meta_data == 'author' ) {

			if ( ( is_home() && 
				   ! get_theme_mod( 'mura_homepage_entry_meta_author', true ) ) || 
				   ( ( is_archive() || is_search() ) && 
				   ! get_theme_mod( 'mura_archive_entry_meta_author', true ) ) ||
				   ( is_single() && 
				   ! get_theme_mod( 'mura_single_entry_meta_author', true ) ) ) {

				$show_meta = false;

			}

		}

		// Author avatar
		if ( $meta_data == 'author_avatar' ) {

			if ( ( is_home() && 
				   ! get_theme_mod( 'mura_homepage_entry_meta_author_avatar', true ) ) || 
				   ( ( is_archive() || is_search() ) && 
				   ! get_theme_mod( 'mura_archive_entry_meta_author_avatar', false ) ) ||
				   ( is_single() && 
				   ! get_theme_mod( 'mura_single_entry_meta_author_avatar', true ) ) ) {

				$show_meta = false;

			}

		}

		// Date
		if ( $meta_data == 'date' ) {

			if ( ( is_home() && 
			       ! get_theme_mod( 'mura_homepage_entry_meta_date', true ) ) ||
			       // Archive
			       ( ( is_archive() || is_search() ) && ! get_theme_mod( 'mura_archive_entry_meta_date', true ) ) ||
			       // Single
			       ( is_single() && ! get_theme_mod( 'mura_single_entry_meta_date', true ) ) ) {

				$show_meta = false;

			}

		}

		// Date Updated
		if ( $meta_data == 'updated_date' ) {

			$u_time = get_the_time('U'); 
			$u_modified_time = get_the_modified_time('U'); 

			$show_updated = ( ( $u_modified_time >= $u_time + 86400 ) ? true : false );

			if ( ! is_single() || ( is_single() && ! get_theme_mod( 'mura_single_entry_meta_date_updated', true ) ) ) {

				$show_meta = false;

			}

			if ( $show_meta && false === $show_updated && get_theme_mod( 'mura_single_entry_meta_date', true ) ) {

				$show_meta = false;

			}

		}

		// Comment Count
		if ( $meta_data == 'comment_count' ) {

			if ( ( is_home() && 
			       ! get_theme_mod( 'mura_homepage_entry_meta_comment_count', true ) ) || 
			       ( ( is_archive() || is_search() ) && 
			       ! get_theme_mod( 'mura_archive_entry_meta_comment_count', true ) ) ||
			       ( is_single() && 
			       ! get_theme_mod( 'mura_single_entry_meta_comment_count', true ) ) ) {

				$show_meta = false;

			}

		}

		// Comment Count
		if ( $meta_data == 'excerpt' ) {

			if ( ( is_home() && 
			       ! get_theme_mod( 'mura_homepage_post_excerpt', true ) && ( ! get_theme_mod( 'mura_homepage_post_excerpt_custom', true ) || get_theme_mod( 'mura_homepage_post_excerpt_custom', true ) && ! has_excerpt( ) ) ) || 
			       ( ( is_archive() || is_search() ) && 
			       ! get_theme_mod( 'mura_archive_post_excerpt', true ) && ( ! get_theme_mod( 'mura_archive_post_excerpt_custom', true ) || get_theme_mod( 'mura_archive_post_excerpt_custom', true ) && ! has_excerpt( ) ) ) ||
			       ( is_single() && 
			       ( ! get_theme_mod( 'mura_single_custom_excerpt', false ) || get_theme_mod( 'mura_single_custom_excerpt', false ) && ! has_excerpt( ) ) ) || ''== get_the_excerpt()) {

				$show_meta = false;

			}

		}

		// Read more
		if ( $meta_data == 'read_more' ) {

			if ( is_single() || ( is_home() && 
			       ! get_theme_mod( 'mura_homepage_read_more', false ) ) || 
			       ( ( is_archive() || is_search() ) && 
			       ! get_theme_mod( 'mura_archive_read_more', false ) ) ) {

				$show_meta = false;

			}

		}

		// Read time
		if ( $meta_data == 'read_time' ) {

			if ( ! function_exists('tfm_read_time') ) {
				$show_meta = false;
			}

			if ( ( is_home() && 
			       ! get_theme_mod( 'tfm_homepage_entry_meta_read_time', true ) ) || 
			       ( ( is_archive() || is_search() ) && 
			       ! get_theme_mod( 'tfm_archive_entry_meta_read_time', true ) ) ||
			       ( is_single() && 
			       ! get_theme_mod( 'tfm_single_entry_meta_read_time', false ) ) ) {

				$show_meta = false;

			}

		}

	}

		return $show_meta;

	}

}

if ( ! function_exists('mura_updated_date') ) {

	function mura_updated_date() {

		$u_time = get_the_time('U'); 
		$u_modified_time = get_the_modified_time('U'); 

		$show_updated = ( ( $u_modified_time >= $u_time + 86400 ) ? true : false );

		if ( $show_updated ) {
			echo '<span>' . esc_html__( 'Updated', 'mura' ) . '</span> ';
		}
		echo '<time datetime="' . get_the_modified_date( 'Y-m-d' ) . '">' . get_the_modified_date( ) . '</time>';

	}
}

// ========================================================
// Get the post thumbnail size
// ========================================================

/**
 * Keeps page size low only output 'large' image
 * for full width post else 'medium_large'
 */

if ( ! function_exists( 'mura_get_post_thumbnail') ) {

	function mura_get_post_thumbnail( $count = 0, $size = 'medium_large' ) {

		$site_settings = mura_general_settings();
		$large_size_w = get_option('large_size_w');

		// Post Columns (posts per row)
		$post_cols = ( is_home() ? get_theme_mod( 'mura_homepage_loop_cols', 3 ) : get_theme_mod( 'mura_archive_loop_cols', 3 ) );
		if ( is_home() && get_theme_mod( 'mura_homepage_sidebar', true ) && is_active_sidebar( 'sidebar-1' ) && $post_cols > 2 ) {
			$post_cols = 2;
		}
		if ( ( is_archive() || is_search() ) && get_theme_mod( 'mura_homepage_sidebar', true ) && is_active_sidebar( 'sidebar-1' ) && $post_cols > 2 ) {
			$post_cols = 2;
		}
		// Layout
		$post_layout = ( is_home() ? get_theme_mod( 'mura_homepage_layout', 'grid' ) : get_theme_mod( 'mura_archive_layout', 'grid' ) );
		// Post style
		$post_style = is_home() ? get_theme_mod( 'mura_homepage_loop_style', 'default' ) : get_theme_mod( 'mura_archive_loop_style', 'default' );

		// 1 Column
		if ( $post_cols === 1 ) {

			$size = apply_filters( 'mura_archive_large_thumbnail_size', 'large' );

		}

		// First Full
		if ( $post_layout === 'grid-first-full' && $count === 1 ) {

			$size = apply_filters( 'mura_archive_large_thumbnail_size', 'large' );

		}

		// Asc/Desc grid
		if ( $post_layout === 'grid-asc' && ( $post_cols === 3 && ( $count === 1 || $count % 6 == 1  ) || $post_cols === 2 && ( $count === 1 || $count % 3 == 1  ) ) || $post_layout === 'grid-desc' && ( $post_cols === 3 && $count % 6 == 0 || $post_cols === 2 && $count % 3 == 0  ) ) {

			$size = apply_filters( 'mura_archive_large_thumbnail_size', 'large' );

		}

		// Offset (handle max of 100 per page)
		if ( $post_layout === 'grid-offset' && ( $post_cols === 3 && ( $count === 1 || $count === 7 || $count === 11 || $count === 17 || $count === 21 || $count === 27 || $count === 31 || $count === 37 || $count === 41 || $count === 47 || $count === 51 || $count === 57 || $count === 61 || $count === 67 || $count === 71 || $count === 77 || $count === 81 || $count === 87 || $count === 91 || $count === 97 || $count === 101 ) ) ) {

			$size = apply_filters( 'mura_archive_large_thumbnail_size', 'large' );

		}

		// Cover format List layout
		if ( $post_layout === 'list' && $post_style === 'cover' ) {
			$size = apply_filters( 'mura_archive_large_thumbnail_size', 'large' );
		}

		// Single

		if  ( is_single() ) {
			if ( get_theme_mod( 'mura_single_full_width', false ) && ( in_array( 'has-sidebar', get_body_class( )) === false || ( in_array( 'has-sidebar', get_body_class( )) && ( get_theme_mod( 'mura_single_post_style', 'default' ) === 'hero-default' || get_theme_mod( 'mura_single_post_style', 'default' ) === 'hero-cover' ) ) ) ) {
				$size = 'full';
			} else {

				if ( $large_size_w >= $site_settings['site_width']) {
					$size = apply_filters( 'mura_single_thumbnail_size', 'large' );
				} else {
					$size = apply_filters( 'mura_single_fallback_thumbnail_size', 'full' );
				}
			}

		}

		// Single

		if  ( is_page() ) {
			if ( get_theme_mod( 'mura_page_full_width', false ) && ( in_array( 'has-sidebar', get_body_class( )) === false || ( in_array( 'has-sidebar', get_body_class( )) && ( get_theme_mod( 'mura_page_post_style', 'default' ) === 'hero-default' || get_theme_mod( 'mura_page_post_style', 'default' ) === 'hero-cover' ) ) ) ) {
				$size = 'full';
			} else {
				// If user has set large size larger than site width use it
				if ( $large_size_w >= $site_settings['site_width']) {
					$size = apply_filters( 'mura_page_thumbnail_size', 'large' );
				} else {
					$size = apply_filters( 'mura_page_fallback_thumbnail_size', 'full' );
				}
			}
		}



		return the_post_thumbnail( $size );

	}

}

// ========================================================
// Get post count for archive displays
// ========================================================

if ( ! function_exists( 'mura_get_post_count' ) ) {

	function mura_get_post_count() {

		$mura_vars = mura_template_vars( '', false );

		$html = '';

		if ( mura_is_woo() || mura_is_woo( 'archive' )) { // Shop and product category
			$html =  esc_attr( $mura_vars['post_count'] ) . ' ' . esc_html__( 'Products', 'mura' );
		} elseif ( is_category() ) {
			$html =  esc_attr( $mura_vars['post_count'] ) . ' ' . esc_html__( 'Posts', 'mura' );
		} elseif ( is_author() ) {
			$html =  count_user_posts ($mura_vars['object']->ID ) . ' ' . esc_html__( 'Posts', 'mura' );
		} elseif ( is_tag() ) {
			$html =  esc_attr( $mura_vars['object']->count ) . ' ' . esc_html__( 'Posts', 'mura' );
		} elseif ( is_search() ) {
			$html = esc_attr( $mura_vars['post_count'] ) . ' ' . esc_html__( 'Posts', 'mura' );
		} else {
			if ( is_archive() ) {
				$html =  esc_html__( 'Archive', 'mura' );
			}
		}

		return $html;
	}

}

// ========================================================
// Remove archive title label
// ========================================================

if ( ! function_exists( 'mura_remove_archive_title_label' ) ) {

	function mura_remove_archive_title_label( $title ) {

		if ( get_theme_mod( 'mura_remove_archive_title_label', true ) ) {

		    if ( is_category() ) {
		        $title = '<span>' . single_cat_title( '', false ) . '</span>';
		    } elseif ( is_tag() ) {
		        $title = '<span>' . single_tag_title( '', false ) . '</span>';
		    } elseif ( is_author() ) {
		        $title = '<span class="vcard">' . get_the_author() . '</span>';
		    } elseif ( is_post_type_archive() ) {
		        $title = '<span>' . post_type_archive_title( '', false ) . '</span>';
		    } elseif ( is_tax() ) {
		        $title = '<span>' . single_term_title( '', false ) . '</span>';
		    }

		}
	  
	    return $title;
	}

}
 
add_filter( 'get_the_archive_title', 'mura_remove_archive_title_label' );


// ========================================================
// Blog header
// ========================================================

if ( ! function_exists( 'mura_blog_header' ) ) { 

	function mura_blog_header() {

		$html = '';

		$bottom_padding = get_theme_mod( 'mura_archive_header_background' ) === '#' . get_background_color() ? ' alt' : '';

		// Home

		if ( is_home( ) && ! is_paged() && have_posts( ) && get_theme_mod( 'mura_homepage_loop_title', '' ) ) {

			$html .= '<div class="section-header home-title">';
			$html .= '<h2 class="page-title">' . esc_html( get_theme_mod( 'mura_homepage_loop_title', '' ) ) . '</h2>';

			if ( get_theme_mod( 'mura_homepage_loop_subtitle', '' ) )  {
				$html .= '<p class="sub-title">' . esc_html( get_theme_mod( 'mura_homepage_loop_subtitle', '') ) . '</p>';
			}
			$html .= '</div>';

		}

		// Archive

		if ( ( get_theme_mod( 'mura_archive_title', true ) && ( is_archive() || is_search() ) ) || mura_is_woo( 'page' ) ) {

			$html .= '<header class="archive-header">';

			$html .= '<div class="archive-header-inner' . $bottom_padding . '">';

			// Author avatar
			if ( is_author() && get_theme_mod( 'mura_archive_author_avatar', true ) ) {
				$html .= '<div class="author-avatar"><span>' . get_avatar( get_the_author_meta( 'ID' ), 120 ) . '</span></div>';
			} 

			$html .= '<div class="archive-description-wrap">';

			if ( get_theme_mod( 'mura_archive_post_count', true ) ) {

				$html .= '<span class="archive-subtitle post-count entry-meta">';

				$html .= mura_get_post_count();

				$html .= '</span>';

			}

			if ( get_theme_mod( 'mura_archive_title', true ) ) {


				if ( class_exists('WooCommerce') ) {

					// Woo headers

					if ( is_shop() ) { // Shop page

						$html .= '<h1 class="archive-title"><span>' . get_the_title( get_option( 'woocommerce_shop_page_id' ) ). '</span></h1>';

					} elseif ( is_cart() || is_checkout() || is_account_page() ) { // Cart & Checkout Pages

						$html .= '<h1 class="archive-title"><span>' . get_the_title( ). '</span></h1>';

					} elseif ( is_product_category() || is_product_tag() ) { // Product category

						$html .= '<h1 class="archive-title">' . get_the_archive_title( ) . '</h1>';

					// End Woo Headers

					} elseif ( is_search() ) {

						$html .= '<h1 class="archive-title"><span>' . get_search_query() . '</span></h1>';

					} else {

						$html .= '<h1 class="archive-title">' . get_the_archive_title( ) . '</h1>';

					}

			} else {

				//  No Woo Output Theme headers

				if ( is_search() ) {

					$html .= '<h1 class="archive-title"><span>' . get_search_query() . '</span></h1>';

				} else {

					$html .= '<h1 class="archive-title">' . get_the_archive_title( ) . '</h1>';

				}

			}

			}
			if ( ! is_author() && get_theme_mod( 'mura_archive_description', true ) || is_author() && get_theme_mod( 'mura_archive_author_bio', false ) ) {

				if ( mura_is_woo( ) ) { // Shop page

					$shop_id = get_post( get_option( 'woocommerce_shop_page_id' ) );

					$html .= apply_filters('the_content', $shop_id->post_content); 

				} else {

					if ( is_author()) {
						$html .= '<p>' . get_the_archive_description( ) . '</p>';
					} else {
						$html .= get_the_archive_description( );
					}

				}

			}

			if ( is_category() && get_theme_mod( 'mura_archive_subcats', true ) ) {

				// Display child categories if we have any

				$category = get_queried_object();
				$child_categories=get_categories(
	                array( 'parent' => $category->term_id,
	                        'hide_empty' => false )
	                        ); 

				if ( $child_categories ) {

					$html .= '<div class="sub-categories">';

					$html .= '<ul class="child-categories">';

	                foreach ( $child_categories as $child ) {

	                	if ( 0 !== $child->count ) {

	                	$html .= '<li class="child-cat"><a class="cat-link-' . $child->term_id . '" href="' . get_category_link( $child->term_id ) . '">' . $child->cat_name . '<span class="tag-link-count child-post-count">' . $child->count . '</span></a></li>';
	                	} else {
	                		$html .= '<li></li>';
	                	}

	                }

	                $html .= '</ul>';

	                $html .= '</div>';

	            }

			}

			if ( function_exists('tfm_author_social_meta') && get_theme_mod( 'tfm_archive_author_social', false)) {

				$html .= tfm_author_social_meta( true );

			}

			$html .= '</div>';

			$html .= '</div>';

			$html .= '</header>';


		}

		echo wp_kses_post( $html );
	}

}
add_action('tfm_after_header', 'mura_blog_header', 30 );

// ========================================================
// In Loop Sidebars
// ========================================================

if ( ! function_exists('mura_in_loop_sidebar') ) {

	function mura_in_loop_sidebar( $page, $count, $faux_count ) {

		$mura_vars = mura_template_vars( 'content', array( 'count' => $count, 'faux_count' => $faux_count, ));
		
		if ( ( $page === 'home' && is_active_sidebar( 'loop-sidebar-home' ) && $count === get_theme_mod( 'mura_homepage_loop_sidebar_position', '' ) ) ||
			 ( $page === 'category' && is_active_sidebar( 'loop-sidebar-category' ) && $count === get_theme_mod( 'mura_archive_loop_sidebar_position', '' ) ) ) {

			$widget_background_class = '' !== get_theme_mod( 'mura_in_loop_widget_background', '' ) ? ' has-background' : '';
			$widget_border_class = '' !== get_theme_mod( 'mura_in_loop_widget_border_color', '' ) ? ' has-border' : '';
			$additional_class = $mura_vars['post_layout'] === 'grid-first-full' && $count === 1 ? ' first-full' : '';

			echo '<div class="article loop-sidebar sidebar post' . $widget_background_class . $widget_border_class . $additional_class . '">';

			echo '<div class="post-inner loop-sidebar-inner">';

			dynamic_sidebar( 'loop-sidebar-' . $page . '' );

			echo '</div>';

			echo '</div>';

		}

	}

}

// ========================================================
// Prev/Next Post Navigation
// ========================================================

if ( ! function_exists('mura_prev_next_post') ) {

	function mura_prev_next_post() {

		include_once( get_parent_theme_file_path( '/template-parts/post/single-post-navigation.php' )  );

	}

}

add_action('tfm_after_content', 'mura_prev_next_post', 20 );

// ========================================================
// Author Bio
// ========================================================

if ( ! function_exists('mura_author_bio') ) {

	function mura_author_bio() {

		include_once( get_parent_theme_file_path( '/template-parts/post/single-authorbio.php' )  );

	}

}

add_action('tfm_after_content', 'mura_author_bio', 10 );

// ========================================================
// Single hero layout
// ========================================================

if ( ! function_exists('mura_single_hero_layout') ) {

	function mura_single_hero_layout() {

		if ( ( is_single() || is_page() ) && ( in_array('hero-default', get_post_class()) || in_array('hero-cover', get_post_class()))) {

			while ( have_posts() ) : the_post();
				include_once( get_parent_theme_file_path( '/template-parts/post/content-hero.php' )  );
			endwhile;
		}

	}

}

add_action('tfm_after_wrap', 'mura_single_hero_layout', 10 );

// ========================================================
// Video post format
// ========================================================

/*
 * Get the first video embed in the post
 * Display it in place of the featured image in single()
 */

if ( ! function_exists( 'mura_featured_video' ) ) {

	function mura_featured_video() {

		$html = '';

		$show_video = function_exists('tfm_custom_meta_box') && get_post_meta( get_the_ID(), 'tfm_disable_featured_media', true ) ? true : false;
		$full_width = get_theme_mod( 'mura_single_full_width', false ) ? ' alignfull' : '';

		if ( is_single() && has_post_format( 'video') && ! in_array('hero-default', get_post_class( )) && ! in_array('hero-cover', get_post_class( )) && ( ( has_post_thumbnail() && $show_video ) || ! has_post_thumbnail( ) ) ) {

			$content = apply_filters( 'the_content', get_the_content() );
			$video = false;

			// Only get video from the content if a playlist isn't present.
			if ( false === strpos( $content, 'wp-playlist-script' ) ) {
				$video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
			}

			foreach ( $video as $video_html ) {

				$type = 'tfm-video'; // Default is video block

				if ( strpos($video_html, 'oembed') !== false || strpos($video_html, 'vimeo') !== false ) {
					$type = 'tfm-video-oembed'; // block oembed (Youtube block, Vimeo block etc.)
				}
				if ( strpos($video_html, 'shortcode') !== false ) {
					$type = 'tfm-video-shortcode'; // shortcode
				}

				$html .= '<figure class="wp-block-embed is-type-video ' . $type . ' wp-embed-aspect-16-9 wp-has-aspect-ratio tfm-featured-media' .  esc_attr( $full_width) . '"><div class="wp-block-embed__wrapper">';
				$html .= $video_html;
				$html .= '</div></figure>';

				return $html;
				break; // In case we have more than one embed lets break after the first iteration
			}

		}

	}

}

// ========================================================
// Audio post format
// ========================================================

/*
 * Get the first audio embed in the post
 * Display it in place of the featured image in single()
 */

if ( ! function_exists( 'mura_featured_audio' ) ) {

	function mura_featured_audio() {

		$show_audio = function_exists('tfm_custom_meta_box') && get_post_meta( get_the_ID(), 'tfm_disable_featured_media', true ) ? true : false;
		$full_width = get_theme_mod( 'mura_single_full_width', false ) ? ' alignfull' : '';

		if ( is_single() && has_post_format( 'audio' ) && $show_audio ) {

			$content = apply_filters( 'the_content', get_the_content() );
			$audio = false;

			// Only get audio from the content if a playlist isn't present.
			if ( false === strpos( $content, 'wp-playlist-script' ) ) {
				$audio = get_media_embedded_in_content( $content, array( 'audio', 'object', 'embed', 'iframe' ) );
			}

			foreach ( $audio as $audio_html ) {
				echo '<figure class="wp-block-embed is-type-audio wp-embed-aspect-16-9 wp-has-aspect-ratio tfm-featured-media' .  esc_attr( $full_width) . '"><div class="wp-block-embed__wrapper">';
				echo wp_kses_post( $audio_html );
				echo '</div></figure>';
				break; // In case we have more than one embed lets break after the first iteration
			}

		}

	}

}

// ========================================================
// Set offset for homepage loop
// ========================================================

add_action('pre_get_posts', 'mura_query_offset', 1 );

if ( ! function_exists( 'mura_query_offset' ) ) {

	function mura_query_offset(&$query) {

	    //Before anything else, make sure this is the right query...
	    if ( ! $query->is_home() ) {
	        return;
	    }

	    //First, define your desired offset...
	    $offset = get_theme_mod( 'mura_homepage_loop_offset', 0 );
	    
	    //Next, determine how many posts per page you want (we'll use WordPress's settings)
	    $ppp = get_option('posts_per_page');

	    //Next, detect and handle pagination...
	    if ( $query->is_main_query() ) {
		    if ( $query->is_paged ) {

		        //Manually determine page query offset (offset + current page (minus one) x posts per page)
		        $page_offset = $offset + ( ($query->query_vars['paged']-1) * $ppp );

		        //Apply adjust page offset
		        $query->set('offset', $page_offset );

		    }
		    else {

		        //This is the first page. Just use the offset...
		        $query->set('offset',$offset);

		    }

		}
	}

}

// ========================================================
// Offset pagination filter
// ========================================================

add_filter('found_posts', 'mura_adjust_offset_pagination', 1, 2 );

if ( ! function_exists( 'mura_adjust_offset_pagination' ) ) {

	function mura_adjust_offset_pagination($found_posts, $query) {

	    //Define our offset again...
	    $offset = get_theme_mod( 'mura_homepage_loop_offset', 0 );

	    //Ensure we're modifying the right query object...
	    if ( $query->is_home() ) {
	        //Reduce WordPress's found_posts count by the offset... 
	        return $found_posts - $offset;
	    }
	    return $found_posts;
	}

}

// ========================================================
// Exclude single posts ID's from homepage loop
// ========================================================

if ( ! function_exists( 'mura_exclude_single_posts_home' ) ) {

	function mura_exclude_single_posts_home($query) {

	    //Before anything else, make sure this is the right query...
	    if ( ! $query->is_home() ) {
	        return;
	    }

	    $post_ids =  explode(',', get_theme_mod( 'mura_homepage_exclude_posts_ids', '' ) );
	    if ( $query->is_home() && $query->is_main_query() ) {
	        $query->set( 'post__not_in', $post_ids );
	    }
	}

}
add_action('pre_get_posts', 'mura_exclude_single_posts_home', 1);

// ========================================================
// Add iframe to allowed wp_kses_post
// ========================================================

/**
 *
 * @param array  $tags Allowed tags, attributes, and/or entities.
 * @param string $context Context to judge allowed tags by. Allowed values are 'post'.
 *
 * @return array
 */
if ( ! function_exists( 'mura_iframe_wpkses_post_tags' ) ) {

function mura_iframe_wpkses_post_tags( $tags, $context ) {

	if ( 'post' === $context ) {
		$tags['iframe'] = array(
			'src'             => true,
			'height'          => true,
			'width'           => true,
			'frameborder'     => true,
			'allowfullscreen' => true,
			'allow'           => true,
		);
	}

	return $tags;
}

}

add_filter( 'wp_kses_allowed_html', 'mura_iframe_wpkses_post_tags', 10, 2 );

// ========================================================
// Modify WP Widgets HTML output
// ========================================================

// Categories widget add span around post count
function mura_cat_widget_count_span( $links ) {

	$links = str_replace( '</a> (', '</a><span class="tfm-count">', $links );
	$links = str_replace( ')', '</span>', $links );
	return $links;

}
add_filter( 'wp_list_categories', 'mura_cat_widget_count_span' );

// Archives widget add span around post count
function mura_archive_widget_count_span( $links ) {

	$links = str_replace( '</a>&nbsp;(', '</a><span class="tfm-count">', $links );
	$links = str_replace( ')', '</span>', $links );
	return $links;

}
add_filter( 'get_archives_link', 'mura_archive_widget_count_span' );

// ========================================================
// Check if this is a woocommerce page
// ========================================================

if ( ! function_exists( 'mura_is_woo' ) ) {

	function mura_is_woo( $woo_page ='' ) {

		$is_woo = false;

		if ( class_exists('WooCommerce')) {

			// Shop
			if ( '' === $woo_page && is_shop() ) {
				$is_woo = true;
			}

			// Product page
			if ( $woo_page === 'product' && is_product() ) {
				$is_woo = true;
			}
			// Category/archive
			if ( $woo_page === 'archive' && ( is_product_category() || is_product_tag() ) ) {
				$is_woo = true;
			}
			// Cart/Checkout/Account
			if ( $woo_page === 'page' && ( is_cart() || is_checkout() || is_account_page() ) ) {
				$is_woo = true;
			}

		}

		return $is_woo;
	}

}

// ========================================================
// Customizer and core functions
// ========================================================

require get_parent_theme_file_path( '/inc/tgmpa.php' );
require get_parent_theme_file_path( '/inc/ocdi.php' );
require get_parent_theme_file_path( '/inc/theme-settings.php' );

function mura_theme_includes() {
	require get_parent_theme_file_path( '/inc/template-vars.php' );
	require get_parent_theme_file_path( '/inc/hooks.php' );
	require get_parent_theme_file_path( '/inc/plugin-filters.php' );
	require get_parent_theme_file_path( '/inc/customizer/customizer.php' );
	require get_parent_theme_file_path( '/inc/customizer/customizer_colors.php' );
	require get_parent_theme_file_path( '/inc/custom_css.php' );
	require get_parent_theme_file_path( '/inc/gutenberg_color_palette.php' );
	require get_parent_theme_file_path( '/inc/sanitization.php' );
	// Woocommerce
	if ( class_exists('WooCommerce')) {
		require get_parent_theme_file_path( '/inc/woocommerce-functions.php' );
	}
}
add_action( 'init', 'mura_theme_includes' );

?>