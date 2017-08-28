<div class="page__main container-fluid">
  <div class="main-banner-wrap row">
    <div class="c__banner main-banner">
      <div class="main-slider" data-role="main-slider">
        <div class="main-banner-image overlayed" style="background-image: url('/frontend/main/banner.jpg');"></div>
        <div class="main-banner-image overlayed" style="background-image: url('/frontend/main/your-photo.jpg');"></div>
      </div>
      <h1>Разбудите <br class="c__hide-768" /> ваши стены!</h1>
      <div class="btn-container">
        <div class="wrapper">
          <a class="btn c__btn-block c__btn-filled">Перейти в каталог</a>
        </div>
      </div>
    </div>
    <div class="buttons col-xs-12">
      <a href="#" class="btn home"><div class="c__vertical-centered-text"><span>Для дома</span></div></a>
      <a href="#" class="btn book"><div class="c__vertical-centered-text"><span>Для детских учреждений</span></div></a>
      <a href="#" class="btn business"><div class="c__vertical-centered-text"><span>Для бизнеса</span></div></a>
    </div>
  </div>
  
  <div class="banners-row row">
    <div class="banner-wrap">
      <div class="c__banner second-banner">
        <div class="img-wrap">
          <img src="/frontend/main/your-photo.jpg" />
        </div>
        <h1>Фотообои <br />с вашим фото!</h1>
        <div class="side-text">
          <p>Строка 1</p>
          <p>Строка 2</p>
          <p>Строка 3</p>
        </div>
        <div class="btn-container">
          <div class="wrapper">
            <a class="btn c__btn-block c__btn-filled">Загрузить свое фото</a>
          </div>
        </div>
      </div>
    </div>
    <div class="banner-wrap">
      <div class="c__banner second-banner">
        <div class="img-wrap">
          <img src="/frontend/main/collection.jpg" />
        </div>
        <h1>Коллекция <br />30 самых популярных<br />изображений</h1>
        <div class="side-text">
          <p>Строка 1</p>
          <p>Строка 2</p>
          <p>Строка 3</p>
        </div>
        <div class="btn-container">
          <div class="wrapper">
            <a class="btn c__btn-block c__btn-filled">Посмотреть коллекцию</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pluses-wrapper row">
    <div class="c__inner col-xs-12">
      <ul class="pluses">
        <li>
          <div class="wrapper">
            <img src = "/frontend/main/clock.svg" />
          </div>
          <div class="c__vertical-centered-text"><span>1-2 дня сроки изготовления</span></div>
        </li>
        <li>
          <div class="wrapper">
            <img src = "/frontend/main/success.svg" />
          </div>
          <div class="c__vertical-centered-text"><span>10 лет успешной работы</span></div>
        </li>
        <li>
          <div class="wrapper">
            <img src = "/frontend/main/best.svg" />
          </div>
          <div class="c__vertical-centered-text"><span>Лучший каталог изображений</span></div>
        </li>
        <li>
          <div class="wrapper">
            <img src = "/frontend/main/map.svg" />
          </div>
          <div class="c__vertical-centered-text"><span>Более 500 пунктов выдачи по России</span></div>
        </li>
      </ul>
    </div>
  </div>
  <div class="most-populars">
    <h1>Самые <br class="c__hide-480" />продаваемые<br class="c__hide-768" /> фотообои</h1>
    
    <!-- flexbox -->
    <div class="photo-card-list">
    <?php for($i=0;$i<10;$i++) { ?>
      <div class="photo-card-wrap">
        <div class="c__photo-card">
          <a href="#">
            <div class="img-wrap">
              <img src="/frontend/main/testoboi.jpg" />
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
  
  <div class="c__seotext row">
    <div class="c__inner col-xs-12">
      <h1>Фотообои в Москве <br class="c__hide-480" /> и Московской области</h1>
      <div class="columns">
        <p>
          У каждого периодически встает вопрос необходимости ремонта. Иногда его требует поизносившаяся побелка и выгоревшие обои, а иногда и банальное желание сделать свою жизнь в квартире немного ярче.
        </p>
        <p>
          С этой задачей хорошо справляются фотообои. Купить их в Минске можно у нас. Они выполнены из бумаги или винила, иногда имеют ламинированную поверхность, что делает их более долговечными. Они клеятся на стену также как и обычные обои, а за счет фотографического детализированного рисунка, визуально расширяется внутреннее пространство помещения. Поэтому данные изделия наиболее функциональны именно в небольших комнатах. Технология изготовления довольно понятная.
        </p>
      </div>
    </div>
  </div>
</div>

