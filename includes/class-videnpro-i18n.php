<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://vertrieb-im-netz.de
 * @since      1.0.0
 *
 * @package    Videnpro
 * @subpackage Videnpro/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Videnpro
 * @subpackage Videnpro/includes
 * @author     Ralf Pareigis <ralf.pareigis@vertrieb-im-netz.de>
 */
 
// if this file is called directly then exit
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
 
class Videnpro_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'videnpro',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
