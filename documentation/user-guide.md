# Examiner Theme - Complete User Guide

## 📚 Table of Contents
1. [Quick Start](#quick-start)
2. [Installation & Setup](#installation--setup)
3. [Responsive Controls](#responsive-controls)
4. [Custom Blocks](#custom-blocks)
5. [Template Customization](#template-customization)
6. [Troubleshooting](#troubleshooting)
7. [Advanced Features](#advanced-features)

---

## 🚀 Quick Start

### System Requirements
- **WordPress**: 6.0 or higher
- **PHP**: 7.4 or higher  
- **MySQL**: 5.6 or higher
- **Memory**: 256MB minimum (512MB recommended)

### 1-Minute Setup
1. **Upload & Activate**: Install Examiner theme from Appearance > Themes
2. **Install Plugin**: Install the recommended "Stepfox Looks" plugin
3. **Site Editor**: Go to Appearance > Site Editor to start customizing
4. **Choose Template**: Select "Front Page" template to customize your homepage

---

## 📱 Installation & Setup

### Automatic Installation
```
1. WordPress Admin → Appearance → Themes
2. Click "Add New" → "Upload Theme"
3. Choose examiner.zip file
4. Click "Install Now" → "Activate"
```

### Post-Installation Steps
1. **Install Stepfox Looks Plugin**
   - Go to Appearance > Install Plugins
   - Click "Install" next to Stepfox Looks
   - Click "Activate Plugin"

2. **Configure Basic Settings**
   - Settings > Reading: Set homepage displays
   - Settings > Permalinks: Choose "Post name" structure
   - Users > Your Profile: Add author bio and avatar

3. **Import Demo Content (Optional)**
   - Tools > Import > WordPress
   - Upload sample-content.xml (if provided)
   - Import posts, pages, and media

---

## 🔧 Responsive Controls

### Accessing Responsive Settings
The Examiner theme includes **revolutionary responsive controls** that work with every block:

1. **Select Any Block** in the block editor
2. **Look for "Responsive" Panel** in the right sidebar
3. **Choose Device**: Desktop (default), Tablet, Mobile
4. **Adjust Settings** per device

### Available Controls

#### **Layout Controls**
- **Width**: Set custom width per device (%, px, vw)
- **Height**: Control height independently 
- **Display**: Show/hide blocks on specific devices
- **Position**: Static, relative, absolute, sticky, fixed

#### **Spacing Controls**
- **Padding**: Individual control (top, right, bottom, left)
- **Margin**: Responsive spacing around elements
- **Gap**: Control space between child elements

#### **Typography Controls**
- **Font Size**: Different sizes per device
- **Line Height**: Responsive line spacing
- **Letter Spacing**: Fine-tune text appearance

#### **Advanced Controls**
- **Flex Direction**: row, column, row-reverse, column-reverse
- **Flex Wrap**: wrap, nowrap, wrap-reverse
- **Justify Content**: flex-start, center, flex-end, space-between
- **Align Items**: stretch, flex-start, center, flex-end

### Example Usage
```
Desktop: Font size 24px, Margin 40px
Tablet: Font size 20px, Margin 20px  
Mobile: Font size 18px, Margin 10px
```

---

## 🧱 Custom Blocks

### Load More Block
**Purpose**: Add AJAX-powered pagination to Query Loop blocks

**How to Use**:
1. Add a Query Loop block to your page
2. Configure your post query (categories, number of posts, etc.)
3. Inside the Query Loop, add the "Load More" block
4. Customize button text and styling
5. The button automatically loads more posts without page refresh

**Customization Options**:
- Button text and colors
- Loading states and animations
- Posts per page increment
- Custom CSS classes

### Metafield Block  
**Purpose**: Display custom fields and metadata

**How to Use**:
1. Add "Metafield" block to any template
2. Choose data source: Custom Fields, ACF, or Post Meta
3. Select specific field to display
4. Choose display format: text, image, link, or button
5. Style with responsive controls

**Display Options**:
- **Text**: Plain text with formatting options
- **Image**: Display featured images or custom image fields
- **Link**: Create clickable links from URL fields
- **Button**: Turn field values into styled buttons

---

## 🎨 Template Customization

### Site Editor Overview
Access via: **Appearance > Site Editor**

#### Template Types
- **Front Page**: Homepage layout
- **Single Post**: Individual blog post layout  
- **Archive**: Category and tag pages
- **Search**: Search results page
- **404**: Error page template

#### Template Parts
- **Header**: Site navigation and branding
- **Footer**: Copyright, links, social media
- **Sidebar**: Widget areas (if using classic layouts)

### Customizing Your Homepage

1. **Go to Site Editor** → Templates → Front Page
2. **Choose Layout Style**:
   - Hero sections with featured posts
   - Multi-column news layout
   - Magazine-style grids
   - Custom block arrangements

3. **Configure Featured Sections**:
   - Hero carousel with latest posts
   - Category-specific content blocks
   - Advertisement spaces
   - Newsletter signup forms

4. **Responsive Adjustments**:
   - Test on different screen sizes
   - Adjust block widths and spacing
   - Hide/show elements per device

### Color Schemes
The theme includes several pre-built color variations:

- **Default**: Professional blue and white
- **Dark Mode**: Dark background with light text
- **Light Blue**: Softer, lighter color palette
- **Yellow Accent**: Bright, energetic styling
- **Oswald**: Typography-focused variant

**To Change Colors**:
1. Site Editor → Styles → Browse styles
2. Select your preferred color scheme
3. Or customize manually in Global Styles

---

## 🔍 Troubleshooting

### Common Issues & Solutions

#### **Responsive Controls Not Showing**
**Problem**: Can't see responsive options in block editor
**Solutions**:
- Ensure Stepfox Looks plugin is activated
- Clear browser cache and hard refresh (Ctrl+F5)
- Check plugin conflicts by deactivating other plugins temporarily

#### **Load More Button Not Working**
**Problem**: Button doesn't load additional content
**Solutions**:
1. **Check Browser Console** (F12) for JavaScript errors
2. **Plugin Conflicts**: Deactivate caching and optimization plugins temporarily
3. **Permalink Issues**: Go to Settings > Permalinks and click "Save Changes"
4. **Memory Limits**: Increase PHP memory limit to 512MB

#### **Site Layout Broken on Mobile**
**Problem**: Design doesn't look right on mobile devices
**Solutions**:
1. Use responsive controls to adjust block widths
2. Check if images are too large (use max-width: 100%)
3. Test flex-wrap settings on container blocks
4. Ensure text is readable (minimum 16px font size)

#### **Theme Installation Failed**
**Problem**: Can't install or activate theme
**Solutions**:
- Check file permissions (folders: 755, files: 644)
- Increase upload file size limit in hosting panel
- Ensure WordPress meets minimum requirements
- Try FTP upload if admin upload fails

### Debug Mode
For developers, enable WordPress debug mode:
```php
// Add to wp-config.php
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
```

---

## ⚡ Advanced Features

### Performance Optimization
- **Asset Bundling**: JavaScript files are automatically bundled for faster loading
- **Responsive Caching**: CSS is cached per device type
- **Image Optimization**: Built-in responsive image support
- **Lazy Loading**: Automatic for improved page speed

### SEO Features
- **Schema Markup**: Automatic structured data for news articles
- **Open Graph**: Social media sharing optimization
- **Title Tag Management**: Full control over page titles
- **Meta Descriptions**: Customizable for each page/post

### Developer Features
- **Custom Hooks**: Extend functionality with WordPress actions/filters
- **Child Theme Support**: Safe customization without losing updates
- **Translation Ready**: Full .pot file included for translations
- **RTL Support**: Right-to-left language compatibility

### Backup Recommendations
Before making major changes:
1. **Full Site Backup**: Use plugins like UpdraftPlus
2. **Database Export**: Via phpMyAdmin or hosting panel
3. **Theme Files**: Keep original theme files safe
4. **Test Environment**: Make changes on staging site first

---

## 📞 Support & Resources

### Getting Help
- **Documentation**: Visit https://stepfoxthemes.com/docs/examiner
- **Support Tickets**: https://stepfoxthemes.com/support
- **Video Tutorials**: https://stepfoxthemes.com/tutorials
- **Community Forum**: Connect with other users

### Updates & Maintenance
- **Theme Updates**: Automatic through WordPress admin
- **Plugin Updates**: Keep Stepfox Looks plugin current
- **WordPress Core**: Update WordPress regularly for security
- **Backup Schedule**: Weekly automated backups recommended

### Performance Monitoring
- **Page Speed**: Test with Google PageSpeed Insights
- **Mobile Friendly**: Use Google Mobile-Friendly Test
- **SEO Audit**: Tools like Yoast SEO or RankMath
- **Uptime Monitoring**: Services like UptimeRobot

---

## ✅ Quick Reference Checklist

### After Installation
- [ ] Stepfox Looks plugin activated
- [ ] Permalink structure set to "Post name"
- [ ] Sample content imported (optional)
- [ ] Site title and tagline configured
- [ ] Author profile completed

### Before Going Live
- [ ] All pages tested on mobile devices
- [ ] Contact forms working properly
- [ ] Social media links configured
- [ ] SEO titles and descriptions added
- [ ] Google Analytics installed
- [ ] Site backup scheduled

### Monthly Maintenance
- [ ] WordPress core updated
- [ ] Plugins updated
- [ ] Theme updated if available
- [ ] Backup verified
- [ ] Security scan completed

---

*This documentation covers Examiner Theme v1.0.0. For the latest updates and features, visit [stepfoxthemes.com](https://stepfoxthemes.com).*