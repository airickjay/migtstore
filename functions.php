<?php
function migtStore_include_foundation() {

 	wp_enqueue_script('jquery');
	//wp_enqueue_script('jquery', '/wp-content/themes/migtstore/foundation/js/vendor/jquery.js', array(), null, true);
	wp_enqueue_script('foundation', '/wp-content/themes/migtstore/foundation/js/vendor/foundation.min.js', array(), null, true);
	wp_enqueue_script('what_input', '/wp-content/themes/migtstore/foundation/js/vendor/what-input.js', array(), null, true);
	wp_enqueue_script('foundation_app','/wp-content/themes/migtstore/foundation/js/app.js', array('jquery'), null, true);

 }

add_action('wp_enqueue_scripts', 'migtStore_include_foundation');

include_once('shortcodes/event_data.php');

add_shortcode('eventinfo','get_event_data');

?>
