$(document).ready(function () {

    $('.fitness-banner').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3500,
        dots: false,
        arrows: true,
        prevArrow:'<button type="button" class="prev-slide"><i class="icofont-swoosh-left"></i></button>',
        nextArrow:'<button type="button" class="next-slide"><i class="icofont-swoosh-right"></i></button>',
        fade: true,
        responsive: [

            {
                breakpoint: 1200,
                settings: {
                    infinite: true,
                    dots: true ,
                    arrows: false
                }

            },
            {
                breakpoint: 1024,
                settings: {
                    dots: true ,
                    arrows: false
                }
            },
            {
                breakpoint:600,
                settings: {
                    dots: true ,
                    arrows: false,
                    autoplay: true,
                    items:1
                }
            }
        ]
    });
    $('.service-slider').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2500,
        dots: false,
        margin: 100,
        arrows: false,

        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            ]

    });
    $('.testimonial_slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3500,
        dots: true,
        arrows: true,


        responsive: [

            {
                breakpoint: 1200,
                settings: {
                    infinite: true,
                    dots: true ,
                    arrows: false
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    dots: true ,
                    arrows: false
                }
            },
            {
                breakpoint:600,
                settings: {
                    dots: true ,
                    arrows: false,
                    autoplay: true,
                }
            }
        ]
    });




    $('.main-menu-toggle').click(function() {

        $(this).parent('.main-navigation').children('.main-menu-container-collapse').first().slideToggle('1000');
    });
    /* **


     * Sub Menu
     **/
    $('nav .menu-item-has-children').append('<span class="sub-toggle"> <i class="fa fa-plus"></i> </span>');
    $('nav .page_item_has_children').append('<span class="sub-toggle-children"> <i class="fa fa-plus"></i> </span>');

    $('nav .sub-toggle').click(function() {
        $(this).parent('.menu-item-has-children').children('ul.sub-menu').first().slideToggle('1000');
        $(this).children('.fa-plus').first().toggleClass('fa-minus');
    });

    $('.navbar .sub-toggle-children').click(function() {
        $(this).parent('.page_item_has_children').children('ul.sub-menu').first().slideToggle('1000');
        $(this).children('.fa-plus').first().toggleClass('fa-minus');
    });

});