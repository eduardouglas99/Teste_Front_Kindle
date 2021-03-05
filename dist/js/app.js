$(document).ready(function(){
    
    // Scroll Suave
    $('.link-scroll').click(function(){
        var href = $(this).attr('href');
        var offSetTop = $(href).offset().top;
    
    $('html,body').animate({'scrollTop':offSetTop}, 1200);
        return false;
    });

    // Mascara calcule sua economia
    $('#valor').mask('#.##0,00', {reverse: true});
    $('#telefone').mask('(000)00000-0000');

    // Abrindo a box do Faq
    $('.Section_Duvidas .container .Section_Duvidas_Box .Section_Duvidas_Box_Item').click(function(){
        $('.Section_Duvidas .container .Section_Duvidas_Box .Section_Duvidas_Box_Item').removeClass("current");
        $('.Section_Duvidas .container .Section_Duvidas_Box .Section_Duvidas_Box_Item p').css("display","none");
        var PerguntaClick = $(this);
        PerguntaClick.addClass("current");
        $(".current").find(".OpenText").slideToggle('slow');
    })
});