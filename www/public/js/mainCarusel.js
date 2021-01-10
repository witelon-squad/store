$(document).ready(function(){
    $('.main-crousel').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        nextArrow: '<button class="btn btn-carousel btn-next"><i class="fas fa-chevron-right"></i></button>',
        prevArrow: '<button class="btn btn-carousel btn-prev"><i class="fas fa-chevron-left"></i></button>',

        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]

    });
});
