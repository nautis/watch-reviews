<?php
/**
 * Template part for displaying the header
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Mura
 * @since 1.0
 * @version 1.0
 */

?>
<div class="header-section header-left">

<?php mura_toggle_icon( 'menu' ); ?>

<?php mura_site_logo( ); ?>

<?php tfm_header_left(); ?>

<?php if ( has_nav_menu( 'primary' ) ) : ?>

	<div class="primary-menu-container">

	    <?php

	    wp_nav_menu( array( 'theme_location' => 'primary',
	     					'container' => 'nav',
	     					'container_class' => 'primary-menu-wrapper',
	     					'menu_class' => 'primary-menu',
	     					'menu_id' => 'primary-menu'));

	    ?>

	</div>

	<?php endif; ?>

</div>

	<div class="header-section header-right">

		<?php tfm_header_right(); ?>

		<?php if ( has_nav_menu( 'header-third' ) ) : ?>

	    <?php

	    wp_nav_menu( array( 'theme_location' => 'header-third',
	     					'container' => 'div',
	     					'container_class' => 'header-third-menu-wrapper',
	     					'menu_class' => 'primary-menu header-third',
	     					'menu_id' => 'header-third-menu')); 

	     					?>

	<?php endif; ?>

		<?php if ( get_theme_mod( 'mura_header_search_input', false ) ):

		    get_template_part( 'searchform', false );

		 endif; ?>

	<?php mura_toggle_icon( 'cart' ); ?>
		 
	<?php mura_toggle_icon( 'search' ); ?>

	<?php if ( has_nav_menu( 'header-secondary' ) ) : ?>

		    <?php

		    wp_nav_menu( array( 'theme_location' => 'header-secondary',
		     					'container' => 'div',
		     					'container_class' => 'header-secondary-menu-wrapper',
		     					'menu_class' => 'primary-menu header-secondary',
		     					'menu_id' => 'header-secondary')); 

		     					?>

		    <?php endif; ?>

</div>