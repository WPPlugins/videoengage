jQuery(document).ready(function($) {

	var ctaDelayOne = $( '.play-button-pulse-vimeo' ).attr( 'data-delay1' );
	var ctaDelayTwo = $( '.play-button-pulse-vimeo' ).attr( 'data-delay2' );
	var ctaDelayThree = $( '.play-button-pulse-vimeo' ).attr( 'data-delay3' );
	var ctaDelayFour = $( '.play-button-pulse-vimeo' ).attr( 'data-delay4' );
	var ctaDelayFive = $( '.play-button-pulse-vimeo' ).attr( 'data-delay5' );
	var ctaDelaySix = $( '.play-button-pulse-vimeo' ).attr( 'data-delay6' );
	var ctaDelaySeven = $( '.play-button-pulse-vimeo' ).attr( 'data-delay7' );
	var ctaDelayEight = $( '.play-button-pulse-vimeo' ).attr( 'data-delay8' );
	var ctaDelayNine = $( '.play-button-pulse-vimeo' ).attr( 'data-delay9' );
	var ctaDelayTen = $( '.play-button-pulse-vimeo' ).attr( 'data-delay10' );
	var ctaPostOne = $( '.play-button-pulse-vimeo' ).attr( 'data-delay-post1' );
	var ctaPostTwo = $( '.play-button-pulse-vimeo' ).attr( 'data-delay-post2' );
	var ctaPostThree = $( '.play-button-pulse-vimeo' ).attr( 'data-delay-post3' );
	var ctaPostFour = $( '.play-button-pulse-vimeo' ).attr( 'data-delay-post4' );
	var ctaPostFive = $( '.play-button-pulse-vimeo' ).attr( 'data-delay-post5' );
	var ctaPostSix = $( '.play-button-pulse-vimeo' ).attr( 'data-delay-post6' );
	var ctaPostSeven = $( '.play-button-pulse-vimeo' ).attr( 'data-delay-post7' );
	var ctaPostEight = $( '.play-button-pulse-vimeo' ).attr( 'data-delay-post8' );
	var ctaPostNine = $( '.play-button-pulse-vimeo' ).attr( 'data-delay-post9' );
	var ctaPostTen = $( '.play-button-pulse-vimeo' ).attr( 'data-delay-post10' );

	var ctaDurationOne = $( '.play-button-pulse-vimeo' ).attr( 'data-duration1' );
	var ctaDurationTwo = $( '.play-button-pulse-vimeo' ).attr( 'data-duration2' );
	var ctaDurationThree = $( '.play-button-pulse-vimeo' ).attr( 'data-duration3' );
	var ctaDurationFour = $( '.play-button-pulse-vimeo' ).attr( 'data-duration4' );
	var ctaDurationFive = $( '.play-button-pulse-vimeo' ).attr( 'data-duration5' );
	var ctaDurationSix = $( '.play-button-pulse-vimeo' ).attr( 'data-duration6' );
	var ctaDurationSeven = $( '.play-button-pulse-vimeo' ).attr( 'data-duration7' );
	var ctaDurationEight = $( '.play-button-pulse-vimeo' ).attr( 'data-duration8' );
	var ctaDurationNine = $( '.play-button-pulse-vimeo' ).attr( 'data-duration9' );
	var ctaDurationTen = $( '.play-button-pulse-vimeo' ).attr( 'data-duration10' );
	
	var ctaAudio1 = $( '.play-button-pulse-vimeo' ).attr( 'data-sound1' );
	var ctaAudio2 = $( '.play-button-pulse-vimeo' ).attr( 'data-sound2' );
	var ctaAudio3 = $( '.play-button-pulse-vimeo' ).attr( 'data-sound3' );
	var ctaAudio4 = $( '.play-button-pulse-vimeo' ).attr( 'data-sound4' );
	var ctaAudio5 = $( '.play-button-pulse-vimeo' ).attr( 'data-sound5' );
	var ctaAudio6 = $( '.play-button-pulse-vimeo' ).attr( 'data-sound6' );
	var ctaAudio7 = $( '.play-button-pulse-vimeo' ).attr( 'data-sound7' );
	var ctaAudio8 = $( '.play-button-pulse-vimeo' ).attr( 'data-sound8' );
	var ctaAudio9 = $( '.play-button-pulse-vimeo' ).attr( 'data-sound9' );
	var ctaAudio10 = $( '.play-button-pulse-vimeo' ).attr( 'data-sound10' );
	
	var ctaEffect = $( '.play-button-pulse-vimeo' ).attr( 'data-cta-effect' );
	var ctaEffectDuration = parseInt( $( '.play-button-pulse-vimeo' ).attr( 'data-cta-effect-duration' ) );
	var closeButtonCta = $( '.play-button-pulse-vimeo' ).attr( 'data-close-button' );
		
	var showCta = $( '.cta-display' ).attr( 'data-cta');
	var ctaDone = false;
	var ctaStop = $( '.play-button-pulse-vimeo' ).attr( 'data-cta-stop' );
	var ctaTime = 0;
	var ctaAudio = '';
	var numberAudioFiles = 10;
	var ctaTimeout;

	var iframe = $( '#vimeo-iframe-player' );
	player = new Vimeo.Player(iframe);
	
	//controlVideos(); // not needed with vimeo player
	
	
// autoplay
	$('#VimeoPreviewModal').on('shown.bs.modal', function (e) {
		var selfAutoplay = $( '.play-button-pulse-vimeo' ).attr( 'data-autoplay' );
		var playerControl = $( '.play-button-pulse-vimeo' ).attr( 'data-control' );
		
		// set cta to false
		ctaDone = false;

		// start timer
		initializeTime();
		
		if ( selfAutoplay == 'true' ) // autoplay is activated
		{
			var postId = $( '.play-button-pulse-vimeo' ).attr( 'data-id' );
			var thumbnailName = '.yt-thumbnail' + $( '.play-button-pulse-vimeo' ).attr( 'data-imname' );
			// hide play button
			$( 'i#play-button-' + postId ).hide();
			$( '.play-button-pulse-vimeo' ).hide();
			
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
			
				
			$( '#vimeo-iframe-player' ).css( 'display', 'block' );
			
			// play video
			player.play();	
		
		}
		
	});
	

/* click on play button */

// preview self hosted modal closed
	$('#VimeoPreviewModal').on('hidden.bs.modal', function (e) {
		
		var postId = $( '.play-button-pulse-vimeo' ).attr( 'data-id' );
		var playerControl = $( '.play-button-pulse-vimeo' ).attr( 'data-control' );

		// clear timer
		clearInterval( time_update_interval );
		clearInterval( ctaTimeout );
		
		// thumbnail name
		var thumbnailName = '.yt-thumbnail' + $( '.play-button-pulse-vimeo' ).attr( 'data-imname' );
		
		// thumbnail link
		var thumbnailLink = $( '#videnpro_thumbnail_image_link' ).val();
		
		// hide player
		$( '#vimeo-iframe-player').css( 'display', 'none' );
		
		// show thumbnail
		$( thumbnailName ).css( "background", "url(" +  thumbnailLink + ") center center" );
		
		//be sure stop & rewind all audio files
		for ( i = 1; i <= numberAudioFiles; i++ ) 
		{
			$("#vimeo-cta-audio" + i + "-" + postId).trigger('pause');
			$("#vimeo-cta-audio" + i + "-" + postId).currentTime = 0;
		}
		
		// show play button		
		$( 'i#play-button-' + postId ).show();
		$( '.play-button-pulse-vimeo' ).show();
		
		// stop, rewind and load player
		player.pause();
		player.setCurrentTime(0);
		
		
		
		//$('#self-video-player').attr( "src", '' ) .val();
		// hide cta
		$( '.cta-display' ).hide();
		
		// hide stop video window, needed to start video again by showing the modal
		$( '#yt-nostop-window' ).hide();
		// reload player
		//$('#yt-iframe-player').attr("src", $('#yt-iframe-player').attr("src"));
		
		//$( thumbnailName ).css( "background", "url(" +  thumbnailLink + ") center center" );
		//show play button
		//$( '.play-button-pulse-vimeo' ).show();
	});

		// click on play button
	$( '.play-button-pulse-vimeo' ).on('click', function() {
		if ( $( this ).attr( 'data-source' ) == 'vimeo' ) // check if video is youtube or self-hosted
		{
			var postId = $( this ).attr( 'data-id' );
			var playerControl = $( '.play-button-pulse-vimeo' ).attr( 'data-control' );

			for ( i = 1; i <= numberAudioFiles; i++ ) 
			{
				link = "ctaAudio" + i;
				$("#vimeo-cta-audio" + i + "-" + postId).attr( 'src', eval( "ctaAudio" + i ) );
				$("#vimeo-cta-audio" + i + "-" + postId).trigger('play');
				$("#vimeo-cta-audio" + i + "-" + postId).trigger('pause');				
			}
			
			// thumbnail name
			var thumbnailName = '.yt-thumbnail' + $( this ).attr( 'data-imname' );
			
			// hide play button
			$( 'i#play-button-' + postId ).hide();
			$( '.play-button-pulse-vimeo' ).hide();
			
			// hide thumbail image
			$( thumbnailName ).css( 'background', 'none');
			
			// check if nostop is enabled
			if ( $( '#yt-nostop-window'  ).attr( 'data-stop' ) == 'false' || $( '#yt-nostop-window'  ).attr( 'data-stop' ) == '' )
				$( '#yt-nostop-window' ).show();
				
			if ( playerControl == 'true' )
			{
				//$( '#vimeo-iframe-player' ).attr( 'controls', ''); // does not work with vimeo player
			}
			else
				//$( '#self-video-player' ).removeAttr( 'controls' ); // does not work with vimeo player
				
			$( '#vimeo-iframe-player' ).css( 'display', 'block' );
			
			// play video
			player.play();	
		
		}
	  });
	  
	function controlVideos() {
		// control html5 video in backend
		var playerControl = $( '.play-button-pulse-vimeo' ).attr( 'data-control' );
		
			if ( playerControl == 'true' )	// return because player control is on and player controls play/pause so we do not need to do that
				return;
			
			$( '#vimeo-iframe-player' ).on( 'click', function() {			
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
	
			player.getCurrentTime().then(function(seconds) {
				currentTime = formatTime(seconds);
			}).catch(function(error) {
				// an error occurred
			});
			
			player.getDuration().then(function(seconds) {
				duration = formatTime(seconds);
			}).catch(function(error) {
				// an error occurred
			});
			
			// reach end of video & check if end thumnail has to be shown
			var durationBuffer = parseInt( $( ".play-button-pulse-vimeo" ).attr( "data-thumbnail-duration-buffer" ) );
			if ( currentTime >= duration+durationBuffer && currentTime != 0 && $( '#videnpro_thumbnail_end_image' ).attr( 'src' ) != '' ) {
				// thumbnail name
				var thumbnailName = '.yt-thumbnail' + $( '.play-button-pulse-vimeo' ).attr( 'data-imname' );
				
				// hide yt player
				$( '#vimeo-iframe-player' ).css( 'display', 'none' );
				// show thumbail image
				
			}
			
			// set Time Array to zero; then cta can fire again
			if ( ctaTime > currentTime )
				ctaTime = 0;
			
			var postId = $( '.play-button-pulse-vimeo' ).attr( 'data-id' );
					//alert('timer');
			
			//console.log( 'timer: ' + currentTime + ' ' + showCta + ' ' + ctaDone + ' '  + ctaEffectDuration );
			
			$( '#vimeo-video-current-time' ).text(formatTime( currentTime ));
			$( '#vimeo-video-duration-time' ).text(formatTime( duration ));
			
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
								player.pause(); // pause player
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
									$( '#cta-display-vimeo-' + postId ).removeAttr( 'style' );
									//$( '.cta-display' ).removeAttr( 'style' );
									$( '#cta-display-vimeo-' + postId ).html( $( '#cta-post-content1' ).html() );
									$( $( '#cta-post-content1' ).attr( 'data-styles' ) ).appendTo( $( '#cta-display-vimeo-' + postId ) );
								}
								else
								{
									$( '#cta-display-vimeo-' + postId ).removeAttr( 'style' );
									$( '#cta-display-vimeo-' + postId ).html( $( '#cta-post-content-nopost' ).html() );
									$( $( '#cta-post-content-nopost' ).attr( 'data-styles-vimeo' ) ).appendTo( $( '#cta-display-vimeo-' + postId ) );
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
									var divMarginLeft = parseInt( $( '#cta-display-vimeo-' + postId ).css( 'margin-left' ) );
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
									var divMarginLeft = parseInt( $( '#cta-display-vimeo-' + postId ).css( 'margin-left' ) );
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
									var divMarginTop = parseInt( $( '#cta-display-vimeo-' + postId ).css( 'top' ) );
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
									var divMarginTop = parseInt( $( '#cta-display-vimeo-' + postId ).css( 'top' ) );
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
										var divMarginTop = parseInt( $( '#cta-display-vimeo-' + postId ).css( 'top' ) );
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
			if ( $( '.play-button-pulse' ).attr( 'data-source' ) == 'vimeo' ) {
				e.preventDefault(); // do not follow cta link url
				if ( ctaStop == 'true' )
					$( '#self-video-player' )[0].play(); // play video
				$( '.cta-display' ).fadeOut();
				var postId = $( '.play-button-pulse-vimeo' ).attr( 'data-id' );
				//be sure stop & rewind all audio files
				for ( i = 1; i <= numberAudioFiles; i++ ) 
				{
					$("#vimeo-cta-audio" + i + "-" + postId).trigger('pause');
					$("#vimeo-cta-audio" + i + "-" + postId).prop( "currentTime", 0);
				}
				if ( ctaAudio != "" )
					$( '#yt-nostop-window' ).hide();
				if ( ctaStop == 'true' || ctaAudio !="" )
					player.play();
				
					// check which cta was closed and set it to false
					
						ctaDone = false;
			}
					
		});
		
		function CloseButtonDisplay( wert, duration, contentNr ) {
			$( 'i#close' ).show(); // show close button by default
			$( 'i#close' ).show(); // show close button by default
			if ( closeButtonCta == 'true' )
			{
				if ( duration != 0) // cta will disappear automatically
				{
					$( 'i#close').hide(); // hide close button
					$( 'i#close').hide(); // hide close button of sites or articles					
				}
			}
		}
		
		function autoDelayFunction( wert, duration, number ) {
			var selfAutoplay = $( '.play-button-pulse-vimeo' ).attr( 'data-autoplay' );
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
				$("#vimeo-cta-audio" + number + "-" + wert).trigger('play');
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
						  $("#vimeo-cta-audio" + number + "-" + wert).trigger('pause');
						  //set play time to 0
						  $("#vimeo-cta-audio" + number + "-" + wert).prop("currentTime",0);
					}
					ctaDone = false;
					if ( $( '#yt-nostop-window' ).attr( 'data-stop' ) == 'true' )
							$( '#yt-nostop-window' ).hide();
					if ( ctaStop == 'true' || eval( "ctaAudio" + number ) !="" )
						player.play(); // play video
				}, duration * 1000)			
			}		
		}


});