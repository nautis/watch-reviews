<?php
/**
 * The template for displaying all pages
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Mura
 * @since 1.0
 * @version 1.2
 */

$mura_vars = mura_template_vars();

get_header(); ?>

		<main id="main" class="site-main" role="main">
		<div id="primary" class="content-area the-page">

			<?php

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/page/content' );

					get_template_part( 'template-parts/page/footer' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile;

			?>

		</div><!-- #primary -->
	</main><!-- #main -->

	<?php 
		get_sidebar( $mura_vars['sidebar'] );
	?>

<?php get_footer();
