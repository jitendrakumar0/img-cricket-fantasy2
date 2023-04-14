//heroslider
$('.hero-slider').owlCarousel({
    loop: true,
    items: 1,
    margin: 10,
    nav: false,
    dots: true,
    autoplay: false,
    center: true,
    freeDrag: false,
    lazyLoad: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: false,
    smartSpeed: 1200,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: false
        },
        500: {
            items: 1,
            nav: false
        },
        600: {
            items: 1,
            nav: false
        },
        1000: {
            items: 1,
            nav: false
        },
        1299: {
            items: 1,
            nav: true
        },
        1499: {
            items: 1,
            nav: false
        }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});


//animation
AOS.init();

//testimonilaSlider
$('.testimonilaSlider').owlCarousel({
    loop: true,
    items: 2,
    margin: 10,
    stagePadding:260,
    nav: false,
    dots: true,
    autoplay: false,
    center: true,
    freeDrag: false,
    lazyLoad: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: false,
    smartSpeed: 1200,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: false,
            dots: true,
        },
        500: {
            items: 1,
            nav: false,
            stagePadding:0,
            nav: false,
            dots: true,
        },
        768: {
            items: 1,
            stagePadding:100,
            dots: false,
        },
        1000: {
            items: 1,
            nav: false,
            dots: false,
        },
        1199: {
            items: 1,
            nav: false,
            stagePadding:220,
            dots: false,
        },
        1299: {
            items: 1,
            nav: false,
            dots: false,
        },
        1499: {
            items: 1,
            nav: false,
            dots: false,
        }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});