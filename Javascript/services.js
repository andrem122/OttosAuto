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

  //remove right border from previous sibling li
  //items next to an active li
  var tabLis = document.getElementsByClassName("nav-tabs")[0].children;
  for(var i = 0; i < tabLis.length; i++) {
    tabLis[i].addEventListener("click", function(e){
      if(e.target.nodeName === "a") {
        e.target.parent.previousElementSibling.style.borderRight = "0";
      }
      for (var j = 0; j < tabLis.length; j++) {
        tabLis[j].style.borderRight = "1px solid #ccc" ;
      }
      //remove border-right from last list item
      tabLis[5].style.borderRight = "0";
      this.style.borderRight = "0";
      if(this.previousElementSibling) {
        this.previousElementSibling.style.borderRight = "0";
      }
    });
  }

  //tab collapse
  var $serviceTab = $body.find("#service-tab");
  var $serviceTabCollapse = $body.find("#service-tab-accordion");
  var $services = $body.find("#services");
  $serviceTab.tabCollapse();

  // Javascript to enable link to tab
  //click on link in service dropdown
  //gets data-tab attribute
  //use attribute value, data-tab, to select the appropriate tab
  //show appropriate tab
  var $serviceDropdownA = $header.find(".dropdown-menu > li > a");
  var $serviceDropdownA2 = $serviceDropdownA.slice(6, 12);

  $serviceDropdownA.click(function(e){
    e.preventDefault();
    var tab = $(this).attr("data-tab");
    $serviceTab.find("a[href='" + tab + "']").tab("show");
  });

  var url = document.location.toString();
  if (url.match('#')) {
      $('#service-tab a[href="#' + url.split('#')[1] + '"]').tab('show');
  }

});
