<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Mura
 * @since 1.0
 * @version 1.1
 */

?>

<?php 

$count = ( ! is_single( ) ? $args['count'] : false );
$faux_count = ( ! is_single( ) ? $args['faux_count'] : false );
$mura_vars = mura_template_vars( 'content', array( 'count' => $count, 'faux_count' => $faux_count, ));
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $mura_vars['content']['faux_class'] ); ?>>

	<?php get_template_part( 'template-parts/post/sticky-formats' ); ?>

	<div class="post-inner">

	<?php if ( $mura_vars['content']['cover_wrapper'] ) : ?>

	<div class="cover-wrapper<?php echo esc_attr($mura_vars['content']['full_width']['cover']); ?>">

	<?php endif; ?>

	<?php

	echo mura_featured_video();
	mura_featured_audio();

	// ========================================================
	// Post thumbnail
	// ========================================================

	if ( '' !== get_the_post_thumbnail() && ! $mura_vars['content']['disabled_thumbnail'] && 'hero-default' !== $mura_vars['content']['post_style'] && 'hero-cover' !== $mura_vars['content']['post_style'] ) : ?>

		<div class="thumbnail-wrapper<?php echo esc_attr($mura_vars['content']['full_width']['default']); ?>">

			<figure class="post-thumbnail<?php echo esc_attr( $mura_vars['content']['figcaption'] ); ?>">

				<?php if ( ! is_single() ) : // Home/Archive  ?>
					<a href="<?php the_permalink(); ?>">
						<?php mura_get_post_thumbnail( $mura_vars['content']['thumbnail_size'] ); ?>
					</a>
				<?php else: // Single ?>
					<?php mura_get_post_thumbnail(); ?>
				<?php endif; ?>
			</figure>

			<?php if ( $mura_vars['content']['figcaption'] ) : // Figcaption ?>

				<figcaption class="featured-media-caption"><?php echo wp_kses_post( get_the_post_thumbnail_caption() ); ?></figcaption>

			<?php endif; ?>

		</div>
		
	<?php endif; ?>

	<?php if ( $mura_vars['content']['post_style'] !== 'default-alt' ): ?>
		<div class="entry-wrapper">
			<?php tfm_after_entry_wrapper(); ?>
		<?php endif; ?>

	<?php if ( 'hero-default' !== $mura_vars['content']['post_style'] && 'hero-cover' !== $mura_vars['content']['post_style'] ): ?>
	<header class="entry-header">
		<?php

		// ========================================================
		// Entry header
		// ========================================================

		get_template_part( 'template-parts/post/sticky-formats' );

		if ( 'post' === get_post_type() ) {

			get_template_part( 'template-parts/post/meta', 'before-title' ); 

		};

		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} else {
			if ( $mura_vars['content']['entry_title'] ) {
				the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			}
		}

		get_template_part( 'template-parts/post/meta', 'after-title' ); 

		?>
	</header>
	<?php endif; ?>

	<?php if ( 'default-alt' == $mura_vars['content']['post_style'] ) :

	mura_get_excerpt( );

	endif; ?>

	<?php if ( $mura_vars['content']['cover_wrapper'] ) : ?>

	<?php if ( $mura_vars['content']['post_style'] !== 'default-alt' ): ?>
	</div><!-- .entry-wrapper -->
	<?php endif; ?>
	</div><!-- .cover-wrapper -->

	<?php 

		endif;

		// Default alt open entry-wrapper

		if ( $mura_vars['content']['post_style'] === 'default-alt' && ! $mura_vars['content']['cover_wrapper'] ): ?>
		<div class="entry-wrapper">
			<?php tfm_after_entry_wrapper();
		endif;

		// ========================================================
		// Entry content
		// ========================================================

		if ( 'hero-default' !== $mura_vars['content']['post_style'] && 'default-alt' !== $mura_vars['content']['post_style'] && 'hero-cover' !== $mura_vars['content']['post_style']  ) {

			mura_get_excerpt( );

		}

		get_template_part( 'template-parts/post/continue-reading' ); 

		if ( is_single() ) : ?>

			<div class="single-content-wrapper">

				<?php tfm_before_single_content(); ?>

				<div class="entry-content">

					<?php

						the_content( );

						tfm_after_the_content();

						wp_link_pages( array(
						'before'      => '<div class="nav-links page-pagination">',
						'after'       => '</div>',
						'link_before' => '<span class="page-numbers">',
						'link_after'  => '</span>',
						'nextpagelink' => esc_html__( 'Next page', 'mura'),
						'previouspagelink' => esc_html__( 'Previous page', 'mura'),
						'next_or_number'   => 'next',
						) );

				    ?>

				</div><!-- .entry-content -->

			</div><!-- .single-content-wrapper -->

		<?php endif; ?>
		
		<?php if ( ! $mura_vars['content']['cover_wrapper'] ): ?>
		</div><!-- .entry-wrapper -->

	<?php endif; ?>

	</div><!-- .post-inner -->

</article>
