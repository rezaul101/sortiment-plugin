;(function($) {

    $('#userRegistationFrom').on('submit', function(e) {
        e.preventDefault();

        var data = $(this).serialize();
        console.log(data);
        $.post(Sortiment.ajaxurl, data, function(response) {
            if (response.success) {
                console.log(response.success);
            } else {
                alert(response.data.message);
            }
        })
        .fail(function() {
            alert(Sortiment.error);
        })

    });

})(jQuery);