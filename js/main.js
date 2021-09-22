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
                    if(window.innerWidth < 575) {
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

    if(window.innerWidth >= 1200) {

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

        if(document.getElementById("clients")) {
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

        if(document.getElementById("clients")) {
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

        if(document.getElementById('catalogModal')) {
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
                if(liNav.classList.contains('is_active')) {
                    liNav.classList.remove('is_active');
                    document.getElementById('catalogNavNain').classList.remove('is_active');
                    document.getElementById(activeIdSubNav).classList.remove('is_active');
                } else {
                    liNav.classList.add('is_active');
                    document.getElementById('catalogNavNain').classList.add('is_active');
                    document.getElementById(activeIdSubNav).classList.add('is_active');
                }
                console.log(activeIdSubNav);
                event.preventDefault(false);
            });

        });

    }

    if (document.getElementById('moreTextBtn')) {
        document.getElementById("moreTextBtn").addEventListener("click", (e) => {
            document.getElementById("moreTextBtn").classList.add("d-none");
            document.getElementById("moreText").style.display = "block";
            e.preventDefault(false);
        });
    }

});