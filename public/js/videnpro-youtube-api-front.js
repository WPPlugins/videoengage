jQuery(document).ready(function($) {
	
	
	window.onYouTubeIframeAPIReady = onYouTubeIframeAPIReady;
	
	var counter = 0;
	var ctaAudio = '';
	var audioPlay = '';
	var numberAudioFiles = 10;
	var ctaTimeArray = [];
	var ctaStopArray = [];
	var postIdArray = [];
	var ytIdArray = [];
	var showCtaArray = [];
	var ctaDelayOneArray = [];
	var ctaDelayTwoArray = [];
	var ctaDelayThreeArray = [];
	var ctaEffectArray = [];
	var ctaEffectDurationArray = [];
	var ctaDoneArray = [];
	var ytAutoplayArray = [];
	var mockupImageNameArray = [];
	var playerControlArray = [];
	var ctaShortcodeArray = [];
	
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
	
	/*
	var ctaAudioOneArray = [];
	var ctaAudioTwoArray = [];
	var ctaAudioThreeArray = [];
	var ctaAudioFourArray = [];
	var ctaAudioFiveArray = [];
	var ctaAudioSixArray = [];
	var ctaAudioSevenArray = [];
	var ctaAudioEightArray = [];
	var ctaAudioNineArray = [];
	var ctaAudioTenArray = [];
	*/
	
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
	
	$('.play-button-pulse').each(function() {
		if ( $( this ).attr( 'data-source' ) == 'youtube' ) // check if video is youtube or self-hosted
		{
			var postId =  $( this ).attr( 'data-id' );
			var ytId = $( this ).attr( 'data-yt-id' );
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
			var ytAutoplay = $( this ).attr( 'data-autoplay' );
			var mockupImageName = $( this ).attr( 'data-imname' );
			var playerControl = $( this ).attr( 'data-control' );
			var ctaStop = $( this ).attr( 'data-cta-stop' );
			var ctaShortcode = $( this ).attr( 'data-cta-shortcode' );
			var fullscreenStatus = $( this ).attr( 'data-fullscreen' );
			
			// get dimensions			
	
			var WidthPercent = $( '#yt-mockub-image-' + postId ).innerWidth();
			var HeightPercent = $( '#yt-mockub-image-' + postId ).height();
			/*
			var mockupWidth = $( '#videnpro_video_width_amount' ).val();
			// mockup height is similar to mock width
			var mockupHeight = mockupWidth;
			var ctaPreviewWidth = ( mockupWidth * ctaWidthPercent ) / 100;
			var ctaPreviewHeight = ( mockupHeight * ctaHeightPercent ) / 100;
			// write css for width & height
			//alert(ctaPreviewWidth + ' ' + ctaPreviewHeight);
			$( '#cta-preview' ).css( 'width', ctaPreviewWidth );
			$( '#cta-preview' ).css( 'height', ctaPreviewHeight );
			*/
			//console.log( WidthPercent + ' ' + HeightPercent );
			
			// **************
			
			
			
			
			if ( playerControl == 'true' )
				playerControl = 1;
			else
				playerControl = 0;
			
			// hide content to show with delay 10 if ctashow is true && content is not empty
			if ( $('#play-button-pulse-' + postId).attr('data-delay10-content') !='' && showCta == 'true' )
				$( $('#play-button-pulse-' + postId).attr('data-delay10-content' ) ).hide();
			
			ytIdArray[ counter ] = ytId;
			postIdArray[ counter ] = postId;
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
			
			/*
			ctaAudioOneArray[ counter ] = ctaAudioOne;
			ctaAudioTwoArray[ counter ] = ctaAudioTwo;
			ctaAudioThreeArray[ counter ] = ctaAudioThree;
			ctaAudioFourArray[ counter ] = ctaAudioFour;
			ctaAudioFiveArray[ counter ] = ctaAudioFive;
			ctaAudioSixArray[ counter ] = ctaAudioSix;
			ctaAudioSevenArray[ counter ] = ctaAudioSeven;
			ctaAudioEightArray[ counter ] = ctaAudioEight;
			ctaAudioNineArray[ counter ] = ctaAudioNine;
			ctaAudioTenArray[ counter ] = ctaAudioTen;
			*/
			
			ctaEffectArray[ counter ] = ctaEffect;
			ctaEffectDurationArray[ counter ] = ctaEffectDuration;
			ctaDoneArray[ counter ] = false;
			ctaTimeArray[ counter ] = 0;
			ctaStopArray[ counter ] = ctaStop;
			ytAutoplayArray[ counter ] = ytAutoplay;
			mockupImageNameArray[ counter ] = mockupImageName;
			playerControlArray[ counter ] = playerControl;
			ctaShortcodeArray[ counter ] = ctaShortcode;
			closeButtonCtaArray[ counter ] = closeButtonCta;
			fullscreenStatusArray[ counter ] = fullscreenStatus;
			
			counter = counter + 1;
		}
	});	
	
	
	//console.log( myId );
// begin youtube api
	
	// 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
	 
	  
      var player = [];
	  
      function onYouTubeIframeAPIReady() {
		
		postIdArray.forEach(function( wert, index, referenz ) {
		
		if ( fullscreenStatusArray[ index ] == 'true' )
			ytfs = 1;
		else
			ytfs = 0;
		
			player[index] = new YT.Player('yt-iframe-player-' + wert, {
			playerVars: {
					enablejsapi:1,
					autoplay: 0,
					playsinline: 0,
					loop: 0,
					controls: playerControlArray[index],
					showinfo: 0,
					autohide: 0,
					modestbranding: 0,
					fs: ytfs,
					vq: 'hd1080'},
					height: 'auto',
					width: 'auto',
			  videoId: ytIdArray[index],		  
			  events: {
				'onReady': onPlayerReady,
				//'onReady': initialize,
				'onStateChange': onPlayerStateChange
			  }
			});
		 });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
		//console.log('ready');
		//alert('ready');
		postIdArray.forEach(function( wert, index, referenz ) {
		
			$( 'i#play-button-' + wert ).css( 'display', 'block' );
		
		});
	  
		
        //event.target.playVideo();
		// Update the controls on load
			updateTimerDisplay();
			//updateProgressBar();
			autoplay();
			// Clear any old interval.
			//clearInterval(time_update_interval);
			/*
			time_update_interval = setInterval(function () {
				updateTimerDisplay();
				//updateProgressBar();
			}, 1000)
			*/
      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
	  
		//postIdArray.forEach(function( wert, index, referenz ) {
			
					//alert('timer');
			
					// Update current time text display every second
				time_update_interval = setInterval(function () {
				
					//currentTime = formatTime( player[index].getCurrentTime() );
					//duration = formatTime( player[index].getDuration() );
					updateTimerDisplay();
					//$('#current-time-' + wert ).text(formatTime( player[index].getCurrentTime() ));
					//$('#duration-' + wert ).text(formatTime( player[index].getDuration() ));
					
				}, 1000)
					
					
					
					
					
					/*
					if ( formatTime( player[0].getCurrentTime() ) == 60 )	
							alert('jetzt');
					*/
		//});
		
		//player.stopVideo();
	  /*
        if (event.data == YT.PlayerState.PLAYING && !done) {
          setTimeout(stopVideo, 0);
          done = true;
        }
	*/
      }
	  
      function stopVideo() {
        //player.stopVideo();
      }
	  
		// will be called if the player is fully loaded
		  function initialize() {
		
			//alert('init');
			// Start interval to update elapsed time display and
			// the elapsed part of the progress bar every second.
			time_update_interval = setInterval(function () {
				updateTimerDisplay();
				//updateProgressBar();
			}, 1000)
		
		}
	  
	  // This function is called by initialize()
		function updateTimerDisplay() {
			postIdArray.forEach(function( wert, index, referenz ) {
					//alert('timer');
					//alert( showCtaArray[index] );
					// Update current time text display.
					//$('#current-time-' + wert ).text(formatTime( player[index].getCurrentTime() ));
					//$('#duration-' + wert ).text(formatTime( player[index].getDuration() ));
					
					currentTime = formatTime( player[index].getCurrentTime() ); // get current time of player
					duration = formatTime( player[index].getDuration() ); // get duration of video
					endImage = $( "#play-button-pulse-" + wert ).attr( "data-background-end-image" );
					// set Time Array to zero; then cta can fire again
					if ( ctaTimeArray[ index ] > currentTime )
						ctaTimeArray[ index ] = 0;
					//console.log( $( '#cta-display-' + wert ).width() );
					//console.log(currentTime);
					// show nostop windows after 1 second because of th no autoplay function under ios mobile devices
					// so the user is able to click the youtube origin play button; after the no further click is possible
					
					// reach end of video & check if end thumnail has to be shown
					var durationBuffer = parseInt( $( "#play-button-pulse-" + wert ).attr( "data-thumbnail-duration-buffer" ) );
					if ( currentTime >= duration+durationBuffer && currentTime != 0 && endImage != '' ) {
						// thumbnail name
						var thumbnailName = '.yt-thumbnail-' + wert + $( "#play-button-pulse-" + wert ).attr( 'data-imname' );
						
						// hide yt player
						$( '#yt-iframe-player-' + wert ).css( 'display', 'none' );
						
					}					
					
					if ( currentTime >= 1 )
					{
						// check if nostop is enabled
						if ( $( '#yt-nostop-window-' + wert ).attr( 'data-stop' ) == 'false' || $( '#yt-nostop-window-' + wert ).attr( 'data-stop' ) == '' )
							$( '#yt-nostop-window-' + wert ).show();
					}
					
					// close cta if duration is > 0
					//console.log( showCtaArray[ index ] + ' ' + ctaDoneArray[ index ] );
					if ( showCtaArray[ index ] == 'true' && ctaDoneArray[ index ] == true ) 
					{
						/*
						if ( ctaDurationOneArray[index] == currentTime || ctaDurationTwoArray[index] == currentTime || ctaDurationThreeArray[index] == currentTime || ctaDurationFourArray[index] == currentTime || ctaDurationFiveArray[index] == currentTime  || ctaDurationSixArray[index] == currentTime || ctaDurationSevenArray[index] == currentTime || ctaDurationEightArray[index] == currentTime || ctaDurationNineArray[index] == currentTime || ctaDurationTenArray[index] == currentTime ) // bingo duration time reached; close cta
						{
							//$( '#cta-display-' + wert ).fadeOut();
							$( '#cta-display-' + wert ).animate({ opacity: 0 }, 800, function() { });
							//pause playing
							  $(".audioDemo").trigger('pause');
							  //set play time to 0
							  $(".audioDemo").prop("currentTime",0);
							ctaDoneArray[ index ] = false;
							if ( ctaStopArray[index] == 'true' )
								player[index].playVideo(); // play video
						}
						*/
						
					
					}
					
					if ( showCtaArray[ index ] == 'true' && ctaDoneArray[ index ] == false  && ctaTimeArray[ index ] != currentTime && currentTime != 0 ) // check if cta is on and was not shown
					{
						// cta is on
						//alert( ctaDelayArray[index] + ' ' + ctaEffectArray[index] );
						if ( ctaDelayOneArray[index] == currentTime || ctaDelayTwoArray[index] == currentTime || ctaDelayThreeArray[index] == currentTime || ctaDelayFourArray[index] == currentTime || ctaDelayFiveArray[index] == currentTime || ctaDelaySixArray[index] == currentTime || ctaDelaySevenArray[index] == currentTime || ctaDelayEightArray[index] == currentTime || ctaDelayNineArray[index] == currentTime || ctaDelayTenArray[index] == currentTime )  // bingo, playtime is delay and cta is shown
						{
							if ( ctaStopArray[index] == 'true' ) {
								player[index].pauseVideo(); // pause player
								ctaTimeArray[index] = currentTime;
							}
							
							var mobileDevice = /iPhone/.test(navigator.userAgent);
							if ( mobileDevice ) 
								document.webkitExitFullscreen();
							
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
									/*
									ctaDoneArray[ index ] = true;
									divWidth = $( '#self-video-player-' + wert ).width();
									// in %
									var divMarginLeft = parseInt( $( '#cta-display-' + wert ).css( 'margin-left' ) );
									// in px
									//var divMarginLeftPx = parseInt( divMarginLeft * divWidth / 100 );
									//alert(divMarginLeft);
									$( '#cta-display-' + wert ).css( 'margin-left', '100%' );
									// percent to slide
									margin = 100 - divMarginLeft;
									
									$( '#cta-display-' + wert ).show();
									$( '#cta-display-' + wert ).animate({ "margin-left": "-=" + margin + "%" }, ctaEffectDurationArray[index] );
									break;
									*/
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
									/*
									ctaDoneArray[ index ] = true;
									divWidth = $( '#yt-iframe-player-' + wert ).width();
									// in %
									divMarginLeft = parseInt( $( '#cta-display-' + wert ).css( 'margin-left' ) );
									
									$( '#cta-display-' + wert ).css( 'margin-left', '-100%' );
									margin = 100 + divMarginLeft;
									
									$( '#cta-display-' + wert ).show();
									$( '#cta-display-' + wert ).animate({ "margin-left": "+=" + margin + "%" }, ctaEffectDurationArray[index] );
									break;
									*/
									
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
									/*
									ctaDoneArray[ index ] = true;
									divHeight = $( '#yt-iframe-player-' + wert ).height();
									// in %
									//var divMarginTop = parseInt( $( '#cta-display-' + wert ).css( 'margin-top' ) );
									//var videoWindow = $( '#youtube-preview-' + wert ).height();
									var divMarginTop = parseInt( $( '#cta-display-' + wert ).css( 'top' ) );
									// out of display
									$( '#cta-display-' + wert ).css( 'top', '-100%' );
									margin = 100 + divMarginTop;
									$( '#cta-display-' + wert ).show();									
									$( '#cta-display-' + wert ).animate({ "top": "+=" + margin + "%" }, ctaEffectDurationArray[index] );			
									break;
									*/
									
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
									/*
									ctaDoneArray[ index ] = true;
									//divHeight = $( '#self-video-player-' + wert ).height();
									// in %
									//videoWindow = $( '#youtube-preview-' + wert ).height();
									var divMarginTop = parseInt( $( '#cta-display-' + wert ).css( 'top' ) );
									//ctaHeight = $( '#cta-display-' + wert ).height();
									// out of display
									$( '#cta-display-' + wert ).css( 'top', '100%' );
									margin = 100 - divMarginTop;
									$( '#cta-display-' + wert ).show();									
									$( '#cta-display-' + wert ).animate({ "top": "-=" + margin + "%" }, ctaEffectDurationArray[index] );
									break;
									*/
									
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
									/*
									ctaDoneArray[ index ] = true;
									// in %
									var divMarginTop = parseInt( $( '#cta-display-' + wert ).css( 'top' ) );
									//var videoWindow = $( '#youtube-preview-' + wert ).height();
									//divMarginTop = parseInt( $( '#cta-display-' + wert ).css( 'margin-top' ) );
									// out of display
									$( '#cta-display-' + wert ).css( 'top', -divMarginTop + '%' );
									$( '#cta-display-' + wert ).show();
									$( '#cta-display-' + wert ).animate(
									{ 
										'top': divMarginTop + '%'
									}, ctaEffectDurationArray[index], 'easeOutBounce');
									
									break;
									*/
									
									ctaDoneArray[ index ] = true;
									var isSafari = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/)
									var mobileDevice = /iPhone|iPad|iPod/i.test(navigator.userAgent);
									if ( !mobileDevice && !isSafari ) {
									
										var divMarginTop = parseInt( $( '#cta-display-' + wert ).css( 'top' ) );
										//var videoWindow = $( '#youtube-preview-' + wert ).height();
										//divMarginTop = parseInt( $( '#cta-display-' + wert ).css( 'margin-top' ) );
										// out of display
										$( '#cta-display-' + wert ).css( 'top', -divMarginTop + '%' );
										$( '#cta-display-' + wert ).show();
										$( '#cta-display-' + wert ).animate(
										{ 
											'top': divMarginTop + '%'
										}, ctaEffectDurationArray[index], 'easeOutBounce');
									
										/* animate with css transition */
										// get css height of div
										//var divMarginTop = parseInt( $( '#cta-display-' + wert ).css( 'top' ) );
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
										var step1 = divMarginTop / 1.4;
										var step2 = divMarginTop / 1.3;
										var step3 = divMarginTop / 1.05;
										var step4 = divMarginTop / 1.02;
										var keyframesWebkit = '<style>@-webkit-keyframes slide-' + wert + ' { 0% { top: -100%; } 20%, 35%, 45%, 55%, 100% { top: ' + divMarginTop + '%; } 30% { top: ' + step1 + '%; } 40% { top: ' + step2 + '%; } 50% { top: ' + step3 + '%; } }</style>';
										var keyframes = '<style>@keyframes slide-' + wert + ' { 0% { top: -100%; } 20%, 60%, 80%, 90%, 100% { top: ' + divMarginTop + '%; } 40% { top: ' + step1 + '%; } 70% { top: ' + step2 + '%; } 85% { top: ' + step3 + '%; } 95% { top: ' + step4 + '%; } }</style>';
										
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
					
					
					/*
					if ( formatTime( player[0].getCurrentTime() ) == 60 )	
							alert('jetzt');
					*/
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
	  
	  
// end youtube api

		function autoplay() {
			// check if autoplay is active
			ytAutoplayArray.forEach(function( wert, index, referenz ) {
			
				if ( wert == 'true' )
				{
					var postId = postIdArray[ index ];
					var showCta = showCtaArray[ index ];
					var effect = ctaEffectArray[ index ]
					var effectDuration = ctaEffectDurationArray[ index ];
					var mockup = mockupImageNameArray[ index ];
					var ytId = ytIdArray[ index ];
					
					// thumbnail name
					var thumbnailName = '.yt-thumbnail-' + postId + mockup;
					
				
					// hide thumbail image
					$( thumbnailName ).css( 'background', 'none');

						
					// show video
					$( '#yt-iframe-player-' + postId ).css( 'display', 'block' );
					$( 'i#play-button-' + postId ).hide();
					$( '#play-button-pulse-' + postId ).hide();
					
					var mobileDevice = /iPhone|iPad|iPod/i.test(navigator.userAgent);
					if ( !mobileDevice ) {
						// play Video
						player[ index ].playVideo();
					}
					
					
					
				}		
				
			});
		}
			// end of autoplay
			
				
		function CloseButtonDisplay( index, wert, duration, contentNr ) {
			$( 'i#close-yt-' + wert ).show(); // show close button by default
			$( 'i#close-yt' + contentNr + '-' + wert ).show(); // show close button by default
			if ( closeButtonCtaArray[index] == 'true' )
			{
				if ( duration != 0) // cta will disappear automatically
				{
					$( 'i#close-yt-' + wert ).hide(); // hide close button
					$( 'i#close-yt' + contentNr + '-' + wert ).hide(); // hide close button of sites or articles					
				}
			}
		}
		
		function autoDelayFunction( wert, index, duration, number ) {
			// integrate audio if src field is not empty
			if ( eval( "ctaAudio" + number + "Array[index]" ) !=""  && ytAutoplayArray[index] != 'true' )
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
				player[index].pauseVideo(); // pause video
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
						  $("#cta-audio" + number + "-" + wert).currentTime = 0;
					}
					ctaDoneArray[ index ] = false;
					if ( $( '#yt-nostop-window-' + wert ).attr( 'data-stop' ) == 'true' )
							$( '#yt-nostop-window-' + wert ).hide();
					if ( ctaStopArray[index] == 'true' || eval( "ctaAudio" + number + "Array[index]" ) !="" )
						player[index].playVideo(); // play video
				}, duration * 1000)			
			}		
		}

		
	/* click on play button */

		// click on play button
	$( '.play-button-pulse' ).on('click', function() {
		if ( $( this ).attr( 'data-source' ) == 'youtube' ) // check if video is youtube or self-hosted
		{
			var postId = $( this ).attr( 'data-id' );
			var showCta = $( this ).attr( 'data-cta' );
			var effect = $( this ).attr( 'data-cta-effect' );
			var effectDuration = parseInt( $( this ).attr( 'data-cta-effect-duration' ) );
			
			
			// check index of postIdArray to start right player
			postIdArray.forEach(function( wert, index, referenz ) {
			
				if ( postId == wert ) 
					PlayerNr = index;
				
				// get all audio files; play & stop because is the only way to play later on mobil devices
				// does not work with autoplay feature
				for ( i = 1; i<=numberAudioFiles; i++ ) 
				{
					link = "ctaAudio" + i + "Array[index]";
					$("#cta-audio" + i + "-" + wert).attr( 'src', eval( "ctaAudio" + i + "Array[index]" ) );
					$("#cta-audio" + i + "-" + wert).trigger('play');
					$("#cta-audio" + i + "-" + wert).trigger('pause');				
				}
				
				// play audio file of cta one
				/*
				$("#cta-audio1-" + wert).attr( 'src', ctaAudioOneArray[index] );
				$("#cta-audio1-" + wert).trigger('play');
				$("#cta-audio1-" + wert).trigger('pause');
				
				$("#cta-audio2-" + wert).attr( 'src', 'http://training.videoengagepro.de/wp-content/uploads/2016/08/70s-Sway.mp3' );
				$("#cta-audio2-" + wert).trigger('play');
				$("#cta-audio2-" + wert).trigger('pause');
				*/
				//audioPlay = new Audio( ctaAudioOneArray[index] );
				//audioPlay.play();
				//audioPlay.pause();
			
			});
			
			
			//$( 'a div#cta-display-40.cta-display:hover' ).css( 'color', '' );		
				
				
				
			
			// thumbnail name
			var thumbnailName = '.yt-thumbnail-' + postId + $( this ).attr( 'data-imname' );
			
			// youtube autoplay, set autoplay always to 1 because of the custom thumbnail and play button
			var ytAutoplay = '?rel=0&amp;autoplay=1';
			
			if ( $( '.cta-display' ).attr( 'data-autoplay' ) == 'true' )
				ytAutoplay = '?rel=0&amp;autoplay=1';
			
			// hide thumbail image
			$( thumbnailName ).css( 'background', 'none');
			$( 'i#play-button-' + postId ).hide();
			$( '#play-button-pulse-' + postId ).hide();
			
			//startTimer();
			
			// cta delay
			/*
			if ( showCta == 'true' )
			{
				if ( effect == '' || effect == 'none' )
					$( '#cta-display-' + postId ).delay( $( '#cta-display-' + postId ).attr( "data-delay" ) * 1000 ).show(0); // no effect
				else
					$( '#cta-display-' + postId ).delay( $( '#cta-display-' + postId ).attr( "data-delay" ) * 1000 ).toggle( effect, effectDuration );
			}				
			*/
			
			// youtube id
			var ytId = $( '#youtube-preview-' + postId ).attr( 'data-ytid' );
			//$( thumbnailName ).fadeOut( 'slow' );
		
			$( '#yt-iframe-player-' + postId ).css( 'display', 'block' );
			
			//$( '#yt-iframe-player-' + postId ).hide();
			//$('#yt-iframe-player-' + postId ).attr( "src", ytLink + ytId + ytAutoplay ) .val();
			//$( '#yt-iframe-player-' + postId ).fadeIn( 1500 );
			// put in src with autoplay
			//console.log( 'link: ' +ytLink + ytId + ytAutoplay);
			//console.log( '#yt-iframe-player-' + postId );
			//$('#yt-iframe-player-' + postId ).attr( "src", ytLink + ytId + ytAutoplay ) .val();
			
			var mobileDevice = /iPhone|iPad|iPod/i.test(navigator.userAgent);
			if ( !mobileDevice ) {
				// play Video
				player[ PlayerNr ].playVideo();
			}
			
		
		}
	});

	/* end click on play button */	
	
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
					  $("#cta-audio" + i + "-" + wert).prop("currentTime",0);
					 }
				if ( ctaAudio != "" )
					$( '#yt-nostop-window-' + wert ).hide();
				if ( ctaStopArray[index] == 'true' || ctaAudio !="" )
					player[index].playVideo(); // play video
			}
		});	
	});
	
	/* end close cta */
	
	/* responsive settings for youtube video, cta etc. */
		

		/* get css values in percent; we need to hide the parent elment before to get the value in percent */
		postIdArray.forEach(function( wert, index, referenz ) {
		
			var postId = postIdArray[ index ];
			var mockup = mockupImageNameArray[ index ];
			
			// get height & width of preview area
			previewHeight = $( '#youtube-preview-' + postId ).height();
			previewWidth = $( '#youtube-preview-' + postId ).height();
			previewRatio = previewWidth / previewHeight;
			
			
			var divNameMockup = $( '.yt-thumbnail-' + postId + mockup );
		
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
					//previewHeight = $( '#youtube-preview-' + postId ).width() / previewRatio;
					//console.log( 'Change: ' + changeFactor + ' ' + 'previewHeight ' + previewHeight );
					//divNameMockup.css( 'top', topVal + '%' );
					//divNameMockup.css( 'height', height + '%' );
					
					//$( '#youtube-preview-' + postId ).css( 'height', previewHeight + 'px' );
					
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