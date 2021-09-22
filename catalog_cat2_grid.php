<?php
include_once __DIR__ . '/inc/header.php';
?>

    <div class="container">
        <ul class="nav complex__breadcrumb">
            <li><a href="/">Главная</a></li>
            <li><a href="">Тепловое оборудование</a></li>
            <li>Пароконвектоматы</li>
        </ul>
        <div class="row complex__group-title">
            <div class="col flex-grow-0 d-flex">
                <h1 class="complex__title ">
                    Пароконвектоматы
                </h1>
                <sup class="complex__count-big">30</sup>
            </div>
            <div class="col d-flex">
                <a href="" class="complex__title complex__title--link">Аксессуары</a>
                <sup class="complex__count-big">130</sup>
            </div>
        </div>

        <div class="row">
            <div class="col-12 fpad30">
                <?php
                include_once __DIR__ . '/inc/nav_tags.php';
                ?>
            </div>
        </div>
        <div class="row complex__cat">
            <?php
            include_once __DIR__ . '/inc/cat-filter.php';
            ?>

        </div>
        <div class="complex__text fpad70">
            <h2>Наш ассортимент (seo)</h2>
            <p>Компания Комплекс Трейд предлагает к продаже кухонное оборудование для ресторанов, кафе, баров, столовых,
                других заведений общественного питания, а также пекарней и пиццерий. В каталоге нашего интернет магазина
                представлена продукция ведущих мировых производителей, характеризующаяся высоким качеством и
                надежностью. Все предлагаемое оборудование создано с учетом существующих требований к безопасности и
                охране труда, соответствует действующим санитарно-гигиеническим нормам и стандартам.</p>

            <a href="" class="complex__more-link2 d-flex align-items-center" id="moreTextBtn">
                Подробнее
                <svg width="7" height="4" class="ml-10">
                    <use xlink:href="#svg-down"></use>
                </svg>
            </a>
            <div id="moreText" style="display: none">
                <p>Компания Комплекс Трейд предлагает к продаже кухонное оборудование для ресторанов, кафе, баров,
                    столовых, других заведений общественного питания, а также пекарней и пиццерий. В каталоге нашего
                    интернет магазина представлена продукция ведущих мировых производителей, характеризующаяся высоким
                    качеством и надежностью. Все предлагаемое оборудование создано с учетом существующих требований к
                    безопасности и охране труда, соответствует действующим санитарно-гигиеническим нормам и
                    стандартам.</p>
            </div>
        </div>
    </div>

<?php
include_once __DIR__ . '/inc/footer.php';
?>