<?php
include_once __DIR__ . '/inc/header.php';
?>

    <div class="container complex__breadcrumb-obj">
        <ul class="nav complex__breadcrumb">
            <li><a href="/">Главная</a></li>
            <li>Производители оборудования</li>
        </ul>
    </div>
    <div class="complex__top-obj lazy" data-bg="./img/bg-obj.jpg" data-bg-hidpi="./img/bg-obj@2.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="complex__top-obj__desc">
                        <h1 class="complex__title fpad30 text-white">Ресторан</h1>
                        <div class="complex__text fpad10">
                            <p class="text-white">
                                Купите готовый набор оборудования для ресторана<br>
                                <strong class="font24">от 2 500 000 руб.</strong>
                            </p>
                        </div>
                        <button class="btn-yellow">Оставить заявку</button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="complex__top-obj__img">
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                             data-src="./img/obj_img.png"
                             data-srcset="./img/obj_img.png 1x, ./img/obj_img@2.png 2x"
                             alt=""
                             class="lazy"
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="border-bottom">
            <div class="row tpad50 fpad50">
                <div class="col-md-6 col-xl-3">
                    <div class="complex__home-adv">
                        <div class="complex__home-adv__ico">
                            <svg width="48" height="41">
                                <use xlink:href="#svg-adv1"></use>
                            </svg>
                        </div>
                        <div class="complex__home-adv__text">
                            Все в одном месте <br>и под ключ
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="complex__home-adv">
                        <div class="complex__home-adv__ico">
                            <svg width="48" height="45">
                                <use xlink:href="#svg-adv2"></use>
                            </svg>
                        </div>
                        <div class="complex__home-adv__text">
                            Отгружаем технику <br>круглосуточно
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="complex__home-adv">
                        <div class="complex__home-adv__ico">
                            <svg width="48" height="48">
                                <use xlink:href="#svg-adv3"></use>
                            </svg>
                        </div>
                        <div class="complex__home-adv__text">
                            Работаем напрямую с<br> производителями
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="complex__home-adv">
                        <div class="complex__home-adv__ico">
                            <svg width="48" height="48">
                                <use xlink:href="#svg-adv4"></use>
                            </svg>
                        </div>
                        <div class="complex__home-adv__text">
                            У нас собственная <br>сервисная служба
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tpad50">
            <div class="complex__title">Готовое решение - Ресторан</div>
        </div>
        <div class="complex__obj-slider-top" id="objSliderTop">
            <ul class="row complex__obj-slider-top__row nav">
                <li class="col-xl-3 col-md-6 complex__obj-slider-top__item">
                    <div data-bs-target="#tab1" data-bs-toggle="tab" class=" active complex__obj-top">
                        <span class="complex__obj-top__count">30 мест</span>
                        <span class="complex__obj-top__cost">от 2 500 000 руб.</span>
                        <span class="complex__obj-top__area">Рекомендуемая площадь: 35 м²</span>
                    </div>
                </li>
                <li class="col-xl-3 col-md-6 complex__obj-slider-top__item">
                    <div data-bs-target="#tab2" data-bs-toggle="tab" class=" complex__obj-top">
                        <span class="complex__obj-top__count">45 мест</span>
                        <span class="complex__obj-top__cost">от 3 500 000 руб.</span>
                        <span class="complex__obj-top__area">Рекомендуемая площадь: 35 м²</span>
                    </div>
                </li>

                <li class="col-xl-3 col-md-6 complex__obj-slider-top__item">
                    <div data-bs-target="#tab3" data-bs-toggle="tab" class=" complex__obj-top">
                        <span class="complex__obj-top__count">45 мест</span>
                        <span class="complex__obj-top__cost">от 3 500 000 руб.</span>
                        <span class="complex__obj-top__area">Рекомендуемая площадь: 35 м²</span>
                    </div>
                </li>

                <li class="col-xl-3 col-md-6 complex__obj-slider-top__item">
                    <div data-bs-target="#tab4" data-bs-toggle="tab" class=" complex__obj-top">
                        <span class="complex__obj-top__count">45 мест</span>
                        <span class="complex__obj-top__cost">от 3 500 000 руб.</span>
                        <span class="complex__obj-top__area">Рекомендуемая площадь: 35 м²</span>
                    </div>
                </li>
            </ul>
            <div class="button-prev complex__slider-nav complex__slider-nav--min">
                <svg width="4" height="8" class="ico">
                    <use xlink:href="#svg-left"></use>
                </svg>
            </div>
            <div class="button-next complex__slider-nav complex__slider-nav--min">
                <svg width="4" height="8" class="ico">
                    <use xlink:href="#svg-right"></use>
                </svg>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="tab1">
                <div class="ct_project__solutions__item">
                    <div class="ct_project__solutions__item__group">
                        <div class="ct_project__solutions__item__group__header">
                            <div class="ct_project__solutions__item__group__col-title">
                                ОСНОВНОЙ КОМПЛЕКТ ОБОРУДОВАНИЯ
                            </div>
                            <div class="ct_project__solutions__item__group__col-right">
                                <div class="ct_project__solutions__item__group__col-count">
                                    2 наименования
                                </div>
                                <div class="ct_project__solutions__item__group__col-price" data-cost="120355">
                                    120 355 руб.
                                </div>
                            </div>
                        </div>
                        <div class="ct_project__solutions__item__group__list solutions__products">
                            <div class="solutions__products__header">
                                <div class="solutions__products__header__col-name">
                                    Наименование
                                </div>
                                <div class="solutions__products__header__col-price">
                                    Цена
                                </div>
                                <div class="solutions__products__header__col-count">
                                    Количество
                                </div>
                                <div class="solutions__products__header__col-summa">
                                    Сумма
                                </div>
                            </div>
                            <div class="solutions__products__list">
                                <div class="solutions__products__item">
                                    <div class="solutions__products__item__col-title">
                                        <div class="solutions__products__item__info">
                                            <div class="solutions__products__item__info__pic">
                                                <a href="">
                                                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                         data-src="./img/lot.jpg"
                                                         data-srcset="./img/lot.jpg 1x, ./img/lot@2.jpg 2x"
                                                         alt=""
                                                         class="lazy"
                                                    >
                                                </a>
                                            </div>
                                            <div class="solutions__products__item__info__title">
                                                <div class="solutions__products__item__info__title__art">
                                                    Артикул: 815769
                                                </div>
                                                <a href="">Тестомес спиральный FIMAR 12/SN 380В</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="solutions__products__item__col-price">
                                        <div class="solutions__products__item__cost" data-cost="62278.00">
                                            62 278 руб.
                                        </div>
                                    </div>
                                    <div class="solutions__products__item__col-count">
                                        <div class="complex__product__count d-flex">
                                            <span class="complex__product__count__minus">
                                                <svg width="12" height="2" class="ico">
                                                    <use xlink:href="#svg-minus"></use>
                                                </svg>
                                            </span>
                                            <input type="text" readonly="" value="1"
                                                   class="complex__product__count__value">
                                            <span class="complex__product__count__plus">
                                                <svg width="12" height="12" class="ico">
                                                    <use xlink:href="#svg-plus"></use>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="solutions__products__item__col-summa">
                                        <div class="solutions__products__item__summa__value" data-cost="62278">
                                            62 278 руб.
                                        </div>
                                    </div>
                                    <div class="solutions__products__item__col-remove">
                                        <a href="" class="solutions__products__remove" title="Удалить товар">
                                            <svg width="24" height="24" class="ico">
                                                <use xlink:href="#svg-del-s"></use>
                                            </svg>
                                        </a>
                                        <a href="" class="solutions__products__restore" title="Восстановить товар">
                                            <svg width="24" height="24" class="ico">
                                                <use xlink:href="#svg-restore-s"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="solutions__products__item">
                                    <div class="solutions__products__item__col-title">
                                        <div class="solutions__products__item__info">
                                            <div class="solutions__products__item__info__pic">
                                                <a href="">
                                                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                         data-src="./img/lot.jpg"
                                                         data-srcset="./img/lot.jpg 1x, ./img/lot@2.jpg 2x"
                                                         alt=""
                                                         class="lazy"
                                                    >
                                                </a>
                                            </div>
                                            <div class="solutions__products__item__info__title">
                                                <div class="solutions__products__item__info__title__art">
                                                    Артикул: 815769
                                                </div>
                                                <a href="">Тестомес спиральный FIMAR 12/SN 380В</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="solutions__products__item__col-price">
                                        <div class="solutions__products__item__cost" data-cost="62278.00">
                                            62 278 руб.
                                        </div>
                                    </div>
                                    <div class="solutions__products__item__col-count">
                                        <div class="complex__product__count d-flex">
                                            <span class="complex__product__count__minus">
                                                <svg width="12" height="2" class="ico">
                                                    <use xlink:href="#svg-minus"></use>
                                                </svg>
                                            </span>
                                            <input type="text" readonly="" value="1"
                                                   class="complex__product__count__value">
                                            <span class="complex__product__count__plus">
                                                <svg width="12" height="12" class="ico">
                                                    <use xlink:href="#svg-plus"></use>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="solutions__products__item__col-summa">
                                        <div class="solutions__products__item__summa__value" data-cost="62278">
                                            62 278 руб.
                                        </div>
                                    </div>
                                    <div class="solutions__products__item__col-remove">
                                        <a href="" class="solutions__products__remove" title="Удалить товар">
                                            <svg width="24" height="24" class="ico">
                                                <use xlink:href="#svg-del-s"></use>
                                            </svg>
                                        </a>
                                        <a href="" class="solutions__products__restore" title="Восстановить товар">
                                            <svg width="24" height="24" class="ico">
                                                <use xlink:href="#svg-restore-s"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="solutions__products__item removed">
                                    <div class="solutions__products__item__col-title">
                                        <div class="solutions__products__item__info">
                                            <div class="solutions__products__item__info__pic">
                                                <a href="">
                                                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                         data-src="./img/lot.jpg"
                                                         data-srcset="./img/lot.jpg 1x, ./img/lot@2.jpg 2x"
                                                         alt=""
                                                         class="lazy"
                                                    >
                                                </a>
                                            </div>
                                            <div class="solutions__products__item__info__title">
                                                <div class="solutions__products__item__info__title__art">
                                                    Артикул: 815769
                                                </div>
                                                <a href="">Тестомес спиральный FIMAR 12/SN 380В</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="solutions__products__item__col-price">
                                        <div class="solutions__products__item__cost" data-cost="62278.00">
                                            62 278 руб.
                                        </div>
                                    </div>
                                    <div class="solutions__products__item__col-count">
                                        <div class="complex__product__count d-flex">
                                            <span class="complex__product__count__minus">
                                                <svg width="12" height="2" class="ico">
                                                    <use xlink:href="#svg-minus"></use>
                                                </svg>
                                            </span>
                                            <input type="text" readonly="" value="1"
                                                   class="complex__product__count__value">
                                            <span class="complex__product__count__plus">
                                                <svg width="12" height="12" class="ico">
                                                    <use xlink:href="#svg-plus"></use>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="solutions__products__item__col-summa">
                                        <div class="solutions__products__item__summa__value" data-cost="62278">
                                            62 278 руб.
                                        </div>
                                    </div>
                                    <div class="solutions__products__item__col-remove">
                                        <a href="" class="solutions__products__remove" title="Удалить товар">
                                            <svg width="24" height="24" class="ico">
                                                <use xlink:href="#svg-del-s"></use>
                                            </svg>
                                        </a>
                                        <a href="" class="solutions__products__restore" title="Восстановить товар">
                                            <svg width="24" height="24" class="ico">
                                                <use xlink:href="#svg-restore-s"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ct_project__solutions__item__group">
                        <div class="ct_project__solutions__item__group__header">
                            <div class="ct_project__solutions__item__group__col-title">
                                ОСНОВНОЙ КОМПЛЕКТ ОБОРУДОВАНИЯ
                            </div>
                            <div class="ct_project__solutions__item__group__col-right">
                                <div class="ct_project__solutions__item__group__col-count">
                                    2 наименования
                                </div>
                                <div class="ct_project__solutions__item__group__col-price" data-cost="120355">
                                    120 355 руб.
                                </div>
                            </div>
                        </div>
                        <div class="ct_project__solutions__item__group__list solutions__products">
                            <div class="solutions__products__header">
                                <div class="solutions__products__header__col-name">
                                    Наименование
                                </div>
                                <div class="solutions__products__header__col-price">
                                    Цена
                                </div>
                                <div class="solutions__products__header__col-count">
                                    Количество
                                </div>
                                <div class="solutions__products__header__col-summa">
                                    Сумма
                                </div>
                            </div>
                            <div class="solutions__products__list">
                                <div class="solutions__products__item">
                                    <div class="solutions__products__item__col-title">
                                        <div class="solutions__products__item__info">
                                            <div class="solutions__products__item__info__pic">
                                                <a href="">
                                                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                         data-src="./img/lot.jpg"
                                                         data-srcset="./img/lot.jpg 1x, ./img/lot@2.jpg 2x"
                                                         alt=""
                                                         class="lazy"
                                                    >
                                                </a>
                                            </div>
                                            <div class="solutions__products__item__info__title">
                                                <div class="solutions__products__item__info__title__art">
                                                    Артикул: 815769
                                                </div>
                                                <a href="">Тестомес спиральный FIMAR 12/SN 380В</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="solutions__products__item__col-price">
                                        <div class="solutions__products__item__cost" data-cost="62278.00">
                                            62 278 руб.
                                        </div>
                                    </div>
                                    <div class="solutions__products__item__col-count">
                                        <div class="complex__product__count d-flex">
                                            <span class="complex__product__count__minus">
                                                <svg width="12" height="2" class="ico">
                                                    <use xlink:href="#svg-minus"></use>
                                                </svg>
                                            </span>
                                            <input type="text" readonly="" value="1"
                                                   class="complex__product__count__value">
                                            <span class="complex__product__count__plus">
                                                <svg width="12" height="12" class="ico">
                                                    <use xlink:href="#svg-plus"></use>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="solutions__products__item__col-summa">
                                        <div class="solutions__products__item__summa__value" data-cost="62278">
                                            62 278 руб.
                                        </div>
                                    </div>
                                    <div class="solutions__products__item__col-remove">
                                        <a href="" class="solutions__products__remove" title="Удалить товар">
                                            <svg width="24" height="24" class="ico">
                                                <use xlink:href="#svg-del-s"></use>
                                            </svg>
                                        </a>
                                        <a href="" class="solutions__products__restore" title="Восстановить товар">
                                            <svg width="24" height="24" class="ico">
                                                <use xlink:href="#svg-restore-s"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="solutions__products__item">
                                    <div class="solutions__products__item__col-title">
                                        <div class="solutions__products__item__info">
                                            <div class="solutions__products__item__info__pic">
                                                <a href="">
                                                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                         data-src="./img/lot.jpg"
                                                         data-srcset="./img/lot.jpg 1x, ./img/lot@2.jpg 2x"
                                                         alt=""
                                                         class="lazy"
                                                    >
                                                </a>
                                            </div>
                                            <div class="solutions__products__item__info__title">
                                                <div class="solutions__products__item__info__title__art">
                                                    Артикул: 815769
                                                </div>
                                                <a href="">Тестомес спиральный FIMAR 12/SN 380В</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="solutions__products__item__col-price">
                                        <div class="solutions__products__item__cost" data-cost="62278.00">
                                            62 278 руб.
                                        </div>
                                    </div>
                                    <div class="solutions__products__item__col-count">
                                        <div class="complex__product__count d-flex">
                                            <span class="complex__product__count__minus">
                                                <svg width="12" height="2" class="ico">
                                                    <use xlink:href="#svg-minus"></use>
                                                </svg>
                                            </span>
                                            <input type="text" readonly="" value="1"
                                                   class="complex__product__count__value">
                                            <span class="complex__product__count__plus">
                                                <svg width="12" height="12" class="ico">
                                                    <use xlink:href="#svg-plus"></use>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="solutions__products__item__col-summa">
                                        <div class="solutions__products__item__summa__value" data-cost="62278">
                                            62 278 руб.
                                        </div>
                                    </div>
                                    <div class="solutions__products__item__col-remove">
                                        <a href="" class="solutions__products__remove" title="Удалить товар">
                                            <svg width="24" height="24" class="ico">
                                                <use xlink:href="#svg-del-s"></use>
                                            </svg>
                                        </a>
                                        <a href="" class="solutions__products__restore" title="Восстановить товар">
                                            <svg width="24" height="24" class="ico">
                                                <use xlink:href="#svg-restore-s"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="solutions__products__item removed">
                                    <div class="solutions__products__item__col-title">
                                        <div class="solutions__products__item__info">
                                            <div class="solutions__products__item__info__pic">
                                                <a href="">
                                                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                         data-src="./img/lot.jpg"
                                                         data-srcset="./img/lot.jpg 1x, ./img/lot@2.jpg 2x"
                                                         alt=""
                                                         class="lazy"
                                                    >
                                                </a>
                                            </div>
                                            <div class="solutions__products__item__info__title">
                                                <div class="solutions__products__item__info__title__art">
                                                    Артикул: 815769
                                                </div>
                                                <a href="">Тестомес спиральный FIMAR 12/SN 380В</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="solutions__products__item__col-price">
                                        <div class="solutions__products__item__cost" data-cost="62278.00">
                                            62 278 руб.
                                        </div>
                                    </div>
                                    <div class="solutions__products__item__col-count">
                                        <div class="complex__product__count d-flex">
                                            <span class="complex__product__count__minus">
                                                <svg width="12" height="2" class="ico">
                                                    <use xlink:href="#svg-minus"></use>
                                                </svg>
                                            </span>
                                            <input type="text" readonly="" value="1"
                                                   class="complex__product__count__value">
                                            <span class="complex__product__count__plus">
                                                <svg width="12" height="12" class="ico">
                                                    <use xlink:href="#svg-plus"></use>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="solutions__products__item__col-summa">
                                        <div class="solutions__products__item__summa__value" data-cost="62278">
                                            62 278 руб.
                                        </div>
                                    </div>
                                    <div class="solutions__products__item__col-remove">
                                        <a href="" class="solutions__products__remove" title="Удалить товар">
                                            <svg width="24" height="24" class="ico">
                                                <use xlink:href="#svg-del-s"></use>
                                            </svg>
                                        </a>
                                        <a href="" class="solutions__products__restore" title="Восстановить товар">
                                            <svg width="24" height="24" class="ico">
                                                <use xlink:href="#svg-restore-s"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-lg-8 col-xl-7 ct_project__solutions__col-res">
                            <div class="ct_project__solutions__item__footer">
                                <div class="ct_project__solutions__item__result border-bottom">
                                    <span class="ct_project__solutions__item__result__label">
                                        <b>Итого:</b>
                                        <span class="ct_project__solutions__item__result__label__pc">Стоимость готового решения (<span
                                                    class="js_result_count">7 наименований</span>)</span>
                                        <span class="ct_project__solutions__item__result__label__mob">7 шт.</span>
                                    </span>
                                    <span class="js_result_price ct_project__solutions__item__result__price">343 086 руб.</span>
                                </div>
                                <div class="ct_project__solutions__item__order">
                                    <a href="" class="ct_project__solutions__item__order__plan-pdf" download="">
                                        <b>Спецификация оборудования</b><br>
                                        PDF файл
                                    </a>

                                    <div class="ct_project__solutions__item__order__submit">
                                        <button class="complex__btn complex__btn--blue complex__btn--h44">
                                            Оставить заявку
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab2">222</div>
            <div class="tab-pane fade" id="tab3">222</div>
            <div class="tab-pane fade" id="tab4">222</div>

        </div>
        <?php
        include __DIR__ . '/inc/feedback.php';
        ?>
        <div class="complex__projects">
            <div class="complex__title">Реализованнные проекты</div>

            <div class="swiper" id="projectSlider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="complex__projects__item border-bottom">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="complex__projects__item__slider">
                                        <div class="swiper project-images" id="proj1">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <a href="./img/proj@2.jpg" class="project-images__zoom"
                                                       data-fancybox="project1">
                                                        <img
                                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                                data-src="./img/proj.jpg"
                                                                data-srcset="./img/proj.jpg 1x, ./img/proj@2.jpg 2x"
                                                                class="swiper-lazy"
                                                        />
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="./img/proj@2.jpg" class="project-images__zoom"
                                                       data-fancybox="project1">
                                                        <img
                                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                                data-src="./img/proj.jpg"
                                                                data-srcset="./img/proj.jpg 1x, ./img/proj@2.jpg 2x"
                                                                class="swiper-lazy"
                                                        />
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="./img/proj@2.jpg" class="project-images__zoom"
                                                       data-fancybox="project1">
                                                        <img
                                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                                data-src="./img/proj.jpg"
                                                                data-srcset="./img/proj.jpg 1x, ./img/proj@2.jpg 2x"
                                                                class="swiper-lazy"
                                                        />
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="./img/proj@2.jpg" class="project-images__zoom"
                                                       data-fancybox="project1">
                                                        <img
                                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                                data-src="./img/proj.jpg"
                                                                data-srcset="./img/proj.jpg 1x, ./img/proj@2.jpg 2x"
                                                                class="swiper-lazy"
                                                        />
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="./img/proj@2.jpg" class="project-images__zoom"
                                                       data-fancybox="project1">
                                                        <img
                                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                                data-src="./img/proj.jpg"
                                                                data-srcset="./img/proj.jpg 1x, ./img/proj@2.jpg 2x"
                                                                class="swiper-lazy"
                                                        />
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="./img/proj@2.jpg" class="project-images__zoom"
                                                       data-fancybox="project1">
                                                        <img
                                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                                data-src="./img/proj.jpg"
                                                                data-srcset="./img/proj.jpg 1x, ./img/proj@2.jpg 2x"
                                                                class="swiper-lazy"
                                                        />
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="swiper-pagination"></div>
                                        </div>

                                        <div class="swiper project-thumbs" id="projThumb1" data-sliderid="#proj1">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img
                                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                            data-src="./img/proj_min.jpg"
                                                            class="swiper-lazy"
                                                    />
                                                    <div class="swiper-lazy-preloader"></div>
                                                </div>

                                                <div class="swiper-slide">
                                                    <img
                                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                            data-src="./img/proj_min.jpg"
                                                            class="swiper-lazy"
                                                    />
                                                    <div class="swiper-lazy-preloader"></div>
                                                </div>

                                                <div class="swiper-slide">
                                                    <img
                                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                            data-src="./img/proj_min.jpg"
                                                            class="swiper-lazy"
                                                    />
                                                    <div class="swiper-lazy-preloader"></div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <img
                                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                            data-src="./img/proj_min.jpg"
                                                            class="swiper-lazy"
                                                    />
                                                    <div class="swiper-lazy-preloader"></div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <img
                                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                            data-src="./img/proj_min.jpg"
                                                            class="swiper-lazy"
                                                    />
                                                    <div class="swiper-lazy-preloader"></div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <img
                                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                            data-src="./img/proj_min.jpg"
                                                            class="swiper-lazy"
                                                    />
                                                    <div class="swiper-lazy-preloader"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="complex__projects__item__desc">
                                        <h3>Look - ресторан-кафе</h3>
                                        <div class="complex__projects__item__desc__text">
                                            <div class="border-bottom fpad20">
                                                <h4>Задача</h4>
                                                <p>Было необходимо выполнить проектирование ресторана, подготовить
                                                    соответствующую документацию, разработать технологический проект и
                                                    техническое задание для общестроительных работ, провести обучение
                                                    персонала, и конечно же осуществить своевременную поставку и монтаж
                                                    всего необходимого оборудования.</p>
                                            </div>
                                            <div class="border-bottom fpad20 tpad20">
                                                <h4>Решение</h4>
                                                <p>Наша компания не только полностью оснастила кухню заведения тепловым
                                                    и
                                                    холодильным оборудованием, но установила в обеденном зале
                                                    премиальные
                                                    витрины итальянского бренда ISA. Как и было оговорено, мы
                                                    разработали
                                                    технологический проект, составили техническое задание для
                                                    общестроительных работ, а так же осуществили монтаж и пусконаладку
                                                    оборудования.</p>
                                            </div>
                                        </div>
                                        <div class="row tpad30 complex__projects__item__desc__foot">
                                            <div class="col-md-6 fpad30 ">
                                                <a href="./img/proj@2.jpg"
                                                   class="d-flex align-items-center complex__link16"
                                                   data-fancybox="">
                                                    <svg width="25" height="32" class="ico mr-24">
                                                        <use xlink:href="#svg-pismo"></use>
                                                    </svg>
                                                    Благодарственное письмо
                                                </a>
                                            </div>
                                            <div class="col-md-6 fpad30">
                                                <a href="" class="d-flex align-items-center complex__link16">
                                                    <svg width="32" height="32" class="ico mr-24">
                                                        <use xlink:href="#svg-project"></use>
                                                    </svg>
                                                    Подробнее о проекте
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="complex__projects__item border-bottom">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="complex__projects__item__slider">
                                        <div class="swiper project-images" id="proj2">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <a href="./img/proj@2.jpg" class="project-images__zoom"
                                                       data-fancybox="project1">
                                                        <img
                                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                                data-src="./img/proj.jpg"
                                                                data-srcset="./img/proj.jpg 1x, ./img/proj@2.jpg 2x"
                                                                class="swiper-lazy"
                                                        />
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </a>
                                                </div>

                                                <div class="swiper-slide">
                                                    <a href="./img/proj@2.jpg" class="project-images__zoom"
                                                       data-fancybox="project1">
                                                        <img
                                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                                data-src="./img/proj.jpg"
                                                                data-srcset="./img/proj.jpg 1x, ./img/proj@2.jpg 2x"
                                                                class="swiper-lazy"
                                                        />
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="./img/proj@2.jpg" class="project-images__zoom"
                                                       data-fancybox="project1">
                                                        <img
                                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                                data-src="./img/proj.jpg"
                                                                data-srcset="./img/proj.jpg 1x, ./img/proj@2.jpg 2x"
                                                                class="swiper-lazy"
                                                        />
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="./img/proj@2.jpg" class="project-images__zoom"
                                                       data-fancybox="project1">
                                                        <img
                                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                                data-src="./img/proj.jpg"
                                                                data-srcset="./img/proj.jpg 1x, ./img/proj@2.jpg 2x"
                                                                class="swiper-lazy"
                                                        />
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="./img/proj@2.jpg" class="project-images__zoom"
                                                       data-fancybox="project1">
                                                        <img
                                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                                data-src="./img/proj.jpg"
                                                                data-srcset="./img/proj.jpg 1x, ./img/proj@2.jpg 2x"
                                                                class="swiper-lazy"
                                                        />
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="./img/proj@2.jpg" class="project-images__zoom"
                                                       data-fancybox="project1">
                                                        <img
                                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                                data-src="./img/proj.jpg"
                                                                data-srcset="./img/proj.jpg 1x, ./img/proj@2.jpg 2x"
                                                                class="swiper-lazy"
                                                        />
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="swiper-pagination"></div>
                                        </div>

                                        <div class="swiper project-thumbs" id="projThumb2" data-sliderid="#proj2">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img
                                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                            data-src="./img/proj_min.jpg"
                                                            class="swiper-lazy"
                                                    />
                                                    <div class="swiper-lazy-preloader"></div>
                                                </div>

                                                <div class="swiper-slide">
                                                    <img
                                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                            data-src="./img/proj_min.jpg"
                                                            class="swiper-lazy"
                                                    />
                                                    <div class="swiper-lazy-preloader"></div>
                                                </div>

                                                <div class="swiper-slide">
                                                    <img
                                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                            data-src="./img/proj_min.jpg"
                                                            class="swiper-lazy"
                                                    />
                                                    <div class="swiper-lazy-preloader"></div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <img
                                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                            data-src="./img/proj_min.jpg"
                                                            class="swiper-lazy"
                                                    />
                                                    <div class="swiper-lazy-preloader"></div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <img
                                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                            data-src="./img/proj_min.jpg"
                                                            class="swiper-lazy"
                                                    />
                                                    <div class="swiper-lazy-preloader"></div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <img
                                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                            data-src="./img/proj_min.jpg"
                                                            class="swiper-lazy"
                                                    />
                                                    <div class="swiper-lazy-preloader"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="complex__projects__item__desc">
                                        <h3>Look - ресторан-кафе</h3>
                                        <div class="complex__projects__item__desc__text">
                                            <div class="border-bottom fpad20">
                                                <h4>Задача</h4>
                                                <p>Было необходимо выполнить проектирование ресторана, подготовить
                                                    соответствующую документацию, разработать технологический проект и
                                                    техническое задание для общестроительных работ, провести обучение
                                                    персонала, и конечно же осуществить своевременную поставку и монтаж
                                                    всего необходимого оборудования.</p>
                                            </div>
                                            <div class="border-bottom fpad20 tpad20">
                                                <h4>Решение</h4>
                                                <p>Наша компания не только полностью оснастила кухню заведения тепловым
                                                    и
                                                    холодильным оборудованием, но установила в обеденном зале
                                                    премиальные
                                                    витрины итальянского бренда ISA. Как и было оговорено, мы
                                                    разработали
                                                    технологический проект, составили техническое задание для
                                                    общестроительных работ, а так же осуществили монтаж и пусконаладку
                                                    оборудования.</p>
                                            </div>
                                        </div>
                                        <div class="row tpad30">
                                            <div class="col-md-6 fpad30">
                                                <a href="./img/proj@2.jpg"
                                                   class="d-flex align-items-center complex__link16"
                                                   data-fancybox="">
                                                    <svg width="25" height="32" class="ico mr-24">
                                                        <use xlink:href="#svg-pismo"></use>
                                                    </svg>
                                                    Благодарственное письмо
                                                </a>
                                            </div>
                                            <div class="col-md-6 fpad30">
                                                <a href="" class="d-flex align-items-center complex__link16">
                                                    <svg width="32" height="32" class="ico mr-24">
                                                        <use xlink:href="#svg-project"></use>
                                                    </svg>
                                                    Подробнее о проекте
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="complex__projects__nav row">
                    <div class="col-xl-4 col-6 fpad15">
                        <div id="sl-prev" class="complex__projects__nav__btn">
                            <svg width="4" height="8" class="ico mr-10">
                                <use xlink:href="#svg-left"></use>
                            </svg>
                            Предыдущий <span class="ml-5">проект</span>
                        </div>
                    </div>
                    <div class="col-xl-4 col-6 fpad15">
                        <div id="sl-next" class="complex__projects__nav__btn">
                            Следующий <span class="ml-5">проект</span>
                            <svg width="4" height="8" class="ico ml-10">
                                <use xlink:href="#svg-right"></use>
                            </svg>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="complex__dop-services">
            <div class="complex__title">Дополнительные услуги для открытия “под ключ”</div>
            <div class="row fpad50">
                <div class="col-lg-6 fpad30">
                    <div class="complex__dop-services__item complex__dop-services__item--n1" >
                        <div class="complex__dop-services__item__desc">
                            <h2>Бесплатное тестирование оборудования</h2>
                            <p>Проверьте заранее свое меню на новом оборудовании, прежде чем принимать решение о
                                покупке</p>
                        </div>
                        <div class="complex__dop-services__item__btn">
                            <a href="" class="complex__btn complex__btn--h44 complex__btn--blue">Получить
                                консультацию</a>
                        </div>
                        <style>
                            .complex__dop-services__item--n1 {
                                background-image: url("./img/dop1.jpg");
                            }
                            @media (max-width: 576px) {
                                .complex__dop-services__item--n1 {
                                    background-image: url("./img/dop1_mob.jpg");
                                }
                            }
                        </style>
                    </div>
                </div>
                <div class="col-lg-6 fpad30">
                    <div class="complex__dop-services__item complex__dop-services__item--n2" >
                        <div class="complex__dop-services__item__desc">
                            <h2>Бесплатное тестирование оборудования</h2>
                            <p>Проверьте заранее свое меню на новом оборудовании, прежде чем принимать решение о
                                покупке</p>
                        </div>
                        <div class="complex__dop-services__item__btn">
                            <a href="" class="complex__btn complex__btn--h44 complex__btn--blue">Получить
                                консультацию</a>
                        </div>
                        <style>
                            .complex__dop-services__item--n2 {
                                background-image: url("./img/dop1.jpg");
                            }
                            @media (max-width: 576px) {
                                .complex__dop-services__item--n2 {
                                    background-image: url("./img/dop1_mob.jpg");
                                }
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>

        <div class="complex__title ">
            Нам доверяют
        </div>
    </div>
<?php include __DIR__ . '/inc/clients_slider.php'; ?>
    <div class="container">
        <div class="border-bottom fpad30"></div>
        <div class="tpad50">
            <?php
            include_once __DIR__ . '/inc/seo-text.php';
            ?>
        </div>
    </div>
<?php
include_once __DIR__ . '/inc/footer.php';
?>