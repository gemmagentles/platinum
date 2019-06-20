var fullScreenSlider = document.getElementsByClassName('full-screen-slider');
if (fullScreenSlider.length > 0) {
  // elements with class "full-screen-slider" exist
  var slider = tns({
    container: '.full-screen-slider',
    items: 1,
    autoplay: true,
    speed: 2000,
    mode: 'gallery',
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    nav: true,
    lazyload: true
  });
}

(function ($, root, undefined) {

  $(function () {

      'use strict';
});

$(document).ready(function(){

    $(".tns-nav button").each(function() {
      var number = parseInt($(this).attr("data-nav")) + 1;
      $(this).html("0" + number);
    });

});

})(jQuery, this);
