<?php
/**
 * The template for displaying the header
 *
 * @package nasatheme
 */

global $nasa_opt;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<?php /*meta name="viewport" content="width=device-width, initial-scale=1" / */?>
<meta name="viewport" content="<?php echo apply_filters('nasa_viewport_content', 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if (isset($nasa_opt['site_favicon']) && $nasa_opt['site_favicon']): ?>
<link rel="shortcut icon" href="<?php echo esc_attr($nasa_opt['site_favicon']); ?>" />
<?php else:
wp_site_icon();
endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
wp_body_open();
do_action('nasa_theme_before_load');
$mobile = isset($nasa_opt['nasa_in_mobile']) && $nasa_opt['nasa_in_mobile'] ? true : false;
$tab_style = (is_product() && !$mobile && apply_filters('nasa_single_product_tabs_style', '2d-no-border') == 'scroll-down' )? true : false;
$mobile_app =  $mobile && isset($nasa_opt['mobile_layout']) && $nasa_opt['mobile_layout'] !== 'df' ? true : false;

$class_h = $tab_style .' site-header';
$fixed_nav_header = (!isset($nasa_opt['fixed_nav']) || $nasa_opt['fixed_nav']);
$fixed_nav = apply_filters('nasa_header_sticky', $fixed_nav_header);
if ($fixed_nav && !$tab_style) {
    $class_h .= ' nasa-header-sticky-wrap';
    $class_h .= is_user_logged_in() && current_user_can('manage_options') ? ' ns-has-wpadminbar' : '';
    $class_h .= isset($nasa_opt['enable_post_top']) && $nasa_opt['enable_post_top'] ? ' ns-has-post' : '';
    $class_h .= isset($nasa_opt['topbar_on']) && $nasa_opt['topbar_on'] && !$mobile_app ? ' ns-has-topbar' : '';
}
?>

<!-- Start Wrapper Site -->
<div id="wrapper">

<!-- Start Header Site -->
<header id="header-content" class="<?php echo esc_html($class_h)?>">
<?php do_action('nasa_before_header_structure'); ?>
<?php do_action('nasa_header_structure'); ?>
<?php do_action('nasa_after_header_structure'); ?>
</header>
<!-- End Header Site -->

<!-- Start Main Content Site -->
<main id="main-content" class="site-main light nasa-after-clear">
