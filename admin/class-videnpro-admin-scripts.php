<?php

// if this file is called directly then exit
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Videnpro_Admin_Scripts {

	public function __construct() {
	
		
	
	} // end of construct

	public function videnpro_enqeue_admin_scripts() {
		wp_enqueue_media();
		wp_enqueue_script("jquery");	
		wp_enqueue_script("jquery-ui-core");
		wp_enqueue_script("jquery-ui-tabs"); // load jquery tabs
		wp_enqueue_script("jquery-ui-slider"); //load jquery slider
		wp_enqueue_script( 'jquery-ui-spinner' ); //load jquery spinner
		wp_enqueue_script( 'jquery-effects-bounce' ); //load jquery effect bounce
		wp_enqueue_script( 'jquery-effects-clip' ); //load jquery effect clip
		wp_enqueue_script( 'jquery-effects-fade' ); //load jquery effect fade
		wp_enqueue_script( 'jquery-effects-slide' ); //load jquery effect slide
		wp_enqueue_script( 'jquery-effects-fold' ); //load jquery effect fold
		wp_enqueue_script( 'jquery-effects-pulsate' ); //load jquery effect pulsate
		wp_enqueue_script( 'jquery-effects-fold' ); //load jquery effect fold
		wp_enqueue_script( 'jquery-effects-puff' ); //load jquery effect puff
		wp_enqueue_script( 'jquery-effects-shake' ); //load jquery effect shake
		wp_enqueue_script( 'bootstrap-js', plugin_dir_url( __FILE__ ) . 'js/bootstrap.min.js', array( 'jquery' ), false );
		wp_enqueue_script( 'videnpro-admin', plugin_dir_url( __FILE__ ) . 'js/videnpro-admin.js', array( 'jquery' ), false );
		wp_enqueue_script( 'videnpro-thumbnail', plugin_dir_url( __FILE__ ) . 'js/videnpro-thumbnail.js', array( 'jquery' ), false );
		wp_enqueue_script( 'videnpro-end-thumbnail', plugin_dir_url( __FILE__ ) . 'js/videnpro-end-thumbnail.js', array( 'jquery' ), false );
		wp_enqueue_script( 'videnpro-logo-thumbnail', plugin_dir_url( __FILE__ ) . 'js/videnpro-logo-thumbnail.js', array( 'jquery' ), false );
		
		wp_enqueue_script( 'videnpro-sound1', plugin_dir_url( __FILE__ ) . 'js/videnpro-sound1.js', array( 'jquery' ), false );
		
		wp_enqueue_script( 'videnpro-video', plugin_dir_url( __FILE__ ) . 'js/videnpro-video.js', array( 'jquery' ), false );
		wp_enqueue_script( 'videnpro-spinner', plugin_dir_url( __FILE__ ) . 'js/videnpro-jquery-spinner.js', array( 'jquery' ), false );
		wp_enqueue_script( 'youtube-api', plugin_dir_url( __FILE__ ) . 'js/videnpro-youtube-api-admin.js', array( 'jquery' ), false );
		wp_enqueue_script( 'html5-video-admin', plugin_dir_url( __FILE__ ) . 'js/videnpro-html5-video-admin.js', array( 'jquery' ), false );
		wp_enqueue_script( 'vimeo-player', 'https://player.vimeo.com/api/player.js', array( 'jquery' ), false );
		// only register script; enqueue it only with metabox; to find in vimeo-functions.php
		wp_register_script( 'vimeo-video-admin', plugin_dir_url( __FILE__ ) . 'js/videnpro-vimeo-video-admin.js', array( 'jquery', 'vimeo-player' ), false );
		if ( 'branding' == get_post_type() ) {
			wp_enqueue_script( 'vimeo-video-admin' );
		}
		
		//wp_enqueue_script( 'my_scripts2', plugin_dir_url( __FILE__ ) . 'js/videnpro-test2.js', array( 'jquery' ), $this->version, false );
		//wp_enqueue_script( 'bootstrap-switch-js', plugin_dir_url( __FILE__ ) . 'js/bootstrap-switch.min.js', array( 'jquery' ), $this->version, true );
		wp_enqueue_script( 'bootstrap-toggle-js', plugin_dir_url( __FILE__ ) . 'js/bootstrap-toggle.min.js', array( 'jquery' ), true );
		//wp_enqueue_script( 'js-wp-editor', plugin_dir_url( __FILE__ ) . 'js/js-wp-editor.min.js', array( 'jquery' ), $this->version, true );
		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_script( 'wp-color-picker-js', plugin_dir_url( __FILE__ ) . 'js/videnpro-wp-color-picker.js', array( 'wp-color-picker' ), false );

		//wp_enqueue_script( 'tinymce-js', plugin_dir_url( __FILE__ ) . 'js/tinymce.min.js', array( 'jquery' ), $this->version, true );		
		wp_enqueue_style( 'bootstrap-css', plugin_dir_url( __FILE__ ) . 'css/bootstrap.min.css' );
		wp_enqueue_style( 'admin_styles', plugin_dir_url( __FILE__ ) . 'css/videnpro-admin.css' );
		if ( 'branding' == get_post_type() || 'videnpro_ads' == get_post_type() ) {
			wp_enqueue_style( 'meta_styles', plugin_dir_url( __FILE__ ) . 'css/videnpro-meta.css' );
		}		
		//wp_enqueue_style( 'boostrap-switch-css', plugin_dir_url( __FILE__ ) . 'css/bootstrap-switch.min.css' );
		wp_enqueue_style( 'boostrap-toggle-css', plugin_dir_url( __FILE__ ) . 'css/bootstrap-toggle.min.css' );
		//wp_enqueue_style( 'boostrap-highlight-switch-css', plugin_dir_url( __FILE__ ) . 'css/highlight.css' );
		wp_enqueue_style( 'font-awesome-css', plugins_url( '../includes/fonts/font-awesome/css/font-awesome.min.css', __FILE__ ) );
		wp_enqueue_style( 'font-awesome-css-animation', plugins_url( '../includes/fonts/font-awesome-animation/css/font-awesome-animation.min.css', __FILE__ ) );
		wp_enqueue_style( 'jquery_css', plugin_dir_url( __FILE__ ) . 'css/jquery-ui.min.css' );
		//wp_enqueue_script( 'test3', plugins_url( '../includes/fonts/font-awesome/css/test.js', __FILE__ ) );
		//wp_enqueue_style( 'theme-front-style', get_template_directory_uri() . '/css/screen.css' );
		
	}

} // end of class