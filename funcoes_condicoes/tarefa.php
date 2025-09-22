<?php

function tarefa($nivel){

    if( $nivel == 1 ){
        
       return "<p>Tarefa simples, ajudar aldeões.</p>";

    }else if( $nivel == 2 ){

        return "<p>Baixo risco, escoltars curtas.</p>";

    }else if( $nivel == 3 ){

        return "<p>Risco médio, confronto com ninjas.</p>";

    }else if( $nivel == 4 ){

        return "<p>Alto risco, operações críticas.</p>";

    }else if( $nivel == 5 ){

        return "<p>Secretas, extremamente perigosas.</p>";

    }

}

?>