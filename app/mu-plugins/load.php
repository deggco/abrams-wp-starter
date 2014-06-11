<?php
/*
Plugin Name:  DEGG CO Must Use Plugins Loader
Plugin URI:   http://degg.co/
Description:  DEGG CO Brand, and site-specific functionality.
Version:      1.0
Author:       Travis Scheidegger
Author URI:   http://travisscheidegger.com/
*/

$post_formats_plugin = WPMU_PLUGIN_DIR . '/wp-post-formats/cf-post-formats.php';

if (file_exists($post_formats_plugin)) require $post_formats_plugin;

$brand_plugin = WPMU_PLUGIN_DIR . '/wp-brand-deggco/wp-brand-deggco.php';

if (file_exists($brand_plugin)) require $brand_plugin;

// Load CMB
function load_cmb() {
  if (!is_admin()) {
    return;
  }

  $meta_box_plugin = WPMU_PLUGIN_DIR . '/Custom-Metaboxes-and-Fields-for-WordPress/init.php';

  if (file_exists($meta_box_plugin)) require $meta_box_plugin;
}
add_action('init', 'load_cmb');
