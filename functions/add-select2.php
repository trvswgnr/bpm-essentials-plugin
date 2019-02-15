<?php
/**
	* Enqueue Select2 Styles and Scripts
	* @see https://select2.org/
	*/
// add stylesheets
function bpm_add_select2() {

  wp_enqueue_style(
		'select2-css',
		'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css',
		array(),
		'4.0.6'
	);

  wp_enqueue_script(
		'select2-js',
		'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js',
		array('jquery'),
		'4.0.6',
		true
	);
}
add_action( 'wp_enqueue_scripts', 'bpm_add_select2');

?>
