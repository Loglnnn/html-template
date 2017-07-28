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


<div class="l__example-block1 container">
    Блок общего шаблона в адаптивном контейнере.
    <p>Картинка в общем шаблоне, располагается в <code>/web/image/layout/...</code>,
        url будет <code>/image/layout/...</code>
        <img src="/image/layout/vk.png" style="width: 32px;" />
    </p>
</div>

<div class="l__example-block2 container-fluid">
    Блок общего шаблона в контейнере во всю ширину.
</div>


<?= $content ?> <!-- эту строчку нужно оставить как есть и не обертывать ее в какие-либо блоки -->


<!-- футер -->
