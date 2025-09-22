<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Café</title>
</head>

<body>

    <Article>

        <?php

        $post = [

            'titulo_do_post' => "Post do Jonas",
            'subtitulo' => "O maior trouxa de Hogwarts",
            'foto_principal' => "<img src= 'image/image.jpg' alt='foto de Hogwarts'>",
            'redacao' => "Jonas era o maior trouxa que já pisou em Hogwarts — nem magia tinha, mas apareceu lá achando que era especial. Tentou usar uma varinha falsa comprada no Beco Diagonal. No fim, virou lenda... como o único expulso antes mesmo do Chapéu Seletor falar.",
            'Autor' => [

                'nome' => "Jonas",
                'idade' => 32,
                'especie' => "Trouxa",
                'vivo' => true,
                'altura' => 1.75,
                'hobbies' => ["Nadar", "Codar", "Jogar Bola", "Jogar Video-Game", "Flutuar"]

            ]

        ];

        echo "<h1>" . $post['titulo_do_post'] . "</h1>";
        echo "<h2>" . $post['subtitulo'] . "</h2>";
        echo $post['foto_principal'];
        echo "<p>".$post['redacao']."</p>";
        echo " <hr> ";
        echo "<h3>"."Sobre o Autor:"."</h3>";
        echo "<p><b>Nome:</b> ".$post['Autor']['nome']."</p>";
        echo "<p><b>Idade:</b> ".$post['Autor']['idade']."</p>";
        echo "<p><b>Espécie:</b> ".$post['Autor']['especie']."</p>";
        echo "<p><b>Vivo:</b> ".$post['Autor']['vivo']."</p>";
        echo "<p><b>Altura:</b> ".$post['Autor']['altura']."m</p>";
        echo " <hr> ";
        echo "<h4>"."Hobbies:"."</h4>";
        echo "<ul>
        
            <li>". $post['Autor']['hobbies'][0]. "</li>
            <li>". $post['Autor']['hobbies'][1]. "</li>
            <li>". $post['Autor']['hobbies'][2]. "</li>
            <li>". $post['Autor']['hobbies'][3]. "</li>
            <li>". $post['Autor']['hobbies'][4]. "</li>

        </ul>";

        ?>

    </Article>

</body>

</html>