<?php

$banda = [

    'vocal' => "Jerms",
    'guitarra' => "Marcelo",
    'baixo' => "Paiva",
    'batera' => "Léo"

];


$guitarra = [

    'Jerms', 'Marcelo'

];



$contador = 0;

while ( $contador < count($guitarra)){

    echo $guitarra[$contador]."<br><hr>";
    $contador++;

};


for ($contador = 0; $contador < count($guitarra); $contador++){

    echo "<b>".$guitarra[$contador]."</b><br><hr>";

};

?>