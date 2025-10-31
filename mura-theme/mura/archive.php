<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Mura
 * @since 1.0
 * @version 1.0
 */

$mura_vars = mura_template_vars( 'archive', false );

get_header(); ?>

		<main id="main" class="site-main<?php echo esc_attr( $mura_vars['show_pagination_numbers'] . $mura_vars['show_pagination_prev_next']  ); ?>">

		<?php tfm_before_loop(); ?>

		<div id="primary" class="content-area post-grid <?php echo esc_attr( $mura_vars['post_cols'] . ' ' . $mura_vars['post_layout']  ); ?>">

			<?php

			 // Open masonry container
			 if ( $mura_vars['post_layout'] === 'masonry' ) : ?>

				<div id="masonry-container" class="masonry-container">

			<?php endif; ?>

			<?php
			if ( have_posts() ) :

				$count = 0;
				$faux_count = 0;

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					$count++;
					$faux_count++;
					
					if ( $faux_count === mura_reset_faux_count( $faux_count, $mura_vars['post_cols'] ) ) {
						$faux_count = 1; /* Reset faux counter and continue */
					}

					/*
					 * Run the loop widget function
					 */

					mura_in_loop_sidebar( 'category', $count, $faux_count );

					/*
					 * In loop hook
					 * Accepts args as an array()
					 */
					
					tfm_between_posts( array( 'count' => $count, 'faux_count' => $faux_count, ) );

					/*
					 * Pass count arg for use in mura_post_thumbnail() function
					 */
					get_template_part( 'template-parts/post/content', null, array( 'count' => $count, 'faux_count' => $faux_count, ) );


				endwhile;

				// Close masonry container

				if ( $mura_vars['post_layout'] === 'masonry' ) : ?>

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

		</div>
		<?php tfm_after_loop(); ?>
	</main>
	<?php 
		get_sidebar( );
	?>

<?php get_footer();
