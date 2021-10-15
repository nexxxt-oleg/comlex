<?php
include_once __DIR__ . '/inc/header.php';
?>

    <div class="container">
        <ul class="nav complex__breadcrumb">
            <li><a href="/">Главная</a></li>
            <li>Наши проекты</li>
        </ul>

        <div class="row fpad30">
            <div class="col-lg-6">
                <h1 class="complex__title pb-0">Наши проекты</h1>
            </div>
            <div class="col-lg-6 d-flex justify-content-end complex__right-pagination pt-2">
                <? include __DIR__ . '/inc/paginations.php'; ?>
            </div>
        </div>
        <div class="row">
            <div class="col col-lg-6 col-md-6  fpad30">
                <a href="" class="complex__card complex__card--action">
                    <div class="complex__card__images">
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                             class="lazy complex__card__pic complex__card__pic--h3"
                             alt=""
                             data-src="./img/project.jpg"
                             data-srcset="./img/project.jpg 1x, ./img/project@2.jpg 2x"/>
                    </div>
                    <div class="complex__card__footer">
                        <h2 class="h2">Look – ресторан-кафе</h2>
                        <span class="complex__card__footer__text">
                            Полный спектр работ от проектирования и составления технической документации, до обучения персонала.
                        </span>
                    </div>
                </a>
            </div>
            <div class="col col-lg-6 col-md-6  fpad30">
                <a href="" class="complex__card complex__card--action">
                    <div class="complex__card__images">
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                             class="lazy complex__card__pic complex__card__pic--h3"
                             alt=""
                             data-src="./img/project.jpg"
                             data-srcset="./img/project.jpg 1x, ./img/project@2.jpg 2x"/>
                    </div>
                    <div class="complex__card__footer">
                        <h2 class="h2">Look – ресторан-кафе</h2>
                        <span class="complex__card__footer__text">
                            Полный спектр работ от проектирования и составления технической документации, до обучения персонала.
                        </span>
                    </div>
                </a>
            </div>

        </div>
        <div class="fpad50">
            <div class="complex__footer-pagination">
                <button class="complex__footer-pagination__all-more">Показать еще</button>
                <div class="complex__footer-pagination__nav">
                    <? include __DIR__ . '/inc/paginations.php'; ?>
                </div>
            </div>
        </div>
    </div>

<?php
include_once __DIR__ . '/inc/footer.php';
?>