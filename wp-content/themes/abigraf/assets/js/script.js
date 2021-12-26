$(document).ready(function(){
    // Slider Home
    function sliders () {
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

        $('.modal-slider').slick({
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
        });
    }
    sliders();

    function modal () {
        $('.modal-close').on('click', function () {
            $('.modal').removeClass('modal--active');
        });
    
        $('.galeria-card-link').on('click', function () {
            $(this).parent().siblings('.modal').addClass('modal--active');
            $('.modal-slider').slick('refresh');
    
            let ultimoItem = $('.modal--active .modal-slider img').last().data('item');
            
            $('.modal--active .modal-paginacao-item').text('/0' + ultimoItem);
        });
    
        $(".modal-slider").on("afterChange", function () {
            let ativoItem = $('.modal--active .modal-slider .slick-current').data('item');
            $('.modal--active .modal-paginacao-item--active').text('0'+ativoItem);
        });
    }
    modal();
    
    function menu () {
        $('.header__menu').on('click', function () {
            $('.nav').toggleClass('nav__mobile');
        })
    }
    menu ();

    function accordion () {
        $('.accordion__tab').on('click', function () {
            if($(this).parent('.accordion__card').hasClass('accordion__card--open')) {
                $(this).parent('.accordion__card').removeClass('accordion__card--open')
            }
            $(this).parent('.accordion__card').addClass('accordion__card--open');
            $(this).siblings('.accordion__info').toggle();
        })
    }
    accordion ()

    function login () {
        $('.esqueci').on('click', function() {
            $('.area-exclusiva').hide();
            $('.esqueci-senha').show();
        })

        $('.cadastrar').on('click', function() {
            $('.area-exclusiva').hide();
            $('.quero-cadastrar').show();
        })

        $('.cnpj').mask('00.000.000/0000-00')
    }
    login ();
})