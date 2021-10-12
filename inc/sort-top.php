<div class="d-flex align-items-center complex__cat__top">
    <div class="complex__cat__sort-top d-flex align-items-center">
        <span class="complex__cat__sort-top__label">Сортировать:</span>
        <div class="dropdown">
            <span class="music__city-btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="true">
                По популярности
            </span>
            <ul class="dropdown-menu dropdown-menu--sort" >
                <li><a class="dropdown-item active" href="#">По популярности</a></li>
                <li><a class="dropdown-item" href="#">По цене</a></li>
            </ul>
        </div>
    </div>
    <div class="complex__cat__pagination-top">
        <? include __DIR__ . '/paginations.php'; ?>
    </div>
    <div class="complex__cat__views-top">
        <ul class="nav nav--views">
            <li>
                <a href="" class="active">
                    <svg width="18" height="18">
                        <use xlink:href="#svg-v-grid"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a href="">
                    <svg width="18" height="18">
                        <use xlink:href="#svg-v-list"></use>
                    </svg>
                </a>
            </li>
        </ul>
    </div>
</div>