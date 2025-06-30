$(document).ready(function(){
    $('.hero-slider-container').slick({
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: true,
        prevArrow: $('.hero-slider-prev'),
        nextArrow: $('.hero-slider-next'),
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false
                }
            }
        ]
    });
}); 