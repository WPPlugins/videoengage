<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://vertrieb-im-netz.de
 * @since             1.0.0
 * @package           VideoEngage
 *
 * @wordpress-plugin
 * Plugin Name:       VideoEngage
 * Plugin URI:        http://videoengagepro.de
 * Description:       With VideoEngage you can easily embed video files and create video overlays like banner ads, clickable buttons or optin forms.
 * Version:           1.0.1
 * Author:            Ralf Pareigis
 * Author URI:        http://vertrieb-im-netz.de
 * Text Domain:       videnpro
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-videnpro-activator.php
 */
function activate_videnpro() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-videnpro-activator.php';
	Videnpro_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-videnpro-deactivator.php
 */
function deactivate_videnpro() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-videnpro-deactivator.php';
	Videnpro_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_videnpro' );
register_deactivation_hook( __FILE__, 'deactivate_videnpro' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-videnpro.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_videnpro() {

	$plugin = new Videnpro();
	$plugin->run();

}
run_videnpro();
