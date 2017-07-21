jQuery(document).ready(function($) {

	/* js player code for the shortcode of hhtml5 video
	   videnpro_self
	 */
	 var counter = 0;
	 var ctaAudio = '';
	var audioPlay = '';
	var numberAudioFiles = 10;
	 var ctaTimeArray = [];
	var ctaStopArray = [];
	 var postIdArray = [];
	 var selfAutoplayArray = [];
	 var showCtaArray = [];
	var ctaDelayOneArray = [];
	var ctaDelayTwoArray = [];
	var ctaDelayThreeArray = [];
	var ctaDelayFourArray = [];
	var ctaDelayFiveArray = [];
	var ctaDelaySixArray = [];
	var ctaDelaySevenArray = [];
	var ctaDelayEightArray = [];
	var ctaDelayNineArray = [];
	var ctaDelayTenArray = [];
	var ctaPostOneArray = [];
	var ctaPostTwoArray = [];
	var ctaPostThreeArray = [];
	var ctaPostFourArray = [];
	var ctaPostFiveArray = [];
	var ctaPostSixArray = [];
	var ctaPostSevenArray = [];
	var ctaPostEightArray = [];
	var ctaPostNineArray = [];
	var ctaPostTenArray = [];
	var ctaEffectArray = [];
	var ctaEffectDurationArray = [];
	var ctaDoneArray = [];
	var mockupImageNameArray = [];
	var playerControlArray = [];
	var postContent1Array = [];
	
	var ctaDurationOneArray = [];
	var ctaDurationTwoArray = [];
	var ctaDurationThreeArray = [];
	var ctaDurationFourArray = [];
	var ctaDurationFiveArray = [];
	var ctaDurationSixArray = [];
	var ctaDurationSevenArray = [];
	var ctaDurationEightArray = [];
	var ctaDurationNineArray = [];
	var ctaDurationTenArray = [];
	
	var ctaAudio1Array = [];
	var ctaAudio2Array = [];
	var ctaAudio3Array = [];
	var ctaAudio4Array = [];
	var ctaAudio5Array = [];
	var ctaAudio6Array = [];
	var ctaAudio7Array = [];
	var ctaAudio8Array = [];
	var ctaAudio9Array = [];
	var ctaAudio10Array = [];
	
	// arrays for responsive functions
	var topPercentArray = [];
	var widthPercentArray = [];
	var heightPercentArray = [];
	var initialMockupWidthArray = [];
	var closeButtonSizeArray = [];
	var playButtonSizeArray = [];
	var initialThumbnailWidthArray = [];
	var closeButtonCtaArray = [];
	var fullscreenStatusArray = [];
	 
	 
	 // get current time of videos
	 initializeTime();
	 
	 $('.play-button-pulse').each(function() {
		if ( $( this ).attr( 'data-source' ) == 'self-hosted' ) // check if video is youtube or self-hosted
		{
			var postId = $( this ).attr( 'data-id' );
			var selfAutoplay = $( this ).attr( 'data-autoplay' );
			var showCta = $( this ).attr( 'data-cta' );	
			var closeButtonCta = $( this ).attr( 'data-close-button' );
			var ctaDelayOne = $( this ).attr( 'data-delay1' );
			var ctaDelayTwo = $( this ).attr( 'data-delay2' );
			var ctaDelayThree = $( this ).attr( 'data-delay3' );
			var ctaDelayFour = $( this ).attr( 'data-delay4' );
			var ctaDelayFive = $( this ).attr( 'data-delay5' );
			var ctaDelaySix = $( this ).attr( 'data-delay6' );
			var ctaDelaySeven = $( this ).attr( 'data-delay7' );
			var ctaDelayEight = $( this ).attr( 'data-delay8' );
			var ctaDelayNine = $( this ).attr( 'data-delay9' );
			var ctaDelayTen = $( this ).attr( 'data-delay10' );
			var ctaPostOne = $( this ).attr( 'data-delay-post1' );
			var ctaPostTwo = $( this ).attr( 'data-delay-post2' );
			var ctaPostThree = $( this ).attr( 'data-delay-post3' );
			var ctaPostFour = $( this ).attr( 'data-delay-post4' );
			var ctaPostFive = $( this ).attr( 'data-delay-post5' );
			var ctaPostSix = $( this ).attr( 'data-delay-post6' );
			var ctaPostSeven = $( this ).attr( 'data-delay-post7' );
			var ctaPostEight = $( this ).attr( 'data-delay-post8' );
			var ctaPostNine = $( this ).attr( 'data-delay-post9' );
			var ctaPostTen = $( this ).attr( 'data-delay-post10' );

			var ctaDurationOne = $( this ).attr( 'data-duration1' );
			var ctaDurationTwo = $( this ).attr( 'data-duration2' );
			var ctaDurationThree = $( this ).attr( 'data-duration3' );
			var ctaDurationFour = $( this ).attr( 'data-duration4' );
			var ctaDurationFive = $( this ).attr( 'data-duration5' );
			var ctaDurationSix = $( this ).attr( 'data-duration6' );
			var ctaDurationSeven = $( this ).attr( 'data-duration7' );
			var ctaDurationEight = $( this ).attr( 'data-duration8' );
			var ctaDurationNine = $( this ).attr( 'data-duration9' );
			var ctaDurationTen = $( this ).attr( 'data-duration10' );
			
			var ctaAudioOne = $( this ).attr( 'data-sound1' );
			var ctaAudioTwo = $( this ).attr( 'data-sound2' );
			var ctaAudioThree = $( this ).attr( 'data-sound3' );
			var ctaAudioFour = $( this ).attr( 'data-sound4' );
			var ctaAudioFive = $( this ).attr( 'data-sound5' );
			var ctaAudioSix = $( this ).attr( 'data-sound6' );
			var ctaAudioSeven = $( this ).attr( 'data-sound7' );
			var ctaAudioEight = $( this ).attr( 'data-sound8' );
			var ctaAudioNine = $( this ).attr( 'data-sound9' );
			var ctaAudioTen = $( this ).attr( 'data-sound10' );
			
			var ctaEffect = $( this ).attr( 'data-cta-effect' );
			var ctaEffectDuration = parseInt( $( this ).attr( 'data-cta-effect-duration' ) );
			var mockupImageName = $( this ).attr( 'data-imname' );
			var playerControl = $( this ).attr( 'data-control' );
			var ctaStop = $( this ).attr( 'data-cta-stop' );
			var fullscreenStatus = $( this ).attr( 'data-fullscreen' );
			
			
			if ( playerControl == 'true' )
			{
				$( '#self-video-player-' + postId ).attr( 'controls', '');
			}
			else
				$( '#self-video-player-' + postId ).removeAttr( 'controls' );
			
			// show play button
			$( 'i#play-button-' + postId ).attr( 'style', 'display:inline-block !important' );
			
			// hide content to show with delay 10 if ctashow is true && content is not empty
			if ( $('#play-button-pulse-' + postId).attr('data-delay10-content') !='' && showCta == 'true' )
				$( $('#play-button-pulse-' + postId).attr('data-delay10-content' ) ).hide();
		
			postIdArray[ counter ] = postId;
			selfAutoplayArray[ counter ] = selfAutoplay;
			showCtaArray[ counter ] = showCta;
			ctaDelayOneArray[ counter ] = ctaDelayOne;
			ctaDelayTwoArray[ counter ] = ctaDelayTwo;
			ctaDelayThreeArray[ counter ] = ctaDelayThree;
			ctaDelayFourArray[ counter ] = ctaDelayFour;
			ctaDelayFiveArray[ counter ] = ctaDelayFive;
			ctaDelaySixArray[ counter ] = ctaDelaySix;
			ctaDelaySevenArray[ counter ] = ctaDelaySeven;
			ctaDelayEightArray[ counter ] = ctaDelayEight;
			ctaDelayNineArray[ counter ] = ctaDelayNine;
			ctaDelayTenArray[ counter ] = ctaDelayTen;
			ctaPostOneArray[ counter ] = ctaPostOne;
			ctaPostTwoArray[ counter ] = ctaPostTwo;
			ctaPostThreeArray[ counter ] = ctaPostThree;
			ctaPostFourArray[ counter ] = ctaPostFour;
			ctaPostFiveArray[ counter ] = ctaPostFive;
			ctaPostSixArray[ counter ] = ctaPostSix;
			ctaPostSevenArray[ counter ] = ctaPostSeven;
			ctaPostEightArray[ counter ] = ctaPostEight;
			ctaPostNineArray[ counter ] = ctaPostNine;
			ctaPostTenArray[ counter ] = ctaPostTen;
			
			ctaDurationOneArray[ counter ] = ctaDurationOne;
			ctaDurationTwoArray[ counter ] = ctaDurationTwo;
			ctaDurationThreeArray[ counter ] = ctaDurationThree;
			ctaDurationFourArray[ counter ] = ctaDurationFour;
			ctaDurationFiveArray[ counter ] = ctaDurationFive;
			ctaDurationSixArray[ counter ] = ctaDurationSix;
			ctaDurationSevenArray[ counter ] = ctaDurationSeven;
			ctaDurationEightArray[ counter ] = ctaDurationEight;
			ctaDurationNineArray[ counter ] = ctaDurationNine;
			ctaDurationTenArray[ counter ] = ctaDurationTen;			
			
			ctaAudio1Array[ counter ] = ctaAudioOne;
			ctaAudio2Array[ counter ] = ctaAudioTwo;
			ctaAudio3Array[ counter ] = ctaAudioThree;
			ctaAudio4Array[ counter ] = ctaAudioFour;
			ctaAudio5Array[ counter ] = ctaAudioFive;
			ctaAudio6Array[ counter ] = ctaAudioSix;
			ctaAudio7Array[ counter ] = ctaAudioSeven;
			ctaAudio8Array[ counter ] = ctaAudioEight;
			ctaAudio9Array[ counter ] = ctaAudioNine;
			ctaAudio10Array[ counter ] = ctaAudioTen;
			
			ctaEffectArray[ counter ] = ctaEffect;
			ctaEffectDurationArray[ counter ] = ctaEffectDuration;
			ctaDoneArray[ counter ] = false;
			ctaTimeArray[ counter ] = 0;
			ctaStopArray[ counter ] = ctaStop;
			mockupImageNameArray[ counter ] = mockupImageName;
			playerControlArray[ counter ] = playerControl;
			closeButtonCtaArray[ counter ] = closeButtonCta;
			fullscreenStatusArray[ counter ] = fullscreenStatus;
			
			counter = counter + 1;
		}
	});
	
	// play autoplayvideos 
	autoplay();
	// control videos with click (play or pause)
	controlVideos();
	
	// click on play button
	$( '.play-button-pulse' ).on('click', function() {
		if ( $( this ).attr( 'data-source' ) == 'self-hosted' ) // check if video is youtube or self-hosted
		{
			var postId = $( this ).attr( 'data-id' );
			var showCta = $( this ).attr( 'data-cta' );
			var effect = $( this ).attr( 'data-cta-effect' );
			var effectDuration = parseInt( $( this ).attr( 'data-cta-effect-duration' ) );
		
			// thumbnail name
			var thumbnailName = '.yt-thumbnail-' + postId + $( this ).attr( 'data-imname' );
			
			// hide thumbail image
			$( thumbnailName ).css( 'background', 'none');
			
			postIdArray.forEach(function( wert, index, referenz ) {
				for ( i = 1; i<=numberAudioFiles; i++ ) 
				{
					link = "ctaAudio" + i + "Array[index]";
					$("#cta-audio" + i + "-" + wert).attr( 'src', eval( "ctaAudio" + i + "Array[index]" ) );
					$("#cta-audio" + i + "-" + wert).trigger('play');
					$("#cta-audio" + i + "-" + wert).trigger('pause');				
				}
			});
			
			
			// check if nostop is enabled
			if ( $( '#yt-nostop-window-' + postId ).attr( 'data-stop' ) == 'false' || $( '#yt-nostop-window-' + postId ).attr( 'data-stop' ) == '' )
				$( '#yt-nostop-window-' + postId ).show();
				
			$( '#self-video-player-' + postId ).css( 'display', 'block' );
			$( 'i#play-button-' + postId ).hide();
			$( '#play-button-pulse-' + postId ).hide();
			
			// play video
			$( '#self-video-player-' + postId )[0].play();			
		
		}
	});
	
	function initializeTime() {
		
			time_update_interval = setInterval(function () {
				updateTimerDisplay();				
			}, 1000)
		
	}
	
	function updateTimerDisplay() {
	
		postIdArray.forEach(function( wert, index, referenz ) {
			var vid = $( '#self-video-player-' + wert )[0];
			
			currentTime = formatTime( vid.currentTime );
			duration = formatTime( vid.duration ); // get duration of video
			endImage = $( "#play-button-pulse-" + wert ).attr( "data-background-end-image" );
			
			// reach end of video & check if end thumnail has to be shown
			var durationBuffer = parseInt( $( "#play-button-pulse-" + wert ).attr( "data-thumbnail-duration-buffer" ) );
			if ( currentTime >= duration+durationBuffer && currentTime != 0 && endImage != '' ) {
				// thumbnail name
				var thumbnailName = '.yt-thumbnail-' + wert + $( "#play-button-pulse-" + wert ).attr( 'data-imname' );
				// hide yt player
				$( '#self-video-player-' + wert ).css( 'display', 'none' );
				
			}					
			
			
			// set Time Array to zero; then cta can fire again
			if ( ctaTimeArray[ index ] > currentTime )
				ctaTimeArray[ index ] = 0;
			//console.log('Time ' + currentTime);
			//console.log(ctaTimeArray[ index ]);
			//$( '#self-player-' + wert ).text( formatTime(currentTime) );
			//alert(ctaDelayOneArray[index]);
					//console.log( showCtaArray[ index ] + ' ' + ctaDoneArray[ index ] + ' ' + currentTime );
					
			// close cta if duration is > 0
			//console.log( showCtaArray[ index ] + ' ' + ctaDoneArray[ index ] );
			/*
			if ( showCtaArray[ index ] == 'true' && ctaDoneArray[ index ] == true ) 
			{
				if ( ctaDurationOneArray[index] == currentTime || ctaDurationTwoArray[index] == currentTime || ctaDurationThreeArray[index] == currentTime || ctaDurationFourArray[index] == currentTime || ctaDurationFiveArray[index] == currentTime  || ctaDurationSixArray[index] == currentTime || ctaDurationSevenArray[index] == currentTime || ctaDurationEightArray[index] == currentTime || ctaDurationNineArray[index] == currentTime || ctaDurationTenArray[index] == currentTime ) // bingo duration time reached; close cta
				{
					$( '#cta-display-' + wert ).fadeOut();
					//$( '#cta-display-' + wert ).animate({ opacity: 0 }, 400, function() {  });
					ctaDoneArray[ index ] = false;
					if ( ctaStopArray[index] == 'true' )
						player[index].playVideo(); // play video
				}
			
			}
			*/
					
					if ( showCtaArray[ index ] == 'true' && ctaDoneArray[ index ] == false  && ctaTimeArray[ index ] != currentTime && currentTime != 0 ) // check if cta is on and was not shown
					{
						//console.log(ctaDoneArray[ index ] + ' ' + currentTime + ' Fire' );
						// cta is on
						if ( ctaDelayOneArray[index] == currentTime || ctaDelayTwoArray[index] == currentTime || ctaDelayThreeArray[index] == currentTime || ctaDelayFourArray[index] == currentTime || ctaDelayFiveArray[index] == currentTime || ctaDelaySixArray[index] == currentTime || ctaDelaySevenArray[index] == currentTime || ctaDelayEightArray[index] == currentTime || ctaDelayNineArray[index] == currentTime || ctaDelayTenArray[index] == currentTime )  // bingo, playtime is delay and cta is shown
						{
							if ( ctaStopArray[index] == 'true' ) {
								$( '#self-video-player-' + wert )[0].pause(); // pause player
								ctaTimeArray[index] = currentTime;
							}
			
							var mobileDevice = /iPhone/.test(navigator.userAgent);
							if ( mobileDevice ) {
								$( '#self-video-player-' + wert )[0].webkitExitFullscreen();								
							}
								
							if ((!document.mozFullScreen && !document.webkitIsFullScreen)) {
							   //FullScreen is disabled
							} else {
							   //FullScreen is enabled
							   //document.mozCancelFullScreen();
							   //document.webkitExitFullscreen();
								//$( '#self-video-player-' + wert )[0].mozCancelFullScreen();
								//$( '#self-video-player-' + wert )[0].webkitExitFullscreen();
							}
							
							
							// decide whether to show cta post, cta html or cta editor content
							if ( ctaDelayOneArray[index] == currentTime ) {
								duration = ctaDurationOneArray[index];
								contentNr = 1;
								CloseButtonDisplay( index, wert, duration, contentNr ); // check if close button should be displayed
								// clone post content for cta
								if ( ctaPostOneArray[index] != '' )
								{
									$( '#cta-display-' + wert ).removeAttr( 'style' );
									$( '#cta-display-' + wert ).html( $( '#cta-post-content1-' + wert ).html() );
									$( $( '#cta-post-content1-' + wert ).attr( 'data-styles' ) ).appendTo( $( '#cta-display-' + wert ) );
								}
								else
								{
									$( '#cta-display-' + wert ).removeAttr( 'style' );
									$( '#cta-display-' + wert ).html( $( '#cta-post-content-nopost-' + wert ).html() );
									$( $( '#cta-post-content-nopost-' + wert ).attr( 'data-styles' ) ).appendTo( $( '#cta-display-' + wert ) );
								}
								ctaAudio = ctaAudio1Array[index];
								autoDelayFunction( wert, index, duration, contentNr );
							}
							
							switch ( ctaEffectArray[index] ) {
							
								case 'none':
									ctaDoneArray[ index ] = true;
									$( '#cta-display-' + wert ).show(0); // no effect
									break;
							
								case 'slide right':
									ctaDoneArray[ index ] = true;
									/* animate with css transition */
									// get css height of div
									var divMarginLeft = parseInt( $( '#cta-display-' + wert ).css( 'margin-left' ) );
									// set css out of display
									//$( '#cta-display-' + wert ).css( 'top', '100%' );
									// show div
									$( '#cta-display-' + wert ).show();
									// set transition
									//var styles = { "-webkit-animation-name": "sliding", "-webkit-animation-duration": "3s", "-webkit-animation-fill-mode": "forwards" };
									//$( '#cta-display-' + wert ).css( styles );
									// keyframes
									var duration = ctaEffectDurationArray[index] / 1000;
									var keyframesWebkit = '<style>@-webkit-keyframes slide-' + wert + ' { 0% { margin-left: 100%; } 100% { margin-left: ' + divMarginLeft + '%; } }</style>';
									var keyframes = '<style>@keyframes slide-' + wert + ' { 0% { margin-left: 100%; } 100% { margin-left: ' + divMarginLeft + '%; } }</style>';
									
									// animate to top css value
									$( '#cta-display-' + wert ).css( 'animation-duration', duration + 's' );
									$( '#cta-display-' + wert ).css( '-webkit-animation-duration', duration + 's' );
									$( "head" ).append( keyframesWebkit );
									$( "head" ).append( keyframes );
																		
									
									
									/* end of transition */
									break;
									
								case 'slide left':
									ctaDoneArray[ index ] = true;
									/* animate with css transition */
									// get css height of div
									var divMarginLeft = parseInt( $( '#cta-display-' + wert ).css( 'margin-left' ) );
									// set css out of display
									//$( '#cta-display-' + wert ).css( 'top', '100%' );
									// show div
									$( '#cta-display-' + wert ).show();
									// set transition
									//var styles = { "-webkit-animation-name": "sliding", "-webkit-animation-duration": "3s", "-webkit-animation-fill-mode": "forwards" };
									//$( '#cta-display-' + wert ).css( styles );
									// keyframes
									var duration = ctaEffectDurationArray[index] / 1000;
									var keyframesWebkit = '<style>@-webkit-keyframes slide-' + wert + ' { 0% { margin-left: -100%; } 100% { margin-left: ' + divMarginLeft + '%; } }</style>';
									var keyframes = '<style>@keyframes slide-' + wert + ' { 0% { margin-left: -100%; } 100% { margin-left: ' + divMarginLeft + '%; } }</style>';
									
									// animate to top css value
									$( '#cta-display-' + wert ).css( 'animation-duration', duration + 's' );
									$( '#cta-display-' + wert ).css( '-webkit-animation-duration', duration + 's' );
									$( "head" ).append( keyframesWebkit );
									$( "head" ).append( keyframes );
																		
									
									
									/* end of transition */
									break;
									
								case 'slide up':
									ctaDoneArray[ index ] = true;
									var isSafari = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/)
									var mobileDevice = /iPhone|iPad|iPod/i.test(navigator.userAgent);
									if ( !mobileDevice && !isSafari ) {
										/* animate with css transition */
										// get css height of div
										var divMarginTop = parseInt( $( '#cta-display-' + wert ).css( 'top' ) );
										// set css out of display
										//$( '#cta-display-' + wert ).css( 'top', '100%' );
										// show div
										$( '#cta-display-' + wert ).show();
										// set transition
										//var styles = { "-webkit-animation-name": "sliding", "-webkit-animation-duration": "3s", "-webkit-animation-fill-mode": "forwards" };
										//$( '#cta-display-' + wert ).css( styles );
										// keyframes
										var duration = ctaEffectDurationArray[index] / 1000;
										var keyframesWebkit = '<style>@-webkit-keyframes slide-' + wert + ' { 0% { top: -100%; } 100% { top: ' + divMarginTop + '%; } }</style>';
										var keyframes = '<style>@keyframes slide-' + wert + ' { 0% { top: -100%; } 100% { top: ' + divMarginTop + '%; } }</style>';
										
										// animate to top css value
										$( '#cta-display-' + wert ).css( 'animation-duration', duration + 's' );
										$( '#cta-display-' + wert ).css( '-webkit-animation-duration', duration + 's' );
										$( "head" ).append( keyframesWebkit );
										$( "head" ).append( keyframes );
									}
									else {
										$( '#cta-display-' + wert ).show(0); // no effect
									}									
									
									/* end of transition */
									break;
									
								case 'slide down':
									ctaDoneArray[ index ] = true;
									var isSafari = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/)
									var mobileDevice = /iPhone|iPad|iPod/i.test(navigator.userAgent);
									if ( !mobileDevice && !isSafari ) {
										/* animate with css transition */
										// get css height of div
										var divMarginTop = parseInt( $( '#cta-display-' + wert ).css( 'top' ) );
										// set css out of display
										//$( '#cta-display-' + wert ).css( 'top', '100%' );
										// show div
										$( '#cta-display-' + wert ).show();
										// set transition
										//var styles = { "-webkit-animation-name": "sliding", "-webkit-animation-duration": "3s", "-webkit-animation-fill-mode": "forwards" };
										//$( '#cta-display-' + wert ).css( styles );
										// keyframes
										var duration = ctaEffectDurationArray[index] / 1000;
										var keyframesWebkit = '<style>@-webkit-keyframes slide-' + wert + ' { 0% { top: 100%; } 100% { top: ' + divMarginTop + '%; } }</style>';
										var keyframes = '<style>@keyframes slide-' + wert + ' { 0% { top: 100%; } 100% { top: ' + divMarginTop + '%; } }</style>';
										
										// animate to top css value
										$( '#cta-display-' + wert ).css( 'animation-duration', duration + 's' );
										$( '#cta-display-' + wert ).css( '-webkit-animation-duration', duration + 's' );
										$( "head" ).append( keyframesWebkit );
										$( "head" ).append( keyframes );
									}
									else {
										$( '#cta-display-' + wert ).show(0); // no effect
									}										
									
									/* end of transition */
									break;
									
								case 'pulsate':
									ctaDoneArray[ index ] = true;
									$( '#cta-display-' + wert ).toggle( ctaEffectArray[index], ctaEffectDurationArray[index] );
									break;
									
								case 'puff':
									ctaDoneArray[ index ] = true;
									$( '#cta-display-' + wert ).toggle( ctaEffectArray[index], ctaEffectDurationArray[index] );
									break;
									
								case 'bounce':
									ctaDoneArray[ index ] = true;
									var isSafari = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/)
									var mobileDevice = /iPhone|iPad|iPod/i.test(navigator.userAgent);
									if ( !mobileDevice && !isSafari ) {
									
										/* animate with css transition */
										// get css height of div
										var divMarginTop = parseInt( $( '#cta-display-' + wert ).css( 'top' ) );
										$( '#cta-display-' + wert ).css( 'top', -divMarginTop + '%' );
										$( '#cta-display-' + wert ).show();
										$( '#cta-display-' + wert ).animate(
										{ 
											'top': divMarginTop + '%'
										}, ctaEffectDurationArray[index], 'easeOutBounce');
										// set css out of display
										//$( '#cta-display-' + wert ).css( 'top', '100%' );
										// show div
										//$( '#cta-display-' + wert ).show();
										// set transition
										//var styles = { "-webkit-animation-name": "sliding", "-webkit-animation-duration": "3s", "-webkit-animation-fill-mode": "forwards" };
										//$( '#cta-display-' + wert ).css( styles );
										// keyframes
										/*
										var duration = ctaEffectDurationArray[index] / 1000;
										var step1 = divMarginTop / 2;
										var step2 = divMarginTop / 1.5;
										var step3 = divMarginTop / 1.25;
										var step4 = divMarginTop / 1;
										var keyframesWebkit = '<style>@-webkit-keyframes slide-' + wert + ' { 0% { top: -100%; } 20%, 35%, 45%, 55%, 100% { top: ' + divMarginTop + '%; } 30% { top: ' + step1 + '%; } 40% { top: ' + step2 + '%; } 50% { top: ' + step3 + '%; } }</style>';
										var keyframes = '<style>@keyframes slide-' + wert + ' { 0% { top: -100%; } 20%, 35%, 45%, 55%, 100% { top: ' + divMarginTop + '%; } 30% { top: ' + step1 + '%; } 40% { top: ' + step2 + '%; } 50% { top: ' + step3 + '%; } }</style>';
										
										// animate to top css value
										$( '#cta-display-' + wert ).css( 'animation-duration', duration + 's' );
										$( '#cta-display-' + wert ).css( '-webkit-animation-duration', duration + 's' );
										$( "head" ).append( keyframesWebkit );
										$( "head" ).append( keyframes );
										*/
									}
									else {
										$( '#cta-display-' + wert ).show(0); // no effect
									}					
									
									
									/* end of transition */
									break;
									
								case 'clip':
									ctaDoneArray[ index ] = true;
									$( '#cta-display-' + wert ).toggle( ctaEffectArray[index], ctaEffectDurationArray[index] );
									break;
									
								case 'fold':
									ctaDoneArray[ index ] = true;
									$( '#cta-display-' + wert ).toggle( ctaEffectArray[index], ctaEffectDurationArray[index] );
									break;
									
								case 'fade':
									ctaDoneArray[ index ] = true;
									$( '#cta-display-' + wert ).toggle( ctaEffectArray[index], ctaEffectDurationArray[index] );
									break;
								/*	
								case 'shake':
								alert('lll');
									ctaDoneArray[ index ] = true;
									$( '#cta-display-' + wert ).toggle( effect, ctaEffectDurationArray[index] );
									break;
								*/	
								default:
									ctaDoneArray[ index ] = true;
									$( '#cta-display-' + wert ).show(0); // no effect
							
							}
							
						}
					
					}
			
		});
		
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
		
	function controlVideos() {
		// get all html5 videos, stop or play with click
		postIdArray.forEach(function( wert, index, referenz ) {
			if ( playerControlArray[index] == 'true' )
				return;
			
			$( '#self-video-player-' + wert ).on( 'click', function() {
				if ( this.paused ) {
					this.play();
					timer.resume();
				}
				else {
					this.pause();
					timer.pause();
				}			
			});
			
		});	
	}
	
	
	function CloseButtonDisplay( index, wert, duration, contentNr ) {
			$( 'i#close-' + wert ).show(); // show close button by default
			$( 'i#close' + contentNr + '-' + wert ).show(); // show close button by default
			if ( closeButtonCtaArray[index] == 'true' )
			{
				if ( duration != 0) // cta will disappear automatically
				{
					$( 'i#close-' + wert ).hide(); // hide close button
					$( 'i#close' + contentNr + '-' + wert ).hide(); // hide close button of sites or articles					
				}
			}
		}
		
		function autoDelayFunction( wert, index, duration, number ) {
			// integrate audio if src field is not empty
			if ( eval( "ctaAudio" + number + "Array[index]" ) !=""  && selfAutoplayArray[index] != 'true' )
			{
				$( '#yt-nostop-window-' + wert ).show(); // show nostop window
				/*
				$("#cta-audio-" + wert).attr( 'src', audio );
				$("#cta-audio-" + wert).trigger('load');
				//starts playing
				//$("#cta-audio-" + wert).trigger('play');
				
				/*var audioPlay = new Audio(audio);
				audioPlay.play();*/
				// stop video
				$("#cta-audio" + number + "-" + wert).trigger('play');
				$( '#self-video-player-' + wert )[0].pause(); // pause video
				ctaTimeArray[index] = currentTime;
			}
			if ( duration != 0 )
			{
				setTimeout(function myFunction() {
					//$( '#cta-display-' + wert ).animate({ opacity: 0 }, 800, function() { });
					$( '#cta-display-' + wert ).fadeOut();
					if ( eval( "ctaAudio" + number + "Array[index]" ) !="" )
					{						
						//pause playing
						  $("#cta-audio" + number + "-" + wert).trigger('pause');
						  //set play time to 0
						  $("#cta-audio" + number + "-" + wert).prop("currentTime",0);
					}
					ctaDoneArray[ index ] = false;
					if ( $( '#yt-nostop-window-' + wert ).attr( 'data-stop' ) == 'true' )
							$( '#yt-nostop-window-' + wert ).hide();
					if ( ctaStopArray[index] == 'true' || eval( "ctaAudio" + number + "Array[index]" ) !="" )
						$( '#self-video-player-' + wert )[0].play(); // play video
				}, duration * 1000)			
			}		
		}

	
	
			function autoplay() {
			// check if autoplay is active
			selfAutoplayArray.forEach(function( wert, index, referenz ) {
			
				if ( wert == 'true' )
				{
					var postId = postIdArray[ index ];
					var showCta = showCtaArray[ index ];
					var effect = ctaEffectArray[ index ]
					var effectDuration = ctaEffectDurationArray[ index ];
					var mockup = mockupImageNameArray[ index ];
					
					// thumbnail name
					var thumbnailName = '.yt-thumbnail-' + postId + mockup;
					
					// wait 1 second before starting the video
					setTimeout(function (){

						 // hide thumbail image
						$( thumbnailName ).css( 'background', 'none');
						
						// check if nostop is enabled
						if ( $( '#yt-nostop-window-' + postId ).attr( 'data-stop' ) == 'false' || $( '#yt-nostop-window-' + postId ).attr( 'data-stop' ) == '' )
							$( '#yt-nostop-window-' + postId ).show();
							
						
							
						// show video
						$( '#self-video-player-' + postId ).css( 'display', 'block' );
						$( 'i#play-button-' + postId ).hide();
						$( '#play-button-pulse-' + postId ).hide();
						
						// play Video
						// play video
						$( '#self-video-player-' + postId )[0].play();

					}, 1000); 					
					
				}		
				
			});
		}
			// end of autoplay
			
		/* close cta */	
	$( document ).on( 'click', '.fa.fa-times', function(e) {
		e.preventDefault(); // do not follow cta link url
		var postId = $( this ).attr( 'data-id2' );
		$( '#cta-display-' + postId ).fadeOut();	
		postIdArray.forEach(function( wert, index, referenz ) {
			// check which cta was closed and set it to false
			if ( postId == wert ) {
					ctaDoneArray[ index ] = false;
				//pause playing
					for ( i = 1; i<=numberAudioFiles; i++)
					{
					  $("#cta-audio" + i + "-" + wert).trigger('pause');
					  //set play time to 0
					  $("#cta-audio" + i + "-" + wert).currentTime = 0;
					 }
				if ( ctaAudio != "" )
					$( '#yt-nostop-window-' + wert ).hide();
				if ( ctaStopArray[index] == 'true' || ctaAudio !="" )
					$( '#self-video-player-' + wert )[0].play();
			}
		});		
	});
	
	/* end close cta */
	
	/* press fullscreen button */
	postIdArray.forEach(function( wert, index, referenz ) {
	
		/* chrome */
		if ( fullscreenStatusArray[index] == 'true' ) {
			/* hide fs button in chrome */
			$( 'head' ).append( '<style>video::-webkit-media-controls-fullscreen-button { display: none; }</style>' );
		
		}
		else {
				/* show fs button in chrome */
			$( 'head' ).append( '<style>video::-webkit-media-controls-fullscreen-button { display: block; }</style>' );
			}
		
	
		$( '#self-video-player-' + wert ).on('click', function() {
			if ( fullscreenStatusArray[index] == 'true' ) {
				/* if video changed to fullscreen then cancel fullsreen */
	
				$(document).on ('mozfullscreenchange webkitfullscreenchange fullscreenchange',function(){
				   this.fullScreenMode = !this.fullScreenMode;

				  if(this.fullScreenMode) {
					//document.mozCancelFullScreen();
					document.mozCancelFullScreen();
					document.webkitExitFullscreen();
				
							}
					
					});
					
				
			}
			
		
		});
		
	
	});
	
	

	
	/* responsive settings for youtube video, cta etc. */
		

		/* get css values in percent; we need to hide the parent elment before to get the value in percent */
		postIdArray.forEach(function( wert, index, referenz ) {
		
			var postId = postIdArray[ index ];
			var mockup = mockupImageNameArray[ index ];
			
			
			var divNameMockup = $( '.yt-thumbnail-' + postId + mockup )
		
			divNameMockup.parent().hide();
			
			topPercentArray[index] = parseFloat( divNameMockup.css( 'top' ) );
			widthPercentArray[index] = parseFloat( divNameMockup.css( 'width' ) );
			heightPercentArray[index] = parseFloat( divNameMockup.css( 'height' ) );
			
			divNameMockup.parent().show();
			
			/**************************************************************************************************/
			
			// get inital width of thumbnail
			initialMockupWidthArray[index] = divNameMockup.attr( 'data-mockup-width' );
			
			// get close icon size (in %)
			closeButtonSizeArray[index] = divNameMockup.attr( 'data-close-spinner' ) * 100;
			
			// get play icon size (in %)
			playButtonSizeArray[index] = divNameMockup.attr( 'data-play-spinner' ) * 100;
			
			// round with no decimals: toFixed(decimals)
			initialThumbnailWidthArray[index] = (initialMockupWidthArray[index] * widthPercentArray[index] / 100).toFixed();
			
			/* initialize the mockup with the right size */
			if( divNameMockup.innerWidth() < initialThumbnailWidthArray[index] ){
					changeFactor = divNameMockup.innerWidth() * 100 / initialThumbnailWidthArray[index];
					topVal = topPercentArray[index] * changeFactor / 100;
					height = heightPercentArray[index] * changeFactor / 100;
					//console.log( 'Width: ' + divNameMockup.width() + 'Faktor: ' + changeFactor + 'Top: ' + topVal + 'Height: ' + height );
					//divNameMockup.css( 'top', topVal + '%' );
					//divNameMockup.css( 'height', height + '%' );
					// close button size
					$( '#cta-display-' + postId + ' i.fa.fa-times' ).css( 'font-size', parseInt( changeFactor * closeButtonSizeArray[index] / 100 ) + "%" );
					// play button size
					$( 'i#play-button-' + postId ).css( 'font-size', parseInt( changeFactor * playButtonSizeArray[index] / 100 ) + "%" );
			}
			
			if( divNameMockup.innerWidth() == initialThumbnailWidthArray[index] ) {
					$( divNameMockup ).css( 'top', topPercentArray[index] + '%' );
					$( divNameMockup ).css( 'height', heightPercentArray[index] + '%' );
			   }
		});	
		/*********************************************/
		
		$(window).resize(function(){
			postIdArray.forEach(function( wert, index, referenz ) {
			
				  var postId = postIdArray[ index ];
				  var mockup = mockupImageNameArray[ index ];
				  var divNameMockup = $( '.yt-thumbnail-' + postId + mockup )
				  
				  if ( divNameMockup.innerWidth() < initialThumbnailWidthArray[index] ) {
					changeFactor = divNameMockup.innerWidth() * 100 / initialThumbnailWidthArray[index];
					topVal = topPercentArray[index] * changeFactor / 100;
					height = heightPercentArray[index] * changeFactor / 100;
					//console.log( 'Change: ' + changeFactor );
					//divNameMockup.css( 'top', topVal + '%' );
					//divNameMockup.css( 'height', height + '%' );
					
					// close button size
					$( '#cta-display-' + postId + ' i.fa.fa-times' ).css( 'font-size', parseInt( changeFactor * closeButtonSizeArray[index] / 100 ) + "%" );
					// play button size
					$( 'i#play-button-' + postId ).css( 'font-size', parseInt( changeFactor * playButtonSizeArray[index] / 100 ) + "%" );
					
				  }
			   
			   if( divNameMockup.innerWidth() >= initialThumbnailWidthArray[index] ) {
					//divNameMockup.css( 'top', topPercentArray[index] + '%' );
					//divNameMockup.css( 'height', heightPercentArray[index] + '%' );		   
			   }
		  });
		});
	
	/* end of responsive settings */
	
});