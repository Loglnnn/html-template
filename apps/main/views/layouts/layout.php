<?php
/**
 * Главное:
 *      https://github.com/cronfy/html-template/blob/master/docs/README.md
 *
 * О шаблонах HTML:
 *      Расположение CSS, JS, картинок:
 *      https://github.com/cronfy/html-template/blob/master/docs/file-structure.md
 *      Требования к именованию классов и структуре CSS:
 *      https://github.com/cronfy/html-template/blob/master/docs/css-structure-and-naming.md
 *      Фиксированная структура для некоторых элементов HTML:
 *      https://github.com/cronfy/html-template/blob/master/docs/fixed-html.md
 *
 * Основной шаблон сайта.
 *
 * Это то, что выводится внутри `<body>`. Тег `<body>` указывать не надо.
 *
 * Здесь размещается все элементы, присутствующие на всех страницах.
 * Как правило это шапка и футер.
 *
 * Так как чаще всего заголовок H1 присутствует не на всех страницах (например, его нет на главной),
 * то в основной шаблон его включать не надо.
 *
 * Контент, который выводится шаблоном конкретной страницы (`$content`), не должен быть заключен
 * в какой-либо блок. Случается, что для какой-либо страницы нужно разместить контент во всю ширину
 * страницы или в особом контейнере, и обрамление контента в блок в основном шаблоне будет этому мешать.
 *
 * Если у сайта верстка колоночная (например, слева меню, справа контент), то верстка этих колонки
 * должна располагаться не в общем шаблоне, а в шаблоне конкретной страницы.
 *
 */
?>
<?php // Тег <BODY> указывать не надо. ?>

<!-- шапка, меню -->
<div class="l__header container-fluid">
  <div class="subheader row">
    <div class="inner container-fluid">
      <img src="/frontend/layout/logo.png" class="logo" />
      <div class="search">
        <input type="text" placeholder="Найти" />
      </div>
      <div class="contacts">
        <div class="city">Санкт-Петербург</div>
        <div class="phone">8 800 832 32 32</div>
      </div>
    </div>
  </div>
  <div class="navbar row">
    <div class="inner container-fluid">
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

<?= $content ?> <!-- эту строчку нужно оставить как есть и не обертывать ее в какие-либо блоки -->

<!-- футер -->
<div class="l__footer container-fluid">
  <div class="catalog-wrap row">
    <div class="catalog container-fluid">
      <h1>Каталог<br class="c__hide-480" /> фотообоев</h1>
      <ul class="category-list row">
        <li class="container-fluid" data-role="menu-root">
          <h2 data-role="menu-toggle">Европа</h2>
          <ul class="subcategory-list" data-role="menu-list">
            <li><a href="#">Итем 1</a></li>
            <li><a href="#">Итем 2</a></li>
            <li><a href="#">Итем 3</a></li>
          </ul>
        </li>
        <li class="container-fluid" data-role="menu-root">
          <h2 data-role="menu-toggle">Природа</h2>
          <ul class="subcategory-list" data-role="menu-list">
            <li><a href="#">Водопады</a></li>
            <li><a href="#">Горы</a></li>
            <li><a href="#">Лес</a></li>
          </ul>
        </li>
        <li class="container-fluid" data-role="menu-root">
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
        <li class="container-fluid" data-role="menu-root">
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
        <li class="container-fluid" data-role="menu-root">
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
    <div class="inner container-fluid">
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
    <div class="inner container-fluid">
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