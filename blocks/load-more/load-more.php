<?php

add_action( 'wp_loaded', function() {

    $registered_blocks = WP_Block_Type_Registry::get_instance()->get_all_registered();

    foreach( $registered_blocks as $name => $block ) {
        // For core/group block, set some basic attributes.
        if ($block->name == 'core/query') {
            $block->attributes['customPostsPerPage'] = [ "type" => "string", "default" => "" ];

//    $args['attributes']['customPostsPerPage'] = '';
        }
    }
    }, 100);

function myplugin_register_load_more_block()
{
    wp_register_script("load-block-gutenberg",
        get_template_directory_uri() . "/blocks/load-more/load-more-editor.js",
        array("wp-blocks", "wp-editor", "wp-api", "jquery",), true
    );
    register_block_type('myplugin/query-loop-load-more', array(
        'editor_script' => 'load-block-gutenberg', // This enqueues the JS in the editor.
        'render_callback' => 'myplugin_render_load_more_block',
        'category' => 'widgets',
        'parent' => array('core/query'), // Restrict to Query Loop.
    ));
}

add_action('init', 'myplugin_register_load_more_block');


function myplugin_render_load_more_block($attributes, $content, $block)
{
    return '<div type="button" class="query-loop-load-more-button">Load More</div>';
}


function my_load_more_scripts()
{
    wp_enqueue_script('my-load-more', get_template_directory_uri() . '/blocks/load-more/my-load-more.js', array('jquery'), '1.0', true);
    wp_localize_script('my-load-more', 'my_load_more_params', array(
        'ajaxurl' => admin_url('admin-ajax.php')
    ));
}

add_action('wp_enqueue_scripts', 'my_load_more_scripts');


function load_more_posts_callback()
{
    $paged = isset($_POST['paged']) ? intval($_POST['paged']) : 1;
    $posts_per_page = isset($_POST['posts_per_page']) ? intval($_POST['posts_per_page']) : 4;
    $innerBlocksString = isset($_POST['innerBlocksString']) ? $_POST['innerBlocksString'] : '';
    $innerBlocksString = stripslashes($innerBlocksString);

//var_dump($innerBlocksString);
    $context = isset($_POST['context']) ? $_POST['context'] : '';
    $context = json_decode(stripslashes($context), true);
    $args = array(
        'offset' => $context['query']['offset'] + ($paged - 1) * $context['customPostsPerPage'],
        'post_status' => 'publish',
        'paged' => $paged,
        'posts_per_page' => $context['customPostsPerPage'],
    );
    if ($context['query']['inherit']) {

        //var_dump($context['query']['inherit']);
        global $wp_query;

        $query_args = $_POST['query_args'];
        $paged_offset = (($paged - 1) * $context['customPostsPerPage']) + $context['query']['offset'];
        $wp_query->set('paged', $paged);
        $wp_query->set('offset', $paged_offset);
        $wp_query->set('posts_per_page', $context['customPostsPerPage']);
        $queried_object = $query_args;

// Adjust the query based on the type of archive
        if (isset($queried_object['taxonomy'])) {
            // This is a taxonomy archive (category, tag, or custom taxonomy)
            // Instead of using a non-existent 'term' parameter, use a tax_query.
            $taxonomy = $queried_object['taxonomy'];
            $term_id = absint($queried_object['term_id']);

            $wp_query->set('tax_query', array(
                array(
                    'taxonomy' => $taxonomy,
                    'field' => 'term_id',
                    'terms' => $term_id,
                ),
            ));
        } elseif (isset($queried_object->ID) && isset($queried_object->display_name)) {
            // Likely an author archive – get_queried_object() returns a WP_User object here.
            $wp_query->set('author', absint($queried_object->ID));
        }
//         $wp_query->set('category', );

//       var_dump($context['customPostsPerPage']);

        $query = new WP_Query($wp_query->query_vars);
        // var_dump($queried_object );

    } else {
        $query = new WP_Query($args);

    }
//napravi i za query main
    foreach (parse_blocks($innerBlocksString) as $block) {
        if ($block['blockName'] == 'core/post-template') {
            $innerBlocksString = serialize_blocks($block['innerBlocks']);
        }
    }
//            echo do_blocks(serialize_blocks(parse_blocks($innerBlocksString)));
//    var_dump( $query);
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            echo '<li class="post-item">';
           echo do_blocks($innerBlocksString);
            echo '</li>';
            //echo do_blocks('<!-- wp:post-template -->'.serialize_blocks($innerBlocksString).'<!-- /wp:post-template -->');
        }
    }

    wp_reset_postdata();
    die();
}

add_action('wp_ajax_load_more_posts', 'load_more_posts_callback');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts_callback');


function cool_scriptzzzzzzzz()
{
    wp_reset_postdata();
    global $_wp_current_template_content;
    $page_content = get_the_content();
    $full_content = $_wp_current_template_content . $page_content;
    wp_register_script('cool_scriptzzzzzzzzasdass', false);
    wp_enqueue_script('cool_scriptzzzzzzzzasdass');
    if (has_blocks($full_content)) {
        $blocks = parse_blocks($full_content);
        $all_blocks = search($blocks, 'blockName');
        // Get template parts content.
        foreach ($all_blocks as $block) {
            $full_content .= get_template_parts_as_content($block);
        }
        $blocks = parse_blocks($full_content);
        $all_blocks = search($blocks, 'blockName');
        foreach ($all_blocks as $block) {
            if ($block['blockName'] === 'core/query') {
                foreach ($block['innerBlocks'] as $child_block) {
                    if ($child_block['blockName'] === 'myplugin/query-loop-load-more') {

                        $all_data[$block['attrs']['customId']] = [
                            'context' => json_encode($block['attrs']),
                            'query_args' => get_queried_object(),//od parent
                            'paged' => '1',
                            'innerBlocksString' => serialize_blocks($block['innerBlocks']),
                        ];

                    }
                }
            }
        }
        if(!empty($all_data)) {
            wp_add_inline_script('cool_scriptzzzzzzzzasdass', 'var heya = ' . wp_json_encode($all_data) . ' ;console.log(heya); ');
        }
    }


}

add_action('wp_head', 'cool_scriptzzzzzzzz');


function my_render_query_block_custom($block_content, $block)
{
//    if (isset($block['blockName']) && 'myplugin/query-loop-load-more' === $block['blockName']) {
//        echo '<pre>';
//        var_dump($block);
//        echo '</pre>';
//    }
    // Check if this is a Query Loop block.
    if (isset($block['blockName']) && 'core/query' === $block['blockName']) {
        // Check for our custom attribute.
        if (isset($block['attrs']['customPostsPerPage']) && !empty($block['attrs']['customPostsPerPage']) && $block['attrs']['query']['inherit'] && get_option('posts_per_page') != $block['attrs']['customPostsPerPage']) {
//    var_dump(get_option('posts_per_page').'  ======   '. $block['attrs']['customPostsPerPage']);
            $custom_posts_per_page = absint($block['attrs']['customPostsPerPage']);

            // Get main query vars as a baseline.
            global $wp_query;
            $main_query_vars = $wp_query->query_vars;

            // Build new query args: override posts_per_page.
            $args = wp_parse_args(
                array('posts_per_page' => $custom_posts_per_page),
                $main_query_vars
            );

            // Optionally, remove or adjust parameters that might conflict.
            // For example, if pagination is handled differently, you might unset:
            // unset( $args['paged'] );

            // Run a new query with our custom arguments.
            $query = new WP_Query($args);
//$block['innerBlocks'] = '';
            ob_start();
            //           var_dump($block);
//            echo do_blocks(serialize_blocks($block['innerBlocks']));


            $post_template = '';
            $columns = '';
echo '<div ' . my_custom_query_wrapper_attributes($block) . ' id="block_' . esc_attr($block['attrs']['customId']) . '">';
            foreach ($block['innerBlocks'] as $block_child) {
                if ($block_child['blockName'] == 'core/post-template') {
                    $post_classes = get_post_class('wp-block-post');

                    // Convert the array of classes into a space-separated string.
                    $classes = implode(' ', $post_classes);

                    $post_template = serialize_blocks($block_child['innerBlocks']);
                    $columns = 'columns-' . $block_child['attrs']['layout']['columnCount'];
                    $get_block_wrapper_attributes = my_custom_wrapper_attributes($block_child);
                    $child_id = esc_attr($block_child['attrs']['customId']);
                    // var_dump($get_block_wrapper_attributes);

                    if ($query->have_posts()) {

                        echo '<ul ' . $get_block_wrapper_attributes . ' >';
                        // (This example simply outputs the post titles.)
                        while ($query->have_posts()) {
                            $query->the_post();
                            //$post_template = '<li class="' . esc_attr( $classes ) . '">'.do_blocks(serialize_blocks($block_child['innerBlocks'])).'</li>';
                            echo '<li class="' . esc_attr($classes) . '" id="block_' . esc_attr($child_id) . '">' . do_blocks($post_template) . '</li>';

                        }
                        echo '</ul>';

//                echo render_block( $block_child );

                    } else {
                        echo '<p>No posts found.</p>';
                    }
                } else {
                    echo render_block($block_child);

                }

            }
            echo '</div>';
            wp_reset_postdata();
//echo 'deeeeededde';
            // Replace the block content with our new content.
            return ob_get_clean();
        }
    }

    return $block_content;
}

add_filter('render_block', 'my_render_query_block_custom', 10, 2);


function my_custom_wrapper_attributes($block)
{
    // Default values.
    $columns = 1;       // Default inner items column count.
    $layout = 'list';  // Fallback layout type.
    $container_columns = 2;       // Default container column count (set to 2 by default).

    // Check for layout attributes in the block.
    if (isset($block['attrs']['layout']) && is_array($block['attrs']['layout'])) {
        if (!empty($block['attrs']['layout']['columnCount'])) {
            $columns = absint($block['attrs']['layout']['columnCount']);
        }
        if (!empty($block['attrs']['layout']['type'])) {
            $layout = sanitize_html_class($block['attrs']['layout']['type']);
        }
        // If containerColumns is provided, use it; otherwise, it remains at the default of 2.
        if (!empty($block['attrs']['layout']['containerColumns'])) {
            $container_columns = absint($block['attrs']['layout']['containerColumns']);
        }
    }

    // Build the extra classes string.
    // This will generate, for example:
    // "columns-4 is-layout-grid wp-container-core-post-template-is-layout-2 wp-block-post-template-is-layout-grid"
    $extra_classes = sprintf(
        'columns-%d is-layout-%s wp-container-core-post-template-is-layout-%d wp-block-post-template-is-layout-%s',
        $columns,
        $layout,
        $container_columns,
        $layout
    );

    // Merge the extra classes with the block’s default wrapper classes.
    $wrapper_attrs = get_block_wrapper_attributes(array(
        'class' => 'wp-block-post-template ' . $extra_classes,
    ));

    return $wrapper_attrs;
}


function my_custom_query_wrapper_attributes($block)
{
    // Default to "flow" if no layout is set.
    $layout = 'flow';

    // Check for a layout setting under "displayLayout" or "layout" attributes.
    if (isset($block['attrs']['displayLayout']) && is_array($block['attrs']['displayLayout'])) {
        if (!empty($block['attrs']['displayLayout']['type'])) {
            $layout = sanitize_html_class($block['attrs']['displayLayout']['type']);
        }
    } elseif (isset($block['attrs']['layout']) && is_array($block['attrs']['layout'])) {
        if (!empty($block['attrs']['layout']['type'])) {
            $layout = sanitize_html_class($block['attrs']['layout']['type']);
        }
    }

    $extra_classes = sprintf('is-layout-%s wp-block-query-is-layout-%s', $layout, $layout);

    $wrapper_attrs = get_block_wrapper_attributes(array(
        'class' => 'wp-block-query ' . $extra_classes,
    ));

    return $wrapper_attrs;
}