<?php

require_once "tarefa.php";

function rank($nome, $nivel){

    if( $nivel == 1 ){
        
        echo $nome.", você é do Rank D!"."<br>";

    }else if( $nivel == 2 ){

        echo $nome.", você é do Rank C!"."<br>";

    }else if( $nivel == 3 ){

        echo $nome.", você é do Rank B!"."<br>";

    }else if( $nivel == 4 ){

        echo $nome.", você é do Rank A!"."<br>";

    }else if( $nivel == 5 ){

        echo $nome.", você é do Rank S!"."<br>";

    } else {

        echo "Vixii, ta tudo errado mano!";
    }

    echo tarefa($nivel);

}

?>