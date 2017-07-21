jQuery(document).ready(function($)  {

	var a = document.createElement('script');
    a.id = 'www-widgetapi-script';
    a.src = 'https:' + '//s.ytimg.com/yts/jsbin/www-widgetapi-vfldTtH0_/www-widgetapi.js';
    $("head").append(a);

	window.onYouTubeIframeAPIReady = onYouTubeIframeAPIReady;
	
	
	var playerControl = $( '.cta-display' ).attr( 'data-control' );

	// class name of thumbnail image
	var thumbnailName = '.yt-thumbnail' + $('input#videnpro_mockup_image_name').val();
	
	// thumbnail link
	var thumbnailLink = $( '#videnpro_thumbnail_image_link' ).val();
	
	// youtube link
	var ytLink = "https://www.youtube.com/embed/";
	
	// youtube id
	var ytId = $( '#videnpro_youtube_id' ).val();
	
	if ( playerControl == 'true' )
		playerControl = 1;
	else
		playerControl = 0;
		
	var showCta = $( '.cta-display' ).attr( 'data-cta');
	var ctaDone = false;
	var ctaTime = 0;
	var ctaAudio = '';
	var numberAudioFiles = 10;
	
	var ctaDelayOne = $( '.play-button-pulse' ).attr( 'data-delay1' );
	var ctaDelayTwo = $( '.play-button-pulse' ).attr( 'data-delay2' );
	var ctaDelayThree = $( '.play-button-pulse' ).attr( 'data-delay3' );
	var ctaDelayFour = $( '.play-button-pulse' ).attr( 'data-delay4' );
	var ctaDelayFive = $( '.play-button-pulse' ).attr( 'data-delay5' );
	var ctaDelaySix = $( '.play-button-pulse' ).attr( 'data-delay6' );
	var ctaDelaySeven = $( '.play-button-pulse' ).attr( 'data-delay7' );
	var ctaDelayEight = $( '.play-button-pulse' ).attr( 'data-delay8' );
	var ctaDelayNine = $( '.play-button-pulse' ).attr( 'data-delay9' );
	var ctaDelayTen = $( '.play-button-pulse' ).attr( 'data-delay10' );
	var ctaPostOne = $( '.play-button-pulse' ).attr( 'data-delay-post1' );
	var ctaPostTwo = $( '.play-button-pulse' ).attr( 'data-delay-post2' );
	var ctaPostThree = $( '.play-button-pulse' ).attr( 'data-delay-post3' );
	var ctaPostFour = $( '.play-button-pulse' ).attr( 'data-delay-post4' );
	var ctaPostFive = $( '.play-button-pulse' ).attr( 'data-delay-post5' );
	var ctaPostSix = $( '.play-button-pulse' ).attr( 'data-delay-post6' );
	var ctaPostSeven = $( '.play-button-pulse' ).attr( 'data-delay-post7' );
	var ctaPostEight = $( '.play-button-pulse' ).attr( 'data-delay-post8' );
	var ctaPostNine = $( '.play-button-pulse' ).attr( 'data-delay-post9' );
	var ctaPostTen = $( '.play-button-pulse' ).attr( 'data-delay-post10' );
	
	var ctaDurationOne = $( '.play-button-pulse' ).attr( 'data-duration1' );
	var ctaDurationTwo = $( '.play-button-pulse' ).attr( 'data-duration2' );
	var ctaDurationThree = $( '.play-button-pulse' ).attr( 'data-duration3' );
	var ctaDurationFour = $( '.play-button-pulse' ).attr( 'data-duration4' );
	var ctaDurationFive = $( '.play-button-pulse' ).attr( 'data-duration5' );
	var ctaDurationSix = $( '.play-button-pulse' ).attr( 'data-duration6' );
	var ctaDurationSeven = $( '.play-button-pulse' ).attr( 'data-duration7' );
	var ctaDurationEight = $( '.play-button-pulse' ).attr( 'data-duration8' );
	var ctaDurationNine = $( '.play-button-pulse' ).attr( 'data-duration9' );
	var ctaDurationTen = $( '.play-button-pulse' ).attr( 'data-duration10' );
	
	var ctaAudio1 = $( '.play-button-pulse' ).attr( 'data-sound1' );
	var ctaAudio2 = $( '.play-button-pulse' ).attr( 'data-sound2' );
	var ctaAudio3 = $( '.play-button-pulse' ).attr( 'data-sound3' );
	var ctaAudio4 = $( '.play-button-pulse' ).attr( 'data-sound4' );
	var ctaAudio5 = $( '.play-button-pulse' ).attr( 'data-sound5' );
	var ctaAudio6 = $( '.play-button-pulse' ).attr( 'data-sound6' );
	var ctaAudio7 = $( '.play-button-pulse' ).attr( 'data-sound7' );
	var ctaAudio8 = $( '.play-button-pulse' ).attr( 'data-sound8' );
	var ctaAudio9 = $( '.play-button-pulse' ).attr( 'data-sound9' );
	var ctaAudio10 = $( '.play-button-pulse' ).attr( 'data-sound10' );
	
	var ctaEffect = $( '.play-button-pulse' ).attr( 'data-cta-effect' );
	var ctaEffectDuration = parseInt( $( '.play-button-pulse' ).attr( 'data-cta-effect-duration' ) );
	var ytAutoplay = $( '.play-button-pulse' ).attr( 'data-autoplay' );
	var ctaStop = $( '.play-button-pulse' ).attr( 'data-cta-stop' );
	var closeButtonCta = $( '.play-button-pulse' ).attr( 'data-close-button' );
	

// begin youtube api

	//location.reload();
	
	
		// 2. This code loads the IFrame Player API code asynchronously.
		  var tag = document.createElement('script');

		  tag.src = "https://www.youtube.com/iframe_api";
		  var firstScriptTag = document.getElementsByTagName('script')[0];
		  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
	
	
      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
	  
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('yt-iframe-player', {
		playerVars: {
				enablejsapi:1,
				autoplay: 0,
				loop: 0,
				controls: playerControl,
				showinfo: 0,
				autohide: 0,
				modestbranding: 1,
				fs: 0,
				vq: 'hd1080'},
          //height: '108',
          //width: '400',
          videoId: ytId,		  
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
		var postId = $( '.play-button-pulse' ).attr( 'data-id' );
		// show play button if player is ready
		$( 'i#play-button-' + postId ).css( 'display', 'block' );
	 
		updateTimerDisplay();
        
      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
		
		/* disabled here because of calling the timer if the video is not shown
		time_update_interval = setInterval(function () {
									
					updateTimerDisplay();				
					
				}, 1000)
		*/
		
      }
	  
      function stopVideo() {
        //player.stopVideo();
      }
	  
// end youtube api

// autoplay
	$('#YouTubePreviewModal').on('shown.bs.modal', function (e) {
	
		time_update_interval = setInterval(function () {
									
					updateTimerDisplay();				
					
				}, 1000)
				
		// show start thumbnail
		/*
		var thumbnailName = '.yt-thumbnail' + $( '.play-button-pulse' ).attr( 'data-imname' );
		var backgroundAttr = 'url(' + $( '.play-button-pulse' ).attr( 'data-background-image' ) + ') center center';
		*/
		
		//$( thumbnailName ).css( 'background', backgroundAttr );
		
		if ( ytAutoplay == 'true' ) // autoplay is activated
		{
			if ( $( '.play-button-pulse' ).attr( 'data-source' ) == 'youtube' ) // check if video is youtube or self-hosted
			{
				var postId = $( '.play-button-pulse' ).attr( 'data-id' );
				var showCta = $( '.play-button-pulse' ).attr( 'data-cta' );
				var effect = $( '.play-button-pulse' ).attr( 'data-cta-effect' );
				var effectDuration = parseInt( $( '.play-button-pulse' ).attr( 'data-cta-effect-duration' ) );
				
				// hide thumbail image
				$( thumbnailName ).css( 'background', 'none');
				$( 'i#play-button-' + postId ).hide();
				$( '.play-button-pulse' ).hide();
				
				//startTimer();
				// check if nostop is enabled
				if ( $( '#yt-nostop-window'  ).attr( 'data-stop' ) == 'false' || $( '#yt-nostop-window'  ).attr( 'data-stop' ) == '' )
					$( '#yt-nostop-window' ).show();
				
				
				
				
				isSafari = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/)
				var mobileDevice = /iPhone|iPad|iPod/i.test(navigator.userAgent);
				if ( !mobileDevice && !isSafari ) {
					// play Video
					player.playVideo();
				}
			}	
		}
	});


// end autoplay

/* click on play button */

		// click on play button
	$( '.play-button-pulse' ).on('click', function() {
		if ( $( this ).attr( 'data-source' ) == 'youtube' ) // check if video is youtube or self-hosted
		{
			var postId = $( this ).attr( 'data-id' );
			var showCta = $( this ).attr( 'data-cta' );
			var effect = $( this ).attr( 'data-cta-effect' );
			var effectDuration = parseInt( $( this ).attr( 'data-cta-effect-duration' ) );
			
			for ( i = 1; i <= numberAudioFiles; i++ ) 
			{
				link = "ctaAudio" + i;
				$("#yt-cta-audio" + i + "-" + postId).attr( 'src', eval( "ctaAudio" + i ) );
				$("#yt-cta-audio" + i + "-" + postId).trigger('play');
				$("#yt-cta-audio" + i + "-" + postId).trigger('pause');				
			}
			
			// thumbnail name
			var thumbnailName = '.yt-thumbnail' + $( this ).attr( 'data-imname' );
			
			// hide thumbail image
			$( thumbnailName ).css( 'background', 'none');
			$( 'i#play-button-' + postId ).hide();
			$( '.play-button-pulse' ).hide();
			
			
			
			// show video
			$( '#yt-iframe-player' ).css( 'display', 'block' );
			
			isSafari = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/)
			var mobileDevice = /iPhone|iPad|iPod/i.test(navigator.userAgent);
			if ( !mobileDevice && !isSafari ) {
				// play Video
				player.playVideo();
			}
			
		
		}
	});

	/* end click on play button */	

		  // This function is called by initialize()
		function updateTimerDisplay() {
			
					var postId = $( '.play-button-pulse' ).attr( 'data-id' );
					//alert('timer');
					//alert( showCtaArray[index] );
					// Update current time text display.
					$( '#yt-video-current-time' ).text(formatTime( player.getCurrentTime() ));
					$( '#yt-video-duration-time' ).text(formatTime( player.getDuration() ));
					//$('#duration-' + wert ).text(formatTime( player[index].getDuration() ));
					
					currentTime = formatTime( player.getCurrentTime() ); // get current time of player
					duration = formatTime( player.getDuration() ); // get duration of video
					//console.log( showCta + ' ' + ctaDone + ' ' + currentTime );
					
					// reach end of video & check if end thumnail has to be shown
					var durationBuffer = parseInt( $( ".play-button-pulse" ).attr( "data-thumbnail-duration-buffer" ) );
					if ( currentTime >= duration+durationBuffer && currentTime != 0 && $( '#videnpro_thumbnail_end_image' ).attr( 'src' ) != '' ) {
						// thumbnail name
						var thumbnailName = '.yt-thumbnail' + $( '.play-button-pulse' ).attr( 'data-imname' );
						
						// hide yt player
						$( '#yt-iframe-player' ).css( 'display', 'none' );
						
						
					}
					
					if ( currentTime >= 1 )
					{
						// check if nostop is enabled
						if ( $( '#yt-nostop-window'  ).attr( 'data-stop' ) == 'false' || $( '#yt-nostop-window'  ).attr( 'data-stop' ) == '' )
							$( '#yt-nostop-window' ).show();
					}
					
					// set Time Array to zero; then cta can fire again
					if ( ctaTime > currentTime )
						ctaTime = 0;
						
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
								player.playVideo(); // play video
						}
					
					}
					*/
					if ( showCta == 'true' && ctaDone == false  && ctaTime != currentTime && currentTime != 0 ) // check if cta is on and was not shown
					{
						//console.log( ctaDelayOne + ' ' + ctaDelayTwo + ' ' + ctaDelayThree );
						// cta is on
						//alert( ctaDelayArray[index] + ' ' + ctaEffectArray[index] );
						if ( ctaDelayOne == currentTime || ctaDelayTwo == currentTime || ctaDelayThree == currentTime || ctaDelayFour == currentTime || ctaDelayFive == currentTime || ctaDelaySix == currentTime || ctaDelaySeven == currentTime || ctaDelayEight == currentTime || ctaDelayNine == currentTime || ctaDelayTen == currentTime )  // bingo, playtime is delay and cta is shown
						{
							if ( ctaStop == 'true' ) {
								player.pauseVideo(); // pause player
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
									$( '#cta-display-' + postId ).removeAttr( 'style' );
									$( '#cta-display-' + postId ).html( $( '#cta-post-content1' ).html() );
									$( $( '#cta-post-content1' ).attr( 'data-styles' ) ).appendTo( $( '#cta-display-' + postId ) );
								}
								else
								{
									$( '#cta-display-' + postId ).removeAttr( 'style' );
									$( '#cta-display-' + postId ).html( $( '#cta-post-content-nopost' ).html() );
									$( $( '#cta-post-content-nopost' ).attr( 'data-styles-yt' ) ).appendTo( $( '#cta-display-' + postId ) );
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
									divWidth = $( '#yt-iframe-player' ).width();
									// in %
									var divMarginLeft = parseInt( $( '#cta-display-' + postId ).css( 'margin-left' ) );
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
									divWidth = $( '#yt-iframe-player' ).width();
									// in %
									var divMarginLeft = parseInt( $( '#cta-display-' + postId ).css( 'margin-left' ) );
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
									var divMarginTop = parseInt( $( '#cta-display-' + postId ).css( 'top' ) );
									// in px
									//var divMarginLeftPx = parseInt( divMarginLeft * divWidth / 100 );
									//alert(divMarginLeft);
									$( '.cta-display' ).css( 'top', '-100%' );
									margin = 100 + divMarginTop;
									
									
									$( '.cta-display' ).show();
									$( '.cta-display' ).animate({ "top": "+=" + margin + '%' }, ctaEffectDuration );
									break;
									
								case 'slide down':
									ctaDone = true;
									//console.log( 'jetzt ' + currentTime );
									//divheight = $( '#yt-iframe-player' ).height();
									// in %
									var divMarginTop = parseInt( $( '#cta-display-' + postId ).css( 'top' ) );
									//var videoWindow = $( '#cta-preview' ).height();
									//var ctaHeight = $( '#cta-display-' + postId ).height();
									// in px
									//var divMarginLeftPx = parseInt( divMarginLeft * divWidth / 100 );
									//alert(divMarginTop);
									$( '.cta-display' ).css( 'top', '100%' );
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
										var divMarginTop = parseInt( $( '#cta-display-' + postId ).css( 'top' ) );
										//var videoWindow = $( '#cta-preview' ).height();
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
					
					
					/*
					if ( formatTime( player[0].getCurrentTime() ) == 60 )	
							alert('jetzt');
					*/
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
			if ( $( '.play-button-pulse' ).attr( 'data-source' ) == 'youtube' ) {
				e.preventDefault(); // do not follow cta link url
				if ( ctaStop == 'true' )
					player.playVideo();
				$( '.cta-display' ).fadeOut();
				var postId = $( '.play-button-pulse' ).attr( 'data-id' );
				//be sure stop & rewind all audio files
				for ( i = 1; i <= numberAudioFiles; i++ ) 
				{
					$("#yt-cta-audio" + i + "-" + postId).trigger('pause');
					$("#yt-cta-audio" + i + "-" + postId).prop( "currentTime", 0);
				}
				if ( ctaAudio != "" )
					$( '#yt-nostop-window-' ).hide();
				if ( ctaStop == 'true' || ctaAudio !="" )
					player.playVideo(); // play video
				
					// check which cta was closed and set it to false
					
						ctaDone = false;
						
			}
					
					
		});
		
		/* end close cta */
			
		// preview yt modal closed
		$('#YouTubePreviewModal').on('hidden.bs.modal', function (e) {
			// get postId
			var postId = $( '.play-button-pulse' ).attr( 'data-id' );
			//$('#yt-iframe-player').attr( "src", ytLink + ytId ) .val();
			// hide cta
			$( '.cta-display' ).hide();
			ctaDone = false;
			
			//be sure stop & rewind all audio files
			for ( i = 1; i <= numberAudioFiles; i++ ) 
			{
				$("#yt-cta-audio" + i + "-" + postId).trigger('pause');
				$("#yt-cta-audio" + i + "-" + postId).CurrentTime = 0;
			}
			
			// reload player
			//$('#yt-iframe-player').attr("src", $('#yt-iframe-player').attr("src"));
			$( '#yt-iframe-player').css( 'display', 'none' );
			$( thumbnailName ).css( "background", "url(" +  thumbnailLink + ") center center" );
			//show play button
			$( '.play-button-pulse' ).show();
			// hide nostop window
			$( '#yt-nostop-window' ).hide();
			
			// show play button if player is ready
			$( 'i#play-button-' + postId ).css( 'display', 'block' );
			
			// stop video and go to the beginning
			player.stopVideo();
			//player.seekTo(0);
			clearInterval( time_update_interval );
			clearInterval( ctaTimeout );
			
		});
		
		/* click on 'save settings*, destroy player */
		$( '#custom-publish-button-end' ).on( 'click', function() {
			
			player.loadVideoById( 'yt-iframe-player' );
			
		
		});
		
		function CloseButtonDisplay( wert, duration, contentNr ) {
			$( 'i#close-yt-' + wert ).show(); // show close button by default
			$( 'i#close-yt' + contentNr + '-' + wert ).show(); // show close button by default
			if ( closeButtonCta == 'true' )
			{
				if ( duration != 0) // cta will disappear automatically
				{
					$( 'i#close-yt-' + wert ).hide(); // hide close button
					$( 'i#close-yt' + contentNr + '-' + wert ).hide(); // hide close button of sites or articles					
				}
			}
		}
		
		function autoDelayFunction( wert, duration, number ) {
			// integrate audio if src field is not empty
			if ( eval( "ctaAudio" + number ) !=""  && ytAutoplay != 'true' )
			{
				$( '#yt-nostop-window' ).show(); // show nostop window
				/*
				$("#cta-audio-" + wert).attr( 'src', audio );
				$("#cta-audio-" + wert).trigger('load');
				//starts playing
				//$("#cta-audio-" + wert).trigger('play');
				
				/*var audioPlay = new Audio(audio);
				audioPlay.play();*/
				// stop video
				$("#yt-cta-audio" + number + "-" + wert).trigger('play');
				player.pauseVideo(); // pause video
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
					if ( $( '#yt-nostop-window' ).attr( 'data-stop' ) == 'true' )
							$( '#yt-nostop-window' ).hide();
					if ( ctaStop == 'true' || eval( "ctaAudio" + number ) !="" )
						player.playVideo(); // play video
				}, duration * 1000)			
			}		
		}

	
	
});