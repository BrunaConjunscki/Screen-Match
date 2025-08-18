<?php

require __DIR__ . "/src/Modelo/Filme.php"; 
require __DIR__ . "/src/functions.php"; // pegando as funções do arquivo

echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun - Maverick";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";

//exibeMensagemLancamento($anoLancamento);

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia",
    default => "gênero desconhecido",
};

echo "O gênero do filme é: $genero\n";

$filme = criaFilme( 
    nome: "Thor: Ragnarok", 
    anoLancamento: 2021, 
    nota: 8, 
    genero: "super-herói"
); 

//print_r($filme); // ler as infos do filme
echo $filme->anoLancamento; // lendo o item do objeto

var_dump($notas);
sort($notas);
var_dump($notas);
$menorNota = min($notas);
var_dump($menorNota);

//var_dump($filme['nome']);
var_dump($filme->nome); // item do objeto
//$posicaoDoisPontos = strpos($filme['nome'], ':');
$posicaoDoisPontos = strpos($filme->nome, ':');
var_dump($posicaoDoisPontos);

//var_dump(substr($filme['nome'], 0, $posicaoDoisPontos));
var_dump(substr($filme->nome, 0, $posicaoDoisPontos));

//echo json_encode($filme); //pega uma variável/dado em php e transforma ela no formato JSON

//var_dump(json_encode('{"nome":"Thor: Ragnarok","ano":2021,"nota":7.8,"genero":"super-her\u00f3i"}', true)); // transforma o JSON em php

$filmeComoStringJson = json_encode($filme); // transformando em JSON

file_put_contents(__DIR__  . '/filme.json', $filmeComoStringJson); //colocar conteúdo dentro de um arquivo: -> 
//definimos o caminho do aruivo e seu nome, juntamente com o conteúdo que queremos nesse arquivo