<?php

/**
 * Mura: Plugin Filters and actions
 *
 * @link http://www.3forty.media
 * @package Mura
 */


// Change location of TFM related posts
if ( function_exists('tfm_related_posts') ) {

    remove_action( 'tfm_after_comments', 'tfm_related_posts', 10 );
    add_action( 'tfm_before_footer', 'tfm_related_posts', 10 );

}

// TFM Related posts max columns with sidebar
function mura_related_posts_max_cols_with_sidebar() {

    return 4;

}
add_filter( 'tfm_related_posts_max_post_cols_with_sidebar', 'mura_related_posts_max_cols_with_sidebar');

// Change location of TFM header social for Logo left Header
if ( function_exists('tfm_social_icons_theme_header') ) {

    if ( get_theme_mod( 'mura_header_layout', 'default') === 'logo-left-menu-right' ) {

        remove_action( 'tfm_header_left', 'tfm_social_icons_theme_header', 10 );
        add_action( 'tfm_header_right', 'tfm_social_icons_theme_header', 40 );
        
    }

}

function mura_set_post_tag_colors() {
    return true;
}
add_filter( 'tfm_set_tag_colors', 'mura_set_post_tag_colors');





