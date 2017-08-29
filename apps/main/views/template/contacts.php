<?php
  $assets->addJs('https://maps.google.com/maps/api/js?key=AIzaSyDXmzA8nErvKaIWacap7z9T2D9VzdfgWyA&sensor=false');
  $assets->addJs('https://vk.com/js/api/openapi.js');
?>
<div class="page__contacts container-fluid">
  <div class="c__breadcrumbs row">
    <div class="c__inner col-xs-12">
      <ul class="breadcrumbs">
        <li><a href="#">Главная</a></li>
        <li><h1>Контакты</h1></li>
      </ul>
    </div>
  </div>
  
  <div class="map-header row">
    <div class="c__inner col-xs-12">
    <div data-role="tabs">
      <ul class="headers" data-role="tab-headers">
        <li data-role="tab-header" data-city="Москва" data-long="37.61556" data-lat="55.75222">Москва</li>
        <li class="active" data-role="tab-header" data-city="Санкт-Петербург" data-long="30.26417" data-lat="59.89444">Санкт-Петербург</li>
        <li data-role="tab-header" data-city="Нижний-Новгород" data-long="44.00205" data-lat="56.32867">Нижний-Новгород</li>
      </ul>
    </div>
    </div>
  </div>
  <div class="map row" data-role="map">
    
  </div>
  <div class="socials row">
    <div class="c__inner col-xs-12">
      <h1 class="caption">Присоединяйтесь к нам</h1>
      <div class="blocks-container">
        <div class="social-block">
          <div id="vk_widget"></div>
        </div>
        <div class="social-block">
          <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-small-header="false" data-width="386" data-height="400" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
        </div>
      </div>
    </div>
  </div>
</div>