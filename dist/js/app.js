$(document).ready(function(){

    AOS.init();


    // Abrindo e fechando a Modal
    $('#OpenModal').click(function(){
        $('.Modal_SaibaMais').show('slow');
        $('.Modal_SaibaMais').css('display','flex');
    });

    $('#CloseModal').click(function(){
        $('.Modal_SaibaMais').hide('slow');
    });

    $('#Btn_Modal').click(function(){
        $('.Modal_SaibaMais').hide('slow');
    });


    // Abrindo e fechando o menu mobile
    $('#Btn-mobile').click(function(){
        $('#Menu_Mobile').slideToggle('slow');
        $('.Header_Container_SubMenu').css('display','flex');
    });

    
    // Scroll Suave
    $('.link-scroll').click(function(){
        var href = $(this).attr('href');
        var offSetTop = $(href).offset().top;
    
    $('html,body').animate({'scrollTop':offSetTop}, 1200);
        return false;
    });

    // Mascara calcule sua economia
    $('#CEvalor').mask('#.##0,00', {reverse: true});
    $('#CEtelefone, #SPtelefone').mask('(000)00000-0000');
    $("#SPcnpj").mask("99.999.999/9999-99");

    // Abrindo a box do Faq
    $('.Section_Duvidas .container .Section_Duvidas_Box .Section_Duvidas_Box_Item').click(function(){
        $('.Section_Duvidas .container .Section_Duvidas_Box .Section_Duvidas_Box_Item').removeClass("current");
        $('.Section_Duvidas .container .Section_Duvidas_Box .Section_Duvidas_Box_Item p').css("display","none");
        var PerguntaClick = $(this);
        PerguntaClick.addClass("current");
        $(".current").find(".OpenText").slideToggle('slow');
    });
});