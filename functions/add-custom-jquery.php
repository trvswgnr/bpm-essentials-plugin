<?php
/**
	* Custom jQuery
	* Replaces the old, outdated WP jQuery
	*/
function bpm_custom_jquery() {
  wp_deregister_script('jquery'); // deregister WP default jQuery
  wp_enqueue_script( // add updated version of jQuery
		'jquery',
		'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js',
		array(), // no dependencies
		'3.2.1',
		true // load in footer
		/* @NOTE: if any js in <head> has jquery as a dependency then this jquery will be bumped to the <head> regardless of the in_footer parameter */
	);
}
add_action('wp_enqueue_scripts', 'bpm_custom_jquery');
?>
