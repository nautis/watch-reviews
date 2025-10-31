# Installation Guide - Watch Reviews Plugin

## Quick Installation

### Method 1: Upload via WordPress Admin (Recommended)

1. **Prepare the plugin**:
   - Compress the entire `watch-reviews-plugin` folder into a ZIP file
   - Name it `watch-reviews-plugin.zip`

2. **Upload to WordPress**:
   - Log into your WordPress admin panel
   - Go to **Plugins → Add New**
   - Click **Upload Plugin** at the top
   - Click **Choose File** and select `watch-reviews-plugin.zip`
   - Click **Install Now**
   - Click **Activate Plugin**

### Method 2: Manual FTP/File Manager Upload

1. **Upload the folder**:
   - Using FTP or your hosting file manager
   - Upload the entire `watch-reviews-plugin` folder to:
     ```
     /wp-content/plugins/
     ```

2. **Activate**:
   - Go to WordPress Admin → **Plugins**
   - Find "Watch Reviews" in the list
   - Click **Activate**

## Verification

After activation, verify the plugin is working:

1. Create or edit a post
2. Click the "+" button to add a block
3. Search for "Watch Review"
4. You should see "Watch Review Rating" block available

## Usage

1. **Add the block to your post** (anywhere - it will display at the bottom when published)
2. **Configure in the sidebar**:
   - Set ratings (0-100%) for each category
   - Toggle recommendation Yes/No
   - Add positive points
   - Add negative points
3. **Preview** - The editor shows exactly how it will look
4. **Publish** - The review block appears at the bottom of your post

## File Structure

```
watch-reviews-plugin/
├── watch-reviews.php              # Main plugin file
├── README.md                      # Plugin documentation
├── INSTALLATION.md               # This file
├── assets/
│   ├── css/
│   │   ├── editor.css            # Gutenberg editor styles
│   │   └── frontend.css          # Public-facing styles
│   └── js/
│       └── block.js              # Gutenberg block JavaScript
└── includes/
    └── render-template.php       # Frontend rendering template
```

## Troubleshooting

**Block doesn't appear in editor:**
- Clear your browser cache
- Try a hard refresh (Ctrl+Shift+R or Cmd+Shift+R)
- Disable other plugins temporarily to check for conflicts

**Styles don't look right:**
- Clear WordPress cache (if using a caching plugin)
- Check if your theme has CSS that might conflict
- Try viewing in an incognito/private browser window

**Review doesn't appear at bottom of post:**
- Make sure you've added the block to your post
- Verify you're viewing a single post page (not archive/home)
- Check that you've set at least one rating value

## Requirements

- WordPress 6.0+
- PHP 7.4+
- Gutenberg block editor enabled

## Uninstallation

1. Deactivate the plugin from **Plugins** page
2. Click **Delete** to remove it completely
3. Note: All review data stored in posts will be removed when the plugin is deleted

## Need Help?

For support or questions, contact the plugin developer.
