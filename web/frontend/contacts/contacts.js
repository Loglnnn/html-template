"use strict";
$(document).ready(function() {
    var map = new google.maps.Map($('*[data-role="map"]')[0],
        {
            zoom: 11,
            center: new google.maps.LatLng(59.901567, 30.300273),
            disableDefaultUI: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
        });
  
    $('*[data-role="tabs"]').each(function(_, element) {
        var headers = $($(element).find('*[data-role="tab-headers"]')[0]).children('*[data-role="tab-header"]');
        var containersRoot = $($(element).find('*[data-role="tab-container"]')[0]);

        headers.on('click', function(e) {
            e.preventDefault();
            headers.removeClass("active");
            $(e.target).addClass("active");
            containersRoot.find("*[data-tab-id]").removeClass("active");
            var container = containersRoot.find('*[data-tab-id="' + e.target.getAttribute("data-tab-id") + '"]');
            container.addClass("active");
            
            var c_lat = e.target.getAttribute('data-lat');
            var c_long = e.target.getAttribute('data-long');
            map.setCenter(new google.maps.LatLng(c_lat, c_long));
        });
    });
  
    
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(59.901567, 30.300273),
        map: map,
        icon: '/frontend/component/google-styled-map/map-marker.png',
        title: 'Stenagrafika.ru'
    });

    VK.Widgets.Group("vk_widget", {mode: 0, width: "auto", height:400, wide:1}, 20003922);
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.10&appId=752583108171786";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
});