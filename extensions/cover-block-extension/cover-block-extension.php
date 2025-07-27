<?php
/**
 * Enqueue the Cover block extension script from the theme.
 */
function mytheme_enqueue_cover_extension_editor_script() {
    wp_enqueue_script(
        'mytheme-cover-extension',
        get_stylesheet_directory_uri() . '/extensions/cover-block-extension/cover-block-extension.js',
        array( 'wp-blocks', 'wp-element', 'wp-editor', 'wp-components', 'wp-hooks', 'wp-compose' ),
        filemtime( get_stylesheet_directory() . '/extensions/cover-block-extension/cover-block-extension.js' ),
        true
    );
}
add_action( 'enqueue_block_editor_assets', 'mytheme_enqueue_cover_extension_editor_script' );

/**
 * Filter the output of the Cover block on the frontend.
 *
 * When the "Link to Post" toggle is enabled (linkToPost is true),
 * this function wraps the cover image element (with class "wp-block-cover__background")
 * in an anchor linking to the current post.
 */
function mytheme_cover_extension_render( $block_content, $block ) {
    if ( isset( $block['attrs']['linkToPost'] ) && $block['attrs']['linkToPost'] ) {
        $permalink = get_permalink();
        if ( $permalink ) {
            // Use a regex to find the first occurrence of the background image element.
            // The core Cover block outputs the image as a <span> with the class "wp-block-cover__background".
            $pattern = '/(<span[^>]*class="[^"]*wp-block-cover__background[^"]*"[^>]*>)(<\/span>)/i';
            $replacement = '<a href="' . esc_url( $permalink ) . '">$1$2</a>';
            // Replace only the first occurrence.
            $block_content = preg_replace( $pattern, $replacement, $block_content, 1 );
        }
    }
    return $block_content;
}
add_filter( 'render_block_core/cover', 'mytheme_cover_extension_render', 10, 2 );