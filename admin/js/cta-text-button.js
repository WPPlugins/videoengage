jQuery(document).ready(function($) {
	
    tinymce.PluginManager.add('videnpro_cta_button', function( editor, url ) {
		var ButtonClicked = false;
        editor.addButton( 'videnpro_cta_button', {
            text: 'Editor Background',
            icon: false,
            onclick: function() {
                var EditorContent = editor.getContent( {format : 'raw'} );
				var NewEditorContent;
				
				// second click, remove id
				if ( ButtonClicked ) {					
					ButtonClicked = false;
					editor.getBody().style.backgroundColor = "#FFF";
					
					
				}
				else {
					
					editor.getBody().style.backgroundColor = "#000";
					
					ButtonClicked = true;					
				}
            }
        });
    });


});