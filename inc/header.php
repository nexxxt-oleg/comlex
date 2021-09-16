<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>


    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/lib.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <title>complex</title>
</head>
<body>
<div class="complex">
    <header class="complex__header" id="fixNav">
        <div class="complex__header__top">
            <div class="container ">
                <div class="d-flex justify-content-between align-items-center">
                    <ul class="nav align-items-center complex__header__top__nav">
                        <li><a href="">О компании</a></li>
                        <li><a href="">Наши проекты</a></li>
                        <li><a href="">Готовые решения </a></li>
                        <li><a href="">Сертификаты</a></li>
                        <li><a href="">Контакты</a></li>
                    </ul>
                    <div class="complex__header__top__right d-flex align-items-center">
                        <a href="mailto:info@complex-trade.ru" class="complex__header__mail">
                            <svg width="16" height="14" class="ico">
                                <use xlink:href="#svg-mail"></use>
                            </svg>
                            info@complex-trade.ru
                        </a>
                        <a href="tel:88002007987" class="phone">8-800-20-07-987</a>
                        <a href="tel:+74955422900" class="phone">+7 495 542-29-00</a>
                        <button class="btn-blue">Заказать звонок</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="complex__header__middle">
            <div class="complex__header__middle__fix">
                <div class="container ">
                    <div class="row align-items-center">
                        <div class="col-lg-3 complex__header__middle__fix__col-logo">
                            <a href="/" class="complex__header__logo-middle">
                                <svg width="264" height="44" class="ico">
                                    <use xlink:href="#svg-logo"></use>
                                </svg>
                            </a>
                            <button class="btn-cat btn-cat--fix" data-bs-target="#catalogModal" data-bs-toggle="modal">
                                <svg width="12" height="16" class="ico mr-12">
                                    <use xlink:href="#svg-toggle2"></use>
                                </svg>
                                Каталог
                            </button>
                        </div>
                        <div class="col-lg-2 complex__header__middle__fix__col-city">
                            <div class="complex__header__col-city">
                                <div class="dropdown">
                            <span class="music__city-btn dropdown-toggle" data-bs-toggle="dropdown"
                                  aria-expanded="false">
                                Санкт-Петербург
                            </span>
                                    <ul class="dropdown-menu dropdown-menu--city">
                                        <li><a class="dropdown-item" href="#">Санкт-Петербург</a></li>
                                        <li><a class="dropdown-item" href="#">Москва</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 complex__header__middle__fix__col-search">
                            <div class="complex__header__middle__search-col">
                                <form action="" class="complex__form complex__form--search">
                                    <input type="text" required class="complex__form__inp" placeholder="Поиск">
                                    <button class="complex__form__submit-s">
                                        <svg width="18" height="18" class="ico">
                                            <use xlink:href="#svg-search"></use>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 complex__header__middle__fix__col-tel">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="phones">
                                    <a href="tel:88002007987" class="phone">8-800-20-07-987</a>
                                    <a href="tel:+74955422900" class="phone">+7 495 542-29-00</a>
                                </div>
                                <a href="mailto:info@complex-trade.ru" class="mail">
                                    info@complex-trade.ru
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 complex__header__middle__fix__col-right">
                            <ul class="complex__header__middle__right nav">
                                <li>
                                    <a href="" class="complex__header__item-r">
                                        <div class="complex__header__item-r__ico">
                                            <svg width="18" height="24">
                                                <use xlink:href="#svg-compare"></use>
                                            </svg>
                                        </div>
                                        <span class="complex__header__item-r__caption">СРАВНЕНИЕ</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="complex__header__item-r">
                                        <div class="complex__header__item-r__ico">
                                            <span class="complex__header__item-r__count">1</span>
                                            <svg width="24" height="22">
                                                <use xlink:href="#svg-fav"></use>
                                            </svg>
                                        </div>
                                        <span class="complex__header__item-r__caption">ИЗБРАННОЕ</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="complex__header__item-r">
                                        <div class="complex__header__item-r__ico">
                                            <span class="complex__header__item-r__count">3</span>
                                            <svg width="23" height="24">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                        </div>
                                        <span class="complex__header__item-r__caption">КОРЗИНА</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container complex__header__footer">
            <ul class="nav complex__header__footer__nav">
                <li>
                    <a href="#catalogModal" data-bs-toggle="modal" class="complex__header__toggle-catalog">
                        <svg width="24" height="16" class="ico mr-24">
                            <use xlink:href="#svg-toggle"></use>
                        </svg>
                        Каталог
                    </a>
                </li>
                <li class="complex__header__footer__nav__dropdown">
                    <a href="">По типу предприятия</a>
                </li>
                <li class="complex__header__footer__nav__dropdown">
                    <a href="">По производителю</a>
                </li>
                <li>
                    <a href="">Проектирование</a>
                </li>
                <li>
                    <a href="">Услуги</a>
                </li>
                <li>
                    <a href="">Как купить</a>
                </li>
                <li>
                    <a href="">Статьи</a>
                </li>
            </ul>
        </div>
    </header>

    <div class="modal fade" id="catalogModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen complex__catalog-nav">
            <div class="modal-content">

                <div class="complex__catalog-nav__header">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-4 col-lg-6">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="complex__catalog-nav__header__logo">
                                        <svg width="210" height="35" class="ico">
                                            <use xlink:href="#svg-logo"></use>
                                        </svg>
                                    </div>
                                    <button class="btn-cat" data-bs-dismiss="modal">
                                        <svg width="12" height="12" class="ico mr-12">
                                            <use xlink:href="#svg-close"></use>
                                        </svg>
                                        Каталог
                                    </button>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-6">
                                <div class="complex__catalog-nav__header__search-col">
                                    <form action="" class="complex__form complex__form--search">
                                        <input type="text" required class="complex__form__inp"
                                               placeholder="Поиск по каталогу">
                                        <button class="complex__form__submit-s">
                                            <svg width="18" height="18" class="ico">
                                                <use xlink:href="#svg-search"></use>
                                            </svg>
                                        </button>
                                    </form>
                                    <div class="complex__catalog-nav__header__example">
                                        Например, <a href="">Блендеры</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="complex__catalog-nav__body">
                    <div class="container">
                        <div class="row complex__catalog-nav__body__row">
                            <div class="col-xl-4 col-lg-6">
                                <ul class="nav complex__catalog-nav__list">
                                    <li data-hover-menu="subnav_1">
                                        <a href="" class="complex__catalog-nav__list__item">
                                            <div class="complex__catalog-nav__list__item__ico">
                                                <img width="32" height="32"
                                                     src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                     class="lazy" alt="" data-src="../img/cat1.svg"/>
                                            </div>
                                            Тепловое оборудование
                                        </a>
                                    </li>
                                    <li data-hover-menu="subnav_2">
                                        <a href="" class="complex__catalog-nav__list__item">
                                            <div class="complex__catalog-nav__list__item__ico">
                                                <img width="32" height="32"
                                                     src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                     class="lazy" alt="" data-src="../img/cat2.svg"/>
                                            </div>
                                            Хлебопекарное и кондитерское
                                        </a>
                                    </li>
                                    <li data-hover-menu="subnav_3">
                                        <a href="" class="complex__catalog-nav__list__item">
                                            <div class="complex__catalog-nav__list__item__ico">
                                                <img width="32" height="32"
                                                     src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                     class="lazy" alt="" data-src="../img/cat3.svg"/>
                                            </div>
                                            Посудомоечное оборудование
                                        </a>
                                    </li>
                                    <li data-hover-menu="subnav_4">
                                        <a href="" class="complex__catalog-nav__list__item">
                                            <div class="complex__catalog-nav__list__item__ico">
                                                <img width="32" height="32"
                                                     src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                     class="lazy" alt="" data-src="../img/cat4.svg"/>
                                            </div>
                                            Электромеханическое
                                        </a>
                                    </li>
                                    <li data-hover-menu="subnav_5">
                                        <a href="" class="complex__catalog-nav__list__item">
                                            <div class="complex__catalog-nav__list__item__ico">
                                                <img width="32" height="32"
                                                     src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                     class="lazy" alt="" data-src="../img/cat5.svg"/>
                                            </div>
                                            Оборудование для бара
                                        </a>
                                    </li>
                                    <li data-hover-menu="subnav_1">
                                        <a href="" class="complex__catalog-nav__list__item">
                                            <div class="complex__catalog-nav__list__item__ico">
                                                <img width="32" height="32"
                                                     src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                     class="lazy" alt="" data-src="../img/cat6.svg"/>
                                            </div>
                                            Холодильное оборудование
                                        </a>
                                    </li>
                                    <li data-hover-menu="subnav_1">
                                        <a href="" class="complex__catalog-nav__list__item">
                                            <div class="complex__catalog-nav__list__item__ico">
                                                <img width="32" height="32"
                                                     src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                     class="lazy" alt="" data-src="../img/cat7.svg"/>
                                            </div>
                                            Оборудование для фаст-фуда
                                        </a>
                                    </li>
                                    <li data-hover-menu="subnav_1">
                                        <a href="" class="complex__catalog-nav__list__item">
                                            <div class="complex__catalog-nav__list__item__ico">
                                                <img width="32" height="32"
                                                     src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                     class="lazy" alt="" data-src="../img/cat8.svg"/>
                                            </div>
                                            Нейтральное оборудование
                                        </a>
                                    </li>
                                    <li data-hover-menu="subnav_1">
                                        <a href="" class="complex__catalog-nav__list__item">
                                            <div class="complex__catalog-nav__list__item__ico">
                                                <img width="32" height="32"
                                                     src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                     class="lazy" alt="" data-src="../img/cat9.svg"/>
                                            </div>
                                            Упаковочное оборудование
                                        </a>
                                    </li>
                                    <li data-hover-menu="subnav_1">
                                        <a href="" class="complex__catalog-nav__list__item">
                                            <div class="complex__catalog-nav__list__item__ico">
                                                <img width="32" height="32"
                                                     src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                     class="lazy" alt="" data-src="../img/cat10.svg"/>
                                            </div>
                                            Весовое оборудование
                                        </a>
                                    </li>
                                    <li data-hover-menu="subnav_1">
                                        <a href="" class="complex__catalog-nav__list__item">
                                            <div class="complex__catalog-nav__list__item__ico">
                                                <img width="32" height="32"
                                                     src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                     class="lazy" alt="" data-src="../img/cat11.svg"/>
                                            </div>
                                            Линии раздачи
                                        </a>
                                    </li>
                                    <li data-hover-menu="subnav_1">
                                        <a href="" class="complex__catalog-nav__list__item">
                                            <div class="complex__catalog-nav__list__item__ico">
                                                <img width="32" height="32"
                                                     src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                     class="lazy" alt="" data-src="../img/cat12.svg"/>
                                            </div>
                                            Салат-бары, шведские столы
                                        </a>
                                    </li>
                                    <li data-hover-menu="subnav_1">
                                        <a href="" class="complex__catalog-nav__list__item">
                                            <div class="complex__catalog-nav__list__item__ico">
                                                <img width="32" height="32"
                                                     src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                     class="lazy" alt="" data-src="../img/cat13.svg"/>
                                            </div>
                                            Прочее оборудование
                                        </a>
                                    </li>
                                    <li data-hover-menu="subnav_1">
                                        <a href="" class="complex__catalog-nav__list__item">
                                            <div class="complex__catalog-nav__list__item__ico">
                                                <img width="32" height="32"
                                                     src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                     class="lazy" alt="" data-src="../img/cat14.svg"/>
                                            </div>
                                            Оборудование для прачечной
                                        </a>
                                    </li>
                                    <li data-hover-menu="subnav_1">
                                        <a href="" class="complex__catalog-nav__list__item">
                                            <div class="complex__catalog-nav__list__item__ico">
                                                <img width="32" height="32"
                                                     src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                     class="lazy" alt="" data-src="../img/cat15.svg"/>
                                            </div>
                                            Посуда и инвентарь
                                        </a>
                                    </li>
                                    <li data-hover-menu="subnav_1">
                                        <a href="" class="complex__catalog-nav__list__item">
                                            <div class="complex__catalog-nav__list__item__ico">
                                                <img width="32" height="32"
                                                     src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                     class="lazy" alt="" data-src="../img/cat16.svg"/>
                                            </div>
                                            Торговое оборудование
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xl-8 col-lg-6">
                                <div class="complex__catalog-nav__right">
                                    <nav id="subnav_1" class="complex__catalog-nav__list__submenu">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">А</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Аксессуары для теплового оборудования
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Аппараты Sous Vide
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Аппараты для отваривания и варки гарниров
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">Г</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Грили Salamander
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Грили для кур
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">Д</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Дегидраторы
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">Ж</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Жарочные и пекарские шкафы
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Жарочные поверхности, сковороды открытые
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">К</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Конвейерные печи
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Контактные грили
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Коптильни
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Котлы пищеварочные
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">М</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Мармиты
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Микроволновые печи
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">П</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Пароконвектоматы
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Плиты
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Подогреватели блюд и посуды
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">Р</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Рисоварки
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">С</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Сковороды закрытые
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">Т</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Тандыры
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Тепловые витрины
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Тепловые столы и шкафы
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Термомиксеры
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Тостеры
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">У</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Угольные печи
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">Ф</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Фритюрницы
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">Ш</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Шашлычницы
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">Э</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Электрокипятильники
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                    <nav id="subnav_2" class="complex__catalog-nav__list__submenu">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">А</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Аксессуары для теплового оборудования
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Аппараты Sous Vide
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Аппараты для отваривания и варки гарниров
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">Г</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Грили Salamander
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Грили для кур
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">Д</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Дегидраторы
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">Ж</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Жарочные и пекарские шкафы
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Жарочные поверхности, сковороды открытые
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">К</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Конвейерные печи
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Контактные грили
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Коптильни
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Котлы пищеварочные
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">М</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Мармиты
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Микроволновые печи
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">П</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Пароконвектоматы
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Плиты
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Подогреватели блюд и посуды
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">Р</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Рисоварки
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">С</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Сковороды закрытые
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">Т</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Тандыры
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Тепловые витрины
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Тепловые столы и шкафы
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Термомиксеры
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Тостеры
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">У</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Угольные печи
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">Ф</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Фритюрницы
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">Ш</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Шашлычницы
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">Э</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Электрокипятильники
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                    <nav id="subnav_3" class="complex__catalog-nav__list__submenu">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">А</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Аксессуары для теплового оборудования
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Аппараты Sous Vide
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Аппараты для отваривания и варки гарниров
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">Г</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Грили Salamander
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Грили для кур
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">Д</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Дегидраторы
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">Ж</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Жарочные и пекарские шкафы
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Жарочные поверхности, сковороды открытые
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">К</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Конвейерные печи
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Контактные грили
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Коптильни
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Котлы пищеварочные
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">М</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Мармиты
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Микроволновые печи
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">П</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Пароконвектоматы
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Плиты
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Подогреватели блюд и посуды
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">Р</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Рисоварки
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">С</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Сковороды закрытые
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">Т</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Тандыры
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Тепловые витрины
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Тепловые столы и шкафы
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Термомиксеры
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                Тостеры
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">У</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Угольные печи
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">Ф</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Фритюрницы
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">Ш</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Шашлычницы
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="complex__nav-alphabet">
                                                    <div class="complex__nav-alphabet__letter">Э</div>
                                                    <ul class="nav d-block complex__nav-alphabet__list">
                                                        <li>
                                                            <a href="">
                                                                Электрокипятильники
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                                <div class="complex__catalog-nav__brands">
                                    <div class="d-flex align-items-center">
                                        <div class="complex__catalog-nav__brands__caption">Популярные бренды</div>
                                        <a href="" class="complex__more-link ml-auto">Посмотреть все</a>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <a href="" class="complex__brand-item">
                                                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                     class="lazy"
                                                     alt=""
                                                     data-src="./img/brand.jpg"
                                                     data-srcset="./img/brand.jpg 1x, ./img/brand@2.jpg 2x"/>
                                            </a>
                                        </div>
                                        <div class="col-3">
                                            <a href="" class="complex__brand-item">
                                                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                     class="lazy"
                                                     alt=""
                                                     data-src="./img/brand.jpg"
                                                     data-srcset="./img/brand.jpg 1x, ./img/brand@2.jpg 2x"/>
                                            </a>
                                        </div>
                                        <div class="col-3">
                                            <a href="" class="complex__brand-item">
                                                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                     class="lazy"
                                                     alt=""
                                                     data-src="./img/brand.jpg"
                                                     data-srcset="./img/brand.jpg 1x, ./img/brand@2.jpg 2x"/>
                                            </a>
                                        </div>
                                        <div class="col-3">
                                            <a href="" class="complex__brand-item">
                                                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                     class="lazy"
                                                     alt=""
                                                     data-src="./img/brand.jpg"
                                                     data-srcset="./img/brand.jpg 1x, ./img/brand@2.jpg 2x"/>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>