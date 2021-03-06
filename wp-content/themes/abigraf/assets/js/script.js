$(window).on('load', function() {
    $('body').css('opacity', '1')
})

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
            adaptiveHeight: true,
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
        // Esvaziar campos
        $('.acf-input-wrap input').val('')
        // Sumir com o campo de data
        $('div[data-name=data_de_matricula]').hide()

        $('.esqueci').on('click', function() {
            $('.area-exclusiva').hide();
            $('.esqueci-senha').show();
        })

        $('.cadastrar').on('click', function() {
            $('.area-exclusiva').hide();
            $('.quero-cadastrar').show();
        })

        // mascaras

        $('.cnpj').mask('000.000.000-00', {
            onKeyPress : function(cpfcnpj, e, field, options) {
              const masks = ['000.000.000-000', '00.000.000/0000-00'];
              const mask = (cpfcnpj.length > 14) ? masks[1] : masks[0];
              $('.cnpj').mask(mask, options);
            }
        })

        // checar se esta logado
        if ('logado' in sessionStorage) {
            if(window.location.pathname == '/login/') {
                $(window).on('load', function() {
                    $('body').css('opacity', '0')
                })
                window.location.href = window.location.origin
            }
        } else {
            // if(window.location.pathname == '/abigraf/dados-economicos/' || window.location.pathname == '/abigraf/apresentacoes/' || window.location.pathname == '/abigraf/boletins/') {
            if(window.location.pathname == '/dados-economicos/' || window.location.pathname == '/apresentacoes/' || window.location.pathname == '/boletins/') {
                $(window).on('load', function() {
                    $('body').css('opacity', '0')
                })
                window.location.href = '/login/'
            }
        }
    }
    login();
})

document.querySelectorAll('.tv__card').forEach(e => {
    
    const currentLink = e.querySelector('.sby_video_thumbnail'),
    currentImage = currentLink.getAttribute('data-full-res');
    e.querySelector('.sb_youtube').style.backgroundImage = "url('"+currentImage+"')";
  
});


function submitForm(e) {
    e.preventDefault();
    const cnpj = document.querySelector('.cnpj').value;
    $.ajax({
        type: 'GET',
        url: window.location.origin + '/wp-json/custom/v2/consulta?cnpj=' + cnpj,
        success: function(data) {
            if(data.error == 0) {
                e.target.submit();
            }else {
                alert('CNPJ/CPF n??o encontrado');
            }
        }
    });
}