$(document).ready(function(){

  var $window = $(window);
  var $body = $("body");
  var $header = $("header");
  var $dropdownToggle = $header.find(".dropdown-toggle");
  var $navMenu = $header.find("#nav-menu");

  //Mobile Menu dropdown angle animation
  var $navbarToggle = $header.find(".navbar-toggle");
  var $angle = $dropdownToggle.children(".fa-angle-double-down");
  $dropdownToggle.on("click", function(){
    $angle.toggleClass("angle-rotate");
  });
  //when navbar toggle is clicked on,
  //remove the class "angle-rotate"
  //to ensure that the angle is pointing
  // down when you open the menu again
  $navbarToggle.click(function(){
    $angle.removeClass("angle-rotate");
  });

  //add active class to li when clicked
  var $navAnchorTags = $header.find(".nav.navbar-nav > li > a");

  $navAnchorTags.click(function(){
    $navAnchorTags.parent().removeClass("active");
    $(this).parent().addClass("active");
  });

  //form ajax
  // Get the form.
  var $form = $body.find("#ajax-contact");
  // Get the messages div.
  var $formMessages = $body.find("#form-messages");

  $form.submit(function(e) {
    // Stop the browser from submitting the form.
    e.preventDefault();

    // Serialize the form data so it can be sent with ajax
    var formData = $form.serialize();

    // Submit the form using AJAX.
    $.ajax({
        type: 'POST',
        url: $form.attr('action'),
        data: formData
    }).done(function(response) { //if ajax request succeeds
      // Make sure that the formMessages div has the 'success' class.
      $formMessages.removeClass('error');
      $formMessages.addClass('success');

      // Set the message text.
      $formMessages.text(response);

      // Clear the form.
      $form.find("#firstName").val('');
      $form.find("#email").val('');
      $form.find("#message").val('');
    }).fail(function(data) { //if ajax request fails
    // Make sure that the formMessages div has the 'error' class.
    $formMessages.removeClass('success');
    $formMessages.addClass('error');

      // Set the message text.
      if (data.responseText !== '') {
          $formMessages.text(data.responseText);
      } else {
          $formMessages.text('Oops! An error occured and your message could not be sent.');
      }
    });
  });

});
