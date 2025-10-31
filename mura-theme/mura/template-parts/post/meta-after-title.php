<?php
/**
 * Template part for displaying post meta
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Mura
 * @since 1.0
 * @version 1.2
 */

?>
<?php

tfm_after_entry_title();

// Check if the entry meta is active
if ( mura_toggle_entry_meta( 'after_title_meta' ) ):

?>

<div class="entry-meta after-title">

	<ul class="after-title-meta">

		<?php tfm_prepend_after_title_meta(); ?>

		<?php if ( mura_toggle_entry_meta( 'author_avatar' ) ) : ?>

			<li class="entry-meta-avatar">

				<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ?>">

				<?php echo get_avatar( get_the_author_meta('ID'), 40 ); ?>

				</a>

			</li>

		<?php endif; ?>

		<?php if ( mura_toggle_entry_meta( 'author' ) ): ?>

			<li class="entry-meta-author">

				<span class="screen-reader-text"><?php echo esc_html__( 'Posted by', 'mura' ); ?></span><?php if ( mura_toggle_entry_meta( 'by' ) ): ?><i dir="ltr"><?php echo esc_html__( 'by', 'mura' ) ?></i><?php endif; ?> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ?>"><?php echo get_the_author() ?></a>

			</li>

			<?php endif; ?>

		<?php if ( mura_toggle_entry_meta( 'date' ) ): ?>

		<li class="entry-meta-date">

			<?php 

			$title = get_the_title('','', false);

			if ( ! is_single( ) && strlen($title) == 0 ) {

			echo '<a href="' . get_the_permalink() . '">';

			} ?>

			<time datetime="<?php echo get_the_date( 'Y-m-d' ) ?>"><?php the_time( get_option( 'date_format' ) ); ?></time>

			<?php 

			if ( ! is_single( ) && strlen($title) == 0 ) {

			echo '</a>';

			} ?>

		</li>

	<?php endif; ?>

	<?php if ( mura_toggle_entry_meta( 'updated_date' ) ) : ?>

		<li class="entry-meta-date-updated">

			<?php mura_updated_date(); ?>

		</li>

	<?php endif; ?>

	<?php if ( mura_toggle_entry_meta( 'comment_count' ) ): ?>

		<li class="entry-meta-comment-count">

			<?php if ( is_single( ) ) : ?>

				<a href="#comments">

			<?php endif;  ?>

			<?php comments_number( esc_html__('0 Comments', 'mura'), esc_html__('1 Comment', 'mura'), esc_html__('% Comments', 'mura') ) ?>

			<?php if ( is_single( ) ) : ?>

				</a>

			<?php endif;  ?>

		</li>

	<?php endif; ?>

	<?php if ( mura_toggle_entry_meta( 'read_time' ) ):

		tfm_read_time( true );

	endif; ?>

	<?php tfm_append_after_title_meta(); ?>

	</ul>
	
</div>

<?php endif;

tfm_after_after_title_meta(); ?>