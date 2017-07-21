<?php

// if this file is called directly then exit
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for newsletter services

/* cleverreach */

$output_css ='
	<style>
		.cr_page {
			
		}
	</style>
';


/***************/

$output_css .='
	<style>
		.yt-thumbnail-' . $post_id . '_dslr {
			position: absolute;
			display:flex;
			background-size: cover !important;
			overflow:hidden;
			top:' . (41.5 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:' . (15 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width:' . (49 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (41.4 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 2px;
			  -moz-border-radius: 2px;
			  border-radius: 2px;
			z-index: 9999 !important;
		}
	
		.yt-thumbnail-' . $post_id . '_htchor {
			position: absolute;
			display:flex;
			background-size: cover !important;    
			overflow:hidden;
			top:' . (8 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:' . (10.5 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width:' . (78.9 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (83.9 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;		
		}
		
		.yt-thumbnail-' . $post_id . '_cd {
			position: absolute;
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:' . ( 1.68 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:' . (1.8 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) .'%;
			width:' . (96.5 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (76.4 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			border-radius: 4px;	
		}
		
		.yt-thumbnail-' . $post_id . '_cd2 {
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:' . (1.5 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:' . (1.8 +  esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width:' . (96.5 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (76.5 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			border-radius: 4px;	
		}

		.yt-thumbnail-' . $post_id . '_cd_F {
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:' . (1.5 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:' . (1.8 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width:' . (96.5 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (77 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			border-radius: 4px;	
		}

		.yt-thumbnail-' . $post_id . '_imac {
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:' . (0.5 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:' . (0.7 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width:' . (98.5 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (67.5 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 0px;
			-moz-border-radius: 0px;
			border-radius: 0px;	
			-webkit-border-top-left-radius: 11px;
			-webkit-border-top-right-radius: 11px;
			-moz-border-radius-topleft: 11px;
			-moz-border-radius-topright: 11px;
			border-top-left-radius: 11px;
			border-top-right-radius: 11px;		
		}

		.yt-thumbnail-' . $post_id . '_ipadhor {
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:' . (4 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:' . (2.8 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width:' . (87.5 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (91.8 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 2px;
			-moz-border-radius: 2px;
			border-radius: 2px;	
		}

		.yt-thumbnail-' . $post_id . '_iphonehor {
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:' . (2.5 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:' . (10.8 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width:' . (76.5 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (94.4 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 2px;
			-moz-border-radius: 2px;
			border-radius: 2px;	
		}

		.yt-thumbnail-' . $post_id . '_iwatchg {
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:' . (16 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:' . (27.8 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width:' . (47.5 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (64.5 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 20px;
			-moz-border-radius: 20px;
			border-radius: 20px;
		}

		.yt-thumbnail-' . $post_id . '_iwatchs {
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:' . (16 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:' . (27.8 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width:' . (47.5 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (64.5 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 20px;
			-moz-border-radius: 20px;
			border-radius: 20px;	
		}

		.yt-thumbnail-' . $post_id . '_iwatchw {
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:' . (20 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:' . (26.5 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width:' . (50.5 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (61.5 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 20px;
			-moz-border-radius: 20px;
			border-radius: 20px;	
		}

		.yt-thumbnail-' . $post_id . '_mba {
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:' . (7 +  esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:' . (13.7 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width:' . (72.85 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (77.6 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 0px;
			-moz-border-radius: 0px;
			border-radius: 0px;	
		}
	
		.yt-thumbnail-' . $post_id . '_mbgold {
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:' . (10 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:' . (18.7 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width:' . (65.7 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (64.9 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			border-radius: 4px;	
		}
		
		.yt-thumbnail-' . $post_id . '_crbws {
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:' . (0 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:' . (0 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width:' . (100 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (100 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			border-radius: 4px;
		}
		
		.yt-thumbnail-' . $post_id . '_crbs {
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:' . (10.5 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:' . (6.5 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width:' . (87 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (79.2 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			border-radius: 4px;
		}
		
		.yt-thumbnail-' . $post_id . '_onlys {
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:' . (17.5 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:' . (10.6 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width:' . (82.1 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (69.3 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			border-radius: 4px;	
		}
		
		.yt-thumbnail-' . $post_id . '_onlyb {
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:' . (11.5 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:' . (7.1 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width:' . (85.6 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (77.2 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			border-radius: 4px;	
		}
		
		.yt-thumbnail-' . $post_id . '_empty {
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:' . (0 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:' . (0 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width:' . (100 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (100 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 0px;
			-moz-border-radius: 0px;
			border-radius: 0px;	
		}

		.yt-thumbnail-' . $post_id . '_mbgrey {
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:' . (9 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:' . (18.8 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width:' . (65.6 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (59.8 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			border-radius: 4px;	
		}
	
		.yt-thumbnail-' . $post_id . '_mbp {
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:' . (1 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '% !important;
			left:' . (9.8 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			width:' . (80.4 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			height:' . (86.2 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-top-left-radius: 10px;
			-webkit-border-top-right-radius: 10px;
			-moz-border-radius-topleft: 10px;
			-moz-border-radius-topright: 10px;
			border-top-left-radius: 10px;
			border-top-right-radius: 10px;
		}
		
		.yt-thumbnail-' . $post_id . '_plasma1 {
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:' . (14 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:' . (7.6 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width:' . (78.8 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (63 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 0px;
			-moz-border-radius: 0px;
			border-radius: 0px;	
		}
		
		.yt-thumbnail-' . $post_id . '_plasma2 {
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:' . (15 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:' . (13.5 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width:' . (69.5 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (59.5 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 2px;
			-moz-border-radius: 2px;
			border-radius: 2px;
		}
		
		.yt-thumbnail-' . $post_id . '_samsungb {
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:' . (18.8 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:' . (12.3 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width:' . (72.9 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (66.3 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 0px;
			-moz-border-radius: 0px;
			border-radius: 0px;	
		}
		
		.yt-thumbnail-' . $post_id . '_samsungw {
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:' . (20 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:' . (13.6 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width:' . (71.1 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (64 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 0px;
			-moz-border-radius: 0px;
			border-radius: 0px;	
		}
		
		.yt-thumbnail-' . $post_id . '_wood1 {
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:' . (7 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:' . (6 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width:' . (88.1 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (85 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 0px;
			-moz-border-radius: 0px;
			border-radius: 0px;	
		}
		
		.yt-thumbnail-' . $post_id . '_wood2 {
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:' . (9.5 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:' . (6 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width:' . (88.1 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (81.5 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 0px;
			-moz-border-radius: 0px;
			border-radius: 0px;		
		}
		
		.yt-thumbnail-' . $post_id . '_wood3 {
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:' . (9.5 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:'. (6 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width:' . (88.1 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (81.5 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 0px;
			-moz-border-radius: 0px;
			border-radius: 0px;	
		}
		
		.yt-thumbnail-' . $post_id . '_tablethand {
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:' . (17.5 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:' . (24.5 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width:' . (53 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (41.5 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 0px;
			-moz-border-radius: 0px;
			border-radius: 0px;	
		}
		
		.yt-thumbnail-' . $post_id . '_screenoval {
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:' . (12 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:' . (8.5 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width:' . (83 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (65.5 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 107px;
			-moz-border-radius: 107px;
			border-radius: 107px;
		}
		
		.yt-thumbnail-' . $post_id . '_borderred1 {
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:' . (3.5 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:' . (1.9 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width:' . (96.5 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (93.4 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 0px;
			-moz-border-radius: 0px;
			border-radius: 0px;	
		}
		
		.yt-thumbnail-' . $post_id . '_simpleshadowb {
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:' . (0 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:' . (0 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width:' . (100 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (93.5 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 0px;
			-moz-border-radius: 0px;
			border-radius: 0px;	
		}

		.yt-thumbnail-' . $post_id . '_simpleshadoww {
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:' . (0 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:' . (0 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width:' . (100 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (93.5 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 0px;
			-moz-border-radius: 0px;
			border-radius: 0px;	
		}
		
		.yt-thumbnail-' . $post_id . '_borderred2 {
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:' . (3.5 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:' . (1.9 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width:' . (96.5 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (93.4 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 0px;
			-moz-border-radius: 0px;
			border-radius: 0px;	
		}
		
		.yt-thumbnail-' . $post_id . '_borderblue1 {			
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:' . (3.5 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:' . (1.9 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width:' . (96.5 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (93.4 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 0px;
			-moz-border-radius: 0px;
			border-radius: 0px;	
		}

		.yt-thumbnail-' . $post_id . '_borderblue2 {
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:3.5% !important;
			left:' . (1.9 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			width:' . (96.5 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			height:' . (93.4 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 0px;
			-moz-border-radius: 0px;
			border-radius: 0px;	

		}
	
		.yt-thumbnail-' . $post_id . '_border1 {
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top: ' . ( 4.1 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left: ' . (2.45 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width: ' . (94.9 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height: ' . (91.35 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 0px;
			-moz-border-radius: 0px;
			border-radius: 0px;	
		}
		
		.yt-thumbnail-' . $post_id . '_man-with-monitor-01 {
			position: absolute;	
			display:flex;
			background-size: cover !important;	
			overflow:hidden;
			top:' . (33.1 + esc_html( get_post_meta( $post_id, 'video-top-trim-spinner', true ) ) ) . '% !important;
			left:' . (41 + esc_html( get_post_meta( $post_id, 'video-left-trim-spinner', true ) ) ) . '%;
			width:' . (44.9 + esc_html( get_post_meta( $post_id, 'video-width-trim-spinner', true ) ) ) . '%;
			height:' . (43.35 + esc_html( get_post_meta( $post_id, 'video-height-trim-spinner', true ) ) ) . '%;
			-webkit-border-radius: 0px;
			-moz-border-radius: 0px;
			border-radius: 0px;	
		}
	
	</style>
	';