<?php

function add_theme_scripts() {
  wp_enqueue_script('jscript', '/wp-content/themes/migtstore/js/migtstore.js', array ( 'jquery' ), 1.1, true);
}
/**
 * Override theme default specification for product # per row
 */
function loop_columns() {
  return 4; // 4 products per row
}

wp_enqueue_script("jquery");

wp_enqueue_script("jquery");

add_filter('loop_shop_columns', 'loop_columns', 999);

include_once('shortcodes/event_data.php');

add_shortcode('eventinfo','get_event_data');

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

?>
