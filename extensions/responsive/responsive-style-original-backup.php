<?php
// Missing border
// submenu z-index i background
// dynamic micro parts button i id ili smeni go u metafield block


add_filter( 'register_block_type_args', 'modify_core_group_block_args', 10, 2 );
function modify_core_group_block_args( $args, $name ) {
//if ( 'stepfox/metafield-block' === $name ) {

            // Change hide attributes from boolean to string with a default of "not-selected"



//            $args['attributes']['backgroundColor'] = [ "type" => "string", "default" => "" ];
//            $args['attributes']['gradient'] = [ "type" => "string", "default" => "" ];
//            $args['attributes']['linkColor'] = [ "type" => "string", "default" => "" ];
//            $args['attributes']['textColor'] = [ "type" => "string", "default" => "" ];
//            $args['attributes']['layout'] = [ "type" => "object", "default" => [ "type" => "default" ] ];

            $args['attributes']['font_size_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['line_height_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['letter_spacing_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['order_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['width_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['desktop_padding'] = [ "type" => "object", "default" => [ "top" => "0", "left" => "0", "right" => "0", "bottom" => "0" ] ];
            $args['attributes']['desktop_margin'] = [ "type" => "object", "default" => [ "top" => "0", "left" => "0", "right" => "0", "bottom" => "0" ] ];
            $args['attributes']['desktop_border'] = [ "type" => "object", "default" => [ "top" => "0", "left" => "0", "right" => "0", "bottom" => "0" ] ];
            $args['attributes']['desktop_borderStyle'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['desktop_borderColor'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['desktop_borderRadius'] = [ "type" => "object", "default" => [ "topLeft" => "", "topRight" => "", "bottomLeft" => "", "bottomRight" => "" ] ];
            $args['attributes']['desktop_pos'] = [ "type" => "object", "default" => [ "top" => "0", "left" => "0", "right" => "0", "bottom" => "0" ] ];
            $args['attributes']['desktop_position'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['desktop_display'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['desktop_textShadow'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['desktop_flexWrap'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['desktop_columns'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['desktop_borderWidth'] = [ "type" => "string", "default" => "" ];

            $args['attributes']['font_size_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['line_height_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['letter_spacing_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['order_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['width_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['tablet_padding'] = [ "type" => "object", "default" => [ "top" => "0", "left" => "0", "right" => "0", "bottom" => "0" ] ];
            $args['attributes']['tablet_margin'] = [ "type" => "object", "default" => [ "top" => "0", "left" => "0", "right" => "0", "bottom" => "0" ] ];
            $args['attributes']['tablet_border'] = [ "type" => "object", "default" => [ "top" => "0", "left" => "0", "right" => "0", "bottom" => "0" ] ];
            $args['attributes']['tablet_borderStyle'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['tablet_borderColor'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['tablet_borderRadius'] = [ "type" => "object", "default" => [ "topLeft" => "", "topRight" => "", "bottomLeft" => "", "bottomRight" => "" ] ];
            $args['attributes']['tablet_pos'] = [ "type" => "object", "default" => [ "top" => "0", "left" => "0", "right" => "0", "bottom" => "0" ] ];
            $args['attributes']['tablet_position'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['tablet_display'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['tablet_textShadow'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['tablet_flexWrap'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['tablet_columns'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['tablet_borderWidth'] = [ "type" => "string", "default" => "" ];

            $args['attributes']['font_size_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['line_height_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['letter_spacing_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['order_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['width_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['mobile_padding'] = [ "type" => "object", "default" => [ "top" => "0", "left" => "0", "right" => "0", "bottom" => "0" ] ];
            $args['attributes']['mobile_margin'] = [ "type" => "object", "default" => [ "top" => "0", "left" => "0", "right" => "0", "bottom" => "0" ] ];
            $args['attributes']['mobile_border'] = [ "type" => "object", "default" => [ "top" => "0", "left" => "0", "right" => "0", "bottom" => "0" ] ];
            $args['attributes']['mobile_borderStyle'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['mobile_borderColor'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['mobile_borderRadius'] = [ "type" => "object", "default" => [ "topLeft" => "", "topRight" => "", "bottomLeft" => "", "bottomRight" => "" ] ];
            $args['attributes']['mobile_pos'] = [ "type" => "object", "default" => [ "top" => "0", "left" => "0", "right" => "0", "bottom" => "0" ] ];
            $args['attributes']['mobile_position'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['mobile_display'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['mobile_textShadow'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['mobile_flexWrap'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['mobile_columns'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['mobile_borderWidth'] = [ "type" => "string", "default" => "" ];








            $args['attributes']['customId'] = [ "type" => "string", "default" => "stepfox-not-set-id" ];
            $args['attributes']['custom_css'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['custom_js'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['device'] = [ "type" => "string", "default" => "" ];




$args['attributes']['desktop_textAlign'] = [ "type" => "string", "default" => "" ];
$args['attributes']['desktop_justify'] = [ "type" => "string", "default" => "" ];

$args['attributes']['desktop_z_index'] = [ "type" => "string", "default" => "" ];
$args['attributes']['desktop_overflow'] = [ "type" => "string", "default" => "" ];
$args['attributes']['desktop_zoom'] = [ "type" => "string", "default" => "" ];
$args['attributes']['desktop_height'] = [ "type" => "string", "default" => "" ];
$args['attributes']['desktop_flex_direction'] = [ "type" => "string", "default" => "" ];
$args['attributes']['desktop_opacity'] = [ "type" => "string", "default" => "" ];
$args['attributes']['desktop_white_space'] = [ "type" => "string", "default" => "" ];

$args['attributes']['desktop_flex_grow'] = [ "type" => "string", "default" => "" ];
$args['attributes']['desktop_transition'] = [ "type" => "string", "default" => "" ];




$args['attributes']['tablet_justify'] = [ "type" => "string", "default" => "" ];
$args['attributes']['tablet_textAlign'] = [ "type" => "string", "default" => "" ];
$args['attributes']['tablet_z_index'] = [ "type" => "string", "default" => "" ];
$args['attributes']['tablet_overflow'] = [ "type" => "string", "default" => "" ];
$args['attributes']['tablet_zoom'] = [ "type" => "string", "default" => "" ];
$args['attributes']['tablet_height'] = [ "type" => "string", "default" => "" ];
$args['attributes']['tablet_flex_direction'] = [ "type" => "string", "default" => "" ];
$args['attributes']['tablet_opacity'] = [ "type" => "string", "default" => "" ];
$args['attributes']['tablet_white_space'] = [ "type" => "string", "default" => "" ];
$args['attributes']['tablet_flex_grow'] = [ "type" => "string", "default" => "" ];
$args['attributes']['tablet_transition'] = [ "type" => "string", "default" => "" ];

$args['attributes']['mobile_justify'] = [ "type" => "string", "default" => "" ];
$args['attributes']['mobile_textAlign'] = [ "type" => "string", "default" => "" ];
$args['attributes']['mobile_z_index'] = [ "type" => "string", "default" => "" ];
$args['attributes']['mobile_overflow'] = [ "type" => "string", "default" => "" ];
$args['attributes']['mobile_zoom'] = [ "type" => "string", "default" => "" ];
$args['attributes']['mobile_height'] = [ "type" => "string", "default" => "" ];
$args['attributes']['mobile_flex_direction'] = [ "type" => "string", "default" => "" ];
$args['attributes']['mobile_opacity'] = [ "type" => "string", "default" => "" ];
$args['attributes']['mobile_white_space'] = [ "type" => "string", "default" => "" ];
$args['attributes']['mobile_flex_grow'] = [ "type" => "string", "default" => "" ];
$args['attributes']['mobile_transition'] = [ "type" => "string", "default" => "" ];

$args['attributes']['animation'] = [ "type" => "string", "default" => "" ];
$args['attributes']['animation_delay'] = [ "type" => "string", "default" => "" ];
$args['attributes']['animation_duration'] = [ "type" => "string", "default" => "" ];





//$args['attributes']['transition'] = [ "type" => "string", "default" => "" ];
//$args['attributes']['flex_grow'] = [ "type" => "string", "default" => "" ];
//}

            $args['attributes']['mobile_transition'] = [ "type" => "string", "default" => "" ];

            $args['attributes']['hover_padding'] = [ "type" => "object", "default" => [ "top" => "", "left" => "", "right" => "", "bottom" => "" ] ];
            $args['attributes']['hover_margin'] = [ "type" => "object", "default" => [ "top" => "", "left" => "", "right" => "", "bottom" => "" ] ];
            $args['attributes']['hover_border'] = [ "type" => "object", "default" => [ "top" => "", "left" => "", "right" => "", "bottom" => "" ] ];
            $args['attributes']['hover_borderStyle'] = [ 'type' => 'string', 'default' => '' ];
            $args['attributes']['hover_borderColor'] = [ 'type' => 'string', 'default' => '' ];
            $args['attributes']['hover_borderRadius'] = [ 'type' => 'object', 'default' => [ 'topLeft' => '', 'topRight' => '', 'bottomLeft' => '', 'bottomRight' => '' ] ];
            $args['attributes']['hover_position'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['hover_display'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['hover_textShadow'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['letter_spacing_hover'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['hover_flexWrap'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['hover_columns'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['hover_z_index'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['hover_overflow'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['hover_zoom'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['hover_height'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['hover_flex_direction'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['hover_opacity'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['hover_white_space'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['hover_flex_grow'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['hover_transition'] = [ "type" => "string", "default" => "" ];

            // Add all new comprehensive responsive attributes (using OLD naming convention to match existing patterns)
            
            // Typography attributes - Desktop (property_device format)
            $args['attributes']['font_weight_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['font_style_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['text_transform_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['text_decoration_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['word_spacing_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['text_shadow_desktop'] = [ "type" => "string", "default" => "" ];
            
            // Layout & Positioning - Desktop (property_device format)
            $args['attributes']['min_width_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['max_width_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['min_height_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['max_height_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['box_sizing_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['visibility_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['float_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['clear_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['top_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['right_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['bottom_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['left_desktop'] = [ "type" => "string", "default" => "" ];
            
            // Flexbox - Desktop (property_device format)
            $args['attributes']['align_items_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['align_self_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['align_content_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['flex_basis_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['flex_shrink_desktop'] = [ "type" => "string", "default" => "" ];
            
            // Visual Effects - Desktop (property_device format)
            $args['attributes']['box_shadow_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['filter_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['cursor_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['user_select_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['pointer_events_desktop'] = [ "type" => "string", "default" => "" ];
            
            // Border width - All devices (property_device format)
            $args['attributes']['borderWidth_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['borderWidth_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['borderWidth_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['borderWidth_hover'] = [ "type" => "string", "default" => "" ];
            
            // Text align - All devices (camelCase property_device format - matches existing)
            $args['attributes']['textAlign_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['textAlign_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['textAlign_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['textAlign_hover'] = [ "type" => "string", "default" => "" ];
            
            // Opacity - All devices (property_device format)
            $args['attributes']['opacity_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['opacity_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['opacity_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['opacity_hover'] = [ "type" => "string", "default" => "" ];
            
            // Typography - Tablet
            $args['attributes']['font_weight_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['font_style_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['text_transform_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['text_decoration_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['word_spacing_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['text_shadow_tablet'] = [ "type" => "string", "default" => "" ];
            
            // Layout & Positioning - Tablet
            $args['attributes']['min_width_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['max_width_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['min_height_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['max_height_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['box_sizing_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['visibility_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['float_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['clear_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['top_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['right_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['bottom_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['left_tablet'] = [ "type" => "string", "default" => "" ];
            
            // Flexbox - Tablet
            $args['attributes']['align_items_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['align_self_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['align_content_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['flex_basis_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['flex_shrink_tablet'] = [ "type" => "string", "default" => "" ];
            
            // Visual Effects - Tablet
            $args['attributes']['box_shadow_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['filter_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['cursor_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['user_select_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['pointer_events_tablet'] = [ "type" => "string", "default" => "" ];
            
            // Background - Tablet
            $args['attributes']['background_color_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['background_image_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['background_size_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['background_position_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['background_repeat_tablet'] = [ "type" => "string", "default" => "" ];
            
            // Typography - Mobile
            $args['attributes']['font_weight_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['font_style_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['text_transform_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['text_decoration_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['word_spacing_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['text_shadow_mobile'] = [ "type" => "string", "default" => "" ];
            
            // Layout & Positioning - Mobile
            $args['attributes']['min_width_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['max_width_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['min_height_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['max_height_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['box_sizing_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['visibility_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['float_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['clear_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['top_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['right_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['bottom_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['left_mobile'] = [ "type" => "string", "default" => "" ];
            
            // Flexbox - Mobile
            $args['attributes']['align_items_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['align_self_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['align_content_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['flex_basis_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['flex_shrink_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['flex_grow_mobile'] = [ "type" => "string", "default" => "" ];
            
            // Visual Effects - Mobile
            $args['attributes']['box_shadow_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['filter_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['cursor_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['user_select_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['pointer_events_mobile'] = [ "type" => "string", "default" => "" ];
            
            // Background - Mobile
            $args['attributes']['background_color_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['background_image_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['background_size_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['background_position_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['background_repeat_mobile'] = [ "type" => "string", "default" => "" ];
            
            // Typography - Hover
            $args['attributes']['font_weight_hover'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['font_style_hover'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['text_transform_hover'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['text_decoration_hover'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['word_spacing_hover'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['text_shadow_hover'] = [ "type" => "string", "default" => "" ];
            
            // Layout & Positioning - Hover
            $args['attributes']['min_width_hover'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['max_width_hover'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['min_height_hover'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['max_height_hover'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['box_sizing_hover'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['visibility_hover'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['float_hover'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['clear_hover'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['top_hover'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['right_hover'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['bottom_hover'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['left_hover'] = [ "type" => "string", "default" => "" ];
            
            // Flexbox - Hover
            $args['attributes']['align_items_hover'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['align_self_hover'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['align_content_hover'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['flex_basis_hover'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['flex_shrink_hover'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['flex_grow_hover'] = [ "type" => "string", "default" => "" ];
            
            // Visual Effects - Hover
            $args['attributes']['box_shadow_hover'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['filter_hover'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['cursor_hover'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['user_select_hover'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['pointer_events_hover'] = [ "type" => "string", "default" => "" ];
            
            // Background - Hover
            $args['attributes']['background_color_hover'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['background_image_hover'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['background_size_hover'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['background_position_hover'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['background_repeat_hover'] = [ "type" => "string", "default" => "" ];
            
            // Z-Index - All devices (property_device format)
            $args['attributes']['z_index_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['z_index_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['z_index_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['z_index_hover'] = [ "type" => "string", "default" => "" ];
            
            // Transform - All devices (property_device format)
            $args['attributes']['transform_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['transform_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['transform_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['transform_hover'] = [ "type" => "string", "default" => "" ];
            
            // Transition - All devices (property_device format)
            $args['attributes']['transition_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['transition_tablet'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['transition_mobile'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['transition_hover'] = [ "type" => "string", "default" => "" ];
            

            
            // Layout & Positioning - Desktop
            $args['attributes']['min_width_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['max_width_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['min_height_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['max_height_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['box_sizing_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['visibility_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['float_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['clear_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['top_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['right_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['bottom_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['left_desktop'] = [ "type" => "string", "default" => "" ];
            
            // Flexbox - Desktop
            $args['attributes']['align_items_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['align_self_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['align_content_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['flex_basis_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['flex_shrink_desktop'] = [ "type" => "string", "default" => "" ];
            
            // Visual Effects - Desktop
            $args['attributes']['box_shadow_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['filter_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['opacity_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['transform_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['transition_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['cursor_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['user_select_desktop'] = [ "type" => "string", "default" => "" ];
            $args['attributes']['pointer_events_desktop'] = [ "type" => "string", "default" => "" ];
            

            

            

            


    return $args;
}


add_action( 'wp_loaded', function() {

//    $registered_blocks = WP_Block_Type_Registry::get_instance()->get_all_registered();
//
//    foreach( $registered_blocks as $name => $block ) {
//        // For core/group block, set some basic attributes.
//        if ( $block->name == 'core/group' ) {
//
//            $block->attributes['layout'] = [ "type" => "object", "default" => [ "type" => "default" ] ];
//            $block->attributes['backgroundColor'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['gradient'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['linkColor'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['textColor'] = [ "type" => "string", "default" => "" ];
//            // Overwrite layout attribute again (if needed).
//            $block->attributes['layout'] = [ "type" => "object", "default" => [ "type" => "default" ] ];
//        }
//
//        // For our custom stepfox blocks.
//        if ( $block->name == 'stepfox/intellibridge-query-block' ||   $block->name == 'stepfox/metafield-block1') {
//
//
//            $block->attributes['theme_colors'] = [ "type" => "object", "default" => [ "white" => "#FFF" ] ];
//            $block->attributes['theme_colors_update'] = [ "type" => "string", "default" => [] ];
//
//            // Change hide attributes from boolean to string with a default of "not-selected"
//            $block->attributes['hide_tablet'] = [ "type" => "string", "default" => "not-selected" ];
//            $block->attributes['text_align_tablet'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['hide_mobile'] = [ "type" => "string", "default" => "not-selected" ];

//            $block->attributes['text_align_mobile'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['justify_tablet'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['justify_mobile'] = [ "type" => "string", "default" => "" ];
//
//            $block->attributes['backgroundColor'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['gradient'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['linkColor'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['textColor'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['layout'] = [ "type" => "object", "default" => [ "type" => "default" ] ];
//
//            $block->attributes['font_size_desktop'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['line_height_desktop'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['order_desktop'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['width_desktop'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['desktop_padding'] = [ "type" => "object", "default" => [ "top" => "0", "left" => "0", "right" => "0", "bottom" => "0" ] ];
//            $block->attributes['desktop_margin'] = [ "type" => "object", "default" => [ "top" => "0", "left" => "0", "right" => "0", "bottom" => "0" ] ];
//            $block->attributes['desktop_border'] = [ "type" => "object", "default" => [ "top" => "0", "left" => "0", "right" => "0", "bottom" => "0" ] ];
//            $block->attributes['desktop_pos'] = [ "type" => "object", "default" => [ "top" => "0", "left" => "0", "right" => "0", "bottom" => "0" ] ];
//            $block->attributes['desktop_position'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['desktop_display'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['desktop_textShadow'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['desktop_flexWrap'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['desktop_columns'] = [ "type" => "string", "default" => "" ];
//
//            $block->attributes['font_size_tablet'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['line_height_tablet'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['order_tablet'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['width_tablet'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['tablet_padding'] = [ "type" => "object", "default" => [ "top" => "0", "left" => "0", "right" => "0", "bottom" => "0" ] ];
//            $block->attributes['tablet_margin'] = [ "type" => "object", "default" => [ "top" => "0", "left" => "0", "right" => "0", "bottom" => "0" ] ];
//            $block->attributes['tablet_border'] = [ "type" => "object", "default" => [ "top" => "0", "left" => "0", "right" => "0", "bottom" => "0" ] ];
//            $block->attributes['tablet_pos'] = [ "type" => "object", "default" => [ "top" => "0", "left" => "0", "right" => "0", "bottom" => "0" ] ];
//            $block->attributes['tablet_position'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['tablet_display'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['tablet_textShadow'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['tablet_flexWrap'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['tablet_columns'] = [ "type" => "string", "default" => "" ];
//
//            $block->attributes['font_size_mobile'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['line_height_mobile'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['order_mobile'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['width_mobile'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['mobile_padding'] = [ "type" => "object", "default" => [ "top" => "0", "left" => "0", "right" => "0", "bottom" => "0" ] ];
//            $block->attributes['mobile_margin'] = [ "type" => "object", "default" => [ "top" => "0", "left" => "0", "right" => "0", "bottom" => "0" ] ];
//            $block->attributes['mobile_border'] = [ "type" => "object", "default" => [ "top" => "0", "left" => "0", "right" => "0", "bottom" => "0" ] ];
//
//            $block->attributes['mobile_pos'] = [ "type" => "object", "default" => [ "top" => "0", "left" => "0", "right" => "0", "bottom" => "0" ] ];
//            $block->attributes['mobile_position'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['mobile_display'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['mobile_textShadow'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['mobile_flexWrap'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['mobile_columns'] = [ "type" => "string", "default" => "" ];
//
//
//
//
//
//
//
//
//            $block->attributes['customId'] = [ "type" => "string", "default" => "stepfox-not-set-id" ];
//            $block->attributes['custom_css'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['custom_js'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['device'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['desktop_textAlign'] = [ "type" => "string", "default" => "" ];
//            $block->attributes['desktop_justify'] = [ "type" => "string", "default" => "" ];
//
//
//
//        }
//    }

}, 100);





function wrap_group_and_columns($block_content, $block)
{
    // Check if block has any responsive attributes that would need an ID
    $hasResponsiveAttrs = false;
    $responsiveAttrs = [
        'font_size_desktop', 'font_size_tablet', 'font_size_mobile', 'font_size_hover',
        'line_height_desktop', 'line_height_tablet', 'line_height_mobile', 'line_height_hover',
        'letter_spacing_desktop', 'letter_spacing_tablet', 'letter_spacing_mobile', 'letter_spacing_hover',
        'width_desktop', 'width_tablet', 'width_mobile', 'width_hover',
        'height_desktop', 'height_tablet', 'height_mobile', 'height_hover',
        'order_desktop', 'order_tablet', 'order_mobile', 'order_hover',
        'desktop_borderStyle', 'tablet_borderStyle', 'mobile_borderStyle', 'hover_borderStyle',
        'desktop_borderColor', 'tablet_borderColor', 'mobile_borderColor', 'hover_borderColor',
        'borderWidth_desktop', 'borderWidth_tablet', 'borderWidth_mobile', 'borderWidth_hover',
        'z_index_desktop', 'z_index_tablet', 'z_index_mobile', 'z_index_hover',
        'desktop_position', 'tablet_position', 'mobile_position', 'hover_position',
        'top_desktop', 'top_tablet', 'top_mobile', 'top_hover',
        'right_desktop', 'right_tablet', 'right_mobile', 'right_hover',
        'bottom_desktop', 'bottom_tablet', 'bottom_mobile', 'bottom_hover',
        'left_desktop', 'left_tablet', 'left_mobile', 'left_hover',
        'desktop_display', 'tablet_display', 'mobile_display', 'hover_display',
        'opacity_desktop', 'opacity_tablet', 'opacity_mobile', 'opacity_hover',
        'overflow_desktop', 'overflow_tablet', 'overflow_mobile', 'overflow_hover',
        'flexDirection_desktop', 'flexDirection_tablet', 'flexDirection_mobile', 'flexDirection_hover',
        'justifyContent_desktop', 'justifyContent_tablet', 'justifyContent_mobile', 'justifyContent_hover',
        'flexWrap_desktop', 'flexWrap_tablet', 'flexWrap_mobile', 'flexWrap_hover',
        'flexGrow_desktop', 'flexGrow_tablet', 'flexGrow_mobile', 'flexGrow_hover',
        'textAlign_desktop', 'textAlign_tablet', 'textAlign_mobile', 'textAlign_hover',
        'transform_desktop', 'transform_tablet', 'transform_mobile', 'transform_hover',
        'transition_desktop', 'transition_tablet', 'transition_mobile', 'transition_hover',
        'desktop_borderRadius', 'tablet_borderRadius', 'mobile_borderRadius', 'hover_borderRadius',
        'desktop_padding', 'tablet_padding', 'mobile_padding', 'hover_padding',
        'desktop_margin', 'tablet_margin', 'mobile_margin', 'hover_margin'
    ];
    
    foreach ($responsiveAttrs as $attr) {
        if (!empty($block['attrs'][$attr])) {
            $hasResponsiveAttrs = true;
            break;
        }
    }
    
    // If block has responsive attributes but no customId, generate one based on block content hash
    if ($hasResponsiveAttrs && empty($block['attrs']['customId']) && $block['blockName'] != 'core/spacer') {
        // Create a consistent ID based on block content and attributes
        $blockHash = md5(serialize($block['attrs']) . $block['blockName'] . serialize($block['innerHTML'] ?? ''));
        $block['attrs']['customId'] = substr($blockHash, 0, 8);
    }
    
    // If the block has a customId (and is not a spacer) add the custom id to the outer tag.
    if ( ! empty( $block['attrs']['customId'] ) && $block['blockName'] != 'core/spacer' ) {
$block['attrs']['customId'] = str_replace( 'anchor_', '', $block['attrs']['customId'] );
        $content = preg_replace( '(>+)', ' id="block_' . $block['attrs']['customId'] . '" > ', $block_content, 1 );

        preg_match( '/(<[^>]*>)/i', $content, $first_line );
        if(!empty($first_line[0])) {
            if (strpos($first_line[0], 'style="') !== false &&
                strpos($first_line[0], 'id="block_' . $block['attrs']['customId'] . '"') !== false) {
                $content = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $content, 1);
            }
        }

        return $content;
    }

    if ( ! empty( $block['attrs']['image_block_id'] ) ) {
        // Additional image_block_id processing if needed.
    }

    return $block_content;
}
add_filter( 'render_block', 'wrap_group_and_columns', 10, 2 );


function search($array, $key)
{
    $results = array();

    if ( is_array( $array ) ) {
        if ( isset( $array[$key] ) ) {
            $results[] = $array;
        }
        foreach ( $array as $subarray ) {
            $results = array_merge( $results, search( $subarray, $key ) );
        }
    }

    return $results;
}


function stepfox_styling() {
    wp_reset_postdata();
    global $_wp_current_template_content;
    $page_content = get_the_content();
    $full_content = $_wp_current_template_content . $page_content;

    if ( has_blocks( $full_content ) ) {
        $blocks = parse_blocks( $full_content );
        $all_blocks = search( $blocks, 'blockName' );
        // Get template parts content.
        foreach ( $all_blocks as $block ) {
            $full_content .= get_template_parts_as_content( $block );
        }
        $blocks = parse_blocks( $full_content );
        $all_blocks = search( $blocks, 'blockName' );
        $inline_style = '';
        wp_register_style( 'intellibridge-custom-style', false );
        wp_enqueue_style( 'intellibridge-custom-style' );

        foreach ( $all_blocks as $block ) {
            if ( ( $block['blockName'] === 'core/block' && ! empty( $block['attrs']['ref'] ) ) ||
                ( $block['blockName'] === 'core/navigation' && ! empty( $block['attrs']['ref'] ) ) ) {
                $content = get_post_field( 'post_content', $block['attrs']['ref'] );
                $reusable_blocks = parse_blocks( $content );
                $all_reusable_blocks = search( $reusable_blocks, 'blockName' );
                foreach ( $all_reusable_blocks as $reusable_block ) {
                    $inline_style .= inline_styles_for_blocks( $reusable_block );
                }
            }

            if ( $block['blockName'] == 'stepfox/intellibridge-query-block' && $block['attrs']['className'] == 'is-style-custom-template-part' ) {
                if ( is_numeric( $block['attrs']['template_part'] ) ) {
                    $template_part = get_block_template( 'intellibridge//' . basename( get_permalink( $block['attrs']['template_part'] ) ), 'wp_template_part' );
                } else {
                    $template_part = get_block_template( 'intellibridge//' . $block['attrs']['template_part'], 'wp_template_part' );
                }
                $inline_style .= inline_styles_for_blocks( $block );
                $template_part_content = $template_part->content;
                if ( $block['attrs']["post_type"] == 'wp_template_part' && $block['attrs']['source'] == 'manual_selection' ) {
                    $manual_selection = $block['attrs']['manual_selection'];
                    foreach ( $manual_selection as $item ) {
                        if ( is_numeric( $item['toplistitem'] ) ) {
                            $template_part_inner = get_block_template( 'intellibridge//' . basename( get_permalink( $item['toplistitem'] ) ), 'wp_template_part' );
                        } else {
                            $template_part_inner = get_block_template( 'intellibridge//' . $item['toplistitem'], 'wp_template_part' );
                        }
                        $template_part_content .= $template_part_inner->content;
                    }
                }
                $template_blocks = parse_blocks( $template_part_content );
                $all_template_blocks = search( $template_blocks, 'blockName' );
                foreach ( $all_template_blocks as $template_block ) {
                    $inline_style .= inline_styles_for_blocks( $template_block );
                }
            } elseif ( $block['blockName'] == 'stepfox/intellibridge-query-block' && $block['attrs']['className'] != 'is-style-custom-template-part' ) {
                $inline_style .= inline_styles_for_blocks( $block );
            } elseif ( $block['blockName'] == 'stepfox/casino-query-block' && $block['attrs']['className'] != 'is-style-custom-template-part' ) {
                $card = str_replace( 'is-style-', '', $block['attrs']['className'] );
                wp_enqueue_style( 'casino-query-block-' . $card, get_template_directory_uri() . '/blocks/casino_query_block/cards/css/card-' . $card . '.css' );
                $inline_style .= inline_styles_for_blocks( $block );
            } else {
                $inline_style .= inline_styles_for_blocks( $block );
            }
        }

        wp_add_inline_style( 'intellibridge-custom-style', $inline_style );
    }
}
add_action( 'wp_head', 'stepfox_styling' );


function get_template_parts_as_content($block) {
    $template_parts_content = '';
    if ( $block['blockName'] == 'core/template-part' ) {
        $template_part = get_block_template( $block['attrs']['theme'] . '//' . $block['attrs']['slug'], 'wp_template_part' );
        $template_part_content = $template_part->content;
        $template_blocks = parse_blocks( $template_part_content );
        $all_template_blocks = search( $template_blocks, 'blockName' );
        $template_parts_content .= $template_part_content;
        foreach ( $all_template_blocks as $template_block ) {
            if ( $template_block['blockName'] == 'core/template-part' ) {
                $template_part_1 = get_block_template( $template_block['attrs']['theme'] . '//' . $template_block['attrs']['slug'], 'wp_template_part' );
                $template_part_content_1 = $template_part_1->content;
                $template_parts_content .= $template_part_content_1;
            }
        }
    }
    return $template_parts_content;
}

function decode_css_var( $input ) {
    // Check if the string starts with "var:"
    if ( strpos( $input, 'var:' ) === 0 ) {
        // Remove the "var:" prefix.
        $trimmed = substr( $input, 4 );
        // Replace '|' with '--'
        $variable_part = str_replace( '|', '--', $trimmed );
        // Return the final CSS variable format.
        return 'var(--wp--' . $variable_part . ')';
    }

    // If the string doesn't start with "var:", return it unchanged.
    return $input;
}

function inline_styles_for_blocks($block) {

    // Check if block has any responsive attributes that would need an ID
    $hasResponsiveAttrs = false;
    $responsiveAttrs = [
        // Typography Properties
        'font_size_desktop', 'font_size_tablet', 'font_size_mobile', 'font_size_hover',
        'line_height_desktop', 'line_height_tablet', 'line_height_mobile', 'line_height_hover',
        'letter_spacing_desktop', 'letter_spacing_tablet', 'letter_spacing_mobile', 'letter_spacing_hover',
        'font_weight_desktop', 'font_weight_tablet', 'font_weight_mobile', 'font_weight_hover',
        'font_style_desktop', 'font_style_tablet', 'font_style_mobile', 'font_style_hover',
        'text_transform_desktop', 'text_transform_tablet', 'text_transform_mobile', 'text_transform_hover',
        'text_decoration_desktop', 'text_decoration_tablet', 'text_decoration_mobile', 'text_decoration_hover',
        'word_spacing_desktop', 'word_spacing_tablet', 'word_spacing_mobile', 'word_spacing_hover',
        'text_shadow_desktop', 'text_shadow_tablet', 'text_shadow_mobile', 'text_shadow_hover',
        'textAlign_desktop', 'textAlign_tablet', 'textAlign_mobile', 'textAlign_hover',
        
        // Layout & Positioning Properties
        'width_desktop', 'width_tablet', 'width_mobile', 'width_hover',
        'height_desktop', 'height_tablet', 'height_mobile', 'height_hover',
        'min_width_desktop', 'min_width_tablet', 'min_width_mobile', 'min_width_hover',
        'max_width_desktop', 'max_width_tablet', 'max_width_mobile', 'max_width_hover',
        'min_height_desktop', 'min_height_tablet', 'min_height_mobile', 'min_height_hover',
        'max_height_desktop', 'max_height_tablet', 'max_height_mobile', 'max_height_hover',
        'desktop_position', 'tablet_position', 'mobile_position', 'hover_position',
        'top_desktop', 'top_tablet', 'top_mobile', 'top_hover',
        'right_desktop', 'right_tablet', 'right_mobile', 'right_hover',
        'bottom_desktop', 'bottom_tablet', 'bottom_mobile', 'bottom_hover',
        'left_desktop', 'left_tablet', 'left_mobile', 'left_hover',
        'desktop_display', 'tablet_display', 'mobile_display', 'hover_display',
        'z_index_desktop', 'z_index_tablet', 'z_index_mobile', 'z_index_hover',
        'order_desktop', 'order_tablet', 'order_mobile', 'order_hover',
        'box_sizing_desktop', 'box_sizing_tablet', 'box_sizing_mobile', 'box_sizing_hover',
        'overflow_desktop', 'overflow_tablet', 'overflow_mobile', 'overflow_hover',
        'visibility_desktop', 'visibility_tablet', 'visibility_mobile', 'visibility_hover',
        'float_desktop', 'float_tablet', 'float_mobile', 'float_hover',
        'clear_desktop', 'clear_tablet', 'clear_mobile', 'clear_hover',
        
        // Flexbox Properties
        'desktop_flex_direction', 'tablet_flex_direction', 'mobile_flex_direction', 'hover_flex_direction',
        'desktop_justify', 'tablet_justify', 'mobile_justify', 'hover_justify',
        'align_items_desktop', 'align_items_tablet', 'align_items_mobile', 'align_items_hover',
        'align_self_desktop', 'align_self_tablet', 'align_self_mobile', 'align_self_hover',
        'align_content_desktop', 'align_content_tablet', 'align_content_mobile', 'align_content_hover',
        'flex_basis_desktop', 'flex_basis_tablet', 'flex_basis_mobile', 'flex_basis_hover',
        'desktop_flex_grow', 'tablet_flex_grow', 'mobile_flex_grow', 'hover_flex_grow',
        'flex_shrink_desktop', 'flex_shrink_tablet', 'flex_shrink_mobile', 'flex_shrink_hover',
        'desktop_flexWrap', 'tablet_flexWrap', 'mobile_flexWrap', 'hover_flexWrap',
        
        // Border Properties
        'desktop_borderStyle', 'tablet_borderStyle', 'mobile_borderStyle', 'hover_borderStyle',
        'desktop_borderColor', 'tablet_borderColor', 'mobile_borderColor', 'hover_borderColor',
        'borderWidth_desktop', 'borderWidth_tablet', 'borderWidth_mobile', 'borderWidth_hover',
        
        // Visual Effects Properties
        'opacity_desktop', 'opacity_tablet', 'opacity_mobile', 'opacity_hover',
        'transform_desktop', 'transform_tablet', 'transform_mobile', 'transform_hover',
        'transition_desktop', 'transition_tablet', 'transition_mobile', 'transition_hover',
        'box_shadow_desktop', 'box_shadow_tablet', 'box_shadow_mobile', 'box_shadow_hover',
        'filter_desktop', 'filter_tablet', 'filter_mobile', 'filter_hover',
        'cursor_desktop', 'cursor_tablet', 'cursor_mobile', 'cursor_hover',
        'user_select_desktop', 'user_select_tablet', 'user_select_mobile', 'user_select_hover',
        'pointer_events_desktop', 'pointer_events_tablet', 'pointer_events_mobile', 'pointer_events_hover',
        
        // Background Properties
        'background_color_desktop', 'background_color_tablet', 'background_color_mobile', 'background_color_hover',
        'background_image_desktop', 'background_image_tablet', 'background_image_mobile', 'background_image_hover',
        'background_size_desktop', 'background_size_tablet', 'background_size_mobile', 'background_size_hover',
        'background_position_desktop', 'background_position_tablet', 'background_position_mobile', 'background_position_hover',
        'background_repeat_desktop', 'background_repeat_tablet', 'background_repeat_mobile', 'background_repeat_hover',
        
        // Object-based attributes
        'desktop_borderRadius', 'tablet_borderRadius', 'mobile_borderRadius', 'hover_borderRadius',
        'desktop_padding', 'tablet_padding', 'mobile_padding', 'hover_padding',
        'desktop_margin', 'tablet_margin', 'mobile_margin', 'hover_margin'
    ];
    
    foreach ($responsiveAttrs as $attr) {
        if (!empty($block['attrs'][$attr])) {
            $hasResponsiveAttrs = true;
            break;
        }
    }
    
    // If block has responsive attributes but no customId, generate one based on block content hash
    if ($hasResponsiveAttrs && empty($block['attrs']['customId'])) {
        // Create a consistent ID based on block content and attributes
        $blockHash = md5(serialize($block['attrs']) . $block['blockName'] . serialize($block['innerHTML'] ?? ''));
        $block['attrs']['customId'] = substr($blockHash, 0, 8);
    }

    if ( ! empty( $block['attrs']['customId'] ) || ! empty( $block['attrs']['image_block_id'] ) ) {

        // Set width if desktop width is provided.
        if ( ! empty( $block['attrs']['width_desktop'] ) ) {
            $block['attrs']['width'] = $block['attrs']['width_desktop'];
        }
        // REMOVED: font_size_desktop and line_height_desktop WordPress style assignments to prevent duplicates
        // REMOVED: desktop_padding WordPress style assignments to prevent duplicates

        if ( ! empty( $block['attrs']['desktop_border']['right'] ) ) {
            $block['attrs']['style']['spacing']['border']['right'] = $block['attrs']['desktop_border']['right'];
        }
        if ( ! empty( $block['attrs']['desktop_border']['left'] ) ) {
            $block['attrs']['style']['spacing']['border']['left'] = $block['attrs']['desktop_border']['left'];
        }
        if ( ! empty( $block['attrs']['desktop_border']['bottom'] ) ) {
            $block['attrs']['style']['spacing']['border']['bottom'] = $block['attrs']['desktop_border']['bottom'];
        }
        if ( ! empty( $block['attrs']['desktop_border']['top'] ) ) {
            $block['attrs']['style']['spacing']['border']['top'] = $block['attrs']['desktop_border']['top'];
        }

        // REMOVED: desktop_margin WordPress style assignments to prevent duplicates

        if ( ! empty( $block['attrs']['tablet_padding'] ) ) {
            $block['attrs']['padding_tablet'] = $block['attrs']['tablet_padding'];
        }
        if ( ! empty( $block['attrs']['tablet_margin'] ) ) {
            $block['attrs']['margin_tablet'] = $block['attrs']['tablet_margin'];
        }

        if ( ! empty( $block['attrs']['mobile_padding'] ) ) {
            $block['attrs']['padding_mobile'] = $block['attrs']['mobile_padding'];
        }
        if ( ! empty( $block['attrs']['mobile_margin'] ) ) {
            $block['attrs']['margin_mobile'] = $block['attrs']['mobile_margin'];
        }

        if ( strpos( $block['blockName'], 'acf/' ) !== false ) {
            $block['attrs']['customId'] = str_replace( 'block_', '', $block['attrs']['customId'] );
        }
        if ( ! empty( $block['attrs']['image_block_id'] ) ) {
            $block['attrs']['customId'] = $block['attrs']['image_block_id'];
        }
//var_dump($block['attrs']['customId']);
        $inlineStyles = '#block_' . $block['attrs']['customId'] . '{';
        $inlineStyles = str_replace( 'block_anchor_', '', $inlineStyles );
        if ( ! empty( $block['attrs']['style']['color']['background'] ) ) {
            $inlineStyles .= 'background-color:' . $block['attrs']['style']['color']['background'] . ';';
        }

        if ( ! empty( $block['attrs']['style']['background']['backgroundImage'] ) ) {
            $inlineStyles .= 'background:url(' . $block['attrs']['style']['background']['backgroundImage']['url'] . ');background-size: 100%;';
        }
        if ( ! empty( $block['attrs']['theme_colors'] ) ) {
            foreach ( $block['attrs']['theme_colors'] as $theme_color => $value ) {
                if ( $theme_color == 'gradient_override' ) {
                    $inlineStyles .= '--wp--preset--gradient--flag: ' . $value . ';';
                } else {
                    $inlineStyles .= '--wp--preset--color--' . $theme_color . ':' . $value . ';';
                }
            }
        }

        if ( ! empty( $block['attrs']['start_from'] ) ) {
            $inlineStyles .= '--start-from:' . $block['attrs']['start_from'] . ';';
        }
        if ( ! empty( $block['attrs']['style']['color']['gradient'] ) ) {
            $inlineStyles .= 'background:' . $block['attrs']['style']['color']['gradient'] . ';';
        }
        if ( ! empty( $block['attrs']['backgroundColor'] ) ) {
            $inlineStyles .= 'background-color:var(--wp--preset--color--' . $block['attrs']['backgroundColor'] . ');';
        }
        if ( ! empty( $block['attrs']['style']['color']['text'] ) ) {
            $inlineStyles .= 'color:' . $block['attrs']['style']['color']['text'] . ';';
        }
        if ( ! empty( $block['attrs']['textColor'] ) ) {
            $inlineStyles .= 'color:var(--wp--preset--color--' . $block['attrs']['textColor'] . ');';
        }
        // shadow
        if ( ! empty( $block['attrs']['style']['shadow'] ) ) {
            $inlineStyles .= 'box-shadow:' . $block['attrs']['style']['shadow'] . ';';
        }
        if ( ! empty( $block['attrs']['animation'] ) ) {
            $inlineStyles .= 'animation:' . $block['attrs']['animation'] . ';';
        }
        if ( ! empty( $block['attrs']['animation_delay'] ) ) {
            $inlineStyles .= 'animation-delay:' . $block['attrs']['animation_delay'] . 's;';
        }
        if ( ! empty( $block['attrs']['animation_duration'] ) ) {
            $inlineStyles .= 'animation-duration:' . $block['attrs']['animation_duration'] . 's;';
        }

        // Typography
        if ( ! empty( $block['attrs']['style']['typography']['fontSize'] ) ) {
            $inlineStyles .= 'font-size:' . $block['attrs']['style']['typography']['fontSize'] . ';';
        }
        if ( ! empty( $block['attrs']['style']['typography']['textDecoration'] ) ) {
            $inlineStyles .= 'text-decoration:' . $block['attrs']['style']['typography']['textDecoration'] . ';';
        }
        if ( ! empty( $block['attrs']['style']['typography']['letterSpacing'] ) ) {
            $inlineStyles .= 'letter-spacing:' . $block['attrs']['style']['typography']['letterSpacing'] . ';';
        }
        if ( ! empty( $block['attrs']['style']['typography']['lineHeight'] ) ) {
            $inlineStyles .= 'line-height:' . $block['attrs']['style']['typography']['lineHeight'] . ';';
        }
        if ( ! empty( $block['attrs']['style']['typography']['fontWeight'] ) ) {
            $inlineStyles .= 'font-weight:' . $block['attrs']['style']['typography']['fontWeight'] . ';';
        }
        if ( ! empty( $block['attrs']['style']['typography']['fontStyle'] ) ) {
            $inlineStyles .= 'font-style:' . $block['attrs']['style']['typography']['fontStyle'] . ';';
        }
        if ( ! empty( $block['attrs']['style']['typography']['textTransform'] ) ) {
            $inlineStyles .= 'text-transform:' . $block['attrs']['style']['typography']['textTransform'] . ';';
        }

        if ( ! empty( $block['attrs']['style']['border']['width'] ) ) {
            $inlineStyles .= 'border-width:' . $block['attrs']['style']['border']['width'] . ';';
        }
        if ( ! empty( $block['attrs']['style']['border']['style'] ) ) {
            $inlineStyles .= 'border-style:' . $block['attrs']['style']['border']['style'] . ';';
        }
        if ( ! empty( $block['attrs']['style']['border']['radius'] ) ) {
            $inlineStyles .= 'border-radius:' . $block['attrs']['style']['border']['radius'] . ';';
            $inlineStyles .= 'overflow:hidden;';
        }
        if ( ! empty( $block['attrs']['style']['border']['color'] ) ) {
            $inlineStyles .= 'border-color:' . $block['attrs']['style']['border']['color'] . ';';
        }
        if ( ! empty( $block['attrs']['style']['borderColor'] ) ) {
            $inlineStyles .= 'border-color:' . $block['attrs']['style']['borderColor'] . ';';
        }
        if ( ! empty( $block['attrs']['style']['border'] ) ) {
            foreach ( $block['attrs']['style']['border'] as $border_side_key => $border_side_value ) {
                if ( ! empty( $border_side_value["width"] ) ) {
                    $inlineStyles .= 'border-' . $border_side_key . '-width:' . decode_css_var($border_side_value['width']) . ';';
                    if(!empty($border_side_value['color'])) {
                        $inlineStyles .= 'border-' . $border_side_key . '-color:' . decode_css_var($border_side_value['color']) . ';';
                    }
                    $inlineStyles .= 'border-' . $border_side_key . '-style:solid;';
                    if(!empty($border_side_value['radius'])) {
                        $inlineStyles .= 'border-' . $border_side_key . '-radius:' . decode_css_var($border_side_value['radius']) . ';';
                    }
                }
            }
        }
        if ( ! empty( $block['attrs']['desktop_border']['top'] ) ) {
            $inlineStyles .= 'border-top-width:' . $block['attrs']['desktop_border']['top'] . ';';
        }
        if ( ! empty( $block['attrs']['desktop_border']['bottom'] ) ) {
            $inlineStyles .= 'border-bottom-width:' . $block['attrs']['desktop_border']['bottom'] . ';';
        }
        if ( ! empty( $block['attrs']['desktop_border']['left'] ) ) {
            $inlineStyles .= 'border-left-width:' . $block['attrs']['desktop_border']['left'] . ';';
        }
        if ( ! empty( $block['attrs']['desktop_border']['right'] ) ) {
            $inlineStyles .= 'border-right-width:' . $block['attrs']['desktop_border']['right'] . ';';
        }

        if ( ! empty( $block['attrs']['image_block_id'] ) ) {
            if ( ! empty( $block['attrs']['width'] ) ) {
                $inlineStyles .= 'width:' . $block['attrs']['width'] . 'px;';
                $block['attrs']['width'] = '';
            }
            if ( ! empty( $block['attrs']['height'] ) ) {
                $inlineStyles .= 'height:' . $block['attrs']['height'] . 'px;';
                $block['attrs']['height'] = '';
            }
        }
        // Block width
        if ( ! empty( $block['attrs']['layout']['contentSize'] ) && $block['blockName'] != 'core/group' ) {
            $inlineStyles .= 'max-width:' . $block['attrs']['layout']['contentSize'] . ';';
        }
        if ( ! empty( $block['attrs']['layout']['contentSize'] ) && $block['blockName'] == 'core/group' ) {
            $inlineStyles .= 'flex-basis:' . $block['attrs']['layout']['contentSize'] . '; max-width:100%;';
        }
        if ( ! empty( $block['attrs']['width'] ) && $block['blockName'] != 'core/column' ) {
            $inlineStyles .= 'width:' . $block['attrs']['width'] . ';';
        }
        if ( ! empty( $block['attrs']['width'] ) && $block['blockName'] === 'core/column' ) {
            $inlineStyles .= 'flex-basis:' . $block['attrs']['width'] . ' !important;';
        }

        if ( ! empty( $block['attrs']['layout']['type'] ) && $block['attrs']['layout']['type'] == 'flex' ) {
            $inlineStyles .= 'display:' . $block['attrs']['layout']['type'] . ';';
            if ( ! empty( $block['attrs']['layout']['flexWrap'] ) ) {
                $inlineStyles .= 'flex-wrap:' . $block['attrs']['layout']['flexWrap'] . ';';
            } else {
                $inlineStyles .= 'flex-wrap:wrap;';
            }
            if ( ! empty( $block['attrs']['layout']['verticalAlignment'] ) ) {
                $verticalAlignment = 'center';
                if ( $block['attrs']['layout']['verticalAlignment'] == 'bottom' ) {
                    $verticalAlignment = 'flex-end';
                } elseif ( $block['attrs']['layout']['verticalAlignment'] == 'top' ) {
                    $verticalAlignment = 'flex-start';
                }
                $inlineStyles .= 'align-items:' . $verticalAlignment . ';';
            } else {
                $inlineStyles .= 'align-items:center;';
            }
            if ( ! empty( $block['attrs']['layout']['justifyContent'] ) ) {
                if ( $block['attrs']['layout']['justifyContent'] == 'left' ) {
                    $inlineStyles .= 'justify-content:flex-start;';
                }
                if ( $block['attrs']['layout']['justifyContent'] == 'center' ) {
                    $inlineStyles .= 'justify-content:center;';
                }
                if ( $block['attrs']['layout']['justifyContent'] == 'right' ) {
                    $inlineStyles .= 'justify-content:flex-end;';
                }
                if ( $block['attrs']['layout']['justifyContent'] == 'space-between' ) {
                    $inlineStyles .= 'justify-content:space-between;';
                }
            }
            if ( ! empty( $block['attrs']['layout']['orientation'] ) ) {
                if ( $block['attrs']['layout']['orientation'] == 'vertical' ) {
                    $inlineStyles .= 'flex-direction:column;';
                    if ( ! empty( $block['attrs']['layout']['justifyContent'] ) ) {
                        if ( $block['attrs']['layout']['justifyContent'] == 'left' ) {
                            $inlineStyles .= 'align-items:flex-start;';
                        }
                        if ( $block['attrs']['layout']['justifyContent'] == 'center' ) {
                            $inlineStyles .= 'align-items:center;';
                        }
                        if ( $block['attrs']['layout']['justifyContent'] == 'right' ) {
                            $inlineStyles .= 'align-items:flex-end;';
                        }
                    }
                } else {
                    $inlineStyles .= 'flex-direction:row;';
                    if ( $block['attrs']['layout']['justifyContent'] == 'left' ) {
                        $inlineStyles .= 'justify-content:flex-start;';
                    }
                    if ( $block['attrs']['layout']['justifyContent'] == 'center' ) {
                        $inlineStyles .= 'justify-content:center;';
                    }
                    if ( $block['attrs']['layout']['justifyContent'] == 'right' ) {
                        $inlineStyles .= 'justify-content:flex-end;';
                    }
                    if ( $block['attrs']['layout']['justifyContent'] == 'space-between' ) {
                        $inlineStyles .= 'justify-content:space-between;';
                    }
                }
            }
        }
        if ( strpos( $block['blockName'], 'core/column' ) !== false ) {
            if ( ! empty( $block['attrs']['align'] ) ) {
                $inlineStyles .= 'align-self:' . $block['attrs']['align'] . ';';
            }
        }

        if ( ! empty( $block['attrs']['minHeight'] ) ) {
            if ( empty( $block['attrs']['minHeightUnit'] ) ) {
                $block['attrs']['minHeightUnit'] = 'px';
            }
            $inlineStyles .= 'min-height:' . $block['attrs']['minHeight'] . $block['attrs']['minHeightUnit'] . ';';
        }
        if ( ! empty( $block['attrs']['style']['dimensions']['minHeight'] ) ) {
            $inlineStyles .= 'min-height:' . $block['attrs']['style']['dimensions']['minHeight']. ';';
        }
        // Spacing (gap, padding, margin)
        if ( ! empty( $block['attrs']['style']['spacing']['blockGap'] ) ) {
    $blockGap = $block['attrs']['style']['spacing']['blockGap'];
    if ( is_array( $blockGap ) ) {
        // Convert array to string, e.g., join with a space or comma.
        $blockGap = implode(' ', $blockGap);
    }
    $inlineStyles .= 'gap:' . $blockGap . ';';
}
        if ( ! empty( $block['attrs']['style']['spacing']['padding']['top'] ) ) {
            $inlineStyles .= 'padding-top:' . $block['attrs']['style']['spacing']['padding']['top'] . ';';
        }
        if ( ! empty( $block['attrs']['style']['spacing']['padding']['right'] ) ) {
            $inlineStyles .= 'padding-right:' . $block['attrs']['style']['spacing']['padding']['right'] . ';';
        }
        if ( ! empty( $block['attrs']['style']['spacing']['padding']['bottom'] ) ) {
            $inlineStyles .= 'padding-bottom:' . $block['attrs']['style']['spacing']['padding']['bottom'] . ';';
        }
        if ( ! empty( $block['attrs']['style']['spacing']['padding']['left'] ) ) {
            $inlineStyles .= 'padding-left:' . $block['attrs']['style']['spacing']['padding']['left'] . ';';
        }
        if ( ! empty( $block['attrs']['style']['spacing']['margin']['top'] ) ) {
            $inlineStyles .= 'margin-top:' . $block['attrs']['style']['spacing']['margin']['top'] . ';';
        }
        if ( ! empty( $block['attrs']['style']['spacing']['margin']['right'] ) ) {
            $inlineStyles .= 'margin-right:' . $block['attrs']['style']['spacing']['margin']['right'] . ';';
        }
        if ( ! empty( $block['attrs']['style']['spacing']['margin']['bottom'] ) ) {
            $inlineStyles .= 'margin-bottom:' . $block['attrs']['style']['spacing']['margin']['bottom'] . ';';
        }
        if ( ! empty( $block['attrs']['style']['spacing']['margin']['left'] ) ) {
            $inlineStyles .= 'margin-left:' . $block['attrs']['style']['spacing']['margin']['left'] . ';';
        }
        if ( ! empty( $block['attrs']['desktop_position'] ) ) {
            $inlineStyles .= 'position:' . $block['attrs']['desktop_position'] . ';';
        }
        if ( ! empty( $block['attrs']['desktop_display'] ) ) {
            $inlineStyles .= 'display:' . $block['attrs']['desktop_display'] . ';';
        }
        if ( ! empty( $block['attrs']['desktop_textShadow'] ) ) {
            $inlineStyles .= 'text-shadow:' . $block['attrs']['desktop_textShadow'] . ';';
        }
        if ( ! empty( $block['attrs']['desktop_flexWrap'] ) ) {
            $inlineStyles .= 'flex-wrap:' . $block['attrs']['desktop_flexWrap'] . ' !important;';
        }
        if ( ! empty( $block['attrs']['desktop_pos']['top'] ) ) {
            $inlineStyles .= 'top:' . $block['attrs']['desktop_pos']['top'] . ';';
        }
        if ( ! empty( $block['attrs']['desktop_pos']['right'] ) ) {
            $inlineStyles .= 'right:' . $block['attrs']['desktop_pos']['right'] . ';';
        }
        if ( ! empty( $block['attrs']['desktop_pos']['bottom'] ) ) {
            $inlineStyles .= 'bottom:' . $block['attrs']['desktop_pos']['bottom'] . ';';
        }
        if ( ! empty( $block['attrs']['desktop_pos']['left'] ) ) {
            $inlineStyles .= 'left:' . $block['attrs']['desktop_pos']['left'] . ';';
        }
        if ( ! empty( $block['attrs']['desktop_columns'] ) ) {
            $inlineStyles .= 'grid-template-columns:repeat(' . $block['attrs']['desktop_columns'] . ', minmax(0, 1fr)) !important;';
        }
if ( ! empty( $block['attrs']['desktop_z_index'] ) ) {
    $inlineStyles .= 'z-index:' . $block['attrs']['desktop_z_index'] . ' !important;';
}
if ( ! empty( $block['attrs']['desktop_overflow'] ) ) {
    $inlineStyles .= 'overflow:' . $block['attrs']['desktop_overflow'] . ' !important;';
}
if ( ! empty( $block['attrs']['desktop_zoom'] ) ) {
    $inlineStyles .= 'zoom:' . $block['attrs']['desktop_zoom'] . ' !important;';
}
if ( ! empty( $block['attrs']['desktop_height'] ) ) {
    $inlineStyles .= 'height:' . $block['attrs']['desktop_height'] . ' !important;';
    $inlineStyles .= 'min-height:' . $block['attrs']['desktop_height']  . ';';
}
if ( ! empty( $block['attrs']['desktop_flex_direction'] ) ) {
    $inlineStyles .= 'flex-direction:' . $block['attrs']['desktop_flex_direction'] . ' !important;';
}
if ( ! empty( $block['attrs']['desktop_opacity'] ) ) {
    $inlineStyles .= 'opacity:' . $block['attrs']['desktop_opacity'] . ' !important;';
}
if ( ! empty( $block['attrs']['desktop_white_space'] ) ) {
    $inlineStyles .= 'white-space:' . $block['attrs']['desktop_white_space'] . ' !important;';
}
if ( ! empty( $block['attrs']['desktop_flex_grow'] ) ) {
    $inlineStyles .= 'flex-grow:' . $block['attrs']['desktop_flex_grow'] . ' !important;';
}
if ( ! empty( $block['attrs']['desktop_transition'] ) ) {
    $inlineStyles .= 'transition: all ' . $block['attrs']['desktop_transition'] . 's !important;';
}
if ( ! empty( $block['attrs']['desktop_textAlign'] ) ) {
    $inlineStyles .= 'text-align:' . $block['attrs']['desktop_textAlign'] . ';';
}
 if ( ! empty( $block['attrs']['desktop_justify'] ) ) {
    $inlineStyles .= 'justify-content:' . $block['attrs']['desktop_justify'] . ';';
}

// REMOVED: letter_spacing_desktop duplicate
// Core Desktop Attributes
if ( ! empty( $block['attrs']['font_size_desktop'] ) ) {
    $inlineStyles .= 'font-size:' . $block['attrs']['font_size_desktop'] . ';';
}
if ( ! empty( $block['attrs']['line_height_desktop'] ) ) {
    $inlineStyles .= 'line-height:' . $block['attrs']['line_height_desktop'] . ';';
}
if ( ! empty( $block['attrs']['letter_spacing_desktop'] ) ) {
    $inlineStyles .= 'letter-spacing:' . $block['attrs']['letter_spacing_desktop'] . ';';
}
if ( ! empty( $block['attrs']['width_desktop'] ) ) {
    $inlineStyles .= 'width:' . $block['attrs']['width_desktop'] . ';';
}
if ( ! empty( $block['attrs']['height_desktop'] ) ) {
    $inlineStyles .= 'height:' . $block['attrs']['height_desktop'] . ';';
}
if ( ! empty( $block['attrs']['order_desktop'] ) ) {
    $inlineStyles .= 'order:' . $block['attrs']['order_desktop'] . ';';
}
if ( ! empty( $block['attrs']['desktop_borderStyle'] ) ) {
    $inlineStyles .= 'border-style:' . $block['attrs']['desktop_borderStyle'] . ';';
}
if ( ! empty( $block['attrs']['desktop_borderColor'] ) ) {
    $inlineStyles .= 'border-color:' . $block['attrs']['desktop_borderColor'] . ';';
}
if ( ! empty( $block['attrs']['borderWidth_desktop'] ) ) {
    $inlineStyles .= 'border-width:' . $block['attrs']['borderWidth_desktop'] . ';';
}
// REMOVED DUPLICATES - These properties are already generated above with !important
// Desktop Border Radius
if ( ! empty( $block['attrs']['desktop_borderRadius']['topLeft'] ) ) {
    $inlineStyles .= 'border-top-left-radius:' . $block['attrs']['desktop_borderRadius']['topLeft'] . ';';
}
if ( ! empty( $block['attrs']['desktop_borderRadius']['topRight'] ) ) {
    $inlineStyles .= 'border-top-right-radius:' . $block['attrs']['desktop_borderRadius']['topRight'] . ';';
}
if ( ! empty( $block['attrs']['desktop_borderRadius']['bottomLeft'] ) ) {
    $inlineStyles .= 'border-bottom-left-radius:' . $block['attrs']['desktop_borderRadius']['bottomLeft'] . ';';
}
if ( ! empty( $block['attrs']['desktop_borderRadius']['bottomRight'] ) ) {
    $inlineStyles .= 'border-bottom-right-radius:' . $block['attrs']['desktop_borderRadius']['bottomRight'] . ';';
}

// New Desktop Typography Attributes
if ( ! empty( $block['attrs']['textAlign_desktop'] ) ) {
    $inlineStyles .= 'text-align:' . $block['attrs']['textAlign_desktop'] . ';';
}
if ( ! empty( $block['attrs']['font_weight_desktop'] ) ) {
    $inlineStyles .= 'font-weight:' . $block['attrs']['font_weight_desktop'] . ';';
}
if ( ! empty( $block['attrs']['font_style_desktop'] ) ) {
    $inlineStyles .= 'font-style:' . $block['attrs']['font_style_desktop'] . ';';
}
if ( ! empty( $block['attrs']['text_transform_desktop'] ) ) {
    $inlineStyles .= 'text-transform:' . $block['attrs']['text_transform_desktop'] . ';';
}
if ( ! empty( $block['attrs']['text_decoration_desktop'] ) ) {
    $inlineStyles .= 'text-decoration:' . $block['attrs']['text_decoration_desktop'] . ';';
}
if ( ! empty( $block['attrs']['word_spacing_desktop'] ) ) {
    $inlineStyles .= 'word-spacing:' . $block['attrs']['word_spacing_desktop'] . ';';
}
if ( ! empty( $block['attrs']['text_shadow_desktop'] ) ) {
    $inlineStyles .= 'text-shadow:' . $block['attrs']['text_shadow_desktop'] . ';';
}

// New Desktop Layout & Positioning Attributes
if ( ! empty( $block['attrs']['min_width_desktop'] ) ) {
    $inlineStyles .= 'min-width:' . $block['attrs']['min_width_desktop'] . ';';
}
if ( ! empty( $block['attrs']['max_width_desktop'] ) ) {
    $inlineStyles .= 'max-width:' . $block['attrs']['max_width_desktop'] . ';';
}
if ( ! empty( $block['attrs']['min_height_desktop'] ) ) {
    $inlineStyles .= 'min-height:' . $block['attrs']['min_height_desktop'] . ';';
}
if ( ! empty( $block['attrs']['max_height_desktop'] ) ) {
    $inlineStyles .= 'max-height:' . $block['attrs']['max_height_desktop'] . ';';
}
if ( ! empty( $block['attrs']['box_sizing_desktop'] ) ) {
    $inlineStyles .= 'box-sizing:' . $block['attrs']['box_sizing_desktop'] . ';';
}
if ( ! empty( $block['attrs']['visibility_desktop'] ) ) {
    $inlineStyles .= 'visibility:' . $block['attrs']['visibility_desktop'] . ';';
}
if ( ! empty( $block['attrs']['float_desktop'] ) ) {
    $inlineStyles .= 'float:' . $block['attrs']['float_desktop'] . ';';
}
if ( ! empty( $block['attrs']['clear_desktop'] ) ) {
    $inlineStyles .= 'clear:' . $block['attrs']['clear_desktop'] . ';';
}

// New Desktop Flexbox Attributes
if ( ! empty( $block['attrs']['align_items_desktop'] ) ) {
    $inlineStyles .= 'align-items:' . $block['attrs']['align_items_desktop'] . ';';
}
if ( ! empty( $block['attrs']['align_self_desktop'] ) ) {
    $inlineStyles .= 'align-self:' . $block['attrs']['align_self_desktop'] . ';';
}
if ( ! empty( $block['attrs']['align_content_desktop'] ) ) {
    $inlineStyles .= 'align-content:' . $block['attrs']['align_content_desktop'] . ';';
}
if ( ! empty( $block['attrs']['flex_basis_desktop'] ) ) {
    $inlineStyles .= 'flex-basis:' . $block['attrs']['flex_basis_desktop'] . ';';
}
if ( ! empty( $block['attrs']['flex_shrink_desktop'] ) ) {
    $inlineStyles .= 'flex-shrink:' . $block['attrs']['flex_shrink_desktop'] . ';';
}
if ( ! empty( $block['attrs']['desktop_flex_grow'] ) ) {
    $inlineStyles .= 'flex-grow:' . $block['attrs']['desktop_flex_grow'] . ';';
}

// New Desktop Visual Effects Attributes
if ( ! empty( $block['attrs']['opacity_desktop'] ) ) {
    $inlineStyles .= 'opacity:' . $block['attrs']['opacity_desktop'] . ';';
}
if ( ! empty( $block['attrs']['box_shadow_desktop'] ) ) {
    $inlineStyles .= 'box-shadow:' . $block['attrs']['box_shadow_desktop'] . ';';
}
if ( ! empty( $block['attrs']['filter_desktop'] ) ) {
    $inlineStyles .= 'filter:' . $block['attrs']['filter_desktop'] . ';';
}
if ( ! empty( $block['attrs']['cursor_desktop'] ) ) {
    $inlineStyles .= 'cursor:' . $block['attrs']['cursor_desktop'] . ';';
}
if ( ! empty( $block['attrs']['user_select_desktop'] ) ) {
    $inlineStyles .= 'user-select:' . $block['attrs']['user_select_desktop'] . ';';
}
if ( ! empty( $block['attrs']['pointer_events_desktop'] ) ) {
    $inlineStyles .= 'pointer-events:' . $block['attrs']['pointer_events_desktop'] . ';';
}
if ( ! empty( $block['attrs']['z_index_desktop'] ) ) {
    $inlineStyles .= 'z-index:' . $block['attrs']['z_index_desktop'] . ';';
}
if ( ! empty( $block['attrs']['transform_desktop'] ) ) {
    $inlineStyles .= 'transform:' . $block['attrs']['transform_desktop'] . ';';
}
if ( ! empty( $block['attrs']['transition_desktop'] ) ) {
    $inlineStyles .= 'transition:' . $block['attrs']['transition_desktop'] . ';';
}

// New Desktop Background Attributes
if ( ! empty( $block['attrs']['background_color_desktop'] ) ) {
    $inlineStyles .= 'background-color:' . $block['attrs']['background_color_desktop'] . ';';
}
if ( ! empty( $block['attrs']['background_image_desktop'] ) ) {
    $inlineStyles .= 'background-image:' . $block['attrs']['background_image_desktop'] . ';';
}
if ( ! empty( $block['attrs']['background_size_desktop'] ) ) {
    $inlineStyles .= 'background-size:' . $block['attrs']['background_size_desktop'] . ';';
}
if ( ! empty( $block['attrs']['background_position_desktop'] ) ) {
    $inlineStyles .= 'background-position:' . $block['attrs']['background_position_desktop'] . ';';
}
if ( ! empty( $block['attrs']['background_repeat_desktop'] ) ) {
    $inlineStyles .= 'background-repeat:' . $block['attrs']['background_repeat_desktop'] . ';';
}

// Desktop Padding
if ( ! empty( $block['attrs']['desktop_padding']['top'] ) ) {
    $inlineStyles .= 'padding-top:' . $block['attrs']['desktop_padding']['top'] . ';';
}
if ( ! empty( $block['attrs']['desktop_padding']['right'] ) ) {
    $inlineStyles .= 'padding-right:' . $block['attrs']['desktop_padding']['right'] . ';';
}
if ( ! empty( $block['attrs']['desktop_padding']['bottom'] ) ) {
    $inlineStyles .= 'padding-bottom:' . $block['attrs']['desktop_padding']['bottom'] . ';';
}
if ( ! empty( $block['attrs']['desktop_padding']['left'] ) ) {
    $inlineStyles .= 'padding-left:' . $block['attrs']['desktop_padding']['left'] . ';';
}

// Desktop Margin
if ( ! empty( $block['attrs']['desktop_margin']['top'] ) ) {
    $inlineStyles .= 'margin-top:' . $block['attrs']['desktop_margin']['top'] . ';';
}
if ( ! empty( $block['attrs']['desktop_margin']['right'] ) ) {
    $inlineStyles .= 'margin-right:' . $block['attrs']['desktop_margin']['right'] . ';';
}
if ( ! empty( $block['attrs']['desktop_margin']['bottom'] ) ) {
    $inlineStyles .= 'margin-bottom:' . $block['attrs']['desktop_margin']['bottom'] . ';';
}
if ( ! empty( $block['attrs']['desktop_margin']['left'] ) ) {
    $inlineStyles .= 'margin-left:' . $block['attrs']['desktop_margin']['left'] . ';';
}

        $inlineStyles .= '}';

        // Tablet media query
        $inlineStyles .= '@media screen and (max-width: 1024px){ #block_' . $block['attrs']['customId'] . '{';
        if ( ! empty( $block['attrs']['font_size_tablet'] ) ) {
            $inlineStyles .= 'font-size:' . $block['attrs']['font_size_tablet'] . ';';
        }
        if (  empty( $block['attrs']['isStackedOnMobile'] ) ) {
            $inlineStyles .= 'flex-wrap:wrap !important;';
        }
        if ( ! empty( $block['attrs']['line_height_tablet'] ) ) {
            $inlineStyles .= 'line-height:' . $block['attrs']['line_height_tablet'] . ';';
        }
        if ( ! empty( $block['attrs']['gap_tablet'] ) ) {
            $inlineStyles .= 'gap:' . $block['attrs']['gap_tablet'] . ';';
        }
        if ( ! empty( $block['attrs']['width_tablet'] ) ) {
            $inlineStyles .= 'width:' . $block['attrs']['width_tablet'] . ';';
        }
        if ( ! empty( $block['attrs']['width_tablet'] ) ) {
            $inlineStyles .= 'flex-basis:' . $block['attrs']['width_tablet'] . ' !important;';
        }
        if ( ! empty( $block['attrs']['order_tablet'] ) ) {
            $inlineStyles .= 'order:' . $block['attrs']['order_tablet'] . ';';
        }
        if ( ! empty( $block['attrs']['height'] ) ) {
            $inlineStyles .= 'height:' . $block['attrs']['height'] . ';';
        }
        if ( ! empty( $block['attrs']['minHeight'] ) ) {
            if ( empty( $block['attrs']['minHeightUnit'] ) ) { $block['attrs']['minHeightUnit'] = 'px'; }
            $inlineStyles .= 'min-height:' . $block['attrs']['minHeight'] . $block['attrs']['minHeightUnit'] . ';';
        }
        if ( ! empty( $block['attrs']['tablet_border']['top'] ) ) {
            $inlineStyles .= 'border-top-width:' . $block['attrs']['tablet_border']['top'] . ';';
        }
        if ( ! empty( $block['attrs']['tablet_border']['bottom'] ) ) {
            $inlineStyles .= 'border-bottom-width:' . $block['attrs']['tablet_border']['bottom'] . ';';
        }
        if ( ! empty( $block['attrs']['tablet_border']['left'] ) ) {
            $inlineStyles .= 'border-left-width:' . $block['attrs']['tablet_border']['left'] . ';';
        }
        if ( ! empty( $block['attrs']['tablet_border']['right'] ) ) {
            $inlineStyles .= 'border-right-width:' . $block['attrs']['tablet_border']['right'] . ';';
        }
        if ( ! empty( $block['attrs']['tablet_padding']['top'] ) ) {
    $inlineStyles .= 'padding-top:' . $block['attrs']['tablet_padding']['top'] . ';';
}
if ( ! empty( $block['attrs']['tablet_padding']['right'] ) ) {
    $inlineStyles .= 'padding-right:' . $block['attrs']['tablet_padding']['right'] . ';';
}
if ( ! empty( $block['attrs']['tablet_padding']['bottom'] ) ) {
    $inlineStyles .= 'padding-bottom:' . $block['attrs']['tablet_padding']['bottom'] . ';';
}
if ( ! empty( $block['attrs']['tablet_padding']['left'] ) ) {
    $inlineStyles .= 'padding-left:' . $block['attrs']['tablet_padding']['left'] . ';';
}
if ( ! empty( $block['attrs']['tablet_margin']['top'] ) ) {
    $inlineStyles .= 'margin-top:' . $block['attrs']['tablet_margin']['top'] . ';';
}
if ( ! empty( $block['attrs']['tablet_margin']['right'] ) ) {
    $inlineStyles .= 'margin-right:' . $block['attrs']['tablet_margin']['right'] . ';';
}
if ( ! empty( $block['attrs']['tablet_margin']['bottom'] ) ) {
    $inlineStyles .= 'margin-bottom:' . $block['attrs']['tablet_margin']['bottom'] . ';';
}
if ( ! empty( $block['attrs']['tablet_margin']['left'] ) ) {
    $inlineStyles .= 'margin-left:' . $block['attrs']['tablet_margin']['left'] . ';';
}

        if ( ! empty( $block['attrs']['tablet_position'] ) ) {
            $inlineStyles .= 'position:' . $block['attrs']['tablet_position'] . ';';
        }
        if ( ! empty( $block['attrs']['tablet_display'] ) ) {
            $inlineStyles .= 'display:' . $block['attrs']['tablet_display'] . ';';
        }
        if ( ! empty( $block['attrs']['tablet_textShadow'] ) ) {
            $inlineStyles .= 'text-shadow:' . $block['attrs']['tablet_textShadow'] . ';';
        }
        if ( ! empty( $block['attrs']['tablet_flexWrap'] ) ) {
            $inlineStyles .= 'flex-wrap:' . $block['attrs']['tablet_flexWrap'] . ' !important;';
        }
        if ( ! empty( $block['attrs']['tablet_pos']['top'] ) ) {
            $inlineStyles .= 'top:' . $block['attrs']['tablet_pos']['top'] . ';';
        }
        if ( ! empty( $block['attrs']['tablet_pos']['right'] ) ) {
            $inlineStyles .= 'right:' . $block['attrs']['tablet_pos']['right'] . ';';
        }
        if ( ! empty( $block['attrs']['tablet_pos']['bottom'] ) ) {
            $inlineStyles .= 'bottom:' . $block['attrs']['tablet_pos']['bottom'] . ';';
        }
        if ( ! empty( $block['attrs']['tablet_pos']['left'] ) ) {
            $inlineStyles .= 'left:' . $block['attrs']['tablet_pos']['left'] . ';';
        }
        if ( ! empty( $block['attrs']['tablet_columns'] ) ) {
            $inlineStyles .= 'grid-template-columns:repeat(' . $block['attrs']['tablet_columns'] . ', minmax(0, 1fr)) !important;';
        }

if ( ! empty( $block['attrs']['tablet_z_index'] ) ) {
    $inlineStyles .= 'z-index:' . $block['attrs']['tablet_z_index'] . ' !important;';
}
if ( ! empty( $block['attrs']['tablet_overflow'] ) ) {
    $inlineStyles .= 'overflow:' . $block['attrs']['tablet_overflow'] . ' !important;';
}
if ( ! empty( $block['attrs']['tablet_zoom'] ) ) {
    $inlineStyles .= 'zoom:' . $block['attrs']['tablet_zoom'] . ' !important;';
}
if ( ! empty( $block['attrs']['tablet_height'] ) ) {
    $inlineStyles .= 'height:' . $block['attrs']['tablet_height'] . ' !important;';
    $inlineStyles .= 'min-height:' . $block['attrs']['tablet_height'] . ';';
}
if ( ! empty( $block['attrs']['tablet_flex_direction'] ) ) {
    $inlineStyles .= 'flex-direction:' . $block['attrs']['tablet_flex_direction'] . ' !important;';
}
if ( ! empty( $block['attrs']['tablet_opacity'] ) ) {
    $inlineStyles .= 'opacity:' . $block['attrs']['tablet_opacity'] . ' !important;';
}
if ( ! empty( $block['attrs']['tablet_white_space'] ) ) {
    $inlineStyles .= 'white-space:' . $block['attrs']['tablet_white_space'] . ' !important;';
}
if ( ! empty( $block['attrs']['tablet_flex_grow'] ) ) {
    $inlineStyles .= 'flex-grow:' . $block['attrs']['tablet_flex_grow'] . ' !important;';
}
if ( ! empty( $block['attrs']['tablet_transition'] ) ) {
    $inlineStyles .= 'transition: all ' . $block['attrs']['tablet_transition'] . 's !important;';
}
if ( ! empty( $block['attrs']['tablet_textAlign'] ) ) {
    $inlineStyles .= 'text-align:' . $block['attrs']['tablet_textAlign'] . ';';
}
 if ( ! empty( $block['attrs']['tablet_justify'] ) ) {
    $inlineStyles .= 'justify-content:' . $block['attrs']['tablet_justify'] . ';';
}

// REMOVED TABLET DUPLICATES - These properties are already generated above with !important
// Tablet Border Properties
if ( ! empty( $block['attrs']['tablet_borderStyle'] ) ) {
    $inlineStyles .= 'border-style:' . $block['attrs']['tablet_borderStyle'] . ';';
}
if ( ! empty( $block['attrs']['tablet_borderColor'] ) ) {
    $inlineStyles .= 'border-color:' . $block['attrs']['tablet_borderColor'] . ';';
}
if ( ! empty( $block['attrs']['borderWidth_tablet'] ) ) {
    $inlineStyles .= 'border-width:' . $block['attrs']['borderWidth_tablet'] . ';';
}

// Tablet Border Radius
if ( ! empty( $block['attrs']['tablet_borderRadius']['topLeft'] ) ) {
    $inlineStyles .= 'border-top-left-radius:' . $block['attrs']['tablet_borderRadius']['topLeft'] . ';';
}
if ( ! empty( $block['attrs']['tablet_borderRadius']['topRight'] ) ) {
    $inlineStyles .= 'border-top-right-radius:' . $block['attrs']['tablet_borderRadius']['topRight'] . ';';
}
if ( ! empty( $block['attrs']['tablet_borderRadius']['bottomLeft'] ) ) {
    $inlineStyles .= 'border-bottom-left-radius:' . $block['attrs']['tablet_borderRadius']['bottomLeft'] . ';';
}
if ( ! empty( $block['attrs']['tablet_borderRadius']['bottomRight'] ) ) {
    $inlineStyles .= 'border-bottom-right-radius:' . $block['attrs']['tablet_borderRadius']['bottomRight'] . ';';
}

// New Tablet Typography Attributes
if ( ! empty( $block['attrs']['textAlign_tablet'] ) ) {
    $inlineStyles .= 'text-align:' . $block['attrs']['textAlign_tablet'] . ';';
}
if ( ! empty( $block['attrs']['font_weight_tablet'] ) ) {
    $inlineStyles .= 'font-weight:' . $block['attrs']['font_weight_tablet'] . ';';
}
if ( ! empty( $block['attrs']['font_style_tablet'] ) ) {
    $inlineStyles .= 'font-style:' . $block['attrs']['font_style_tablet'] . ';';
}
if ( ! empty( $block['attrs']['text_transform_tablet'] ) ) {
    $inlineStyles .= 'text-transform:' . $block['attrs']['text_transform_tablet'] . ';';
}
if ( ! empty( $block['attrs']['text_decoration_tablet'] ) ) {
    $inlineStyles .= 'text-decoration:' . $block['attrs']['text_decoration_tablet'] . ';';
}
if ( ! empty( $block['attrs']['word_spacing_tablet'] ) ) {
    $inlineStyles .= 'word-spacing:' . $block['attrs']['word_spacing_tablet'] . ';';
}
if ( ! empty( $block['attrs']['text_shadow_tablet'] ) ) {
    $inlineStyles .= 'text-shadow:' . $block['attrs']['text_shadow_tablet'] . ';';
}

// New Tablet Layout & Positioning Attributes
if ( ! empty( $block['attrs']['min_width_tablet'] ) ) {
    $inlineStyles .= 'min-width:' . $block['attrs']['min_width_tablet'] . ';';
}
if ( ! empty( $block['attrs']['max_width_tablet'] ) ) {
    $inlineStyles .= 'max-width:' . $block['attrs']['max_width_tablet'] . ';';
}
if ( ! empty( $block['attrs']['min_height_tablet'] ) ) {
    $inlineStyles .= 'min-height:' . $block['attrs']['min_height_tablet'] . ';';
}
if ( ! empty( $block['attrs']['max_height_tablet'] ) ) {
    $inlineStyles .= 'max-height:' . $block['attrs']['max_height_tablet'] . ';';
}
if ( ! empty( $block['attrs']['box_sizing_tablet'] ) ) {
    $inlineStyles .= 'box-sizing:' . $block['attrs']['box_sizing_tablet'] . ';';
}
if ( ! empty( $block['attrs']['visibility_tablet'] ) ) {
    $inlineStyles .= 'visibility:' . $block['attrs']['visibility_tablet'] . ';';
}
if ( ! empty( $block['attrs']['float_tablet'] ) ) {
    $inlineStyles .= 'float:' . $block['attrs']['float_tablet'] . ';';
}
if ( ! empty( $block['attrs']['clear_tablet'] ) ) {
    $inlineStyles .= 'clear:' . $block['attrs']['clear_tablet'] . ';';
}

// New Tablet Flexbox Attributes
if ( ! empty( $block['attrs']['align_items_tablet'] ) ) {
    $inlineStyles .= 'align-items:' . $block['attrs']['align_items_tablet'] . ';';
}
if ( ! empty( $block['attrs']['align_self_tablet'] ) ) {
    $inlineStyles .= 'align-self:' . $block['attrs']['align_self_tablet'] . ';';
}
if ( ! empty( $block['attrs']['align_content_tablet'] ) ) {
    $inlineStyles .= 'align-content:' . $block['attrs']['align_content_tablet'] . ';';
}
if ( ! empty( $block['attrs']['flex_basis_tablet'] ) ) {
    $inlineStyles .= 'flex-basis:' . $block['attrs']['flex_basis_tablet'] . ';';
}
if ( ! empty( $block['attrs']['flex_shrink_tablet'] ) ) {
    $inlineStyles .= 'flex-shrink:' . $block['attrs']['flex_shrink_tablet'] . ';';
}
// REMOVED: tablet_flex_grow duplicate

// New Tablet Visual Effects Attributes
if ( ! empty( $block['attrs']['opacity_tablet'] ) ) {
    $inlineStyles .= 'opacity:' . $block['attrs']['opacity_tablet'] . ';';
}
if ( ! empty( $block['attrs']['box_shadow_tablet'] ) ) {
    $inlineStyles .= 'box-shadow:' . $block['attrs']['box_shadow_tablet'] . ';';
}
if ( ! empty( $block['attrs']['filter_tablet'] ) ) {
    $inlineStyles .= 'filter:' . $block['attrs']['filter_tablet'] . ';';
}
if ( ! empty( $block['attrs']['cursor_tablet'] ) ) {
    $inlineStyles .= 'cursor:' . $block['attrs']['cursor_tablet'] . ';';
}
if ( ! empty( $block['attrs']['user_select_tablet'] ) ) {
    $inlineStyles .= 'user-select:' . $block['attrs']['user_select_tablet'] . ';';
}
if ( ! empty( $block['attrs']['pointer_events_tablet'] ) ) {
    $inlineStyles .= 'pointer-events:' . $block['attrs']['pointer_events_tablet'] . ';';
}
if ( ! empty( $block['attrs']['z_index_tablet'] ) ) {
    $inlineStyles .= 'z-index:' . $block['attrs']['z_index_tablet'] . ';';
}
if ( ! empty( $block['attrs']['transform_tablet'] ) ) {
    $inlineStyles .= 'transform:' . $block['attrs']['transform_tablet'] . ';';
}
if ( ! empty( $block['attrs']['transition_tablet'] ) ) {
    $inlineStyles .= 'transition:' . $block['attrs']['transition_tablet'] . ';';
}

// New Tablet Background Attributes
if ( ! empty( $block['attrs']['background_color_tablet'] ) ) {
    $inlineStyles .= 'background-color:' . $block['attrs']['background_color_tablet'] . ';';
}
if ( ! empty( $block['attrs']['background_image_tablet'] ) ) {
    $inlineStyles .= 'background-image:' . $block['attrs']['background_image_tablet'] . ';';
}
if ( ! empty( $block['attrs']['background_size_tablet'] ) ) {
    $inlineStyles .= 'background-size:' . $block['attrs']['background_size_tablet'] . ';';
}
if ( ! empty( $block['attrs']['background_position_tablet'] ) ) {
    $inlineStyles .= 'background-position:' . $block['attrs']['background_position_tablet'] . ';';
}
if ( ! empty( $block['attrs']['background_repeat_tablet'] ) ) {
    $inlineStyles .= 'background-repeat:' . $block['attrs']['background_repeat_tablet'] . ';';
}

        $inlineStyles .= '} }';

        // Mobile media query
        $inlineStyles .= '@media screen and (max-width: 768px){ #block_' . $block['attrs']['customId'] . '{';
        if ( ! empty( $block['attrs']['font_size_mobile'] ) ) {
            $inlineStyles .= 'font-size:' . $block['attrs']['font_size_mobile'] . ';';
        }
        if ( ! empty( $block['attrs']['line_height_mobile'] ) ) {
            $inlineStyles .= 'line-height:' . $block['attrs']['line_height_mobile'] . ';';
        }
        if ( ! empty( $block['attrs']['gap_mobile'] ) ) {
            $inlineStyles .= 'gap:' . $block['attrs']['gap_mobile'] . ';';
        }
        if ( ! empty( $block['attrs']['width_mobile'] ) ) {
            $inlineStyles .= 'width:' . $block['attrs']['width_mobile'] . ';';
        }
        if ( ! empty( $block['attrs']['width_mobile'] ) ) {
            $inlineStyles .= 'flex-basis:' . $block['attrs']['width_mobile'] . ' !important;';
        }
        if ( ! empty( $block['attrs']['order_mobile'] ) ) {
            $inlineStyles .= 'order:' . $block['attrs']['order_mobile'] . ';';
        }
        if ( ! empty( $block['attrs']['mobile_padding']['top'] ) ) {
            $inlineStyles .= 'padding-top:' . $block['attrs']['mobile_padding']['top'] . ';';
        }
        if ( ! empty( $block['attrs']['mobile_padding']['right'] ) ) {
            $inlineStyles .= 'padding-right:' . $block['attrs']['mobile_padding']['right'] . ';';
        }
        if ( ! empty( $block['attrs']['mobile_padding']['bottom'] ) ) {
            $inlineStyles .= 'padding-bottom:' . $block['attrs']['mobile_padding']['bottom'] . ';';
        }
        if ( ! empty( $block['attrs']['mobile_padding']['left'] ) ) {
            $inlineStyles .= 'padding-left:' . $block['attrs']['mobile_padding']['left'] . ';';
        }
        if ( ! empty( $block['attrs']['mobile_border']['top'] ) ) {
            $inlineStyles .= 'border-top-width:' . $block['attrs']['mobile_border']['top'] . ';';
        }
        if ( ! empty( $block['attrs']['mobile_border']['bottom'] ) ) {
            $inlineStyles .= 'border-bottom-width:' . $block['attrs']['mobile_border']['bottom'] . ';';
        }
        if ( ! empty( $block['attrs']['mobile_border']['left'] ) ) {
            $inlineStyles .= 'border-left-width:' . $block['attrs']['mobile_border']['left'] . ';';
        }
        if ( ! empty( $block['attrs']['mobile_border']['right'] ) ) {
            $inlineStyles .= 'border-right-width:' . $block['attrs']['mobile_border']['right'] . ';';
        }
        if ( ! empty( $block['attrs']['mobile_margin']['top'] ) ) {
            $inlineStyles .= 'margin-top:' . $block['attrs']['mobile_margin']['top'] . ';';
        }
        if ( ! empty( $block['attrs']['mobile_margin']['right'] ) ) {
            $inlineStyles .= 'margin-right:' . $block['attrs']['mobile_margin']['right'] . ';';
        }
        if ( ! empty( $block['attrs']['mobile_margin']['bottom'] ) ) {
            $inlineStyles .= 'margin-bottom:' . $block['attrs']['mobile_margin']['bottom'] . ';';
        }
        if ( ! empty( $block['attrs']['mobile_margin']['left'] ) ) {
            $inlineStyles .= 'margin-left:' . $block['attrs']['mobile_margin']['left'] . ';';
        }
        //new
        if ( ! empty( $block['attrs']['mobile_position'] ) ) {
            $inlineStyles .= 'position:' . $block['attrs']['mobile_position'] . ';';
        }
        if ( ! empty( $block['attrs']['mobile_display'] ) ) {
            $inlineStyles .= 'display:' . $block['attrs']['mobile_display'] . ';';
        }
        if ( ! empty( $block['attrs']['mobile_textShadow'] ) ) {
            $inlineStyles .= 'text-shadow:' . $block['attrs']['mobile_textShadow'] . ';';
        }
        if ( ! empty( $block['attrs']['mobile_flexWrap'] ) ) {
            $inlineStyles .= 'flex-wrap:' . $block['attrs']['mobile_flexWrap'] . ' !important;';
        }
        if ( ! empty( $block['attrs']['mobile_pos']['top'] ) ) {
            $inlineStyles .= 'top:' . $block['attrs']['mobile_pos']['top'] . ';';
        }
        if ( ! empty( $block['attrs']['mobile_pos']['right'] ) ) {
            $inlineStyles .= 'right:' . $block['attrs']['mobile_pos']['right'] . ';';
        }
        if ( ! empty( $block['attrs']['mobile_pos']['bottom'] ) ) {
            $inlineStyles .= 'bottom:' . $block['attrs']['mobile_pos']['bottom'] . ';';
        }
        if ( ! empty( $block['attrs']['mobile_pos']['left'] ) ) {
            $inlineStyles .= 'left:' . $block['attrs']['mobile_pos']['left'] . ';';
        }
        if ( ! empty( $block['attrs']['mobile_columns'] ) ) {
            $inlineStyles .= 'grid-template-columns:repeat(' . $block['attrs']['mobile_columns'] . ', minmax(0, 1fr)) !important;';
        }

        
if ( ! empty( $block['attrs']['mobile_z_index'] ) ) {
    $inlineStyles .= 'z-index:' . $block['attrs']['mobile_z_index'] . ' !important;';
}
if ( ! empty( $block['attrs']['mobile_overflow'] ) ) {
    $inlineStyles .= 'overflow:' . $block['attrs']['mobile_overflow'] . ' !important;';
}
if ( ! empty( $block['attrs']['mobile_zoom'] ) ) {
    $inlineStyles .= 'zoom:' . $block['attrs']['mobile_zoom'] . ' !important;';
}
if ( ! empty( $block['attrs']['mobile_height'] ) ) {
    $inlineStyles .= 'height:' . $block['attrs']['mobile_height'] . ' !important;';
    $inlineStyles .= 'min-height:' . $block['attrs']['mobile_height'] . ';';
}
if ( ! empty( $block['attrs']['mobile_flex_direction'] ) ) {
    $inlineStyles .= 'flex-direction:' . $block['attrs']['mobile_flex_direction'] . ' !important;';
}
if ( ! empty( $block['attrs']['mobile_opacity'] ) ) {
    $inlineStyles .= 'opacity:' . $block['attrs']['mobile_opacity'] . ' !important;';
}
if ( ! empty( $block['attrs']['mobile_white_space'] ) ) {
    $inlineStyles .= 'white-space:' . $block['attrs']['mobile_white_space'] . ' !important;';
}
if ( ! empty( $block['attrs']['mobile_flex_grow'] ) ) {
    $inlineStyles .= 'flex-grow:' . $block['attrs']['mobile_flex_grow'] . ' !important;';
}
if ( ! empty( $block['attrs']['mobile_transition'] ) ) {
    $inlineStyles .= 'transition: all ' . $block['attrs']['mobile_transition'] . 's !important;';
}
if ( ! empty( $block['attrs']['mobile_textAlign'] ) ) {
    $inlineStyles .= 'text-align:' . $block['attrs']['mobile_textAlign'] . ';';
}
 if ( ! empty( $block['attrs']['mobile_justify'] ) ) {
    $inlineStyles .= 'justify-content:' . $block['attrs']['mobile_justify'] . ';';
}        

// Modern Responsive Mobile Attributes
if ( ! empty( $block['attrs']['letter_spacing_mobile'] ) ) {
    $inlineStyles .= 'letter-spacing:' . $block['attrs']['letter_spacing_mobile'] . ';';
}
if ( ! empty( $block['attrs']['mobile_borderStyle'] ) ) {
    $inlineStyles .= 'border-style:' . $block['attrs']['mobile_borderStyle'] . ';';
}
if ( ! empty( $block['attrs']['mobile_borderColor'] ) ) {
    $inlineStyles .= 'border-color:' . $block['attrs']['mobile_borderColor'] . ';';
}
if ( ! empty( $block['attrs']['borderWidth_mobile'] ) ) {
    $inlineStyles .= 'border-width:' . $block['attrs']['borderWidth_mobile'] . ';';
}
if ( ! empty( $block['attrs']['z_index_mobile'] ) ) {
    $inlineStyles .= 'z-index:' . $block['attrs']['z_index_mobile'] . ';';
}
// REMOVED MORE MOBILE DUPLICATES - These properties are already generated above with !important
// Mobile Border Radius
if ( ! empty( $block['attrs']['mobile_borderRadius']['topLeft'] ) ) {
    $inlineStyles .= 'border-top-left-radius:' . $block['attrs']['mobile_borderRadius']['topLeft'] . ';';
}
if ( ! empty( $block['attrs']['mobile_borderRadius']['topRight'] ) ) {
    $inlineStyles .= 'border-top-right-radius:' . $block['attrs']['mobile_borderRadius']['topRight'] . ';';
}
if ( ! empty( $block['attrs']['mobile_borderRadius']['bottomLeft'] ) ) {
    $inlineStyles .= 'border-bottom-left-radius:' . $block['attrs']['mobile_borderRadius']['bottomLeft'] . ';';
}
if ( ! empty( $block['attrs']['mobile_borderRadius']['bottomRight'] ) ) {
    $inlineStyles .= 'border-bottom-right-radius:' . $block['attrs']['mobile_borderRadius']['bottomRight'] . ';';
}

// REMOVED MOBILE DUPLICATES - These properties are already generated above with !important

// New Mobile Typography Attributes
if ( ! empty( $block['attrs']['textAlign_mobile'] ) ) {
    $inlineStyles .= 'text-align:' . $block['attrs']['textAlign_mobile'] . ';';
}
if ( ! empty( $block['attrs']['font_weight_mobile'] ) ) {
    $inlineStyles .= 'font-weight:' . $block['attrs']['font_weight_mobile'] . ';';
}
if ( ! empty( $block['attrs']['font_style_mobile'] ) ) {
    $inlineStyles .= 'font-style:' . $block['attrs']['font_style_mobile'] . ';';
}
if ( ! empty( $block['attrs']['text_transform_mobile'] ) ) {
    $inlineStyles .= 'text-transform:' . $block['attrs']['text_transform_mobile'] . ';';
}
if ( ! empty( $block['attrs']['text_decoration_mobile'] ) ) {
    $inlineStyles .= 'text-decoration:' . $block['attrs']['text_decoration_mobile'] . ';';
}
if ( ! empty( $block['attrs']['word_spacing_mobile'] ) ) {
    $inlineStyles .= 'word-spacing:' . $block['attrs']['word_spacing_mobile'] . ';';
}
if ( ! empty( $block['attrs']['text_shadow_mobile'] ) ) {
    $inlineStyles .= 'text-shadow:' . $block['attrs']['text_shadow_mobile'] . ';';
}

// New Mobile Layout & Positioning Attributes
if ( ! empty( $block['attrs']['min_width_mobile'] ) ) {
    $inlineStyles .= 'min-width:' . $block['attrs']['min_width_mobile'] . ';';
}
if ( ! empty( $block['attrs']['max_width_mobile'] ) ) {
    $inlineStyles .= 'max-width:' . $block['attrs']['max_width_mobile'] . ';';
}
if ( ! empty( $block['attrs']['min_height_mobile'] ) ) {
    $inlineStyles .= 'min-height:' . $block['attrs']['min_height_mobile'] . ';';
}
if ( ! empty( $block['attrs']['max_height_mobile'] ) ) {
    $inlineStyles .= 'max-height:' . $block['attrs']['max_height_mobile'] . ';';
}
if ( ! empty( $block['attrs']['box_sizing_mobile'] ) ) {
    $inlineStyles .= 'box-sizing:' . $block['attrs']['box_sizing_mobile'] . ';';
}
if ( ! empty( $block['attrs']['visibility_mobile'] ) ) {
    $inlineStyles .= 'visibility:' . $block['attrs']['visibility_mobile'] . ';';
}
if ( ! empty( $block['attrs']['float_mobile'] ) ) {
    $inlineStyles .= 'float:' . $block['attrs']['float_mobile'] . ';';
}
if ( ! empty( $block['attrs']['clear_mobile'] ) ) {
    $inlineStyles .= 'clear:' . $block['attrs']['clear_mobile'] . ';';
}

// New Mobile Flexbox Attributes
if ( ! empty( $block['attrs']['align_items_mobile'] ) ) {
    $inlineStyles .= 'align-items:' . $block['attrs']['align_items_mobile'] . ';';
}
if ( ! empty( $block['attrs']['align_self_mobile'] ) ) {
    $inlineStyles .= 'align-self:' . $block['attrs']['align_self_mobile'] . ';';
}
if ( ! empty( $block['attrs']['align_content_mobile'] ) ) {
    $inlineStyles .= 'align-content:' . $block['attrs']['align_content_mobile'] . ';';
}
if ( ! empty( $block['attrs']['flex_basis_mobile'] ) ) {
    $inlineStyles .= 'flex-basis:' . $block['attrs']['flex_basis_mobile'] . ';';
}
if ( ! empty( $block['attrs']['flex_shrink_mobile'] ) ) {
    $inlineStyles .= 'flex-shrink:' . $block['attrs']['flex_shrink_mobile'] . ';';
}
// REMOVED: flex_grow_mobile duplicate

// New Mobile Visual Effects Attributes
if ( ! empty( $block['attrs']['opacity_mobile'] ) ) {
    $inlineStyles .= 'opacity:' . $block['attrs']['opacity_mobile'] . ';';
}
if ( ! empty( $block['attrs']['box_shadow_mobile'] ) ) {
    $inlineStyles .= 'box-shadow:' . $block['attrs']['box_shadow_mobile'] . ';';
}
if ( ! empty( $block['attrs']['filter_mobile'] ) ) {
    $inlineStyles .= 'filter:' . $block['attrs']['filter_mobile'] . ';';
}
if ( ! empty( $block['attrs']['cursor_mobile'] ) ) {
    $inlineStyles .= 'cursor:' . $block['attrs']['cursor_mobile'] . ';';
}
if ( ! empty( $block['attrs']['user_select_mobile'] ) ) {
    $inlineStyles .= 'user-select:' . $block['attrs']['user_select_mobile'] . ';';
}
if ( ! empty( $block['attrs']['pointer_events_mobile'] ) ) {
    $inlineStyles .= 'pointer-events:' . $block['attrs']['pointer_events_mobile'] . ';';
}
if ( ! empty( $block['attrs']['z_index_mobile'] ) ) {
    $inlineStyles .= 'z-index:' . $block['attrs']['z_index_mobile'] . ';';
}
if ( ! empty( $block['attrs']['transform_mobile'] ) ) {
    $inlineStyles .= 'transform:' . $block['attrs']['transform_mobile'] . ';';
}
if ( ! empty( $block['attrs']['transition_mobile'] ) ) {
    $inlineStyles .= 'transition:' . $block['attrs']['transition_mobile'] . ';';
}

// New Mobile Background Attributes
if ( ! empty( $block['attrs']['background_color_mobile'] ) ) {
    $inlineStyles .= 'background-color:' . $block['attrs']['background_color_mobile'] . ';';
}
if ( ! empty( $block['attrs']['background_image_mobile'] ) ) {
    $inlineStyles .= 'background-image:' . $block['attrs']['background_image_mobile'] . ';';
}
if ( ! empty( $block['attrs']['background_size_mobile'] ) ) {
    $inlineStyles .= 'background-size:' . $block['attrs']['background_size_mobile'] . ';';
}
if ( ! empty( $block['attrs']['background_position_mobile'] ) ) {
    $inlineStyles .= 'background-position:' . $block['attrs']['background_position_mobile'] . ';';
}
if ( ! empty( $block['attrs']['background_repeat_mobile'] ) ) {
    $inlineStyles .= 'background-repeat:' . $block['attrs']['background_repeat_mobile'] . ';';
}

        $inlineStyles .= '} }';

        // Hover CSS
        $inlineStyles .= '#block_' . $block['attrs']['customId'] . ':hover{';
        
        // Modern Responsive Hover Attributes
        if ( ! empty( $block['attrs']['font_size_hover'] ) ) {
            $inlineStyles .= 'font-size:' . $block['attrs']['font_size_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['line_height_hover'] ) ) {
            $inlineStyles .= 'line-height:' . $block['attrs']['line_height_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['letter_spacing_hover'] ) ) {
            $inlineStyles .= 'letter-spacing:' . $block['attrs']['letter_spacing_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['width_hover'] ) ) {
            $inlineStyles .= 'width:' . $block['attrs']['width_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['height_hover'] ) ) {
            $inlineStyles .= 'height:' . $block['attrs']['height_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['order_hover'] ) ) {
            $inlineStyles .= 'order:' . $block['attrs']['order_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['z_index_hover'] ) ) {
            $inlineStyles .= 'z-index:' . $block['attrs']['z_index_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['hover_position'] ) ) {
            $inlineStyles .= 'position:' . $block['attrs']['hover_position'] . ';';
        }
        if ( ! empty( $block['attrs']['top_hover'] ) ) {
            $inlineStyles .= 'top:' . $block['attrs']['top_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['right_hover'] ) ) {
            $inlineStyles .= 'right:' . $block['attrs']['right_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['bottom_hover'] ) ) {
            $inlineStyles .= 'bottom:' . $block['attrs']['bottom_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['left_hover'] ) ) {
            $inlineStyles .= 'left:' . $block['attrs']['left_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['hover_display'] ) ) {
            $inlineStyles .= 'display:' . $block['attrs']['hover_display'] . ';';
        }
        if ( ! empty( $block['attrs']['opacity_hover'] ) ) {
            $inlineStyles .= 'opacity:' . $block['attrs']['opacity_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['overflow_hover'] ) ) {
            $inlineStyles .= 'overflow:' . $block['attrs']['overflow_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['hover_flex_direction'] ) ) {
            $inlineStyles .= 'flex-direction:' . $block['attrs']['hover_flex_direction'] . ';';
        }
        if ( ! empty( $block['attrs']['hover_justify'] ) ) {
            $inlineStyles .= 'justify-content:' . $block['attrs']['hover_justify'] . ';';
        }
        if ( ! empty( $block['attrs']['hover_flexWrap'] ) ) {
            $inlineStyles .= 'flex-wrap:' . $block['attrs']['hover_flexWrap'] . ';';
        }
        if ( ! empty( $block['attrs']['hover_flex_grow'] ) ) {
            $inlineStyles .= 'flex-grow:' . $block['attrs']['hover_flex_grow'] . ';';
        }
        if ( ! empty( $block['attrs']['textAlign_hover'] ) ) {
            $inlineStyles .= 'text-align:' . $block['attrs']['textAlign_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['transform_hover'] ) ) {
            $inlineStyles .= 'transform:' . $block['attrs']['transform_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['transition_hover'] ) ) {
            $inlineStyles .= 'transition:' . $block['attrs']['transition_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['hover_borderStyle'] ) ) {
            $inlineStyles .= 'border-style:' . $block['attrs']['hover_borderStyle'] . ';';
        }
        if ( ! empty( $block['attrs']['hover_borderColor'] ) ) {
            $inlineStyles .= 'border-color:' . $block['attrs']['hover_borderColor'] . ';';
        }
        if ( ! empty( $block['attrs']['borderWidth_hover'] ) ) {
            $inlineStyles .= 'border-width:' . $block['attrs']['borderWidth_hover'] . ';';
        }
        // Hover padding
        if ( ! empty( $block['attrs']['hover_padding']['top'] ) ) {
            $inlineStyles .= 'padding-top:' . $block['attrs']['hover_padding']['top'] . ';';
        }
        if ( ! empty( $block['attrs']['hover_padding']['right'] ) ) {
            $inlineStyles .= 'padding-right:' . $block['attrs']['hover_padding']['right'] . ';';
        }
        if ( ! empty( $block['attrs']['hover_padding']['bottom'] ) ) {
            $inlineStyles .= 'padding-bottom:' . $block['attrs']['hover_padding']['bottom'] . ';';
        }
        if ( ! empty( $block['attrs']['hover_padding']['left'] ) ) {
            $inlineStyles .= 'padding-left:' . $block['attrs']['hover_padding']['left'] . ';';
        }
        // Hover margin
        if ( ! empty( $block['attrs']['hover_margin']['top'] ) ) {
            $inlineStyles .= 'margin-top:' . $block['attrs']['hover_margin']['top'] . ';';
        }
        if ( ! empty( $block['attrs']['hover_margin']['right'] ) ) {
            $inlineStyles .= 'margin-right:' . $block['attrs']['hover_margin']['right'] . ';';
        }
        if ( ! empty( $block['attrs']['hover_margin']['bottom'] ) ) {
            $inlineStyles .= 'margin-bottom:' . $block['attrs']['hover_margin']['bottom'] . ';';
        }
        if ( ! empty( $block['attrs']['hover_margin']['left'] ) ) {
            $inlineStyles .= 'margin-left:' . $block['attrs']['hover_margin']['left'] . ';';
        }
        // Hover Border Radius
        if ( ! empty( $block['attrs']['hover_borderRadius']['topLeft'] ) ) {
            $inlineStyles .= 'border-top-left-radius:' . $block['attrs']['hover_borderRadius']['topLeft'] . ';';
        }
        if ( ! empty( $block['attrs']['hover_borderRadius']['topRight'] ) ) {
            $inlineStyles .= 'border-top-right-radius:' . $block['attrs']['hover_borderRadius']['topRight'] . ';';
        }
        if ( ! empty( $block['attrs']['hover_borderRadius']['bottomLeft'] ) ) {
            $inlineStyles .= 'border-bottom-left-radius:' . $block['attrs']['hover_borderRadius']['bottomLeft'] . ';';
        }
        if ( ! empty( $block['attrs']['hover_borderRadius']['bottomRight'] ) ) {
            $inlineStyles .= 'border-bottom-right-radius:' . $block['attrs']['hover_borderRadius']['bottomRight'] . ';';
        }
        
        // New Hover Typography Attributes
        if ( ! empty( $block['attrs']['textAlign_hover'] ) ) {
            $inlineStyles .= 'text-align:' . $block['attrs']['textAlign_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['font_weight_hover'] ) ) {
            $inlineStyles .= 'font-weight:' . $block['attrs']['font_weight_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['font_style_hover'] ) ) {
            $inlineStyles .= 'font-style:' . $block['attrs']['font_style_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['text_transform_hover'] ) ) {
            $inlineStyles .= 'text-transform:' . $block['attrs']['text_transform_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['text_decoration_hover'] ) ) {
            $inlineStyles .= 'text-decoration:' . $block['attrs']['text_decoration_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['word_spacing_hover'] ) ) {
            $inlineStyles .= 'word-spacing:' . $block['attrs']['word_spacing_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['text_shadow_hover'] ) ) {
            $inlineStyles .= 'text-shadow:' . $block['attrs']['text_shadow_hover'] . ';';
        }
        
        // New Hover Layout & Positioning Attributes
        if ( ! empty( $block['attrs']['min_width_hover'] ) ) {
            $inlineStyles .= 'min-width:' . $block['attrs']['min_width_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['max_width_hover'] ) ) {
            $inlineStyles .= 'max-width:' . $block['attrs']['max_width_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['min_height_hover'] ) ) {
            $inlineStyles .= 'min-height:' . $block['attrs']['min_height_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['max_height_hover'] ) ) {
            $inlineStyles .= 'max-height:' . $block['attrs']['max_height_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['box_sizing_hover'] ) ) {
            $inlineStyles .= 'box-sizing:' . $block['attrs']['box_sizing_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['visibility_hover'] ) ) {
            $inlineStyles .= 'visibility:' . $block['attrs']['visibility_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['float_hover'] ) ) {
            $inlineStyles .= 'float:' . $block['attrs']['float_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['clear_hover'] ) ) {
            $inlineStyles .= 'clear:' . $block['attrs']['clear_hover'] . ';';
        }
        
        // New Hover Flexbox Attributes
        if ( ! empty( $block['attrs']['align_items_hover'] ) ) {
            $inlineStyles .= 'align-items:' . $block['attrs']['align_items_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['align_self_hover'] ) ) {
            $inlineStyles .= 'align-self:' . $block['attrs']['align_self_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['align_content_hover'] ) ) {
            $inlineStyles .= 'align-content:' . $block['attrs']['align_content_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['flex_basis_hover'] ) ) {
            $inlineStyles .= 'flex-basis:' . $block['attrs']['flex_basis_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['flex_shrink_hover'] ) ) {
    $inlineStyles .= 'flex-shrink:' . $block['attrs']['flex_shrink_hover'] . ';';
}
if ( ! empty( $block['attrs']['flex_grow_hover'] ) ) {
    $inlineStyles .= 'flex-grow:' . $block['attrs']['flex_grow_hover'] . ';';
}
        
        // New Hover Visual Effects Attributes
        if ( ! empty( $block['attrs']['box_shadow_hover'] ) ) {
            $inlineStyles .= 'box-shadow:' . $block['attrs']['box_shadow_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['filter_hover'] ) ) {
            $inlineStyles .= 'filter:' . $block['attrs']['filter_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['cursor_hover'] ) ) {
            $inlineStyles .= 'cursor:' . $block['attrs']['cursor_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['user_select_hover'] ) ) {
            $inlineStyles .= 'user-select:' . $block['attrs']['user_select_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['pointer_events_hover'] ) ) {
            $inlineStyles .= 'pointer-events:' . $block['attrs']['pointer_events_hover'] . ';';
        }
        
        // New Hover Background Attributes
        if ( ! empty( $block['attrs']['background_color_hover'] ) ) {
            $inlineStyles .= 'background-color:' . $block['attrs']['background_color_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['background_image_hover'] ) ) {
            $inlineStyles .= 'background-image:' . $block['attrs']['background_image_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['background_size_hover'] ) ) {
            $inlineStyles .= 'background-size:' . $block['attrs']['background_size_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['background_position_hover'] ) ) {
            $inlineStyles .= 'background-position:' . $block['attrs']['background_position_hover'] . ';';
        }
        if ( ! empty( $block['attrs']['background_repeat_hover'] ) ) {
            $inlineStyles .= 'background-repeat:' . $block['attrs']['background_repeat_hover'] . ';';
        }
        
        $inlineStyles .= '}';

        if ( ! empty( $block['attrs']['custom_css'] ) ) {
            $good_id = str_replace( 'this_block', '#block_' . $block['attrs']['customId'], $block['attrs']['custom_css'] );
            $good_id = str_replace( 'block_anchor_', '', $good_id );
            $inlineStyles .= $good_id;
        }

        return $inlineStyles;
    }
}

function stepfox_block_scripts() {
    wp_reset_postdata();
    global $_wp_current_template_content;
    $page_content = get_the_content();
    $full_content = $_wp_current_template_content . $page_content;

    if ( has_blocks( $full_content ) ) {
        $blocks = parse_blocks( $full_content );
        $all_blocks = search( $blocks, 'blockName' );
        // Get template parts content.
        foreach ( $all_blocks as $block ) {
            $full_content .= get_template_parts_as_content( $block );
        }
        $blocks = parse_blocks( $full_content );
        $all_blocks = search( $blocks, 'blockName' );
        $inline_style = '';
        wp_register_style( 'intellibridge-custom-style', false );
        wp_enqueue_style( 'intellibridge-custom-style' );

        foreach ( $all_blocks as $block ) {
            if ( ( $block['blockName'] === 'core/block' && ! empty( $block['attrs']['ref'] ) ) ||
                ( $block['blockName'] === 'core/navigation' && ! empty( $block['attrs']['ref'] ) ) ) {
                $content = get_post_field( 'post_content', $block['attrs']['ref'] );
                $reusable_blocks = parse_blocks( $content );
                $all_reusable_blocks = search( $reusable_blocks, 'blockName' );
                foreach ( $all_reusable_blocks as $reusable_block ) {
                    $inline_style .= inline_scripts_for_blocks( $reusable_block );
                }
            }

            if ( $block['blockName'] == 'stepfox/intellibridge-query-block' && $block['attrs']['className'] == 'is-style-custom-template-part' ) {
                if ( is_numeric( $block['attrs']['template_part'] ) ) {
                    $template_part = get_block_template( 'intellibridge//' . basename( get_permalink( $block['attrs']['template_part'] ) ), 'wp_template_part' );
                } else {
                    $template_part = get_block_template( 'intellibridge//' . $block['attrs']['template_part'], 'wp_template_part' );
                }
                $inline_style .= inline_scripts_for_blocks( $block );
                $template_part_content = $template_part->content;
                if ( $block['attrs']["post_type"] == 'wp_template_part' && $block['attrs']['source'] == 'manual_selection' ) {
                    $manual_selection = $block['attrs']['manual_selection'];
                    foreach ( $manual_selection as $item ) {
                        if ( is_numeric( $item['toplistitem'] ) ) {
                            $template_part_inner = get_block_template( 'intellibridge//' . basename( get_permalink( $item['toplistitem'] ) ), 'wp_template_part' );
                        } else {
                            $template_part_inner = get_block_template( 'intellibridge//' . $item['toplistitem'], 'wp_template_part' );
                        }
                        $template_part_content .= $template_part_inner->content;
                    }
                }
                $template_blocks = parse_blocks( $template_part_content );
                $all_template_blocks = search( $template_blocks, 'blockName' );
                foreach ( $all_template_blocks as $template_block ) {
                    $inline_style .= inline_scripts_for_blocks( $template_block );
                }
            } elseif ( $block['blockName'] == 'stepfox/intellibridge-query-block' && $block['attrs']['className'] != 'is-style-custom-template-part' ) {
                $inline_style .= inline_scripts_for_blocks( $block );
            } elseif ( $block['blockName'] == 'stepfox/casino-query-block' && $block['attrs']['className'] != 'is-style-custom-template-part' ) {
                $card = str_replace( 'is-style-', '', $block['attrs']['className'] );
                wp_enqueue_style( 'casino-query-block-' . $card, get_template_directory_uri() . '/blocks/casino_query_block/cards/css/card-' . $card . '.css' );
                $inline_style .= inline_scripts_for_blocks( $block );
            } else {
                $inline_style .= inline_scripts_for_blocks( $block );
            }
        }

        wp_register_script( 'myprefix-dummy-js-header', '',);
        wp_enqueue_script( 'myprefix-dummy-js-header' );
        wp_add_inline_script( 'myprefix-dummy-js-header', $inline_style);
    }
}

add_action( 'wp_head', 'stepfox_block_scripts' );

function inline_scripts_for_blocks($block) {
    if(!empty($block['attrs']['custom_js'])) {
        return str_replace('this_block', '#block_' . $block['attrs']['customId'], $block['attrs']['custom_js']);
    }
}