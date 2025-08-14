<?php

$filme = [
    'nome' => $_POST['nome'],
    'anoLancamento' => $_POST['ano'],
    'nota' => $_POST['nota'],
    'genero' => $_POST['genero'],
];

file_put_contents('filme.json',  json_encode($filme));
//print_r($filme); // ler as infos do filme

header('Location: /sucesso.php?filme=' . $filme['nome']); 
// requisição GET que redirecionamos o cliente para a página de sucesso
// ? indica que o que vem depois dele são parâmetros