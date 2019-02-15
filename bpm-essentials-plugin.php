<?php
/*
Plugin Name: BPM Essentials
Plugin URI: http://travisaw.com/wp-essentials-plugin
Description: Essential WP Functions
Version: 1.0
Author: Travis Wagner
Author URI: http://travisaw.com
*/

/** Simple helper to include function partials */
function bpm_include($filename) {
  return require_once( dirname( __FILE__ ) . '/' . $filename . '.php' );
}

if (get_option('custom_jquery')) bpm_include('functions/add-custom-jquery');

if (get_option('svg_upload_support')) bpm_include('functions/add-svg-upload-support');

if (get_option('remove_head_junk')) bpm_include('functions/remove-head-junk');

if (get_option('remove_autoformatting')) bpm_include('functions/remove-autoformatting');

if (get_option('remove_gutenberg')) bpm_include('functions/remove-gutenberg');

if (get_option('slick_carousel')) bpm_include('functions/add-slick-carousel');

if (get_option('utility')) bpm_include('functions/add-utility');

if (get_option('add_select2')) bpm_include('functions/add-select2');

bpm_include('functions/add-options-page');

bpm_include('shortcodes/cta');
