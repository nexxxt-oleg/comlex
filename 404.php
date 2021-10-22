<?php
include_once __DIR__ . '/inc/header.php'
?>
    <div class="container">
        <ul class="nav complex__breadcrumb">
            <li><a href="">Главная</a></li>
            <li><span>404</span></li>
        </ul>
        <div class="row tpad50 fpad100 align-items-center">
            <div class="col-lg-1"></div>
            <div class="col-lg-6 fpad15 ">
                <div class="complex__text">
                    <h1>Добро пожаловать на страницу 404! </h1>
                    <div class="fpad15">
                        <p>Вы находитесь здесь, потому что ввели адрес страницы,<br>
                            которая уже не существует или была перемещена по другому адресу</p>
                    </div>
                </div>
                <a href="/" class="complex__btn complex__btn--w-auto  complex__btn--h44 complex__btn--blue">
                    <span>Перейти на главную</span>
                </a>
            </div>
            <div class="col-lg-5">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                     data-src="./img/404.jpg"
                     data-srcset="./img/404.jpg 1x, ./img/404@2.jpg 2x"
                     alt=""
                     class="lazy"
                >
            </div>
        </div>
    </div>
<?php
include_once __DIR__ . '/inc/footer.php';
?>