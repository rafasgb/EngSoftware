$(window).ready( function(){
    // Scroll pelo botão //
    var v = $("body").outerHeight();
    var scroll = new Array( 0, (v/3), 2*(v/3) );
    var posicScroll = 1;
    $('.btBody').click(function(){
        v = $("body").outerHeight();
        scroll = new Array( 0, (v/3), 2*(v/3) );
        if( posicScroll == 0 ){
            $(".fa-angle-double-up").attr("class", "fa fa-angle-double-down");
            $("#topo").attr("class", "container");
        }else{
            $("#topo").attr("class", "container bottomShadow");
        }
        var deslocamento = scroll[posicScroll];
        posicScroll++;
        if( posicScroll == 3 ){
            $(".fa-angle-double-down").attr("class", "fa fa-angle-double-up");
            posicScroll = 0;
        }
        $('html, body').animate({ scrollTop: deslocamento }, 'slow');
    });

    var flagMenu = 0;
    $('#btMenu, #btCloseMenuInicial').click(function(){
        if( flagMenu == 0 ){
            $('#menuInicial').attr('class', 'container');
            flagMenu = 1;
        }else{
            $('#menuInicial').attr('class', 'container hide');
            flagMenu = 0;
        }
    });

    $('#btActLogin').click(function(e){
        e.preventDefault();
        $('#divLogin').attr( 'class', 'container' );
    });
    $('#btCloseLogin').click( function(){
        $('#divLogin').attr( 'class', 'container hide' );
    });
    $('.btCreateAcc').click( function(){
        $('#divLogin').attr( 'class', 'container hide' );
        var deslocamento = scroll[2];
        posicScroll = 0;
        $(".fa-angle-double-down").attr("class", "fa fa-angle-double-up");
        $('html, body').animate({ scrollTop: deslocamento }, 'slow');
    });

});