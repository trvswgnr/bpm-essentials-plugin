<?php
function shortcode_cta($atts, $content = null) {
	$opts = shortcode_atts(array(
		'background' => 'blue',
        'button' => true
	), $atts);
    return '<div class="cta" background="'.$opts['background'].'">' . do_shortcode($content) . '</div>';
}
add_shortcode('cta', 'shortcode_cta');
?>
