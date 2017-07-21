<?php
/*
 * @since      1.0.0
 * @package    Videnpro
 * @subpackage Videnpro/includes
 * @author     Ralf Pareigis <ralf.pareigis@vertrieb-im-netz.de>
 */
 
 class Videnpro_Shortcodes {
 
	public function __construct( ) {
		
		
		add_shortcode ( 'videnpro_yt', array( $this ,'videnpro_shortode_youtube_video' ) );	
		add_shortcode ( 'videnpro_self', array( $this ,'videnpro_shortode_html5_video' ) );
		add_shortcode ( 'videnpro_vimeo', array( $this ,'videnpro_shortode_vimeo_video' ) );	
		add_shortcode ( 'videnpro_post_cta', array( $this ,'videnpro_shortode_post_cta' ) );	

	}
	
	public function videnpro_shortode_post_cta( $atts, $content = null ) {
		global $post;
		$post_id = $atts['id'];
		
		
		
		$content = apply_filters( 'the_content', get_post_field( 'post_content', $post_id ) );
		
		return $content;
		
	
	}
 
	public function videnpro_shortode_youtube_video( $atts, $content = null ) {
		$post_id = $atts['id'];
		$output ='';
		$output_css = '';
		$output_css =
		$check_left = null;
		$check_center = null;
		$check_right = null;
		$slider_width_value = esc_html( get_post_meta( $post_id, 'videnpro_video_width_amount', true ) );
		
	// get styles for the mockups
	include( 'videnpro-mockup-styles.php' );
	
	// cta content; editor content or html content
	if ( esc_html( get_post_meta( $post_id, 'videnpro_cta_editor_switch_status', true ) ) === 'true' )
		$cta_content = nl2br( html_entity_decode( esc_html( get_post_meta( $post_id, 'videnpro_cta_content', true )) ) );
	else
		$cta_content = html_entity_decode( esc_html( get_post_meta( $post_id, 'cta_code_textarea', true ) ) );
		
	// original size of mockup image
		$image_size = '';
		
		// aspect ratio of mockup image
		$image_ratio = '';
		
		$image_size = getimagesize( esc_html( get_post_meta( $post_id, 'videnpro_mockup_image_link', true ) ) );
		
		$image_ratio = $image_size[0] / $image_size[1]; // width / height
		
		$uploads = wp_make_link_relative( esc_html( get_post_meta( $post_id, 'videnpro_thumbnail_image_link', true ) ) );
		
		$cta_display_height = $slider_width_value / $image_ratio * esc_html( get_post_meta( $post_id, 'cta-margin-top-spinner', true ) ) / 100;
		
	// get overflow-y status for css
		if ( esc_html( get_post_meta( $post_id, 'videnpro_player_overflow_y_switch_status', true ) ) === 'true' )
		{
			$overflow_y_status = 'scroll';
			$close_right = '2';
		}
		else
		{
			$overflow_y_status = 'hidden';
			$close_right = '1';
		}
		
	// close button margin left
		$margin_left = 100 - esc_html( get_post_meta( $post_id, 'cta-close-button-spinner', true ) ) * 4.5;
		
	// display logo image	
	switch( esc_html( get_post_meta( $post_id, 'videnpro_logo_position', true ) ) ) {
		
			case "none":
				$logo_style = "display: none;";
			
			break;
			
			case "top left":
				$logo_style = "display: none; padding: 15px 0px 0px 10px;";
			
			break;
			
			case "top right":
				$logo_style = "display: none; padding: 15px 10px 0px 0px; right: 0;";
			
			break;
			
			case "bottom left":
				$logo_style = "display: none; padding: 0px 0px 10px 15px; bottom: 0;";
			
			break;
			
			case "bottom right":
				$logo_style = "display: none; padding: 0px 10px 15px 0px; bottom: 0; right: 0;";
			
			break;
			
			default:

				$logo_style = "display: none;";
		
		}
		
		
	// styles for cta
		$styles = 
		'
				display: none;
				position: absolute;
				padding: 3px;
				width: ' . esc_html( get_post_meta( $post_id, 'cta-width-spinner', true ) ) . '%;
				height: ' . esc_html( get_post_meta( $post_id, 'cta-height-spinner', true ) ) . '%;
				top: ' . esc_html( get_post_meta( $post_id, 'cta-margin-top-spinner', true ) ) . '%;
				margin-left: ' . esc_html( get_post_meta( $post_id, 'cta-margin-left-spinner', true ) ) . '%;
				border-style: solid;
				border-width: ' . esc_html( get_post_meta( $post_id, 'cta-border-spinner', true ) ) . 'px;
				border-color: ' . esc_html( get_post_meta( $post_id, 'cta-border-color', true ) ) . ';
				border-radius: ' . esc_html( get_post_meta( $post_id, 'cta-border-radius-spinner', true ) ) . 'px;
				background-color: ' . esc_html( get_post_meta( $post_id, 'cta-background-color', true ) ) . ';
				opacity: ' . esc_html( get_post_meta( $post_id, 'cta-opacity-spinner', true ) ) . ';
				-webkit-animation-name: slide-' . $post_id . ';
				/*-webkit-animation-duration: 3s;*/
				-webkit-animation-fill-mode: forwards;
				-webkit-transform-style: preserve-3d;
				animation-name: slide-' . $post_id . ';
				/*animation-duration: 3s;*/
				animation-fill-mode: forwards;
				-webkit-box-sizing: content-box;
				-moz-box-sizing: content-box;
				box-sizing: content-box;
				overflow: hidden;
				z-index: 6;		
		';
		
	switch( esc_html( get_post_meta( $post_id, 'videnpro_align_video', true ) ) ) {
	
		case "left":
			$check_left = 'checked';
			$output_css .=
			'
				<style>
					#youtube-preview-' . $post_id . ' {
						overflow: hidden;
						position:relative;
						max-width: ' . $slider_width_value . 'px;
						max-height: ' . $slider_width_value / $image_ratio . 'px;
						display: block;
						margin-left: 0;
						margin-right: auto;
					}
					#yt-mockub-image-' . $post_id . ' img#videnpro_youtube_mockup_preview_image {
						position: relative;
						overflow: hidden;
						width: ' . $slider_width_value . 'px;
					}	
				</style>
			';	
			break;
		case "center":
			$check_center = 'checked';
			$output_css .=
			'
				<style>
					#youtube-preview-' . $post_id . ' {
						position: relative;
						overflow: hidden;
						max-width: ' . $slider_width_value . 'px;
						max-height: ' . $slider_width_value / $image_ratio . 'px;
						display: block;
						margin-left: auto;
						margin-right: auto;
					}
					#yt-mockub-image-' . $post_id . ' img#videnpro_youtube_mockup_preview_image {
						position: relative;
						overflow: hidden;
						width: ' . $slider_width_value . 'px;
					}	
				</style>
			';	
			break;
		case "right":
			$check_right = 'checked';
			$output_css .=
			'
				<style>
					#youtube-preview-' . $post_id . ' {
						overflow: hidden;
						position:relative;
						max-width: ' . $slider_width_value . 'px;
						max-height: ' . $slider_width_value / $image_ratio . 'px;
						display: block;
						margin-right: 0;
						margin-left: auto;
					}
					#yt-mockub-image-' . $post_id . ' img#videnpro_youtube_mockup_preview_image {
						position: relative;
						overflow: hidden;
						width: ' . $slider_width_value . 'px;
					}										
				</style>
			';	
			break;						
		}
		
		$output_css .=
		'
		<style>
			#videnpro-logo-image-' . $post_id . ' {
				' . $logo_style . ';
			}		
			#yt-iframe-player-' . $post_id . ' {
				width: 100% !important;
				height: 100% !important;
				display: none;				
			}
			#cta-display-' . $post_id . ' {
				display: none;
				position: absolute;
				width: ' . esc_html( get_post_meta( $post_id, 'cta-width-spinner', true ) ) . '%;
				height: ' . esc_html( get_post_meta( $post_id, 'cta-height-spinner', true ) ) . '%;
				top: ' . esc_html( get_post_meta( $post_id, 'cta-margin-top-spinner', true ) ) . '%;
				margin-left: ' . esc_html( get_post_meta( $post_id, 'cta-margin-left-spinner', true ) ) . '%;
				border-style: solid;
				border-width: ' . esc_html( get_post_meta( $post_id, 'cta-border-spinner', true ) ) . 'px;
				border-color: ' . esc_html( get_post_meta( $post_id, 'cta-border-color', true ) ) . ';
				border-radius: ' . esc_html( get_post_meta( $post_id, 'cta-border-radius-spinner', true ) ) . 'px;
				background-color: ' . esc_html( get_post_meta( $post_id, 'cta-background-color', true ) ) . ';
				opacity: ' . esc_html( get_post_meta( $post_id, 'cta-opacity-spinner', true ) ) . ';
				-webkit-animation-name: slide-' . $post_id . ';
				/*-webkit-animation-duration: 3s;*/
				-webkit-animation-fill-mode: forwards;
				-webkit-transform-style: preserve-3d;
				animation-name: slide-' . $post_id . ';
				/*animation-duration: 3s;*/
				animation-fill-mode: forwards;
				-webkit-box-sizing: content-box;
				-moz-box-sizing: content-box;
				box-sizing: content-box;
				overflow: ' . $overflow_y_status . ';
				z-index: 6;
			}
			
			#cta-display-' . $post_id . ' i.fa.fa-times {
				display: block;
				right: ' . $close_right . '%;
				position: inherit;
				cursor: pointer;
				z-index: 7 !important;
				float: right;
			}
			#cta-display-' . $post_id . ' i {
				color: ' . esc_html( get_post_meta( $post_id, 'cta-close-button-color', true ) ) . ';
			}
			#yt-nostop-window-' . $post_id . ' {
				display: none;
				position: absolute;
				width: 100% !important;
				height: 100% !important;
				z-index: 5;
			}
			i#play-button-' . $post_id .' {
				display: none;
				color: ' . esc_html( get_post_meta( $post_id, 'cta-play-button-color', true ) ) . ';
				cursor: pointer;
			}
			
		</style>
		';
		
		// hidden field for retrieve the youtube id with js
		?>
		<input type="hidden" id="yt-front-id" name="yt-front-id" value="<?php echo esc_html( get_post_meta( $post_id, 'videnpro_youtube_id', true ) ); ?>" />
		
		<?php
		
		// link to youtube video
		$src = "https://www.youtube.com/embed/" . esc_html( get_post_meta( $post_id, 'videnpro_youtube_id', true ) );
		
		$output =
		'
		<div class="bootstrap-wrapper">
		<div id="youtube-preview-' . $post_id . '" data-ytid="' . esc_html( get_post_meta( $post_id, 'videnpro_youtube_id', true ) ) . '">
			<div id="yt-mockub-image-' . $post_id . '">
				<img id="videnpro_youtube_mockup_preview_image" src="' . esc_html( get_post_meta( $post_id, 'videnpro_mockup_image_link', true ) ) . '" alt="Mockup Image" />
			</div>							
			<div class="yt-thumbnail-' . $post_id . esc_html( get_post_meta( $post_id, 'videnpro_mockup_image_name', true ) ) . '" style="background:url(' . $uploads . ') center center; border: ' . esc_html( get_post_meta( $post_id, 'video-border-spinner', true ) ) . 'px solid ' . esc_html( get_post_meta( $post_id, 'player-border', true ) ) . '"
			 data-mockup-width="' . esc_html( get_post_meta( $post_id, 'videnpro_video_width_amount', true ) ) . '"
			data-close-spinner="'. esc_html( get_post_meta( $post_id, 'cta-close-button-spinner', true ) ) . '"
			data-play-spinner="' . esc_html( get_post_meta( $post_id, 'cta-play-button-spinner', true ) ) . '">
					<!--<img id="videnpro_youtube_thumbnail_image" src="' . esc_html( get_post_meta( $post_id, 'videnpro_thumbnail_image_link', true ) ) . '" alt="Video Thumbnail" />-->
					<div id="yt-nostop-window-' . $post_id . '" data-stop="' . esc_html( get_post_meta( $post_id, 'videnpro_player_nostop_switch_status', true ) ) . '"></div>
					';
					if ( esc_html( get_post_meta( $post_id, 'videnpro_cta_video_url_switch_status', true ) ) == 'true' ) {
					$output .= '	
					
						<a class="own" href="' . esc_html( get_post_meta( $post_id, 'cta-link-url', true ) ) . '" target="_blank">	
							<div class="cta-display" id="cta-display-' . $post_id . '" data-bt-color="' . esc_html( get_post_meta( $post_id, 'cta-close-button-color', true ) ) . '" style="padding: 5px;">
								
							</div>
						</a>
						';
					}
					else {
					$output .= '
						<div class="cta-display" id="cta-display-' . $post_id . '" data-bt-color="' . esc_html( get_post_meta( $post_id, 'cta-close-button-color', true ) ) . '" style="padding: 5px;">
							
						</div>
						';
					}
					$output .= '						
					
					<div class="play-button-pulse" id="play-button-pulse-' . $post_id . '" data-id="' . $post_id . '" data-imname="' . esc_html( get_post_meta( $post_id, 'videnpro_mockup_image_name', true ) ) . '" data-autoplay="' . esc_html( get_post_meta( $post_id, 'videnpro_player_autoplay_switch_status', true ) ) . '" data-control="' . esc_html( get_post_meta( $post_id, 'videnpro_player_conrols_switch_status', true ) ) . '" data-cta="' . esc_html( get_post_meta( $post_id, 'videnpro_player_call_to_action_switch_status', true ) ) . '"
						data-cta-effect="' . esc_html( get_post_meta( $post_id, 'videnpro_cta_effect', true ) ) . '" data-cta-effect-duration="' . esc_html( get_post_meta( $post_id, 'cta-effect-spinner', true ) ) . '" data-yt-id="' . esc_html( get_post_meta( $post_id, 'videnpro_youtube_id', true ) ) . '"
						data-delay1="' . esc_html( get_post_meta( $post_id, 'cta-delay-spinner1', true ) ) . '" data-delay2="' . esc_html( get_post_meta( $post_id, 'cta-delay-spinner2', true ) ) . '" data-delay3="' . esc_html( get_post_meta( $post_id, 'cta-delay-spinner3', true ) ) . '"
						data-delay4="' . esc_html( get_post_meta( $post_id, 'cta-delay-spinner4', true ) ) . '" data-delay5="' . esc_html( get_post_meta( $post_id, 'cta-delay-spinner5', true ) ) . '" data-delay6="' . esc_html( get_post_meta( $post_id, 'cta-delay-spinner6', true ) ) . '"
						data-delay7="' . esc_html( get_post_meta( $post_id, 'cta-delay-spinner7', true ) ) . '" data-delay8="' . esc_html( get_post_meta( $post_id, 'cta-delay-spinner8', true ) ) . '" data-delay9="' . esc_html( get_post_meta( $post_id, 'cta-delay-spinner9', true ) ) . '"
						data-delay10="' . esc_html( get_post_meta( $post_id, 'cta-delay-spinner10', true ) ) . '"
						data-delay-post1="' . esc_html( get_post_meta( $post_id, 'cta-delay-post1', true ) ) . '"
						data-delay-post2="' . esc_html( get_post_meta( $post_id, 'cta-delay-post2', true ) ) . '"
						data-delay-post3="' . esc_html( get_post_meta( $post_id, 'cta-delay-post3', true ) ) . '"
						data-delay-post4="' . esc_html( get_post_meta( $post_id, 'cta-delay-post4', true ) ) . '"
						data-delay-post5="' . esc_html( get_post_meta( $post_id, 'cta-delay-post5', true ) ) . '"
						data-delay-post6="' . esc_html( get_post_meta( $post_id, 'cta-delay-post6', true ) ) . '"
						data-delay-post7="' . esc_html( get_post_meta( $post_id, 'cta-delay-post7', true ) ) . '"
						data-delay-post8="' . esc_html( get_post_meta( $post_id, 'cta-delay-post8', true ) ) . '"
						data-delay-post9="' . esc_html( get_post_meta( $post_id, 'cta-delay-post9', true ) ) . '"
						data-delay-post10="' . esc_html( get_post_meta( $post_id, 'cta-delay-post10', true ) ) . '"
						data-duration1="' . esc_html( get_post_meta( $post_id, 'cta-duration-spinner1', true ) ) . '"
						data-duration2="' . esc_html( get_post_meta( $post_id, 'cta-duration-spinner2', true ) ) . '"
						data-duration3="' . esc_html( get_post_meta( $post_id, 'cta-duration-spinner3', true ) ) . '"
						data-duration4="' . esc_html( get_post_meta( $post_id, 'cta-duration-spinner4', true ) ) . '"
						data-duration5="' . esc_html( get_post_meta( $post_id, 'cta-duration-spinner5', true ) ) . '"
						data-duration6="' . esc_html( get_post_meta( $post_id, 'cta-duration-spinner6', true ) ) . '"
						data-duration7="' . esc_html( get_post_meta( $post_id, 'cta-duration-spinner7', true ) ) . '"
						data-duration8="' . esc_html( get_post_meta( $post_id, 'cta-duration-spinner8', true ) ) . '"
						data-duration9="' . esc_html( get_post_meta( $post_id, 'cta-duration-spinner9', true ) ) . '"
						data-duration10="' . esc_html( get_post_meta( $post_id, 'cta-duration-spinner10', true ) ) . '"
						data-sound1="' . esc_html( get_post_meta( $post_id, 'videnpro_sound1_link', true ) ) . '"
						data-sound2="' . esc_html( get_post_meta( $post_id, 'videnpro_sound2_link', true ) ) . '"
						data-sound3="' . esc_html( get_post_meta( $post_id, 'videnpro_sound3_link', true ) ) . '"
						data-sound4="' . esc_html( get_post_meta( $post_id, 'videnpro_sound4_link', true ) ) . '"
						data-sound5="' . esc_html( get_post_meta( $post_id, 'videnpro_sound5_link', true ) ) . '"
						data-sound6="' . esc_html( get_post_meta( $post_id, 'videnpro_sound6_link', true ) ) . '"
						data-sound7="' . esc_html( get_post_meta( $post_id, 'videnpro_sound7_link', true ) ) . '"
						data-sound8="' . esc_html( get_post_meta( $post_id, 'videnpro_sound8_link', true ) ) . '"
						data-sound9="' . esc_html( get_post_meta( $post_id, 'videnpro_sound9_link', true ) ) . '"
						data-sound10="' . esc_html( get_post_meta( $post_id, 'videnpro_sound10_link', true ) ) . '"						
						data-source="' . esc_html( get_post_meta( $post_id, 'videnpro_video_source', true ) ) . '"
						data-cta-stop="' . esc_html( get_post_meta( $post_id, 'videnpro_cta_video_stop_switch_status', true ) ) . '"
						data-cta-shortcode="' . esc_html( get_post_meta( $post_id, 'videnpro_cta_shortcode', true ) ) . '"
						data-fullscreen="' . esc_html( get_post_meta( $post_id, 'videnpro_fullscreen_switch_status', true ) ) . '"
						data-close-button="' . esc_html( get_post_meta( $post_id, 'videnpro_cta_show_close_switch_status', true ) ) . '"
						data-background-image="' . esc_html( get_post_meta( $post_id, 'videnpro_thumbnail_image_link', true ) ) . '"
						data-background-end-image="' . esc_html( get_post_meta( $post_id, 'videnpro_thumbnail_end_image_link', true ) ) . '"
						data-thumbnail-duration-buffer="' . esc_html( get_post_meta( $post_id, 'video-thumbnail-buffer-spinner', true ) ) . '"
						data-logo-image="' . esc_html( get_post_meta( $post_id, 'videnpro_thumbnail_logo_image_link', true ) ) . '"
						data-delay10-content="' . esc_html( get_post_meta( $post_id, 'cta-delay-10-div-to-show', true ) ) . '">				
						<i id="play-button-' . $post_id . '" class="fa fa-play-circle fa-' . esc_html( get_post_meta( $post_id, 'cta-play-button-spinner', true ) ) . 'x faa-pulse animated"></i>
					</div>
					<!--<iframe id="yt-iframe-player-' . $post_id . '" src="' . $src . '" frameborder="0" allowfullscreen></iframe>-->
					<div id="videnpro-logo-image-container-' . $post_id . '">
						<a href="' . esc_html( get_post_meta( $post_id, 'videnpro_logo_image_link', true ) ) . '" target="_blank">
							<img class="videnpro-logo-image" id="videnpro-logo-image-' . $post_id . '" src="' . esc_html( get_post_meta( $post_id, 'videnpro_thumbnail_logo_image_link', true ) ) . '" alt="Logo Image" />
						</a>
					</div>
					<div id="yt-iframe-player-' . $post_id . '"></div>';
					
					for ( $i = 1; $i <= 10; $i++ )
					{
					?>
						<audio id="<?php echo 'cta-audio' . $i . '-' . $post_id ?>" preload="none"> 
						   <source src="" type="audio/mpeg">
						</audio>
					<?php
					}
					
					$output .= '
					
				
			</div>
		</div><!-- youtube-preview -->
		<div id="player"></div>
		<div id="yt-player-40"></div>
		<div id="current-time-40"></div>
		<div id="duration-40"></div>
		
		<div id="yt-player-154"></div>
		<div id="current-time-154"></div>
		<div id="duration-154"></div>
		
		<div id="yt-player-24"></div>
		<div id="current-time-24"></div>
		<div id="duration-24"></div>
		
		';
		// for loop to create div's for the cta posts & pages
		for( $i=1; $i <= 10; $i++ )
		{
			$spinner = esc_html( get_post_meta( $post_id, 'cta-delay-spinner' . $i, true ) );
			$post = esc_html( get_post_meta( $post_id, 'cta-delay-post' . $i, true ) );
			$editor_switch = esc_html( get_post_meta( $post, 'videnpro_ads_editor_switch', true ) );
			$type = get_post_type( $post );	
			// check if spinner is set & post is set
			if( $spinner != 0 && $post != '' )
			{
				if( $type == 'videnpro_ads' && $editor_switch == 'true' )
					$content_ad = html_entity_decode( esc_html( get_post_meta( $post, 'videnpro_ads_content', true ) ) );
					
				if( $type == 'videnpro_ads' && $editor_switch == 'false' )
					$content_ad = html_entity_decode( esc_html( get_post_meta( $post, 'cta_ad_code_textarea', true ) ) );
					
				if( $type != 'videnpro_ads' )
					$content_ad = apply_filters( 'the_content', get_post_field( 'post_content', $post ) );
				
					$output .=
					'
						<div id="cta-post-content' . $i . '-' . $post_id . '" data-styles="<style>#cta-display-' . $post_id . ' { ' . esc_html( get_post_meta( $post, 'videnpro_ads_styles', true ) ) . ' } </style>" style="display:none;">
						
								<i id="close-yt' . $i . '-' . $post_id . '" class="fa fa-times fa-' . esc_html( get_post_meta( $post_id, 'cta-close-button-spinner', true ) ) . 'x" aria-hidden="true" data-id2="' . $post_id . '"></i>
						
								' . do_shortcode($content_ad) . '
						
						
						
						</div>
					';
					
					
			}
		}		
		// end for loop
		
		
		$output .= '
		
		
		<div id="cta-post-content-nopost-' . $post_id . '" data-styles="<style>#cta-display-' . $post_id . ' { ' . $styles . ' } </style>" style="display:none;">
		
			<i  id="close-yt-' . $post_id . '" class="fa fa-times fa-' . esc_html( get_post_meta( $post_id, 'cta-close-button-spinner', true ) ) . 'x" aria-hidden="true" data-id2="' . $post_id . '"></i>

			' . do_shortcode( $cta_content ) . '
		
		</div>
		
		
		</div><!-- bootstrap wrapper -->
		';
	
	return $output_css . $output;
	}
	
	/* end of youtube shortcode ***********************************************************************************/

	/* start of the html5 video shortcode *************************************************************************/
	
	public function videnpro_shortode_html5_video( $atts, $content = null ) {
		$post_id = $atts['id'];
		$output ='';
		$output_css = '';
		$output_css =
		$check_left = null;
		$check_center = null;
		$check_right = null;
		$slider_width_value = esc_html( get_post_meta( $post_id, 'videnpro_video_width_amount', true ) );
		
		// get styles for the mockups
		include( 'videnpro-mockup-styles.php' );
		
		// cta content; editor content or html content
		if ( esc_html( get_post_meta( $post_id, 'videnpro_cta_editor_switch_status', true ) ) === 'true' )
			$cta_content = nl2br( html_entity_decode( esc_html( get_post_meta( $post_id, 'videnpro_cta_content', true )) ) );
		else
			$cta_content = html_entity_decode( esc_html( get_post_meta( $post_id, 'cta_code_textarea', true ) ) );
		
		// original size of mockup image
		$image_size = '';
		
		// aspect ratio of mockup image
		$image_ratio = '';
		
		$image_size = getimagesize( esc_html( get_post_meta( $post_id, 'videnpro_mockup_image_link', true ) ) );
		
		$image_ratio = $image_size[0] / $image_size[1]; // width / height
		
		$uploads = wp_make_link_relative( esc_html( get_post_meta( $post_id, 'videnpro_thumbnail_image_link', true ) ) );

		$cta_display_height = $slider_width_value / $image_ratio * esc_html( get_post_meta( $post_id, 'cta-margin-top-spinner', true ) ) / 100;
		
		// get overflow-y status for css
		if ( esc_html( get_post_meta( $post_id, 'videnpro_player_overflow_y_switch_status', true ) ) === 'true' )
		{
			$overflow_y_status = 'scroll';
			$close_right = '2';
		}
		else
		{
			$overflow_y_status = 'hidden';
			$close_right = '1';
		}
		
		// close button margin left
		$margin_left = esc_html( get_post_meta( $post_id, 'cta-width-spinner', true ) ) - 25;
		
		// display logo image	
		switch( esc_html( get_post_meta( $post_id, 'videnpro_logo_position', true ) ) ) {
			
				case "none":
					$logo_style = "display: none;";
				
				break;
				
				case "top left":
					$logo_style = "display: none; padding: 15px 0px 0px 10px;";
				
				break;
				
				case "top right":
					$logo_style = "display: none; padding: 15px 10px 0px 0px; right: 0;";
				
				break;
				
				case "bottom left":
					$logo_style = "display: none; padding: 0px 0px 10px 15px; bottom: 0;";
				
				break;
				
				case "bottom right":
					$logo_style = "display: none; padding: 0px 10px 15px 0px; bottom: 0; right: 0;";
				
				break;
				
				default:

					$logo_style = "display: none;";
			
			}
		
		// styles for cta
		$styles = 
		'
				display: none;
				position: absolute;
				padding: 3px;
				width: ' . esc_html( get_post_meta( $post_id, 'cta-width-spinner', true ) ) . '%;
				height: ' . esc_html( get_post_meta( $post_id, 'cta-height-spinner', true ) ) . '%;
				top: ' . esc_html( get_post_meta( $post_id, 'cta-margin-top-spinner', true ) ) . '%;
				margin-left: ' . esc_html( get_post_meta( $post_id, 'cta-margin-left-spinner', true ) ) . '%;
				border-style: solid;
				border-width: ' . esc_html( get_post_meta( $post_id, 'cta-border-spinner', true ) ) . 'px;
				border-color: ' . esc_html( get_post_meta( $post_id, 'cta-border-color', true ) ) . ';
				border-radius: ' . esc_html( get_post_meta( $post_id, 'cta-border-radius-spinner', true ) ) . 'px;
				background-color: ' . esc_html( get_post_meta( $post_id, 'cta-background-color', true ) ) . ';
				opacity: ' . esc_html( get_post_meta( $post_id, 'cta-opacity-spinner', true ) ) . ';
				-webkit-animation-name: slide-' . $post_id . ';
				/*-webkit-animation-duration: 3s;*/
				-webkit-animation-fill-mode: forwards;
				-webkit-transform-style: preserve-3d;
				animation-name: slide-' . $post_id . ';
				/*animation-duration: 3s;*/
				animation-fill-mode: forwards;
				-webkit-box-sizing: content-box;
				-moz-box-sizing: content-box;
				box-sizing: content-box;
				overflow: hidden;
				z-index: 6;		
		';
	
		switch( esc_html( get_post_meta( $post_id, 'videnpro_align_video', true ) ) ) {		
	
		case "left":
			$check_left = 'checked';
			$output_css .=
			'
				<style>
					#youtube-preview-' . $post_id . ' {
						overflow: hidden;
						position:relative;
						max-width: ' . $slider_width_value . 'px;
						max-height: ' . $slider_width_value / $image_ratio . 'px;
						display: block;
						margin-left: 0;
						margin-right: auto;
					}
					#yt-mockub-image-' . $post_id . ' img#videnpro_youtube_mockup_preview_image {
						position: relative;
						overflow: hidden;
						width: ' . $slider_width_value . 'px;
					}	
				</style>
			';	
			break;
		case "center":
			$check_center = 'checked';
			$output_css .=
			'
				<style>
					#youtube-preview-' . $post_id . ' {
						overflow: hidden;
						position:relative;
						max-width: ' . $slider_width_value . 'px;
						max-height: ' . $slider_width_value / $image_ratio . 'px;
						display: block;
						margin-left: auto;
						margin-right: auto;
					}
					#yt-mockub-image-' . $post_id . ' img#videnpro_youtube_mockup_preview_image {
						position: relative;
						overflow: hidden;
						width: ' . $slider_width_value . 'px;
					}	
				</style>
			';	
			break;
		case "right":
			$check_right = 'checked';
			$output_css .=
			'
				<style>
					#youtube-preview-' . $post_id . ' {
						overflow: hidden;
						position:relative;
						max-width: ' . $slider_width_value . 'px;
						max-height: ' . $slider_width_value / $image_ratio . 'px;
						display: block;
						margin-right: 0;
						margin-left: auto;
					}
					#yt-mockub-image-' . $post_id . ' img#videnpro_youtube_mockup_preview_image {
						position: relative;
						overflow: hidden;
						width: ' . $slider_width_value . 'px;
					}										
				</style>
			';	
			break;						
		}
		
		$output_css .=
		'
		<style>
			#videnpro-logo-image-' . $post_id . ' {
				' . $logo_style . ';
				z-index: 5;
			}	
			#self-video-player-' . $post_id . ' {
				width: 100% !important;
				height: 100% !important;
				display: none;
				position: relative;
			}
			#cta-display-' . $post_id . ' {
				display: none;
				position: absolute;
				width: ' . esc_html( get_post_meta( $post_id, 'cta-width-spinner', true ) ) . '%;
				height: ' . esc_html( get_post_meta( $post_id, 'cta-height-spinner', true ) ) . '%;
				top: ' . esc_html( get_post_meta( $post_id, 'cta-margin-top-spinner', true ) ) . '%;
				margin-left: ' . esc_html( get_post_meta( $post_id, 'cta-margin-left-spinner', true ) ) . '%;
				border-style: solid;
				border-width: ' . esc_html( get_post_meta( $post_id, 'cta-border-spinner', true ) ) . 'px;
				border-color: ' . esc_html( get_post_meta( $post_id, 'cta-border-color', true ) ) . ';
				border-radius: ' . esc_html( get_post_meta( $post_id, 'cta-border-radius-spinner', true ) ) . 'px;
				background-color: ' . esc_html( get_post_meta( $post_id, 'cta-background-color', true ) ) . ';
				opacity: ' . esc_html( get_post_meta( $post_id, 'cta-opacity-spinner', true ) ) . ';
				-webkit-animation-name: slide-' . $post_id . ';
				/*-webkit-animation-duration: 3s;*/
				-webkit-animation-fill-mode: forwards;
				-webkit-transform-style: preserve-3d;
				animation-name: slide-' . $post_id . ';
				/*animation-duration: 3s;*/
				animation-fill-mode: forwards;
				-webkit-box-sizing: content-box;
				-moz-box-sizing: content-box;
				box-sizing: content-box;
				overflow-y: ' . $overflow_y_status . ';
				z-index: 6;
			}
			#cta-display-' . $post_id . ' i.fa.fa-times {
				display: block;
				right: ' . $close_right . '%;
				position: inherit;
				cursor: pointer;
				z-index: 7 !important;
				float: right;
			}
			#cta-display-' . $post_id . ' i {
				color: ' . esc_html( get_post_meta( $post_id, 'cta-close-button-color', true ) ) . ';
			}
			#yt-nostop-window-' . $post_id . ' {
				display: none;
				position: absolute;
				width: 100% !important;
				height: 100% !important;
				z-index: 5;
			}
			.play-button-pulse {
				
			}
			i#play-button-' . $post_id .' {
				color: ' . esc_html( get_post_meta( $post_id, 'cta-play-button-color', true ) ) . ';
				cursor: pointer;
			}
			a#cta-display-' . $post_id . ':hover {
				text-decoration: none;
				color: inherit;
			}
		</style>
		';
		
		// link to self hosted video
		$src =  esc_html( get_post_meta( $post_id, 'videnpro_self_id', true ) );
		
		
		$output =
		'
		<div class="bootstrap-wrapper">
		<div id="youtube-preview-' . $post_id . '">
			<div id="yt-mockub-image-' . $post_id . '">
				<img id="videnpro_youtube_mockup_preview_image" src="' . esc_html( get_post_meta( $post_id, 'videnpro_mockup_image_link', true ) ) . '" alt="Mockup Image" />
			</div>							
			<div class="yt-thumbnail-' . $post_id . esc_html( get_post_meta( $post_id, 'videnpro_mockup_image_name', true ) ) . '" style="background:url(' . $uploads . ') center center; border: ' . esc_html( get_post_meta( $post_id, 'video-border-spinner', true ) ) . 'px solid ' . esc_html( get_post_meta( $post_id, 'player-border', true ) ) . '"
			data-mockup-width="' . esc_html( get_post_meta( $post_id, 'videnpro_video_width_amount', true ) ) . '"
			data-close-spinner="'. esc_html( get_post_meta( $post_id, 'cta-close-button-spinner', true ) ) . '"
			data-play-spinner="' . esc_html( get_post_meta( $post_id, 'cta-play-button-spinner', true ) ) . '">
					<!--<img id="videnpro_youtube_thumbnail_image" src="' . esc_html( get_post_meta( $post_id, 'videnpro_thumbnail_image_link', true ) ) . '" alt="Video Thumbnail" />-->
					<div id="yt-nostop-window-' . $post_id . '" data-stop="' . esc_html( get_post_meta( $post_id, 'videnpro_player_nostop_switch_status', true ) ) . '"></div>
					';
					if ( esc_html( get_post_meta( $post_id, 'videnpro_cta_video_url_switch_status', true ) ) == 'true' ) {
					$output .= '
					
						<a href="' . esc_html( get_post_meta( $post_id, 'cta-link-url', true ) ) . '" target="_blank">	
							<div class="cta-display" id="cta-display-' . $post_id . '" data-bt-color="' . esc_html( get_post_meta( $post_id, 'cta-close-button-color', true ) ) . '" style="padding: 5px;">
								
							</div>
						</a>
						';
					}
					else {
					$output .= '
					
						<div class="cta-display" id="cta-display-' . $post_id . '" data-bt-color="' . esc_html( get_post_meta( $post_id, 'cta-close-button-color', true ) ) . '" style="padding: 5px;">
							
						</div>
						';
					}
					$output .= 
					'				
					
					<div class="play-button-pulse" id="play-button-pulse-' . $post_id . '" data-id="' . $post_id . '" data-imname="' . esc_html( get_post_meta( $post_id, 'videnpro_mockup_image_name', true ) ) . '" data-autoplay="' . esc_html( get_post_meta( $post_id, 'videnpro_player_autoplay_switch_status', true ) ) . '" data-control="' . esc_html( get_post_meta( $post_id, 'videnpro_player_conrols_switch_status', true ) ) . '" data-cta="' . esc_html( get_post_meta( $post_id, 'videnpro_player_call_to_action_switch_status', true ) ) . '"
						data-cta-effect="' . esc_html( get_post_meta( $post_id, 'videnpro_cta_effect', true ) ) . '" data-cta-effect-duration="' . esc_html( get_post_meta( $post_id, 'cta-effect-spinner', true ) ) . '" data-yt-id="' . esc_html( get_post_meta( $post_id, 'videnpro_youtube_id', true ) ) . '"
						data-delay1="' . esc_html( get_post_meta( $post_id, 'cta-delay-spinner1', true ) ) . '" data-delay2="' . esc_html( get_post_meta( $post_id, 'cta-delay-spinner2', true ) ) . '" data-delay3="' . esc_html( get_post_meta( $post_id, 'cta-delay-spinner3', true ) ) . '" 
						data-delay4="' . esc_html( get_post_meta( $post_id, 'cta-delay-spinner4', true ) ) . '" data-delay5="' . esc_html( get_post_meta( $post_id, 'cta-delay-spinner5', true ) ) . '" data-delay6="' . esc_html( get_post_meta( $post_id, 'cta-delay-spinner6', true ) ) . '"
						data-delay7="' . esc_html( get_post_meta( $post_id, 'cta-delay-spinner7', true ) ) . '" data-delay8="' . esc_html( get_post_meta( $post_id, 'cta-delay-spinner8', true ) ) . '" data-delay9="' . esc_html( get_post_meta( $post_id, 'cta-delay-spinner9', true ) ) . '"
						data-delay10="' . esc_html( get_post_meta( $post_id, 'cta-delay-spinner10', true ) ) . '"
						data-delay-post1="' . esc_html( get_post_meta( $post_id, 'cta-delay-post1', true ) ) . '"
						data-delay-post2="' . esc_html( get_post_meta( $post_id, 'cta-delay-post2', true ) ) . '"
						data-delay-post3="' . esc_html( get_post_meta( $post_id, 'cta-delay-post3', true ) ) . '"
						data-delay-post4="' . esc_html( get_post_meta( $post_id, 'cta-delay-post4', true ) ) . '"
						data-delay-post5="' . esc_html( get_post_meta( $post_id, 'cta-delay-post5', true ) ) . '"
						data-delay-post6="' . esc_html( get_post_meta( $post_id, 'cta-delay-post6', true ) ) . '"
						data-delay-post7="' . esc_html( get_post_meta( $post_id, 'cta-delay-post7', true ) ) . '"
						data-delay-post8="' . esc_html( get_post_meta( $post_id, 'cta-delay-post8', true ) ) . '"
						data-delay-post9="' . esc_html( get_post_meta( $post_id, 'cta-delay-post9', true ) ) . '"
						data-delay-post10="' . esc_html( get_post_meta( $post_id, 'cta-delay-post10', true ) ) . '"
						data-duration1="' . esc_html( get_post_meta( $post_id, 'cta-duration-spinner1', true ) ) . '"
						data-duration2="' . esc_html( get_post_meta( $post_id, 'cta-duration-spinner2', true ) ) . '"
						data-duration3="' . esc_html( get_post_meta( $post_id, 'cta-duration-spinner3', true ) ) . '"
						data-duration4="' . esc_html( get_post_meta( $post_id, 'cta-duration-spinner4', true ) ) . '"
						data-duration5="' . esc_html( get_post_meta( $post_id, 'cta-duration-spinner5', true ) ) . '"
						data-duration6="' . esc_html( get_post_meta( $post_id, 'cta-duration-spinner6', true ) ) . '"
						data-duration7="' . esc_html( get_post_meta( $post_id, 'cta-duration-spinner7', true ) ) . '"
						data-duration8="' . esc_html( get_post_meta( $post_id, 'cta-duration-spinner8', true ) ) . '"
						data-duration9="' . esc_html( get_post_meta( $post_id, 'cta-duration-spinner9', true ) ) . '"
						data-duration10="' . esc_html( get_post_meta( $post_id, 'cta-duration-spinner10', true ) ) . '"
						data-sound1="' . esc_html( get_post_meta( $post_id, 'videnpro_sound1_link', true ) ) . '"
						data-sound2="' . esc_html( get_post_meta( $post_id, 'videnpro_sound2_link', true ) ) . '"
						data-sound3="' . esc_html( get_post_meta( $post_id, 'videnpro_sound3_link', true ) ) . '"
						data-sound4="' . esc_html( get_post_meta( $post_id, 'videnpro_sound4_link', true ) ) . '"
						data-sound5="' . esc_html( get_post_meta( $post_id, 'videnpro_sound5_link', true ) ) . '"
						data-sound6="' . esc_html( get_post_meta( $post_id, 'videnpro_sound6_link', true ) ) . '"
						data-sound7="' . esc_html( get_post_meta( $post_id, 'videnpro_sound7_link', true ) ) . '"
						data-sound8="' . esc_html( get_post_meta( $post_id, 'videnpro_sound8_link', true ) ) . '"
						data-sound9="' . esc_html( get_post_meta( $post_id, 'videnpro_sound9_link', true ) ) . '"
						data-sound10="' . esc_html( get_post_meta( $post_id, 'videnpro_sound10_link', true ) ) . '"						
						data-source="' . esc_html( get_post_meta( $post_id, 'videnpro_video_source', true ) ) . '"
						data-cta-stop="' . esc_html( get_post_meta( $post_id, 'videnpro_cta_video_stop_switch_status', true ) ) . '"
						data-fullscreen="' . esc_html( get_post_meta( $post_id, 'videnpro_fullscreen_switch_status', true ) ) . '"
						data-close-button="' . esc_html( get_post_meta( $post_id, 'videnpro_cta_show_close_switch_status', true ) ) . '"
						data-background-image="' . esc_html( get_post_meta( $post_id, 'videnpro_thumbnail_image_link', true ) ) . '"
						data-background-end-image="' . esc_html( get_post_meta( $post_id, 'videnpro_thumbnail_end_image_link', true ) ) . '"
						data-thumbnail-duration-buffer="' . esc_html( get_post_meta( $post_id, 'video-thumbnail-buffer-spinner', true ) ) . '"
						data-logo-image="' . esc_html( get_post_meta( $post_id, 'videnpro_thumbnail_logo_image_link', true ) ) . '"
						data-delay10-content="' . esc_html( get_post_meta( $post_id, 'cta-delay-10-div-to-show', true ) ) . '">
						<i id="play-button-' . $post_id . '" class="fa fa-play-circle fa-' . esc_html( get_post_meta( $post_id, 'cta-play-button-spinner', true ) ) . 'x faa-pulse animated"></i>
					</div>
					<div id="videnpro-logo-image-container-' . $post_id . '">
						<a href="' . esc_html( get_post_meta( $post_id, 'videnpro_logo_image_link', true ) ) . '" target="_blank">
							<img class="videnpro-logo-image" id="videnpro-logo-image-' . $post_id . '" src="' . esc_html( get_post_meta( $post_id, 'videnpro_thumbnail_logo_image_link', true ) ) . '" alt="Logo Image" />
						</a>
					</div>
					<video id="self-video-player-' . $post_id . '" webkit-playsinline src="' . $src . '"></video>';
				
					for ( $i = 1; $i <= 10; $i++ )
					{
					?>
						<audio id="<?php echo 'cta-audio' . $i . '-' . $post_id ?>" preload="none"> 
						   <source src="" type="audio/mpeg">
						</audio>
					<?php
					}
					
					$output .= '
				
			</div>
		</div><!-- youtube-preview -->
		';
		// for loop to create div's for the cta posts & pages
		for( $i=1; $i <= 10; $i++ )
		{
			$spinner = esc_html( get_post_meta( $post_id, 'cta-delay-spinner' . $i, true ) );
			$post = esc_html( get_post_meta( $post_id, 'cta-delay-post' . $i, true ) );
			$editor_switch = esc_html( get_post_meta( $post, 'videnpro_ads_editor_switch', true ) );
			$type = get_post_type( $post );			
				
			// check if spinner is set & post is set
			if( $spinner != 0 && $post != '' )
			{
				if( $type == 'videnpro_ads' && $editor_switch == 'true' )
					$content_ad = html_entity_decode( esc_html( get_post_meta( $post, 'videnpro_ads_content', true ) ) );
					
				if( $type == 'videnpro_ads' && $editor_switch == 'false' )
					$content_ad = html_entity_decode( esc_html( get_post_meta( $post, 'cta_ad_code_textarea', true ) ) );
					
				if( $type != 'videnpro_ads' )
					$content_ad = apply_filters( 'the_content', get_post_field( 'post_content', $post ) );
				
					$output .=
					'
						<div id="cta-post-content' . $i . '-' . $post_id . '" data-styles="<style>#cta-display-' . $post_id . ' { ' . esc_html( get_post_meta( $post, 'videnpro_ads_styles', true ) ) . ' } </style>" style="display:none">
						
								<i  id="close' . $i . '-' . $post_id . '" class="fa fa-times fa-' . esc_html( get_post_meta( $post_id, 'cta-close-button-spinner', true ) ) . 'x" aria-hidden="true" data-id2="' . $post_id . '"></i>
						
								' . do_shortcode($content_ad) . '
						
						
						
						</div>
					';
					
					
			}		
		}		
		// end for loop
		
		
		$output .= '
		
		
		<div id="cta-post-content-nopost-' . $post_id . '" data-styles="<style>#cta-display-' . $post_id . ' { ' . $styles . ' } </style>" style="display:none;">
		
			<i  id="close-' . $post_id . '" class="fa fa-times fa-' . esc_html( get_post_meta( $post_id, 'cta-close-button-spinner', true ) ) . 'x" aria-hidden="true" data-id2="' . $post_id . '"></i>

			' . do_shortcode( $cta_content ) . '
		
		</div>
		
		
		</div><!-- bootstrap wrapper -->
		';
		
		
	
	return $output_css . $output;
	}
	
	/* end of the html5 video shortcode ***************************************************************************/
	

	/* start of the vimeo video shortcode *************************************************************************/
	
	public function videnpro_shortode_vimeo_video( $atts, $content = null ) {
		$post_id = $atts['id'];
		$output ='';
		$output_css = '';
		$output_css =
		$check_left = null;
		$check_center = null;
		$check_right = null;
		$slider_width_value = esc_html( get_post_meta( $post_id, 'videnpro_video_width_amount', true ) );
		
		// vimeo api
		?>
		<script src="https://player.vimeo.com/api/player.js"></script>
		<?php
		
		// get styles for the mockups
		include( 'videnpro-mockup-styles.php' );
		
		// cta content; editor content or html content
		if ( esc_html( get_post_meta( $post_id, 'videnpro_cta_editor_switch_status', true ) ) === 'true' )
			$cta_content = nl2br( html_entity_decode( esc_html( get_post_meta( $post_id, 'videnpro_cta_content', true )) ) );
		else
			$cta_content = html_entity_decode( esc_html( get_post_meta( $post_id, 'cta_code_textarea', true ) ) );
		
		// original size of mockup image
		$image_size = '';
		
		// aspect ratio of mockup image
		$image_ratio = '';
		
		$image_size = getimagesize( esc_html( get_post_meta( $post_id, 'videnpro_mockup_image_link', true ) ) );
		
		$image_ratio = $image_size[0] / $image_size[1]; // width / height
		
		$uploads = wp_make_link_relative( esc_html( get_post_meta( $post_id, 'videnpro_thumbnail_image_link', true ) ) );

		$cta_display_height = $slider_width_value / $image_ratio * esc_html( get_post_meta( $post_id, 'cta-margin-top-spinner', true ) ) / 100;
		
		// get overflow-y status for css
		if ( esc_html( get_post_meta( $post_id, 'videnpro_player_overflow_y_switch_status', true ) ) === 'true' )
		{
			$overflow_y_status = 'scroll';
			$close_right = '2';
		}
		else
		{
			$overflow_y_status = 'hidden';
			$close_right = '1';
		}
		
		// close button margin left
		$margin_left = esc_html( get_post_meta( $post_id, 'cta-width-spinner', true ) ) - 25;
		
		// display logo image	
		switch( esc_html( get_post_meta( $post_id, 'videnpro_logo_position', true ) ) ) {
			
				case "none":
					$logo_style = "display: none;";
				
				break;
				
				case "top left":
					$logo_style = "display: none; padding: 15px 0px 0px 10px;";
				
				break;
				
				case "top right":
					$logo_style = "display: none; padding: 15px 10px 0px 0px; right: 0;";
				
				break;
				
				case "bottom left":
					$logo_style = "display: none; padding: 0px 0px 10px 15px; bottom: 0;";
				
				break;
				
				case "bottom right":
					$logo_style = "display: none; padding: 0px 10px 15px 0px; bottom: 0; right: 0;";
				
				break;
				
				default:

					$logo_style = "display: none;";
			
			}
		
		// styles for cta
		$styles = 
		'
				display: none;
				position: absolute;
				padding: 3px;
				width: ' . esc_html( get_post_meta( $post_id, 'cta-width-spinner', true ) ) . '%;
				height: ' . esc_html( get_post_meta( $post_id, 'cta-height-spinner', true ) ) . '%;
				top: ' . esc_html( get_post_meta( $post_id, 'cta-margin-top-spinner', true ) ) . '%;
				margin-left: ' . esc_html( get_post_meta( $post_id, 'cta-margin-left-spinner', true ) ) . '%;
				border-style: solid;
				border-width: ' . esc_html( get_post_meta( $post_id, 'cta-border-spinner', true ) ) . 'px;
				border-color: ' . esc_html( get_post_meta( $post_id, 'cta-border-color', true ) ) . ';
				border-radius: ' . esc_html( get_post_meta( $post_id, 'cta-border-radius-spinner', true ) ) . 'px;
				background-color: ' . esc_html( get_post_meta( $post_id, 'cta-background-color', true ) ) . ';
				opacity: ' . esc_html( get_post_meta( $post_id, 'cta-opacity-spinner', true ) ) . ';
				-webkit-animation-name: slide-' . $post_id . ';
				/*-webkit-animation-duration: 3s;*/
				-webkit-animation-fill-mode: forwards;
				-webkit-transform-style: preserve-3d;
				animation-name: slide-' . $post_id . ';
				/*animation-duration: 3s;*/
				animation-fill-mode: forwards;
				-webkit-box-sizing: content-box;
				-moz-box-sizing: content-box;
				box-sizing: content-box;
				overflow: hidden;
				z-index: 6;		
		';
	
		switch( esc_html( get_post_meta( $post_id, 'videnpro_align_video', true ) ) ) {		
	
		case "left":
			$check_left = 'checked';
			$output_css .=
			'
				<style>
					#youtube-preview-' . $post_id . ' {
						overflow: hidden;
						position:relative;
						max-width: ' . $slider_width_value . 'px;
						max-height: ' . $slider_width_value / $image_ratio . 'px;
						display: block;
						margin-left: 0;
						margin-right: auto;
					}
					#yt-mockub-image-' . $post_id . ' img#videnpro_youtube_mockup_preview_image {
						position: relative;
						overflow: hidden;
						width: ' . $slider_width_value . 'px;
					}	
				</style>
			';	
			break;
		case "center":
			$check_center = 'checked';
			$output_css .=
			'
				<style>
					#youtube-preview-' . $post_id . ' {
						overflow: hidden;
						position:relative;
						max-width: ' . $slider_width_value . 'px;
						max-height: ' . $slider_width_value / $image_ratio . 'px;
						display: block;
						margin-left: auto;
						margin-right: auto;
					}
					#yt-mockub-image-' . $post_id . ' img#videnpro_youtube_mockup_preview_image {
						position: relative;
						overflow: hidden;
						width: ' . $slider_width_value . 'px;
					}	
				</style>
			';	
			break;
		case "right":
			$check_right = 'checked';
			$output_css .=
			'
				<style>
					#youtube-preview-' . $post_id . ' {
						overflow: hidden;
						position:relative;
						max-width: ' . $slider_width_value . 'px;
						max-height: ' . $slider_width_value / $image_ratio . 'px;
						display: block;
						margin-right: 0;
						margin-left: auto;
					}
					#yt-mockub-image-' . $post_id . ' img#videnpro_youtube_mockup_preview_image {
						position: relative;
						overflow: hidden;
						width: ' . $slider_width_value . 'px;
					}										
				</style>
			';	
			break;						
		}
		
		$output_css .=
		'
		<style>
			#videnpro-logo-image-' . $post_id . ' {
				' . $logo_style . ';
				z-index: 5;
			}	
			#vimeo-iframe-' . $post_id . ' {
				width: 100% !important;
				height: 100% !important;
				display: none;
				position: absolute;
				z-index: 0;
			}
			#vimeo-container-' . $post_id . ' {
				width: 100% !important;
				height: 100% !important;
				position: absolute;
				display: none;
			}
			#cta-display-' . $post_id . ' {
				display: none;
				position: absolute;
				width: ' . esc_html( get_post_meta( $post_id, 'cta-width-spinner', true ) ) . '%;
				height: ' . esc_html( get_post_meta( $post_id, 'cta-height-spinner', true ) ) . '%;
				top: ' . esc_html( get_post_meta( $post_id, 'cta-margin-top-spinner', true ) ) . '%;
				margin-left: ' . esc_html( get_post_meta( $post_id, 'cta-margin-left-spinner', true ) ) . '%;
				border-style: solid;
				border-width: ' . esc_html( get_post_meta( $post_id, 'cta-border-spinner', true ) ) . 'px;
				border-color: ' . esc_html( get_post_meta( $post_id, 'cta-border-color', true ) ) . ';
				border-radius: ' . esc_html( get_post_meta( $post_id, 'cta-border-radius-spinner', true ) ) . 'px;
				background-color: ' . esc_html( get_post_meta( $post_id, 'cta-background-color', true ) ) . ';
				opacity: ' . esc_html( get_post_meta( $post_id, 'cta-opacity-spinner', true ) ) . ';
				-webkit-animation-name: slide-' . $post_id . ';
				/*-webkit-animation-duration: 3s;*/
				-webkit-animation-fill-mode: forwards;
				-webkit-transform-style: preserve-3d;
				animation-name: slide-' . $post_id . ';
				/*animation-duration: 3s;*/
				animation-fill-mode: forwards;
				-webkit-box-sizing: content-box;
				-moz-box-sizing: content-box;
				box-sizing: content-box;
				overflow: ' . $overflow_y_status . ';
				z-index: 6;
			}
			#cta-display-' . $post_id . ' i.fa.fa-times {
				display: block;
				right: ' . $close_right . '%;
				position: inherit;
				cursor: pointer;
				z-index: 7 !important;
				float: right;
			}
			#cta-display-' . $post_id . ' i {
				color: ' . esc_html( get_post_meta( $post_id, 'cta-close-button-color', true ) ) . ';
			}
			#yt-nostop-window-' . $post_id . ' {
				display: none;
				position: absolute;
				width: 100% !important;
				height: 100% !important;
				z-index: 5;
			}
			.play-button-pulse {
				
			}
			i#play-button-' . $post_id .' {
				color: ' . esc_html( get_post_meta( $post_id, 'cta-play-button-color', true ) ) . ';
				cursor: pointer;
			}
			a#cta-display-' . $post_id . ':hover {
				text-decoration: none;
				color: inherit;
			}
		</style>
		';
		
		// link to self hosted video
		$src =  esc_html( get_post_meta( $post_id, 'videnpro_self_id', true ) );
		
		
		$output =
		'
		<div class="bootstrap-wrapper">
		<div id="youtube-preview-' . $post_id . '">
			<div id="yt-mockub-image-' . $post_id . '">
				<img id="videnpro_youtube_mockup_preview_image" src="' . esc_html( get_post_meta( $post_id, 'videnpro_mockup_image_link', true ) ) . '" alt="Mockup Image" />
			</div>							
			<div class="yt-thumbnail-' . $post_id . esc_html( get_post_meta( $post_id, 'videnpro_mockup_image_name', true ) ) . '" style="background:url(' . $uploads . ') center center; border: ' . esc_html( get_post_meta( $post_id, 'video-border-spinner', true ) ) . 'px solid ' . esc_html( get_post_meta( $post_id, 'player-border', true ) ) . '"
			data-mockup-width="' . esc_html( get_post_meta( $post_id, 'videnpro_video_width_amount', true ) ) . '"
			data-close-spinner="'. esc_html( get_post_meta( $post_id, 'cta-close-button-spinner', true ) ) . '"
			data-play-spinner="' . esc_html( get_post_meta( $post_id, 'cta-play-button-spinner', true ) ) . '">
					<!--<img id="videnpro_youtube_thumbnail_image" src="' . esc_html( get_post_meta( $post_id, 'videnpro_thumbnail_image_link', true ) ) . '" alt="Video Thumbnail" />-->
					<div id="yt-nostop-window-' . $post_id . '" data-stop="' . esc_html( get_post_meta( $post_id, 'videnpro_player_nostop_switch_status', true ) ) . '"></div>
					';
					if ( esc_html( get_post_meta( $post_id, 'videnpro_cta_video_url_switch_status', true ) ) == 'true' ) {
					$output .= '
					
						<a href="' . esc_html( get_post_meta( $post_id, 'cta-link-url', true ) ) . '" target="_blank">	
							<div class="cta-display" id="cta-display-' . $post_id . '" data-bt-color="' . esc_html( get_post_meta( $post_id, 'cta-close-button-color', true ) ) . '" style="padding: 5px;">
								
							</div>
						</a>
						';
					}
					else {
					$output .= '
					
						<div class="cta-display" id="cta-display-' . $post_id . '" data-bt-color="' . esc_html( get_post_meta( $post_id, 'cta-close-button-color', true ) ) . '" style="padding: 5px;">
							
						</div>
						';
					}
					$output .= 
					'				
					
					<div class="play-button-pulse" id="play-button-pulse-' . $post_id . '" data-id="' . $post_id . '" data-imname="' . esc_html( get_post_meta( $post_id, 'videnpro_mockup_image_name', true ) ) . '" data-autoplay="' . esc_html( get_post_meta( $post_id, 'videnpro_player_autoplay_switch_status', true ) ) . '" data-control="' . esc_html( get_post_meta( $post_id, 'videnpro_player_conrols_switch_status', true ) ) . '" data-cta="' . esc_html( get_post_meta( $post_id, 'videnpro_player_call_to_action_switch_status', true ) ) . '"
						data-cta-effect="' . esc_html( get_post_meta( $post_id, 'videnpro_cta_effect', true ) ) . '" data-cta-effect-duration="' . esc_html( get_post_meta( $post_id, 'cta-effect-spinner', true ) ) . '" data-vimeo-id="' . esc_html( get_post_meta( $post_id, 'videnpro_vimeo_id', true ) ) . '"
						data-delay1="' . esc_html( get_post_meta( $post_id, 'cta-delay-spinner1', true ) ) . '" data-delay2="' . esc_html( get_post_meta( $post_id, 'cta-delay-spinner2', true ) ) . '" data-delay3="' . esc_html( get_post_meta( $post_id, 'cta-delay-spinner3', true ) ) . '" 
						data-delay4="' . esc_html( get_post_meta( $post_id, 'cta-delay-spinner4', true ) ) . '" data-delay5="' . esc_html( get_post_meta( $post_id, 'cta-delay-spinner5', true ) ) . '" data-delay6="' . esc_html( get_post_meta( $post_id, 'cta-delay-spinner6', true ) ) . '"
						data-delay7="' . esc_html( get_post_meta( $post_id, 'cta-delay-spinner7', true ) ) . '" data-delay8="' . esc_html( get_post_meta( $post_id, 'cta-delay-spinner8', true ) ) . '" data-delay9="' . esc_html( get_post_meta( $post_id, 'cta-delay-spinner9', true ) ) . '"
						data-delay10="' . esc_html( get_post_meta( $post_id, 'cta-delay-spinner10', true ) ) . '"
						data-delay-post1="' . esc_html( get_post_meta( $post_id, 'cta-delay-post1', true ) ) . '"
						data-delay-post2="' . esc_html( get_post_meta( $post_id, 'cta-delay-post2', true ) ) . '"
						data-delay-post3="' . esc_html( get_post_meta( $post_id, 'cta-delay-post3', true ) ) . '"
						data-delay-post4="' . esc_html( get_post_meta( $post_id, 'cta-delay-post4', true ) ) . '"
						data-delay-post5="' . esc_html( get_post_meta( $post_id, 'cta-delay-post5', true ) ) . '"
						data-delay-post6="' . esc_html( get_post_meta( $post_id, 'cta-delay-post6', true ) ) . '"
						data-delay-post7="' . esc_html( get_post_meta( $post_id, 'cta-delay-post7', true ) ) . '"
						data-delay-post8="' . esc_html( get_post_meta( $post_id, 'cta-delay-post8', true ) ) . '"
						data-delay-post9="' . esc_html( get_post_meta( $post_id, 'cta-delay-post9', true ) ) . '"
						data-delay-post10="' . esc_html( get_post_meta( $post_id, 'cta-delay-post10', true ) ) . '"
						data-duration1="' . esc_html( get_post_meta( $post_id, 'cta-duration-spinner1', true ) ) . '"
						data-duration2="' . esc_html( get_post_meta( $post_id, 'cta-duration-spinner2', true ) ) . '"
						data-duration3="' . esc_html( get_post_meta( $post_id, 'cta-duration-spinner3', true ) ) . '"
						data-duration4="' . esc_html( get_post_meta( $post_id, 'cta-duration-spinner4', true ) ) . '"
						data-duration5="' . esc_html( get_post_meta( $post_id, 'cta-duration-spinner5', true ) ) . '"
						data-duration6="' . esc_html( get_post_meta( $post_id, 'cta-duration-spinner6', true ) ) . '"
						data-duration7="' . esc_html( get_post_meta( $post_id, 'cta-duration-spinner7', true ) ) . '"
						data-duration8="' . esc_html( get_post_meta( $post_id, 'cta-duration-spinner8', true ) ) . '"
						data-duration9="' . esc_html( get_post_meta( $post_id, 'cta-duration-spinner9', true ) ) . '"
						data-duration10="' . esc_html( get_post_meta( $post_id, 'cta-duration-spinner10', true ) ) . '"
						data-sound1="' . esc_html( get_post_meta( $post_id, 'videnpro_sound1_link', true ) ) . '"
						data-sound2="' . esc_html( get_post_meta( $post_id, 'videnpro_sound2_link', true ) ) . '"
						data-sound3="' . esc_html( get_post_meta( $post_id, 'videnpro_sound3_link', true ) ) . '"
						data-sound4="' . esc_html( get_post_meta( $post_id, 'videnpro_sound4_link', true ) ) . '"
						data-sound5="' . esc_html( get_post_meta( $post_id, 'videnpro_sound5_link', true ) ) . '"
						data-sound6="' . esc_html( get_post_meta( $post_id, 'videnpro_sound6_link', true ) ) . '"
						data-sound7="' . esc_html( get_post_meta( $post_id, 'videnpro_sound7_link', true ) ) . '"
						data-sound8="' . esc_html( get_post_meta( $post_id, 'videnpro_sound8_link', true ) ) . '"
						data-sound9="' . esc_html( get_post_meta( $post_id, 'videnpro_sound9_link', true ) ) . '"
						data-sound10="' . esc_html( get_post_meta( $post_id, 'videnpro_sound10_link', true ) ) . '"						
						data-source="' . esc_html( get_post_meta( $post_id, 'videnpro_video_source', true ) ) . '"
						data-cta-stop="' . esc_html( get_post_meta( $post_id, 'videnpro_cta_video_stop_switch_status', true ) ) . '"
						data-fullscreen="' . esc_html( get_post_meta( $post_id, 'videnpro_fullscreen_switch_status', true ) ) . '"
						data-close-button="' . esc_html( get_post_meta( $post_id, 'videnpro_cta_show_close_switch_status', true ) ) . '"
						data-background-image="' . esc_html( get_post_meta( $post_id, 'videnpro_thumbnail_image_link', true ) ) . '"
						data-background-end-image="' . esc_html( get_post_meta( $post_id, 'videnpro_thumbnail_end_image_link', true ) ) . '"
						data-thumbnail-duration-buffer="' . esc_html( get_post_meta( $post_id, 'video-thumbnail-buffer-spinner', true ) ) . '"
						data-logo-image="' . esc_html( get_post_meta( $post_id, 'videnpro_thumbnail_logo_image_link', true ) ) . '"
						data-delay10-content="' . esc_html( get_post_meta( $post_id, 'cta-delay-10-div-to-show', true ) ) . '">

						<i id="play-button-' . $post_id . '" class="fa fa-play-circle fa-' . esc_html( get_post_meta( $post_id, 'cta-play-button-spinner', true ) ) . 'x faa-pulse animated"></i>
					</div>
					
						<iframe id="vimeo-iframe-' . $post_id . '" class="vimeo-iframe" src="https://player.vimeo.com/video/' . esc_html( get_post_meta( $post_id, 'videnpro_vimeo_id', true ) ) . '?api=1&player_id=video&title=false&byline=false&portrait=false" frameborder="0"></iframe>
						<div id="videnpro-logo-image-container-' . $post_id . '">
						<a href="' . esc_html( get_post_meta( $post_id, 'videnpro_logo_image_link', true ) ) . '" target="_blank">
							<img class="videnpro-logo-image" id="videnpro-logo-image-' . $post_id . '" src="' . esc_html( get_post_meta( $post_id, 'videnpro_thumbnail_logo_image_link', true ) ) . '" alt="Logo Image" />
						</a>
					</div>
						<div id="vimeo-container-' . $post_id . '" class="vimeo-container"></div>';
					for ( $i = 1; $i <= 10; $i++ )
					{
					?>
						<audio id="<?php echo 'cta-audio' . $i . '-' . $post_id ?>" preload="none"> 
						   <source src="" type="audio/mpeg">
						</audio>
					<?php
					}
					
					$output .= '
				
			</div>
		</div><!-- youtube-preview -->
		';
		// for loop to create div's for the cta posts & pages
		for( $i=1; $i <= 10; $i++ )
		{
			$spinner = esc_html( get_post_meta( $post_id, 'cta-delay-spinner' . $i, true ) );
			$post = esc_html( get_post_meta( $post_id, 'cta-delay-post' . $i, true ) );
			$editor_switch = esc_html( get_post_meta( $post, 'videnpro_ads_editor_switch', true ) );
			$type = get_post_type( $post );			
				
			// check if spinner is set & post is set
			if( $spinner != 0 && $post != '' )
			{
			
				if( $type == 'videnpro_ads' && $editor_switch == 'true' )
					$content_ad = html_entity_decode( esc_html( get_post_meta( $post, 'videnpro_ads_content', true ) ) );
					
				if( $type == 'videnpro_ads' && $editor_switch == 'false' )
					$content_ad = html_entity_decode( esc_html( get_post_meta( $post, 'cta_ad_code_textarea', true ) ) );
					
				if( $type != 'videnpro_ads' )
					$content_ad = apply_filters( 'the_content', get_post_field( 'post_content', $post ) );
				
					$output .=
					'
						<div id="cta-post-content' . $i . '-' . $post_id . '" data-styles="<style>#cta-display-' . $post_id . ' { ' . esc_html( get_post_meta( $post, 'videnpro_ads_styles', true ) ) . ' } </style>" style="display:none;">
						
								<i  id="vimeo-close' . $i . '-' . $post_id . '" class="fa fa-times fa-' . esc_html( get_post_meta( $post_id, 'cta-close-button-spinner', true ) ) . 'x" aria-hidden="true" data-id2="' . $post_id . '"></i>
						
								' . do_shortcode($content_ad) . '
						
						
						
						</div>
					';
					
					
			}		
		}		
		// end for loop
		
		
		$output .= '
		
		
		<div id="cta-post-content-nopost-' . $post_id . '" data-styles="<style>#cta-display-' . $post_id . ' { ' . $styles . ' } </style>" style="display:none;">
		
			<i  id="vimeo-close-' . $post_id . '" class="fa fa-times fa-' . esc_html( get_post_meta( $post_id, 'cta-close-button-spinner', true ) ) . 'x" aria-hidden="true" data-id2="' . $post_id . '"></i>

			' . do_shortcode( $cta_content ) . '
		
		</div>
		
		
		</div><!-- bootstrap wrapper -->
		';
		
		
	
	return $output_css . $output;
	}	
	
	/* start of the vimeo video shortcode *************************************************************************/
	
 
 } // end of class
 
$videoShortcodes = new Videnpro_Shortcodes();
//add_shortcode ( 'videnpro_yt', array( 'Videnpro_Shortcodes' ,'videnpro_shortode_youtube_video' ) );

//add_shortcode ( 'videnpro_self', array( 'Videnpro_Shortcodes' ,'videnpro_shortode_html5_video' ) );