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

  //staff animation
  var $staff = $body.find("#staff");
  var $staffMem = $staff.find(".staff-block");
  var staffWaypoint = new Waypoint({
    element: $staff,
    handler: function(){
      $staffMem.each(function(i){
        setTimeout(function(){
          $staffMem.eq(i).animate({"left":0}, 1000);
        }, 100 * i);
      });
      this.destroy();
    },
    offset: "50%"
  });
});
