<?php

include(get_template_directory().'/extensions/responsive/responsive-style.php');


function responsive_extender() {
    // Enqueue the new modern responsive interface first
    $modern_script_path = get_template_directory() . '/extensions/responsive/modern-responsive.js';
    $modern_script_uri  = get_template_directory_uri() . '/extensions/responsive/modern-responsive.js';

    wp_enqueue_script(
        'stepfox-modern-responsive',  // Unique handle for the script.
        $modern_script_uri,          // The URL to the script.
        array( 'wp-blocks', 'wp-editor', 'wp-element', 'wp-components' ),  // Dependencies.
        filemtime( $modern_script_path ),    // Use file modification time as version (helps with cache busting).
        true                          // Load in footer.
    );

    // Use filemtime() to generate a version string based on the file modification time.
    $script_path = get_template_directory() . '/extensions/responsive/general.js';
    $script_uri  = get_template_directory_uri() . '/extensions/responsive/general.js';

    wp_enqueue_script(
        'stepfox-responsive-general',  // Unique handle for the script.
        $script_uri,                  // The URL to the script.
        array( 'wp-blocks', 'wp-editor', 'wp-api', 'stepfox-modern-responsive' ),  // Dependencies.
        filemtime( $script_path ),    // Use file modification time as version (helps with cache busting).
        true                          // Load in footer.
    );
    
    wp_enqueue_style(
        'responsive-editor',  // Unique handle for the script.
        get_template_directory_uri() . '/extensions/responsive/responsive-editor.css'
    );

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
add_action( 'enqueue_block_editor_assets', 'responsive_extender' );

function animations_style_css(){
    wp_enqueue_style(
        'animations-front',  // Unique handle for the script.
        get_template_directory_uri() . '/extensions/responsive/animations.css'
    );
}

add_action( 'enqueue_block_assets', 'animations_style_css' );