# Examiner Theme - Troubleshooting Guide

## 🚨 Emergency Quick Fixes

### Site is Completely Broken
1. **Activate Default Theme**: Go to Appearance > Themes, activate Twenty Twenty-Three
2. **Deactivate All Plugins**: Go to Plugins > Installed Plugins, select all, choose "Deactivate"
3. **Check Error Logs**: Look in /wp-content/debug.log or hosting control panel
4. **Contact Support**: If site still broken, contact hosting provider

### Can't Access WordPress Admin
1. **Check URL**: Ensure you're using correct login URL (/wp-admin)
2. **Reset Password**: Use "Lost Password" link or reset via database
3. **Plugin Conflict**: Rename /wp-content/plugins folder to /wp-content/plugins-off
4. **Theme Issue**: Rename theme folder to force WordPress to use default theme

---

## 🔧 Common Issues & Solutions

### Responsive Controls Issues

#### Issue: "Responsive Panel Not Showing"
**Symptoms**: Can't see responsive controls in block editor sidebar
**Causes**: Plugin not activated, JavaScript errors, browser cache
**Solutions**:
```
1. Check Plugin Status:
   - Plugins > Installed Plugins
   - Ensure "Stepfox Looks" is activated
   - Look for any error messages

2. Clear Browser Cache:
   - Press Ctrl+Shift+Del (Windows) or Cmd+Shift+Del (Mac)
   - Select "Cache" and time range "All time"
   - Clear data and refresh page

3. Check JavaScript Console:
   - Press F12 in browser
   - Look for red error messages
   - Common fix: Update browser or disable ad blockers

4. Plugin Conflict Test:
   - Deactivate all plugins except Stepfox Looks
   - If responsive controls appear, reactivate plugins one by one
   - Last activated plugin is likely causing conflict
```

#### Issue: "Responsive Settings Not Saving"
**Symptoms**: Changes revert after saving or refreshing
**Solutions**:
- Increase PHP max_input_vars (recommend 3000+)
- Check hosting memory limits (512MB minimum)
- Clear all caching plugins
- Update to latest WordPress version

#### Issue: "Mobile Layout Broken"
**Symptoms**: Site doesn't look right on mobile devices
**Diagnostic Steps**:
```
1. Test Responsive Design:
   - Use Chrome DevTools (F12)
   - Click device toolbar icon
   - Test different screen sizes

2. Common Fixes:
   - Set container blocks to width: 100% on mobile
   - Use flex-wrap: wrap on column layouts
   - Ensure font sizes are at least 16px on mobile
   - Check image max-width is set to 100%
```

---

### Load More Block Issues

#### Issue: "Load More Button Not Working"
**Symptoms**: Button doesn't load additional posts, shows error, or does nothing
**Diagnosis**:
```
1. Browser Console Check:
   - Press F12, go to Console tab
   - Click Load More button
   - Look for error messages

2. Common Error Messages & Fixes:

   Error: "Security verification failed"
   Fix: Clear cache, refresh page. If persistent, deactivate security plugins temporarily.

   Error: "jQuery is not defined"  
   Fix: Theme or plugin conflict. Deactivate plugins one by one to identify culprit.

   Error: "Missing required parameters"
   Fix: Query block configuration issue. Re-configure the Query Loop block.

   Error: "No more posts found"
   Fix: Working correctly - all posts loaded.
```

**Step-by-Step Fix**:
```
1. Verify Setup:
   - Load More block is INSIDE Query Loop block
   - Query Loop has proper post query configured
   - Plugin is activated and up to date

2. Check Query Configuration:
   - Query Loop > Settings
   - Ensure "Inherit query from template" is correct
   - Set appropriate "Posts per page" (recommend 4-8)

3. Test with Default Settings:
   - Create new page
   - Add Query Loop block with default settings
   - Add Load More block inside
   - Test functionality

4. Plugin Conflict Check:
   - Deactivate caching plugins (WP Rocket, W3 Total Cache, etc.)
   - Deactivate security plugins temporarily
   - Deactivate optimization plugins (Autoptimize, etc.)
```

#### Issue: "Button Loads Same Posts"
**Symptoms**: Load More button works but shows duplicate content
**Solution**:
- Check Query Loop offset settings
- Ensure no duplicate post IDs in query
- Clear all caches
- Update to latest plugin version

---

### Theme Installation & Activation Issues

#### Issue: "Theme Installation Failed"
**Common Causes & Solutions**:

```
Error: "File size exceeds upload limit"
Solutions:
- Increase upload_max_filesize in hosting panel
- Use FTP to upload theme files manually
- Contact hosting provider to increase limits

Error: "Failed to write file to disk"
Solutions:
- Check disk space on hosting account
- Verify file permissions (folders: 755, files: 644)
- Temporarily disable security plugins

Error: "Theme is missing style.css"
Solutions:
- Download theme again from original source
- Ensure zip file is complete and not corrupted
- Extract and check if style.css exists
```

#### Issue: "White Screen After Activation"
**Immediate Actions**:
1. **Access via FTP**: Rename current theme folder to deactivate
2. **Check Error Logs**: Look for PHP fatal errors
3. **Increase Memory**: Add ini_set('memory_limit', '512M'); to wp-config.php
4. **Plugin Conflicts**: Rename plugins folder to deactivate all

---

### Performance Issues

#### Issue: "Site Loading Slowly"
**Optimization Checklist**:
```
1. Image Optimization:
   - Compress images before upload (use TinyPNG)
   - Install image optimization plugin (Smush, ShortPixel)
   - Use WebP format when possible

2. Caching Setup:
   - Install caching plugin (WP Rocket, W3 Total Cache)
   - Enable browser caching
   - Use CDN service (Cloudflare, MaxCDN)

3. Plugin Audit:
   - Deactivate unused plugins
   - Check plugin performance impact
   - Update all plugins to latest versions

4. Hosting Optimization:
   - Use PHP 8.0+ 
   - Enable OPcache if available
   - Consider upgrading hosting plan
```

#### Issue: "Responsive CSS Not Loading"
**Symptoms**: Desktop version loads but mobile/tablet styles missing
**Solutions**:
- Clear all caches (hosting, plugin, browser)
- Check if responsive-bundle.min.css file exists
- Rebuild responsive bundle: run build script
- Check file permissions on assets folder

---

### Content & Layout Issues

#### Issue: "Blocks Not Displaying Correctly" 
**Troubleshooting Steps**:
```
1. Clear Block Editor Cache:
   - Gutenberg > Settings > Clear cache
   - Or deactivate/reactivate Gutenberg plugin

2. Block Validation Errors:
   - Look for "This block contains unexpected or invalid content"
   - Click "Attempt Block Recovery" 
   - Or "Convert to HTML" if recovery fails

3. Theme Block Support:
   - Ensure theme.json is properly configured
   - Check if custom blocks are registered
   - Update theme to latest version
```

#### Issue: "Fonts Not Loading"
**Diagnosis**:
- Check browser console for 404 errors on font files
- Verify font files exist in /assets/fonts/ directory
- Clear browser cache and hard refresh

**Solutions**:
```
1. Font File Issues:
   - Re-upload font files via FTP
   - Check file permissions (644 for files)
   - Ensure WOFF2 format is used

2. Font Face Declaration:
   - Verify theme.json has correct font paths
   - Check for typos in font family names
   - Ensure src paths use file: prefix

3. Browser Compatibility:
   - Test in different browsers
   - Provide fallback fonts in font-family stack
   - Check if hosting blocks font MIME types
```

---

### Database & Content Issues

#### Issue: "Missing Content After Import"
**Symptoms**: Some posts, images, or pages didn't import
**Solutions**:
- Increase PHP max_execution_time (300 seconds)
- Import in smaller batches
- Check media folder permissions
- Manually upload missing images

#### Issue: "Broken Internal Links"
**Symptoms**: Links point to old domain or show 404 errors
**Solutions**:
- Use Search Replace DB tool or plugin
- Update WordPress Address and Site Address
- Clear permalink structure (Settings > Permalinks > Save)

---

### Security & Access Issues

#### Issue: "403 Forbidden Errors"
**Common Causes**:
- File permission issues (folders: 755, files: 644)
- .htaccess file corruption
- Security plugin blocking access
- Hosting firewall rules

**Solutions**:
```
1. Fix File Permissions:
   find /path/to/wordpress/ -type d -exec chmod 755 {} \;
   find /path/to/wordpress/ -type f -exec chmod 644 {} \;

2. Reset .htaccess:
   - Rename .htaccess to .htaccess-backup
   - Go to Settings > Permalinks > Save Changes
   - WordPress will regenerate .htaccess

3. Security Plugin Check:
   - Temporarily deactivate security plugins
   - Check security plugin logs for blocked requests
   - Whitelist your IP address if needed
```

---

## 🛠️ Advanced Troubleshooting

### Debug Mode Setup
Add to wp-config.php:
```php
// Enable Debug Mode
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
define('SCRIPT_DEBUG', true);

// Optional: Query Debug
define('SAVEQUERIES', true);
```

### Browser Developer Tools
**Chrome DevTools (F12)**:
- **Console**: JavaScript errors and logs
- **Network**: Failed resource loading
- **Elements**: HTML structure and CSS inspection
- **Application**: Local storage and cache data

### Server Error Logs
**Common Locations**:
- cPanel: Error Logs section
- /wp-content/debug.log
- /var/log/apache2/error.log
- /var/log/nginx/error.log

### Performance Testing Tools
- **GTMetrix**: Page speed analysis
- **Google PageSpeed Insights**: Performance scoring
- **Pingdom Speed Test**: Load time testing
- **WebPageTest**: Advanced performance metrics

---

## 📞 Getting Additional Help

### Before Contacting Support
1. **Try Safe Mode**: Deactivate all plugins, use default theme
2. **Document the Issue**: Screenshots, error messages, steps taken
3. **Gather Information**: WordPress version, PHP version, hosting details
4. **Test in Incognito**: Rules out browser cache/extension issues

### Support Resources
- **Knowledge Base**: https://stepfoxthemes.com/docs
- **Video Tutorials**: https://stepfoxthemes.com/tutorials  
- **Support Tickets**: https://stepfoxthemes.com/support
- **Community Forum**: Connect with other users

### Information to Include in Support Requests
```
1. WordPress Version: (found in Dashboard > Updates)
2. PHP Version: (found in Tools > Site Health)
3. Theme Version: (found in Appearance > Themes)
4. Plugin Version: (found in Plugins > Installed Plugins)
5. Hosting Provider: 
6. Error Message: (exact text/screenshot)
7. Steps to Reproduce: (detailed description)
8. Browser/Device: (Chrome, Firefox, mobile, etc.)
```

---

## ✅ Prevention Checklist

### Regular Maintenance (Monthly)
- [ ] Update WordPress core
- [ ] Update all plugins and themes
- [ ] Run security scan
- [ ] Test site backup restoration
- [ ] Check site speed and performance
- [ ] Review error logs
- [ ] Test contact forms and functionality

### Before Making Changes
- [ ] Create full site backup
- [ ] Test on staging site first
- [ ] Document current settings
- [ ] Have rollback plan ready

### Best Practices
- [ ] Use strong passwords and 2FA
- [ ] Keep WordPress and plugins updated
- [ ] Regular security scanning
- [ ] Monitor site uptime
- [ ] Optimize images before upload
- [ ] Use caching and CDN services

---

*This troubleshooting guide covers common issues with Examiner Theme v1.0.0. For complex technical issues, please contact support at [stepfoxthemes.com/support](https://stepfoxthemes.com/support).*