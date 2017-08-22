<?php
  //google maps, пришлось править AutoAssets для этого
  $assets->addJs('https://maps.google.com/maps/api/js?sensor=false');
  $assets->addJs('https://vk.com/js/api/openapi.js');
?>
<div class="page__contacts container-fluid">
  <div class="c__breadcrumbs row">
    <div class="c__inner container-fluid">
      <ul class="breadcrumbs">
        <li><a href="#">Главная</a></li>
        <li><h1>Контакты</h1></li>
      </ul>
    </div>
  </div>
  
  <div class="map-header row">
    <div class="c__inner container-fluid">
    <ul class="headers">
      <li class="active"><a href="#">Москва</a></li>
      <li><a href="#">Санкт-Петербург</a></li>
      <li><a href="#">Нижний-Новгород</a></li>
    </ul>
    </div>
  </div>
  <div class="map row" data-role="map">
    
  </div>
  <div class="socials row">
    <div class="c__inner container-fluid">
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