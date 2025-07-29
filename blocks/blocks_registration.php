<?php
/**
 * Blocks Registration
 * Registers custom blocks and post types
 * 
 * @package Examiner
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}


// Custom post types and advanced query functionality have been moved to companion plugins
// for better separation of concerns and ThemeForest compliance
include_once(get_template_directory() . '/blocks/metafield_block/metafield_block.php');
include_once(get_template_directory() . '/blocks/load-more/load-more.php');