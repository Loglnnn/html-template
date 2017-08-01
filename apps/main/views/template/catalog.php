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
<div class="page__catalog">
  <div>
    <ul class="c__breadcrumbs">
      <li><a href="#">Главная</a></li>
      <li><a href="#">Каталог</a></li>
      <li><h1>Текстура кирпича</h1></li>
    </ul>
  </div>
  <div class="description">
    <div class="img-wrap">
      <img src="/frontend/catalog/testimage.jpg" />
    </div>
    <div class="text-wrap">
      <h2>Белый кирпич</h2>
      <p>
        Наши настенные фрески из Текстуры - все о выражении вашего видения. Вы ищете городское чувство? Попробуйте одну из наших кирпичных настенных росписей. Стиль страны? Пойдите с одной из наших деревянных настенных росписей. Изменение внешнего вида ваших стен никогда не было так легко с настенными росписями и фото-росписями Eazywallz.
      </p>
    </div>
  </div>
  <div>
    //TODO SLIDER
  </div>
  <div class="photo-cards-wrap">
    <div class="photo-card col-2">
      <img src="/frontend/catalog/testimage.jpg" />
      <h3>GreenBerry дорога к замку</h3>
      <div class="articul">F015-41</div>
    </div>
    <div class="photo-card col-2">
      <img src="/frontend/catalog/testimage.jpg" />
      <h3>GreenBerry дорога к замку</h3>
      <div class="articul">F015-41</div>
    </div>
    <div class="photo-card fullwidth">
      <img src="/frontend/catalog/testimage.jpg" />
      <h3>GreenBerry дорога к замку</h3>
      <div class="articul">F015-41</div>
    </div>
    <div class="photo-card fullwidth">
      <img src="/frontend/catalog/testimage.jpg" />
      <h3>GreenBerry дорога к замку</h3>
      <div class="articul">F015-41</div>
    </div>
  </div>
  //TODO seotext in components
  <div class="seotext">
    <h1>Фотообои в Москве и Москвоской области</h1>
    <p>
      У каждого периодически встает вопрос необходимости ремонта. Иногда его требует поизносившаяся побелка и выгоревшие обои, а иногда и банальное желание сделать свою жизнь в квартире немного ярче.
    </p>
    <p>
      С этой задачей хорошо справляются фотообои. Купить их в Минске можно у нас. Они выполнены из бумаги или винила, иногда имеют ламинированную поверхность, что делает их более долговечными. Они клеятся на стену также как и обычные обои, а за счет фотографического детализированного рисунка, визуально расширяется внутреннее пространство помещения. Поэтому данные изделия наиболее функциональны именно в небольших комнатах. Технология изготовления довольно понятная. 
    </p>
  </div>
</div>

