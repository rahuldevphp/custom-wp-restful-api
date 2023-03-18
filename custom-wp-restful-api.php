<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/rahuldevphp
 * @since             1.0.0
 * @package           Custom_Wp_Restful_Api
 *
 * @wordpress-plugin
 * Plugin Name:       Custom WP Restful API
 * Plugin URI:        https://github.com/rahuldevphp/custom-wp-restful-api
 * Description:       Custom WP Restful API plugins are used for creating custom rest API.
we are creating API for android and ios apps.
 * Version:           1.0.0
 * Author:            Rahul Prajapati
 * Author URI:        https://github.com/rahuldevphp
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       custom-wp-restful-api
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
define( 'CUSTOM_WP_RESTFUL_API_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-custom-wp-restful-api-activator.php
 */
function activate_custom_wp_restful_api() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-custom-wp-restful-api-activator.php';
	Custom_Wp_Restful_Api_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-custom-wp-restful-api-deactivator.php
 */
function deactivate_custom_wp_restful_api() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-custom-wp-restful-api-deactivator.php';
	Custom_Wp_Restful_Api_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_custom_wp_restful_api' );
register_deactivation_hook( __FILE__, 'deactivate_custom_wp_restful_api' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-custom-wp-restful-api.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_custom_wp_restful_api() {

	$plugin = new Custom_Wp_Restful_Api();
	$plugin->run();

}
run_custom_wp_restful_api();
