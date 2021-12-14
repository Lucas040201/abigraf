$(document).ready(function(){
    // Slider Home
    $('.main-slider').slick({
        arrows: true,
        autoplay: true,
        autoplaySpeed: 2000,
    })

    $('.slider-agenda').slick({
        arrows: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: false,
        responsive: [
            {
              breakpoint: 901,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              }
            }
          ]
    })
    
    function menu () {
        $('.header__menu').on('click', function () {
            $('.nav').toggleClass('nav__mobile');
        })
    }
    menu ();

    function accordion () {
        $('.accordion__tab').on('click', function () {
            console.log('teste');
            $(this).siblings('.accordion__info').toggle();
        })
    }
    accordion ()
})