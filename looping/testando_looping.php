<?php

// Array associativo
$bandas = [

    'autoral' => "The Licios",
    'cover' => "No escuro"

];

// Array multidimensional
$theLicio = [

    'vocal' => "Jerms",
    'guitarra' => ["Jerms", "Marcelo"],
    'baixo' => "Paiva",
    'batera' => "Léo"

];

// Array indexado
$integrantes = [

    'Jerms', 'Marcelo', 'Paiva', 'Léo'

];

echo $bandas['cover']."<br><hr>";
echo $theLicio['guitarra'][1]."<br><hr>";
echo $integrantes[3]."<br><hr>";

$contador = 0;

for( $contador = 0; $contador < count($integrantes); $contador++ ){

    echo $integrantes[$contador]." ";

}

?>