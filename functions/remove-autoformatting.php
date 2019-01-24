<?php
// remove annoying autoformatting on front end
foreach ( array( 'the_content', 'the_title', 'the_excerpt' ) as $hook ) {
  remove_filter( $hook, 'wptexturize' );
  remove_filter( $hook, 'wpautop' );
}

// stop tinyMCE from reformatting html
function change_mce_options($init){
		$opts = '*[*]';
    $init["forced_root_block"] = false;
    $init["force_br_newlines"] = true;
    $init["force_p_newlines"] = false;
    $init["convert_newlines_to_brs"] = true;
    $init['valid_elements'] = $opts;
    $init['extended_valid_elements'] = $opts;
		$init['valid_children'] = "+a[div|p|ul|ol|li|h1|span|h2|h3|h4|h5|h5|h6]";
    return $init;
}
add_filter('tiny_mce_before_init','change_mce_options');
?>
