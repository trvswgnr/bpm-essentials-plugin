<?php
require_once get_template_directory() . '/functions/class-plugin-activation.php';

add_action( 'tgmpa_register', 'bpm_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 */
function bpm_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		array(
			'name'         => 'Advanced Custom Fields Pro', // The plugin name.
			'slug'         => 'advanced-custom-fields-pro', // The plugin slug (typically the folder name).
			'source'       => 'http://travisaw.com/storage/advanced-custom-fields-pro.zip', // The plugin source.
			'required'     => true, // If false, the plugin is only 'recommended' instead of required.
			'external_url' => 'http://travisaw.com/storage/advanced-custom-fields-pro.zip', // If set, overrides default API URL and points to an external URL.
		),

		array(
			'name'         => 'WP Migrate DB Pro', // The plugin name.
			'slug'         => 'wp-migrate-db-pro', // The plugin slug (typically the folder name).
			'source'       => 'http://travisaw.com/storage/wp-migrate-db-pro.zip', // The plugin source.
			'required'     => true, // If false, the plugin is only 'recommended' instead of required.
			'external_url' => 'http://travisaw.com/storage/wp-migrate-db-pro.zip', // If set, overrides default API URL and points to an external URL.
		),

		array(
			'name'         => 'WP Migrate DB Pro Media Files', // The plugin name.
			'slug'         => 'wp-migrate-db-pro-media-files', // The plugin slug (typically the folder name).
			'source'       => 'http://travisaw.com/storage/wp-migrate-db-pro-media-files.zip', // The plugin source.
			'required'     => true, // If false, the plugin is only 'recommended' instead of required.
			'external_url' => 'http://travisaw.com/storage/wp-migrate-db-pro-media-files.zip', // If set, overrides default API URL and points to an external URL.
		),

	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'bpm',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}

