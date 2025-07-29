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
//load last !!important blokovite ------------------------------------------------ pravat bed inace moze da fali fieldot
//na metafield namesti if image field = url get_the_post_thumbnail_url( $post_id, 'full' ); else get_post_meta( $post_id, $meta_field, true );
//napravi vo stepfox_styles da moze da pravi onie spacing delcinjata shto se scrollat
//napravi za metafield link da moze da se otvara vo nov tab
//nova opcija css field za metafield block, biras field i se mozes da go vrzes so nekoj vid css
//extend query block da moze da se bira post type



/*
function my_extend_query_block_query_args( $query_args, $attributes, $content ) {
    // Get all public custom post types (non-built-in).
    $custom_post_types = get_post_types( array(
        'public'   => true,
        '_builtin' => false,
    ) );

    // Optionally, merge with any existing post_type values:
    $existing_post_types = isset( $query_args['post_type'] ) ? (array) $query_args['post_type'] : array();
    $query_args['post_type'] = array_unique( array_merge( $existing_post_types, $custom_post_types ) );

    return $query_args;
}
add_filter( 'query_block_get_query_vars', 'my_extend_query_block_query_args', 10, 3 );

function cptui_register_my_cpts_casino_reviews() {

    $labels = [
        "name" => __( "Casino Reviews", "examiner" ),
        "singular_name" => __( "Casino Review", "examiner" ),
    ];

    $args = array(
        "label" => "Casinos",
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        // Change this line to true to show as a top-level menu.
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        'menu_position' => -10,
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "casino_reviews", "with_front" => true ),
        "query_var" => true,
        "supports" => array( "title", "thumbnail", "custom-fields", "editor" ),
    );

    register_post_type( "casino_reviews", $args );
}
add_action( 'init', 'cptui_register_my_cpts_casino_reviews' );
*/
include_once(get_template_directory() . '/blocks/metafield_block/metafield_block.php');
include_once(get_template_directory() . '/blocks/load-more/load-more.php');