<?php

/**
 * The home template file
 *
 * Puts together the home page loop
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Mura
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

		<main id="main" class="site-main">

		<?php tfm_before_loop(); ?>

		<div id="primary" class="content-area woocommerce-shop">

			<div class="woocommerce-wrapper">

				<?php woocommerce_content(); ?>

			</div>

		</div><!-- #primary -->

		<?php tfm_after_loop(); ?>
		
	</main><!-- #main -->
	<?php 
		get_sidebar( 'shop' );
	?>

<?php get_footer();
