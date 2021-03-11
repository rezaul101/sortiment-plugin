
//company profile update js
;(function($) {
    $('#company-profile-update-form').on('submit', function(e) {
        e.preventDefault();
        
        var data = $(this).serialize();
        var RedirectUrl = Sortiment_Update_Profile.baseurl;
    
        $.post(Sortiment_Update_Profile.ajaxurl, data, function(response) {
            if (response.success) {
                console.log('update success: ', response.data.message); 

                $('p.description.success').html(response.data.message); 
               // $('.success').show().delay(10000).fadeOut();  
               //window.location.href= RedirectUrl;
               window.location.reload();
            } else {
                console.log(response.data.message);
                $('p.description.error').html(response.data.message); 
            }
        })
        .fail(function() {
           console.log(Sortiment.error);
        })

    });

})(jQuery);

/**
 * TProfile image Scripts
 */

 jQuery( document ).ready( function() {

    /* WP Media Uploader */

    var _ss_media = true;

    var _orig_send_attachment = wp.media.editor.send.attachment;

    jQuery( '.ss-image' ).click( function() {

        var button = jQuery( this ),

                textbox_id = jQuery( this ).attr( 'data-id' ),
                image_id = jQuery( this ).attr( 'data-src' ),
                _ss_media = true;
        wp.media.editor.send.attachment = function( props, attachment ) {
    
            if ( _ss_media && ( attachment.type === 'image' ) ) {
                if ( image_id.indexOf( "," ) !== -1 ) {
                    image_id = image_id.split( "," );
                    $image_ids = '';
                    jQuery.each( image_id, function( key, value ) {
                        if ( $image_ids )
                            $image_ids = $image_ids + ',#' + value;
                        else
                            $image_ids = '#' + value;
                    } );
                    var current_element = jQuery( $image_ids );
                } else {
                    var current_element = jQuery( '#' + image_id );
                }
                jQuery( '#' + textbox_id ).val( attachment.id );
                 console.log(textbox_id)
                current_element.attr( 'src', attachment.url ).show();
            } else {
                alert( 'Please select a valid image file' );
                return false;
            }
        }
        wp.media.editor.open( button );
        return false;
    } );

} );

