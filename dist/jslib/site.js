
$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 5,
    // nav: true,
    // animateIn:fadeOut,
    dots:false,
    autoplay: true,
    // autoplayTimeout: 1000,
    // autoplayHoverPause: true
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 2
        }
    }
})