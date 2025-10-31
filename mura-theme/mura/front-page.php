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

$mura_vars = mura_template_vars( '', false );

get_header(); ?>

		<main id="main" class="site-main<?php echo esc_attr( $mura_vars['show_pagination_numbers']  . $mura_vars['show_pagination_prev_next'] ); ?>">

		<?php tfm_before_loop(); ?>

		<?php

		// ========================================================
		// Check if we're running the custom home blocks plugin
		// ========================================================

		/**
		 * Home blocks overrides static homepage settings when active
		 * Disable any active post blocks to display a static homepage
		 */

		if ( ! function_exists( 'tfm_home_blocks') || ( function_exists( 'tfm_home_blocks') && ! tfm_home_blocks_active() ) ) : ?>

		<?php if ( ! is_home() ): ?>

		<div id="primary" class="content-area the-page">

		<?php else: ?>

		<div id="primary" class="content-area post-grid <?php echo esc_attr( $mura_vars['post_cols'] . ' ' . $mura_vars['post_layout']  ); ?>">

		<?php endif; ?>

			<?php 
			// Masonry
			if ( $mura_vars['masonry'] ) : ?>

				<div id="masonry" class="masonry-container">

			<?php endif; ?>

			<?php  

			if ( have_posts() ) :

				$count = 0;
				$faux_count = 0;

				/* Start the Loop */
				while ( have_posts() ) : the_post();


					$count++; /* Lets start counting */
					$faux_count++;

					if ( $faux_count === mura_reset_faux_count( $faux_count, $mura_vars['post_cols'] ) ) {
						$faux_count = 1; /* Reset faux counter and continue */
					}

					/*
					 * In loop sidebar
					 */

					mura_in_loop_sidebar( 'home', $count, $faux_count );

					/*
					 * In loop hook
					 * Accepts args as an array()
					 */
					tfm_between_posts( array( 'count' => $count, 'faux_count' => $faux_count, ) );

					/*
					 * Pass count/faux count args
					 */

					if ( ! is_home() ) {

						get_template_part( 'template-parts/page/content', null );

					} else {
					
						get_template_part( 'template-parts/post/content', null, array( 'count' => $count, 'faux_count' => $faux_count, ) );

					}


				endwhile;

				// Close masonry container
				if ( $mura_vars['masonry']) : ?>
					
					</div>

				<?php endif;
			
				the_posts_pagination( array(
				    'type' => 'list',
				    'mid_size' => 2,
				    'prev_text' => '<span>' . esc_html__( 'Newer Posts', 'mura' ) . '</span>',
				    'next_text' => '<span>' . esc_html__( 'Older Posts', 'mura' ) . '</span>',
					) );

			else :

				get_template_part( 'template-parts/post/content', 'none' );

			endif;
			?>

		</div><!-- #primary -->

		<?php endif; // Endif tfm blocks ?>

		<?php tfm_after_loop(); ?>
		
	</main><!-- #main -->
	<?php 
		get_sidebar();
	?>

<?php get_footer();
