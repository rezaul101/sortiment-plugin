;(function($) {

    $('#userRegistationFrom').on('submit', function(e) {
        e.preventDefault();

        var data = $(this).serialize();
        var homeUrl = Sortiment.baseurl1;
        //alert( domin );
        $.post(Sortiment.ajaxurl, data, function(response) {
            if (response.success) {
                console.log(response.data.message);
                window.location.href= '/sortiment-login';
            } else {
                //$('p.description.error').html(response.data.error_message); 
                console.log(response.data.message);

            }
        })
        .fail(function() {
            alert(Sortiment.error);
        })

    });

})(jQuery);
//login js
;(function($) {

    $('#userLoginFrom').on('submit', function(e) {
        e.preventDefault();

        var data = $(this).serialize();
        var homeUrl = Sortiment.baseurl2;
        $.post(Sortiment.ajaxurl, data, function(response) {
            if (response.success) {
                console.log(response.data.user_signon.roles[0]);
                if(response.data.user_signon.roles[0]=='company'){
                 document.location.href= homeUrl;
                }else{
                    document.location.href= '/wp-admin';
                }
                
               
            } else {
                alert(response.data.message);
            }
        })
        .fail(function() {
            alert(Sortiment.error);
        })

    });

})(jQuery);

