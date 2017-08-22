"use strict";

$(document).ready(function () {
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
  );
});
