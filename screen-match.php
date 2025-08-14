<?php

// =============================
// 7. Funções
// =============================

function exibeMensagemLancamento ( int $ano): void { // não tem um retorno específico
    if ($ano >= 2024) {
        echo "Esse filme é um lançamento\n";
    } elseif ($ano > 2020 && $ano <= 2023) {
        echo "Esse filme ainda é novo\n";
    } else {
        echo "Esse filme não é um lançamento\n";
    }
}

function incluidoNoPlano ( bool $planoPrime,  int $anoLancamento): bool {  // função com retorno, retorna um booleano
    return $planoPrime || $anoLancamento < 2020;
}

echo "Bem-vindo(a) ao Screen Match!\n";

// =============================
// 1. Definição de variáveis
// =============================

$nomeFilme = "As Branquelas";
$anoLancamento = 2004;
$planoPrime = true;

// =============================
// 2. Comparadores lógicos
// =============================

// Operador OU (||) → basta uma condição ser verdadeira
// Operador E (&&)  → ambas condições precisam ser verdadeiras

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento); // função com retorno

// =============================
// 3. Saída de dados
// =============================

// Interpolação (mais simples de ler)
echo "Nome do filme: $nomeFilme\n";
echo "Ano de lançamento: $anoLancamento\n";

exibeMensagemLancamento($anoLancamento);

// =============================
// 4. Estruturas condicionais
// =============================

// if ($anoLancamento >= 2024) {
//         echo "Esse filme é um lançamento\n";
//     } elseif ($anoLancamento > 2020 && $anoLancamento <= 2023) {
//         echo "Esse filme ainda é novo\n";
//     } else {
//         echo "Esse filme não é um lançamento\n";
//     }

// =============================
// 5. Match Expression (PHP 8+)
// =============================

$genero = match ($nomeFilme) {
    "Star Wars - Uma Nova Esperança" => "ficção científica",
    "Ásiaticos Podres de Rico"      => "romance",
    "As Branquelas"                 => "comédia",
    default                         => "gênero desconhecido"
};

echo "O gênero do filme é: $genero\n";

// =============================
// 6. Cálculo de média de notas via linha de comando
// =============================

// $argc → quantidade de argumentos passados
// $argv → array de argumentos (o índice 0 é o nome do arquivo)

$somaNota = 0;
$quantidadeNotas = $argc - 1; // remove o próprio arquivo da contagem

// FOR → percorre todas as notas
for ($contador = 1; $contador < $argc; $contador++) {
    $somaNota += $argv[$contador];
}

// WHILE → alternativa que para ao digitar 0
$contador = 1;
while ($contador < $argc && $argv[$contador] != 0) {
    $somaNota += $argv[$contador];
    $contador++;
}

// Evita divisão por zero
if ($quantidadeNotas > 0) {
    $notaFilme = $somaNota / $quantidadeNotas;
    echo "A nota do filme é: $notaFilme\n";
} else {
    echo "Nenhuma nota foi informada.\n";
}

var_dump($argv); //exibe os valores e o tipo dessa variável 
