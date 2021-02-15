
jQuery(document).ready(function($) {
function openForm() {
    document.getElementById("myForm").style.display = "block";
  }
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
});

jQuery(document).ready(function($) {
      $("input[value='yes']").click(function() {
          $(".request-logo_position" ).show();
      });
      $("input[value='no']").click(function() {
          $(".request-logo_position").hide();
      });
  });