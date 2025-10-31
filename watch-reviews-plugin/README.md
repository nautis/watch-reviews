# Watch Reviews Plugin

A comprehensive WordPress Gutenberg block plugin for adding detailed watch review ratings with percentage-based scoring, pros/cons lists, and recommendation system.

## Features

- **Percentage-Based Ratings (0-100%)**: Rate watches across 5 categories:
  - Quality
  - Dial
  - Movement
  - Wearability
  - Design

- **Visual Rating Display**:
  - Circular gauge showing overall average score
  - Individual progress bars for each category
  - Dynamic rating labels (Excellent, Great, Good, Fair, Needs Improvement)

- **Recommendation System**: Yes/No recommendation with visual badge

- **Pros & Cons Lists**:
  - Add unlimited positive points
  - Add unlimited negative points
  - Clean, numbered list display

- **SEO Optimized**: Includes Schema.org structured data (Review schema) for better search engine visibility

- **Responsive Design**: Looks great on all devices

- **Theme Independent**: Works with any WordPress theme

## Installation

1. Download the `watch-reviews-plugin` folder
2. Upload it to your WordPress installation's `/wp-content/plugins/` directory
3. Go to WordPress Admin → Plugins
4. Find "Watch Reviews" in the list and click "Activate"

## Usage

### Adding a Review to a Post

1. Create or edit a post in WordPress
2. Click the "+" button to add a new block
3. Search for "Watch Review Rating" or find it under the Widgets category
4. Add the block to your post (it will automatically appear at the bottom of the published post)

### Configuring the Review

The block settings appear in the right sidebar (Inspector Controls):

**Rating Settings Panel**:
- Use the sliders to set ratings (0-100%) for each of the 5 categories
- The overall score is calculated automatically as the average

**Recommendation Panel**:
- Toggle "Would you recommend this watch?" on/off

**Positives Panel**:
- Click "+ Add Positive" to add positive points
- Enter text for each point
- Click the trash icon to remove a point

**Negatives Panel**:
- Click "+ Add Negative" to add negative points
- Enter text for each point
- Click the trash icon to remove a point

### Preview

The block shows a live preview in the editor, so you can see exactly how it will look on your published post.

## Styling

The plugin includes its own styling that matches the Canon EOS review example:
- Orange/red gradient progress bars
- Circular gauge with orange accent
- Green checkmarks for positives
- Red X icons for negatives

The styles are designed to work with most themes but inherit some styles (fonts, etc.) from your active theme for consistency.

## Schema.org Structured Data

The plugin automatically adds Review schema markup to your posts, which helps search engines understand your review content. This can result in:
- Rich snippets in search results
- Better SEO performance
- Enhanced visibility for product reviews

## Requirements

- WordPress 6.0 or higher
- PHP 7.4 or higher
- Gutenberg block editor (enabled by default in WordPress 5.0+)

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## Support

For issues, questions, or feature requests, please contact the plugin author.

## Version History

### 1.0.0 - Initial Release
- Percentage-based rating system (0-100%)
- 5 rating categories for watches
- Recommendation system
- Pros/cons dynamic lists
- Schema.org structured data
- Responsive design
- Gutenberg block integration

## License

GPL v2 or later

## Credits

Created for TellingTime.com
