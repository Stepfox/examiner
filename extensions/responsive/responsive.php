<?php
/**
 * Responsive Extension
 * Provides responsive controls for all blocks
 * 
 * @package Examiner
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Include responsive styles with security check
$responsive_style_file = get_template_directory() . '/extensions/responsive/responsive-style.php';
if (file_exists($responsive_style_file)) {
    require_once $responsive_style_file;
}

/**
 * Enqueue responsive extension assets for block editor
 * Only loads in admin context to improve frontend performance
 */
function examiner_enqueue_responsive_assets() {
    // Only load in block editor
    if (!is_admin()) {
        return;
    }
    // Get theme version for cache busting
    $theme_version = wp_get_theme()->get('Version');
    
    // Enqueue modern responsive interface
    $modern_script_path = get_template_directory() . '/extensions/responsive/modern-responsive.js';
    if (file_exists($modern_script_path)) {
        wp_enqueue_script(
            'examiner-modern-responsive',
            get_template_directory_uri() . '/extensions/responsive/modern-responsive.js',
            array('wp-blocks', 'wp-editor', 'wp-element', 'wp-components'),
            $theme_version,
            true
        );
    }

    // Enqueue general responsive controls
    $script_path = get_template_directory() . '/extensions/responsive/general.js';
    if (file_exists($script_path)) {
        wp_enqueue_script(
            'examiner-responsive-general',
            get_template_directory_uri() . '/extensions/responsive/general.js',
            array('wp-blocks', 'wp-editor', 'wp-api', 'examiner-modern-responsive'),
            $theme_version,
            true
        );
    }
    
    // Enqueue editor styles
    $editor_css_path = get_template_directory() . '/extensions/responsive/responsive-editor.css';
    if (file_exists($editor_css_path)) {
        wp_enqueue_style(
            'examiner-responsive-editor',
            get_template_directory_uri() . '/extensions/responsive/responsive-editor.css',
            array(),
            $theme_version
        );
    }

    // Temporarily commenting out old device-specific files to test modern interface
    /*
    $script_path = get_template_directory() . '/extensions/responsive/desktop.js';
    $script_uri  = get_template_directory_uri() . '/extensions/responsive/desktop.js';

    wp_enqueue_script(
        'stepfox-responsive-desktop',  // Unique handle for the script.
        $script_uri,                  // The URL to the script.
        array( 'wp-blocks', 'wp-editor', 'wp-api', 'stepfox-responsive-general' ),  // Dependencies.
        filemtime( $script_path ),    // Use file modification time as version (helps with cache busting).
        true                          // Load in footer.
    );

        $script_path = get_template_directory() . '/extensions/responsive/tablet.js';
    $script_uri  = get_template_directory_uri() . '/extensions/responsive/tablet.js';

    wp_enqueue_script(
        'stepfox-responsive-tablet',  // Unique handle for the script.
        $script_uri,                  // The URL to the script.
        array( 'wp-blocks', 'wp-editor', 'wp-api' ),  // Dependencies.
        filemtime( $script_path ),    // Use file modification time as version (helps with cache busting).
        true                          // Load in footer.
    );

            $script_path = get_template_directory() . '/extensions/responsive/mobile.js';
    $script_uri  = get_template_directory_uri() . '/extensions/responsive/mobile.js';

    wp_enqueue_script(
        'stepfox-responsive-mobile',  // Unique handle for the script.
        $script_uri,                  // The URL to the script.
        array( 'wp-blocks', 'wp-editor', 'wp-api' ),  // Dependencies.
        filemtime( $script_path ),    // Use file modification time as version (helps with cache busting).
        true                          // Load in footer.
    );
    */

    // Temporarily commenting out hover.js to test if it's causing conflicts
    /*
    $script_path = get_template_directory() . '/extensions/responsive/hover.js';
    $script_uri  = get_template_directory_uri() . '/extensions/responsive/hover.js';

    wp_enqueue_script(
        'stepfox-responsive-hover',
        $script_uri,
        array('wp-blocks', 'wp-element', 'wp-components', 'wp-editor'),
        filemtime( $script_path ),
        true
    );
    */
}
add_action('enqueue_block_editor_assets', 'examiner_enqueue_responsive_assets');

/**
 * Enqueue frontend animations CSS
 * Only loads on frontend for better performance
 */
function examiner_enqueue_animations_css() {
    // Don't load in admin to improve performance
    if (is_admin()) {
        return;
    }
    
    $animations_css_path = get_template_directory() . '/extensions/responsive/animations.css';
    if (file_exists($animations_css_path)) {
        wp_enqueue_style(
            'examiner-animations',
            get_template_directory_uri() . '/extensions/responsive/animations.css',
            array(),
            wp_get_theme()->get('Version')
        );
    }
}

add_action('wp_enqueue_scripts', 'examiner_enqueue_animations_css');