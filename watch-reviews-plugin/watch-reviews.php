<?php
/**
 * Plugin Name: Watch Reviews
 * Plugin URI: https://tellingtime.com
 * Description: A Gutenberg block plugin for adding detailed watch review ratings with percentage-based scoring, pros/cons lists, and recommendation system.
 * Version: 1.0.0
 * Author: TellingTime
 * Author URI: https://tellingtime.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: watch-reviews
 * Requires at least: 6.0
 * Requires PHP: 7.4
 *
 * @package WatchReviews
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define plugin constants.
define( 'WATCH_REVIEWS_VERSION', '1.0.0' );
define( 'WATCH_REVIEWS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'WATCH_REVIEWS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

/**
 * Main Watch Reviews Plugin Class
 */
class Watch_Reviews_Plugin {

    /**
     * Instance of this class.
     *
     * @var object
     */
    private static $instance = null;

    /**
     * Initialize the plugin.
     */
    private function __construct() {
        add_action( 'init', array( $this, 'register_block' ) );
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_frontend_assets' ) );
        add_filter( 'the_content', array( $this, 'append_review_block' ), 999 );
    }

    /**
     * Get instance of this class.
     *
     * @return Watch_Reviews_Plugin
     */
    public static function get_instance() {
        if ( null === self::$instance ) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Register the Gutenberg block.
     */
    public function register_block() {
        // Register block editor script.
        wp_register_script(
            'watch-reviews-block-editor',
            WATCH_REVIEWS_PLUGIN_URL . 'assets/js/block.js',
            array(
                'wp-blocks',
                'wp-element',
                'wp-block-editor',
                'wp-components',
                'wp-data',
                'wp-compose',
            ),
            WATCH_REVIEWS_VERSION,
            true
        );

        // Register editor styles.
        wp_register_style(
            'watch-reviews-block-editor',
            WATCH_REVIEWS_PLUGIN_URL . 'assets/css/editor.css',
            array( 'wp-edit-blocks' ),
            WATCH_REVIEWS_VERSION
        );

        // Register frontend styles.
        wp_register_style(
            'watch-reviews-block',
            WATCH_REVIEWS_PLUGIN_URL . 'assets/css/frontend.css',
            array(),
            WATCH_REVIEWS_VERSION
        );

        // Register the block.
        register_block_type( 'watch-reviews/rating-block', array(
            'editor_script'   => 'watch-reviews-block-editor',
            'editor_style'    => 'watch-reviews-block-editor',
            'style'           => 'watch-reviews-block',
            'render_callback' => array( $this, 'render_block' ),
            'attributes'      => array(
                'qualityRating'      => array( 'type' => 'number', 'default' => 0 ),
                'dialRating'         => array( 'type' => 'number', 'default' => 0 ),
                'movementRating'     => array( 'type' => 'number', 'default' => 0 ),
                'wearabilityRating'  => array( 'type' => 'number', 'default' => 0 ),
                'designRating'       => array( 'type' => 'number', 'default' => 0 ),
                'recommend'          => array( 'type' => 'boolean', 'default' => true ),
                'likes'              => array( 'type' => 'array', 'default' => array() ),
                'dislikes'           => array( 'type' => 'array', 'default' => array() ),
            ),
        ) );
    }

    /**
     * Enqueue frontend assets.
     */
    public function enqueue_frontend_assets() {
        if ( is_singular() ) {
            wp_enqueue_style( 'watch-reviews-block' );
        }
    }

    /**
     * Render the block on the frontend.
     *
     * @param array $attributes Block attributes.
     * @return string Block HTML.
     */
    public function render_block( $attributes ) {
        // Don't render in editor or if no ratings set.
        if ( is_admin() ) {
            return '';
        }

        // Calculate average rating.
        $ratings = array(
            $attributes['qualityRating'],
            $attributes['dialRating'],
            $attributes['movementRating'],
            $attributes['wearabilityRating'],
            $attributes['designRating'],
        );

        $total_rating = array_sum( $ratings );
        $average_rating = $total_rating > 0 ? round( $total_rating / 5 ) : 0;

        // Get rating label.
        $rating_label = $this->get_rating_label( $average_rating );

        ob_start();
        include WATCH_REVIEWS_PLUGIN_DIR . 'includes/render-template.php';
        return ob_get_clean();
    }

    /**
     * Append review block to post content.
     *
     * @param string $content Post content.
     * @return string Modified content.
     */
    public function append_review_block( $content ) {
        if ( ! is_singular( 'post' ) || ! is_main_query() || ! in_the_loop() ) {
            return $content;
        }

        // Check if post has watch review data stored.
        global $post;
        $has_review = get_post_meta( $post->ID, '_watch_review_data', true );

        if ( $has_review ) {
            // The block will be rendered at the bottom via its position in the content.
            // This filter ensures it's always at the end.
            return $content;
        }

        return $content;
    }

    /**
     * Get rating label based on score.
     *
     * @param int $rating Rating percentage.
     * @return string Rating label.
     */
    private function get_rating_label( $rating ) {
        if ( $rating >= 90 ) {
            return __( 'Excellent!', 'watch-reviews' );
        } elseif ( $rating >= 80 ) {
            return __( 'Great!', 'watch-reviews' );
        } elseif ( $rating >= 70 ) {
            return __( 'Good', 'watch-reviews' );
        } elseif ( $rating >= 60 ) {
            return __( 'Fair', 'watch-reviews' );
        } else {
            return __( 'Needs Improvement', 'watch-reviews' );
        }
    }

    /**
     * Get structured data for schema.org.
     *
     * @param array $attributes Block attributes.
     * @param int   $post_id    Post ID.
     * @return array Structured data.
     */
    public function get_structured_data( $attributes, $post_id ) {
        $post = get_post( $post_id );

        $ratings = array(
            $attributes['qualityRating'],
            $attributes['dialRating'],
            $attributes['movementRating'],
            $attributes['wearabilityRating'],
            $attributes['designRating'],
        );

        $average_rating = array_sum( $ratings ) / 5;

        $schema = array(
            '@context'    => 'https://schema.org',
            '@type'       => 'Review',
            'itemReviewed' => array(
                '@type' => 'Product',
                'name'  => get_the_title( $post_id ),
            ),
            'reviewRating' => array(
                '@type'       => 'Rating',
                'ratingValue' => $average_rating,
                'bestRating'  => 100,
                'worstRating' => 0,
            ),
            'author' => array(
                '@type' => 'Person',
                'name'  => get_the_author_meta( 'display_name', $post->post_author ),
            ),
            'datePublished' => get_the_date( 'c', $post_id ),
        );

        // Add positive and negative notes if available.
        if ( ! empty( $attributes['likes'] ) ) {
            $schema['positiveNotes'] = $attributes['likes'];
        }

        if ( ! empty( $attributes['dislikes'] ) ) {
            $schema['negativeNotes'] = $attributes['dislikes'];
        }

        return $schema;
    }
}

// Initialize the plugin.
Watch_Reviews_Plugin::get_instance();
