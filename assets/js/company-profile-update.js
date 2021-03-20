
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
                // console.log('error_keys', response.data.error_message);
                // Object.keys(response.data.error_message).forEach(function(key) {
                //     const target= ('#'+key);
                  
                //     $(target).after(`<p class="description error"> ${response.data.error_message[key]} </p>`);
                //     console.log('Key : ' + key + ', Value : ' + response.data.error_message[key]);
                //   })
             $('p.description.error').html(response.data.message); 
            }
        })
        .fail(function() {
           console.log(Sortiment.error);
        })

    });



})(jQuery);

/**
 * Profile image Scripts
 */
    jQuery(document).on("click", ".ss-image",function(){
        var image = wp.media({
        title : "Select Logo",
        multiple : false
        }) .open().on("select",function(e){
            var upload_image = image.state().get("selection").first();
            var imagejson = upload_image.toJSON();
            jQuery(".company-information-img").attr("src",imagejson.url);
            jQuery('#ss_image_id').val( imagejson.id );
            //console.log(imagejson);
        })
    });

/**
 * company color logo Scripts
 **/
;(function($) {
    $('#company_color_logo_form').on('submit', function(e) {
        e.preventDefault();
        var data = $(this).serialize();
        $.post(Sortiment_Update_Profile.ajaxurl, data, function(response) {
            if (response.success) {
                console.log('update success: ', response.data.message); 
                $('p.description.success2').html(response.data.message); 
               window.location.reload();
            } 
            // else {
            //  console.log(response.data.message);
            //  $('p.description.error').html(response.data.message); 
            // }
        })
        .fail(function() {
           console.log(Sortiment.error);
        })

    });



})(jQuery);

jQuery(function($) {

    $(document).on("click", "#colorlogo_jpg",function(e){
        var image = wp.media({
            title : "Select Logo JPG",
            multiple : false
        }) .open().on("select",function(e){
            var upload_image = image.state().get("selection").first();
            var imagejson = upload_image.toJSON();
            jQuery("#colorlogo_jpg").attr("src",imagejson.url); 
            jQuery('#colorlogo_jpg_id').val( imagejson.id);
           // console.log(imagejson.id);
        })
    }); 
    $(document).on("click", "#colorlogo_png",function(e){
        var image = wp.media({
            title : "Select Logo PNG",
            multiple : false
        }) .open().on("select",function(e){
            var upload_image = image.state().get("selection").first();
            var imagejson = upload_image.toJSON();
            jQuery("#colorlogo_png").attr("src",imagejson.url); 
            jQuery('#colorlogo_png_id').val( imagejson.id);
           // console.log(imagejson.id);
        })
    }); 
    $(document).on("click", "#colorlogo_ai",function(e){
        var image = wp.media({
            title : "Select Logo AI",
            multiple : false
        }) .open().on("select",function(e){
            var upload_image = image.state().get("selection").first();
            var imagejson = upload_image.toJSON();
            jQuery("#colorlogo_ai").attr("src",imagejson.url); 
            jQuery('#colorlogo_ai_id').val( imagejson.id);
           // console.log(imagejson.id);
        })
    }); 
    $(document).on("click", "#colorlogo_svg",function(e){
        var image = wp.media({
            title : "Select Logo SVG",
            multiple : false
        }) .open().on("select",function(e){
            var upload_image = image.state().get("selection").first();
            var imagejson = upload_image.toJSON();
            jQuery("#colorlogo_svg").attr("src",imagejson.url); 
            jQuery('#colorlogo_svg_id').val( imagejson.id);
           // console.log(imagejson.id);
        })
    }); 
    $(document).on("click", "#colorlogo_pdf",function(e){
        var image = wp.media({
            title : "Select Logo PDF",
            multiple : false
        }) .open().on("select",function(e){
            var upload_image = image.state().get("selection").first();
            var imagejson = upload_image.toJSON();
            jQuery("#colorlogo_pdf").attr("src",imagejson.url); 
            jQuery('#colorlogo_pdf_id').val( imagejson.id);
           // console.log(imagejson.id);
        })
    }); 
 
});



/**
 * company White logo Scripts
 **/
 ;(function($) {
    $('#company_white_logo_form').on('submit', function(e) {
        e.preventDefault();
        var data = $(this).serialize();
        $.post(Sortiment_Update_Profile.ajaxurl, data, function(response) {
            if (response.success) {
                console.log('update success: ', response.data.message); 
                $('p.description.success3').html(response.data.message); 
               window.location.reload(true);
            } 
            // else {
            //  console.log(response.data.message);
            //  $('p.description.error').html(response.data.message); 
            // }
        })
        .fail(function() {
           console.log(Sortiment.error);
        })

    });



})(jQuery);

jQuery(function($) {

    $(document).on("click", "#whitelogo_jpg",function(e){
        var image = wp.media({
            title : "Select Logo JPG",
            multiple : false
        }) .open().on("select",function(e){
            var upload_image = image.state().get("selection").first();
            var imagejson = upload_image.toJSON();
            jQuery("#whitelogo_jpg").attr("src",imagejson.url); 
            jQuery('#whitelogo_jpg_id').val( imagejson.id);
           // console.log(imagejson.id);
        })
    }); 
    $(document).on("click", "#whitelogo_png",function(e){
        var image = wp.media({
            title : "Select Logo PNG",
            multiple : false
        }) .open().on("select",function(e){
            var upload_image = image.state().get("selection").first();
            var imagejson = upload_image.toJSON();
            jQuery("#whitelogo_png").attr("src",imagejson.url); 
            jQuery('#whitelogo_png_id').val( imagejson.id);
           // console.log(imagejson.id);
        })
    }); 
    $(document).on("click", "#whitelogo_ai",function(e){
        var image = wp.media({
            title : "Select Logo AI",
            multiple : false
        }) .open().on("select",function(e){
            var upload_image = image.state().get("selection").first();
            var imagejson = upload_image.toJSON();
            jQuery("#whitelogo_ai").attr("src",imagejson.url); 
            jQuery('#whitelogo_ai_id').val( imagejson.id);
           // console.log(imagejson.id);
        })
    }); 
    $(document).on("click", "#whitelogo_svg",function(e){
        var image = wp.media({
            title : "Select Logo SVG",
            multiple : false
        }) .open().on("select",function(e){
            var upload_image = image.state().get("selection").first();
            var imagejson = upload_image.toJSON();
            jQuery("#whitelogo_svg").attr("src",imagejson.url); 
            jQuery('#whitelogo_svg_id').val( imagejson.id);
           // console.log(imagejson.id);
        })
    }); 
    $(document).on("click", "#whitelogo_pdf",function(e){
        var image = wp.media({
            title : "Select Logo PDF",
            multiple : false
        }) .open().on("select",function(e){
            var upload_image = image.state().get("selection").first();
            var imagejson = upload_image.toJSON();
            jQuery("#whitelogo_pdf").attr("src",imagejson.url); 
            jQuery('#whitelogo_pdf_id').val( imagejson.id);
           // console.log(imagejson.id);
        })
    }); 
 
});


/**
 * company black logo Scripts
 **/
 ;(function($) {
    $('#company_black_logo_form').on('submit', function(e) {
        e.preventDefault();
        var data = $(this).serialize();
        $.post(Sortiment_Update_Profile.ajaxurl, data, function(response) {
            if (response.success) {
                console.log('update success: ', response.data.message); 
                $('p.description.success4').html(response.data.message); 
               window.location.reload(true);
            } 
            // else {
            //  console.log(response.data.message);
            //  $('p.description.error').html(response.data.message); 
            // }
        })
        .fail(function() {
           console.log(Sortiment.error);
        })

    });



})(jQuery);

jQuery(function($) {

    $(document).on("click", "#blacklogo_jpg",function(e){
        var image = wp.media({
            title : "Select Logo JPG",
            multiple : false
        }) .open().on("select",function(e){
            var upload_image = image.state().get("selection").first();
            var imagejson = upload_image.toJSON();
            jQuery("#blacklogo_jpg").attr("src",imagejson.url); 
            jQuery('#blacklogo_jpg_id').val( imagejson.id);
           // console.log(imagejson.id);
        })
    }); 
    $(document).on("click", "#blacklogo_png",function(e){
        var image = wp.media({
            title : "Select Logo PNG",
            multiple : false
        }) .open().on("select",function(e){
            var upload_image = image.state().get("selection").first();
            var imagejson = upload_image.toJSON();
            jQuery("#blacklogo_png").attr("src",imagejson.url); 
            jQuery('#blacklogo_png_id').val( imagejson.id);
           // console.log(imagejson.id);
        })
    }); 
    $(document).on("click", "#blacklogo_ai",function(e){
        var image = wp.media({
            title : "Select Logo AI",
            multiple : false
        }) .open().on("select",function(e){
            var upload_image = image.state().get("selection").first();
            var imagejson = upload_image.toJSON();
            jQuery("#blacklogo_ai").attr("src",imagejson.url); 
            jQuery('#blacklogo_ai_id').val( imagejson.id);
           // console.log(imagejson.id);
        })
    }); 
    $(document).on("click", "#blacklogo_svg",function(e){
        var image = wp.media({
            title : "Select Logo SVG",
            multiple : false
        }) .open().on("select",function(e){
            var upload_image = image.state().get("selection").first();
            var imagejson = upload_image.toJSON();
            jQuery("#blacklogo_svg").attr("src",imagejson.url); 
            jQuery('#blacklogo_svg_id').val( imagejson.id);
           // console.log(imagejson.id);
        })
    }); 
    $(document).on("click", "#blacklogo_pdf",function(e){
        var image = wp.media({
            title : "Select Logo PDF",
            multiple : false
        }) .open().on("select",function(e){
            var upload_image = image.state().get("selection").first();
            var imagejson = upload_image.toJSON();
            jQuery("#blacklogo_pdf").attr("src",imagejson.url); 
            jQuery('#blacklogo_pdf_id').val( imagejson.id);
           // console.log(imagejson.id);
        })
    }); 
 
});



/**
 * company alt logo Scripts
 **/
 ;(function($) {
    $('#company_alt_logo_form').on('submit', function(e) {
        e.preventDefault();
        var data = $(this).serialize();
        $.post(Sortiment_Update_Profile.ajaxurl, data, function(response) {
            if (response.success) {
                console.log('update success: ', response.data.message); 
                $('p.description.success5').html(response.data.message); 
               window.location.reload(true);
            } 
            // else {
            //  console.log(response.data.message);
            //  $('p.description.error').html(response.data.message); 
            // }
        })
        .fail(function() {
           console.log(Sortiment.error);
        })

    });



})(jQuery);

jQuery(function($) {

    $(document).on("click", "#altlogo_jpg",function(e){
        var image = wp.media({
            title : "Select Logo JPG",
            multiple : false
        }) .open().on("select",function(e){
            var upload_image = image.state().get("selection").first();
            var imagejson = upload_image.toJSON();
            jQuery("#altlogo_jpg").attr("src",imagejson.url); 
            jQuery('#altlogo_jpg_id').val( imagejson.id);
           // console.log(imagejson.id);
        })
    }); 
    $(document).on("click", "#altlogo_png",function(e){
        var image = wp.media({
            title : "Select Logo PNG",
            multiple : false
        }) .open().on("select",function(e){
            var upload_image = image.state().get("selection").first();
            var imagejson = upload_image.toJSON();
            jQuery("#altlogo_png").attr("src",imagejson.url); 
            jQuery('#altlogo_png_id').val( imagejson.id);
           // console.log(imagejson.id);
        })
    }); 
    $(document).on("click", "#altlogo_ai",function(e){
        var image = wp.media({
            title : "Select Logo AI",
            multiple : false
        }) .open().on("select",function(e){
            var upload_image = image.state().get("selection").first();
            var imagejson = upload_image.toJSON();
            jQuery("#altlogo_ai").attr("src",imagejson.url); 
            jQuery('#altlogo_ai_id').val( imagejson.id);
           // console.log(imagejson.id);
        })
    }); 
    $(document).on("click", "#altlogo_svg",function(e){
        var image = wp.media({
            title : "Select Logo SVG",
            multiple : false
        }) .open().on("select",function(e){
            var upload_image = image.state().get("selection").first();
            var imagejson = upload_image.toJSON();
            jQuery("#altlogo_svg").attr("src",imagejson.url); 
            jQuery('#altlogo_svg_id').val( imagejson.id);
           // console.log(imagejson.id);
        })
    }); 
    $(document).on("click", "#altlogo_pdf",function(e){
        var image = wp.media({
            title : "Select Logo PDF",
            multiple : false
        }) .open().on("select",function(e){
            var upload_image = image.state().get("selection").first();
            var imagejson = upload_image.toJSON();
            jQuery("#altlogo_pdf").attr("src",imagejson.url); 
            jQuery('#altlogo_pdf_id').val( imagejson.id);
           // console.log(imagejson.id);
        })
    }); 
 
});


     
