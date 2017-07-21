<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       http://vertrieb-im-netz.de
 * @since      1.0.0
 *
 * @package    Videnpro
 * @subpackage Videnpro/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
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

 
class Videnpro {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Videnpro_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {

		$this->plugin_name = 'videnpro';
		$this->version = '1.0.0';

		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_public_hooks();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Videnpro_Loader. Orchestrates the hooks of the plugin.
	 * - Videnpro_i18n. Defines internationalization functionality.
	 * - Videnpro_Admin. Defines all hooks for the admin area.
	 * - Videnpro_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-videnpro-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-videnpro-i18n.php';

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-videnpro-admin.php';
		
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-videnpro-admin-scripts.php';
		
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-videnpro-widget.php';
		
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/videnpro-functions.php';		
		

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-videnpro-public.php';
		
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-videnpro-front-scripts.php';
		
		/**
		 * The class responsible for registering and displaying the meta box
		 */
		 require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-videnpro-meta-box.php';
		 require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-videnpro-ads-meta-box.php';
		 
		 /**
		 * The class responsible for the shortcodes
		 */
		 require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-videnpro-shortcodes.php';

		$this->loader = new Videnpro_Loader();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Videnpro_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new Videnpro_i18n();

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}
	
	

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks() {

		$plugin_admin = new Videnpro_Admin( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );
		
		$this->loader->add_action( 'init', $plugin_admin, 'videnpro_branding_post_type', 0);
		$this->loader->add_action( 'init', $plugin_admin, 'videnpro_ads_post_type', 0);
		
		$this->loader->add_filter( 'plugin_row_meta', $plugin_admin, 'videnpro_row_meta', 10, 2 );

		$meta_box = new Videnpro_Meta_Box();
		$this->loader->add_action( 'add_meta_boxes', $meta_box, 'videnpro_add_branding_meta_box' );
		$this->loader->add_action( 'save_post', $meta_box, 'videnpro_branding_save' );
		
		$meta_box = new Videnpro_Ads_Meta_Box();
		$this->loader->add_action( 'add_meta_boxes', $meta_box, 'videnpro_add_ads_meta_box' );
		$this->loader->add_action( 'save_post', $meta_box, 'videnpro_ads_save' );
		
		$admin_scripts = new Videnpro_Admin_Scripts();
		$this->loader->add_action( 'admin_enqueue_scripts', $admin_scripts, 'videnpro_enqeue_admin_scripts' );
		
		//$shortcodes = new Videnpro_Shortcodes();
		//$this->loader->add_action( 'add_shortcode', $shortcodes, array( 'youtube_video', 'videnpro_shortode_youtube_video' ) );
		
		
	}
	
	

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks() {

		$plugin_public = new Videnpro_Public( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );
		
		$admin_scripts = new Videnpro_Front_Scripts();
		$this->loader->add_action( 'wp_enqueue_scripts', $admin_scripts, 'videnpro_enqeue_front_scripts' );

	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Videnpro_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

}
