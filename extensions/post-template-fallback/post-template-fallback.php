<?php
function post_templateblock_fallback(){

    $script_path = get_template_directory() . '/extensions/post-template-fallback/post-template-fallback.js';
    $script_uri  = get_template_directory_uri() . '/extensions/post-template-fallback/post-template-fallback.js';

    wp_enqueue_script(
        'post-template-fallback',  // Unique handle for the script.
        $script_uri,                  // The URL to the script.
        array( 'wp-blocks', 'wp-editor', 'wp-api' ),  // Dependencies.
        filemtime( $script_path ),    // Use file modification time as version (helps with cache busting).
        true                          // Load in footer.
    );
}

add_action( 'enqueue_block_assets', 'post_templateblock_fallback' );