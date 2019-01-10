<?php
// add scripts
function slick_carousel() {
	// slick carousel
  wp_enqueue_script( 'slick-carousel-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js', array('jquery'), '1.8.1', true );

	wp_enqueue_style( 'slick-carousel-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css', array(), '1.8.1' );
}
add_action( 'wp_enqueue_scripts', 'slick_carousel' );
?>
