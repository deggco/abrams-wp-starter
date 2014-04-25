<?php
/*
Plugin Name:  DEGG CO Must Use Plugins Loader
Plugin URI:   http://degg.co/
Description:  DEGG CO Brand, and site-specific functionality.
Version:      1.0
Author:       Travis Scheidegger
Author URI:   http://travisscheidegger.com/
*/

require WPMU_PLUGIN_DIR . '/wp-post-formats/cf-post-formats.php';
require WPMU_PLUGIN_DIR . '/wp-brand-deggco/wp-brand-deggco.php';

// Load CMB
function load_cmb() {
  if (!is_admin()) {
    return;
  }

  require WPMU_PLUGIN_DIR . '/Custom-Metaboxes-and-Fields-for-WordPress/init.php';
}
add_action('init', 'load_cmb');
