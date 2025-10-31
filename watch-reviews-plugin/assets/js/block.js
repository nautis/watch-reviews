(function (wp) {
    const { registerBlockType } = wp.blocks;
    const { InspectorControls } = wp.blockEditor;
    const {
        PanelBody,
        RangeControl,
        ToggleControl,
        Button,
        TextControl,
    } = wp.components;
    const { Fragment, createElement: el } = wp.element;
    const { __ } = wp.i18n;

    registerBlockType('watch-reviews/rating-block', {
        title: __('Watch Review Rating', 'watch-reviews'),
        description: __('Add a comprehensive watch review with ratings, pros, and cons.', 'watch-reviews'),
        icon: 'star-filled',
        category: 'widgets',
        keywords: [__('watch', 'watch-reviews'), __('review', 'watch-reviews'), __('rating', 'watch-reviews')],

        edit: function (props) {
            const { attributes, setAttributes } = props;
            const {
                qualityRating,
                dialRating,
                movementRating,
                wearabilityRating,
                designRating,
                recommend,
                likes,
                dislikes,
            } = attributes;

            // Calculate average rating
            const averageRating = Math.round(
                (qualityRating + dialRating + movementRating + wearabilityRating + designRating) / 5
            );

            // Get rating label
            const getRatingLabel = (rating) => {
                if (rating >= 90) return __('Excellent!', 'watch-reviews');
                if (rating >= 80) return __('Great!', 'watch-reviews');
                if (rating >= 70) return __('Good', 'watch-reviews');
                if (rating >= 60) return __('Fair', 'watch-reviews');
                return __('Needs Improvement', 'watch-reviews');
            };

            // Add new like
            const addLike = () => {
                setAttributes({ likes: [...likes, ''] });
            };

            // Update like
            const updateLike = (index, value) => {
                const newLikes = [...likes];
                newLikes[index] = value;
                setAttributes({ likes: newLikes });
            };

            // Remove like
            const removeLike = (index) => {
                const newLikes = likes.filter((_, i) => i !== index);
                setAttributes({ likes: newLikes });
            };

            // Add new dislike
            const addDislike = () => {
                setAttributes({ dislikes: [...dislikes, ''] });
            };

            // Update dislike
            const updateDislike = (index, value) => {
                const newDislikes = [...dislikes];
                newDislikes[index] = value;
                setAttributes({ dislikes: newDislikes });
            };

            // Remove dislike
            const removeDislike = (index) => {
                const newDislikes = dislikes.filter((_, i) => i !== index);
                setAttributes({ dislikes: newDislikes });
            };

            return el(
                Fragment,
                {},
                el(
                    InspectorControls,
                    {},
                    el(
                        PanelBody,
                        { title: __('Rating Settings', 'watch-reviews'), initialOpen: true },
                        el(RangeControl, {
                            label: __('Quality', 'watch-reviews'),
                            value: qualityRating,
                            onChange: (value) => setAttributes({ qualityRating: value }),
                            min: 0,
                            max: 100,
                            step: 1,
                        }),
                        el(RangeControl, {
                            label: __('Dial', 'watch-reviews'),
                            value: dialRating,
                            onChange: (value) => setAttributes({ dialRating: value }),
                            min: 0,
                            max: 100,
                            step: 1,
                        }),
                        el(RangeControl, {
                            label: __('Movement', 'watch-reviews'),
                            value: movementRating,
                            onChange: (value) => setAttributes({ movementRating: value }),
                            min: 0,
                            max: 100,
                            step: 1,
                        }),
                        el(RangeControl, {
                            label: __('Wearability', 'watch-reviews'),
                            value: wearabilityRating,
                            onChange: (value) => setAttributes({ wearabilityRating: value }),
                            min: 0,
                            max: 100,
                            step: 1,
                        }),
                        el(RangeControl, {
                            label: __('Design', 'watch-reviews'),
                            value: designRating,
                            onChange: (value) => setAttributes({ designRating: value }),
                            min: 0,
                            max: 100,
                            step: 1,
                        })
                    ),
                    el(
                        PanelBody,
                        { title: __('Recommendation', 'watch-reviews'), initialOpen: true },
                        el(ToggleControl, {
                            label: __('Would you recommend this watch?', 'watch-reviews'),
                            checked: recommend,
                            onChange: (value) => setAttributes({ recommend: value }),
                        })
                    ),
                    el(
                        PanelBody,
                        { title: __('Positives', 'watch-reviews'), initialOpen: false },
                        likes.map((like, index) =>
                            el(
                                'div',
                                { key: index, style: { marginBottom: '10px', display: 'flex', gap: '8px' } },
                                el(TextControl, {
                                    value: like,
                                    onChange: (value) => updateLike(index, value),
                                    placeholder: __('Enter a positive point', 'watch-reviews'),
                                    style: { flex: 1 }
                                }),
                                el(Button, {
                                    isDestructive: true,
                                    icon: 'trash',
                                    onClick: () => removeLike(index),
                                })
                            )
                        ),
                        el(Button, {
                            isPrimary: true,
                            onClick: addLike,
                            style: { marginTop: '10px' }
                        }, __('+ Add Positive', 'watch-reviews'))
                    ),
                    el(
                        PanelBody,
                        { title: __('Negatives', 'watch-reviews'), initialOpen: false },
                        dislikes.map((dislike, index) =>
                            el(
                                'div',
                                { key: index, style: { marginBottom: '10px', display: 'flex', gap: '8px' } },
                                el(TextControl, {
                                    value: dislike,
                                    onChange: (value) => updateDislike(index, value),
                                    placeholder: __('Enter a negative point', 'watch-reviews'),
                                    style: { flex: 1 }
                                }),
                                el(Button, {
                                    isDestructive: true,
                                    icon: 'trash',
                                    onClick: () => removeDislike(index),
                                })
                            )
                        ),
                        el(Button, {
                            isPrimary: true,
                            onClick: addDislike,
                            style: { marginTop: '10px' }
                        }, __('+ Add Negative', 'watch-reviews'))
                    )
                ),
                // Editor preview
                el(
                    'div',
                    { className: 'watch-review-block watch-review-editor' },
                    el(
                        'div',
                        { className: 'watch-review-verdict' },
                        el('h3', { className: 'watch-review-heading' }, __('Verdict', 'watch-reviews')),
                        el(
                            'div',
                            { className: 'watch-review-content' },
                            // Overall Score
                            el(
                                'div',
                                { className: 'watch-review-overall' },
                                el(
                                    'div',
                                    { className: 'watch-review-gauge' },
                                    el(
                                        'svg',
                                        { className: 'circular-gauge', viewBox: '0 0 200 200', width: 160, height: 160 },
                                        el('circle', {
                                            cx: 100,
                                            cy: 100,
                                            r: 80,
                                            fill: 'none',
                                            stroke: '#f0f0f0',
                                            strokeWidth: 20,
                                        }),
                                        el('circle', {
                                            cx: 100,
                                            cy: 100,
                                            r: 80,
                                            fill: 'none',
                                            stroke: '#FF9500',
                                            strokeWidth: 20,
                                            strokeLinecap: 'round',
                                            strokeDasharray: `${(averageRating / 100) * 502.65} 502.65`,
                                            transform: 'rotate(-90 100 100)',
                                        }),
                                        el(
                                            'text',
                                            {
                                                x: 100,
                                                y: 100,
                                                textAnchor: 'middle',
                                                dominantBaseline: 'middle',
                                                fontSize: 48,
                                                fontWeight: 'bold',
                                                fill: '#333',
                                            },
                                            `${averageRating}%`
                                        )
                                    )
                                ),
                                el('div', { className: 'watch-review-label' }, getRatingLabel(averageRating))
                            ),
                            // Individual Ratings
                            el(
                                'div',
                                { className: 'watch-review-ratings' },
                                [
                                    { label: 'QUALITY', value: qualityRating },
                                    { label: 'DIAL', value: dialRating },
                                    { label: 'MOVEMENT', value: movementRating },
                                    { label: 'WEARABILITY', value: wearabilityRating },
                                    { label: 'DESIGN', value: designRating },
                                ].map((rating, index) =>
                                    el(
                                        'div',
                                        { key: index, className: 'watch-review-rating-item' },
                                        el('div', { className: 'watch-review-rating-label' }, rating.label),
                                        el(
                                            'div',
                                            { className: 'watch-review-rating-bar-container' },
                                            el(
                                                'div',
                                                { className: 'watch-review-rating-bar' },
                                                el('div', {
                                                    className: 'watch-review-rating-fill',
                                                    style: { width: `${rating.value}%` },
                                                })
                                            ),
                                            el('div', { className: 'watch-review-rating-value' }, `${rating.value}%`)
                                        )
                                    )
                                )
                            )
                        ),
                        // Recommendation
                        el(
                            'div',
                            { className: 'watch-review-recommendation' },
                            el('h4', {}, __('Would you recommend this watch?', 'watch-reviews')),
                            el(
                                'div',
                                { className: `watch-review-recommendation-badge ${recommend ? 'recommend-yes' : 'recommend-no'}` },
                                el('span', { className: 'recommendation-icon' }, recommend ? '👍' : '👎'),
                                el('span', { className: 'recommendation-text' }, recommend ? __('Yes', 'watch-reviews') : __('No', 'watch-reviews'))
                            )
                        ),
                        // Pros and Cons
                        (likes.length > 0 || dislikes.length > 0) &&
                            el(
                                'div',
                                { className: 'watch-review-pros-cons' },
                                likes.length > 0 &&
                                    el(
                                        'div',
                                        { className: 'watch-review-likes' },
                                        el(
                                            'h4',
                                            { className: 'watch-review-pros-heading' },
                                            el('svg', {
                                                className: 'icon-positive',
                                                width: 24,
                                                height: 24,
                                                viewBox: '0 0 24 24',
                                                fill: 'none',
                                                dangerouslySetInnerHTML: {
                                                    __html: '<circle cx="12" cy="12" r="10" fill="#4CAF50"/><path d="M7 13l3 3 7-7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>',
                                                },
                                            }),
                                            ' ',
                                            __('POSITIVES', 'watch-reviews')
                                        ),
                                        el(
                                            'ol',
                                            { className: 'watch-review-list' },
                                            likes.filter(like => like.trim() !== '').map((like, index) =>
                                                el(
                                                    'li',
                                                    { key: index, className: 'watch-review-list-item' },
                                                    el('span', { className: 'item-number' }, `${String(index + 1).padStart(2, '0')}.`),
                                                    el('span', { className: 'item-text' }, like)
                                                )
                                            )
                                        )
                                    ),
                                dislikes.length > 0 &&
                                    el(
                                        'div',
                                        { className: 'watch-review-dislikes' },
                                        el(
                                            'h4',
                                            { className: 'watch-review-cons-heading' },
                                            el('svg', {
                                                className: 'icon-negative',
                                                width: 24,
                                                height: 24,
                                                viewBox: '0 0 24 24',
                                                fill: 'none',
                                                dangerouslySetInnerHTML: {
                                                    __html: '<circle cx="12" cy="12" r="10" fill="#F44336"/><path d="M8 8l8 8M16 8l-8 8" stroke="white" stroke-width="2" stroke-linecap="round"/>',
                                                },
                                            }),
                                            ' ',
                                            __('NEGATIVES', 'watch-reviews')
                                        ),
                                        el(
                                            'ol',
                                            { className: 'watch-review-list' },
                                            dislikes.filter(dislike => dislike.trim() !== '').map((dislike, index) =>
                                                el(
                                                    'li',
                                                    { key: index, className: 'watch-review-list-item' },
                                                    el('span', { className: 'item-number' }, `${String(index + 1).padStart(2, '0')}.`),
                                                    el('span', { className: 'item-text' }, dislike)
                                                )
                                            )
                                        )
                                    )
                            )
                    )
                )
            );
        },

        save: function () {
            // Server-side rendering
            return null;
        },
    });
})(window.wp);
