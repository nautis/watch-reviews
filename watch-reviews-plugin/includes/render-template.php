<?php
/**
 * Watch Reviews Block Frontend Template
 *
 * @package WatchReviews
 * @var array $attributes Block attributes
 * @var int $average_rating Average rating percentage
 * @var string $rating_label Rating label text
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Get current post ID for schema.
$post_id = get_the_ID();
$plugin = Watch_Reviews_Plugin::get_instance();
$structured_data = $plugin->get_structured_data( $attributes, $post_id );
?>

<div class="watch-review-block">
    <!-- Schema.org structured data -->
    <script type="application/ld+json">
        <?php echo wp_json_encode( $structured_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ); ?>
    </script>

    <div class="watch-review-verdict">
        <h3 class="watch-review-heading"><?php esc_html_e( 'Verdict', 'watch-reviews' ); ?></h3>

        <div class="watch-review-content">
            <!-- Overall Score (Left Side) -->
            <div class="watch-review-overall">
                <div class="watch-review-gauge">
                    <svg class="circular-gauge" viewBox="0 0 200 200" width="160" height="160">
                        <!-- Background circle -->
                        <circle
                            cx="100"
                            cy="100"
                            r="80"
                            fill="none"
                            stroke="#f0f0f0"
                            stroke-width="20"
                        />
                        <!-- Progress circle -->
                        <circle
                            cx="100"
                            cy="100"
                            r="80"
                            fill="none"
                            stroke="#FF9500"
                            stroke-width="20"
                            stroke-linecap="round"
                            stroke-dasharray="<?php echo esc_attr( ( $average_rating / 100 ) * 502.65 ); ?> 502.65"
                            transform="rotate(-90 100 100)"
                        />
                        <!-- Percentage text -->
                        <text
                            x="100"
                            y="100"
                            text-anchor="middle"
                            dominant-baseline="middle"
                            font-size="48"
                            font-weight="bold"
                            fill="#333"
                        >
                            <?php echo esc_html( $average_rating ); ?>%
                        </text>
                    </svg>
                </div>
                <div class="watch-review-label"><?php echo esc_html( $rating_label ); ?></div>
            </div>

            <!-- Individual Ratings (Right Side) -->
            <div class="watch-review-ratings">
                <?php
                $rating_categories = array(
                    'qualityRating'     => __( 'Quality', 'watch-reviews' ),
                    'dialRating'        => __( 'Dial', 'watch-reviews' ),
                    'movementRating'    => __( 'Movement', 'watch-reviews' ),
                    'wearabilityRating' => __( 'Wearability', 'watch-reviews' ),
                    'designRating'      => __( 'Design', 'watch-reviews' ),
                );

                foreach ( $rating_categories as $key => $label ) :
                    $rating_value = isset( $attributes[ $key ] ) ? $attributes[ $key ] : 0;
                    ?>
                    <div class="watch-review-rating-item">
                        <div class="watch-review-rating-label"><?php echo esc_html( strtoupper( $label ) ); ?></div>
                        <div class="watch-review-rating-bar-container">
                            <div class="watch-review-rating-bar">
                                <div class="watch-review-rating-fill" style="width: <?php echo esc_attr( $rating_value ); ?>%;"></div>
                            </div>
                            <div class="watch-review-rating-value"><?php echo esc_html( $rating_value ); ?>%</div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Recommendation -->
        <?php if ( isset( $attributes['recommend'] ) ) : ?>
            <div class="watch-review-recommendation">
                <h4><?php esc_html_e( 'Would you recommend this watch?', 'watch-reviews' ); ?></h4>
                <div class="watch-review-recommendation-badge <?php echo $attributes['recommend'] ? 'recommend-yes' : 'recommend-no'; ?>">
                    <span class="recommendation-icon"><?php echo $attributes['recommend'] ? '👍' : '👎'; ?></span>
                    <span class="recommendation-text"><?php echo $attributes['recommend'] ? esc_html__( 'Yes', 'watch-reviews' ) : esc_html__( 'No', 'watch-reviews' ); ?></span>
                </div>
            </div>
        <?php endif; ?>

        <!-- Likes and Dislikes -->
        <?php if ( ! empty( $attributes['likes'] ) || ! empty( $attributes['dislikes'] ) ) : ?>
            <div class="watch-review-pros-cons">
                <!-- Likes -->
                <?php if ( ! empty( $attributes['likes'] ) ) : ?>
                    <div class="watch-review-likes">
                        <h4 class="watch-review-pros-heading">
                            <svg class="icon-positive" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <circle cx="12" cy="12" r="10" fill="#4CAF50"/>
                                <path d="M7 13l3 3 7-7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <?php esc_html_e( 'POSITIVES', 'watch-reviews' ); ?>
                        </h4>
                        <ol class="watch-review-list">
                            <?php foreach ( $attributes['likes'] as $index => $like ) : ?>
                                <li class="watch-review-list-item">
                                    <span class="item-number"><?php echo esc_html( sprintf( '%02d.', $index + 1 ) ); ?></span>
                                    <span class="item-text"><?php echo esc_html( $like ); ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ol>
                    </div>
                <?php endif; ?>

                <!-- Dislikes -->
                <?php if ( ! empty( $attributes['dislikes'] ) ) : ?>
                    <div class="watch-review-dislikes">
                        <h4 class="watch-review-cons-heading">
                            <svg class="icon-negative" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <circle cx="12" cy="12" r="10" fill="#F44336"/>
                                <path d="M8 8l8 8M16 8l-8 8" stroke="white" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                            <?php esc_html_e( 'NEGATIVES', 'watch-reviews' ); ?>
                        </h4>
                        <ol class="watch-review-list">
                            <?php foreach ( $attributes['dislikes'] as $index => $dislike ) : ?>
                                <li class="watch-review-list-item">
                                    <span class="item-number"><?php echo esc_html( sprintf( '%02d.', $index + 1 ) ); ?></span>
                                    <span class="item-text"><?php echo esc_html( $dislike ); ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ol>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
