<?php
// vamos definir o que todo filme deve ter em sua estrutura 

 class Filme { //criando a classe filme
    public string $nome; // o tipo do dado não é obrigatório mas é interessante ter
    public int $anoLancamento;
    public string $genero;
    public array $notas = []; // inicilizando o array de notas vazio pra fazer a média

    function avalia(float $nota): void{ 
        $this->notas[] = $nota; // adicionamos o valor da nota no array de notas
        // $this-> indica o objeto usado para executar a função
    }

    function media(): float{ // : float significa que vai reetornar um valor float
        $somaNotas = array_sum($this->notas); // somando as notas
        $quantidadeNotas = count($this->notas); // definindo um var pra a quantidade de notas

        return $somaNotas / $quantidadeNotas;
    }

};