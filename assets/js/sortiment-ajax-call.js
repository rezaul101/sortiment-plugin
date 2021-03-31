;(function($) {
    $('form#denyFrom').on('submit', function(e) {
        e.preventDefault();

        var data = $(this).serialize();
        
        $.post(Sortiment_Ajax.ajaxurl, data, function(response) {
            if (response.success) {
                console.log(response.data.message);
                $('p.description.success').html(response.data.message); 
                $('.success').show().delay(4000).fadeOut();
                // window.location.href= '/sortiment-login';
            } else {  
                console.log('error_keys', response.data.error_message);
                //$('p.description error').html(response.data.error_message); 

                Object.keys(response.data.error_message).forEach(function(key) {
                    const target= ('#'+key);
                  
                    $(target).after(`<p class="description error"> ${response.data.error_message[key]} </p>`);
                    console.log('Key : ' + key + ', Value : ' + response.data.error_message[key]);
                    $('.error').show().delay(4000).fadeOut();
                  })

                  //window.location.reload();

            }
        })
        .fail(function() {
   
            console.log(Sortiment_Ajax.error);
        
        })

    });
})(jQuery);

;(function($) {
    $('form#approvedForm').click('a#submit', function(e) {
        //alert(ok);
        e.preventDefault();  
        var data = $(this).serialize();
        
        $.post(Sortiment_Ajax.ajaxurl, data, function(response) {
            if (response.success) {
                console.log(response.data.message);
                $('p.description.success').html(response.data.message); 
                $('.success').show().delay(4000).fadeOut();
                $(".product-text-button" ).hide();
                $('.product-qunatity-submit').show(1000);
                // window.location.href= '/sortiment-login';
            } else {  
                console.log('error_keys', response.data.error_message);
                $('p.description error').html(response.data.error_message);
                $('.success').show().delay(4000).fadeOut();
            }
        })
        .fail(function() {
   
            console.log(Sortiment_Ajax.error);
        
        })

    });
})(jQuery);
