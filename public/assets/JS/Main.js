$(document).ready(function(){
    $('ul.internal li a:first').addClass('color');
    $('ul.tabs li a:first').addClass('active');
    
    $('.secciones article').hide();
    $('.secciones article:first').show();

    $('.ItemSeccion article').hide();
    $('.ItemSeccion article:first').show();

    $('ul.tabs li a').click(function(){
        $('ul.tabs li a').removeClass('active');
        $(this).addClass('active');
        $('.secciones article').hide();

        var activeTab = $(this).attr('href');
        $(activeTab).show();
        return false;
    });

    $('ul.internal li a').click(function(){
        $('ul.internal li a').removeClass('color');
        $(this).addClass('color');
        $('.ItemSeccion article').hide();

        var aTab = $(this).attr('href');
        $(aTab).show();
        return false;
    });

});