<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Suco</title>
</head>
<body>
    
<?php

$bruxo = [

    'nome' => "Herminoe Granger",
    'idade' => 17,
    'especie' => "humano",
    'vivo' => true,
    'altura' => 1.65,
    'hobbies' => ["Caminhar", "Ler", "Jogar Video-Game", "Nadar", "Dormir"],

];

echo " <p>Bruxo: $bruxo[nome]</p>";
echo " <p>Idade: $bruxo[idade]</p>";
echo " <p>Espécie: $bruxo[especie]</p>";
echo " <p>Vivo: $bruxo[vivo]</p>";
echo " <p>Altura: $bruxo[altura]</p>";
echo " <p>Hobbies: ";

echo $bruxo["hobbies"][0];
echo ", ";
echo $bruxo["hobbies"][1];
echo ", ";
echo $bruxo["hobbies"][2];
echo ", ";
echo $bruxo["hobbies"][3];
echo ", ";
echo $bruxo["hobbies"][4];


?>
<p>
    <a href="agua.php">Água</a>
    <a href="danoninho.php">Danoninho</a>
    <a href="cafe.php">Café</a>
</p>


</body>
</html>