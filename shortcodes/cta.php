<?php
function shortcode_cta($atts, $content = null) {
	$atts = shortcode_atts(array(
		'class' => '',
        'button' => 'Learn More',
	), $atts);
    $html = '<div class="cta" class="' . $atts['class'] . '">'
        . do_shortcode($content)
        . ($atts['button'] != "false" ? '<p><button>' . $atts['button'] . '</button></p>' : '');
    $html .= '</div>'; // .cta
    return $html;
}
add_shortcode('cta', 'shortcode_cta');
?>
