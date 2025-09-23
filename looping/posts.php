<?php

function apresentar_post($titulo, $subtitulo, $imagem, $paragrafo){

    echo "<div> 
    
        <h2> $titulo </h2>
        <h2> $subtitulo </h2>
    
        <img src='$imagem' alt='' />

        <p> $paragrafo </p>

    </div>";

}

?>