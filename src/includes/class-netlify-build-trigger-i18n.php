<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://brianmorrison.me
 * @since      1.0.0
 *
 * @package    Netlify_Build_Trigger
 * @subpackage Netlify_Build_Trigger/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Netlify_Build_Trigger
 * @subpackage Netlify_Build_Trigger/includes
 * @author     Brian Morrison II <brian@brianmorrison.me>
 */
class Netlify_Build_Trigger_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'netlify-build-trigger',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
