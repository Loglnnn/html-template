<div class="page__catalog container-fluid">
  <div class="c__breadcrumbs row">
    <div class="c__inner col-xs-12">
      <ul class="breadcrumbs">
        <li><a href="#">Главная</a></li>
        <li><a href="#">Каталог</a></li>
        <li><h1>Текстура кирпича</h1></li>
      </ul>
    </div>
  </div>
  <div class="thumb-wrap row">
    <div class="c__inner col-xs-12">
      <div class="thumb">
        <div class="preview row">
          <img src="/frontend/catalog/testimage.jpg" />
        </div>
        <div class="announce row">
          <div class="c__inner col-xs-12">
            <h2 class="caption">Белый кирпич</h2>
            <p>
              Наши настенные фрески из Текстуры - все о выражении вашего видения. Вы ищете городское чувство? Попробуйте одну из наших кирпичных настенных росписей. Стиль страны? Пойдите с одной из наших деревянных настенных росписей. Изменение внешнего вида ваших стен никогда не было так легко с настенными росписями и фото-росписями Eazywallz.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="announce2 c__hide-320-768 row">
    <div class="c__inner col-xs-12">
      <p>
        Просмотрите нашу категорию «Текстуры настенные», чтобы воссоздать естественные текстуры с невероятным реализмом. Пойдите с нашей красной кирпичной стеной, чтобы добавить городской и модный стиль «лофта» в вашу гостиную; Выберите «Улицы из белого дерева», чтобы дать вашей спальне атмосферу французской страны; Или пойдите зеленым с Настенной росписью стены Бусины Грина, которая принесет освежающий прикосновение к Вашему домашнему декору.
      </p>
      <p>
        Наши фотообои текстур обманут ваши глаза и помогут вам украсить ваши комнаты материалом, который вы иначе не могли бы использовать. Мы печатаем все настенные росписи Textures на нашей оригинальной и инновационной самоклеющейся тканой ткани. Если вы ищете простое решение для преобразования внешнего вида ваших стен и декора вашей комнаты, вы находитесь в нужном месте!
      </p>
      <p>
        Наши настенные росписи, обои и росписи фотографий очень просты в установке и могут быть легко удалены, если необходимо. Кроме того, наш пользовательский раздел предлагает вам интересный способ персонализировать ваши настенные росписи именно так, как вы этого хотите. Кроме того, мы предлагаем БЕСПЛАТНУЮ доставку по каждому заказу по всей Канаде и континентальной части Соединенных Штатов!
      </p>
    </div>
  </div>
  <div class="material-slider-wrapper row">
    <div class="c__inner col-xs-12">
      <div class="material-slider" data-role="material-slider">
        <?php for($i=0;$i<10;$i++) { ?>
        <div class="material-thumb">
          <a href="#">
            <div class="c__centered-image material-image">
              <img src="/frontend/catalog/testimage.jpg" />
            </div>
            <a href="#" class="btn caption">Дерево<?php echo $i; ?></a>
          </a>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <div class="filters-block row">
    <div class="col-xs-12 c__inner">
      <div class="filter">
        <div class="count-select form-group c__custom-form-group">
          <select class="form-control filter-select">
            <option>Фильтр 1</option>
            <option>Фильтр 2</option>
            <option>Фильтр 3</option>
          </select>
          <div class="help-block"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="product-list-wrap row">
    <div class="c__inner col-xs-12">
      <div class="product-list">
        <?php 
          $imgs = array( 
            "testimage.jpg",
            "img1.png",
            "img2.png",
            "img3.png",
          );
          for($i=0;$i<7;$i++) { 
        ?>
        <div class="product-card">
          <a href="#">
            <div class="img-wrap">
              <img src="/frontend/catalog/<?php echo $imgs[$i%4]; ?>" />
            </div>
            <div class="description">
              <h3 class="caption">GreenBerry дорога к замку<?php echo $i; ?></h3>
              <div class="articul">F015-4<?php echo $i; ?></div>
            </div>
          </a>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <div class="pagination row">
    <div class="c__inner col-xs-12">
      <div class="pagelist-wrap">
        <ul class="pagelist">
          <li class="active">1</li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li class="divider">...</li>
          <li><a href="#">49</a></li>
        </ul>
      </div>
      <div class="btn-wrapper">
        <a href="#" class="btn btn-block c__btn-filled btn-next-page">Следующая страница</a>
      </div>
    </div>
  </div>
  
  <div class="c__seotext row">
    <div class="c__inner col-xs-12">
      <div class="columns">
        <h1>Фотообои в Москве <br class="c__hide-480" /> и Московской области</h1>
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

