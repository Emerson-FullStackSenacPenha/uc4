<?php

require_once "database.php";
require_once "functions.php";

$ninjas;


foreach ($ninjas as $nomes => $dados) {
    
    exibirCard($nomes, $dados);

}


?>

