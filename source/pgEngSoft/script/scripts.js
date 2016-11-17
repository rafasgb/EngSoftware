jQuery.fn.extend({
    checkButton: function( $botao, $input ){
        return this.each( function(){
            $className = $( $botao ).attr( "class" );
            if( $className == "fa fa-pencil" ){
                $( $botao ).attr( "class", "fa fa-check" );
                $( $input ).removeAttr( "disabled" );
            }else{
                $newValue = $( $input ).val();
                if( $newValue != "" )
                    window.location.href = "../teste.php";
            }
        });
    }
});
$(window).ready( function(){
    // Pagina inicial //
    $( "#btMonitor" ).click( function(){
        $( this ).addClass( "opSelected" );
        $( "#monitor" ).attr( "checked", "checked" );
        $( "#btGrupo" ).removeClass( "opSelected" );
        $( "#grupo" ).removeAttr( "checked" );
    });
    $( "#btGrupo" ).click( function(){
        $( this ).addClass( "opSelected" );
        $( "#grupo" ).attr( "checked", "checked" );
        $( "#btMonitor" ).removeClass( "opSelected" );
        $( "#monitor" ).removeAttr( "checked" );
    });
    $( "#minus" ).click( function(){
        $v = $( "#numValor" ).html();
        $valor = $v.substring( 3, $v.length );
        if( $valor > 0 )
            $valor--;
        $("#numValor").html( "R$ " + $valor );
        $( "#inputValor" ).attr( "value", $valor );
    });
    $( "#plus" ).click( function(){
        $v = $( "#numValor" ).html();
        $valor = $v.substring( 3, $v.length );
        if( $valor < 50 )
            $valor++;
        $( "#numValor" ).html( "R$ " + $valor );
        $( "#inputValor" ).attr( "value", $valor );
    });

    // Página de perfil //
    $( "#btAltNome" ).click( function(){
        $(this).checkButton( "#imgBtNome", "#inputNome" );
    });
    $( "#btAltCurso" ).click( function(){
        $(this).checkButton( "#imgBtCurso", "#inputCurso" );
    });

});