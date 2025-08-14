<?php

$caminhoDoArquivo = __DIR__ . '/filme.json'; // definindo o caminho do arquivo que queremos importar
$conteudoArquivoFilme = file_get_contents($caminhoDoArquivo); // aqui pegamos o conteúo e lemos ele
$filme = json_decode($conteudoArquivoFilme, true); // o true serve para mostrar que quero um array associativo

var_dump($filme);