<?php
  //см. contacts.php
  $assets->addJs('https://maps.google.com/maps/api/js?sensor=false');
?>
<div class="page__item container-fluid">
  <div class="c__breadcrumbs row">
    <div class="c__inner container-fluid">
      <ul class="breadcrumbs">
        <li><a href="#">Главная</a></li>
        <li><a href="#">Каталог</a></li>
        <li><a href="#">Природа</a></li>
        <li><h1>GreenBerry Дорога к замку</h1></li>
      </ul>
    </div>
  </div>
  <div class="first-row row">
    <div class="c__inner container-fluid">
      <div class="thumb">
        <div class="preview row">
          <img src="/frontend/item/testimage.jpg" />
        </div>
        <ul class="tags">
          <li><a href="#">Природа</a></li>
          <li><a href="#">Море</a></li>
          <li><a href="#">Отдых</a></li>
        </ul>
        <div class="articul">F015-41</div> 
      </div>
      <div class="inputs">
        <div class="dim_input row container-fluid">
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
        <div class="material-list row">
          <ul>
            <?php for($i=0;$i<6;$i++) { ?>
            <li <?php if($i==2) echo 'class="selected"' ?>>
              <div class="material-wrap">
                <div class="img-wrap c__centered-image">
                  <img src="/frontend/item/testimage.jpg" />
                </div>
                <div class="name">Штукатурка</div>
                <?php if($i==2) echo '<div class="sale">20%</div>' ?>
              </div>
            </li>
            <?php } ?>
          </ul>
        </div>
        <div class="price">
          <span class="old">7999</span>
          5920 руб.
        </div>
        <a href="#" class="btn c__btn-block c__btn-filled c__btn-default-line-height">
          <div class="c__vertical-centered-text"><span>Консультация <br class="c__hide-480" />дизайнера</span></div>
        </a>
      </div>
      
    </div>
  </div>
  <div class="second-row row">
    <div class="c__inner container-fluid">
      <div class="form">
        <h1>Оформление заказа</h1>
        <div class="call">Перезвоним Вам<br class="c__hide-480" /> в течение 15 минут</div>
        <div class="fields row container-fluid">
          <div class="field form-group">
            <label class="control-label" for="name">Имя и Фамилия</label>
            <input class="form-control" type="text" id="name" />
            <div class="help-block">Help Block</div>
          </div>
          <div class="field half-768 form-group ">
            <label for="phone">Телефон</label>
            <input type="text" id="phone" />
            <div class="help-block">Help Block</div>
          </div>
          <div class="field half-768 form-group ">
            <label for="email">Электронная почта</label>
            <input type="text" id="email" />
            <div class="help-block">Help Block</div>
          </div>
          <div class="field half-768 form-group ">
            <label for="delivery-method">Способ доставки</label>
            <select id="delivery-method">
              <option id="option11">option11</option>
              <option id="option12">option12</option>
              <option id="option13">option13</option>
            </select>
            <div class="help-block">Help Block</div>
          </div>
          <div class="field half-768 form-group ">
            <label for="delivery-place">Пункт выдачи</label>
            <select id="delivery-place">
              <option id="option21">option21</option>
              <option id="option22">option22</option>
              <option id="option23">option23</option>
            </select>
            <div class="help-block">Help Block</div>
          </div>
          <div class="field form-group half-768 half-fullwidth-1000">
            <label class="checkbox" for="is-delivery-place"><input type="checkbox" id="is-delivery-place" />
            Пункт выдачи</label>
            <div class="help-block">Help Block</div>
          </div>
          <div class="field half-768 half-fullwidth-1000">
            <submit class="btn c__btn-block c__btn-filled">Сделать заказ</submit>
          </div>
        </div>
      </div>
      <div class="delivery-places">
        <h1>Пункты выдачи</h1>
        <div class="city">В Санкт-Петербурге</div>
        <div class="map row" data-role="map"></div>
      </div>
    </div>
  </div>
  <div class="similar">
    <h1>Вам могут понравиться</h1>
    <div class="similar-card-list">
      <?php for($i=0;$i<12;$i++) { ?>
        <div class="similar-card-wrap">
          <div class="c__photo-card">
            <a href="#">
              <div class="img-wrap">
                <img src="/frontend/item/testoboi.jpg" />
              </div>
              <div class="description">
                <h2 class="caption">GreenBerry Дорога к <?php if($i%2 == 0) echo "загадочному"; ?> замку </h2>
                <div class="articul">F015-41</div>
              </div>
            </a>
          </div>
        </div>
      <?php } ?>
    </div>
  </div> 

  <div class="description row">
    <div data-role="tabs">
      <div class="tab-head">
        <div class="c__inner container-fluid">
          <ul class="row" data-role="tab-headers">
            <li data-tab-id="tab1" data-role="tab-header" class="active">Описание</li>
            <li data-tab-id="tab2" data-role="tab-header">Характеристики</li>
            <li data-tab-id="tab3" data-role="tab-header" class="c__hide-320">Описание</li>
          </ul>
        </div>
      </div>
      <div class="tab-container" data-role="tab-container">
        <div class="c__inner container-fluid">
          <div data-tab-id="tab1" class="tab active">
            <h3 class="caption">Материалы</h3>
            <p>
              Яркие детали и цвет в Angkor Wat, настенная роспись Камбоджи от Eazywallz.com делают этот идеальный выбор для любого дома. Богатые зеленые цвета на этой фото-росписи сделают любую стену в вашем доме оживленной. Принесите чудеса этой экзотической земли в ваш дом с этими фото обоими.
            </p>
            <h3 class="caption">Информация</h3>
            <p>
              —  Пилинг и палочка Тонкий холст<br>
              —  Отделка: матовая<br>
              —  Толщина: 6,0 мил<br>
              Никаких дополнительных инструментов, клея, пасты или воды, необходимых для подвешивания. Эта настенная роспись является съемной, пригодной для повторного использования и не повредит ваши стены.
            </p>
            <h3 class="caption">Оплата и доставка</h3>
            <p>
              Пожалуйста, разрешите от 1 до 7 рабочих дней обрабатывать и печатать ваш заказ.
            </p>
            <p>
              Мы отправляем почти всюду в Канаде и Смежных Соединенных Штатах через FedEx Ground. Вы получите подтверждение по электронной почте при отправке товара. <b><a href="#">FedEx Ground</a></b> будет иметь ваш заказ в течение 1-10 рабочих дней в зависимости от вашего местоположения.
            </p>
            <p>
              Теперь мы предлагаем международную доставку за пределами Северной Америки. Пожалуйста, свяжитесь с нами до вашей покупки, чтобы получить стоимость доставки для вашей страны.
            </p>
          </div>
          <div data-tab-id="tab2" class="tab">
            <h3 class="caption">TAB2</h3>
            <p>
              Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. 
            </p>
            <p>
              Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. 
            </p>
          </div>
          <div data-tab-id="tab3" class="tab">
            <h3 class="caption">TAB3</h3>
            <p>
              Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. 
            </p>
            <p>
              Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. Длинный текст. 
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
