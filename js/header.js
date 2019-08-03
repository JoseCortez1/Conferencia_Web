$(function(){
    /**Lettering */
    $('.nombre-sitio').lettering(); 

    
    /**Menu movil  Resonsive */
    $('.menu-mobil').click(function(){
        $('.navegacion-principal').slideToggle(100);
    });
    /**Menu Fijo */
    let windowHight = $(window).height();
    let barraHeight = $('.barra').innerHeight();

    $(window).scroll(function(){
        let scroll =$(window).scrollTop();
        if(scroll > windowHight){
            $('.barra').addClass('fixed');
            $('body').css({marginTop: barraHeight+'px'});
        }else{
            $('.barra').removeClass('fixed');
            $('body').css({marginTop: '0px'});
        }
    });

});