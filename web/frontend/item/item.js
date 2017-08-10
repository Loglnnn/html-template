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

 
$(document).ready(function () {
  $('*[data-role="tabs"]').each(function(_, element) {
    console.log(element);
    var headers = $($(element).find('*[data-role="tab-headers"]')[0]).children('*[data-role="tab-header"]');
    var containersRoot = $($(element).find('*[data-role="tab-container"]')[0]);
    
    headers.on('click', function(e) {
      e.preventDefault();
      headers.removeClass("active");
      $(e.target).addClass("active");
      containersRoot.find(".tab").removeClass("active");
      var container = containersRoot.find('*[data-tab-id="' + e.target.getAttribute("data-tab-id") + '"]');
      container.addClass("active");
      
    });
  });
});