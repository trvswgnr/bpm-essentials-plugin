<?php
// remove annoying autoformatting
foreach ( array( 'the_content', 'the_title', 'the_excerpt' ) as $hook ) {
  remove_filter( $hook, 'wptexturize' );
  remove_filter( $hook, 'wpautop' );
}
function change_mce_options($init){
    $init["forced_root_block"] = false;
    $init["force_br_newlines"] = true;
    $init["force_p_newlines"] = false;
    $init["convert_newlines_to_brs"] = true;
    return $init;
}
add_filter('tiny_mce_before_init','change_mce_options');
?>
