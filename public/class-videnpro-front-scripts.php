<?php

// if this file is called directly then exit
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Videnpro_Front_Scripts {

	public function __construct() {
	
		
	
	} // end of construct

	public function videnpro_enqeue_front_scripts() {
		//wp_enqueue_media();
		wp_enqueue_script( 'jquery-effects-bounce' ); //load jquery effect bounce
		wp_enqueue_script( 'jquery-effects-clip' ); //load jquery effect clip
		wp_enqueue_script( 'jquery-effects-fade' ); //load jquery effect fade
		wp_enqueue_script( 'jquery-effects-slide' ); //load jquery effect slide
		wp_enqueue_script( 'jquery-effects-fold' ); //load jquery effect fold
		wp_enqueue_script( 'jquery-effects-pulsate' ); //load jquery effect pulsate
		wp_enqueue_script( 'jquery-effects-puff' ); //load jquery effect puff
		wp_enqueue_script( 'jquery-effects-shake' ); //load jquery effect shake
		//wp_enqueue_script( 'videnpro-front', plugin_dir_url( __FILE__ ) . 'js/videnpro-front.js', array( 'jquery' ), false );
		wp_enqueue_script( 'youtube-api', plugin_dir_url( __FILE__ ) . 'js/videnpro-youtube-api-front.js', array( 'jquery' ), false );
		wp_enqueue_script( 'html5video-api', plugin_dir_url( __FILE__ ) . 'js/videnpro-html5-video-front.js', array( 'jquery' ), false );
		wp_enqueue_script( 'vimeovideo-api', plugin_dir_url( __FILE__ ) . 'js/videnpro-vimeo-api-front.js', array( 'jquery' ), false );
		//wp_enqueue_script( 'youtube-api-test', plugin_dir_url( __FILE__ ) . 'js/youtube-api-test.js', array( 'jquery' ), false );
		//wp_enqueue_script( 'my_scripts2', plugin_dir_url( __FILE__ ) . 'js/videnpro-test2.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( 'bootstrap-js-front', plugin_dir_url( __FILE__ ) . 'js/bootstrap.min.js', array( 'jquery' ), false );

		wp_enqueue_style( 'bootstrap-css-front', plugin_dir_url( __FILE__ ) . 'css/bootstrap.min.css' );
		wp_enqueue_style( 'front_styles', plugin_dir_url( __FILE__ ) . 'css/videnpro-front.css' );
		wp_enqueue_style( 'font-awesome-css', plugins_url( '../includes/fonts/font-awesome/css/font-awesome.min.css', __FILE__ ) );
		wp_enqueue_style( 'font-awesome-css-animation', plugins_url( '../includes/fonts/font-awesome-animation/css/font-awesome-animation.min.css', __FILE__ ) );
		
		//wp_enqueue_script( 'test3', plugins_url( '../includes/fonts/font-awesome/css/test.js', __FILE__ ) );
		
	}

} // end of class