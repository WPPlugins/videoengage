jQuery(document).ready(function($) {

	//$( '.cta-display' ).hide();
	var postId = $( '.play-button-pulse' ).attr( 'data-id' );
	// cta close button color
	//$( '#cta-display-' + postId + ' i.fa.fa-times' ).css( 'color', $( '#cta-display-' + postId ).attr( 'data-bt-color' ) );	

	// loop throug all video mockups for autoplay
	$('.play-button-pulse').each(function(){
		var postId =  $( this ).attr( 'data-id' );
		var autoPlay = $( this ).attr( 'data-autoplay' );
		var showCta = $( this ).attr( 'data-cta' );
		var ytControl = '&controls=0';
		// set player controls
		if ( $( this ).attr( 'data-control' ) == 'true' )
			ytControl = '&controls=1';
		if ( autoPlay == 'true' ) {
			//  find video with autoplay
			var thumbnailName = '.yt-thumbnail' + $( this ).attr( 'data-imname' );
			var ytAutoplay = '?rel=0&amp;autoplay=1';
			// youtube link
			var ytLink = "https://www.youtube.com/embed/";
			// youtube id
			var ytId = $( '#youtube-preview-' + postId ).attr( 'data-ytid' );
			// hide thumbail image
			//$( thumbnailName ).css( 'display', 'block' );
			//$( thumbnailName ).delay( 3000 ).css( 'display', 'none' );
			// hide play button
			//$( 'i#play-button-' + postId ).hide();
			
			//$( thumbnailName ).fadeOut( 'slow' );
		
			// set timeout for play button & background
			setTimeout(function(){
			  $( thumbnailName ).css( 'background', 'none');
			  $( 'i#play-button-' + postId ).hide();
			  $( '#yt-iframe-player-' + postId ).css( 'display', 'block' )			
				//$( '#yt-iframe-player-' + postId ).hide();
				
				}, 1000 );
			$('#yt-iframe-player-' + postId ).attr( "src", ytLink + ytId + ytAutoplay + ytControl ).val();
			
			// check if nostop is enabled
			if ( $( '#yt-nostop-window-' + postId ).attr( 'data-stop' ) == 'false' )
				$( '#yt-nostop-window-' + postId ).show();
			// cta delay
			if ( showCta == 'true' )
				$( '#cta-display-' + postId ).delay( $( '#cta-display-' + postId ).attr( "data-delay1" ) * 1000 ).fadeIn();
		
			
		}
	});
	
	
	// thumbnail link
	var thumbnailLink = $( '#videnpro_thumbnail_image_link' ).val();
	
	
	
	// youtube link
	var ytLink = "https://www.youtube.com/embed/";	
	
	
	
		//console.log( 'width '+ widthDiv + ' height ' + heightDiv );
	
	// click on play button
	$( '.play-button-pulse' ).on('click', function() {
		var postId = $( this ).attr( 'data-id' );
		var showCta = $( this ).attr( 'data-cta' );
		var effect = $( this ).attr( 'data-cta-effect' );
		var effectDuration = parseInt( $( this ).attr( 'data-cta-effect-duration' ) );
		
		//$( 'a div#cta-display-40.cta-display:hover' ).css( 'color', '' );		
			
			
			
		
		// thumbnail name
		var thumbnailName = '.yt-thumbnail' + $( this ).attr( 'data-imname' );
		
		// youtube autoplay, set autoplay always to 1 because of the custom thumbnail and play button
		var ytAutoplay = '?rel=0&amp;autoplay=1';
		
		if ( $( '.cta-display' ).attr( 'data-autoplay' ) == 'true' )
			ytAutoplay = '?rel=0&amp;autoplay=1';
		
		// hide thumbail image
		$( thumbnailName ).css( 'background', 'none');
		
		//startTimer();
		// check if nostop is enabled
		if ( $( '#yt-nostop-window-' + postId ).attr( 'data-stop' ) == 'false' )
			$( '#yt-nostop-window-' + postId ).show();
		// cta delay
		if ( showCta == 'true' )
		{
			if ( effect == '' || effect == 'none' )
				$( '#cta-display-' + postId ).delay( $( '#cta-display-' + postId ).attr( "data-delay1" ) * 1000 ).show(0); // no effect
			else
				$( '#cta-display-' + postId ).delay( $( '#cta-display-' + postId ).attr( "data-delay1" ) * 1000 ).toggle( effect, effectDuration );
		}				
		
		
		// youtube id
		var ytId = $( '#youtube-preview-' + postId ).attr( 'data-ytid' );
		//$( thumbnailName ).fadeOut( 'slow' );
	
		$( '#yt-iframe-player-' + postId ).css( 'display', 'block' );
		$( 'i#play-button-' + postId ).hide();
		$( '#yt-iframe-player-' + postId ).hide();
		$('#yt-iframe-player-' + postId ).attr( "src", ytLink + ytId + ytAutoplay ) .val();
		$( '#yt-iframe-player-' + postId ).fadeIn( 1500 );
		// put in src with autoplay
		//console.log( 'link: ' +ytLink + ytId + ytAutoplay);
		//console.log( '#yt-iframe-player-' + postId );
		//$('#yt-iframe-player-' + postId ).attr( "src", ytLink + ytId + ytAutoplay ) .val();
		
		
	});
	
	/* close cta */	
	$( '.cta-display i' ).on( 'click', function(e) {
		e.preventDefault(); // do not follow cta link url
		var postId = $( this ).attr( 'data-id2' );
		$( '#cta-display-' + postId ).fadeOut();	
	});
	
	function CtaTimer(callback, delay) {
    var timerId, start, remaining = delay;

    this.pause = function() {
		alert('pause');
        window.clearTimeout(timerId);
        remaining -= new Date() - start;
    };

    this.resume = function() {
        start = new Date();
        window.clearTimeout(timerId);
        timerId = window.setTimeout(callback, remaining);
    };

    this.resume();
	}

	function startTimer() {
		var timer = new CtaTimer(function() {
		var postId = $( '.play-button-pulse' ).attr( 'data-id' );
		//alert( $( '.cta-display' ).attr( "data-delay" ) );
			$( '#cta-display-' + postId ).fadeIn();
		}, $( '#cta-display-' + postId ).attr( "data-delay1" ) * 1000 );
	}

	//timer.pause();
	// Do some stuff...
	//timer.resume();
	
	
});
	
	