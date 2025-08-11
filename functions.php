<?php

// =============================
// 1. Funções do programa
// =============================

// Exibe mensagem de boas-vindas
function exibirBoasVindas(): void {
    echo "Bem-vindo(a) ao Screen Match!\n";
}

// Retorna o gênero do filme usando match
function obterGenero(string $nomeFilme): string {
    return match ($nomeFilme) {
        "Star Wars - Uma Nova Esperança" => "ficção científica",
        "Ásiaticos Podres de Rico"      => "romance",
        "As Branquelas"                 => "comédia",
        default                         => "gênero desconhecido"
    };
}

// Exibe informações sobre o filme
function exibirInfoFilme(string $nomeFilme, int $anoLancamento, bool $planoPrime): void {
    echo "Nome do filme: $nomeFilme\n";
    echo "Ano de lançamento: $anoLancamento\n";

    // Condicional de lançamento
    if ($anoLancamento >= 2024) {
        echo "Esse filme é um lançamento\n";
    } elseif ($anoLancamento > 2020 && $anoLancamento <= 2023) {
        echo "Esse filme ainda é novo\n";
    } else {
        echo "Esse filme não é um lançamento\n";
    }

    // Plano
    $incluidoNoPlano = $planoPrime || $anoLancamento < 2020;
    echo $incluidoNoPlano ? "Disponível no plano Prime\n" : "Não está no plano Prime\n";

    // Gênero
    $genero = obterGenero($nomeFilme);
    echo "O gênero do filme é: $genero\n";
}

// Calcula a média de notas recebidas por argumentos de linha de comando
function calcularNotaMedia(array $argv): void {
    $argc = count($argv);
    $quantidadeNotas = $argc - 1;

    if ($quantidadeNotas <= 0) {
        echo "Nenhuma nota foi informada.\n";
        return;
    }

    $somaNota = 0;
    for ($i = 1; $i < $argc; $i++) {
        $somaNota += $argv[$i];
    }

    $notaMedia = $somaNota / $quantidadeNotas;
    echo "A nota do filme é: $notaMedia\n";
}

// =============================
// 2. Programa principal
// =============================

exibirBoasVindas();

$nomeFilme = "As Branquelas";
$anoLancamento = 1977;
$planoPrime = true;

exibirInfoFilme($nomeFilme, $anoLancamento, $planoPrime);
calcularNotaMedia($argv);
