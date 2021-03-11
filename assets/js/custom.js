jQuery(document).ready(function($) {
  
  //alert('ok');
});


function openForm() {
  document.getElementById("myForm").style.display = "block";
}
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

/* == radio button yes click checkbox field show ==*/
jQuery(document).ready(function($) {
    $("input[value='yes']").click(function() {
        $(".request-logo_position" ).show();
    });
    $("input[value='no']").click(function() {
        $(".request-logo_position").hide();
    });
});

/* == approve button click div hide ==*/
jQuery(document).ready(function($) {
	$(".approve").click(function() {
		$(".product-text-button" ).hide();
		$(".product-qunatity-submit" ).show();
	});

	/*test code next time apply*/
	$( "#add-quantity" ).keyup(function() {
		var value = $( this ).val();
		$( ".n-test" ).text( value );
	})
	.keyup();
});

/* == deny button click text change ==*/
/* == are you sure button click go to next page ==*/
jQuery(document).ready(function($){
	var theclick = 0;
	$('.deny').click(function(event){
		if(theclick == 0){
			theclick = theclick + 1;
			event.preventDefault();
		} else {
			$('a.deny'). attr("href", "/sortiment-my-products-deny-comment")
		}
	});
});


/* == Cart page tab ==*/
function openTab(evt, customTab) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("cart-tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(customTab).style.display = "block";
  evt.currentTarget.className += " active";
}

jQuery(document).ready(function($) {
  
  
//Quantity increase and decrease
var clicks = 1;
$('#add_agent').click(function(){
    increasediv = $('.add_new').find('.add_div:last').clone(true);
    increasediv.find('.count').text($('.add_new').find('.add_div').length+1);
    $('.add_new').append(increasediv);
    clicks++; 
    $('.count').html(clicks);
});

$('#remove_agent').click(function() {   
	$('.add_div:last').remove();    
        clicks--; 
        $('.count').html(clicks);    
});

});




//File upload image show
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('.upload-img').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}
jQuery(".inputimage").change(function() {
  readURL(this);
});


/* == Add employee popup == */
function openForm() {
    document.getElementById("myForm").style.display = "block";
        
    }
    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }   
        // Grid and list
    document.getElementById("grid-icon").addEventListener("click", showGrid);
    function showGrid() {
    document.getElementById("employee-all").classList.add("show-grid");
    }

    document.getElementById("list-icon").addEventListener("click", showList);
    function showList() {
    document.getElementById("employee-all").classList.remove("show-grid");
    }

/* == when menu active ==*/
jQuery(document).ready(function($) {
	var selector = '.das_left_menu li';
    var url = window.location.href;
    var target = url.split('/');
     $(selector).each(function(){
        if($(this).find('a').attr('href')===('/'+target[target.length-1])){
          $(selector).removeClass('active');
          $(this).removeClass('active').addClass('active');
        }
     });
});



