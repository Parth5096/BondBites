<?php
function nasa_elm_t_shirt() {
    $imgs_1 = elessi_import_upload('/wp-content/uploads/2020/08/Banner_01.jpg', '3318', array(
        'post_title' => 'Banner_01',
        'post_name' => 'banner_01',
    ));
    
    $imgs_2 = elessi_import_upload('/wp-content/uploads/2020/08/Banner_02.jpg', '3318', array(
        'post_title' => 'Banner_02',
        'post_name' => 'banner_02',
    ));
    
    $imgs_3 = elessi_import_upload('/wp-content/uploads/2020/08/Banner_03.jpg', '3318', array(
        'post_title' => 'Banner_03',
        'post_name' => 'banner_03',
    ));
    
    $imgs_4 = elessi_import_upload('/wp-content/uploads/2020/08/Banner_04.jpg', '3319', array(
        'post_title' => 'Banner_04',
        'post_name' => 'banner_04',
    ));
    
    $result = array(
        'post' => array(
            'post_title' => 'ELM T-Shirt',
            'post_name' => 'elm-t-shirt'
        ),
        
        'post_meta' => array(
            '_elementor_data' => '[{"id":"74fdda43","elType":"section","settings":{"layout":"full_width","gap":"no"},"elements":[{"id":"563b277b","elType":"column","settings":{"_column_size":100,"_inline_size":null,"css_classes":"nasa-crazy-box"},"elements":[{"id":"1ad8235","elType":"widget","settings":{"revslidertitle":"Slider T-shirt","shortcode":"[rev_slider alias=\"slider-t-shirt\" slidertitle=\"Slider T-shirt\"][\/rev_slider]"},"elements":[],"widgetType":"slider_revolution"}],"isInner":false}],"isInner":false},{"id":"32a59144","elType":"section","settings":{"background_background":"gradient","background_color":"#FFFFFF","background_color_b":"#FFFFFF","css_classes":"padding-top-50 padding-bottom-40 margin-top-20 mobile-margin-top-10"},"elements":[{"id":"4c5219f5","elType":"column","settings":{"_column_size":100,"_inline_size":null},"elements":[{"id":"70489821","elType":"widget","settings":{"title":"Feature Categories","size":"large","header_size":"h3","align":"center","title_color":"#333333","typography_typography":"custom","typography_font_family":"Jost","typography_font_weight":"800","_css_classes":"margin-bottom-20"},"elements":[],"widgetType":"heading"},{"id":"7e4f550b","elType":"widget","settings":{"wp":{"title":"","list_cats":"haircare-woman, makeup-woman, nails-woman, bracelets-woman, earrings-woman, necklaces-woman","number":"0","disp_type":"Horizontal4","parent":"false","root_cat":"","hide_empty":"1","columns_number":"6","columns_number_small":"2","columns_number_tablet":"3","number_vertical":"4","auto_slide":"false","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_product_categories_sc"}],"isInner":false}],"isInner":false},{"id":"557ea1d","elType":"section","settings":{"css_classes":"desktop-margin-top-10 mobile-margin-top-10"},"elements":[{"id":"6bc56a85","elType":"column","settings":{"_column_size":100,"_inline_size":null},"elements":[{"id":"28a66da0","elType":"widget","settings":{"title":"Recommend For You","size":"large","header_size":"h3","align":"center","title_color":"#333333","typography_typography":"custom","typography_font_family":"Jost","typography_font_weight":"800","_css_classes":"margin-bottom-10"},"elements":[],"widgetType":"heading"},{"id":"16f9cbf","elType":"widget","settings":{"wp":{"title":"","desc":"","alignment":"center","style":"2d-radius-dashed","tabs":{"1603386304507":{"tab_title":"BEST SELLER","type":"recent_product","style":"infinite","style_viewmore":"3","style_row":"2","pos_nav":"top","title_align":"left","shop_url":"1","arrows":"1","dots":"false","auto_slide":"false","number":"8","auto_delay_time":"6","columns_number":"4","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"3","cat":"","not_in":"","el_class":""},"1603386427250":{"tab_title":"WOMEN","type":"recent_product","style":"infinite","style_viewmore":"3","style_row":"2","pos_nav":"top","title_align":"left","shop_url":"0","arrows":"0","dots":"false","auto_slide":"false","number":"8","auto_delay_time":"6","columns_number":"4","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"3","cat":"","not_in":"","el_class":""},"1603386467942":{"tab_title":"MAN","type":"recent_product","style":"infinite","style_viewmore":"3","style_row":"2","pos_nav":"top","title_align":"left","shop_url":"1","arrows":"0","dots":"false","auto_slide":"false","number":"8","auto_delay_time":"6","columns_number":"4","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"3","cat":"","not_in":"","el_class":""},"1603386510457":{"tab_title":"ON SALE","type":"recent_product","style":"infinite","style_viewmore":"3","style_row":"2","pos_nav":"top","title_align":"left","shop_url":"1","arrows":"0","dots":"false","auto_slide":"false","number":"8","auto_delay_time":"6","columns_number":"4","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"3","cat":"","not_in":"","el_class":""},"1603386554180":{"tab_title":"NEW","type":"recent_product","style":"infinite","style_viewmore":"3","style_row":"2","pos_nav":"top","title_align":"left","shop_url":"0","arrows":"0","dots":"false","auto_slide":"false","number":"8","auto_delay_time":"6","columns_number":"4","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"3","cat":"","not_in":"","el_class":""}},"el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_products_tabs_sc"}],"isInner":false}],"isInner":false},{"id":"79d8b2ac","elType":"section","settings":{"structure":"30","css_classes":"desktop-margin-top-60"},"elements":[{"id":"10fdbffb","elType":"column","settings":{"_column_size":33,"_inline_size":null,"padding_mobile":{"unit":"px","top":"0","right":"10","bottom":"10","left":"10","isLinked":false}},"elements":[{"id":"721ae463","elType":"widget","settings":{"wp":{"img_src":"' . $imgs_1 . '","height":"","width":"","link":"","content-width":"","align":"left","move_x":"","valign":"top","text-align":"text-left","banner_responsive":"yes","content":"<h3 style=\"font-size: 160%;line-height: 1.2;font-weight: 800\">Bag with\r\nrose pattern<\/h3>\r\n<h5 class=\"nasa-bold-700\" style=\"font-size: 115%\">Sale off 25%<\/h5>\r\n<h5 style=\"line-height: 3;text-decoration: underline\"><a style=\"font-size: 65%;font-weight: 500\" title=\"Shop Now\" href=\"#\">Shop now<\/a><\/h5>","effect_text":"fadeInLeft","data_delay":"","hover":"zoom","border_inner":"no","border_outner":"no","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_banner_sc"}],"isInner":false},{"id":"6198cb5","elType":"column","settings":{"_column_size":33,"_inline_size":null,"padding_mobile":{"unit":"px","top":"0","right":"10","bottom":"10","left":"10","isLinked":false}},"elements":[{"id":"5638a3de","elType":"widget","settings":{"wp":{"img_src":"' . $imgs_2 . '","height":"","width":"","link":"","content-width":"","align":"left","move_x":"","valign":"top","text-align":"text-left","banner_responsive":"yes","content":"<h3 style=\"font-size: 180%;line-height: 1.2;color: #000000;font-weight: bold\">Hello\r\nSummer<\/h3>\r\n<h5 style=\"text-decoration: underline\"><a style=\"font-size: 70%;font-weight: 500;color: #000000\" title=\"Shop now\" href=\"#\">Shop now<\/a><\/h5>","effect_text":"flipInX","data_delay":"600ms","hover":"zoom","border_inner":"no","border_outner":"no","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_banner_sc"}],"isInner":false},{"id":"66a17d1b","elType":"column","settings":{"_column_size":33,"_inline_size":null,"padding_mobile":{"unit":"px","top":"0","right":"10","bottom":"10","left":"10","isLinked":false}},"elements":[{"id":"eb10fff","elType":"widget","settings":{"wp":{"img_src":"' . $imgs_3 . '","height":"","width":"","link":"","content-width":"","align":"left","move_x":"","valign":"middle","text-align":"text-left","banner_responsive":"yes","content":"<h3 style=\"font-size: 180%;line-height: 1.2;color: #000000;font-weight: bold\">Let Party\r\nHard Pillow<\/h3>\r\n<a class=\"button\" style=\"margin-top: 10px;font-size: 12px;padding: 12px 20px;border-radius: 40px\" title=\"Shop now\" href=\"#\">Shop Now<\/a>","effect_text":"fadeInUp","data_delay":"600ms","hover":"zoom","border_inner":"no","border_outner":"no","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_banner_sc"}],"isInner":false}],"isInner":false},{"id":"cd745f8","elType":"section","settings":{"css_classes":"margin-top-50 margin-bottom-50"},"elements":[{"id":"170f1bd7","elType":"column","settings":{"_column_size":100,"_inline_size":null},"elements":[{"id":"185f5ad6","elType":"widget","settings":{"title":"Featured Items","header_size":"h3","align":"center","title_color":"#333333","typography_typography":"custom","typography_font_family":"Jost","typography_font_weight":"800","size":"large","_css_classes":"margin-bottom-20"},"elements":[],"widgetType":"heading"},{"id":"3b3e0a9d","elType":"widget","settings":{"wp":{"title_shortcode":"","type":"recent_product","style":"carousel","style_viewmore":"1","style_row":"1","pos_nav":"both","title_align":"right","shop_url":"0","arrows":"1","dots":"false","auto_slide":"false","number":"4","auto_delay_time":"6","columns_number":"3","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"3","cat":"","not_in":"","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_products_sc"}],"isInner":false}],"isInner":false},{"id":"18e40438","elType":"section","settings":{"layout":"full_width","gap":"no"},"elements":[{"id":"498ce30e","elType":"column","settings":{"_column_size":100,"_inline_size":null},"elements":[{"id":"5da259c1","elType":"widget","settings":{"wp":{"img_src":"' . $imgs_4 . '","height":"","width":"","link":"","content-width":"","align":"left","move_x":"","valign":"middle","text-align":"text-left","banner_responsive":"no","content":"<h6 style=\"letter-spacing: 3px;font-size: 95%;font-weight: 600;color: #333\">NEW DESIGN<\/h6>\r\n<h4 style=\"font-weight: 800;line-height: 1.5;margin-top: 20px\">Up to<span class=\"primary-color\">\u00a050% Off<\/span>\r\nAll T-Shirt &amp; Accessories<\/h4>\r\n<a class=\"button\" style=\"margin-top: 10px;font-size: 12px;border-radius: 40px\" title=\"Shop now\" href=\"#\">Shop Now<\/a>","effect_text":"flipInX","data_delay":"","hover":"fade","border_inner":"no","border_outner":"no","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_banner_sc"}],"isInner":false}],"isInner":false}]',
            '_elementor_controls_usage' => 'a:8:{s:27:"wp-widget-rev-slider-widget";a:3:{s:5:"count";i:1;s:15:"control_percent";i:0;s:8:"controls";a:0:{}}s:6:"column";a:3:{s:5:"count";i:8;s:15:"control_percent";i:0;s:8:"controls";a:2:{s:6:"layout";a:1:{s:6:"layout";a:1:{s:12:"_inline_size";i:8;}}s:8:"advanced";a:1:{s:16:"section_advanced";a:1:{s:14:"padding_mobile";i:3;}}}}s:7:"section";a:3:{s:5:"count";i:6;s:15:"control_percent";i:1;s:8:"controls";a:3:{s:6:"layout";a:2:{s:14:"section_layout";a:2:{s:6:"layout";i:2;s:3:"gap";i:2;}s:17:"section_structure";a:1:{s:9:"structure";i:1;}}s:5:"style";a:1:{s:18:"section_background";a:3:{s:21:"background_background";i:1;s:16:"background_color";i:1;s:18:"background_color_b";i:1;}}s:8:"advanced";a:1:{s:16:"section_advanced";a:1:{s:11:"css_classes";i:4;}}}}s:7:"heading";a:3:{s:5:"count";i:3;s:15:"control_percent";i:4;s:8:"controls";a:3:{s:7:"content";a:1:{s:13:"section_title";a:4:{s:5:"title";i:3;s:4:"size";i:3;s:11:"header_size";i:3;s:5:"align";i:3;}}s:5:"style";a:1:{s:19:"section_title_style";a:4:{s:11:"title_color";i:3;s:21:"typography_typography";i:3;s:22:"typography_font_family";i:3;s:22:"typography_font_weight";i:3;}}s:8:"advanced";a:1:{s:14:"_section_style";a:1:{s:12:"_css_classes";i:3;}}}}s:36:"wp-widget-nasa_product_categories_sc";a:3:{s:5:"count";i:1;s:15:"control_percent";i:0;s:8:"controls";a:0:{}}s:31:"wp-widget-nasa_products_tabs_sc";a:3:{s:5:"count";i:1;s:15:"control_percent";i:0;s:8:"controls";a:0:{}}s:24:"wp-widget-nasa_banner_sc";a:3:{s:5:"count";i:4;s:15:"control_percent";i:0;s:8:"controls";a:0:{}}s:26:"wp-widget-nasa_products_sc";a:3:{s:5:"count";i:1;s:15:"control_percent";i:0;s:8:"controls";a:0:{}}}',
            '_elementor_css' => 'a:6:{s:4:"time";i:1639650341;s:5:"fonts";a:1:{i:0;s:4:"Jost";}s:5:"icons";a:0:{}s:20:"dynamic_elements_ids";a:0:{}s:6:"status";s:4:"file";i:0;s:0:"";}',
            // '_nasa_pri_color_flag' => 'on',
            // '_nasa_pri_color' => '#0f9d8a',
            // '_nasa_footer_mode' => 'build-in',
            // '_nasa_footer_build_in' => '3',
            // '_nasa_footer_build_in_mobile' => 'm-1',
        ),
        
        'globals' => array(
            'header-type' => '1',
            
            // 'fixed_nav' => '0',
            
            // 'plus_wide_width' => '400',
            'color_primary' => '#0f9d8a',
            
            // 'bg_color_topbar' => '28aeb1',
            // 'text_color_topbar' => '#ffffff',
            
            // 'fullwidth_main_menu' => '1',
            
            // 'bg_color_main_menu' => '#e4272c',
            // 'text_color_main_menu' => '#ffffff',
            
            // 'v_root' => '1',
            // 'v_root_limit' => '10',
            
            // 'bg_color_v_menu' => '#000000',
            // 'text_color_v_menu' => '#ffffff',
            
            'footer_mode' => 'builder-e',
            'footer_elm' => elessi_elm_fid_by_slug('hfe-footer-light-3'),
            'footer_elm_mobile' => elessi_elm_fid_by_slug('hfe-footer-light-3'),
            
            // 'category_sidebar' => 'top-2',
            
            // 'product_detail_layout' => 'full',
            // 'full_info_col' => '2',
            'product_image_layout' => 'single',
            // 'product_image_style' => 'slide',
            // 'sp_bgl' => '#f6f6f6',
            // 'tab_style_info' => 'scroll-down',
            
            // 'single_product_thumbs_style' => 'hoz',
            
            'loop_layout_buttons' => 'hoz-buttons',
            
            'animated_products' => 'hover-zoom',
            
            // 'nasa_attr_image_style' => 'square',
            'nasa_attr_image_single_style' => 'square-caption',
            'nasa_attr_color_style' => 'round',
            'nasa_attr_label_style' => 'round',
            
            // 'breadcrumb_row' => 'single',
            // 'breadcrumb_type' => 'default',
            // 'breadcrumb_bg_color' => '#f8f8f8',
            // 'breadcrumb_align' => 'text-left',
            // 'breadcrumb_height' => '60',
        ),

        'css' => '.elementor-[inserted_id] .elementor-element.elementor-element-32a59144:not(.elementor-motion-effects-element-type-background), .elementor-[inserted_id] .elementor-element.elementor-element-32a59144 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:transparent;background-image:linear-gradient(180deg, #FFFFFF 0%, #FFFFFF 100%);}.elementor-[inserted_id] .elementor-element.elementor-element-32a59144{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-[inserted_id] .elementor-element.elementor-element-32a59144 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-[inserted_id] .elementor-element.elementor-element-70489821{text-align:center;}.elementor-[inserted_id] .elementor-element.elementor-element-70489821 .elementor-heading-title{color:#333333;font-family:"Jost", Sans-serif;font-weight:800;}.elementor-[inserted_id] .elementor-element.elementor-element-28a66da0{text-align:center;}.elementor-[inserted_id] .elementor-element.elementor-element-28a66da0 .elementor-heading-title{color:#333333;font-family:"Jost", Sans-serif;font-weight:800;}.elementor-[inserted_id] .elementor-element.elementor-element-185f5ad6{text-align:center;}.elementor-[inserted_id] .elementor-element.elementor-element-185f5ad6 .elementor-heading-title{color:#333333;font-family:"Jost", Sans-serif;font-weight:800;}@media(max-width:767px){.elementor-[inserted_id] .elementor-element.elementor-element-10fdbffb > .elementor-element-populated{padding:0px 10px 10px 10px;}.elementor-[inserted_id] .elementor-element.elementor-element-6198cb5 > .elementor-element-populated{padding:0px 10px 10px 10px;}.elementor-[inserted_id] .elementor-element.elementor-element-66a17d1b > .elementor-element-populated{padding:0px 10px 10px 10px;}}'
    );
    
    /* if (function_exists('hfe_init')) {
        unset($result['post_meta']['_nasa_footer_build_in']);
        unset($result['post_meta']['_nasa_footer_build_in_mobile']);
        
        $result['post_meta']['_nasa_footer_mode'] = 'builder-e';
        $result['post_meta']['_nasa_footer_builder_e'] = elessi_elm_fid_by_slug('hfe-footer-light-3');
        $result['post_meta']['_nasa_footer_builder_e_mobile'] = elessi_elm_fid_by_slug('hfe-footer-light-3');
    } */
    
    return $result;
}
