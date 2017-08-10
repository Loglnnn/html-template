"use strict";

/**
 * Главное:
 *      https://github.com/cronfy/html-template/blob/master/docs/README.md
 *
 * О JS:
 *      Требования к JS:
 *      https://github.com/cronfy/html-template/blob/master/docs/js.md
 *
 * JS для основного шаблона apps/main/views/layouts/layout.php
 *
 */
$(document).ready(function () {
  $('.navbar *[data-role="menu-root"], .category-list *[data-role="menu-root"]').each(function(_, element) {
    var toggle = $(element).children('*[data-role="menu-toggle"]');
    var menu = $(element).children('*[data-role="menu-list"]');
    $(toggle).on("click", function(e) {
      e.preventDefault();
      menu.toggleClass("opened");
      toggle.toggleClass("opened");
    });
  });
  $(window).scroll(function() {
    var top = $(document).scrollTop();
    if(top < 70 )
      $(".l__header .navbar").removeClass("fixed");
    else
      $(".l__header .navbar").addClass("fixed");
  })
});