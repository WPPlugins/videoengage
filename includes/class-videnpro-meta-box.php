<?php
/*
 * @since      1.0.0
 * @package    Videnpro
 * @subpackage Videnpro/includes
 * @author     Ralf Pareigis <ralf.pareigis@vertrieb-im-netz.de>
 */
 
 class Videnpro_Meta_Box {
 
	/**
	 * The meta box for the branding custom post type
	 *
	 * @since    1.0.0
	 */
	 
	public function videnpro_add_branding_meta_box() {
		add_meta_box(
			'videnpro_branding_editor',
			__( 'Branding', 'videnpro' ),
			array( $this, 'videnpro_branding_editor' ),
			'branding',
			'advanced',
			'high'
		);
	}
	
	public function videnpro_branding_save( $post_id ) {
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
		return;
		
		if ( ! isset( $_POST['videnpro_meta_box_nonce'] ) ) {
			return;
		}
		
		if ( ! wp_verify_nonce( $_POST['videnpro_meta_box_nonce'], 'videnpro_save_meta_box_data' ) ) {
			return;
		}
			
		if ( 'branding' == $_POST['post_type'] ) {
			if ( !current_user_can( 'edit_page', $post_id ) || !current_user_can( 'edit_post', $post_id ) ) {
				return;
				}
		}
		
		
		if( isset( $_POST['videnpro_youtube_id']) ) {
			update_post_meta( $post_id, 'videnpro_youtube_id', $_POST['videnpro_youtube_id'] );
			}
			
		if( isset( $_POST['videnpro_vimeo_id']) ) {
			update_post_meta( $post_id, 'videnpro_vimeo_id', $_POST['videnpro_vimeo_id'] );
			}
		
		if( isset( $_POST['videnpro_mockup_image_link']) ) {
			update_post_meta( $post_id, 'videnpro_mockup_image_link', $_POST['videnpro_mockup_image_link'] );
			}
			
		if( isset( $_POST['videnpro_mockup_image_name']) ) {
			update_post_meta( $post_id, 'videnpro_mockup_image_name', $_POST['videnpro_mockup_image_name'] );
			}
			
		if( isset( $_POST['videnpro_thumbnail_image_link']) ) {
			update_post_meta( $post_id, 'videnpro_thumbnail_image_link', $_POST['videnpro_thumbnail_image_link'] );
			}
			
		if( isset( $_POST['videnpro_thumbnail_end_image_link']) ) {
			update_post_meta( $post_id, 'videnpro_thumbnail_end_image_link', $_POST['videnpro_thumbnail_end_image_link'] );
			}
			
		if( isset( $_POST['videnpro_thumbnail_logo_image_link']) ) {
			update_post_meta( $post_id, 'videnpro_thumbnail_logo_image_link', $_POST['videnpro_thumbnail_logo_image_link'] );
			}
        
        if( isset( $_POST['videnpro_secure_url']) ) {
			update_post_meta( $post_id, 'videnpro_secure_url', $_POST['videnpro_secure_url'] );
			}        
			
		if( isset( $_POST['videnpro_sound1_link']) ) {
			update_post_meta( $post_id, 'videnpro_sound1_link', $_POST['videnpro_sound1_link'] );
			}

		if( isset( $_POST['videnpro_sound2_link']) ) {
			update_post_meta( $post_id, 'videnpro_sound2_link', $_POST['videnpro_sound2_link'] );
			}
			
		if( isset( $_POST['videnpro_sound3_link']) ) {
			update_post_meta( $post_id, 'videnpro_sound3_link', $_POST['videnpro_sound3_link'] );
			}
			
		if( isset( $_POST['videnpro_sound4_link']) ) {
			update_post_meta( $post_id, 'videnpro_sound4_link', $_POST['videnpro_sound4_link'] );
			}
			
		if( isset( $_POST['videnpro_sound5_link']) ) {
			update_post_meta( $post_id, 'videnpro_sound5_link', $_POST['videnpro_sound5_link'] );
			}
			
		if( isset( $_POST['videnpro_sound6_link']) ) {
			update_post_meta( $post_id, 'videnpro_sound6_link', $_POST['videnpro_sound6_link'] );
			}
			
		if( isset( $_POST['videnpro_sound7_link']) ) {
			update_post_meta( $post_id, 'videnpro_sound7_link', $_POST['videnpro_sound7_link'] );
			}
			
		if( isset( $_POST['videnpro_sound8_link']) ) {
			update_post_meta( $post_id, 'videnpro_sound8_link', $_POST['videnpro_sound8_link'] );
			}
			
		if( isset( $_POST['videnpro_sound9_link']) ) {
			update_post_meta( $post_id, 'videnpro_sound9_link', $_POST['videnpro_sound9_link'] );
			}
			
		if( isset( $_POST['videnpro_sound10_link']) ) {
			update_post_meta( $post_id, 'videnpro_sound10_link', $_POST['videnpro_sound10_link'] );
			}

		if( isset( $_POST['videnpro_video_width_amount']) ) {
			update_post_meta( $post_id, 'videnpro_video_width_amount', $_POST['videnpro_video_width_amount'] );
			}

		if( isset( $_POST['videnpro_self_id']) ) {
			update_post_meta( $post_id, 'videnpro_self_id', $_POST['videnpro_self_id'] );
			}	

		if( isset( $_POST['videnpro_cta_content']) ) {
			update_post_meta( $post_id, 'videnpro_cta_content', $_POST['videnpro_cta_content'] );
			}

		if( isset( $_POST['cta_code_textarea']) ) {
			update_post_meta( $post_id, 'cta_code_textarea', $_POST['cta_code_textarea'] );
			}
			
		if( isset( $_POST['cta-preview-width']) ) {
			update_post_meta( $post_id, 'cta-preview-width', $_POST['cta-preview-width'] );
			}
			
		if( isset( $_POST['cta-preview-height']) ) {
			update_post_meta( $post_id, 'cta-preview-height', $_POST['cta-preview-height'] );
			}
			
		if( isset( $_POST['player-border']) ) {
			update_post_meta( $post_id, 'player-border', $_POST['player-border'] );
			}
			
		if( isset( $_POST['videnpro_logo_image_link']) ) {
			update_post_meta( $post_id, 'videnpro_logo_image_link', $_POST['videnpro_logo_image_link'] );
			}			

		// Speichern des Radio Button, nur angehakter Radio Button wird gesetzt (isset)
		if( isset( $_POST['videnpro_align_video']) ) {
				update_post_meta( $post_id, 'videnpro_align_video', $_POST['videnpro_align_video'] );
			} else
			{
				update_post_meta( $post_id, 'videnpro_align_video', null );
			}			
		
		// Speichern des Radio Button, nur angehakter Radio Button wird gesetzt (isset)
		if( isset( $_POST['videnpro_video_source']) ) {
				update_post_meta( $post_id, 'videnpro_video_source', $_POST['videnpro_video_source'] );
			} else
			{
				update_post_meta( $post_id, 'videnpro_video_source', null );
			}

		if( isset( $_POST['videnpro_cta_effect']) ) {
				update_post_meta( $post_id, 'videnpro_cta_effect', $_POST['videnpro_cta_effect'] );
			} else
			{
				update_post_meta( $post_id, 'videnpro_cta_effect', null );
			}

		if( isset( $_POST['videnpro_logo_position']) ) {
				update_post_meta( $post_id, 'videnpro_logo_position', $_POST['videnpro_logo_position'] );
			} else
			{
				update_post_meta( $post_id, 'videnpro_logo_position', null );
			}

		/*******************************************************************************/
			
		if( isset( $_POST['videnpro_player_conrols_switch_status']) ) {
			update_post_meta( $post_id, 'videnpro_player_conrols_switch_status', $_POST['videnpro_player_conrols_switch_status'] );
			}

		if( isset( $_POST['videnpro_player_autoplay_switch_status']) ) {
			update_post_meta( $post_id, 'videnpro_player_autoplay_switch_status', $_POST['videnpro_player_autoplay_switch_status'] );
			}

		if( isset( $_POST['videnpro_player_call_to_action_switch_status']) ) {
			update_post_meta( $post_id, 'videnpro_player_call_to_action_switch_status', $_POST['videnpro_player_call_to_action_switch_status'] );
			}

		if( isset( $_POST['videnpro_player_nostop_switch_status']) ) {
			update_post_meta( $post_id, 'videnpro_player_nostop_switch_status', $_POST['videnpro_player_nostop_switch_status'] );
			}
			
		if( isset( $_POST['videnpro_cta_video_stop_switch_status']) ) {
			update_post_meta( $post_id, 'videnpro_cta_video_stop_switch_status', $_POST['videnpro_cta_video_stop_switch_status'] );
			}
			
		if( isset( $_POST['videnpro_cta_video_url_switch_status']) ) {
			update_post_meta( $post_id, 'videnpro_cta_video_url_switch_status', $_POST['videnpro_cta_video_url_switch_status'] );
			}
			
		if( isset( $_POST['videnpro_cta_editor_switch_status']) ) {
			update_post_meta( $post_id, 'videnpro_cta_editor_switch_status', $_POST['videnpro_cta_editor_switch_status'] );
			}

		if( isset( $_POST['videnpro_cta_save_switch_status']) ) {
			update_post_meta( $post_id, 'videnpro_cta_save_switch_status', $_POST['videnpro_cta_save_switch_status'] );
			}
			
		if( isset( $_POST['videnpro_cta_show_close_switch_status']) ) {
			update_post_meta( $post_id, 'videnpro_cta_show_close_switch_status', $_POST['videnpro_cta_show_close_switch_status'] );
			}	
			
		if( isset( $_POST['videnpro_player_overflow_y_switch_status']) ) {
			update_post_meta( $post_id, 'videnpro_player_overflow_y_switch_status', $_POST['videnpro_player_overflow_y_switch_status'] );
			}
			
		if( isset( $_POST['videnpro_cta_video_stop_switch_status']) ) {
			update_post_meta( $post_id, 'videnpro_cta_video_stop_switch_status', $_POST['videnpro_cta_video_stop_switch_status'] );
			}
			
		if( isset( $_POST['videnpro_fullscreen_switch_status']) ) {
			update_post_meta( $post_id, 'videnpro_fullscreen_switch_status', $_POST['videnpro_fullscreen_switch_status'] );
			}
        
        if( isset( $_POST['videnpro_video_secure_switch_status']) ) {
			update_post_meta( $post_id, 'videnpro_video_secure_switch_status', $_POST['videnpro_video_secure_switch_status'] );
			}

		// cta spinner & color values
		if( isset( $_POST['cta-link-url']) ) {
			update_post_meta( $post_id, 'cta-link-url', $_POST['cta-link-url'] );
			}
			
		if( isset( $_POST['cta-filename']) ) {
			update_post_meta( $post_id, 'cta-filename', $_POST['cta-filename'] );
			}
			
		if( isset( $_POST['video-thumbnail-buffer-spinner']) ) {
			update_post_meta( $post_id, 'video-thumbnail-buffer-spinner', $_POST['video-thumbnail-buffer-spinner'] );
			}
			
		if( isset( $_POST['cta-width-spinner']) ) {
			update_post_meta( $post_id, 'cta-width-spinner', $_POST['cta-width-spinner'] );
			}		
			
		if( isset( $_POST['video-border-spinner']) ) {
			update_post_meta( $post_id, 'video-border-spinner', $_POST['video-border-spinner'] );
			}
			
		if( isset( $_POST['cta-height-spinner']) ) {
			update_post_meta( $post_id, 'cta-height-spinner', $_POST['cta-height-spinner'] );
			}
		/*	
		if( isset( $_POST['cta-padding-spinner']) ) {
			update_post_meta( $post_id, 'cta-padding-spinner', $_POST['cta-padding-spinner'] );
			}
		*/	
		if( isset( $_POST['cta-margin-top-spinner']) ) {
			update_post_meta( $post_id, 'cta-margin-top-spinner', $_POST['cta-margin-top-spinner'] );
			}
			
		if( isset( $_POST['cta-margin-left-spinner']) ) {
			update_post_meta( $post_id, 'cta-margin-left-spinner', $_POST['cta-margin-left-spinner'] );
			}
			
		if( isset( $_POST['cta-opacity-spinner']) ) {
			update_post_meta( $post_id, 'cta-opacity-spinner', $_POST['cta-opacity-spinner'] );
			}
			
		if( isset( $_POST['cta-background-color']) ) {
			update_post_meta( $post_id, 'cta-background-color', $_POST['cta-background-color'] );
			}
			
		if( isset( $_POST['cta-border-spinner']) ) {
			update_post_meta( $post_id, 'cta-border-spinner', $_POST['cta-border-spinner'] );
			}
			
		if( isset( $_POST['cta-border-radius-spinner']) ) {
			update_post_meta( $post_id, 'cta-border-radius-spinner', $_POST['cta-border-radius-spinner'] );
			}
			
		if( isset( $_POST['video-width-trim-spinner']) ) {
			update_post_meta( $post_id, 'video-width-trim-spinner', $_POST['video-width-trim-spinner'] );
			}
			
		if( isset( $_POST['video-height-trim-spinner']) ) {
			update_post_meta( $post_id, 'video-height-trim-spinner', $_POST['video-height-trim-spinner'] );
			}			
			
		if( isset( $_POST['video-left-trim-spinner']) ) {
			update_post_meta( $post_id, 'video-left-trim-spinner', $_POST['video-left-trim-spinner'] );
			}
			
		if( isset( $_POST['video-top-trim-spinner']) ) {
			update_post_meta( $post_id, 'video-top-trim-spinner', $_POST['video-top-trim-spinner'] );
			}			
			
		if( isset( $_POST['cta-border-color']) ) {
			update_post_meta( $post_id, 'cta-border-color', $_POST['cta-border-color'] );
			}
			
		if( isset( $_POST['cta-close-button-color']) ) {
			update_post_meta( $post_id, 'cta-close-button-color', $_POST['cta-close-button-color'] );
			}
			
		if( isset( $_POST['cta-close-button-spinner']) ) {
			update_post_meta( $post_id, 'cta-close-button-spinner', $_POST['cta-close-button-spinner'] );
			}
			
		if( isset( $_POST['cta-play-button-color']) ) {
			update_post_meta( $post_id, 'cta-play-button-color', $_POST['cta-play-button-color'] );
			}
			
		if( isset( $_POST['cta-play-button-spinner']) ) {
			update_post_meta( $post_id, 'cta-play-button-spinner', $_POST['cta-play-button-spinner'] );
			}
			
		if( isset( $_POST['cta-delay-spinner1']) ) {
			update_post_meta( $post_id, 'cta-delay-spinner1', $_POST['cta-delay-spinner1'] );
			}
			
		if( isset( $_POST['cta-delay-spinner2']) ) {
			update_post_meta( $post_id, 'cta-delay-spinner2', $_POST['cta-delay-spinner2'] );
			}
			
		if( isset( $_POST['cta-delay-spinner3']) ) {
			update_post_meta( $post_id, 'cta-delay-spinner3', $_POST['cta-delay-spinner3'] );
			}
			
		if( isset( $_POST['cta-delay-spinner4']) ) {
			update_post_meta( $post_id, 'cta-delay-spinner4', $_POST['cta-delay-spinner4'] );
			}
			
		if( isset( $_POST['cta-delay-spinner5']) ) {
			update_post_meta( $post_id, 'cta-delay-spinner5', $_POST['cta-delay-spinner5'] );
			}
			
		if( isset( $_POST['cta-delay-spinner6']) ) {
			update_post_meta( $post_id, 'cta-delay-spinner6', $_POST['cta-delay-spinner6'] );
			}
			
		if( isset( $_POST['cta-delay-spinner7']) ) {
			update_post_meta( $post_id, 'cta-delay-spinner7', $_POST['cta-delay-spinner7'] );
			}
			
		if( isset( $_POST['cta-delay-spinner8']) ) {
			update_post_meta( $post_id, 'cta-delay-spinner8', $_POST['cta-delay-spinner8'] );
			}
			
		if( isset( $_POST['cta-delay-spinner9']) ) {
			update_post_meta( $post_id, 'cta-delay-spinner9', $_POST['cta-delay-spinner9'] );
			}
			
		if( isset( $_POST['cta-delay-spinner10']) ) {
			update_post_meta( $post_id, 'cta-delay-spinner10', $_POST['cta-delay-spinner10'] );
			}
			
		if( isset( $_POST['cta-duration-spinner1']) ) {
			update_post_meta( $post_id, 'cta-duration-spinner1', $_POST['cta-duration-spinner1'] );
			}
			
		if( isset( $_POST['cta-duration-spinner2']) ) {
			update_post_meta( $post_id, 'cta-duration-spinner2', $_POST['cta-duration-spinner2'] );
			}
			
		if( isset( $_POST['cta-duration-spinner3']) ) {
			update_post_meta( $post_id, 'cta-duration-spinner3', $_POST['cta-duration-spinner3'] );
			}
			
		if( isset( $_POST['cta-duration-spinner4']) ) {
			update_post_meta( $post_id, 'cta-duration-spinner4', $_POST['cta-duration-spinner4'] );
			}
			
		if( isset( $_POST['cta-duration-spinner5']) ) {
			update_post_meta( $post_id, 'cta-duration-spinner5', $_POST['cta-duration-spinner5'] );
			}
			
		if( isset( $_POST['cta-duration-spinner6']) ) {
			update_post_meta( $post_id, 'cta-duration-spinner6', $_POST['cta-duration-spinner6'] );
			}
			
		if( isset( $_POST['cta-duration-spinner7']) ) {
			update_post_meta( $post_id, 'cta-duration-spinner7', $_POST['cta-duration-spinner7'] );
			}
			
		if( isset( $_POST['cta-duration-spinner8']) ) {
			update_post_meta( $post_id, 'cta-duration-spinner8', $_POST['cta-duration-spinner8'] );
			}
			
		if( isset( $_POST['cta-duration-spinner9']) ) {
			update_post_meta( $post_id, 'cta-duration-spinner9', $_POST['cta-duration-spinner9'] );
			}
			
		if( isset( $_POST['cta-duration-spinner10']) ) {
			update_post_meta( $post_id, 'cta-duration-spinner10', $_POST['cta-duration-spinner10'] );
			}
			
		if( isset( $_POST['cta-effect-spinner']) ) {
			update_post_meta( $post_id, 'cta-effect-spinner', $_POST['cta-effect-spinner'] );
			}
			
		if( isset( $_POST['videnpro_cta_shortcode']) ) {
			update_post_meta( $post_id, 'videnpro_cta_shortcode', $_POST['videnpro_cta_shortcode'] );
			}	

		if( isset( $_POST['cta-delay-post1']) ) {
			update_post_meta( $post_id, 'cta-delay-post1', $_POST['cta-delay-post1'] );
			}	
			
		if( isset( $_POST['cta-delay-post2']) ) {
			update_post_meta( $post_id, 'cta-delay-post2', $_POST['cta-delay-post2'] );
			}	
			
		if( isset( $_POST['cta-delay-post3']) ) {
			update_post_meta( $post_id, 'cta-delay-post3', $_POST['cta-delay-post3'] );
			}

		if( isset( $_POST['cta-delay-post4']) ) {
			update_post_meta( $post_id, 'cta-delay-post4', $_POST['cta-delay-post4'] );
			}
			
		if( isset( $_POST['cta-delay-post5']) ) {
			update_post_meta( $post_id, 'cta-delay-post5', $_POST['cta-delay-post5'] );
			}
			
		if( isset( $_POST['cta-delay-post6']) ) {
			update_post_meta( $post_id, 'cta-delay-post6', $_POST['cta-delay-post6'] );
			}
			
		if( isset( $_POST['cta-delay-post7']) ) {
			update_post_meta( $post_id, 'cta-delay-post7', $_POST['cta-delay-post7'] );
			}
			
		if( isset( $_POST['cta-delay-post8']) ) {
			update_post_meta( $post_id, 'cta-delay-post8', $_POST['cta-delay-post8'] );
			}
			
		if( isset( $_POST['cta-delay-post9']) ) {
			update_post_meta( $post_id, 'cta-delay-post9', $_POST['cta-delay-post9'] );
			}
			
		if( isset( $_POST['cta-delay-post10']) ) {
			update_post_meta( $post_id, 'cta-delay-post10', $_POST['cta-delay-post10'] );
			}
			
		if( isset( $_POST['cta-delay-10-div-to-show']) ) {
			update_post_meta( $post_id, 'cta-delay-10-div-to-show', $_POST['cta-delay-10-div-to-show'] );
			}
        
        // switch for secure video link is set to on; loop through post type ids and write htaccess
            $upload_dir = wp_upload_dir(); // get uploads folder
            $file = $upload_dir['basedir'] . '/.htaccess';
            $open = fopen( $file, 'w');
            fwrite( $open, 'RewriteEngine on' . "\n");
            fwrite( $open, 'RewriteBase /' . "\n");
            fwrite( $open, "\n");
            $the_query = new WP_Query("post_type=branding&posts_per_page=-1&field=ids");
            if ($the_query->have_posts()) {
              while ($the_query->have_posts()){
                  $the_query->the_post();
                  $id = get_the_ID();
                  $path_parts = pathinfo( esc_html( get_post_meta( $id, 'videnpro_self_id', true ) ) );
                  $basename = $path_parts['basename'];
                  $dirname = get_site_url();
                  if ( esc_html( get_post_meta( $id, 'videnpro_video_secure_switch_status', true ) ) === 'true' ) {
                      fwrite( $open, 'RewriteCond %{REQUEST_FILENAME} ^.*' . $basename . '$' . "\n" );
                      fwrite( $open, 'RewriteCond %{HTTP_COOKIE} !^.*wordpress_logged_in.*$ [NC]' . "\n");
                      fwrite( $open, 'RewriteCond %{HTTP_REFERER} !^' . $dirname . '/ [NC]' . "\n" );
                      if ( esc_html( get_post_meta( $id, 'videnpro_secure_url', true ) ) !='' )
                      {
                        fwrite( $open, 'RewriteRule ^.*$ ' . esc_html( get_post_meta( $id, 'videnpro_secure_url', true ) ) . ' [L,R=301]' . "\n" );
                      }
                      else
                      {
                        fwrite( $open, 'RewriteRule ^.*$ /index.php [L,R=301]' . "\n" );
                      }
                      fwrite( $open, "\n");
                      //echo get_the_ID();
                  }
              }
            }
            fclose( $open );
			
		// switch for saving cta s post is set / not saving the switch status
		if ( esc_html( get_post_meta( $post_id, 'videnpro_cta_save_switch_status', true ) ) === 'true' ) {
		
			// only one time saving
			update_post_meta( $post_id, 'videnpro_cta_save_switch_status', 'false' );

		
			// styles of cta
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
						border-radius: ' . esc_html( get_post_meta( $post_id, 'cta-border-radius-spinner', true ) ) . 'px;
						border-color: ' . esc_html( get_post_meta( $post_id, 'cta-border-color', true ) ) . ';
						background-color: ' . esc_html( get_post_meta( $post_id, 'cta-background-color', true ) ) . ';
						opacity: ' . esc_html( get_post_meta( $post_id, 'cta-opacity-spinner', true ) ) . ';
						z-index: 6;
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
					
			';
			
			$content= html_entity_decode( esc_html( get_post_meta( $post_id, 'videnpro_cta_content', true )) );
			$content_html = html_entity_decode( esc_html( get_post_meta( $post_id, 'cta_code_textarea', true )) );
			
			// save if editor or html is used during save process
			$post_editor_switch = esc_html( get_post_meta( $post_id, 'videnpro_cta_editor_switch_status', true ) );
			
				global $user_ID;

				$new_post = array(
				'post_title' => esc_html( get_post_meta( $post_id, 'cta-filename', true )) . ' - ' . get_the_title( $post_id ) . ' ( ID=' . $post_id . ' ) ',
				'post_status' => 'publish',
				'post_date' => date('Y-m-d H:i:s'),
				'post_author' => $user_ID,
				'post_type' => 'videnpro_ads',
				'post_parent' => $post_id,				
				'post_category' => array(0)
				);
				
				remove_action( 'save_post', array( $this, 'videnpro_branding_save' ) );
				
				$post_id = wp_insert_post($new_post);
				
				update_post_meta( $post_id, 'videnpro_ads_styles', $styles );
				
				update_post_meta( $post_id, 'videnpro_ads_content', $content );
				
				update_post_meta( $post_id, 'cta_ad_code_textarea', $content_html );
				
				update_post_meta( $post_id, 'videnpro_ads_editor_switch', $post_editor_switch );				
				
				add_action( 'save_post', array( $this, 'videnpro_branding_save' ) );
					
		}			
			
		// end of saving routine for cta	
	}
		

	
	public function videnpro_branding_editor( $post ) {

		?>
		<script src="https://www.youtube.com/iframe_api"></script>
		
		<?php
		
		$settings = array( 'editor_height' => 200, 'textarea_rows' => 20, 'editor_class' => 'cta-content-css', 'wpautop' => true );
	
		wp_editor( html_entity_decode( esc_html( get_post_meta( $post->ID, 'videnpro_cta_content', true )) ), 'videnpro_cta_content', $settings );
	
		$output = '';
		
		$preview_modal = '';
		
		$output_css = '';
		
		$output_js = '';
		
		$cta_content_shortcode = '';
		
		// original size of mockup image
		$image_size = '';
		
		// aspect ratio of mockup image
		$image_ratio = '';
		
		if ( esc_html( get_post_meta( $post->ID, 'videnpro_mockup_image_link', true ) ) != '' )
			$image_size = getimagesize( esc_html( get_post_meta( $post->ID, 'videnpro_mockup_image_link', true ) ) );
		
		if ( $image_size[1] != 0 )
			$image_ratio = $image_size[0] / $image_size[1]; // width / height
		else
			$image_ratio = 1; // prevent for division by zero in css
		
		// check if slider width value is empty; if so then set to 250
		$video_width = esc_html( get_post_meta( $post->ID, 'videnpro_video_width_amount', true ) );
		if ( $video_width == 0 || $video_width == '' )
			{ $slider_width_value = '300'; }
			else 
			{ $slider_width_value = esc_html( get_post_meta( $post->ID, 'videnpro_video_width_amount', true ) ); }
			
		// initial top & height percentage value of mockups
		$mockup_name = esc_html( get_post_meta( $post->ID, 'videnpro_mockup_image_name', true ) );
		
		if ( $image_ratio * esc_html( get_post_meta( $post->ID, 'cta-margin-top-spinner', true ) ) != 0 )
			$cta_display_height = $slider_width_value / $image_ratio * esc_html( get_post_meta( $post->ID, 'cta-margin-top-spinner', true ) ) / 100;

		switch ( $mockup_name ) {

			case "_samsungw":
				$mockup_top_percent = -50;
				$mockup_height_percent = 40;
				break;

		}
		
		// modal width; width of mockup plus 20%
		$modal_width = $slider_width_value + $slider_width_value * 0.2;
			
	
		wp_nonce_field( 'videnpro_save_meta_box_data', 'videnpro_meta_box_nonce' );
		
		// link to youtube video
		$src = "https://www.youtube.com/embed/" . esc_html( get_post_meta( $post->ID, 'videnpro_youtube_id', true ) );
		
		//link to self hosted video
		$src_self_hosted = esc_html( get_post_meta( $post->ID, 'videnpro_self_id', true ) );
		
		// get mockup icons and store in $images array for preview_modal
		$iconspath = WP_PLUGIN_DIR . '/videoengage/admin/img/mockups/icons/';
		$files = scandir( $iconspath ); 
		$total = count($files); 
		$images = array(); 
		/*
		for($x = 0; $x <= $total; $x++): 
			// last three digits to look, if it is a png
			$trunc = substr( $files[$x], -3 );
			
			if ( $trunc == 'png' ) 
				{ 
					$images[] = $files[$x]; 
					
				} 
			endfor;
		*/
		foreach ($files as $file) {
			$extension = pathinfo($file, PATHINFO_EXTENSION);
			if ($extension == 'png') {
				$images[] = $file; 
			}
		}
		
		// cta content; editor content or html content
		if ( esc_html( get_post_meta( $post->ID, 'videnpro_cta_editor_switch_status', true ) ) === 'true' )
			$cta_content = nl2br( html_entity_decode( esc_html( get_post_meta( $post->ID, 'videnpro_cta_content', true )) ) );
		else
			$cta_content = html_entity_decode( esc_html( get_post_meta( $post->ID, 'cta_code_textarea', true ) ) );
			
		
		// logo position & styles
		$logo_position_none = null;
		$logo_position_top_left = null;
		$logo_position_top_right = null;
		$logo_position_bottom_left = null;
		$logo_position_bottom_right = null;
		
		switch( esc_html( get_post_meta( $post->ID, 'videnpro_logo_position', true ) ) ) {
		
			case "none":
				$logo_position_none = "selected";
				$logo_style = "display: none;";
			
			break;
			
			case "top left":
				$logo_position_top_left = "selected";	
				$logo_style = "padding: 15px 0px 0px 10px;";
			
			break;
			
			case "top right":
				$logo_position_top_right = "selected";
				$logo_style = "padding: 15px 10px 0px 0px; right: 0;";
			
			break;
			
			case "bottom left":
				$logo_position_bottom_left = "selected";
				$logo_style = "padding: 0px 0px 10px 15px; bottom: 0;";
			
			break;
			
			case "bottom right":
				$logo_position_bottom_right = "selected";
				$logo_style = "padding: 0px 10px 15px 0px; bottom: 0; right: 0;";
			
			break;
			
			default:

				$logo_position_none = "selected";
				$logo_style = "display: none;";
		
		}
		
		
		
		// close button margin left
		$margin_left = esc_html( get_post_meta( $post->ID, 'cta-width-spinner', true ) ) - esc_html( get_post_meta( $post->ID, 'cta-close-button-spinner', true ) ) * 13;
		
		//print_r( $total );

		$preview_modal = 
		'
		<div class="bootstrap-wrapper">
			<!-- Modal -->
			<div class="modal fade" id="MockupPreviewModal" tabindex="-1" role="dialog" aria-labelledby="MockupPreviewModalLabel">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="MockupPreviewModalLabel">' . __( 'Chose your Mockup', 'videnpro' ) . '</h4>
				  </div>
				  <div class="modal-body">
				  <div id="mockup_preview_list">';
					
					foreach ( $images as $image ) {
						$preview_modal .= '
							
								<li data-link="' . trailingslashit( plugins_url() ) . '//videoengage/admin/img/mockups/icons/' . $image . '" data-name="' . $name_of_mockup = substr( $image, 0, strlen( $image ) - 4 ) . '">
									<img src="' . trailingslashit( plugins_url() ) . '//videoengage/admin/img/mockups/icons/' . $image . '" />
								</li>
							
						';
					}
					
				$preview_modal .=	
					
				  '</div>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">' . __( 'Close', 'videnpro' ) . '</button>
					
				  </div>
				</div>
			  </div>
			</div>
		</div>
		';
		
		$youtube_modal =
		'
		<div class="bootstrap-wrapper">
			<!-- Modal -->
			<div class="modal fade" id="YouTubePreviewModal" tabindex="-1" role="dialog" aria-labelledby="YouTubePreviewModalLabel">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="YouTubePreviewModalLabel">' . __( 'Video Preview', 'videnpro' ) . '</h4>
				  </div>
				  <div class="modal-body">
						' . __( 'Current Time in Seconds: ', 'videnpro' ) . '<div id="yt-video-current-time"></div>
						' . __( ' Video Duration: ', 'videnpro' ) . '<div id="yt-video-duration-time"></div>
						<br>
					
					
				
						<div id="youtube-preview-' . $post->ID . '">
							<div class="yt-mockub-image">
								<img id="videnpro_youtube_mockup_preview_image" src="' . esc_html( get_post_meta( $post->ID, 'videnpro_mockup_image_link', true ) ) . '" alt="Mockup Image" />
							</div>						
							<div class="yt-thumbnail' . esc_html( get_post_meta( $post->ID, 'videnpro_mockup_image_name', true ) ) . '" style="background:url(' . wp_make_link_relative( esc_html( get_post_meta( $post->ID, 'videnpro_thumbnail_image_link', true ) ) ) . ') center center; border: ' . esc_html( get_post_meta( $post->ID, 'video-border-spinner', true ) ) . 'px solid ' . esc_html( get_post_meta( $post->ID, 'player-border', true ) ) . '">
									<div id="yt-nostop-window" data-stop="' . esc_html( get_post_meta( $post->ID, 'videnpro_player_nostop_switch_status', true ) ) . '"></div>
									';
									
									if ( esc_html( get_post_meta( $post->ID, 'videnpro_cta_video_url_switch_status', true ) ) == 'true' ) {
										$youtube_modal .=
										'
										<a href="' . esc_html( get_post_meta( $post->ID, 'cta-link-url', true ) ) . '" target="_blank">	
											<div class="cta-display" id="cta-display-' . $post->ID . '" data-cta="' . esc_html( get_post_meta( $post->ID, 'videnpro_player_call_to_action_switch_status', true ) ) . '" data-control="' . esc_html( get_post_meta( $post->ID, 'videnpro_player_conrols_switch_status', true ) ) . '" data-stop="' . esc_html( get_post_meta( $post->ID, 'videnpro_player_nostop_switch_status', true ) ) . '" style="padding: 5px;">
													
											</div>
										</a>
										';
										}
										else {
										$youtube_modal .=
										'
										<div class="cta-display" id="cta-display-' . $post->ID . '" data-cta="' . esc_html( get_post_meta( $post->ID, 'videnpro_player_call_to_action_switch_status', true ) ) . '" data-control="' . esc_html( get_post_meta( $post->ID, 'videnpro_player_conrols_switch_status', true ) ) . '" data-stop="' . esc_html( get_post_meta( $post->ID, 'videnpro_player_nostop_switch_status', true ) ) . '" style="padding: 5px;">
														
													
										</div>
										';
										}
										$youtube_modal .=
										'
										
									<div class="play-button-pulse" data-id="' . $post->ID . '" data-cta-effect="' . esc_html( get_post_meta( $post->ID, 'videnpro_cta_effect', true ) ) . '" data-cta-effect-duration="' . esc_html( get_post_meta( $post->ID, 'cta-effect-spinner', true ) ) . '"
									data-source="' . esc_html( get_post_meta( $post->ID, 'videnpro_video_source', true ) ) . '" data-imname="' . esc_html( get_post_meta( $post->ID, 'videnpro_mockup_image_name', true ) ) . '"
									data-delay1="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner1', true ) ) . '" data-delay2="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner2', true ) ) . '" data-delay3="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner3', true ) ) . '" data-autoplay="' . esc_html( get_post_meta( $post->ID, 'videnpro_player_autoplay_switch_status', true ) ) . '"
									data-delay4="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner4', true ) ) . '" data-delay5="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner5', true ) ) . '" data-delay6="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner6', true ) ) . '"
									data-delay7="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner7', true ) ) . '" data-delay8="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner8', true ) ) . '" data-delay9="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner9', true ) ) . '" 
									data-delay10="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner10', true ) ) . '"
									data-delay-post1="' . esc_html( get_post_meta( $post->ID, 'cta-delay-post1', true ) ) . '"
									data-delay-post2="' . esc_html( get_post_meta( $post->ID, 'cta-delay-post2', true ) ) . '"
									data-delay-post3="' . esc_html( get_post_meta( $post->ID, 'cta-delay-post3', true ) ) . '"
									data-delay-post4="' . esc_html( get_post_meta( $post->ID, 'cta-delay-post4', true ) ) . '"
									data-delay-post5="' . esc_html( get_post_meta( $post->ID, 'cta-delay-post5', true ) ) . '"
									data-delay-post6="' . esc_html( get_post_meta( $post->ID, 'cta-delay-post6', true ) ) . '"
									data-delay-post7="' . esc_html( get_post_meta( $post->ID, 'cta-delay-post7', true ) ) . '"
									data-delay-post8="' . esc_html( get_post_meta( $post->ID, 'cta-delay-post8', true ) ) . '"
									data-delay-post9="' . esc_html( get_post_meta( $post->ID, 'cta-delay-post9', true ) ) . '"
									data-delay-post10="' . esc_html( get_post_meta( $post->ID, 'cta-delay-post10', true ) ) . '"
									data-duration1="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner1', true ) ) . '"
									data-duration2="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner2', true ) ) . '"
									data-duration3="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner3', true ) ) . '"
									data-duration4="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner4', true ) ) . '"
									data-duration5="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner5', true ) ) . '"
									data-duration6="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner6', true ) ) . '"
									data-duration7="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner7', true ) ) . '"
									data-duration8="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner8', true ) ) . '"
									data-duration9="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner9', true ) ) . '"
									data-duration10="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner10', true ) ) . '"
									data-sound1="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound1_link', true ) ) . '"
									data-sound2="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound2_link', true ) ) . '"
									data-sound3="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound3_link', true ) ) . '"
									data-sound4="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound4_link', true ) ) . '"
									data-sound5="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound5_link', true ) ) . '"
									data-sound6="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound6_link', true ) ) . '"
									data-sound7="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound7_link', true ) ) . '"
									data-sound8="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound8_link', true ) ) . '"
									data-sound9="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound9_link', true ) ) . '"
									data-sound10="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound10_link', true ) ) . '"
									data-cta-stop="' . esc_html( get_post_meta( $post->ID, 'videnpro_cta_video_stop_switch_status', true ) ) . '"
									data-close-button="' . esc_html( get_post_meta( $post->ID, 'videnpro_cta_show_close_switch_status', true ) ) . '"
									data-background-image="' . esc_html( get_post_meta( $post->ID, 'videnpro_thumbnail_image_link', true ) ) . '"
									data-background-end-image="' . esc_html( get_post_meta( $post->ID, 'videnpro_thumbnail_end_image_link', true ) ) . '"
									data-thumbnail-duration-buffer="' . esc_html( get_post_meta( $post->ID, 'video-thumbnail-buffer-spinner', true ) ) . '"
									data-logo-image="' . esc_html( get_post_meta( $post->ID, 'videnpro_thumbnail_logo_image_link', true ) ) . '">
										<i id="play-button-' . $post->ID . '" class="fa fa-play-circle fa-' . esc_html( get_post_meta( $post->ID, 'cta-play-button-spinner', true ) ) . 'x faa-pulse animated"></i>
									</div>
									<!--<iframe id="yt-iframe-player" src="' . $src . '" frameborder="0" allowfullscreen></iframe>-->
									<div class="videnpro-logo-image-container">
										<a href="' . esc_html( get_post_meta( $post->ID, 'videnpro_logo_image_link', true ) ) . '" target="_blank">
											<img class="videnpro-logo-image" id="yt-logo-image" src="' . esc_html( get_post_meta( $post->ID, 'videnpro_thumbnail_logo_image_link', true ) ) . '" alt="Logo Image" />
										</a>
									</div>
									<div id="yt-iframe-player"></div>';
									
									for ( $i = 1; $i <= 10; $i++ )
									{
									?>
										<audio id="<?php echo 'yt-cta-audio' . $i . '-' . $post->ID ?>" preload="none"> 
										   <source src="" type="audio/mpeg">
										</audio>
									<?php
									}
									
									$youtube_modal .= '
									
							</div>
						</div><!-- youtube-preview -->
						
					
					
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">' . __( 'Close', 'videnpro' ) . '</button>
					
				  </div>
				</div>
			  </div>
			</div>
		</div>
		
		';
		
		$vimeo_modal =
		'
		<div class="bootstrap-wrapper">
			<!-- Modal -->
			<div class="modal fade" id="VimeoPreviewModal" tabindex="-1" role="dialog" aria-labelledby="VimeoPreviewModalLabel">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="VimeoPreviewModalLabel">' . __( 'Video Preview', 'videnpro' ) . '</h4>
				  </div>
				  <div class="modal-body">
						' . __( 'Current Time in Seconds: ', 'videnpro' ) . '<div id="vimeo-video-current-time"></div>
						' . __( ' Video Duration: ', 'videnpro' ) . '<div id="vimeo-video-duration-time"></div>
						<br>
					
					
				
						<div id="youtube-preview-' . $post->ID . '">
							<div class="yt-mockub-image">
								<img id="videnpro_youtube_mockup_preview_image" src="' . esc_html( get_post_meta( $post->ID, 'videnpro_mockup_image_link', true ) ) . '" alt="Mockup Image" />
							</div>						
							<div class="yt-thumbnail' . esc_html( get_post_meta( $post->ID, 'videnpro_mockup_image_name', true ) ) . '" style="background:url(' . wp_make_link_relative( esc_html( get_post_meta( $post->ID, 'videnpro_thumbnail_image_link', true ) ) ) . ') center center; border: ' . esc_html( get_post_meta( $post->ID, 'video-border-spinner', true ) ) . 'px solid ' . esc_html( get_post_meta( $post->ID, 'player-border', true ) ) . '">
									<div id="yt-nostop-window" data-stop="' . esc_html( get_post_meta( $post->ID, 'videnpro_player_nostop_switch_status', true ) ) . '"></div>
									';
									
									if ( esc_html( get_post_meta( $post->ID, 'videnpro_cta_video_url_switch_status', true ) ) == 'true' ) {
										$vimeo_modal .=
										'
										<a href="' . esc_html( get_post_meta( $post->ID, 'cta-link-url', true ) ) . '" target="_blank">	
											<div class="cta-display" id="cta-display-vimeo-' . $post->ID . '" data-cta="' . esc_html( get_post_meta( $post->ID, 'videnpro_player_call_to_action_switch_status', true ) ) . '" data-control="' . esc_html( get_post_meta( $post->ID, 'videnpro_player_conrols_switch_status', true ) ) . '" data-stop="' . esc_html( get_post_meta( $post->ID, 'videnpro_player_nostop_switch_status', true ) ) . '" style="padding: 5px;">
													
											</div>
										</a>
										';
										}
										else {
										$vimeo_modal .=
										'
										<div class="cta-display" id="cta-display-vimeo-' . $post->ID . '" data-cta="' . esc_html( get_post_meta( $post->ID, 'videnpro_player_call_to_action_switch_status', true ) ) . '" data-control="' . esc_html( get_post_meta( $post->ID, 'videnpro_player_conrols_switch_status', true ) ) . '" data-stop="' . esc_html( get_post_meta( $post->ID, 'videnpro_player_nostop_switch_status', true ) ) . '" style="padding: 5px;">
														
													
										</div>
										';
										}
										$vimeo_modal .=
										'
										
									<div class="play-button-pulse-vimeo" data-id="' . $post->ID . '" data-cta-effect="' . esc_html( get_post_meta( $post->ID, 'videnpro_cta_effect', true ) ) . '" data-cta-effect-duration="' . esc_html( get_post_meta( $post->ID, 'cta-effect-spinner', true ) ) . '"
									data-source="' . esc_html( get_post_meta( $post->ID, 'videnpro_video_source', true ) ) . '" data-imname="' . esc_html( get_post_meta( $post->ID, 'videnpro_mockup_image_name', true ) ) . '"
									data-delay1="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner1', true ) ) . '" data-delay2="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner2', true ) ) . '" data-delay3="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner3', true ) ) . '" data-autoplay="' . esc_html( get_post_meta( $post->ID, 'videnpro_player_autoplay_switch_status', true ) ) . '"
									data-delay4="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner4', true ) ) . '" data-delay5="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner5', true ) ) . '" data-delay6="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner6', true ) ) . '"
									data-delay7="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner7', true ) ) . '" data-delay8="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner8', true ) ) . '" data-delay9="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner9', true ) ) . '" 
									data-delay10="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner10', true ) ) . '"
									data-delay-post1="' . esc_html( get_post_meta( $post->ID, 'cta-delay-post1', true ) ) . '"
									data-delay-post2="' . esc_html( get_post_meta( $post->ID, 'cta-delay-post2', true ) ) . '"
									data-delay-post3="' . esc_html( get_post_meta( $post->ID, 'cta-delay-post3', true ) ) . '"
									data-delay-post4="' . esc_html( get_post_meta( $post->ID, 'cta-delay-post4', true ) ) . '"
									data-delay-post5="' . esc_html( get_post_meta( $post->ID, 'cta-delay-post5', true ) ) . '"
									data-delay-post6="' . esc_html( get_post_meta( $post->ID, 'cta-delay-post6', true ) ) . '"
									data-delay-post7="' . esc_html( get_post_meta( $post->ID, 'cta-delay-post7', true ) ) . '"
									data-delay-post8="' . esc_html( get_post_meta( $post->ID, 'cta-delay-post8', true ) ) . '"
									data-delay-post9="' . esc_html( get_post_meta( $post->ID, 'cta-delay-post9', true ) ) . '"
									data-delay-post10="' . esc_html( get_post_meta( $post->ID, 'cta-delay-post10', true ) ) . '"
									data-duration1="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner1', true ) ) . '"
									data-duration2="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner2', true ) ) . '"
									data-duration3="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner3', true ) ) . '"
									data-duration4="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner4', true ) ) . '"
									data-duration5="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner5', true ) ) . '"
									data-duration6="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner6', true ) ) . '"
									data-duration7="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner7', true ) ) . '"
									data-duration8="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner8', true ) ) . '"
									data-duration9="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner9', true ) ) . '"
									data-duration10="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner10', true ) ) . '"
									data-sound1="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound1_link', true ) ) . '"
									data-sound2="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound2_link', true ) ) . '"
									data-sound3="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound3_link', true ) ) . '"
									data-sound4="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound4_link', true ) ) . '"
									data-sound5="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound5_link', true ) ) . '"
									data-sound6="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound6_link', true ) ) . '"
									data-sound7="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound7_link', true ) ) . '"
									data-sound8="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound8_link', true ) ) . '"
									data-sound9="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound9_link', true ) ) . '"
									data-sound10="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound10_link', true ) ) . '"
									data-cta-stop="' . esc_html( get_post_meta( $post->ID, 'videnpro_cta_video_stop_switch_status', true ) ) . '"
									data-close-button="' . esc_html( get_post_meta( $post->ID, 'videnpro_cta_show_close_switch_status', true ) ) . '"
									data-background-image="' . esc_html( get_post_meta( $post->ID, 'videnpro_thumbnail_image_link', true ) ) . '"
									data-background-end-image="' . esc_html( get_post_meta( $post->ID, 'videnpro_thumbnail_end_image_link', true ) ) . '"
									data-thumbnail-duration-buffer="' . esc_html( get_post_meta( $post->ID, 'video-thumbnail-buffer-spinner', true ) ) . '"
									data-logo-image="' . esc_html( get_post_meta( $post->ID, 'videnpro_thumbnail_logo_image_link', true ) ) . '">
										<i id="play-button-' . $post->ID . '" class="fa fa-play-circle fa-' . esc_html( get_post_meta( $post->ID, 'cta-play-button-spinner', true ) ) . 'x faa-pulse animated"></i>
									</div>
									<!--<iframe id="yt-iframe-player" src="' . $src . '" frameborder="0" allowfullscreen></iframe>-->
									<div class="videnpro-logo-image-container">
										<a href="' . esc_html( get_post_meta( $post->ID, 'videnpro_logo_image_link', true ) ) . '" target="_blank">
											<img class="videnpro-logo-image" id="yt-logo-image" src="' . esc_html( get_post_meta( $post->ID, 'videnpro_thumbnail_logo_image_link', true ) ) . '" alt="Logo Image" />
										</a>
									</div>
									<div class="videnpro-logo-image-container">
										<a href="' . esc_html( get_post_meta( $post->ID, 'videnpro_logo_image_link', true ) ) . '" target="_blank">
											<img class="videnpro-logo-image" id="yt-logo-image" src="' . esc_html( get_post_meta( $post->ID, 'videnpro_thumbnail_logo_image_link', true ) ) . '" alt="Logo Image" />
										</a>
									</div>
									<iframe id="vimeo-iframe-player" class="vimeo-iframe" src="https://player.vimeo.com/video/' . esc_html( get_post_meta( $post->ID, 'videnpro_vimeo_id', true ) ) . '?api=1&player_id=video&title=false&byline=false&portrait=false" frameborder="0"></iframe>';
									
									
									for ( $i = 1; $i <= 10; $i++ )
									{
									?>
										<audio id="<?php echo 'vimeo-cta-audio' . $i . '-' . $post->ID ?>" preload="none"> 
										   <source src="" type="audio/mpeg">
										</audio>
									<?php
									}
									
									$vimeo_modal .= '
									
							</div>
						</div><!-- vimeo-preview -->
						
					
					
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">' . __( 'Close', 'videnpro' ) . '</button>
					
				  </div>
				</div>
			  </div>
			</div>
		</div>
		
		';
		
		$self_hosted_modal =
		'
		<div class="bootstrap-wrapper">
			<!-- Modal -->
			<div class="modal fade" id="SelfHostedPreviewModal" tabindex="-1" role="dialog" aria-labelledby="SelfHostedPreviewModalLabel">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="SelfHostedPreviewModalLabel">' . __( 'Video Preview', 'videnpro' ) . '</h4>
				  </div>
				  <div class="modal-body">
					' . __( 'Current Time in Seconds: ', 'videnpro' ) . '<div id="self-video-current-time"></div>
					' . __( ' Video Duration: ', 'videnpro' ) . '<div id="self-video-duration-time"></div>
					<br>
					
					
				
						<div id="youtube-preview-' . $post->ID . '">
							<div class="yt-mockub-image">
								<img id="videnpro_youtube_mockup_preview_image" src="' . esc_html( get_post_meta( $post->ID, 'videnpro_mockup_image_link', true ) ) . '" alt="Mockup Image" />
							</div>							
							<div class="yt-thumbnail' . esc_html( get_post_meta( $post->ID, 'videnpro_mockup_image_name', true ) ) . '" style="background:url(' . wp_make_link_relative( esc_html( get_post_meta( $post->ID, 'videnpro_thumbnail_image_link', true ) ) ) . ') center center; border: ' . esc_html( get_post_meta( $post->ID, 'video-border-spinner', true ) ) . 'px solid ' . esc_html( get_post_meta( $post->ID, 'player-border', true ) ) . '">
									<div id="html5-nostop-window" data-stop="' . esc_html( get_post_meta( $post->ID, 'videnpro_player_nostop_switch_status', true ) ) . '"></div>
									';
									if ( esc_html( get_post_meta( $post->ID, 'videnpro_cta_video_url_switch_status', true ) ) == 'true' ) {
										$self_hosted_modal .= '									
									
										<a href="' . esc_html( get_post_meta( $post->ID, 'cta-link-url', true ) ) . '" target="_blank">	
											<div class="cta-display" id="cta-display-self-' . $post->ID . '" data-cta="' . esc_html( get_post_meta( $post->ID, 'videnpro_player_call_to_action_switch_status', true ) ) . '">
													
											</div>
										
										
										</a>
										';
									}
									else {
										$self_hosted_modal .= '
										
										<div class="cta-display" id="cta-display-self-' . $post->ID . '" data-cta="' . esc_html( get_post_meta( $post->ID, 'videnpro_player_call_to_action_switch_status', true ) ) . '">
													
										</div>
										';
									}
									$self_hosted_modal .=
									'
									
									<div class="play-button-pulse-self" data-id="' . $post->ID . '" data-source="' . esc_html( get_post_meta( $post->ID, 'videnpro_video_source', true ) ) . '" data-imname="' . esc_html( get_post_meta( $post->ID, 'videnpro_mockup_image_name', true ) ) . '"
									data-imname="' . esc_html( get_post_meta( $post->ID, 'videnpro_mockup_image_name', true ) ) . '" data-control="' . esc_html( get_post_meta( $post->ID, 'videnpro_player_conrols_switch_status', true ) ) . '"
									data-autoplay="' . esc_html( get_post_meta( $post->ID, 'videnpro_player_autoplay_switch_status', true ) ) . '"
									data-delay1="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner1', true ) ) . '" data-delay2="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner2', true ) ) . '" data-delay3="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner3', true ) ) . '"
									data-delay4="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner4', true ) ) . '" data-delay5="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner5', true ) ) . '" data-delay6="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner6', true ) ) . '"
									data-delay7="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner7', true ) ) . '" data-delay8="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner8', true ) ) . '" data-delay9="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner9', true ) ) . '" 
									data-delay10="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner10', true ) ) . '"
									data-delay-post1="' . esc_html( get_post_meta( $post->ID, 'cta-delay-post1', true ) ) . '"
									data-delay-post2="' . esc_html( get_post_meta( $post->ID, 'cta-delay-post2', true ) ) . '"
									data-delay-post3="' . esc_html( get_post_meta( $post->ID, 'cta-delay-post3', true ) ) . '"
									data-delay-post4="' . esc_html( get_post_meta( $post->ID, 'cta-delay-post4', true ) ) . '"
									data-delay-post5="' . esc_html( get_post_meta( $post->ID, 'cta-delay-post5', true ) ) . '"
									data-delay-post6="' . esc_html( get_post_meta( $post->ID, 'cta-delay-post6', true ) ) . '"
									data-delay-post7="' . esc_html( get_post_meta( $post->ID, 'cta-delay-post7', true ) ) . '"
									data-delay-post8="' . esc_html( get_post_meta( $post->ID, 'cta-delay-post8', true ) ) . '"
									data-delay-post9="' . esc_html( get_post_meta( $post->ID, 'cta-delay-post9', true ) ) . '"
									data-delay-post10="' . esc_html( get_post_meta( $post->ID, 'cta-delay-post10', true ) ) . '"
									data-duration1="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner1', true ) ) . '"
									data-duration2="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner2', true ) ) . '"
									data-duration3="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner3', true ) ) . '"
									data-duration4="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner4', true ) ) . '"
									data-duration5="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner5', true ) ) . '"
									data-duration6="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner6', true ) ) . '"
									data-duration7="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner7', true ) ) . '"
									data-duration8="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner8', true ) ) . '"
									data-duration9="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner9', true ) ) . '"
									data-duration10="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner10', true ) ) . '"
									data-sound1="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound1_link', true ) ) . '"
									data-sound2="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound2_link', true ) ) . '"
									data-sound3="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound3_link', true ) ) . '"
									data-sound4="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound4_link', true ) ) . '"
									data-sound5="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound5_link', true ) ) . '"
									data-sound6="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound6_link', true ) ) . '"
									data-sound7="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound7_link', true ) ) . '"
									data-sound8="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound8_link', true ) ) . '"
									data-sound9="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound9_link', true ) ) . '"
									data-sound10="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound10_link', true ) ) . '"
									data-cta-effect="' . esc_html( get_post_meta( $post->ID, 'videnpro_cta_effect', true ) ) . '" data-cta-effect-duration="' . esc_html( get_post_meta( $post->ID, 'cta-effect-spinner', true ) ) . '"
									data-cta-stop="' . esc_html( get_post_meta( $post->ID, 'videnpro_cta_video_stop_switch_status', true ) ) . '"
									data-close-button="' . esc_html( get_post_meta( $post->ID, 'videnpro_cta_show_close_switch_status', true ) ) . '"
									data-background-image="' . esc_html( get_post_meta( $post->ID, 'videnpro_thumbnail_image_link', true ) ) . '"
									data-background-end-image="' . esc_html( get_post_meta( $post->ID, 'videnpro_thumbnail_end_image_link', true ) ) . '"
									data-thumbnail-duration-buffer="' . esc_html( get_post_meta( $post->ID, 'video-thumbnail-buffer-spinner', true ) ) . '"
									data-logo-image="' . esc_html( get_post_meta( $post->ID, 'videnpro_thumbnail_logo_image_link', true ) ) . '">
										<i id="play-button-' . $post->ID . '" class="fa fa-play-circle fa-' . esc_html( get_post_meta( $post->ID, 'cta-play-button-spinner', true ) ) . 'x faa-pulse animated"></i>
									</div>
									<!--<iframe id="yt-iframe-player" src="' . $src_self_hosted . '" frameborder="0" allowfullscreen></iframe>-->
									<div class="videnpro-logo-image-container">
										<a href="' . esc_html( get_post_meta( $post->ID, 'videnpro_logo_image_link', true ) ) . '" target="_blank">
											<img class="videnpro-logo-image" id="yt-logo-image" src="' . esc_html( get_post_meta( $post->ID, 'videnpro_thumbnail_logo_image_link', true ) ) . '" alt="Logo Image" />
										</a>
									</div>
									<video id="self-video-player" src="' . $src_self_hosted . '" style="background-color: black;"></video>';
									
									for ( $i = 1; $i <= 10; $i++ )
									{
									?>
										<audio id="<?php echo 'self-cta-audio' . $i . '-' . $post->ID ?>" preload="none"> 
										   <source src="" type="audio/mpeg">
										</audio>
									<?php
									}
									
									$self_hosted_modal .= '
									
							</div>
							
						</div><!-- youtube-preview -->
						
					
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">' . __( 'Close', 'videnpro' ) . '</button>
					
				  </div>
				</div>
			  </div>
			</div>
		</div>
		
		';
		
		// css style of cta preview
		
		// store styles in a variable
		$styles = 
			'
				
						display: none;
						position: absolute;
						padding: 3px;
						width: ' . esc_html( get_post_meta( $post->ID, 'cta-width-spinner', true ) ) . '%;
						height: ' . esc_html( get_post_meta( $post->ID, 'cta-height-spinner', true ) ) . '%;
						top: ' . esc_html( get_post_meta( $post->ID, 'cta-margin-top-spinner', true ) ) . '%;
						margin-left: ' . esc_html( get_post_meta( $post->ID, 'cta-margin-left-spinner', true ) ) . '%;
						border-style: solid;
						border-width: ' . esc_html( get_post_meta( $post->ID, 'cta-border-spinner', true ) ) . 'px;
						border-radius: ' . esc_html( get_post_meta( $post->ID, 'cta-border-radius-spinner', true ) ) . 'px;
						border-color: ' . esc_html( get_post_meta( $post->ID, 'cta-border-color', true ) ) . ';
						background-color: ' . esc_html( get_post_meta( $post->ID, 'cta-background-color', true ) ) . ';
						opacity: ' . esc_html( get_post_meta( $post->ID, 'cta-opacity-spinner', true ) ) . ';
						z-index: 6;
						-webkit-box-sizing: content-box;
						-moz-box-sizing: content-box;
						box-sizing: content-box;
						overflow: hidden;
					
			';
		
		
		$output_css .=
		'
		<style>
			.videnpro-logo-image {
				' . $logo_style . ';
			}
			.html5-video-player {
				background-color: ' . esc_html( get_post_meta( $post->ID, 'player-bg-color', true ) ) . ';
			}
			#SelfHostedPreviewModal .modal-dialog, #YouTubePreviewModal .modal-dialog, #VimeoPreviewModal .modal-dialog {
				width: ' . $modal_width . 'px;
				min-width: 300px;
			}
			#cta-preview {
				display: flex;
				margin-left: auto;
				margin-right: auto;
				width: ' . $slider_width_value . 'px;
				height: ' . $slider_width_value / $image_ratio . 'px;
				border: 1px solid #ddd;
			}
			.cta-display {
				display: none;
				position: absolute;
				padding: 3px;
				width: ' . esc_html( get_post_meta( $post->ID, 'cta-width-spinner', true ) ) . '%;
				height: ' . esc_html( get_post_meta( $post->ID, 'cta-height-spinner', true ) ) . '%;
				top: ' . esc_html( get_post_meta( $post->ID, 'cta-margin-top-spinner', true ) ) . '%;
				margin-left: ' . esc_html( get_post_meta( $post->ID, 'cta-margin-left-spinner', true ) ) . '%;
				border-style: solid;
				border-width: ' . esc_html( get_post_meta( $post->ID, 'cta-border-spinner', true ) ) . 'px;
				border-radius: ' . esc_html( get_post_meta( $post->ID, 'cta-border-radius-spinner', true ) ) . 'px;
				border-color: ' . esc_html( get_post_meta( $post->ID, 'cta-border-color', true ) ) . ';
				background-color: ' . esc_html( get_post_meta( $post->ID, 'cta-background-color', true ) ) . ';
				opacity: ' . esc_html( get_post_meta( $post->ID, 'cta-opacity-spinner', true ) ) . ';
				z-index: 6;
				-webkit-box-sizing: content-box;
				-moz-box-sizing: content-box;
				box-sizing: content-box;
				/*overflow: hidden;*/
			}
			.cta-display i.fa.fa-times, #cta-preview div#cta-dimensions i.fa.fa-times {
				display: block;
				color: ' . esc_html( get_post_meta( $post->ID, 'cta-close-button-color', true ) ) . ';
				right: 1%;
				position: inherit;
				cursor: pointer;
				z-index: 7 !important;
				float: right;
			}
			.cta-display a:hover {
				text-decoration: none;
			}
			.play-button-pulse,
			.play-button-pulse-self,
			.play-button-pulse-vimeo {
				color: ' . esc_html( get_post_meta( $post->ID, 'cta-play-button-color', true ) ) . ';
			}
			i#play-button-' . $post->ID . ' {
				cursor: pointer;
				display: none;
			}
		</style>
		';
		
		$cta_settings_modal =
		'
		<div class="bootstrap-wrapper">
			<!-- Modal -->
			<div class="modal fade" id="CTASettingsModal" tabindex="-1" role="dialog" aria-labelledby="CTASettingsModalLabel">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="CTASettingsModalLabel">' . __( 'Call to Action Settings', 'videnpro' ) . '</h4>
				  </div>
				  <div class="modal-body">
				  <!--
						<div id="cta-preview">
							
							<div id="cta-dimensions">
						
				
						
							</div>
							
						</div>
					-->	
						<table class="table">
							<thead>
								<tr>
									<th class="col-sm-2">' . __( 'Dimension', 'videnpro' ) . '</th>
									<th class="col-sm-5">' . __( 'Width: ', 'videnpro' ) . '</th>
									<th class="col-sm-5">' . __( 'Height: ', 'videnpro' ) . '</th>								
								</tr>								
							</thead>
							<tbody>
								<tr>
									<td></td>								
									<td><input id="cta-width-spinner"></td>
									<td><input id="cta-height-spinner"></td>
								</tr>								
							</tbody>						
						</table>
						<table class="table">
							<thead>
								<tr>
									<th class="col-sm-2">' . __( 'Margin', 'videnpro' ) . '</th>
									<th class="col-sm-5">' . __( 'Top: ', 'videnpro' ) . '</th>
									<th class="col-sm-5">' . __( 'Left: ', 'videnpro' ) . '</th>								
								</tr>
							</thead>
							<tbody>
								<tr>
									<td></td>								
									<td><input id="cta-margin-top-spinner"></td>
									<td><input id="cta-margin-left-spinner"></td>
								</tr>
							</tbody>
						</table>
						
						
						
						
				
					
						
				  </div>
				  <div class="modal-footer">
					<button type="button" id="videnpro-save-cta" class="btn btn-primary">Save changes</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					
				  </div>
				</div>
			  </div>
			</div>
		</div>
		
		';
		
		// here starts the output of the meta box
		
		$output = '
			<div class="bootstrap-wrapper">

			<!-- display of the navigation tabs -->
			
			<!-- Nav tabs -->
			  <ul id="videnpro-menu-tabs" class="nav nav-pills" role="tablist">
				<li class="active"><a href="#images" aria-controls="images" data-toggle="tab">' . __( 'Player Mockup & Images', 'videnpro' ) . '</a></li>
				<li><a href="#video-settings" aria-controls="video-settings" data-toggle="tab">' . __( 'Player Settings', 'videnpro' ) . '</a></li>
				<li id="videnpro-cta-tab"><a href="#call-to-action" aria-controls="call-to-action" data-toggle="tab">' . __( 'Call To Action', 'videnpro' ) . '</a></li>
				<li><a href="#video-expert-settings" aria-controls="video-expert-settings" data-toggle="tab">' . __( 'Expert Settings', 'videnpro' ) . '</a></li>
				<li><a href="#video-preview" aria-controls="video-preview" data-toggle="tab">' . __( 'Video Preview', 'videnpro' ) . '</a></li>
			  </ul>			
			
			<!-- end of tabbed navigation -->
			
			<div class="tab-content">
			
			<div role="tabpanel" class="tab-pane fade in active" id="images">
			
				<!-- <input id="custom-publish-button-beginning" class="button button-primary button-large" type="submit" value="' . __( 'save settings', 'videnpro' ) . '" name="save"> -->
				<h2 style="font-size:18px;"><strong><i>' . __( 'Set the video, the mockup and the thumbnails', 'videnpro' ) . '</i></strong></h2>
				<hr><br>
				<table class="table table-borderless"><tbody>
					<tr class="vid-source-yt">
						<th scope="row"><label for="videnpro_shortcode">' . __( 'Shortcode', 'videnpro' ) . '</label></th>
						<td><input type="text" name="videnpro_shortcode" value="[videnpro_yt id=\'' . $post->ID . '\']" /></td>
					</tr>
					<tr class="vid-source-vimeo">
						<th scope="row"><label for="videnpro_shortcode">' . __( 'Shortcode', 'videnpro' ) . '</label></th>
						<td><input type="text" name="videnpro_shortcode" value="[videnpro_vimeo id=\'' . $post->ID . '\']" /></td>
					</tr>
					<tr class="vid-source-self">
						<th scope="row"><label for="videnpro_shortcode">' . __( 'Shortcode', 'videnpro' ) . '</label></th>
						<td><input type="text" name="videnpro_shortcode" value="[videnpro_self id=\'' . $post->ID . '\']" /></td>
					</tr>';
					
					
					$check_self = null;
					$check_yt = null;
					$check_vimeo = null;
					
					switch ( esc_html( get_post_meta( $post->ID, 'videnpro_video_source', true ) ) )
					{
					
						case "youtube":
					
							?><script>
							jQuery(document).ready(function($) {
								//alert('yt');
								$( 'tr.vid-source-self' ).hide();
								$( 'tr.vid-source-vimeo' ).hide();
								$( 'tr.vid-source-yt' ).show();
								$( 'label#videnpro_label_youtube.btn.btn-primary' ).addClass( 'active' );
							});
							</script><?php
							$check_yt = 'checked=checked';
							$check_self = null;
							$check_vimeo = null;
						break;
						
						case "self-hosted":						
					
							?><script>
							jQuery(document).ready(function($) {
								//alert('self');
								$( 'tr.vid-source-self' ).show();
								$( 'tr.vid-source-yt' ).hide();
								$( 'tr.vid-source-vimeo' ).hide();
								$( 'label#videnpro_label_self.btn.btn-primary' ).addClass( 'active' );
							});
							</script><?php
							$check_self = 'checked=checked';
							$check_yt = null;
							$chck_vimeo = null;
						break;
						
						case "vimeo":
						
						?><script>
							jQuery(document).ready(function($) {
								//alert('self');
								$( 'tr.vid-source-vimeo' ).show();
								$( 'tr.vid-source-self' ).hide();
								$( 'tr.vid-source-yt' ).hide();
								$( 'label#videnpro_label_vimeo.btn.btn-primary' ).addClass( 'active' );
							});
							</script><?php
							$check_vimeo = 'checked=checked';
							$check_yt = null;
							$chck_self = null;
						break;
						
						default:
						
							?><script>
							jQuery(document).ready(function($) {
								//alert('yt');
								$( 'tr.vid-source-self' ).hide();
								$( 'tr.vid-source-vimeo' ).hide();
								$( 'tr.vid-source-yt' ).show();
								$( 'label#videnpro_label_youtube.btn.btn-primary' ).addClass( 'active' );
							});
							</script><?php
							$check_yt = 'checked=checked';
							$check_self = null;
							$check_vimeo = null;
						
					}
					
					$output .=
					'
					<tr>
						<th scope="row"><label for="videnpro_shortcode">' . __( 'Chose Video Source', 'videnpro' ) . '</label></th>
						<td>
						<div class="video-source btn-group" data-toggle="buttons">							
							<label id="videnpro_label_youtube" class="btn btn-primary" for="videnpro_video_source_youtube">' . __( '&nbsp;&nbsp;youtube&nbsp;', 'videnpro' ) . '<input type="radio" id="videnpro_video_source_youtube" name="videnpro_video_source" value="youtube" ' . $check_yt . ' /></label>
							<label id="videnpro_label_self" class="btn btn-primary" for="videnpro_video_source_self">' . __( 'self-hosted', 'videnpro' ) . '<input type="radio" id="videnpro_video_source_self" name="videnpro_video_source" value="self-hosted" ' . $check_self . ' /></label>						
							<label id="videnpro_label_vimeo" class="btn btn-primary" for="videnpro_video_source_vimeo">' . __( 'Vimeo', 'videnpro' ) . '<input type="radio" id="videnpro_video_source_vimeo" name="videnpro_video_source" value="vimeo" ' . $check_vimeo . ' /></label>						
						</div>
						</td>
					</tr>
					<tr class="vid-source-yt">
						<th scope="row"><label for="videnpro_youtube_id">' . __( 'YouTube Video ID', 'videnpro' ) . '</label></th>
						<td><input type="text" id="videnpro_youtube_id" name="videnpro_youtube_id" value="' . esc_html( get_post_meta( $post->ID, 'videnpro_youtube_id', true ) ) . '" /></td>			
					</tr>
					<tr class="vid-source-vimeo">
						<th scope="row"><label for="videnpro_vimeo_id">' . __( 'Vimeo Video ID', 'videnpro' ) . '</label></th>
						<td><input type="text" id="videnpro_vimeo_id" name="videnpro_vimeo_id" value="' . esc_html( get_post_meta( $post->ID, 'videnpro_vimeo_id', true ) ) . '" /></td>			
					</tr>
					<tr class="vid-source-self">
						<th scope="row"><label for="videnpro_self_id">' . __( 'self-hosted link', 'videnpro' ) . '</label></th>
						<td><input type="text" id="videnpro_self_id" name="videnpro_self_id" value="' . esc_html( get_post_meta( $post->ID, 'videnpro_self_id', true ) ) . '" /></td>			
						<td><button type="button" id="videnpro_self_video_button" class="btn btn-primary" >' . __( 'Chose Video', 'videnpro' ) . '</button></td>
					</tr>
                    <tr class="vid-source-self">
                        <th scope="row"><label for="videnpro_video_secure_switch">' . __( 'Secure Video', 'videnpro' ) . '</label></th>
                        <td><input id="videnpro_video_secure_switch" name="videnpro_video_secure_switch" type="checkbox" data-toggle="toggle" ' . $check_video_secure . ' /></td>
                        <td id="secure-url" colspan="3"><label for="videnpro_video_secure_switch">' . __( 'Link ', 'videnpro' ) . '</label><input type="text" id="videnpro_secure_url" name="videnpro_secure_url" value="' . esc_html( get_post_meta( $post->ID, 'videnpro_secure_url', true ) ) . '" /></td>
                        <td><input type="hidden" id="videnpro_video_secure_switch_status" name="videnpro_video_secure_switch_status" value="' . esc_html( get_post_meta( $post->ID, 'videnpro_video_secure_switch_status', true ) ) . '" /></td>
                    </tr>
					<tr>
						<th scope="row"><label for="videnpro_mockup_image">' . __( 'Mockup Image', 'videnpro' ) . '</label></th>
						<td><img id="videnpro_mockup_image" width="200" src="' . esc_html( get_post_meta( $post->ID, 'videnpro_mockup_image_link', true ) ) . '" alt="Mockup Image" /></td>
						<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#MockupPreviewModal">' . __( 'Chose Mockup', 'videnpro' ) . '</button></td>
						<td><input type="hidden" name="videnpro_mockup_image_link" id="videnpro_mockup_image_link" value="' . esc_html( get_post_meta( $post->ID, 'videnpro_mockup_image_link', true ) ) . '" /></td>
						<td><input type="hidden" name="videnpro_mockup_image_name" id="videnpro_mockup_image_name" value="' . esc_html( get_post_meta( $post->ID, 'videnpro_mockup_image_name', true ) ) . '" /></td>
					</tr>					
					<tr>
						<th scope="row"><label for="videnpro_thumbnail_image">' . __( 'Video Start Thumbnail', 'videnpro' ) . '</label></th>
						<td><img id="videnpro_thumbnail_image" width="200" src="' . esc_html( get_post_meta( $post->ID, 'videnpro_thumbnail_image_link', true ) ) . '" alt="" /></td>
						<td><button type="button" id="videnpro_thumbnail_button" class="btn btn-primary" >' . __( 'Chose Thumbnail', 'videnpro' ) . '</button></td>
						<td><button type="button" id="videnpro_thumbnail_delete_button" class="btn btn-danger" >X</button></td>
						<td><input type="hidden" id="videnpro_thumbnail_image_link" name="videnpro_thumbnail_image_link" value="' . wp_make_link_relative( esc_html( get_post_meta( $post->ID, 'videnpro_thumbnail_image_link', true ) ) ) . '" /></td>
					</tr>
					<tr>
						<th scope="row"><label for="videnpro_thumbnail_end_image">' . __( 'Video End Thumbnail', 'videnpro' ) . '</label> <i><a href="https://videoengagepro.de" target="_blank" style="color:red;">Pro Version</a></i></th>
						<td><img id="videnpro_thumbnail_end_image" width="200" src="' . esc_html( get_post_meta( $post->ID, 'videnpro_thumbnail_end_image_link', true ) ) . '" alt="" /></td>
						<td><button type="button" id="videnpro_end_thumbnail_button" class="btn btn-primary" disabled="disabled">' . __( 'Chose Thumbnail', 'videnpro' ) . '</button></td>
						<td><button type="button" id="videnpro_end_thumbnail_delete_button" class="btn btn-danger" disabled="disabled">X</button></td>
						<td><input type="hidden" id="videnpro_thumbnail_end_image_link" name="videnpro_thumbnail_end_image_link" value="' . wp_make_link_relative( esc_html( get_post_meta( $post->ID, 'videnpro_thumbnail_end_image_link', true ) ) ) . '" /></td>
					</tr>
					<tr>
						<th scope="row">' . __( 'Video End Thumbnail Buffer', 'videnpro' ) . ' <i><a href="https://videoengagepro.de" target="_blank" style="color:red;">Pro Version</a></i></th>
						<td class="cta-spinner"><input id="video-thumbnail-buffer-spinner" name="video-thumbnail-buffer-spinner" value="' . esc_html( get_post_meta( $post->ID, 'video-thumbnail-buffer-spinner', true ) ) . '" /></td>
					</tr>
					<tr>
						<th scope="row"><label for="videnpro_thumbnail_logo_image">' . __( 'Video Logo Image', 'videnpro' ) . '</label> <i><a href="https://videoengagepro.de" target="_blank" style="color:red;">Pro Version</a></i></th>
						<td><img id="videnpro_thumbnail_logo_image" width="200" src="' . esc_html( get_post_meta( $post->ID, 'videnpro_thumbnail_logo_image_link', true ) ) . '" alt="" /></td>
						<td><button type="button" id="videnpro_logo_thumbnail_button" class="btn btn-primary" disabled="disabled">' . __( 'Chose Thumbnail', 'videnpro' ) . '</button></td>
						<td><button type="button" id="videnpro_logo_thumbnail_delete_button" class="btn btn-danger" disabled="disabled">X</button></td>
						<td><input type="hidden" id="videnpro_thumbnail_logo_image_link" name="videnpro_thumbnail_logo_image_link" value="' . wp_make_link_relative( esc_html( get_post_meta( $post->ID, 'videnpro_thumbnail_logo_image_link', true ) ) ) . '" /></td>
						<td colspan="3">
							<div class="videnpro-options">
								<select name="videnpro_logo_position" disabled="disabled">
									<!--option ' . $logo_position_none . ' id="videnpro_logo_position_none" value="none">' . __( 'no logo', 'videnpro' ) . '</option>-->
									<option ' . $logo_position_top_left . ' id="videnpro_logo_position_top_left" value="top left">' . __( 'top left', 'videnpro' ) . '</option>
									<option ' . $logo_position_top_right . ' id="videnpro_logo_position_top_right" value="top right">' . __( 'top right', 'videnpro' ) . '</option>
									<option ' . $logo_position_bottom_left . ' id="videnpro_logo_position_bottom_left" value="bottom left">' . __( 'bottom left', 'videnpro' ) . '</option>
									<option ' . $logo_position_bottom_right . ' id="videnpro_logo_position_bottom_right" value="bottom right">' . __( 'bottom right', 'videnpro' ) . '</option>
								</select>
							</div>
						</td>
					</tr>
					<tr class="logo-image-link-container">
						<th scope="row"><label for="videnpro_logo_image_link">' . __( 'Video Logo Image Link', 'videnpro' ) . '</label> <i><a href="https://videoengagepro.de" target="_blank" style="color:red;">Pro Version</a></i></th>
						<td><input type="text" id="videnpro_logo_image_link" name="videnpro_logo_image_link" value="' . esc_html( get_post_meta( $post->ID, 'videnpro_logo_image_link', true ) ) . '" disabled="disabled"/></td>
					</tr>					
					<tr>
						<th scope="row"><label for="videnpro_youtube_preview">' . __( 'Align Video', 'videnpro' ) . '</label></th>
						<td>';
						
						$check_left = null;
						$check_center = null;
						$check_right = null;
						
						// video align
						switch( esc_html( get_post_meta( $post->ID, 'videnpro_align_video', true ) ) ) {
						
							case "left":
								$check_left = 'checked';
								?> <script>
								jQuery(document).ready(function($) {
									$( 'label#videnpro_label_align_video_left.btn.btn-primary' ).addClass( 'active' );
								});
								</script><?php
								$output_css .=
								'
									<style>
										#youtube-preview-' . $post->ID . ' {
											overflow: hidden;
											position:relative;
											max-width: ' . $slider_width_value . 'px;
											max-height: ' . $slider_width_value / $image_ratio . 'px;
											display: block;
											margin-left: 0;
											margin-right: auto;
										}
										.yt-mockub-image img#videnpro_youtube_mockup_preview_image {
											width: ' . $slider_width_value . 'px;
										}
										div#YouTubePreviewModal.modal.fade.in div.modal-dialog div.modal-body {											
											height: ' . $slider_width_value . 'px;											
											min-height: 300px;
											overflow-y: auto;
										}
									</style>
								';
								break;
							case "center":
								$check_center = 'checked';
								?> <script>
								jQuery(document).ready(function($) {
									$( 'label#videnpro_label_align_video_center.btn.btn-primary' ).addClass( 'active' );
								});
								</script><?php
								$output_css .=
								'
									<style>
										#youtube-preview-' . $post->ID . ' {
											overflow: hidden;
											position:relative;
											max-width: ' . $slider_width_value . 'px;
											max-height: ' . $slider_width_value / $image_ratio . 'px;
											display: block;
											margin-left: auto;
											margin-right: auto;
											perspective: 600px;
										}
										.yt-mockub-image img#videnpro_youtube_mockup_preview_image {
											width: ' . $slider_width_value . 'px;
										}
										div#YouTubePreviewModal.modal.fade.in div.modal-dialog div.modal-body {											
											height: ' . $slider_width_value . 'px;											
											min-height: 300px;
											overflow-y: auto;
										}
									</style>
								';	
								break;
							case "right":
								$check_right = 'checked';
								?> <script>
								jQuery(document).ready(function($) {
									$( 'label#videnpro_label_align_video_right.btn.btn-primary' ).addClass( 'active' );
								});
								</script><?php
								$output_css .=
								'
									<style>
										#youtube-preview-' . $post->ID . ' {
											overflow: hidden;
											position:relative;
											max-width: ' . $slider_width_value . 'px;
											max-height: ' . $slider_width_value / $image_ratio . 'px;
											display: block;
											margin-right: 0;
											margin-left: auto;
										}
										.yt-mockub-image img#videnpro_youtube_mockup_preview_image {
											width: ' . $slider_width_value . 'px;
										}
										div#YouTubePreviewModal.modal.fade.in div.modal-dialog div.modal-body {											
											height: ' . $slider_width_value . 'px;											
											min-height: 300px;
											overflow-y: auto;
										}
									</style>
								';	
								break;

								default:
									$check_center = 'checked';
								?> <script>
								jQuery(document).ready(function($) {
									$( 'label#videnpro_label_align_video_center.btn.btn-primary' ).addClass( 'active' );
								});
								</script><?php
								$output_css .=
								'
									<style>
										#youtube-preview-' . $post->ID . ' {
											overflow: hidden;
											position:relative;
											max-width: ' . $slider_width_value . 'px;
											max-height: ' . $slider_width_value / $image_ratio . 'px;
											display: block;
											margin-left: auto;
											margin-right: auto;
										}
										.yt-mockub-image img#videnpro_youtube_mockup_preview_image {
											width: ' . $slider_width_value . 'px;
										}
										div#YouTubePreviewModal.modal.fade.in div.modal-dialog div.modal-body {											
											height: ' . $slider_width_value . 'px;											
											min-height: 300px;
											overflow-y: auto;
										}
									</style>
								';	
						}

						// cta effect
						$cta_effect_none = null;
						$cta_effect_fade = null;
						$cta_effect_bounce = null;
						$cta_effect_fold = null;
						$cta_effect_clip = null;
						$cta_effect_slide_left = null;
						$cta_effect_slide_right = null;
						$cta_effect_slide_up = null;
						$cta_effect_slide_down = null;
						$cta_effect_pulsate = null;
						$cta_effect_shake = null;
						
						switch( esc_html( get_post_meta( $post->ID, 'videnpro_cta_effect', true ) ) ) {
						
							case "none":
								$cta_effect_none = "selected";
								?> <script>
								jQuery(document).ready(function($) {
									$( 'label#videnpro_label_cta_effect_none' ).addClass( 'active' );
								});
								</script><?php
							
							break;
							
							case "fade":
								$cta_effect_fade = "selected";
								?> <script>
								jQuery(document).ready(function($) {
									$( 'label#videnpro_label_cta_effect_fade' ).addClass( 'active' );
								});
								</script><?php
							
							break;
							
							case "bounce":
								$cta_effect_bounce = "selected";
								?> <script>
								jQuery(document).ready(function($) {
									$( 'label#videnpro_label_cta_effect_bounce' ).addClass( 'active' );
								});
								</script><?php
							
							break;
							
							case "fold":
								$cta_effect_fold = "selected";
								?> <script>
								jQuery(document).ready(function($) {
									$( 'label#videnpro_label_cta_effect_fold' ).addClass( 'active' );
								});
								</script><?php
							
							break;
							
							case "clip":
								$cta_effect_clip = "selected";
								?> <script>
								jQuery(document).ready(function($) {
									$( 'label#videnpro_label_cta_effect_clip' ).addClass( 'active' );
								});
								</script><?php
							
							break;
							
							case "slide left":
								$cta_effect_slide_left = "selected";
								?> <script>
								jQuery(document).ready(function($) {
									$( 'label#videnpro_label_cta_effect_slide' ).addClass( 'active' );
								});
								</script><?php
							
							break;
							
							case "slide right":
								$cta_effect_slide_right = "selected";
								?> <script>
								jQuery(document).ready(function($) {
									$( 'label#videnpro_label_cta_effect_slide' ).addClass( 'active' );
								});
								</script><?php
							
							break;
							
							case "slide up":
								$cta_effect_slide_up = "selected";
								?> <script>
								jQuery(document).ready(function($) {
									$( 'label#videnpro_label_cta_effect_slide' ).addClass( 'active' );
								});
								</script><?php
							
							break;
							
							case "slide down":
								$cta_effect_slide_down = "selected";
								?> <script>
								jQuery(document).ready(function($) {
									$( 'label#videnpro_label_cta_effect_slide' ).addClass( 'active' );
								});
								</script><?php
							
							break;
							
							case "pulsate":
								$cta_effect_pulsate = "selected";
								?> <script>
								jQuery(document).ready(function($) {
									$( 'label#videnpro_label_cta_effect_slide' ).addClass( 'active' );
								});
								</script><?php
							
							break;
							
							case "puff":
								$cta_effect_puff = "selected";
								?> <script>
								jQuery(document).ready(function($) {
									$( 'label#videnpro_label_cta_effect_slide' ).addClass( 'active' );
								});
								</script><?php
							
							break;
							
							case "shake":
								$cta_effect_shake = "selected";
								?> <script>
								jQuery(document).ready(function($) {
									$( 'label#videnpro_label_cta_effect_slide' ).addClass( 'active' );
								});
								</script><?php
							
							break;
							
							default:	
								$cta_effect_none = "selected";
								?> <script>
								jQuery(document).ready(function($) {
									$( 'label#videnpro_label_cta_effect_none' ).addClass( 'active' );
								});
								</script><?php								
						
						
						}
						
						$output .='
						<div class="video-align btn-group" data-toggle="buttons">							
								<label for="videnpro_align_video_left" class="btn btn-primary" id="videnpro_label_align_video_left">' . __( 'left', 'videnpro' ) . '<input type="radio" id="videnpro_align_video_left" name="videnpro_align_video" value="left" ' . $check_left . ' /></label>
								<label for="videnpro_align_video_center" class="btn btn-primary" id="videnpro_label_align_video_center">' . __( 'center', 'videnpro' ) . '<input type="radio" id="videnpro_align_video_center" name="videnpro_align_video" value="center" ' . $check_center . ' /></label>
								<label for="videnpro_align_video_right" class="btn btn-primary" id="videnpro_label_align_video_right">' . __( 'right', 'videnpro' ) . '<input type="radio" id="videnpro_align_video_right" name="videnpro_align_video" value="right" ' . $check_right . ' /></label>						
						</div>
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="videnpro_video_width">' . __( 'Video Width', 'videnpro' ) . '</label></th>
						<td><div id="videnpro_video_width_slider"></div></td>
						<td><label for="videnpro_video_width_amount">' . __( 'Width: ', 'videnpro' ) . '</label>
						<input type="text" id="videnpro_video_width_amount" name="videnpro_video_width_amount" value="' . $slider_width_value . '" readonly /></td>
					</tr>
					<tr>
						<th scope="row"><label for="videnpro_video_bg_color">' . __( 'Video Border Size/Color', 'videnpro' ) . '</label></th>
						<td class="cta-spinner"><input id="video-border-spinner" name="video-border-spinner" value="' . esc_html( get_post_meta( $post->ID, 'video-border-spinner', true ) ) . '" /></td>
						<td><input type="text" id="player-border" name="player-border" value="' . esc_html( get_post_meta( $post->ID, 'player-border', true ) ) . '" /></td>
					</tr>
					<tr>
						<th class="row">' . __( 'Play Button Size/Color: ', 'videnpro' ) . '</th>
						<td class="cta-spinner"><input id="cta-play-button-spinner" name="cta-play-button-spinner" value="' . esc_html( get_post_meta( $post->ID, 'cta-play-button-spinner', true ) ) . '" /></td>
						<td><input type="text" id="cta-play-button-color" name="cta-play-button-color" value="' . esc_html( get_post_meta( $post->ID, 'cta-play-button-color', true ) ) . '" /></td>
					</tr>
					</tbody></table>
					<input id="custom-publish-button-end" class="button button-primary button-large" type="submit" value="' . __( 'save settings', 'videnpro' ) . '" name="save">
					</div><!-- images tab -->
					<div role="tabpanel" class="tab-pane fade" id="video-settings">
					<h2 style="font-size:18px;"><strong><i>' . __( 'Set some basic Player Settings', 'videnpro' ) . '</i></strong></h2>
					<hr><br>';
					// control switch status
					$check_control = null;
					if ( esc_html( get_post_meta( $post->ID, 'videnpro_player_conrols_switch_status', true ) ) === 'true' )
					{
						$check_control = 'checked';
						?><script>
						jQuery(document).ready(function($) {
							$('#videnpro_player_conrols_switch').prop('checked', true).change();
							$('tr.videnpro-fullscreen').show();
							//$( '#videnpro_player_conrols_switch' ).attr( 'checked', 'checked' );
						});
						</script><?php
					}
					else
					{
						?><script>
						jQuery(document).ready(function($) {
							$('#videnpro_player_conrols_switch').prop('checked', false).change();
							$('tr.videnpro-fullscreen').hide();
						});
						</script><?php
					}
					
					// control nostop status
					$check_nostop = null;
					if ( esc_html( get_post_meta( $post->ID, 'videnpro_player_nostop_switch_status', true ) ) === 'true' )
					{
						$check_nostop = 'checked';
						?><script>
						jQuery(document).ready(function($) {
							$('#videnpro_player_nostop_switch').prop('checked', true).change();
							//$( '#videnpro_player_conrols_switch' ).attr( 'checked', 'checked' );
						});
						</script><?php
					}
        
                    // secure video switch status
                    $check_video_secure = null;
                    if ( esc_html( get_post_meta( $post->ID, 'videnpro_video_secure_switch_status', true ) ) === 'true' )
					{
                        $check_video_secure = 'checked';
                        ?><script>
                        jQuery(document).ready(function($) {
							$('#videnpro_video_secure_switch').prop('checked', true).change();
                            $('#secure-url').show();
							//$( '#videnpro_player_conrols_switch' ).attr( 'checked', 'checked' );
						});
						</script><?php
                    }
                    else {
                        ?><script>
                        jQuery(document).ready(function($) {
                            $('#secure-url').hide();
						});
						</script><?php
                        
                    }
        

					// autoplay switch status
					$check_autoplay = null;
					if ( esc_html( get_post_meta( $post->ID, 'videnpro_player_autoplay_switch_status', true ) ) === 'true' )
					{
						$check_autoplay = 'checked';
						?><script>
						jQuery(document).ready(function($) {
							$('#videnpro_player_autoplay_switch').prop('checked', true).change();		
							//$( '#videnpro_player_conrols_switch' ).attr( 'checked', 'checked' );
						});
						</script><?php
					}

					// cta switch status					
					$check_cta = null;
					if ( esc_html( get_post_meta( $post->ID, 'videnpro_player_call_to_action_switch_status', true ) ) === 'true' )
					{
						$check_cta = 'checked';
						?><script>
						jQuery(document).ready(function($) {
							$('#videnpro_player_call_to_action_switch').prop('checked', true).change();
							$( '.videnpro-cta-settings' ).show();
						});
						</script><?php
					}
					else
					{
						?><script>
						jQuery(document).ready(function($) {
							$('#videnpro_player_call_to_action_switch').prop('checked', false).change();
							$( '.videnpro-cta-settings' ).hide();							
							$( 'table#videnpro-cta-show-settings-table' ).hide();
						});
						</script><?php
					}
					
					// video stop switch
					$check_cta_stop = null;
					if ( esc_html( get_post_meta( $post->ID, 'videnpro_cta_video_stop_switch_status', true ) ) === 'true' )
					{
						$check_cta_stop = 'checked';
						?><script>
						jQuery(document).ready(function($) {
							$('#videnpro_cta_video_stop_switch').prop('checked', true).change();
						});
						</script><?php
					}
					else
					{
						?><script>
						jQuery(document).ready(function($) {
							$('#videnpro_cta_video_stop_switch').prop('checked', false).change();
						});
						</script><?php
					}
					
					// video url switch
					$check_cta_url = null;
					if ( esc_html( get_post_meta( $post->ID, 'videnpro_cta_video_url_switch_status', true ) ) === 'true' )
					{
						$check_cta_url = 'checked';
						?><script>
						jQuery(document).ready(function($) {
							$('#videnpro_cta_video_url_switch').prop('checked', true).change();
						});
						</script><?php
					}
					else
					{
						?><script>
						jQuery(document).ready(function($) {
							$('#videnpro_cta_video_url_switch').prop('checked', false).change();
						});
						</script><?php
					}
					
					// video editor switch
					$check_cta_editor = null;
					if ( esc_html( get_post_meta( $post->ID, 'videnpro_cta_editor_switch_status', true ) ) === 'true' )
					{
						$check_cta_editor = 'checked';
						?><script>
						jQuery(document).ready(function($) {
							$('#videnpro_cta_editor_switch').prop('checked', true).change();
						});
						</script><?php
					}
					else
					{
						?><script>
						jQuery(document).ready(function($) {
							$('#videnpro_cta_editor_switch').prop('checked', false).change();
						});
						</script><?php
					}
					
					// close button switch
					$check_close_button = null;
					if ( esc_html( get_post_meta( $post->ID, 'videnpro_cta_show_close_switch_status', true ) ) === 'true' )
					{
						$check_close_button = 'checked';
						?><script>
						jQuery(document).ready(function($) {
							$('#videnpro_cta_show_close_switch').prop('checked', true).change();
						});
						</script><?php
					}
					else
					{
						?><script>
						jQuery(document).ready(function($) {
							$('#videnpro_cta_show_close_switch').prop('checked', false).change();
						});
						</script><?php
					}
					
					// fullscreen switch
					$check_fullscreen = null;
					if ( esc_html( get_post_meta( $post->ID, 'videnpro_fullscreen_switch_status', true ) ) === 'true' )
					{
						$check_fullscreen = 'checked';
						?><script>
						jQuery(document).ready(function($) {
							$('#videnpro_fullscreen_switch').prop('checked', true).change();
						});
						</script><?php
					}
					else
					{
						?><script>
						jQuery(document).ready(function($) {
							$('#videnpro_fullscreen_switch').prop('checked', false).change();
						});
						</script><?php
					}

					
					// overflow-y button switch
					$check_overflow_y = null;
					if ( esc_html( get_post_meta( $post->ID, 'videnpro_player_overflow_y_switch_status', true ) ) === 'true' )
					{
						$check_overflow_y = 'checked';
						?><script>
						jQuery(document).ready(function($) {
							$('#videnpro_player_overflow_y_switch').prop('checked', true).change();
						});
						</script>
						<style>
							.cta-display { overflow-y: scroll; }
							/* need this to be able to click the close button on apple devices */
							.cta-display i.fa.fa-times, #cta-preview div#cta-dimensions i.fa.fa-times { right: 2% !important; }
						</style>						
						<?php
					}
					else
					{
						?><script>
						jQuery(document).ready(function($) {
							$('#videnpro_player_overflow_y_switch').prop('checked', false).change();
						});
						</script>
						<style>
							.cta-display { overflow-y: hidden; }
							.cta-display i.fa.fa-times, #cta-preview div#cta-dimensions i.fa.fa-times { right: 1% !important; }
						</style>
						<?php
					}
					
					
					$output .='
					<table class="table table-borderless"><tbody>
						<tr>
							<th scope="row"><label for="videnpro_player_conrols_switch">' . __( 'Show Player Controls', 'videnpro' ) . '</label></th>
							<td><input id="videnpro_player_conrols_switch" name="videnpro_player_conrols_switch" type="checkbox" data-toggle="toggle" ' . $check_control . ' /></td>
							<td><input type="hidden" id="videnpro_player_conrols_switch_status" name="videnpro_player_conrols_switch_status" value="' . esc_html( get_post_meta( $post->ID, 'videnpro_player_conrols_switch_status', true ) ) . '" /></td>
						</tr>
						<tr class="videnpro-fullscreen">
							<th scope="row"><label for="videnpro_fullscreen_switch">' . __( 'Disable Fullscreen', 'videnpro' ) . '</label></th>
							<td><input id="videnpro_fullscreen_switch" name="videnpro_fullscreen_switch" type="checkbox" data-toggle="toggle"' . $check_fullscreen . '/></td>
							<td>' . __( '(Not working on mobile devices & in preview mode; no CTA)', 'videnpro' ) . '</td>
							<td><input type="hidden" id="videnpro_fullscreen_switch_status" name="videnpro_fullscreen_switch_status" value="' . esc_html( get_post_meta( $post->ID, 'videnpro_fullscreen_switch_status', true ) ) . '" /></td>
						</tr>
						<tr>
							<th scope="row"><label for="videnpro_player_autoplay_switch">' . __( 'Autoplay', 'videnpro' ) . '</label></th>
							<td><input type="checkbox" name="videnpro_player_autoplay_switch" id="videnpro_player_autoplay_switch" data-toggle="toggle"' . $check_autoplay . '/></td>
							<td><input type="hidden" id="videnpro_player_autoplay_switch_status" name="videnpro_player_autoplay_switch_status" value="' . esc_html( get_post_meta( $post->ID, 'videnpro_player_autoplay_switch_status', true ) ) . '" /></td>
						</tr>
						<tr>
							<th scope="row"><label for="videnpro_player_nostop_switch">' . __( 'Allow Video Stop', 'videnpro' ) . '</label></th>
							<td><input type="checkbox" name="videnpro_player_nostop_switch" id="videnpro_player_nostop_switch" data-toggle="toggle" ' . $check_nostop . '/></td>
							<td><input type="hidden" id="videnpro_player_nostop_switch_status" name="videnpro_player_nostop_switch_status" value="' . esc_html( get_post_meta( $post->ID, 'videnpro_player_nostop_switch_status', true ) ) . '" /></td>
						</tr>
						<tr>
							<th scope="row"><label for="videnpro_player_call_to_action_switch">' . __( 'Call To Action', 'videnpro' ) . '</label></th>
							<td><input type="checkbox" name="videnpro_player_call_to_action_switch" id="videnpro_player_call_to_action_switch" data-toggle="toggle" ' . $check_cta . '/></td>
							<td class="videnpro-cta-settings">
								<!-- <button type="button" id="cta-settings-button-id" class="btn btn-primary" data-toggle="modal" data-target="#CTASettingsModal">'. __( 'Settings', 'videnpro' ) .'</button> -->
							</td>
							<td><input type="hidden" id="videnpro_player_call_to_action_switch_status" name="videnpro_player_call_to_action_switch_status" value="' . esc_html( get_post_meta( $post->ID, 'videnpro_player_call_to_action_switch_status', true ) ) . '" /></td>

						</tr>
					</tbody></table>
					<input id="custom-publish-button-end" class="button button-primary button-large" type="submit" value="' . __( 'save settings', 'videnpro' ) . '" name="save">
					</div><!-- tab video-settings -->
					<div role="tabpanel" class="tab-pane fade" id="call-to-action">
					<h2 style="font-size:18px;"><strong><i>' . __( 'Set the Call-to-Action values', 'videnpro' ) . '</i></strong></h2>
					<hr><br>
				
				<table class="table table-borderless" id="videnpro-cta-show-settings-table">
				
				<tbody>
					<tr>
						<th scope="row"><label for="videnpro_cta_dimensions">' . __( 'CTA Window Dimensions', 'videnpro' ) . '</label></th>
						<td colspan="5">
							<div id="cta-preview">
								<div id="cta-dimensions" style="padding: 5px;">
									<a href="' . esc_html( get_post_meta( $post->ID, 'cta-link-url', true ) ) . '" target="_blank">
										<i class="fa fa-times fa-' . esc_html( get_post_meta( $post->ID, 'cta-close-button-spinner', true ) ) . 'x" aria-hidden="true"></i>
										<div id="cta-content">
							
										' . do_shortcode( $cta_content ) . '
										
										</div>
									</a>
								</div>
								
							</div>
						<input type="hidden" id="cta-preview-width" name="cta-preview-width" value="' . esc_html( get_post_meta( $post->ID, 'cta-preview-width',true ) ) . '" />
						<input type="hidden" id="cta-preview-height" name="cta-preview-height" value="' . esc_html( get_post_meta( $post->ID, 'cta-preview-height',true ) ) . '" />
						</td>
					</tr>
					<tr>
						<th scope="row">' . __( 'Save as Post: ', 'videnpro' ) . '</th>
						<td class="switcher"><input type="checkbox" name="videnpro_cta_save_switch" id="videnpro_cta_save_switch" data-toggle="toggle" /></td>
						<td class="cta-spinner" id="cta-filename" colspan="3"><input type="text" id="cta-filename" name="cta-filename" value="' . esc_html( get_post_meta( $post->ID, 'cta-filename', true ) ) . '" /></td>
						<td><input type="hidden" id="videnpro_cta_save_switch_status" name="videnpro_cta_save_switch_status" value="' . esc_html( get_post_meta( $post->ID, 'videnpro_cta_save_switch_status', true ) ) . '" /></td>
					</tr>
					<tr>
						<th scope="row">' . __( 'Link URL: ', 'videnpro' ) . '</th>
						<td class="switcher"><input type="checkbox" name="videnpro_cta_video_url_switch" id="videnpro_cta_video_url_switch" data-toggle="toggle"' . $check_cta_url . '/></td>
						<td class="cta-spinner" id="cta-url" colspan="3"><input type="text" id="cta-link-url" name="cta-link-url" value="' . esc_html( get_post_meta( $post->ID, 'cta-link-url', true ) ) . '" /></td>
						<td><input type="hidden" id="videnpro_cta_video_url_switch_status" name="videnpro_cta_video_url_switch_status" value="' . esc_html( get_post_meta( $post->ID, 'videnpro_cta_video_url_switch_status', true ) ) . '" /></td>
					</tr>
					<tr>
						<th scope="row"><label for="videnpro_cta_video_stop_switch">' . __( 'Stop Video', 'videnpro' ) . '</label></th>
						<td class="switcher"><input type="checkbox" name="videnpro_cta_video_stop_switch" id="videnpro_cta_video_stop_switch" data-toggle="toggle"' . $check_cta_stop . '/></td>
						<td><input type="hidden" id="videnpro_cta_video_stop_switch_status" name="videnpro_cta_video_stop_switch_status" value="' . esc_html( get_post_meta( $post->ID, 'videnpro_cta_video_stop_switch_status', true ) ) . '" /></td>
						<td><input type="hidden" id="videnpro_cta_shortcode" name="videnpro_cta_shortcode" value="' . $cta_content_shortcode . '" /></td>
					</tr>
					<tr>
						<th scope="row"><label for="videnpro_player_overflow_y_switch">' . __( 'Overflow Vertical', 'videnpro' ) . '</label></th>
						<td class="switcher"><input id="videnpro_player_overflow_y_switch" name="videnpro_player_overflow_y_switch" type="checkbox" data-toggle="toggle" ' . $check_overflow_y . ' /></td>
						<td><input type="hidden" id="videnpro_player_overflow_y_switch_status" name="videnpro_player_overflow_y_switch_status" value="' . esc_html( get_post_meta( $post->ID, 'videnpro_player_overflow_y_switch_status', true ) ) . '" /></td>
					</tr>
					<tr>
						<th scope="row">' . __( 'Width: ', 'videnpro' ) . '</th>
						<td class="cta-spinner"><input id="cta-width-spinner" name="cta-width-spinner" value="' . esc_html( get_post_meta( $post->ID, 'cta-width-spinner', true ) ) .'" /></td>
					</tr>
					<tr>
						<th class="row">' . __( 'Height: ', 'videnpro' ) . '</th>	
						<td class="cta-spinner"><input id="cta-height-spinner" name="cta-height-spinner" value="' . esc_html( get_post_meta( $post->ID, 'cta-height-spinner', true ) ) .'" /></td>
					</tr>
					<!--<tr>
						<th class="row">' . __( 'Padding: ', 'videnpro' ) . '</th>	
						<td class="cta-spinner"><input id="cta-padding-spinner" name="cta-padding-spinner" value="' . esc_html( get_post_meta( $post->ID, 'cta-padding-spinner', true ) ) .'" /></td>
					</tr>-->
					<tr>
						<th scope="row">' . __( 'Top Margin: ', 'videnpro' ) . '</th>
						<td class="cta-spinner"><input id="cta-margin-top-spinner" name="cta-margin-top-spinner" value="' . esc_html( get_post_meta( $post->ID, 'cta-margin-top-spinner', true ) ) .'" /></td>
					</tr>
					<tr>
						<th class="row">' . __( 'Left Margin: ', 'videnpro' ) . '</th>	
						<td class="cta-spinner"><input id="cta-margin-left-spinner" name="cta-margin-left-spinner" value="' . esc_html( get_post_meta( $post->ID, 'cta-margin-left-spinner', true ) ) .'" /></td>
					</tr>
					<tr>
						<th class="row">' . __( 'Border: ', 'videnpro' ) . '</th>
						<td class="cta-spinner"><input id="cta-border-spinner" name="cta-border-spinner" value="' . esc_html( get_post_meta( $post->ID, 'cta-border-spinner', true ) ) . '" /></td>
						<td><input type="text" id="cta-border-color" name="cta-border-color" value="' . esc_html( get_post_meta( $post->ID, 'cta-border-color', true ) ) . '" /></td>
					</tr>
					<tr>
						<th class="row">' . __( 'Border Radius: ', 'videnpro' ) . '</th>
						<td class="cta-spinner"><input id="cta-border-radius-spinner" name="cta-border-radius-spinner" value="' . esc_html( get_post_meta( $post->ID, 'cta-border-radius-spinner', true ) ) . '" /></td>
					</tr>
					<tr>
						<th class="row">' . __( 'Background Opacity/Color: ', 'videnpro' ) . '</th>
						<td class="cta-spinner"><input id="cta-opacity-spinner" name="cta-opacity-spinner" value="' . esc_html( get_post_meta( $post->ID, 'cta-opacity-spinner', true ) ) . '" /></td>
						<td><input type="text" id="cta-background-color" name="cta-background-color" value="' . esc_html( get_post_meta( $post->ID, 'cta-background-color', true ) ) . '" /></td>
					</tr>
					<tr>
						<th class="row">' . __( 'Close Button Size/Color: ', 'videnpro' ) . '</th>
						<td class="cta-spinner"><input id="cta-close-button-spinner" name="cta-close-button-spinner" value="' . esc_html( get_post_meta( $post->ID, 'cta-close-button-spinner', true ) ) . '" /></td>
						<td><input type="text" id="cta-close-button-color" name="cta-close-button-color" value="' . esc_html( get_post_meta( $post->ID, 'cta-close-button-color', true ) ) . '" /></td>
						<th scope="row">' . __( 'Hide Close Button: ', 'videnpro' ) . '</th>
						<td class="switcher"><input type="checkbox" name="videnpro_cta_show_close_switch" id="videnpro_cta_show_close_switch" data-toggle="toggle"' . $check_close_button . '/></td>
						<td><input type="hidden" id="videnpro_cta_show_close_switch_status" name="videnpro_cta_show_close_switch_status" value="' . esc_html( get_post_meta( $post->ID, 'videnpro_cta_show_close_switch_status', true ) ) . '" /></td>
					</tr>
					<tr>
						<th class="row">' . __( 'Delay 1: ', 'videnpro' ) . '</th>
						<td class="cta-spinner"><input id="cta-delay-spinner1" name="cta-delay-spinner1" value="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner1', true ) ) . '" /></td>
						<td class="cta-spinner"><input id="cta-duration-spinner1" name="cta-duration-spinner1" value="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner1', true ) ) . '" /></td>
						<td>
							<label for="cta-delay-post1">Post ID</label>
							<input type="text" id="cta-delay-post1" name="cta-delay-post1" value="' . esc_html( get_post_meta( $post->ID, "cta-delay-post1", true ) ) . '" />
						</td>
						<td><button type="button" id="videnpro_sound1_button" class="videnpro-sound btn btn-primary btn-sm" >' . __( 'Chose Sound', 'videnpro' ) . '</button></td>
						<td><input type="text" id="videnpro_sound1_link" class="videnpro-sound" name="videnpro_sound1_link" value="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound1_link', true ) ) . '" /></td>			

						<!--<td>
							<label for="cta-duration1">Duration</label>
							<input type="text" id="cta-duration1" name="cta-duration1" value="' . esc_html( get_post_meta( $post->ID, "cta-duration1", true ) ) . '" /
						</td>
						<td>
							<label for="cta-effect1">Effect</label>
							<input type="text" id="cta-effect1" name="cta-effect1" value="' . esc_html( get_post_meta( $post->ID, "cta-effect1", true ) ) . '" /
						</td>-->
					</tr>
					<tr>
						<th class="row">' . __( 'Delay 2: ', 'videnpro' ) . '<br><i><a href="https://videoengagepro.de" target="_blank" style="color:red;">Pro Version</a></i></th>
						<td class="cta-spinner"><input id="cta-delay-spinner2" name="cta-delay-spinner2" value="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner2', true ) ) . '" /></td>
						<td class="cta-spinner"><input id="cta-duration-spinner2" name="cta-duration-spinner2" value="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner2', true ) ) . '" /></td>
						<td>
							<label for="cta-delay-post2">Post ID</label>
							<input type="text" id="cta-delay-post2" name="cta-delay-post2" value="' . esc_html( get_post_meta( $post->ID, "cta-delay-post2", true ) ) . '" disabled="disabled" />
						</td>
						<td><button type="button" id="videnpro_sound2_button" class="videnpro-sound btn btn-primary btn-sm" disabled="disabled" >' . __( 'Chose Sound', 'videnpro' ) . '</button></td>
						<td><input type="text" id="videnpro_sound2_link" class="videnpro-sound" name="videnpro_sound2_link" value="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound2_link', true ) ) . '" disabled="disabled" /></td>			
						<!--<td>
							<label for="cta-duration2">Duration</label>
							<input type="text" id="cta-duration2" name="cta-duration2" value="' . esc_html( get_post_meta( $post->ID, "cta-duration2", true ) ) . '" /
						</td>-->
					</tr>
					<tr>
						<th class="row">' . __( 'Delay 3: ', 'videnpro' ) . '<br><i><a href="https://videoengagepro.de" target="_blank" style="color:red;">Pro Version</a></i></th>
						<td class="cta-spinner"><input id="cta-delay-spinner3" name="cta-delay-spinner3" value="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner3', true ) ) . '" /></td>
						<td class="cta-spinner"><input id="cta-duration-spinner3" name="cta-duration-spinner3" value="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner3', true ) ) . '" /></td>
						<td>
							<label for="cta-delay-post3">Post ID</label>
							<input type="text" id="cta-delay-post3" name="cta-delay-post3" value="' . esc_html( get_post_meta( $post->ID, "cta-delay-post3", true ) ) . '" disabled="disabled" />
						</td>
						<td><button type="button" id="videnpro_sound3_button" class="videnpro-sound btn btn-primary btn-sm" disabled="disabled" >' . __( 'Chose Sound', 'videnpro' ) . '</button></td>
						<td><input type="text" id="videnpro_sound3_link" class="videnpro-sound" name="videnpro_sound3_link" value="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound3_link', true ) ) . '" disabled="disabled" /></td>			
					</tr>
					<tr>
						<th class="row">' . __( 'Delay 4: ', 'videnpro' ) . '<br><i><a href="https://videoengagepro.de" target="_blank" style="color:red;">Pro Version</a></i></th>
						<td class="cta-spinner"><input id="cta-delay-spinner4" name="cta-delay-spinner4" value="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner4', true ) ) . '" /></td>
						<td class="cta-spinner"><input id="cta-duration-spinner4" name="cta-duration-spinner4" value="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner4', true ) ) . '" /></td>
						<td>
							<label for="cta-delay-post4">Post ID</label>
							<input type="text" id="cta-delay-post4" name="cta-delay-post4" value="' . esc_html( get_post_meta( $post->ID, "cta-delay-post4", true ) ) . '" disabled="disabled" />
						</td>
						<td><button type="button" id="videnpro_sound4_button" class="videnpro-sound btn btn-primary btn-sm" disabled="disabled" >' . __( 'Chose Sound', 'videnpro' ) . '</button></td>
						<td><input type="text" id="videnpro_sound4_link" class="videnpro-sound" name="videnpro_sound4_link" value="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound4_link', true ) ) . '" disabled="disabled" /></td>			
					</tr>
					<tr>
						<th class="row">' . __( 'Delay 5: ', 'videnpro' ) . '<br><i><a href="https://videoengagepro.de" target="_blank" style="color:red;">Pro Version</a></i></th>
						<td class="cta-spinner"><input id="cta-delay-spinner5" name="cta-delay-spinner5" value="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner5', true ) ) . '" /></td>
						<td class="cta-spinner"><input id="cta-duration-spinner5" name="cta-duration-spinner5" value="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner5', true ) ) . '" /></td>
						<td>
							<label for="cta-delay-post5">Post ID</label>
							<input type="text" id="cta-delay-post5" name="cta-delay-post5" value="' . esc_html( get_post_meta( $post->ID, "cta-delay-post5", true ) ) . '" disabled="disabled" />
						</td>
						<td><button type="button" id="videnpro_sound5_button" class="videnpro-sound btn btn-primary btn-sm" disabled="disabled" >' . __( 'Chose Sound', 'videnpro' ) . '</button></td>
						<td><input type="text" id="videnpro_sound5_link" class="videnpro-sound" name="videnpro_sound5_link" value="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound5_link', true ) ) . '" disabled="disabled" /></td>			
					</tr>
					<tr>
						<th class="row">' . __( 'Delay 6: ', 'videnpro' ) . '<br><i><a href="https://videoengagepro.de" target="_blank" style="color:red;">Pro Version</a></i></th>
						<td class="cta-spinner"><input id="cta-delay-spinner6" name="cta-delay-spinner6" value="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner6', true ) ) . '" /></td>
						<td class="cta-spinner"><input id="cta-duration-spinner6" name="cta-duration-spinner6" value="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner6', true ) ) . '" /></td>
						<td>
							<label for="cta-delay-post6">Post ID</label>
							<input type="text" id="cta-delay-post6" name="cta-delay-post6" value="' . esc_html( get_post_meta( $post->ID, "cta-delay-post6", true ) ) . '" disabled="disabled" />
						</td>
						<td><button type="button" id="videnpro_sound6_button" class="videnpro-sound btn btn-primary btn-sm" disabled="disabled" >' . __( 'Chose Sound', 'videnpro' ) . '</button></td>
						<td><input type="text" id="videnpro_sound6_link" class="videnpro-sound" name="videnpro_sound6_link" value="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound6_link', true ) ) . '" disabled="disabled" /></td>			
					</tr>
					<tr>
						<th class="row">' . __( 'Delay 7: ', 'videnpro' ) . '<br><i><a href="https://videoengagepro.de" target="_blank" style="color:red;">Pro Version</a></i></th>
						<td class="cta-spinner"><input id="cta-delay-spinner7" name="cta-delay-spinner7" value="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner7', true ) ) . '" /></td>
						<td class="cta-spinner"><input id="cta-duration-spinner7" name="cta-duration-spinner7" value="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner7', true ) ) . '" /></td>
						<td>
							<label for="cta-delay-post7">Post ID</label>
							<input type="text" id="cta-delay-post7" name="cta-delay-post7" value="' . esc_html( get_post_meta( $post->ID, "cta-delay-post7", true ) ) . '" disabled="disabled" />
						</td>
						<td><button type="button" id="videnpro_sound7_button" class="videnpro-sound btn btn-primary btn-sm" disabled="disabled" >' . __( 'Chose Sound', 'videnpro' ) . '</button></td>
						<td><input type="text" id="videnpro_sound7_link" class="videnpro-sound" name="videnpro_sound7_link" value="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound7_link', true ) ) . '" disabled="disabled" /></td>			
					</tr>
					<tr>
						<th class="row">' . __( 'Delay 8: ', 'videnpro' ) . '<br><i><a href="https://videoengagepro.de" target="_blank" style="color:red;">Pro Version</a></i></th>
						<td class="cta-spinner"><input id="cta-delay-spinner8" name="cta-delay-spinner8" value="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner8', true ) ) . '" /></td>
						<td class="cta-spinner"><input id="cta-duration-spinner8" name="cta-duration-spinner8" value="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner8', true ) ) . '" /></td>
						<td>
							<label for="cta-delay-post8">Post ID</label>
							<input type="text" id="cta-delay-post8" name="cta-delay-post8" value="' . esc_html( get_post_meta( $post->ID, "cta-delay-post8", true ) ) . '" disabled="disabled" />
						</td>
						<td><button type="button" id="videnpro_sound8_button" class="videnpro-sound btn btn-primary btn-sm" disabled="disabled" >' . __( 'Chose Sound', 'videnpro' ) . '</button></td>
						<td><input type="text" id="videnpro_sound8_link" class="videnpro-sound" name="videnpro_sound8_link" value="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound8_link', true ) ) . '" disabled="disabled" /></td>			
					</tr>
					<tr>
						<th class="row">' . __( 'Delay 9: ', 'videnpro' ) . '<br><i><a href="https://videoengagepro.de" target="_blank" style="color:red;">Pro Version</a></i></th>
						<td class="cta-spinner"><input id="cta-delay-spinner9" name="cta-delay-spinner9" value="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner9', true ) ) . '" /></td>
						<td class="cta-spinner"><input id="cta-duration-spinner9" name="cta-duration-spinner9" value="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner9', true ) ) . '" /></td>
						<td>
							<label for="cta-delay-post9">Post ID</label>
							<input type="text" id="cta-delay-post9" name="cta-delay-post9" value="' . esc_html( get_post_meta( $post->ID, "cta-delay-post9", true ) ) . '" disabled="disabled" />
						</td>
						<td><button type="button" id="videnpro_sound9_button" class="videnpro-sound btn btn-primary btn-sm" disabled="disabled" >' . __( 'Chose Sound', 'videnpro' ) . '</button></td>
						<td><input type="text" id="videnpro_sound9_link" class="videnpro-sound" name="videnpro_sound9_link" value="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound9_link', true ) ) . '" disabled="disabled" /></td>			
					</tr>
					<tr>
						<th class="row">' . __( 'Delay 10: ', 'videnpro' ) . '<br><i><a href="https://videoengagepro.de" target="_blank" style="color:red;">Pro Version</a></i></th>
						<td class="cta-spinner"><input id="cta-delay-spinner10" name="cta-delay-spinner10" value="' . esc_html( get_post_meta( $post->ID, 'cta-delay-spinner10', true ) ) . '" /></td>
						<td class="cta-spinner"><input id="cta-duration-spinner10" name="cta-duration-spinner10" value="' . esc_html( get_post_meta( $post->ID, 'cta-duration-spinner10', true ) ) . '" /></td>
						<td>
							<label for="cta-delay-post10">Post ID</label>
							<input type="text" id="cta-delay-post10" name="cta-delay-post10" value="' . esc_html( get_post_meta( $post->ID, "cta-delay-post10", true ) ) . '" disabled="disabled" />
						</td>
						<td><button type="button" id="videnpro_sound10_button" class="videnpro-sound btn btn-primary btn-sm" disabled="disabled" >' . __( 'Chose Sound', 'videnpro' ) . '</button></td>
						<td><input type="text" id="videnpro_sound10_link" class="videnpro-sound" name="videnpro_sound10_link" value="' . esc_html( get_post_meta( $post->ID, 'videnpro_sound10_link', true ) ) . '" disabled="disabled" /></td>			
					</tr>
					<tr>
						<th class="row">' . __( 'Content with Delay 10 (ID/Class): ', 'videnpro' ) . '<br><i><a href="https://videoengagepro.de" target="_blank" style="color:red;">Pro Version</a></i></th>
						<td class="cta-spinner"><input type="text" id="cta-delay-10-div-to-show" name="cta-delay-10-div-to-show" value="' . esc_html( get_post_meta( $post->ID, "cta-delay-10-div-to-show", true ) ) . '" disabled="disabled"/></td>
					</tr>
					<tr>
						<th class="row">' . __( 'Intro Effect(Duration/Effect): ', 'videnpro' ) . '</th>
						<td class="cta-spinner"><input id="cta-effect-spinner" name="cta-effect-spinner" value="' . esc_html( get_post_meta( $post->ID, 'cta-effect-spinner', true ) ) . '" /></td>
						<td colspan="3">
						<!--
							<div class="video-align btn-group" data-toggle="buttons">							
									<label for="videnpro_cta_effect_none" class="btn btn-primary" id="videnpro_label_cta_effect_none">' . __( 'none', 'videnpro' ) . '<input type="radio" id="videnpro_cta_effect_none" name="videnpro_cta_effect" value="none" ' . $cta_effect_none . ' /></label>
									<label for="videnpro_cta_effect_fade" class="btn btn-primary" id="videnpro_label_cta_effect_fade">' . __( 'fade', 'videnpro' ) . '<input type="radio" id="videnpro_cta_effect_fade" name="videnpro_cta_effect" value="fade" ' . $cta_effect_fade . ' /></label>
									<label for="videnpro_cta_effect_bounce" class="btn btn-primary" id="videnpro_label_cta_effect_bounce">' . __( 'bounce', 'videnpro' ) . '<input type="radio" id="videnpro_cta_effect_bounce" name="videnpro_cta_effect" value="bounce" ' . $cta_effect_bounce . ' /></label>						
									<label for="videnpro_cta_effect_fold" class="btn btn-primary" id="videnpro_label_cta_effect_fold">' . __( 'fold', 'videnpro' ) . '<input type="radio" id="videnpro_cta_effect_fold" name="videnpro_cta_effect" value="fold" ' . $cta_effect_fold . ' /></label>						
									<label for="videnpro_cta_effect_clip" class="btn btn-primary" id="videnpro_label_cta_effect_clip">' . __( 'clip', 'videnpro' ) . '<input type="radio" id="videnpro_cta_effect_clip" name="videnpro_cta_effect" value="clip" ' . $cta_effect_clip . ' /></label>						
									<label for="videnpro_cta_effect_slide" class="btn btn-primary" id="videnpro_label_cta_effect_slide">' . __( 'slide', 'videnpro' ) . '<input type="radio" id="videnpro_cta_effect_slide" name="videnpro_cta_effect" value="slide" ' . $cta_effect_slide . ' /></label>						
							</div>
						-->
							<div class="videnpro-options">
								<select name="videnpro_cta_effect">
									<option ' . $cta_effect_none . ' id="videnpro_cta_effect_none" value="none">' . __( 'none', 'videnpro' ) . '</option>
									<option ' . $cta_effect_fade . ' id="videnpro_cta_effect_fade" value="fade">' . __( 'fade', 'videnpro' ) . '</option>
									<option ' . $cta_effect_bounce . ' id="videnpro_cta_effect_bounce" value="bounce">' . __( 'bounce', 'videnpro' ) . '</option>
									<!-- <option ' . $cta_effect_fold . ' id="videnpro_cta_effect_fold" value="fold">' . __( 'fold', 'videnpro' ) . '</option> -->
									<!-- <option ' . $cta_effect_clip . ' id="videnpro_cta_effect_clip" value="clip">' . __( 'clip', 'videnpro' ) . '</option> -->
									<option ' . $cta_effect_slide_left . ' id="videnpro_cta_effect_slide_left" value="slide left">' . __( 'slide left', 'videnpro' ) . '</option>
									<option ' . $cta_effect_slide_right . ' id="videnpro_cta_effect_slide_right" value="slide right">' . __( 'slide right', 'videnpro' ) . '</option>
									<option ' . $cta_effect_slide_up . ' id="videnpro_cta_effect_slide_up" value="slide up">' . __( 'slide up', 'videnpro' ) . '</option>
									<option ' . $cta_effect_slide_down . ' id="videnpro_cta_effect_slide_down" value="slide down">' . __( 'slide down', 'videnpro' ) . '</option>
									<!-- <option ' . $cta_effect_pulsate . ' id="videnpro_cta_effect_pulsate" value="pulsate">' . __( 'pulsate', 'videnpro' ) . '</option> -->
									<!-- <option ' . $cta_effect_puff . ' id="videnpro_cta_effect_puff" value="puff">' . __( 'puff', 'videnpro' ) . '</option> -->
									<!-- <option ' . $cta_effect_shake . ' id="videnpro_cta_effect_shake" value="shake">' . __( 'shake', 'videnpro' ) . '</option> -->
								</select>
							</div>
						</td>
					</tr>
					<tr>
						<th></th>
						
					</tr>
					<tr>
						<th scope="row">' . __( 'Editor: ', 'videnpro' ) . '</th>
						<td class="switcher"><input type="checkbox" name="videnpro_cta_editor_switch" id="videnpro_cta_editor_switch" data-toggle="toggle" ' . $check_cta_editor . '/></td>
						<td><input type="hidden" id="videnpro_cta_editor_switch_status" name="videnpro_cta_editor_switch_status" value="' . esc_html( get_post_meta( $post->ID, 'videnpro_cta_editor_switch_status', true ) ) . '" /></td>
					</tr>
					<tr class="html-content">
						<th class="row">' . __( 'HTML Content ', 'videnpro' ) . '</th>
						<td colspan="3"><textarea cols="70" rows="10" id="cta_code_textarea" name="cta_code_textarea">' . esc_html( get_post_meta( $post->ID, 'cta_code_textarea', true ) ) . '</textarea></td>
					</tr>
					<tr class="editor-content">
						<th class="row">' . __( 'CTA Content ', 'videnpro' ) . '</th>
						<td colspan="5"><div id="cta-content-editor"></div></td>						
					</tr>';
				
				// for loop to create div's for the cta posts & pages
		for( $i=1; $i <= 10; $i++ )
		{
			$spinner = esc_html( get_post_meta( $post->ID, 'cta-delay-spinner' . $i, true ) );
			$post_id = esc_html( get_post_meta( $post->ID, 'cta-delay-post' . $i, true ) );
			$editor_switch = esc_html( get_post_meta( $post_id, 'videnpro_ads_editor_switch', true ) );
			$type = get_post_type( $post_id );
			// check if spinner is set & post is set
			if( $spinner != 0 && $post_id != '' )
			{
			
				if( $type == 'videnpro_ads' && $editor_switch == 'true' )
					$content_ad = html_entity_decode( esc_html( get_post_meta( $post_id, 'videnpro_ads_content', true ) ) );
					
				if( $type == 'videnpro_ads' && $editor_switch == 'false' )
					$content_ad = html_entity_decode( esc_html( get_post_meta( $post_id, 'cta_ad_code_textarea', true ) ) );
					
				if( $type != 'videnpro_ads' )
					$content_ad = apply_filters( 'the_content', get_post_field( 'post_content', $post_id ) );
			
					
				if ( esc_html( get_post_meta( $post->ID, 'videnpro_video_source', true ) ) == "youtube" )
				{
					$output .=
					'
						<div id="cta-post-content' . $i . '" style="display:none;" data-styles="<style>#cta-display-' . $post->ID . ' { ' . esc_html( get_post_meta( $post_id, 'videnpro_ads_styles', true ) ) . ' } </style>">
							<i id="close" class="fa fa-times fa-' . esc_html( get_post_meta( $post->ID, 'cta-close-button-spinner', true ) ) . 'x" aria-hidden="true"></i>

							' . do_shortcode($content_ad) . '
						
						</div>
					';
				}
				if ( esc_html( get_post_meta( $post->ID, 'videnpro_video_source', true ) ) == "self-hosted" )
				{
					$output .=
					'
						<div id="cta-post-content' . $i . '" style="display:none;" data-styles="<style>#cta-display-self-' . $post->ID . ' { ' . esc_html( get_post_meta( $post_id, 'videnpro_ads_styles', true ) ) . ' } </style>">
							<i id="close" class="fa fa-times fa-' . esc_html( get_post_meta( $post->ID, 'cta-close-button-spinner', true ) ) . 'x" aria-hidden="true"></i>

							' . do_shortcode($content_ad) . '
						
						</div>
					';
				}
				if ( esc_html( get_post_meta( $post->ID, 'videnpro_video_source', true ) ) == "vimeo" )
				{
					$output .=
					'
						<div id="cta-post-content' . $i . '" style="display:none;" data-styles="<style>#cta-display-vimeo-' . $post->ID . ' { ' . esc_html( get_post_meta( $post_id, 'videnpro_ads_styles', true ) ) . ' } </style>">
							<i id="close" class="fa fa-times fa-' . esc_html( get_post_meta( $post->ID, 'cta-close-button-spinner', true ) ) . 'x" aria-hidden="true"></i>

							' . $content_ad . '
						
						</div>
					';
				}
			}		
		}		
		// end for loop
		
		
		$output .= '
				</tbody>				
				</table>
				<div id="cta-post-content-nopost" style="display:none;" data-styles="<style>#cta-display-self-' . $post->ID . ' { ' . $styles . ' } </style>" data-styles-vimeo="<style>#cta-display-vimeo-' . $post->ID . ' { ' . $styles . ' }</style>" data-styles-yt="<style>#cta-display-self-' . $post->ID . ' { ' . $styles . ' } </style>">
					<i id="close" class="fa fa-times fa-' . esc_html( get_post_meta( $post->ID, 'cta-close-button-spinner', true ) ) . 'x" aria-hidden="true"></i>

					'. do_shortcode( $cta_content ) . '
				</div>
				
				<input id="custom-publish-button-end" class="button button-primary button-large" type="submit" value="' . __( 'save settings', 'videnpro' ) . '" name="save">
			</div><!-- call-to-action -->
			
			<div role="tabpanel" class="tab-pane fade" id="video-expert-settings">
			<h2 style="font-size:18px;"><strong><i>' . __( 'Set some hidden values [only for experts & not to preview]', 'videnpro' ) . '</i></strong></h2>
			<hr><br>
				<table class="table table-borderless"><tbody>
					<tr>
						<th scope="row"><label for="videnpro_video_width_height_trim">' . __( 'Trim Video Width in %', 'videnpro' ) . '</label></th>
						<td class="cta-spinner"><input id="video-width-trim-spinner" name="video-width-trim-spinner" value="' . esc_html( get_post_meta( $post->ID, 'video-width-trim-spinner', true ) ) . '" /></td>
					</tr>
					<tr>
						<th scope="row"><label for="videnpro_video_height_height_trim">' . __( 'Trim Video Height in %', 'videnpro' ) . '</label></th>
						<td class="cta-spinner"><input id="video-height-trim-spinner" name="video-height-trim-spinner" value="' . esc_html( get_post_meta( $post->ID, 'video-height-trim-spinner', true ) ) . '" /></td>
					</tr>
					<tr>
						<th scope="row"><label for="videnpro_video_left_trim">' . __( 'Trim Video Left in %', 'videnpro' ) . '</label></th>
						<td class="cta-spinner"><input id="video-left-trim-spinner" name="video-left-trim-spinner" value="' . esc_html( get_post_meta( $post->ID, 'video-left-trim-spinner', true ) ) . '" /></td>
					</tr>
					<tr>
						<th scope="row"><label for="videnpro_video_top_trim">' . __( 'Trim Video Top in %', 'videnpro' ) . '</label></th>
						<td class="cta-spinner"><input id="video-top-trim-spinner" name="video-top-trim-spinner" value="' . esc_html( get_post_meta( $post->ID, 'video-top-trim-spinner', true ) ) . '" /></td>
					</tr>
				</tbody></table>
				<input id="custom-publish-button-end" class="button button-primary button-large" type="submit" value="' . __( 'save settings', 'videnpro' ) . '" name="save">
			</div><!--video-expert-settings-->
			
			<div role="tabpanel" class="tab-pane fade" id="video-preview">
			<h2 style="font-size:18px;"><strong><i>' . __( 'Click the Button below to preview your Video', 'videnpro' ) . '</i></strong></h2>
			<hr><br>
			<table class="table table-borderless"><tbody>
				<tr class="vid-source-yt">
					<th scope="row"><label for="videnpro_youtube_preview">' . __( 'Video Preview', 'videnpro' ) . '</label></th>
					<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#YouTubePreviewModal">' . __( 'Video Preview', 'videnpro' ) . '</button></td>
					<td></td>
				</tr>
				<tr class="vid-source-self">
					<th scope="row"><label for="videnpro_youtube_preview_self">' . __( 'Video Preview', 'videnpro' ) . '</label></th>
					<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#SelfHostedPreviewModal">' . __( 'Video Preview' , 'videnpro' ) . '</button></td>
					<td></td>
				</tr>
				<tr class="vid-source-vimeo">
					<th scope="row"><label for="videnpro_youtube_preview_vimeo">' . __( 'Video Preview', 'videnpro' ) . '</label></th>
					<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#VimeoPreviewModal">' . __( 'Video Preview' , 'videnpro' ) . '</button></td>
					<td></td>
				</tr>
			</tbody></table>
			<input id="custom-publish-button-end" class="button button-primary button-large" type="submit" value="' . __( 'save settings', 'videnpro' ) . '" name="save">
			</div><!-- video-preview -->
			
			</div><!-- tab-content -->
		</div>';
		echo $preview_modal . $youtube_modal . $vimeo_modal . $self_hosted_modal . $output_css . $output;
	}
	
 
 
 } // end of class