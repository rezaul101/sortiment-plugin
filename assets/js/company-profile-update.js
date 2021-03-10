
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

