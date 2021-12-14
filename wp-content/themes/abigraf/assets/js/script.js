$(document).ready(function(){
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