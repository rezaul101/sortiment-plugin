;(function($) {

    $('#userRegistationFrom').on('submit', function(e) {
        e.preventDefault();

        var data = $(this).serialize();
        var homeUrl = Sortiment.baseurl;
        //alert( domin );
        $.post(Sortiment.ajaxurl, data, function(response) {
            if (response.success) {
                console.log(response.data.message);
                window.location.href= homeUrl;
            } else {
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
        var homeUrl = Sortiment.baseurl;
        $.post(Sortiment.ajaxurl, data, function(response) {
            if (response.success) {
                alert(response.data.message);
                 document.location.href= homeUrl;
                
               
            } else {
                alert(response.data.message);
            }
        })
        .fail(function() {
            alert(Sortiment.error);
        })

    });

})(jQuery);