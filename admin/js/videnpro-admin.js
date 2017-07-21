jQuery(document).ready(function($) {

	// hide filename to save field by default
	$( '#cta-filename' ).hide();

	// prepend container to editor div
	jQuery( '#wp-videnpro_cta_content-editor-container' ).prependTo('#cta-content-editor');
	// prepend tools to editor div
	jQuery( '#wp-videnpro_cta_content-editor-tools' ).prependTo('#cta-content-editor');
	
	
	// prepend container to editor div
	jQuery( '#wp-videnpro_ads_content-editor-container' ).prependTo('#cta-ads-editor');
	// prepend tools to editor div
	jQuery( '#wp-videnpro_ads_content-editor-tools' ).prependTo('#cta-ads-editor');
	
	// show css hidden editor & tools; must be done because we hide the editor due to some display errors
	$( '#wp-videnpro_cta_content-editor-container' ).css( 'display', 'block' );
	$( '#wp-videnpro_cta_content-editor-tools' ).css( 'display', 'block' );
	
	$( '#wp-videnpro_ads_content-editor-container' ).css( 'display', 'block' );
	$( '#wp-videnpro_ads_content-editor-tools' ).css( 'display', 'block' );
	
	// class name of thumbnail image
	var thumbnailName = '.yt-thumbnail' + $('input#videnpro_mockup_image_name').val();

	//$('#wp-the_xyz-editor-tools').hide();

	getMockupDimensions();
	
	// youtube autoplay, set autoplay always to 1 because of the custom thumbnail and play button
	//var ytAutoplay = '?rel=0&amp;autoplay=1';
	
	//if ( $( '.cta-display' ).attr( 'data-autoplay' ) == 'true' )
		//ytAutoplay = '?rel=0&amp;autoplay=1';
		
	// youtube controls
	//var ytControl = '&controls=0';
	
	//if ( $( '.cta-display' ).attr( 'data-control' ) == 'true' )
	//	ytControl = '&controls=1';
	
	var ytShowinfo = '&showinfo=0';
	
	// get hight and width of mockup div
	var heightDiv = $( thumbnailName ).height();
	var widthDiv = $( thumbnailName ).width();
	/*
	// get dimensions of actual mockup for cta settings
	$( '#cta-settings-button-id').on( 'click', function() {
		var ctaWidthPercent = $( '.yt-thumbnail' + $( '#videnpro_mockup_image_name' ).val() ).width();
		var ctaHeightPercent = $( '.yt-thumbnail' + $( '#videnpro_mockup_image_name' ).val() ).height();
		var mockupWidth = $( '#videnpro_video_width_amount' ).val();
		// mockup height is similar to mock width
		var mockupHeight = mockupWidth;
		var ctaPreviewWidth = ( mockupWidth * ctaWidthPercent ) / 100;
		var ctaPreviewHeight = ( mockupHeight * ctaHeightPercent ) / 100;
		// write css for width & height
		//alert(ctaPreviewWidth + ' ' + ctaPreviewHeight);
		$( '#cta-preview' ).css( 'width', ctaPreviewWidth );
		$( '#cta-preview' ).css( 'height', ctaPreviewHeight );
		
		
	});
	*/
	function getMockupDimensions() {
	
	
	
		var ctaWidthPercent = $( '.yt-thumbnail' + $( '#videnpro_mockup_image_name' ).val() ).width();
		var ctaHeightPercent = $( '.yt-thumbnail' + $( '#videnpro_mockup_image_name' ).val() ).height();
		
			var mockupWidth = $( '#cta-preview' ).width();
			var mockupHeight = $( '#cta-preview' ).height();
			var ctaPreviewWidth = ( mockupWidth * ctaWidthPercent ) / 100;
			var ctaPreviewHeight = ( mockupHeight * ctaHeightPercent ) / 100;
			//alert( mockupWidth + ' ' + mockupHeight );
			// write css for width & height
			//alert(ctaPreviewWidth + ' ' + ctaPreviewHeight);
			$( '#cta-preview' ).css( 'width', ctaPreviewWidth );
			$( '#cta-preview' ).css( 'height', ctaPreviewHeight );
			
			$( '#cta-preview-width' ).val( ctaPreviewWidth );
			$( '#cta-preview-height' ).val( ctaPreviewHeight );
			
			//alert( $( '#cta-preview' ).css( 'height' ) );
	
	
	}
	
	
			/* settings for radio buttons and checkboxes */
	
		// check radio button for yt, self-hosted or vimeo video
		$('#videnpro_label_youtube').on( 'click', function(){
			$( 'tr.vid-source-self' ).hide();
			$( 'tr.vid-source-vimeo' ).hide();
			$( 'tr.vid-source-yt' ).show();
			//alert( $("input[name='videnpro_video_source']").val() );
		});
		$('#videnpro_label_self').on( 'click', function(){
			$( 'tr.vid-source-self' ).show();
			$( 'tr.vid-source-yt' ).hide();
			$( 'tr.vid-source-vimeo' ).hide();
			//alert($("input[name='videnpro_video_source']:checked").val());
		});
		$('#videnpro_label_vimeo').on( 'click', function(){
			$( 'tr.vid-source-vimeo' ).show();
			$( 'tr.vid-source-self' ).hide();
			$( 'tr.vid-source-yt' ).hide();
			//alert($("input[name='videnpro_video_source']:checked").val());
		});
		
		/* disabled bootstrap switch and use bootstrap toggle instead because of some displaying error in wp backend */
		/*
		// switch for video controls
		$('input[name="videnpro_player_conrols_switch"]').on('switchChange.bootstrapSwitch', function(event, state) {
		  $( '#videnpro_player_conrols_switch_status' ).val( state ); // true | false
		});
		// switch for video autoplay
		$('input[name="videnpro_player_autoplay_switch"]').on('switchChange.bootstrapSwitch', function(event, state) {
		  $( '#videnpro_player_autoplay_switch_status' ).val( state ); // true | false
		});
		// switch for video call to action
		$('input[name="videnpro_player_call_to_action_switch"]').on('switchChange.bootstrapSwitch', function(event, state) {
		  $( '#videnpro_player_call_to_action_switch_status' ).val( state ); // true | false
		  if ( state === true ) 
			{ $( '.videnpro-cta-settings' ).show(); }
		  else
			{ $( '.videnpro-cta-settings' ).hide(); }
		});
		*/
		
		// switch for overflow-y
		$('#videnpro_player_overflow_y_switch').change(function() {
		  if ( $(this).prop('checked'))
		  {			
			$( '#videnpro_player_overflow_y_switch_status' ).val( 'true' );
		  }
		  else
		  {
			$( '#videnpro_player_overflow_y_switch_status' ).val( 'false' );
			}
		});
    
        // swicht for secure Video
        $('#videnpro_video_secure_switch').change(function() {
		  if ( $(this).prop('checked'))
		  {			
			$( '#videnpro_video_secure_switch_status' ).val( 'true' );
			$('#secure-url').show();
		  }
		  else
		  {
			$( '#videnpro_video_secure_switch_status' ).val( 'false' );
			$('#secure-url').hide();
			}
		});
		
		// switch for video controls
		$('#videnpro_player_conrols_switch').change(function() {
		  if ( $(this).prop('checked'))
		  {			
			$( '#videnpro_player_conrols_switch_status' ).val( 'true' );
			$('tr.videnpro-fullscreen').show();
		  }
		  else
		  {
			$( '#videnpro_player_conrols_switch_status' ).val( 'false' );
			$('tr.videnpro-fullscreen').hide();
			}
		});
		// switch for video nostop
		$('#videnpro_player_nostop_switch').change(function() {
		  if ( $(this).prop('checked'))
		  {			
			$( '#videnpro_player_nostop_switch_status' ).val( 'true' );
		  }
		  else
		  {
			$( '#videnpro_player_nostop_switch_status' ).val( 'false' );
			}
		});
		// switch for autoplay
		$('#videnpro_player_autoplay_switch').change(function() {
		  if ( $(this).prop('checked'))
		  {			
			$( '#videnpro_player_autoplay_switch_status' ).val( 'true' );
			// hide audio button & input field
			$( '.videnpro-sound, .videnpro-sound.btn' ).css( 'display', 'none');
		  }
		  else
		  {
			$( '#videnpro_player_autoplay_switch_status' ).val( 'false' );
			// show audio button & input field
			$( '.videnpro-sound, .videnpro-sound.btn' ).css( 'display', 'block');
			}
		});
		// switch for video call to action with bootstrap toggle
		$('#videnpro_player_call_to_action_switch').change(function() {
		  if ( $(this).prop('checked'))
		  {
			//$( '.videnpro-cta-settings' ).show(); // not needed in tabbed navigation
			$( '#videnpro_player_call_to_action_switch_status' ).val( 'true' );
			$( '#videnpro-cta-tab' ).fadeIn(); // show cta tab
			//$( '#call-to-action' ).show(); // show cta content
		  }
		  else
		  {
			$( '#videnpro_player_call_to_action_switch_status' ).val( 'false' );
			$( '#videnpro-cta-tab' ).fadeOut(); // hide cta tab
			//$( '#call-to-action' ).hide(); // hide cta content
			//$( '.videnpro-cta-settings' ).hide(); // not needed in tabbed navigation
			//$( 'table#videnpro-cta-show-settings-table' ).hide(); // not needed in tabbed navigation
		  }
		})
		
		// switch for stop video while displaying cta
		$('#videnpro_cta_video_stop_switch').change(function() {
		  if ( $(this).prop('checked'))
		  {			
			$( '#videnpro_cta_video_stop_switch_status' ).val( 'true' );			
		  }
		  else
		  {
			$( '#videnpro_cta_video_stop_switch_status' ).val( 'false' );
			}
		});
		
		// switch video url
		$('#videnpro_cta_video_url_switch').change(function() {
		  if ( $(this).prop('checked'))
		  {			
			$( '#videnpro_cta_video_url_switch_status' ).val( 'true' );
			$( '#cta-url' ).show();
		  }
		  else
		  {
			$( '#videnpro_cta_video_url_switch_status' ).val( 'false' );
			$( '#cta-url' ).hide();
			}
		});
		
		// switch editor
		$('#videnpro_cta_editor_switch').change(function() {
		  if ( $(this).prop('checked'))
		  {			
			$( '#videnpro_cta_editor_switch_status' ).val( 'true' );
			$( '.html-content' ).hide();
			$( '.editor-content' ).show();
		  }
		  else
		  {
			$( '#videnpro_cta_editor_switch_status' ).val( 'false' );
			$( '.editor-content' ).hide();
			$( '.html-content' ).show();
			}
		});
		
		// switch save cta
		$('#videnpro_cta_save_switch').change(function() {
		  if ( $(this).prop('checked'))
		  {			
			$( '#videnpro_cta_save_switch_status' ).val( 'true' );
			$( '#cta-filename' ).show();
		  }
		  else
		  {
			$( '#videnpro_cta_save_switch_status' ).val( 'false' );
			$( '#cta-filename' ).hide();
			}
		});
		
		// switch show close
		$('#videnpro_cta_show_close_switch').change(function() {
		  if ( $(this).prop('checked'))
		  {			
			$( '#videnpro_cta_show_close_switch_status' ).val( 'true' );
		  }
		  else
		  {
			$( '#videnpro_cta_show_close_switch_status' ).val( 'false' );
			}
		});
		
		// switch fullscreen
		$('#videnpro_fullscreen_switch').change(function() {
		  if ( $(this).prop('checked'))
		  {			
			$( '#videnpro_fullscreen_switch_status' ).val( 'true' );
		  }
		  else
		  {
			$( '#videnpro_fullscreen_switch_status' ).val( 'false' );
			}
		});
		
		
	/********************************************/
	
	
	
	
	
	
	// delete start thumbnail
	$( '#videnpro_thumbnail_delete_button').on( 'click', function() {	
		$( '#videnpro_thumbnail_image' ).attr( 'src', '' );
		$( '#videnpro_thumbnail_image_link').attr( 'value', '' );
	});
	
	// delete end thumbnail
	$( '#videnpro_end_thumbnail_delete_button').on( 'click', function() {	
		$( '#videnpro_thumbnail_end_image' ).attr( 'src', '' );
		$( '#videnpro_thumbnail_end_image_link').attr( 'value', '' );
	});
	
	// delete logo thumbnail
	$( '#videnpro_logo_thumbnail_delete_button').on( 'click', function() {	
		$( '#videnpro_thumbnail_logo_image' ).attr( 'src', '' );
		$( '#videnpro_thumbnail_logo_image_link').attr( 'value', '' );
	});
	
	
	//console.log( 'width '+ widthDiv + ' height ' + heightDiv );
	
	
	
	

	// chose mockup with click on image
	$('#mockup_preview_list').on('click', 'li', function() {
		var projIndex = $(this).index();
		var link = $( "#mockup_preview_list li").eq(projIndex).attr( 'data-link' );
		var name = $( "#mockup_preview_list li").eq(projIndex).attr( 'data-name' );
		$('img#videnpro_mockup_image').attr( 'src', link).val();
		$('#videnpro_mockup_image_link').val( link );
		$('#videnpro_mockup_image_name').val( name );
		// close modal
		$( "#MockupPreviewModal").modal('hide');		
	});
	
	
	// video width slider
	
    $( '#videnpro_video_width_slider' ).slider({
		  
		  min: 100,
		  max: 2000,
		  value: $( "#videnpro_video_width_amount" ).val(),
		  slide: function( event, ui ) {
			$( "#videnpro_video_width_amount" ).val( ui.value );
		  }
		});
    //$( "#videnpro_video_width_amount" ).val( $( "#videnpro_video_width_slider" ).slider( "value" ) );
	
	/* settings for radio buttons and checkboxes */
	
		// check radio button for yt or self-hosted video
		$('#videnpro_label_youtube').on( 'click', function(){
			$( 'tr.vid-source-self' ).hide();
			$( 'tr.vid-source-yt' ).show();
			//alert( $("input[name='videnpro_video_source']").val() );
		});
		$('#videnpro_label_self').on( 'click', function(){
			$( 'tr.vid-source-self' ).show();
			$( 'tr.vid-source-yt' ).hide();
			//alert($("input[name='videnpro_video_source']:checked").val());
		});
		
		/* disabled bootstrap switch and use bootstrap toggle instead because of some displaying error in wp backend */
		/*
		// switch for video controls
		$('input[name="videnpro_player_conrols_switch"]').on('switchChange.bootstrapSwitch', function(event, state) {
		  $( '#videnpro_player_conrols_switch_status' ).val( state ); // true | false
		});
		// switch for video autoplay
		$('input[name="videnpro_player_autoplay_switch"]').on('switchChange.bootstrapSwitch', function(event, state) {
		  $( '#videnpro_player_autoplay_switch_status' ).val( state ); // true | false
		});
		// switch for video call to action
		$('input[name="videnpro_player_call_to_action_switch"]').on('switchChange.bootstrapSwitch', function(event, state) {
		  $( '#videnpro_player_call_to_action_switch_status' ).val( state ); // true | false
		  if ( state === true ) 
			{ $( '.videnpro-cta-settings' ).show(); }
		  else
			{ $( '.videnpro-cta-settings' ).hide(); }
		});
		*/
		
		// show tab content
		$( '.tab-content' ).show();
		
		// hide cta settings by default
		$( '#videnpro-cta-show-settings-table' ).hide();
		
		// hide cta on other tabs (security settings to avoid display errors on other tabs)
		$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
			videnproTab = $(e.target).attr('aria-controls');
			if ( videnproTab != 'call-to-action' )
				$( '#videnpro-cta-show-settings-table' ).hide();
			else
				$( '#videnpro-cta-show-settings-table' ).show();		
		});
		
	
});
