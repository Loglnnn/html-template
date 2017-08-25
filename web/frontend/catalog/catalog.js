"use strict";
var slider;
$(document).ready(function () {
  slider =
  $("*[data-role='material-slider']").slick(
  {
    slidesToShow: 2,
    slidesToScroll: 2,
    arrows: true,
    dots: true,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: 479,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
        }
      },
    ]
  }
  )[0];
  
  var slickTimerId = setInterval(function () {
    if(Math.random() > 0.5)
      slider.slick.slickNext();
    else
      slider.slick.slickPrev();
  }, 5000)
});
