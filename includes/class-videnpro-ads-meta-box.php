<?php
/*
 * @since      1.0.0
 * @package    Videnpro
 * @subpackage Videnpro/includes
 * @author     Ralf Pareigis <ralf.pareigis@vertrieb-im-netz.de>
 */
 
// if this file is called directly then exit
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
 
 class Videnpro_Ads_Meta_Box {
 
	/**
	 * The meta box for the branding custom post type
	 *
	 * @since    1.0.0
	 */
	 
	public function videnpro_ads_save( $post_id ) {
	
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
		return;
		
		if ( ! isset( $_POST['videnpro_ads_meta_box_nonce'] ) ) {
			return;
		}
		
		if ( ! wp_verify_nonce( $_POST['videnpro_ads_meta_box_nonce'], 'videnpro_save_ads_meta_box_data' ) ) {
			return;
		}
	
		if( isset( $_POST['videnpro_ads_content']) ) {
			update_post_meta( $post_id, 'videnpro_ads_content', $_POST['videnpro_ads_content'] );
			}
			
		if( isset( $_POST['cta_ad_code_textarea']) ) {
			update_post_meta( $post_id, 'cta_ad_code_textarea', $_POST['cta_ad_code_textarea'] );
			}
			
		if( isset( $_POST['videnpro_ads_editor_switch']) ) {
			update_post_meta( $post_id, 'videnpro_ads_editor_switch', $_POST['videnpro_ads_editor_switch'] );
			}
	
	}
	 
	public function videnpro_add_ads_meta_box() {
		global $_wp_post_type_features;
		
		
		
			add_meta_box(
				'videnpro_ads_editor',
				__( 'Videnpro Ads', 'videnpro' ),
				array( $this, 'videnpro_ads_editor' ),
				'videnpro_ads',
				'advanced',
				'high'
			);
		
	}
	
	public function videnpro_ads_editor( $post ) {
	
		$output = '';
		$output_css = '';
		$cta_preview_width = esc_html( get_post_meta( $post->post_parent, 'cta-preview-width', true ) );
		$cta_preview_height = esc_html( get_post_meta( $post->post_parent, 'cta-preview-height', true ) );
		$editor_switch =  esc_html( get_post_meta( $post->ID, 'videnpro_ads_editor_switch', true ) );
		
		wp_nonce_field( 'videnpro_save_ads_meta_box_data', 'videnpro_ads_meta_box_nonce' );
		
		if ( esc_html( get_post_meta( $post->ID, 'cta_ad_code_textarea', true ) ) == '' )
			$html_code = html_entity_decode(esc_html( get_post_meta( $post->post_parent, 'cta_code_textarea', true ) ) );
		else
			$html_code = html_entity_decode(esc_html( get_post_meta( $post->ID, 'cta_ad_code_textarea', true ) ) );
		
		
	
		if ( $editor_switch == 'true' )
		{
			//global $post;
			$settings = array( 'editor_height' => 200, 'textarea_rows' => 20, 'editor_class' => 'cta-ads-css', 'wpautop' => true );
			wp_editor( html_entity_decode( esc_html( get_post_meta( $post->ID, 'videnpro_ads_content', true ) ) ), 'videnpro_ads_content', $settings );
		}
		
		
		$output_css =
			'
			<style>
				#cta-preview-ad {
					width: ' . $cta_preview_width . 'px;
					height: ' . $cta_preview_height . 'px;
					display: flex;
					border: 2px solid grey;
					position: relative;
					margin: 20px auto 50px auto;
					overflow: hidden;
				}
			</style>
			<style>
				#cta-display-' . $post->post_parent . ' {
					' . html_entity_decode( esc_html( get_post_meta( $post->ID, 'videnpro_ads_styles', true ) ) ) . '
					display: block;
				}
			</style>			
			';
		$output .=
			'
					<div class="bootstrap-wrapper">
						<div id="cta-preview-ad">
							<div id="cta-display-' . $post->post_parent . '">
							';
							if ( $editor_switch == 'true' )
								$output .=	do_shortcode( html_entity_decode( esc_html( get_post_meta( $post->ID, 'videnpro_ads_content', true ) ) ) );
							else
								$output .= $html_code;
								
		$output .=
			'
							</div><!-- cta-display -->
						</div><!-- cta- preview -->
							<div id="cta-ads-editor"></div>
							
			';
			
					if ( $editor_switch != 'true' ) {
						$output .= '
							<table>
								<tr class="html-content">
									<th class="row">' . __( 'HTML Content ', 'videnpro' ) . '</th>
									<td colspan="3"><textarea cols="70" rows="10" id="cta_ad_code_textarea" name="cta_ad_code_textarea">' . $html_code . '</textarea></td>
								</tr>
							</table>
					</div><!-- bootstrap wrapper -->';
					}
					else
					{
						$output .= '</div><!-- bootstrap wrapper -->';
					}
			
		$output .=
			'
			<br><input id="custom-publish-button-end" class="button button-primary button-large" type="submit" value="' . __( 'save settings', 'videnpro' ) . '" name="save">

			';
			
		echo $output_css . $output;
		//echo $output . $post->post_parent . esc_html( get_post_meta( $post->post_parent, 'cta-width-spinner', true ) )
		//	. esc_html( get_post_meta( $post->ID, 'videnpro_ads_styles', true ) );
		
	}
	
} // end of class