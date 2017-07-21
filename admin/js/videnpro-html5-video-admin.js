jQuery(document).ready(function($) {

	var ctaDelayOne = $( '.play-button-pulse-self' ).attr( 'data-delay1' );
	var ctaDelayTwo = $( '.play-button-pulse-self' ).attr( 'data-delay2' );
	var ctaDelayThree = $( '.play-button-pulse-self' ).attr( 'data-delay3' );
	var ctaDelayFour = $( '.play-button-pulse-self' ).attr( 'data-delay4' );
	var ctaDelayFive = $( '.play-button-pulse-self' ).attr( 'data-delay5' );
	var ctaDelaySix = $( '.play-button-pulse-self' ).attr( 'data-delay6' );
	var ctaDelaySeven = $( '.play-button-pulse-self' ).attr( 'data-delay7' );
	var ctaDelayEight = $( '.play-button-pulse-self' ).attr( 'data-delay8' );
	var ctaDelayNine = $( '.play-button-pulse-self' ).attr( 'data-delay9' );
	var ctaDelayTen = $( '.play-button-pulse-self' ).attr( 'data-delay10' );
	var ctaPostOne = $( '.play-button-pulse-self' ).attr( 'data-delay-post1' );
	var ctaPostTwo = $( '.play-button-pulse-self' ).attr( 'data-delay-post2' );
	var ctaPostThree = $( '.play-button-pulse-self' ).attr( 'data-delay-post3' );
	var ctaPostFour = $( '.play-button-pulse-self' ).attr( 'data-delay-post4' );
	var ctaPostFive = $( '.play-button-pulse-self' ).attr( 'data-delay-post5' );
	var ctaPostSix = $( '.play-button-pulse-self' ).attr( 'data-delay-post6' );
	var ctaPostSeven = $( '.play-button-pulse-self' ).attr( 'data-delay-post7' );
	var ctaPostEight = $( '.play-button-pulse-self' ).attr( 'data-delay-post8' );
	var ctaPostNine = $( '.play-button-pulse-self' ).attr( 'data-delay-post9' );
	var ctaPostTen = $( '.play-button-pulse-self' ).attr( 'data-delay-post10' );

	var ctaDurationOne = $( '.play-button-pulse-self' ).attr( 'data-duration1' );
	var ctaDurationTwo = $( '.play-button-pulse-self' ).attr( 'data-duration2' );
	var ctaDurationThree = $( '.play-button-pulse-self' ).attr( 'data-duration3' );
	var ctaDurationFour = $( '.play-button-pulse-self' ).attr( 'data-duration4' );
	var ctaDurationFive = $( '.play-button-pulse-self' ).attr( 'data-duration5' );
	var ctaDurationSix = $( '.play-button-pulse-self' ).attr( 'data-duration6' );
	var ctaDurationSeven = $( '.play-button-pulse-self' ).attr( 'data-duration7' );
	var ctaDurationEight = $( '.play-button-pulse-self' ).attr( 'data-duration8' );
	var ctaDurationNine = $( '.play-button-pulse-self' ).attr( 'data-duration9' );
	var ctaDurationTen = $( '.play-button-pulse-self' ).attr( 'data-duration10' );
	
	var ctaAudio1 = $( '.play-button-pulse-self' ).attr( 'data-sound1' );
	var ctaAudio2 = $( '.play-button-pulse-self' ).attr( 'data-sound2' );
	var ctaAudio3 = $( '.play-button-pulse-self' ).attr( 'data-sound3' );
	var ctaAudio4 = $( '.play-button-pulse-self' ).attr( 'data-sound4' );
	var ctaAudio5 = $( '.play-button-pulse-self' ).attr( 'data-sound5' );
	var ctaAudio6 = $( '.play-button-pulse-self' ).attr( 'data-sound6' );
	var ctaAudio7 = $( '.play-button-pulse-self' ).attr( 'data-sound7' );
	var ctaAudio8 = $( '.play-button-pulse-self' ).attr( 'data-sound8' );
	var ctaAudio9 = $( '.play-button-pulse-self' ).attr( 'data-sound9' );
	var ctaAudio10 = $( '.play-button-pulse-self' ).attr( 'data-sound10' );
	
	var ctaEffect = $( '.play-button-pulse-self' ).attr( 'data-cta-effect' );
	var ctaEffectDuration = parseInt( $( '.play-button-pulse-self' ).attr( 'data-cta-effect-duration' ) );
	var closeButtonCta = $( '.play-button-pulse-self' ).attr( 'data-close-button' );
	
	var showCta = $( '.cta-display' ).attr( 'data-cta');
	var ctaDone = false;
	var ctaStop = $( '.play-button-pulse-self' ).attr( 'data-cta-stop' );
	var ctaTime = 0;
	var ctaAudio = '';
	var numberAudioFiles = 10;
	var ctaTimeout;

	controlVideos();
	
	
// autoplay
	$('#SelfHostedPreviewModal').on('shown.bs.modal', function (e) {
		var selfAutoplay = $( '.play-button-pulse-self' ).attr( 'data-autoplay' );
		var playerControl = $( '.play-button-pulse-self' ).attr( 'data-control' );
		
		// set cta to false
		ctaDone = false;

		// start timer
		initializeTime();
		
		if ( selfAutoplay == 'true' ) // autoplay is activated
		{
			var postId = $( '.play-button-pulse-self' ).attr( 'data-id' );
			var thumbnailName = '.yt-thumbnail' + $( '.play-button-pulse-self' ).attr( 'data-imname' );
			// hide play button
			$( 'i#play-button-' + postId ).hide();
			$( '.play-button-pulse-self' ).hide();
			
			// hide thumbail image
			$( thumbnailName ).css( 'background', 'none');
			
			// check if nostop is enabled
			if ( $( '#html5-nostop-window'  ).attr( 'data-stop' ) == 'false' || $( '#html5-nostop-window'  ).attr( 'data-stop' ) == '' )
				$( '#html5-nostop-window' ).show();
				
			if ( playerControl == 'true' )
			{
				$( '#self-video-player' ).attr( 'controls', '');
			}
			else
				$( '#self-video-player' ).removeAttr( 'controls' );
				
			$( '#self-video-player' ).css( 'display', 'block' );
			
			// play video
			$( '#self-video-player' )[0].play();	
		
		}
		
	});
	

/* click on play button */

// preview self hosted modal closed
	$('#SelfHostedPreviewModal').on('hidden.bs.modal', function (e) {
		
		var postId = $( '.play-button-pulse-self' ).attr( 'data-id' );
		var playerControl = $( '.play-button-pulse-self' ).attr( 'data-control' );

		// clear timer
		clearInterval( time_update_interval );
		clearInterval( ctaTimeout );
		
		// thumbnail name
		var thumbnailName = '.yt-thumbnail' + $( '.play-button-pulse-self' ).attr( 'data-imname' );
		
		// thumbnail link
		var thumbnailLink = $( '#videnpro_thumbnail_image_link' ).val();
		
		// hide player
		$( '#self-video-player').css( 'display', 'none' );
		
		// show thumbnail
		$( thumbnailName ).css( "background", "url(" +  thumbnailLink + ") center center" );
		
		//be sure stop & rewind all audio files
		for ( i = 1; i <= numberAudioFiles; i++ ) 
		{
			$("#yt-cta-audio" + i + "-" + postId).trigger('pause');
			$("#yt-cta-audio" + i + "-" + postId).currentTime = 0;
		}
		
		// show play button		
		$( 'i#play-button-' + postId ).show();
		$( '.play-button-pulse-self' ).show();
		
		// stop, rewind and load player
		$('#self-video-player')[0].pause();
		$('#self-video-player')[0].currentTime = 0;
		$('#self-video-player')[0].load();
		
		//$('#self-video-player').attr( "src", '' ) .val();
		// hide cta
		$( '.cta-display' ).hide();
		
		// hide stop video window, needed to start video again by showing the modal
		$( '#html5-nostop-window' ).hide();
		// reload player
		//$('#yt-iframe-player').attr("src", $('#yt-iframe-player').attr("src"));
		
		//$( thumbnailName ).css( "background", "url(" +  thumbnailLink + ") center center" );
		//show play button
		//$( '.play-button-pulse-self' ).show();
	});

		// click on play button
	$( '.play-button-pulse-self' ).on('click', function() {
		if ( $( this ).attr( 'data-source' ) == 'self-hosted' ) // check if video is youtube or self-hosted
		{
			var postId = $( this ).attr( 'data-id' );
			var playerControl = $( '.play-button-pulse-self' ).attr( 'data-control' );

			for ( i = 1; i <= numberAudioFiles; i++ ) 
			{
				link = "ctaAudio" + i;
				$("#yt-cta-audio" + i + "-" + postId).attr( 'src', eval( "ctaAudio" + i ) );
				$("#yt-cta-audio" + i + "-" + postId).trigger('play');
				$("#yt-cta-audio" + i + "-" + postId).trigger('pause');				
			}
			
			// thumbnail name
			var thumbnailName = '.yt-thumbnail' + $( this ).attr( 'data-imname' );
			
			// hide play button
			$( 'i#play-button-' + postId ).hide();
			$( '.play-button-pulse-self' ).hide();
			
			// hide thumbail image
			$( thumbnailName ).css( 'background', 'none');
			
			// check if nostop is enabled
			if ( $( '#html5-nostop-window'  ).attr( 'data-stop' ) == 'false' || $( '#html5-nostop-window'  ).attr( 'data-stop' ) == '' )
				$( '#html5-nostop-window' ).show();
				
			if ( playerControl == 'true' )
			{
				$( '#self-video-player' ).attr( 'controls', '');
			}
			else
				$( '#self-video-player' ).removeAttr( 'controls' );
				
			$( '#self-video-player' ).css( 'display', 'block' );
			
			// play video
			$( '#self-video-player' )[0].play();	
		
		}
	  });
	  
	function controlVideos() {
		// control html5 video in backend
		var playerControl = $( '.play-button-pulse-self' ).attr( 'data-control' );
		
			if ( playerControl == 'true' )	// return because player control is on and player controls play/pause so we do not need to do that
				return;
			
			$( '#self-video-player' ).on( 'click', function() {			
				if ( this.paused ) {
					this.play();
					timer.resume();
				}
				else {
					this.pause();
					timer.pause();
				}			
			});		
	}
	
	function initializeTime() {
		
			time_update_interval = setInterval(function () {
				updateTimerDisplay();				
			}, 1000)
		
	}
	
	function updateTimerDisplay() {
	
			var vid = $( '#self-video-player' )[0];
			currentTime = formatTime( vid.currentTime );
			duration = formatTime( vid.duration ); // get duration of video
			
			// reach end of video & check if end thumnail has to be shown
			var durationBuffer = parseInt( $( ".play-button-pulse-self" ).attr( "data-thumbnail-duration-buffer" ) );
			if ( currentTime >= duration+durationBuffer && currentTime != 0 && $( '#videnpro_thumbnail_end_image' ).attr( 'src' ) != '' ) {
				// thumbnail name
				var thumbnailName = '.yt-thumbnail' + $( '.play-button-pulse-self' ).attr( 'data-imname' );
				
				// hide yt player
				$( '#self-video-player' ).css( 'display', 'none' );
				// show thumbail image
				
			}
			
			// set Time Array to zero; then cta can fire again
			if ( ctaTime > currentTime )
				ctaTime = 0;
			
			var postId = $( '.play-button-pulse-self' ).attr( 'data-id' );
					//alert('timer');
			
			//console.log( 'timer: ' + currentTime + ' ' + showCta + ' ' + ctaDone + ' '  + ctaEffectDuration );
			
			$( '#self-video-current-time' ).text(formatTime( currentTime ));
			$( '#self-video-duration-time' ).text(formatTime( duration ));
			
			// close cta if duration is > 0
			//console.log( showCtaArray[ index ] + ' ' + ctaDoneArray[ index ] );
			/*
			if ( showCta == 'true' && ctaDone == true ) 
			{
				if ( ctaDurationOne == currentTime || ctaDurationTwo == currentTime || ctaDurationThree == currentTime || ctaDurationFour == currentTime || ctaDurationFive == currentTime  || ctaDurationSix == currentTime || ctaDurationSeven == currentTime || ctaDurationEight == currentTime || ctaDurationNine == currentTime || ctaDurationTen == currentTime ) // bingo duration time reached; close cta
				{
					$( '.cta-display' ).fadeOut();
					ctaDone = false;
					if ( ctaStop == 'true' )
						$( '#self-video-player' )[0].play(); // play video
				}
			
			}
			*/
				if ( showCta == 'true' && ctaDone == false  && ctaTime != currentTime && currentTime != 0 ) // check if cta is on and was not shown
					{
				
						if ( ctaDelayOne == currentTime || ctaDelayTwo == currentTime || ctaDelayThree == currentTime || ctaDelayFour == currentTime || ctaDelayFive == currentTime || ctaDelaySix == currentTime || ctaDelaySeven == currentTime || ctaDelayEight == currentTime || ctaDelayNine == currentTime || ctaDelayTen == currentTime )  // bingo, playtime is delay and cta is shown
						{
							if ( ctaStop == 'true' ) {
								$( '#self-video-player' )[0].pause(); // pause player
								ctaTime = currentTime;
							}
							
							// decide whether to show cta post, cta html or cta editor content
							if ( ctaDelayOne == currentTime ) {
								duration = ctaDurationOne;
								contentNr = 1;
								CloseButtonDisplay( postId, duration, contentNr ); // check if close button should be displayed
							
								// clone post content for cta
								if ( ctaPostOne != '' )
								{
									$( '#cta-display-self-' + postId ).removeAttr( 'style' );
									//$( '.cta-display' ).removeAttr( 'style' );
									$( '#cta-display-self-' + postId ).html( $( '#cta-post-content1' ).html() );
									$( $( '#cta-post-content1' ).attr( 'data-styles' ) ).appendTo( $( '#cta-display-self-' + postId ) );
								}
								else
								{
									$( '#cta-display-self-' + postId ).removeAttr( 'style' );
									$( '#cta-display-self-' + postId ).html( $( '#cta-post-content-nopost' ).html() );
									$( $( '#cta-post-content-nopost' ).attr( 'data-styles' ) ).appendTo( $( '#cta-display-self-' + postId ) );
								}
								ctaAudio = ctaAudio1;
								autoDelayFunction( postId, duration, contentNr );
							}
						
							switch ( ctaEffect ) {
							
								case 'none':
									ctaDone = true;
									$( '.cta-display' ).show(0); // no effect
									break;
							
								case 'slide right':
									ctaDone = true;
									// in %
									var divMarginLeft = parseInt( $( '#cta-display-self-' + postId ).css( 'margin-left' ) );
									// in px
									//var divMarginLeftPx = parseInt( divMarginLeft * divWidth / 100 );
									//alert(divMarginLeft);
									$( '.cta-display' ).css( 'margin-left', '100%' );
									// percent to slide
									margin = 100 - divMarginLeft;
									
									$( '.cta-display' ).show();
									$( '.cta-display' ).animate({ "margin-left": "-=" + margin + "%" }, ctaEffectDuration );
									break;
									
								case 'slide left':
									ctaDone = true;
									// in %
									var divMarginLeft = parseInt( $( '#cta-display-self-' + postId ).css( 'margin-left' ) );
									// in px
									//var divMarginLeftPx = parseInt( divMarginLeft * divWidth / 100 );
									//alert(divMarginLeft);
									$( '.cta-display' ).css( 'margin-left', '-100%' );
									// percent to slide
									margin = 100 + divMarginLeft;
									
									$( '.cta-display' ).show();
									$( '.cta-display' ).animate({ "margin-left": "+=" + margin + "%" }, ctaEffectDuration );
									break;
									
								case 'slide up':
									ctaDone = true;
									// in %
									var divMarginTop = parseInt( $( '#cta-display-self-' + postId ).css( 'top' ) );
									// in px
									//var divMarginLeftPx = parseInt( divMarginLeft * divWidth / 100 );
									//alert(divMarginLeft);
									$( '.cta-display' ).css( 'top', '-100%' );
									margin = 100 + divMarginTop;
									
									$( '.cta-display' ).show();
									$( '.cta-display' ).animate({ "top": "+=" + margin + "%" }, ctaEffectDuration );
									break;
									
								case 'slide down':
									ctaDone = true;
									// in %
									var divMarginTop = parseInt( $( '#cta-display-self-' + postId ).css( 'top' ) );
									//var videoWindow = $( '#cta-preview' ).height();
									// in px
									//var divMarginLeftPx = parseInt( divMarginLeft * divWidth / 100 );
									//alert(divMarginTop);
									$( '.cta-display' ).css( 'top', '100%' );
									// percent to slide
									margin = 100 - divMarginTop;
									
									$( '.cta-display' ).show();
									$( '.cta-display' ).animate({ "top": "-=" + margin + "%" }, ctaEffectDuration );
									
									break;
									
								case 'pulsate':
									ctaDone = true;									
									$( '.cta-display' ).toggle( ctaEffect, ctaEffectDuration );
									break;
									
								case 'puff':
									ctaDone = true;
									$( '.cta-display' ).toggle( ctaEffect, ctaEffectDuration );
									break;
									
								case 'bounce':
									ctaDone = true;
									var isSafari = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/)
									var mobileDevice = /iPhone|iPad|iPod/i.test(navigator.userAgent);
									if ( !mobileDevice && !isSafari ) {
										var divMarginTop = parseInt( $( '#cta-display-self-' + postId ).css( 'top' ) );
										$( '.cta-display' ).css( 'top', -divMarginTop + '%' );
										$( '.cta-display' ).show();
										$('.cta-display').animate(
										{ 
											'top': divMarginTop + '%'
										}, ctaEffectDuration, 'easeOutBounce');
										//$( '.cta-display' ).effect( ctaEffect, ctaEffectDuration );
									}
									else {
										$( '#cta-display' ).show(0); // no effect
									}
									
									break;
									
								case 'clip':
									ctaDone = true;
									$( '.cta-display' ).toggle( ctaEffect, ctaEffectDuration );
									break;
									
								case 'fold':
									ctaDone = true;
									$( '.cta-display' ).toggle( ctaEffect, ctaEffectDuration );
									break;
									
								case 'fade':
									ctaDone = true;
									$( '.cta-display' ).toggle( ctaEffect, ctaEffectDuration );
									break;
								/*	
								case 'shake':
								alert('lll');
									ctaDoneArray[ index ] = true;
									$( '#cta-display-' + wert ).toggle( effect, ctaEffectDurationArray[index] );
									break;
								*/	
								default:
									ctaDone = true;
									$( '#cta-display' ).show(0); // no effect
							
							}
							
						}
					
					}
				}
			
	
	function formatTime(time) {
					
		
			time = Math.round(time);

			/*
			var minutes = Math.floor(time / 60),
			seconds = time - minutes * 60;

			seconds = seconds < 10 ? '0' + seconds : seconds;

			//return minutes + ":" + seconds;
			*/
			
			return time;
		
		}
		
	/* close cta */	
		$( document ).on( 'click', '.fa.fa-times', function(e) {
			if ( $( '.play-button-pulse' ).attr( 'data-source' ) == 'self-hosted' ) {
				e.preventDefault(); // do not follow cta link url
				if ( ctaStop == 'true' )
					$( '#self-video-player' )[0].play(); // play video
				$( '.cta-display' ).fadeOut();
				var postId = $( '.play-button-pulse-self' ).attr( 'data-id' );
				//be sure stop & rewind all audio files
				for ( i = 1; i <= numberAudioFiles; i++ ) 
				{
					$("#yt-cta-audio" + i + "-" + postId).trigger('pause');
					$("#yt-cta-audio" + i + "-" + postId).prop( "currentTime", 0);
				}
				if ( ctaAudio != "" )
					$( '#html5-nostop-window' ).hide();
				if ( ctaStop == 'true' || ctaAudio !="" )
					$( '#self-video-player' )[0].play();
				
					// check which cta was closed and set it to false
					
						ctaDone = false;
			}
					
		});
		
		function CloseButtonDisplay( wert, duration, contentNr ) {
			$( 'i#close' ).show(); // show close button by default
			//$( 'i#close' ).show(); // show close button by default
			if ( closeButtonCta == 'true' )
			{
				if ( duration != 0) // cta will disappear automatically
				{
					$( 'i#close').hide(); // hide close button
					//$( 'i#close').hide(); // hide close button of sites or articles					
				}
			}
		}
		
		function autoDelayFunction( wert, duration, number ) {
			var selfAutoplay = $( '.play-button-pulse-self' ).attr( 'data-autoplay' );
			// integrate audio if src field is not empty
			if ( eval( "ctaAudio" + number ) !=""  && selfAutoplay != 'true' )
			{
				$( '#html5-nostop-window' ).show(); // show nostop window
				/*
				$("#cta-audio-" + wert).attr( 'src', audio );
				$("#cta-audio-" + wert).trigger('load');
				//starts playing
				//$("#cta-audio-" + wert).trigger('play');
				
				/*var audioPlay = new Audio(audio);
				audioPlay.play();*/
				// stop video
				$("#yt-cta-audio" + number + "-" + wert).trigger('play');
				$( '#self-video-player' )[0].pause(); // pause video
				ctaTime = currentTime;
			}
			if ( duration != 0 )
			{
				ctaTimeout = setTimeout(function myFunction() {
					//$( '#cta-display-' + wert ).animate({ opacity: 0 }, 800, function() { });
					$( '.cta-display' ).fadeOut();
					if ( eval( "ctaAudio" + number ) !="" )
					{						
						//pause playing
						  $("#yt-cta-audio" + number + "-" + wert).trigger('pause');
						  //set play time to 0
						  $("#yt-cta-audio" + number + "-" + wert).prop("currentTime",0);
					}
					ctaDone = false;
					if ( $( '#html5-nostop-window' ).attr( 'data-stop' ) == 'true' )
							$( '#html5-nostop-window' ).hide();
					if ( ctaStop == 'true' || eval( "ctaAudio" + number ) !="" )
						$( '#self-video-player' )[0].play(); // play video
				}, duration * 1000)			
			}		
		}


});