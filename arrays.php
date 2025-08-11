<?php

echo "Bem-vindo(a) ao Screen Match!\n";

// =============================
// 1. Arrays: estrutura de dados mais importante no PHP
// =============================

$notasParaOFilme = [ // array(lista) de notas
    10,
    8.7,
    7,
    9.3,
    8
];

$filme = [ // array associativo
    'nome' => 'Wicked',
    'ano' => 2024,
    'nota' => 10,
    'genero' => 'Musical'
];

var_dump($notasParaOFilme); //exibe os valores dessa variável e seu tipo
echo $filme['genero'];

// =============================
// 2. Como Manipular Arrays
// =============================

// $argc → quantidade de argumentos passados
// $argv → array de argumentos (o índice 0 é o nome do arquivo)

$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}
// ->
$somaNotas = 0;
for ($i=0; $i < count($notas); $i++) {
    $somaNotas += $notas[$i];
}
// ->
foreach ($notas as $nota) { //melhor maneira dentre as três
    $somaNotas += $notas[$i];
}
// ->
$notaFilme = array_sum($notas) / $quantidadeDeNotas; // função para fazer soma de array

var_dump($notas);