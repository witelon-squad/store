$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    centerMode: true,
    focusOnSelect: true,
    nextArrow: '<button class="btn btn-carousel btn-next"><i class="fas fa-chevron-right"></i></button>',
    prevArrow: '<button class="btn btn-carousel btn-prev"><i class="fas fa-chevron-left"></i></button>'
});
