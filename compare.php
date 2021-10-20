<?php
include_once __DIR__ . '/inc/header.php'
?>
    <div class="container">
        <ul class="nav complex__breadcrumb">
            <li><a href="">Главная</a></li>
            <li><span>Сравнение</span></li>
        </ul>
        <h1 class="complex__title fpad30">Сравнение</h1>
        <div class="d-xl-flex d-lg-flex d-none fpad30">
            <ul class="nav nav--tabs">
                <li>
                    <a href="" class="active">Все характеристики</a>
                </li>
                <li>
                    <a href="">Только отличия</a>
                </li>
            </ul>
            <div class="ml-auto pt-3">
                <a href="" class="d-flex align-items-center all-clear">
                    <svg width="13" height="13" class="ico mr-10">
                        <use xlink:href="#svg-close"></use>
                    </svg>
                    Очистить
                </a>
            </div>
        </div>
        <div class="position-relative">
            <div id="comparePrev" class="button-prev complex__slider-nav complex__slider-nav--hidden-mob">
                <svg width="7" height="14" class="ico">
                    <use xlink:href="#svg-left"></use>
                </svg>
            </div>
            <div id="compareNext" class="button-next complex__slider-nav complex__slider-nav--hidden-mob">
                <svg width="7" height="14" class="ico">
                    <use xlink:href="#svg-right"></use>
                </svg>
            </div>

            <div class="complex__compare">
                <div class="row align-items-end complex__compare__row">
                    <div class="complex__compare__col-props col-lg-3 col-md-4">
                        <div class="complex__mob-compare-params">
                            <div class="complex__mob-compare-params__title">Сравнение характеристик</div>
                            <label class="complex__lk-sender">
                                <input type="checkbox" checked="" value="1" name="news">
                                <span>Только различающиеся</span>
                            </label>
                        </div>
                        <ul class="nav complex__nav-props js-compare-props">
                            <li class="complex__nav-props__line complex__nav-props__line--n1"
                                data-sinhro="complex__nav-props__line--n1">
                                <span>Артикул</span>
                            </li>
                            <li class="complex__nav-props__line complex__nav-props__line--n2"
                                data-sinhro="complex__nav-props__line--n2">
                                <span>Название модели модели модели модели</span>
                            </li>
                            <li class="complex__nav-props__line complex__nav-props__line--n3"
                                data-sinhro="complex__nav-props__line--n3">
                                <span>Цвет</span>
                            </li>
                            <li class="complex__nav-props__line complex__nav-props__line--n4"
                                data-sinhro="complex__nav-props__line--n4">
                                <span>Для людей ростом от</span>
                            </li>
                            <li class="complex__nav-props__line complex__nav-props__line--n5"
                                data-sinhro="complex__nav-props__line--n5">
                                <span>Нагрузка до</span>
                            </li>
                        </ul>
                    </div>
                    <div class="complex__compare__col-products col-lg-9 col-md-8 col-6">
                        <div id="compareSlider" class="complex__list-compare swiper-container">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <?php
                                    include __DIR__ . '/inc/product-compare.php';
                                    ?>
                                </div>
                                <div class="swiper-slide">
                                    <?php
                                    include __DIR__ . '/inc/product-compare.php';
                                    ?>
                                </div>
                                <div class="swiper-slide">
                                    <?php
                                    include __DIR__ . '/inc/product-compare.php';
                                    ?>
                                </div>
                                <div class="swiper-slide">
                                    <?php
                                    include __DIR__ . '/inc/product-compare.php';
                                    ?>
                                </div>
                            </div>
                            <div class="complex__list-compare__bottom">

                            </div>


                        </div>
                    </div>
                    <div class="complex__compare__col-products complex__compare__col-products--mob col-6">
                        <div id="compareSlider2" class="complex__list-compare swiper-container">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <?php
                                    include __DIR__ . '/inc/product-compare.php';
                                    ?>
                                </div>
                                <div class="swiper-slide">
                                    <?php
                                    include __DIR__ . '/inc/product-compare.php';
                                    ?>
                                </div>
                                <div class="swiper-slide">
                                    <?php
                                    include __DIR__ . '/inc/product-compare.php';
                                    ?>
                                </div>
                                <div class="swiper-slide">
                                    <?php
                                    include __DIR__ . '/inc/product-compare.php';
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php
include_once __DIR__ . '/inc/footer.php';
?>