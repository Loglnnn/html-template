"use strict";

/**
 * Главное:
 *      https://github.com/cronfy/html-template/blob/master/docs/README.md
 *
 * О JS:
 *      Требования к JS:
 *      https://github.com/cronfy/html-template/blob/master/docs/js.md
 *
 * JS для конкретной страницы apps/main/views/template/example.php
 *
 */

$(document).ready(function() {
  $("*[data-role='main-slider'").slick(
  {
    arrows: false,
    accessibility: false,
    autoplay: true,
    autoplaySpeed: 15000,
    draggable: false,
  });
});