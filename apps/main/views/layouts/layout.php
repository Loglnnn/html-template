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

<div class="l__header">
  <div class="subheader">
    <img src="/frontend/layout/logo.png" class="logo" />
    <div class="search">
      <input type="text" placeholder="Найти" />
    </div>
    <div class="contacts">
      <div class="city">Санкт-Петербург</div>
      <div class="phone">8 800 832 32 32</div>
    </div>
  </div>
  <div class="navbar">
    <div class="inner">
      <div class="menu-wrap"><span class="header">Меню</span>
        <ul class="menu">
          <li>Фотообои</li>
          <li>Загрузить свое фото</li>
          <li>
            Информация<span class="arrow"></span>
            <ul class="submenu">
              <li>Как подобрать фотообои</li>
              <li>Какие бывают размеры</li>
              <li>Как правильно клеить</li>
            </ul>
          </li>
          <li>Портфолио</li>
          <li>Контакты</li>
        </ul>
      </div>
      <div class="cart">2 товара</div>
    </div>
  </div>
</div>

<?= $content ?> <!-- эту строчку нужно оставить как есть и не обертывать ее в какие-либо блоки -->

<!-- футер -->
<div class="l__footer">
  <div class="wrap">
    <div class="catalog">
      <h1>Каталог фотообоев</h1>
      <ul class="category-list">
        <li>
          <h2>Европа</h2>
          <ul class="subcategory-list">
            <li><a href="#">Итем 1</a></li>
            <li><a href="#">Итем 2</a></li>
            <li><a href="#">Итем 3</a></li>
          </ul>
        </li>
        <li class="opened">
          <h2>Природа</h2>
          <ul class="subcategory-list">
            <li><a href="#">Водопады</a></li>
            <li><a href="#">Горы</a></li>
            <li><a href="#">Лес</a></li>
          </ul>
        </li>
        <li>
          <h2>Цветы и растения</h2>
          <ul class="subcategory-list">
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
        <li>
          <h2>Искусство</h2>
          <ul class="subcategory-list">
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
        <li>
          <h2>Искусство</h2>
          <ul class="subcategory-list">
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
    <div class="logo-socials-wrap">
      <img src="/frontend/layout/logo.png" class="logo" />
      <div class="socials-wrap">
        <div class="socials">
          <a href="#">T</a>
          <a href="#">F</a>
          <a href="#">V</a>
          <a href="#">I</a>
        </div>
      </div>
    </div>
    <div class="contacts">
      <div class="phone">8 800 832 32 32</div>
      <div class="address">г. Москва, Нахимовский пр-т, д.24</div>
    </div>
  </div>
  <div class="subfooter">
    <div class="inner">
      <div class="copyright">© stenagrafika.ru, 2017</div>
      <div class="links">
        <a href="#">Портфолио</a>
        <a href="#">Полезная информация</a>
        <a href="#">Контакты</a>
      </div>
      <img src="/frontend/layout/payments.png" class="payment-variants" />
    </div>
  </div>
</div