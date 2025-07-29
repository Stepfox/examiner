<?php
/**
 * Examiner Theme Functions
 * 
 * @package Examiner
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme setup function
 * Sets up theme defaults and registers support for various WordPress features
 */
function examiner_theme_setup() {
    // Make theme available for translation
    load_theme_textdomain('examiner', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');

    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Add support for HTML5 markup
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Add support for custom backgrounds
    add_theme_support('custom-background', array(
        'default-color' => 'ffffff',
    ));

    // Add support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for responsive embedded content
    add_theme_support('responsive-embeds');

    // Add support for block editor styles
    add_theme_support('wp-block-styles');

    // Add support for wide alignment
    add_theme_support('align-wide');

    // Add support for editor styles
    add_theme_support('editor-styles');

    // Enqueue editor styles
    add_editor_style('style.css');
}
add_action('after_setup_theme', 'examiner_theme_setup');

/**
 * Enqueue scripts and styles
 */
function examiner_scripts() {
    // Enqueue theme stylesheet
    wp_enqueue_style(
        'examiner-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    // Enqueue threaded comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'examiner_scripts');

/**
 * Enqueue admin styles (only when necessary)
 */
function examiner_admin_styles() {
    // Only load on site editor pages
    if (!is_admin() || !current_user_can('edit_theme_options')) {
        return;
    }
    
    $screen = get_current_screen();
    if ($screen && strpos($screen->id, 'site-editor') !== false) {
        wp_add_inline_style('wp-admin', '
            .edit-site-layout__area .block-editor-iframe__container iframe {
                width: 1997px !important;
                transform: scale(0.6);
                transform-origin: top left;
            }
            .edit-site-layout__area .edit-site-visual-editor__preview {
                overflow: auto;
            }
        ');
    }
}
add_action('admin_enqueue_scripts', 'examiner_admin_styles');

/**
 * Disable srcset for cover blocks to prevent layout issues
 * 
 * @param array $attr Image attributes
 * @param object $attachment Attachment object
 * @param string $size Image size
 * @return array Modified attributes
 */
function examiner_disable_cover_block_srcset($attr, $attachment, $size) {
    // Security check: ensure we have valid input
    if (!is_array($attr) || !isset($attr['class'])) {
        return $attr;
    }
    
    if (strpos($attr['class'], 'wp-block-cover') !== false) {
        unset($attr['srcset']);
    }
    return $attr;
}
add_filter('wp_get_attachment_image_attributes', 'examiner_disable_cover_block_srcset', 10, 3);

/**
 * Include TGM Plugin Activation for plugin recommendations
 * This provides a professional interface for users to install companion plugins
 */
function examiner_load_tgmpa() {
    $tgmpa_file = get_template_directory() . '/inc/tgm-plugin-activation.php';
    if (file_exists($tgmpa_file)) {
        require_once $tgmpa_file;
    }
}
add_action('after_setup_theme', 'examiner_load_tgmpa');