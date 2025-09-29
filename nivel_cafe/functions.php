<?php

require_once "database.php";

function rankMissao($nivel){

    if( $nivel == 1 ){

        return " Você é do Rank D!"."<br>";

    }else if( $nivel == 2 ){

        return " Você é do Rank C!"."<br>";

    }else if( $nivel == 3 ){

        return " Você é do Rank B!"."<br>";

    }else if( $nivel == 4 ){

        return " Você é do Rank A!"."<br>";

    }else if( $nivel == 5 ){

        return " Você é do Rank S!"."<br>";

    } else {

        return " Vixi, ta tudo errado mano!";
    }

};



function exibirCard($nome, $ninja){

    echo "<h3>".$nome."</h3>";
    echo "<h3>".$ninja["cla"]."</h3>";
    echo "<h3>".$ninja["nivel"]."</h3>";
    
    $ninhos = $ninja['filhos']? "Tem filhos" : "Não filhos";
    echo "<h3>".$ninhos."</h3>";
    
    echo "<h3>Missões</h3>";
    echo "<ul>";
    foreach ($ninja["missoes"] as $missoes) {
                 
        echo "<li>".$missoes."</li>";

    }
    echo "</ul>";

    echo "<hr>";

};



?>