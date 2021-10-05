<div class="row complex__products">
    <?php
    for ($i = 1; $i <= 10; $i++) {
        ?>
        <div class="col-12 fpad30">
            <div class="complex__products__item complex__products__item--list">
                <div class="complex__products__item__wrapper complex__product">
                    <div class="row">
                        <div class="col-lg-3">
                            <a href="" class="complex__products__item__img">
                                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                     data-src="./img/lot.jpg"
                                     data-srcset="./img/lot.jpg 1x, ./img/lot@2.jpg 2x"
                                     alt=""
                                     class="lazy"
                                >
                            </a>
                        </div>
                        <div class="col-lg-5">
                            <a href="" class="complex__products__item__desc">
                                <h3 class="complex__products__item__title">
                                    Пароконвектомат Tecnoeka
                                    EKF 523 UD
                                </h3>
                            </a>
                            <div class="row align-items-center fpad15">
                                <div class="col-6">
                                <span class="complex__products__item__status complex__products__item__status--in-stock">
                                    Есть в наличии
                                </span>
                                </div>
                                <div class="col-6">
                                <span class="complex__products__item__art">
                                    Арт: 815328
                                </span>
                                </div>
                            </div>
                            <div class="complex__products__item__desc">
                                <dl class="complex__products__item__desc__har">
                                    <dt><span>Модель</span></dt>
                                    <dd>120.791</dd>
                                </dl>
                                <dl class="complex__products__item__desc__har">
                                    <dt><span>Страна-производитель</span></dt>
                                    <dd>
                                        <div class="d-flex complex__products__item__desc__har__country">
                                            Германия
                                            <img src="./img/ger.svg" alt="">
                                        </div>
                                    </dd>
                                </dl>
                                <dl class="complex__products__item__desc__har">
                                    <dt><span>Модель</span></dt>
                                    <dd>120.791</dd>
                                </dl>
                                <dl class="complex__products__item__desc__har">
                                    <dt><span>Модель</span></dt>
                                    <dd>120.791</dd>
                                </dl>
                                <div id="collapse_<?= $i ?>"
                                     class="complex__products__item__desc__footer accordion-collapse collapse">
                                    <dl class="complex__products__item__desc__har">
                                        <dt><span>Модель</span></dt>
                                        <dd>120.791</dd>
                                    </dl>
                                </div>
                                <button class="complex__products__item__desc__accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapse_<?= $i ?>" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                    Характеристики
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="fpad15">
                                <a href="" class="complex__products__item__desc">
                                    <div class="complex__products__item__price">
                                        <span class="complex__product__cost">87 001 руб.</span>
                                    </div>
                                </a>
                            </div>
                            <div class="complex__products__item__footer row">
                                <div class="col-6">
                                    <div class="complex__product__count d-flex">
                            <span class="complex__product__count__minus">
                                <svg width="12" height="2" class="ico">
                                    <use xlink:href="#svg-minus"></use>
                                </svg>
                            </span>
                                        <input type="text" readonly value="1" class="complex__product__count__value">
                                        <span class="complex__product__count__plus">
                                <svg width="12" height="12" class="ico">
                                    <use xlink:href="#svg-plus"></use>
                                </svg>
                            </span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <button class="complex__btn complex__btn--blue complex__btn--h36">В корзину</button>
                                </div>
                            </div>
                            <ul class="nav d-block complex__product__events2">
                                <li>
                                    <a class="complex__product__events2__item">
                                        <svg width="24" height="22">
                                            <use xlink:href="#svg-fav"></use>
                                        </svg>
                                        <span class="complex__product__events2__item__label">
                                        Добавить в избранное
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="complex__product__events2__item">
                                        <svg width="18" height="24">
                                            <use xlink:href="#svg-compare"></use>
                                        </svg>
                                        <span>
                                        Добавить в сравнение
                                    </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
