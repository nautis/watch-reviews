<?php
/**
 * Template part for displaying continue reading button
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Mura
 * @since 1.0
 * @version 1.1
 */

?>

<?php if ( mura_toggle_entry_meta( 'read_more' ) ): ?>

	<ul class="entry-read-more">

		<li class="read-more-button"><a href="<?php echo esc_url( get_permalink() ); ?>" class="button read-more"><?php echo esc_html__( 'Continue Reading', 'mura'); ?></a></li>

        <?php if ( mura_toggle_entry_meta( 'read_time' ) ):

            tfm_read_time( true );

        endif; ?>

		<?php tfm_after_continue_reading_button(); ?>

	</ul>
	
<?php endif; ?>
