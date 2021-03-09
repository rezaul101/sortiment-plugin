
//company profile update js
;(function($) {
    $('#company-profile-update-form').on('submit', function(e) {
        e.preventDefault();
        
        var data = $(this).serialize();
        var RedirectUrl = Sortiment_Update_Profile.baseurl;
    
        $.post(Sortiment_Update_Profile.ajaxurl, data, function(response) {
            //console.log('hit');
            if (response.success) {
                console.log('update success: ', response.data.message);   
                document.location.href= RedirectUrl;
            } else {
                console.log(response.data.message);
            }
        })
        .fail(function() {
           console.log(Sortiment.error);
        })

    });

})(jQuery);

