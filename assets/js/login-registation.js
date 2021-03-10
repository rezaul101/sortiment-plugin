;(function($) {

    $('#userRegistationFrom').on('submit', function(e) {
        e.preventDefault();

        var data = $(this).serialize();
        var homeUrl = Sortiment.baseurl1;
        //alert( domin );
        $.post(Sortiment.ajaxurl, data, function(response) {
            if (response.success) {
                console.log(response.data.message);
                //$('.plswait').hide(); 
                //$('.validation').delay(8000).fadeOut();
                $('p.description.success').html(response.data.message); 
                $('.success').show().delay(4000).fadeOut();
                 window.location.href= '/sortiment-login';
            } else {  
                console.log('error_keys', response.data.error_message);
                Object.keys(response.data.error_message).forEach(function(key) {
                    const target= ('#'+key);
                  
                    $(target).after(`<p class="description error"> ${response.data.error_message[key]} </p>`);
                    console.log('Key : ' + key + ', Value : ' + response.data.error_message[key]);
                  })

            }
        })
        .fail(function() {
   
            console.log(Sortiment.error);
        
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
                 
                $('p.description.success').html(response.data.message);
                $('.success').show().delay(5000).fadeOut();  
                 document.location.href= homeUrl;
                }else{
                    $('p.description.success').html(response.data.message);
                    $('.success').show().delay(5000).fadeOut()
                    document.location.href= '/wp-admin';
                }
                
               
            } else {
                $('p.description.error').html(response.data.message); 
                console.log(response.data.message);
            }
        })
        .fail(function() {
            alert(Sortiment.error);
        })

    });

})(jQuery);

