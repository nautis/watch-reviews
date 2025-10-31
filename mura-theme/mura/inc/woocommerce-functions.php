<?php

/**
 * mura WooCommerce Functions
 *
 *
 * @package WordPress
 * @subpackage Mura
 * @since 1.0
 * @version 1.1
 */

function mura_woocommerce_setup() {
	add_theme_support( 'wc-product-gallery-lightbox' );
}
add_action( 'after_setup_theme', 'mura_woocommerce_setup' );

// ========================================================
// Register Shop Sidebars
// ========================================================

function mura_woocommerce_widgets_init() {
	
	register_sidebar( array(
		'name'          => esc_html__( 'Shop Sidebar', 'mura' ),
		'id'            => 'woocommerce-sidebar',
		'description'   => esc_html__( 'Add widgets here to appear in your shop sidebar', 'mura' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
}
add_action( 'widgets_init', 'mura_woocommerce_widgets_init' );

// ========================================================
// Enqueue scripts and styles
// ========================================================

if ( ! function_exists( 'mura_woocommerce_scripts' ) ) {

	function mura_woocommerce_scripts() {
		
		// CSS
		wp_enqueue_style('mura-woocommerce-style', get_template_directory_uri() . '/css/mura-woocommerce.css', array(), '1.0.0', 'all');
		wp_style_add_data( 'mura-woocommerce-style', 'rtl', 'replace' );

	}
}
add_action( 'wp_enqueue_scripts', 'mura_woocommerce_scripts' );

// ========================================================
// Change gallery thumbnail size
// ========================================================

add_filter( 'woocommerce_get_image_size_gallery_thumbnail', function( $size ) {
	return array(
		'width'  => 300,
		'height' => 300,
		'crop'   => 1,
	);
} );


// ========================================================
// Remove shop and category page title
// ========================================================

add_filter( 'woocommerce_show_page_title', '__return_false' );


// ========================================================
// Pagination Arrows
// ========================================================

function mura_woo_pagination_arrows( $args ) {

	$args['prev_text'] = '<i class="icon icon-left-open"></i>';
	$args['next_text'] = '<i class="icon icon-right-open"></i>';

	return $args;
}
add_filter( 'woocommerce_pagination_args', 	'mura_woo_pagination_arrows' );


// ========================================================
// Woo Share product (tfm share plugin)
// ========================================================

function mura_woo_share() {
	if ( function_exists('tfm_share_content') && get_theme_mod( 'tfm_shop_share', true ) ) {
		tfm_share_content();
	}
}
add_action( 'woocommerce_share', 'mura_woo_share' );

// ========================================================
// Shop sidebar body class
// ========================================================

if ( ! function_exists('mura_woo_sidebars') ) {

	function mura_woo_sidebars( $classes ) {

		$remove_class = array( 'has-sidebar' );

		// Remove theme sidebar class from shop pages
		if ( ( ( is_shop( ) || is_product_category() || is_product_tag() ) && get_theme_mod( 'mura_archive_sidebar', true ) && ( false === get_theme_mod( 'mura_woo_shop_sidebar', true ) || ( get_theme_mod( 'mura_woo_shop_sidebar', true ) && ! is_active_sidebar( 'woocommerce-sidebar' ) ) ) ) || 
			// Product page
			( is_product( ) && get_theme_mod( 'mura_single_sidebar', true ) && ( false === get_theme_mod( 'mura_woo_shop_sidebar', true ) || ( get_theme_mod( 'mura_woo_shop_sidebar', true ) && ! is_active_sidebar( 'woocommerce-sidebar' ) ) ) ) || 
			// Cart & Account
			( ( is_cart() || is_checkout() || is_account_page() ) && get_theme_mod( 'mura_page_sidebar', false ) && ( false === get_theme_mod( 'mura_woo_checkout_sidebar', false ) || ( get_theme_mod( 'mura_woo_checkout_sidebar', false ) && ! is_active_sidebar( 'woocommerce-sidebar' ) ) ) ) ) {
			$classes = array_diff( $classes, $remove_class);
		}

		if ( ( ( ( is_shop( ) || is_product() || is_product_category() ) && get_theme_mod( 'mura_woo_shop_sidebar', true ) ) || ( ( is_cart() || is_checkout() ) && get_theme_mod( 'mura_woo_checkout_sidebar', false ) ) ) && is_active_sidebar( 'woocommerce-sidebar' ) ) {
			$classes[] = 'has-sidebar';
			$classes[] = 'has-woocommerce-sidebar';
		}

		return $classes;

	}

	add_filter( 'body_class', 'mura_woo_sidebars', 10 );
}

// ========================================================
// Add category tag category product
// ========================================================

remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);

function mura_add_category_product_loop( $tfm_plugin = false ) {

	global $post;

    $terms = get_the_terms( $post->ID, 'product_cat' );

    $html = '';

    if ( has_post_thumbnail( ) && ! $tfm_plugin ) {

	    $html .= '</a>'; // Close thumbnail link

	}

	if ( ! $tfm_plugin ) {

    $html .= '<div class="entry-header">';

	}

    if ( $terms && ! is_wp_error( $terms ) ) {

        if ( ! empty( $terms ) ) {

        	$link = get_term_link( $terms[0]->term_id, 'product_cat' );

        	if ( ! $tfm_plugin ) {

            $html .= '<div class="entry-meta before-title">';

            }
            $html .= '<ul class="post-categories-meta">';
            $html .= '<li class="cat-slug-' . esc_attr( $terms[0]->slug ). ' cat-id-' . esc_attr( $terms[0]->term_id ) . '">';
            $html .= '<a class="cat-link-' . esc_attr( $terms[0]->term_id ). '" href="' . esc_attr($link). '">' . esc_html($terms[0]->name ). '</a></li>';
            $html .= '</ul>';
            if ( ! $tfm_plugin ) {
            $html .= '</div>';
        	}

    }

    }

    if ( ! $tfm_plugin ) {

    $html .= '<h3 class="entry-title"><a href="' . esc_attr( get_the_permalink() ) . '" class="woocommerce-loop-product__link">' . esc_html( get_the_title() ) . '</a></h3>';

   $html .= '</div><!-- .entry-header -->';

}

   echo wp_kses_post($html);

}

add_action( 'woocommerce_before_shop_loop_item_title', 'mura_add_category_product_loop', 20);


// ========================================================
// Cart icon and qty (displays in header)
// ========================================================

add_shortcode ('tfm_cart_icon', 'tfm_cart_icon' ); // Shortcode not used but user may implement it

function tfm_cart_icon() { ?>

	<?php

	ob_start();
 
        $cart_count = WC()->cart->cart_contents_count; // Set variable for cart item count
        $cart_url = wc_get_cart_url();  // Set Cart URL

        echo '<a class="toggle-cart-contents" href="' . esc_url($cart_url) . '" title="' . esc_html__('Your shopping cart', 'mura') . '"><i class="icon-tfm-cart"></i>';

	    if ( $cart_count > 0 || get_theme_mod( 'mura_show_cart_qty_empty', false ) ) {

        echo '<span class="cart-qty">' . esc_html($cart_count) . '</span>';

        }

        echo'</a>';
	        
    return ob_get_clean();
 
}

// Qty update Ajax refresh

add_filter( 'woocommerce_add_to_cart_fragments', 'tfm_cart_icon_count' );

function tfm_cart_icon_count( $fragments ) {
 
    ob_start();
    
	    $cart_count = WC()->cart->cart_contents_count;
	    $cart_url = wc_get_cart_url();
	    

	    echo '<a class="toggle-cart-contents" href="' . esc_url($cart_url) . '" title="' . esc_html__('Your shopping cart', 'mura') . '"><i class="icon-tfm-cart"></i>';

		if ( $cart_count > 0 || get_theme_mod( 'mura_show_cart_qty_empty', false ) ) {

	        echo '<span class="cart-qty">' . esc_html($cart_count) . '</span>';

	    }

		echo '</a>';
	 
	    $fragments['a.toggle-cart-contents'] = ob_get_clean();
     
    return $fragments;
}


// ========================================================
// Customizer functions
// ========================================================
require get_parent_theme_file_path( '/inc/woocommerce-customizer.php' );
