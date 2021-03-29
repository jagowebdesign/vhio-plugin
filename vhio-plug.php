<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://web101.co.id
 * @since             1.0.0
 * @package           Vhio_Plug
 *
 * @wordpress-plugin
 * Plugin Name:       Vhio Plug
 * Plugin URI:        https://web101.co.id
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Gandhi
 * Author URI:        https://web101.co.id
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       vhio-plug
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
define( 'VHIO_PLUG_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-vhio-plug-activator.php
 */
function activate_vhio_plug() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-vhio-plug-activator.php';
	Vhio_Plug_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-vhio-plug-deactivator.php
 */
function deactivate_vhio_plug() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-vhio-plug-deactivator.php';
	Vhio_Plug_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_vhio_plug' );
register_deactivation_hook( __FILE__, 'deactivate_vhio_plug' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-vhio-plug.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_vhio_plug() {

	$plugin = new Vhio_Plug();
	$plugin->run();

}
run_vhio_plug();
