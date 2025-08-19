<?php

require __DIR__ . "/src/Modelo/Filme.php";

echo "----Bem-Vinda ao ScreenMatch----\n";

$filme = new Filme(); // criando um objeto filme do tipo filme
$filme -> nome = "Wicked - Parte 1"; // instanciando o objeto filme
$filme -> anoLancamento = 2024;
$filme -> genero = "musical";

$filme ->avalia(10);
$filme ->avalia(9);
$filme ->avalia(8.8);
$filme ->avalia(9.5);
$filme ->avalia(8);

//var_dump($filme);
print_r($filme);
echo  "A média de notas do filme é: " . $filme->media(); //exibindo a média de notas