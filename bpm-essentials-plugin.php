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
bpm_include('add-svg-upload-support');
bpm_include('remove-head-junk');
bpm_include('remove-autoformatting');
bpm_include('remove-editors');

if (get_option('option_enable_utility')) {
	bpm_include('add-utility');
}

?>
<script>
console.log("<?php echo get_option('option_enable_utility'); ?>");
</script>

<?php
// create custom plugin settings menu
add_action('admin_menu', 'my_cool_plugin_create_menu');

function my_cool_plugin_create_menu() {

	//create new top-level menu
	add_menu_page('My Cool Plugin Settings', 'Cool Settings', 'administrator', __FILE__, 'my_cool_plugin_settings_page' , plugins_url('/images/icon.png', __FILE__) );

	//call register settings function
	add_action( 'admin_init', 'register_my_cool_plugin_settings' );
}


function register_my_cool_plugin_settings() {
	//register our settings
	register_setting( 'my-cool-plugin-settings-group', 'option_enable_utility' );
	register_setting( 'my-cool-plugin-settings-group', 'some_other_option' );
	register_setting( 'my-cool-plugin-settings-group', 'option_etc' );
}

function my_cool_plugin_settings_page() {
?>
<div class="wrap">
<h1>Your Plugin Name</h1>

<form method="post" action="options.php">
    <?php settings_fields( 'my-cool-plugin-settings-group' ); ?>
    <?php do_settings_sections( 'my-cool-plugin-settings-group' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Enable Utility</th>
        <td><input type="checkbox" name="option_enable_utility"  value="1"<?php checked( 1 == get_option('option_enable_utility') ); ?>  /></td>
        </tr>

        <tr valign="top">
        <th scope="row">Some Other Option</th>
        <td><input type="text" name="some_other_option" value="<?php echo esc_attr( get_option('some_other_option') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">Options, Etc.</th>
        <td><input type="text" name="option_etc" value="<?php echo esc_attr( get_option('option_etc') ); ?>" /></td>
        </tr>
    </table>

    <?php submit_button(); ?>

</form>
</div>
<?php } ?>
