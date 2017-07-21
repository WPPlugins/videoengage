jQuery(document).ready(function($) {

	$( '#player-border' ).wpColorPicker();
	
	// Add Color Picker to all inputs that have 'videnpro-color-field' class    
        $('#cta-border-color').wpColorPicker({
			change: function( event, ui ) {
				//alert('change');
				//var input = jQuery( this );
	            var color = ui.color.toString();
				//$( '#cta-dimensions' ).css( 'border', $( "#cta-border-spinner" ).val() + 'px solid' + color );
				$( '#cta-dimensions' ).css( 'border-color', color );				

				//input.trigger( 'change' );
			},
			
		
		});
		
		$('#cta-background-color').wpColorPicker({
			change: function( event, ui ) {
				//alert('change');
				//var input = jQuery( this );
	            var color = ui.color.toString();
				//$( '#cta-dimensions' ).css( 'border', $( "#cta-border-spinner" ).val() + 'px solid' + color );
				$( '#cta-dimensions' ).css( 'background-color', color );				

				//input.trigger( 'change' );
			},
		 });
			
		$('#cta-close-button-color').wpColorPicker({
			change: function( event, ui ) {
				//alert('change');
				//var input = jQuery( this );
	            var color = ui.color.toString();
				//$( '#cta-dimensions' ).css( 'border', $( "#cta-border-spinner" ).val() + 'px solid' + color );
				$( '#cta-preview div#cta-dimensions i.fa.fa-times' ).css( 'color', color );	
				$( '.yt-thumbnail_cd div.cta-display i.fa.fa-times' ).css( 'color', color );	

				//input.trigger( 'change' );
			},
			
		
		});
		
		$('#cta-play-button-color').wpColorPicker({
			change: function( event, ui ) {
				//alert('change');
				//var input = jQuery( this );
	            var color = ui.color.toString();
				//$( '#cta-dimensions' ).css( 'border', $( "#cta-border-spinner" ).val() + 'px solid' + color );
				$( '#cta-preview div#cta-dimensions i.fa.fa-times' ).css( 'color', color );	
				$( '.yt-thumbnail_cd div.cta-display i.fa.fa-times' ).css( 'color', color );	

				//input.trigger( 'change' );
			},
			
		
		});
    
});