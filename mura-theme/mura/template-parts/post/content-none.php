<?php
/**
 * Template part for displaying empty search results
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

if ( ! is_search() ) {
	return;
}

 ?>

<article id="post-<?php the_ID(); ?>" class="article search-no-results">

	<h2><?php echo esc_html__( 'Sorry, nothing matched your search terms. Please try again with some different keywords', 'mura' ); ?></h2>

</article>
