<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://vertrieb-im-netz.de
 * @since      1.0.0
 *
 * @package    Videoengage
 * @subpackage Videoengage/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Videoengage
 * @subpackage Videoengage/admin
 * @author     Ralf Pareigis <ralf.pareigis@vertrieb-im-netz.de>
 */
 
// if this file is called directly then exit
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
 
class Videnpro_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function videnpro_enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Videoengage_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Videoengage_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		//wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/videnpro-admin.css', array(), $this->version, 'all' );
		//wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/bootstrap.min.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function vdenpro_enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Videoengage_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Videoengage_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		
		//wp_enqueue_script("jquery");
	
		//wp_enqueue_script("jquery-ui-core");
		
		//wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/videnpro-admin.js', array( 'jquery' ), $this->version, false );
		//wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/bootstrap.min.js', array( 'jquery' ), $this->version, false );
		
		
		
	}	
	
	public function videnpro_row_meta( $links, $plugin_file ) {
	
		$plugin = 'videoengage/videoengage.php';
		
		if ( $plugin_file == $plugin ) {
			$links[] = '<a href="https://videoengagepro.de/videoengage-training/" target="_blank">' . __( 'Video Tutorials', 'videnpro' ) . '</a>';
			$links[] = '<a href="https://videoengagepro.de" target="_blank">' . __( '<span style="color:red;">' . __( 'Buy VideoEngagePro', 'videnpro' ) . '</span>', 'videnpro' ) . '</a>';
		}
		
		return $links;	
	}	
	
	
	/**
	 * The custom post type for the plugin
	 *
	 * @since    1.0.0
	 */
	public function videnpro_branding_post_type() {

		$labels = array(
			'name'                  => _x( 'Videoengage Brandings', 'Post Type General Name', 'videnpro' ),
			'singular_name'         => _x( 'Videoengage Branding', 'Post Type Singular Name', 'videnpro' ),
			'menu_name'             => __( 'Videoengage Brandings', 'videnpro' ),
			'name_admin_bar'        => __( 'Videoengage Branding', 'videnpro' ),
			'archives'              => __( 'Item Archives', 'videnpro' ),
			'parent_item_colon'     => __( 'Parent Item:', 'videnpro' ),
			'all_items'             => __( 'All Items', 'videnpro' ),
			'add_new_item'          => __( 'Add New Item', 'videnpro' ),
			'add_new'               => __( 'Add New', 'videnpro' ),
			'new_item'              => __( 'New Item', 'videnpro' ),
			'edit_item'             => __( 'Edit Item', 'videnpro' ),
			'update_item'           => __( 'Update Item', 'videnpro' ),
			'view_item'             => __( 'View Item', 'videnpro' ),
			'search_items'          => __( 'Search Item', 'videnpro' ),
			'not_found'             => __( 'Not found', 'videnpro' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'videnpro' ),
			'featured_image'        => __( 'Featured Image', 'videnpro' ),
			'set_featured_image'    => __( 'Set featured image', 'videnpro' ),
			'remove_featured_image' => __( 'Remove featured image', 'videnpro' ),
			'use_featured_image'    => __( 'Use as featured image', 'videnpro' ),
			'insert_into_item'      => __( 'Insert into item', 'videnpro' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'videnpro' ),
			'items_list'            => __( 'Items list', 'videnpro' ),
			'items_list_navigation' => __( 'Items list navigation', 'videnpro' ),
			'filter_items_list'     => __( 'Filter items list', 'videnpro' ),
		);
		$args = array(
			'label'                 => __( 'Branding', 'videnpro' ),
			'description'           => __( 'Branding Post Type', 'videnpro' ),
			'labels'                => $labels,
			'supports'              => array( 'title' ),
			'taxonomies'            => array( 'category', 'post_tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 20,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'branding', $args );

	}
	
	public function videnpro_ads_post_type() {

		$labels = array(
			'name'                  => _x( 'Videoengage Ads', 'Post Type General Name', 'videnpro' ),
			'singular_name'         => _x( 'Videoengage Ad', 'Post Type Singular Name', 'videnpro' ),
			'menu_name'             => __( 'Videoengage Ads', 'videnpro' ),
			'name_admin_bar'        => __( 'Videoengage Ad', 'videnpro' ),
			'archives'              => __( 'Item Archives', 'videnpro' ),
			'parent_item_colon'     => __( 'Parent Item:', 'videnpro' ),
			'all_items'             => __( 'All Items', 'videnpro' ),
			'add_new_item'          => __( 'Add New Item', 'videnpro' ),
			'add_new'               => __( 'Add New', 'videnpro' ),
			'new_item'              => __( 'New Item', 'videnpro' ),
			'edit_item'             => __( 'Edit Item', 'videnpro' ),
			'update_item'           => __( 'Update Item', 'videnpro' ),
			'view_item'             => __( 'View Item', 'videnpro' ),
			'search_items'          => __( 'Search Item', 'videnpro' ),
			'not_found'             => __( 'Not found', 'videnpro' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'videnpro' ),
			'featured_image'        => __( 'Featured Image', 'videnpro' ),
			'set_featured_image'    => __( 'Set featured image', 'videnpro' ),
			'remove_featured_image' => __( 'Remove featured image', 'videnpro' ),
			'use_featured_image'    => __( 'Use as featured image', 'videnpro' ),
			'insert_into_item'      => __( 'Insert into item', 'videnpro' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'videnpro' ),
			'items_list'            => __( 'Items list', 'videnpro' ),
			'items_list_navigation' => __( 'Items list navigation', 'videnpro' ),
			'filter_items_list'     => __( 'Filter items list', 'videnpro' ),
		);
		$args = array(
			'label'                 => __( 'Videoengage Ad', 'videnpro' ),
			'description'           => __( 'Videoengage Ads Post Type', 'videnpro' ),
			'labels'                => $labels,
			'supports'              => array( 'title' ),
			'taxonomies'            => array( 'category', 'post_tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 20,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'videnpro_ads', $args );

	}	
	
}
