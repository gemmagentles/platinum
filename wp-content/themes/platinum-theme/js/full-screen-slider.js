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

  // replace default dots for pagination with numbers
    $(".tns-nav button").each(function() {
      var number = parseInt($(this).attr("data-nav")) + 1;
      $(this).html("0" + number);
    });

    // calculate actual height of screen with apple nav bar.
    // First we get the viewport height and we multiple it by 1% to get a value for a vh unit
    let vh = window.innerHeight * 0.01;
    // Then we set the value in the --vh custom property to the root of the document
    document.documentElement.style.setProperty('--vh', `${vh}px`);

});

})(jQuery, this);
