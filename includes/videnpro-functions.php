<?php

// if this file is called directly then exit
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// remove buttons from editor_class
function cta_editor_buttons_remove_2($buttons)
 {
	if( get_post_type() == 'branding' && is_admin()) {
      //Remove the text help button
      $remove = array( 'wp_help', 'pastetext', 'removeformat', 'alignjustify' );

      
	
      return array_diff($buttons,$remove);;
	}
	else
	  return $buttons;
 }
add_filter('mce_buttons_2','cta_editor_buttons_remove_2');

// remove buttons from editor_class
function cta_editor_buttons_remove_1($buttons)
 {
	if( get_post_type() == 'branding' && is_admin()) {
      //Remove the text help button
      $remove = array( 'blockquote', 'wp_more' );

      
	
      return array_diff($buttons,$remove);;
	}
	else
	  return $buttons;
 }
add_filter('mce_buttons','cta_editor_buttons_remove_1');

// Enable font size & font family selects in the editor
function cta_editor_buttons_add( $buttons ) {
	if( get_post_type() == 'branding' && is_admin()) {
		array_unshift( $buttons, 'fontselect' ); // Add Font Select
		array_unshift( $buttons, 'fontsizeselect' ); // Add Font Size Select
	}
	return $buttons;
}
add_filter( 'mce_buttons_2', 'cta_editor_buttons_add' );

// Add custom Fonts to the Fonts list
function videnpro_mce_google_fonts_array( $initArray ) {
	if( get_post_type() == 'branding' && is_admin()) {
		$initArray['font_formats'] = 'Lato=Lato;Andale Mono=andale mono,times;Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Book Antiqua=book antiqua,palatino;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier;Georgia=georgia,palatino;Helvetica=helvetica;Impact=impact,chicago;Symbol=symbol;Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco;Times New Roman=times new roman,times;Trebuchet MS=trebuchet ms,geneva;Verdana=verdana,geneva;Webdings=webdings;Wingdings=wingdings,zapf dingbats';
	}
	return $initArray;
}
add_filter( 'tiny_mce_before_init', 'videnpro_mce_google_fonts_array' );


// add meta tag example
/*
add_action( 'wp_head', 'videnpro_add_meta_tag', 10 );
function videnpro_add_meta_tag() {
	echo '<meta property="og:type" content="video" />';
}
*/

/* add new button to editor for custom post type branding */
add_action('admin_head', 'videnpro_add_cta_button');
function videnpro_add_cta_button() {
    global $typenow;
    // check user permissions
    if ( !current_user_can('edit_posts') && !current_user_can('edit_pages') ) {
    return;
    }
    // verify the post type
    if( ! in_array( $typenow, array( 'branding', 'videnpro_ads' ) ) )
        return;
    // check if WYSIWYG is enabled
    if ( get_user_option('rich_editing') == 'true') {
        add_filter("mce_external_plugins", "videnpro_add_cta_plugin");
        add_filter('mce_buttons', 'videnpro_register_cta_button');
    }
}

function videnpro_add_cta_plugin($plugin_array) {
    $plugin_array['videnpro_cta_button'] = plugins_url( '../admin/js/cta-text-button.js', __FILE__ );
    return $plugin_array;
}

function videnpro_register_cta_button($buttons) {
   array_push($buttons, "videnpro_cta_button");
   return $buttons;
}


/**********************************************************/

// add custom column to branding (custom post type) post list
add_filter( 'manage_branding_posts_columns', 'videnpro_set_custom_edit_branding_columns' );
add_action( 'manage_branding_posts_custom_column' , 'videnpro_custom_branding_column', 10, 2 );

function videnpro_set_custom_edit_branding_columns($columns) {
    
	//remove columns
    unset(
		$columns['categories'],
		$columns['tags']
	);
	
    $new_columns['shortcode'] = __( 'Shortcode', 'videnpro' );
	$new_columns['id'] = __( 'ID', 'videnpro' );

    return array_merge($columns, $new_columns);
}

function videnpro_custom_branding_column( $column, $post_id ) {
    switch ( $column ) {

        case 'shortcode' :
			if ( get_post_meta( $post_id , 'videnpro_video_source' , true ) == 'youtube' ) {
				echo '[videnpro_yt id=\'' . $post_id . '\']';
			
			
			}
			if ( get_post_meta( $post_id , 'videnpro_video_source' , true ) == 'self-hosted' )  {
				echo '[videnpro_self id=\'' . $post_id . '\']';
			
			}
			
			if ( get_post_meta( $post_id , 'videnpro_video_source' , true ) == 'vimeo' )  {
				echo '[videnpro_vimeo id=\'' . $post_id . '\']';
			
			}
            
            break;
			
			
		case 'id' :
            echo $post_id; 
            break;

    }
}

// add custom column to ads (custom post type) post list
add_filter( 'manage_videnpro_ads_posts_columns', 'set_custom_edit_videnpro_ads_columns' );
add_action( 'manage_videnpro_ads_posts_custom_column' , 'custom_videnpro_ads_column', 10, 2 );

function set_custom_edit_videnpro_ads_columns($columns) {
    
	//remove columns
	unset(
		$columns['categories'],
		$columns['tags']
	);
	  
	$new_columns['id'] = __( 'ID', 'videnpro' );

    return array_merge($columns, $new_columns);
}

function custom_videnpro_ads_column( $column, $post_id ) {
    switch ( $column ) {
			
		case 'id' :
            echo $post_id; 
            break;

    }
}

/* change publish button text */
add_filter( 'gettext', 'videnpro_change_publish_button', 10, 2 );

function videnpro_change_publish_button( $translation, $text ) {
if ( 'branding' == get_post_type() || 'videnpro_ads' == get_post_type() ) {
	if ( $text == 'Publish' )
		return __( 'save settings', 'videnpro');
	if ( $text == 'Update' )
		return __( 'save settings', 'videnpro');
}	

return $translation;
}

/* do not publish while saving */
function videnpro_dont_publish( $data , $postarr ) {  
  if($data['post_type'] == 'branding') {
    $data['post_status'] = 'draft';   
  }
  if($data['post_type'] == 'videnpro_ads') {
    $data['post_status'] = 'draft';   
  }
  return $data;   
}  

// no deleting possible
//add_filter('wp_insert_post_data' , 'videnpro_dont_publish' , '99', 2); 

// enqueue scripts in metabox view
function videnpro_enqueue_admin_scripts_new() {
	/*
	if ( 'branding' == get_post_type() ) {
		wp_enqueue_script( 'vimeo-video-admin' );
	}
	else {
		wp_dequeue_script( 'vimeo-video-admin' );
	}
	*/
	wp_enqueue_script( 'vimeo-video-admin' );
}
//add_action( 'admin_enqueue_scripts', 'videnpro_enqueue_admin_scripts_new' );

// hide some metaboxes for videnpro custom post types
function videnpro_hide_meta_box() {
	remove_meta_box( 'submitdiv', 'branding', 'side' );
	remove_meta_box( 'categorydiv', 'branding', 'side' );
	remove_meta_box( 'tagsdiv-post_tag', 'branding', 'side' );
	remove_meta_box( 'categorydiv', 'videnpro_ads', 'side' );
	remove_meta_box( 'tagsdiv-post_tag', 'videnpro_ads', 'side' );
}
add_action( 'admin_menu', 'videnpro_hide_meta_box' );

// Remove Permalink
function posttype_admin_css() {
     if( 'branding' == get_post_type() || 'videnpro_ads' == get_post_type() ) {
      echo '<style type="text/css">#edit-slug-box {display: none;} </style>';
 }
}
add_action('admin_head', 'posttype_admin_css');
