var highlightSlider = document.getElementsByClassName('highlight-slider__container');
if (highlightSlider.length > 0) {
  // elements with class "highlight-slider__container" exist
  var slider = tns({
    container: '.highlight-slider__container',
    items: 1,
    edgePadding: 0,
    swipeAngle: false,
    speed: 700,
    gutter: 0,
    nav: true,
    responsive: {
      600: {
        edgePadding: 170,
        gutter: 90
      },
      768: {
        edgePadding: 120,
        gutter: 90
      },
      1120: {
        edgePadding: 222,
        gutter: 154
      },
      1582: {
        edgePadding: 322
      }
    }
  });
}
