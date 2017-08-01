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
 * Стандартная страница сайта.
 *
 * Для повторяющихся на разных страницах элементов - h1, хлебные крошки, пагинация и пр. - можно
 * использовать общий файл стилей `web/frontend/component/components.css`, чтобы избежать дублирования кода.
 *
 */
?>
<div class="page__item">
  <div>
    <ul class="c__breadcrumbs">
      <li><a href="#">Главная</a></li>
      <li><a href="#">Каталог</a></li>
      <li><h1>Текстура кирпича</h1></li>
    </ul>
  </div>
  <div class="card">
    <div class="preview">
      <img src="/frontend/catalog/testimage.jpg" />
    </div>
    <ul class="tags">
      <li><a href="#">Природа</a></li>
      <li><a href="#">Море</a></li>
      <li><a href="#">Отдых</a></li>
    </ul>
    <div class="articul">F015-41</div>
    <div class="dim_input">
      <div class="input_container">
        <label for="width">Ширина</label>
        <div class="length-input">
          <input class="left" type="text" id="width" />
        </div>
      </div>
      <div class="input_container">
        <label for="height">Высота</label>
        <div class="length-input">
          <input class="right" type="text" id="height" />
        </div>
      </div>
    </div>
    <div class="material-list">
      <ul>
        <li>
          <div class="img-wrap">
            <img src="/frontend/catalog/testimage.jpg" />
          </div>
          <div class="name">Холст</div>
        </li>
        <li>
          <div class="img-wrap">
            <img src="#" />
          </div>
          <div class="name">Штукатурка</div>
        </li>
        <li>
          <div class="img-wrap">
            <img src="#" />
          </div>
          <div class="name">Лен</div>
        </li>
        <li>
          <div class="img-wrap">
            <img src="#" />
          </div>
          <div class="name">Винил</div>
        </li>
        <li>
          <div class="img-wrap">
            <img src="#" />
          </div>
          <div class="name">Холст</div>
        </li>
        <li>
          <div class="img-wrap">
            <img src="#" />
          </div>
          <div class="name">Холст</div>
        </li>
      </ul>
      <div class="price">
        <span class="old">7999</span>
        5920 руб.
      </div>
      <a href="#" class="btn c__btn-block c__btn-filled">Консультация дизайнера</a>
    </div>
    <div class="form">
      <h1>Оформление заказа</h1>
      <div class="call">Перзвоним вам в течение 15 минут</div>
      <div class="fields">
        <div class="field">
          <label for="name">Имя и Фамилия</label>
          <input type="text" id="name" />
        </div>
        <div class="field half-lg">
          <label for="phone">Телефон</label>
          <input type="text" id="phone" />
        </div>
        <div class="field half-lg">
          <label for="email">Электронная почта</label>
          <input type="text" id="email" />
        </div>
        <div class="field half-lg">
          <label for="delivery-method">Способ доставки</label>
          <select id="delivery-method">
            
          </select>
        </div>
        <div class="field half-lg">
          <label for="delivery-place">Пункт выдачи</label>
          <select id="delivery-place">
            
          </select>
        </div>
        <div class="field centered">
          <input type="checkbox" id="is-delivery-place" />
          <label class="inline" for="is-delivery-place">Пункт выдачи</label>
        </div>
        <submit class="btn c__btn-block c__btn-filled">Сделать заказ</submit>
      </div>
    </div>
    <div class="delivery-places">
      <h1>Пункты выдачи</h1>
      <div class="city">В Санкт-Петербурге</div>
      <div class="map">Карта</div>
    </div>
    
    <div class="similar">
    
      <h1>Вам могут понравиться</h1>
      <div class="similar-card">
        <img src="#" />
        <h2>GreenBerry дорога к замку</h2>
        <div class="articul">F015-41</div>
      </div>
      // Здесь такие же элементы как и на странице каталога -> вынести в компонент
    </div>
    <hr>
    <div class="description">
      //TODO табы
    </div>
  </div>
</div>

