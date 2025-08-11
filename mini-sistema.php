<?php

// =============================
// 1. Lista de filmes cadastrados
// =============================
$filmes = [
    [
        "nome" => "Star Wars - Uma Nova Esperança",
        "ano" => 1977,
        "genero" => "ficção científica",
        "prime" => true
    ],
    [
        "nome" => "Ásiaticos Podres de Rico",
        "ano" => 2018,
        "genero" => "romance",
        "prime" => true
    ],
    [
        "nome" => "As Branquelas",
        "ano" => 2004,
        "genero" => "comédia",
        "prime" => false
    ]
];

// =============================
// 2. Funções
// =============================

function exibirBoasVindas(): void {
    echo "🎬 Bem-vindo(a) ao Screen Match!\n";
    echo "--------------------------------\n";
}

function listarFilmes(array $filmes): void {
    echo "Lista de filmes disponíveis:\n";
    foreach ($filmes as $indice => $filme) {
        echo ($indice + 1) . ". " . $filme["nome"] . " ({$filme["ano"]})\n";
    }
}

function exibirInfoFilme(array $filme): void {
    echo "\n📌 Informações do filme:\n";
    echo "Nome: {$filme["nome"]}\n";
    echo "Ano: {$filme["ano"]}\n";
    echo "Gênero: {$filme["genero"]}\n";

    if ($filme["ano"] >= 2024) {
        echo "Status: Lançamento\n";
    } elseif ($filme["ano"] > 2020) {
        echo "Status: Novo\n";
    } else {
        echo "Status: Clássico\n";
    }

    echo $filme["prime"] ? "Disponível no Prime\n" : "Não disponível no Prime\n";
}

function calcularNotaMedia(array $notas): void {
    if (empty($notas)) {
        echo "Nenhuma nota foi informada.\n";
        return;
    }
    $media = array_sum($notas) / count($notas);
    echo "⭐ Nota média: " . number_format($media, 1) . "\n";
}

// =============================
// 3. Programa principal
// =============================
exibirBoasVindas();
listarFilmes($filmes);

// Entrada do usuário (escolher filme)
echo "\nDigite o número do filme que deseja ver: ";
$opcao = trim(fgets(STDIN));

if (!isset($filmes[$opcao - 1])) {
    echo "❌ Filme inválido!\n";
    exit;
}

$filmeEscolhido = $filmes[$opcao - 1];
exibirInfoFilme($filmeEscolhido);

// Entrada de notas
echo "\nDigite as notas do filme separadas por espaço: ";
$entradaNotas = trim(fgets(STDIN));
$notas = array_map("floatval", explode(" ", $entradaNotas));

calcularNotaMedia($notas);
