<?php

    // EPS = Entrada, Processamento e Saída 

    // Estruturas de dados -> Variaveis e Arrays (Indexado e Associativo)

    // Processamento

    // Estruturas funcionais e as Estruturas condicionais

    /*
    function ola_mundo(){

        echo "Ola mundo";

    }

    // Chamando a função
    ola_mundo();
    ola_mundo();
    ola_mundo();
    ola_mundo();
    */

    /*

    function apresentar_autor(){

        $autor = [

            'nome' => "Gustavo Gonçalves",
            'obras' => ["A IA", "O IA", "U IA"]

        ];

        echo "<h4> Autor: ". $autor['nome']."</h4>";
        echo "<h4> Obras: ". $autor['obras'][0].", ".$autor['obras'][1].",".$autor['obras'][2]."</h4>";

    }

    function apresentar_post($titulo, $subtitulo, $paragrafo){

        echo "<h1> $titulo </h1>";
        echo "<h3> $subtitulo </h3>";
        apresentar_autor();
        echo "<p> $paragrafo </p>";

    };

    apresentar_post("IA em programação", "Como a IA afeta as profissões do futuro", "A IA chegou nas nossas vidas...");
    
    function cadastrar_autor(){

        $info_autor = [

            'nome' => "Jonas",
            'idade' => 35,
            'altura' => 1.85,
            'cidade' => "São Paulo",

        ];

    }

    soma( $valor1, $valor2 );
        subtracao( $valor1, $valor2 );
        multiplicacao( $valor1, $valor2 );
        divisao( $valor1, $valor2 );


    function calculadora($operacao){

        $valor1 = 2;
        $valor2 = 4;

        // Se condição {}    
        if ( $operacao == "Soma" ){

            soma( $valor1, $valor2 );

        } else if ( $operacao == "Subtração" ){

            subtracao( $valor1, $valor2 );

        } else if ( $operacao == "Multiplicação" ){

            multiplicacao( $valor1, $valor2 );

        } else {

            divisao( $valor1, $valor2 );

        }

    }

    function soma($valor1, $valor2){

        echo "A soma é ".$valor1 + $valor2;
        
    }

    function subtracao($valor1, $valor2){

        echo "A subtração é ".$valor1 - $valor2;

    }

    function multiplicacao($valor1, $valor2){

        echo "A multiplicação é ".$valor1 * $valor2;

    }

    function divisao($valor1, $valor2){

        echo "A divisão é ".$valor1 / $valor2;

    }

    calculadora("Soma")

    */
    
    $pessoa = [

        'nome' => "Gustavo",
        'idade' => 20,
        'peso' => 50,
        'hobbies' => ["filmes", "jogos", "futebol", "charuto"]

    ];

    function recomendar_lazer($hobbie, $idade){

        //operação
        /*

        operação unária -> ! -> NOT
        operação binárioa -> $idade >= 18
        operação ternária -> condição ? v :f

        */



        if ( $idade >= 18 ){
        
            echo "------- Conteúdos Sensiveis";

            switch($hobbie){

                case "charuto":
                    echo "Lista de Charutos";
                    break;

                case "futebol":
                    echo "Lista de partidas de futebol";
                    break;

                default:    
                    echo "Lista genérica de conteúdo";
                    break;

            }

        }

        echo "------- Conteúdos Gerais";

        switch($hobbie){

                case "filmes":
                    echo "Lista de gilmes";
                    break;

                case "jogos":
                    echo "Lista de partidas de animes";
                    break;

                default:    
                    echo "Lista genérica de conteúdo";
                    break;

            }

    }

    recomendar_lazer($pessoa['hobbies'][0], $pessoa['idade']);






?>