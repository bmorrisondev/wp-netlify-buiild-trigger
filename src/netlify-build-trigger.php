<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://brianmorrison.me
 * @since             1.0.0
 * @package           Netlify_Build_Trigger
 *
 * @wordpress-plugin
 * Plugin Name:       Netlify Build Trigger
 * Plugin URI:        https://brianmorrison.me
 * Description:       Adds a way to trigger a build using a Netlify web hook, right in the admin header!
 * Version:           1.0.0
 * Author:            Brian Morrison II
 * Author URI:        https://brianmorrison.me
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       netlify-build-trigger
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'NETLIFY_BUILD_TRIGGER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-netlify-build-trigger-activator.php
 */
function activate_netlify_build_trigger() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-netlify-build-trigger-activator.php';
	Netlify_Build_Trigger_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-netlify-build-trigger-deactivator.php
 */
function deactivate_netlify_build_trigger() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-netlify-build-trigger-deactivator.php';
	Netlify_Build_Trigger_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_netlify_build_trigger' );
register_deactivation_hook( __FILE__, 'deactivate_netlify_build_trigger' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-netlify-build-trigger.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_netlify_build_trigger() {

	$plugin = new Netlify_Build_Trigger();
	$plugin->run();

}
run_netlify_build_trigger();
