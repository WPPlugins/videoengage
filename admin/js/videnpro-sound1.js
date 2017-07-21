jQuery(document).ready(function($) {

	// Uploading files
var file_frame;

  $('#videnpro_sound1_button').on('click', function( event ){

    event.preventDefault();

    // If the media frame already exists, reopen it.
    if ( file_frame ) {
      file_frame.open();
      return;
    }

    // Create the media frame.
    file_frame = wp.media.frames.file_frame = wp.media({
      title: jQuery( this ).data( 'uploader_title' ),
      button: {
        text: jQuery( this ).data( 'uploader_button_text' ),
      },
      multiple: false  // Set to true to allow multiple files to be selected
    });

    // When an image is selected, run a callback.
    file_frame.on( 'select', function() {
      // We set multiple to false so only get one image from the uploader
      attachment = file_frame.state().get('selection').first().toJSON();
	  str = attachment.url;
	urlType = str.substr( str.length-3, 3);
	if ( urlType == "mp3" || urlType == "Mp3" || urlType == "wav" )
		$('#videnpro_sound1_link').val( attachment.url );
	//$('img#videnpro_thumbnail_image').attr( 'src', attachment.url );
      // Do something with attachment.id and/or attachment.url here
    });

    // Finally, open the modal
    file_frame.open();
  });

});