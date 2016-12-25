$(document).ready(function(){
  //predefined variables
  var opacity = [0, 1];
  var animationSpeed = [300, 400, 3000];
  var offset = ["50%", "100%"];
  // Navigation
  //affixing the nav bar
  var $window = $(window);
  var $header = $("header");
  var $body = $("body");
  var $dropdownToggle = $header.find(".dropdown-toggle");
  var $navMenu = $header.find("#nav-menu");

  //add active class to li when clicked
  var $navAnchorTags = $header.find(".nav.navbar-nav > li > a");

  $navAnchorTags.click(function(){
    $navAnchorTags.parent().removeClass("active");
    $(this).parent().addClass("active");
  });

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
      $form.find("#name").val('');
      $form.find("#number").val('');
      $form.find("#query").val('');
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

  //counter
  var $counterSection = $('.counter-c');

  //countUp function
  function countUp(ele) {
    var $counter = $body.find(ele);
    var start = parseFloat($counter.attr("data-start"));
    var end = parseFloat($counter.attr("data-end"));
    var speed = parseFloat($counter.attr("data-speed"));
    $counter.countTo({
            from: start,
            to: end,
            speed: speed,
            refreshInterval: 10,
            onComplete: function(value) {
                console.debug(this);
            }
        });
  }
  var counterWaypoint = new Waypoint({
    element: $counterSection,
    handler: function(){
      countUp('#counter-1');
      countUp('#counter-2');
      countUp('#counter-3');
      this.destroy();
    },
    offset: offset[0]
  });
  //services
  //animation function for "flying" in of elements
  function flyIn(ele) {
    ele.each(function(i){
      setTimeout(function(){
        ele.eq(i).animate({"left":0, "right":0}, 800);
      }, 100 * i);
    });
  }
  var $services = $counterSection.next();
  var $serviceOp1 = $services.find(".thumbnail-figure").slice(0, 3);
  var $serviceOp2 = $services.find(".thumbnail-figure").slice(3, 6);
  var servicesWaypoint = new Waypoint({
    element: $counterSection,
    handler: function(){
      flyIn($serviceOp1);
      flyIn($serviceOp2);
      this.destroy();
    },
    offset: "20%"
  });

});
