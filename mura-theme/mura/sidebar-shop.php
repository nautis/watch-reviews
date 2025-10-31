<?php
/**
 * The sidebar containing the shop widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Mura
 * @since 1.0
 * @version 1.0
 */

if ( ! in_array( 'has-sidebar', get_body_class( ) ) || ! is_active_sidebar( 'woocommerce-sidebar' ) ) {
	return;
}
$body_bg = get_background_color() ? '#' . get_background_color() : '';
$body_background = is_single() && '' !== get_theme_mod( 'mura_single_background_color', '') ? get_theme_mod( 'mura_single_background_color', '' ) : $body_bg;
$widget_background_class = '' !== get_theme_mod( 'mura_widget_background', '' ) && $body_background !== get_theme_mod( 'mura_widget_background', '' ) ? ' has-background' : '';
?>

<aside id="aside-sidebar" class="aside-sidebar sidebar woocommerce-sidebar<?php echo esc_attr( $widget_background_class ); ?>" aria-label="<?php esc_attr_e( 'Sidebar', 'mura' ); ?>">
	<?php if ( get_theme_mod( 'mura_static_sidebar_sticky', true )): ?>
	<div class="aside-sticky-container">
	<?php endif; ?>
		<?php

		// Widgets
		if (is_active_sidebar( 'woocommerce-sidebar' )) {
			dynamic_sidebar( 'woocommerce-sidebar');
		}

		?>
	<?php if ( get_theme_mod( 'mura_static_sidebar_sticky', true )): ?>
	</div>
	<?php endif; ?>

</aside>
