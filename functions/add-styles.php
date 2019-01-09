<?php
// add stylesheets
function bpm_styles() {
  // google font
  wp_enqueue_style( 'google-font-open-sans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700' );

  // font awesome icons
  wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );

	$path = '/dist/main.css';
  // change version based on modified date
  $ver = filemtime( get_template_directory() . $path );
  // main stylesheet
  wp_enqueue_style( 'main', get_stylesheet_directory_uri() . $path, array(), $ver );

  // slick carousel
  wp_enqueue_style( 'slick-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css', array(), '1.8.1' );
}
add_action( 'wp_enqueue_scripts', 'bpm_styles' );
?>
