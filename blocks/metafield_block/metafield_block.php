<?php

 //include render function and customizer


include(get_template_directory() . "/blocks/metafield_block/metafield_block_html.php");


function stepfox_query_for_gutenberg($attributes)
{
//var_dump($attributes);
    if ($attributes['source'] == 'posts') {
        $number = $attributes['post_count'];

        $args = array('posts_per_page' => $number);

        if (!empty($attributes['term']) && !empty($attributes['taxonomy'])) {
            $args['tax_query'] = array(array('taxonomy' => $attributes['taxonomy'], 'field' => 'slug', 'terms' => array($attributes['term'])));
        }


        $args['post_type'] = $attributes['post_type'];
        $args['offset'] = $attributes['offset_posts'];
        $args['order'] = $attributes['order'];
        $args['orderby'] = $attributes['order_by'];
        if ($attributes['display_pagination'] == true) {
            global $paged;
            if (get_query_var('paged')) {
                $paged = get_query_var('paged');
            } elseif (get_query_var('page')) {
                $paged = get_query_var('page');
            } else {
                $paged = 1;
            }

            $args['paged'] = $paged;

            $paged_offset = (($paged - 1) * $number) + $args['offset'];
            $args['offset'] = $paged_offset;
        }

        $stepfox_posts = new WP_Query($args);

    } elseif ($attributes['source'] == 'manual_selection' || $attributes['source'] == 'top_lists') {
        $manual_selection = $attributes['manual_selection'];

        if ($attributes['source'] == 'top_lists') {


            foreach (timed_toplist_filter()[1] as $key => $value) {

                if ($attributes['top_list'] == $value) {
                    $manual_selection_list = timed_toplist_filter()[0][$key];
                }

            }


        }

        if ($attributes['source'] == 'manual_selection') {
            foreach ($manual_selection as $item) {
                $manual_selection_list[] = $item['toplistitem'];
            }
        }
        $args = array('post__in' => $manual_selection_list, 'post_type' => 'any', 'orderby' => 'post__in', 'posts_per_page' => -1);
        $args['post_type'] = $attributes['post_type'];
        $stepfox_posts = new WP_Query($args);

    } elseif ($attributes['source'] == 'current_archive') {
        global $wp_query;

        global $paged;
        if (get_query_var('paged')) {
            $paged = get_query_var('paged');
        } elseif (get_query_var('page')) {
            $paged = get_query_var('page');
        } else {
            $paged = 1;
        }
        $paged_offset = (($paged - 1) * $attributes['post_count']) + $attributes['offset_posts'];

        $wp_query->set('posts_per_page', $attributes['post_count']);
        $wp_query->set('offset', $paged_offset);

        $stepfox_posts = new WP_Query($wp_query->query_vars);

    } elseif ($attributes['source'] == 'popular_posts') {
        $popular_post = $attributes['popular_posts'];

        $number = $attributes['post_count'];
        $args = array(
            'posts_per_page' => $number,
            'meta_key' => 'stepfox_post_views_count',
        );

        if ($attributes['taxonomy'] != 'all' && !empty($attributes['term'])) {
            $term = get_term($attributes['term']);
            $taxonomies = get_object_taxonomies($attributes['post_type']);
            if (in_array($term->taxonomy, $taxonomies)) {

                var_dump($term);
                $args['tax_query'] = array(array('taxonomy' => $term->taxonomy, 'field' => 'id', 'terms' => array($attributes['term'])));
            }
        }
        $args['post_type'] = $attributes['post_type'];
        $args['offset'] = $attributes['offset_posts'];
        $args['order'] = $attributes['order'];
        $args['orderby'] = 'meta_value_num';


        if ($popular_post == 'week') {
            $week = date('W');
            $args['w'] = $week;
        } elseif ($popular_post == 'year') {
            $year = date('Y');
            $args['year'] = $year;
        } elseif ($popular_post == 'month') {
            $month = date('m');
            $args['monthnum'] = $month;
        }


        $stepfox_posts = new WP_Query($args);
    } elseif ($attributes['source'] == 'related_posts') {

    }


    return $stepfox_posts;
}


function query_object_for_gutenberg_query()
{

    $args = array(//'public' => true,
    );

    $output = 'objects'; // names or objects, note names is the default
    $template_parts = get_post_types($args, $output)['wp_template_part'];


    $args = array(
        'public' => true,
    );

    $output = 'objects'; // names or objects, note names is the default


    $types = get_post_types($args, $output);
    $types['wp_template_part'] = $template_parts;
    //var_dump($types);
    $fields = [];

    foreach ($types as $post_type) {
        if ($post_type->name != 'attachment') {
            $post_types[] = array('label' => $post_type->label,
                'value' => $post_type->name,);
        }
        global $wpdb;
        $result = $wpdb->get_results($wpdb->prepare(
            "SELECT meta_key FROM wp_posts,wp_postmeta WHERE post_type = %s
                    AND wp_posts.ID = wp_postmeta.post_id", $post_type->name
        ), ARRAY_A);

        $fields[$post_type->name][] = ["value"=> "counter", "label"=>"counter"];
        $fields[$post_type->name][] = ["value"=> "post_title", "label"=>"post_title"];
        $fields[$post_type->name][] = ["value"=> "post_content", "label"=>"post_content"];
        $fields[$post_type->name][] = ["value"=> "post_excerpt", "label"=>"post_excerpt"];
        $fields[$post_type->name][] = ["value"=> "featured_image", "label"=>"featured_image"];
        $fields[$post_type->name][] = ["value"=> "month", "label"=>"month"];
        $fields[$post_type->name][] = ["value"=> "permalink", "label"=>"permalink"];


        foreach($result as $key => $value){
            $fields[$post_type->name][] = ['value' => $value['meta_key'], 'label' => $value['meta_key']];
        }
        $taxonomy_objects = get_object_taxonomies($post_type->name, 'objects');
        $taxonomies[$post_type->name][] = array('label' => 'Select Taxonomy', 'value' => '');
        foreach ($taxonomy_objects as $taxonomy_object) {

            $taxonomies[$post_type->name][] = array('label' => $taxonomy_object->label,
                'value' => $taxonomy_object->name,);

            $terms = get_terms($taxonomy_object->name, array('hide_empty' => true,));
            $all_terms[$taxonomy_object->name][] = array('label' => 'Select Term', 'value' => '');
            foreach ($terms as $term) {
                if ($term->count > 1) {
                    $all_terms[$taxonomy_object->name][] = array('label' => $term->name . '->' . $term->count,
                        'value' => $term->slug,);
                }
            }
        }
        if($post_type->name != 'game') {
            $all_posts[$post_type->name] = get_posts(
                array(
                    'post_type' => $post_type->name,
                    'posts_per_page' => -1,
                    'post_status' => 'publish',
                )
            );
        }
        foreach ($all_posts[$post_type->name] as $manual_post) {
            $manual_selection[$post_type->name][] = array('label' => $manual_post->post_title,
                'value' => $manual_post->ID,);
        }
    }


    $return = array(
        'terms' => $all_terms,
        'taxonomies' => $taxonomies,
        'post_types' => $post_types,
        'manual_selection' => $manual_selection,
        'metafields' => $fields,
        'ajax_url' => admin_url('admin-ajax.php'),
    );

    return $return;


}


function stepfox_count_views($postID)
{

    $postID = get_the_ID();
    if (is_single()) {
        $count_key = 'stepfox_post_views_count';
        $count = get_post_meta($postID, $count_key, true);

        if ($count == '') {
            $count = 0;
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
        } else {
            $count++;
            update_post_meta($postID, $count_key, $count);
        }
    }
}

add_action("wp_head", "stepfox_count_views");



//register the block
add_action("init", "add_block_named_metafield_block");


function add_block_named_metafield_block() {

        wp_register_script("metafield-block-gutenberg",
            get_template_directory_uri() . "/blocks/metafield_block/metafield_block_gutenberg_fields.js",
            array("wp-blocks", "wp-editor", "wp-api", "jquery",), true
        );
        // the query object
        $query_controls_object = query_object_for_gutenberg_query();
        $query_controls_object["name"] = "";

        wp_localize_script(	"metafield-block-gutenberg",	"metafield_block",	$query_controls_object);

        //reg sjruotata za diziajnot i looksot
        wp_register_script("metafield-block-script", get_template_directory_uri() . "/blocks/metafield_block/metafield_block_js.js");
        //reg style looks
        wp_register_style("metafield-block-style", get_template_directory_uri() . "/blocks/metafield_block/metafield_block_css.css");

        $attributes_reg = json_decode('{"style":{"type":"object","default":{"elements":{"link":""},"border":{"radius": "","style": "","width": ""},"color":{},"spacing":{"blockGap": "","margin":{"top":""}, "padding":{"top":""}}}}, "post_type": {"type": "string", "default": "post"}, "select_a_post_options": {"type": "array", "source": "attr", "default": []}, "select_a_post": {"type": "string", "default": "'.$query_controls_object["manual_selection"]["post"][0]["value"].'"}, "custom_css": {"type": "string", "default": ""}, "align": {"type": "string", "default": "wide"}, "innerContent": {"type": "string", "default": "stepfox-not-set-id"}, "backgroundColor":{"type":"string", "default":""}, "gradient":{"type":"string", "default":""}, "linkColor":{"type":"string", "default":""}, "textColor":{"type":"string", "default":""}, "fontSize":{"type":"string", "default":""}, "fontFamily":{"type":"string", "default":""}, "fontWeight":{"type":"string", "default":""}, "fontStyle":{"type":"string", "default":""}, "textTransform":{"type":"string", "default":""}, "letterSpacing":{"type":"string", "default":""}, "meta_field":{"type":"string", "default":""}, "borderColor":{"type":"string", "default":""}, "element_type": {"type": "string", "default": "p"}, "innerContent": {"type": "string", "default": ""}, "layout":{"type": "object", "default": {}}}', true);
        
        // Add customId attribute for responsive system compatibility
        $attributes_reg['customId'] = array('type' => 'string', 'default' => 'stepfox-not-set-id');




         register_block_type(
            "stepfox/metafield-block", array(

                "render_callback" => "render_metafield_block",
                "category" => "stepfox_creator_block",
                "attributes" => $attributes_reg,
                "style" => "metafield-block-style",//ova e backend i frontend za blockot
                "script" => "metafield-block-script", //i back i front
                "editor_script" => "metafield-block-gutenberg",
                "editor_style" => "metafield-block-style",

            )
        );





}