<?php

include_once(get_template_directory().'/blocks/blocks_registration.php');
include_once(get_template_directory().'/extensions/extensions_registration.php');

add_action( 'admin_head', function() {
    echo '
    <style>
    /* Adjust the template preview boxes in the Site Editor */
    .edit-site-layout__area .block-editor-iframe__container iframe {
    width: 1997px !important;
    transform: scale(0.6);
    transform-origin: top left;
    }
    }
                .edit-site-layout__area .edit-site-visual-editor__preview {
                overflow: auto;
            }
    </style>
    ';
});
function disable_cover_block_srcset( $attr, $attachment, $size ) {
    if ( isset( $attr['class'] ) && strpos( $attr['class'], 'wp-block-cover' ) !== false ) {
        unset( $attr['srcset'] );
    }
    return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'disable_cover_block_srcset', 10, 3 );