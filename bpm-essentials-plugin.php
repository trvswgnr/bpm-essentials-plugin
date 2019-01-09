<?php
   /*
   Plugin Name: BPM Essentials
   Plugin URI: http://travisaw.com/wp-essentials-plugin
   Description: Essential WP Functions
   Version: 1.0
   Author: Travis Wagner
   Author URI: http://travisaw.com
   */

// function to include function partials
function bpm_include($filename) {
  return require_once( dirname( __FILE__ ) . '/functions/' . $filename . '.php' );
}

bpm_include('add-custom-jquery');
//
bpm_include('add-svg-upload-support');
//
bpm_include('remove-head-junk');
//
bpm_include('remove-autoformatting');
//
bpm_include('remove-editors');
//
bpm_include('add-utility');
