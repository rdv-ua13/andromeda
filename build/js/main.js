$(document).ready(function () {
    let app = new application();
    app.init();
});


function application() {
    //variable
    //this.myMap;
}
application.prototype.init = function () {
    this.initTouch();
    this.initMapContacts();
    this.initModalPopup();
    this.initAccordion();
    this.initSliders();
    this.getHighestSlide();
};

// Checking the user's viewing device
application.prototype.initTouch = function () {
    if ('ontouchstart' in document.documentElement) {
        $('html').addClass('touch');
    }
};
// Init contacts map
application.prototype.initMapContacts = function () {
    if($("#contactMap").length) {
        let coords = [55.817759,49.111714];

        ymaps.ready(init);
        function init(){
            // Создание карты.
            let myMap = new ymaps.Map("contactMap", {
                    // Координаты центра карты.
                    // Порядок по умолчанию: «широта, долгота».
                    center: coords,
                    controls: [],
                    zoom: 17,
                }, {
                    searchControlProvider: 'yandex#search'
                }),

            myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                hintContent: 'ANDROMEDA TECHSPACE',
            }, {
                iconLayout: 'default#image',
                // Custom image for the placemark icon.
                iconImageHref: '/build/img/sprite.svg#geo',
                // The size of the placemark.
                iconImageSize: [32, 32],
                iconImageOffset: [-16, -32]
            });
            myMap.geoObjects.add(myPlacemark);
            myMap.behaviors.disable('scrollZoom');
        }
    }
};
// Init modal popup
application.prototype.initModalPopup = function () {
    if ($("[data-toggle='modal']").length) {
        let elemId = null,
            portfolioGalleryThumbsSlider = null,
            portfolioGallerySlider = null;

        $(document).on("click", function (e) {
            if ($(".modal-overlay").is(e.target)) {
                elemId = $(e.target).closest(".modal").attr("id");
                e.stopPropagation();
                $("body").removeClass("modal-is-visible compensate-for-scrollbar");
                $("#" + elemId).removeClass("is-visible");
                portfolioGalleryThumbsSlider.destroy( true, true );
                portfolioGallerySlider.destroy( true, true );
            }
        });

        $("[data-toggle='modal']").on("click", function(e) {
            elemId = $(this).data("target");
            e.preventDefault();
            $(".modal").not("#" + elemId).removeClass("is-visible");
            $("#" + elemId).addClass("is-visible");
            $("body").addClass("modal-is-visible");
            if (!$('html').hasClass('touch')) {
                $("body").addClass("compensate-for-scrollbar");
            }

        });
    }
};
// Init accordion
application.prototype.initAccordion = function () {
    if ($(".accordion").length) {
        $(".accordion__collapse").hide();
        $(".js-accordion-btn").on("click", function () {
            if (!$(this).hasClass("open")) {
                $(".accordion__btn").removeClass("open");
                $(this).closest(".accordion__item").siblings(".accordion__item").removeClass("active");
                $(this).closest(".accordion__item").siblings(".accordion__item").find(".accordion__collapse").slideUp(150);
                $(this).addClass("open");
                $(this).closest(".accordion__item").addClass("active");
                $(this).closest(".accordion__item").find(".accordion__collapse").removeClass("collapsed");
                $(this).closest(".accordion__item").find(".accordion__collapse").slideDown(150);
            } else if ($(this).hasClass("open")) {
                $(this).removeClass("open");
                $(this).closest(".accordion__item").removeClass("active");
                $(this).closest(".accordion__item").find(".accordion__collapse").slideUp(150);
                setTimeout(function () {
                    $(this).closest(".accordion__item").find(".accordion__collapse").addClass("collapsed");
                }, 150);
            }
        });
    }
};
// Init sliders
application.prototype.initSliders = function () {
    // Gallery slider
    if ($(".js-gallery-slider").length) {
        let gallerySliderSettings = {
            slidesPerView: 2,
            grid: {
                rows: 3,
            },
            loop: true,
            spaceBetween: 16,
            breakpoints: {
                768: {
                    slidesPerView: "auto",
                    grid: {
                        rows: 1,
                    },
                    spaceBetween: 20
                }
            }
        };
        new Swiper(".js-gallery-slider", gallerySliderSettings);
    }

    // Curators slider
    if ($(".js-curators-slider").length) {
        let curatorsSliderSettings = {
            slidesPerView: "auto",
            spaceBetween: 16,
            centeredSlides: true,
            loop: true,
            breakpoints: {
                768: {
                    spaceBetween: 30,
                }
            }
        };
        new Swiper(".js-curators-slider", curatorsSliderSettings);
    }

    // Program-plan slider
    if ($(".js-program-plan-slider").length) {
        let programThumbsSlider = new Swiper(".js-program-plan-thumbs-slider", {
            slidesPerView: 3,
        });
        let programSlider = new Swiper(".js-program-plan-slider", {
            slidesPerView: "auto",
            autoHeight: true,
            thumbs: {
                swiper: programThumbsSlider,
            }
        });
    }

    // Program-plan slider
    if ($(".js-program-descr-slider").length) {
        let programDescrSliderSettings = {
            slidesPerView: 1,
            spaceBetween: 16,
            navigation: {
                nextEl: ".js-program-descr-slider .swiper-button-next",
                prevEl: ".js-program-descr-slider .swiper-button-prev",
            },
            scrollbar: {
                el: ".swiper-scrollbar",
            },
            breakpoints: {
                768: {
                    spaceBetween: 80,
                },
                992: {
                    spaceBetween: 95,
                },
                1200: {
                    spaceBetween: 120,
                }
            }
        };
        new Swiper(".js-program-descr-slider", programDescrSliderSettings);
    }
};
// Get highest slide
application.prototype.getHighestSlide = function () {
    if ($(".js-curators-slider").length) {
        let highestSlide = null,
            currentSlideHeight = null;

        getHighestSlide();
        $(window).on("resize", getHighestSlide);
        function getHighestSlide() {
            $(".js-curators-slider").find(".swiper-slide").each(function(i) {
                currentSlideHeight = $(this).outerHeight();
                if(currentSlideHeight > highestSlide) {
                    highestSlide = currentSlideHeight;
                } else {
                    highestSlide = highestSlide;
                }
            });
            $(".js-curators-slider .swiper-slide").css({"height": highestSlide});
        }
    }
};
