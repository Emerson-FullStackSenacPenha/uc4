<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução ao PHP</title>
</head>
<body>
    
<?php

/*
Comando para saida de dados

echo "texto"; (PHP)
print "texto"; (Python)
*/

// Estruturas de dados - ENTRADA

// Dados -> Informações -> Conhecimento -> Inteligência

// 22 - anos - é necessário para acessar

//$nome_da_variavel = valor da variavel

// Tipos de valores
    $nome = "Gustavo"; // String (Dado só para exibir)
    $idade = 18; // Int (Número inteiro)
    $altura = 1.80; // Float (Número quebrado)
$vivo = true; // Boolean (Verdadeiro ou Falso)

// Onde armazenar os dados

// Lista (Array indexado) Indice para a posição
    $hobbies = ["Caminhar", "Filmes", "Vide-Gameas"];

// Lista (Array associativo) Associar um nome a posição
    $pessoa = [

        'nome' => "Gustavo",
        'idade' => 18,
        'altura' => 1.80,
        'vivo' => true,
        'hobbies' => ["Caminhar", "Filmes", "Vide-Games"]

    ];

    // Interpolação = concautenar
    
    echo "<h1> Estrutura de dados simples e Array indexado <h1>"; 
    echo "<h2> Nome:: $nome <h2>"; 
    echo "<h2> Idade:: $idade <h2>"; 
    echo "<h2> Altura:: $altura <h2>"; 
    echo "<h2> AEstá vivo:: $vivo <h2>"; 
    echo "<h2> Hobbie principal:: $hobbies[0] <h2>"; 

    echo "<h1> Array Associativo </h1>";
    echo $pessoa['nome'];
    echo $pessoa['idade'];
    echo $pessoa['altura'];
    echo $pessoa['vivo'];
    echo $pessoa['hobbies'][0];

?>

</body>
</html>