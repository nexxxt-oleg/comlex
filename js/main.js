let lazyLoadInstance = new LazyLoad();

document.addEventListener("DOMContentLoaded", () => {
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


    if (document.getElementById('sliderBrands')) {
        const sliderBrands = new Swiper('#sliderBrands', {
            slidesPerView: 6,
            navigation: {
                nextEl: '.button-next',
                prevEl: '.button-prev',
            },

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
                320: {
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

    if(document.getElementById("clients") && window.innerWidth >= 1200) {

        let clients = document.getElementById("clients");
        let iPos = clients.offsetTop;

        function partnersScroll(){


            let scrollAmount = Math.max(window.pageYOffset, document.documentElement.scrollTop, document.body.scrollTop),
                screenHeight = window.innerWidth,
                windowWidth = window.innerHeight;

            const clientsRow = document.querySelectorAll('.complex__clients__row');
            clientsRow.forEach(el => {
                if (scrollAmount + screenHeight > iPos - 10) {
                    let translateValue = .3 * (-scrollAmount + iPos - screenHeight);
                    el.style.transform = "translateX("+ translateValue +"px)";
                }
            });

        }

        window.addEventListener('scroll', function () {
            partnersScroll();
        });

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
    }

    if (document.getElementById('moreTextBtn')) {
        document.getElementById("moreTextBtn").addEventListener("click", (e) => {
            document.getElementById("moreTextBtn").classList.add("d-none");
            document.getElementById("moreText").style.display = "block";
            e.preventDefault(false);
        });
    }

});