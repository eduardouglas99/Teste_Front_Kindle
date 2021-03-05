$(document).ready(function(){
    
    $('.link-scroll').click(function(){
        var href = $(this).attr('href');
        var offSetTop = $(href).offset().top;
    
    $('html,body').animate({'scrollTop':offSetTop}, 1200);
        return false;
    });

    // Mascara calcule sua economia
    $('#valor').mask('#.##0,00', {reverse: true});
    $('#telefone').mask('(000)00000-0000');
});