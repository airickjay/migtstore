<?php

$timber = new Timber\Timber();

function migtStore_include_custom_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'migtStore_include_custom_jquery');

?>
