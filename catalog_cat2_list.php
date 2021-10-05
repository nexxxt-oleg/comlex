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
            <div class="col-xl-9 col-lg-8 fpad50 d-flex flex-column">
                <?php
                include_once __DIR__ . '/inc/sort-top.php';
                include_once __DIR__ . '/inc/active-filter.php';
                include_once __DIR__ . '/inc/cat-slider.php';
                include_once __DIR__ . '/inc/list.php';
                ?>
                <div class="complex__footer-pagination">
                    <button class="complex__footer-pagination__all-more">Показать еще</button>
                    <div class="complex__footer-pagination__nav">
                        <? include __DIR__ . '/inc/paginations.php'; ?>
                    </div>
                </div>
                <div class="complex__mob-filter-btn">
                    <button id="mobFilter" class="complex__btn complex__btn--blue complex__btn--h44">
                        <svg width="24" height="24" class="ico mr-10">
                            <use xlink:href="#svg-filter"></use>
                        </svg>
                        Фильтр по параметрам
                    </button>
                </div>
            </div>
        </div>
        <?php
        include_once __DIR__ . '/inc/seo-text.php';
        ?>

    </div>

<?php
include_once __DIR__ . '/inc/footer.php';
?>