let lazyLoadInstance = new LazyLoad();

document.addEventListener("DOMContentLoaded", () => {


    if (document.getElementById('sliderBrands')) {
        const sliderBrands = new Swiper('#sliderBrands', {
            slidesPerView: 6,
            navigation: {
                nextEl: '.button-next',
                prevEl: '.button-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 4,
                },
                991: {
                    slidesPerView: 4,
                },
                1200: {
                    slidesPerView: 6,
                },
            },
            on: {
                init: function (e) {
                    if (window.innerWidth < 575) {
                        e.destroy();
                    }
                }
            }
        });
    }

    if (document.getElementById('certificateSlider')) {
        const sliderBrands = new Swiper('#certificateSlider', {
            slidesPerView: 6,
            navigation: {
                nextEl: '.button-next',
                prevEl: '.button-prev',
            },
            spaceBetween: 30,
            breakpoints: {
                320: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                576: {
                    slidesPerView: 3,
                    spaceBetween: 10
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 20
                },
                991: {
                    slidesPerView: 4,
                    spaceBetween: 30
                },
                1200: {
                    slidesPerView: 6,
                    spaceBetween: 30
                },
            }
        });
    }

    if (document.getElementById('viewedSlider')) {
        const sliderBrands = new Swiper('#viewedSlider', {
            slidesPerView: 4,
            navigation: {
                nextEl: '.button-next',
                prevEl: '.button-prev',
            },
            spaceBetween: 30,
            breakpoints: {
                300: {
                    slidesPerView: 1,
                    spaceBetween: 25
                },
                576: {
                    slidesPerView: 2,
                    spaceBetween: 25
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 25
                },
                991: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 30
                },
            }
        });
    }

    if (document.getElementById('sliderAction')) {
        const sliderAction = new Swiper('#sliderAction', {
            slidesPerView: 4,
            navigation: {
                nextEl: '#nextAction',
                prevEl: '#prevAction',
            },
            preloadImages: false,
            lazy: true,
            spaceBetween: 30,
            breakpoints: {
                300: {
                    slidesPerView: 1,
                    spaceBetween: 25
                },
                576: {
                    slidesPerView: 2,
                    spaceBetween: 25
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 25
                },
                991: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 30
                },
            }
        });
    }

    if (document.getElementById('sliderCat')) {
        const sliderBrands = new Swiper('#sliderCat', {
            navigation: {
                nextEl: '#sliderCatNext',
                prevEl: '#sliderCatPrev',
            },
            spaceBetween: 5,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            loop: true,
            /*autoHeight: true,*/
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            preloadImages: false,
            lazy: true,
        });
    }

    if (window.innerWidth >= 1200) {

        const navs = document.querySelectorAll('.complex__catalog-nav__list li');

        navs.forEach(el => {

            el.addEventListener('mouseover', () => {
                let activeNav = document.querySelector('.complex__catalog-nav__list .active');
                if (activeNav) {
                    activeNav.classList.remove("active");
                }

                el.classList.add('active');
                let activeIdSubNav = el.dataset.hoverMenu;

                let removeActiveNav = document.querySelector('.complex__catalog-nav__list__submenu.active');
                if (removeActiveNav) {
                    removeActiveNav.classList.remove("active");
                }

                if (document.getElementById(activeIdSubNav)) {
                    document.getElementById(activeIdSubNav).classList.add("active");
                }
            });

        });

        if (document.getElementById("clients")) {
            let clients = document.getElementById("clients");
            let iPos = clients.offsetTop;

            function partnersScroll() {


                let scrollAmount = Math.max(window.pageYOffset, document.documentElement.scrollTop, document.body.scrollTop),
                    screenHeight = window.innerWidth,
                    windowWidth = window.innerHeight;

                const clientsRow = document.querySelectorAll('.complex__clients__row');
                clientsRow.forEach(el => {
                    if (scrollAmount + screenHeight > iPos - 10) {
                        let translateValue = .3 * (-scrollAmount + iPos - screenHeight);
                        el.style.transform = "translateX(" + translateValue + "px)";
                    }
                });

            }

            window.addEventListener('scroll', function () {
                partnersScroll();
            });
        }


        function getScrollMenu() {
            let el = document.getElementById('fixNav');
            if (pageYOffset > 300) {
                el.classList.add('active');
            } else {
                el.classList.remove("active");
            }
        }

        getScrollMenu();
        window.addEventListener('scroll', function () {
            getScrollMenu();
        });

        const goTopBtn = document.getElementById('btnTop');
        window.addEventListener('scroll', trackScroll);

        function trackScroll() {
            var scrolled = window.pageYOffset;
            var coords = document.documentElement.clientHeight;

            if (scrolled > coords) {
                goTopBtn.classList.add('_show');
            }
            if (scrolled < coords) {
                goTopBtn.classList.remove('_show');
            }
        }

        trackScroll();

    } else {
        /*function getScrollMenuMob() {
            let el = document.getElementById('fixNav');
            if (pageYOffset > 200) {
                el.classList.add('active_mob');
            } else {
                el.classList.remove("active_mob");
            }
        }

        getScrollMenuMob();
        window.addEventListener('scroll', function () {
            getScrollMenuMob();
        });*/

        if (document.getElementById("clients")) {
            const clientsSlider = new Swiper('#clientsSlider', {
                slidesPerView: 6,
                breakpoints: {
                    300: {
                        slidesPerView: 3,
                    },
                    576: {
                        slidesPerView: 4,
                    },
                    768: {
                        slidesPerView: 4,
                    },
                    991: {
                        slidesPerView: 5,
                    },
                    1200: {
                        slidesPerView: 6,
                    },
                },
                navigation: {
                    nextEl: '#clientsNext',
                    prevEl: '#clientsPrev',
                },
            });
        }

        if (document.getElementById('catalogModal')) {
            let catalogModal = document.getElementById('catalogModal');
            catalogModal.addEventListener('show.bs.modal', function (event) {
                document.getElementById('fixNav').classList.add("active-menu");
            });
            catalogModal.addEventListener('hidden.bs.modal', function (event) {
                document.getElementById('fixNav').classList.remove("active-menu");
            });
        }

        const navsMob = document.querySelectorAll('.complex__catalog-nav__list__item');

        navsMob.forEach(el => {

            el.addEventListener('click', (event) => {
                let liNav = el.parentNode;
                let activeIdSubNav = liNav.dataset.hoverMenu;
                if (liNav.classList.contains('is_active')) {
                    liNav.classList.remove('is_active');
                    document.getElementById('catalogNavNain').classList.remove('is_active');
                    document.getElementById(activeIdSubNav).classList.remove('is_active');
                } else {
                    liNav.classList.add('is_active');
                    document.getElementById('catalogNavNain').classList.add('is_active');
                    document.getElementById(activeIdSubNav).classList.add('is_active');
                }
                //console.log(activeIdSubNav);
                event.preventDefault(false);
            });

        });

        if (document.getElementById('mobFilter')) {
            document.getElementById('mobFilter').addEventListener('click', (event) => {
                document.getElementById('filterBox').classList.add('is_active');
                document.getElementById('filterBox').classList.add('is_active');
                document.getElementById('top').classList.add('full-height');
                event.preventDefault();
            });

            document.getElementById('mobFilterClose').addEventListener('click', (event) => {
                document.getElementById('filterBox').classList.remove('is_active');
                document.getElementById('filterBox').classList.remove('is_active');
                document.getElementById('top').classList.remove('full-height');
                event.preventDefault();
            });
        }

    }

    if (document.getElementById('moreTextBtn')) {
        document.getElementById("moreTextBtn").addEventListener("click", (e) => {
            document.getElementById("moreTextBtn").classList.add("d-none");
            document.getElementById("moreText").style.display = "block";
            e.preventDefault(false);
        });
    }

    if (document.getElementsByClassName("js-more-props").length) {
        const moreProps = document.querySelectorAll('.js-more-props');

        moreProps.forEach(el => {
            el.addEventListener('click', (event) => {
                event.target.parentNode.parentNode.classList.add('show_all');
                event.preventDefault(false);
            });
        });
    }

    if (document.getElementById('priceRange')) {

        let priceRange = document.getElementById('priceRange');

        noUiSlider.create(priceRange, {
            start: [0, parseInt(priceRange.dataset.maxPrice)],
            step: 1000,
            connect: true,
            format: wNumb({
                decimals: 0,
                thousand: ' ',
                //suffix: ' ₽'
            }),
            range: {
                'min': 0,
                'max': parseInt(priceRange.dataset.maxPrice)
            }
        });

        let priceMin = document.getElementById('priceMin'),
            priceMax = document.getElementById('priceMax');


        priceRange.noUiSlider.on('update', function (values, handle) {
            //priceValue[handle].value = values[handle];
            if (handle == 0) {
                priceMin.value = values[handle];
            } else {
                priceMax.value = values[handle];
            }
        });
    }

    const phoneMask = document.querySelectorAll('.js-phone-mask');

    phoneMask.forEach(el => {
        IMask(el, {
            mask: '+{7}(000)000-00-00',
        });
    });


    if (document.getElementById('projectSlider')) {


        const imageSliders = document.querySelectorAll('.complex__projects__item__slider');
        let numberSlider = 1;
        let projectThumbsSlider = [];
        imageSliders.forEach(el => {
            let projectThumbs = el.querySelector('.project-thumbs');
            let selectSlider1 = '#' + projectThumbs.id;
            let selectSlider2 = projectThumbs.dataset.sliderid;
            projectThumbsSlider[numberSlider] = new Swiper(selectSlider1, {
                loop: false,
                spaceBetween: 30,
                slidesPerView: 6,
                freeMode: true,
                watchSlidesProgress: true,
                lazy: true,
                breakpoints: {
                    300: {
                        spaceBetween: 10,
                    },
                    576: {
                        spaceBetween: 10,
                    },
                    1200: {
                        spaceBetween: 30,
                    },
                },
            });
            //let projectImages = el.querySelector('.project-images');
            //console.log(projectImages);
            new Swiper(selectSlider2, {
                loop: false,
                spaceBetween: 10,
                lazy: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },

                thumbs: {
                    swiper: projectThumbsSlider[numberSlider],
                },
            });

            numberSlider++;
        });

        let projectSlider = new Swiper('#projectSlider', {
           effect: 'fade',
            autoHeight: true,
            fadeEffect: {
                crossFade: true
            },
            navigation: {
                nextEl: '#sl-next',
                prevEl: '#sl-prev',
            },
        });

    }

    if (document.getElementById('objSliderTop') && screen.width < 769) {
        const objSliderTop = new Swiper('#objSliderTop', {
            slideClass: 'complex__obj-slider-top__item',
            wrapperClass: 'complex__obj-slider-top__row',
            navigation: {
                nextEl: '#objSliderTop .button-next',
                prevEl: '#objSliderTop .button-prev',
            },
        });
    }

    if (document.getElementById('projThumbSingle')) {
        let projThumbSingle = new Swiper('#projThumbSingle', {
            loop: false,
            spaceBetween: 30,
            slidesPerView: 6,
            freeMode: true,
            watchSlidesProgress: true,
            lazy: true,
            breakpoints: {
                300: {
                    spaceBetween: 10,
                },
                576: {
                    spaceBetween: 10,
                },
                1200: {
                    spaceBetween: 30,
                },
            },
        });
        new Swiper('#projSingle', {
            loop: false,
            spaceBetween: 10,
            lazy: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '#projSingleNext',
                prevEl: '#projSinglePrev',
            },
            thumbs: {
                swiper: projThumbSingle,
            },
        });
    }

    if (document.getElementById('productBig')) {

        let productMin = new Swiper('#productMin', {
            loop: false,
            spaceBetween: 30,
            slidesPerView: 6,
            /*freeMode: true,*/
            watchSlidesProgress: true,
            lazy: true,
            breakpoints: {
                576: {
                    spaceBetween: 10,
                },
                1200: {
                    spaceBetween: 30,
                },
            },
        });

        new Swiper('#productBig', {
            loop: false,
            spaceBetween: 10,
            lazy: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            thumbs: {
                swiper: productMin,
            },
        });


    }

    if (document.getElementsByClassName("complex__slider-product").length) {
        let swiperCatalog = new Swiper('.complex__slider-product', {
            navigation: {
                nextEl: '.button-next',
                prevEl: '.button-prev',
            },
            slidesPerView: 4,
            lazy: true,
            observer: true,
            observeParents: true,
            spaceBetween: 30,

            //loop: true,
            //simulateTouch: false,
            breakpoints: {
                300: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                },
                440: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                },
                600: {
                    slidesPerView: 2,
                },
                991: {
                    slidesPerView: 3,
                },
                1280: {
                    slidesPerView: 4,
                },
            },
            on: {
                init: function () {

                },
            },
        });
    }

});