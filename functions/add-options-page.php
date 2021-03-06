<?php
// create custom plugin settings menu
add_action('admin_menu', 'bpm_essentials_plugin_create_menu');

function bpm_essentials_plugin_create_menu() {

	//create new top-level menu
	add_menu_page('BPM Plugin Settings', 'BPM Essentials', 'administrator', __FILE__, 'bpm_essentials_plugin_settings_page' , 'dashicons-star-filled' );

	//call register settings function
	add_action( 'admin_init', 'register_bpm_essentials_plugin_settings' );
}

function register_bpm_essentials_plugin_settings() {
	//register our settings
	register_setting( 'bpm-plugin-settings-group', 'custom_jquery' );
	register_setting( 'bpm-plugin-settings-group', 'svg_upload_support' );
	register_setting( 'bpm-plugin-settings-group', 'remove_head_junk' );
	register_setting( 'bpm-plugin-settings-group', 'remove_autoformatting' );
	register_setting( 'bpm-plugin-settings-group', 'remove_gutenberg' );
	register_setting( 'bpm-plugin-settings-group', 'slick_carousel' );
	register_setting( 'bpm-plugin-settings-group', 'add_select2' );
	register_setting( 'bpm-plugin-settings-group', 'utility' );
}

function bpm_essentials_plugin_settings_page() {
?>
<div class="wrap">
<h1>BPM Essentials Plugin Settings</h1>

<form method="post" action="options.php">
    <?php settings_fields( 'bpm-plugin-settings-group' ); ?>
    <?php do_settings_sections( 'bpm-plugin-settings-group' ); ?>
    <table class="form-table">

        <tr valign="top">
            <th scope="row">Enable Updated jQuery</th>
            <td>
                <input type="checkbox" name="custom_jquery" id="custom_jquery"  value="1"<?php checked( 1 == get_option('custom_jquery',1) ); ?>  />
                <span for="custom_jquery">Replaces the outdated WP jQuery with a newer, more compatible version.</span>
            </td>
        </tr>

        <tr valign="top">
            <th scope="row">Enable SVG Upload Support</th>
            <td>
                <input type="checkbox" name="svg_upload_support" id="svg_upload_support" value="1"<?php checked( 1 == get_option('svg_upload_support',0) ); ?>  />
                <span for="svg_upload_support">Allows uploading of SVG through the WP Media Uploader.</span>
            </td>
        </tr>

        <tr valign="top">
            <th scope="row">Remove Head Junk</th>
            <td>
                <input type="checkbox" id="remove_head_junk" name="remove_head_junk"  value="1"<?php checked( 1 == get_option('remove_head_junk',1) ); ?>  />
                <span for="remove_head_junk">Removes WP generator, feed links, and other extraneous things from the <code>&lt;head&gt;</code> tag.</span>
            </td>
        </tr>

        <tr valign="top">
            <th scope="row">Remove Autoformatting</th>
            <td>
                <input type="checkbox" id="remove_autoformatting" name="remove_autoformatting"  value="1"<?php checked( 1 == get_option('remove_autoformatting',0) ); ?>  />
                <span for="remove_autoformatting">Stops WordPress from wrapping everything in <code>&lt;p&gt;</code> tags. Also turns off <code>wptexturize()</code>, which automatically styles quotes and other text. <strong>Not tested with Gutenberg.</strong></span>
            </td>
        </tr>

        <tr valign="top">
            <th scope="row">Remove Gutenberg</th>
            <td>
                <input type="checkbox" id="remove_gutenberg" name="remove_gutenberg"  value="1"<?php checked( 1 == get_option('remove_gutenberg',0) ); ?>  />
                <span for="remove_gutenberg">Disables the Gutenberg block editor in favor of the classic WYSIWYG.</span>
            </td>
        </tr>

        <tr valign="top">
            <th scope="row">Add Slick Carousel</th>
            <td>
                <input type="checkbox" id="slick_carousel" name="slick_carousel"  value="1"<?php checked( 1 == get_option('slick_carousel',0) ); ?>  />
                <span for="slick_carousel">Adds the Slick Carousel. Documentation: <a href="http://kenwheeler.github.io/slick/">http://kenwheeler.github.io/slick/</a></span>
            </td>
        </tr>

        <tr valign="top">
            <th scope="row">Add Select2</th>
            <td>
                <input type="checkbox" id="add_select2" name="add_select2"  value="1"<?php checked( 1 == get_option('add_select2',0) ); ?>  />
                <span for="add_select2">Adds Select2. Documentation: <a href="https://select2.org/">https://select2.org/</a></span>
            </td>
        </tr>

        <tr valign="top">
            <th scope="row">Enable Utility Functions</th>
            <td>
                <input type="checkbox" id="utility" name="utility"  value="1"<?php checked( 1 == get_option('utility',1) ); ?> />
                <span for="utility">Enables useful utility functions for use in themes, like <code>formatPhoneNumber()</code>.</span>
            </td>
        </tr>
<!--
        <tr valign="top">
            <th scope="row">Options, Etc.</th>
            <td><input type="text" name="test" value="<?php echo esc_attr(get_option('test','info@something.com')); ?>" /></td>
        </tr>
-->
    </table>

    <?php submit_button(); ?>

</form>
</div>
<?php } ?>
