// Home: Introduction Swiper
let homeIntroSwiper = new Swiper(".homeIntroductionSwiper", {
    slidesPerView: 3.5,
    spaceBetween: 0,
    allowTouchMove: false,
    preloadImages: true,
    centeredSlides: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    loop: true,
    breakpoints: {
        200: {
            slidesPerView: 1,
        },
        450: {
            slidesPerView: 1.25,

        },
        550: {
            slidesPerView: 1.5,

        },
        600: {
            slidesPerView: 1.75,

        },
        700: {
            slidesPerView: 2,

        },
        800: {
            slidesPerView: 2.5,

        },
        900: {
            slidesPerView: 1,

        },
        1000: {
            slidesPerView: 1.5,
            spaceBetween: 30,
        },
        1100: {
            slidesPerView: 2,
            spaceBetween: 0,
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 0,
        }
    }
});

// Brand License: Introduction Swiper
let brandLicenseIntroSwiper = new Swiper(".blIntroductionSwiper", {
    slidesPerView: 3.5,
    spaceBetween: 0,
    allowTouchMove: false,
    preloadImages: true,
    centeredSlides: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    loop: true,
    breakpoints: {
        200: {
            slidesPerView: 1,
        },
        450: {
            slidesPerView: 1.25,

        },
        550: {
            slidesPerView: 1.5,

        },
        600: {
            slidesPerView: 1.75,

        },
        700: {
            slidesPerView: 2,

        },
        800: {
            slidesPerView: 2.5,

        },
        900: {
            slidesPerView: 1,

        },
        1000: {
            slidesPerView: 1.5,
            spaceBetween: 30,
        },
        1100: {
            slidesPerView: 2,
            spaceBetween: 0,
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 0,
        }
    }
});

// Brand License: Our Benefits Swiper Desktop
let swiper = new Swiper(".swiperConstant", {
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

// let swiper8 = new Swiper(".swiperConstant", {
//     loop: true,
//     allowTouchMove: false,
//     navigation: {
//         nextEl: ".swiper-button-next",
//         prevEl: ".swiper-button-prev",
//     },
// });

// Brand License: Our Benefits Swiper Mobile
let swiper9 = new Swiper(".ourBenefitsSwiper", {
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

// Our Services Introduction: Introduction Swiper
let ourStoryIntroSwiper = new Swiper(".osIntroductionSwiper", {
    slidesPerView: 3.5,
    spaceBetween: 0,
    allowTouchMove: false,
    preloadImages: true,
    centeredSlides: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    loop: true,
    breakpoints: {
        200: {
            slidesPerView: 1,
        },
        450: {
            slidesPerView: 1.25,

        },
        550: {
            slidesPerView: 1.5,

        },
        600: {
            slidesPerView: 1.75,

        },
        700: {
            slidesPerView: 2,

        },
        800: {
            slidesPerView: 2.5,

        },
        900: {
            slidesPerView: 1,

        },
        1000: {
            slidesPerView: 1.5,
            spaceBetween: 30,
        },
        1100: {
            slidesPerView: 2,
            spaceBetween: 0,
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 0,
        }
    }
});

let productShowcaseSwiper1 = new Swiper(".productShowcaseSwiper-1", {
    slidesPerView: 4,
    spaceBetween: 0,
    allowTouchMove: false,
    autoplay: {
        delay: 0,
        disableOnInteraction: false,
    },
    loop: true,
    speed: 5000,
    breakpoints: {
        200: {
            slidesPerView: 1.85,
        },
        300: {
            slidesPerView: 2.25,
        },
        500: {
            slidesPerView: 3,
        },
        768: {
            slidesPerView: 4,
        }
    }
});

let productShowcaseSwiper2 = new Swiper(".productShowcaseSwiper-2", {
    slidesPerView: 4,
    spaceBetween: 0,
    allowTouchMove: false,
    autoplay: {
        delay: 0,
        disableOnInteraction: false,
    },
    loop: true,
    speed: 5000,
    breakpoints: {
        200: {
            slidesPerView: 1.85,
        },
        300: {
            slidesPerView: 2.25,
        },
        500: {
            slidesPerView: 3,
        },
        768: {
            slidesPerView: 4,
        }
    }
});

function commonVisibleDifferentSwipers() {
    const commonClickables = document.querySelectorAll(".common-clickables");

    commonClickables.forEach(item => {
        item.addEventListener("click", (e) => {

            const targetId = e.target.getAttribute("id");

            const swiperToShow = document.getElementById(`swiper-for--${targetId}`);

            commonClickables.forEach(link => {
                link.classList.remove("cmn-active-link");
            });

            e.target.classList.add("cmn-active-link");

            const allSwipers = document.querySelectorAll(".swiper.commonSwiper");

            allSwipers.forEach(swiper => {
                swiper.classList.remove("show-common-swiper");
            });

            if (swiperToShow) {
                swiperToShow.classList.add("show-common-swiper");
            }
        });
    });

    const defaultSwiper = document.getElementById("swiper-for--cmn-apparel");

    if (defaultSwiper) {
        defaultSwiper.classList.add("show-common-swiper");
    }
    commonClickables[0].classList.add("cmn-active-link");

    let swiper = new Swiper(".commonSwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        allowTouchMove: false,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            200: {
                slidesPerView: 1,
            },
            767: {
                slidesPerView: 2,
            },
            1300: {
                slidesPerView: 3,
            },
        }
    });
}
commonVisibleDifferentSwipers();