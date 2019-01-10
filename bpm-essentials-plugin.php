<?php
/*
Plugin Name: BPM Essentials
Plugin URI: http://travisaw.com/wp-essentials-plugin
Description: Essential WP Functions
Version: 1.0
Author: Travis Wagner
Author URI: http://travisaw.com
*/
function bpm_include($filename) {
  return require_once( dirname( __FILE__ ) . '/functions/' . $filename . '.php' );
	// helper functions to include partials
}

if (get_option('custom_jquery')) {
	bpm_include('add-custom-jquery');
}

if (get_option('svg_upload_support')) {
	bpm_include('add-svg-upload-support');
}

if (get_option('remove_head_junk')) {
	bpm_include('remove-head-junk');
}

if (get_option('remove_autoformatting')) {
	bpm_include('remove-autoformatting');
}

if (get_option('remove_editors')) {
	bpm_include('remove-editors');
}

if (get_option('utility')) {
	bpm_include('add-utility');
}

bpm_include('add-options-page');
