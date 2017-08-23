<?php 
  $assets->addJs('https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js');
  $assets->addCss('https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css');
?>
<!-- шапка, меню -->
<div class="l__header container-fluid">
  <div class="subheader row">
    <div class="c__inner col-xs-12">
      <img src="/frontend/layout/logo.png" class="logo" />
      <div class="search">
        <div class="form-group c__custom-form-group">
          <input class="form-control" type="text" placeholder="Найти" />
          <div class="help-block"></div>
        </div>
      </div>
      <div class="contacts">
        <div class="city">Санкт-Петербург</div>
        <div class="phone">8 800 832 32 32</div>
      </div>
    </div>
  </div>
  <div class="navbar row">
    <div class="c__inner col-xs-12">
      <div class="menu-wrap" data-role="menu-root">
        <a class="mobile-header" data-role="menu-toggle">Меню</a>
        <ul class="menu" data-role="menu-list">
          <li class="main"><a href="#">Фотообои</a></li>
          <li><a href="#">Загрузить свое фото</a></li>
          <li class="submenu" data-role="menu-root">
            <a class="submenu-header" data-role="menu-toggle">Информация</a>
            <ul class="submenu-content" data-role="menu-list">
              <li><a href="#">Как подобрать фотообои</a></li>
              <li><a href="#">Какие бывают размеры</a></li>
              <li><a href="#">Как правильно клеить</a></li>
            </ul>
          </li>
          <li><a href="#">Портфолио</a></li>
          <li><a href="#">Контакты</a></li>
        </ul>
      </div>
      <div class="cart">2 товара</div>
    </div>
  </div>
</div>

<?= $content ?> 

<!-- футер -->
<div class="l__footer container-fluid">
  <div class="catalog-wrap row">
    <div class="c__inner catalog col-xs-12">
      <h1>Каталог<br class="c__hide-480" /> фотообоев</h1>
      <ul class="category-list row">
        <li class="col-xs-12" data-role="menu-root">
          <h2 data-role="menu-toggle">Европа</h2>
          <ul class="subcategory-list" data-role="menu-list">
            <li><a href="#">Итем 1</a></li>
            <li><a href="#">Итем 2</a></li>
            <li><a href="#">Итем 3</a></li>
          </ul>
        </li>
        <li class="col-xs-12" data-role="menu-root">
          <h2 data-role="menu-toggle">Природа</h2>
          <ul class="subcategory-list" data-role="menu-list">
            <li><a href="#">Водопады</a></li>
            <li><a href="#">Горы</a></li>
            <li><a href="#">Лес</a></li>
          </ul>
        </li>
        <li class="col-xs-12" data-role="menu-root">
          <h2 data-role="menu-toggle">Цветы и растения</h2>
          <ul class="subcategory-list" data-role="menu-list">
            <li><a href="#">Макросъемка</a></li>
            <li><a href="#">Розы</a></li>
            <li><a href="#">Сакура</a></li>
            <li><a href="#">Сирень</a></li>
            <li><a href="#">Орхидеи</a></li>
            <li><a href="#">Животные</a></li>
            <li><a href="#">Техника</a></li>
            <li><a href="#">Спорт</a></li>
            <li><a href="#">ретро</a></li>
            <li><a href="#">Эротика</a></li>
            <li><a href="#">Космос</a></li>
            <li><a href="#">Натюрморт</a></li>
          </ul>
        </li>
        <li class="col-xs-12" data-role="menu-root">
          <h2 data-role="menu-toggle">Искусство</h2>
          <ul class="subcategory-list" data-role="menu-list">
            <li><a href="#">Абстракция</a></li>
            <li><a href="#">Графика</a></li>
            <li><a href="#">Фентази</a></li>
            <li><a href="#">Скульптура</a></li>
            <li><a href="#">Старинные фрески</a></li>
            <li><a href="#">Обои</a></li>
            <li><a href="#">Обои классические</a></li>
            <li><a href="#">Обои современные</a></li>
          </ul>
        </li>
        <li class="col-xs-12" data-role="menu-root">
          <h2 data-role="menu-toggle">Искусство</h2>
          <ul class="subcategory-list" data-role="menu-list">
            <li><a href="#">Абстракция</a></li>
            <li><a href="#">Графика</a></li>
            <li><a href="#">Фентази</a></li>
            <li><a href="#">Скульптура</a></li>
            <li><a href="#">Старинные фрески</a></li>
            <li><a href="#">Обои</a></li>
            <li><a href="#">Обои классические</a></li>
            <li><a href="#">Обои современные</a></li>
          </ul>
        </li>
      </ul>
      <a href="#" class="btn btn-load">Загрузить свое фото</a>
    </div>
  </div> 
  <div class="footer-row row">
    <div class="c__inner col-xs-12">
      <div class="logo-socials-wrap">
        <img src="/frontend/layout/logo.png" class="logo" />
        <div class="socials-wrap">
          <div class="socials">
            <a href="#"><img src="/frontend/layout/socials-twitter.svg" /></a>
            <a href="#"><img src="/frontend/layout/socials-facebook.svg" /></a>
            <a href="#"><img src="/frontend/layout/socials-vk.svg" /></a>
            <a href="#"><img src="/frontend/layout/socials-instagram.svg" /></a>
          </div>
        </div>
      </div>
      <div class="contacts">
        <div class="phone">8 800 832 32 32</div>
        <div class="address">г. Москва, Нахимовский пр-т, д.24</div>
      </div>
    </div>
  </div>
  <div class="subfooter row">
    <div class="c__inner col-xs-12">
      <div class="copyright">© stenagrafika.ru, 2017</div>
      <div class="links">
        <a href="#">Портфолио</a>
        <a href="#">Полезная информация</a>
        <a href="#">Контакты</a>
      </div>
      <img src="/frontend/layout/payments.png" class="payment-variants" />
    </div>
  </div>
</div>