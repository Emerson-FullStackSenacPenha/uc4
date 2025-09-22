<?php

require_once "bd_cla.php";

function qual_seu_cla($nome_ninja, $numero_ninja){

    echo "Ninja: ".$nome_ninja."<br>";

    if( $numero_ninja == 1 ){
        
        echo "Ninja do clã Uchiha!";
        
    }else if( $numero_ninja == 2 ){
        
        echo "Ninja do clã Hyuuga!";
        
    }else if( $numero_ninja == 3 ){

        echo "Ninja do clã Nara!";
        
    }else if( $numero_ninja == 4 ){

        echo "Ninja do cla Aburame!";
        
    }else{

        echo "Número invalido, o Hokage não sabe a qual clã você pertence!";

    }

    echo sobre_cla($numero_ninja);

}

/*
function sobre_cla($numero_ninja){

    if( $numero_ninja == 1 ){
        
        return "<p>Um clã bacana!</p>";

    }else if( $numero_ninja == 2 ){

        return "<p>Um clã bão!</p>";

    }else if( $numero_ninja == 3 ){

        return "<p>Um clã Zica!</p>";

    }else if( $numero_ninja == 4 ){

        return "<p>Um clã funhenhento!</p>";

    }

}
*/

// Chamando a função:
// qual_seu_cla('Ruberval', 3);

// Função jogado em bd_cla.php

?>













