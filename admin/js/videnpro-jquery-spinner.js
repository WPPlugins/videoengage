jQuery(document).ready(function($) {

	// cta presets
	$( '#cta-dimensions' ).css( 'background-color', $( '#cta-background-color' ).val() ); 
	$( '#cta-dimensions' ).css( 'opacity', $( '#cta-opacity-spinner' ).val() );
	
	$( '#cta-preview div#cta-dimensions i.fa.fa-times' ).css( 'color', $( '#cta-close-button-color' ).val() );	
	$( '.cta-display i.fa.fa-times' ).css( 'color', $( '#cta-close-button-color' ).val() );	

	
	$( '#cta-dimensions' ).css( 'border-color', $( '#cta-border-color' ).val() ); 
	$( '#cta-dimensions' ).css( 'border-width', $( '#cta-border-spinner' ).val() ); 
	$( '#cta-dimensions' ).css( 'border-radius', $( '#cta-border-radius-spinner' ).val() + 'px' );
	
	//previewHeight = $('#cta-preview').height();
	//spinnerHeight = previewHeight * $( '#cta-margin-top-spinner' ).val() / 100;
	
	$( '#cta-dimensions' ).css( 'top', $( '#cta-margin-top-spinner' ).val() + '%' );
	$( '#cta-dimensions' ).css( 'margin-left', $( '#cta-margin-left-spinner' ).val() + '%' );
	
	
	$( '#cta-dimensions' ).css( 'width', $( '#cta-width-spinner' ).val() + '%' );
	$( '#cta-dimensions' ).css( 'height', $( '#cta-height-spinner' ).val() + '%' );

		//alert( $( '#cta-dimensions' ).css( 'height' ) + ' ' + $( '#cta-dimensions' ).css( 'margin-top' ) );

		
	// hide cta settings
	/* not needed in tabbed navigation
	$( '#videnpro-cta-show-settings-table' ).hide();
	$( '#cta-content-editor' ).hide();
	*/
	
	/*
	$( "#cta-padding-top-spinner" ).spinner({
	  start: function( event, ui ) {}
	});
	*/
	
	$( "#video-border-spinner" ).spinner( {
			min: 0,
			max: 20,
			numberFormat: "n",
			start: function( event, ui ) {},
			spin: function( event, ui ) {
				
			},
		});
	
	$( "#cta-play-button-spinner" ).spinner( {
			max: 5,
			min: 1,
			step: 1,
			numberFormat: "n",
			start: function( event, ui ) {},
			spin: function( event, ui ) {
							
			},
		});
		
	$( "#video-thumbnail-buffer-spinner" ).spinner( {
			min: -5,
			max: 0,
			numberFormat: "n",
			disabled: true,
			start: function( event, ui ) {},
			spin: function( event, ui ) {
				
			},
		});		
		
	// set spinner initial value
	if ( $( "#cta-play-button-spinner" ).spinner( "value" ) == null )
		$( "#cta-play-button-spinner" ).spinner( "value", 1 );
		
	if ( $( "#video-border-spinner" ).spinner( "value" ) == null )
		$( "#video-border-spinner" ).spinner( "value", 0 );
		
	if ( $( "#video-thumbnail-buffer-spinner" ).spinner( "value" ) == null )
		$( "#video-thumbnail-buffer-spinner" ).spinner( "value", 0 );
	
	// click event not needed in tabbed navigation; settings button is not active
	//$( '#cta-settings-button-id').on( 'click', function() {

		var isVisible = $( '#videnpro-cta-show-settings-table' ).is( ':visible' );
		
		/* not needed in tabbed navigation
		if ( isVisible === true )
		{
			$( '#videnpro-cta-show-settings-table' ).hide();
			$( '#cta-content-editor' ).hide();
		}
		else
		{
			$( '#videnpro-cta-show-settings-table' ).show();
			$( '#cta-content-editor' ).show();
		}
		*/
		
		$( "#cta-width-spinner" ).spinner( {
			min: 0,
			max: 100,
			numberFormat: "n",
			start: function( event, ui ) {},
			spin: function( event, ui ) {
				$( '#cta-dimensions' ).width( ui.value + '%' );
			},
		});
		
		$( "#cta-height-spinner" ).spinner( {
			min: 0,
			max: 100,
			numberFormat: "n",
			start: function( event, ui ) {},
			spin: function( event, ui ) {
				$( '#cta-dimensions' ).height( ui.value + '%' );
			},
		});
		/*
		$( "#cta-padding-spinner" ).spinner( {
			min: 0,
			numberFormat: "n",
			start: function( event, ui ) {},
			spin: function( event, ui ) {
				$( '#cta-preview' ).css( 'padding', ui.value );
			},
		});
		*/
		$( "#cta-margin-left-spinner" ).spinner( {
			min: 0,
			max: 100,
			numberFormat: "n",
			start: function( event, ui ) {},
			spin: function( event, ui ) {
				$( '#cta-dimensions' ).css( 'margin-left', ui.value + '%' );
			},
		});
		// set spinner initial value
		if ( $( "#cta-margin-left-spinner" ).spinner( "value" ) == null )
			$( "#cta-margin-left-spinner" ).spinner( "value", 0 );
			
		$( "#cta-margin-top-spinner" ).spinner( {
			min: 0,
			max: 100,
			numberFormat: "n",
			start: function( event, ui ) {},
			spin: function( event, ui ) {
				//previewHeight = $('#cta-preview').height();
				//spinnerHeight = previewHeight * ui.value / 100;
				$( '#cta-dimensions' ).css( 'top', ui.value + '%' );
			},
		});
		// set spinner initial value
		if ( $( "#cta-margin-top-spinner" ).spinner( "value" ) == null )
			$( "#cta-margin-top-spinner" ).spinner( "value", 0 );
		
		$( "#cta-border-spinner" ).spinner( {
			min: 0,
			numberFormat: "n",
			start: function( event, ui ) {},
			spin: function( event, ui ) {
				$( '#cta-dimensions' ).css( 'border-width', ui.value );			
			},
		});
		// set spinner initial value
		if ( $( "#cta-border-spinner" ).spinner( "value" ) == null )
			$( "#cta-border-spinner" ).spinner( "value", 0 );		
		
		$( "#video-width-trim-spinner" ).spinner( {
			min: -10,
			max: 10,
			step:0.2,
			numberFormat: "n",
			start: function( event, ui ) {},
			spin: function( event, ui ) {
						
			},
		});
		// set spinner initial value
		if ( $( "#video-width-trim-spinner" ).spinner( "value" ) == null )
			$( "#video-width-trim-spinner" ).spinner( "value", 0 );
		
		$( "#video-height-trim-spinner" ).spinner( {
			min: -10,
			max: 10,
			step:0.2,
			numberFormat: "n",
			start: function( event, ui ) {},
			spin: function( event, ui ) {
						
			},
		});
		// set spinner initial value
		if ( $( "#video-height-trim-spinner" ).spinner( "value" ) == null )
			$( "#video-height-trim-spinner" ).spinner( "value", 0 );
			
		$( "#video-left-trim-spinner" ).spinner( {
			min: -10,
			max: 10,
			step:0.2,
			numberFormat: "n",
			start: function( event, ui ) {},
			spin: function( event, ui ) {
						
			},
		});
		// set spinner initial value
		if ( $( "#video-left-trim-spinner" ).spinner( "value" ) == null )
			$( "#video-left-trim-spinner" ).spinner( "value", 0 );
			
		$( "#video-top-trim-spinner" ).spinner( {
			min: -10,
			max: 10,
			step:0.2,
			numberFormat: "n",
			start: function( event, ui ) {},
			spin: function( event, ui ) {
						
			},
		});
		// set spinner initial value
		if ( $( "#video-top-trim-spinner" ).spinner( "value" ) == null )
			$( "#video-top-trim-spinner" ).spinner( "value", 0 );
		
		
		$( "#cta-opacity-spinner" ).spinner( {
			max: 1,
			min: 0,
			step: 0.02,
			numberFormat: "n",
			start: function( event, ui ) {},
			spin: function( event, ui ) {
				$( '#cta-dimensions' ).css( 'opacity', ui.value );				
			},
		});
		// set spinner initial value
		if ( $( "#cta-opacity-spinner" ).spinner( "value" ) == null )
			$( "#cta-opacity-spinner" ).spinner( "value", 1 );
		
		$( "#cta-close-button-spinner" ).spinner( {
			max: 5,
			min: 1,
			step: 1,
			numberFormat: "n",
			start: function( event, ui ) {},
			spin: function( event, ui ) {
				$( '#cta-preview div#cta-dimensions i.fa.fa-times' ).css( 'font-size', ui.value * 100 + '%' );
				},
		});
		// set spinner initial value
		if ( $( "#cta-close-button-spinner" ).spinner( "value" ) == null )
			$( "#cta-close-button-spinner" ).spinner( "value", 1 );
		
		$( "#cta-delay-spinner1" ).spinner( {
			
			min: 0,
			step: 1,
			numberFormat: "n",
			start: function( event, ui ) {},
			spin: function( event, ui ) {
							
			},
		});
		// set spinner initial value
		if ( $( "#cta-delay-spinner1" ).spinner( "value" ) == null )
			$( "#cta-delay-spinner1" ).spinner( "value", 0 );
		
		$( "#cta-delay-spinner2" ).spinner( {
			
			min: 0,
			step: 1,
			numberFormat: "n",
			disabled: true,
			start: function( event, ui ) {},
			spin: function( event, ui ) {
							
			},
		});
		// set spinner initial value
		if ( $( "#cta-delay-spinner2" ).spinner( "value" ) == null )
			$( "#cta-delay-spinner2" ).spinner( "value", 0 );
		
		$( "#cta-delay-spinner3" ).spinner( {
			
			min: 0,
			step: 1,
			numberFormat: "n",
			disabled: true,
			start: function( event, ui ) {},
			spin: function( event, ui ) {
							
			},
		});
		// set spinner initial value
		if ( $( "#cta-delay-spinner3" ).spinner( "value" ) == null )
			$( "#cta-delay-spinner3" ).spinner( "value", 0 );
			
		$( "#cta-delay-spinner4" ).spinner( {
			
			min: 0,
			step: 1,
			numberFormat: "n",
			disabled: true,
			start: function( event, ui ) {},
			spin: function( event, ui ) {
							
			},
		});
		// set spinner initial value
		if ( $( "#cta-delay-spinner4" ).spinner( "value" ) == null )
			$( "#cta-delay-spinner4" ).spinner( "value", 0 );
		
		$( "#cta-delay-spinner5" ).spinner( {
			
			min: 0,
			step: 1,
			numberFormat: "n",
			disabled: true,
			start: function( event, ui ) {},
			spin: function( event, ui ) {
							
			},
		});
		// set spinner initial value
		if ( $( "#cta-delay-spinner5" ).spinner( "value" ) == null )
			$( "#cta-delay-spinner5" ).spinner( "value", 0 );
		
		
		$( "#cta-delay-spinner6" ).spinner( {
			
			min: 0,
			step: 1,
			numberFormat: "n",
			disabled: true,
			start: function( event, ui ) {},
			spin: function( event, ui ) {
							
			},
		});
		// set spinner initial value
		if ( $( "#cta-delay-spinner6" ).spinner( "value" ) == null )
			$( "#cta-delay-spinner6" ).spinner( "value", 0 );
		
		
		$( "#cta-delay-spinner7" ).spinner( {
			
			min: 0,
			step: 1,
			numberFormat: "n",
			disabled: true,
			start: function( event, ui ) {},
			spin: function( event, ui ) {
							
			},
		});
		// set spinner initial value
		if ( $( "#cta-delay-spinner7" ).spinner( "value" ) == null )
			$( "#cta-delay-spinner7" ).spinner( "value", 0 );
		
		
		$( "#cta-delay-spinner8" ).spinner( {
			
			min: 0,
			step: 1,
			numberFormat: "n",
			disabled: true,
			start: function( event, ui ) {},
			spin: function( event, ui ) {
							
			},
		});
		// set spinner initial value
		if ( $( "#cta-delay-spinner8" ).spinner( "value" ) == null )
			$( "#cta-delay-spinner8" ).spinner( "value", 0 );
		
		
		
		$( "#cta-delay-spinner9" ).spinner( {
			
			min: 0,
			step: 1,
			numberFormat: "n",
			disabled: true,
			start: function( event, ui ) {},
			spin: function( event, ui ) {
							
			},
		});
		// set spinner initial value
		if ( $( "#cta-delay-spinner9" ).spinner( "value" ) == null )
			$( "#cta-delay-spinner9" ).spinner( "value", 0 );
		
		
		
		$( "#cta-delay-spinner10" ).spinner( {
			
			min: 0,
			step: 1,
			numberFormat: "n",
			disabled: true,
			start: function( event, ui ) {},
			spin: function( event, ui ) {
							
			},
		});
		// set spinner initial value
		if ( $( "#cta-delay-spinner10" ).spinner( "value" ) == null )
			$( "#cta-delay-spinner10" ).spinner( "value", 0 );
			
			
		$( "#cta-duration-spinner1" ).spinner( {
			
			min: 0,
			step: 1,
			numberFormat: "n",
			start: function( event, ui ) {},
			spin: function( event, ui ) {
							
			},
		});
		// set spinner initial value
		if ( $( "#cta-duration-spinner1" ).spinner( "value" ) == null )
			$( "#cta-duration-spinner1" ).spinner( "value", 0 );
			
		
		$( "#cta-duration-spinner2" ).spinner( {
			
			min: 0,
			step: 1,
			numberFormat: "n",
			disabled: true,
			start: function( event, ui ) {},
			spin: function( event, ui ) {
							
			},
		});
		// set spinner initial value
		if ( $( "#cta-duration-spinner2" ).spinner( "value" ) == null )
			$( "#cta-duration-spinner2" ).spinner( "value", 0 );
			
		
		$( "#cta-duration-spinner3" ).spinner( {
			
			min: 0,
			step: 1,
			numberFormat: "n",
			disabled: true,
			start: function( event, ui ) {},
			spin: function( event, ui ) {
							
			},
		});
		// set spinner initial value
		if ( $( "#cta-duration-spinner3" ).spinner( "value" ) == null )
			$( "#cta-duration-spinner3" ).spinner( "value", 0 );
			
			
		$( "#cta-duration-spinner4" ).spinner( {
			
			min: 0,
			step: 1,
			numberFormat: "n",
			disabled: true,
			start: function( event, ui ) {},
			spin: function( event, ui ) {
							
			},
		});
		// set spinner initial value
		if ( $( "#cta-duration-spinner4" ).spinner( "value" ) == null )
			$( "#cta-duration-spinner4" ).spinner( "value", 0 );
			
			
		$( "#cta-duration-spinner5" ).spinner( {
			
			min: 0,
			step: 1,
			numberFormat: "n",
			disabled: true,
			start: function( event, ui ) {},
			spin: function( event, ui ) {
							
			},
		});
		// set spinner initial value
		if ( $( "#cta-duration-spinner5" ).spinner( "value" ) == null )
			$( "#cta-duration-spinner5" ).spinner( "value", 0 );
		
		
		$( "#cta-duration-spinner6" ).spinner( {
			
			min: 0,
			step: 1,
			numberFormat: "n",
			disabled: true,
			start: function( event, ui ) {},
			spin: function( event, ui ) {
							
			},
		});
		// set spinner initial value
		if ( $( "#cta-duration-spinner6" ).spinner( "value" ) == null )
			$( "#cta-duration-spinner6" ).spinner( "value", 0 );
			
			
		$( "#cta-duration-spinner7" ).spinner( {
			
			min: 0,
			step: 1,
			numberFormat: "n",
			disabled: true,
			start: function( event, ui ) {},
			spin: function( event, ui ) {
							
			},
		});
		// set spinner initial value
		if ( $( "#cta-duration-spinner7" ).spinner( "value" ) == null )
			$( "#cta-duration-spinner7" ).spinner( "value", 0 );
			
			
		$( "#cta-duration-spinner8" ).spinner( {
			
			min: 0,
			step: 1,
			numberFormat: "n",
			disabled: true,
			start: function( event, ui ) {},
			spin: function( event, ui ) {
							
			},
		});
		// set spinner initial value
		if ( $( "#cta-duration-spinner8" ).spinner( "value" ) == null )
			$( "#cta-duration-spinner8" ).spinner( "value", 0 );
		
		
		$( "#cta-duration-spinner9" ).spinner( {
			
			min: 0,
			step: 1,
			numberFormat: "n",
			disabled: true,
			start: function( event, ui ) {},
			spin: function( event, ui ) {
							
			},
		});
		// set spinner initial value
		if ( $( "#cta-duration-spinner9" ).spinner( "value" ) == null )
			$( "#cta-duration-spinner9" ).spinner( "value", 0 );
			
			
		$( "#cta-duration-spinner10" ).spinner( {
			
			min: 0,
			step: 1,
			numberFormat: "n",
			disabled: true,
			start: function( event, ui ) {},
			spin: function( event, ui ) {
							
			},
		});
		// set spinner initial value
		if ( $( "#cta-duration-spinner10" ).spinner( "value" ) == null )
			$( "#cta-duration-spinner10" ).spinner( "value", 0 );
		
		
		$( "#cta-border-radius-spinner" ).spinner( {
			
			min: 0,
			step: 1,
			numberFormat: "n",
			start: function( event, ui ) {},
			spin: function( event, ui ) {
					$( '#cta-dimensions' ).css( 'border-radius', ui.value );		
			},
		});
		// set spinner initial value
		if ( $( "#cta-border-radius-spinner" ).spinner( "value" ) == null )
			$( "#cta-border-radius-spinner" ).spinner( "value", 0 );
		
		$( "#cta-effect-spinner" ).spinner( {
			
			min: 0,
			max: 3000,
			step: 100,
			numberFormat: "n",
			start: function( event, ui ) {},
			spin: function( event, ui ) {
							
			},
		});
		// set spinner initial value
		if ( $( "#cta-effect-spinner" ).spinner( "value" ) == null )
			$( "#cta-effect-spinner" ).spinner( "value", 600 );
		 
		//startWidth = $( '#cta-preview' ).css( 'width' );
		//startHeight = $( '#cta-preview' ).css( 'height' );
		
		
		
		
		
		// set spinner width to mockup video preview
		if ( $( '#cta-width-spinner' ).val() == 0 )
			$( "#cta-width-spinner" ).spinner( 'value', $( '#cta-preview' ).width() );
		// set spinner height to mockup video preview
		if ( $( '#cta-height-spinner' ).val() == 0 )
			$( "#cta-height-spinner" ).spinner( 'value', $( '#cta-preview' ).height() );
		
		// initialize margin spinner with zero
		//$( '#cta-margin-top-spinner' ).spinner( 'value', '0' );
		//$( '#cta-margin-left-spinner' ).spinner( 'value', '0' );
		
		// initialize border spinner withn zero
		//$( '#cta-border-spinner' ).spinner( 'value', '0' );
		
		// set cta dimensions to mockup size
		//$( '#cta-dimensions' ).width( startWidth );
		//$( '#cta-dimensions' ).height( startHeight );
	
	// click event not needed in tabbed navigation; settings button is not active
	//});
	/*
		$( '#videnpro-save-cta' ).on( 'click', function() {
		
			alert('Hallo');
			//$( '#cta-dimensions').html( 'Test' + $( '#tinymce').val() );
		
			if (jQuery("#wp-content-wrap").hasClass("tmce-active")){
        return tinyMCE.activeEditor.getContent();
    }else{
        return jQuery('#html_text_area_id').val();
    }
		
		});
	*/
	

});