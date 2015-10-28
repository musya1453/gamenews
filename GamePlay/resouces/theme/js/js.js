(function ($) {

  $(window).load(function() {
    $('.flexslider').flexslider({
      animation: "slide",
      //Boolean: Create navigation for previous/next navigation? (true/false)
      prevText: "",           //String: Set the text for the "previous" directionNav item
      nextText: "",
      controlNav: false
    });
  });

})(jQuery);

