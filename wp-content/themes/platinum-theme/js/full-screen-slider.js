var fullScreenSlider = document.getElementsByClassName('full-screen-slider');
if (fullScreenSlider.length > 0) {
  // elements with class "full-screen-slider" exist
  var slider = tns({
    container: '.full-screen-slider',
    items: 1,
    slideBy: 'page',
    autoplay: true,
    speed: 2000,
    mode: 'gallery',
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    nav: false
  });
}
